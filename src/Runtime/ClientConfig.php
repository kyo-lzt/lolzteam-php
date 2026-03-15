<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final class ClientConfig
{
    public readonly string $token;
    public readonly string $baseUrl;
    public readonly ?string $proxy;
    public readonly RetryConfig $retry;
    public readonly int $requestsPerMinute;
    public readonly ?int $searchRequestsPerMinute;

    /** @var callable|null Guzzle handler (for testing) */
    public readonly mixed $handler;

    public function __construct(
        string $token,
        string $baseUrl,
        ?string $proxy = null,
        RetryConfig $retry = new RetryConfig(),
        int $requestsPerMinute = 300,
        ?int $searchRequestsPerMinute = null,
        ?callable $handler = null,
    ) {
        if ($token === '') {
            throw new \InvalidArgumentException('token must not be empty');
        }
        if ($requestsPerMinute < 1) {
            throw new \InvalidArgumentException('requestsPerMinute must be >= 1');
        }
        if ($searchRequestsPerMinute !== null && $searchRequestsPerMinute < 1) {
            throw new \InvalidArgumentException('searchRequestsPerMinute must be >= 1');
        }
        if ($proxy !== null) {
            $parsed = parse_url($proxy);
            if ($parsed === false) {
                throw new \InvalidArgumentException('invalid proxy URL');
            }
            $scheme = $parsed['scheme'] ?? null;
            if ($scheme === null || !in_array($scheme, ['http', 'https', 'socks5'], true)) {
                throw new \InvalidArgumentException('unsupported proxy scheme: ' . ($scheme ?? '<none>'));
            }
            if (empty($parsed['host'])) {
                throw new \InvalidArgumentException('proxy URL has no host');
            }
        }
        $this->token = $token;
        $this->baseUrl = $baseUrl;
        $this->proxy = $proxy;
        $this->retry = $retry;
        $this->requestsPerMinute = $requestsPerMinute;
        $this->searchRequestsPerMinute = $searchRequestsPerMinute;
        $this->handler = $handler;
    }
}
