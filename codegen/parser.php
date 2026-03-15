<?php

declare(strict_types=1);

/**
 * OpenAPI spec parsing: parameter, body, and response extraction.
 */

require_once __DIR__ . '/deref.php';
require_once __DIR__ . '/naming.php';
require_once __DIR__ . '/types.php';
require_once __DIR__ . '/models.php';

// ─── Parameter Extraction ────────────────────────────────────────────────────

/**
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 * @return array{pathParams: list<array{name: string, type: string, phpType: string, required: bool}>, queryParams: list<array{name: string, type: string, phpType: string, required: bool}>}
 */
function extractParameters(array $operation, array $spec): array
{
    $pathParams = [];
    $queryParams = [];

    $rawParams = $operation['parameters'] ?? [];
    if (!is_array($rawParams)) {
        return ['pathParams' => [], 'queryParams' => []];
    }

    foreach ($rawParams as $rawParam) {
        $param = derefShallow($rawParam, $spec);
        if (!is_array($param)) {
            continue;
        }

        $in = $param['in'] ?? '';
        if ($in === 'header' || $in === 'cookie') {
            continue;
        }

        $paramSchema = is_array($param['schema'] ?? null) ? $param['schema'] : null;
        $parsed = [
            'name' => (string) ($param['name'] ?? ''),
            'type' => schemaToPhpType($paramSchema, $spec),
            'phpType' => schemaToPhpHint($paramSchema, $spec),
            'required' => (bool) ($param['required'] ?? false),
        ];

        // Carry enum values through for enum generation
        if ($paramSchema !== null && isset($paramSchema['enum']) && is_array($paramSchema['enum'])) {
            $parsed['enum'] = $paramSchema['enum'];
        }

        // Carry default value
        if ($paramSchema !== null && array_key_exists('default', $paramSchema)) {
            $parsed['default'] = $paramSchema['default'];
        }

        if ($in === 'path') {
            $parsed['required'] = true;
            $pathParams[] = $parsed;
        } elseif ($in === 'query') {
            $queryParams[] = $parsed;
        }
    }

    return ['pathParams' => $pathParams, 'queryParams' => $queryParams];
}

// ─── Body Extraction ─────────────────────────────────────────────────────────

/**
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 * @return list<array{name: string, type: string, phpType: string, required: bool}>
 */
function extractBodyProperties(array $operation, array $spec): array
{
    $bodyProperties = [];

    if (!isset($operation['requestBody'])) {
        return $bodyProperties;
    }

    $requestBody = derefShallow($operation['requestBody'], $spec);
    if (!is_array($requestBody)) {
        return $bodyProperties;
    }

    $content = $requestBody['content'] ?? null;
    if (!is_array($content)) {
        return $bodyProperties;
    }

    $mediaType = $content['application/json'] ?? $content['multipart/form-data'] ?? null;
    if (!is_array($mediaType) || !isset($mediaType['schema']) || !is_array($mediaType['schema'])) {
        return $bodyProperties;
    }

    $schema = $mediaType['schema'];

    // Handle oneOf — merge all properties from all variants
    if (isset($schema['oneOf']) && is_array($schema['oneOf'])) {
        /** @var array<string, list<array<string, mixed>>> $allProps property name -> list of schemas */
        $allProps = [];
        /** @var list<array<string, bool>> $variantRequiredSets */
        $variantRequiredSets = [];

        foreach ($schema['oneOf'] as $variant) {
            if (!is_array($variant)) {
                continue;
            }
            $variantProps = $variant['properties'] ?? [];
            $variantRequired = $variant['required'] ?? [];

            $requiredSet = [];
            if (is_array($variantRequired)) {
                foreach ($variantRequired as $r) {
                    $requiredSet[$r] = true;
                }
            }
            $variantRequiredSets[] = $requiredSet;

            if (is_array($variantProps)) {
                foreach ($variantProps as $name => $propSchema) {
                    if (!isset($allProps[$name])) {
                        $allProps[$name] = [];
                    }
                    $allProps[$name][] = is_array($propSchema) ? $propSchema : [];
                }
            }
        }

        foreach ($allProps as $name => $propSchemas) {
            // Bug 1 fix: required only if required in ALL variants (intersection)
            $isRequired = true;
            foreach ($variantRequiredSets as $requiredSet) {
                if (!isset($requiredSet[$name])) {
                    $isRequired = false;
                    break;
                }
            }

            // Bug 2 fix: merge schemas into union type instead of last-writer-wins
            if (count($propSchemas) === 1) {
                $mergedSchema = $propSchemas[0];
            } else {
                // Check if all schemas have enums — merge enum values
                $allEnums = [];
                $allAreEnums = true;
                foreach ($propSchemas as $ps) {
                    if (isset($ps['enum']) && is_array($ps['enum'])) {
                        foreach ($ps['enum'] as $v) {
                            $allEnums[] = $v;
                        }
                    } else {
                        $allAreEnums = false;
                        break;
                    }
                }

                if ($allAreEnums && count($allEnums) > 0) {
                    $mergedSchema = ['enum' => array_values(array_unique($allEnums, SORT_REGULAR))];
                } else {
                    // Different types — wrap in oneOf for union type resolution
                    $unique = [];
                    foreach ($propSchemas as $ps) {
                        $key = json_encode($ps);
                        if ($key !== false) {
                            $unique[$key] = $ps;
                        }
                    }
                    $uniqueSchemas = array_values($unique);
                    if (count($uniqueSchemas) === 1) {
                        $mergedSchema = $uniqueSchemas[0];
                    } else {
                        $mergedSchema = ['oneOf' => $uniqueSchemas];
                    }
                }
            }

            $bodyProp = [
                'name' => (string) $name,
                'type' => schemaToPhpType($mergedSchema, $spec),
                'phpType' => schemaToPhpHint($mergedSchema, $spec),
                'required' => $isRequired,
            ];
            if (isset($mergedSchema['enum']) && is_array($mergedSchema['enum'])) {
                $bodyProp['enum'] = $mergedSchema['enum'];
            }
            if (array_key_exists('default', $mergedSchema)) {
                $bodyProp['default'] = $mergedSchema['default'];
            }
            $bodyProperties[] = $bodyProp;
        }
    } elseif (isset($schema['properties']) && is_array($schema['properties'])) {
        $requiredSet = [];
        if (isset($schema['required']) && is_array($schema['required'])) {
            $requiredSet = array_flip($schema['required']);
        }

        foreach ($schema['properties'] as $name => $propSchema) {
            $bodyProp = [
                'name' => (string) $name,
                'type' => is_array($propSchema) ? schemaToPhpType($propSchema, $spec) : 'mixed',
                'phpType' => is_array($propSchema) ? schemaToPhpHint($propSchema, $spec) : 'mixed',
                'required' => isset($requiredSet[$name]),
            ];
            if (is_array($propSchema) && isset($propSchema['enum']) && is_array($propSchema['enum'])) {
                $bodyProp['enum'] = $propSchema['enum'];
            }
            if (is_array($propSchema) && array_key_exists('default', $propSchema)) {
                $bodyProp['default'] = $propSchema['default'];
            }
            $bodyProperties[] = $bodyProp;
        }
    }

    return $bodyProperties;
}

// ─── Discriminated OneOf Detection ────────────────────────────────────────────

/**
 * Try to detect a discriminated union from oneOf variants.
 *
 * @param list<array<string, mixed>> $oneOf
 * @param array<string, mixed> $spec
 * @return list<array{title: string, discriminatorField: string, discriminatorValue: string|int, properties: list<array{name: string, type: string, phpType: string, required: bool}>}>|null
 */
function tryExtractDiscriminatedOneOf(array $oneOf, array $spec): ?array
{
    if (count($oneOf) < 2) {
        return null;
    }

    // All variants must have properties
    foreach ($oneOf as $variant) {
        if (!is_array($variant) || !isset($variant['properties']) || !is_array($variant['properties'])) {
            return null;
        }
    }

    // Find a property present in every variant with a single-value enum
    $firstProps = $oneOf[0]['properties'];
    $discriminatorField = null;

    foreach ($firstProps as $propName => $propSchema) {
        if (!is_array($propSchema)) {
            continue;
        }
        $enumVals = $propSchema['enum'] ?? null;
        if (!is_array($enumVals) || count($enumVals) !== 1) {
            continue;
        }

        $allMatch = true;
        for ($i = 1; $i < count($oneOf); $i++) {
            $vProps = $oneOf[$i]['properties'];
            $vProp = $vProps[$propName] ?? null;
            if (!is_array($vProp)) {
                $allMatch = false;
                break;
            }
            $vEnum = $vProp['enum'] ?? null;
            if (!is_array($vEnum) || count($vEnum) !== 1) {
                $allMatch = false;
                break;
            }
        }
        if ($allMatch) {
            $discriminatorField = (string) $propName;
            break;
        }
    }

    if ($discriminatorField === null) {
        return null;
    }

    $variants = [];
    foreach ($oneOf as $variant) {
        $title = $variant['title'] ?? 'Unknown';
        $props = $variant['properties'];
        $requiredList = $variant['required'] ?? [];
        /** @var array<string, bool> $requiredSet */
        $requiredSet = [];
        if (is_array($requiredList)) {
            foreach ($requiredList as $r) {
                $requiredSet[(string) $r] = true;
            }
        }

        $discValue = $props[$discriminatorField]['enum'][0];

        $bodyProps = [];
        foreach ($props as $pName => $pSchema) {
            if ((string) $pName === $discriminatorField) {
                continue;
            }
            $bodyProp = [
                'name' => (string) $pName,
                'type' => is_array($pSchema) ? schemaToPhpType($pSchema, $spec) : 'mixed',
                'phpType' => is_array($pSchema) ? schemaToPhpHint($pSchema, $spec) : 'mixed',
                'required' => isset($requiredSet[(string) $pName]),
            ];
            if (is_array($pSchema) && isset($pSchema['enum']) && is_array($pSchema['enum'])) {
                $bodyProp['enum'] = $pSchema['enum'];
            }
            if (is_array($pSchema) && array_key_exists('default', $pSchema)) {
                $bodyProp['default'] = $pSchema['default'];
            }
            $bodyProps[] = $bodyProp;
        }

        $variants[] = [
            'title' => (string) $title,
            'discriminatorField' => $discriminatorField,
            'discriminatorValue' => $discValue,
            'properties' => $bodyProps,
        ];
    }

    return $variants;
}

/**
 * Extract discriminated oneOf variants from an operation's request body.
 *
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 * @return list<array{title: string, discriminatorField: string, discriminatorValue: string|int, properties: list<array{name: string, type: string, phpType: string, required: bool}>}>
 */
function extractOneOfVariants(array $operation, array $spec): array
{
    if (!isset($operation['requestBody'])) {
        return [];
    }

    $requestBody = derefShallow($operation['requestBody'], $spec);
    if (!is_array($requestBody)) {
        return [];
    }

    $content = $requestBody['content'] ?? null;
    if (!is_array($content)) {
        return [];
    }

    $mediaType = $content['application/json'] ?? $content['multipart/form-data'] ?? null;
    if (!is_array($mediaType) || !isset($mediaType['schema']) || !is_array($mediaType['schema'])) {
        return [];
    }

    $schema = $mediaType['schema'];
    if (!isset($schema['oneOf']) || !is_array($schema['oneOf'])) {
        return [];
    }

    $result = tryExtractDiscriminatedOneOf($schema['oneOf'], $spec);
    return $result ?? [];
}

// ─── Body Encoding Detection ─────────────────────────────────────────────────

/**
 * Detect body encoding: 'form', 'json', or 'multipart'.
 *
 * Priority:
 *   - If has multipart/form-data AND NOT form-urlencoded → multipart
 *   - If has application/json AND NOT form-urlencoded → json
 *   - Otherwise → form (default)
 *
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 * @return 'form'|'json'|'multipart'
 */
function detectBodyEncoding(array $operation, array $spec): string
{
    if (!isset($operation['requestBody'])) {
        return 'form';
    }

    $requestBody = derefShallow($operation['requestBody'], $spec);
    if (!is_array($requestBody)) {
        return 'form';
    }

    $content = $requestBody['content'] ?? null;
    if (!is_array($content)) {
        return 'form';
    }

    $hasForm = isset($content['application/x-www-form-urlencoded']);
    $hasMultipart = isset($content['multipart/form-data']);
    $hasJson = isset($content['application/json']);

    if ($hasMultipart && !$hasForm) {
        return 'multipart';
    }

    if ($hasJson && !$hasForm) {
        return 'json';
    }

    return 'form';
}

// ─── Raw Body Detection ──────────────────────────────────────────────────────

/**
 * Detect if the request body is a raw array/primitive (not object with named properties).
 *
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 * @return array{isRawBody: bool, rawBodyType: string}
 */
function extractRawBodyInfo(array $operation, array $spec): array
{
    if (!isset($operation['requestBody'])) {
        return ['isRawBody' => false, 'rawBodyType' => 'mixed'];
    }

    $requestBody = derefShallow($operation['requestBody'], $spec);
    if (!is_array($requestBody)) {
        return ['isRawBody' => false, 'rawBodyType' => 'mixed'];
    }

    $content = $requestBody['content'] ?? null;
    if (!is_array($content)) {
        return ['isRawBody' => false, 'rawBodyType' => 'mixed'];
    }

    $mediaType = $content['application/json'] ?? $content['multipart/form-data'] ?? null;
    if (!is_array($mediaType) || !isset($mediaType['schema']) || !is_array($mediaType['schema'])) {
        return ['isRawBody' => false, 'rawBodyType' => 'mixed'];
    }

    $schema = $mediaType['schema'];
    $schemaType = $schema['type'] ?? null;
    $hasProperties = isset($schema['properties']) && is_array($schema['properties']);

    if ($schemaType === 'array' || (!$hasProperties && !isset($schema['oneOf']))) {
        return ['isRawBody' => true, 'rawBodyType' => schemaToPhpType($schema, $spec)];
    }

    return ['isRawBody' => false, 'rawBodyType' => 'mixed'];
}

// ─── Non-JSON Response Detection ─────────────────────────────────────────────

/**
 * Check if the operation returns non-JSON content (e.g. text/html).
 *
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 */
function hasNonJsonResponse(array $operation, array $spec): bool
{
    $responses = $operation['responses'] ?? null;
    if (!is_array($responses)) {
        return false;
    }

    $rawSuccess = $responses['200'] ?? $responses['201'] ?? null;
    if ($rawSuccess === null) {
        return false;
    }

    $success = derefShallow($rawSuccess, $spec);
    if (!is_array($success)) {
        return false;
    }

    $content = $success['content'] ?? null;
    if (!is_array($content)) {
        return false;
    }

    return !isset($content['application/json']) && count($content) > 0;
}

// ─── Response Extraction ─────────────────────────────────────────────────────

/**
 * @param array<string, mixed> $operation
 * @param array<string, mixed> $spec
 */
function extractResponseType(array $operation, array $spec): string
{
    $responses = $operation['responses'] ?? null;
    if (!is_array($responses)) {
        return 'mixed';
    }

    $rawSuccess = $responses['200'] ?? $responses['201'] ?? null;
    if ($rawSuccess === null) {
        return 'mixed';
    }

    $success = derefShallow($rawSuccess, $spec);
    if (!is_array($success)) {
        return 'mixed';
    }

    $content = $success['content'] ?? null;
    if (!is_array($content)) {
        return 'mixed';
    }

    $jsonContent = $content['application/json'] ?? null;
    if (!is_array($jsonContent)) {
        return 'mixed';
    }

    $rawSchema = $jsonContent['schema'] ?? null;
    if (!is_array($rawSchema)) {
        return 'mixed';
    }

    $schema = derefShallow($rawSchema, $spec);
    if (!is_array($schema)) {
        return 'mixed';
    }

    return schemaToPhpType($schema, $spec);
}

// ─── Spec Parsing ────────────────────────────────────────────────────────────

const HTTP_METHODS = ['get', 'post', 'put', 'delete', 'patch'];

/**
 * @param array<string, mixed> $rawSpec
 * @return array{groups: list<array{groupName: string, methods: list<array<string, mixed>>}>, baseUrl: string, componentSchemas: array<string, array<string, mixed>>}
 */
function parseSpec(array $rawSpec): array
{
    // Extract component schemas before dereferencing
    // We need both:
    //   - $componentSchemas: fully resolved (for hasObjectProperties check and generating models)
    //   - $componentSchemasMarked: resolved with component ref markers (for detecting cross-refs)
    /** @var array<string, array<string, mixed>> $componentSchemas */
    $componentSchemas = [];
    /** @var array<string, array<string, mixed>> $componentSchemasMarked */
    $componentSchemasMarked = [];
    $rawSchemas = $rawSpec['components']['schemas'] ?? [];
    if (is_array($rawSchemas)) {
        $specFullTemp = deref($rawSpec, $rawSpec);
        if (!is_array($specFullTemp)) {
            throw new RuntimeException('Failed to resolve spec');
        }
        foreach ($rawSchemas as $name => $schema) {
            if (!is_array($schema)) {
                continue;
            }
            $resolved = resolveSchemaFully(deref($schema, $rawSpec), $specFullTemp);
            if ($resolved !== null && hasObjectProperties($resolved)) {
                $componentSchemas[(string) $name] = $resolved;
                // Also resolve with markers preserved
                $marked = derefPreservingComponents($schema, $rawSpec);
                if (is_array($marked)) {
                    $componentSchemasMarked[(string) $name] = $marked;
                }
            }
        }
    }

    // Resolve all $refs, preserving component schema markers
    $spec = derefPreservingComponents($rawSpec, $rawSpec);
    if (!is_array($spec)) {
        throw new RuntimeException('Failed to resolve spec');
    }

    // Also keep fully-resolved spec for parameter/type extraction
    $specFull = deref($rawSpec, $rawSpec);
    if (!is_array($specFull)) {
        throw new RuntimeException('Failed to resolve spec');
    }

    /** @var array<string, list<array<string, mixed>>> $groupMap */
    $groupMap = [];

    $paths = $spec['paths'] ?? [];
    if (!is_array($paths)) {
        $paths = [];
    }

    foreach ($paths as $path => $pathItem) {
        if (!is_array($pathItem)) {
            continue;
        }

        foreach (HTTP_METHODS as $httpMethod) {
            $operation = $pathItem[$httpMethod] ?? null;
            if (!is_array($operation)) {
                continue;
            }

            $operationId = $operation['operationId'] ?? null;
            if (!is_string($operationId)) {
                continue;
            }

            $group = operationIdToGroup($operationId);
            // Normalize known typos in group names
            if ($group === 'manging') {
                $group = 'managing';
            }
            $methodName = sanitizeMethodName(operationIdToMethod($operationId));

            $params = extractParameters($operation, $specFull);
            $bodyProperties = extractBodyProperties($operation, $specFull);
            $responseType = extractResponseType($operation, $specFull);

            $hasBody = isset($operation['requestBody']);
            $bodyRequired = false;
            if ($hasBody) {
                $rb = derefShallow($operation['requestBody'], $specFull);
                $bodyRequired = is_array($rb) && !empty($rb['required']);
            }

            $bodyEncoding = detectBodyEncoding($operation, $specFull);
            $oneOfVariants = extractOneOfVariants($operation, $specFull);
            $rawBodyInfo = extractRawBodyInfo($operation, $specFull);
            $returnsNonJson = hasNonJsonResponse($operation, $specFull);

            // PHP-2: GET requests with requestBody — send body properties as query params
            $upperMethod = strtoupper($httpMethod);
            if ($upperMethod === 'GET' && count($bodyProperties) > 0) {
                // Merge body properties into query params (all optional for GET)
                foreach ($bodyProperties as $bodyProp) {
                    $qp = [
                        'name' => $bodyProp['name'],
                        'type' => $bodyProp['type'],
                        'phpType' => $bodyProp['phpType'],
                        'required' => false,
                    ];
                    if (isset($bodyProp['enum'])) {
                        $qp['enum'] = $bodyProp['enum'];
                    }
                    if (array_key_exists('default', $bodyProp)) {
                        $qp['default'] = $bodyProp['default'];
                    }
                    $params['queryParams'][] = $qp;
                }
                $bodyProperties = [];
                $hasBody = false;
                $bodyRequired = false;
                $bodyEncoding = 'form';
            }

            // Extract response model (use $spec with component markers)
            $responseSchema = extractResponseSchema($operation, $spec);
            $responseModelClass = null;
            $responseModels = [];
            if ($responseSchema !== null && !$returnsNonJson) {
                // Check if top-level response IS a component schema
                $topComponentRef = $responseSchema['__component_ref'] ?? null;
                $resolvedResponseSchema = resolveSchemaFully($responseSchema, $specFull);
                if ($resolvedResponseSchema !== null && hasObjectProperties($resolvedResponseSchema)) {
                    if (is_string($topComponentRef) && isset($componentSchemas[$topComponentRef])) {
                        // Top-level response is a component schema — use its class name directly
                        $responseModelClass = componentSchemaClassName($topComponentRef);
                    } else {
                        $responseModelClass = responseModelClassName($operationId);
                        $responseModels = collectModels($responseSchema, $specFull, $responseModelClass, $componentSchemas);
                    }
                }
            }

            $methodDef = [
                'operationId' => $operationId,
                'methodName' => $methodName,
                'httpMethod' => $upperMethod,
                'path' => (string) $path,
                'pathParams' => $params['pathParams'],
                'queryParams' => $params['queryParams'],
                'bodyProperties' => $bodyProperties,
                'hasBody' => $hasBody,
                'bodyRequired' => $bodyRequired,
                'bodyEncoding' => $bodyEncoding,
                'isRawBody' => $rawBodyInfo['isRawBody'],
                'rawBodyType' => $rawBodyInfo['rawBodyType'],
                'responseType' => $responseType,
                'returnsNonJson' => $returnsNonJson,
                'responseModelClass' => $responseModelClass,
                'responseModels' => $responseModels,
                'oneOfVariants' => $oneOfVariants,
            ];

            $groupMap[$group][] = $methodDef;
        }
    }

    $groups = [];
    foreach ($groupMap as $groupName => $methods) {
        $groups[] = ['groupName' => $groupName, 'methods' => $methods];
    }

    $servers = $spec['servers'] ?? [];
    $baseUrl = 'https://localhost';
    if (is_array($servers) && count($servers) > 0) {
        $first = $servers[0] ?? null;
        if (is_array($first) && isset($first['url'])) {
            $baseUrl = (string) $first['url'];
        }
    }

    return [
        'groups' => $groups,
        'baseUrl' => $baseUrl,
        'componentSchemas' => $componentSchemas,
        'componentSchemasMarked' => $componentSchemasMarked,
    ];
}
