<?php

declare(strict_types=1);

/**
 * Code emission: generates PHP source files for API group classes and client class.
 */

require_once __DIR__ . '/naming.php';
require_once __DIR__ . '/types.php';
require_once __DIR__ . '/models.php';

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
function emitMethod(array $method, bool $isSearch = false): string
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
    /** @var string $bodyEncoding */
    $bodyEncoding = $method['bodyEncoding'] ?? 'form';
    /** @var bool $isRawBody */
    $isRawBody = $method['isRawBody'] ?? false;
    /** @var string $rawBodyType */
    $rawBodyType = $method['rawBodyType'] ?? 'mixed';
    /** @var bool $returnsNonJson */
    $returnsNonJson = $method['returnsNonJson'] ?? false;
    /** @var string $responseType */
    $responseType = $method['responseType'];
    /** @var string|null $responseModelClass */
    $rawResponseModelClass = $method['responseModelClass'] ?? null;
    // Prefix with Models\ since models are in a sub-namespace
    $responseModelClass = $rawResponseModelClass !== null ? "Models\\{$rawResponseModelClass}" : null;
    /** @var string $methodName */
    $methodName = $method['methodName'];
    /** @var string $httpMethod */
    $httpMethod = $method['httpMethod'];
    /** @var string $path */
    $path = $method['path'];

    $hasQueryParams = count($queryParams) > 0;
    $hasBodyProps = $hasBody && count($bodyProperties) > 0;
    // Body exists but has no named properties (e.g. array body like Batch)
    $hasRawBody = $hasBody && $isRawBody && !$hasBodyProps;

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
    } elseif ($hasRawBody) {
        $docLines[] = "     * @param {$rawBodyType} \$body";
    }
    if ($hasQueryParams) {
        $paramsDoc = buildQueryParamsDoc($queryParams);
        if ($paramsDoc !== '') {
            $docLines[] = "     * {$paramsDoc}";
        }
    }
    if ($responseModelClass !== null) {
        $docLines[] = "     * @return {$responseModelClass}";
    } else {
        $docLines[] = "     * @return {$responseType}";
    }

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
        $hasRequiredBodyProps = false;
        foreach ($bodyProperties as $bp) {
            if ($bp['required']) {
                $hasRequiredBodyProps = true;
                break;
            }
        }
        $bodyOpt = ($bodyRequired || $hasRequiredBodyProps) ? '' : ' = []';
        $args[] = "array \$body{$bodyOpt}";
    } elseif ($hasRawBody) {
        $bodyOpt = $bodyRequired ? '' : ' = []';
        $args[] = "array \$body{$bodyOpt}";
    }
    if ($hasQueryParams) {
        $args[] = 'array $params = []';
    }

    $argStr = implode(', ', $args);
    $pathExpr = buildPathExpression($path);

    // Return type: model class, string|array for non-JSON, or array
    if ($responseModelClass !== null) {
        $returnType = $responseModelClass;
    } elseif ($returnsNonJson) {
        $returnType = 'string|array';
    } else {
        $returnType = 'array';
    }
    $lines[] = "    public function {$methodName}({$argStr}): {$returnType}";
    $lines[] = '    {';

    // Build request call
    $requestArgs = ["'{$httpMethod}'", $pathExpr];

    if ($hasQueryParams) {
        $requestArgs[] = '$params';
    } else {
        $requestArgs[] = '[]';
    }

    if ($hasBodyProps || $hasRawBody) {
        $requestArgs[] = '$body';
    } else {
        $requestArgs[] = 'null';
    }

    if ($bodyEncoding !== 'form') {
        $requestArgs[] = "'{$bodyEncoding}'";
    }

    if ($isSearch) {
        // Ensure bodyEncoding slot is filled before adding isSearch
        if ($bodyEncoding === 'form' && count($requestArgs) < 5) {
            $requestArgs[] = "'form'";
        }
        $requestArgs[] = 'isSearch: true';
    }

    // Trim trailing default arguments (but never trim named args like isSearch: true)
    while (count($requestArgs) > 2) {
        $last = $requestArgs[count($requestArgs) - 1];
        if ($last === 'null' || $last === '[]' || $last === "'form'") {
            array_pop($requestArgs);
        } else {
            break;
        }
    }

    $requestArgStr = implode(', ', $requestArgs);
    if ($responseModelClass !== null) {
        $lines[] = "        /** @var array<string, mixed> \$data */";
        $lines[] = "        \$data = \$this->http->request({$requestArgStr});";
        $lines[] = '';
        $lines[] = "        return {$responseModelClass}::fromArray(\$data);";
    } else {
        $lines[] = "        return \$this->http->request({$requestArgStr});";
    }
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
    $lines[] = '    ) {';
    $lines[] = '    }';

    foreach ($group['methods'] as $method) {
        $lines[] = '';
        $lines[] = emitMethod($method);
    }

    $lines[] = '}';
    $lines[] = '';

    return implode("\n", $lines);
}

// ─── Code Emission: Combined File ────────────────────────────────────────────

/**
 * Emit a single group API class body (without file header).
 *
 * @param array{groupName: string, methods: list<array<string, mixed>>} $group
 */
function emitGroupClass(array $group): string
{
    $className = groupToClassName($group['groupName']);
    $isSearch = strtolower($group['groupName']) === 'category';
    $lines = [];

    $lines[] = "final class {$className}";
    $lines[] = '{';
    $lines[] = '    public function __construct(';
    $lines[] = '        private readonly HttpClient $http,';
    $lines[] = '    ) {';
    $lines[] = '    }';

    foreach ($group['methods'] as $method) {
        $lines[] = '';
        $lines[] = emitMethod($method, $isSearch);
    }

    $lines[] = '}';

    return implode("\n", $lines);
}

/**
 * Emit a combined file with all group API classes and the client class.
 *
 * @param list<array{groupName: string, methods: list<array<string, mixed>>}> $groups
 */
function emitCombinedFile(
    array $groups,
    string $clientName,
    string $namespace,
    string $defaultBaseUrl,
    int $defaultRateLimit,
    ?int $defaultSearchRateLimit = null,
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

    // Emit all group API classes
    foreach ($groups as $group) {
        $lines[] = '';
        $lines[] = emitGroupClass($group);
    }

    // Emit client class
    $lines[] = '';
    $lines[] = "final class {$clientName}";
    $lines[] = '{';

    foreach ($groups as $group) {
        $className = groupToClassName($group['groupName']);
        $propName = groupToPropertyName($group['groupName']);
        $lines[] = "    public readonly {$className} \${$propName};";
    }

    $lines[] = '';
    $lines[] = '    public function __construct(ClientConfig $config)';
    $lines[] = '    {';
    $lines[] = "        \$resolvedConfig = new ClientConfig(";
    $lines[] = '            token: $config->token,';
    $lines[] = "            baseUrl: \$config->baseUrl !== '' ? \$config->baseUrl : '{$defaultBaseUrl}',";
    $lines[] = '            proxy: $config->proxy,';
    $lines[] = '            retry: $config->retry ?? new RetryConfig(),';
    $lines[] = "            requestsPerMinute: \$config->requestsPerMinute > 0 ? \$config->requestsPerMinute : {$defaultRateLimit},";
    if ($defaultSearchRateLimit !== null) {
        $lines[] = "            searchRequestsPerMinute: \$config->searchRequestsPerMinute ?? {$defaultSearchRateLimit},";
    } else {
        $lines[] = '            searchRequestsPerMinute: $config->searchRequestsPerMinute,';
    }
    $lines[] = '        );';
    $lines[] = '        $http = new HttpClient($resolvedConfig);';

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
