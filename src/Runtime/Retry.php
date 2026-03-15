<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use Lolzteam\Runtime\Errors\NetworkException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\RetryExhaustedException;
use Lolzteam\Runtime\Errors\ServerException;

final class Retry
{
    /**
     * @template T
     * @param callable(): T $fn
     * @return T
     */
    public static function withRetry(
        callable $fn,
        RetryConfig $config,
        string $method = '',
        string $path = '',
    ): mixed {
        $lastException = null;

        for ($attempt = 0; $attempt <= $config->maxRetries; $attempt++) {
            try {
                return $fn();
            } catch (RateLimitException $e) {
                $lastException = $e;
                if ($attempt === $config->maxRetries) {
                    if ($attempt > 0) {
                        throw new RetryExhaustedException($attempt + 1, $e);
                    }
                    throw $e;
                }
                $delayMs = self::computeDelay($e, $attempt, $config);
                self::notifyAndSleep($delayMs, $attempt, $e, $method, $path, $config);
            } catch (ServerException $e) {
                if (!in_array($e->statusCode, [502, 503, 504], true)) {
                    throw $e;
                }
                $lastException = $e;
                if ($attempt === $config->maxRetries) {
                    if ($attempt > 0) {
                        throw new RetryExhaustedException($attempt + 1, $e);
                    }
                    throw $e;
                }
                $delayMs = self::computeDelay(null, $attempt, $config);
                self::notifyAndSleep($delayMs, $attempt, $e, $method, $path, $config);
            } catch (NetworkException $e) {
                if (!$e->isTransient()) {
                    throw $e;
                }
                $lastException = $e;
                if ($attempt === $config->maxRetries) {
                    if ($attempt > 0) {
                        throw new RetryExhaustedException($attempt + 1, $e);
                    }
                    throw $e;
                }
                $delayMs = self::computeDelay(null, $attempt, $config);
                self::notifyAndSleep($delayMs, $attempt, $e, $method, $path, $config);
            }
        }

        /** @var never */
        throw $lastException;
    }

    private static function computeDelay(
        ?RateLimitException $rateLimitException,
        int $attempt,
        RetryConfig $config,
    ): int {
        if ($rateLimitException?->retryAfter !== null) {
            $delayMs = $rateLimitException->retryAfter * 1000;
        } else {
            $delayMs = (int) ($config->baseDelayMs * (2 ** $attempt));
            $jitter = random_int(0, max(1, (int) ($delayMs * 0.25)));
            $delayMs += $jitter;
        }

        return min($delayMs, $config->maxDelayMs);
    }

    private static function notifyAndSleep(
        int $delayMs,
        int $attempt,
        \Throwable $error,
        string $method,
        string $path,
        RetryConfig $config,
    ): void {
        if ($config->onRetry !== null) {
            ($config->onRetry)(new RetryInfo(
                attempt: $attempt + 1,
                delayMs: (float) $delayMs,
                error: $error,
                method: $method,
                path: $path,
            ));
        }

        usleep($delayMs * 1000);
    }
}
