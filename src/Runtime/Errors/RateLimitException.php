<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

class RateLimitException extends HttpException
{
    public readonly ?int $retryAfter;

    /**
     * @param array<string, string|string[]> $headers
     */
    public function __construct(
        int $statusCode,
        mixed $body,
        array $headers,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($statusCode, $body, $headers, $previous);

        $loweredHeaders = array_change_key_case($headers, CASE_LOWER);
        $retryAfterRaw = $loweredHeaders['retry-after'] ?? null;

        if (is_array($retryAfterRaw)) {
            $retryAfterRaw = $retryAfterRaw[0] ?? null;
        }

        $this->retryAfter = is_numeric($retryAfterRaw)
            ? (int) $retryAfterRaw
            : null;
    }
}
