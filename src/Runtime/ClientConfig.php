<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final class ClientConfig
{
    public readonly string $token;
    public readonly string $baseUrl;
    public readonly ?ProxyConfig $proxy;
    public readonly ?RetryConfig $retry;
    public readonly ?RateLimitConfig $rateLimit;
    public readonly ?RateLimitConfig $searchRateLimit;
    public readonly int $timeout;

    /** @var (\Closure(RetryInfo): void)|null */
    public readonly ?\Closure $onRetry;

    /** @var callable|null Guzzle handler (for testing) */
    public readonly mixed $handler;

    /**
     * @param (\Closure(RetryInfo): void)|null $onRetry
     */
    public function __construct(
        string $token,
        string $baseUrl = '',
        ?ProxyConfig $proxy = null,
        ?RetryConfig $retry = new RetryConfig(),
        ?RateLimitConfig $rateLimit = null,
        ?RateLimitConfig $searchRateLimit = null,
        ?\Closure $onRetry = null,
        ?callable $handler = null,
        int $timeout = 30,
    ) {
        if ($token === '') {
            throw new \InvalidArgumentException('token must not be empty');
        }
        if ($timeout < 1) {
            throw new \InvalidArgumentException('timeout must be >= 1');
        }
        $this->token = $token;
        $this->baseUrl = $baseUrl;
        $this->proxy = $proxy;
        $this->retry = $retry;
        $this->rateLimit = $rateLimit;
        $this->searchRateLimit = $searchRateLimit;
        $this->onRetry = $onRetry;
        $this->timeout = $timeout;
        $this->handler = $handler;
    }
}
