<?php

declare(strict_types=1);

namespace Lolzteam\Runtime\Errors;

class NetworkException extends LolzteamException
{
    public function isTransient(): bool
    {
        $cause = $this->getPrevious();

        while ($cause !== null) {
            if ($cause instanceof \GuzzleHttp\Exception\ConnectException) {
                return true;
            }
            if ($cause instanceof \GuzzleHttp\Exception\RequestException
                && str_contains((string) $cause->getMessage(), 'timed out')) {
                return true;
            }
            $cause = $cause->getPrevious();
        }

        return false;
    }
}
