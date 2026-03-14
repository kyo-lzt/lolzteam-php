<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class ImapApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{domain: string, imap_server: string, port: int, secure: bool} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function create(array $body = []): array
    {
        return $this->http->request('POST', '/imap', [], $body);
    }

    /**
     * @param array{domain: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function delete(array $body = []): array
    {
        return $this->http->request('DELETE', '/imap', [], $body);
    }
}
