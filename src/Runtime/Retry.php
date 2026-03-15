<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\ServerException;

final class Retry
{
    /**
     * @template T
     * @param callable(): T $fn
     * @return T
     */
    public static function withRetry(callable $fn, RetryConfig $config): mixed
    {
        $lastException = null;

        for ($attempt = 0; $attempt <= $config->maxRetries; $attempt++) {
            try {
                return $fn();
            } catch (RateLimitException $e) {
                $lastException = $e;
                if ($attempt === $config->maxRetries) {
                    throw $e;
                }
                self::sleep($e, $attempt, $config);
            } catch (ServerException $e) {
                if (!in_array($e->statusCode, [502, 503], true)) {
                    throw $e;
                }
                $lastException = $e;
                if ($attempt === $config->maxRetries) {
                    throw $e;
                }
                self::sleep(null, $attempt, $config);
            }
        }

        /** @var never */
        throw $lastException;
    }

    private static function sleep(
        ?RateLimitException $rateLimitException,
        int $attempt,
        RetryConfig $config,
    ): void {
        if ($rateLimitException?->retryAfter !== null) {
            $delayMs = $rateLimitException->retryAfter * 1000;
        } else {
            $delayMs = (int) ($config->baseDelayMs * (2 ** $attempt));
            $jitter = random_int(0, max(1, (int) ($delayMs * 0.25)));
            $delayMs += $jitter;
        }

        $delayMs = min($delayMs, $config->maxDelayMs);
        usleep($delayMs * 1000);
    }
}
