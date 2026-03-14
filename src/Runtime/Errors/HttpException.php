<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

class HttpException extends LolzteamException
{
    /**
     * @param array<string, string|string[]> $headers
     */
    public function __construct(
        public readonly int $statusCode,
        public readonly mixed $body,
        public readonly array $headers,
        ?\Throwable $previous = null,
    ) {
        parent::__construct("HTTP {$statusCode}", $statusCode, $previous);
    }
}
