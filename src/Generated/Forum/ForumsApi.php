<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class ForumsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{parent_category_id?: int, parent_forum_id?: int, order?: 'natural'|'list'} $params
     * @return array{
    forums: list<array{
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
            tag_thread: bool,
            follow: bool,
        },
        forum_is_followed: bool,
    }>,
    forums_total: int,
    tabs: list<array{
        link_title: string,
        isDefault: bool,
        title: string,
        isHidden: bool,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/forums', $params);
    }

    /**
     * @return array{
    data: array{
        0: array{
            0: array{
                forum_id: int,
                forum_title: string,
                forum_description: string,
                forum_thread_count: int,
                forum_post_count: int,
                parent_node_id: int,
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
                    tag_thread: bool,
                    follow: bool,
                },
                forum_is_followed: bool,
            },
        },
    },
    tabs: list<array{
        link_title: string,
        isDefault: bool,
        title: string,
        isHidden: bool,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function grouped(): array
    {
        return $this->http->request('GET', '/forums/grouped');
    }

    /**
     * @param int $forum_id
     * @return array{
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $forum_id): array
    {
        return $this->http->request('GET', "/forums/{$forum_id}");
    }

    /**
     * @param int $forum_id
     * @return array{
    users: list<array{
        user_id: int,
        username: string,
        follow: array{
            post: bool,
            alert: bool,
            email: bool,
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function followers(int $forum_id): array
    {
        return $this->http->request('GET', "/forums/{$forum_id}/followers");
    }

    /**
     * @param int $forum_id
     * @param array{post?: bool, alert?: bool, email?: bool, prefix_ids?: list<int>, minimal_contest_amount?: int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function follow(int $forum_id, array $body = []): array
    {
        return $this->http->request('POST', "/forums/{$forum_id}/followers", [], $body);
    }

    /**
     * @param int $forum_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unfollow(int $forum_id): array
    {
        return $this->http->request('DELETE', "/forums/{$forum_id}/followers");
    }

    /**
     * @param array{total?: bool} $params
     * @return array{
    forums: list<array{
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
        follow: array{
            post: bool,
            alert: bool,
            email: bool,
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function followed(array $params = []): array
    {
        return $this->http->request('GET', '/forums/followed', $params);
    }

    /**
     * @return array{
    forums: list<array{
        forum_id: int,
        forum_title: string,
        forum_description: string,
        parent_node_id: int,
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
            tag_thread: bool,
            follow: bool,
        },
        forum_is_followed: bool,
        has_children: bool,
    }>,
    excluded_forums_ids: list<int>,
    default_excluded_forums_ids: list<int>,
    keywords: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function getFeedOptions(): array
    {
        return $this->http->request('GET', '/forums/feed/options');
    }

    /**
     * @param array{node_ids?: list<int>, keywords?: list<string>} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function editFeedOptions(array $body = []): array
    {
        return $this->http->request('PUT', '/forums/feed/options', [], $body);
    }
}
