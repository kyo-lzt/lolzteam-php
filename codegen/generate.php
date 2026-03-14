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

    // Write group API files
    foreach ($result['groups'] as $group) {
        $fileName = groupToFileName($group['groupName']);
        $content = emitGroupFile($group, $config['namespace']);
        $filePath = $config['outputDir'] . '/' . $fileName . '.php';
        file_put_contents($filePath, $content);
        echo "  {$fileName}.php\n";
    }

    // Write client file
    $clientContent = emitClientFile(
        $result['groups'],
        $config['clientName'],
        $config['namespace'],
        $config['defaultBaseUrl'],
        $config['defaultRateLimit'],
    );
    $clientPath = $config['outputDir'] . '/' . $config['clientName'] . '.php';
    file_put_contents($clientPath, $clientContent);
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
