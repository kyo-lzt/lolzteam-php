<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

class RetryExhaustedException extends LolzteamException
{
    public function __construct(
        public readonly int $attempts,
        public readonly \Throwable $lastError,
    ) {
        parent::__construct(
            "Request failed after {$attempts} attempts: {$lastError->getMessage()}",
            0,
            $lastError,
        );
    }
}
