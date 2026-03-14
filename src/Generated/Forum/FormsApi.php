<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class FormsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param array{page?: int} $params
     * @return array{
    forms: list<array{
        form_id: int,
        title: string,
        description: string,
        fields: list<array{
            field_id: int,
            title: string,
            fieldChoices: array{
                buy: string,
                sell: string,
            },
            required: int,
            max_length: int,
            default_value: string,
        }>,
    }>,
    formsPerPage: int,
    page: int,
    totalForms: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/forms', $params);
    }

    /**
     * @param array{form_id: 3, fields: array{
    22?: string,
    23?: 'cp_re_1'|'cp_re_2'|'cp_re_3'|'cp_re_4'|'cp_re_5'|'cp_re_6'|'cp_re_7'|'cp_re_8'|'cp_re_9'|'cp_re_10'|'cp_re_11'|'cp_re_12'|'cp_re_13'|'cp_re_other',
    24: string,
    27?: string,
    28?: string,
    29?: string,
    30?: string,
}} $body
     * @return array{
    message: string,
    content: array{
        thread_id: int,
        forum_id: int,
        thread_title: string,
        thread_view_count: int,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        thread_create_date: int,
        thread_update_date: int,
        user_is_ignored: bool,
        thread_post_count: int,
        thread_is_published: bool,
        thread_is_deleted: bool,
        thread_is_sticky: bool,
        thread_is_closed: bool,
        thread_is_followed: bool,
        thread_prefixes: list<mixed>,
        thread_tags: list<mixed>,
        links: array{
            permalink: string,
            detail: string,
            followers: string,
            forum: string,
            posts: string,
            first_poster: string,
            first_poster_avatar: string,
            first_post: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
            follow: bool,
            post: bool,
        },
        node_title: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function create(array $body = []): array
    {
        return $this->http->request('POST', '/forms/save', [], $body);
    }
}
