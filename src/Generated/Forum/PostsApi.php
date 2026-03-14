<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class PostsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{thread_id?: int, page_of_post_id?: int, page?: int, limit?: int, order?: 'natural'|'natural_reverse'|'post_likes'|'post_likes_reverse'} $params
     * @return array{
    posts: list<array{
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
        thread_is_starred: bool,
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
            user_is_ignored: bool,
            post_is_published: bool,
            post_is_deleted: bool,
            post_update_date: int,
            post_is_first_post: bool,
            post_is_liked: bool,
            links: array{
                permalink: string,
                detail: string,
                thread: string,
                poster: string,
                likes: string,
                report: string,
                poster_avatar: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                reply: bool,
                like: bool,
                report: bool,
            },
            thread_is_deleted: bool,
        },
        thread_prefixes: list<mixed>,
        thread_tags: array{
            97491: string,
            193431: string,
            206: string,
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
            last_post: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
            follow: bool,
            post: bool,
            edit: bool,
            edit_title: bool,
            edit_tags: bool,
            bump: array{
                can: bool,
                available_count: int,
                error: mixed,
                next_available_time: mixed,
            },
        },
        node_title: string,
        restrictions: array{
            reply_delay: int,
            max_reply_count: int,
        },
        last_post: array{
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
            user_is_ignored: bool,
            post_is_published: bool,
            post_is_deleted: bool,
            post_update_date: int,
            post_is_first_post: bool,
            post_is_liked: bool,
            links: array{
                permalink: string,
                detail: string,
                thread: string,
                poster: string,
                likes: string,
                report: string,
                poster_avatar: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                reply: bool,
                like: bool,
                report: bool,
            },
            thread_is_deleted: bool,
        },
        contest: array{
            type: string,
            finish_date: int,
            now_count_members: int,
            needed_members: int,
            is_finished: int,
            count_winners: int,
            require_like_count: int,
            require_total_like_count: int,
            prize_type: string,
            prize_type_phrase: string,
            prize_data: int,
            is_money_places: int,
            chance_to_win: float,
            winners: list<int>,
            already_participate: bool,
            permissions: array{
                can_finish: bool,
                can_participate: bool,
                can_participate_error: string,
                can_view_user_list: bool,
            },
        },
    }>,
    thread: array{
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
        thread_is_starred: bool,
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
            user_is_ignored: bool,
            post_is_published: bool,
            post_is_deleted: bool,
            post_update_date: int,
            post_is_first_post: bool,
            post_is_liked: bool,
            links: array{
                permalink: string,
                detail: string,
                thread: string,
                poster: string,
                likes: string,
                report: string,
                poster_avatar: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                reply: bool,
                like: bool,
                report: bool,
            },
            thread_is_deleted: bool,
        },
        thread_prefixes: list<mixed>,
        thread_tags: array{
            97491: string,
            193431: string,
            206: string,
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
            last_post: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
            follow: bool,
            post: bool,
            edit: bool,
            edit_title: bool,
            edit_tags: bool,
            bump: array{
                can: bool,
                available_count: int,
                error: mixed,
                next_available_time: mixed,
            },
        },
        node_title: string,
        restrictions: array{
            reply_delay: int,
            max_reply_count: int,
        },
        last_post: array{
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
            user_is_ignored: bool,
            post_is_published: bool,
            post_is_deleted: bool,
            post_update_date: int,
            post_is_first_post: bool,
            post_is_liked: bool,
            links: array{
                permalink: string,
                detail: string,
                thread: string,
                poster: string,
                likes: string,
                report: string,
                poster_avatar: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                reply: bool,
                like: bool,
                report: bool,
            },
            thread_is_deleted: bool,
        },
        contest: array{
            type: string,
            finish_date: int,
            now_count_members: int,
            needed_members: int,
            is_finished: int,
            count_winners: int,
            require_like_count: int,
            require_total_like_count: int,
            prize_type: string,
            prize_type_phrase: string,
            prize_data: int,
            is_money_places: int,
            chance_to_win: float,
            winners: list<int>,
            already_participate: bool,
            permissions: array{
                can_finish: bool,
                can_participate: bool,
                can_participate_error: string,
                can_view_user_list: bool,
            },
        },
    },
    posts_total: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function list(array $params = []): array
    {
        return $this->http->request('GET', '/posts', $params);
    }

    /**
     * @param array{post_body: string, thread_id?: int, quote_post_id?: int} $body
     * @return array{
    post: array{
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
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            reply: bool,
            like: bool,
            report: bool,
        },
        thread_is_deleted: bool,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function create(array $body = []): array
    {
        return $this->http->request('POST', '/posts', [], $body);
    }

    /**
     * @param int $post_id
     * @return array{
    post: array{
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
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            reply: bool,
            like: bool,
            report: bool,
        },
        thread_is_deleted: bool,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $post_id): array
    {
        return $this->http->request('GET', "/posts/{$post_id}");
    }

    /**
     * @param int $post_id
     * @param array{post_body?: string} $body
     * @return array{
    post: array{
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
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            reply: bool,
            like: bool,
            report: bool,
        },
        thread_is_deleted: bool,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function edit(int $post_id, array $body = []): array
    {
        return $this->http->request('PUT', "/posts/{$post_id}", [], $body);
    }

    /**
     * @param int $post_id
     * @param array{reason?: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function delete(int $post_id, array $body = []): array
    {
        return $this->http->request('DELETE', "/posts/{$post_id}", [], $body);
    }

    /**
     * @param int $post_id
     * @param array{page?: int, limit?: int} $params
     * @return array{
    users: list<array{
        user_id: int,
        username: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function likes(int $post_id, array $params = []): array
    {
        return $this->http->request('GET', "/posts/{$post_id}/likes", $params);
    }

    /**
     * @param int $post_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function like(int $post_id): array
    {
        return $this->http->request('POST', "/posts/{$post_id}/likes");
    }

    /**
     * @param int $post_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unlike(int $post_id): array
    {
        return $this->http->request('DELETE', "/posts/{$post_id}/likes");
    }

    /**
     * @param int $post_id
     * @return array{
    reasons: list<string>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function reportReasons(int $post_id): array
    {
        return $this->http->request('GET', "/posts/{$post_id}/report");
    }

    /**
     * @param int $post_id
     * @param array{message: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function report(int $post_id, array $body = []): array
    {
        return $this->http->request('POST', "/posts/{$post_id}/report", [], $body);
    }

    /**
     * @param array{post_id: int, before?: int, before_comment?: int} $params
     * @return array{
    comments: list<array{
        post_comment_id: int,
        post_id: int,
        thread_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_comment_create_date: int,
        post_comment_body: string,
        post_comment_body_html: string,
        post_comment_body_plain_text: string,
        post_comment_like_count: int,
        user_is_ignored: bool,
        post_comment_is_published: bool,
        post_comment_is_deleted: bool,
        post_comment_update_date: int,
        links: array{
            permalink: string,
            detail: string,
            post: string,
            thread: string,
            poster: string,
            likes: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            reply: bool,
            like: bool,
            report: bool,
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsGet(array $params = []): array
    {
        return $this->http->request('GET', '/posts/comments', $params);
    }

    /**
     * @param array{post_id: int, comment_body: string} $body
     * @return array{
    comment: array{
        post_comment_id: int,
        post_id: int,
        thread_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_comment_body: string,
        post_comment_body_html: string,
        post_comment_body_plain_text: string,
        post_comment_like_count: int,
        user_is_ignored: bool,
        post_comment_is_published: bool,
        post_comment_is_deleted: bool,
        post_comment_update_date: int,
        links: array{
            permalink: string,
            detail: string,
            post: string,
            thread: string,
            poster: string,
            likes: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            reply: bool,
            like: bool,
            report: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsCreate(array $body = []): array
    {
        return $this->http->request('POST', '/posts/comments', [], $body);
    }

    /**
     * @param array{post_comment_id: int, comment_body: string} $body
     * @return array{
    comment: array{
        post_comment_id: int,
        post_id: int,
        thread_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_comment_body: string,
        post_comment_body_html: string,
        post_comment_body_plain_text: string,
        post_comment_like_count: int,
        user_is_ignored: bool,
        post_comment_is_published: bool,
        post_comment_is_deleted: bool,
        post_comment_update_date: int,
        links: array{
            permalink: string,
            detail: string,
            post: string,
            thread: string,
            poster: string,
            likes: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            reply: bool,
            like: bool,
            report: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsEdit(array $body = []): array
    {
        return $this->http->request('PUT', '/posts/comments', [], $body);
    }

    /**
     * @param array{post_comment_id: int, reason?: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsDelete(array $body = []): array
    {
        return $this->http->request('DELETE', '/posts/comments', [], $body);
    }

    /**
     * @param array{post_comment_id: int, message: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsReport(array $body = []): array
    {
        return $this->http->request('POST', '/posts/comments/report', [], $body);
    }
}
