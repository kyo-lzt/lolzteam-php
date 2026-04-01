<?php

declare(strict_types=1);

/**
 * Response model generation: extracts response schemas and emits PHP model classes.
 */

require_once __DIR__ . '/deref.php';
require_once __DIR__ . '/naming.php';
require_once __DIR__ . '/types.php';

// ─── Component Schema Utilities ──────────────────────────────────────────────

/**
 * Convert a component schema name to a PHP class name.
 * E.g. "Resp_SystemInfo" -> "RespSystemInfo", "ItemFromListModel" -> "ItemFromListModel"
 */
function componentSchemaClassName(string $schemaName): string
{
    // Remove underscores and capitalize each segment
    $parts = explode('_', $schemaName);
    return implode('', array_map(fn(string $p) => ucfirst($p), $parts));
}

/**
 * Collect model classes for all component schemas that have object properties.
 *
 * @param array<string, array<string, mixed>> $componentSchemas  name -> resolved schema
 * @param array<string, array<string, mixed>> $componentSchemasMarked  name -> schema with __component_ref markers
 * @param array<string, mixed> $spec  Full resolved spec
 * @return list<array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>}>
 */
function collectComponentModels(array $componentSchemas, array $componentSchemasMarked, array $spec): array
{
    $allModels = [];

    foreach ($componentSchemas as $name => $schema) {
        $className = componentSchemaClassName($name);
        // Use marked schema if available for component ref detection
        $markedSchema = $componentSchemasMarked[$name] ?? $schema;
        $models = collectModels($markedSchema, $spec, $className, $componentSchemas);
        foreach ($models as $model) {
            $allModels[] = $model;
        }
    }

    return $allModels;
}

// ─── Response Schema Extraction ─────────────────────────────────────────────

/**
 * Extract the full response schema (resolved) for an operation.
 *
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 * @return array<string, mixed>|null
 */
function extractResponseSchema(array $operation, array $spec): ?array
{
    $responses = $operation['responses'] ?? null;
    if (!is_array($responses)) {
        return null;
    }

    $rawSuccess = $responses['200'] ?? $responses['201'] ?? null;
    if ($rawSuccess === null) {
        return null;
    }

    $success = derefShallow($rawSuccess, $spec);
    if (!is_array($success)) {
        return null;
    }

    $content = $success['content'] ?? null;
    if (!is_array($content)) {
        return null;
    }

    $jsonContent = $content['application/json'] ?? null;
    if (!is_array($jsonContent)) {
        return null;
    }

    $rawSchema = $jsonContent['schema'] ?? null;
    if (!is_array($rawSchema)) {
        return null;
    }

    return $rawSchema;
}

// ─── Model Class Collection ─────────────────────────────────────────────────

/**
 * Collect all model classes needed for a response schema.
 * Returns a flat list of model definitions, depth-first.
 *
 * @param array<string, mixed> $schema  Schema (may contain __component_ref markers)
 * @param array<string, mixed> $spec    Full spec (for ref resolution)
 * @param string $className             Class name for this schema
 * @param array<string, array<string, mixed>> $componentSchemas  Known component schemas
 * @return list<array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>}>
 */
function collectModels(array $schema, array $spec, string $className, array $componentSchemas = []): array
{
    $models = [];
    $properties = [];

    // Resolve the schema (strip __component_ref for resolution)
    $resolved = resolveSchemaFully($schema, $spec);
    if ($resolved === null) {
        return [];
    }

    $props = $resolved['properties'] ?? null;
    if (!is_array($props) || count($props) === 0) {
        return [];
    }

    // Schemas with all-numeric property keys are dynamic maps, not structured objects
    if (hasAllNumericKeys($resolved)) {
        return [];
    }

    // Use the schema with __component_ref markers for property traversal
    $markedProps = $schema['properties'] ?? $props;
    if (!is_array($markedProps)) {
        $markedProps = $props;
    }

    $required = [];
    if (isset($resolved['required']) && is_array($resolved['required'])) {
        $required = array_flip($resolved['required']);
    }

    foreach ($props as $propName => $propSchema) {
        if (!is_array($propSchema)) {
            $properties[] = buildPropertyDef((string) $propName, null, isset($required[$propName]), $spec, $className, $models, $componentSchemas, null);
            continue;
        }

        $propResolved = resolveSchemaFully($propSchema, $spec);
        $isRequired = isset($required[$propName]);

        // Check if the original (marked) schema has a component ref
        $markedProp = $markedProps[$propName] ?? null;
        $componentRef = is_array($markedProp) ? ($markedProp['__component_ref'] ?? null) : null;

        // For arrays, check items for component ref
        $itemsComponentRef = null;
        if (is_array($markedProp) && ($markedProp['type'] ?? null) === 'array') {
            $markedItems = $markedProp['items'] ?? null;
            if (is_array($markedItems)) {
                $itemsComponentRef = $markedItems['__component_ref'] ?? null;
            }
        }

        $properties[] = buildPropertyDef(
            (string) $propName,
            $propResolved,
            $isRequired,
            $spec,
            $className,
            $models,
            $componentSchemas,
            is_string($componentRef) ? $componentRef : (is_string($itemsComponentRef) ? $itemsComponentRef : null),
            is_string($itemsComponentRef),
        );
    }

    // Add current model at the beginning (parent first)
    array_unshift($models, [
        'className' => $className,
        'properties' => $properties,
    ]);

    return $models;
}

/**
 * Resolve a schema fully, handling $ref, allOf, etc.
 * Strips __component_ref markers during resolution.
 *
 * @param array<string, mixed> $schema
 * @param array<string, mixed> $spec
 * @return array<string, mixed>|null
 */
function resolveSchemaFully(array $schema, array $spec): ?array
{
    // Handle $ref
    if (isset($schema['$ref'])) {
        $resolved = derefShallow($schema, $spec);
        if (!is_array($resolved)) {
            return null;
        }
        return resolveSchemaFully($resolved, $spec);
    }

    // Handle allOf — merge all properties
    if (isset($schema['allOf']) && is_array($schema['allOf'])) {
        $merged = ['type' => 'object', 'properties' => [], 'required' => []];
        foreach ($schema['allOf'] as $sub) {
            if (!is_array($sub)) {
                continue;
            }
            $resolved = resolveSchemaFully($sub, $spec);
            if (!is_array($resolved)) {
                continue;
            }
            if (isset($resolved['properties']) && is_array($resolved['properties'])) {
                $merged['properties'] = array_merge($merged['properties'], $resolved['properties']);
            }
            if (isset($resolved['required']) && is_array($resolved['required'])) {
                $merged['required'] = array_merge($merged['required'], $resolved['required']);
            }
        }
        // Preserve __component_ref if present
        if (isset($schema['__component_ref'])) {
            $merged['__component_ref'] = $schema['__component_ref'];
        }
        return $merged;
    }

    return $schema;
}

/**
 * Build a property definition, creating nested models as needed.
 *
 * @param array<string, mixed>|null $schema
 * @param array<string, mixed> $spec
 * @param list<array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>}> &$models
 * @param array<string, array<string, mixed>> $componentSchemas Known component schemas
 * @param string|null $componentRef Component schema name if this property references one
 * @param bool $isItemsRef True if the component ref is on array items (not the property itself)
 * @return array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}
 */
function buildPropertyDef(
    string $propName,
    ?array $schema,
    bool $isRequired,
    array $spec,
    string $parentClassName,
    array &$models,
    array $componentSchemas = [],
    ?string $componentRef = null,
    bool $isItemsRef = false,
): array {
    $isNullable = !$isRequired;

    // Handle component schema reference (non-array property)
    if ($componentRef !== null && !$isItemsRef && isset($componentSchemas[$componentRef])) {
        $refClassName = componentSchemaClassName($componentRef);
        return [
            'name' => $propName,
            'phpType' => $refClassName,
            'docType' => $refClassName,
            'isArray' => false,
            'isNullable' => $isNullable,
            'nestedModel' => $refClassName,
        ];
    }

    // Handle component schema reference on array items
    if ($componentRef !== null && $isItemsRef && isset($componentSchemas[$componentRef])) {
        $refClassName = componentSchemaClassName($componentRef);
        return [
            'name' => $propName,
            'phpType' => 'array',
            'docType' => "list<{$refClassName}>",
            'isArray' => true,
            'isNullable' => $isNullable,
            'nestedModel' => $refClassName,
        ];
    }

    if ($schema === null || $schema === []) {
        return [
            'name' => $propName,
            'phpType' => 'mixed',
            'docType' => 'mixed',
            'isArray' => false,
            'isNullable' => $isNullable,
            'nestedModel' => null,
        ];
    }

    // Handle oneOf/anyOf — use mixed
    if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
        return [
            'name' => $propName,
            'phpType' => 'mixed',
            'docType' => schemaToPhpType($schema, $spec),
            'isArray' => false,
            'isNullable' => $isNullable,
            'nestedModel' => null,
        ];
    }

    // Handle multi-type
    if (isset($schema['type']) && is_array($schema['type'])) {
        $types = $schema['type'];
        $hasNull = in_array('null', $types, true);
        $nonNull = array_filter($types, fn(mixed $t) => is_string($t) && $t !== 'null');
        $mapped = array_map(fn(string $t) => primitivePhpType($t), array_values($nonNull));
        $phpType = implode('|', $mapped);
        if ($hasNull) {
            $isNullable = true;
        }
        return [
            'name' => $propName,
            'phpType' => $phpType,
            'docType' => $phpType . ($isNullable ? '|null' : ''),
            'isArray' => false,
            'isNullable' => $isNullable,
            'nestedModel' => null,
        ];
    }

    $type = $schema['type'] ?? null;

    // Enum — use string
    if (isset($schema['enum']) && is_array($schema['enum'])) {
        return [
            'name' => $propName,
            'phpType' => 'string|int',
            'docType' => schemaToPhpType($schema, $spec),
            'isArray' => false,
            'isNullable' => $isNullable,
            'nestedModel' => null,
        ];
    }

    // Array type
    if ($type === 'array') {
        $items = $schema['items'] ?? null;
        if (is_array($items)) {
            $itemResolved = resolveSchemaFully($items, $spec);
            // If items are objects, create nested model (skip dynamic maps with numeric keys)
            if ($itemResolved !== null && hasObjectProperties($itemResolved) && !hasAllNumericKeys($itemResolved)) {
                $nestedName = $parentClassName . propertyToClassName($propName);
                $nestedModels = collectModels($itemResolved, $spec, $nestedName, $componentSchemas);
                foreach ($nestedModels as $nm) {
                    $models[] = $nm;
                }
                return [
                    'name' => $propName,
                    'phpType' => 'array',
                    'docType' => "list<{$nestedName}>",
                    'isArray' => true,
                    'isNullable' => $isNullable,
                    'nestedModel' => $nestedName,
                ];
            }
            // Primitive array
            $itemType = schemaToPhpType($items, $spec);
            return [
                'name' => $propName,
                'phpType' => 'array',
                'docType' => "list<{$itemType}>",
                'isArray' => true,
                'isNullable' => $isNullable,
                'nestedModel' => null,
            ];
        }
        return [
            'name' => $propName,
            'phpType' => 'array',
            'docType' => 'list<mixed>',
            'isArray' => true,
            'isNullable' => $isNullable,
            'nestedModel' => null,
        ];
    }

    // Object with properties -> nested model (unless all keys are numeric = dynamic map)
    if ($type === 'object' || hasObjectProperties($schema)) {
        if (hasObjectProperties($schema) && !hasAllNumericKeys($schema)) {
            $nestedName = $parentClassName . propertyToClassName($propName);
            $nestedModels = collectModels($schema, $spec, $nestedName, $componentSchemas);
            foreach ($nestedModels as $nm) {
                $models[] = $nm;
            }
            return [
                'name' => $propName,
                'phpType' => $nestedName,
                'docType' => $nestedName,
                'isArray' => false,
                'isNullable' => $isNullable,
                'nestedModel' => $nestedName,
            ];
        }

        // Object without properties (additionalProperties or generic)
        $additionalProps = $schema['additionalProperties'] ?? null;
        if (is_array($additionalProps)) {
            $valType = schemaToPhpType($additionalProps, $spec);
            return [
                'name' => $propName,
                'phpType' => 'array',
                'docType' => "array<string, {$valType}>",
                'isArray' => false,
                'isNullable' => $isNullable,
                'nestedModel' => null,
            ];
        }
        return [
            'name' => $propName,
            'phpType' => 'array',
            'docType' => 'array<string, mixed>',
            'isArray' => false,
            'isNullable' => $isNullable,
            'nestedModel' => null,
        ];
    }

    // Primitive types
    $phpType = primitivePhpType(is_string($type) ? $type : 'mixed');
    return [
        'name' => $propName,
        'phpType' => $phpType,
        'docType' => $phpType,
        'isArray' => false,
        'isNullable' => $isNullable,
        'nestedModel' => null,
    ];
}

/**
 * Check if a schema has object properties.
 *
 * @param array<string, mixed> $schema
 */
function hasObjectProperties(array $schema): bool
{
    return isset($schema['properties']) && is_array($schema['properties']) && count($schema['properties']) > 0;
}


/**
 * Convert a property name to a class name segment.
 * E.g. "system_info" -> "SystemInfo", "threads" -> "Threads"
 */
function propertyToClassName(string $prop): string
{
    // Replace any non-alphanumeric characters with underscores for splitting
    $prop = (string) preg_replace('/[^a-zA-Z0-9_]/', '_', $prop);
    $parts = explode('_', $prop);
    $result = implode('', array_map(fn(string $p) => ucfirst($p), $parts));
    // Prefix class name segments starting with a digit
    if ($result !== '' && ctype_digit($result[0])) {
        $result = 'Data' . $result;
    }
    return $result;
}

/**
 * Convert a property name to a PHP property name (camelCase).
 * Handles names with hyphens or invalid characters.
 * E.g. "sub-categories" -> "subCategories", "thread_id" -> "threadId"
 */
function propertyToPhpName(string $prop): string
{
    // Replace any characters invalid in PHP identifiers with underscores
    $prop = (string) preg_replace('/[^a-zA-Z0-9_]/', '_', $prop);

    // Prefix names starting with a digit (invalid PHP identifiers)
    if ($prop !== '' && ctype_digit($prop[0])) {
        $prop = '_' . $prop;
    }

    return $prop;
}

// ─── Model Emission ─────────────────────────────────────────────────────────

/**
 * Build the response model class name from operationId.
 * E.g. "Threads.List" -> "ThreadsListResponse"
 */
function responseModelClassName(string $operationId): string
{
    $parts = explode('.', $operationId);
    $name = implode('', array_map(fn(string $p) => ucfirst($p), $parts));
    return $name . 'Response';
}

/**
 * Emit all model classes for a single response.
 *
 * @param list<array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>}> $models
 */
function emitModelClasses(array $models, string $namespace): string
{
    $output = '';

    foreach ($models as $model) {
        $output .= emitSingleModelClass($model, $namespace);
        $output .= "\n";
    }

    return $output;
}

/**
 * Emit a single model class.
 *
 * @param array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>} $model
 */
function emitSingleModelClass(array $model, string $namespace): string
{
    $lines = [];
    $className = $model['className'];
    $properties = $model['properties'];

    $lines[] = "final class {$className}";
    $lines[] = '{';

    // Constructor with readonly properties
    $lines[] = '    public function __construct(';
    $ctorParams = [];
    foreach ($properties as $prop) {
        $phpName = propertyToPhpName($prop['name']);
        $typeHint = resolveConstructorType($prop);
        $docType = $prop['docType'];

        // Build nullable type hint: use ?Type for simple types, Type|null for unions
        if ($prop['isNullable']) {
            if ($typeHint === 'mixed') {
                // mixed already includes null in PHP 8
            } elseif (str_contains($typeHint, '|')) {
                $typeHint = $typeHint . '|null';
            } else {
                $typeHint = '?' . $typeHint;
            }
        }

        // For nested models and typed arrays, add PHPDoc
        if ($prop['nestedModel'] !== null || ($prop['isArray'] && $prop['docType'] !== 'list<mixed>')) {
            $ctorParams[] = "        /** @var {$docType}" . ($prop['isNullable'] ? '|null' : '') . " */\n        public readonly {$typeHint} \${$phpName},";
        } else {
            $ctorParams[] = "        public readonly {$typeHint} \${$phpName},";
        }
    }
    $lines[] = implode("\n", $ctorParams);
    $lines[] = '    ) {';
    $lines[] = '    }';

    // fromArray factory method
    $lines[] = '';
    $lines[] = '    /**';
    $lines[] = '     * @param array<string, mixed> $data';
    $lines[] = '     */';
    $lines[] = "    public static function fromArray(array \$data): self";
    $lines[] = '    {';
    $lines[] = '        return new self(';

    foreach ($properties as $prop) {
        $phpName = propertyToPhpName($prop['name']);
        $key = $prop['name'];
        $lines[] = '            ' . emitFromArrayArg($prop, $key, $namespace) . ',';
    }

    $lines[] = '        );';
    $lines[] = '    }';
    $lines[] = '}';

    return implode("\n", $lines) . "\n";
}

/**
 * Resolve the constructor type hint for a property.
 *
 * @param array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null} $prop
 */
function resolveConstructorType(array $prop): string
{
    // For nested models that are not arrays, use the model class name
    if ($prop['nestedModel'] !== null && !$prop['isArray']) {
        return $prop['nestedModel'];
    }

    // For arrays (both typed and untyped)
    if ($prop['isArray'] || $prop['phpType'] === 'array') {
        return 'array';
    }

    // For union types with pipes, check if valid PHP union
    if (str_contains($prop['phpType'], '|')) {
        // Filter to valid PHP type hints
        $parts = explode('|', $prop['phpType']);
        $validTypes = ['string', 'int', 'float', 'bool', 'array', 'null', 'mixed'];
        $filtered = array_filter($parts, fn(string $t) => in_array($t, $validTypes, true));
        if (count($filtered) === count($parts)) {
            return $prop['phpType'];
        }
        return 'mixed';
    }

    return $prop['phpType'];
}

/**
 * Emit a fromArray argument expression for a property.
 *
 * @param array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null} $prop
 */
function emitFromArrayArg(array $prop, string $key, string $namespace): string
{
    $access = "\$data['{$key}']";
    $nullAccess = "\$data['{$key}'] ?? null";

    // Nested model (not array) — always guard with isset for safety
    if ($prop['nestedModel'] !== null && !$prop['isArray']) {
        if ($prop['isNullable']) {
            return "isset({$access}) && is_array({$access}) ? {$prop['nestedModel']}::fromArray({$access}) : null";
        }
        return "isset({$access}) && is_array({$access}) ? {$prop['nestedModel']}::fromArray({$access}) : {$prop['nestedModel']}::fromArray([])";
    }

    // Array of nested models — always guard with isset, filter non-array items
    if ($prop['isArray'] && $prop['nestedModel'] !== null) {
        if ($prop['isNullable']) {
            return "isset({$access}) && is_array({$access}) ? array_values(array_map(static fn(array \$item): {$prop['nestedModel']} => {$prop['nestedModel']}::fromArray(\$item), array_filter({$access}, 'is_array'))) : null";
        }
        return "isset({$access}) && is_array({$access}) ? array_values(array_map(static fn(array \$item): {$prop['nestedModel']} => {$prop['nestedModel']}::fromArray(\$item), array_filter({$access}, 'is_array'))) : []";
    }

    // Nullable primitive fields: coerce to the expected type or null on mismatch
    if ($prop['isNullable']) {
        $phpType = $prop['phpType'];
        return match ($phpType) {
            'int' => "isset({$access}) && is_scalar({$access}) ? (int) {$access} : null",
            'float' => "isset({$access}) && is_scalar({$access}) ? (float) {$access} : null",
            'string' => "isset({$access}) ? (is_scalar({$access}) ? (string) {$access} : (is_array({$access}) ? json_encode({$access}, JSON_UNESCAPED_UNICODE) : null)) : null",
            'bool' => "isset({$access}) && is_scalar({$access}) ? (bool) {$access} : null",
            'array' => "isset({$access}) && is_array({$access}) ? {$access} : null",
            default => $nullAccess,
        };
    }

    // Provide zero-value defaults for required primitive types, with safe coercion
    $phpType = $prop['phpType'];
    $val = "({$nullAccess})";
    return match ($phpType) {
        'int' => "(is_scalar({$val}) ? (int) {$val} : 0)",
        'float' => "(is_scalar({$val}) ? (float) {$val} : 0.0)",
        'string' => "(is_scalar({$val}) ? (string) {$val} : (is_array({$val}) ? json_encode({$val}, JSON_UNESCAPED_UNICODE) : ''))",
        'bool' => "(is_scalar({$val}) ? (bool) {$val} : false)",
        'array' => "{$access} ?? []",
        default => $nullAccess,
    };
}

// ─── Full Models File Emission ──────────────────────────────────────────────

/**
 * Emit a complete models file with all response model classes.
 *
 * @param list<array{operationId: string, models: list<array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>}>}> $allModels
 * @param list<array{className: string, properties: list<array{name: string, phpType: string, docType: string, isArray: bool, isNullable: bool, nestedModel: string|null}>}> $componentModels
 */
function emitModelsFile(array $allModels, string $namespace, array $componentModels = []): string
{
    $lines = [];

    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = '// Auto-generated. Do not edit manually.';
    $lines[] = '';
    $lines[] = 'declare(strict_types=1);';
    $lines[] = '';
    $lines[] = "namespace {$namespace};";
    $lines[] = '';

    // Emit component schema models first (shared, deduplicated)
    /** @var array<string, bool> $emittedClasses */
    $emittedClasses = [];
    if (count($componentModels) > 0) {
        $lines[] = '// ─── Component Schema Models ────────────────────────────────────────────────';
        $lines[] = '';
        foreach ($componentModels as $model) {
            if (isset($emittedClasses[$model['className']])) {
                continue;
            }
            $emittedClasses[$model['className']] = true;
            $lines[] = emitSingleModelClass($model, $namespace);
        }
        $lines[] = '// ─── Response Models ────────────────────────────────────────────────────────';
        $lines[] = '';
    }

    foreach ($allModels as $entry) {
        foreach ($entry['models'] as $model) {
            // Skip if already emitted as component schema model
            if (isset($emittedClasses[$model['className']])) {
                continue;
            }
            $emittedClasses[$model['className']] = true;
            $lines[] = emitSingleModelClass($model, $namespace);
        }
    }

    return implode("\n", $lines) . "\n";
}
