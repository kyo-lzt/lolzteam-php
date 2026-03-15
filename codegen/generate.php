<?php

declare(strict_types=1);

/**
 * Code generator: reads OpenAPI 3.1.0 JSON specs and emits PHP client classes.
 *
 * Usage: php codegen/generate.php
 */

require_once __DIR__ . '/deref.php';
require_once __DIR__ . '/naming.php';
require_once __DIR__ . '/types.php';
require_once __DIR__ . '/parser.php';
require_once __DIR__ . '/emitter.php';
require_once __DIR__ . '/enums.php';

// ─── Configuration ───────────────────────────────────────────────────────────

$ROOT = dirname(__DIR__);

$apis = [
    [
        'schemaPath' => $ROOT . '/schemas/forum.json',
        'outputDir' => $ROOT . '/src/Generated/Forum',
        'clientName' => 'ForumClient',
        'namespace' => 'Lolzteam\\Generated\\Forum',
        'defaultBaseUrl' => 'https://prod-api.lolz.live',
        'defaultRateLimit' => 300,
    ],
    [
        'schemaPath' => $ROOT . '/schemas/market.json',
        'outputDir' => $ROOT . '/src/Generated/Market',
        'clientName' => 'MarketClient',
        'namespace' => 'Lolzteam\\Generated\\Market',
        'defaultBaseUrl' => 'https://prod-api.lzt.market',
        'defaultRateLimit' => 120,
        'defaultSearchRateLimit' => 20,
    ],
];

// ─── Main ────────────────────────────────────────────────────────────────────

/**
 * Remove all .php files from directory and subdirectories (keeps .gitkeep).
 */
function cleanOutputDir(string $dir): void
{
    if (!is_dir($dir)) {
        return;
    }
    $files = glob($dir . '/*.php');
    if ($files === false) {
        return;
    }
    foreach ($files as $file) {
        unlink($file);
    }
    // Also clean Models subdirectory
    $modelsDir = $dir . '/Models';
    if (is_dir($modelsDir)) {
        $modelFiles = glob($modelsDir . '/*.php');
        if ($modelFiles !== false) {
            foreach ($modelFiles as $file) {
                unlink($file);
            }
        }
    }
    // Also clean Enums subdirectory
    $enumsDir = $dir . '/Enums';
    if (is_dir($enumsDir)) {
        $enumFiles = glob($enumsDir . '/*.php');
        if ($enumFiles !== false) {
            foreach ($enumFiles as $file) {
                unlink($file);
            }
        }
    }
}

/**
 * @param array{schemaPath: string, outputDir: string, clientName: string, namespace: string, defaultBaseUrl: string, defaultRateLimit: int} $config
 */
function generateApi(array $config): void
{
    echo "Generating {$config['clientName']}...\n";

    $rawJson = file_get_contents($config['schemaPath']);
    if ($rawJson === false) {
        throw new RuntimeException("Failed to read schema: {$config['schemaPath']}");
    }

    /** @var array<string, mixed> $rawSpec */
    $rawSpec = json_decode($rawJson, true, 512, JSON_THROW_ON_ERROR);
    $result = parseSpec($rawSpec);

    if (!is_dir($config['outputDir'])) {
        mkdir($config['outputDir'], 0755, true);
    }

    // Clean old per-tag files
    cleanOutputDir($config['outputDir']);

    // Collect and generate enums
    $enumResult = collectEnums($result['groups']);
    $componentSchemaEnums = collectComponentSchemaEnums($rawSpec);

    // Merge component schema enums, skipping duplicates by name
    /** @var array<string, bool> $existingEnumNames */
    $existingEnumNames = [];
    foreach ($enumResult['enums'] as $e) {
        $existingEnumNames[$e['enumName']] = true;
    }
    foreach ($componentSchemaEnums as $cse) {
        if (!isset($existingEnumNames[$cse['enumName']])) {
            $enumResult['enums'][] = $cse;
            $existingEnumNames[$cse['enumName']] = true;
        }
    }
    // Re-sort after merge
    usort($enumResult['enums'], fn(array $a, array $b): int => strcmp($a['enumName'], $b['enumName']));

    $enumsNamespace = $config['namespace'] . '\\Enums';
    $enumsDir = $config['outputDir'] . '/Enums';
    if (!is_dir($enumsDir)) {
        mkdir($enumsDir, 0755, true);
    }

    if (count($enumResult['enums']) > 0) {
        $enumsContent = emitEnumsFile($enumResult['enums'], $enumsNamespace);
        $enumsFilePath = $enumsDir . '/Enums.php';
        file_put_contents($enumsFilePath, $enumsContent);
        echo "  Enums.php (" . count($enumResult['enums']) . " enums)\n";
    }

    // Write single combined file
    $content = emitCombinedFile(
        $result['groups'],
        $config['clientName'],
        $config['namespace'],
        $config['defaultBaseUrl'],
        $config['defaultRateLimit'],
        $config['defaultSearchRateLimit'] ?? null,
        $enumResult['paramEnumMap'],
    );
    $filePath = $config['outputDir'] . '/' . $config['clientName'] . '.php';
    file_put_contents($filePath, $content);
    echo "  {$config['clientName']}.php\n";

    // Write response models file
    $modelsNamespace = $config['namespace'] . '\\Models';
    $modelsDir = $config['outputDir'] . '/Models';
    if (!is_dir($modelsDir)) {
        mkdir($modelsDir, 0755, true);
    }

    // Generate component schema models
    /** @var array<string, array<string, mixed>> $componentSchemas */
    $componentSchemas = $result['componentSchemas'] ?? [];
    /** @var array<string, array<string, mixed>> $componentSchemasMarked */
    $componentSchemasMarked = $result['componentSchemasMarked'] ?? [];

    // Fully resolve the spec for component model collection
    $specFull = deref($rawSpec, $rawSpec);
    if (!is_array($specFull)) {
        throw new RuntimeException('Failed to resolve spec');
    }
    $componentModels = collectComponentModels($componentSchemas, $componentSchemasMarked, $specFull);

    // Collect all response models from all groups
    $allModels = [];
    $modelCount = 0;
    foreach ($result['groups'] as $group) {
        foreach ($group['methods'] as $method) {
            if (!empty($method['responseModels'])) {
                $allModels[] = [
                    'operationId' => $method['operationId'],
                    'models' => $method['responseModels'],
                ];
                $modelCount += count($method['responseModels']);
            }
        }
    }

    $totalModels = count($componentModels) + $modelCount;
    if ($totalModels > 0) {
        $modelsContent = emitModelsFile($allModels, $modelsNamespace, $componentModels);
        $modelsFilePath = $modelsDir . '/Models.php';
        file_put_contents($modelsFilePath, $modelsContent);
        echo "  Models.php ({$totalModels} classes, " . count($componentModels) . " component schemas)\n";
    }

    $methodCount = 0;
    foreach ($result['groups'] as $group) {
        $methodCount += count($group['methods']);
    }
    echo "  Done: " . count($result['groups']) . " groups, {$methodCount} operations\n\n";
}

foreach ($apis as $api) {
    generateApi($api);
}
