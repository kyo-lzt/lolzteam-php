<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class ProfilePostsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

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
    public function list(mixed $user_id, array $params = []): array
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
    public function report(int $profile_post_id, array $body = []): array
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
    public function create(array $body = []): array
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
    public function commentsCreate(array $body = []): array
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
    public function commentsEdit(array $body = []): array
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
    public function commentsDelete(array $body = []): array
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
    public function commentsReport(int $comment_id, array $body = []): array
    {
        return $this->http->request('POST', "/profile-posts/comments/{$comment_id}/report", [], $body);
    }
}
