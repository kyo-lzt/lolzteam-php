<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

class NetworkException extends LolzteamException
{
    public function isTransient(): bool
    {
        $cause = $this->getPrevious();

        return $cause instanceof \GuzzleHttp\Exception\ConnectException;
    }
}
