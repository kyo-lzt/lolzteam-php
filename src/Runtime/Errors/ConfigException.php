<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

class ConfigException extends LolzteamException
{
    public function __construct(string $message, ?\Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
