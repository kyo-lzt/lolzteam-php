<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class FormsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

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
     * @param array{form_id: 1|3, fields: array{
    8: float,
    11: float,
    15?: 'market'|'ru_1'|'ru_2'|'ru_3'|'ru_4'|'ru_5'|'ru_6'|'ru_7'|'ru_8'|'ru_9'|'ru_10'|'ru_11'|'ua_1'|'ua_2'|'ua_3'|'ua_4'|'ua_5'|'ua_6'|'ua_7'|'ua_8'|'kz_1'|'kz_2'|'kz_3'|'kz_4'|'kz_5'|'kz_6'|'kz_7'|'kz_8'|'by_1'|'by_2'|'by_3'|'by_4'|'by_5'|'by_6'|'by_7'|'by_8'|'by_9'|'sbp'|'cr_1'|'cr_2'|'cr_3'|'cr_4'|'cr_5'|'cr_6'|'cr_7'|'cr_8'|'cr_12'|'cr_9'|'cr_10'|'cr_11'|'ot_1'|'ot_2'|'ot_3'|'ot_4'|'cr_13'|'by_10',
    16?: 'rub'|'dollar'|'euro'|'uah'|'tenge'|'byn',
    17?: 'market'|'ru_1'|'ru_2'|'ru_3'|'ru_4'|'ru_5'|'ru_6'|'ru_7'|'ru_8'|'ru_9'|'ru_10'|'ru_11'|'ua_1'|'ua_2'|'ua_3'|'ua_4'|'ua_5'|'ua_6'|'ua_7'|'ua_8'|'kz_1'|'kz_2'|'kz_3'|'kz_4'|'kz_5'|'kz_6'|'kz_7'|'kz_8'|'by_1'|'by_2'|'by_3'|'by_4'|'by_5'|'by_6'|'by_7'|'by_8'|'by_9'|'sbp'|'cr_1'|'cr_2'|'cr_3'|'cr_4'|'cr_5'|'cr_6'|'cr_7'|'cr_8'|'cr_12'|'cr_9'|'cr_10'|'cr_11'|'ot_1'|'ot_2'|'ot_3'|'ot_4'|'cr_13'|'by_10',
    18?: 'rub'|'dollar'|'euro'|'uah'|'tenge'|'byn',
    14?: string,
}|array{
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
