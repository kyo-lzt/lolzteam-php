<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class NavigationApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param array{parent?: int} $params
     * @return array{
    elements: list<array{
        category_id: int,
        category_title: string,
        category_description: string,
        links: array{
            permalink: string,
            detail: string,
            sub-categories: string,
            sub-forums: string,
            sub-elements: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
        },
        navigation_type: string,
        navigation_id: int,
        navigation_parent_id: int,
        has_sub_elements: bool,
    }>,
    elements_count: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/navigation', $params);
    }
}
