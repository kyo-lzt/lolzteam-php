<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class LinksApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @return array{
    link-forums: list<array{
        link_id: int,
        link_title: string,
        link_description: string,
        links: array{
            target: string,
            detail: string,
        },
        permissions: array{
            view: bool,
        },
    }>,
    link-forums_total: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(): array
    {
        return $this->http->request('GET', '/link-forums');
    }

    /**
     * @param int $link_id
     * @return array{
    link-forum: array{
        link_id: int,
        link_title: string,
        link_description: string,
        links: array{
            target: string,
            detail: string,
        },
        permissions: array{
            view: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $link_id): array
    {
        return $this->http->request('GET', "/link-forums/{$link_id}");
    }
}
