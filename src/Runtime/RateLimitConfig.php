<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final readonly class RateLimitConfig
{
    public int $requestsPerMinute;

    public function __construct(
        int $requestsPerMinute = 300,
    ) {
        if ($requestsPerMinute < 1) {
            throw new \InvalidArgumentException('requestsPerMinute must be >= 1');
        }
        $this->requestsPerMinute = $requestsPerMinute;
    }
}
