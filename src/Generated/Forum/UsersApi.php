<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class UsersApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

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
    public function list(array $params = []): array
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
    public function get(mixed $user_id, array $params = []): array
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
    public function edit(mixed $user_id, array $body = []): array
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
    public function claims(mixed $user_id, array $params = []): array
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
    public function avatarUpload(mixed $user_id, array $body = []): array
    {
        return $this->http->request('POST', "/users/{$user_id}/avatar", [], $body);
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
    public function avatarDelete(mixed $user_id): array
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
    public function avatarCrop(mixed $user_id, array $body = []): array
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
    public function backgroundUpload(mixed $user_id, array $body = []): array
    {
        return $this->http->request('POST', "/users/{$user_id}/background", [], $body);
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
    public function backgroundDelete(mixed $user_id): array
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
    public function backgroundCrop(mixed $user_id, array $body): array
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
    public function followers(mixed $user_id, array $params = []): array
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
    public function follow(mixed $user_id): array
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
    public function unfollow(mixed $user_id): array
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
    public function followings(mixed $user_id, array $params = []): array
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
    public function likes(mixed $user_id, array $params = []): array
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
    public function ignore(mixed $user_id): array
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
    public function ignoreEdit(mixed $user_id, array $params = []): array
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
    public function unignore(mixed $user_id): array
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
    public function contents(mixed $user_id, array $params = []): array
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
    public function trophies(mixed $user_id): array
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
