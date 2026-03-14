<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class TagsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @return array{
    tags: array{
        000: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function popular(): array
    {
        return $this->http->request('GET', '/tags');
    }

    /**
     * @param array{page?: int, limit?: int} $params
     * @return array{
    tags: array{
        1: string,
        2: string,
        3: string,
        4: string,
        5: string,
        6: string,
        7: string,
        8: string,
        9: string,
        10: string,
        11: string,
        12: string,
        14: string,
        15: string,
        16: string,
        17: string,
        18: string,
        19: string,
        20: string,
    },
    tags_total: int,
    links: array{
        pages: int,
        page: int,
        next: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/tags/list', $params);
    }

    /**
     * @param int $tag_id
     * @param array{page?: int, limit?: int} $params
     * @return array{
    tag: array{
        tag_id: int,
        tag_text: string,
        tag_use_count: int,
        links: array{
            permalink: string,
            detail: string,
        },
    },
    tagged: list<array{
        content_type: string,
        content_id: int,
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
        thread_is_followed: bool,
        first_post: array{
            post_id: int,
            thread_id: int,
            poster_user_id: int,
            poster_username: string,
            poster_username_html: string,
            post_create_date: int,
            post_body: string,
            post_body_html: string,
            post_body_plain_text: string,
            signature: string,
            signature_html: string,
            signature_plain_text: string,
            post_like_count: int,
            post_attachment_count: int,
            user_is_ignored: bool,
            post_is_published: bool,
            post_is_deleted: bool,
            post_update_date: int,
            post_is_first_post: bool,
            links: array{
                permalink: string,
                detail: string,
                thread: string,
                poster: string,
                likes: string,
                report: string,
                attachments: string,
                poster_avatar: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                reply: bool,
                like: bool,
                report: bool,
                upload_attachment: bool,
            },
        },
        thread_prefixes: list<array{
            prefix_id: int,
            prefix_title: string,
        }>,
        thread_tags: array{
            1: string,
            654: string,
        },
        links: array{
            permalink: string,
            detail: string,
            followers: string,
            forum: string,
            posts: string,
            first_poster: string,
            first_poster_avatar: string,
            first_post: string,
            last_poster: string,
            last_post: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
            follow: bool,
            post: bool,
            upload_attachment: bool,
            edit: bool,
        },
        forum: array{
            forum_id: int,
            forum_title: string,
            forum_description: string,
            forum_thread_count: int,
            forum_post_count: int,
            forum_prefixes: list<array{
                group_title: string,
                group_prefixes: list<array{
                    prefix_id: int,
                    prefix_title: string,
                }>,
            }>,
            thread_default_prefix_id: int,
            thread_prefix_is_required: bool,
            links: array{
                permalink: string,
                detail: string,
                sub-categories: string,
                sub-forums: string,
                threads: string,
                followers: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                create_thread: bool,
                upload_attachment: bool,
                tag_thread: bool,
                follow: bool,
            },
            forum_is_followed: bool,
        },
    }>,
    tagged_total: int,
    links: array{
        pages: int,
        page: int,
        next: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $tag_id, array $params = []): array
    {
        return $this->http->request('GET', "/tags/{$tag_id}", $params);
    }

    /**
     * @param array{tag: string} $params
     * @return array{
    tags: list<string>,
    ids: list<int>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function find(array $params = []): array
    {
        return $this->http->request('GET', '/tags/find', $params);
    }
}
