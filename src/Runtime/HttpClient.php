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

    public function __construct(ClientConfig $config)
    {
        $this->retryConfig = $config->retry;
        $this->rateLimiter = new RateLimiter($config->requestsPerMinute);
        $this->searchRateLimiter = $config->searchRequestsPerMinute !== null
            ? new RateLimiter($config->searchRequestsPerMinute)
            : null;

        /** @var array<string, mixed> $guzzleConfig */
        $guzzleConfig = [
            'base_uri' => rtrim($config->baseUrl, '/') . '/',
            'http_errors' => false,
            'timeout' => 30,
            'headers' => [
                'Authorization' => "Bearer {$config->token}",
            ],
        ];

        if ($config->proxy !== null) {
            $guzzleConfig['proxy'] = $config->proxy;
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
            $options[RequestOptions::QUERY] = $query;
        }

        if ($body !== null) {
            switch ($bodyEncoding) {
                case 'json':
                    $options[RequestOptions::JSON] = $body;
                    break;
                case 'multipart':
                    $options[RequestOptions::MULTIPART] = [];
                    foreach ($body as $name => $value) {
                        $options[RequestOptions::MULTIPART][] = [
                            'name' => (string) $name,
                            'contents' => $value,
                        ];
                    }
                    break;
                default:
                    $options[RequestOptions::FORM_PARAMS] = $body;
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

    private function parseBody(ResponseInterface $response): mixed
    {
        $raw = (string) $response->getBody();

        if ($raw === '') {
            return null;
        }

        try {
            return json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            return $raw;
        }
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
