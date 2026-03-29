<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

// ─── Component Schema Models ────────────────────────────────────────────────

final class RespNotificationModel
{
    public function __construct(
        public readonly int $notification_id,
        public readonly int $notification_create_date,
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly string $content_action,
        public readonly bool $notification_is_unread,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly string $notification_type,
        /** @var RespNotificationModelLinks */
        public readonly RespNotificationModelLinks $links,
        public readonly string $notification_html,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['notification_id'] ?? null)) ? (int) ($data['notification_id'] ?? null) : 0),
            (is_scalar(($data['notification_create_date'] ?? null)) ? (int) ($data['notification_create_date'] ?? null) : 0),
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['content_action'] ?? null)) ? (string) ($data['content_action'] ?? null) : (is_array(($data['content_action'] ?? null)) ? json_encode(($data['content_action'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['notification_is_unread'] ?? null)) ? (bool) ($data['notification_is_unread'] ?? null) : false),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['notification_type'] ?? null)) ? (string) ($data['notification_type'] ?? null) : (is_array(($data['notification_type'] ?? null)) ? json_encode(($data['notification_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? RespNotificationModelLinks::fromArray($data['links']) : RespNotificationModelLinks::fromArray([]),
            (is_scalar(($data['notification_html'] ?? null)) ? (string) ($data['notification_html'] ?? null) : (is_array(($data['notification_html'] ?? null)) ? json_encode(($data['notification_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespNotificationModelLinks
{
    public function __construct(
        public readonly string $content,
        public readonly string $creator_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content'] ?? null)) ? (string) ($data['content'] ?? null) : (is_array(($data['content'] ?? null)) ? json_encode(($data['content'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_avatar'] ?? null)) ? (string) ($data['creator_avatar'] ?? null) : (is_array(($data['creator_avatar'] ?? null)) ? json_encode(($data['creator_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespLinkModel
{
    public function __construct(
        public readonly int $link_id,
        public readonly string $link_title,
        public readonly string $link_description,
        /** @var RespLinkModelLinks */
        public readonly RespLinkModelLinks $links,
        /** @var RespLinkModelPermissions */
        public readonly RespLinkModelPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['link_id'] ?? null)) ? (int) ($data['link_id'] ?? null) : 0),
            (is_scalar(($data['link_title'] ?? null)) ? (string) ($data['link_title'] ?? null) : (is_array(($data['link_title'] ?? null)) ? json_encode(($data['link_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['link_description'] ?? null)) ? (string) ($data['link_description'] ?? null) : (is_array(($data['link_description'] ?? null)) ? json_encode(($data['link_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? RespLinkModelLinks::fromArray($data['links']) : RespLinkModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespLinkModelPermissions::fromArray($data['permissions']) : RespLinkModelPermissions::fromArray([]),
        );
    }
}

final class RespLinkModelLinks
{
    public function __construct(
        public readonly string $target,
        public readonly string $detail,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['target'] ?? null)) ? (string) ($data['target'] ?? null) : (is_array(($data['target'] ?? null)) ? json_encode(($data['target'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespLinkModelPermissions
{
    public function __construct(
        public readonly bool $view,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
        );
    }
}

final class RespChatboxMessageModel
{
    public function __construct(
        public readonly bool $can_report,
        public readonly int $date,
        public readonly bool $is_deleted,
        public readonly string $message,
        public readonly int $message_id,
        public readonly string $messageJson,
        public readonly string $messageRaw,
        /** @var RespChatboxMessageModelRoom */
        public readonly RespChatboxMessageModelRoom $room,
        /** @var RespChatboxMessageModelUser */
        public readonly RespChatboxMessageModelUser $user,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can_report'] ?? null)) ? (bool) ($data['can_report'] ?? null) : false),
            (is_scalar(($data['date'] ?? null)) ? (int) ($data['date'] ?? null) : 0),
            (is_scalar(($data['is_deleted'] ?? null)) ? (bool) ($data['is_deleted'] ?? null) : false),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_id'] ?? null)) ? (int) ($data['message_id'] ?? null) : 0),
            (is_scalar(($data['messageJson'] ?? null)) ? (string) ($data['messageJson'] ?? null) : (is_array(($data['messageJson'] ?? null)) ? json_encode(($data['messageJson'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['messageRaw'] ?? null)) ? (string) ($data['messageRaw'] ?? null) : (is_array(($data['messageRaw'] ?? null)) ? json_encode(($data['messageRaw'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['room']) && is_array($data['room']) ? RespChatboxMessageModelRoom::fromArray($data['room']) : RespChatboxMessageModelRoom::fromArray([]),
            isset($data['user']) && is_array($data['user']) ? RespChatboxMessageModelUser::fromArray($data['user']) : RespChatboxMessageModelUser::fromArray([]),
        );
    }
}

final class RespChatboxMessageModelRoom
{
    public function __construct(
        public readonly bool $can_report,
        public readonly bool $eng,
        public readonly bool $market,
        public readonly int $room_id,
        public readonly string $title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can_report'] ?? null)) ? (bool) ($data['can_report'] ?? null) : false),
            (is_scalar(($data['eng'] ?? null)) ? (bool) ($data['eng'] ?? null) : false),
            (is_scalar(($data['market'] ?? null)) ? (bool) ($data['market'] ?? null) : false),
            (is_scalar(($data['room_id'] ?? null)) ? (int) ($data['room_id'] ?? null) : 0),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespChatboxMessageModelUser
{
    public function __construct(
        public readonly int $avatar_date,
        public readonly int $background_date,
        public readonly int $contest_count,
        public readonly string $custom_title,
        public readonly int $display_banner_id,
        public readonly int $display_icon_group_id,
        public readonly int $display_style_group_id,
        public readonly bool $is_admin,
        public readonly bool $is_banned,
        public readonly bool $is_moderator,
        public readonly bool $is_staff,
        public readonly int $last_activity,
        public readonly int $like2_count,
        public readonly int $like_count,
        public readonly int $message_count,
        public readonly int $register_date,
        /** @var RespChatboxMessageModelUserRendered */
        public readonly RespChatboxMessageModelUserRendered $rendered,
        public readonly string $short_link,
        public readonly int $trophy_points,
        /** @var RespChatboxMessageModelUserUniqBanner */
        public readonly RespChatboxMessageModelUserUniqBanner $uniq_banner,
        public readonly string $uniq_username_css,
        public readonly int $user_id,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['avatar_date'] ?? null)) ? (int) ($data['avatar_date'] ?? null) : 0),
            (is_scalar(($data['background_date'] ?? null)) ? (int) ($data['background_date'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_banner_id'] ?? null)) ? (int) ($data['display_banner_id'] ?? null) : 0),
            (is_scalar(($data['display_icon_group_id'] ?? null)) ? (int) ($data['display_icon_group_id'] ?? null) : 0),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_admin'] ?? null)) ? (bool) ($data['is_admin'] ?? null) : false),
            (is_scalar(($data['is_banned'] ?? null)) ? (bool) ($data['is_banned'] ?? null) : false),
            (is_scalar(($data['is_moderator'] ?? null)) ? (bool) ($data['is_moderator'] ?? null) : false),
            (is_scalar(($data['is_staff'] ?? null)) ? (bool) ($data['is_staff'] ?? null) : false),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['like2_count'] ?? null)) ? (int) ($data['like2_count'] ?? null) : 0),
            (is_scalar(($data['like_count'] ?? null)) ? (int) ($data['like_count'] ?? null) : 0),
            (is_scalar(($data['message_count'] ?? null)) ? (int) ($data['message_count'] ?? null) : 0),
            (is_scalar(($data['register_date'] ?? null)) ? (int) ($data['register_date'] ?? null) : 0),
            isset($data['rendered']) && is_array($data['rendered']) ? RespChatboxMessageModelUserRendered::fromArray($data['rendered']) : RespChatboxMessageModelUserRendered::fromArray([]),
            (is_scalar(($data['short_link'] ?? null)) ? (string) ($data['short_link'] ?? null) : (is_array(($data['short_link'] ?? null)) ? json_encode(($data['short_link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['trophy_points'] ?? null)) ? (int) ($data['trophy_points'] ?? null) : 0),
            isset($data['uniq_banner']) && is_array($data['uniq_banner']) ? RespChatboxMessageModelUserUniqBanner::fromArray($data['uniq_banner']) : RespChatboxMessageModelUserUniqBanner::fromArray([]),
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespChatboxMessageModelUserRendered
{
    public function __construct(
        public readonly string $username,
        /** @var RespChatboxMessageModelUserRenderedAvatars */
        public readonly RespChatboxMessageModelUserRenderedAvatars $avatars,
        public readonly string $link,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['avatars']) && is_array($data['avatars']) ? RespChatboxMessageModelUserRenderedAvatars::fromArray($data['avatars']) : RespChatboxMessageModelUserRenderedAvatars::fromArray([]),
            (is_scalar(($data['link'] ?? null)) ? (string) ($data['link'] ?? null) : (is_array(($data['link'] ?? null)) ? json_encode(($data['link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespChatboxMessageModelUserRenderedAvatars
{
    public function __construct(
        public readonly string $l,
        public readonly string $m,
        public readonly string $s,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['l'] ?? null)) ? (string) ($data['l'] ?? null) : (is_array(($data['l'] ?? null)) ? json_encode(($data['l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['m'] ?? null)) ? (string) ($data['m'] ?? null) : (is_array(($data['m'] ?? null)) ? json_encode(($data['m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['s'] ?? null)) ? (string) ($data['s'] ?? null) : (is_array(($data['s'] ?? null)) ? json_encode(($data['s'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespChatboxMessageModelUserUniqBanner
{
    public function __construct(
        public readonly string $banner_css,
        public readonly string $banner_text,
        public readonly string $banner_icon,
        public readonly string $username_icon,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['banner_css'] ?? null)) ? (string) ($data['banner_css'] ?? null) : (is_array(($data['banner_css'] ?? null)) ? json_encode(($data['banner_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['banner_text'] ?? null)) ? (string) ($data['banner_text'] ?? null) : (is_array(($data['banner_text'] ?? null)) ? json_encode(($data['banner_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['banner_icon'] ?? null)) ? (string) ($data['banner_icon'] ?? null) : (is_array(($data['banner_icon'] ?? null)) ? json_encode(($data['banner_icon'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_icon'] ?? null)) ? (string) ($data['username_icon'] ?? null) : (is_array(($data['username_icon'] ?? null)) ? json_encode(($data['username_icon'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModel
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly int $user_message_count,
        public readonly int $user_register_date,
        public readonly int $user_like_count,
        public readonly int $user_like2_count,
        public readonly int $contest_count,
        public readonly int $trophy_count,
        public readonly string $short_link,
        public readonly string $custom_title,
        public readonly int $is_banned,
        public readonly int $display_banner_id,
        public readonly int $display_icon_group_id,
        public readonly string $balance,
        public readonly string $hold,
        public readonly string $currency,
        public readonly string $user_email,
        public readonly int $user_unread_notification_count,
        public readonly int $user_unread_conversation_count,
        public readonly string $conv_welcome_message,
        public readonly string $user_title,
        public readonly int $user_deposit,
        public readonly bool $user_is_valid,
        public readonly bool $user_is_verified,
        public readonly bool $user_is_followed,
        public readonly int $user_last_seen_date,
        /** @var RespUserModelLinks */
        public readonly RespUserModelLinks $links,
        /** @var RespUserModelPermissions */
        public readonly RespUserModelPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<RespUserModelUserGroups> */
        public readonly array $user_groups,
        /** @var list<RespUserModelFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<RespUserModelUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var RespUserModelSelfPermissions */
        public readonly RespUserModelSelfPermissions $self_permissions,
        /** @var RespUserModelEditPermissions */
        public readonly RespUserModelEditPermissions $edit_permissions,
        /** @var RespUserModelBirthday */
        public readonly RespUserModelBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var RespUserModelUserFollowing */
        public readonly RespUserModelUserFollowing $user_following,
        /** @var RespUserModelUserFollowers */
        public readonly RespUserModelUserFollowers $user_followers,
        public readonly string $banner,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_message_count'] ?? null)) ? (int) ($data['user_message_count'] ?? null) : 0),
            (is_scalar(($data['user_register_date'] ?? null)) ? (int) ($data['user_register_date'] ?? null) : 0),
            (is_scalar(($data['user_like_count'] ?? null)) ? (int) ($data['user_like_count'] ?? null) : 0),
            (is_scalar(($data['user_like2_count'] ?? null)) ? (int) ($data['user_like2_count'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['trophy_count'] ?? null)) ? (int) ($data['trophy_count'] ?? null) : 0),
            (is_scalar(($data['short_link'] ?? null)) ? (string) ($data['short_link'] ?? null) : (is_array(($data['short_link'] ?? null)) ? json_encode(($data['short_link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['is_banned'] ?? null)) ? (int) ($data['is_banned'] ?? null) : 0),
            (is_scalar(($data['display_banner_id'] ?? null)) ? (int) ($data['display_banner_id'] ?? null) : 0),
            (is_scalar(($data['display_icon_group_id'] ?? null)) ? (int) ($data['display_icon_group_id'] ?? null) : 0),
            (is_scalar(($data['balance'] ?? null)) ? (string) ($data['balance'] ?? null) : (is_array(($data['balance'] ?? null)) ? json_encode(($data['balance'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['hold'] ?? null)) ? (string) ($data['hold'] ?? null) : (is_array(($data['hold'] ?? null)) ? json_encode(($data['hold'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['currency'] ?? null)) ? (string) ($data['currency'] ?? null) : (is_array(($data['currency'] ?? null)) ? json_encode(($data['currency'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_email'] ?? null)) ? (string) ($data['user_email'] ?? null) : (is_array(($data['user_email'] ?? null)) ? json_encode(($data['user_email'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_unread_notification_count'] ?? null)) ? (int) ($data['user_unread_notification_count'] ?? null) : 0),
            (is_scalar(($data['user_unread_conversation_count'] ?? null)) ? (int) ($data['user_unread_conversation_count'] ?? null) : 0),
            (is_scalar(($data['conv_welcome_message'] ?? null)) ? (string) ($data['conv_welcome_message'] ?? null) : (is_array(($data['conv_welcome_message'] ?? null)) ? json_encode(($data['conv_welcome_message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_title'] ?? null)) ? (string) ($data['user_title'] ?? null) : (is_array(($data['user_title'] ?? null)) ? json_encode(($data['user_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_deposit'] ?? null)) ? (int) ($data['user_deposit'] ?? null) : 0),
            (is_scalar(($data['user_is_valid'] ?? null)) ? (bool) ($data['user_is_valid'] ?? null) : false),
            (is_scalar(($data['user_is_verified'] ?? null)) ? (bool) ($data['user_is_verified'] ?? null) : false),
            (is_scalar(($data['user_is_followed'] ?? null)) ? (bool) ($data['user_is_followed'] ?? null) : false),
            (is_scalar(($data['user_last_seen_date'] ?? null)) ? (int) ($data['user_last_seen_date'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? RespUserModelLinks::fromArray($data['links']) : RespUserModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespUserModelPermissions::fromArray($data['permissions']) : RespUserModelPermissions::fromArray([]),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['user_is_visitor'] ?? null)) ? (bool) ($data['user_is_visitor'] ?? null) : false),
            (is_scalar(($data['user_group_id'] ?? null)) ? (int) ($data['user_group_id'] ?? null) : 0),
            $data['curator_titles'] ?? [],
            isset($data['user_groups']) && is_array($data['user_groups']) ? array_map(static fn(array $item): RespUserModelUserGroups => RespUserModelUserGroups::fromArray($item), $data['user_groups']) : [],
            isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item): RespUserModelFields => RespUserModelFields::fromArray($item), $data['fields']) : [],
            (is_scalar(($data['user_timezone_offset'] ?? null)) ? (int) ($data['user_timezone_offset'] ?? null) : 0),
            isset($data['user_external_authentications']) && is_array($data['user_external_authentications']) ? array_map(static fn(array $item): RespUserModelUserExternalAuthentications => RespUserModelUserExternalAuthentications::fromArray($item), $data['user_external_authentications']) : [],
            isset($data['self_permissions']) && is_array($data['self_permissions']) ? RespUserModelSelfPermissions::fromArray($data['self_permissions']) : RespUserModelSelfPermissions::fromArray([]),
            isset($data['edit_permissions']) && is_array($data['edit_permissions']) ? RespUserModelEditPermissions::fromArray($data['edit_permissions']) : RespUserModelEditPermissions::fromArray([]),
            isset($data['birthday']) && is_array($data['birthday']) ? RespUserModelBirthday::fromArray($data['birthday']) : RespUserModelBirthday::fromArray([]),
            (is_scalar(($data['secret_answer_rendered'] ?? null)) ? (string) ($data['secret_answer_rendered'] ?? null) : (is_array(($data['secret_answer_rendered'] ?? null)) ? json_encode(($data['secret_answer_rendered'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['secret_answer_first_letter'] ?? null)) ? (string) ($data['secret_answer_first_letter'] ?? null) : (is_array(($data['secret_answer_first_letter'] ?? null)) ? json_encode(($data['secret_answer_first_letter'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['user_following']) && is_array($data['user_following']) ? RespUserModelUserFollowing::fromArray($data['user_following']) : RespUserModelUserFollowing::fromArray([]),
            isset($data['user_followers']) && is_array($data['user_followers']) ? RespUserModelUserFollowers::fromArray($data['user_followers']) : RespUserModelUserFollowers::fromArray([]),
            (is_scalar(($data['banner'] ?? null)) ? (string) ($data['banner'] ?? null) : (is_array(($data['banner'] ?? null)) ? json_encode(($data['banner'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $avatar,
        public readonly string $avatar_big,
        public readonly string $avatar_small,
        public readonly string $followers,
        public readonly string $followings,
        public readonly string $ignore,
        public readonly string $background_l,
        public readonly string $background_m,
        public readonly string $status,
        public readonly string $timeline,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar_big'] ?? null)) ? (string) ($data['avatar_big'] ?? null) : (is_array(($data['avatar_big'] ?? null)) ? json_encode(($data['avatar_big'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar_small'] ?? null)) ? (string) ($data['avatar_small'] ?? null) : (is_array(($data['avatar_small'] ?? null)) ? json_encode(($data['avatar_small'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followings'] ?? null)) ? (string) ($data['followings'] ?? null) : (is_array(($data['followings'] ?? null)) ? json_encode(($data['followings'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['ignore'] ?? null)) ? (string) ($data['ignore'] ?? null) : (is_array(($data['ignore'] ?? null)) ? json_encode(($data['ignore'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['background_l'] ?? null)) ? (string) ($data['background_l'] ?? null) : (is_array(($data['background_l'] ?? null)) ? json_encode(($data['background_l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['background_m'] ?? null)) ? (string) ($data['background_m'] ?? null) : (is_array(($data['background_m'] ?? null)) ? json_encode(($data['background_m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelPermissions
{
    public function __construct(
        public readonly bool $edit,
        public readonly bool $follow,
        public readonly bool $ignore,
        public readonly bool $profile_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['ignore'] ?? null)) ? (bool) ($data['ignore'] ?? null) : false),
            (is_scalar(($data['profile_post'] ?? null)) ? (bool) ($data['profile_post'] ?? null) : false),
        );
    }
}

final class RespUserModelUserGroups
{
    public function __construct(
        public readonly int $user_group_id,
        public readonly string $user_group_title,
        public readonly string $user_group_title_en,
        public readonly string $user_group_banner_css_class,
        public readonly string $user_group_banner_text,
        public readonly string $user_group_banner_text_en,
        public readonly bool $display_group_selectable,
        public readonly bool $display_banner_selectable,
        public readonly bool $display_icon_selectable,
        public readonly bool $is_primary_group,
        public readonly string $user_group_icon_class,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_group_id'] ?? null)) ? (int) ($data['user_group_id'] ?? null) : 0),
            (is_scalar(($data['user_group_title'] ?? null)) ? (string) ($data['user_group_title'] ?? null) : (is_array(($data['user_group_title'] ?? null)) ? json_encode(($data['user_group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_group_title_en'] ?? null)) ? (string) ($data['user_group_title_en'] ?? null) : (is_array(($data['user_group_title_en'] ?? null)) ? json_encode(($data['user_group_title_en'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_group_banner_css_class'] ?? null)) ? (string) ($data['user_group_banner_css_class'] ?? null) : (is_array(($data['user_group_banner_css_class'] ?? null)) ? json_encode(($data['user_group_banner_css_class'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_group_banner_text'] ?? null)) ? (string) ($data['user_group_banner_text'] ?? null) : (is_array(($data['user_group_banner_text'] ?? null)) ? json_encode(($data['user_group_banner_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_group_banner_text_en'] ?? null)) ? (string) ($data['user_group_banner_text_en'] ?? null) : (is_array(($data['user_group_banner_text_en'] ?? null)) ? json_encode(($data['user_group_banner_text_en'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_group_selectable'] ?? null)) ? (bool) ($data['display_group_selectable'] ?? null) : false),
            (is_scalar(($data['display_banner_selectable'] ?? null)) ? (bool) ($data['display_banner_selectable'] ?? null) : false),
            (is_scalar(($data['display_icon_selectable'] ?? null)) ? (bool) ($data['display_icon_selectable'] ?? null) : false),
            (is_scalar(($data['is_primary_group'] ?? null)) ? (bool) ($data['is_primary_group'] ?? null) : false),
            (is_scalar(($data['user_group_icon_class'] ?? null)) ? (string) ($data['user_group_icon_class'] ?? null) : (is_array(($data['user_group_icon_class'] ?? null)) ? json_encode(($data['user_group_icon_class'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<RespUserModelFieldsChoices> */
        public readonly array $choices,
        public readonly array $values,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['id'] ?? null)) ? (string) ($data['id'] ?? null) : (is_array(($data['id'] ?? null)) ? json_encode(($data['id'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['description'] ?? null)) ? (string) ($data['description'] ?? null) : (is_array(($data['description'] ?? null)) ? json_encode(($data['description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['position'] ?? null)) ? (string) ($data['position'] ?? null) : (is_array(($data['position'] ?? null)) ? json_encode(($data['position'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['is_required'] ?? null)) ? (bool) ($data['is_required'] ?? null) : false),
            isset($data['value']) ? (is_scalar($data['value']) ? (string) $data['value'] : (is_array($data['value']) ? json_encode($data['value'], JSON_UNESCAPED_UNICODE) : null)) : null,
            (is_scalar(($data['is_multi_choice'] ?? null)) ? (bool) ($data['is_multi_choice'] ?? null) : false),
            isset($data['choices']) && is_array($data['choices']) ? array_map(static fn(array $item): RespUserModelFieldsChoices => RespUserModelFieldsChoices::fromArray($item), $data['choices']) : [],
            $data['values'] ?? [],
        );
    }
}

final class RespUserModelFieldsChoices
{
    public function __construct(
        public readonly string $key,
        public readonly string $value,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['key'] ?? null)) ? (string) ($data['key'] ?? null) : (is_array(($data['key'] ?? null)) ? json_encode(($data['key'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['value'] ?? null)) ? (string) ($data['value'] ?? null) : (is_array(($data['value'] ?? null)) ? json_encode(($data['value'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelUserExternalAuthentications
{
    public function __construct(
        public readonly string $provider,
        public readonly string $provider_key,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['provider'] ?? null)) ? (string) ($data['provider'] ?? null) : (is_array(($data['provider'] ?? null)) ? json_encode(($data['provider'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['provider_key'] ?? null)) ? (string) ($data['provider_key'] ?? null) : (is_array(($data['provider_key'] ?? null)) ? json_encode(($data['provider_key'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelSelfPermissions
{
    public function __construct(
        public readonly bool $create_conversation,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['create_conversation'] ?? null)) ? (bool) ($data['create_conversation'] ?? null) : false),
        );
    }
}

final class RespUserModelEditPermissions
{
    public function __construct(
        public readonly bool $password,
        public readonly bool $user_email,
        public readonly bool $username,
        public readonly bool $user_title,
        public readonly bool $short_link,
        public readonly bool $hide_username_logs,
        public readonly bool $primary_group_id,
        public readonly bool $secondary_group_ids,
        public readonly bool $user_dob_day,
        public readonly bool $user_dob_month,
        public readonly bool $user_dob_year,
        public readonly bool $fields,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['password'] ?? null)) ? (bool) ($data['password'] ?? null) : false),
            (is_scalar(($data['user_email'] ?? null)) ? (bool) ($data['user_email'] ?? null) : false),
            (is_scalar(($data['username'] ?? null)) ? (bool) ($data['username'] ?? null) : false),
            (is_scalar(($data['user_title'] ?? null)) ? (bool) ($data['user_title'] ?? null) : false),
            (is_scalar(($data['short_link'] ?? null)) ? (bool) ($data['short_link'] ?? null) : false),
            (is_scalar(($data['hide_username_logs'] ?? null)) ? (bool) ($data['hide_username_logs'] ?? null) : false),
            (is_scalar(($data['primary_group_id'] ?? null)) ? (bool) ($data['primary_group_id'] ?? null) : false),
            (is_scalar(($data['secondary_group_ids'] ?? null)) ? (bool) ($data['secondary_group_ids'] ?? null) : false),
            (is_scalar(($data['user_dob_day'] ?? null)) ? (bool) ($data['user_dob_day'] ?? null) : false),
            (is_scalar(($data['user_dob_month'] ?? null)) ? (bool) ($data['user_dob_month'] ?? null) : false),
            (is_scalar(($data['user_dob_year'] ?? null)) ? (bool) ($data['user_dob_year'] ?? null) : false),
            (is_scalar(($data['fields'] ?? null)) ? (bool) ($data['fields'] ?? null) : false),
        );
    }
}

final class RespUserModelBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var RespUserModelBirthdayTimeStamp */
        public readonly RespUserModelBirthdayTimeStamp $timeStamp,
        public readonly string $format,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['age'] ?? null)) ? (int) ($data['age'] ?? null) : 0),
            isset($data['timeStamp']) && is_array($data['timeStamp']) ? RespUserModelBirthdayTimeStamp::fromArray($data['timeStamp']) : RespUserModelBirthdayTimeStamp::fromArray([]),
            (is_scalar(($data['format'] ?? null)) ? (string) ($data['format'] ?? null) : (is_array(($data['format'] ?? null)) ? json_encode(($data['format'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelBirthdayTimeStamp
{
    public function __construct(
        public readonly string $date,
        public readonly int $timezone_type,
        public readonly string $timezone,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['date'] ?? null)) ? (string) ($data['date'] ?? null) : (is_array(($data['date'] ?? null)) ? json_encode(($data['date'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timezone_type'] ?? null)) ? (int) ($data['timezone_type'] ?? null) : 0),
            (is_scalar(($data['timezone'] ?? null)) ? (string) ($data['timezone'] ?? null) : (is_array(($data['timezone'] ?? null)) ? json_encode(($data['timezone'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelUserFollowing
{
    public function __construct(
        /** @var list<RespUserModelUserFollowingUsers> */
        public readonly array $users,
        public readonly int $count,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): RespUserModelUserFollowingUsers => RespUserModelUserFollowingUsers::fromArray($item), $data['users']) : [],
            (is_scalar(($data['count'] ?? null)) ? (int) ($data['count'] ?? null) : 0),
        );
    }
}

final class RespUserModelUserFollowingUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly string $avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespUserModelUserFollowers
{
    public function __construct(
        /** @var list<RespUserModelUserFollowersUsers> */
        public readonly array $users,
        public readonly int $count,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): RespUserModelUserFollowersUsers => RespUserModelUserFollowersUsers::fromArray($item), $data['users']) : [],
            (is_scalar(($data['count'] ?? null)) ? (int) ($data['count'] ?? null) : 0),
        );
    }
}

final class RespUserModelUserFollowersUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly string $avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespThreadModel
{
    public function __construct(
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_closed,
        public readonly bool $thread_is_followed,
        public readonly bool $thread_is_starred,
        /** @var RespThreadModelFirstPost */
        public readonly RespThreadModelFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var RespThreadModelLinks */
        public readonly RespThreadModelLinks $links,
        /** @var RespThreadModelPermissions */
        public readonly RespThreadModelPermissions $permissions,
        public readonly string $node_title,
        /** @var RespThreadModelRestrictions */
        public readonly RespThreadModelRestrictions $restrictions,
        /** @var RespThreadModelLastPost */
        public readonly RespThreadModelLastPost $last_post,
        /** @var RespThreadModelContest */
        public readonly RespThreadModelContest $contest,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_closed'] ?? null)) ? (bool) ($data['thread_is_closed'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            (is_scalar(($data['thread_is_starred'] ?? null)) ? (bool) ($data['thread_is_starred'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? RespThreadModelFirstPost::fromArray($data['first_post']) : RespThreadModelFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? RespThreadModelLinks::fromArray($data['links']) : RespThreadModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespThreadModelPermissions::fromArray($data['permissions']) : RespThreadModelPermissions::fromArray([]),
            (is_scalar(($data['node_title'] ?? null)) ? (string) ($data['node_title'] ?? null) : (is_array(($data['node_title'] ?? null)) ? json_encode(($data['node_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['restrictions']) && is_array($data['restrictions']) ? RespThreadModelRestrictions::fromArray($data['restrictions']) : RespThreadModelRestrictions::fromArray([]),
            isset($data['last_post']) && is_array($data['last_post']) ? RespThreadModelLastPost::fromArray($data['last_post']) : RespThreadModelLastPost::fromArray([]),
            isset($data['contest']) && is_array($data['contest']) ? RespThreadModelContest::fromArray($data['contest']) : RespThreadModelContest::fromArray([]),
        );
    }
}

final class RespThreadModelFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        public readonly bool $post_is_liked,
        /** @var RespThreadModelFirstPostLinks */
        public readonly RespThreadModelFirstPostLinks $links,
        /** @var RespThreadModelFirstPostPermissions */
        public readonly RespThreadModelFirstPostPermissions $permissions,
        public readonly bool $thread_is_deleted,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            (is_scalar(($data['post_is_liked'] ?? null)) ? (bool) ($data['post_is_liked'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? RespThreadModelFirstPostLinks::fromArray($data['links']) : RespThreadModelFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespThreadModelFirstPostPermissions::fromArray($data['permissions']) : RespThreadModelFirstPostPermissions::fromArray([]),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
        );
    }
}

final class RespThreadModelFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespThreadModelFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class RespThreadModelLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespThreadModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var RespThreadModelPermissionsBump */
        public readonly RespThreadModelPermissionsBump $bump,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['edit_title'] ?? null)) ? (bool) ($data['edit_title'] ?? null) : false),
            (is_scalar(($data['edit_tags'] ?? null)) ? (bool) ($data['edit_tags'] ?? null) : false),
            isset($data['bump']) && is_array($data['bump']) ? RespThreadModelPermissionsBump::fromArray($data['bump']) : RespThreadModelPermissionsBump::fromArray([]),
        );
    }
}

final class RespThreadModelPermissionsBump
{
    public function __construct(
        public readonly bool $can,
        public readonly int $available_count,
        public readonly mixed $error,
        public readonly mixed $next_available_time,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can'] ?? null)) ? (bool) ($data['can'] ?? null) : false),
            (is_scalar(($data['available_count'] ?? null)) ? (int) ($data['available_count'] ?? null) : 0),
            $data['error'] ?? null,
            $data['next_available_time'] ?? null,
        );
    }
}

final class RespThreadModelRestrictions
{
    public function __construct(
        public readonly int $reply_delay,
        public readonly int $max_reply_count,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['reply_delay'] ?? null)) ? (int) ($data['reply_delay'] ?? null) : 0),
            (is_scalar(($data['max_reply_count'] ?? null)) ? (int) ($data['max_reply_count'] ?? null) : 0),
        );
    }
}

final class RespThreadModelLastPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        public readonly bool $post_is_liked,
        /** @var RespThreadModelLastPostLinks */
        public readonly RespThreadModelLastPostLinks $links,
        /** @var RespThreadModelLastPostPermissions */
        public readonly RespThreadModelLastPostPermissions $permissions,
        public readonly bool $thread_is_deleted,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            (is_scalar(($data['post_is_liked'] ?? null)) ? (bool) ($data['post_is_liked'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? RespThreadModelLastPostLinks::fromArray($data['links']) : RespThreadModelLastPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespThreadModelLastPostPermissions::fromArray($data['permissions']) : RespThreadModelLastPostPermissions::fromArray([]),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
        );
    }
}

final class RespThreadModelLastPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespThreadModelLastPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class RespThreadModelContest
{
    public function __construct(
        public readonly string $type,
        public readonly int $finish_date,
        public readonly int $now_count_members,
        public readonly int $needed_members,
        public readonly int $is_finished,
        public readonly int $count_winners,
        public readonly int $require_like_count,
        public readonly int $require_total_like_count,
        public readonly string $prize_type,
        public readonly string $prize_type_phrase,
        public readonly int $prize_data,
        public readonly int $is_money_places,
        public readonly float $chance_to_win,
        /** @var list<int> */
        public readonly array $winners,
        public readonly bool $already_participate,
        /** @var RespThreadModelContestPermissions */
        public readonly RespThreadModelContestPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['type'] ?? null)) ? (string) ($data['type'] ?? null) : (is_array(($data['type'] ?? null)) ? json_encode(($data['type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['finish_date'] ?? null)) ? (int) ($data['finish_date'] ?? null) : 0),
            (is_scalar(($data['now_count_members'] ?? null)) ? (int) ($data['now_count_members'] ?? null) : 0),
            (is_scalar(($data['needed_members'] ?? null)) ? (int) ($data['needed_members'] ?? null) : 0),
            (is_scalar(($data['is_finished'] ?? null)) ? (int) ($data['is_finished'] ?? null) : 0),
            (is_scalar(($data['count_winners'] ?? null)) ? (int) ($data['count_winners'] ?? null) : 0),
            (is_scalar(($data['require_like_count'] ?? null)) ? (int) ($data['require_like_count'] ?? null) : 0),
            (is_scalar(($data['require_total_like_count'] ?? null)) ? (int) ($data['require_total_like_count'] ?? null) : 0),
            (is_scalar(($data['prize_type'] ?? null)) ? (string) ($data['prize_type'] ?? null) : (is_array(($data['prize_type'] ?? null)) ? json_encode(($data['prize_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['prize_type_phrase'] ?? null)) ? (string) ($data['prize_type_phrase'] ?? null) : (is_array(($data['prize_type_phrase'] ?? null)) ? json_encode(($data['prize_type_phrase'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['prize_data'] ?? null)) ? (int) ($data['prize_data'] ?? null) : 0),
            (is_scalar(($data['is_money_places'] ?? null)) ? (int) ($data['is_money_places'] ?? null) : 0),
            (is_scalar(($data['chance_to_win'] ?? null)) ? (float) ($data['chance_to_win'] ?? null) : 0.0),
            $data['winners'] ?? [],
            (is_scalar(($data['already_participate'] ?? null)) ? (bool) ($data['already_participate'] ?? null) : false),
            isset($data['permissions']) && is_array($data['permissions']) ? RespThreadModelContestPermissions::fromArray($data['permissions']) : RespThreadModelContestPermissions::fromArray([]),
        );
    }
}

final class RespThreadModelContestPermissions
{
    public function __construct(
        public readonly bool $can_finish,
        public readonly bool $can_participate,
        public readonly string $can_participate_error,
        public readonly bool $can_view_user_list,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can_finish'] ?? null)) ? (bool) ($data['can_finish'] ?? null) : false),
            (is_scalar(($data['can_participate'] ?? null)) ? (bool) ($data['can_participate'] ?? null) : false),
            (is_scalar(($data['can_participate_error'] ?? null)) ? (string) ($data['can_participate_error'] ?? null) : (is_array(($data['can_participate_error'] ?? null)) ? json_encode(($data['can_participate_error'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['can_view_user_list'] ?? null)) ? (bool) ($data['can_view_user_list'] ?? null) : false),
        );
    }
}

final class RespPostModel
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var RespPostModelLinks */
        public readonly RespPostModelLinks $links,
        /** @var RespPostModelPermissions */
        public readonly RespPostModelPermissions $permissions,
        public readonly bool $thread_is_deleted,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? RespPostModelLinks::fromArray($data['links']) : RespPostModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespPostModelPermissions::fromArray($data['permissions']) : RespPostModelPermissions::fromArray([]),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
        );
    }
}

final class RespPostModelLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespPostModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class RespPostCommentModel
{
    public function __construct(
        public readonly int $post_comment_id,
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_comment_create_date,
        public readonly string $post_comment_body,
        public readonly string $post_comment_body_html,
        public readonly string $post_comment_body_plain_text,
        public readonly int $post_comment_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_comment_is_published,
        public readonly bool $post_comment_is_deleted,
        public readonly int $post_comment_update_date,
        /** @var RespPostCommentModelLinks */
        public readonly RespPostCommentModelLinks $links,
        /** @var RespPostCommentModelPermissions */
        public readonly RespPostCommentModelPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_comment_id'] ?? null)) ? (int) ($data['post_comment_id'] ?? null) : 0),
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_create_date'] ?? null)) ? (int) ($data['post_comment_create_date'] ?? null) : 0),
            (is_scalar(($data['post_comment_body'] ?? null)) ? (string) ($data['post_comment_body'] ?? null) : (is_array(($data['post_comment_body'] ?? null)) ? json_encode(($data['post_comment_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body_html'] ?? null)) ? (string) ($data['post_comment_body_html'] ?? null) : (is_array(($data['post_comment_body_html'] ?? null)) ? json_encode(($data['post_comment_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body_plain_text'] ?? null)) ? (string) ($data['post_comment_body_plain_text'] ?? null) : (is_array(($data['post_comment_body_plain_text'] ?? null)) ? json_encode(($data['post_comment_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_like_count'] ?? null)) ? (int) ($data['post_comment_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_comment_is_published'] ?? null)) ? (bool) ($data['post_comment_is_published'] ?? null) : false),
            (is_scalar(($data['post_comment_is_deleted'] ?? null)) ? (bool) ($data['post_comment_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_comment_update_date'] ?? null)) ? (int) ($data['post_comment_update_date'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? RespPostCommentModelLinks::fromArray($data['links']) : RespPostCommentModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespPostCommentModelPermissions::fromArray($data['permissions']) : RespPostCommentModelPermissions::fromArray([]),
        );
    }
}

final class RespPostCommentModelLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $post,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post'] ?? null)) ? (string) ($data['post'] ?? null) : (is_array(($data['post'] ?? null)) ? json_encode(($data['post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespPostCommentModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class RespProfilePostModel
{
    public function __construct(
        public readonly int $profile_post_id,
        public readonly int $timeline_user_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_comment_count,
        public readonly int $post_comments_is_disabled,
        public readonly string $timeline_username,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly bool $post_is_liked,
        public readonly bool $post_is_sticked,
        /** @var RespProfilePostModelLinks */
        public readonly RespProfilePostModelLinks $links,
        /** @var RespProfilePostModelPermissions */
        public readonly RespProfilePostModelPermissions $permissions,
        /** @var RespUserModel */
        public readonly RespUserModel $timeline_user,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_comment_count'] ?? null)) ? (int) ($data['post_comment_count'] ?? null) : 0),
            (is_scalar(($data['post_comments_is_disabled'] ?? null)) ? (int) ($data['post_comments_is_disabled'] ?? null) : 0),
            (is_scalar(($data['timeline_username'] ?? null)) ? (string) ($data['timeline_username'] ?? null) : (is_array(($data['timeline_username'] ?? null)) ? json_encode(($data['timeline_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_is_liked'] ?? null)) ? (bool) ($data['post_is_liked'] ?? null) : false),
            (is_scalar(($data['post_is_sticked'] ?? null)) ? (bool) ($data['post_is_sticked'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? RespProfilePostModelLinks::fromArray($data['links']) : RespProfilePostModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespProfilePostModelPermissions::fromArray($data['permissions']) : RespProfilePostModelPermissions::fromArray([]),
            isset($data['timeline_user']) && is_array($data['timeline_user']) ? RespUserModel::fromArray($data['timeline_user']) : RespUserModel::fromArray([]),
        );
    }
}

final class RespProfilePostModelLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $comments,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comments'] ?? null)) ? (string) ($data['comments'] ?? null) : (is_array(($data['comments'] ?? null)) ? json_encode(($data['comments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespProfilePostModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $like,
        public readonly bool $comment,
        public readonly bool $report,
        public readonly bool $stick,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['comment'] ?? null)) ? (bool) ($data['comment'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['stick'] ?? null)) ? (bool) ($data['stick'] ?? null) : false),
        );
    }
}

final class RespProfilePostCommentModel
{
    public function __construct(
        public readonly int $comment_id,
        public readonly int $profile_post_id,
        public readonly int $comment_user_id,
        public readonly string $comment_username,
        public readonly string $comment_username_html,
        public readonly int $comment_create_date,
        public readonly string $comment_body,
        public readonly string $comment_body_html,
        public readonly string $comment_body_plain_text,
        public readonly bool $user_is_ignored,
        public readonly int $timeline_user_id,
        /** @var RespProfilePostCommentModelLinks */
        public readonly RespProfilePostCommentModelLinks $links,
        /** @var RespProfilePostCommentModelPermissions */
        public readonly RespProfilePostCommentModelPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['comment_id'] ?? null)) ? (int) ($data['comment_id'] ?? null) : 0),
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['comment_user_id'] ?? null)) ? (int) ($data['comment_user_id'] ?? null) : 0),
            (is_scalar(($data['comment_username'] ?? null)) ? (string) ($data['comment_username'] ?? null) : (is_array(($data['comment_username'] ?? null)) ? json_encode(($data['comment_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_username_html'] ?? null)) ? (string) ($data['comment_username_html'] ?? null) : (is_array(($data['comment_username_html'] ?? null)) ? json_encode(($data['comment_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_create_date'] ?? null)) ? (int) ($data['comment_create_date'] ?? null) : 0),
            (is_scalar(($data['comment_body'] ?? null)) ? (string) ($data['comment_body'] ?? null) : (is_array(($data['comment_body'] ?? null)) ? json_encode(($data['comment_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_body_html'] ?? null)) ? (string) ($data['comment_body_html'] ?? null) : (is_array(($data['comment_body_html'] ?? null)) ? json_encode(($data['comment_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_body_plain_text'] ?? null)) ? (string) ($data['comment_body_plain_text'] ?? null) : (is_array(($data['comment_body_plain_text'] ?? null)) ? json_encode(($data['comment_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? RespProfilePostCommentModelLinks::fromArray($data['links']) : RespProfilePostCommentModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespProfilePostCommentModelPermissions::fromArray($data['permissions']) : RespProfilePostCommentModelPermissions::fromArray([]),
        );
    }
}

final class RespProfilePostCommentModelLinks
{
    public function __construct(
        public readonly string $detail,
        public readonly string $profile_post,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['profile_post'] ?? null)) ? (string) ($data['profile_post'] ?? null) : (is_array(($data['profile_post'] ?? null)) ? json_encode(($data['profile_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespProfilePostCommentModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class RespConversationModel
{
    public function __construct(
        public readonly int $conversation_id,
        public readonly string $conversation_title,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $conversation_create_date,
        public readonly int $conversation_update_date,
        public readonly int $conversation_last_read_date,
        public readonly int $conversation_online_count,
        public readonly int $is_starred,
        public readonly int $is_group,
        public readonly int $is_unread,
        public readonly int $alerts,
        /** @var RespConversationModelPermissions */
        public readonly RespConversationModelPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var RespConversationModelRecipient */
        public readonly RespConversationModelRecipient $recipient,
        /** @var list<RespConversationModelRecipients> */
        public readonly array $recipients,
        /** @var RespConversationModelLinks */
        public readonly RespConversationModelLinks $links,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['conversation_id'] ?? null)) ? (int) ($data['conversation_id'] ?? null) : 0),
            (is_scalar(($data['conversation_title'] ?? null)) ? (string) ($data['conversation_title'] ?? null) : (is_array(($data['conversation_title'] ?? null)) ? json_encode(($data['conversation_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['conversation_create_date'] ?? null)) ? (int) ($data['conversation_create_date'] ?? null) : 0),
            (is_scalar(($data['conversation_update_date'] ?? null)) ? (int) ($data['conversation_update_date'] ?? null) : 0),
            (is_scalar(($data['conversation_last_read_date'] ?? null)) ? (int) ($data['conversation_last_read_date'] ?? null) : 0),
            (is_scalar(($data['conversation_online_count'] ?? null)) ? (int) ($data['conversation_online_count'] ?? null) : 0),
            (is_scalar(($data['is_starred'] ?? null)) ? (int) ($data['is_starred'] ?? null) : 0),
            (is_scalar(($data['is_group'] ?? null)) ? (int) ($data['is_group'] ?? null) : 0),
            (is_scalar(($data['is_unread'] ?? null)) ? (int) ($data['is_unread'] ?? null) : 0),
            (is_scalar(($data['alerts'] ?? null)) ? (int) ($data['alerts'] ?? null) : 0),
            isset($data['permissions']) && is_array($data['permissions']) ? RespConversationModelPermissions::fromArray($data['permissions']) : RespConversationModelPermissions::fromArray([]),
            (is_scalar(($data['conversation_message_count'] ?? null)) ? (int) ($data['conversation_message_count'] ?? null) : 0),
            (is_scalar(($data['conversation_is_new'] ?? null)) ? (bool) ($data['conversation_is_new'] ?? null) : false),
            (is_scalar(($data['creator_is_ignored'] ?? null)) ? (bool) ($data['creator_is_ignored'] ?? null) : false),
            (is_scalar(($data['conversation_is_open'] ?? null)) ? (bool) ($data['conversation_is_open'] ?? null) : false),
            (is_scalar(($data['conversation_is_deleted'] ?? null)) ? (bool) ($data['conversation_is_deleted'] ?? null) : false),
            isset($data['recipient']) && is_array($data['recipient']) ? RespConversationModelRecipient::fromArray($data['recipient']) : RespConversationModelRecipient::fromArray([]),
            isset($data['recipients']) && is_array($data['recipients']) ? array_map(static fn(array $item): RespConversationModelRecipients => RespConversationModelRecipients::fromArray($item), $data['recipients']) : [],
            isset($data['links']) && is_array($data['links']) ? RespConversationModelLinks::fromArray($data['links']) : RespConversationModelLinks::fromArray([]),
        );
    }
}

final class RespConversationModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $reply,
        public readonly bool $invite,
        public readonly bool $manage_invite_links,
        public readonly bool $kick,
        public readonly bool $upload_avatar,
        public readonly bool $editOwnPost,
        public readonly bool $stickyMessages,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['invite'] ?? null)) ? (bool) ($data['invite'] ?? null) : false),
            (is_scalar(($data['manage_invite_links'] ?? null)) ? (bool) ($data['manage_invite_links'] ?? null) : false),
            (is_scalar(($data['kick'] ?? null)) ? (bool) ($data['kick'] ?? null) : false),
            (is_scalar(($data['upload_avatar'] ?? null)) ? (bool) ($data['upload_avatar'] ?? null) : false),
            (is_scalar(($data['editOwnPost'] ?? null)) ? (bool) ($data['editOwnPost'] ?? null) : false),
            (is_scalar(($data['stickyMessages'] ?? null)) ? (bool) ($data['stickyMessages'] ?? null) : false),
        );
    }
}

final class RespConversationModelRecipient
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly int $last_activity,
        public readonly bool $is_online,
        public readonly bool $contacts_changed,
        public readonly string $avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['is_online'] ?? null)) ? (bool) ($data['is_online'] ?? null) : false),
            (is_scalar(($data['contacts_changed'] ?? null)) ? (bool) ($data['contacts_changed'] ?? null) : false),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespConversationModelRecipients
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly int $last_activity,
        public readonly bool $is_online,
        public readonly bool $contacts_changed,
        public readonly string $avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['is_online'] ?? null)) ? (bool) ($data['is_online'] ?? null) : false),
            (is_scalar(($data['contacts_changed'] ?? null)) ? (bool) ($data['contacts_changed'] ?? null) : false),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespConversationModelLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $messages,
        public readonly string $avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['messages'] ?? null)) ? (string) ($data['messages'] ?? null) : (is_array(($data['messages'] ?? null)) ? json_encode(($data['messages'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespConversationMessageModel
{
    public function __construct(
        public readonly int $message_id,
        public readonly int $conversation_id,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $message_create_date,
        public readonly int $message_is_unread,
        public readonly bool $message_need_translate,
        public readonly bool $message_is_system,
        public readonly int $message_edit_date,
        public readonly string $message_body,
        public readonly string $message_body_html,
        public readonly string $message_body_plain_text,
        public readonly bool $user_is_ignored,
        /** @var RespConversationMessageModelLinks */
        public readonly RespConversationMessageModelLinks $links,
        /** @var RespConversationMessageModelPermissions */
        public readonly RespConversationMessageModelPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['message_id'] ?? null)) ? (int) ($data['message_id'] ?? null) : 0),
            (is_scalar(($data['conversation_id'] ?? null)) ? (int) ($data['conversation_id'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_create_date'] ?? null)) ? (int) ($data['message_create_date'] ?? null) : 0),
            (is_scalar(($data['message_is_unread'] ?? null)) ? (int) ($data['message_is_unread'] ?? null) : 0),
            (is_scalar(($data['message_need_translate'] ?? null)) ? (bool) ($data['message_need_translate'] ?? null) : false),
            (is_scalar(($data['message_is_system'] ?? null)) ? (bool) ($data['message_is_system'] ?? null) : false),
            (is_scalar(($data['message_edit_date'] ?? null)) ? (int) ($data['message_edit_date'] ?? null) : 0),
            (is_scalar(($data['message_body'] ?? null)) ? (string) ($data['message_body'] ?? null) : (is_array(($data['message_body'] ?? null)) ? json_encode(($data['message_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_body_html'] ?? null)) ? (string) ($data['message_body_html'] ?? null) : (is_array(($data['message_body_html'] ?? null)) ? json_encode(($data['message_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_body_plain_text'] ?? null)) ? (string) ($data['message_body_plain_text'] ?? null) : (is_array(($data['message_body_plain_text'] ?? null)) ? json_encode(($data['message_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? RespConversationMessageModelLinks::fromArray($data['links']) : RespConversationMessageModelLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? RespConversationMessageModelPermissions::fromArray($data['permissions']) : RespConversationMessageModelPermissions::fromArray([]),
        );
    }
}

final class RespConversationMessageModelLinks
{
    public function __construct(
        public readonly string $detail,
        public readonly string $conversation,
        public readonly string $creator,
        public readonly string $creator_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['conversation'] ?? null)) ? (string) ($data['conversation'] ?? null) : (is_array(($data['conversation'] ?? null)) ? json_encode(($data['conversation'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator'] ?? null)) ? (string) ($data['creator'] ?? null) : (is_array(($data['creator'] ?? null)) ? json_encode(($data['creator'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_avatar'] ?? null)) ? (string) ($data['creator_avatar'] ?? null) : (is_array(($data['creator_avatar'] ?? null)) ? json_encode(($data['creator_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class RespConversationMessageModelPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $stick_unstick,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['stick-unstick'] ?? null)) ? (bool) ($data['stick-unstick'] ?? null) : false),
        );
    }
}

final class RespSystemInfo
{
    public function __construct(
        public readonly int $visitor_id,
        public readonly int $time,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['visitor_id'] ?? null)) ? (int) ($data['visitor_id'] ?? null) : 0),
            (is_scalar(($data['time'] ?? null)) ? (int) ($data['time'] ?? null) : 0),
        );
    }
}

// ─── Response Models ────────────────────────────────────────────────────────

final class OAuthTokenResponse
{
    public function __construct(
        public readonly string $access_token,
        public readonly string $token_type,
        public readonly int $expires_in,
        public readonly ?string $refresh_token,
        public readonly ?string $scope,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['access_token'] ?? null)) ? (string) ($data['access_token'] ?? null) : (is_array(($data['access_token'] ?? null)) ? json_encode(($data['access_token'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['token_type'] ?? null)) ? (string) ($data['token_type'] ?? null) : (is_array(($data['token_type'] ?? null)) ? json_encode(($data['token_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['expires_in'] ?? null)) ? (int) ($data['expires_in'] ?? null) : 0),
            isset($data['refresh_token']) ? (is_scalar($data['refresh_token']) ? (string) $data['refresh_token'] : (is_array($data['refresh_token']) ? json_encode($data['refresh_token'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['scope']) ? (is_scalar($data['scope']) ? (string) $data['scope'] : (is_array($data['scope']) ? json_encode($data['scope'], JSON_UNESCAPED_UNICODE) : null)) : null,
        );
    }
}

final class AssetsCssResponse
{
    public function __construct(
        public readonly string $contents,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['contents'] ?? null)) ? (string) ($data['contents'] ?? null) : (is_array(($data['contents'] ?? null)) ? json_encode(($data['contents'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class CategoriesListResponse
{
    public function __construct(
        /** @var list<CategoriesListResponseCategories> */
        public readonly array $categories,
        public readonly int $categories_total,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['categories']) && is_array($data['categories']) ? array_map(static fn(array $item): CategoriesListResponseCategories => CategoriesListResponseCategories::fromArray($item), $data['categories']) : [],
            (is_scalar(($data['categories_total'] ?? null)) ? (int) ($data['categories_total'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class CategoriesListResponseCategories
{
    public function __construct(
        public readonly int $category_id,
        public readonly string $category_title,
        public readonly string $category_description,
        /** @var CategoriesListResponseCategoriesLinks */
        public readonly CategoriesListResponseCategoriesLinks $links,
        /** @var CategoriesListResponseCategoriesPermissions */
        public readonly CategoriesListResponseCategoriesPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['category_id'] ?? null)) ? (int) ($data['category_id'] ?? null) : 0),
            (is_scalar(($data['category_title'] ?? null)) ? (string) ($data['category_title'] ?? null) : (is_array(($data['category_title'] ?? null)) ? json_encode(($data['category_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['category_description'] ?? null)) ? (string) ($data['category_description'] ?? null) : (is_array(($data['category_description'] ?? null)) ? json_encode(($data['category_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? CategoriesListResponseCategoriesLinks::fromArray($data['links']) : CategoriesListResponseCategoriesLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? CategoriesListResponseCategoriesPermissions::fromArray($data['permissions']) : CategoriesListResponseCategoriesPermissions::fromArray([]),
        );
    }
}

final class CategoriesListResponseCategoriesLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class CategoriesListResponseCategoriesPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class CategoriesGetResponse
{
    public function __construct(
        /** @var CategoriesGetResponseCategory */
        public readonly CategoriesGetResponseCategory $category,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['category']) && is_array($data['category']) ? CategoriesGetResponseCategory::fromArray($data['category']) : CategoriesGetResponseCategory::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class CategoriesGetResponseCategory
{
    public function __construct(
        public readonly int $category_id,
        public readonly string $category_title,
        public readonly string $category_description,
        /** @var CategoriesGetResponseCategoryLinks */
        public readonly CategoriesGetResponseCategoryLinks $links,
        /** @var CategoriesGetResponseCategoryPermissions */
        public readonly CategoriesGetResponseCategoryPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['category_id'] ?? null)) ? (int) ($data['category_id'] ?? null) : 0),
            (is_scalar(($data['category_title'] ?? null)) ? (string) ($data['category_title'] ?? null) : (is_array(($data['category_title'] ?? null)) ? json_encode(($data['category_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['category_description'] ?? null)) ? (string) ($data['category_description'] ?? null) : (is_array(($data['category_description'] ?? null)) ? json_encode(($data['category_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? CategoriesGetResponseCategoryLinks::fromArray($data['links']) : CategoriesGetResponseCategoryLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? CategoriesGetResponseCategoryPermissions::fromArray($data['permissions']) : CategoriesGetResponseCategoryPermissions::fromArray([]),
        );
    }
}

final class CategoriesGetResponseCategoryLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class CategoriesGetResponseCategoryPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class ForumsListResponse
{
    public function __construct(
        /** @var list<ForumsListResponseForums> */
        public readonly array $forums,
        public readonly int $forums_total,
        /** @var list<ForumsListResponseTabs> */
        public readonly array $tabs,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['forums']) && is_array($data['forums']) ? array_map(static fn(array $item): ForumsListResponseForums => ForumsListResponseForums::fromArray($item), $data['forums']) : [],
            (is_scalar(($data['forums_total'] ?? null)) ? (int) ($data['forums_total'] ?? null) : 0),
            isset($data['tabs']) && is_array($data['tabs']) ? array_map(static fn(array $item): ForumsListResponseTabs => ForumsListResponseTabs::fromArray($item), $data['tabs']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ForumsListResponseForums
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        /** @var list<ForumsListResponseForumsForumPrefixes> */
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ForumsListResponseForumsLinks */
        public readonly ForumsListResponseForumsLinks $links,
        /** @var ForumsListResponseForumsPermissions */
        public readonly ForumsListResponseForumsPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item): ForumsListResponseForumsForumPrefixes => ForumsListResponseForumsForumPrefixes::fromArray($item), $data['forum_prefixes']) : [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ForumsListResponseForumsLinks::fromArray($data['links']) : ForumsListResponseForumsLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ForumsListResponseForumsPermissions::fromArray($data['permissions']) : ForumsListResponseForumsPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class ForumsListResponseForumsForumPrefixes
{
    public function __construct(
        public readonly string $group_title,
        /** @var list<ForumsListResponseForumsForumPrefixesGroupPrefixes> */
        public readonly array $group_prefixes,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['group_title'] ?? null)) ? (string) ($data['group_title'] ?? null) : (is_array(($data['group_title'] ?? null)) ? json_encode(($data['group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item): ForumsListResponseForumsForumPrefixesGroupPrefixes => ForumsListResponseForumsForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']) : [],
        );
    }
}

final class ForumsListResponseForumsForumPrefixesGroupPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsListResponseForumsLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsListResponseForumsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ForumsListResponseTabs
{
    public function __construct(
        public readonly string $link_title,
        public readonly bool $isDefault,
        public readonly string $title,
        public readonly bool $isHidden,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['link_title'] ?? null)) ? (string) ($data['link_title'] ?? null) : (is_array(($data['link_title'] ?? null)) ? json_encode(($data['link_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['isDefault'] ?? null)) ? (bool) ($data['isDefault'] ?? null) : false),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['isHidden'] ?? null)) ? (bool) ($data['isHidden'] ?? null) : false),
        );
    }
}

final class ForumsGroupedResponse
{
    public function __construct(
        public readonly array $data,
        /** @var list<ForumsGroupedResponseTabs> */
        public readonly array $tabs,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['data'] ?? [],
            isset($data['tabs']) && is_array($data['tabs']) ? array_map(static fn(array $item): ForumsGroupedResponseTabs => ForumsGroupedResponseTabs::fromArray($item), $data['tabs']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ForumsGroupedResponseTabs
{
    public function __construct(
        public readonly string $link_title,
        public readonly bool $isDefault,
        public readonly string $title,
        public readonly bool $isHidden,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['link_title'] ?? null)) ? (string) ($data['link_title'] ?? null) : (is_array(($data['link_title'] ?? null)) ? json_encode(($data['link_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['isDefault'] ?? null)) ? (bool) ($data['isDefault'] ?? null) : false),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['isHidden'] ?? null)) ? (bool) ($data['isHidden'] ?? null) : false),
        );
    }
}

final class ForumsGetResponse
{
    public function __construct(
        /** @var ForumsGetResponseForum */
        public readonly ForumsGetResponseForum $forum,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['forum']) && is_array($data['forum']) ? ForumsGetResponseForum::fromArray($data['forum']) : ForumsGetResponseForum::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ForumsGetResponseForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        /** @var list<ForumsGetResponseForumForumPrefixes> */
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ForumsGetResponseForumLinks */
        public readonly ForumsGetResponseForumLinks $links,
        /** @var ForumsGetResponseForumPermissions */
        public readonly ForumsGetResponseForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item): ForumsGetResponseForumForumPrefixes => ForumsGetResponseForumForumPrefixes::fromArray($item), $data['forum_prefixes']) : [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ForumsGetResponseForumLinks::fromArray($data['links']) : ForumsGetResponseForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ForumsGetResponseForumPermissions::fromArray($data['permissions']) : ForumsGetResponseForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class ForumsGetResponseForumForumPrefixes
{
    public function __construct(
        public readonly string $group_title,
        /** @var list<ForumsGetResponseForumForumPrefixesGroupPrefixes> */
        public readonly array $group_prefixes,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['group_title'] ?? null)) ? (string) ($data['group_title'] ?? null) : (is_array(($data['group_title'] ?? null)) ? json_encode(($data['group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item): ForumsGetResponseForumForumPrefixesGroupPrefixes => ForumsGetResponseForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']) : [],
        );
    }
}

final class ForumsGetResponseForumForumPrefixesGroupPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsGetResponseForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsGetResponseForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ForumsFollowersResponse
{
    public function __construct(
        /** @var list<ForumsFollowersResponseUsers> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): ForumsFollowersResponseUsers => ForumsFollowersResponseUsers::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ForumsFollowersResponseUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        /** @var ForumsFollowersResponseUsersFollow */
        public readonly ForumsFollowersResponseUsersFollow $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['follow']) && is_array($data['follow']) ? ForumsFollowersResponseUsersFollow::fromArray($data['follow']) : ForumsFollowersResponseUsersFollow::fromArray([]),
        );
    }
}

final class ForumsFollowersResponseUsersFollow
{
    public function __construct(
        public readonly bool $post,
        public readonly bool $alert,
        public readonly bool $email,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['alert'] ?? null)) ? (bool) ($data['alert'] ?? null) : false),
            (is_scalar(($data['email'] ?? null)) ? (bool) ($data['email'] ?? null) : false),
        );
    }
}

final class ForumsFollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ForumsUnfollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ForumsFollowedResponse
{
    public function __construct(
        /** @var list<ForumsFollowedResponseForums> */
        public readonly array $forums,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['forums']) && is_array($data['forums']) ? array_map(static fn(array $item): ForumsFollowedResponseForums => ForumsFollowedResponseForums::fromArray($item), $data['forums']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ForumsFollowedResponseForums
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        /** @var list<ForumsFollowedResponseForumsForumPrefixes> */
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ForumsFollowedResponseForumsLinks */
        public readonly ForumsFollowedResponseForumsLinks $links,
        /** @var ForumsFollowedResponseForumsPermissions */
        public readonly ForumsFollowedResponseForumsPermissions $permissions,
        public readonly bool $forum_is_followed,
        /** @var ForumsFollowedResponseForumsFollow */
        public readonly ForumsFollowedResponseForumsFollow $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item): ForumsFollowedResponseForumsForumPrefixes => ForumsFollowedResponseForumsForumPrefixes::fromArray($item), $data['forum_prefixes']) : [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ForumsFollowedResponseForumsLinks::fromArray($data['links']) : ForumsFollowedResponseForumsLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ForumsFollowedResponseForumsPermissions::fromArray($data['permissions']) : ForumsFollowedResponseForumsPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
            isset($data['follow']) && is_array($data['follow']) ? ForumsFollowedResponseForumsFollow::fromArray($data['follow']) : ForumsFollowedResponseForumsFollow::fromArray([]),
        );
    }
}

final class ForumsFollowedResponseForumsForumPrefixes
{
    public function __construct(
        public readonly string $group_title,
        /** @var list<ForumsFollowedResponseForumsForumPrefixesGroupPrefixes> */
        public readonly array $group_prefixes,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['group_title'] ?? null)) ? (string) ($data['group_title'] ?? null) : (is_array(($data['group_title'] ?? null)) ? json_encode(($data['group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item): ForumsFollowedResponseForumsForumPrefixesGroupPrefixes => ForumsFollowedResponseForumsForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']) : [],
        );
    }
}

final class ForumsFollowedResponseForumsForumPrefixesGroupPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsFollowedResponseForumsLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsFollowedResponseForumsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ForumsFollowedResponseForumsFollow
{
    public function __construct(
        public readonly bool $post,
        public readonly bool $alert,
        public readonly bool $email,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['alert'] ?? null)) ? (bool) ($data['alert'] ?? null) : false),
            (is_scalar(($data['email'] ?? null)) ? (bool) ($data['email'] ?? null) : false),
        );
    }
}

final class ForumsGetFeedOptionsResponse
{
    public function __construct(
        /** @var list<ForumsGetFeedOptionsResponseForums> */
        public readonly array $forums,
        /** @var list<int> */
        public readonly array $excluded_forums_ids,
        /** @var list<int> */
        public readonly array $default_excluded_forums_ids,
        public readonly string $keywords,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['forums']) && is_array($data['forums']) ? array_map(static fn(array $item): ForumsGetFeedOptionsResponseForums => ForumsGetFeedOptionsResponseForums::fromArray($item), $data['forums']) : [],
            $data['excluded_forums_ids'] ?? [],
            $data['default_excluded_forums_ids'] ?? [],
            (is_scalar(($data['keywords'] ?? null)) ? (string) ($data['keywords'] ?? null) : (is_array(($data['keywords'] ?? null)) ? json_encode(($data['keywords'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ForumsGetFeedOptionsResponseForums
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $parent_node_id,
        /** @var ForumsGetFeedOptionsResponseForumsLinks */
        public readonly ForumsGetFeedOptionsResponseForumsLinks $links,
        /** @var ForumsGetFeedOptionsResponseForumsPermissions */
        public readonly ForumsGetFeedOptionsResponseForumsPermissions $permissions,
        public readonly bool $forum_is_followed,
        public readonly bool $has_children,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['parent_node_id'] ?? null)) ? (int) ($data['parent_node_id'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? ForumsGetFeedOptionsResponseForumsLinks::fromArray($data['links']) : ForumsGetFeedOptionsResponseForumsLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ForumsGetFeedOptionsResponseForumsPermissions::fromArray($data['permissions']) : ForumsGetFeedOptionsResponseForumsPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
            (is_scalar(($data['has_children'] ?? null)) ? (bool) ($data['has_children'] ?? null) : false),
        );
    }
}

final class ForumsGetFeedOptionsResponseForumsLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ForumsGetFeedOptionsResponseForumsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ForumsEditFeedOptionsResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class LinksListResponse
{
    public function __construct(
        /** @var list<RespLinkModel> */
        public readonly array $link_forums,
        public readonly int $link_forums_total,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['link-forums']) && is_array($data['link-forums']) ? array_map(static fn(array $item): RespLinkModel => RespLinkModel::fromArray($item), $data['link-forums']) : [],
            (is_scalar(($data['link-forums_total'] ?? null)) ? (int) ($data['link-forums_total'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class LinksGetResponse
{
    public function __construct(
        /** @var RespLinkModel */
        public readonly RespLinkModel $link_forum,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['link-forum']) && is_array($data['link-forum']) ? RespLinkModel::fromArray($data['link-forum']) : RespLinkModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PagesListResponse
{
    public function __construct(
        /** @var list<PagesListResponsePages> */
        public readonly array $pages,
        public readonly int $pages_total,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['pages']) && is_array($data['pages']) ? array_map(static fn(array $item): PagesListResponsePages => PagesListResponsePages::fromArray($item), $data['pages']) : [],
            (is_scalar(($data['pages_total'] ?? null)) ? (int) ($data['pages_total'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PagesListResponsePages
{
    public function __construct(
        public readonly int $page_id,
        public readonly string $page_title,
        public readonly string $page_description,
        /** @var PagesListResponsePagesLinks */
        public readonly PagesListResponsePagesLinks $links,
        /** @var PagesListResponsePagesPermissions */
        public readonly PagesListResponsePagesPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['page_id'] ?? null)) ? (int) ($data['page_id'] ?? null) : 0),
            (is_scalar(($data['page_title'] ?? null)) ? (string) ($data['page_title'] ?? null) : (is_array(($data['page_title'] ?? null)) ? json_encode(($data['page_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['page_description'] ?? null)) ? (string) ($data['page_description'] ?? null) : (is_array(($data['page_description'] ?? null)) ? json_encode(($data['page_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? PagesListResponsePagesLinks::fromArray($data['links']) : PagesListResponsePagesLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? PagesListResponsePagesPermissions::fromArray($data['permissions']) : PagesListResponsePagesPermissions::fromArray([]),
        );
    }
}

final class PagesListResponsePagesLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_pages,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-pages'] ?? null)) ? (string) ($data['sub-pages'] ?? null) : (is_array(($data['sub-pages'] ?? null)) ? json_encode(($data['sub-pages'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class PagesListResponsePagesPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class PagesGetResponse
{
    public function __construct(
        /** @var PagesGetResponsePage */
        public readonly PagesGetResponsePage $page,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['page']) && is_array($data['page']) ? PagesGetResponsePage::fromArray($data['page']) : PagesGetResponsePage::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PagesGetResponsePage
{
    public function __construct(
        public readonly int $page_id,
        public readonly string $page_title,
        public readonly string $page_description,
        public readonly int $page_view_count,
        /** @var PagesGetResponsePageLinks */
        public readonly PagesGetResponsePageLinks $links,
        /** @var PagesGetResponsePagePermissions */
        public readonly PagesGetResponsePagePermissions $permissions,
        public readonly string $page_html,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['page_id'] ?? null)) ? (int) ($data['page_id'] ?? null) : 0),
            (is_scalar(($data['page_title'] ?? null)) ? (string) ($data['page_title'] ?? null) : (is_array(($data['page_title'] ?? null)) ? json_encode(($data['page_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['page_description'] ?? null)) ? (string) ($data['page_description'] ?? null) : (is_array(($data['page_description'] ?? null)) ? json_encode(($data['page_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['page_view_count'] ?? null)) ? (int) ($data['page_view_count'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? PagesGetResponsePageLinks::fromArray($data['links']) : PagesGetResponsePageLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? PagesGetResponsePagePermissions::fromArray($data['permissions']) : PagesGetResponsePagePermissions::fromArray([]),
            (is_scalar(($data['page_html'] ?? null)) ? (string) ($data['page_html'] ?? null) : (is_array(($data['page_html'] ?? null)) ? json_encode(($data['page_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class PagesGetResponsePageLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_pages,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-pages'] ?? null)) ? (string) ($data['sub-pages'] ?? null) : (is_array(($data['sub-pages'] ?? null)) ? json_encode(($data['sub-pages'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class PagesGetResponsePagePermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class NavigationListResponse
{
    public function __construct(
        /** @var list<NavigationListResponseElements> */
        public readonly array $elements,
        public readonly int $elements_count,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['elements']) && is_array($data['elements']) ? array_map(static fn(array $item): NavigationListResponseElements => NavigationListResponseElements::fromArray($item), $data['elements']) : [],
            (is_scalar(($data['elements_count'] ?? null)) ? (int) ($data['elements_count'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class NavigationListResponseElements
{
    public function __construct(
        public readonly int $category_id,
        public readonly string $category_title,
        public readonly string $category_description,
        /** @var NavigationListResponseElementsLinks */
        public readonly NavigationListResponseElementsLinks $links,
        /** @var NavigationListResponseElementsPermissions */
        public readonly NavigationListResponseElementsPermissions $permissions,
        public readonly string $navigation_type,
        public readonly int $navigation_id,
        public readonly int $navigation_parent_id,
        public readonly bool $has_sub_elements,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['category_id'] ?? null)) ? (int) ($data['category_id'] ?? null) : 0),
            (is_scalar(($data['category_title'] ?? null)) ? (string) ($data['category_title'] ?? null) : (is_array(($data['category_title'] ?? null)) ? json_encode(($data['category_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['category_description'] ?? null)) ? (string) ($data['category_description'] ?? null) : (is_array(($data['category_description'] ?? null)) ? json_encode(($data['category_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? NavigationListResponseElementsLinks::fromArray($data['links']) : NavigationListResponseElementsLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? NavigationListResponseElementsPermissions::fromArray($data['permissions']) : NavigationListResponseElementsPermissions::fromArray([]),
            (is_scalar(($data['navigation_type'] ?? null)) ? (string) ($data['navigation_type'] ?? null) : (is_array(($data['navigation_type'] ?? null)) ? json_encode(($data['navigation_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['navigation_id'] ?? null)) ? (int) ($data['navigation_id'] ?? null) : 0),
            (is_scalar(($data['navigation_parent_id'] ?? null)) ? (int) ($data['navigation_parent_id'] ?? null) : 0),
            (is_scalar(($data['has_sub_elements'] ?? null)) ? (bool) ($data['has_sub_elements'] ?? null) : false),
        );
    }
}

final class NavigationListResponseElementsLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $sub_elements,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-elements'] ?? null)) ? (string) ($data['sub-elements'] ?? null) : (is_array(($data['sub-elements'] ?? null)) ? json_encode(($data['sub-elements'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class NavigationListResponseElementsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class ThreadsListResponse
{
    public function __construct(
        /** @var list<RespThreadModel> */
        public readonly array $threads,
        /** @var ThreadsListResponseForum */
        public readonly ThreadsListResponseForum $forum,
        public readonly int $threads_total,
        /** @var ThreadsListResponseLinks */
        public readonly ThreadsListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['threads']) : [],
            isset($data['forum']) && is_array($data['forum']) ? ThreadsListResponseForum::fromArray($data['forum']) : ThreadsListResponseForum::fromArray([]),
            (is_scalar(($data['threads_total'] ?? null)) ? (int) ($data['threads_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? ThreadsListResponseLinks::fromArray($data['links']) : ThreadsListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsListResponseForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ThreadsListResponseForumLinks */
        public readonly ThreadsListResponseForumLinks $links,
        /** @var ThreadsListResponseForumPermissions */
        public readonly ThreadsListResponseForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsListResponseForumLinks::fromArray($data['links']) : ThreadsListResponseForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsListResponseForumPermissions::fromArray($data['permissions']) : ThreadsListResponseForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class ThreadsListResponseForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsListResponseForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ThreadsListResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsCreateResponse
{
    public function __construct(
        /** @var RespThreadModel */
        public readonly RespThreadModel $thread,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['thread']) && is_array($data['thread']) ? RespThreadModel::fromArray($data['thread']) : RespThreadModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsCreateContestResponse
{
    public function __construct(
        /** @var RespThreadModel */
        public readonly RespThreadModel $thread,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['thread']) && is_array($data['thread']) ? RespThreadModel::fromArray($data['thread']) : RespThreadModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsClaimResponse
{
    public function __construct(
        /** @var RespThreadModel */
        public readonly RespThreadModel $thread,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['thread']) && is_array($data['thread']) ? RespThreadModel::fromArray($data['thread']) : RespThreadModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsGetResponse
{
    public function __construct(
        /** @var RespThreadModel */
        public readonly RespThreadModel $thread,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['thread']) && is_array($data['thread']) ? RespThreadModel::fromArray($data['thread']) : RespThreadModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsEditResponse
{
    public function __construct(
        /** @var RespThreadModel */
        public readonly RespThreadModel $thread,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['thread']) && is_array($data['thread']) ? RespThreadModel::fromArray($data['thread']) : RespThreadModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsMoveResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsBumpResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsHideResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsStarResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsUnstarResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsFollowersResponse
{
    public function __construct(
        /** @var list<ThreadsFollowersResponseUsers> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): ThreadsFollowersResponseUsers => ThreadsFollowersResponseUsers::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsFollowersResponseUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        /** @var ThreadsFollowersResponseUsersFollow */
        public readonly ThreadsFollowersResponseUsersFollow $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['follow']) && is_array($data['follow']) ? ThreadsFollowersResponseUsersFollow::fromArray($data['follow']) : ThreadsFollowersResponseUsersFollow::fromArray([]),
        );
    }
}

final class ThreadsFollowersResponseUsersFollow
{
    public function __construct(
        public readonly bool $alert,
        public readonly bool $email,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['alert'] ?? null)) ? (bool) ($data['alert'] ?? null) : false),
            (is_scalar(($data['email'] ?? null)) ? (bool) ($data['email'] ?? null) : false),
        );
    }
}

final class ThreadsFollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsUnfollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsFollowedResponse
{
    public function __construct(
        /** @var list<ThreadsFollowedResponseThreads> */
        public readonly array $threads,
        public readonly int $threads_total,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item): ThreadsFollowedResponseThreads => ThreadsFollowedResponseThreads::fromArray($item), $data['threads']) : [],
            (is_scalar(($data['threads_total'] ?? null)) ? (int) ($data['threads_total'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsFollowedResponseThreads
{
    public function __construct(
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var ThreadsFollowedResponseThreadsFirstPost */
        public readonly ThreadsFollowedResponseThreadsFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var ThreadsFollowedResponseThreadsLinks */
        public readonly ThreadsFollowedResponseThreadsLinks $links,
        /** @var ThreadsFollowedResponseThreadsPermissions */
        public readonly ThreadsFollowedResponseThreadsPermissions $permissions,
        /** @var ThreadsFollowedResponseThreadsForum */
        public readonly ThreadsFollowedResponseThreadsForum $forum,
        /** @var ThreadsFollowedResponseThreadsFollow */
        public readonly ThreadsFollowedResponseThreadsFollow $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? ThreadsFollowedResponseThreadsFirstPost::fromArray($data['first_post']) : ThreadsFollowedResponseThreadsFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? ThreadsFollowedResponseThreadsLinks::fromArray($data['links']) : ThreadsFollowedResponseThreadsLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsFollowedResponseThreadsPermissions::fromArray($data['permissions']) : ThreadsFollowedResponseThreadsPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? ThreadsFollowedResponseThreadsForum::fromArray($data['forum']) : ThreadsFollowedResponseThreadsForum::fromArray([]),
            isset($data['follow']) && is_array($data['follow']) ? ThreadsFollowedResponseThreadsFollow::fromArray($data['follow']) : ThreadsFollowedResponseThreadsFollow::fromArray([]),
        );
    }
}

final class ThreadsFollowedResponseThreadsFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        /** @var list<ThreadsFollowedResponseThreadsFirstPostLikeUsers> */
        public readonly array $like_users,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var ThreadsFollowedResponseThreadsFirstPostLinks */
        public readonly ThreadsFollowedResponseThreadsFirstPostLinks $links,
        /** @var ThreadsFollowedResponseThreadsFirstPostPermissions */
        public readonly ThreadsFollowedResponseThreadsFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            isset($data['like_users']) && is_array($data['like_users']) ? array_map(static fn(array $item): ThreadsFollowedResponseThreadsFirstPostLikeUsers => ThreadsFollowedResponseThreadsFirstPostLikeUsers::fromArray($item), $data['like_users']) : [],
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsFollowedResponseThreadsFirstPostLinks::fromArray($data['links']) : ThreadsFollowedResponseThreadsFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsFollowedResponseThreadsFirstPostPermissions::fromArray($data['permissions']) : ThreadsFollowedResponseThreadsFirstPostPermissions::fromArray([]),
        );
    }
}

final class ThreadsFollowedResponseThreadsFirstPostLikeUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly int $display_style_group_id,
        public readonly int $is_banned,
        public readonly string $uniq_username_css,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_banned'] ?? null)) ? (int) ($data['is_banned'] ?? null) : 0),
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsFollowedResponseThreadsFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsFollowedResponseThreadsFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class ThreadsFollowedResponseThreadsLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsFollowedResponseThreadsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['edit_title'] ?? null)) ? (bool) ($data['edit_title'] ?? null) : false),
            (is_scalar(($data['edit_tags'] ?? null)) ? (bool) ($data['edit_tags'] ?? null) : false),
        );
    }
}

final class ThreadsFollowedResponseThreadsForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ThreadsFollowedResponseThreadsForumLinks */
        public readonly ThreadsFollowedResponseThreadsForumLinks $links,
        /** @var ThreadsFollowedResponseThreadsForumPermissions */
        public readonly ThreadsFollowedResponseThreadsForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsFollowedResponseThreadsForumLinks::fromArray($data['links']) : ThreadsFollowedResponseThreadsForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsFollowedResponseThreadsForumPermissions::fromArray($data['permissions']) : ThreadsFollowedResponseThreadsForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class ThreadsFollowedResponseThreadsForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsFollowedResponseThreadsForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ThreadsFollowedResponseThreadsFollow
{
    public function __construct(
        public readonly bool $alert,
        public readonly bool $email,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['alert'] ?? null)) ? (bool) ($data['alert'] ?? null) : false),
            (is_scalar(($data['email'] ?? null)) ? (bool) ($data['email'] ?? null) : false),
        );
    }
}

final class ThreadsNavigationResponse
{
    public function __construct(
        /** @var list<ThreadsNavigationResponseElements> */
        public readonly array $elements,
        public readonly int $elements_count,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['elements']) && is_array($data['elements']) ? array_map(static fn(array $item): ThreadsNavigationResponseElements => ThreadsNavigationResponseElements::fromArray($item), $data['elements']) : [],
            (is_scalar(($data['elements_count'] ?? null)) ? (int) ($data['elements_count'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsNavigationResponseElements
{
    public function __construct(
        public readonly int $category_id,
        public readonly string $category_title,
        public readonly string $category_description,
        /** @var ThreadsNavigationResponseElementsLinks */
        public readonly ThreadsNavigationResponseElementsLinks $links,
        /** @var ThreadsNavigationResponseElementsPermissions */
        public readonly ThreadsNavigationResponseElementsPermissions $permissions,
        public readonly string $navigation_type,
        public readonly int $navigation_id,
        public readonly int $navigation_depth,
        public readonly int $navigation_parent_id,
        public readonly bool $has_sub_elements,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['category_id'] ?? null)) ? (int) ($data['category_id'] ?? null) : 0),
            (is_scalar(($data['category_title'] ?? null)) ? (string) ($data['category_title'] ?? null) : (is_array(($data['category_title'] ?? null)) ? json_encode(($data['category_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['category_description'] ?? null)) ? (string) ($data['category_description'] ?? null) : (is_array(($data['category_description'] ?? null)) ? json_encode(($data['category_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['links']) && is_array($data['links']) ? ThreadsNavigationResponseElementsLinks::fromArray($data['links']) : ThreadsNavigationResponseElementsLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsNavigationResponseElementsPermissions::fromArray($data['permissions']) : ThreadsNavigationResponseElementsPermissions::fromArray([]),
            (is_scalar(($data['navigation_type'] ?? null)) ? (string) ($data['navigation_type'] ?? null) : (is_array(($data['navigation_type'] ?? null)) ? json_encode(($data['navigation_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['navigation_id'] ?? null)) ? (int) ($data['navigation_id'] ?? null) : 0),
            (is_scalar(($data['navigation_depth'] ?? null)) ? (int) ($data['navigation_depth'] ?? null) : 0),
            (is_scalar(($data['navigation_parent_id'] ?? null)) ? (int) ($data['navigation_parent_id'] ?? null) : 0),
            (is_scalar(($data['has_sub_elements'] ?? null)) ? (bool) ($data['has_sub_elements'] ?? null) : false),
        );
    }
}

final class ThreadsNavigationResponseElementsLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $sub_elements,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-elements'] ?? null)) ? (string) ($data['sub-elements'] ?? null) : (is_array(($data['sub-elements'] ?? null)) ? json_encode(($data['sub-elements'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsNavigationResponseElementsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class ThreadsPollGetResponse
{
    public function __construct(
        /** @var ThreadsPollGetResponsePoll */
        public readonly ThreadsPollGetResponsePoll $poll,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['poll']) && is_array($data['poll']) ? ThreadsPollGetResponsePoll::fromArray($data['poll']) : ThreadsPollGetResponsePoll::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsPollGetResponsePoll
{
    public function __construct(
        public readonly int $poll_id,
        public readonly string $poll_question,
        public readonly int $poll_vote_count,
        public readonly int $poll_max_votes,
        public readonly bool $poll_is_open,
        public readonly bool $poll_is_voted,
        /** @var list<ThreadsPollGetResponsePollResponses> */
        public readonly array $responses,
        /** @var ThreadsPollGetResponsePollPermissions */
        public readonly ThreadsPollGetResponsePollPermissions $permissions,
        /** @var ThreadsPollGetResponsePollLinks */
        public readonly ThreadsPollGetResponsePollLinks $links,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['poll_id'] ?? null)) ? (int) ($data['poll_id'] ?? null) : 0),
            (is_scalar(($data['poll_question'] ?? null)) ? (string) ($data['poll_question'] ?? null) : (is_array(($data['poll_question'] ?? null)) ? json_encode(($data['poll_question'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poll_vote_count'] ?? null)) ? (int) ($data['poll_vote_count'] ?? null) : 0),
            (is_scalar(($data['poll_max_votes'] ?? null)) ? (int) ($data['poll_max_votes'] ?? null) : 0),
            (is_scalar(($data['poll_is_open'] ?? null)) ? (bool) ($data['poll_is_open'] ?? null) : false),
            (is_scalar(($data['poll_is_voted'] ?? null)) ? (bool) ($data['poll_is_voted'] ?? null) : false),
            isset($data['responses']) && is_array($data['responses']) ? array_map(static fn(array $item): ThreadsPollGetResponsePollResponses => ThreadsPollGetResponsePollResponses::fromArray($item), $data['responses']) : [],
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsPollGetResponsePollPermissions::fromArray($data['permissions']) : ThreadsPollGetResponsePollPermissions::fromArray([]),
            isset($data['links']) && is_array($data['links']) ? ThreadsPollGetResponsePollLinks::fromArray($data['links']) : ThreadsPollGetResponsePollLinks::fromArray([]),
        );
    }
}

final class ThreadsPollGetResponsePollResponses
{
    public function __construct(
        public readonly int $response_id,
        public readonly string $response_answer,
        public readonly int $response_vote_count,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['response_id'] ?? null)) ? (int) ($data['response_id'] ?? null) : 0),
            (is_scalar(($data['response_answer'] ?? null)) ? (string) ($data['response_answer'] ?? null) : (is_array(($data['response_answer'] ?? null)) ? json_encode(($data['response_answer'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['response_vote_count'] ?? null)) ? (int) ($data['response_vote_count'] ?? null) : 0),
        );
    }
}

final class ThreadsPollGetResponsePollPermissions
{
    public function __construct(
        public readonly bool $vote,
        public readonly bool $result,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['vote'] ?? null)) ? (bool) ($data['vote'] ?? null) : false),
            (is_scalar(($data['result'] ?? null)) ? (bool) ($data['result'] ?? null) : false),
        );
    }
}

final class ThreadsPollGetResponsePollLinks
{
    public function __construct(
        public readonly string $vote,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['vote'] ?? null)) ? (string) ($data['vote'] ?? null) : (is_array(($data['vote'] ?? null)) ? json_encode(($data['vote'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsPollVoteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsUnreadResponse
{
    public function __construct(
        /** @var list<RespThreadModel> */
        public readonly array $threads,
        /** @var list<ThreadsUnreadResponseData> */
        public readonly array $data,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['threads']) : [],
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): ThreadsUnreadResponseData => ThreadsUnreadResponseData::fromArray($item), $data['data']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsUnreadResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var ThreadsUnreadResponseDataFirstPost */
        public readonly ThreadsUnreadResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var ThreadsUnreadResponseDataLinks */
        public readonly ThreadsUnreadResponseDataLinks $links,
        /** @var ThreadsUnreadResponseDataPermissions */
        public readonly ThreadsUnreadResponseDataPermissions $permissions,
        /** @var ThreadsUnreadResponseDataForum */
        public readonly ThreadsUnreadResponseDataForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? ThreadsUnreadResponseDataFirstPost::fromArray($data['first_post']) : ThreadsUnreadResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? ThreadsUnreadResponseDataLinks::fromArray($data['links']) : ThreadsUnreadResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsUnreadResponseDataPermissions::fromArray($data['permissions']) : ThreadsUnreadResponseDataPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? ThreadsUnreadResponseDataForum::fromArray($data['forum']) : ThreadsUnreadResponseDataForum::fromArray([]),
        );
    }
}

final class ThreadsUnreadResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        /** @var list<ThreadsUnreadResponseDataFirstPostLikeUsers> */
        public readonly array $like_users,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var ThreadsUnreadResponseDataFirstPostLinks */
        public readonly ThreadsUnreadResponseDataFirstPostLinks $links,
        /** @var ThreadsUnreadResponseDataFirstPostPermissions */
        public readonly ThreadsUnreadResponseDataFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            isset($data['like_users']) && is_array($data['like_users']) ? array_map(static fn(array $item): ThreadsUnreadResponseDataFirstPostLikeUsers => ThreadsUnreadResponseDataFirstPostLikeUsers::fromArray($item), $data['like_users']) : [],
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsUnreadResponseDataFirstPostLinks::fromArray($data['links']) : ThreadsUnreadResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsUnreadResponseDataFirstPostPermissions::fromArray($data['permissions']) : ThreadsUnreadResponseDataFirstPostPermissions::fromArray([]),
        );
    }
}

final class ThreadsUnreadResponseDataFirstPostLikeUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly int $display_style_group_id,
        public readonly int $is_banned,
        public readonly string $uniq_username_css,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_banned'] ?? null)) ? (int) ($data['is_banned'] ?? null) : 0),
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsUnreadResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsUnreadResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class ThreadsUnreadResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_poster,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_poster'] ?? null)) ? (string) ($data['last_poster'] ?? null) : (is_array(($data['last_poster'] ?? null)) ? json_encode(($data['last_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsUnreadResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
        );
    }
}

final class ThreadsUnreadResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ThreadsUnreadResponseDataForumLinks */
        public readonly ThreadsUnreadResponseDataForumLinks $links,
        /** @var ThreadsUnreadResponseDataForumPermissions */
        public readonly ThreadsUnreadResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsUnreadResponseDataForumLinks::fromArray($data['links']) : ThreadsUnreadResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsUnreadResponseDataForumPermissions::fromArray($data['permissions']) : ThreadsUnreadResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class ThreadsUnreadResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsUnreadResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ThreadsRecentResponse
{
    public function __construct(
        /** @var list<RespThreadModel> */
        public readonly array $threads,
        /** @var list<ThreadsRecentResponseData> */
        public readonly array $data,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['threads']) && is_array($data['threads']) ? array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['threads']) : [],
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): ThreadsRecentResponseData => ThreadsRecentResponseData::fromArray($item), $data['data']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ThreadsRecentResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var ThreadsRecentResponseDataFirstPost */
        public readonly ThreadsRecentResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var ThreadsRecentResponseDataLinks */
        public readonly ThreadsRecentResponseDataLinks $links,
        /** @var ThreadsRecentResponseDataPermissions */
        public readonly ThreadsRecentResponseDataPermissions $permissions,
        /** @var ThreadsRecentResponseDataForum */
        public readonly ThreadsRecentResponseDataForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? ThreadsRecentResponseDataFirstPost::fromArray($data['first_post']) : ThreadsRecentResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? ThreadsRecentResponseDataLinks::fromArray($data['links']) : ThreadsRecentResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsRecentResponseDataPermissions::fromArray($data['permissions']) : ThreadsRecentResponseDataPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? ThreadsRecentResponseDataForum::fromArray($data['forum']) : ThreadsRecentResponseDataForum::fromArray([]),
        );
    }
}

final class ThreadsRecentResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var ThreadsRecentResponseDataFirstPostLinks */
        public readonly ThreadsRecentResponseDataFirstPostLinks $links,
        /** @var ThreadsRecentResponseDataFirstPostPermissions */
        public readonly ThreadsRecentResponseDataFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsRecentResponseDataFirstPostLinks::fromArray($data['links']) : ThreadsRecentResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsRecentResponseDataFirstPostPermissions::fromArray($data['permissions']) : ThreadsRecentResponseDataFirstPostPermissions::fromArray([]),
        );
    }
}

final class ThreadsRecentResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsRecentResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class ThreadsRecentResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_poster,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_poster'] ?? null)) ? (string) ($data['last_poster'] ?? null) : (is_array(($data['last_poster'] ?? null)) ? json_encode(($data['last_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsRecentResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
        );
    }
}

final class ThreadsRecentResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var ThreadsRecentResponseDataForumLinks */
        public readonly ThreadsRecentResponseDataForumLinks $links,
        /** @var ThreadsRecentResponseDataForumPermissions */
        public readonly ThreadsRecentResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ThreadsRecentResponseDataForumLinks::fromArray($data['links']) : ThreadsRecentResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ThreadsRecentResponseDataForumPermissions::fromArray($data['permissions']) : ThreadsRecentResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class ThreadsRecentResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ThreadsRecentResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class ThreadsFinishResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsListResponse
{
    public function __construct(
        /** @var list<RespThreadModel> */
        public readonly array $posts,
        /** @var RespThreadModel */
        public readonly RespThreadModel $thread,
        public readonly int $posts_total,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['posts']) && is_array($data['posts']) ? array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['posts']) : [],
            isset($data['thread']) && is_array($data['thread']) ? RespThreadModel::fromArray($data['thread']) : RespThreadModel::fromArray([]),
            (is_scalar(($data['posts_total'] ?? null)) ? (int) ($data['posts_total'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsCreateResponse
{
    public function __construct(
        /** @var RespPostModel */
        public readonly RespPostModel $post,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['post']) && is_array($data['post']) ? RespPostModel::fromArray($data['post']) : RespPostModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsGetResponse
{
    public function __construct(
        /** @var RespPostModel */
        public readonly RespPostModel $post,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['post']) && is_array($data['post']) ? RespPostModel::fromArray($data['post']) : RespPostModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsEditResponse
{
    public function __construct(
        /** @var RespPostModel */
        public readonly RespPostModel $post,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['post']) && is_array($data['post']) ? RespPostModel::fromArray($data['post']) : RespPostModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsLikesResponse
{
    public function __construct(
        /** @var list<PostsLikesResponseUsers> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): PostsLikesResponseUsers => PostsLikesResponseUsers::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsLikesResponseUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class PostsLikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsUnlikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsReportReasonsResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $reasons,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['reasons'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsCommentsGetResponse
{
    public function __construct(
        /** @var list<RespPostCommentModel> */
        public readonly array $comments,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comments']) && is_array($data['comments']) ? array_map(static fn(array $item): RespPostCommentModel => RespPostCommentModel::fromArray($item), $data['comments']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsCommentsCreateResponse
{
    public function __construct(
        /** @var PostsCommentsCreateResponseComment */
        public readonly PostsCommentsCreateResponseComment $comment,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comment']) && is_array($data['comment']) ? PostsCommentsCreateResponseComment::fromArray($data['comment']) : PostsCommentsCreateResponseComment::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsCommentsCreateResponseComment
{
    public function __construct(
        public readonly int $post_comment_id,
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly string $post_comment_body,
        public readonly string $post_comment_body_html,
        public readonly string $post_comment_body_plain_text,
        public readonly int $post_comment_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_comment_is_published,
        public readonly bool $post_comment_is_deleted,
        public readonly int $post_comment_update_date,
        /** @var PostsCommentsCreateResponseCommentLinks */
        public readonly PostsCommentsCreateResponseCommentLinks $links,
        /** @var PostsCommentsCreateResponseCommentPermissions */
        public readonly PostsCommentsCreateResponseCommentPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_comment_id'] ?? null)) ? (int) ($data['post_comment_id'] ?? null) : 0),
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body'] ?? null)) ? (string) ($data['post_comment_body'] ?? null) : (is_array(($data['post_comment_body'] ?? null)) ? json_encode(($data['post_comment_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body_html'] ?? null)) ? (string) ($data['post_comment_body_html'] ?? null) : (is_array(($data['post_comment_body_html'] ?? null)) ? json_encode(($data['post_comment_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body_plain_text'] ?? null)) ? (string) ($data['post_comment_body_plain_text'] ?? null) : (is_array(($data['post_comment_body_plain_text'] ?? null)) ? json_encode(($data['post_comment_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_like_count'] ?? null)) ? (int) ($data['post_comment_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_comment_is_published'] ?? null)) ? (bool) ($data['post_comment_is_published'] ?? null) : false),
            (is_scalar(($data['post_comment_is_deleted'] ?? null)) ? (bool) ($data['post_comment_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_comment_update_date'] ?? null)) ? (int) ($data['post_comment_update_date'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? PostsCommentsCreateResponseCommentLinks::fromArray($data['links']) : PostsCommentsCreateResponseCommentLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? PostsCommentsCreateResponseCommentPermissions::fromArray($data['permissions']) : PostsCommentsCreateResponseCommentPermissions::fromArray([]),
        );
    }
}

final class PostsCommentsCreateResponseCommentLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $post,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post'] ?? null)) ? (string) ($data['post'] ?? null) : (is_array(($data['post'] ?? null)) ? json_encode(($data['post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class PostsCommentsCreateResponseCommentPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class PostsCommentsEditResponse
{
    public function __construct(
        /** @var PostsCommentsEditResponseComment */
        public readonly PostsCommentsEditResponseComment $comment,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comment']) && is_array($data['comment']) ? PostsCommentsEditResponseComment::fromArray($data['comment']) : PostsCommentsEditResponseComment::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class PostsCommentsEditResponseComment
{
    public function __construct(
        public readonly int $post_comment_id,
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly string $post_comment_body,
        public readonly string $post_comment_body_html,
        public readonly string $post_comment_body_plain_text,
        public readonly int $post_comment_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_comment_is_published,
        public readonly bool $post_comment_is_deleted,
        public readonly int $post_comment_update_date,
        /** @var PostsCommentsEditResponseCommentLinks */
        public readonly PostsCommentsEditResponseCommentLinks $links,
        /** @var PostsCommentsEditResponseCommentPermissions */
        public readonly PostsCommentsEditResponseCommentPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_comment_id'] ?? null)) ? (int) ($data['post_comment_id'] ?? null) : 0),
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body'] ?? null)) ? (string) ($data['post_comment_body'] ?? null) : (is_array(($data['post_comment_body'] ?? null)) ? json_encode(($data['post_comment_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body_html'] ?? null)) ? (string) ($data['post_comment_body_html'] ?? null) : (is_array(($data['post_comment_body_html'] ?? null)) ? json_encode(($data['post_comment_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_body_plain_text'] ?? null)) ? (string) ($data['post_comment_body_plain_text'] ?? null) : (is_array(($data['post_comment_body_plain_text'] ?? null)) ? json_encode(($data['post_comment_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_comment_like_count'] ?? null)) ? (int) ($data['post_comment_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_comment_is_published'] ?? null)) ? (bool) ($data['post_comment_is_published'] ?? null) : false),
            (is_scalar(($data['post_comment_is_deleted'] ?? null)) ? (bool) ($data['post_comment_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_comment_update_date'] ?? null)) ? (int) ($data['post_comment_update_date'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? PostsCommentsEditResponseCommentLinks::fromArray($data['links']) : PostsCommentsEditResponseCommentLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? PostsCommentsEditResponseCommentPermissions::fromArray($data['permissions']) : PostsCommentsEditResponseCommentPermissions::fromArray([]),
        );
    }
}

final class PostsCommentsEditResponseCommentLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $post,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post'] ?? null)) ? (string) ($data['post'] ?? null) : (is_array(($data['post'] ?? null)) ? json_encode(($data['post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class PostsCommentsEditResponseCommentPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class PostsCommentsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsCommentsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersListResponse
{
    public function __construct(
        /** @var list<RespUserModel> */
        public readonly array $users,
        public readonly int $users_total,
        /** @var UsersListResponseLinks */
        public readonly UsersListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']) : [],
            (is_scalar(($data['users_total'] ?? null)) ? (int) ($data['users_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? UsersListResponseLinks::fromArray($data['links']) : UsersListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersListResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersFieldsResponse
{
    public function __construct(
        /** @var list<UsersFieldsResponseFields> */
        public readonly array $fields,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item): UsersFieldsResponseFields => UsersFieldsResponseFields::fromArray($item), $data['fields']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersFieldsResponseFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['id'] ?? null)) ? (string) ($data['id'] ?? null) : (is_array(($data['id'] ?? null)) ? json_encode(($data['id'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['description'] ?? null)) ? (string) ($data['description'] ?? null) : (is_array(($data['description'] ?? null)) ? json_encode(($data['description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['position'] ?? null)) ? (string) ($data['position'] ?? null) : (is_array(($data['position'] ?? null)) ? json_encode(($data['position'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['is_required'] ?? null)) ? (bool) ($data['is_required'] ?? null) : false),
        );
    }
}

final class UsersFindResponse
{
    public function __construct(
        /** @var list<RespUserModel> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersGetResponse
{
    public function __construct(
        /** @var RespUserModel */
        public readonly RespUserModel $user,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['user']) && is_array($data['user']) ? RespUserModel::fromArray($data['user']) : RespUserModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersEditResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersClaimsResponse
{
    public function __construct(
        /** @var list<UsersClaimsResponseClaims> */
        public readonly array $claims,
        /** @var UsersClaimsResponseStats */
        public readonly UsersClaimsResponseStats $stats,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['claims']) && is_array($data['claims']) ? array_map(static fn(array $item): UsersClaimsResponseClaims => UsersClaimsResponseClaims::fromArray($item), $data['claims']) : [],
            isset($data['stats']) && is_array($data['stats']) ? UsersClaimsResponseStats::fromArray($data['stats']) : UsersClaimsResponseStats::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersClaimsResponseClaims
{
    public function __construct(
        public readonly int $thread_id,
        public readonly int $claim_date,
        public readonly string $claim_state,
        public readonly string $message_body,
        public readonly string $message_body_html,
        public readonly string $message_body_plain_text,
        public readonly int $amount,
        public readonly string $amount_formatted,
        /** @var RespUserModel */
        public readonly RespUserModel $author,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['claim_date'] ?? null)) ? (int) ($data['claim_date'] ?? null) : 0),
            (is_scalar(($data['claim_state'] ?? null)) ? (string) ($data['claim_state'] ?? null) : (is_array(($data['claim_state'] ?? null)) ? json_encode(($data['claim_state'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_body'] ?? null)) ? (string) ($data['message_body'] ?? null) : (is_array(($data['message_body'] ?? null)) ? json_encode(($data['message_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_body_html'] ?? null)) ? (string) ($data['message_body_html'] ?? null) : (is_array(($data['message_body_html'] ?? null)) ? json_encode(($data['message_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_body_plain_text'] ?? null)) ? (string) ($data['message_body_plain_text'] ?? null) : (is_array(($data['message_body_plain_text'] ?? null)) ? json_encode(($data['message_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['amount'] ?? null)) ? (int) ($data['amount'] ?? null) : 0),
            (is_scalar(($data['amount_formatted'] ?? null)) ? (string) ($data['amount_formatted'] ?? null) : (is_array(($data['amount_formatted'] ?? null)) ? json_encode(($data['amount_formatted'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['author']) && is_array($data['author']) ? RespUserModel::fromArray($data['author']) : RespUserModel::fromArray([]),
        );
    }
}

final class UsersClaimsResponseStats
{
    public function __construct(
        /** @var UsersClaimsResponseStatsMarket */
        public readonly UsersClaimsResponseStatsMarket $market,
        /** @var UsersClaimsResponseStatsNoMarket */
        public readonly UsersClaimsResponseStatsNoMarket $noMarket,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['market']) && is_array($data['market']) ? UsersClaimsResponseStatsMarket::fromArray($data['market']) : UsersClaimsResponseStatsMarket::fromArray([]),
            isset($data['noMarket']) && is_array($data['noMarket']) ? UsersClaimsResponseStatsNoMarket::fromArray($data['noMarket']) : UsersClaimsResponseStatsNoMarket::fromArray([]),
        );
    }
}

final class UsersClaimsResponseStatsMarket
{
    public function __construct(
        public readonly int $total,
        public readonly int $solved,
        public readonly int $settled,
        public readonly int $rejected,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['total'] ?? null)) ? (int) ($data['total'] ?? null) : 0),
            (is_scalar(($data['solved'] ?? null)) ? (int) ($data['solved'] ?? null) : 0),
            (is_scalar(($data['settled'] ?? null)) ? (int) ($data['settled'] ?? null) : 0),
            (is_scalar(($data['rejected'] ?? null)) ? (int) ($data['rejected'] ?? null) : 0),
        );
    }
}

final class UsersClaimsResponseStatsNoMarket
{
    public function __construct(
        public readonly int $total,
        public readonly int $solved,
        public readonly int $settled,
        public readonly int $rejected,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['total'] ?? null)) ? (int) ($data['total'] ?? null) : 0),
            (is_scalar(($data['solved'] ?? null)) ? (int) ($data['solved'] ?? null) : 0),
            (is_scalar(($data['settled'] ?? null)) ? (int) ($data['settled'] ?? null) : 0),
            (is_scalar(($data['rejected'] ?? null)) ? (int) ($data['rejected'] ?? null) : 0),
        );
    }
}

final class UsersAvatarUploadResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersAvatarDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersAvatarCropResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersBackgroundUploadResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersBackgroundDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersBackgroundCropResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersFollowersResponse
{
    public function __construct(
        /** @var list<UsersFollowersResponseUsers> */
        public readonly array $users,
        public readonly int $users_total,
        /** @var UsersFollowersResponseLinks */
        public readonly UsersFollowersResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): UsersFollowersResponseUsers => UsersFollowersResponseUsers::fromArray($item), $data['users']) : [],
            (is_scalar(($data['users_total'] ?? null)) ? (int) ($data['users_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? UsersFollowersResponseLinks::fromArray($data['links']) : UsersFollowersResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersFollowersResponseUsers
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $follow_date,
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly int $user_message_count,
        public readonly int $user_register_date,
        public readonly int $user_like_count,
        public readonly int $user_like2_count,
        public readonly int $contest_count,
        public readonly int $trophy_count,
        public readonly string $custom_title,
        public readonly int $is_banned,
        public readonly string $user_title,
        public readonly bool $user_is_valid,
        public readonly bool $user_is_verified,
        public readonly bool $user_is_followed,
        public readonly int $user_last_seen_date,
        public readonly int $user_following_count,
        public readonly int $user_followers_count,
        /** @var UsersFollowersResponseUsersLinks */
        public readonly UsersFollowersResponseUsersLinks $links,
        /** @var UsersFollowersResponseUsersPermissions */
        public readonly UsersFollowersResponseUsersPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var UsersFollowersResponseUsersCustomFields */
        public readonly UsersFollowersResponseUsersCustomFields $custom_fields,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['follow_date'] ?? null)) ? (int) ($data['follow_date'] ?? null) : 0),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_message_count'] ?? null)) ? (int) ($data['user_message_count'] ?? null) : 0),
            (is_scalar(($data['user_register_date'] ?? null)) ? (int) ($data['user_register_date'] ?? null) : 0),
            (is_scalar(($data['user_like_count'] ?? null)) ? (int) ($data['user_like_count'] ?? null) : 0),
            (is_scalar(($data['user_like2_count'] ?? null)) ? (int) ($data['user_like2_count'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['trophy_count'] ?? null)) ? (int) ($data['trophy_count'] ?? null) : 0),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['is_banned'] ?? null)) ? (int) ($data['is_banned'] ?? null) : 0),
            (is_scalar(($data['user_title'] ?? null)) ? (string) ($data['user_title'] ?? null) : (is_array(($data['user_title'] ?? null)) ? json_encode(($data['user_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_valid'] ?? null)) ? (bool) ($data['user_is_valid'] ?? null) : false),
            (is_scalar(($data['user_is_verified'] ?? null)) ? (bool) ($data['user_is_verified'] ?? null) : false),
            (is_scalar(($data['user_is_followed'] ?? null)) ? (bool) ($data['user_is_followed'] ?? null) : false),
            (is_scalar(($data['user_last_seen_date'] ?? null)) ? (int) ($data['user_last_seen_date'] ?? null) : 0),
            (is_scalar(($data['user_following_count'] ?? null)) ? (int) ($data['user_following_count'] ?? null) : 0),
            (is_scalar(($data['user_followers_count'] ?? null)) ? (int) ($data['user_followers_count'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? UsersFollowersResponseUsersLinks::fromArray($data['links']) : UsersFollowersResponseUsersLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? UsersFollowersResponseUsersPermissions::fromArray($data['permissions']) : UsersFollowersResponseUsersPermissions::fromArray([]),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['user_is_visitor'] ?? null)) ? (bool) ($data['user_is_visitor'] ?? null) : false),
            (is_scalar(($data['user_group_id'] ?? null)) ? (int) ($data['user_group_id'] ?? null) : 0),
            isset($data['custom_fields']) && is_array($data['custom_fields']) ? UsersFollowersResponseUsersCustomFields::fromArray($data['custom_fields']) : UsersFollowersResponseUsersCustomFields::fromArray([]),
        );
    }
}

final class UsersFollowersResponseUsersLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $avatar,
        public readonly string $avatar_big,
        public readonly string $avatar_small,
        public readonly string $followers,
        public readonly string $followings,
        public readonly string $ignore,
        public readonly string $timeline,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar_big'] ?? null)) ? (string) ($data['avatar_big'] ?? null) : (is_array(($data['avatar_big'] ?? null)) ? json_encode(($data['avatar_big'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar_small'] ?? null)) ? (string) ($data['avatar_small'] ?? null) : (is_array(($data['avatar_small'] ?? null)) ? json_encode(($data['avatar_small'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followings'] ?? null)) ? (string) ($data['followings'] ?? null) : (is_array(($data['followings'] ?? null)) ? json_encode(($data['followings'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['ignore'] ?? null)) ? (string) ($data['ignore'] ?? null) : (is_array(($data['ignore'] ?? null)) ? json_encode(($data['ignore'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersFollowersResponseUsersPermissions
{
    public function __construct(
        public readonly bool $edit,
        public readonly bool $follow,
        public readonly bool $ignore,
        public readonly bool $profile_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['ignore'] ?? null)) ? (bool) ($data['ignore'] ?? null) : false),
            (is_scalar(($data['profile_post'] ?? null)) ? (bool) ($data['profile_post'] ?? null) : false),
        );
    }
}

final class UsersFollowersResponseUsersCustomFields
{
    public function __construct(
        public readonly string $_4,
        public readonly string $lztInnovation20Link,
        public readonly string $lztInnovation30Link,
        public readonly string $lztInnovationLink,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['_4'] ?? null)) ? (string) ($data['_4'] ?? null) : (is_array(($data['_4'] ?? null)) ? json_encode(($data['_4'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztInnovation20Link'] ?? null)) ? (string) ($data['lztInnovation20Link'] ?? null) : (is_array(($data['lztInnovation20Link'] ?? null)) ? json_encode(($data['lztInnovation20Link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztInnovation30Link'] ?? null)) ? (string) ($data['lztInnovation30Link'] ?? null) : (is_array(($data['lztInnovation30Link'] ?? null)) ? json_encode(($data['lztInnovation30Link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztInnovationLink'] ?? null)) ? (string) ($data['lztInnovationLink'] ?? null) : (is_array(($data['lztInnovationLink'] ?? null)) ? json_encode(($data['lztInnovationLink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersFollowersResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersFollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersUnfollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersFollowingsResponse
{
    public function __construct(
        /** @var list<UsersFollowingsResponseUsers> */
        public readonly array $users,
        public readonly int $users_total,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): UsersFollowingsResponseUsers => UsersFollowingsResponseUsers::fromArray($item), $data['users']) : [],
            (is_scalar(($data['users_total'] ?? null)) ? (int) ($data['users_total'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersFollowingsResponseUsers
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $follow_date,
        public readonly int $user_id,
        public readonly string $username,
        public readonly string $username_html,
        public readonly int $user_message_count,
        public readonly int $user_register_date,
        public readonly int $user_like_count,
        public readonly int $user_like2_count,
        public readonly int $contest_count,
        public readonly int $trophy_count,
        public readonly string $short_link,
        public readonly string $custom_title,
        public readonly int $is_banned,
        public readonly string $user_title,
        public readonly bool $user_is_valid,
        public readonly bool $user_is_verified,
        public readonly bool $user_is_followed,
        public readonly int $user_last_seen_date,
        public readonly int $user_following_count,
        public readonly int $user_followers_count,
        /** @var UsersFollowingsResponseUsersLinks */
        public readonly UsersFollowingsResponseUsersLinks $links,
        /** @var UsersFollowingsResponseUsersPermissions */
        public readonly UsersFollowingsResponseUsersPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var UsersFollowingsResponseUsersCustomFields */
        public readonly UsersFollowingsResponseUsersCustomFields $custom_fields,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['follow_date'] ?? null)) ? (int) ($data['follow_date'] ?? null) : 0),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_html'] ?? null)) ? (string) ($data['username_html'] ?? null) : (is_array(($data['username_html'] ?? null)) ? json_encode(($data['username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_message_count'] ?? null)) ? (int) ($data['user_message_count'] ?? null) : 0),
            (is_scalar(($data['user_register_date'] ?? null)) ? (int) ($data['user_register_date'] ?? null) : 0),
            (is_scalar(($data['user_like_count'] ?? null)) ? (int) ($data['user_like_count'] ?? null) : 0),
            (is_scalar(($data['user_like2_count'] ?? null)) ? (int) ($data['user_like2_count'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['trophy_count'] ?? null)) ? (int) ($data['trophy_count'] ?? null) : 0),
            (is_scalar(($data['short_link'] ?? null)) ? (string) ($data['short_link'] ?? null) : (is_array(($data['short_link'] ?? null)) ? json_encode(($data['short_link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['is_banned'] ?? null)) ? (int) ($data['is_banned'] ?? null) : 0),
            (is_scalar(($data['user_title'] ?? null)) ? (string) ($data['user_title'] ?? null) : (is_array(($data['user_title'] ?? null)) ? json_encode(($data['user_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_valid'] ?? null)) ? (bool) ($data['user_is_valid'] ?? null) : false),
            (is_scalar(($data['user_is_verified'] ?? null)) ? (bool) ($data['user_is_verified'] ?? null) : false),
            (is_scalar(($data['user_is_followed'] ?? null)) ? (bool) ($data['user_is_followed'] ?? null) : false),
            (is_scalar(($data['user_last_seen_date'] ?? null)) ? (int) ($data['user_last_seen_date'] ?? null) : 0),
            (is_scalar(($data['user_following_count'] ?? null)) ? (int) ($data['user_following_count'] ?? null) : 0),
            (is_scalar(($data['user_followers_count'] ?? null)) ? (int) ($data['user_followers_count'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? UsersFollowingsResponseUsersLinks::fromArray($data['links']) : UsersFollowingsResponseUsersLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? UsersFollowingsResponseUsersPermissions::fromArray($data['permissions']) : UsersFollowingsResponseUsersPermissions::fromArray([]),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['user_is_visitor'] ?? null)) ? (bool) ($data['user_is_visitor'] ?? null) : false),
            (is_scalar(($data['user_group_id'] ?? null)) ? (int) ($data['user_group_id'] ?? null) : 0),
            isset($data['custom_fields']) && is_array($data['custom_fields']) ? UsersFollowingsResponseUsersCustomFields::fromArray($data['custom_fields']) : UsersFollowingsResponseUsersCustomFields::fromArray([]),
        );
    }
}

final class UsersFollowingsResponseUsersLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $avatar,
        public readonly string $avatar_big,
        public readonly string $avatar_small,
        public readonly string $followers,
        public readonly string $followings,
        public readonly string $ignore,
        public readonly string $timeline,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar'] ?? null)) ? (string) ($data['avatar'] ?? null) : (is_array(($data['avatar'] ?? null)) ? json_encode(($data['avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar_big'] ?? null)) ? (string) ($data['avatar_big'] ?? null) : (is_array(($data['avatar_big'] ?? null)) ? json_encode(($data['avatar_big'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['avatar_small'] ?? null)) ? (string) ($data['avatar_small'] ?? null) : (is_array(($data['avatar_small'] ?? null)) ? json_encode(($data['avatar_small'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followings'] ?? null)) ? (string) ($data['followings'] ?? null) : (is_array(($data['followings'] ?? null)) ? json_encode(($data['followings'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['ignore'] ?? null)) ? (string) ($data['ignore'] ?? null) : (is_array(($data['ignore'] ?? null)) ? json_encode(($data['ignore'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersFollowingsResponseUsersPermissions
{
    public function __construct(
        public readonly bool $edit,
        public readonly bool $follow,
        public readonly bool $ignore,
        public readonly bool $profile_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['ignore'] ?? null)) ? (bool) ($data['ignore'] ?? null) : false),
            (is_scalar(($data['profile_post'] ?? null)) ? (bool) ($data['profile_post'] ?? null) : false),
        );
    }
}

final class UsersFollowingsResponseUsersCustomFields
{
    public function __construct(
        public readonly string $_4,
        public readonly array $allowSelfUnban,
        public readonly string $discord,
        public readonly string $github,
        public readonly string $jabber,
        public readonly string $lztAwardUserTrophy,
        public readonly string $lztCuratorNodeTitle,
        public readonly string $lztCuratorNodeTitleEn,
        public readonly string $lztDeposit,
        public readonly string $lztInnovation20Link,
        public readonly string $lztInnovation30Link,
        public readonly string $lztInnovationLink,
        public readonly string $lztLikesIncreasing,
        public readonly string $lztLikesZeroing,
        public readonly string $lztSympathyIncreasing,
        public readonly string $lztSympathyZeroing,
        public readonly string $maecenasValue,
        public readonly string $scamURL,
        public readonly string $steam,
        public readonly string $telegram,
        public readonly string $vk,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['_4'] ?? null)) ? (string) ($data['_4'] ?? null) : (is_array(($data['_4'] ?? null)) ? json_encode(($data['_4'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            $data['allowSelfUnban'] ?? [],
            (is_scalar(($data['discord'] ?? null)) ? (string) ($data['discord'] ?? null) : (is_array(($data['discord'] ?? null)) ? json_encode(($data['discord'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['github'] ?? null)) ? (string) ($data['github'] ?? null) : (is_array(($data['github'] ?? null)) ? json_encode(($data['github'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['jabber'] ?? null)) ? (string) ($data['jabber'] ?? null) : (is_array(($data['jabber'] ?? null)) ? json_encode(($data['jabber'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztAwardUserTrophy'] ?? null)) ? (string) ($data['lztAwardUserTrophy'] ?? null) : (is_array(($data['lztAwardUserTrophy'] ?? null)) ? json_encode(($data['lztAwardUserTrophy'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztCuratorNodeTitle'] ?? null)) ? (string) ($data['lztCuratorNodeTitle'] ?? null) : (is_array(($data['lztCuratorNodeTitle'] ?? null)) ? json_encode(($data['lztCuratorNodeTitle'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztCuratorNodeTitleEn'] ?? null)) ? (string) ($data['lztCuratorNodeTitleEn'] ?? null) : (is_array(($data['lztCuratorNodeTitleEn'] ?? null)) ? json_encode(($data['lztCuratorNodeTitleEn'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztDeposit'] ?? null)) ? (string) ($data['lztDeposit'] ?? null) : (is_array(($data['lztDeposit'] ?? null)) ? json_encode(($data['lztDeposit'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztInnovation20Link'] ?? null)) ? (string) ($data['lztInnovation20Link'] ?? null) : (is_array(($data['lztInnovation20Link'] ?? null)) ? json_encode(($data['lztInnovation20Link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztInnovation30Link'] ?? null)) ? (string) ($data['lztInnovation30Link'] ?? null) : (is_array(($data['lztInnovation30Link'] ?? null)) ? json_encode(($data['lztInnovation30Link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztInnovationLink'] ?? null)) ? (string) ($data['lztInnovationLink'] ?? null) : (is_array(($data['lztInnovationLink'] ?? null)) ? json_encode(($data['lztInnovationLink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztLikesIncreasing'] ?? null)) ? (string) ($data['lztLikesIncreasing'] ?? null) : (is_array(($data['lztLikesIncreasing'] ?? null)) ? json_encode(($data['lztLikesIncreasing'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztLikesZeroing'] ?? null)) ? (string) ($data['lztLikesZeroing'] ?? null) : (is_array(($data['lztLikesZeroing'] ?? null)) ? json_encode(($data['lztLikesZeroing'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztSympathyIncreasing'] ?? null)) ? (string) ($data['lztSympathyIncreasing'] ?? null) : (is_array(($data['lztSympathyIncreasing'] ?? null)) ? json_encode(($data['lztSympathyIncreasing'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['lztSympathyZeroing'] ?? null)) ? (string) ($data['lztSympathyZeroing'] ?? null) : (is_array(($data['lztSympathyZeroing'] ?? null)) ? json_encode(($data['lztSympathyZeroing'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['maecenasValue'] ?? null)) ? (string) ($data['maecenasValue'] ?? null) : (is_array(($data['maecenasValue'] ?? null)) ? json_encode(($data['maecenasValue'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['scamURL'] ?? null)) ? (string) ($data['scamURL'] ?? null) : (is_array(($data['scamURL'] ?? null)) ? json_encode(($data['scamURL'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['steam'] ?? null)) ? (string) ($data['steam'] ?? null) : (is_array(($data['steam'] ?? null)) ? json_encode(($data['steam'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['telegram'] ?? null)) ? (string) ($data['telegram'] ?? null) : (is_array(($data['telegram'] ?? null)) ? json_encode(($data['telegram'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['vk'] ?? null)) ? (string) ($data['vk'] ?? null) : (is_array(($data['vk'] ?? null)) ? json_encode(($data['vk'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersLikesResponse
{
    public function __construct(
        public readonly int $page,
        public readonly int $perPage,
        public readonly string $contentType,
        public readonly int $totalLikes,
        public readonly array $likes,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['perPage'] ?? null)) ? (int) ($data['perPage'] ?? null) : 0),
            (is_scalar(($data['contentType'] ?? null)) ? (string) ($data['contentType'] ?? null) : (is_array(($data['contentType'] ?? null)) ? json_encode(($data['contentType'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['totalLikes'] ?? null)) ? (int) ($data['totalLikes'] ?? null) : 0),
            $data['likes'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersIgnoredResponse
{
    public function __construct(
        /** @var list<UsersIgnoredResponseUsers> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): UsersIgnoredResponseUsers => UsersIgnoredResponseUsers::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersIgnoredResponseUsers
{
    public function __construct(
        public readonly bool $can_edit,
        public readonly bool $can_follow,
        public readonly bool $can_ignore,
        public readonly bool $can_post_profile,
        public readonly bool $can_view_profile,
        public readonly bool $can_view_profile_posts,
        public readonly bool $can_warn,
        public readonly int $contest_count,
        public readonly string $conv_welcome_message,
        public readonly int $convertedDeposit,
        /** @var UsersIgnoredResponseUsersCustomFields */
        public readonly UsersIgnoredResponseUsersCustomFields $custom_fields,
        public readonly int $deposit,
        public readonly string $homepage,
        /** @var UsersIgnoredResponseUsersIgnoredInfo */
        public readonly UsersIgnoredResponseUsersIgnoredInfo $ignored_info,
        public readonly bool $is_admin,
        public readonly bool $is_banned,
        public readonly bool $is_followed,
        public readonly bool $is_ignored,
        public readonly bool $is_moderator,
        public readonly bool $is_staff,
        public readonly int $last_activity,
        public readonly int $like2_count,
        public readonly int $like_count,
        public readonly string $location,
        public readonly int $message_count,
        public readonly int $register_date,
        /** @var UsersIgnoredResponseUsersRendered */
        public readonly UsersIgnoredResponseUsersRendered $rendered,
        public readonly string $short_link,
        public readonly int $trophy_points,
        public readonly int $user_id,
        public readonly string $user_title,
        public readonly string $username,
        public readonly string $view_url,
        public readonly int $warning_points,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can_edit'] ?? null)) ? (bool) ($data['can_edit'] ?? null) : false),
            (is_scalar(($data['can_follow'] ?? null)) ? (bool) ($data['can_follow'] ?? null) : false),
            (is_scalar(($data['can_ignore'] ?? null)) ? (bool) ($data['can_ignore'] ?? null) : false),
            (is_scalar(($data['can_post_profile'] ?? null)) ? (bool) ($data['can_post_profile'] ?? null) : false),
            (is_scalar(($data['can_view_profile'] ?? null)) ? (bool) ($data['can_view_profile'] ?? null) : false),
            (is_scalar(($data['can_view_profile_posts'] ?? null)) ? (bool) ($data['can_view_profile_posts'] ?? null) : false),
            (is_scalar(($data['can_warn'] ?? null)) ? (bool) ($data['can_warn'] ?? null) : false),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['conv_welcome_message'] ?? null)) ? (string) ($data['conv_welcome_message'] ?? null) : (is_array(($data['conv_welcome_message'] ?? null)) ? json_encode(($data['conv_welcome_message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['convertedDeposit'] ?? null)) ? (int) ($data['convertedDeposit'] ?? null) : 0),
            isset($data['custom_fields']) && is_array($data['custom_fields']) ? UsersIgnoredResponseUsersCustomFields::fromArray($data['custom_fields']) : UsersIgnoredResponseUsersCustomFields::fromArray([]),
            (is_scalar(($data['deposit'] ?? null)) ? (int) ($data['deposit'] ?? null) : 0),
            (is_scalar(($data['homepage'] ?? null)) ? (string) ($data['homepage'] ?? null) : (is_array(($data['homepage'] ?? null)) ? json_encode(($data['homepage'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['ignored_info']) && is_array($data['ignored_info']) ? UsersIgnoredResponseUsersIgnoredInfo::fromArray($data['ignored_info']) : UsersIgnoredResponseUsersIgnoredInfo::fromArray([]),
            (is_scalar(($data['is_admin'] ?? null)) ? (bool) ($data['is_admin'] ?? null) : false),
            (is_scalar(($data['is_banned'] ?? null)) ? (bool) ($data['is_banned'] ?? null) : false),
            (is_scalar(($data['is_followed'] ?? null)) ? (bool) ($data['is_followed'] ?? null) : false),
            (is_scalar(($data['is_ignored'] ?? null)) ? (bool) ($data['is_ignored'] ?? null) : false),
            (is_scalar(($data['is_moderator'] ?? null)) ? (bool) ($data['is_moderator'] ?? null) : false),
            (is_scalar(($data['is_staff'] ?? null)) ? (bool) ($data['is_staff'] ?? null) : false),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['like2_count'] ?? null)) ? (int) ($data['like2_count'] ?? null) : 0),
            (is_scalar(($data['like_count'] ?? null)) ? (int) ($data['like_count'] ?? null) : 0),
            (is_scalar(($data['location'] ?? null)) ? (string) ($data['location'] ?? null) : (is_array(($data['location'] ?? null)) ? json_encode(($data['location'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message_count'] ?? null)) ? (int) ($data['message_count'] ?? null) : 0),
            (is_scalar(($data['register_date'] ?? null)) ? (int) ($data['register_date'] ?? null) : 0),
            isset($data['rendered']) && is_array($data['rendered']) ? UsersIgnoredResponseUsersRendered::fromArray($data['rendered']) : UsersIgnoredResponseUsersRendered::fromArray([]),
            (is_scalar(($data['short_link'] ?? null)) ? (string) ($data['short_link'] ?? null) : (is_array(($data['short_link'] ?? null)) ? json_encode(($data['short_link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['trophy_points'] ?? null)) ? (int) ($data['trophy_points'] ?? null) : 0),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['user_title'] ?? null)) ? (string) ($data['user_title'] ?? null) : (is_array(($data['user_title'] ?? null)) ? json_encode(($data['user_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['view_url'] ?? null)) ? (string) ($data['view_url'] ?? null) : (is_array(($data['view_url'] ?? null)) ? json_encode(($data['view_url'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['warning_points'] ?? null)) ? (int) ($data['warning_points'] ?? null) : 0),
        );
    }
}

final class UsersIgnoredResponseUsersCustomFields
{
    public function __construct(
        public readonly string $_4,
        public readonly mixed $scamURL,
        public readonly mixed $lztLikesZeroing,
        public readonly mixed $lztLikesIncreasing,
        public readonly mixed $lztSympathyZeroing,
        public readonly mixed $lztSympathyIncreasing,
        public readonly mixed $telegram,
        public readonly string $vk,
        public readonly string $discord,
        public readonly string $steam,
        public readonly mixed $matrix,
        public readonly string $jabber,
        public readonly string $github,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['_4'] ?? null)) ? (string) ($data['_4'] ?? null) : (is_array(($data['_4'] ?? null)) ? json_encode(($data['_4'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            $data['scamURL'] ?? null,
            $data['lztLikesZeroing'] ?? null,
            $data['lztLikesIncreasing'] ?? null,
            $data['lztSympathyZeroing'] ?? null,
            $data['lztSympathyIncreasing'] ?? null,
            $data['telegram'] ?? null,
            (is_scalar(($data['vk'] ?? null)) ? (string) ($data['vk'] ?? null) : (is_array(($data['vk'] ?? null)) ? json_encode(($data['vk'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['discord'] ?? null)) ? (string) ($data['discord'] ?? null) : (is_array(($data['discord'] ?? null)) ? json_encode(($data['discord'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['steam'] ?? null)) ? (string) ($data['steam'] ?? null) : (is_array(($data['steam'] ?? null)) ? json_encode(($data['steam'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            $data['matrix'] ?? null,
            (is_scalar(($data['jabber'] ?? null)) ? (string) ($data['jabber'] ?? null) : (is_array(($data['jabber'] ?? null)) ? json_encode(($data['jabber'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['github'] ?? null)) ? (string) ($data['github'] ?? null) : (is_array(($data['github'] ?? null)) ? json_encode(($data['github'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersIgnoredResponseUsersIgnoredInfo
{
    public function __construct(
        public readonly int $ignore_content,
        public readonly int $ignore_conversations,
        public readonly int $restrict_view_profile,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['ignore_content'] ?? null)) ? (int) ($data['ignore_content'] ?? null) : 0),
            (is_scalar(($data['ignore_conversations'] ?? null)) ? (int) ($data['ignore_conversations'] ?? null) : 0),
            (is_scalar(($data['restrict_view_profile'] ?? null)) ? (int) ($data['restrict_view_profile'] ?? null) : 0),
        );
    }
}

final class UsersIgnoredResponseUsersRendered
{
    public function __construct(
        public readonly string $username,
        /** @var UsersIgnoredResponseUsersRenderedAvatars */
        public readonly UsersIgnoredResponseUsersRenderedAvatars $avatars,
        public readonly array $backgrounds,
        public readonly string $link,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['avatars']) && is_array($data['avatars']) ? UsersIgnoredResponseUsersRenderedAvatars::fromArray($data['avatars']) : UsersIgnoredResponseUsersRenderedAvatars::fromArray([]),
            $data['backgrounds'] ?? [],
            (is_scalar(($data['link'] ?? null)) ? (string) ($data['link'] ?? null) : (is_array(($data['link'] ?? null)) ? json_encode(($data['link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersIgnoredResponseUsersRenderedAvatars
{
    public function __construct(
        public readonly string $l,
        public readonly string $m,
        public readonly string $s,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['l'] ?? null)) ? (string) ($data['l'] ?? null) : (is_array(($data['l'] ?? null)) ? json_encode(($data['l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['m'] ?? null)) ? (string) ($data['m'] ?? null) : (is_array(($data['m'] ?? null)) ? json_encode(($data['m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['s'] ?? null)) ? (string) ($data['s'] ?? null) : (is_array(($data['s'] ?? null)) ? json_encode(($data['s'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersIgnoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersIgnoreEditResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersUnignoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersContentsResponse
{
    public function __construct(
        /** @var list<UsersContentsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var RespUserModel */
        public readonly RespUserModel $user,
        /** @var UsersContentsResponseLinks */
        public readonly UsersContentsResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): UsersContentsResponseData => UsersContentsResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            isset($data['user']) && is_array($data['user']) ? RespUserModel::fromArray($data['user']) : RespUserModel::fromArray([]),
            isset($data['links']) && is_array($data['links']) ? UsersContentsResponseLinks::fromArray($data['links']) : UsersContentsResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersContentsResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        /** @var list<UsersContentsResponseDataLikeUsers> */
        public readonly array $like_users,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var UsersContentsResponseDataLinks */
        public readonly UsersContentsResponseDataLinks $links,
        /** @var UsersContentsResponseDataPermissions */
        public readonly UsersContentsResponseDataPermissions $permissions,
        /** @var UsersContentsResponseDataThread */
        public readonly UsersContentsResponseDataThread $thread,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            isset($data['like_users']) && is_array($data['like_users']) ? array_map(static fn(array $item): UsersContentsResponseDataLikeUsers => UsersContentsResponseDataLikeUsers::fromArray($item), $data['like_users']) : [],
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? UsersContentsResponseDataLinks::fromArray($data['links']) : UsersContentsResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? UsersContentsResponseDataPermissions::fromArray($data['permissions']) : UsersContentsResponseDataPermissions::fromArray([]),
            isset($data['thread']) && is_array($data['thread']) ? UsersContentsResponseDataThread::fromArray($data['thread']) : UsersContentsResponseDataThread::fromArray([]),
        );
    }
}

final class UsersContentsResponseDataLikeUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
        public readonly int $display_style_group_id,
        public readonly int $is_banned,
        public readonly string $uniq_username_css,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_banned'] ?? null)) ? (int) ($data['is_banned'] ?? null) : 0),
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersContentsResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersContentsResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class UsersContentsResponseDataThread
{
    public function __construct(
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var UsersContentsResponseDataThreadLinks */
        public readonly UsersContentsResponseDataThreadLinks $links,
        /** @var UsersContentsResponseDataThreadPermissions */
        public readonly UsersContentsResponseDataThreadPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? UsersContentsResponseDataThreadLinks::fromArray($data['links']) : UsersContentsResponseDataThreadLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? UsersContentsResponseDataThreadPermissions::fromArray($data['permissions']) : UsersContentsResponseDataThreadPermissions::fromArray([]),
        );
    }
}

final class UsersContentsResponseDataThreadLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_poster,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_poster'] ?? null)) ? (string) ($data['last_poster'] ?? null) : (is_array(($data['last_poster'] ?? null)) ? json_encode(($data['last_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersContentsResponseDataThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class UsersContentsResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersTrophiesResponse
{
    public function __construct(
        /** @var list<UsersTrophiesResponseTrophies> */
        public readonly array $trophies,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['trophies']) && is_array($data['trophies']) ? array_map(static fn(array $item): UsersTrophiesResponseTrophies => UsersTrophiesResponseTrophies::fromArray($item), $data['trophies']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersTrophiesResponseTrophies
{
    public function __construct(
        public readonly int $trophy_id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $trophy_url,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['trophy_id'] ?? null)) ? (int) ($data['trophy_id'] ?? null) : 0),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['description'] ?? null)) ? (string) ($data['description'] ?? null) : (is_array(($data['description'] ?? null)) ? json_encode(($data['description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['trophy_url'] ?? null)) ? (string) ($data['trophy_url'] ?? null) : (is_array(($data['trophy_url'] ?? null)) ? json_encode(($data['trophy_url'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersSecretAnswerTypesResponse
{
    public function __construct(
        /** @var list<UsersSecretAnswerTypesResponseData> */
        public readonly array $data,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): UsersSecretAnswerTypesResponseData => UsersSecretAnswerTypesResponseData::fromArray($item), $data['data']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersSecretAnswerTypesResponseData
{
    public function __construct(
        public readonly int $sa_id,
        public readonly string $renderedPhrase,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['sa_id'] ?? null)) ? (int) ($data['sa_id'] ?? null) : 0),
            (is_scalar(($data['renderedPhrase'] ?? null)) ? (string) ($data['renderedPhrase'] ?? null) : (is_array(($data['renderedPhrase'] ?? null)) ? json_encode(($data['renderedPhrase'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class UsersSAResetResponse
{
    public function __construct(
        public readonly bool $success,
        public readonly string $waiting_time,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['success'] ?? null)) ? (bool) ($data['success'] ?? null) : false),
            (is_scalar(($data['waiting_time'] ?? null)) ? (string) ($data['waiting_time'] ?? null) : (is_array(($data['waiting_time'] ?? null)) ? json_encode(($data['waiting_time'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class UsersSACancelResetResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsListResponse
{
    public function __construct(
        /** @var list<RespProfilePostModel> */
        public readonly array $profile_posts,
        public readonly int $totalProfilePosts,
        public readonly bool $canPostOnProfile,
        /** @var ProfilePostsListResponseLinks */
        public readonly ProfilePostsListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['profile_posts']) && is_array($data['profile_posts']) ? array_map(static fn(array $item): RespProfilePostModel => RespProfilePostModel::fromArray($item), $data['profile_posts']) : [],
            (is_scalar(($data['totalProfilePosts'] ?? null)) ? (int) ($data['totalProfilePosts'] ?? null) : 0),
            (is_scalar(($data['canPostOnProfile'] ?? null)) ? (bool) ($data['canPostOnProfile'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ProfilePostsListResponseLinks::fromArray($data['links']) : ProfilePostsListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsListResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsGetResponse
{
    public function __construct(
        /** @var RespProfilePostModel */
        public readonly RespProfilePostModel $profile_post,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['profile_post']) && is_array($data['profile_post']) ? RespProfilePostModel::fromArray($data['profile_post']) : RespProfilePostModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsEditResponse
{
    public function __construct(
        /** @var ProfilePostsEditResponseProfilePost */
        public readonly ProfilePostsEditResponseProfilePost $profile_post,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['profile_post']) && is_array($data['profile_post']) ? ProfilePostsEditResponseProfilePost::fromArray($data['profile_post']) : ProfilePostsEditResponseProfilePost::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsEditResponseProfilePost
{
    public function __construct(
        public readonly int $profile_post_id,
        public readonly int $timeline_user_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly int $post_like_count,
        public readonly int $post_comment_count,
        public readonly string $timeline_username,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        /** @var ProfilePostsEditResponseProfilePostLinks */
        public readonly ProfilePostsEditResponseProfilePostLinks $links,
        /** @var ProfilePostsEditResponseProfilePostPermissions */
        public readonly ProfilePostsEditResponseProfilePostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_comment_count'] ?? null)) ? (int) ($data['post_comment_count'] ?? null) : 0),
            (is_scalar(($data['timeline_username'] ?? null)) ? (string) ($data['timeline_username'] ?? null) : (is_array(($data['timeline_username'] ?? null)) ? json_encode(($data['timeline_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ProfilePostsEditResponseProfilePostLinks::fromArray($data['links']) : ProfilePostsEditResponseProfilePostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ProfilePostsEditResponseProfilePostPermissions::fromArray($data['permissions']) : ProfilePostsEditResponseProfilePostPermissions::fromArray([]),
        );
    }
}

final class ProfilePostsEditResponseProfilePostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $comments,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comments'] ?? null)) ? (string) ($data['comments'] ?? null) : (is_array(($data['comments'] ?? null)) ? json_encode(($data['comments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsEditResponseProfilePostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $like,
        public readonly bool $comment,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['comment'] ?? null)) ? (bool) ($data['comment'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class ProfilePostsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsReportReasonsResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $reasons,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['reasons'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsCreateResponse
{
    public function __construct(
        /** @var ProfilePostsCreateResponseProfilePost */
        public readonly ProfilePostsCreateResponseProfilePost $profile_post,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['profile_post']) && is_array($data['profile_post']) ? ProfilePostsCreateResponseProfilePost::fromArray($data['profile_post']) : ProfilePostsCreateResponseProfilePost::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsCreateResponseProfilePost
{
    public function __construct(
        public readonly int $profile_post_id,
        public readonly int $timeline_user_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly int $post_like_count,
        public readonly int $post_comment_count,
        public readonly string $timeline_username,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        /** @var ProfilePostsCreateResponseProfilePostLinks */
        public readonly ProfilePostsCreateResponseProfilePostLinks $links,
        /** @var ProfilePostsCreateResponseProfilePostPermissions */
        public readonly ProfilePostsCreateResponseProfilePostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_comment_count'] ?? null)) ? (int) ($data['post_comment_count'] ?? null) : 0),
            (is_scalar(($data['timeline_username'] ?? null)) ? (string) ($data['timeline_username'] ?? null) : (is_array(($data['timeline_username'] ?? null)) ? json_encode(($data['timeline_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ProfilePostsCreateResponseProfilePostLinks::fromArray($data['links']) : ProfilePostsCreateResponseProfilePostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ProfilePostsCreateResponseProfilePostPermissions::fromArray($data['permissions']) : ProfilePostsCreateResponseProfilePostPermissions::fromArray([]),
        );
    }
}

final class ProfilePostsCreateResponseProfilePostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $comments,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comments'] ?? null)) ? (string) ($data['comments'] ?? null) : (is_array(($data['comments'] ?? null)) ? json_encode(($data['comments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsCreateResponseProfilePostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $like,
        public readonly bool $comment,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['comment'] ?? null)) ? (bool) ($data['comment'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class ProfilePostsStickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsUnstickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsLikesResponse
{
    public function __construct(
        /** @var list<ProfilePostsLikesResponseUsers> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): ProfilePostsLikesResponseUsers => ProfilePostsLikesResponseUsers::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsLikesResponseUsers
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsLikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsUnlikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsCommentsListResponse
{
    public function __construct(
        /** @var list<RespProfilePostCommentModel> */
        public readonly array $comments,
        public readonly int $comments_total,
        /** @var ProfilePostsCommentsListResponseProfilePost */
        public readonly ProfilePostsCommentsListResponseProfilePost $profile_post,
        /** @var RespUserModel */
        public readonly RespUserModel $timeline_user,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comments']) && is_array($data['comments']) ? array_map(static fn(array $item): RespProfilePostCommentModel => RespProfilePostCommentModel::fromArray($item), $data['comments']) : [],
            (is_scalar(($data['comments_total'] ?? null)) ? (int) ($data['comments_total'] ?? null) : 0),
            isset($data['profile_post']) && is_array($data['profile_post']) ? ProfilePostsCommentsListResponseProfilePost::fromArray($data['profile_post']) : ProfilePostsCommentsListResponseProfilePost::fromArray([]),
            isset($data['timeline_user']) && is_array($data['timeline_user']) ? RespUserModel::fromArray($data['timeline_user']) : RespUserModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsListResponseProfilePost
{
    public function __construct(
        public readonly int $profile_post_id,
        public readonly int $timeline_user_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly int $post_like_count,
        public readonly int $post_comment_count,
        public readonly string $timeline_username,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        /** @var ProfilePostsCommentsListResponseProfilePostLinks */
        public readonly ProfilePostsCommentsListResponseProfilePostLinks $links,
        /** @var ProfilePostsCommentsListResponseProfilePostPermissions */
        public readonly ProfilePostsCommentsListResponseProfilePostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_comment_count'] ?? null)) ? (int) ($data['post_comment_count'] ?? null) : 0),
            (is_scalar(($data['timeline_username'] ?? null)) ? (string) ($data['timeline_username'] ?? null) : (is_array(($data['timeline_username'] ?? null)) ? json_encode(($data['timeline_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? ProfilePostsCommentsListResponseProfilePostLinks::fromArray($data['links']) : ProfilePostsCommentsListResponseProfilePostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ProfilePostsCommentsListResponseProfilePostPermissions::fromArray($data['permissions']) : ProfilePostsCommentsListResponseProfilePostPermissions::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsListResponseProfilePostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $comments,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comments'] ?? null)) ? (string) ($data['comments'] ?? null) : (is_array(($data['comments'] ?? null)) ? json_encode(($data['comments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsCommentsListResponseProfilePostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $like,
        public readonly bool $comment,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['comment'] ?? null)) ? (bool) ($data['comment'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class ProfilePostsCommentsCreateResponse
{
    public function __construct(
        /** @var ProfilePostsCommentsCreateResponseComment */
        public readonly ProfilePostsCommentsCreateResponseComment $comment,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comment']) && is_array($data['comment']) ? ProfilePostsCommentsCreateResponseComment::fromArray($data['comment']) : ProfilePostsCommentsCreateResponseComment::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsCreateResponseComment
{
    public function __construct(
        public readonly int $comment_id,
        public readonly int $profile_post_id,
        public readonly int $comment_user_id,
        public readonly string $comment_username,
        public readonly string $comment_username_html,
        public readonly int $comment_create_date,
        public readonly string $comment_body,
        public readonly bool $user_is_ignored,
        public readonly int $timeline_user_id,
        /** @var ProfilePostsCommentsCreateResponseCommentLinks */
        public readonly ProfilePostsCommentsCreateResponseCommentLinks $links,
        /** @var ProfilePostsCommentsCreateResponseCommentPermissions */
        public readonly ProfilePostsCommentsCreateResponseCommentPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['comment_id'] ?? null)) ? (int) ($data['comment_id'] ?? null) : 0),
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['comment_user_id'] ?? null)) ? (int) ($data['comment_user_id'] ?? null) : 0),
            (is_scalar(($data['comment_username'] ?? null)) ? (string) ($data['comment_username'] ?? null) : (is_array(($data['comment_username'] ?? null)) ? json_encode(($data['comment_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_username_html'] ?? null)) ? (string) ($data['comment_username_html'] ?? null) : (is_array(($data['comment_username_html'] ?? null)) ? json_encode(($data['comment_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_create_date'] ?? null)) ? (int) ($data['comment_create_date'] ?? null) : 0),
            (is_scalar(($data['comment_body'] ?? null)) ? (string) ($data['comment_body'] ?? null) : (is_array(($data['comment_body'] ?? null)) ? json_encode(($data['comment_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? ProfilePostsCommentsCreateResponseCommentLinks::fromArray($data['links']) : ProfilePostsCommentsCreateResponseCommentLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ProfilePostsCommentsCreateResponseCommentPermissions::fromArray($data['permissions']) : ProfilePostsCommentsCreateResponseCommentPermissions::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsCreateResponseCommentLinks
{
    public function __construct(
        public readonly string $detail,
        public readonly string $profile_post,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['profile_post'] ?? null)) ? (string) ($data['profile_post'] ?? null) : (is_array(($data['profile_post'] ?? null)) ? json_encode(($data['profile_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsCommentsCreateResponseCommentPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class ProfilePostsCommentsEditResponse
{
    public function __construct(
        /** @var ProfilePostsCommentsEditResponseComment */
        public readonly ProfilePostsCommentsEditResponseComment $comment,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comment']) && is_array($data['comment']) ? ProfilePostsCommentsEditResponseComment::fromArray($data['comment']) : ProfilePostsCommentsEditResponseComment::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsEditResponseComment
{
    public function __construct(
        public readonly int $comment_id,
        public readonly int $profile_post_id,
        public readonly int $comment_user_id,
        public readonly string $comment_username,
        public readonly string $comment_username_html,
        public readonly int $comment_create_date,
        public readonly string $comment_body,
        public readonly bool $user_is_ignored,
        public readonly int $timeline_user_id,
        /** @var ProfilePostsCommentsEditResponseCommentLinks */
        public readonly ProfilePostsCommentsEditResponseCommentLinks $links,
        /** @var ProfilePostsCommentsEditResponseCommentPermissions */
        public readonly ProfilePostsCommentsEditResponseCommentPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['comment_id'] ?? null)) ? (int) ($data['comment_id'] ?? null) : 0),
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['comment_user_id'] ?? null)) ? (int) ($data['comment_user_id'] ?? null) : 0),
            (is_scalar(($data['comment_username'] ?? null)) ? (string) ($data['comment_username'] ?? null) : (is_array(($data['comment_username'] ?? null)) ? json_encode(($data['comment_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_username_html'] ?? null)) ? (string) ($data['comment_username_html'] ?? null) : (is_array(($data['comment_username_html'] ?? null)) ? json_encode(($data['comment_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comment_create_date'] ?? null)) ? (int) ($data['comment_create_date'] ?? null) : 0),
            (is_scalar(($data['comment_body'] ?? null)) ? (string) ($data['comment_body'] ?? null) : (is_array(($data['comment_body'] ?? null)) ? json_encode(($data['comment_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? ProfilePostsCommentsEditResponseCommentLinks::fromArray($data['links']) : ProfilePostsCommentsEditResponseCommentLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? ProfilePostsCommentsEditResponseCommentPermissions::fromArray($data['permissions']) : ProfilePostsCommentsEditResponseCommentPermissions::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsEditResponseCommentLinks
{
    public function __construct(
        public readonly string $detail,
        public readonly string $profile_post,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['profile_post'] ?? null)) ? (string) ($data['profile_post'] ?? null) : (is_array(($data['profile_post'] ?? null)) ? json_encode(($data['profile_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ProfilePostsCommentsEditResponseCommentPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
        );
    }
}

final class ProfilePostsCommentsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsCommentsGetResponse
{
    public function __construct(
        /** @var RespProfilePostCommentModel */
        public readonly RespProfilePostCommentModel $comment,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['comment']) && is_array($data['comment']) ? RespProfilePostCommentModel::fromArray($data['comment']) : RespProfilePostCommentModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ProfilePostsCommentsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsListResponse
{
    public function __construct(
        /** @var list<RespConversationModel> */
        public readonly array $conversations,
        public readonly bool $can_start,
        /** @var list<ConversationsListResponseFolders> */
        public readonly array $folders,
        /** @var ConversationsListResponseLinks */
        public readonly ConversationsListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['conversations']) && is_array($data['conversations']) ? array_map(static fn(array $item): RespConversationModel => RespConversationModel::fromArray($item), $data['conversations']) : [],
            (is_scalar(($data['can_start'] ?? null)) ? (bool) ($data['can_start'] ?? null) : false),
            isset($data['folders']) && is_array($data['folders']) ? array_map(static fn(array $item): ConversationsListResponseFolders => ConversationsListResponseFolders::fromArray($item), $data['folders']) : [],
            isset($data['links']) && is_array($data['links']) ? ConversationsListResponseLinks::fromArray($data['links']) : ConversationsListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsListResponseFolders
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $name,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['id'] ?? null)) ? (string) ($data['id'] ?? null) : (is_array(($data['id'] ?? null)) ? json_encode(($data['id'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['name'] ?? null)) ? (string) ($data['name'] ?? null) : (is_array(($data['name'] ?? null)) ? json_encode(($data['name'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ConversationsListResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ConversationsCreateResponse
{
    public function __construct(
        /** @var RespConversationModel */
        public readonly RespConversationModel $conversation,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['conversation']) && is_array($data['conversation']) ? RespConversationModel::fromArray($data['conversation']) : RespConversationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsUpdateResponse
{
    public function __construct(
        /** @var RespConversationModel */
        public readonly RespConversationModel $conversation,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['conversation']) && is_array($data['conversation']) ? RespConversationModel::fromArray($data['conversation']) : RespConversationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsStartResponse
{
    public function __construct(
        /** @var RespConversationModel */
        public readonly RespConversationModel $conversation,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['conversation']) && is_array($data['conversation']) ? RespConversationModel::fromArray($data['conversation']) : RespConversationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsSaveResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsGetResponse
{
    public function __construct(
        /** @var RespConversationModel */
        public readonly RespConversationModel $conversation,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['conversation']) && is_array($data['conversation']) ? RespConversationModel::fromArray($data['conversation']) : RespConversationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsMessagesListResponse
{
    public function __construct(
        /** @var list<RespConversationMessageModel> */
        public readonly array $messages,
        public readonly int $messages_total,
        /** @var ConversationsMessagesListResponseLinks */
        public readonly ConversationsMessagesListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['messages']) && is_array($data['messages']) ? array_map(static fn(array $item): RespConversationMessageModel => RespConversationMessageModel::fromArray($item), $data['messages']) : [],
            (is_scalar(($data['messages_total'] ?? null)) ? (int) ($data['messages_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? ConversationsMessagesListResponseLinks::fromArray($data['links']) : ConversationsMessagesListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsMessagesListResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ConversationsMessagesCreateResponse
{
    public function __construct(
        /** @var RespConversationMessageModel */
        public readonly RespConversationMessageModel $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['message']) && is_array($data['message']) ? RespConversationMessageModel::fromArray($data['message']) : RespConversationMessageModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsSearchResponse
{
    public function __construct(
        /** @var list<RespConversationModel> */
        public readonly array $conversations,
        public readonly bool $recipients,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['conversations']) && is_array($data['conversations']) ? array_map(static fn(array $item): RespConversationModel => RespConversationModel::fromArray($item), $data['conversations']) : [],
            (is_scalar(($data['recipients'] ?? null)) ? (bool) ($data['recipients'] ?? null) : false),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsMessagesGetResponse
{
    public function __construct(
        /** @var RespConversationModel */
        public readonly RespConversationModel $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['message']) && is_array($data['message']) ? RespConversationModel::fromArray($data['message']) : RespConversationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsMessagesEditResponse
{
    public function __construct(
        /** @var RespConversationModel */
        public readonly RespConversationModel $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['message']) && is_array($data['message']) ? RespConversationModel::fromArray($data['message']) : RespConversationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsMessagesDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsInviteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsKickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsReadResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsReadAllResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsMessagesStickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsMessagesUnstickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsStarResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsUnstarResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsAlertsEnableResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ConversationsAlertsDisableResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['status'] ?? null)) ? (string) ($data['status'] ?? null) : (is_array(($data['status'] ?? null)) ? json_encode(($data['status'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class NotificationsListResponse
{
    public function __construct(
        /** @var list<RespNotificationModel> */
        public readonly array $notifications,
        public readonly int $notifications_total,
        /** @var NotificationsListResponseLinks */
        public readonly NotificationsListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['notifications']) && is_array($data['notifications']) ? array_map(static fn(array $item): RespNotificationModel => RespNotificationModel::fromArray($item), $data['notifications']) : [],
            (is_scalar(($data['notifications_total'] ?? null)) ? (int) ($data['notifications_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? NotificationsListResponseLinks::fromArray($data['links']) : NotificationsListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class NotificationsListResponseLinks
{
    public function __construct(
        public readonly string $read,
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['read'] ?? null)) ? (string) ($data['read'] ?? null) : (is_array(($data['read'] ?? null)) ? json_encode(($data['read'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class NotificationsGetResponse
{
    public function __construct(
        public readonly int $notification_id,
        /** @var RespNotificationModel */
        public readonly RespNotificationModel $notification,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['notification_id'] ?? null)) ? (int) ($data['notification_id'] ?? null) : 0),
            isset($data['notification']) && is_array($data['notification']) ? RespNotificationModel::fromArray($data['notification']) : RespNotificationModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class NotificationsReadResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class TagsPopularResponse
{
    public function __construct(
        public readonly array $tags,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['tags'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class TagsListResponse
{
    public function __construct(
        public readonly array $tags,
        public readonly int $tags_total,
        /** @var TagsListResponseLinks */
        public readonly TagsListResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['tags'] ?? [],
            (is_scalar(($data['tags_total'] ?? null)) ? (int) ($data['tags_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? TagsListResponseLinks::fromArray($data['links']) : TagsListResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class TagsListResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponse
{
    public function __construct(
        /** @var TagsGetResponseTag */
        public readonly TagsGetResponseTag $tag,
        /** @var list<TagsGetResponseTagged> */
        public readonly array $tagged,
        public readonly int $tagged_total,
        /** @var TagsGetResponseLinks */
        public readonly TagsGetResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['tag']) && is_array($data['tag']) ? TagsGetResponseTag::fromArray($data['tag']) : TagsGetResponseTag::fromArray([]),
            isset($data['tagged']) && is_array($data['tagged']) ? array_map(static fn(array $item): TagsGetResponseTagged => TagsGetResponseTagged::fromArray($item), $data['tagged']) : [],
            (is_scalar(($data['tagged_total'] ?? null)) ? (int) ($data['tagged_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? TagsGetResponseLinks::fromArray($data['links']) : TagsGetResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class TagsGetResponseTag
{
    public function __construct(
        public readonly int $tag_id,
        public readonly string $tag_text,
        public readonly int $tag_use_count,
        /** @var TagsGetResponseTagLinks */
        public readonly TagsGetResponseTagLinks $links,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['tag_id'] ?? null)) ? (int) ($data['tag_id'] ?? null) : 0),
            (is_scalar(($data['tag_text'] ?? null)) ? (string) ($data['tag_text'] ?? null) : (is_array(($data['tag_text'] ?? null)) ? json_encode(($data['tag_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['tag_use_count'] ?? null)) ? (int) ($data['tag_use_count'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? TagsGetResponseTagLinks::fromArray($data['links']) : TagsGetResponseTagLinks::fromArray([]),
        );
    }
}

final class TagsGetResponseTagLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponseTagged
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var TagsGetResponseTaggedFirstPost */
        public readonly TagsGetResponseTaggedFirstPost $first_post,
        /** @var list<TagsGetResponseTaggedThreadPrefixes> */
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var TagsGetResponseTaggedLinks */
        public readonly TagsGetResponseTaggedLinks $links,
        /** @var TagsGetResponseTaggedPermissions */
        public readonly TagsGetResponseTaggedPermissions $permissions,
        /** @var TagsGetResponseTaggedForum */
        public readonly TagsGetResponseTaggedForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? TagsGetResponseTaggedFirstPost::fromArray($data['first_post']) : TagsGetResponseTaggedFirstPost::fromArray([]),
            isset($data['thread_prefixes']) && is_array($data['thread_prefixes']) ? array_map(static fn(array $item): TagsGetResponseTaggedThreadPrefixes => TagsGetResponseTaggedThreadPrefixes::fromArray($item), $data['thread_prefixes']) : [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? TagsGetResponseTaggedLinks::fromArray($data['links']) : TagsGetResponseTaggedLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? TagsGetResponseTaggedPermissions::fromArray($data['permissions']) : TagsGetResponseTaggedPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? TagsGetResponseTaggedForum::fromArray($data['forum']) : TagsGetResponseTaggedForum::fromArray([]),
        );
    }
}

final class TagsGetResponseTaggedFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var TagsGetResponseTaggedFirstPostLinks */
        public readonly TagsGetResponseTaggedFirstPostLinks $links,
        /** @var TagsGetResponseTaggedFirstPostPermissions */
        public readonly TagsGetResponseTaggedFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? TagsGetResponseTaggedFirstPostLinks::fromArray($data['links']) : TagsGetResponseTaggedFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? TagsGetResponseTaggedFirstPostPermissions::fromArray($data['permissions']) : TagsGetResponseTaggedFirstPostPermissions::fromArray([]),
        );
    }
}

final class TagsGetResponseTaggedFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponseTaggedFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class TagsGetResponseTaggedThreadPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponseTaggedLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_poster,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_poster'] ?? null)) ? (string) ($data['last_poster'] ?? null) : (is_array(($data['last_poster'] ?? null)) ? json_encode(($data['last_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponseTaggedPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
        );
    }
}

final class TagsGetResponseTaggedForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        /** @var list<TagsGetResponseTaggedForumForumPrefixes> */
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var TagsGetResponseTaggedForumLinks */
        public readonly TagsGetResponseTaggedForumLinks $links,
        /** @var TagsGetResponseTaggedForumPermissions */
        public readonly TagsGetResponseTaggedForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item): TagsGetResponseTaggedForumForumPrefixes => TagsGetResponseTaggedForumForumPrefixes::fromArray($item), $data['forum_prefixes']) : [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? TagsGetResponseTaggedForumLinks::fromArray($data['links']) : TagsGetResponseTaggedForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? TagsGetResponseTaggedForumPermissions::fromArray($data['permissions']) : TagsGetResponseTaggedForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class TagsGetResponseTaggedForumForumPrefixes
{
    public function __construct(
        public readonly string $group_title,
        /** @var list<TagsGetResponseTaggedForumForumPrefixesGroupPrefixes> */
        public readonly array $group_prefixes,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['group_title'] ?? null)) ? (string) ($data['group_title'] ?? null) : (is_array(($data['group_title'] ?? null)) ? json_encode(($data['group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item): TagsGetResponseTaggedForumForumPrefixesGroupPrefixes => TagsGetResponseTaggedForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']) : [],
        );
    }
}

final class TagsGetResponseTaggedForumForumPrefixesGroupPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponseTaggedForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsGetResponseTaggedForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class TagsGetResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class TagsFindResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $tags,
        /** @var list<int> */
        public readonly array $ids,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['tags'] ?? [],
            $data['ids'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchAllResponse
{
    public function __construct(
        /** @var list<SearchAllResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var list<RespUserModel> */
        public readonly array $users,
        /** @var SearchAllResponseLinks */
        public readonly SearchAllResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): SearchAllResponseData => SearchAllResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']) : [],
            isset($data['links']) && is_array($data['links']) ? SearchAllResponseLinks::fromArray($data['links']) : SearchAllResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchAllResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly string $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_closed,
        public readonly bool $thread_is_followed,
        public readonly bool $thread_is_starred,
        /** @var SearchAllResponseDataFirstPost */
        public readonly SearchAllResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var SearchAllResponseDataLinks */
        public readonly SearchAllResponseDataLinks $links,
        /** @var SearchAllResponseDataPermissions */
        public readonly SearchAllResponseDataPermissions $permissions,
        public readonly string $node_title,
        /** @var SearchAllResponseDataForum */
        public readonly SearchAllResponseDataForum $forum,
        /** @var SearchAllResponseDataLastPost */
        public readonly SearchAllResponseDataLastPost $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (string) ($data['content_id'] ?? null) : (is_array(($data['content_id'] ?? null)) ? json_encode(($data['content_id'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_closed'] ?? null)) ? (bool) ($data['thread_is_closed'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            (is_scalar(($data['thread_is_starred'] ?? null)) ? (bool) ($data['thread_is_starred'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? SearchAllResponseDataFirstPost::fromArray($data['first_post']) : SearchAllResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? SearchAllResponseDataLinks::fromArray($data['links']) : SearchAllResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchAllResponseDataPermissions::fromArray($data['permissions']) : SearchAllResponseDataPermissions::fromArray([]),
            (is_scalar(($data['node_title'] ?? null)) ? (string) ($data['node_title'] ?? null) : (is_array(($data['node_title'] ?? null)) ? json_encode(($data['node_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['forum']) && is_array($data['forum']) ? SearchAllResponseDataForum::fromArray($data['forum']) : SearchAllResponseDataForum::fromArray([]),
            isset($data['last_post']) && is_array($data['last_post']) ? SearchAllResponseDataLastPost::fromArray($data['last_post']) : SearchAllResponseDataLastPost::fromArray([]),
        );
    }
}

final class SearchAllResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        public readonly bool $post_is_liked,
        /** @var SearchAllResponseDataFirstPostLinks */
        public readonly SearchAllResponseDataFirstPostLinks $links,
        /** @var SearchAllResponseDataFirstPostPermissions */
        public readonly SearchAllResponseDataFirstPostPermissions $permissions,
        public readonly bool $thread_is_deleted,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            (is_scalar(($data['post_is_liked'] ?? null)) ? (bool) ($data['post_is_liked'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchAllResponseDataFirstPostLinks::fromArray($data['links']) : SearchAllResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchAllResponseDataFirstPostPermissions::fromArray($data['permissions']) : SearchAllResponseDataFirstPostPermissions::fromArray([]),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
        );
    }
}

final class SearchAllResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchAllResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class SearchAllResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_poster,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_poster'] ?? null)) ? (string) ($data['last_poster'] ?? null) : (is_array(($data['last_poster'] ?? null)) ? json_encode(($data['last_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchAllResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        /** @var SearchAllResponseDataPermissionsBump */
        public readonly SearchAllResponseDataPermissionsBump $bump,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            isset($data['bump']) && is_array($data['bump']) ? SearchAllResponseDataPermissionsBump::fromArray($data['bump']) : SearchAllResponseDataPermissionsBump::fromArray([]),
        );
    }
}

final class SearchAllResponseDataPermissionsBump
{
    public function __construct(
        public readonly bool $can,
        public readonly int $available_count,
        public readonly mixed $error,
        public readonly mixed $next_available_time,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can'] ?? null)) ? (bool) ($data['can'] ?? null) : false),
            (is_scalar(($data['available_count'] ?? null)) ? (int) ($data['available_count'] ?? null) : 0),
            $data['error'] ?? null,
            $data['next_available_time'] ?? null,
        );
    }
}

final class SearchAllResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly int $parent_node_id,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var SearchAllResponseDataForumLinks */
        public readonly SearchAllResponseDataForumLinks $links,
        /** @var SearchAllResponseDataForumPermissions */
        public readonly SearchAllResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            (is_scalar(($data['parent_node_id'] ?? null)) ? (int) ($data['parent_node_id'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchAllResponseDataForumLinks::fromArray($data['links']) : SearchAllResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchAllResponseDataForumPermissions::fromArray($data['permissions']) : SearchAllResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class SearchAllResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchAllResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class SearchAllResponseDataLastPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        public readonly bool $post_is_liked,
        /** @var SearchAllResponseDataLastPostLinks */
        public readonly SearchAllResponseDataLastPostLinks $links,
        /** @var SearchAllResponseDataLastPostPermissions */
        public readonly SearchAllResponseDataLastPostPermissions $permissions,
        public readonly bool $thread_is_deleted,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            (is_scalar(($data['post_is_liked'] ?? null)) ? (bool) ($data['post_is_liked'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchAllResponseDataLastPostLinks::fromArray($data['links']) : SearchAllResponseDataLastPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchAllResponseDataLastPostPermissions::fromArray($data['permissions']) : SearchAllResponseDataLastPostPermissions::fromArray([]),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
        );
    }
}

final class SearchAllResponseDataLastPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchAllResponseDataLastPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class SearchAllResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchThreadsResponse
{
    public function __construct(
        /** @var list<SearchThreadsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchThreadsResponseLinks */
        public readonly SearchThreadsResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): SearchThreadsResponseData => SearchThreadsResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? SearchThreadsResponseLinks::fromArray($data['links']) : SearchThreadsResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchThreadsResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var SearchThreadsResponseDataFirstPost */
        public readonly SearchThreadsResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var SearchThreadsResponseDataLinks */
        public readonly SearchThreadsResponseDataLinks $links,
        /** @var SearchThreadsResponseDataPermissions */
        public readonly SearchThreadsResponseDataPermissions $permissions,
        /** @var SearchThreadsResponseDataForum */
        public readonly SearchThreadsResponseDataForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? SearchThreadsResponseDataFirstPost::fromArray($data['first_post']) : SearchThreadsResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? SearchThreadsResponseDataLinks::fromArray($data['links']) : SearchThreadsResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchThreadsResponseDataPermissions::fromArray($data['permissions']) : SearchThreadsResponseDataPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? SearchThreadsResponseDataForum::fromArray($data['forum']) : SearchThreadsResponseDataForum::fromArray([]),
        );
    }
}

final class SearchThreadsResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var SearchThreadsResponseDataFirstPostLinks */
        public readonly SearchThreadsResponseDataFirstPostLinks $links,
        /** @var SearchThreadsResponseDataFirstPostPermissions */
        public readonly SearchThreadsResponseDataFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchThreadsResponseDataFirstPostLinks::fromArray($data['links']) : SearchThreadsResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchThreadsResponseDataFirstPostPermissions::fromArray($data['permissions']) : SearchThreadsResponseDataFirstPostPermissions::fromArray([]),
        );
    }
}

final class SearchThreadsResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchThreadsResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class SearchThreadsResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchThreadsResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
        );
    }
}

final class SearchThreadsResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var SearchThreadsResponseDataForumLinks */
        public readonly SearchThreadsResponseDataForumLinks $links,
        /** @var SearchThreadsResponseDataForumPermissions */
        public readonly SearchThreadsResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchThreadsResponseDataForumLinks::fromArray($data['links']) : SearchThreadsResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchThreadsResponseDataForumPermissions::fromArray($data['permissions']) : SearchThreadsResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class SearchThreadsResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchThreadsResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class SearchThreadsResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchPostsResponse
{
    public function __construct(
        /** @var list<SearchPostsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchPostsResponseLinks */
        public readonly SearchPostsResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): SearchPostsResponseData => SearchPostsResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? SearchPostsResponseLinks::fromArray($data['links']) : SearchPostsResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchPostsResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var SearchPostsResponseDataFirstPost */
        public readonly SearchPostsResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var SearchPostsResponseDataLinks */
        public readonly SearchPostsResponseDataLinks $links,
        /** @var SearchPostsResponseDataPermissions */
        public readonly SearchPostsResponseDataPermissions $permissions,
        /** @var SearchPostsResponseDataForum */
        public readonly SearchPostsResponseDataForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? SearchPostsResponseDataFirstPost::fromArray($data['first_post']) : SearchPostsResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? SearchPostsResponseDataLinks::fromArray($data['links']) : SearchPostsResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchPostsResponseDataPermissions::fromArray($data['permissions']) : SearchPostsResponseDataPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? SearchPostsResponseDataForum::fromArray($data['forum']) : SearchPostsResponseDataForum::fromArray([]),
        );
    }
}

final class SearchPostsResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var SearchPostsResponseDataFirstPostLinks */
        public readonly SearchPostsResponseDataFirstPostLinks $links,
        /** @var SearchPostsResponseDataFirstPostPermissions */
        public readonly SearchPostsResponseDataFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchPostsResponseDataFirstPostLinks::fromArray($data['links']) : SearchPostsResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchPostsResponseDataFirstPostPermissions::fromArray($data['permissions']) : SearchPostsResponseDataFirstPostPermissions::fromArray([]),
        );
    }
}

final class SearchPostsResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchPostsResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class SearchPostsResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchPostsResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
        );
    }
}

final class SearchPostsResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var SearchPostsResponseDataForumLinks */
        public readonly SearchPostsResponseDataForumLinks $links,
        /** @var SearchPostsResponseDataForumPermissions */
        public readonly SearchPostsResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            $data['forum_prefixes'] ?? [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchPostsResponseDataForumLinks::fromArray($data['links']) : SearchPostsResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchPostsResponseDataForumPermissions::fromArray($data['permissions']) : SearchPostsResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class SearchPostsResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchPostsResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class SearchPostsResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchUsersResponse
{
    public function __construct(
        /** @var list<RespUserModel> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchProfilePostsResponse
{
    public function __construct(
        /** @var list<SearchProfilePostsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchProfilePostsResponseLinks */
        public readonly SearchProfilePostsResponseLinks $links,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): SearchProfilePostsResponseData => SearchProfilePostsResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            isset($data['links']) && is_array($data['links']) ? SearchProfilePostsResponseLinks::fromArray($data['links']) : SearchProfilePostsResponseLinks::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchProfilePostsResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $profile_post_id,
        public readonly int $timeline_user_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly int $post_like_count,
        public readonly int $post_comment_count,
        public readonly string $timeline_username,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        /** @var SearchProfilePostsResponseDataLinks */
        public readonly SearchProfilePostsResponseDataLinks $links,
        /** @var SearchProfilePostsResponseDataPermissions */
        public readonly SearchProfilePostsResponseDataPermissions $permissions,
        /** @var RespUserModel */
        public readonly RespUserModel $timeline_user,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['profile_post_id'] ?? null)) ? (int) ($data['profile_post_id'] ?? null) : 0),
            (is_scalar(($data['timeline_user_id'] ?? null)) ? (int) ($data['timeline_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_comment_count'] ?? null)) ? (int) ($data['post_comment_count'] ?? null) : 0),
            (is_scalar(($data['timeline_username'] ?? null)) ? (string) ($data['timeline_username'] ?? null) : (is_array(($data['timeline_username'] ?? null)) ? json_encode(($data['timeline_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchProfilePostsResponseDataLinks::fromArray($data['links']) : SearchProfilePostsResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchProfilePostsResponseDataPermissions::fromArray($data['permissions']) : SearchProfilePostsResponseDataPermissions::fromArray([]),
            isset($data['timeline_user']) && is_array($data['timeline_user']) ? RespUserModel::fromArray($data['timeline_user']) : RespUserModel::fromArray([]),
        );
    }
}

final class SearchProfilePostsResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $timeline,
        public readonly string $timeline_user,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $comments,
        public readonly string $report,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline'] ?? null)) ? (string) ($data['timeline'] ?? null) : (is_array(($data['timeline'] ?? null)) ? json_encode(($data['timeline'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['timeline_user'] ?? null)) ? (string) ($data['timeline_user'] ?? null) : (is_array(($data['timeline_user'] ?? null)) ? json_encode(($data['timeline_user'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['comments'] ?? null)) ? (string) ($data['comments'] ?? null) : (is_array(($data['comments'] ?? null)) ? json_encode(($data['comments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchProfilePostsResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $like,
        public readonly bool $comment,
        public readonly bool $report,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['comment'] ?? null)) ? (bool) ($data['comment'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
        );
    }
}

final class SearchProfilePostsResponseLinks
{
    public function __construct(
        public readonly int $pages,
        public readonly int $page,
        public readonly string $next,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['pages'] ?? null)) ? (int) ($data['pages'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['next'] ?? null)) ? (string) ($data['next'] ?? null) : (is_array(($data['next'] ?? null)) ? json_encode(($data['next'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchTaggedResponse
{
    public function __construct(
        /** @var list<SearchTaggedResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        public readonly array $search_tags,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): SearchTaggedResponseData => SearchTaggedResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            $data['search_tags'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchTaggedResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var SearchTaggedResponseDataFirstPost */
        public readonly SearchTaggedResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var SearchTaggedResponseDataLinks */
        public readonly SearchTaggedResponseDataLinks $links,
        /** @var SearchTaggedResponseDataPermissions */
        public readonly SearchTaggedResponseDataPermissions $permissions,
        /** @var SearchTaggedResponseDataForum */
        public readonly SearchTaggedResponseDataForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? SearchTaggedResponseDataFirstPost::fromArray($data['first_post']) : SearchTaggedResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? SearchTaggedResponseDataLinks::fromArray($data['links']) : SearchTaggedResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchTaggedResponseDataPermissions::fromArray($data['permissions']) : SearchTaggedResponseDataPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? SearchTaggedResponseDataForum::fromArray($data['forum']) : SearchTaggedResponseDataForum::fromArray([]),
        );
    }
}

final class SearchTaggedResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var SearchTaggedResponseDataFirstPostLinks */
        public readonly SearchTaggedResponseDataFirstPostLinks $links,
        /** @var SearchTaggedResponseDataFirstPostPermissions */
        public readonly SearchTaggedResponseDataFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchTaggedResponseDataFirstPostLinks::fromArray($data['links']) : SearchTaggedResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchTaggedResponseDataFirstPostPermissions::fromArray($data['permissions']) : SearchTaggedResponseDataFirstPostPermissions::fromArray([]),
        );
    }
}

final class SearchTaggedResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchTaggedResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class SearchTaggedResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchTaggedResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['edit_title'] ?? null)) ? (bool) ($data['edit_title'] ?? null) : false),
            (is_scalar(($data['edit_tags'] ?? null)) ? (bool) ($data['edit_tags'] ?? null) : false),
        );
    }
}

final class SearchTaggedResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        /** @var list<SearchTaggedResponseDataForumForumPrefixes> */
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var SearchTaggedResponseDataForumLinks */
        public readonly SearchTaggedResponseDataForumLinks $links,
        /** @var SearchTaggedResponseDataForumPermissions */
        public readonly SearchTaggedResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item): SearchTaggedResponseDataForumForumPrefixes => SearchTaggedResponseDataForumForumPrefixes::fromArray($item), $data['forum_prefixes']) : [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchTaggedResponseDataForumLinks::fromArray($data['links']) : SearchTaggedResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchTaggedResponseDataForumPermissions::fromArray($data['permissions']) : SearchTaggedResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class SearchTaggedResponseDataForumForumPrefixes
{
    public function __construct(
        public readonly string $group_title,
        /** @var list<SearchTaggedResponseDataForumForumPrefixesGroupPrefixes> */
        public readonly array $group_prefixes,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['group_title'] ?? null)) ? (string) ($data['group_title'] ?? null) : (is_array(($data['group_title'] ?? null)) ? json_encode(($data['group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item): SearchTaggedResponseDataForumForumPrefixesGroupPrefixes => SearchTaggedResponseDataForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']) : [],
        );
    }
}

final class SearchTaggedResponseDataForumForumPrefixesGroupPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchTaggedResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchTaggedResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class SearchResultsResponse
{
    public function __construct(
        /** @var list<SearchResultsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        public readonly array $search_tags,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['data']) && is_array($data['data']) ? array_map(static fn(array $item): SearchResultsResponseData => SearchResultsResponseData::fromArray($item), $data['data']) : [],
            (is_scalar(($data['data_total'] ?? null)) ? (int) ($data['data_total'] ?? null) : 0),
            $data['search_tags'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class SearchResultsResponseData
{
    public function __construct(
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_followed,
        /** @var SearchResultsResponseDataFirstPost */
        public readonly SearchResultsResponseDataFirstPost $first_post,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var SearchResultsResponseDataLinks */
        public readonly SearchResultsResponseDataLinks $links,
        /** @var SearchResultsResponseDataPermissions */
        public readonly SearchResultsResponseDataPermissions $permissions,
        /** @var SearchResultsResponseDataForum */
        public readonly SearchResultsResponseDataForum $forum,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['content_type'] ?? null)) ? (string) ($data['content_type'] ?? null) : (is_array(($data['content_type'] ?? null)) ? json_encode(($data['content_type'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['content_id'] ?? null)) ? (int) ($data['content_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            isset($data['first_post']) && is_array($data['first_post']) ? SearchResultsResponseDataFirstPost::fromArray($data['first_post']) : SearchResultsResponseDataFirstPost::fromArray([]),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? SearchResultsResponseDataLinks::fromArray($data['links']) : SearchResultsResponseDataLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchResultsResponseDataPermissions::fromArray($data['permissions']) : SearchResultsResponseDataPermissions::fromArray([]),
            isset($data['forum']) && is_array($data['forum']) ? SearchResultsResponseDataForum::fromArray($data['forum']) : SearchResultsResponseDataForum::fromArray([]),
        );
    }
}

final class SearchResultsResponseDataFirstPost
{
    public function __construct(
        public readonly int $post_id,
        public readonly int $thread_id,
        public readonly int $poster_user_id,
        public readonly string $poster_username,
        public readonly string $poster_username_html,
        public readonly int $post_create_date,
        public readonly string $post_body,
        public readonly string $post_body_html,
        public readonly string $post_body_plain_text,
        public readonly string $signature,
        public readonly string $signature_html,
        public readonly string $signature_plain_text,
        public readonly int $post_like_count,
        public readonly int $post_attachment_count,
        public readonly bool $user_is_ignored,
        public readonly bool $post_is_published,
        public readonly bool $post_is_deleted,
        public readonly int $post_update_date,
        public readonly bool $post_is_first_post,
        /** @var SearchResultsResponseDataFirstPostLinks */
        public readonly SearchResultsResponseDataFirstPostLinks $links,
        /** @var SearchResultsResponseDataFirstPostPermissions */
        public readonly SearchResultsResponseDataFirstPostPermissions $permissions,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['post_id'] ?? null)) ? (int) ($data['post_id'] ?? null) : 0),
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['poster_user_id'] ?? null)) ? (int) ($data['poster_user_id'] ?? null) : 0),
            (is_scalar(($data['poster_username'] ?? null)) ? (string) ($data['poster_username'] ?? null) : (is_array(($data['poster_username'] ?? null)) ? json_encode(($data['poster_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_username_html'] ?? null)) ? (string) ($data['poster_username_html'] ?? null) : (is_array(($data['poster_username_html'] ?? null)) ? json_encode(($data['poster_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_create_date'] ?? null)) ? (int) ($data['post_create_date'] ?? null) : 0),
            (is_scalar(($data['post_body'] ?? null)) ? (string) ($data['post_body'] ?? null) : (is_array(($data['post_body'] ?? null)) ? json_encode(($data['post_body'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_html'] ?? null)) ? (string) ($data['post_body_html'] ?? null) : (is_array(($data['post_body_html'] ?? null)) ? json_encode(($data['post_body_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_body_plain_text'] ?? null)) ? (string) ($data['post_body_plain_text'] ?? null) : (is_array(($data['post_body_plain_text'] ?? null)) ? json_encode(($data['post_body_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature'] ?? null)) ? (string) ($data['signature'] ?? null) : (is_array(($data['signature'] ?? null)) ? json_encode(($data['signature'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_html'] ?? null)) ? (string) ($data['signature_html'] ?? null) : (is_array(($data['signature_html'] ?? null)) ? json_encode(($data['signature_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['signature_plain_text'] ?? null)) ? (string) ($data['signature_plain_text'] ?? null) : (is_array(($data['signature_plain_text'] ?? null)) ? json_encode(($data['signature_plain_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['post_like_count'] ?? null)) ? (int) ($data['post_like_count'] ?? null) : 0),
            (is_scalar(($data['post_attachment_count'] ?? null)) ? (int) ($data['post_attachment_count'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['post_is_published'] ?? null)) ? (bool) ($data['post_is_published'] ?? null) : false),
            (is_scalar(($data['post_is_deleted'] ?? null)) ? (bool) ($data['post_is_deleted'] ?? null) : false),
            (is_scalar(($data['post_update_date'] ?? null)) ? (int) ($data['post_update_date'] ?? null) : 0),
            (is_scalar(($data['post_is_first_post'] ?? null)) ? (bool) ($data['post_is_first_post'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchResultsResponseDataFirstPostLinks::fromArray($data['links']) : SearchResultsResponseDataFirstPostLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchResultsResponseDataFirstPostPermissions::fromArray($data['permissions']) : SearchResultsResponseDataFirstPostPermissions::fromArray([]),
        );
    }
}

final class SearchResultsResponseDataFirstPostLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $thread,
        public readonly string $poster,
        public readonly string $likes,
        public readonly string $report,
        public readonly string $attachments,
        public readonly string $poster_avatar,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread'] ?? null)) ? (string) ($data['thread'] ?? null) : (is_array(($data['thread'] ?? null)) ? json_encode(($data['thread'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster'] ?? null)) ? (string) ($data['poster'] ?? null) : (is_array(($data['poster'] ?? null)) ? json_encode(($data['poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['likes'] ?? null)) ? (string) ($data['likes'] ?? null) : (is_array(($data['likes'] ?? null)) ? json_encode(($data['likes'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['report'] ?? null)) ? (string) ($data['report'] ?? null) : (is_array(($data['report'] ?? null)) ? json_encode(($data['report'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['attachments'] ?? null)) ? (string) ($data['attachments'] ?? null) : (is_array(($data['attachments'] ?? null)) ? json_encode(($data['attachments'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['poster_avatar'] ?? null)) ? (string) ($data['poster_avatar'] ?? null) : (is_array(($data['poster_avatar'] ?? null)) ? json_encode(($data['poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchResultsResponseDataFirstPostPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $reply,
        public readonly bool $like,
        public readonly bool $report,
        public readonly bool $upload_attachment,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['reply'] ?? null)) ? (bool) ($data['reply'] ?? null) : false),
            (is_scalar(($data['like'] ?? null)) ? (bool) ($data['like'] ?? null) : false),
            (is_scalar(($data['report'] ?? null)) ? (bool) ($data['report'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
        );
    }
}

final class SearchResultsResponseDataLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
        public readonly string $last_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['last_post'] ?? null)) ? (string) ($data['last_post'] ?? null) : (is_array(($data['last_post'] ?? null)) ? json_encode(($data['last_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchResultsResponseDataPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $upload_attachment,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['edit_title'] ?? null)) ? (bool) ($data['edit_title'] ?? null) : false),
            (is_scalar(($data['edit_tags'] ?? null)) ? (bool) ($data['edit_tags'] ?? null) : false),
        );
    }
}

final class SearchResultsResponseDataForum
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        /** @var list<SearchResultsResponseDataForumForumPrefixes> */
        public readonly array $forum_prefixes,
        public readonly int $thread_default_prefix_id,
        public readonly bool $thread_prefix_is_required,
        /** @var SearchResultsResponseDataForumLinks */
        public readonly SearchResultsResponseDataForumLinks $links,
        /** @var SearchResultsResponseDataForumPermissions */
        public readonly SearchResultsResponseDataForumPermissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['forum_title'] ?? null)) ? (string) ($data['forum_title'] ?? null) : (is_array(($data['forum_title'] ?? null)) ? json_encode(($data['forum_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_description'] ?? null)) ? (string) ($data['forum_description'] ?? null) : (is_array(($data['forum_description'] ?? null)) ? json_encode(($data['forum_description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum_thread_count'] ?? null)) ? (int) ($data['forum_thread_count'] ?? null) : 0),
            (is_scalar(($data['forum_post_count'] ?? null)) ? (int) ($data['forum_post_count'] ?? null) : 0),
            isset($data['forum_prefixes']) && is_array($data['forum_prefixes']) ? array_map(static fn(array $item): SearchResultsResponseDataForumForumPrefixes => SearchResultsResponseDataForumForumPrefixes::fromArray($item), $data['forum_prefixes']) : [],
            (is_scalar(($data['thread_default_prefix_id'] ?? null)) ? (int) ($data['thread_default_prefix_id'] ?? null) : 0),
            (is_scalar(($data['thread_prefix_is_required'] ?? null)) ? (bool) ($data['thread_prefix_is_required'] ?? null) : false),
            isset($data['links']) && is_array($data['links']) ? SearchResultsResponseDataForumLinks::fromArray($data['links']) : SearchResultsResponseDataForumLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? SearchResultsResponseDataForumPermissions::fromArray($data['permissions']) : SearchResultsResponseDataForumPermissions::fromArray([]),
            (is_scalar(($data['forum_is_followed'] ?? null)) ? (bool) ($data['forum_is_followed'] ?? null) : false),
        );
    }
}

final class SearchResultsResponseDataForumForumPrefixes
{
    public function __construct(
        public readonly string $group_title,
        /** @var list<SearchResultsResponseDataForumForumPrefixesGroupPrefixes> */
        public readonly array $group_prefixes,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['group_title'] ?? null)) ? (string) ($data['group_title'] ?? null) : (is_array(($data['group_title'] ?? null)) ? json_encode(($data['group_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['group_prefixes']) && is_array($data['group_prefixes']) ? array_map(static fn(array $item): SearchResultsResponseDataForumForumPrefixesGroupPrefixes => SearchResultsResponseDataForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']) : [],
        );
    }
}

final class SearchResultsResponseDataForumForumPrefixesGroupPrefixes
{
    public function __construct(
        public readonly int $prefix_id,
        public readonly string $prefix_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['prefix_id'] ?? null)) ? (int) ($data['prefix_id'] ?? null) : 0),
            (is_scalar(($data['prefix_title'] ?? null)) ? (string) ($data['prefix_title'] ?? null) : (is_array(($data['prefix_title'] ?? null)) ? json_encode(($data['prefix_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchResultsResponseDataForumLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $sub_categories,
        public readonly string $sub_forums,
        public readonly string $threads,
        public readonly string $followers,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-categories'] ?? null)) ? (string) ($data['sub-categories'] ?? null) : (is_array(($data['sub-categories'] ?? null)) ? json_encode(($data['sub-categories'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sub-forums'] ?? null)) ? (string) ($data['sub-forums'] ?? null) : (is_array(($data['sub-forums'] ?? null)) ? json_encode(($data['sub-forums'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['threads'] ?? null)) ? (string) ($data['threads'] ?? null) : (is_array(($data['threads'] ?? null)) ? json_encode(($data['threads'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class SearchResultsResponseDataForumPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $edit,
        public readonly bool $delete,
        public readonly bool $create_thread,
        public readonly bool $upload_attachment,
        public readonly bool $tag_thread,
        public readonly bool $follow,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['edit'] ?? null)) ? (bool) ($data['edit'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['create_thread'] ?? null)) ? (bool) ($data['create_thread'] ?? null) : false),
            (is_scalar(($data['upload_attachment'] ?? null)) ? (bool) ($data['upload_attachment'] ?? null) : false),
            (is_scalar(($data['tag_thread'] ?? null)) ? (bool) ($data['tag_thread'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
        );
    }
}

final class BatchExecuteResponse
{
    public function __construct(
        /** @var BatchExecuteResponseJobs */
        public readonly BatchExecuteResponseJobs $jobs,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['jobs']) && is_array($data['jobs']) ? BatchExecuteResponseJobs::fromArray($data['jobs']) : BatchExecuteResponseJobs::fromArray([]),
        );
    }
}

final class BatchExecuteResponseJobs
{
    public function __construct(
        public readonly array $job_id,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['job_id'] ?? [],
        );
    }
}

final class ChatboxIndexResponse
{
    public function __construct(
        /** @var list<ChatboxIndexResponseRooms> */
        public readonly array $rooms,
        public readonly mixed $ban,
        /** @var list<ChatboxIndexResponseIgnore> */
        public readonly array $ignore,
        /** @var ChatboxIndexResponsePermissions */
        public readonly ChatboxIndexResponsePermissions $permissions,
        /** @var list<string> */
        public readonly array $commands,
        /** @var ChatboxIndexResponseRoomsOnline */
        public readonly ChatboxIndexResponseRoomsOnline $roomsOnline,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['rooms']) && is_array($data['rooms']) ? array_map(static fn(array $item): ChatboxIndexResponseRooms => ChatboxIndexResponseRooms::fromArray($item), $data['rooms']) : [],
            $data['ban'] ?? null,
            isset($data['ignore']) && is_array($data['ignore']) ? array_map(static fn(array $item): ChatboxIndexResponseIgnore => ChatboxIndexResponseIgnore::fromArray($item), $data['ignore']) : [],
            isset($data['permissions']) && is_array($data['permissions']) ? ChatboxIndexResponsePermissions::fromArray($data['permissions']) : ChatboxIndexResponsePermissions::fromArray([]),
            $data['commands'] ?? [],
            isset($data['roomsOnline']) && is_array($data['roomsOnline']) ? ChatboxIndexResponseRoomsOnline::fromArray($data['roomsOnline']) : ChatboxIndexResponseRoomsOnline::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxIndexResponseRooms
{
    public function __construct(
        public readonly bool $can_report,
        public readonly bool $eng,
        public readonly bool $market,
        public readonly int $room_id,
        public readonly string $title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['can_report'] ?? null)) ? (bool) ($data['can_report'] ?? null) : false),
            (is_scalar(($data['eng'] ?? null)) ? (bool) ($data['eng'] ?? null) : false),
            (is_scalar(($data['market'] ?? null)) ? (bool) ($data['market'] ?? null) : false),
            (is_scalar(($data['room_id'] ?? null)) ? (int) ($data['room_id'] ?? null) : 0),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxIndexResponseIgnore
{
    public function __construct(
        public readonly int $avatar_date,
        public readonly int $background_date,
        public readonly int $contest_count,
        public readonly string $custom_title,
        public readonly int $display_banner_id,
        public readonly int $display_icon_group_id,
        public readonly int $display_style_group_id,
        public readonly bool $is_admin,
        public readonly bool $is_banned,
        public readonly bool $is_moderator,
        public readonly bool $is_staff,
        public readonly int $last_activity,
        public readonly int $like2_count,
        public readonly int $like_count,
        public readonly int $message_count,
        public readonly int $register_date,
        /** @var ChatboxIndexResponseIgnoreRendered */
        public readonly ChatboxIndexResponseIgnoreRendered $rendered,
        public readonly mixed $short_link,
        public readonly int $trophy_points,
        public readonly mixed $uniq_banner,
        public readonly string $uniq_username_css,
        public readonly int $user_id,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['avatar_date'] ?? null)) ? (int) ($data['avatar_date'] ?? null) : 0),
            (is_scalar(($data['background_date'] ?? null)) ? (int) ($data['background_date'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_banner_id'] ?? null)) ? (int) ($data['display_banner_id'] ?? null) : 0),
            (is_scalar(($data['display_icon_group_id'] ?? null)) ? (int) ($data['display_icon_group_id'] ?? null) : 0),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_admin'] ?? null)) ? (bool) ($data['is_admin'] ?? null) : false),
            (is_scalar(($data['is_banned'] ?? null)) ? (bool) ($data['is_banned'] ?? null) : false),
            (is_scalar(($data['is_moderator'] ?? null)) ? (bool) ($data['is_moderator'] ?? null) : false),
            (is_scalar(($data['is_staff'] ?? null)) ? (bool) ($data['is_staff'] ?? null) : false),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['like2_count'] ?? null)) ? (int) ($data['like2_count'] ?? null) : 0),
            (is_scalar(($data['like_count'] ?? null)) ? (int) ($data['like_count'] ?? null) : 0),
            (is_scalar(($data['message_count'] ?? null)) ? (int) ($data['message_count'] ?? null) : 0),
            (is_scalar(($data['register_date'] ?? null)) ? (int) ($data['register_date'] ?? null) : 0),
            isset($data['rendered']) && is_array($data['rendered']) ? ChatboxIndexResponseIgnoreRendered::fromArray($data['rendered']) : ChatboxIndexResponseIgnoreRendered::fromArray([]),
            $data['short_link'] ?? null,
            (is_scalar(($data['trophy_points'] ?? null)) ? (int) ($data['trophy_points'] ?? null) : 0),
            $data['uniq_banner'] ?? null,
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxIndexResponseIgnoreRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxIndexResponseIgnoreRenderedAvatars */
        public readonly ChatboxIndexResponseIgnoreRenderedAvatars $avatars,
        public readonly string $link,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['avatars']) && is_array($data['avatars']) ? ChatboxIndexResponseIgnoreRenderedAvatars::fromArray($data['avatars']) : ChatboxIndexResponseIgnoreRenderedAvatars::fromArray([]),
            (is_scalar(($data['link'] ?? null)) ? (string) ($data['link'] ?? null) : (is_array(($data['link'] ?? null)) ? json_encode(($data['link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxIndexResponseIgnoreRenderedAvatars
{
    public function __construct(
        public readonly string $l,
        public readonly string $m,
        public readonly string $s,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['l'] ?? null)) ? (string) ($data['l'] ?? null) : (is_array(($data['l'] ?? null)) ? json_encode(($data['l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['m'] ?? null)) ? (string) ($data['m'] ?? null) : (is_array(($data['m'] ?? null)) ? json_encode(($data['m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['s'] ?? null)) ? (string) ($data['s'] ?? null) : (is_array(($data['s'] ?? null)) ? json_encode(($data['s'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxIndexResponsePermissions
{
    public function __construct(
        public readonly bool $deleteAnyMessage,
        public readonly bool $editAnyMessage,
        public readonly bool $viewAnyMessage,
        public readonly bool $viewMessages,
        public readonly bool $postMessage,
        public readonly bool $ban,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['deleteAnyMessage'] ?? null)) ? (bool) ($data['deleteAnyMessage'] ?? null) : false),
            (is_scalar(($data['editAnyMessage'] ?? null)) ? (bool) ($data['editAnyMessage'] ?? null) : false),
            (is_scalar(($data['viewAnyMessage'] ?? null)) ? (bool) ($data['viewAnyMessage'] ?? null) : false),
            (is_scalar(($data['viewMessages'] ?? null)) ? (bool) ($data['viewMessages'] ?? null) : false),
            (is_scalar(($data['postMessage'] ?? null)) ? (bool) ($data['postMessage'] ?? null) : false),
            (is_scalar(($data['ban'] ?? null)) ? (bool) ($data['ban'] ?? null) : false),
        );
    }
}

final class ChatboxIndexResponseRoomsOnline
{
    public function __construct(
        public readonly int $chat_0,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['chat:0'] ?? null)) ? (int) ($data['chat:0'] ?? null) : 0),
        );
    }
}

final class ChatboxGetMessagesResponse
{
    public function __construct(
        /** @var list<RespChatboxMessageModel> */
        public readonly array $messages,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['messages']) && is_array($data['messages']) ? array_map(static fn(array $item): RespChatboxMessageModel => RespChatboxMessageModel::fromArray($item), $data['messages']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxPostMessageResponse
{
    public function __construct(
        /** @var RespChatboxMessageModel */
        public readonly RespChatboxMessageModel $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['message']) && is_array($data['message']) ? RespChatboxMessageModel::fromArray($data['message']) : RespChatboxMessageModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxEditMessageResponse
{
    public function __construct(
        /** @var RespChatboxMessageModel */
        public readonly RespChatboxMessageModel $message,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['message']) && is_array($data['message']) ? RespChatboxMessageModel::fromArray($data['message']) : RespChatboxMessageModel::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxDeleteMessageResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxOnlineResponse
{
    public function __construct(
        /** @var list<ChatboxOnlineResponseUsers> */
        public readonly array $users,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['users']) && is_array($data['users']) ? array_map(static fn(array $item): ChatboxOnlineResponseUsers => ChatboxOnlineResponseUsers::fromArray($item), $data['users']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxOnlineResponseUsers
{
    public function __construct(
        public readonly int $avatar_date,
        public readonly int $background_date,
        public readonly int $contest_count,
        public readonly string $custom_title,
        public readonly int $display_banner_id,
        public readonly int $display_icon_group_id,
        public readonly int $display_style_group_id,
        public readonly bool $is_admin,
        public readonly bool $is_banned,
        public readonly bool $is_moderator,
        public readonly bool $is_staff,
        public readonly int $last_activity,
        public readonly int $like2_count,
        public readonly int $like_count,
        public readonly int $message_count,
        public readonly int $register_date,
        /** @var ChatboxOnlineResponseUsersRendered */
        public readonly ChatboxOnlineResponseUsersRendered $rendered,
        public readonly string $short_link,
        public readonly int $trophy_points,
        /** @var ChatboxOnlineResponseUsersUniqBanner */
        public readonly ChatboxOnlineResponseUsersUniqBanner $uniq_banner,
        public readonly string $uniq_username_css,
        public readonly int $user_id,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['avatar_date'] ?? null)) ? (int) ($data['avatar_date'] ?? null) : 0),
            (is_scalar(($data['background_date'] ?? null)) ? (int) ($data['background_date'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_banner_id'] ?? null)) ? (int) ($data['display_banner_id'] ?? null) : 0),
            (is_scalar(($data['display_icon_group_id'] ?? null)) ? (int) ($data['display_icon_group_id'] ?? null) : 0),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_admin'] ?? null)) ? (bool) ($data['is_admin'] ?? null) : false),
            (is_scalar(($data['is_banned'] ?? null)) ? (bool) ($data['is_banned'] ?? null) : false),
            (is_scalar(($data['is_moderator'] ?? null)) ? (bool) ($data['is_moderator'] ?? null) : false),
            (is_scalar(($data['is_staff'] ?? null)) ? (bool) ($data['is_staff'] ?? null) : false),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['like2_count'] ?? null)) ? (int) ($data['like2_count'] ?? null) : 0),
            (is_scalar(($data['like_count'] ?? null)) ? (int) ($data['like_count'] ?? null) : 0),
            (is_scalar(($data['message_count'] ?? null)) ? (int) ($data['message_count'] ?? null) : 0),
            (is_scalar(($data['register_date'] ?? null)) ? (int) ($data['register_date'] ?? null) : 0),
            isset($data['rendered']) && is_array($data['rendered']) ? ChatboxOnlineResponseUsersRendered::fromArray($data['rendered']) : ChatboxOnlineResponseUsersRendered::fromArray([]),
            (is_scalar(($data['short_link'] ?? null)) ? (string) ($data['short_link'] ?? null) : (is_array(($data['short_link'] ?? null)) ? json_encode(($data['short_link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['trophy_points'] ?? null)) ? (int) ($data['trophy_points'] ?? null) : 0),
            isset($data['uniq_banner']) && is_array($data['uniq_banner']) ? ChatboxOnlineResponseUsersUniqBanner::fromArray($data['uniq_banner']) : ChatboxOnlineResponseUsersUniqBanner::fromArray([]),
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxOnlineResponseUsersRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxOnlineResponseUsersRenderedAvatars */
        public readonly ChatboxOnlineResponseUsersRenderedAvatars $avatars,
        public readonly string $link,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['avatars']) && is_array($data['avatars']) ? ChatboxOnlineResponseUsersRenderedAvatars::fromArray($data['avatars']) : ChatboxOnlineResponseUsersRenderedAvatars::fromArray([]),
            (is_scalar(($data['link'] ?? null)) ? (string) ($data['link'] ?? null) : (is_array(($data['link'] ?? null)) ? json_encode(($data['link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxOnlineResponseUsersRenderedAvatars
{
    public function __construct(
        public readonly string $l,
        public readonly string $m,
        public readonly string $s,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['l'] ?? null)) ? (string) ($data['l'] ?? null) : (is_array(($data['l'] ?? null)) ? json_encode(($data['l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['m'] ?? null)) ? (string) ($data['m'] ?? null) : (is_array(($data['m'] ?? null)) ? json_encode(($data['m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['s'] ?? null)) ? (string) ($data['s'] ?? null) : (is_array(($data['s'] ?? null)) ? json_encode(($data['s'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxOnlineResponseUsersUniqBanner
{
    public function __construct(
        public readonly string $banner_css,
        public readonly string $banner_text,
        public readonly string $banner_icon,
        public readonly string $username_icon,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['banner_css'] ?? null)) ? (string) ($data['banner_css'] ?? null) : (is_array(($data['banner_css'] ?? null)) ? json_encode(($data['banner_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['banner_text'] ?? null)) ? (string) ($data['banner_text'] ?? null) : (is_array(($data['banner_text'] ?? null)) ? json_encode(($data['banner_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['banner_icon'] ?? null)) ? (string) ($data['banner_icon'] ?? null) : (is_array(($data['banner_icon'] ?? null)) ? json_encode(($data['banner_icon'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username_icon'] ?? null)) ? (string) ($data['username_icon'] ?? null) : (is_array(($data['username_icon'] ?? null)) ? json_encode(($data['username_icon'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxReportReasonsResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $reasons,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['reasons'] ?? [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxGetLeaderboardResponse
{
    public function __construct(
        /** @var list<ChatboxGetLeaderboardResponseLeaderboard> */
        public readonly array $leaderboard,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['leaderboard']) && is_array($data['leaderboard']) ? array_map(static fn(array $item): ChatboxGetLeaderboardResponseLeaderboard => ChatboxGetLeaderboardResponseLeaderboard::fromArray($item), $data['leaderboard']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxGetLeaderboardResponseLeaderboard
{
    public function __construct(
        public readonly int $count,
        public readonly int $user_id,
        public readonly int $avatar_date,
        public readonly int $background_date,
        public readonly int $contest_count,
        public readonly string $custom_title,
        public readonly int $display_banner_id,
        public readonly int $display_icon_group_id,
        public readonly int $display_style_group_id,
        public readonly bool $is_banned,
        public readonly int $last_activity,
        public readonly int $like2_count,
        public readonly int $like_count,
        public readonly int $message_count,
        public readonly int $register_date,
        /** @var ChatboxGetLeaderboardResponseLeaderboardRendered */
        public readonly ChatboxGetLeaderboardResponseLeaderboardRendered $rendered,
        public readonly mixed $short_link,
        public readonly int $trophy_points,
        /** @var ChatboxGetLeaderboardResponseLeaderboardUniqBanner */
        public readonly ChatboxGetLeaderboardResponseLeaderboardUniqBanner $uniq_banner,
        public readonly string $uniq_username_css,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['count'] ?? null)) ? (int) ($data['count'] ?? null) : 0),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['avatar_date'] ?? null)) ? (int) ($data['avatar_date'] ?? null) : 0),
            (is_scalar(($data['background_date'] ?? null)) ? (int) ($data['background_date'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_banner_id'] ?? null)) ? (int) ($data['display_banner_id'] ?? null) : 0),
            (is_scalar(($data['display_icon_group_id'] ?? null)) ? (int) ($data['display_icon_group_id'] ?? null) : 0),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_banned'] ?? null)) ? (bool) ($data['is_banned'] ?? null) : false),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['like2_count'] ?? null)) ? (int) ($data['like2_count'] ?? null) : 0),
            (is_scalar(($data['like_count'] ?? null)) ? (int) ($data['like_count'] ?? null) : 0),
            (is_scalar(($data['message_count'] ?? null)) ? (int) ($data['message_count'] ?? null) : 0),
            (is_scalar(($data['register_date'] ?? null)) ? (int) ($data['register_date'] ?? null) : 0),
            isset($data['rendered']) && is_array($data['rendered']) ? ChatboxGetLeaderboardResponseLeaderboardRendered::fromArray($data['rendered']) : ChatboxGetLeaderboardResponseLeaderboardRendered::fromArray([]),
            $data['short_link'] ?? null,
            (is_scalar(($data['trophy_points'] ?? null)) ? (int) ($data['trophy_points'] ?? null) : 0),
            isset($data['uniq_banner']) && is_array($data['uniq_banner']) ? ChatboxGetLeaderboardResponseLeaderboardUniqBanner::fromArray($data['uniq_banner']) : ChatboxGetLeaderboardResponseLeaderboardUniqBanner::fromArray([]),
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxGetLeaderboardResponseLeaderboardRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxGetLeaderboardResponseLeaderboardRenderedAvatars */
        public readonly ChatboxGetLeaderboardResponseLeaderboardRenderedAvatars $avatars,
        public readonly string $link,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['avatars']) && is_array($data['avatars']) ? ChatboxGetLeaderboardResponseLeaderboardRenderedAvatars::fromArray($data['avatars']) : ChatboxGetLeaderboardResponseLeaderboardRenderedAvatars::fromArray([]),
            (is_scalar(($data['link'] ?? null)) ? (string) ($data['link'] ?? null) : (is_array(($data['link'] ?? null)) ? json_encode(($data['link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxGetLeaderboardResponseLeaderboardRenderedAvatars
{
    public function __construct(
        public readonly string $l,
        public readonly string $m,
        public readonly string $s,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['l'] ?? null)) ? (string) ($data['l'] ?? null) : (is_array(($data['l'] ?? null)) ? json_encode(($data['l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['m'] ?? null)) ? (string) ($data['m'] ?? null) : (is_array(($data['m'] ?? null)) ? json_encode(($data['m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['s'] ?? null)) ? (string) ($data['s'] ?? null) : (is_array(($data['s'] ?? null)) ? json_encode(($data['s'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxGetLeaderboardResponseLeaderboardUniqBanner
{
    public function __construct(
        public readonly string $banner_css,
        public readonly string $banner_text,
        public readonly string $banner_icon,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['banner_css'] ?? null)) ? (string) ($data['banner_css'] ?? null) : (is_array(($data['banner_css'] ?? null)) ? json_encode(($data['banner_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['banner_text'] ?? null)) ? (string) ($data['banner_text'] ?? null) : (is_array(($data['banner_text'] ?? null)) ? json_encode(($data['banner_text'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['banner_icon'] ?? null)) ? (string) ($data['banner_icon'] ?? null) : (is_array(($data['banner_icon'] ?? null)) ? json_encode(($data['banner_icon'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxGetIgnoreResponse
{
    public function __construct(
        /** @var list<ChatboxGetIgnoreResponseIgnored> */
        public readonly array $ignored,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['ignored']) && is_array($data['ignored']) ? array_map(static fn(array $item): ChatboxGetIgnoreResponseIgnored => ChatboxGetIgnoreResponseIgnored::fromArray($item), $data['ignored']) : [],
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class ChatboxGetIgnoreResponseIgnored
{
    public function __construct(
        public readonly int $avatar_date,
        public readonly int $background_date,
        public readonly int $contest_count,
        public readonly string $custom_title,
        public readonly int $display_banner_id,
        public readonly int $display_icon_group_id,
        public readonly int $display_style_group_id,
        public readonly bool $is_banned,
        public readonly int $last_activity,
        public readonly int $like2_count,
        public readonly int $like_count,
        public readonly int $message_count,
        public readonly int $register_date,
        /** @var ChatboxGetIgnoreResponseIgnoredRendered */
        public readonly ChatboxGetIgnoreResponseIgnoredRendered $rendered,
        public readonly mixed $short_link,
        public readonly int $trophy_points,
        public readonly mixed $uniq_banner,
        public readonly string $uniq_username_css,
        public readonly int $user_id,
        public readonly string $username,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['avatar_date'] ?? null)) ? (int) ($data['avatar_date'] ?? null) : 0),
            (is_scalar(($data['background_date'] ?? null)) ? (int) ($data['background_date'] ?? null) : 0),
            (is_scalar(($data['contest_count'] ?? null)) ? (int) ($data['contest_count'] ?? null) : 0),
            (is_scalar(($data['custom_title'] ?? null)) ? (string) ($data['custom_title'] ?? null) : (is_array(($data['custom_title'] ?? null)) ? json_encode(($data['custom_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['display_banner_id'] ?? null)) ? (int) ($data['display_banner_id'] ?? null) : 0),
            (is_scalar(($data['display_icon_group_id'] ?? null)) ? (int) ($data['display_icon_group_id'] ?? null) : 0),
            (is_scalar(($data['display_style_group_id'] ?? null)) ? (int) ($data['display_style_group_id'] ?? null) : 0),
            (is_scalar(($data['is_banned'] ?? null)) ? (bool) ($data['is_banned'] ?? null) : false),
            (is_scalar(($data['last_activity'] ?? null)) ? (int) ($data['last_activity'] ?? null) : 0),
            (is_scalar(($data['like2_count'] ?? null)) ? (int) ($data['like2_count'] ?? null) : 0),
            (is_scalar(($data['like_count'] ?? null)) ? (int) ($data['like_count'] ?? null) : 0),
            (is_scalar(($data['message_count'] ?? null)) ? (int) ($data['message_count'] ?? null) : 0),
            (is_scalar(($data['register_date'] ?? null)) ? (int) ($data['register_date'] ?? null) : 0),
            isset($data['rendered']) && is_array($data['rendered']) ? ChatboxGetIgnoreResponseIgnoredRendered::fromArray($data['rendered']) : ChatboxGetIgnoreResponseIgnoredRendered::fromArray([]),
            $data['short_link'] ?? null,
            (is_scalar(($data['trophy_points'] ?? null)) ? (int) ($data['trophy_points'] ?? null) : 0),
            $data['uniq_banner'] ?? null,
            (is_scalar(($data['uniq_username_css'] ?? null)) ? (string) ($data['uniq_username_css'] ?? null) : (is_array(($data['uniq_username_css'] ?? null)) ? json_encode(($data['uniq_username_css'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['user_id'] ?? null)) ? (int) ($data['user_id'] ?? null) : 0),
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxGetIgnoreResponseIgnoredRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxGetIgnoreResponseIgnoredRenderedAvatars */
        public readonly ChatboxGetIgnoreResponseIgnoredRenderedAvatars $avatars,
        public readonly string $link,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['username'] ?? null)) ? (string) ($data['username'] ?? null) : (is_array(($data['username'] ?? null)) ? json_encode(($data['username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['avatars']) && is_array($data['avatars']) ? ChatboxGetIgnoreResponseIgnoredRenderedAvatars::fromArray($data['avatars']) : ChatboxGetIgnoreResponseIgnoredRenderedAvatars::fromArray([]),
            (is_scalar(($data['link'] ?? null)) ? (string) ($data['link'] ?? null) : (is_array(($data['link'] ?? null)) ? json_encode(($data['link'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxGetIgnoreResponseIgnoredRenderedAvatars
{
    public function __construct(
        public readonly string $l,
        public readonly string $m,
        public readonly string $s,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['l'] ?? null)) ? (string) ($data['l'] ?? null) : (is_array(($data['l'] ?? null)) ? json_encode(($data['l'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['m'] ?? null)) ? (string) ($data['m'] ?? null) : (is_array(($data['m'] ?? null)) ? json_encode(($data['m'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['s'] ?? null)) ? (string) ($data['s'] ?? null) : (is_array(($data['s'] ?? null)) ? json_encode(($data['s'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class ChatboxPostIgnoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxDeleteIgnoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var RespSystemInfo|null */
        public readonly ?RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['status']) ? (is_scalar($data['status']) ? (string) $data['status'] : (is_array($data['status']) ? json_encode($data['status'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['message']) ? (is_scalar($data['message']) ? (string) $data['message'] : (is_array($data['message']) ? json_encode($data['message'], JSON_UNESCAPED_UNICODE) : null)) : null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class FormsListResponse
{
    public function __construct(
        /** @var list<FormsListResponseForms> */
        public readonly array $forms,
        public readonly int $formsPerPage,
        public readonly int $page,
        public readonly int $totalForms,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            isset($data['forms']) && is_array($data['forms']) ? array_map(static fn(array $item): FormsListResponseForms => FormsListResponseForms::fromArray($item), $data['forms']) : [],
            (is_scalar(($data['formsPerPage'] ?? null)) ? (int) ($data['formsPerPage'] ?? null) : 0),
            (is_scalar(($data['page'] ?? null)) ? (int) ($data['page'] ?? null) : 0),
            (is_scalar(($data['totalForms'] ?? null)) ? (int) ($data['totalForms'] ?? null) : 0),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class FormsListResponseForms
{
    public function __construct(
        public readonly int $form_id,
        public readonly string $title,
        public readonly string $description,
        /** @var list<FormsListResponseFormsFields> */
        public readonly array $fields,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['form_id'] ?? null)) ? (int) ($data['form_id'] ?? null) : 0),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['description'] ?? null)) ? (string) ($data['description'] ?? null) : (is_array(($data['description'] ?? null)) ? json_encode(($data['description'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['fields']) && is_array($data['fields']) ? array_map(static fn(array $item): FormsListResponseFormsFields => FormsListResponseFormsFields::fromArray($item), $data['fields']) : [],
        );
    }
}

final class FormsListResponseFormsFields
{
    public function __construct(
        public readonly int $field_id,
        public readonly string $title,
        /** @var FormsListResponseFormsFieldsFieldChoices */
        public readonly FormsListResponseFormsFieldsFieldChoices $fieldChoices,
        public readonly int $required,
        public readonly int $max_length,
        public readonly string $default_value,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['field_id'] ?? null)) ? (int) ($data['field_id'] ?? null) : 0),
            (is_scalar(($data['title'] ?? null)) ? (string) ($data['title'] ?? null) : (is_array(($data['title'] ?? null)) ? json_encode(($data['title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['fieldChoices']) && is_array($data['fieldChoices']) ? FormsListResponseFormsFieldsFieldChoices::fromArray($data['fieldChoices']) : FormsListResponseFormsFieldsFieldChoices::fromArray([]),
            (is_scalar(($data['required'] ?? null)) ? (int) ($data['required'] ?? null) : 0),
            (is_scalar(($data['max_length'] ?? null)) ? (int) ($data['max_length'] ?? null) : 0),
            (is_scalar(($data['default_value'] ?? null)) ? (string) ($data['default_value'] ?? null) : (is_array(($data['default_value'] ?? null)) ? json_encode(($data['default_value'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class FormsListResponseFormsFieldsFieldChoices
{
    public function __construct(
        public readonly string $buy,
        public readonly string $sell,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['buy'] ?? null)) ? (string) ($data['buy'] ?? null) : (is_array(($data['buy'] ?? null)) ? json_encode(($data['buy'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['sell'] ?? null)) ? (string) ($data['sell'] ?? null) : (is_array(($data['sell'] ?? null)) ? json_encode(($data['sell'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class FormsCreateResponse
{
    public function __construct(
        public readonly string $message,
        /** @var FormsCreateResponseContent */
        public readonly FormsCreateResponseContent $content,
        /** @var RespSystemInfo */
        public readonly RespSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['message'] ?? null)) ? (string) ($data['message'] ?? null) : (is_array(($data['message'] ?? null)) ? json_encode(($data['message'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            isset($data['content']) && is_array($data['content']) ? FormsCreateResponseContent::fromArray($data['content']) : FormsCreateResponseContent::fromArray([]),
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : RespSystemInfo::fromArray([]),
        );
    }
}

final class FormsCreateResponseContent
{
    public function __construct(
        public readonly int $thread_id,
        public readonly int $forum_id,
        public readonly string $thread_title,
        public readonly int $thread_view_count,
        public readonly int $creator_user_id,
        public readonly string $creator_username,
        public readonly string $creator_username_html,
        public readonly int $thread_create_date,
        public readonly int $thread_update_date,
        public readonly bool $user_is_ignored,
        public readonly int $thread_post_count,
        public readonly bool $thread_is_published,
        public readonly bool $thread_is_deleted,
        public readonly bool $thread_is_sticky,
        public readonly bool $thread_is_closed,
        public readonly bool $thread_is_followed,
        public readonly array $thread_prefixes,
        public readonly array $thread_tags,
        /** @var FormsCreateResponseContentLinks */
        public readonly FormsCreateResponseContentLinks $links,
        /** @var FormsCreateResponseContentPermissions */
        public readonly FormsCreateResponseContentPermissions $permissions,
        public readonly string $node_title,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['thread_id'] ?? null)) ? (int) ($data['thread_id'] ?? null) : 0),
            (is_scalar(($data['forum_id'] ?? null)) ? (int) ($data['forum_id'] ?? null) : 0),
            (is_scalar(($data['thread_title'] ?? null)) ? (string) ($data['thread_title'] ?? null) : (is_array(($data['thread_title'] ?? null)) ? json_encode(($data['thread_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_view_count'] ?? null)) ? (int) ($data['thread_view_count'] ?? null) : 0),
            (is_scalar(($data['creator_user_id'] ?? null)) ? (int) ($data['creator_user_id'] ?? null) : 0),
            (is_scalar(($data['creator_username'] ?? null)) ? (string) ($data['creator_username'] ?? null) : (is_array(($data['creator_username'] ?? null)) ? json_encode(($data['creator_username'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['creator_username_html'] ?? null)) ? (string) ($data['creator_username_html'] ?? null) : (is_array(($data['creator_username_html'] ?? null)) ? json_encode(($data['creator_username_html'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['thread_create_date'] ?? null)) ? (int) ($data['thread_create_date'] ?? null) : 0),
            (is_scalar(($data['thread_update_date'] ?? null)) ? (int) ($data['thread_update_date'] ?? null) : 0),
            (is_scalar(($data['user_is_ignored'] ?? null)) ? (bool) ($data['user_is_ignored'] ?? null) : false),
            (is_scalar(($data['thread_post_count'] ?? null)) ? (int) ($data['thread_post_count'] ?? null) : 0),
            (is_scalar(($data['thread_is_published'] ?? null)) ? (bool) ($data['thread_is_published'] ?? null) : false),
            (is_scalar(($data['thread_is_deleted'] ?? null)) ? (bool) ($data['thread_is_deleted'] ?? null) : false),
            (is_scalar(($data['thread_is_sticky'] ?? null)) ? (bool) ($data['thread_is_sticky'] ?? null) : false),
            (is_scalar(($data['thread_is_closed'] ?? null)) ? (bool) ($data['thread_is_closed'] ?? null) : false),
            (is_scalar(($data['thread_is_followed'] ?? null)) ? (bool) ($data['thread_is_followed'] ?? null) : false),
            $data['thread_prefixes'] ?? [],
            $data['thread_tags'] ?? [],
            isset($data['links']) && is_array($data['links']) ? FormsCreateResponseContentLinks::fromArray($data['links']) : FormsCreateResponseContentLinks::fromArray([]),
            isset($data['permissions']) && is_array($data['permissions']) ? FormsCreateResponseContentPermissions::fromArray($data['permissions']) : FormsCreateResponseContentPermissions::fromArray([]),
            (is_scalar(($data['node_title'] ?? null)) ? (string) ($data['node_title'] ?? null) : (is_array(($data['node_title'] ?? null)) ? json_encode(($data['node_title'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class FormsCreateResponseContentLinks
{
    public function __construct(
        public readonly string $permalink,
        public readonly string $detail,
        public readonly string $followers,
        public readonly string $forum,
        public readonly string $posts,
        public readonly string $first_poster,
        public readonly string $first_poster_avatar,
        public readonly string $first_post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['permalink'] ?? null)) ? (string) ($data['permalink'] ?? null) : (is_array(($data['permalink'] ?? null)) ? json_encode(($data['permalink'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['detail'] ?? null)) ? (string) ($data['detail'] ?? null) : (is_array(($data['detail'] ?? null)) ? json_encode(($data['detail'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['followers'] ?? null)) ? (string) ($data['followers'] ?? null) : (is_array(($data['followers'] ?? null)) ? json_encode(($data['followers'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['forum'] ?? null)) ? (string) ($data['forum'] ?? null) : (is_array(($data['forum'] ?? null)) ? json_encode(($data['forum'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['posts'] ?? null)) ? (string) ($data['posts'] ?? null) : (is_array(($data['posts'] ?? null)) ? json_encode(($data['posts'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster'] ?? null)) ? (string) ($data['first_poster'] ?? null) : (is_array(($data['first_poster'] ?? null)) ? json_encode(($data['first_poster'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_poster_avatar'] ?? null)) ? (string) ($data['first_poster_avatar'] ?? null) : (is_array(($data['first_poster_avatar'] ?? null)) ? json_encode(($data['first_poster_avatar'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
            (is_scalar(($data['first_post'] ?? null)) ? (string) ($data['first_post'] ?? null) : (is_array(($data['first_post'] ?? null)) ? json_encode(($data['first_post'] ?? null), JSON_UNESCAPED_UNICODE) : '')),
        );
    }
}

final class FormsCreateResponseContentPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            (is_scalar(($data['view'] ?? null)) ? (bool) ($data['view'] ?? null) : false),
            (is_scalar(($data['delete'] ?? null)) ? (bool) ($data['delete'] ?? null) : false),
            (is_scalar(($data['follow'] ?? null)) ? (bool) ($data['follow'] ?? null) : false),
            (is_scalar(($data['post'] ?? null)) ? (bool) ($data['post'] ?? null) : false),
        );
    }
}

