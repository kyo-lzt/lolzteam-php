<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

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
    public function list(array $params = []): array
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
