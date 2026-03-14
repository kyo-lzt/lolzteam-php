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
    ],
];

// ─── Main ────────────────────────────────────────────────────────────────────

/**
 * Remove all .php files from directory (keeps .gitkeep).
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

    // Write single combined file
    $content = emitCombinedFile(
        $result['groups'],
        $config['clientName'],
        $config['namespace'],
        $config['defaultBaseUrl'],
        $config['defaultRateLimit'],
    );
    $filePath = $config['outputDir'] . '/' . $config['clientName'] . '.php';
    file_put_contents($filePath, $content);
    echo "  {$config['clientName']}.php\n";

    $methodCount = 0;
    foreach ($result['groups'] as $group) {
        $methodCount += count($group['methods']);
    }
    echo "  Done: " . count($result['groups']) . " groups, {$methodCount} operations\n\n";
}

foreach ($apis as $api) {
    generateApi($api);
}
