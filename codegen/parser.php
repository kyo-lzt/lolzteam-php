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

            $bodyProperties[] = [
                'name' => (string) $name,
                'type' => schemaToPhpType($mergedSchema, $spec),
                'phpType' => schemaToPhpHint($mergedSchema, $spec),
                'required' => $isRequired,
            ];
        }
    } elseif (isset($schema['properties']) && is_array($schema['properties'])) {
        $requiredSet = [];
        if (isset($schema['required']) && is_array($schema['required'])) {
            $requiredSet = array_flip($schema['required']);
        }

        foreach ($schema['properties'] as $name => $propSchema) {
            $bodyProperties[] = [
                'name' => (string) $name,
                'type' => is_array($propSchema) ? schemaToPhpType($propSchema, $spec) : 'mixed',
                'phpType' => is_array($propSchema) ? schemaToPhpHint($propSchema, $spec) : 'mixed',
                'required' => isset($requiredSet[$name]),
            ];
        }
    }

    return $bodyProperties;
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
 * @return array{groups: list<array{groupName: string, methods: list<array<string, mixed>>}>, baseUrl: string}
 */
function parseSpec(array $rawSpec): array
{
    // Resolve all $refs first
    $spec = deref($rawSpec, $rawSpec);
    if (!is_array($spec)) {
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

            $params = extractParameters($operation, $spec);
            $bodyProperties = extractBodyProperties($operation, $spec);
            $responseType = extractResponseType($operation, $spec);

            $hasBody = isset($operation['requestBody']);
            $bodyRequired = false;
            if ($hasBody) {
                $rb = derefShallow($operation['requestBody'], $spec);
                $bodyRequired = is_array($rb) && !empty($rb['required']);
            }

            $bodyEncoding = detectBodyEncoding($operation, $spec);
            $rawBodyInfo = extractRawBodyInfo($operation, $spec);
            $returnsNonJson = hasNonJsonResponse($operation, $spec);

            // PHP-2: GET requests with requestBody — send body properties as query params
            $upperMethod = strtoupper($httpMethod);
            if ($upperMethod === 'GET' && count($bodyProperties) > 0) {
                // Merge body properties into query params (all optional for GET)
                foreach ($bodyProperties as $bodyProp) {
                    $params['queryParams'][] = [
                        'name' => $bodyProp['name'],
                        'type' => $bodyProp['type'],
                        'phpType' => $bodyProp['phpType'],
                        'required' => false,
                    ];
                }
                $bodyProperties = [];
                $hasBody = false;
                $bodyRequired = false;
                $bodyEncoding = 'form';
            }

            // Extract response model
            $responseSchema = extractResponseSchema($operation, $spec);
            $responseModelClass = null;
            $responseModels = [];
            if ($responseSchema !== null && !$returnsNonJson) {
                $resolvedResponseSchema = resolveSchemaFully($responseSchema, $spec);
                if ($resolvedResponseSchema !== null && hasObjectProperties($resolvedResponseSchema)) {
                    $responseModelClass = responseModelClassName($operationId);
                    $responseModels = collectModels($resolvedResponseSchema, $spec, $responseModelClass);
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

    return ['groups' => $groups, 'baseUrl' => $baseUrl];
}
