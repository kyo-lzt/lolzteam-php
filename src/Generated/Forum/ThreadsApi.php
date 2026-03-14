<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class ThreadsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

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
    public function list(array $params = []): array
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
    public function create(array $body = []): array
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
    public function claim(array $body = []): array
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
    public function move(int $thread_id, array $body = []): array
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
