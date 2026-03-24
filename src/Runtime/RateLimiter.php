<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final class RateLimiter
{
    private float $tokens;
    private int $maxTokens;
    private float $lastRefillTime;

    public function __construct(int $requestsPerMinute)
    {
        if ($requestsPerMinute <= 0) {
            throw new Errors\ConfigException('requestsPerMinute must be greater than 0');
        }

        $this->maxTokens = $requestsPerMinute;
        $this->tokens = (float) $requestsPerMinute;
        $this->lastRefillTime = microtime(true);
    }

    public function acquire(): void
    {
        $this->refill();

        if ($this->tokens < 1.0) {
            $tokensNeeded = 1.0 - $this->tokens;
            $secondsToWait = $tokensNeeded / ($this->maxTokens / 60.0);
            usleep((int) ($secondsToWait * 1_000_000));
            $this->refill();
        }

        $this->tokens -= 1.0;
    }

    private function refill(): void
    {
        $now = microtime(true);
        $elapsed = $now - $this->lastRefillTime;
        $tokensToAdd = $elapsed * ($this->maxTokens / 60.0);

        $this->tokens = min((float) $this->maxTokens, $this->tokens + $tokensToAdd);
        $this->lastRefillTime = $now;
    }
}
