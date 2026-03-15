<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\RequestOptions;
use Lolzteam\Runtime\Errors\NetworkException;
use Psr\Http\Message\ResponseInterface;

final class HttpClient
{
    private Client $guzzle;
    private RateLimiter $rateLimiter;
    private ?RateLimiter $searchRateLimiter;
    private ?RetryConfig $retryConfig;

    /** @var (\Closure(RetryInfo): void)|null */
    private ?\Closure $onRetry;

    public function __construct(ClientConfig $config)
    {
        $this->retryConfig = $config->retry;
        $this->onRetry = $config->onRetry;

        $rateLimit = $config->rateLimit;
        $this->rateLimiter = new RateLimiter($rateLimit?->requestsPerMinute ?? 300);
        $this->searchRateLimiter = $rateLimit?->searchRequestsPerMinute !== null
            ? new RateLimiter($rateLimit->searchRequestsPerMinute)
            : null;

        /** @var array<string, mixed> $guzzleConfig */
        $guzzleConfig = [
            'base_uri' => rtrim($config->baseUrl, '/') . '/',
            'http_errors' => false,
            'timeout' => $config->timeout,
            'headers' => [
                'Authorization' => "Bearer {$config->token}",
            ],
        ];

        if ($config->proxy !== null) {
            $guzzleConfig['proxy'] = $config->proxy->url;
        }

        if ($config->handler !== null) {
            $guzzleConfig['handler'] = $config->handler;
        }

        $this->guzzle = new Client($guzzleConfig);
    }

    /**
     * @param 'GET'|'POST'|'PUT'|'PATCH'|'DELETE' $method
     * @param array<string, scalar> $query
     * @param array<string, mixed>|null $body
     * @param 'form'|'json'|'multipart' $bodyEncoding
     * @return array<string, mixed>|string
     */
    public function request(
        string $method,
        string $path,
        array $query = [],
        ?array $body = null,
        string $bodyEncoding = 'form',
        bool $isSearch = false,
    ): array|string {
        if ($this->retryConfig === null) {
            /** @var array<string, mixed> */
            return $this->doRequest($method, $path, $query, $body, $bodyEncoding, $isSearch);
        }

        /** @var array<string, mixed> */
        return Retry::withRetry(
            fn (): array => $this->doRequest($method, $path, $query, $body, $bodyEncoding, $isSearch),
            $this->retryConfig,
            $method,
            $path,
            $this->onRetry,
        );
    }

    /**
     * @param array<string, scalar> $query
     * @param array<string, mixed>|null $body
     * @param 'form'|'json'|'multipart' $bodyEncoding
     * @return array<string, mixed>|string
     */
    private function doRequest(
        string $method,
        string $path,
        array $query,
        ?array $body,
        string $bodyEncoding,
        bool $isSearch = false,
    ): array|string {
        $this->rateLimiter->acquire();

        if ($isSearch && $this->searchRateLimiter !== null) {
            $this->searchRateLimiter->acquire();
        }

        $options = [];

        if ($query !== []) {
            $options[RequestOptions::QUERY] = self::resolveEnumValues($query);
        }

        if ($body !== null) {
            $resolvedBody = self::resolveEnumValues($body);
            switch ($bodyEncoding) {
                case 'json':
                    $options[RequestOptions::JSON] = $resolvedBody;
                    break;
                case 'multipart':
                    $options[RequestOptions::MULTIPART] = [];
                    foreach ($resolvedBody as $name => $value) {
                        if (is_string($value)) {
                            $stream = fopen('php://memory', 'r+');
                            fwrite($stream, $value);
                            rewind($stream);
                            $contents = $stream;
                        } else {
                            $contents = $value;
                        }
                        $options[RequestOptions::MULTIPART][] = [
                            'name' => (string) $name,
                            'contents' => $contents,
                        ];
                    }
                    break;
                default:
                    $options[RequestOptions::FORM_PARAMS] = $resolvedBody;
                    break;
            }
        }

        try {
            $response = $this->guzzle->request($method, ltrim($path, '/'), $options);
        } catch (ConnectException $e) {
            throw new NetworkException($e->getMessage(), 0, $e);
        }

        $statusCode = $response->getStatusCode();
        $responseBody = $this->parseBody($response);

        if ($statusCode < 200 || $statusCode >= 300) {
            throw HttpExceptionFactory::create(
                $statusCode,
                $responseBody,
                $this->flattenHeaders($response),
            );
        }

        if (is_array($responseBody)) {
            return $responseBody;
        }

        return is_string($responseBody) ? $responseBody : [];
    }

    /**
     * Resolve BackedEnum instances in an array to their backing values.
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private static function resolveEnumValues(array $data): array
    {
        $result = [];
        foreach ($data as $key => $value) {
            if ($value instanceof \BackedEnum) {
                $result[$key] = $value->value;
            } elseif (is_array($value)) {
                $result[$key] = self::resolveEnumValues($value);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    private function parseBody(ResponseInterface $response): mixed
    {
        $raw = (string) $response->getBody();

        if ($raw === '') {
            return null;
        }

        $contentType = $response->getHeaderLine('Content-Type');
        if (str_contains($contentType, 'json')) {
            try {
                return json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                throw new NetworkException('Failed to decode JSON response: ' . $e->getMessage(), 0, $e);
            }
        }

        return $raw;
    }

    /**
     * @return array<string, string|string[]>
     */
    private function flattenHeaders(ResponseInterface $response): array
    {
        $headers = [];

        foreach ($response->getHeaders() as $name => $values) {
            $headers[$name] = count($values) === 1 ? $values[0] : $values;
        }

        return $headers;
    }
}
