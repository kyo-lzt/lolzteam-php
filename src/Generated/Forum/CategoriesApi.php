<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class CategoriesApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{parent_category_id?: int, parent_forum_id?: int, order?: 'natural'|'list'} $params
     * @return array{
    categories: list<array{
        category_id: int,
        category_title: string,
        category_description: string,
        links: array{
            permalink: string,
            detail: string,
            sub-categories: string,
            sub-forums: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
        },
    }>,
    categories_total: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/categories', $params);
    }

    /**
     * @param int $category_id
     * @return array{
    category: array{
        category_id: int,
        category_title: string,
        category_description: string,
        links: array{
            permalink: string,
            detail: string,
            sub-categories: string,
            sub-forums: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $category_id): array
    {
        return $this->http->request('GET', "/categories/{$category_id}");
    }
}
