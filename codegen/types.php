<?php

declare(strict_types=1);

/**
 * OpenAPI schema to PHP type mapping.
 */

require_once __DIR__ . '/deref.php';

/**
 * Map a single OpenAPI type string to a PHP type.
 */
function primitivePhpType(string $type): string
{
    return match ($type) {
        'string' => 'string',
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'null' => 'null',
        default => 'mixed',
    };
}

/**
 * Convert an OpenAPI schema to a PHP type string (for PHPDoc annotations).
 *
 * @param array<string, mixed>|null $schema
 * @param array<string, mixed> $spec
 */
function schemaToPhpType(?array $schema, array $spec, int $indent = 0): string
{
    if ($schema === null || $schema === []) {
        return 'mixed';
    }

    // $ref -> resolve and convert
    if (isset($schema['$ref'])) {
        $resolved = derefShallow($schema, $spec);
        if (!is_array($resolved)) {
            return 'mixed';
        }
        return schemaToPhpType($resolved, $spec, $indent);
    }

    // enum -> string with values noted
    if (isset($schema['enum']) && is_array($schema['enum']) && count($schema['enum']) > 0) {
        $values = array_filter($schema['enum'], fn(mixed $v) => is_string($v) || is_int($v) || is_float($v));
        if (count($values) > 0) {
            $literals = array_map(function (mixed $v): string {
                if (is_string($v)) {
                    return "'" . str_replace("'", "\\'", $v) . "'";
                }
                return (string) $v;
            }, $values);
            return implode('|', $literals);
        }
    }

    // oneOf / anyOf -> union
    if (isset($schema['oneOf']) && is_array($schema['oneOf']) && count($schema['oneOf']) > 0) {
        $types = array_map(fn(mixed $s) => is_array($s) ? schemaToPhpType($s, $spec, $indent) : 'mixed', $schema['oneOf']);
        return implode('|', array_unique($types));
    }
    if (isset($schema['anyOf']) && is_array($schema['anyOf']) && count($schema['anyOf']) > 0) {
        $types = array_map(fn(mixed $s) => is_array($s) ? schemaToPhpType($s, $spec, $indent) : 'mixed', $schema['anyOf']);
        return implode('|', array_unique($types));
    }

    // allOf -> intersection (use first meaningful type for PHP)
    if (isset($schema['allOf']) && is_array($schema['allOf']) && count($schema['allOf']) > 0) {
        // Merge all properties from allOf schemas
        $merged = ['type' => 'object', 'properties' => [], 'required' => []];
        foreach ($schema['allOf'] as $sub) {
            if (!is_array($sub)) {
                continue;
            }
            $resolved = isRefObject($sub) ? derefShallow($sub, $spec) : $sub;
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
        if (count($merged['properties']) > 0) {
            return schemaToPhpType($merged, $spec, $indent);
        }
        // Fallback: use first schema type
        $first = $schema['allOf'][0] ?? null;
        return is_array($first) ? schemaToPhpType($first, $spec, $indent) : 'mixed';
    }

    // Multi-type array: type: ['string', 'integer']
    if (isset($schema['type']) && is_array($schema['type'])) {
        $types = $schema['type'];
        $hasNull = in_array('null', $types, true);
        $nonNull = array_filter($types, fn(mixed $t) => is_string($t) && $t !== 'null');
        $mapped = array_map(fn(string $t) => primitivePhpType($t), array_values($nonNull));
        $result = implode('|', $mapped);
        return $hasNull ? $result . '|null' : $result;
    }

    $type = $schema['type'] ?? null;

    if ($type === 'array') {
        $items = $schema['items'] ?? null;
        if (is_array($items)) {
            $itemType = schemaToPhpType($items, $spec, $indent);
            return "list<{$itemType}>";
        }
        return 'list<mixed>';
    }

    if ($type === 'object' || isset($schema['properties'])) {
        return objectPhpType($schema, $spec, $indent);
    }

    if (is_string($type)) {
        return primitivePhpType($type);
    }

    return 'mixed';
}

/**
 * Convert an object schema to a PHP array shape string for PHPDoc.
 *
 * @param array<string, mixed> $schema
 * @param array<string, mixed> $spec
 */
function objectPhpType(array $schema, array $spec, int $indent): string
{
    $props = $schema['properties'] ?? null;
    if (!is_array($props) || count($props) === 0) {
        $additionalProps = $schema['additionalProperties'] ?? null;
        if (is_array($additionalProps)) {
            $valType = schemaToPhpType($additionalProps, $spec, $indent);
            return "array<string, {$valType}>";
        }
        return 'array<string, mixed>';
    }

    $required = [];
    if (isset($schema['required']) && is_array($schema['required'])) {
        $required = array_flip($schema['required']);
    }

    $pad = str_repeat('    ', $indent + 1);
    $closePad = str_repeat('    ', $indent);
    $lines = [];

    foreach ($props as $name => $propSchema) {
        $optional = isset($required[$name]) ? '' : '?';
        $propType = is_array($propSchema) ? schemaToPhpType($propSchema, $spec, $indent + 1) : 'mixed';
        $lines[] = "{$pad}{$name}{$optional}: {$propType}";
    }

    return "array{\n" . implode(",\n", $lines) . ",\n{$closePad}}";
}

/**
 * Generate a simple PHP type hint (for method signatures).
 * Complex types collapse to 'array' or 'mixed'.
 *
 * @param array<string, mixed>|null $schema
 * @param array<string, mixed> $spec
 */
function schemaToPhpHint(?array $schema, array $spec): string
{
    if ($schema === null || $schema === []) {
        return 'mixed';
    }

    if (isset($schema['$ref'])) {
        $resolved = derefShallow($schema, $spec);
        return is_array($resolved) ? schemaToPhpHint($resolved, $spec) : 'mixed';
    }

    if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
        return 'mixed';
    }

    if (isset($schema['type']) && is_array($schema['type'])) {
        return 'mixed';
    }

    $type = $schema['type'] ?? null;

    return match ($type) {
        'string' => 'string',
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'array' => 'array',
        'object' => 'array',
        default => isset($schema['properties']) ? 'array' : 'mixed',
    };
}
