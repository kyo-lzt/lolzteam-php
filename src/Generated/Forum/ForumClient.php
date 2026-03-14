<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\RetryConfig;

final class OAuthApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{grant_type: 'client_credentials'|'authorization_code'|'refresh_token'|'password', client_id: string, client_secret: string, scope?: list<'basic'|'read'|'post'|'conversate'|'market'|'payment'|'invoice'>, code?: string, redirect_uri?: string, refresh_token?: string, username?: string, password?: string} $body
     * @return array{
    access_token: string,
    token_type: string,
    expires_in: int,
    refresh_token?: string,
    scope?: string,
}
     */
    public function token(array $body): array
    {
        return $this->http->request('POST', '/oauth/token', [], $body, true);
    }
}

final class AssetsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{css?: list<string>} $params
     * @return array{
    contents: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function css(array $params = []): array
    {
        return $this->http->request('GET', '/css', $params);
    }
}

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
    public function getList(array $params = []): array
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
    public function getList(array $params = []): array
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

final class LinksApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

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
    public function getList(): array
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

final class PagesApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

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
    public function getList(array $params = []): array
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

final class NavigationApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

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
    public function getList(array $params = []): array
    {
        return $this->http->request('GET', '/navigation', $params);
    }
}

final class ThreadsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{forum_id?: int, tab?: string, state?: 'active'|'closed', period?: 'day'|'week'|'month'|'year', title?: string, title_only?: bool, creator_user_id?: int, sticky?: bool, prefix_ids[]?: list<int>, prefix_ids_not[]?: list<int>, thread_tag_id?: int, page?: int, limit?: int, order?: 'post_date'|'last_post_date'|'reply_count'|'reply_count_asc'|'first_post_likes'|'vote_count', direction?: 'asc'|'desc', thread_create_date?: int, thread_update_date?: int, fields_include?: list<'*'|'latest_posts'>} $params
     * @return array{
    threads: list<array{
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
    forum: array{
        forum_id: int,
        forum_title: string,
        forum_description: string,
        forum_thread_count: int,
        forum_post_count: int,
        forum_prefixes: list<mixed>,
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
    threads_total: int,
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
    public function getList(array $params = []): array
    {
        return $this->http->request('GET', '/threads', $params);
    }

    /**
     * @param array{post_body: string, forum_id: int, title?: string, title_en?: string, prefix_id?: list<int>, tags?: list<string>, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool, dont_alert_followers?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool} $body
     * @return array{
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function create(array $body): array
    {
        return $this->http->request('POST', '/threads', [], $body);
    }

    /**
     * @param array{post_body: string, title?: string, title_en?: string, contest_type: 'by_finish_date', length_value?: int, length_option?: 'minutes'|'hours'|'days', prize_type: 'money'|'upgrades', count_winners?: int, prize_data_money?: float, is_money_places?: bool, prize_data_places?: list<float>, prize_data_upgrade?: 1|6|12|14|17|19|20|21|22, require_like_count: int, require_total_like_count: int, secret_answer?: string, tags?: list<string>, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool, dont_alert_followers?: bool, hide_contacts?: bool, allow_ask_hidden_content?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool} $body
     * @return array{
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function createContest(array $body): array
    {
        return $this->http->request('POST', '/contests', [], $body);
    }

    /**
     * @param array{as_responder: string, as_is_market_deal: bool, as_market_item_id?: int, as_data?: string, as_amount: float, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try', transfer_type: 'guarantor'|'safe'|'notsafe', pay_claim?: 'now'|'later', as_funds_receipt?: string, as_tg_login_screenshot?: string, tags?: list<string>, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool, dont_alert_followers?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool, post_body: string} $body
     * @return array{
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function claim(array $body): array
    {
        return $this->http->request('POST', '/claims', [], $body);
    }

    /**
     * @param int $thread_id
     * @param array{fields_include?: list<'*'|'latest_posts'>} $params
     * @return array{
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $thread_id, array $params = []): array
    {
        return $this->http->request('GET', "/threads/{$thread_id}", $params);
    }

    /**
     * @param int $thread_id
     * @param array{title?: string, title_en?: string, prefix_id?: list<int>, tags?: list<string>, discussion_open?: bool, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool} $body
     * @return array{
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function edit(int $thread_id, array $body = []): array
    {
        return $this->http->request('PUT', "/threads/{$thread_id}", [], $body);
    }

    /**
     * @param int $thread_id
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
    public function delete(int $thread_id, array $body = []): array
    {
        return $this->http->request('DELETE', "/threads/{$thread_id}", [], $body);
    }

    /**
     * @param int $thread_id
     * @param array{node_id: string, title?: string, title_en?: string, prefix_id?: list<int>, apply_thread_prefix?: bool, send_alert?: bool} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function move(int $thread_id, array $body): array
    {
        return $this->http->request('POST', "/threads/{$thread_id}/move", [], $body);
    }

    /**
     * @param int $thread_id
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function bump(int $thread_id): array
    {
        return $this->http->request('POST', "/threads/{$thread_id}/bump");
    }

    /**
     * @param int $thread_id
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function hide(int $thread_id): array
    {
        return $this->http->request('POST', "/threads/{$thread_id}/hide");
    }

    /**
     * @param int $thread_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function star(int $thread_id): array
    {
        return $this->http->request('POST', "/threads/{$thread_id}/star");
    }

    /**
     * @param int $thread_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unstar(int $thread_id): array
    {
        return $this->http->request('DELETE', "/threads/{$thread_id}/star");
    }

    /**
     * @param int $thread_id
     * @return array{
    users: list<array{
        user_id: int,
        username: string,
        follow: array{
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
    public function followers(int $thread_id): array
    {
        return $this->http->request('GET', "/threads/{$thread_id}/followers");
    }

    /**
     * @param int $thread_id
     * @param array{email?: bool} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function follow(int $thread_id, array $body = []): array
    {
        return $this->http->request('POST', "/threads/{$thread_id}/followers", [], $body);
    }

    /**
     * @param int $thread_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unfollow(int $thread_id): array
    {
        return $this->http->request('DELETE', "/threads/{$thread_id}/followers");
    }

    /**
     * @param array{total?: bool, fields_include?: list<'*'|'latest_posts'>} $params
     * @return array{
    threads: list<array{
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
            like_users: list<array{
                user_id: int,
                username: string,
                display_style_group_id: int,
                is_banned: int,
                uniq_username_css: string,
            }>,
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
        thread_prefixes: list<mixed>,
        thread_tags: array{
            1403: string,
            8176: string,
            38: string,
            1953: string,
            523: string,
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
            upload_attachment: bool,
            edit: bool,
            edit_title: bool,
            edit_tags: bool,
        },
        forum: array{
            forum_id: int,
            forum_title: string,
            forum_description: string,
            forum_thread_count: int,
            forum_post_count: int,
            forum_prefixes: list<mixed>,
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
        follow: array{
            alert: bool,
            email: bool,
        },
    }>,
    threads_total: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function followed(array $params = []): array
    {
        return $this->http->request('GET', '/threads/followed', $params);
    }

    /**
     * @param int $thread_id
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
        navigation_depth: int,
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
    public function navigation(int $thread_id): array
    {
        return $this->http->request('GET', "/threads/{$thread_id}/navigation");
    }

    /**
     * @param int $thread_id
     * @return array{
    poll: array{
        poll_id: int,
        poll_question: string,
        poll_vote_count: int,
        poll_max_votes: int,
        poll_is_open: bool,
        poll_is_voted: bool,
        responses: list<array{
            response_id: int,
            response_answer: string,
            response_vote_count: int,
        }>,
        permissions: array{
            vote: bool,
            result: bool,
        },
        links: array{
            vote: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function pollGet(int $thread_id): array
    {
        return $this->http->request('GET', "/threads/{$thread_id}/poll");
    }

    /**
     * @param int $thread_id
     * @param array{response_id?: int, response_ids?: list<int>} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function pollVote(int $thread_id, array $body = []): array
    {
        return $this->http->request('POST', "/threads/{$thread_id}/poll/votes", [], $body);
    }

    /**
     * @param array{limit?: int, forum_id?: int, data_limit?: int} $params
     * @return array{
    threads: list<array{
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
    data: list<array{
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
            like_users: list<array{
                user_id: int,
                username: string,
                display_style_group_id: int,
                is_banned: int,
                uniq_username_css: string,
            }>,
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
            forum_prefixes: list<mixed>,
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unread(array $params = []): array
    {
        return $this->http->request('GET', '/threads/new', $params);
    }

    /**
     * @param array{days?: int, limit?: int, forum_id?: int, data_limit?: int} $params
     * @return array{
    threads: list<array{
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
    data: list<array{
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
            forum_prefixes: list<mixed>,
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
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function recent(array $params = []): array
    {
        return $this->http->request('GET', '/threads/recent', $params);
    }

    /**
     * @param int $thread_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function finish(int $thread_id): array
    {
        return $this->http->request('POST', "/contests/{$thread_id}/finish");
    }
}

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
    public function getList(array $params = []): array
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
    public function create(array $body): array
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
    public function report(int $post_id, array $body): array
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
    public function commentsCreate(array $body): array
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
    public function commentsEdit(array $body): array
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
    public function commentsDelete(array $body): array
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
    public function commentsReport(array $body): array
    {
        return $this->http->request('POST', '/posts/comments/report', [], $body);
    }
}

final class UsersApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{page?: int, limit?: int, fields_include?: list<'*'|'alerts'>} $params
     * @return array{
    users: list<array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    }>,
    users_total: int,
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
    public function getList(array $params = []): array
    {
        return $this->http->request('GET', '/users', $params);
    }

    /**
     * @return array{
    fields: list<array{
        id: string,
        title: string,
        description: string,
        position: string,
        is_required: bool,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function fields(): array
    {
        return $this->http->request('GET', '/users/fields');
    }

    /**
     * @param array{username?: string, custom_fields?: array<string, string>, fields_include?: list<'*'|'alerts'>} $params
     * @return array{
    users: list<array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function find(array $params = []): array
    {
        return $this->http->request('GET', '/users/find', $params);
    }

    /**
     * @param string|int $user_id
     * @param array{fields_include?: list<'*'|'alerts'>} $params
     * @return array{
    user: array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}", $params);
    }

    /**
     * @param string|int $user_id
     * @param array{username?: string, user_title?: string, display_group_id?: int, display_icon_group_id?: int, display_banner_id?: int, conv_welcome_message?: string, user_dob_day?: int, user_dob_month?: int, user_dob_year?: int, secret_answer?: string, secret_answer_type?: int, short_link?: string, language_id?: 1|2, gender?: ''|'male'|'female', timezone?: 'Pacific/Midway'|'Pacific/Honolulu'|'Pacific/Marquesas'|'America/Anchorage'|'America/Los_Angeles'|'America/Santa_Isabel'|'America/Tijuana'|'America/Denver'|'America/Chihuahua'|'America/Phoenix'|'America/Chicago'|'America/Belize'|'America/Mexico_City'|'Pacific/Easter'|'America/New_York'|'America/Havana'|'America/Bogota'|'America/Caracas'|'America/Halifax'|'America/Goose_Bay'|'America/Asuncion'|'America/Santiago'|'America/Cuiaba'|'America/La_Paz'|'America/St_Johns'|'America/Argentina/Buenos_Aires'|'America/Argentina/San_Luis'|'America/Argentina/Mendoza'|'Atlantic/Stanley'|'America/Godthab'|'America/Montevideo'|'America/Sao_Paulo'|'America/Miquelon'|'America/Noronha'|'Atlantic/Cape_Verde'|'Atlantic/Azores'|'Europe/London'|'Africa/Casablanca'|'Atlantic/Reykjavik'|'Europe/Amsterdam'|'Africa/Algiers'|'Africa/Windhoek'|'Africa/Tunis'|'Europe/Athens'|'Africa/Johannesburg'|'Europe/Kaliningrad'|'Asia/Amman'|'Asia/Beirut'|'Africa/Cairo'|'Asia/Jerusalem'|'Asia/Gaza'|'Asia/Damascus'|'Europe/Moscow'|'Europe/Minsk'|'Africa/Nairobi'|'Asia/Tehran'|'Asia/Dubai'|'Asia/Yerevan'|'Asia/Baku'|'Indian/Mauritius'|'Asia/Kabul'|'Asia/Yekaterinburg'|'Asia/Tashkent'|'Asia/Kolkata'|'Asia/Kathmandu'|'Asia/Novosibirsk'|'Asia/Dhaka'|'Asia/Almaty'|'Asia/Rangoon'|'Asia/Krasnoyarsk'|'Asia/Bangkok'|'Asia/Irkutsk'|'Asia/Hong_Kong'|'Asia/Singapore'|'Australia/Perth'|'Asia/Yakutsk'|'Asia/Tokyo'|'Asia/Seoul'|'Australia/Adelaide'|'Australia/Darwin'|'Asia/Vladivostok'|'Asia/Magadan'|'Australia/Brisbane'|'Australia/Sydney'|'Pacific/Noumea'|'Pacific/Norfolk'|'Asia/Anadyr'|'Pacific/Auckland'|'Pacific/Fiji'|'Pacific/Chatham'|'Pacific/Tongatapu'|'Pacific/Apia'|'Pacific/Kiritimati', receive_admin_email?: bool, activity_visible?: bool, show_dob_date?: bool, show_dob_year?: bool, hide_username_change_logs?: bool, allow_view_profile?: 'none'|'members'|'followed', allow_post_profile?: 'none'|'members'|'followed', allow_send_personal_conversation?: 'none'|'members'|'followed', allow_invite_group?: 'none'|'members'|'followed', allow_receive_news_feed?: 'none'|'members'|'followed', alert?: array<string, bool>, fields?: array{
    location?: string,
    occupation?: string,
    homepage?: string,
    _4?: string,
    lztInnovationLink?: string,
    lztInnovation20Link?: string,
    lztInnovation30Link?: string,
    telegram?: string,
    vk?: string,
    discord?: string,
    steam?: string,
    jabber?: string,
    github?: string,
    matrix?: string,
}} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function edit(string|int $user_id, array $body = []): array
    {
        return $this->http->request('PUT', "/users/{$user_id}", [], $body);
    }

    /**
     * @param string|int $user_id
     * @param array{type?: 'market'|'nomarket', claim_state?: 'active'|'solved'|'rejected'|'settled'} $params
     * @return array{
    claims: list<array{
        thread_id: int,
        claim_date: int,
        claim_state: string,
        message_body: string,
        message_body_html: string,
        message_body_plain_text: string,
        amount: int,
        amount_formatted: string,
        author: array{
            user_id: int,
            username: string,
            username_html: string,
            user_message_count: int,
            user_register_date: int,
            user_like_count: int,
            user_like2_count: int,
            contest_count: int,
            trophy_count: int,
            short_link: string,
            custom_title: string,
            is_banned: int,
            display_banner_id: int,
            display_icon_group_id: int,
            balance: string,
            hold: string,
            currency: string,
            user_email: string,
            user_unread_notification_count: int,
            user_unread_conversation_count: int,
            conv_welcome_message: string,
            user_title: string,
            user_deposit: int,
            user_is_valid: bool,
            user_is_verified: bool,
            user_is_followed: bool,
            user_last_seen_date: int,
            links: array{
                permalink: string,
                detail: string,
                avatar: string,
                avatar_big: string,
                avatar_small: string,
                followers: string,
                followings: string,
                ignore: string,
                background_l: string,
                background_m: string,
                status: string,
                timeline: string,
            },
            permissions: array{
                edit: bool,
                follow: bool,
                ignore: bool,
                profile_post: bool,
            },
            user_is_ignored: bool,
            user_is_visitor: bool,
            user_group_id: int,
            curator_titles: list<string>,
            user_groups: list<array{
                user_group_id: int,
                user_group_title: string,
                user_group_title_en: string,
                user_group_banner_css_class: string,
                user_group_banner_text: string,
                user_group_banner_text_en: string,
                display_group_selectable: bool,
                display_banner_selectable: bool,
                display_icon_selectable: bool,
                is_primary_group: bool,
                user_group_icon_class: string,
            }>,
            fields: list<array{
                id: string,
                title: string,
                description: string,
                position: string,
                is_required: bool,
                value?: string,
                is_multi_choice: bool,
                choices: list<array{
                    key: string,
                    value: string,
                }>,
                values: list<mixed>,
            }>,
            user_timezone_offset: int,
            user_external_authentications: list<array{
                provider: string,
                provider_key: string,
            }>,
            self_permissions: array{
                create_conversation: bool,
            },
            edit_permissions: array{
                password: bool,
                user_email: bool,
                username: bool,
                user_title: bool,
                short_link: bool,
                hide_username_logs: bool,
                primary_group_id: bool,
                secondary_group_ids: bool,
                user_dob_day: bool,
                user_dob_month: bool,
                user_dob_year: bool,
                fields: bool,
            },
            birthday: array{
                age: int,
                timeStamp: array{
                    date: string,
                    timezone_type: int,
                    timezone: string,
                },
                format: string,
            },
            secret_answer_rendered: string,
            secret_answer_first_letter: string,
            user_following: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            user_followers: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            banner: string,
        },
    }>,
    stats: array{
        market: array{
            total: int,
            solved: int,
            settled: int,
            rejected: int,
        },
        noMarket: array{
            total: int,
            solved: int,
            settled: int,
            rejected: int,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function claims(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}/claims", $params);
    }

    /**
     * @param string|int $user_id
     * @param array{avatar: string, x?: int, y?: int, crop?: int} $body
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function avatarUpload(string|int $user_id, array $body): array
    {
        return $this->http->request('POST', "/users/{$user_id}/avatar", [], $body, true);
    }

    /**
     * @param string|int $user_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function avatarDelete(string|int $user_id): array
    {
        return $this->http->request('DELETE', "/users/{$user_id}/avatar");
    }

    /**
     * @param string|int $user_id
     * @param array{x?: int, y?: int, crop?: int} $body
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function avatarCrop(string|int $user_id, array $body = []): array
    {
        return $this->http->request('POST', "/users/{$user_id}/avatar/crop", [], $body);
    }

    /**
     * @param string|int $user_id
     * @param array{background: string, x?: int, y?: int, crop?: int} $body
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function backgroundUpload(string|int $user_id, array $body): array
    {
        return $this->http->request('POST', "/users/{$user_id}/background", [], $body, true);
    }

    /**
     * @param string|int $user_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function backgroundDelete(string|int $user_id): array
    {
        return $this->http->request('DELETE', "/users/{$user_id}/background");
    }

    /**
     * @param string|int $user_id
     * @param array{x?: int, y?: int, crop?: int} $body
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function backgroundCrop(string|int $user_id, array $body): array
    {
        return $this->http->request('POST', "/users/{$user_id}/background/crop", [], $body);
    }

    /**
     * @param string|int $user_id
     * @param array{order?: 'natural'|'follow_date'|'follow_date_reverse', page?: int, limit?: int} $params
     * @return array{
    users: list<array{
        content_type: string,
        content_id: int,
        follow_date: int,
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        custom_title: string,
        is_banned: int,
        user_title: string,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        user_following_count: int,
        user_followers_count: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        custom_fields: array{
            _4: string,
            lztInnovation20Link: string,
            lztInnovation30Link: string,
            lztInnovationLink: string,
        },
    }>,
    users_total: int,
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
    public function followers(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}/followers", $params);
    }

    /**
     * @param string|int $user_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function follow(string|int $user_id): array
    {
        return $this->http->request('POST', "/users/{$user_id}/followers");
    }

    /**
     * @param string|int $user_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unfollow(string|int $user_id): array
    {
        return $this->http->request('DELETE', "/users/{$user_id}/followers");
    }

    /**
     * @param string|int $user_id
     * @param array{order?: 'natural'|'follow_date'|'follow_date_reverse', page?: int, limit?: int} $params
     * @return array{
    users: list<array{
        content_type: string,
        content_id: int,
        follow_date: int,
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        user_title: string,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        user_following_count: int,
        user_followers_count: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        custom_fields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            discord: string,
            github: string,
            jabber: string,
            lztAwardUserTrophy: string,
            lztCuratorNodeTitle: string,
            lztCuratorNodeTitleEn: string,
            lztDeposit: string,
            lztInnovation20Link: string,
            lztInnovation30Link: string,
            lztInnovationLink: string,
            lztLikesIncreasing: string,
            lztLikesZeroing: string,
            lztSympathyIncreasing: string,
            lztSympathyZeroing: string,
            maecenasValue: string,
            scamURL: string,
            steam: string,
            telegram: string,
            vk: string,
        },
    }>,
    users_total: int,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function followings(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}/followings", $params);
    }

    /**
     * @param string|int $user_id
     * @param array{node_id?: int, like_type?: 'like'|'like2', type?: 'gotten'|'given', page?: int, content_type?: 'post'|'post_comment'|'profile_post'|'profile_post_comment', search_user_id?: int, stats?: bool} $params
     * @return array{
    page: int,
    perPage: int,
    contentType: string,
    totalLikes: int,
    likes: array{
        1234567890: array{
            like_id: int,
            content_type: string,
            content_id: int,
            like_user_id: int,
            like_date: int,
            content_user_id: int,
            content_state: string,
            user: array{
                user_id: int,
                username: string,
                username_html: string,
                user_message_count: int,
                user_register_date: int,
                user_like_count: int,
                user_like2_count: int,
                contest_count: int,
                trophy_count: int,
                short_link: string,
                custom_title: string,
                is_banned: int,
                display_banner_id: int,
                display_icon_group_id: int,
                balance: string,
                hold: string,
                currency: string,
                user_email: string,
                user_unread_notification_count: int,
                user_unread_conversation_count: int,
                conv_welcome_message: string,
                user_title: string,
                user_deposit: int,
                user_is_valid: bool,
                user_is_verified: bool,
                user_is_followed: bool,
                user_last_seen_date: int,
                links: array{
                    permalink: string,
                    detail: string,
                    avatar: string,
                    avatar_big: string,
                    avatar_small: string,
                    followers: string,
                    followings: string,
                    ignore: string,
                    background_l: string,
                    background_m: string,
                    status: string,
                    timeline: string,
                },
                permissions: array{
                    edit: bool,
                    follow: bool,
                    ignore: bool,
                    profile_post: bool,
                },
                user_is_ignored: bool,
                user_is_visitor: bool,
                user_group_id: int,
                curator_titles: list<string>,
                user_groups: list<array{
                    user_group_id: int,
                    user_group_title: string,
                    user_group_title_en: string,
                    user_group_banner_css_class: string,
                    user_group_banner_text: string,
                    user_group_banner_text_en: string,
                    display_group_selectable: bool,
                    display_banner_selectable: bool,
                    display_icon_selectable: bool,
                    is_primary_group: bool,
                    user_group_icon_class: string,
                }>,
                fields: list<array{
                    id: string,
                    title: string,
                    description: string,
                    position: string,
                    is_required: bool,
                    value?: string,
                    is_multi_choice: bool,
                    choices: list<array{
                        key: string,
                        value: string,
                    }>,
                    values: list<mixed>,
                }>,
                user_timezone_offset: int,
                user_external_authentications: list<array{
                    provider: string,
                    provider_key: string,
                }>,
                self_permissions: array{
                    create_conversation: bool,
                },
                edit_permissions: array{
                    password: bool,
                    user_email: bool,
                    username: bool,
                    user_title: bool,
                    short_link: bool,
                    hide_username_logs: bool,
                    primary_group_id: bool,
                    secondary_group_ids: bool,
                    user_dob_day: bool,
                    user_dob_month: bool,
                    user_dob_year: bool,
                    fields: bool,
                },
                birthday: array{
                    age: int,
                    timeStamp: array{
                        date: string,
                        timezone_type: int,
                        timezone: string,
                    },
                    format: string,
                },
                secret_answer_rendered: string,
                secret_answer_first_letter: string,
                user_following: array{
                    users: list<array{
                        user_id: int,
                        username: string,
                        username_html: string,
                        avatar: string,
                    }>,
                    count: int,
                },
                user_followers: array{
                    users: list<array{
                        user_id: int,
                        username: string,
                        username_html: string,
                        avatar: string,
                    }>,
                    count: int,
                },
                banner: string,
            },
            actionUser: array{
                user_id: int,
                username: string,
                username_html: string,
                user_message_count: int,
                user_register_date: int,
                user_like_count: int,
                user_like2_count: int,
                contest_count: int,
                trophy_count: int,
                short_link: string,
                custom_title: string,
                is_banned: int,
                display_banner_id: int,
                display_icon_group_id: int,
                balance: string,
                hold: string,
                currency: string,
                user_email: string,
                user_unread_notification_count: int,
                user_unread_conversation_count: int,
                conv_welcome_message: string,
                user_title: string,
                user_deposit: int,
                user_is_valid: bool,
                user_is_verified: bool,
                user_is_followed: bool,
                user_last_seen_date: int,
                links: array{
                    permalink: string,
                    detail: string,
                    avatar: string,
                    avatar_big: string,
                    avatar_small: string,
                    followers: string,
                    followings: string,
                    ignore: string,
                    background_l: string,
                    background_m: string,
                    status: string,
                    timeline: string,
                },
                permissions: array{
                    edit: bool,
                    follow: bool,
                    ignore: bool,
                    profile_post: bool,
                },
                user_is_ignored: bool,
                user_is_visitor: bool,
                user_group_id: int,
                curator_titles: list<string>,
                user_groups: list<array{
                    user_group_id: int,
                    user_group_title: string,
                    user_group_title_en: string,
                    user_group_banner_css_class: string,
                    user_group_banner_text: string,
                    user_group_banner_text_en: string,
                    display_group_selectable: bool,
                    display_banner_selectable: bool,
                    display_icon_selectable: bool,
                    is_primary_group: bool,
                    user_group_icon_class: string,
                }>,
                fields: list<array{
                    id: string,
                    title: string,
                    description: string,
                    position: string,
                    is_required: bool,
                    value?: string,
                    is_multi_choice: bool,
                    choices: list<array{
                        key: string,
                        value: string,
                    }>,
                    values: list<mixed>,
                }>,
                user_timezone_offset: int,
                user_external_authentications: list<array{
                    provider: string,
                    provider_key: string,
                }>,
                self_permissions: array{
                    create_conversation: bool,
                },
                edit_permissions: array{
                    password: bool,
                    user_email: bool,
                    username: bool,
                    user_title: bool,
                    short_link: bool,
                    hide_username_logs: bool,
                    primary_group_id: bool,
                    secondary_group_ids: bool,
                    user_dob_day: bool,
                    user_dob_month: bool,
                    user_dob_year: bool,
                    fields: bool,
                },
                birthday: array{
                    age: int,
                    timeStamp: array{
                        date: string,
                        timezone_type: int,
                        timezone: string,
                    },
                    format: string,
                },
                secret_answer_rendered: string,
                secret_answer_first_letter: string,
                user_following: array{
                    users: list<array{
                        user_id: int,
                        username: string,
                        username_html: string,
                        avatar: string,
                    }>,
                    count: int,
                },
                user_followers: array{
                    users: list<array{
                        user_id: int,
                        username: string,
                        username_html: string,
                        avatar: string,
                    }>,
                    count: int,
                },
                banner: string,
            },
            messageHtml: string,
            post_date: int,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function likes(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}/likes", $params);
    }

    /**
     * @param array{total?: bool} $params
     * @return array{
    users: list<array{
        can_edit: bool,
        can_follow: bool,
        can_ignore: bool,
        can_post_profile: bool,
        can_view_profile: bool,
        can_view_profile_posts: bool,
        can_warn: bool,
        contest_count: int,
        conv_welcome_message: string,
        convertedDeposit: int,
        custom_fields: array{
            _4: string,
            scamURL: mixed,
            lztLikesZeroing: mixed,
            lztLikesIncreasing: mixed,
            lztSympathyZeroing: mixed,
            lztSympathyIncreasing: mixed,
            telegram: mixed,
            vk: string,
            discord: string,
            steam: string,
            matrix: mixed,
            jabber: string,
            github: string,
        },
        deposit: int,
        homepage: string,
        ignored_info: array{
            ignore_content: int,
            ignore_conversations: int,
            restrict_view_profile: int,
        },
        is_admin: bool,
        is_banned: bool,
        is_followed: bool,
        is_ignored: bool,
        is_moderator: bool,
        is_staff: bool,
        last_activity: int,
        like2_count: int,
        like_count: int,
        location: string,
        message_count: int,
        register_date: int,
        rendered: array{
            username: string,
            avatars: array{
                l: string,
                m: string,
                s: string,
            },
            backgrounds: list<mixed>,
            link: string,
        },
        short_link: string,
        trophy_points: int,
        user_id: int,
        user_title: string,
        username: string,
        view_url: string,
        warning_points: int,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function ignored(array $params = []): array
    {
        return $this->http->request('GET', '/users/ignored', $params);
    }

    /**
     * @param string|int $user_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function ignore(string|int $user_id): array
    {
        return $this->http->request('POST', "/users/{$user_id}/ignore");
    }

    /**
     * @param string|int $user_id
     * @param array{ignore_conversations?: bool, ignore_content?: bool, restrict_view_profile?: bool} $params
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function ignoreEdit(string|int $user_id, array $params = []): array
    {
        return $this->http->request('PUT', "/users/{$user_id}/ignore", $params);
    }

    /**
     * @param string|int $user_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unignore(string|int $user_id): array
    {
        return $this->http->request('DELETE', "/users/{$user_id}/ignore");
    }

    /**
     * @param string|int $user_id
     * @param array{page?: int, limit?: int} $params
     * @return array{
    data: list<array{
        content_type: string,
        content_id: int,
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
        like_users: list<array{
            user_id: int,
            username: string,
            display_style_group_id: int,
            is_banned: int,
            uniq_username_css: string,
        }>,
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
                last_poster: string,
                last_post: string,
            },
            permissions: array{
                view: bool,
                delete: bool,
                follow: bool,
                post: bool,
                upload_attachment: bool,
            },
        },
    }>,
    data_total: int,
    user: array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    },
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
    public function contents(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}/timeline", $params);
    }

    /**
     * @param string|int $user_id
     * @return array{
    trophies: list<array{
        trophy_id: int,
        title: string,
        description: string,
        trophy_url: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function trophies(string|int $user_id): array
    {
        return $this->http->request('GET', "/users/{$user_id}/trophies");
    }

    /**
     * @return array{
    data: list<array{
        sa_id: int,
        renderedPhrase: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function secretAnswerTypes(): array
    {
        return $this->http->request('GET', '/users/secret-answer/types');
    }

    /**
     * @return array{
    success: bool,
    waiting_time: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function sAReset(): array
    {
        return $this->http->request('POST', '/account/secret-answer/reset');
    }

    /**
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function sACancelReset(): array
    {
        return $this->http->request('DELETE', '/account/secret-answer/reset');
    }
}

final class ProfilePostsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param string|int $user_id
     * @param array{posts_user_id?: int, page?: int, limit?: int, fields_include?: list<'*'|'latest_comments'>} $params
     * @return array{
    profile_posts: list<array{
        profile_post_id: int,
        timeline_user_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_create_date: int,
        post_body: string,
        post_body_html: string,
        post_body_plain_text: string,
        post_like_count: int,
        post_comment_count: int,
        post_comments_is_disabled: int,
        timeline_username: string,
        user_is_ignored: bool,
        post_is_published: bool,
        post_is_deleted: bool,
        post_is_liked: bool,
        post_is_sticked: bool,
        links: array{
            permalink: string,
            detail: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            likes: string,
            comments: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            like: bool,
            comment: bool,
            report: bool,
            stick: bool,
        },
        timeline_user: array{
            user_id: int,
            username: string,
            username_html: string,
            user_message_count: int,
            user_register_date: int,
            user_like_count: int,
            user_like2_count: int,
            contest_count: int,
            trophy_count: int,
            short_link: string,
            custom_title: string,
            is_banned: int,
            display_banner_id: int,
            display_icon_group_id: int,
            balance: string,
            hold: string,
            currency: string,
            user_email: string,
            user_unread_notification_count: int,
            user_unread_conversation_count: int,
            conv_welcome_message: string,
            user_title: string,
            user_deposit: int,
            user_is_valid: bool,
            user_is_verified: bool,
            user_is_followed: bool,
            user_last_seen_date: int,
            links: array{
                permalink: string,
                detail: string,
                avatar: string,
                avatar_big: string,
                avatar_small: string,
                followers: string,
                followings: string,
                ignore: string,
                background_l: string,
                background_m: string,
                status: string,
                timeline: string,
            },
            permissions: array{
                edit: bool,
                follow: bool,
                ignore: bool,
                profile_post: bool,
            },
            user_is_ignored: bool,
            user_is_visitor: bool,
            user_group_id: int,
            curator_titles: list<string>,
            user_groups: list<array{
                user_group_id: int,
                user_group_title: string,
                user_group_title_en: string,
                user_group_banner_css_class: string,
                user_group_banner_text: string,
                user_group_banner_text_en: string,
                display_group_selectable: bool,
                display_banner_selectable: bool,
                display_icon_selectable: bool,
                is_primary_group: bool,
                user_group_icon_class: string,
            }>,
            fields: list<array{
                id: string,
                title: string,
                description: string,
                position: string,
                is_required: bool,
                value?: string,
                is_multi_choice: bool,
                choices: list<array{
                    key: string,
                    value: string,
                }>,
                values: list<mixed>,
            }>,
            user_timezone_offset: int,
            user_external_authentications: list<array{
                provider: string,
                provider_key: string,
            }>,
            self_permissions: array{
                create_conversation: bool,
            },
            edit_permissions: array{
                password: bool,
                user_email: bool,
                username: bool,
                user_title: bool,
                short_link: bool,
                hide_username_logs: bool,
                primary_group_id: bool,
                secondary_group_ids: bool,
                user_dob_day: bool,
                user_dob_month: bool,
                user_dob_year: bool,
                fields: bool,
            },
            birthday: array{
                age: int,
                timeStamp: array{
                    date: string,
                    timezone_type: int,
                    timezone: string,
                },
                format: string,
            },
            secret_answer_rendered: string,
            secret_answer_first_letter: string,
            user_following: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            user_followers: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            banner: string,
        },
    }>,
    totalProfilePosts: int,
    canPostOnProfile: bool,
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
    public function getList(string|int $user_id, array $params = []): array
    {
        return $this->http->request('GET', "/users/{$user_id}/profile-posts", $params);
    }

    /**
     * @param int $profile_post_id
     * @return array{
    profile_post: array{
        profile_post_id: int,
        timeline_user_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_create_date: int,
        post_body: string,
        post_body_html: string,
        post_body_plain_text: string,
        post_like_count: int,
        post_comment_count: int,
        post_comments_is_disabled: int,
        timeline_username: string,
        user_is_ignored: bool,
        post_is_published: bool,
        post_is_deleted: bool,
        post_is_liked: bool,
        post_is_sticked: bool,
        links: array{
            permalink: string,
            detail: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            likes: string,
            comments: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            like: bool,
            comment: bool,
            report: bool,
            stick: bool,
        },
        timeline_user: array{
            user_id: int,
            username: string,
            username_html: string,
            user_message_count: int,
            user_register_date: int,
            user_like_count: int,
            user_like2_count: int,
            contest_count: int,
            trophy_count: int,
            short_link: string,
            custom_title: string,
            is_banned: int,
            display_banner_id: int,
            display_icon_group_id: int,
            balance: string,
            hold: string,
            currency: string,
            user_email: string,
            user_unread_notification_count: int,
            user_unread_conversation_count: int,
            conv_welcome_message: string,
            user_title: string,
            user_deposit: int,
            user_is_valid: bool,
            user_is_verified: bool,
            user_is_followed: bool,
            user_last_seen_date: int,
            links: array{
                permalink: string,
                detail: string,
                avatar: string,
                avatar_big: string,
                avatar_small: string,
                followers: string,
                followings: string,
                ignore: string,
                background_l: string,
                background_m: string,
                status: string,
                timeline: string,
            },
            permissions: array{
                edit: bool,
                follow: bool,
                ignore: bool,
                profile_post: bool,
            },
            user_is_ignored: bool,
            user_is_visitor: bool,
            user_group_id: int,
            curator_titles: list<string>,
            user_groups: list<array{
                user_group_id: int,
                user_group_title: string,
                user_group_title_en: string,
                user_group_banner_css_class: string,
                user_group_banner_text: string,
                user_group_banner_text_en: string,
                display_group_selectable: bool,
                display_banner_selectable: bool,
                display_icon_selectable: bool,
                is_primary_group: bool,
                user_group_icon_class: string,
            }>,
            fields: list<array{
                id: string,
                title: string,
                description: string,
                position: string,
                is_required: bool,
                value?: string,
                is_multi_choice: bool,
                choices: list<array{
                    key: string,
                    value: string,
                }>,
                values: list<mixed>,
            }>,
            user_timezone_offset: int,
            user_external_authentications: list<array{
                provider: string,
                provider_key: string,
            }>,
            self_permissions: array{
                create_conversation: bool,
            },
            edit_permissions: array{
                password: bool,
                user_email: bool,
                username: bool,
                user_title: bool,
                short_link: bool,
                hide_username_logs: bool,
                primary_group_id: bool,
                secondary_group_ids: bool,
                user_dob_day: bool,
                user_dob_month: bool,
                user_dob_year: bool,
                fields: bool,
            },
            birthday: array{
                age: int,
                timeStamp: array{
                    date: string,
                    timezone_type: int,
                    timezone: string,
                },
                format: string,
            },
            secret_answer_rendered: string,
            secret_answer_first_letter: string,
            user_following: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            user_followers: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            banner: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $profile_post_id): array
    {
        return $this->http->request('GET', "/profile-posts/{$profile_post_id}");
    }

    /**
     * @param int $profile_post_id
     * @param array{post_body?: string, disable_comments?: bool} $body
     * @return array{
    profile_post: array{
        profile_post_id: int,
        timeline_user_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_create_date: int,
        post_body: string,
        post_like_count: int,
        post_comment_count: int,
        timeline_username: string,
        user_is_ignored: bool,
        post_is_published: bool,
        post_is_deleted: bool,
        links: array{
            permalink: string,
            detail: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            likes: string,
            comments: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            like: bool,
            comment: bool,
            report: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function edit(int $profile_post_id, array $body = []): array
    {
        return $this->http->request('PUT', "/profile-posts/{$profile_post_id}", [], $body);
    }

    /**
     * @param int $profile_post_id
     * @param array{reason?: string} $params
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function delete(int $profile_post_id, array $params = []): array
    {
        return $this->http->request('DELETE', "/profile-posts/{$profile_post_id}", $params);
    }

    /**
     * @param int $profile_post_id
     * @return array{
    reasons: list<string>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function reportReasons(int $profile_post_id): array
    {
        return $this->http->request('GET', "/profile-posts/{$profile_post_id}/report");
    }

    /**
     * @param int $profile_post_id
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
    public function report(int $profile_post_id, array $body): array
    {
        return $this->http->request('POST', "/profile-posts/{$profile_post_id}/report", [], $body);
    }

    /**
     * @param array{user_id: string|int, post_body: string} $body
     * @return array{
    profile_post: array{
        profile_post_id: int,
        timeline_user_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_create_date: int,
        post_body: string,
        post_like_count: int,
        post_comment_count: int,
        timeline_username: string,
        user_is_ignored: bool,
        post_is_published: bool,
        post_is_deleted: bool,
        links: array{
            permalink: string,
            detail: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            likes: string,
            comments: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            like: bool,
            comment: bool,
            report: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function create(array $body): array
    {
        return $this->http->request('POST', '/profile-posts', [], $body);
    }

    /**
     * @param int $profile_post_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function stick(int $profile_post_id): array
    {
        return $this->http->request('POST', "/profile-posts/{$profile_post_id}/stick");
    }

    /**
     * @param int $profile_post_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unstick(int $profile_post_id): array
    {
        return $this->http->request('DELETE', "/profile-posts/{$profile_post_id}/stick");
    }

    /**
     * @param int $profile_post_id
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
    public function likes(int $profile_post_id): array
    {
        return $this->http->request('GET', "/profile-posts/{$profile_post_id}/likes");
    }

    /**
     * @param int $profile_post_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function like(int $profile_post_id): array
    {
        return $this->http->request('POST', "/profile-posts/{$profile_post_id}/likes");
    }

    /**
     * @param int $profile_post_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unlike(int $profile_post_id): array
    {
        return $this->http->request('DELETE', "/profile-posts/{$profile_post_id}/likes");
    }

    /**
     * @param array{profile_post_id: int, before?: int, limit?: int} $params
     * @return array{
    comments: list<array{
        comment_id: int,
        profile_post_id: int,
        comment_user_id: int,
        comment_username: string,
        comment_username_html: string,
        comment_create_date: int,
        comment_body: string,
        comment_body_html: string,
        comment_body_plain_text: string,
        user_is_ignored: bool,
        timeline_user_id: int,
        links: array{
            detail: string,
            profile_post: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
        },
    }>,
    comments_total: int,
    profile_post: array{
        profile_post_id: int,
        timeline_user_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_create_date: int,
        post_body: string,
        post_like_count: int,
        post_comment_count: int,
        timeline_username: string,
        user_is_ignored: bool,
        post_is_published: bool,
        post_is_deleted: bool,
        links: array{
            permalink: string,
            detail: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            likes: string,
            comments: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            like: bool,
            comment: bool,
            report: bool,
        },
    },
    timeline_user: array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsList(array $params = []): array
    {
        return $this->http->request('GET', '/profile-posts/comments', $params);
    }

    /**
     * @param array{profile_post_id: int, comment_body: string} $body
     * @return array{
    comment: array{
        comment_id: int,
        profile_post_id: int,
        comment_user_id: int,
        comment_username: string,
        comment_username_html: string,
        comment_create_date: int,
        comment_body: string,
        user_is_ignored: bool,
        timeline_user_id: int,
        links: array{
            detail: string,
            profile_post: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsCreate(array $body): array
    {
        return $this->http->request('POST', '/profile-posts/comments', [], $body);
    }

    /**
     * @param array{comment_id: int, comment_body: string} $body
     * @return array{
    comment: array{
        comment_id: int,
        profile_post_id: int,
        comment_user_id: int,
        comment_username: string,
        comment_username_html: string,
        comment_create_date: int,
        comment_body: string,
        user_is_ignored: bool,
        timeline_user_id: int,
        links: array{
            detail: string,
            profile_post: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsEdit(array $body): array
    {
        return $this->http->request('PUT', '/profile-posts/comments', [], $body);
    }

    /**
     * @param array{comment_id: int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsDelete(array $body): array
    {
        return $this->http->request('DELETE', '/profile-posts/comments', [], $body);
    }

    /**
     * @param int $profile_post_id
     * @param int $comment_id
     * @return array{
    comment: array{
        comment_id: int,
        profile_post_id: int,
        comment_user_id: int,
        comment_username: string,
        comment_username_html: string,
        comment_create_date: int,
        comment_body: string,
        comment_body_html: string,
        comment_body_plain_text: string,
        user_is_ignored: bool,
        timeline_user_id: int,
        links: array{
            detail: string,
            profile_post: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function commentsGet(int $profile_post_id, int $comment_id): array
    {
        return $this->http->request('GET', "/profile-posts/{$profile_post_id}/comments/{$comment_id}");
    }

    /**
     * @param int $comment_id
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
    public function commentsReport(int $comment_id, array $body): array
    {
        return $this->http->request('POST', "/profile-posts/comments/{$comment_id}/report", [], $body);
    }
}

final class ConversationsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{folder?: 'all'|'unread'|'groups'|'market'|'market_replacements'|'staff'|'giveaways'|'p2p', page?: int, limit?: int} $params
     * @return array{
    conversations: list<array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    }>,
    can_start: bool,
    folders: list<array{
        id: string,
        title: string,
        name: string,
    }>,
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
    public function getList(array $params = []): array
    {
        return $this->http->request('GET', '/conversations', $params);
    }

    /**
     * @param array{recipient_id?: int, recipients?: list<string>, is_group?: bool, title?: string, open_invite?: bool, allow_edit_messages?: bool, allow_sticky_messages?: bool, allow_delete_own_messages?: bool, message_body?: string} $body
     * @return array{
    conversation: array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function create(array $body = []): array
    {
        return $this->http->request('POST', '/conversations', [], $body);
    }

    /**
     * @param array{conversation_id: int, title?: string, open_invite?: bool, history_open?: bool, allow_edit_messages?: bool, allow_sticky_messages?: bool, allow_delete_own_messages?: bool} $body
     * @return array{
    conversation: array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function update(array $body): array
    {
        return $this->http->request('PUT', '/conversations', [], $body);
    }

    /**
     * @param array{conversation_id: int, delete_type: 'delete'|'delete_ignore'} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function delete(array $body): array
    {
        return $this->http->request('DELETE', '/conversations', [], $body);
    }

    /**
     * @param array{user_id: string|int} $body
     * @return array{
    conversation: array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function start(array $body): array
    {
        return $this->http->request('POST', '/conversations/start', [], $body);
    }

    /**
     * @param array{link: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function save(array $body): array
    {
        return $this->http->request('POST', '/conversations/save', [], $body);
    }

    /**
     * @param int $conversation_id
     * @return array{
    conversation: array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $conversation_id): array
    {
        return $this->http->request('GET', "/conversations/{$conversation_id}");
    }

    /**
     * @param int $conversation_id
     * @param array{page?: int, limit?: int, order?: 'natural'|'natural_reverse', before?: int, after?: int} $params
     * @return array{
    messages: list<array{
        message_id: int,
        conversation_id: int,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        message_create_date: int,
        message_is_unread: int,
        message_need_translate: bool,
        message_is_system: bool,
        message_edit_date: int,
        message_body: string,
        message_body_html: string,
        message_body_plain_text: string,
        user_is_ignored: bool,
        links: array{
            detail: string,
            conversation: string,
            creator: string,
            creator_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            stick-unstick: bool,
        },
    }>,
    messages_total: int,
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
    public function messagesList(int $conversation_id, array $params = []): array
    {
        return $this->http->request('GET', "/conversations/{$conversation_id}/messages", $params);
    }

    /**
     * @param int $conversation_id
     * @param array{reply_message_id?: int, message_body: string} $body
     * @return array{
    message: array{
        message_id: int,
        conversation_id: int,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        message_create_date: int,
        message_is_unread: int,
        message_need_translate: bool,
        message_is_system: bool,
        message_edit_date: int,
        message_body: string,
        message_body_html: string,
        message_body_plain_text: string,
        user_is_ignored: bool,
        links: array{
            detail: string,
            conversation: string,
            creator: string,
            creator_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            stick-unstick: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function messagesCreate(int $conversation_id, array $body): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/messages", [], $body);
    }

    /**
     * @param array{q?: string, conversation_id?: int, search_recipients?: bool} $body
     * @return array{
    conversations: list<array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    }>,
    recipients: bool,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function search(array $body = []): array
    {
        return $this->http->request('POST', '/conversations/search', [], $body);
    }

    /**
     * @param int $message_id
     * @return array{
    message: array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function messagesGet(int $message_id): array
    {
        return $this->http->request('GET', "/conversations/messages/{$message_id}");
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @param array{message_body: string} $body
     * @return array{
    message: array{
        conversation_id: int,
        conversation_title: string,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        conversation_create_date: int,
        conversation_update_date: int,
        conversation_last_read_date: int,
        conversation_online_count: int,
        is_starred: int,
        is_group: int,
        is_unread: int,
        alerts: int,
        permissions: array{
            view: bool,
            reply: bool,
            invite: bool,
            manage_invite_links: bool,
            kick: bool,
            upload_avatar: bool,
            editOwnPost: bool,
            stickyMessages: bool,
        },
        conversation_message_count: int,
        conversation_is_new: bool,
        creator_is_ignored: bool,
        conversation_is_open: bool,
        conversation_is_deleted: bool,
        recipient: array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        },
        recipients: list<array{
            user_id: int,
            username: string,
            username_html: string,
            last_activity: int,
            is_online: bool,
            contacts_changed: bool,
            avatar: string,
        }>,
        links: array{
            permalink: string,
            detail: string,
            messages: string,
            avatar: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function messagesEdit(int $conversation_id, int $message_id, array $body): array
    {
        return $this->http->request('PUT', "/conversations/{$conversation_id}/messages/{$message_id}", [], $body);
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function messagesDelete(int $conversation_id, int $message_id): array
    {
        return $this->http->request('DELETE', "/conversations/{$conversation_id}/messages/{$message_id}");
    }

    /**
     * @param int $conversation_id
     * @param array{recipients: list<string>} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function invite(int $conversation_id, array $body): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/invite", [], $body);
    }

    /**
     * @param int $conversation_id
     * @param array{user_id: int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function kick(int $conversation_id, array $body): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/kick", [], $body);
    }

    /**
     * @param int $conversation_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function read(int $conversation_id): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/read");
    }

    /**
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function readAll(): array
    {
        return $this->http->request('POST', '/conversations/read-all');
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function messagesStick(int $conversation_id, int $message_id): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/messages/{$message_id}/stick");
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function messagesUnstick(int $conversation_id, int $message_id): array
    {
        return $this->http->request('DELETE', "/conversations/{$conversation_id}/messages/{$message_id}/stick");
    }

    /**
     * @param int $conversation_id
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function star(int $conversation_id): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/star");
    }

    /**
     * @param int $conversation_id
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function unstar(int $conversation_id): array
    {
        return $this->http->request('DELETE', "/conversations/{$conversation_id}/star");
    }

    /**
     * @param int $conversation_id
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function alertsEnable(int $conversation_id): array
    {
        return $this->http->request('POST', "/conversations/{$conversation_id}/alerts");
    }

    /**
     * @param int $conversation_id
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function alertsDisable(int $conversation_id): array
    {
        return $this->http->request('DELETE', "/conversations/{$conversation_id}/alerts");
    }
}

final class NotificationsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{type?: 'market'|'nomarket', page?: int, limit?: int} $params
     * @return array{
    notifications: list<array{
        notification_id: int,
        notification_create_date: int,
        content_type: string,
        content_id: int,
        content_action: string,
        notification_is_unread: bool,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        notification_type: string,
        links: array{
            content: string,
            creator_avatar: string,
        },
        notification_html: string,
    }>,
    notifications_total: int,
    links: array{
        read: string,
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
    public function getList(array $params = []): array
    {
        return $this->http->request('GET', '/notifications', $params);
    }

    /**
     * @param int $notification_id
     * @return array{
    notification_id: int,
    notification: array{
        notification_id: int,
        notification_create_date: int,
        content_type: string,
        content_id: int,
        content_action: string,
        notification_is_unread: bool,
        creator_user_id: int,
        creator_username: string,
        creator_username_html: string,
        notification_type: string,
        links: array{
            content: string,
            creator_avatar: string,
        },
        notification_html: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function get(int $notification_id): array
    {
        return $this->http->request('GET', "/notifications/{$notification_id}/content");
    }

    /**
     * @param array{notification_id?: int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function read(array $body = []): array
    {
        return $this->http->request('POST', '/notifications/read', [], $body);
    }
}

final class TagsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

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
    public function getList(array $params = []): array
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

final class SearchApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int} $body
     * @return array{
    data: list<array{
        content_type: string,
        content_id: string,
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
            last_poster: string,
            last_post: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
            follow: bool,
            post: bool,
            edit: bool,
            bump: array{
                can: bool,
                available_count: int,
                error: mixed,
                next_available_time: mixed,
            },
        },
        node_title: string,
        forum: array{
            forum_id: int,
            forum_title: string,
            forum_description: string,
            forum_thread_count: int,
            forum_post_count: int,
            parent_node_id: int,
            forum_prefixes: list<mixed>,
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
    }>,
    data_total: int,
    users: list<array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    }>,
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
    public function all(array $body = []): array
    {
        return $this->http->request('POST', '/search', [], $body);
    }

    /**
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, data_limit?: int} $body
     * @return array{
    data: list<array{
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
            forum_prefixes: list<mixed>,
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
    data_total: int,
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
    public function threads(array $body = []): array
    {
        return $this->http->request('POST', '/search/threads', [], $body);
    }

    /**
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, data_limit?: int} $body
     * @return array{
    data: list<array{
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
            forum_prefixes: list<mixed>,
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
    data_total: int,
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
    public function posts(array $body = []): array
    {
        return $this->http->request('POST', '/search/posts', [], $body);
    }

    /**
     * @param array{q?: string} $body
     * @return array{
    users: list<array{
        user_id: int,
        username: string,
        username_html: string,
        user_message_count: int,
        user_register_date: int,
        user_like_count: int,
        user_like2_count: int,
        contest_count: int,
        trophy_count: int,
        short_link: string,
        custom_title: string,
        is_banned: int,
        display_banner_id: int,
        display_icon_group_id: int,
        balance: string,
        hold: string,
        currency: string,
        user_email: string,
        user_unread_notification_count: int,
        user_unread_conversation_count: int,
        conv_welcome_message: string,
        user_title: string,
        user_deposit: int,
        user_is_valid: bool,
        user_is_verified: bool,
        user_is_followed: bool,
        user_last_seen_date: int,
        links: array{
            permalink: string,
            detail: string,
            avatar: string,
            avatar_big: string,
            avatar_small: string,
            followers: string,
            followings: string,
            ignore: string,
            background_l: string,
            background_m: string,
            status: string,
            timeline: string,
        },
        permissions: array{
            edit: bool,
            follow: bool,
            ignore: bool,
            profile_post: bool,
        },
        user_is_ignored: bool,
        user_is_visitor: bool,
        user_group_id: int,
        curator_titles: list<string>,
        user_groups: list<array{
            user_group_id: int,
            user_group_title: string,
            user_group_title_en: string,
            user_group_banner_css_class: string,
            user_group_banner_text: string,
            user_group_banner_text_en: string,
            display_group_selectable: bool,
            display_banner_selectable: bool,
            display_icon_selectable: bool,
            is_primary_group: bool,
            user_group_icon_class: string,
        }>,
        fields: list<array{
            id: string,
            title: string,
            description: string,
            position: string,
            is_required: bool,
            value?: string,
            is_multi_choice: bool,
            choices: list<array{
                key: string,
                value: string,
            }>,
            values: list<mixed>,
        }>,
        user_timezone_offset: int,
        user_external_authentications: list<array{
            provider: string,
            provider_key: string,
        }>,
        self_permissions: array{
            create_conversation: bool,
        },
        edit_permissions: array{
            password: bool,
            user_email: bool,
            username: bool,
            user_title: bool,
            short_link: bool,
            hide_username_logs: bool,
            primary_group_id: bool,
            secondary_group_ids: bool,
            user_dob_day: bool,
            user_dob_month: bool,
            user_dob_year: bool,
            fields: bool,
        },
        birthday: array{
            age: int,
            timeStamp: array{
                date: string,
                timezone_type: int,
                timezone: string,
            },
            format: string,
        },
        secret_answer_rendered: string,
        secret_answer_first_letter: string,
        user_following: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        user_followers: array{
            users: list<array{
                user_id: int,
                username: string,
                username_html: string,
                avatar: string,
            }>,
            count: int,
        },
        banner: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function users(array $body = []): array
    {
        return $this->http->request('POST', '/search/users', [], $body);
    }

    /**
     * @param array{q?: string, user_id?: int, page?: int, limit?: int} $body
     * @return array{
    data: list<array{
        content_type: string,
        content_id: int,
        profile_post_id: int,
        timeline_user_id: int,
        poster_user_id: int,
        poster_username: string,
        poster_username_html: string,
        post_create_date: int,
        post_body: string,
        post_like_count: int,
        post_comment_count: int,
        timeline_username: string,
        user_is_ignored: bool,
        post_is_published: bool,
        post_is_deleted: bool,
        links: array{
            permalink: string,
            detail: string,
            timeline: string,
            timeline_user: string,
            poster: string,
            likes: string,
            comments: string,
            report: string,
            poster_avatar: string,
        },
        permissions: array{
            view: bool,
            edit: bool,
            delete: bool,
            like: bool,
            comment: bool,
            report: bool,
        },
        timeline_user: array{
            user_id: int,
            username: string,
            username_html: string,
            user_message_count: int,
            user_register_date: int,
            user_like_count: int,
            user_like2_count: int,
            contest_count: int,
            trophy_count: int,
            short_link: string,
            custom_title: string,
            is_banned: int,
            display_banner_id: int,
            display_icon_group_id: int,
            balance: string,
            hold: string,
            currency: string,
            user_email: string,
            user_unread_notification_count: int,
            user_unread_conversation_count: int,
            conv_welcome_message: string,
            user_title: string,
            user_deposit: int,
            user_is_valid: bool,
            user_is_verified: bool,
            user_is_followed: bool,
            user_last_seen_date: int,
            links: array{
                permalink: string,
                detail: string,
                avatar: string,
                avatar_big: string,
                avatar_small: string,
                followers: string,
                followings: string,
                ignore: string,
                background_l: string,
                background_m: string,
                status: string,
                timeline: string,
            },
            permissions: array{
                edit: bool,
                follow: bool,
                ignore: bool,
                profile_post: bool,
            },
            user_is_ignored: bool,
            user_is_visitor: bool,
            user_group_id: int,
            curator_titles: list<string>,
            user_groups: list<array{
                user_group_id: int,
                user_group_title: string,
                user_group_title_en: string,
                user_group_banner_css_class: string,
                user_group_banner_text: string,
                user_group_banner_text_en: string,
                display_group_selectable: bool,
                display_banner_selectable: bool,
                display_icon_selectable: bool,
                is_primary_group: bool,
                user_group_icon_class: string,
            }>,
            fields: list<array{
                id: string,
                title: string,
                description: string,
                position: string,
                is_required: bool,
                value?: string,
                is_multi_choice: bool,
                choices: list<array{
                    key: string,
                    value: string,
                }>,
                values: list<mixed>,
            }>,
            user_timezone_offset: int,
            user_external_authentications: list<array{
                provider: string,
                provider_key: string,
            }>,
            self_permissions: array{
                create_conversation: bool,
            },
            edit_permissions: array{
                password: bool,
                user_email: bool,
                username: bool,
                user_title: bool,
                short_link: bool,
                hide_username_logs: bool,
                primary_group_id: bool,
                secondary_group_ids: bool,
                user_dob_day: bool,
                user_dob_month: bool,
                user_dob_year: bool,
                fields: bool,
            },
            birthday: array{
                age: int,
                timeStamp: array{
                    date: string,
                    timezone_type: int,
                    timezone: string,
                },
                format: string,
            },
            secret_answer_rendered: string,
            secret_answer_first_letter: string,
            user_following: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            user_followers: array{
                users: list<array{
                    user_id: int,
                    username: string,
                    username_html: string,
                    avatar: string,
                }>,
                count: int,
            },
            banner: string,
        },
    }>,
    data_total: int,
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
    public function profilePosts(array $body = []): array
    {
        return $this->http->request('POST', '/search/profile-posts', [], $body);
    }

    /**
     * @param array{tag?: string, tags?: list<string>, page?: int, limit?: int} $body
     * @return array{
    data: list<array{
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
        thread_prefixes: list<mixed>,
        thread_tags: array{
            160179: string,
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
            upload_attachment: bool,
            edit: bool,
            edit_title: bool,
            edit_tags: bool,
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
    data_total: int,
    search_tags: array{
        160179: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function tagged(array $body = []): array
    {
        return $this->http->request('POST', '/search/tagged', [], $body);
    }

    /**
     * @param string|int $search_id
     * @param array{page?: int, limit?: int} $params
     * @return array{
    data: list<array{
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
        thread_prefixes: list<mixed>,
        thread_tags: array{
            160179: string,
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
            upload_attachment: bool,
            edit: bool,
            edit_title: bool,
            edit_tags: bool,
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
    data_total: int,
    search_tags: array{
        160179: string,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function results(string|int $search_id, array $params = []): array
    {
        return $this->http->request('GET', "/search/{$search_id}/results", $params);
    }
}

final class BatchApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param list<array{
    id?: string,
    uri: string,
    method?: 'GET'|'POST'|'PUT'|'DELETE',
    params?: array<string, string>,
}> $body
     * @return array{
    jobs: array{
        job_id: array<string, mixed>,
    },
}
     */
    public function execute(array $body = []): array
    {
        return $this->http->request('POST', '/batch', [], $body);
    }
}

final class ChatboxApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{room_id?: 1|2|3|4|13} $params
     * @return array{
    rooms: list<array{
        can_report: bool,
        eng: bool,
        market: bool,
        room_id: int,
        title: string,
    }>,
    ban: mixed,
    ignore: list<array{
        avatar_date: int,
        background_date: int,
        contest_count: int,
        custom_title: string,
        display_banner_id: int,
        display_icon_group_id: int,
        display_style_group_id: int,
        is_admin: bool,
        is_banned: bool,
        is_moderator: bool,
        is_staff: bool,
        last_activity: int,
        like2_count: int,
        like_count: int,
        message_count: int,
        register_date: int,
        rendered: array{
            username: string,
            avatars: array{
                l: string,
                m: string,
                s: string,
            },
            link: string,
        },
        short_link: mixed,
        trophy_points: int,
        uniq_banner: mixed,
        uniq_username_css: string,
        user_id: int,
        username: string,
    }>,
    permissions: array{
        deleteAnyMessage: bool,
        editAnyMessage: bool,
        viewAnyMessage: bool,
        viewMessages: bool,
        postMessage: bool,
        ban: bool,
    },
    commands: list<string>,
    roomsOnline: array{
        chat:0: int,
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function index(array $params = []): array
    {
        return $this->http->request('GET', '/chatbox', $params);
    }

    /**
     * @param array{room_id: 1|2|3|4|13, before_message_id?: int} $params
     * @return array{
    messages: list<array{
        can_report: bool,
        date: int,
        is_deleted: bool,
        message: string,
        message_id: int,
        messageJson: string,
        messageRaw: string,
        room: array{
            can_report: bool,
            eng: bool,
            market: bool,
            room_id: int,
            title: string,
        },
        user: array{
            avatar_date: int,
            background_date: int,
            contest_count: int,
            custom_title: string,
            display_banner_id: int,
            display_icon_group_id: int,
            display_style_group_id: int,
            is_admin: bool,
            is_banned: bool,
            is_moderator: bool,
            is_staff: bool,
            last_activity: int,
            like2_count: int,
            like_count: int,
            message_count: int,
            register_date: int,
            rendered: array{
                username: string,
                avatars: array{
                    l: string,
                    m: string,
                    s: string,
                },
                link: string,
            },
            short_link: string,
            trophy_points: int,
            uniq_banner: array{
                banner_css: string,
                banner_text: string,
                banner_icon: string,
                username_icon: string,
            },
            uniq_username_css: string,
            user_id: int,
            username: string,
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function getMessages(array $params = []): array
    {
        return $this->http->request('GET', '/chatbox/messages', $params);
    }

    /**
     * @param array{room_id: 1|2|3|4|13, reply_message_id?: int, message: string} $body
     * @return array{
    message: array{
        can_report: bool,
        date: int,
        is_deleted: bool,
        message: string,
        message_id: int,
        messageJson: string,
        messageRaw: string,
        room: array{
            can_report: bool,
            eng: bool,
            market: bool,
            room_id: int,
            title: string,
        },
        user: array{
            avatar_date: int,
            background_date: int,
            contest_count: int,
            custom_title: string,
            display_banner_id: int,
            display_icon_group_id: int,
            display_style_group_id: int,
            is_admin: bool,
            is_banned: bool,
            is_moderator: bool,
            is_staff: bool,
            last_activity: int,
            like2_count: int,
            like_count: int,
            message_count: int,
            register_date: int,
            rendered: array{
                username: string,
                avatars: array{
                    l: string,
                    m: string,
                    s: string,
                },
                link: string,
            },
            short_link: string,
            trophy_points: int,
            uniq_banner: array{
                banner_css: string,
                banner_text: string,
                banner_icon: string,
                username_icon: string,
            },
            uniq_username_css: string,
            user_id: int,
            username: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function postMessage(array $body): array
    {
        return $this->http->request('POST', '/chatbox/messages', [], $body);
    }

    /**
     * @param array{message_id: int, message: string} $body
     * @return array{
    message: array{
        can_report: bool,
        date: int,
        is_deleted: bool,
        message: string,
        message_id: int,
        messageJson: string,
        messageRaw: string,
        room: array{
            can_report: bool,
            eng: bool,
            market: bool,
            room_id: int,
            title: string,
        },
        user: array{
            avatar_date: int,
            background_date: int,
            contest_count: int,
            custom_title: string,
            display_banner_id: int,
            display_icon_group_id: int,
            display_style_group_id: int,
            is_admin: bool,
            is_banned: bool,
            is_moderator: bool,
            is_staff: bool,
            last_activity: int,
            like2_count: int,
            like_count: int,
            message_count: int,
            register_date: int,
            rendered: array{
                username: string,
                avatars: array{
                    l: string,
                    m: string,
                    s: string,
                },
                link: string,
            },
            short_link: string,
            trophy_points: int,
            uniq_banner: array{
                banner_css: string,
                banner_text: string,
                banner_icon: string,
                username_icon: string,
            },
            uniq_username_css: string,
            user_id: int,
            username: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function editMessage(array $body): array
    {
        return $this->http->request('PUT', '/chatbox/messages', [], $body);
    }

    /**
     * @param array{message_id: int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function deleteMessage(array $body): array
    {
        return $this->http->request('DELETE', '/chatbox/messages', [], $body);
    }

    /**
     * @param array{room_id: 1|2|3|4|13} $params
     * @return array{
    users: list<array{
        avatar_date: int,
        background_date: int,
        contest_count: int,
        custom_title: string,
        display_banner_id: int,
        display_icon_group_id: int,
        display_style_group_id: int,
        is_admin: bool,
        is_banned: bool,
        is_moderator: bool,
        is_staff: bool,
        last_activity: int,
        like2_count: int,
        like_count: int,
        message_count: int,
        register_date: int,
        rendered: array{
            username: string,
            avatars: array{
                l: string,
                m: string,
                s: string,
            },
            link: string,
        },
        short_link: string,
        trophy_points: int,
        uniq_banner: array{
            banner_css: string,
            banner_text: string,
            banner_icon: string,
            username_icon: string,
        },
        uniq_username_css: string,
        user_id: int,
        username: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function online(array $params = []): array
    {
        return $this->http->request('GET', '/chatbox/messages/online', $params);
    }

    /**
     * @param array{message_id: int} $params
     * @return array{
    reasons: list<string>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function reportReasons(array $params = []): array
    {
        return $this->http->request('GET', '/chatbox/messages/report', $params);
    }

    /**
     * @param array{message_id: int, reason: string} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function report(array $body): array
    {
        return $this->http->request('POST', '/chatbox/messages/report', [], $body);
    }

    /**
     * @param array{duration?: 'day'|'week'|'month'} $params
     * @return array{
    leaderboard: list<array{
        count: int,
        user_id: int,
        avatar_date: int,
        background_date: int,
        contest_count: int,
        custom_title: string,
        display_banner_id: int,
        display_icon_group_id: int,
        display_style_group_id: int,
        is_banned: bool,
        last_activity: int,
        like2_count: int,
        like_count: int,
        message_count: int,
        register_date: int,
        rendered: array{
            username: string,
            avatars: array{
                l: string,
                m: string,
                s: string,
            },
            link: string,
        },
        short_link: mixed,
        trophy_points: int,
        uniq_banner: array{
            banner_css: string,
            banner_text: string,
            banner_icon: string,
        },
        uniq_username_css: string,
        username: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function getLeaderboard(array $params = []): array
    {
        return $this->http->request('GET', '/chatbox/messages/leaderboard', $params);
    }

    /**
     * @return array{
    ignored: list<array{
        avatar_date: int,
        background_date: int,
        contest_count: int,
        custom_title: string,
        display_banner_id: int,
        display_icon_group_id: int,
        display_style_group_id: int,
        is_banned: bool,
        last_activity: int,
        like2_count: int,
        like_count: int,
        message_count: int,
        register_date: int,
        rendered: array{
            username: string,
            avatars: array{
                l: string,
                m: string,
                s: string,
            },
            link: string,
        },
        short_link: mixed,
        trophy_points: int,
        uniq_banner: mixed,
        uniq_username_css: string,
        user_id: int,
        username: string,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function getIgnore(): array
    {
        return $this->http->request('GET', '/chatbox/ignore');
    }

    /**
     * @param array{user_id: string|int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function postIgnore(array $body): array
    {
        return $this->http->request('POST', '/chatbox/ignore', [], $body);
    }

    /**
     * @param array{user_id: string|int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function deleteIgnore(array $body): array
    {
        return $this->http->request('DELETE', '/chatbox/ignore', [], $body);
    }
}

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
    public function getList(array $params = []): array
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
    public function create(array $body): array
    {
        return $this->http->request('POST', '/forms/save', [], $body);
    }
}

final class ForumClient
{
    public readonly OAuthApi $oAuth;
    public readonly AssetsApi $assets;
    public readonly CategoriesApi $categories;
    public readonly ForumsApi $forums;
    public readonly LinksApi $links;
    public readonly PagesApi $pages;
    public readonly NavigationApi $navigation;
    public readonly ThreadsApi $threads;
    public readonly PostsApi $posts;
    public readonly UsersApi $users;
    public readonly ProfilePostsApi $profilePosts;
    public readonly ConversationsApi $conversations;
    public readonly NotificationsApi $notifications;
    public readonly TagsApi $tags;
    public readonly SearchApi $search;
    public readonly BatchApi $batch;
    public readonly ChatboxApi $chatbox;
    public readonly FormsApi $forms;

    public function __construct(
        string $token,
        ?string $proxy = null,
        ?RetryConfig $retry = null,
    ) {
        $config = new ClientConfig(
            token: $token,
            baseUrl: 'https://prod-api.lolz.live',
            proxy: $proxy,
            retry: $retry ?? new RetryConfig(),
            requestsPerMinute: 300,
        );
        $http = new HttpClient($config);
        $this->oAuth = new OAuthApi($http);
        $this->assets = new AssetsApi($http);
        $this->categories = new CategoriesApi($http);
        $this->forums = new ForumsApi($http);
        $this->links = new LinksApi($http);
        $this->pages = new PagesApi($http);
        $this->navigation = new NavigationApi($http);
        $this->threads = new ThreadsApi($http);
        $this->posts = new PostsApi($http);
        $this->users = new UsersApi($http);
        $this->profilePosts = new ProfilePostsApi($http);
        $this->conversations = new ConversationsApi($http);
        $this->notifications = new NotificationsApi($http);
        $this->tags = new TagsApi($http);
        $this->search = new SearchApi($http);
        $this->batch = new BatchApi($http);
        $this->chatbox = new ChatboxApi($http);
        $this->forms = new FormsApi($http);
    }
}
