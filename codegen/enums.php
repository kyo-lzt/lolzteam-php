<?php

declare(strict_types=1);

/**
 * Enum collection and emission: detects enum params from OpenAPI schemas
 * and generates PHP 8.1 backed enum classes.
 */

require_once __DIR__ . '/naming.php';

// ─── Enum Collection ────────────────────────────────────────────────────────

/**
 * A collected enum definition.
 *
 * @phpstan-type EnumDef array{
 *     enumName: string,
 *     backingType: 'int'|'string',
 *     values: list<int|string>,
 * }
 */

/**
 * Convert a snake_case param name to PascalCase enum name.
 * E.g. "reply_group" -> "ReplyGroup", "currency" -> "Currency"
 */
function paramToEnumName(string $paramName): string
{
    // Remove non-alphanumeric chars except underscores, then split
    $cleaned = (string) preg_replace('/[^a-zA-Z0-9_]/', '_', $paramName);
    $parts = explode('_', $cleaned);
    $result = implode('', array_map(fn(string $p) => ucfirst($p), $parts));

    // Prefix with "V" if starts with digit
    if ($result !== '' && ctype_digit($result[0])) {
        $result = 'V' . $result;
    }

    return $result;
}

/**
 * Generate a case name for an int enum value.
 * E.g. 0 -> "V0", 21 -> "V21", -1 -> "Neg1"
 */
function intCaseName(int $value): string
{
    if ($value < 0) {
        return 'Neg' . abs($value);
    }
    return 'V' . $value;
}

/**
 * Generate a case name for a string enum value.
 * E.g. "rub" -> "Rub", "not_paid" -> "NotPaid", "EA Play" -> "EaPlay"
 */
function stringCaseName(string $value): string
{
    if ($value === '') {
        return 'Empty';
    }

    // Replace non-alphanumeric chars with spaces for splitting
    $normalized = (string) preg_replace('/[^a-zA-Z0-9]/', ' ', $value);
    $parts = preg_split('/\s+/', trim($normalized));
    if ($parts === false || $parts === []) {
        return 'Value';
    }
    $result = implode('', array_map(fn(string $p) => ucfirst(strtolower($p)), $parts));

    // Prefix with V if starts with digit
    if ($result !== '' && ctype_digit($result[0])) {
        $result = 'V' . $result;
    }

    return $result;
}

/**
 * Determine the backing type for an enum from its values.
 *
 * @param list<mixed> $values
 * @return 'int'|'string'
 */
function detectBackingType(array $values): string
{
    foreach ($values as $v) {
        if (is_string($v)) {
            return 'string';
        }
    }
    return 'int';
}

/**
 * Collect all enum definitions from parsed spec groups.
 * Deduplicates enums: same param name + same values = shared enum.
 * Same name, different values = prefixed with operation group.
 *
 * @param list<array{groupName: string, methods: list<array<string, mixed>>}> $groups
 * @return array{
 *     enums: list<array{enumName: string, backingType: 'int'|'string', values: list<int|string>}>,
 *     paramEnumMap: array<string, string>,
 * }
 *
 * paramEnumMap: "operationId:paramName" -> enumName
 */
function collectEnums(array $groups): array
{
    // Step 1: gather all (paramName, values, operationId, groupName) tuples
    /** @var list<array{paramName: string, values: list<mixed>, operationId: string, groupName: string}> $raw */
    $raw = [];

    foreach ($groups as $group) {
        foreach ($group['methods'] as $method) {
            /** @var string $operationId */
            $operationId = $method['operationId'];
            /** @var string $groupName */
            $groupName = $group['groupName'];

            // Collect from queryParams
            /** @var list<array{name: string, type: string, phpType: string, required: bool, enum?: list<mixed>}> $queryParams */
            $queryParams = $method['queryParams'];
            foreach ($queryParams as $param) {
                if (isset($param['enum']) && is_array($param['enum']) && count($param['enum']) > 0) {
                    $raw[] = [
                        'paramName' => $param['name'],
                        'values' => $param['enum'],
                        'operationId' => $operationId,
                        'groupName' => $groupName,
                    ];
                }
            }

            // Collect from bodyProperties
            /** @var list<array{name: string, type: string, phpType: string, required: bool, enum?: list<mixed>}> $bodyProperties */
            $bodyProperties = $method['bodyProperties'];
            foreach ($bodyProperties as $prop) {
                if (isset($prop['enum']) && is_array($prop['enum']) && count($prop['enum']) > 0) {
                    $raw[] = [
                        'paramName' => $prop['name'],
                        'values' => $prop['enum'],
                        'operationId' => $operationId,
                        'groupName' => $groupName,
                    ];
                }
            }
        }
    }

    // Step 2: group by param name
    /** @var array<string, list<array{values: list<mixed>, operationId: string, groupName: string}>> $byName */
    $byName = [];
    foreach ($raw as $entry) {
        $byName[$entry['paramName']][] = [
            'values' => $entry['values'],
            'operationId' => $entry['operationId'],
            'groupName' => $entry['groupName'],
        ];
    }

    // Step 3: deduplicate
    /** @var list<array{enumName: string, backingType: 'int'|'string', values: list<int|string>}> $enums */
    $enums = [];
    /** @var array<string, string> $paramEnumMap */
    $paramEnumMap = [];
    /** @var array<string, bool> $usedEnumNames */
    $usedEnumNames = [];

    foreach ($byName as $paramName => $entries) {
        // Group entries by their values (as a canonical key)
        /** @var array<string, array{values: list<mixed>, entries: list<array{operationId: string, groupName: string}>}> $valueGroups */
        $valueGroups = [];
        foreach ($entries as $entry) {
            $sortedValues = $entry['values'];
            sort($sortedValues, SORT_REGULAR);
            $key = json_encode($sortedValues) ?: '';
            if (!isset($valueGroups[$key])) {
                $valueGroups[$key] = ['values' => $entry['values'], 'entries' => []];
            }
            $valueGroups[$key]['entries'][] = [
                'operationId' => $entry['operationId'],
                'groupName' => $entry['groupName'],
            ];
        }

        $valueGroupList = array_values($valueGroups);

        if (count($valueGroupList) === 1) {
            // All usages have the same values — shared enum
            $baseName = paramToEnumName($paramName);
            $enumName = $baseName;
            // Avoid collision
            $suffix = 2;
            while (isset($usedEnumNames[$enumName])) {
                $enumName = $baseName . $suffix;
                $suffix++;
            }
            $usedEnumNames[$enumName] = true;

            $values = $valueGroupList[0]['values'];
            $backingType = detectBackingType($values);
            /** @var list<int|string> $filteredValues */
            $filteredValues = array_values(array_filter(
                $values,
                fn(mixed $v): bool => is_int($v) || is_string($v),
            ));

            $enums[] = [
                'enumName' => $enumName,
                'backingType' => $backingType,
                'values' => $filteredValues,
            ];

            foreach ($valueGroupList[0]['entries'] as $e) {
                $paramEnumMap[$e['operationId'] . ':' . $paramName] = $enumName;
            }
        } else {
            // Conflict — prefix with group name
            foreach ($valueGroupList as $vg) {
                // Use the first entry's group name as prefix
                $groupPrefix = capitalizeFirst($vg['entries'][0]['groupName']);
                $baseName = $groupPrefix . paramToEnumName($paramName);
                $enumName = $baseName;
                $suffix = 2;
                while (isset($usedEnumNames[$enumName])) {
                    $enumName = $baseName . $suffix;
                    $suffix++;
                }
                $usedEnumNames[$enumName] = true;

                $values = $vg['values'];
                $backingType = detectBackingType($values);
                /** @var list<int|string> $filteredValues */
                $filteredValues = array_values(array_filter(
                    $values,
                    fn(mixed $v): bool => is_int($v) || is_string($v),
                ));

                $enums[] = [
                    'enumName' => $enumName,
                    'backingType' => $backingType,
                    'values' => $filteredValues,
                ];

                foreach ($vg['entries'] as $e) {
                    $paramEnumMap[$e['operationId'] . ':' . $paramName] = $enumName;
                }
            }
        }
    }

    // Sort enums by name for stable output
    usort($enums, fn(array $a, array $b): int => strcmp($a['enumName'], $b['enumName']));

    return ['enums' => $enums, 'paramEnumMap' => $paramEnumMap];
}

// ─── Component Schema Enums ──────────────────────────────────────────────────

/**
 * Collect enum definitions from component schemas (e.g., CurrencyModel, RoomIDModel).
 * These are top-level schemas with an `enum` field in the OpenAPI spec.
 *
 * @param array<string, mixed> $rawSpec
 * @return list<array{enumName: string, backingType: 'int'|'string', values: list<int|string>}>
 */
function collectComponentSchemaEnums(array $rawSpec): array
{
    $schemas = $rawSpec['components']['schemas'] ?? [];
    if (!is_array($schemas)) {
        return [];
    }

    $enums = [];
    foreach ($schemas as $name => $schema) {
        if (!is_array($schema) || !isset($schema['enum']) || !is_array($schema['enum'])) {
            continue;
        }

        $values = $schema['enum'];
        $backingType = detectBackingType($values);
        /** @var list<int|string> $filteredValues */
        $filteredValues = array_values(array_filter(
            $values,
            fn(mixed $v): bool => is_int($v) || is_string($v),
        ));

        if (count($filteredValues) === 0) {
            continue;
        }

        // Keep the original schema name (e.g., "CurrencyModel", "RoomIDModel")
        $enums[] = [
            'enumName' => (string) $name,
            'backingType' => $backingType,
            'values' => $filteredValues,
        ];
    }

    // Sort by name for stable output
    usort($enums, fn(array $a, array $b): int => strcmp($a['enumName'], $b['enumName']));

    return $enums;
}

// ─── Enum Emission ──────────────────────────────────────────────────────────

/**
 * Emit a single PHP 8.1 backed enum.
 *
 * @param array{enumName: string, backingType: 'int'|'string', values: list<int|string>} $enum
 */
function emitEnum(array $enum): string
{
    $lines = [];
    $lines[] = "enum {$enum['enumName']}: {$enum['backingType']}";
    $lines[] = '{';

    /** @var array<string, bool> $usedCaseNames */
    $usedCaseNames = [];

    foreach ($enum['values'] as $value) {
        if ($enum['backingType'] === 'int' && is_int($value)) {
            $caseName = intCaseName($value);
        } else {
            $caseName = stringCaseName((string) $value);
        }

        // Deduplicate case names
        $baseCaseName = $caseName;
        $suffix = 2;
        while (isset($usedCaseNames[$caseName])) {
            $caseName = $baseCaseName . $suffix;
            $suffix++;
        }
        $usedCaseNames[$caseName] = true;

        if ($enum['backingType'] === 'int') {
            $lines[] = "    case {$caseName} = {$value};";
        } else {
            $escaped = str_replace("'", "\\'", (string) $value);
            $lines[] = "    case {$caseName} = '{$escaped}';";
        }
    }

    $lines[] = '}';

    return implode("\n", $lines);
}

/**
 * Emit a complete enums file with all enum classes.
 *
 * @param list<array{enumName: string, backingType: 'int'|'string', values: list<int|string>}> $enums
 */
function emitEnumsFile(array $enums, string $namespace): string
{
    $lines = [];
    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = '// Auto-generated. Do not edit manually.';
    $lines[] = '';
    $lines[] = 'declare(strict_types=1);';
    $lines[] = '';
    $lines[] = "namespace {$namespace};";

    foreach ($enums as $enum) {
        $lines[] = '';
        $lines[] = emitEnum($enum);
    }

    $lines[] = '';

    return implode("\n", $lines);
}
