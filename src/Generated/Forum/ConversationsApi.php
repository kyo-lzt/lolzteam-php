<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

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
    public function list(array $params = []): array
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
    public function update(array $body = []): array
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
    public function delete(array $body = []): array
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
    public function start(array $body = []): array
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
    public function save(array $body = []): array
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
    public function messagesCreate(int $conversation_id, array $body = []): array
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
    public function messagesEdit(int $conversation_id, int $message_id, array $body = []): array
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
    public function invite(int $conversation_id, array $body = []): array
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
    public function kick(int $conversation_id, array $body = []): array
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
