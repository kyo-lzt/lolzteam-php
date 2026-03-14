<?php

declare(strict_types=1);

/**
 * Code emission: generates PHP source files for API group classes and client class.
 */

require_once __DIR__ . '/naming.php';
require_once __DIR__ . '/types.php';

/**
 * Build a PHP path expression with parameter interpolation.
 * E.g. "/threads/{thread_id}" -> "/threads/{$thread_id}"
 */
function buildPathExpression(string $path): string
{
    if (!str_contains($path, '{')) {
        return "'{$path}'";
    }
    $phpPath = preg_replace('/\{([^}]+)\}/', '{\$$1}', $path);
    return "\"{$phpPath}\"";
}

/**
 * Generate PHPDoc @param for query params as an array shape.
 *
 * @param list<array{name: string, type: string, phpType: string, required: bool}> $queryParams
 */
function buildQueryParamsDoc(array $queryParams): string
{
    if (count($queryParams) === 0) {
        return '';
    }

    $parts = [];
    foreach ($queryParams as $param) {
        $opt = $param['required'] ? '' : '?';
        $parts[] = "{$param['name']}{$opt}: {$param['type']}";
    }

    return '@param array{' . implode(', ', $parts) . '} $params';
}

/**
 * Generate PHPDoc @param for body as an array shape.
 *
 * @param list<array{name: string, type: string, phpType: string, required: bool}> $bodyProperties
 */
function buildBodyDoc(array $bodyProperties): string
{
    if (count($bodyProperties) === 0) {
        return '';
    }

    $parts = [];
    foreach ($bodyProperties as $prop) {
        $opt = $prop['required'] ? '' : '?';
        $parts[] = "{$prop['name']}{$opt}: {$prop['type']}";
    }

    return '@param array{' . implode(', ', $parts) . '} $body';
}

/**
 * Emit a single method definition.
 *
 * @param array<string, mixed> $method
 */
function emitMethod(array $method): string
{
    $lines = [];

    /** @var list<array{name: string, type: string, phpType: string, required: bool}> $pathParams */
    $pathParams = $method['pathParams'];
    /** @var list<array{name: string, type: string, phpType: string, required: bool}> $queryParams */
    $queryParams = $method['queryParams'];
    /** @var list<array{name: string, type: string, phpType: string, required: bool}> $bodyProperties */
    $bodyProperties = $method['bodyProperties'];
    /** @var bool $hasBody */
    $hasBody = $method['hasBody'];
    /** @var bool $bodyRequired */
    $bodyRequired = $method['bodyRequired'];
    /** @var string $responseType */
    $responseType = $method['responseType'];
    /** @var string $methodName */
    $methodName = $method['methodName'];
    /** @var string $httpMethod */
    $httpMethod = $method['httpMethod'];
    /** @var string $path */
    $path = $method['path'];

    $hasQueryParams = count($queryParams) > 0;
    $hasBodyProps = $hasBody && count($bodyProperties) > 0;

    // Build PHPDoc
    $docLines = [];
    foreach ($pathParams as $param) {
        $docLines[] = "     * @param {$param['type']} \${$param['name']}";
    }
    if ($hasBodyProps) {
        $bodyDoc = buildBodyDoc($bodyProperties);
        if ($bodyDoc !== '') {
            $docLines[] = "     * {$bodyDoc}";
        }
    }
    if ($hasQueryParams) {
        $paramsDoc = buildQueryParamsDoc($queryParams);
        if ($paramsDoc !== '') {
            $docLines[] = "     * {$paramsDoc}";
        }
    }
    $docLines[] = "     * @return {$responseType}";

    $lines[] = '    /**';
    foreach ($docLines as $dl) {
        $lines[] = $dl;
    }
    $lines[] = '     */';

    // Build argument list
    $args = [];
    foreach ($pathParams as $param) {
        $args[] = "{$param['phpType']} \${$param['name']}";
    }
    if ($hasBodyProps) {
        $bodyOpt = $bodyRequired ? '' : ' = []';
        $args[] = "array \$body{$bodyOpt}";
    }
    if ($hasQueryParams) {
        $args[] = 'array $params = []';
    }

    $argStr = implode(', ', $args);
    $pathExpr = buildPathExpression($path);

    $lines[] = "    public function {$methodName}({$argStr}): array";
    $lines[] = '    {';

    // Build request call
    $requestArgs = ["'{$httpMethod}'", $pathExpr];

    if ($hasQueryParams) {
        $requestArgs[] = '$params';
    } else {
        $requestArgs[] = '[]';
    }

    if ($hasBodyProps) {
        $requestArgs[] = '$body';
    } else {
        $requestArgs[] = 'null';
    }

    // Trim trailing default arguments
    while (count($requestArgs) > 2) {
        $last = $requestArgs[count($requestArgs) - 1];
        if ($last === 'null' || $last === '[]') {
            array_pop($requestArgs);
        } else {
            break;
        }
    }

    $requestArgStr = implode(', ', $requestArgs);
    $lines[] = "        return \$this->http->request({$requestArgStr});";
    $lines[] = '    }';

    return implode("\n", $lines);
}

/**
 * Emit a complete group API class file.
 *
 * @param array{groupName: string, methods: list<array<string, mixed>>} $group
 */
function emitGroupFile(array $group, string $namespace): string
{
    $className = groupToClassName($group['groupName']);
    $lines = [];

    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = '// Auto-generated. Do not edit manually.';
    $lines[] = '';
    $lines[] = 'declare(strict_types=1);';
    $lines[] = '';
    $lines[] = "namespace {$namespace};";
    $lines[] = '';
    $lines[] = 'use Lolzteam\\Runtime\\HttpClient;';
    $lines[] = '';
    $lines[] = "final class {$className}";
    $lines[] = '{';
    $lines[] = '    public function __construct(';
    $lines[] = '        private readonly HttpClient $http,';
    $lines[] = '    ) {}';

    foreach ($group['methods'] as $method) {
        $lines[] = '';
        $lines[] = emitMethod($method);
    }

    $lines[] = '}';
    $lines[] = '';

    return implode("\n", $lines);
}

// ─── Code Emission: Client Class ─────────────────────────────────────────────

/**
 * Emit the main client class file.
 *
 * @param list<array{groupName: string, methods: list<array<string, mixed>>}> $groups
 */
function emitClientFile(
    array $groups,
    string $clientName,
    string $namespace,
    string $defaultBaseUrl,
    int $defaultRateLimit,
): string {
    $lines = [];

    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = '// Auto-generated. Do not edit manually.';
    $lines[] = '';
    $lines[] = 'declare(strict_types=1);';
    $lines[] = '';
    $lines[] = "namespace {$namespace};";
    $lines[] = '';
    $lines[] = 'use Lolzteam\\Runtime\\ClientConfig;';
    $lines[] = 'use Lolzteam\\Runtime\\HttpClient;';
    $lines[] = 'use Lolzteam\\Runtime\\RetryConfig;';
    $lines[] = '';
    $lines[] = "final class {$clientName}";
    $lines[] = '{';

    // Properties
    foreach ($groups as $group) {
        $className = groupToClassName($group['groupName']);
        $propName = groupToPropertyName($group['groupName']);
        $lines[] = "    public readonly {$className} \${$propName};";
    }

    $lines[] = '';
    $lines[] = '    public function __construct(';
    $lines[] = '        string $token,';
    $lines[] = '        ?string $proxy = null,';
    $lines[] = '        ?RetryConfig $retry = null,';
    $lines[] = '    ) {';
    $lines[] = '        $config = new ClientConfig(';
    $lines[] = '            token: $token,';
    $lines[] = "            baseUrl: '{$defaultBaseUrl}',";
    $lines[] = '            proxy: $proxy,';
    $lines[] = '            retry: $retry ?? new RetryConfig(),';
    $lines[] = "            requestsPerMinute: {$defaultRateLimit},";
    $lines[] = '        );';
    $lines[] = '        $http = new HttpClient($config);';

    foreach ($groups as $group) {
        $className = groupToClassName($group['groupName']);
        $propName = groupToPropertyName($group['groupName']);
        $lines[] = "        \$this->{$propName} = new {$className}(\$http);";
    }

    $lines[] = '    }';
    $lines[] = '}';
    $lines[] = '';

    return implode("\n", $lines);
}
