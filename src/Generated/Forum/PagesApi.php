<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class PagesApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param array{parent_page_id?: int, order?: 'natural'|'list'} $params
     * @return array{
    pages: list<array{
        page_id: int,
        page_title: string,
        page_description: string,
        links: array{
            permalink: string,
            detail: string,
            sub-pages: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
        },
    }>,
    pages_total: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/pages', $params);
    }

    /**
     * @param int $page_id
     * @return array{
    page: array{
        page_id: int,
        page_title: string,
        page_description: string,
        page_view_count: int,
        links: array{
            permalink: string,
            detail: string,
            sub-pages: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
        },
        page_html: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $page_id): array
    {
        return $this->http->request('GET', "/pages/{$page_id}");
    }
}
