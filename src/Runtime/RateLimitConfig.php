<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final readonly class RateLimitConfig
{
    public int $requestsPerMinute;
    public ?int $searchRequestsPerMinute;

    public function __construct(
        int $requestsPerMinute = 300,
        ?int $searchRequestsPerMinute = null,
    ) {
        if ($requestsPerMinute < 1) {
            throw new \InvalidArgumentException('requestsPerMinute must be >= 1');
        }
        if ($searchRequestsPerMinute !== null && $searchRequestsPerMinute < 1) {
            throw new \InvalidArgumentException('searchRequestsPerMinute must be >= 1');
        }
        $this->requestsPerMinute = $requestsPerMinute;
        $this->searchRequestsPerMinute = $searchRequestsPerMinute;
    }
}
