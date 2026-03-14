<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class ProxyApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @return array{
    proxies: list<array{
        proxy: array{
            proxy_id: int,
            user_id: int,
            proxy_ip: string,
            proxy_port: int,
            proxy_user: string,
            proxy_pass: string,
            proxyString: string,
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function get(): array
    {
        return $this->http->request('GET', '/proxy');
    }

    /**
     * @param array{proxy_ip?: string, proxy_port?: int, proxy_user?: string, proxy_pass?: string, proxy_row?: string} $body
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
    public function add(array $body): array
    {
        return $this->http->request('POST', '/proxy', [], $body);
    }

    /**
     * @param array{proxy_id?: int, delete_all?: bool} $body
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
        return $this->http->request('DELETE', '/proxy', [], $body);
    }
}
