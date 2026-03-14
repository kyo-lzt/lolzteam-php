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
    private RetryConfig $retryConfig;

    public function __construct(ClientConfig $config)
    {
        $this->retryConfig = $config->retry;
        $this->rateLimiter = new RateLimiter($config->requestsPerMinute);

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
     * @return array<string, mixed>|string
     */
    public function request(
        string $method,
        string $path,
        array $query = [],
        ?array $body = null,
        bool $multipart = false,
    ): array|string {
        /** @var array<string, mixed> */
        return Retry::withRetry(function () use ($method, $path, $query, $body, $multipart): array {
            return $this->doRequest($method, $path, $query, $body, $multipart);
        }, $this->retryConfig);
    }

    /**
     * @param array<string, scalar> $query
     * @param array<string, mixed>|null $body
     * @return array<string, mixed>|string
     */
    private function doRequest(
        string $method,
        string $path,
        array $query,
        ?array $body,
        bool $multipart,
    ): array|string {
        $this->rateLimiter->acquire();

        $options = [];

        if ($query !== []) {
            $options[RequestOptions::QUERY] = $query;
        }

        if ($body !== null) {
            if ($multipart) {
                $options[RequestOptions::MULTIPART] = [];
                foreach ($body as $name => $value) {
                    $options[RequestOptions::MULTIPART][] = [
                        'name' => (string) $name,
                        'contents' => $value,
                    ];
                }
            } else {
                $options[RequestOptions::FORM_PARAMS] = $body;
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
