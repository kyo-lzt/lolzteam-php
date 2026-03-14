<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final readonly class ClientConfig
{
    public string $token;
    public string $baseUrl;
    public ?string $proxy;
    public RetryConfig $retry;
    public int $requestsPerMinute;

    public function __construct(
        string $token,
        string $baseUrl,
        ?string $proxy = null,
        RetryConfig $retry = new RetryConfig(),
        int $requestsPerMinute = 300,
    ) {
        if ($token === '') {
            throw new \InvalidArgumentException('token must not be empty');
        }
        if ($requestsPerMinute < 1) {
            throw new \InvalidArgumentException('requestsPerMinute must be >= 1');
        }
        $this->token = $token;
        $this->baseUrl = $baseUrl;
        $this->proxy = $proxy;
        $this->retry = $retry;
        $this->requestsPerMinute = $requestsPerMinute;
    }
}
