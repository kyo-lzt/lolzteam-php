<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final readonly class RetryInfo
{
    public function __construct(
        public int $attempt,
        public float $delayMs,
        public \Throwable $error,
        public string $method,
        public string $path,
    ) {
    }
}
