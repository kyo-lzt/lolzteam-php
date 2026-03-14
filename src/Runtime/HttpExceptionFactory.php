<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\HttpException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\ServerException;

final class HttpExceptionFactory
{
    /**
     * @param array<string, string|string[]> $headers
     */
    public static function create(int $status, mixed $body, array $headers): HttpException
    {
        return match ($status) {
            429 => new RateLimitException($status, $body, $headers),
            401, 403 => new AuthException($status, $body, $headers),
            404 => new NotFoundException($status, $body, $headers),
            500, 502, 503, 504 => new ServerException($status, $body, $headers),
            default => new HttpException($status, $body, $headers),
        };
    }
}
