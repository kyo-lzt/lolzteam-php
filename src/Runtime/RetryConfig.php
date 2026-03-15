<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final class RetryConfig
{
    public readonly int $maxRetries;
    public readonly int $baseDelayMs;
    public readonly int $maxDelayMs;

    /** @var (\Closure(RetryInfo): void)|null */
    public readonly ?\Closure $onRetry;

    public function __construct(
        int $maxRetries = 3,
        int $baseDelayMs = 1000,
        int $maxDelayMs = 30000,
        ?\Closure $onRetry = null,
    ) {
        if ($maxRetries < 0) {
            throw new \InvalidArgumentException('maxRetries must be >= 0');
        }
        if ($baseDelayMs < 1) {
            throw new \InvalidArgumentException('baseDelayMs must be >= 1');
        }
        if ($maxDelayMs < 1) {
            throw new \InvalidArgumentException('maxDelayMs must be >= 1');
        }
        $this->maxRetries = $maxRetries;
        $this->baseDelayMs = $baseDelayMs;
        $this->maxDelayMs = $maxDelayMs;
        $this->onRetry = $onRetry;
    }
}
