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
            $data['notification_id'],
            $data['notification_create_date'],
            $data['content_type'],
            $data['content_id'],
            $data['content_action'],
            $data['notification_is_unread'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['notification_type'],
            RespNotificationModelLinks::fromArray($data['links']),
            $data['notification_html'],
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
            $data['content'],
            $data['creator_avatar'],
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
            $data['link_id'],
            $data['link_title'],
            $data['link_description'],
            RespLinkModelLinks::fromArray($data['links']),
            RespLinkModelPermissions::fromArray($data['permissions']),
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
            $data['target'],
            $data['detail'],
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
            $data['view'],
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
            $data['can_report'],
            $data['date'],
            $data['is_deleted'],
            $data['message'],
            $data['message_id'],
            $data['messageJson'],
            $data['messageRaw'],
            RespChatboxMessageModelRoom::fromArray($data['room']),
            RespChatboxMessageModelUser::fromArray($data['user']),
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
            $data['can_report'],
            $data['eng'],
            $data['market'],
            $data['room_id'],
            $data['title'],
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
            $data['avatar_date'],
            $data['background_date'],
            $data['contest_count'],
            $data['custom_title'],
            $data['display_banner_id'],
            $data['display_icon_group_id'],
            $data['display_style_group_id'],
            $data['is_admin'],
            $data['is_banned'],
            $data['is_moderator'],
            $data['is_staff'],
            $data['last_activity'],
            $data['like2_count'],
            $data['like_count'],
            $data['message_count'],
            $data['register_date'],
            RespChatboxMessageModelUserRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            RespChatboxMessageModelUserUniqBanner::fromArray($data['uniq_banner']),
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
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
            $data['username'],
            RespChatboxMessageModelUserRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
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
            $data['l'],
            $data['m'],
            $data['s'],
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
            $data['banner_css'],
            $data['banner_text'],
            $data['banner_icon'],
            $data['username_icon'],
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
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['user_message_count'],
            $data['user_register_date'],
            $data['user_like_count'],
            $data['user_like2_count'],
            $data['contest_count'],
            $data['trophy_count'],
            $data['short_link'],
            $data['custom_title'],
            $data['is_banned'],
            $data['display_banner_id'],
            $data['display_icon_group_id'],
            $data['balance'],
            $data['hold'],
            $data['currency'],
            $data['user_email'],
            $data['user_unread_notification_count'],
            $data['user_unread_conversation_count'],
            $data['conv_welcome_message'],
            $data['user_title'],
            $data['user_deposit'],
            $data['user_is_valid'],
            $data['user_is_verified'],
            $data['user_is_followed'],
            $data['user_last_seen_date'],
            RespUserModelLinks::fromArray($data['links']),
            RespUserModelPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn(array $item): RespUserModelUserGroups => RespUserModelUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn(array $item): RespUserModelFields => RespUserModelFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn(array $item): RespUserModelUserExternalAuthentications => RespUserModelUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            RespUserModelSelfPermissions::fromArray($data['self_permissions']),
            RespUserModelEditPermissions::fromArray($data['edit_permissions']),
            RespUserModelBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            RespUserModelUserFollowing::fromArray($data['user_following']),
            RespUserModelUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
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
            $data['permalink'],
            $data['detail'],
            $data['avatar'],
            $data['avatar_big'],
            $data['avatar_small'],
            $data['followers'],
            $data['followings'],
            $data['ignore'],
            $data['background_l'],
            $data['background_m'],
            $data['status'],
            $data['timeline'],
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
            $data['edit'],
            $data['follow'],
            $data['ignore'],
            $data['profile_post'],
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
            $data['user_group_id'],
            $data['user_group_title'],
            $data['user_group_title_en'],
            $data['user_group_banner_css_class'],
            $data['user_group_banner_text'],
            $data['user_group_banner_text_en'],
            $data['display_group_selectable'],
            $data['display_banner_selectable'],
            $data['display_icon_selectable'],
            $data['is_primary_group'],
            $data['user_group_icon_class'],
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
            $data['id'],
            $data['title'],
            $data['description'],
            $data['position'],
            $data['is_required'],
            $data['value'] ?? null,
            $data['is_multi_choice'],
            array_map(static fn(array $item): RespUserModelFieldsChoices => RespUserModelFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
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
            $data['key'],
            $data['value'],
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
            $data['provider'],
            $data['provider_key'],
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
            $data['create_conversation'],
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
            $data['password'],
            $data['user_email'],
            $data['username'],
            $data['user_title'],
            $data['short_link'],
            $data['hide_username_logs'],
            $data['primary_group_id'],
            $data['secondary_group_ids'],
            $data['user_dob_day'],
            $data['user_dob_month'],
            $data['user_dob_year'],
            $data['fields'],
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
            $data['age'],
            RespUserModelBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
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
            $data['date'],
            $data['timezone_type'],
            $data['timezone'],
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
            array_map(static fn(array $item): RespUserModelUserFollowingUsers => RespUserModelUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
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
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['avatar'],
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
            array_map(static fn(array $item): RespUserModelUserFollowersUsers => RespUserModelUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
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
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['avatar'],
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
        /** @var RespThreadModelThreadTags */
        public readonly RespThreadModelThreadTags $thread_tags,
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
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_closed'],
            $data['thread_is_followed'],
            $data['thread_is_starred'],
            RespThreadModelFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            RespThreadModelThreadTags::fromArray($data['thread_tags']),
            RespThreadModelLinks::fromArray($data['links']),
            RespThreadModelPermissions::fromArray($data['permissions']),
            $data['node_title'],
            RespThreadModelRestrictions::fromArray($data['restrictions']),
            RespThreadModelLastPost::fromArray($data['last_post']),
            RespThreadModelContest::fromArray($data['contest']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            $data['post_is_liked'],
            RespThreadModelFirstPostLinks::fromArray($data['links']),
            RespThreadModelFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
        );
    }
}

final class RespThreadModelThreadTags
{
    public function __construct(
        public readonly string $_97491,
        public readonly string $_193431,
        public readonly string $_206,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['97491'],
            $data['193431'],
            $data['206'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['edit'],
            $data['edit_title'],
            $data['edit_tags'],
            RespThreadModelPermissionsBump::fromArray($data['bump']),
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
            $data['can'],
            $data['available_count'],
            $data['error'],
            $data['next_available_time'],
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
            $data['reply_delay'],
            $data['max_reply_count'],
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            $data['post_is_liked'],
            RespThreadModelLastPostLinks::fromArray($data['links']),
            RespThreadModelLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            $data['type'],
            $data['finish_date'],
            $data['now_count_members'],
            $data['needed_members'],
            $data['is_finished'],
            $data['count_winners'],
            $data['require_like_count'],
            $data['require_total_like_count'],
            $data['prize_type'],
            $data['prize_type_phrase'],
            $data['prize_data'],
            $data['is_money_places'],
            $data['chance_to_win'],
            $data['winners'],
            $data['already_participate'],
            RespThreadModelContestPermissions::fromArray($data['permissions']),
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
            $data['can_finish'],
            $data['can_participate'],
            $data['can_participate_error'],
            $data['can_view_user_list'],
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            RespPostModelLinks::fromArray($data['links']),
            RespPostModelPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            $data['post_comment_id'],
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_comment_create_date'],
            $data['post_comment_body'],
            $data['post_comment_body_html'],
            $data['post_comment_body_plain_text'],
            $data['post_comment_like_count'],
            $data['user_is_ignored'],
            $data['post_comment_is_published'],
            $data['post_comment_is_deleted'],
            $data['post_comment_update_date'],
            RespPostCommentModelLinks::fromArray($data['links']),
            RespPostCommentModelPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['post'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            $data['profile_post_id'],
            $data['timeline_user_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['post_like_count'],
            $data['post_comment_count'],
            $data['post_comments_is_disabled'],
            $data['timeline_username'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_is_liked'],
            $data['post_is_sticked'],
            RespProfilePostModelLinks::fromArray($data['links']),
            RespProfilePostModelPermissions::fromArray($data['permissions']),
            RespUserModel::fromArray($data['timeline_user']),
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
            $data['permalink'],
            $data['detail'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['likes'],
            $data['comments'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['like'],
            $data['comment'],
            $data['report'],
            $data['stick'],
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
            $data['comment_id'],
            $data['profile_post_id'],
            $data['comment_user_id'],
            $data['comment_username'],
            $data['comment_username_html'],
            $data['comment_create_date'],
            $data['comment_body'],
            $data['comment_body_html'],
            $data['comment_body_plain_text'],
            $data['user_is_ignored'],
            $data['timeline_user_id'],
            RespProfilePostCommentModelLinks::fromArray($data['links']),
            RespProfilePostCommentModelPermissions::fromArray($data['permissions']),
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
            $data['detail'],
            $data['profile_post'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['delete'],
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
            $data['conversation_id'],
            $data['conversation_title'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['conversation_create_date'],
            $data['conversation_update_date'],
            $data['conversation_last_read_date'],
            $data['conversation_online_count'],
            $data['is_starred'],
            $data['is_group'],
            $data['is_unread'],
            $data['alerts'],
            RespConversationModelPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            RespConversationModelRecipient::fromArray($data['recipient']),
            array_map(static fn(array $item): RespConversationModelRecipients => RespConversationModelRecipients::fromArray($item), $data['recipients']),
            RespConversationModelLinks::fromArray($data['links']),
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
            $data['view'],
            $data['reply'],
            $data['invite'],
            $data['manage_invite_links'],
            $data['kick'],
            $data['upload_avatar'],
            $data['editOwnPost'],
            $data['stickyMessages'],
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
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['last_activity'],
            $data['is_online'],
            $data['contacts_changed'],
            $data['avatar'],
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
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['last_activity'],
            $data['is_online'],
            $data['contacts_changed'],
            $data['avatar'],
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
            $data['permalink'],
            $data['detail'],
            $data['messages'],
            $data['avatar'],
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
            $data['message_id'],
            $data['conversation_id'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['message_create_date'],
            $data['message_is_unread'],
            $data['message_need_translate'],
            $data['message_is_system'],
            $data['message_edit_date'],
            $data['message_body'],
            $data['message_body_html'],
            $data['message_body_plain_text'],
            $data['user_is_ignored'],
            RespConversationMessageModelLinks::fromArray($data['links']),
            RespConversationMessageModelPermissions::fromArray($data['permissions']),
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
            $data['detail'],
            $data['conversation'],
            $data['creator'],
            $data['creator_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['stick-unstick'],
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
            $data['visitor_id'],
            $data['time'],
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
            $data['access_token'],
            $data['token_type'],
            $data['expires_in'],
            $data['refresh_token'] ?? null,
            $data['scope'] ?? null,
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
            $data['contents'],
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): CategoriesListResponseCategories => CategoriesListResponseCategories::fromArray($item), $data['categories']),
            $data['categories_total'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['category_id'],
            $data['category_title'],
            $data['category_description'],
            CategoriesListResponseCategoriesLinks::fromArray($data['links']),
            CategoriesListResponseCategoriesPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
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
            CategoriesGetResponseCategory::fromArray($data['category']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['category_id'],
            $data['category_title'],
            $data['category_description'],
            CategoriesGetResponseCategoryLinks::fromArray($data['links']),
            CategoriesGetResponseCategoryPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
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
            array_map(static fn(array $item): ForumsListResponseForums => ForumsListResponseForums::fromArray($item), $data['forums']),
            $data['forums_total'],
            array_map(static fn(array $item): ForumsListResponseTabs => ForumsListResponseTabs::fromArray($item), $data['tabs']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            array_map(static fn(array $item): ForumsListResponseForumsForumPrefixes => ForumsListResponseForumsForumPrefixes::fromArray($item), $data['forum_prefixes']),
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ForumsListResponseForumsLinks::fromArray($data['links']),
            ForumsListResponseForumsPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['group_title'],
            array_map(static fn(array $item): ForumsListResponseForumsForumPrefixesGroupPrefixes => ForumsListResponseForumsForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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
            $data['prefix_id'],
            $data['prefix_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['link_title'],
            $data['isDefault'],
            $data['title'],
            $data['isHidden'],
        );
    }
}

final class ForumsGroupedResponse
{
    public function __construct(
        /** @var ForumsGroupedResponseData */
        public readonly ForumsGroupedResponseData $data,
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
            ForumsGroupedResponseData::fromArray($data['data']),
            array_map(static fn(array $item): ForumsGroupedResponseTabs => ForumsGroupedResponseTabs::fromArray($item), $data['tabs']),
            RespSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ForumsGroupedResponseData
{
    public function __construct(
        /** @var ForumsGroupedResponseDataData0 */
        public readonly ForumsGroupedResponseDataData0 $_0,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ForumsGroupedResponseDataData0::fromArray($data['0']),
        );
    }
}

final class ForumsGroupedResponseDataData0
{
    public function __construct(
        /** @var ForumsGroupedResponseDataData0Data0 */
        public readonly ForumsGroupedResponseDataData0Data0 $_0,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ForumsGroupedResponseDataData0Data0::fromArray($data['0']),
        );
    }
}

final class ForumsGroupedResponseDataData0Data0
{
    public function __construct(
        public readonly int $forum_id,
        public readonly string $forum_title,
        public readonly string $forum_description,
        public readonly int $forum_thread_count,
        public readonly int $forum_post_count,
        public readonly int $parent_node_id,
        /** @var ForumsGroupedResponseDataData0Data0Links */
        public readonly ForumsGroupedResponseDataData0Data0Links $links,
        /** @var ForumsGroupedResponseDataData0Data0Permissions */
        public readonly ForumsGroupedResponseDataData0Data0Permissions $permissions,
        public readonly bool $forum_is_followed,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['parent_node_id'],
            ForumsGroupedResponseDataData0Data0Links::fromArray($data['links']),
            ForumsGroupedResponseDataData0Data0Permissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
        );
    }
}

final class ForumsGroupedResponseDataData0Data0Links
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
        );
    }
}

final class ForumsGroupedResponseDataData0Data0Permissions
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['link_title'],
            $data['isDefault'],
            $data['title'],
            $data['isHidden'],
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
            ForumsGetResponseForum::fromArray($data['forum']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            array_map(static fn(array $item): ForumsGetResponseForumForumPrefixes => ForumsGetResponseForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ForumsGetResponseForumLinks::fromArray($data['links']),
            ForumsGetResponseForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['group_title'],
            array_map(static fn(array $item): ForumsGetResponseForumForumPrefixesGroupPrefixes => ForumsGetResponseForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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
            $data['prefix_id'],
            $data['prefix_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            array_map(static fn(array $item): ForumsFollowersResponseUsers => ForumsFollowersResponseUsers::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['user_id'],
            $data['username'],
            ForumsFollowersResponseUsersFollow::fromArray($data['follow']),
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
            $data['post'],
            $data['alert'],
            $data['email'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): ForumsFollowedResponseForums => ForumsFollowedResponseForums::fromArray($item), $data['forums']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            array_map(static fn(array $item): ForumsFollowedResponseForumsForumPrefixes => ForumsFollowedResponseForumsForumPrefixes::fromArray($item), $data['forum_prefixes']),
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ForumsFollowedResponseForumsLinks::fromArray($data['links']),
            ForumsFollowedResponseForumsPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
            ForumsFollowedResponseForumsFollow::fromArray($data['follow']),
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
            $data['group_title'],
            array_map(static fn(array $item): ForumsFollowedResponseForumsForumPrefixesGroupPrefixes => ForumsFollowedResponseForumsForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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
            $data['prefix_id'],
            $data['prefix_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['post'],
            $data['alert'],
            $data['email'],
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
            array_map(static fn(array $item): ForumsGetFeedOptionsResponseForums => ForumsGetFeedOptionsResponseForums::fromArray($item), $data['forums']),
            $data['excluded_forums_ids'],
            $data['default_excluded_forums_ids'],
            $data['keywords'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['parent_node_id'],
            ForumsGetFeedOptionsResponseForumsLinks::fromArray($data['links']),
            ForumsGetFeedOptionsResponseForumsPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
            $data['has_children'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespLinkModel => RespLinkModel::fromArray($item), $data['link-forums']),
            $data['link-forums_total'],
            RespSystemInfo::fromArray($data['system_info']),
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
            RespLinkModel::fromArray($data['link-forum']),
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): PagesListResponsePages => PagesListResponsePages::fromArray($item), $data['pages']),
            $data['pages_total'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['page_id'],
            $data['page_title'],
            $data['page_description'],
            PagesListResponsePagesLinks::fromArray($data['links']),
            PagesListResponsePagesPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['sub-pages'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
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
            PagesGetResponsePage::fromArray($data['page']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['page_id'],
            $data['page_title'],
            $data['page_description'],
            $data['page_view_count'],
            PagesGetResponsePageLinks::fromArray($data['links']),
            PagesGetResponsePagePermissions::fromArray($data['permissions']),
            $data['page_html'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-pages'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
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
            array_map(static fn(array $item): NavigationListResponseElements => NavigationListResponseElements::fromArray($item), $data['elements']),
            $data['elements_count'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['category_id'],
            $data['category_title'],
            $data['category_description'],
            NavigationListResponseElementsLinks::fromArray($data['links']),
            NavigationListResponseElementsPermissions::fromArray($data['permissions']),
            $data['navigation_type'],
            $data['navigation_id'],
            $data['navigation_parent_id'],
            $data['has_sub_elements'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['sub-elements'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
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
            array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['threads']),
            ThreadsListResponseForum::fromArray($data['forum']),
            $data['threads_total'],
            ThreadsListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ThreadsListResponseForumLinks::fromArray($data['links']),
            ThreadsListResponseForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            RespThreadModel::fromArray($data['thread']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespThreadModel::fromArray($data['thread']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespThreadModel::fromArray($data['thread']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespThreadModel::fromArray($data['thread']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespThreadModel::fromArray($data['thread']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): ThreadsFollowersResponseUsers => ThreadsFollowersResponseUsers::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['user_id'],
            $data['username'],
            ThreadsFollowersResponseUsersFollow::fromArray($data['follow']),
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
            $data['alert'],
            $data['email'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): ThreadsFollowedResponseThreads => ThreadsFollowedResponseThreads::fromArray($item), $data['threads']),
            $data['threads_total'],
            RespSystemInfo::fromArray($data['system_info']),
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
        /** @var ThreadsFollowedResponseThreadsThreadTags */
        public readonly ThreadsFollowedResponseThreadsThreadTags $thread_tags,
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
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            ThreadsFollowedResponseThreadsFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsFollowedResponseThreadsThreadTags::fromArray($data['thread_tags']),
            ThreadsFollowedResponseThreadsLinks::fromArray($data['links']),
            ThreadsFollowedResponseThreadsPermissions::fromArray($data['permissions']),
            ThreadsFollowedResponseThreadsForum::fromArray($data['forum']),
            ThreadsFollowedResponseThreadsFollow::fromArray($data['follow']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            array_map(static fn(array $item): ThreadsFollowedResponseThreadsFirstPostLikeUsers => ThreadsFollowedResponseThreadsFirstPostLikeUsers::fromArray($item), $data['like_users']),
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            ThreadsFollowedResponseThreadsFirstPostLinks::fromArray($data['links']),
            ThreadsFollowedResponseThreadsFirstPostPermissions::fromArray($data['permissions']),
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
            $data['user_id'],
            $data['username'],
            $data['display_style_group_id'],
            $data['is_banned'],
            $data['uniq_username_css'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
        );
    }
}

final class ThreadsFollowedResponseThreadsThreadTags
{
    public function __construct(
        public readonly string $_1403,
        public readonly string $_8176,
        public readonly string $_38,
        public readonly string $_1953,
        public readonly string $_523,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['1403'],
            $data['8176'],
            $data['38'],
            $data['1953'],
            $data['523'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
            $data['edit_title'],
            $data['edit_tags'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ThreadsFollowedResponseThreadsForumLinks::fromArray($data['links']),
            ThreadsFollowedResponseThreadsForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['alert'],
            $data['email'],
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
            array_map(static fn(array $item): ThreadsNavigationResponseElements => ThreadsNavigationResponseElements::fromArray($item), $data['elements']),
            $data['elements_count'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['category_id'],
            $data['category_title'],
            $data['category_description'],
            ThreadsNavigationResponseElementsLinks::fromArray($data['links']),
            ThreadsNavigationResponseElementsPermissions::fromArray($data['permissions']),
            $data['navigation_type'],
            $data['navigation_id'],
            $data['navigation_depth'],
            $data['navigation_parent_id'],
            $data['has_sub_elements'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['sub-elements'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
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
            ThreadsPollGetResponsePoll::fromArray($data['poll']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['poll_id'],
            $data['poll_question'],
            $data['poll_vote_count'],
            $data['poll_max_votes'],
            $data['poll_is_open'],
            $data['poll_is_voted'],
            array_map(static fn(array $item): ThreadsPollGetResponsePollResponses => ThreadsPollGetResponsePollResponses::fromArray($item), $data['responses']),
            ThreadsPollGetResponsePollPermissions::fromArray($data['permissions']),
            ThreadsPollGetResponsePollLinks::fromArray($data['links']),
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
            $data['response_id'],
            $data['response_answer'],
            $data['response_vote_count'],
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
            $data['vote'],
            $data['result'],
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
            $data['vote'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['threads']),
            array_map(static fn(array $item): ThreadsUnreadResponseData => ThreadsUnreadResponseData::fromArray($item), $data['data']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            ThreadsUnreadResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            $data['thread_tags'],
            ThreadsUnreadResponseDataLinks::fromArray($data['links']),
            ThreadsUnreadResponseDataPermissions::fromArray($data['permissions']),
            ThreadsUnreadResponseDataForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            array_map(static fn(array $item): ThreadsUnreadResponseDataFirstPostLikeUsers => ThreadsUnreadResponseDataFirstPostLikeUsers::fromArray($item), $data['like_users']),
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            ThreadsUnreadResponseDataFirstPostLinks::fromArray($data['links']),
            ThreadsUnreadResponseDataFirstPostPermissions::fromArray($data['permissions']),
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
            $data['user_id'],
            $data['username'],
            $data['display_style_group_id'],
            $data['is_banned'],
            $data['uniq_username_css'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_poster'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ThreadsUnreadResponseDataForumLinks::fromArray($data['links']),
            ThreadsUnreadResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['threads']),
            array_map(static fn(array $item): ThreadsRecentResponseData => ThreadsRecentResponseData::fromArray($item), $data['data']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            ThreadsRecentResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            $data['thread_tags'],
            ThreadsRecentResponseDataLinks::fromArray($data['links']),
            ThreadsRecentResponseDataPermissions::fromArray($data['permissions']),
            ThreadsRecentResponseDataForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            ThreadsRecentResponseDataFirstPostLinks::fromArray($data['links']),
            ThreadsRecentResponseDataFirstPostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_poster'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            ThreadsRecentResponseDataForumLinks::fromArray($data['links']),
            ThreadsRecentResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespThreadModel => RespThreadModel::fromArray($item), $data['posts']),
            RespThreadModel::fromArray($data['thread']),
            $data['posts_total'],
            RespSystemInfo::fromArray($data['system_info']),
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
            RespPostModel::fromArray($data['post']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespPostModel::fromArray($data['post']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespPostModel::fromArray($data['post']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): PostsLikesResponseUsers => PostsLikesResponseUsers::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['user_id'],
            $data['username'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['reasons'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespPostCommentModel => RespPostCommentModel::fromArray($item), $data['comments']),
            RespSystemInfo::fromArray($data['system_info']),
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
            PostsCommentsCreateResponseComment::fromArray($data['comment']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['post_comment_id'],
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_comment_body'],
            $data['post_comment_body_html'],
            $data['post_comment_body_plain_text'],
            $data['post_comment_like_count'],
            $data['user_is_ignored'],
            $data['post_comment_is_published'],
            $data['post_comment_is_deleted'],
            $data['post_comment_update_date'],
            PostsCommentsCreateResponseCommentLinks::fromArray($data['links']),
            PostsCommentsCreateResponseCommentPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['post'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            PostsCommentsEditResponseComment::fromArray($data['comment']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['post_comment_id'],
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_comment_body'],
            $data['post_comment_body_html'],
            $data['post_comment_body_plain_text'],
            $data['post_comment_like_count'],
            $data['user_is_ignored'],
            $data['post_comment_is_published'],
            $data['post_comment_is_deleted'],
            $data['post_comment_update_date'],
            PostsCommentsEditResponseCommentLinks::fromArray($data['links']),
            PostsCommentsEditResponseCommentPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['post'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']),
            $data['users_total'],
            UsersListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            array_map(static fn(array $item): UsersFieldsResponseFields => UsersFieldsResponseFields::fromArray($item), $data['fields']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['id'],
            $data['title'],
            $data['description'],
            $data['position'],
            $data['is_required'],
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
            array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespUserModel::fromArray($data['user']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): UsersClaimsResponseClaims => UsersClaimsResponseClaims::fromArray($item), $data['claims']),
            UsersClaimsResponseStats::fromArray($data['stats']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['thread_id'],
            $data['claim_date'],
            $data['claim_state'],
            $data['message_body'],
            $data['message_body_html'],
            $data['message_body_plain_text'],
            $data['amount'],
            $data['amount_formatted'],
            RespUserModel::fromArray($data['author']),
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
            UsersClaimsResponseStatsMarket::fromArray($data['market']),
            UsersClaimsResponseStatsNoMarket::fromArray($data['noMarket']),
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
            $data['total'],
            $data['solved'],
            $data['settled'],
            $data['rejected'],
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
            $data['total'],
            $data['solved'],
            $data['settled'],
            $data['rejected'],
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): UsersFollowersResponseUsers => UsersFollowersResponseUsers::fromArray($item), $data['users']),
            $data['users_total'],
            UsersFollowersResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['follow_date'],
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['user_message_count'],
            $data['user_register_date'],
            $data['user_like_count'],
            $data['user_like2_count'],
            $data['contest_count'],
            $data['trophy_count'],
            $data['custom_title'],
            $data['is_banned'],
            $data['user_title'],
            $data['user_is_valid'],
            $data['user_is_verified'],
            $data['user_is_followed'],
            $data['user_last_seen_date'],
            $data['user_following_count'],
            $data['user_followers_count'],
            UsersFollowersResponseUsersLinks::fromArray($data['links']),
            UsersFollowersResponseUsersPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            UsersFollowersResponseUsersCustomFields::fromArray($data['custom_fields']),
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
            $data['permalink'],
            $data['detail'],
            $data['avatar'],
            $data['avatar_big'],
            $data['avatar_small'],
            $data['followers'],
            $data['followings'],
            $data['ignore'],
            $data['timeline'],
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
            $data['edit'],
            $data['follow'],
            $data['ignore'],
            $data['profile_post'],
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
            $data['_4'],
            $data['lztInnovation20Link'],
            $data['lztInnovation30Link'],
            $data['lztInnovationLink'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): UsersFollowingsResponseUsers => UsersFollowingsResponseUsers::fromArray($item), $data['users']),
            $data['users_total'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['follow_date'],
            $data['user_id'],
            $data['username'],
            $data['username_html'],
            $data['user_message_count'],
            $data['user_register_date'],
            $data['user_like_count'],
            $data['user_like2_count'],
            $data['contest_count'],
            $data['trophy_count'],
            $data['short_link'],
            $data['custom_title'],
            $data['is_banned'],
            $data['user_title'],
            $data['user_is_valid'],
            $data['user_is_verified'],
            $data['user_is_followed'],
            $data['user_last_seen_date'],
            $data['user_following_count'],
            $data['user_followers_count'],
            UsersFollowingsResponseUsersLinks::fromArray($data['links']),
            UsersFollowingsResponseUsersPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            UsersFollowingsResponseUsersCustomFields::fromArray($data['custom_fields']),
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
            $data['permalink'],
            $data['detail'],
            $data['avatar'],
            $data['avatar_big'],
            $data['avatar_small'],
            $data['followers'],
            $data['followings'],
            $data['ignore'],
            $data['timeline'],
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
            $data['edit'],
            $data['follow'],
            $data['ignore'],
            $data['profile_post'],
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
            $data['_4'],
            $data['allowSelfUnban'],
            $data['discord'],
            $data['github'],
            $data['jabber'],
            $data['lztAwardUserTrophy'],
            $data['lztCuratorNodeTitle'],
            $data['lztCuratorNodeTitleEn'],
            $data['lztDeposit'],
            $data['lztInnovation20Link'],
            $data['lztInnovation30Link'],
            $data['lztInnovationLink'],
            $data['lztLikesIncreasing'],
            $data['lztLikesZeroing'],
            $data['lztSympathyIncreasing'],
            $data['lztSympathyZeroing'],
            $data['maecenasValue'],
            $data['scamURL'],
            $data['steam'],
            $data['telegram'],
            $data['vk'],
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
        /** @var UsersLikesResponseLikes */
        public readonly UsersLikesResponseLikes $likes,
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
            $data['page'],
            $data['perPage'],
            $data['contentType'],
            $data['totalLikes'],
            UsersLikesResponseLikes::fromArray($data['likes']),
            RespSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersLikesResponseLikes
{
    public function __construct(
        /** @var UsersLikesResponseLikesData1234567890 */
        public readonly UsersLikesResponseLikesData1234567890 $_1234567890,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            UsersLikesResponseLikesData1234567890::fromArray($data['1234567890']),
        );
    }
}

final class UsersLikesResponseLikesData1234567890
{
    public function __construct(
        public readonly int $like_id,
        public readonly string $content_type,
        public readonly int $content_id,
        public readonly int $like_user_id,
        public readonly int $like_date,
        public readonly int $content_user_id,
        public readonly string $content_state,
        /** @var RespUserModel */
        public readonly RespUserModel $user,
        /** @var RespUserModel */
        public readonly RespUserModel $actionUser,
        public readonly string $messageHtml,
        public readonly int $post_date,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['like_id'],
            $data['content_type'],
            $data['content_id'],
            $data['like_user_id'],
            $data['like_date'],
            $data['content_user_id'],
            $data['content_state'],
            RespUserModel::fromArray($data['user']),
            RespUserModel::fromArray($data['actionUser']),
            $data['messageHtml'],
            $data['post_date'],
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
            array_map(static fn(array $item): UsersIgnoredResponseUsers => UsersIgnoredResponseUsers::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['can_edit'],
            $data['can_follow'],
            $data['can_ignore'],
            $data['can_post_profile'],
            $data['can_view_profile'],
            $data['can_view_profile_posts'],
            $data['can_warn'],
            $data['contest_count'],
            $data['conv_welcome_message'],
            $data['convertedDeposit'],
            UsersIgnoredResponseUsersCustomFields::fromArray($data['custom_fields']),
            $data['deposit'],
            $data['homepage'],
            UsersIgnoredResponseUsersIgnoredInfo::fromArray($data['ignored_info']),
            $data['is_admin'],
            $data['is_banned'],
            $data['is_followed'],
            $data['is_ignored'],
            $data['is_moderator'],
            $data['is_staff'],
            $data['last_activity'],
            $data['like2_count'],
            $data['like_count'],
            $data['location'],
            $data['message_count'],
            $data['register_date'],
            UsersIgnoredResponseUsersRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            $data['user_id'],
            $data['user_title'],
            $data['username'],
            $data['view_url'],
            $data['warning_points'],
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
            $data['_4'],
            $data['scamURL'],
            $data['lztLikesZeroing'],
            $data['lztLikesIncreasing'],
            $data['lztSympathyZeroing'],
            $data['lztSympathyIncreasing'],
            $data['telegram'],
            $data['vk'],
            $data['discord'],
            $data['steam'],
            $data['matrix'],
            $data['jabber'],
            $data['github'],
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
            $data['ignore_content'],
            $data['ignore_conversations'],
            $data['restrict_view_profile'],
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
            $data['username'],
            UsersIgnoredResponseUsersRenderedAvatars::fromArray($data['avatars']),
            $data['backgrounds'],
            $data['link'],
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
            $data['l'],
            $data['m'],
            $data['s'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): UsersContentsResponseData => UsersContentsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            RespUserModel::fromArray($data['user']),
            UsersContentsResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            array_map(static fn(array $item): UsersContentsResponseDataLikeUsers => UsersContentsResponseDataLikeUsers::fromArray($item), $data['like_users']),
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            UsersContentsResponseDataLinks::fromArray($data['links']),
            UsersContentsResponseDataPermissions::fromArray($data['permissions']),
            UsersContentsResponseDataThread::fromArray($data['thread']),
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
            $data['user_id'],
            $data['username'],
            $data['display_style_group_id'],
            $data['is_banned'],
            $data['uniq_username_css'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
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
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            $data['thread_prefixes'],
            $data['thread_tags'],
            UsersContentsResponseDataThreadLinks::fromArray($data['links']),
            UsersContentsResponseDataThreadPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_poster'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            array_map(static fn(array $item): UsersTrophiesResponseTrophies => UsersTrophiesResponseTrophies::fromArray($item), $data['trophies']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['trophy_id'],
            $data['title'],
            $data['description'],
            $data['trophy_url'],
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
            array_map(static fn(array $item): UsersSecretAnswerTypesResponseData => UsersSecretAnswerTypesResponseData::fromArray($item), $data['data']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['sa_id'],
            $data['renderedPhrase'],
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
            $data['success'],
            $data['waiting_time'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespProfilePostModel => RespProfilePostModel::fromArray($item), $data['profile_posts']),
            $data['totalProfilePosts'],
            $data['canPostOnProfile'],
            ProfilePostsListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            RespProfilePostModel::fromArray($data['profile_post']),
            RespSystemInfo::fromArray($data['system_info']),
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
            ProfilePostsEditResponseProfilePost::fromArray($data['profile_post']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['profile_post_id'],
            $data['timeline_user_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_like_count'],
            $data['post_comment_count'],
            $data['timeline_username'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            ProfilePostsEditResponseProfilePostLinks::fromArray($data['links']),
            ProfilePostsEditResponseProfilePostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['likes'],
            $data['comments'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['like'],
            $data['comment'],
            $data['report'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['reasons'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            ProfilePostsCreateResponseProfilePost::fromArray($data['profile_post']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['profile_post_id'],
            $data['timeline_user_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_like_count'],
            $data['post_comment_count'],
            $data['timeline_username'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            ProfilePostsCreateResponseProfilePostLinks::fromArray($data['links']),
            ProfilePostsCreateResponseProfilePostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['likes'],
            $data['comments'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['like'],
            $data['comment'],
            $data['report'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): ProfilePostsLikesResponseUsers => ProfilePostsLikesResponseUsers::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['user_id'],
            $data['username'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespProfilePostCommentModel => RespProfilePostCommentModel::fromArray($item), $data['comments']),
            $data['comments_total'],
            ProfilePostsCommentsListResponseProfilePost::fromArray($data['profile_post']),
            RespUserModel::fromArray($data['timeline_user']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['profile_post_id'],
            $data['timeline_user_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_like_count'],
            $data['post_comment_count'],
            $data['timeline_username'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            ProfilePostsCommentsListResponseProfilePostLinks::fromArray($data['links']),
            ProfilePostsCommentsListResponseProfilePostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['likes'],
            $data['comments'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['like'],
            $data['comment'],
            $data['report'],
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
            ProfilePostsCommentsCreateResponseComment::fromArray($data['comment']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['comment_id'],
            $data['profile_post_id'],
            $data['comment_user_id'],
            $data['comment_username'],
            $data['comment_username_html'],
            $data['comment_create_date'],
            $data['comment_body'],
            $data['user_is_ignored'],
            $data['timeline_user_id'],
            ProfilePostsCommentsCreateResponseCommentLinks::fromArray($data['links']),
            ProfilePostsCommentsCreateResponseCommentPermissions::fromArray($data['permissions']),
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
            $data['detail'],
            $data['profile_post'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['delete'],
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
            ProfilePostsCommentsEditResponseComment::fromArray($data['comment']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['comment_id'],
            $data['profile_post_id'],
            $data['comment_user_id'],
            $data['comment_username'],
            $data['comment_username_html'],
            $data['comment_create_date'],
            $data['comment_body'],
            $data['user_is_ignored'],
            $data['timeline_user_id'],
            ProfilePostsCommentsEditResponseCommentLinks::fromArray($data['links']),
            ProfilePostsCommentsEditResponseCommentPermissions::fromArray($data['permissions']),
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
            $data['detail'],
            $data['profile_post'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['delete'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            RespProfilePostCommentModel::fromArray($data['comment']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): RespConversationModel => RespConversationModel::fromArray($item), $data['conversations']),
            $data['can_start'],
            array_map(static fn(array $item): ConversationsListResponseFolders => ConversationsListResponseFolders::fromArray($item), $data['folders']),
            ConversationsListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['id'],
            $data['title'],
            $data['name'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            RespConversationModel::fromArray($data['conversation']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespConversationModel::fromArray($data['conversation']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            RespConversationModel::fromArray($data['conversation']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            RespConversationModel::fromArray($data['conversation']),
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): RespConversationMessageModel => RespConversationMessageModel::fromArray($item), $data['messages']),
            $data['messages_total'],
            ConversationsMessagesListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            RespConversationMessageModel::fromArray($data['message']),
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): RespConversationModel => RespConversationModel::fromArray($item), $data['conversations']),
            $data['recipients'],
            RespSystemInfo::fromArray($data['system_info']),
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
            RespConversationModel::fromArray($data['message']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespConversationModel::fromArray($data['message']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'],
            $data['message'],
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): RespNotificationModel => RespNotificationModel::fromArray($item), $data['notifications']),
            $data['notifications_total'],
            NotificationsListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['read'],
            $data['pages'],
            $data['page'],
            $data['next'],
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
            $data['notification_id'],
            RespNotificationModel::fromArray($data['notification']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
            isset($data['system_info']) && is_array($data['system_info']) ? RespSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class TagsPopularResponse
{
    public function __construct(
        /** @var TagsPopularResponseTags */
        public readonly TagsPopularResponseTags $tags,
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
            TagsPopularResponseTags::fromArray($data['tags']),
            RespSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class TagsPopularResponseTags
{
    public function __construct(
        public readonly string $_000,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['000'],
        );
    }
}

final class TagsListResponse
{
    public function __construct(
        /** @var TagsListResponseTags */
        public readonly TagsListResponseTags $tags,
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
            TagsListResponseTags::fromArray($data['tags']),
            $data['tags_total'],
            TagsListResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class TagsListResponseTags
{
    public function __construct(
        public readonly string $_1,
        public readonly string $_2,
        public readonly string $_3,
        public readonly string $_4,
        public readonly string $_5,
        public readonly string $_6,
        public readonly string $_7,
        public readonly string $_8,
        public readonly string $_9,
        public readonly string $_10,
        public readonly string $_11,
        public readonly string $_12,
        public readonly string $_14,
        public readonly string $_15,
        public readonly string $_16,
        public readonly string $_17,
        public readonly string $_18,
        public readonly string $_19,
        public readonly string $_20,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['1'],
            $data['2'],
            $data['3'],
            $data['4'],
            $data['5'],
            $data['6'],
            $data['7'],
            $data['8'],
            $data['9'],
            $data['10'],
            $data['11'],
            $data['12'],
            $data['14'],
            $data['15'],
            $data['16'],
            $data['17'],
            $data['18'],
            $data['19'],
            $data['20'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            TagsGetResponseTag::fromArray($data['tag']),
            array_map(static fn(array $item): TagsGetResponseTagged => TagsGetResponseTagged::fromArray($item), $data['tagged']),
            $data['tagged_total'],
            TagsGetResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['tag_id'],
            $data['tag_text'],
            $data['tag_use_count'],
            TagsGetResponseTagLinks::fromArray($data['links']),
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
            $data['permalink'],
            $data['detail'],
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
        /** @var TagsGetResponseTaggedThreadTags */
        public readonly TagsGetResponseTaggedThreadTags $thread_tags,
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            TagsGetResponseTaggedFirstPost::fromArray($data['first_post']),
            array_map(static fn(array $item): TagsGetResponseTaggedThreadPrefixes => TagsGetResponseTaggedThreadPrefixes::fromArray($item), $data['thread_prefixes']),
            TagsGetResponseTaggedThreadTags::fromArray($data['thread_tags']),
            TagsGetResponseTaggedLinks::fromArray($data['links']),
            TagsGetResponseTaggedPermissions::fromArray($data['permissions']),
            TagsGetResponseTaggedForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            TagsGetResponseTaggedFirstPostLinks::fromArray($data['links']),
            TagsGetResponseTaggedFirstPostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
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
            $data['prefix_id'],
            $data['prefix_title'],
        );
    }
}

final class TagsGetResponseTaggedThreadTags
{
    public function __construct(
        public readonly string $_1,
        public readonly string $_654,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['1'],
            $data['654'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_poster'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            array_map(static fn(array $item): TagsGetResponseTaggedForumForumPrefixes => TagsGetResponseTaggedForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            TagsGetResponseTaggedForumLinks::fromArray($data['links']),
            TagsGetResponseTaggedForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['group_title'],
            array_map(static fn(array $item): TagsGetResponseTaggedForumForumPrefixesGroupPrefixes => TagsGetResponseTaggedForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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
            $data['prefix_id'],
            $data['prefix_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            $data['tags'],
            $data['ids'],
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): SearchAllResponseData => SearchAllResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']),
            SearchAllResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_closed'],
            $data['thread_is_followed'],
            $data['thread_is_starred'],
            SearchAllResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            $data['thread_tags'],
            SearchAllResponseDataLinks::fromArray($data['links']),
            SearchAllResponseDataPermissions::fromArray($data['permissions']),
            $data['node_title'],
            SearchAllResponseDataForum::fromArray($data['forum']),
            SearchAllResponseDataLastPost::fromArray($data['last_post']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            $data['post_is_liked'],
            SearchAllResponseDataFirstPostLinks::fromArray($data['links']),
            SearchAllResponseDataFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_poster'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['edit'],
            SearchAllResponseDataPermissionsBump::fromArray($data['bump']),
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
            $data['can'],
            $data['available_count'],
            $data['error'],
            $data['next_available_time'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['parent_node_id'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            SearchAllResponseDataForumLinks::fromArray($data['links']),
            SearchAllResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            $data['post_is_liked'],
            SearchAllResponseDataLastPostLinks::fromArray($data['links']),
            SearchAllResponseDataLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            array_map(static fn(array $item): SearchThreadsResponseData => SearchThreadsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchThreadsResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            SearchThreadsResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            $data['thread_tags'],
            SearchThreadsResponseDataLinks::fromArray($data['links']),
            SearchThreadsResponseDataPermissions::fromArray($data['permissions']),
            SearchThreadsResponseDataForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            SearchThreadsResponseDataFirstPostLinks::fromArray($data['links']),
            SearchThreadsResponseDataFirstPostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            SearchThreadsResponseDataForumLinks::fromArray($data['links']),
            SearchThreadsResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            array_map(static fn(array $item): SearchPostsResponseData => SearchPostsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchPostsResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            SearchPostsResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            $data['thread_tags'],
            SearchPostsResponseDataLinks::fromArray($data['links']),
            SearchPostsResponseDataPermissions::fromArray($data['permissions']),
            SearchPostsResponseDataForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            SearchPostsResponseDataFirstPostLinks::fromArray($data['links']),
            SearchPostsResponseDataFirstPostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            $data['forum_prefixes'],
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            SearchPostsResponseDataForumLinks::fromArray($data['links']),
            SearchPostsResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
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
            array_map(static fn(array $item): RespUserModel => RespUserModel::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn(array $item): SearchProfilePostsResponseData => SearchProfilePostsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchProfilePostsResponseLinks::fromArray($data['links']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['content_type'],
            $data['content_id'],
            $data['profile_post_id'],
            $data['timeline_user_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_like_count'],
            $data['post_comment_count'],
            $data['timeline_username'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            SearchProfilePostsResponseDataLinks::fromArray($data['links']),
            SearchProfilePostsResponseDataPermissions::fromArray($data['permissions']),
            RespUserModel::fromArray($data['timeline_user']),
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
            $data['permalink'],
            $data['detail'],
            $data['timeline'],
            $data['timeline_user'],
            $data['poster'],
            $data['likes'],
            $data['comments'],
            $data['report'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['like'],
            $data['comment'],
            $data['report'],
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
            $data['pages'],
            $data['page'],
            $data['next'],
        );
    }
}

final class SearchTaggedResponse
{
    public function __construct(
        /** @var list<SearchTaggedResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchTaggedResponseSearchTags */
        public readonly SearchTaggedResponseSearchTags $search_tags,
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
            array_map(static fn(array $item): SearchTaggedResponseData => SearchTaggedResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchTaggedResponseSearchTags::fromArray($data['search_tags']),
            RespSystemInfo::fromArray($data['system_info']),
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
        /** @var SearchTaggedResponseDataThreadTags */
        public readonly SearchTaggedResponseDataThreadTags $thread_tags,
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            SearchTaggedResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            SearchTaggedResponseDataThreadTags::fromArray($data['thread_tags']),
            SearchTaggedResponseDataLinks::fromArray($data['links']),
            SearchTaggedResponseDataPermissions::fromArray($data['permissions']),
            SearchTaggedResponseDataForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            SearchTaggedResponseDataFirstPostLinks::fromArray($data['links']),
            SearchTaggedResponseDataFirstPostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
        );
    }
}

final class SearchTaggedResponseDataThreadTags
{
    public function __construct(
        public readonly string $_160179,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['160179'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
            $data['edit_title'],
            $data['edit_tags'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            array_map(static fn(array $item): SearchTaggedResponseDataForumForumPrefixes => SearchTaggedResponseDataForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            SearchTaggedResponseDataForumLinks::fromArray($data['links']),
            SearchTaggedResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['group_title'],
            array_map(static fn(array $item): SearchTaggedResponseDataForumForumPrefixesGroupPrefixes => SearchTaggedResponseDataForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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
            $data['prefix_id'],
            $data['prefix_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
        );
    }
}

final class SearchTaggedResponseSearchTags
{
    public function __construct(
        public readonly string $_160179,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['160179'],
        );
    }
}

final class SearchResultsResponse
{
    public function __construct(
        /** @var list<SearchResultsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchResultsResponseSearchTags */
        public readonly SearchResultsResponseSearchTags $search_tags,
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
            array_map(static fn(array $item): SearchResultsResponseData => SearchResultsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchResultsResponseSearchTags::fromArray($data['search_tags']),
            RespSystemInfo::fromArray($data['system_info']),
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
        /** @var SearchResultsResponseDataThreadTags */
        public readonly SearchResultsResponseDataThreadTags $thread_tags,
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
            $data['content_type'],
            $data['content_id'],
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_followed'],
            SearchResultsResponseDataFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            SearchResultsResponseDataThreadTags::fromArray($data['thread_tags']),
            SearchResultsResponseDataLinks::fromArray($data['links']),
            SearchResultsResponseDataPermissions::fromArray($data['permissions']),
            SearchResultsResponseDataForum::fromArray($data['forum']),
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
            $data['post_id'],
            $data['thread_id'],
            $data['poster_user_id'],
            $data['poster_username'],
            $data['poster_username_html'],
            $data['post_create_date'],
            $data['post_body'],
            $data['post_body_html'],
            $data['post_body_plain_text'],
            $data['signature'],
            $data['signature_html'],
            $data['signature_plain_text'],
            $data['post_like_count'],
            $data['post_attachment_count'],
            $data['user_is_ignored'],
            $data['post_is_published'],
            $data['post_is_deleted'],
            $data['post_update_date'],
            $data['post_is_first_post'],
            SearchResultsResponseDataFirstPostLinks::fromArray($data['links']),
            SearchResultsResponseDataFirstPostPermissions::fromArray($data['permissions']),
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
            $data['permalink'],
            $data['detail'],
            $data['thread'],
            $data['poster'],
            $data['likes'],
            $data['report'],
            $data['attachments'],
            $data['poster_avatar'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['reply'],
            $data['like'],
            $data['report'],
            $data['upload_attachment'],
        );
    }
}

final class SearchResultsResponseDataThreadTags
{
    public function __construct(
        public readonly string $_160179,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['160179'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
            $data['last_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
            $data['upload_attachment'],
            $data['edit'],
            $data['edit_title'],
            $data['edit_tags'],
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
            $data['forum_id'],
            $data['forum_title'],
            $data['forum_description'],
            $data['forum_thread_count'],
            $data['forum_post_count'],
            array_map(static fn(array $item): SearchResultsResponseDataForumForumPrefixes => SearchResultsResponseDataForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
            $data['thread_default_prefix_id'],
            $data['thread_prefix_is_required'],
            SearchResultsResponseDataForumLinks::fromArray($data['links']),
            SearchResultsResponseDataForumPermissions::fromArray($data['permissions']),
            $data['forum_is_followed'],
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
            $data['group_title'],
            array_map(static fn(array $item): SearchResultsResponseDataForumForumPrefixesGroupPrefixes => SearchResultsResponseDataForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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
            $data['prefix_id'],
            $data['prefix_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['sub-categories'],
            $data['sub-forums'],
            $data['threads'],
            $data['followers'],
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
            $data['view'],
            $data['edit'],
            $data['delete'],
            $data['create_thread'],
            $data['upload_attachment'],
            $data['tag_thread'],
            $data['follow'],
        );
    }
}

final class SearchResultsResponseSearchTags
{
    public function __construct(
        public readonly string $_160179,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['160179'],
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
            BatchExecuteResponseJobs::fromArray($data['jobs']),
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
            $data['job_id'],
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
            array_map(static fn(array $item): ChatboxIndexResponseRooms => ChatboxIndexResponseRooms::fromArray($item), $data['rooms']),
            $data['ban'],
            array_map(static fn(array $item): ChatboxIndexResponseIgnore => ChatboxIndexResponseIgnore::fromArray($item), $data['ignore']),
            ChatboxIndexResponsePermissions::fromArray($data['permissions']),
            $data['commands'],
            ChatboxIndexResponseRoomsOnline::fromArray($data['roomsOnline']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['can_report'],
            $data['eng'],
            $data['market'],
            $data['room_id'],
            $data['title'],
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
            $data['avatar_date'],
            $data['background_date'],
            $data['contest_count'],
            $data['custom_title'],
            $data['display_banner_id'],
            $data['display_icon_group_id'],
            $data['display_style_group_id'],
            $data['is_admin'],
            $data['is_banned'],
            $data['is_moderator'],
            $data['is_staff'],
            $data['last_activity'],
            $data['like2_count'],
            $data['like_count'],
            $data['message_count'],
            $data['register_date'],
            ChatboxIndexResponseIgnoreRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            $data['uniq_banner'],
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
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
            $data['username'],
            ChatboxIndexResponseIgnoreRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
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
            $data['l'],
            $data['m'],
            $data['s'],
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
            $data['deleteAnyMessage'],
            $data['editAnyMessage'],
            $data['viewAnyMessage'],
            $data['viewMessages'],
            $data['postMessage'],
            $data['ban'],
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
            $data['chat:0'],
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
            array_map(static fn(array $item): RespChatboxMessageModel => RespChatboxMessageModel::fromArray($item), $data['messages']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespChatboxMessageModel::fromArray($data['message']),
            RespSystemInfo::fromArray($data['system_info']),
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
            RespChatboxMessageModel::fromArray($data['message']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): ChatboxOnlineResponseUsers => ChatboxOnlineResponseUsers::fromArray($item), $data['users']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['avatar_date'],
            $data['background_date'],
            $data['contest_count'],
            $data['custom_title'],
            $data['display_banner_id'],
            $data['display_icon_group_id'],
            $data['display_style_group_id'],
            $data['is_admin'],
            $data['is_banned'],
            $data['is_moderator'],
            $data['is_staff'],
            $data['last_activity'],
            $data['like2_count'],
            $data['like_count'],
            $data['message_count'],
            $data['register_date'],
            ChatboxOnlineResponseUsersRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            ChatboxOnlineResponseUsersUniqBanner::fromArray($data['uniq_banner']),
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
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
            $data['username'],
            ChatboxOnlineResponseUsersRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
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
            $data['l'],
            $data['m'],
            $data['s'],
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
            $data['banner_css'],
            $data['banner_text'],
            $data['banner_icon'],
            $data['username_icon'],
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
            $data['reasons'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): ChatboxGetLeaderboardResponseLeaderboard => ChatboxGetLeaderboardResponseLeaderboard::fromArray($item), $data['leaderboard']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['count'],
            $data['user_id'],
            $data['avatar_date'],
            $data['background_date'],
            $data['contest_count'],
            $data['custom_title'],
            $data['display_banner_id'],
            $data['display_icon_group_id'],
            $data['display_style_group_id'],
            $data['is_banned'],
            $data['last_activity'],
            $data['like2_count'],
            $data['like_count'],
            $data['message_count'],
            $data['register_date'],
            ChatboxGetLeaderboardResponseLeaderboardRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            ChatboxGetLeaderboardResponseLeaderboardUniqBanner::fromArray($data['uniq_banner']),
            $data['uniq_username_css'],
            $data['username'],
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
            $data['username'],
            ChatboxGetLeaderboardResponseLeaderboardRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
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
            $data['l'],
            $data['m'],
            $data['s'],
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
            $data['banner_css'],
            $data['banner_text'],
            $data['banner_icon'],
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
            array_map(static fn(array $item): ChatboxGetIgnoreResponseIgnored => ChatboxGetIgnoreResponseIgnored::fromArray($item), $data['ignored']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['avatar_date'],
            $data['background_date'],
            $data['contest_count'],
            $data['custom_title'],
            $data['display_banner_id'],
            $data['display_icon_group_id'],
            $data['display_style_group_id'],
            $data['is_banned'],
            $data['last_activity'],
            $data['like2_count'],
            $data['like_count'],
            $data['message_count'],
            $data['register_date'],
            ChatboxGetIgnoreResponseIgnoredRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            $data['uniq_banner'],
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
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
            $data['username'],
            ChatboxGetIgnoreResponseIgnoredRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
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
            $data['l'],
            $data['m'],
            $data['s'],
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            $data['status'] ?? null,
            $data['message'] ?? null,
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
            array_map(static fn(array $item): FormsListResponseForms => FormsListResponseForms::fromArray($item), $data['forms']),
            $data['formsPerPage'],
            $data['page'],
            $data['totalForms'],
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['form_id'],
            $data['title'],
            $data['description'],
            array_map(static fn(array $item): FormsListResponseFormsFields => FormsListResponseFormsFields::fromArray($item), $data['fields']),
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
            $data['field_id'],
            $data['title'],
            FormsListResponseFormsFieldsFieldChoices::fromArray($data['fieldChoices']),
            $data['required'],
            $data['max_length'],
            $data['default_value'],
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
            $data['buy'],
            $data['sell'],
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
            $data['message'],
            FormsCreateResponseContent::fromArray($data['content']),
            RespSystemInfo::fromArray($data['system_info']),
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
            $data['thread_id'],
            $data['forum_id'],
            $data['thread_title'],
            $data['thread_view_count'],
            $data['creator_user_id'],
            $data['creator_username'],
            $data['creator_username_html'],
            $data['thread_create_date'],
            $data['thread_update_date'],
            $data['user_is_ignored'],
            $data['thread_post_count'],
            $data['thread_is_published'],
            $data['thread_is_deleted'],
            $data['thread_is_sticky'],
            $data['thread_is_closed'],
            $data['thread_is_followed'],
            $data['thread_prefixes'],
            $data['thread_tags'],
            FormsCreateResponseContentLinks::fromArray($data['links']),
            FormsCreateResponseContentPermissions::fromArray($data['permissions']),
            $data['node_title'],
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
            $data['permalink'],
            $data['detail'],
            $data['followers'],
            $data['forum'],
            $data['posts'],
            $data['first_poster'],
            $data['first_poster_avatar'],
            $data['first_post'],
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
            $data['view'],
            $data['delete'],
            $data['follow'],
            $data['post'],
        );
    }
}

