<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

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
    public function postMessage(array $body = []): array
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
    public function editMessage(array $body = []): array
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
    public function deleteMessage(array $body = []): array
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
    public function report(array $body = []): array
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
    public function postIgnore(array $body = []): array
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
    public function deleteIgnore(array $body = []): array
    {
        return $this->http->request('DELETE', '/chatbox/ignore', [], $body);
    }
}
