<?php

declare(strict_types=1);

/**
 * Code emission: generates PHP source files for API group classes and client class.
 */

require_once __DIR__ . '/naming.php';
require_once __DIR__ . '/types.php';
require_once __DIR__ . '/models.php';

/**
 * Format a default value for display in PHPDoc.
 */
function formatDefaultValue(mixed $value): string
{
    if (is_string($value)) {
        return "\"{$value}\"";
    }
    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }
    return (string) $value;
}

/**
 * Format a default value as a PHP literal for use in generated code.
 */
function formatPhpLiteral(mixed $value): string
{
    if (is_string($value)) {
        $escaped = str_replace("'", "\\'", $value);
        return "'{$escaped}'";
    }
    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }
    if (is_int($value) || is_float($value)) {
        return (string) $value;
    }
    if (is_null($value)) {
        return 'null';
    }
    if (is_array($value)) {
        if ($value === []) {
            return '[]';
        }
        $entries = [];
        foreach ($value as $k => $v) {
            if (is_int($k)) {
                $entries[] = formatPhpLiteral($v);
            } else {
                $entries[] = "'" . str_replace("'", "\\'", (string) $k) . "' => " . formatPhpLiteral($v);
            }
        }
        return '[' . implode(', ', $entries) . ']';
    }
    return 'null';
}

/**
 * Collect default values from a list of params/properties.
 *
 * @param list<array{name: string, type: string, phpType: string, required: bool}> $fields
 * @return array<string, string> paramName -> PHP literal
 */
function collectDefaults(array $fields): array
{
    $defaults = [];
    foreach ($fields as $field) {
        if (array_key_exists('default', $field) && $field['default'] !== null) {
            $defaults[$field['name']] = formatPhpLiteral($field['default']);
        }
    }
    return $defaults;
}

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
 * @param array<string, string> $paramEnumMap operationId:paramName -> enumName
 */
function buildQueryParamsDoc(array $queryParams, string $operationId = '', array $paramEnumMap = []): string
{
    if (count($queryParams) === 0) {
        return '';
    }

    $parts = [];
    foreach ($queryParams as $param) {
        $opt = $param['required'] ? '' : '?';
        $enumKey = $operationId . ':' . $param['name'];
        if (isset($paramEnumMap[$enumKey])) {
            $enumType = 'Enums\\' . $paramEnumMap[$enumKey];
            $entry = "{$param['name']}{$opt}: {$enumType}";
        } else {
            $entry = "{$param['name']}{$opt}: {$param['type']}";
        }
        if (array_key_exists('default', $param)) {
            $entry .= ' (Default: ' . formatDefaultValue($param['default']) . ')';
        }
        $parts[] = $entry;
    }

    return '@param array{' . implode(', ', $parts) . '} $params';
}

/**
 * Generate PHPDoc @param for body as an array shape.
 *
 * @param list<array{name: string, type: string, phpType: string, required: bool}> $bodyProperties
 * @param array<string, string> $paramEnumMap operationId:paramName -> enumName
 */
function buildBodyDoc(array $bodyProperties, string $operationId = '', array $paramEnumMap = []): string
{
    if (count($bodyProperties) === 0) {
        return '';
    }

    $parts = [];
    foreach ($bodyProperties as $prop) {
        $opt = $prop['required'] ? '' : '?';
        $enumKey = $operationId . ':' . $prop['name'];
        if (isset($paramEnumMap[$enumKey])) {
            $enumType = 'Enums\\' . $paramEnumMap[$enumKey];
            $entry = "{$prop['name']}{$opt}: {$enumType}";
        } else {
            $entry = "{$prop['name']}{$opt}: {$prop['type']}";
        }
        if (array_key_exists('default', $prop)) {
            $entry .= ' (Default: ' . formatDefaultValue($prop['default']) . ')';
        }
        $parts[] = $entry;
    }

    return '@param array{' . implode(', ', $parts) . '} $body';
}

/**
 * Emit a single method definition.
 *
 * @param array<string, mixed> $method
 * @param array<string, string> $paramEnumMap operationId:paramName -> enumName
 */
function emitMethod(array $method, bool $isSearch = false, array $paramEnumMap = []): string
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

    /** @var list<array{title: string, discriminatorField: string, discriminatorValue: string|int, properties: list<array{name: string, type: string, phpType: string, required: bool}>}> $oneOfVariants */
    $oneOfVariants = $method['oneOfVariants'] ?? [];
    $hasOneOf = count($oneOfVariants) > 0;

    $hasQueryParams = count($queryParams) > 0;
    $hasBodyProps = $hasBody && count($bodyProperties) > 0;
    // Body exists but has no named properties (e.g. array body like Batch)
    $hasRawBody = $hasBody && $isRawBody && !$hasBodyProps;

    // Build PHPDoc
    $docLines = [];
    foreach ($pathParams as $param) {
        $docLines[] = "     * @param {$param['type']} \${$param['name']}";
    }
    /** @var string $operationId */
    $operationId = $method['operationId'];

    if ($hasOneOf) {
        $unionType = buildVariantUnionType($operationId, $oneOfVariants);
        $docLines[] = "     * @param {$unionType} \$body";
    } elseif ($hasBodyProps) {
        $bodyDoc = buildBodyDoc($bodyProperties, $operationId, $paramEnumMap);
        if ($bodyDoc !== '') {
            $docLines[] = "     * {$bodyDoc}";
        }
    } elseif ($hasRawBody) {
        $docLines[] = "     * @param {$rawBodyType} \$body";
    }
    if ($hasQueryParams) {
        $paramsDoc = buildQueryParamsDoc($queryParams, $operationId, $paramEnumMap);
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
    if ($hasOneOf) {
        $unionType = buildVariantUnionType($operationId, $oneOfVariants);
        $args[] = "{$unionType} \$body";
    } elseif ($hasBodyProps) {
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

    // Merge runtime defaults for query params
    if ($hasQueryParams) {
        $queryDefaults = collectDefaults($queryParams);
        if (count($queryDefaults) > 0) {
            $defaultEntries = [];
            foreach ($queryDefaults as $name => $literal) {
                $escaped = str_replace("'", "\\'", $name);
                $defaultEntries[] = "'{$escaped}' => {$literal}";
            }
            $lines[] = '        $params = $params + [' . implode(', ', $defaultEntries) . '];';
        }
    }

    // Merge runtime defaults for body properties
    if ($hasBodyProps && !$hasOneOf) {
        $bodyDefaults = collectDefaults($bodyProperties);
        if (count($bodyDefaults) > 0) {
            $defaultEntries = [];
            foreach ($bodyDefaults as $name => $literal) {
                $escaped = str_replace("'", "\\'", $name);
                $defaultEntries[] = "'{$escaped}' => {$literal}";
            }
            $lines[] = '        $body = $body + [' . implode(', ', $defaultEntries) . '];';
        }
    }

    // Build request call
    $requestArgs = ["'{$httpMethod}'", $pathExpr];

    if ($hasQueryParams) {
        $requestArgs[] = '$params';
    } else {
        $requestArgs[] = '[]';
    }

    if ($hasOneOf) {
        $requestArgs[] = '$body->toArray()';
    } elseif ($hasBodyProps || $hasRawBody) {
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

// ─── Discriminated Union Body Classes ─────────────────────────────────────────

/**
 * Build a variant class name from operationId and variant title.
 * E.g. "OAuth.Token" + "Client Credentials" -> "OAuthTokenClientCredentials"
 */
function variantClassName(string $operationId, string $title): string
{
    $parts = explode('.', $operationId);
    $base = implode('', array_map(fn(string $p) => ucfirst($p), $parts));
    $titleParts = preg_split('/[\s_-]+/', $title);
    if ($titleParts === false) {
        $titleParts = [$title];
    }
    $suffix = implode('', array_map(fn(string $p) => ucfirst($p), $titleParts));
    return $base . $suffix;
}

/**
 * Emit variant body classes for a discriminated union.
 *
 * @param list<array{title: string, discriminatorField: string, discriminatorValue: string|int, properties: list<array{name: string, type: string, phpType: string, required: bool}>}> $variants
 * @param array<string, string> $paramEnumMap
 * @return list<string> Class names of emitted variants
 */
function emitVariantBodyClasses(string $operationId, array $variants, array $paramEnumMap = []): string
{
    $output = '';

    foreach ($variants as $variant) {
        $className = variantClassName($operationId, $variant['title']);
        $lines = [];
        $lines[] = "final class {$className}";
        $lines[] = '{';

        // Constructor with readonly properties
        $lines[] = '    public function __construct(';
        $ctorParams = [];
        foreach ($variant['properties'] as $prop) {
            $phpName = propertyToPhpName($prop['name']);
            $typeHint = $prop['phpType'];
            $nullable = $prop['required'] ? '' : '?';
            if ($nullable !== '' && !str_contains($typeHint, '|')) {
                $typeHint = '?' . $typeHint;
            } elseif ($nullable !== '' && str_contains($typeHint, '|')) {
                $typeHint = $typeHint . '|null';
            }
            $defaultVal = $prop['required'] ? '' : ' = null';
            $ctorParams[] = "        public readonly {$typeHint} \${$phpName}{$defaultVal},";
        }
        $lines[] = implode("\n", $ctorParams);
        $lines[] = '    ) {';
        $lines[] = '    }';

        // toArray method
        $lines[] = '';
        $lines[] = '    /**';
        $lines[] = '     * @return array<string, mixed>';
        $lines[] = '     */';
        $lines[] = '    public function toArray(): array';
        $lines[] = '    {';
        $lines[] = '        return [';

        // Discriminator field
        $discValue = $variant['discriminatorValue'];
        if (is_string($discValue)) {
            $lines[] = "            '{$variant['discriminatorField']}' => '{$discValue}',";
        } else {
            $lines[] = "            '{$variant['discriminatorField']}' => {$discValue},";
        }

        foreach ($variant['properties'] as $prop) {
            $phpName = propertyToPhpName($prop['name']);
            $lines[] = "            '{$prop['name']}' => \$this->{$phpName},";
        }

        $lines[] = '        ];';
        $lines[] = '    }';
        $lines[] = '}';

        $output .= implode("\n", $lines) . "\n\n";
    }

    return $output;
}

/**
 * Build the union type string for method signature.
 *
 * @param list<array{title: string, discriminatorField: string, discriminatorValue: string|int, properties: list<array{name: string, type: string, phpType: string, required: bool}>}> $variants
 * @return string e.g. "OAuthTokenClientCredentials|OAuthTokenAuthorizationCode"
 */
function buildVariantUnionType(string $operationId, array $variants): string
{
    $names = [];
    foreach ($variants as $variant) {
        $names[] = variantClassName($operationId, $variant['title']);
    }
    return implode('|', $names);
}

// ─── Code Emission: Combined File ────────────────────────────────────────────

/**
 * Emit a single group API class body (without file header).
 *
 * @param array{groupName: string, methods: list<array<string, mixed>>} $group
 * @param array<string, string> $paramEnumMap operationId:paramName -> enumName
 */
function emitGroupClass(array $group, array $paramEnumMap = []): string
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
        $lines[] = emitMethod($method, $isSearch, $paramEnumMap);
    }

    $lines[] = '}';

    return implode("\n", $lines);
}

/**
 * Emit a combined file with all group API classes and the client class.
 *
 * @param list<array{groupName: string, methods: list<array<string, mixed>>}> $groups
 * @param array<string, string> $paramEnumMap operationId:paramName -> enumName
 */
function emitCombinedFile(
    array $groups,
    string $clientName,
    string $namespace,
    string $defaultBaseUrl,
    int $defaultRateLimit,
    ?int $defaultSearchRateLimit = null,
    array $paramEnumMap = [],
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
    $lines[] = 'use Lolzteam\\Runtime\\RateLimitConfig;';
    $lines[] = 'use Lolzteam\\Runtime\\RetryConfig;';

    // Emit discriminated union body classes
    $emittedVariantClasses = false;
    foreach ($groups as $group) {
        foreach ($group['methods'] as $method) {
            $oneOfVariants = $method['oneOfVariants'] ?? [];
            if (count($oneOfVariants) > 0) {
                if (!$emittedVariantClasses) {
                    $lines[] = '';
                    $emittedVariantClasses = true;
                }
                $lines[] = emitVariantBodyClasses($method['operationId'], $oneOfVariants, $paramEnumMap);
            }
        }
    }

    // Emit all group API classes
    foreach ($groups as $group) {
        $lines[] = '';
        $lines[] = emitGroupClass($group, $paramEnumMap);
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
    $lines[] = '    /**';
    $lines[] = '     * @param ClientConfig|string $config Config object or API token (deprecated)';
    $lines[] = '     */';
    $lines[] = '    public function __construct(ClientConfig|string $config)';
    $lines[] = '    {';
    $lines[] = '        if (is_string($config)) {';
    $lines[] = '            $config = new ClientConfig(token: $config);';
    $lines[] = '        }';
    $lines[] = "        \$defaultRateLimit = new RateLimitConfig(";
    $lines[] = "            requestsPerMinute: \$config->rateLimit?->requestsPerMinute ?? {$defaultRateLimit},";
    if ($defaultSearchRateLimit !== null) {
        $lines[] = "            searchRequestsPerMinute: \$config->rateLimit?->searchRequestsPerMinute ?? {$defaultSearchRateLimit},";
    } else {
        $lines[] = '            searchRequestsPerMinute: $config->rateLimit?->searchRequestsPerMinute,';
    }
    $lines[] = '        );';
    $lines[] = "        \$resolvedConfig = new ClientConfig(";
    $lines[] = '            token: $config->token,';
    $lines[] = "            baseUrl: \$config->baseUrl !== '' ? \$config->baseUrl : '{$defaultBaseUrl}',";
    $lines[] = '            proxy: $config->proxy,';
    $lines[] = '            retry: $config->retry ?? new RetryConfig(),';
    $lines[] = '            rateLimit: $defaultRateLimit,';
    $lines[] = '            onRetry: $config->onRetry,';
    $lines[] = '            timeout: $config->timeout,';
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
