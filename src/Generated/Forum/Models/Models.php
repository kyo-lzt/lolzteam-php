<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum\Models;

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
        /** @var AssetsCssResponseSystemInfo */
        public readonly AssetsCssResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['contents'],
            AssetsCssResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class AssetsCssResponseSystemInfo
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

final class CategoriesListResponse
{
    public function __construct(
        /** @var list<CategoriesListResponseCategories> */
        public readonly array $categories,
        public readonly int $categories_total,
        /** @var CategoriesListResponseSystemInfo */
        public readonly CategoriesListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): CategoriesListResponseCategories => CategoriesListResponseCategories::fromArray($item), $data['categories']),
            $data['categories_total'],
            CategoriesListResponseSystemInfo::fromArray($data['system_info']),
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

final class CategoriesListResponseSystemInfo
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

final class CategoriesGetResponse
{
    public function __construct(
        /** @var CategoriesGetResponseCategory */
        public readonly CategoriesGetResponseCategory $category,
        /** @var CategoriesGetResponseSystemInfo */
        public readonly CategoriesGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            CategoriesGetResponseCategory::fromArray($data['category']),
            CategoriesGetResponseSystemInfo::fromArray($data['system_info']),
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

final class CategoriesGetResponseSystemInfo
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

final class ForumsListResponse
{
    public function __construct(
        /** @var list<ForumsListResponseForums> */
        public readonly array $forums,
        public readonly int $forums_total,
        /** @var list<ForumsListResponseTabs> */
        public readonly array $tabs,
        /** @var ForumsListResponseSystemInfo */
        public readonly ForumsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ForumsListResponseForums => ForumsListResponseForums::fromArray($item), $data['forums']),
            $data['forums_total'],
            array_map(static fn (array $item): ForumsListResponseTabs => ForumsListResponseTabs::fromArray($item), $data['tabs']),
            ForumsListResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): ForumsListResponseForumsForumPrefixes => ForumsListResponseForumsForumPrefixes::fromArray($item), $data['forum_prefixes']),
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
            array_map(static fn (array $item): ForumsListResponseForumsForumPrefixesGroupPrefixes => ForumsListResponseForumsForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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

final class ForumsListResponseSystemInfo
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

final class ForumsGroupedResponse
{
    public function __construct(
        /** @var ForumsGroupedResponseData */
        public readonly ForumsGroupedResponseData $data,
        /** @var list<ForumsGroupedResponseTabs> */
        public readonly array $tabs,
        /** @var ForumsGroupedResponseSystemInfo */
        public readonly ForumsGroupedResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ForumsGroupedResponseData::fromArray($data['data']),
            array_map(static fn (array $item): ForumsGroupedResponseTabs => ForumsGroupedResponseTabs::fromArray($item), $data['tabs']),
            ForumsGroupedResponseSystemInfo::fromArray($data['system_info']),
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

final class ForumsGroupedResponseSystemInfo
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

final class ForumsGetResponse
{
    public function __construct(
        /** @var ForumsGetResponseForum */
        public readonly ForumsGetResponseForum $forum,
        /** @var ForumsGetResponseSystemInfo */
        public readonly ForumsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ForumsGetResponseForum::fromArray($data['forum']),
            ForumsGetResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): ForumsGetResponseForumForumPrefixes => ForumsGetResponseForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
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
            array_map(static fn (array $item): ForumsGetResponseForumForumPrefixesGroupPrefixes => ForumsGetResponseForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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

final class ForumsGetResponseSystemInfo
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

final class ForumsFollowersResponse
{
    public function __construct(
        /** @var list<ForumsFollowersResponseUsers> */
        public readonly array $users,
        /** @var ForumsFollowersResponseSystemInfo */
        public readonly ForumsFollowersResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ForumsFollowersResponseUsers => ForumsFollowersResponseUsers::fromArray($item), $data['users']),
            ForumsFollowersResponseSystemInfo::fromArray($data['system_info']),
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

final class ForumsFollowersResponseSystemInfo
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

final class ForumsFollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ForumsFollowResponseSystemInfo|null */
        public readonly ?ForumsFollowResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ForumsFollowResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ForumsFollowResponseSystemInfo
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

final class ForumsUnfollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ForumsUnfollowResponseSystemInfo|null */
        public readonly ?ForumsUnfollowResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ForumsUnfollowResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ForumsUnfollowResponseSystemInfo
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

final class ForumsFollowedResponse
{
    public function __construct(
        /** @var list<ForumsFollowedResponseForums> */
        public readonly array $forums,
        /** @var ForumsFollowedResponseSystemInfo */
        public readonly ForumsFollowedResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ForumsFollowedResponseForums => ForumsFollowedResponseForums::fromArray($item), $data['forums']),
            ForumsFollowedResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): ForumsFollowedResponseForumsForumPrefixes => ForumsFollowedResponseForumsForumPrefixes::fromArray($item), $data['forum_prefixes']),
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
            array_map(static fn (array $item): ForumsFollowedResponseForumsForumPrefixesGroupPrefixes => ForumsFollowedResponseForumsForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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

final class ForumsFollowedResponseSystemInfo
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
        /** @var ForumsGetFeedOptionsResponseSystemInfo */
        public readonly ForumsGetFeedOptionsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ForumsGetFeedOptionsResponseForums => ForumsGetFeedOptionsResponseForums::fromArray($item), $data['forums']),
            $data['excluded_forums_ids'],
            $data['default_excluded_forums_ids'],
            $data['keywords'],
            ForumsGetFeedOptionsResponseSystemInfo::fromArray($data['system_info']),
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

final class ForumsGetFeedOptionsResponseSystemInfo
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

final class ForumsEditFeedOptionsResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ForumsEditFeedOptionsResponseSystemInfo|null */
        public readonly ?ForumsEditFeedOptionsResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ForumsEditFeedOptionsResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ForumsEditFeedOptionsResponseSystemInfo
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

final class LinksListResponse
{
    public function __construct(
        /** @var list<LinksListResponseLinkForums> */
        public readonly array $link_forums,
        public readonly int $link_forums_total,
        /** @var LinksListResponseSystemInfo */
        public readonly LinksListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): LinksListResponseLinkForums => LinksListResponseLinkForums::fromArray($item), $data['link-forums']),
            $data['link-forums_total'],
            LinksListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class LinksListResponseLinkForums
{
    public function __construct(
        public readonly int $link_id,
        public readonly string $link_title,
        public readonly string $link_description,
        /** @var LinksListResponseLinkForumsLinks */
        public readonly LinksListResponseLinkForumsLinks $links,
        /** @var LinksListResponseLinkForumsPermissions */
        public readonly LinksListResponseLinkForumsPermissions $permissions,
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
            LinksListResponseLinkForumsLinks::fromArray($data['links']),
            LinksListResponseLinkForumsPermissions::fromArray($data['permissions']),
        );
    }
}

final class LinksListResponseLinkForumsLinks
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

final class LinksListResponseLinkForumsPermissions
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

final class LinksListResponseSystemInfo
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

final class LinksGetResponse
{
    public function __construct(
        /** @var LinksGetResponseLinkForum */
        public readonly LinksGetResponseLinkForum $link_forum,
        /** @var LinksGetResponseSystemInfo */
        public readonly LinksGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            LinksGetResponseLinkForum::fromArray($data['link-forum']),
            LinksGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class LinksGetResponseLinkForum
{
    public function __construct(
        public readonly int $link_id,
        public readonly string $link_title,
        public readonly string $link_description,
        /** @var LinksGetResponseLinkForumLinks */
        public readonly LinksGetResponseLinkForumLinks $links,
        /** @var LinksGetResponseLinkForumPermissions */
        public readonly LinksGetResponseLinkForumPermissions $permissions,
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
            LinksGetResponseLinkForumLinks::fromArray($data['links']),
            LinksGetResponseLinkForumPermissions::fromArray($data['permissions']),
        );
    }
}

final class LinksGetResponseLinkForumLinks
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

final class LinksGetResponseLinkForumPermissions
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

final class LinksGetResponseSystemInfo
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

final class PagesListResponse
{
    public function __construct(
        /** @var list<PagesListResponsePages> */
        public readonly array $pages,
        public readonly int $pages_total,
        /** @var PagesListResponseSystemInfo */
        public readonly PagesListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): PagesListResponsePages => PagesListResponsePages::fromArray($item), $data['pages']),
            $data['pages_total'],
            PagesListResponseSystemInfo::fromArray($data['system_info']),
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

final class PagesListResponseSystemInfo
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

final class PagesGetResponse
{
    public function __construct(
        /** @var PagesGetResponsePage */
        public readonly PagesGetResponsePage $page,
        /** @var PagesGetResponseSystemInfo */
        public readonly PagesGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            PagesGetResponsePage::fromArray($data['page']),
            PagesGetResponseSystemInfo::fromArray($data['system_info']),
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

final class PagesGetResponseSystemInfo
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

final class NavigationListResponse
{
    public function __construct(
        /** @var list<NavigationListResponseElements> */
        public readonly array $elements,
        public readonly int $elements_count,
        /** @var NavigationListResponseSystemInfo */
        public readonly NavigationListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): NavigationListResponseElements => NavigationListResponseElements::fromArray($item), $data['elements']),
            $data['elements_count'],
            NavigationListResponseSystemInfo::fromArray($data['system_info']),
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

final class NavigationListResponseSystemInfo
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

final class ThreadsListResponse
{
    public function __construct(
        /** @var list<ThreadsListResponseThreads> */
        public readonly array $threads,
        /** @var ThreadsListResponseForum */
        public readonly ThreadsListResponseForum $forum,
        public readonly int $threads_total,
        /** @var ThreadsListResponseLinks */
        public readonly ThreadsListResponseLinks $links,
        /** @var ThreadsListResponseSystemInfo */
        public readonly ThreadsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ThreadsListResponseThreads => ThreadsListResponseThreads::fromArray($item), $data['threads']),
            ThreadsListResponseForum::fromArray($data['forum']),
            $data['threads_total'],
            ThreadsListResponseLinks::fromArray($data['links']),
            ThreadsListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsListResponseThreads
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
        /** @var ThreadsListResponseThreadsFirstPost */
        public readonly ThreadsListResponseThreadsFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsListResponseThreadsThreadTags */
        public readonly ThreadsListResponseThreadsThreadTags $thread_tags,
        /** @var ThreadsListResponseThreadsLinks */
        public readonly ThreadsListResponseThreadsLinks $links,
        /** @var ThreadsListResponseThreadsPermissions */
        public readonly ThreadsListResponseThreadsPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsListResponseThreadsRestrictions */
        public readonly ThreadsListResponseThreadsRestrictions $restrictions,
        /** @var ThreadsListResponseThreadsLastPost */
        public readonly ThreadsListResponseThreadsLastPost $last_post,
        /** @var ThreadsListResponseThreadsContest */
        public readonly ThreadsListResponseThreadsContest $contest,
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
            ThreadsListResponseThreadsFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsListResponseThreadsThreadTags::fromArray($data['thread_tags']),
            ThreadsListResponseThreadsLinks::fromArray($data['links']),
            ThreadsListResponseThreadsPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsListResponseThreadsRestrictions::fromArray($data['restrictions']),
            ThreadsListResponseThreadsLastPost::fromArray($data['last_post']),
            ThreadsListResponseThreadsContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsListResponseThreadsFirstPost
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
        /** @var ThreadsListResponseThreadsFirstPostLinks */
        public readonly ThreadsListResponseThreadsFirstPostLinks $links,
        /** @var ThreadsListResponseThreadsFirstPostPermissions */
        public readonly ThreadsListResponseThreadsFirstPostPermissions $permissions,
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
            ThreadsListResponseThreadsFirstPostLinks::fromArray($data['links']),
            ThreadsListResponseThreadsFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsListResponseThreadsFirstPostLinks
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

final class ThreadsListResponseThreadsFirstPostPermissions
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

final class ThreadsListResponseThreadsThreadTags
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

final class ThreadsListResponseThreadsLinks
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

final class ThreadsListResponseThreadsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsListResponseThreadsPermissionsBump */
        public readonly ThreadsListResponseThreadsPermissionsBump $bump,
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
            ThreadsListResponseThreadsPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsListResponseThreadsPermissionsBump
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

final class ThreadsListResponseThreadsRestrictions
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

final class ThreadsListResponseThreadsLastPost
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
        /** @var ThreadsListResponseThreadsLastPostLinks */
        public readonly ThreadsListResponseThreadsLastPostLinks $links,
        /** @var ThreadsListResponseThreadsLastPostPermissions */
        public readonly ThreadsListResponseThreadsLastPostPermissions $permissions,
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
            ThreadsListResponseThreadsLastPostLinks::fromArray($data['links']),
            ThreadsListResponseThreadsLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsListResponseThreadsLastPostLinks
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

final class ThreadsListResponseThreadsLastPostPermissions
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

final class ThreadsListResponseThreadsContest
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
        /** @var ThreadsListResponseThreadsContestPermissions */
        public readonly ThreadsListResponseThreadsContestPermissions $permissions,
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
            ThreadsListResponseThreadsContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsListResponseThreadsContestPermissions
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

final class ThreadsListResponseSystemInfo
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

final class ThreadsCreateResponse
{
    public function __construct(
        /** @var ThreadsCreateResponseThread */
        public readonly ThreadsCreateResponseThread $thread,
        /** @var ThreadsCreateResponseSystemInfo */
        public readonly ThreadsCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ThreadsCreateResponseThread::fromArray($data['thread']),
            ThreadsCreateResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsCreateResponseThread
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
        /** @var ThreadsCreateResponseThreadFirstPost */
        public readonly ThreadsCreateResponseThreadFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsCreateResponseThreadThreadTags */
        public readonly ThreadsCreateResponseThreadThreadTags $thread_tags,
        /** @var ThreadsCreateResponseThreadLinks */
        public readonly ThreadsCreateResponseThreadLinks $links,
        /** @var ThreadsCreateResponseThreadPermissions */
        public readonly ThreadsCreateResponseThreadPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsCreateResponseThreadRestrictions */
        public readonly ThreadsCreateResponseThreadRestrictions $restrictions,
        /** @var ThreadsCreateResponseThreadLastPost */
        public readonly ThreadsCreateResponseThreadLastPost $last_post,
        /** @var ThreadsCreateResponseThreadContest */
        public readonly ThreadsCreateResponseThreadContest $contest,
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
            ThreadsCreateResponseThreadFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsCreateResponseThreadThreadTags::fromArray($data['thread_tags']),
            ThreadsCreateResponseThreadLinks::fromArray($data['links']),
            ThreadsCreateResponseThreadPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsCreateResponseThreadRestrictions::fromArray($data['restrictions']),
            ThreadsCreateResponseThreadLastPost::fromArray($data['last_post']),
            ThreadsCreateResponseThreadContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsCreateResponseThreadFirstPost
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
        /** @var ThreadsCreateResponseThreadFirstPostLinks */
        public readonly ThreadsCreateResponseThreadFirstPostLinks $links,
        /** @var ThreadsCreateResponseThreadFirstPostPermissions */
        public readonly ThreadsCreateResponseThreadFirstPostPermissions $permissions,
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
            ThreadsCreateResponseThreadFirstPostLinks::fromArray($data['links']),
            ThreadsCreateResponseThreadFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsCreateResponseThreadFirstPostLinks
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

final class ThreadsCreateResponseThreadFirstPostPermissions
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

final class ThreadsCreateResponseThreadThreadTags
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

final class ThreadsCreateResponseThreadLinks
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

final class ThreadsCreateResponseThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsCreateResponseThreadPermissionsBump */
        public readonly ThreadsCreateResponseThreadPermissionsBump $bump,
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
            ThreadsCreateResponseThreadPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsCreateResponseThreadPermissionsBump
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

final class ThreadsCreateResponseThreadRestrictions
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

final class ThreadsCreateResponseThreadLastPost
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
        /** @var ThreadsCreateResponseThreadLastPostLinks */
        public readonly ThreadsCreateResponseThreadLastPostLinks $links,
        /** @var ThreadsCreateResponseThreadLastPostPermissions */
        public readonly ThreadsCreateResponseThreadLastPostPermissions $permissions,
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
            ThreadsCreateResponseThreadLastPostLinks::fromArray($data['links']),
            ThreadsCreateResponseThreadLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsCreateResponseThreadLastPostLinks
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

final class ThreadsCreateResponseThreadLastPostPermissions
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

final class ThreadsCreateResponseThreadContest
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
        /** @var ThreadsCreateResponseThreadContestPermissions */
        public readonly ThreadsCreateResponseThreadContestPermissions $permissions,
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
            ThreadsCreateResponseThreadContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsCreateResponseThreadContestPermissions
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

final class ThreadsCreateResponseSystemInfo
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

final class ThreadsCreateContestResponse
{
    public function __construct(
        /** @var ThreadsCreateContestResponseThread */
        public readonly ThreadsCreateContestResponseThread $thread,
        /** @var ThreadsCreateContestResponseSystemInfo */
        public readonly ThreadsCreateContestResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ThreadsCreateContestResponseThread::fromArray($data['thread']),
            ThreadsCreateContestResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsCreateContestResponseThread
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
        /** @var ThreadsCreateContestResponseThreadFirstPost */
        public readonly ThreadsCreateContestResponseThreadFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsCreateContestResponseThreadThreadTags */
        public readonly ThreadsCreateContestResponseThreadThreadTags $thread_tags,
        /** @var ThreadsCreateContestResponseThreadLinks */
        public readonly ThreadsCreateContestResponseThreadLinks $links,
        /** @var ThreadsCreateContestResponseThreadPermissions */
        public readonly ThreadsCreateContestResponseThreadPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsCreateContestResponseThreadRestrictions */
        public readonly ThreadsCreateContestResponseThreadRestrictions $restrictions,
        /** @var ThreadsCreateContestResponseThreadLastPost */
        public readonly ThreadsCreateContestResponseThreadLastPost $last_post,
        /** @var ThreadsCreateContestResponseThreadContest */
        public readonly ThreadsCreateContestResponseThreadContest $contest,
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
            ThreadsCreateContestResponseThreadFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsCreateContestResponseThreadThreadTags::fromArray($data['thread_tags']),
            ThreadsCreateContestResponseThreadLinks::fromArray($data['links']),
            ThreadsCreateContestResponseThreadPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsCreateContestResponseThreadRestrictions::fromArray($data['restrictions']),
            ThreadsCreateContestResponseThreadLastPost::fromArray($data['last_post']),
            ThreadsCreateContestResponseThreadContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsCreateContestResponseThreadFirstPost
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
        /** @var ThreadsCreateContestResponseThreadFirstPostLinks */
        public readonly ThreadsCreateContestResponseThreadFirstPostLinks $links,
        /** @var ThreadsCreateContestResponseThreadFirstPostPermissions */
        public readonly ThreadsCreateContestResponseThreadFirstPostPermissions $permissions,
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
            ThreadsCreateContestResponseThreadFirstPostLinks::fromArray($data['links']),
            ThreadsCreateContestResponseThreadFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsCreateContestResponseThreadFirstPostLinks
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

final class ThreadsCreateContestResponseThreadFirstPostPermissions
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

final class ThreadsCreateContestResponseThreadThreadTags
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

final class ThreadsCreateContestResponseThreadLinks
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

final class ThreadsCreateContestResponseThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsCreateContestResponseThreadPermissionsBump */
        public readonly ThreadsCreateContestResponseThreadPermissionsBump $bump,
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
            ThreadsCreateContestResponseThreadPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsCreateContestResponseThreadPermissionsBump
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

final class ThreadsCreateContestResponseThreadRestrictions
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

final class ThreadsCreateContestResponseThreadLastPost
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
        /** @var ThreadsCreateContestResponseThreadLastPostLinks */
        public readonly ThreadsCreateContestResponseThreadLastPostLinks $links,
        /** @var ThreadsCreateContestResponseThreadLastPostPermissions */
        public readonly ThreadsCreateContestResponseThreadLastPostPermissions $permissions,
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
            ThreadsCreateContestResponseThreadLastPostLinks::fromArray($data['links']),
            ThreadsCreateContestResponseThreadLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsCreateContestResponseThreadLastPostLinks
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

final class ThreadsCreateContestResponseThreadLastPostPermissions
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

final class ThreadsCreateContestResponseThreadContest
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
        /** @var ThreadsCreateContestResponseThreadContestPermissions */
        public readonly ThreadsCreateContestResponseThreadContestPermissions $permissions,
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
            ThreadsCreateContestResponseThreadContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsCreateContestResponseThreadContestPermissions
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

final class ThreadsCreateContestResponseSystemInfo
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

final class ThreadsClaimResponse
{
    public function __construct(
        /** @var ThreadsClaimResponseThread */
        public readonly ThreadsClaimResponseThread $thread,
        /** @var ThreadsClaimResponseSystemInfo */
        public readonly ThreadsClaimResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ThreadsClaimResponseThread::fromArray($data['thread']),
            ThreadsClaimResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsClaimResponseThread
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
        /** @var ThreadsClaimResponseThreadFirstPost */
        public readonly ThreadsClaimResponseThreadFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsClaimResponseThreadThreadTags */
        public readonly ThreadsClaimResponseThreadThreadTags $thread_tags,
        /** @var ThreadsClaimResponseThreadLinks */
        public readonly ThreadsClaimResponseThreadLinks $links,
        /** @var ThreadsClaimResponseThreadPermissions */
        public readonly ThreadsClaimResponseThreadPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsClaimResponseThreadRestrictions */
        public readonly ThreadsClaimResponseThreadRestrictions $restrictions,
        /** @var ThreadsClaimResponseThreadLastPost */
        public readonly ThreadsClaimResponseThreadLastPost $last_post,
        /** @var ThreadsClaimResponseThreadContest */
        public readonly ThreadsClaimResponseThreadContest $contest,
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
            ThreadsClaimResponseThreadFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsClaimResponseThreadThreadTags::fromArray($data['thread_tags']),
            ThreadsClaimResponseThreadLinks::fromArray($data['links']),
            ThreadsClaimResponseThreadPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsClaimResponseThreadRestrictions::fromArray($data['restrictions']),
            ThreadsClaimResponseThreadLastPost::fromArray($data['last_post']),
            ThreadsClaimResponseThreadContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsClaimResponseThreadFirstPost
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
        /** @var ThreadsClaimResponseThreadFirstPostLinks */
        public readonly ThreadsClaimResponseThreadFirstPostLinks $links,
        /** @var ThreadsClaimResponseThreadFirstPostPermissions */
        public readonly ThreadsClaimResponseThreadFirstPostPermissions $permissions,
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
            ThreadsClaimResponseThreadFirstPostLinks::fromArray($data['links']),
            ThreadsClaimResponseThreadFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsClaimResponseThreadFirstPostLinks
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

final class ThreadsClaimResponseThreadFirstPostPermissions
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

final class ThreadsClaimResponseThreadThreadTags
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

final class ThreadsClaimResponseThreadLinks
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

final class ThreadsClaimResponseThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsClaimResponseThreadPermissionsBump */
        public readonly ThreadsClaimResponseThreadPermissionsBump $bump,
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
            ThreadsClaimResponseThreadPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsClaimResponseThreadPermissionsBump
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

final class ThreadsClaimResponseThreadRestrictions
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

final class ThreadsClaimResponseThreadLastPost
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
        /** @var ThreadsClaimResponseThreadLastPostLinks */
        public readonly ThreadsClaimResponseThreadLastPostLinks $links,
        /** @var ThreadsClaimResponseThreadLastPostPermissions */
        public readonly ThreadsClaimResponseThreadLastPostPermissions $permissions,
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
            ThreadsClaimResponseThreadLastPostLinks::fromArray($data['links']),
            ThreadsClaimResponseThreadLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsClaimResponseThreadLastPostLinks
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

final class ThreadsClaimResponseThreadLastPostPermissions
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

final class ThreadsClaimResponseThreadContest
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
        /** @var ThreadsClaimResponseThreadContestPermissions */
        public readonly ThreadsClaimResponseThreadContestPermissions $permissions,
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
            ThreadsClaimResponseThreadContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsClaimResponseThreadContestPermissions
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

final class ThreadsClaimResponseSystemInfo
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

final class ThreadsGetResponse
{
    public function __construct(
        /** @var ThreadsGetResponseThread */
        public readonly ThreadsGetResponseThread $thread,
        /** @var ThreadsGetResponseSystemInfo */
        public readonly ThreadsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ThreadsGetResponseThread::fromArray($data['thread']),
            ThreadsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsGetResponseThread
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
        /** @var ThreadsGetResponseThreadFirstPost */
        public readonly ThreadsGetResponseThreadFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsGetResponseThreadThreadTags */
        public readonly ThreadsGetResponseThreadThreadTags $thread_tags,
        /** @var ThreadsGetResponseThreadLinks */
        public readonly ThreadsGetResponseThreadLinks $links,
        /** @var ThreadsGetResponseThreadPermissions */
        public readonly ThreadsGetResponseThreadPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsGetResponseThreadRestrictions */
        public readonly ThreadsGetResponseThreadRestrictions $restrictions,
        /** @var ThreadsGetResponseThreadLastPost */
        public readonly ThreadsGetResponseThreadLastPost $last_post,
        /** @var ThreadsGetResponseThreadContest */
        public readonly ThreadsGetResponseThreadContest $contest,
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
            ThreadsGetResponseThreadFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsGetResponseThreadThreadTags::fromArray($data['thread_tags']),
            ThreadsGetResponseThreadLinks::fromArray($data['links']),
            ThreadsGetResponseThreadPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsGetResponseThreadRestrictions::fromArray($data['restrictions']),
            ThreadsGetResponseThreadLastPost::fromArray($data['last_post']),
            ThreadsGetResponseThreadContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsGetResponseThreadFirstPost
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
        /** @var ThreadsGetResponseThreadFirstPostLinks */
        public readonly ThreadsGetResponseThreadFirstPostLinks $links,
        /** @var ThreadsGetResponseThreadFirstPostPermissions */
        public readonly ThreadsGetResponseThreadFirstPostPermissions $permissions,
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
            ThreadsGetResponseThreadFirstPostLinks::fromArray($data['links']),
            ThreadsGetResponseThreadFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsGetResponseThreadFirstPostLinks
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

final class ThreadsGetResponseThreadFirstPostPermissions
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

final class ThreadsGetResponseThreadThreadTags
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

final class ThreadsGetResponseThreadLinks
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

final class ThreadsGetResponseThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsGetResponseThreadPermissionsBump */
        public readonly ThreadsGetResponseThreadPermissionsBump $bump,
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
            ThreadsGetResponseThreadPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsGetResponseThreadPermissionsBump
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

final class ThreadsGetResponseThreadRestrictions
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

final class ThreadsGetResponseThreadLastPost
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
        /** @var ThreadsGetResponseThreadLastPostLinks */
        public readonly ThreadsGetResponseThreadLastPostLinks $links,
        /** @var ThreadsGetResponseThreadLastPostPermissions */
        public readonly ThreadsGetResponseThreadLastPostPermissions $permissions,
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
            ThreadsGetResponseThreadLastPostLinks::fromArray($data['links']),
            ThreadsGetResponseThreadLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsGetResponseThreadLastPostLinks
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

final class ThreadsGetResponseThreadLastPostPermissions
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

final class ThreadsGetResponseThreadContest
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
        /** @var ThreadsGetResponseThreadContestPermissions */
        public readonly ThreadsGetResponseThreadContestPermissions $permissions,
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
            ThreadsGetResponseThreadContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsGetResponseThreadContestPermissions
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

final class ThreadsGetResponseSystemInfo
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

final class ThreadsEditResponse
{
    public function __construct(
        /** @var ThreadsEditResponseThread */
        public readonly ThreadsEditResponseThread $thread,
        /** @var ThreadsEditResponseSystemInfo */
        public readonly ThreadsEditResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ThreadsEditResponseThread::fromArray($data['thread']),
            ThreadsEditResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsEditResponseThread
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
        /** @var ThreadsEditResponseThreadFirstPost */
        public readonly ThreadsEditResponseThreadFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsEditResponseThreadThreadTags */
        public readonly ThreadsEditResponseThreadThreadTags $thread_tags,
        /** @var ThreadsEditResponseThreadLinks */
        public readonly ThreadsEditResponseThreadLinks $links,
        /** @var ThreadsEditResponseThreadPermissions */
        public readonly ThreadsEditResponseThreadPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsEditResponseThreadRestrictions */
        public readonly ThreadsEditResponseThreadRestrictions $restrictions,
        /** @var ThreadsEditResponseThreadLastPost */
        public readonly ThreadsEditResponseThreadLastPost $last_post,
        /** @var ThreadsEditResponseThreadContest */
        public readonly ThreadsEditResponseThreadContest $contest,
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
            ThreadsEditResponseThreadFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsEditResponseThreadThreadTags::fromArray($data['thread_tags']),
            ThreadsEditResponseThreadLinks::fromArray($data['links']),
            ThreadsEditResponseThreadPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsEditResponseThreadRestrictions::fromArray($data['restrictions']),
            ThreadsEditResponseThreadLastPost::fromArray($data['last_post']),
            ThreadsEditResponseThreadContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsEditResponseThreadFirstPost
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
        /** @var ThreadsEditResponseThreadFirstPostLinks */
        public readonly ThreadsEditResponseThreadFirstPostLinks $links,
        /** @var ThreadsEditResponseThreadFirstPostPermissions */
        public readonly ThreadsEditResponseThreadFirstPostPermissions $permissions,
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
            ThreadsEditResponseThreadFirstPostLinks::fromArray($data['links']),
            ThreadsEditResponseThreadFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsEditResponseThreadFirstPostLinks
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

final class ThreadsEditResponseThreadFirstPostPermissions
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

final class ThreadsEditResponseThreadThreadTags
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

final class ThreadsEditResponseThreadLinks
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

final class ThreadsEditResponseThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsEditResponseThreadPermissionsBump */
        public readonly ThreadsEditResponseThreadPermissionsBump $bump,
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
            ThreadsEditResponseThreadPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsEditResponseThreadPermissionsBump
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

final class ThreadsEditResponseThreadRestrictions
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

final class ThreadsEditResponseThreadLastPost
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
        /** @var ThreadsEditResponseThreadLastPostLinks */
        public readonly ThreadsEditResponseThreadLastPostLinks $links,
        /** @var ThreadsEditResponseThreadLastPostPermissions */
        public readonly ThreadsEditResponseThreadLastPostPermissions $permissions,
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
            ThreadsEditResponseThreadLastPostLinks::fromArray($data['links']),
            ThreadsEditResponseThreadLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsEditResponseThreadLastPostLinks
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

final class ThreadsEditResponseThreadLastPostPermissions
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

final class ThreadsEditResponseThreadContest
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
        /** @var ThreadsEditResponseThreadContestPermissions */
        public readonly ThreadsEditResponseThreadContestPermissions $permissions,
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
            ThreadsEditResponseThreadContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsEditResponseThreadContestPermissions
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

final class ThreadsEditResponseSystemInfo
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

final class ThreadsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsDeleteResponseSystemInfo|null */
        public readonly ?ThreadsDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsDeleteResponseSystemInfo
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

final class ThreadsMoveResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsMoveResponseSystemInfo|null */
        public readonly ?ThreadsMoveResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsMoveResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsMoveResponseSystemInfo
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

final class ThreadsBumpResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ThreadsBumpResponseSystemInfo */
        public readonly ThreadsBumpResponseSystemInfo $system_info,
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
            ThreadsBumpResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsBumpResponseSystemInfo
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

final class ThreadsHideResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ThreadsHideResponseSystemInfo */
        public readonly ThreadsHideResponseSystemInfo $system_info,
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
            ThreadsHideResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsHideResponseSystemInfo
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

final class ThreadsStarResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsStarResponseSystemInfo|null */
        public readonly ?ThreadsStarResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsStarResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsStarResponseSystemInfo
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

final class ThreadsUnstarResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsUnstarResponseSystemInfo|null */
        public readonly ?ThreadsUnstarResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsUnstarResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsUnstarResponseSystemInfo
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

final class ThreadsFollowersResponse
{
    public function __construct(
        /** @var list<ThreadsFollowersResponseUsers> */
        public readonly array $users,
        /** @var ThreadsFollowersResponseSystemInfo */
        public readonly ThreadsFollowersResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ThreadsFollowersResponseUsers => ThreadsFollowersResponseUsers::fromArray($item), $data['users']),
            ThreadsFollowersResponseSystemInfo::fromArray($data['system_info']),
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

final class ThreadsFollowersResponseSystemInfo
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

final class ThreadsFollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsFollowResponseSystemInfo|null */
        public readonly ?ThreadsFollowResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsFollowResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsFollowResponseSystemInfo
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

final class ThreadsUnfollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsUnfollowResponseSystemInfo|null */
        public readonly ?ThreadsUnfollowResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsUnfollowResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsUnfollowResponseSystemInfo
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

final class ThreadsFollowedResponse
{
    public function __construct(
        /** @var list<ThreadsFollowedResponseThreads> */
        public readonly array $threads,
        public readonly int $threads_total,
        /** @var ThreadsFollowedResponseSystemInfo */
        public readonly ThreadsFollowedResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ThreadsFollowedResponseThreads => ThreadsFollowedResponseThreads::fromArray($item), $data['threads']),
            $data['threads_total'],
            ThreadsFollowedResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): ThreadsFollowedResponseThreadsFirstPostLikeUsers => ThreadsFollowedResponseThreadsFirstPostLikeUsers::fromArray($item), $data['like_users']),
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

final class ThreadsFollowedResponseSystemInfo
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

final class ThreadsNavigationResponse
{
    public function __construct(
        /** @var list<ThreadsNavigationResponseElements> */
        public readonly array $elements,
        public readonly int $elements_count,
        /** @var ThreadsNavigationResponseSystemInfo */
        public readonly ThreadsNavigationResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ThreadsNavigationResponseElements => ThreadsNavigationResponseElements::fromArray($item), $data['elements']),
            $data['elements_count'],
            ThreadsNavigationResponseSystemInfo::fromArray($data['system_info']),
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

final class ThreadsNavigationResponseSystemInfo
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

final class ThreadsPollGetResponse
{
    public function __construct(
        /** @var ThreadsPollGetResponsePoll */
        public readonly ThreadsPollGetResponsePoll $poll,
        /** @var ThreadsPollGetResponseSystemInfo */
        public readonly ThreadsPollGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ThreadsPollGetResponsePoll::fromArray($data['poll']),
            ThreadsPollGetResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): ThreadsPollGetResponsePollResponses => ThreadsPollGetResponsePollResponses::fromArray($item), $data['responses']),
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

final class ThreadsPollGetResponseSystemInfo
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

final class ThreadsPollVoteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsPollVoteResponseSystemInfo|null */
        public readonly ?ThreadsPollVoteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsPollVoteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsPollVoteResponseSystemInfo
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

final class ThreadsUnreadResponse
{
    public function __construct(
        /** @var list<ThreadsUnreadResponseThreads> */
        public readonly array $threads,
        /** @var list<ThreadsUnreadResponseData> */
        public readonly array $data,
        /** @var ThreadsUnreadResponseSystemInfo */
        public readonly ThreadsUnreadResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ThreadsUnreadResponseThreads => ThreadsUnreadResponseThreads::fromArray($item), $data['threads']),
            array_map(static fn (array $item): ThreadsUnreadResponseData => ThreadsUnreadResponseData::fromArray($item), $data['data']),
            ThreadsUnreadResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsUnreadResponseThreads
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
        /** @var ThreadsUnreadResponseThreadsFirstPost */
        public readonly ThreadsUnreadResponseThreadsFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsUnreadResponseThreadsThreadTags */
        public readonly ThreadsUnreadResponseThreadsThreadTags $thread_tags,
        /** @var ThreadsUnreadResponseThreadsLinks */
        public readonly ThreadsUnreadResponseThreadsLinks $links,
        /** @var ThreadsUnreadResponseThreadsPermissions */
        public readonly ThreadsUnreadResponseThreadsPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsUnreadResponseThreadsRestrictions */
        public readonly ThreadsUnreadResponseThreadsRestrictions $restrictions,
        /** @var ThreadsUnreadResponseThreadsLastPost */
        public readonly ThreadsUnreadResponseThreadsLastPost $last_post,
        /** @var ThreadsUnreadResponseThreadsContest */
        public readonly ThreadsUnreadResponseThreadsContest $contest,
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
            ThreadsUnreadResponseThreadsFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsUnreadResponseThreadsThreadTags::fromArray($data['thread_tags']),
            ThreadsUnreadResponseThreadsLinks::fromArray($data['links']),
            ThreadsUnreadResponseThreadsPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsUnreadResponseThreadsRestrictions::fromArray($data['restrictions']),
            ThreadsUnreadResponseThreadsLastPost::fromArray($data['last_post']),
            ThreadsUnreadResponseThreadsContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsUnreadResponseThreadsFirstPost
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
        /** @var ThreadsUnreadResponseThreadsFirstPostLinks */
        public readonly ThreadsUnreadResponseThreadsFirstPostLinks $links,
        /** @var ThreadsUnreadResponseThreadsFirstPostPermissions */
        public readonly ThreadsUnreadResponseThreadsFirstPostPermissions $permissions,
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
            ThreadsUnreadResponseThreadsFirstPostLinks::fromArray($data['links']),
            ThreadsUnreadResponseThreadsFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsUnreadResponseThreadsFirstPostLinks
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

final class ThreadsUnreadResponseThreadsFirstPostPermissions
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

final class ThreadsUnreadResponseThreadsThreadTags
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

final class ThreadsUnreadResponseThreadsLinks
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

final class ThreadsUnreadResponseThreadsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsUnreadResponseThreadsPermissionsBump */
        public readonly ThreadsUnreadResponseThreadsPermissionsBump $bump,
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
            ThreadsUnreadResponseThreadsPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsUnreadResponseThreadsPermissionsBump
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

final class ThreadsUnreadResponseThreadsRestrictions
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

final class ThreadsUnreadResponseThreadsLastPost
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
        /** @var ThreadsUnreadResponseThreadsLastPostLinks */
        public readonly ThreadsUnreadResponseThreadsLastPostLinks $links,
        /** @var ThreadsUnreadResponseThreadsLastPostPermissions */
        public readonly ThreadsUnreadResponseThreadsLastPostPermissions $permissions,
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
            ThreadsUnreadResponseThreadsLastPostLinks::fromArray($data['links']),
            ThreadsUnreadResponseThreadsLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsUnreadResponseThreadsLastPostLinks
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

final class ThreadsUnreadResponseThreadsLastPostPermissions
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

final class ThreadsUnreadResponseThreadsContest
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
        /** @var ThreadsUnreadResponseThreadsContestPermissions */
        public readonly ThreadsUnreadResponseThreadsContestPermissions $permissions,
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
            ThreadsUnreadResponseThreadsContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsUnreadResponseThreadsContestPermissions
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
            array_map(static fn (array $item): ThreadsUnreadResponseDataFirstPostLikeUsers => ThreadsUnreadResponseDataFirstPostLikeUsers::fromArray($item), $data['like_users']),
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

final class ThreadsUnreadResponseSystemInfo
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

final class ThreadsRecentResponse
{
    public function __construct(
        /** @var list<ThreadsRecentResponseThreads> */
        public readonly array $threads,
        /** @var list<ThreadsRecentResponseData> */
        public readonly array $data,
        /** @var ThreadsRecentResponseSystemInfo */
        public readonly ThreadsRecentResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ThreadsRecentResponseThreads => ThreadsRecentResponseThreads::fromArray($item), $data['threads']),
            array_map(static fn (array $item): ThreadsRecentResponseData => ThreadsRecentResponseData::fromArray($item), $data['data']),
            ThreadsRecentResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ThreadsRecentResponseThreads
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
        /** @var ThreadsRecentResponseThreadsFirstPost */
        public readonly ThreadsRecentResponseThreadsFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var ThreadsRecentResponseThreadsThreadTags */
        public readonly ThreadsRecentResponseThreadsThreadTags $thread_tags,
        /** @var ThreadsRecentResponseThreadsLinks */
        public readonly ThreadsRecentResponseThreadsLinks $links,
        /** @var ThreadsRecentResponseThreadsPermissions */
        public readonly ThreadsRecentResponseThreadsPermissions $permissions,
        public readonly string $node_title,
        /** @var ThreadsRecentResponseThreadsRestrictions */
        public readonly ThreadsRecentResponseThreadsRestrictions $restrictions,
        /** @var ThreadsRecentResponseThreadsLastPost */
        public readonly ThreadsRecentResponseThreadsLastPost $last_post,
        /** @var ThreadsRecentResponseThreadsContest */
        public readonly ThreadsRecentResponseThreadsContest $contest,
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
            ThreadsRecentResponseThreadsFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            ThreadsRecentResponseThreadsThreadTags::fromArray($data['thread_tags']),
            ThreadsRecentResponseThreadsLinks::fromArray($data['links']),
            ThreadsRecentResponseThreadsPermissions::fromArray($data['permissions']),
            $data['node_title'],
            ThreadsRecentResponseThreadsRestrictions::fromArray($data['restrictions']),
            ThreadsRecentResponseThreadsLastPost::fromArray($data['last_post']),
            ThreadsRecentResponseThreadsContest::fromArray($data['contest']),
        );
    }
}

final class ThreadsRecentResponseThreadsFirstPost
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
        /** @var ThreadsRecentResponseThreadsFirstPostLinks */
        public readonly ThreadsRecentResponseThreadsFirstPostLinks $links,
        /** @var ThreadsRecentResponseThreadsFirstPostPermissions */
        public readonly ThreadsRecentResponseThreadsFirstPostPermissions $permissions,
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
            ThreadsRecentResponseThreadsFirstPostLinks::fromArray($data['links']),
            ThreadsRecentResponseThreadsFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsRecentResponseThreadsFirstPostLinks
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

final class ThreadsRecentResponseThreadsFirstPostPermissions
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

final class ThreadsRecentResponseThreadsThreadTags
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

final class ThreadsRecentResponseThreadsLinks
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

final class ThreadsRecentResponseThreadsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var ThreadsRecentResponseThreadsPermissionsBump */
        public readonly ThreadsRecentResponseThreadsPermissionsBump $bump,
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
            ThreadsRecentResponseThreadsPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class ThreadsRecentResponseThreadsPermissionsBump
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

final class ThreadsRecentResponseThreadsRestrictions
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

final class ThreadsRecentResponseThreadsLastPost
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
        /** @var ThreadsRecentResponseThreadsLastPostLinks */
        public readonly ThreadsRecentResponseThreadsLastPostLinks $links,
        /** @var ThreadsRecentResponseThreadsLastPostPermissions */
        public readonly ThreadsRecentResponseThreadsLastPostPermissions $permissions,
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
            ThreadsRecentResponseThreadsLastPostLinks::fromArray($data['links']),
            ThreadsRecentResponseThreadsLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class ThreadsRecentResponseThreadsLastPostLinks
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

final class ThreadsRecentResponseThreadsLastPostPermissions
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

final class ThreadsRecentResponseThreadsContest
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
        /** @var ThreadsRecentResponseThreadsContestPermissions */
        public readonly ThreadsRecentResponseThreadsContestPermissions $permissions,
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
            ThreadsRecentResponseThreadsContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class ThreadsRecentResponseThreadsContestPermissions
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

final class ThreadsRecentResponseSystemInfo
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

final class ThreadsFinishResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ThreadsFinishResponseSystemInfo|null */
        public readonly ?ThreadsFinishResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ThreadsFinishResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ThreadsFinishResponseSystemInfo
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

final class PostsListResponse
{
    public function __construct(
        /** @var list<PostsListResponsePosts> */
        public readonly array $posts,
        /** @var PostsListResponseThread */
        public readonly PostsListResponseThread $thread,
        public readonly int $posts_total,
        /** @var PostsListResponseSystemInfo */
        public readonly PostsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): PostsListResponsePosts => PostsListResponsePosts::fromArray($item), $data['posts']),
            PostsListResponseThread::fromArray($data['thread']),
            $data['posts_total'],
            PostsListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class PostsListResponsePosts
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
        /** @var PostsListResponsePostsFirstPost */
        public readonly PostsListResponsePostsFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var PostsListResponsePostsThreadTags */
        public readonly PostsListResponsePostsThreadTags $thread_tags,
        /** @var PostsListResponsePostsLinks */
        public readonly PostsListResponsePostsLinks $links,
        /** @var PostsListResponsePostsPermissions */
        public readonly PostsListResponsePostsPermissions $permissions,
        public readonly string $node_title,
        /** @var PostsListResponsePostsRestrictions */
        public readonly PostsListResponsePostsRestrictions $restrictions,
        /** @var PostsListResponsePostsLastPost */
        public readonly PostsListResponsePostsLastPost $last_post,
        /** @var PostsListResponsePostsContest */
        public readonly PostsListResponsePostsContest $contest,
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
            PostsListResponsePostsFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            PostsListResponsePostsThreadTags::fromArray($data['thread_tags']),
            PostsListResponsePostsLinks::fromArray($data['links']),
            PostsListResponsePostsPermissions::fromArray($data['permissions']),
            $data['node_title'],
            PostsListResponsePostsRestrictions::fromArray($data['restrictions']),
            PostsListResponsePostsLastPost::fromArray($data['last_post']),
            PostsListResponsePostsContest::fromArray($data['contest']),
        );
    }
}

final class PostsListResponsePostsFirstPost
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
        /** @var PostsListResponsePostsFirstPostLinks */
        public readonly PostsListResponsePostsFirstPostLinks $links,
        /** @var PostsListResponsePostsFirstPostPermissions */
        public readonly PostsListResponsePostsFirstPostPermissions $permissions,
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
            PostsListResponsePostsFirstPostLinks::fromArray($data['links']),
            PostsListResponsePostsFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsListResponsePostsFirstPostLinks
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

final class PostsListResponsePostsFirstPostPermissions
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

final class PostsListResponsePostsThreadTags
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

final class PostsListResponsePostsLinks
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

final class PostsListResponsePostsPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var PostsListResponsePostsPermissionsBump */
        public readonly PostsListResponsePostsPermissionsBump $bump,
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
            PostsListResponsePostsPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class PostsListResponsePostsPermissionsBump
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

final class PostsListResponsePostsRestrictions
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

final class PostsListResponsePostsLastPost
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
        /** @var PostsListResponsePostsLastPostLinks */
        public readonly PostsListResponsePostsLastPostLinks $links,
        /** @var PostsListResponsePostsLastPostPermissions */
        public readonly PostsListResponsePostsLastPostPermissions $permissions,
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
            PostsListResponsePostsLastPostLinks::fromArray($data['links']),
            PostsListResponsePostsLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsListResponsePostsLastPostLinks
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

final class PostsListResponsePostsLastPostPermissions
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

final class PostsListResponsePostsContest
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
        /** @var PostsListResponsePostsContestPermissions */
        public readonly PostsListResponsePostsContestPermissions $permissions,
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
            PostsListResponsePostsContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class PostsListResponsePostsContestPermissions
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

final class PostsListResponseThread
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
        /** @var PostsListResponseThreadFirstPost */
        public readonly PostsListResponseThreadFirstPost $first_post,
        public readonly array $thread_prefixes,
        /** @var PostsListResponseThreadThreadTags */
        public readonly PostsListResponseThreadThreadTags $thread_tags,
        /** @var PostsListResponseThreadLinks */
        public readonly PostsListResponseThreadLinks $links,
        /** @var PostsListResponseThreadPermissions */
        public readonly PostsListResponseThreadPermissions $permissions,
        public readonly string $node_title,
        /** @var PostsListResponseThreadRestrictions */
        public readonly PostsListResponseThreadRestrictions $restrictions,
        /** @var PostsListResponseThreadLastPost */
        public readonly PostsListResponseThreadLastPost $last_post,
        /** @var PostsListResponseThreadContest */
        public readonly PostsListResponseThreadContest $contest,
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
            PostsListResponseThreadFirstPost::fromArray($data['first_post']),
            $data['thread_prefixes'],
            PostsListResponseThreadThreadTags::fromArray($data['thread_tags']),
            PostsListResponseThreadLinks::fromArray($data['links']),
            PostsListResponseThreadPermissions::fromArray($data['permissions']),
            $data['node_title'],
            PostsListResponseThreadRestrictions::fromArray($data['restrictions']),
            PostsListResponseThreadLastPost::fromArray($data['last_post']),
            PostsListResponseThreadContest::fromArray($data['contest']),
        );
    }
}

final class PostsListResponseThreadFirstPost
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
        /** @var PostsListResponseThreadFirstPostLinks */
        public readonly PostsListResponseThreadFirstPostLinks $links,
        /** @var PostsListResponseThreadFirstPostPermissions */
        public readonly PostsListResponseThreadFirstPostPermissions $permissions,
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
            PostsListResponseThreadFirstPostLinks::fromArray($data['links']),
            PostsListResponseThreadFirstPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsListResponseThreadFirstPostLinks
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

final class PostsListResponseThreadFirstPostPermissions
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

final class PostsListResponseThreadThreadTags
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

final class PostsListResponseThreadLinks
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

final class PostsListResponseThreadPermissions
{
    public function __construct(
        public readonly bool $view,
        public readonly bool $delete,
        public readonly bool $follow,
        public readonly bool $post,
        public readonly bool $edit,
        public readonly bool $edit_title,
        public readonly bool $edit_tags,
        /** @var PostsListResponseThreadPermissionsBump */
        public readonly PostsListResponseThreadPermissionsBump $bump,
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
            PostsListResponseThreadPermissionsBump::fromArray($data['bump']),
        );
    }
}

final class PostsListResponseThreadPermissionsBump
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

final class PostsListResponseThreadRestrictions
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

final class PostsListResponseThreadLastPost
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
        /** @var PostsListResponseThreadLastPostLinks */
        public readonly PostsListResponseThreadLastPostLinks $links,
        /** @var PostsListResponseThreadLastPostPermissions */
        public readonly PostsListResponseThreadLastPostPermissions $permissions,
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
            PostsListResponseThreadLastPostLinks::fromArray($data['links']),
            PostsListResponseThreadLastPostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsListResponseThreadLastPostLinks
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

final class PostsListResponseThreadLastPostPermissions
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

final class PostsListResponseThreadContest
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
        /** @var PostsListResponseThreadContestPermissions */
        public readonly PostsListResponseThreadContestPermissions $permissions,
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
            PostsListResponseThreadContestPermissions::fromArray($data['permissions']),
        );
    }
}

final class PostsListResponseThreadContestPermissions
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

final class PostsListResponseSystemInfo
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

final class PostsCreateResponse
{
    public function __construct(
        /** @var PostsCreateResponsePost */
        public readonly PostsCreateResponsePost $post,
        /** @var PostsCreateResponseSystemInfo */
        public readonly PostsCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            PostsCreateResponsePost::fromArray($data['post']),
            PostsCreateResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class PostsCreateResponsePost
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
        /** @var PostsCreateResponsePostLinks */
        public readonly PostsCreateResponsePostLinks $links,
        /** @var PostsCreateResponsePostPermissions */
        public readonly PostsCreateResponsePostPermissions $permissions,
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
            PostsCreateResponsePostLinks::fromArray($data['links']),
            PostsCreateResponsePostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsCreateResponsePostLinks
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

final class PostsCreateResponsePostPermissions
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

final class PostsCreateResponseSystemInfo
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

final class PostsGetResponse
{
    public function __construct(
        /** @var PostsGetResponsePost */
        public readonly PostsGetResponsePost $post,
        /** @var PostsGetResponseSystemInfo */
        public readonly PostsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            PostsGetResponsePost::fromArray($data['post']),
            PostsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class PostsGetResponsePost
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
        /** @var PostsGetResponsePostLinks */
        public readonly PostsGetResponsePostLinks $links,
        /** @var PostsGetResponsePostPermissions */
        public readonly PostsGetResponsePostPermissions $permissions,
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
            PostsGetResponsePostLinks::fromArray($data['links']),
            PostsGetResponsePostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsGetResponsePostLinks
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

final class PostsGetResponsePostPermissions
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

final class PostsGetResponseSystemInfo
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

final class PostsEditResponse
{
    public function __construct(
        /** @var PostsEditResponsePost */
        public readonly PostsEditResponsePost $post,
        /** @var PostsEditResponseSystemInfo */
        public readonly PostsEditResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            PostsEditResponsePost::fromArray($data['post']),
            PostsEditResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class PostsEditResponsePost
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
        /** @var PostsEditResponsePostLinks */
        public readonly PostsEditResponsePostLinks $links,
        /** @var PostsEditResponsePostPermissions */
        public readonly PostsEditResponsePostPermissions $permissions,
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
            PostsEditResponsePostLinks::fromArray($data['links']),
            PostsEditResponsePostPermissions::fromArray($data['permissions']),
            $data['thread_is_deleted'],
        );
    }
}

final class PostsEditResponsePostLinks
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

final class PostsEditResponsePostPermissions
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

final class PostsEditResponseSystemInfo
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

final class PostsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var PostsDeleteResponseSystemInfo|null */
        public readonly ?PostsDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? PostsDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsDeleteResponseSystemInfo
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

final class PostsLikesResponse
{
    public function __construct(
        /** @var list<PostsLikesResponseUsers> */
        public readonly array $users,
        /** @var PostsLikesResponseSystemInfo */
        public readonly PostsLikesResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): PostsLikesResponseUsers => PostsLikesResponseUsers::fromArray($item), $data['users']),
            PostsLikesResponseSystemInfo::fromArray($data['system_info']),
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

final class PostsLikesResponseSystemInfo
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

final class PostsLikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var PostsLikeResponseSystemInfo|null */
        public readonly ?PostsLikeResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? PostsLikeResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsLikeResponseSystemInfo
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

final class PostsUnlikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var PostsUnlikeResponseSystemInfo|null */
        public readonly ?PostsUnlikeResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? PostsUnlikeResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsUnlikeResponseSystemInfo
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

final class PostsReportReasonsResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $reasons,
        /** @var PostsReportReasonsResponseSystemInfo */
        public readonly PostsReportReasonsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['reasons'],
            PostsReportReasonsResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class PostsReportReasonsResponseSystemInfo
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

final class PostsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var PostsReportResponseSystemInfo|null */
        public readonly ?PostsReportResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? PostsReportResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsReportResponseSystemInfo
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

final class PostsCommentsGetResponse
{
    public function __construct(
        /** @var list<PostsCommentsGetResponseComments> */
        public readonly array $comments,
        /** @var PostsCommentsGetResponseSystemInfo */
        public readonly PostsCommentsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): PostsCommentsGetResponseComments => PostsCommentsGetResponseComments::fromArray($item), $data['comments']),
            PostsCommentsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class PostsCommentsGetResponseComments
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
        /** @var PostsCommentsGetResponseCommentsLinks */
        public readonly PostsCommentsGetResponseCommentsLinks $links,
        /** @var PostsCommentsGetResponseCommentsPermissions */
        public readonly PostsCommentsGetResponseCommentsPermissions $permissions,
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
            PostsCommentsGetResponseCommentsLinks::fromArray($data['links']),
            PostsCommentsGetResponseCommentsPermissions::fromArray($data['permissions']),
        );
    }
}

final class PostsCommentsGetResponseCommentsLinks
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

final class PostsCommentsGetResponseCommentsPermissions
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

final class PostsCommentsGetResponseSystemInfo
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

final class PostsCommentsCreateResponse
{
    public function __construct(
        /** @var PostsCommentsCreateResponseComment */
        public readonly PostsCommentsCreateResponseComment $comment,
        /** @var PostsCommentsCreateResponseSystemInfo */
        public readonly PostsCommentsCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            PostsCommentsCreateResponseComment::fromArray($data['comment']),
            PostsCommentsCreateResponseSystemInfo::fromArray($data['system_info']),
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

final class PostsCommentsCreateResponseSystemInfo
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

final class PostsCommentsEditResponse
{
    public function __construct(
        /** @var PostsCommentsEditResponseComment */
        public readonly PostsCommentsEditResponseComment $comment,
        /** @var PostsCommentsEditResponseSystemInfo */
        public readonly PostsCommentsEditResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            PostsCommentsEditResponseComment::fromArray($data['comment']),
            PostsCommentsEditResponseSystemInfo::fromArray($data['system_info']),
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

final class PostsCommentsEditResponseSystemInfo
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

final class PostsCommentsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var PostsCommentsDeleteResponseSystemInfo|null */
        public readonly ?PostsCommentsDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? PostsCommentsDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsCommentsDeleteResponseSystemInfo
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

final class PostsCommentsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var PostsCommentsReportResponseSystemInfo|null */
        public readonly ?PostsCommentsReportResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? PostsCommentsReportResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class PostsCommentsReportResponseSystemInfo
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

final class UsersListResponse
{
    public function __construct(
        /** @var list<UsersListResponseUsers> */
        public readonly array $users,
        public readonly int $users_total,
        /** @var UsersListResponseLinks */
        public readonly UsersListResponseLinks $links,
        /** @var UsersListResponseSystemInfo */
        public readonly UsersListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersListResponseUsers => UsersListResponseUsers::fromArray($item), $data['users']),
            $data['users_total'],
            UsersListResponseLinks::fromArray($data['links']),
            UsersListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersListResponseUsers
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
        /** @var UsersListResponseUsersLinks */
        public readonly UsersListResponseUsersLinks $links,
        /** @var UsersListResponseUsersPermissions */
        public readonly UsersListResponseUsersPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersListResponseUsersUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersListResponseUsersFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersListResponseUsersUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersListResponseUsersSelfPermissions */
        public readonly UsersListResponseUsersSelfPermissions $self_permissions,
        /** @var UsersListResponseUsersEditPermissions */
        public readonly UsersListResponseUsersEditPermissions $edit_permissions,
        /** @var UsersListResponseUsersBirthday */
        public readonly UsersListResponseUsersBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersListResponseUsersUserFollowing */
        public readonly UsersListResponseUsersUserFollowing $user_following,
        /** @var UsersListResponseUsersUserFollowers */
        public readonly UsersListResponseUsersUserFollowers $user_followers,
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
            UsersListResponseUsersLinks::fromArray($data['links']),
            UsersListResponseUsersPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersListResponseUsersUserGroups => UsersListResponseUsersUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersListResponseUsersFields => UsersListResponseUsersFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersListResponseUsersUserExternalAuthentications => UsersListResponseUsersUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersListResponseUsersSelfPermissions::fromArray($data['self_permissions']),
            UsersListResponseUsersEditPermissions::fromArray($data['edit_permissions']),
            UsersListResponseUsersBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersListResponseUsersUserFollowing::fromArray($data['user_following']),
            UsersListResponseUsersUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersListResponseUsersLinks
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

final class UsersListResponseUsersPermissions
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

final class UsersListResponseUsersUserGroups
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

final class UsersListResponseUsersFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersListResponseUsersFieldsChoices> */
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
            array_map(static fn (array $item): UsersListResponseUsersFieldsChoices => UsersListResponseUsersFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersListResponseUsersFieldsChoices
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

final class UsersListResponseUsersUserExternalAuthentications
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

final class UsersListResponseUsersSelfPermissions
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

final class UsersListResponseUsersEditPermissions
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

final class UsersListResponseUsersBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersListResponseUsersBirthdayTimeStamp */
        public readonly UsersListResponseUsersBirthdayTimeStamp $timeStamp,
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
            UsersListResponseUsersBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersListResponseUsersBirthdayTimeStamp
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

final class UsersListResponseUsersUserFollowing
{
    public function __construct(
        /** @var list<UsersListResponseUsersUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersListResponseUsersUserFollowingUsers => UsersListResponseUsersUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersListResponseUsersUserFollowingUsers
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

final class UsersListResponseUsersUserFollowers
{
    public function __construct(
        /** @var list<UsersListResponseUsersUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersListResponseUsersUserFollowersUsers => UsersListResponseUsersUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersListResponseUsersUserFollowersUsers
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

final class UsersListResponseSystemInfo
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

final class UsersFieldsResponse
{
    public function __construct(
        /** @var list<UsersFieldsResponseFields> */
        public readonly array $fields,
        /** @var UsersFieldsResponseSystemInfo */
        public readonly UsersFieldsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersFieldsResponseFields => UsersFieldsResponseFields::fromArray($item), $data['fields']),
            UsersFieldsResponseSystemInfo::fromArray($data['system_info']),
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

final class UsersFieldsResponseSystemInfo
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

final class UsersFindResponse
{
    public function __construct(
        /** @var list<UsersFindResponseUsers> */
        public readonly array $users,
        /** @var UsersFindResponseSystemInfo */
        public readonly UsersFindResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersFindResponseUsers => UsersFindResponseUsers::fromArray($item), $data['users']),
            UsersFindResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersFindResponseUsers
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
        /** @var UsersFindResponseUsersLinks */
        public readonly UsersFindResponseUsersLinks $links,
        /** @var UsersFindResponseUsersPermissions */
        public readonly UsersFindResponseUsersPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersFindResponseUsersUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersFindResponseUsersFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersFindResponseUsersUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersFindResponseUsersSelfPermissions */
        public readonly UsersFindResponseUsersSelfPermissions $self_permissions,
        /** @var UsersFindResponseUsersEditPermissions */
        public readonly UsersFindResponseUsersEditPermissions $edit_permissions,
        /** @var UsersFindResponseUsersBirthday */
        public readonly UsersFindResponseUsersBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersFindResponseUsersUserFollowing */
        public readonly UsersFindResponseUsersUserFollowing $user_following,
        /** @var UsersFindResponseUsersUserFollowers */
        public readonly UsersFindResponseUsersUserFollowers $user_followers,
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
            UsersFindResponseUsersLinks::fromArray($data['links']),
            UsersFindResponseUsersPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersFindResponseUsersUserGroups => UsersFindResponseUsersUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersFindResponseUsersFields => UsersFindResponseUsersFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersFindResponseUsersUserExternalAuthentications => UsersFindResponseUsersUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersFindResponseUsersSelfPermissions::fromArray($data['self_permissions']),
            UsersFindResponseUsersEditPermissions::fromArray($data['edit_permissions']),
            UsersFindResponseUsersBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersFindResponseUsersUserFollowing::fromArray($data['user_following']),
            UsersFindResponseUsersUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersFindResponseUsersLinks
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

final class UsersFindResponseUsersPermissions
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

final class UsersFindResponseUsersUserGroups
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

final class UsersFindResponseUsersFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersFindResponseUsersFieldsChoices> */
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
            array_map(static fn (array $item): UsersFindResponseUsersFieldsChoices => UsersFindResponseUsersFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersFindResponseUsersFieldsChoices
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

final class UsersFindResponseUsersUserExternalAuthentications
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

final class UsersFindResponseUsersSelfPermissions
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

final class UsersFindResponseUsersEditPermissions
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

final class UsersFindResponseUsersBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersFindResponseUsersBirthdayTimeStamp */
        public readonly UsersFindResponseUsersBirthdayTimeStamp $timeStamp,
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
            UsersFindResponseUsersBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersFindResponseUsersBirthdayTimeStamp
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

final class UsersFindResponseUsersUserFollowing
{
    public function __construct(
        /** @var list<UsersFindResponseUsersUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersFindResponseUsersUserFollowingUsers => UsersFindResponseUsersUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersFindResponseUsersUserFollowingUsers
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

final class UsersFindResponseUsersUserFollowers
{
    public function __construct(
        /** @var list<UsersFindResponseUsersUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersFindResponseUsersUserFollowersUsers => UsersFindResponseUsersUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersFindResponseUsersUserFollowersUsers
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

final class UsersFindResponseSystemInfo
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

final class UsersGetResponse
{
    public function __construct(
        /** @var UsersGetResponseUser */
        public readonly UsersGetResponseUser $user,
        /** @var UsersGetResponseSystemInfo */
        public readonly UsersGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            UsersGetResponseUser::fromArray($data['user']),
            UsersGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersGetResponseUser
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
        /** @var UsersGetResponseUserLinks */
        public readonly UsersGetResponseUserLinks $links,
        /** @var UsersGetResponseUserPermissions */
        public readonly UsersGetResponseUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersGetResponseUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersGetResponseUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersGetResponseUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersGetResponseUserSelfPermissions */
        public readonly UsersGetResponseUserSelfPermissions $self_permissions,
        /** @var UsersGetResponseUserEditPermissions */
        public readonly UsersGetResponseUserEditPermissions $edit_permissions,
        /** @var UsersGetResponseUserBirthday */
        public readonly UsersGetResponseUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersGetResponseUserUserFollowing */
        public readonly UsersGetResponseUserUserFollowing $user_following,
        /** @var UsersGetResponseUserUserFollowers */
        public readonly UsersGetResponseUserUserFollowers $user_followers,
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
            UsersGetResponseUserLinks::fromArray($data['links']),
            UsersGetResponseUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersGetResponseUserUserGroups => UsersGetResponseUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersGetResponseUserFields => UsersGetResponseUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersGetResponseUserUserExternalAuthentications => UsersGetResponseUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersGetResponseUserSelfPermissions::fromArray($data['self_permissions']),
            UsersGetResponseUserEditPermissions::fromArray($data['edit_permissions']),
            UsersGetResponseUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersGetResponseUserUserFollowing::fromArray($data['user_following']),
            UsersGetResponseUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersGetResponseUserLinks
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

final class UsersGetResponseUserPermissions
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

final class UsersGetResponseUserUserGroups
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

final class UsersGetResponseUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersGetResponseUserFieldsChoices> */
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
            array_map(static fn (array $item): UsersGetResponseUserFieldsChoices => UsersGetResponseUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersGetResponseUserFieldsChoices
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

final class UsersGetResponseUserUserExternalAuthentications
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

final class UsersGetResponseUserSelfPermissions
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

final class UsersGetResponseUserEditPermissions
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

final class UsersGetResponseUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersGetResponseUserBirthdayTimeStamp */
        public readonly UsersGetResponseUserBirthdayTimeStamp $timeStamp,
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
            UsersGetResponseUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersGetResponseUserBirthdayTimeStamp
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

final class UsersGetResponseUserUserFollowing
{
    public function __construct(
        /** @var list<UsersGetResponseUserUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersGetResponseUserUserFollowingUsers => UsersGetResponseUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersGetResponseUserUserFollowingUsers
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

final class UsersGetResponseUserUserFollowers
{
    public function __construct(
        /** @var list<UsersGetResponseUserUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersGetResponseUserUserFollowersUsers => UsersGetResponseUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersGetResponseUserUserFollowersUsers
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

final class UsersGetResponseSystemInfo
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

final class UsersEditResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersEditResponseSystemInfo|null */
        public readonly ?UsersEditResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersEditResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersEditResponseSystemInfo
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

final class UsersClaimsResponse
{
    public function __construct(
        /** @var list<UsersClaimsResponseClaims> */
        public readonly array $claims,
        /** @var UsersClaimsResponseStats */
        public readonly UsersClaimsResponseStats $stats,
        /** @var UsersClaimsResponseSystemInfo */
        public readonly UsersClaimsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersClaimsResponseClaims => UsersClaimsResponseClaims::fromArray($item), $data['claims']),
            UsersClaimsResponseStats::fromArray($data['stats']),
            UsersClaimsResponseSystemInfo::fromArray($data['system_info']),
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
        /** @var UsersClaimsResponseClaimsAuthor */
        public readonly UsersClaimsResponseClaimsAuthor $author,
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
            UsersClaimsResponseClaimsAuthor::fromArray($data['author']),
        );
    }
}

final class UsersClaimsResponseClaimsAuthor
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
        /** @var UsersClaimsResponseClaimsAuthorLinks */
        public readonly UsersClaimsResponseClaimsAuthorLinks $links,
        /** @var UsersClaimsResponseClaimsAuthorPermissions */
        public readonly UsersClaimsResponseClaimsAuthorPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersClaimsResponseClaimsAuthorUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersClaimsResponseClaimsAuthorFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersClaimsResponseClaimsAuthorUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersClaimsResponseClaimsAuthorSelfPermissions */
        public readonly UsersClaimsResponseClaimsAuthorSelfPermissions $self_permissions,
        /** @var UsersClaimsResponseClaimsAuthorEditPermissions */
        public readonly UsersClaimsResponseClaimsAuthorEditPermissions $edit_permissions,
        /** @var UsersClaimsResponseClaimsAuthorBirthday */
        public readonly UsersClaimsResponseClaimsAuthorBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersClaimsResponseClaimsAuthorUserFollowing */
        public readonly UsersClaimsResponseClaimsAuthorUserFollowing $user_following,
        /** @var UsersClaimsResponseClaimsAuthorUserFollowers */
        public readonly UsersClaimsResponseClaimsAuthorUserFollowers $user_followers,
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
            UsersClaimsResponseClaimsAuthorLinks::fromArray($data['links']),
            UsersClaimsResponseClaimsAuthorPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersClaimsResponseClaimsAuthorUserGroups => UsersClaimsResponseClaimsAuthorUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersClaimsResponseClaimsAuthorFields => UsersClaimsResponseClaimsAuthorFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersClaimsResponseClaimsAuthorUserExternalAuthentications => UsersClaimsResponseClaimsAuthorUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersClaimsResponseClaimsAuthorSelfPermissions::fromArray($data['self_permissions']),
            UsersClaimsResponseClaimsAuthorEditPermissions::fromArray($data['edit_permissions']),
            UsersClaimsResponseClaimsAuthorBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersClaimsResponseClaimsAuthorUserFollowing::fromArray($data['user_following']),
            UsersClaimsResponseClaimsAuthorUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersClaimsResponseClaimsAuthorLinks
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

final class UsersClaimsResponseClaimsAuthorPermissions
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

final class UsersClaimsResponseClaimsAuthorUserGroups
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

final class UsersClaimsResponseClaimsAuthorFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersClaimsResponseClaimsAuthorFieldsChoices> */
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
            array_map(static fn (array $item): UsersClaimsResponseClaimsAuthorFieldsChoices => UsersClaimsResponseClaimsAuthorFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersClaimsResponseClaimsAuthorFieldsChoices
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

final class UsersClaimsResponseClaimsAuthorUserExternalAuthentications
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

final class UsersClaimsResponseClaimsAuthorSelfPermissions
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

final class UsersClaimsResponseClaimsAuthorEditPermissions
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

final class UsersClaimsResponseClaimsAuthorBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersClaimsResponseClaimsAuthorBirthdayTimeStamp */
        public readonly UsersClaimsResponseClaimsAuthorBirthdayTimeStamp $timeStamp,
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
            UsersClaimsResponseClaimsAuthorBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersClaimsResponseClaimsAuthorBirthdayTimeStamp
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

final class UsersClaimsResponseClaimsAuthorUserFollowing
{
    public function __construct(
        /** @var list<UsersClaimsResponseClaimsAuthorUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersClaimsResponseClaimsAuthorUserFollowingUsers => UsersClaimsResponseClaimsAuthorUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersClaimsResponseClaimsAuthorUserFollowingUsers
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

final class UsersClaimsResponseClaimsAuthorUserFollowers
{
    public function __construct(
        /** @var list<UsersClaimsResponseClaimsAuthorUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersClaimsResponseClaimsAuthorUserFollowersUsers => UsersClaimsResponseClaimsAuthorUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersClaimsResponseClaimsAuthorUserFollowersUsers
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

final class UsersClaimsResponseSystemInfo
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

final class UsersAvatarUploadResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var UsersAvatarUploadResponseSystemInfo */
        public readonly UsersAvatarUploadResponseSystemInfo $system_info,
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
            UsersAvatarUploadResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersAvatarUploadResponseSystemInfo
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

final class UsersAvatarDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersAvatarDeleteResponseSystemInfo|null */
        public readonly ?UsersAvatarDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersAvatarDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersAvatarDeleteResponseSystemInfo
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

final class UsersAvatarCropResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var UsersAvatarCropResponseSystemInfo */
        public readonly UsersAvatarCropResponseSystemInfo $system_info,
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
            UsersAvatarCropResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersAvatarCropResponseSystemInfo
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

final class UsersBackgroundUploadResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var UsersBackgroundUploadResponseSystemInfo */
        public readonly UsersBackgroundUploadResponseSystemInfo $system_info,
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
            UsersBackgroundUploadResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersBackgroundUploadResponseSystemInfo
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

final class UsersBackgroundDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersBackgroundDeleteResponseSystemInfo|null */
        public readonly ?UsersBackgroundDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersBackgroundDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersBackgroundDeleteResponseSystemInfo
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

final class UsersBackgroundCropResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var UsersBackgroundCropResponseSystemInfo */
        public readonly UsersBackgroundCropResponseSystemInfo $system_info,
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
            UsersBackgroundCropResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersBackgroundCropResponseSystemInfo
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

final class UsersFollowersResponse
{
    public function __construct(
        /** @var list<UsersFollowersResponseUsers> */
        public readonly array $users,
        public readonly int $users_total,
        /** @var UsersFollowersResponseLinks */
        public readonly UsersFollowersResponseLinks $links,
        /** @var UsersFollowersResponseSystemInfo */
        public readonly UsersFollowersResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersFollowersResponseUsers => UsersFollowersResponseUsers::fromArray($item), $data['users']),
            $data['users_total'],
            UsersFollowersResponseLinks::fromArray($data['links']),
            UsersFollowersResponseSystemInfo::fromArray($data['system_info']),
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

final class UsersFollowersResponseSystemInfo
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

final class UsersFollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersFollowResponseSystemInfo|null */
        public readonly ?UsersFollowResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersFollowResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersFollowResponseSystemInfo
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

final class UsersUnfollowResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersUnfollowResponseSystemInfo|null */
        public readonly ?UsersUnfollowResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersUnfollowResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersUnfollowResponseSystemInfo
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

final class UsersFollowingsResponse
{
    public function __construct(
        /** @var list<UsersFollowingsResponseUsers> */
        public readonly array $users,
        public readonly int $users_total,
        /** @var UsersFollowingsResponseSystemInfo */
        public readonly UsersFollowingsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersFollowingsResponseUsers => UsersFollowingsResponseUsers::fromArray($item), $data['users']),
            $data['users_total'],
            UsersFollowingsResponseSystemInfo::fromArray($data['system_info']),
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

final class UsersFollowingsResponseSystemInfo
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

final class UsersLikesResponse
{
    public function __construct(
        public readonly int $page,
        public readonly int $perPage,
        public readonly string $contentType,
        public readonly int $totalLikes,
        /** @var UsersLikesResponseLikes */
        public readonly UsersLikesResponseLikes $likes,
        /** @var UsersLikesResponseSystemInfo */
        public readonly UsersLikesResponseSystemInfo $system_info,
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
            UsersLikesResponseSystemInfo::fromArray($data['system_info']),
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
        /** @var UsersLikesResponseLikesData1234567890User */
        public readonly UsersLikesResponseLikesData1234567890User $user,
        /** @var UsersLikesResponseLikesData1234567890ActionUser */
        public readonly UsersLikesResponseLikesData1234567890ActionUser $actionUser,
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
            UsersLikesResponseLikesData1234567890User::fromArray($data['user']),
            UsersLikesResponseLikesData1234567890ActionUser::fromArray($data['actionUser']),
            $data['messageHtml'],
            $data['post_date'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890User
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
        /** @var UsersLikesResponseLikesData1234567890UserLinks */
        public readonly UsersLikesResponseLikesData1234567890UserLinks $links,
        /** @var UsersLikesResponseLikesData1234567890UserPermissions */
        public readonly UsersLikesResponseLikesData1234567890UserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersLikesResponseLikesData1234567890UserUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersLikesResponseLikesData1234567890UserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersLikesResponseLikesData1234567890UserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersLikesResponseLikesData1234567890UserSelfPermissions */
        public readonly UsersLikesResponseLikesData1234567890UserSelfPermissions $self_permissions,
        /** @var UsersLikesResponseLikesData1234567890UserEditPermissions */
        public readonly UsersLikesResponseLikesData1234567890UserEditPermissions $edit_permissions,
        /** @var UsersLikesResponseLikesData1234567890UserBirthday */
        public readonly UsersLikesResponseLikesData1234567890UserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersLikesResponseLikesData1234567890UserUserFollowing */
        public readonly UsersLikesResponseLikesData1234567890UserUserFollowing $user_following,
        /** @var UsersLikesResponseLikesData1234567890UserUserFollowers */
        public readonly UsersLikesResponseLikesData1234567890UserUserFollowers $user_followers,
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
            UsersLikesResponseLikesData1234567890UserLinks::fromArray($data['links']),
            UsersLikesResponseLikesData1234567890UserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890UserUserGroups => UsersLikesResponseLikesData1234567890UserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890UserFields => UsersLikesResponseLikesData1234567890UserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890UserUserExternalAuthentications => UsersLikesResponseLikesData1234567890UserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersLikesResponseLikesData1234567890UserSelfPermissions::fromArray($data['self_permissions']),
            UsersLikesResponseLikesData1234567890UserEditPermissions::fromArray($data['edit_permissions']),
            UsersLikesResponseLikesData1234567890UserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersLikesResponseLikesData1234567890UserUserFollowing::fromArray($data['user_following']),
            UsersLikesResponseLikesData1234567890UserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890UserLinks
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

final class UsersLikesResponseLikesData1234567890UserPermissions
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

final class UsersLikesResponseLikesData1234567890UserUserGroups
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

final class UsersLikesResponseLikesData1234567890UserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersLikesResponseLikesData1234567890UserFieldsChoices> */
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
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890UserFieldsChoices => UsersLikesResponseLikesData1234567890UserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890UserFieldsChoices
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

final class UsersLikesResponseLikesData1234567890UserUserExternalAuthentications
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

final class UsersLikesResponseLikesData1234567890UserSelfPermissions
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

final class UsersLikesResponseLikesData1234567890UserEditPermissions
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

final class UsersLikesResponseLikesData1234567890UserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersLikesResponseLikesData1234567890UserBirthdayTimeStamp */
        public readonly UsersLikesResponseLikesData1234567890UserBirthdayTimeStamp $timeStamp,
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
            UsersLikesResponseLikesData1234567890UserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890UserBirthdayTimeStamp
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

final class UsersLikesResponseLikesData1234567890UserUserFollowing
{
    public function __construct(
        /** @var list<UsersLikesResponseLikesData1234567890UserUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890UserUserFollowingUsers => UsersLikesResponseLikesData1234567890UserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890UserUserFollowingUsers
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

final class UsersLikesResponseLikesData1234567890UserUserFollowers
{
    public function __construct(
        /** @var list<UsersLikesResponseLikesData1234567890UserUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890UserUserFollowersUsers => UsersLikesResponseLikesData1234567890UserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890UserUserFollowersUsers
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

final class UsersLikesResponseLikesData1234567890ActionUser
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
        /** @var UsersLikesResponseLikesData1234567890ActionUserLinks */
        public readonly UsersLikesResponseLikesData1234567890ActionUserLinks $links,
        /** @var UsersLikesResponseLikesData1234567890ActionUserPermissions */
        public readonly UsersLikesResponseLikesData1234567890ActionUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersLikesResponseLikesData1234567890ActionUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersLikesResponseLikesData1234567890ActionUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersLikesResponseLikesData1234567890ActionUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersLikesResponseLikesData1234567890ActionUserSelfPermissions */
        public readonly UsersLikesResponseLikesData1234567890ActionUserSelfPermissions $self_permissions,
        /** @var UsersLikesResponseLikesData1234567890ActionUserEditPermissions */
        public readonly UsersLikesResponseLikesData1234567890ActionUserEditPermissions $edit_permissions,
        /** @var UsersLikesResponseLikesData1234567890ActionUserBirthday */
        public readonly UsersLikesResponseLikesData1234567890ActionUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersLikesResponseLikesData1234567890ActionUserUserFollowing */
        public readonly UsersLikesResponseLikesData1234567890ActionUserUserFollowing $user_following,
        /** @var UsersLikesResponseLikesData1234567890ActionUserUserFollowers */
        public readonly UsersLikesResponseLikesData1234567890ActionUserUserFollowers $user_followers,
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
            UsersLikesResponseLikesData1234567890ActionUserLinks::fromArray($data['links']),
            UsersLikesResponseLikesData1234567890ActionUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890ActionUserUserGroups => UsersLikesResponseLikesData1234567890ActionUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890ActionUserFields => UsersLikesResponseLikesData1234567890ActionUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890ActionUserUserExternalAuthentications => UsersLikesResponseLikesData1234567890ActionUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersLikesResponseLikesData1234567890ActionUserSelfPermissions::fromArray($data['self_permissions']),
            UsersLikesResponseLikesData1234567890ActionUserEditPermissions::fromArray($data['edit_permissions']),
            UsersLikesResponseLikesData1234567890ActionUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersLikesResponseLikesData1234567890ActionUserUserFollowing::fromArray($data['user_following']),
            UsersLikesResponseLikesData1234567890ActionUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890ActionUserLinks
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

final class UsersLikesResponseLikesData1234567890ActionUserPermissions
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

final class UsersLikesResponseLikesData1234567890ActionUserUserGroups
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

final class UsersLikesResponseLikesData1234567890ActionUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersLikesResponseLikesData1234567890ActionUserFieldsChoices> */
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
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890ActionUserFieldsChoices => UsersLikesResponseLikesData1234567890ActionUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890ActionUserFieldsChoices
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

final class UsersLikesResponseLikesData1234567890ActionUserUserExternalAuthentications
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

final class UsersLikesResponseLikesData1234567890ActionUserSelfPermissions
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

final class UsersLikesResponseLikesData1234567890ActionUserEditPermissions
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

final class UsersLikesResponseLikesData1234567890ActionUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersLikesResponseLikesData1234567890ActionUserBirthdayTimeStamp */
        public readonly UsersLikesResponseLikesData1234567890ActionUserBirthdayTimeStamp $timeStamp,
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
            UsersLikesResponseLikesData1234567890ActionUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890ActionUserBirthdayTimeStamp
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

final class UsersLikesResponseLikesData1234567890ActionUserUserFollowing
{
    public function __construct(
        /** @var list<UsersLikesResponseLikesData1234567890ActionUserUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890ActionUserUserFollowingUsers => UsersLikesResponseLikesData1234567890ActionUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890ActionUserUserFollowingUsers
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

final class UsersLikesResponseLikesData1234567890ActionUserUserFollowers
{
    public function __construct(
        /** @var list<UsersLikesResponseLikesData1234567890ActionUserUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersLikesResponseLikesData1234567890ActionUserUserFollowersUsers => UsersLikesResponseLikesData1234567890ActionUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersLikesResponseLikesData1234567890ActionUserUserFollowersUsers
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

final class UsersLikesResponseSystemInfo
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

final class UsersIgnoredResponse
{
    public function __construct(
        /** @var list<UsersIgnoredResponseUsers> */
        public readonly array $users,
        /** @var UsersIgnoredResponseSystemInfo */
        public readonly UsersIgnoredResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersIgnoredResponseUsers => UsersIgnoredResponseUsers::fromArray($item), $data['users']),
            UsersIgnoredResponseSystemInfo::fromArray($data['system_info']),
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

final class UsersIgnoredResponseSystemInfo
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

final class UsersIgnoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersIgnoreResponseSystemInfo|null */
        public readonly ?UsersIgnoreResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersIgnoreResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersIgnoreResponseSystemInfo
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

final class UsersIgnoreEditResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersIgnoreEditResponseSystemInfo|null */
        public readonly ?UsersIgnoreEditResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersIgnoreEditResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersIgnoreEditResponseSystemInfo
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

final class UsersUnignoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersUnignoreResponseSystemInfo|null */
        public readonly ?UsersUnignoreResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersUnignoreResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersUnignoreResponseSystemInfo
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

final class UsersContentsResponse
{
    public function __construct(
        /** @var list<UsersContentsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var UsersContentsResponseUser */
        public readonly UsersContentsResponseUser $user,
        /** @var UsersContentsResponseLinks */
        public readonly UsersContentsResponseLinks $links,
        /** @var UsersContentsResponseSystemInfo */
        public readonly UsersContentsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersContentsResponseData => UsersContentsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            UsersContentsResponseUser::fromArray($data['user']),
            UsersContentsResponseLinks::fromArray($data['links']),
            UsersContentsResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): UsersContentsResponseDataLikeUsers => UsersContentsResponseDataLikeUsers::fromArray($item), $data['like_users']),
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

final class UsersContentsResponseUser
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
        /** @var UsersContentsResponseUserLinks */
        public readonly UsersContentsResponseUserLinks $links,
        /** @var UsersContentsResponseUserPermissions */
        public readonly UsersContentsResponseUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<UsersContentsResponseUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<UsersContentsResponseUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<UsersContentsResponseUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var UsersContentsResponseUserSelfPermissions */
        public readonly UsersContentsResponseUserSelfPermissions $self_permissions,
        /** @var UsersContentsResponseUserEditPermissions */
        public readonly UsersContentsResponseUserEditPermissions $edit_permissions,
        /** @var UsersContentsResponseUserBirthday */
        public readonly UsersContentsResponseUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var UsersContentsResponseUserUserFollowing */
        public readonly UsersContentsResponseUserUserFollowing $user_following,
        /** @var UsersContentsResponseUserUserFollowers */
        public readonly UsersContentsResponseUserUserFollowers $user_followers,
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
            UsersContentsResponseUserLinks::fromArray($data['links']),
            UsersContentsResponseUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): UsersContentsResponseUserUserGroups => UsersContentsResponseUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): UsersContentsResponseUserFields => UsersContentsResponseUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): UsersContentsResponseUserUserExternalAuthentications => UsersContentsResponseUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            UsersContentsResponseUserSelfPermissions::fromArray($data['self_permissions']),
            UsersContentsResponseUserEditPermissions::fromArray($data['edit_permissions']),
            UsersContentsResponseUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            UsersContentsResponseUserUserFollowing::fromArray($data['user_following']),
            UsersContentsResponseUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class UsersContentsResponseUserLinks
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

final class UsersContentsResponseUserPermissions
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

final class UsersContentsResponseUserUserGroups
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

final class UsersContentsResponseUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<UsersContentsResponseUserFieldsChoices> */
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
            array_map(static fn (array $item): UsersContentsResponseUserFieldsChoices => UsersContentsResponseUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class UsersContentsResponseUserFieldsChoices
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

final class UsersContentsResponseUserUserExternalAuthentications
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

final class UsersContentsResponseUserSelfPermissions
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

final class UsersContentsResponseUserEditPermissions
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

final class UsersContentsResponseUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var UsersContentsResponseUserBirthdayTimeStamp */
        public readonly UsersContentsResponseUserBirthdayTimeStamp $timeStamp,
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
            UsersContentsResponseUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class UsersContentsResponseUserBirthdayTimeStamp
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

final class UsersContentsResponseUserUserFollowing
{
    public function __construct(
        /** @var list<UsersContentsResponseUserUserFollowingUsers> */
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
            array_map(static fn (array $item): UsersContentsResponseUserUserFollowingUsers => UsersContentsResponseUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersContentsResponseUserUserFollowingUsers
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

final class UsersContentsResponseUserUserFollowers
{
    public function __construct(
        /** @var list<UsersContentsResponseUserUserFollowersUsers> */
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
            array_map(static fn (array $item): UsersContentsResponseUserUserFollowersUsers => UsersContentsResponseUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class UsersContentsResponseUserUserFollowersUsers
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

final class UsersContentsResponseSystemInfo
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

final class UsersTrophiesResponse
{
    public function __construct(
        /** @var list<UsersTrophiesResponseTrophies> */
        public readonly array $trophies,
        /** @var UsersTrophiesResponseSystemInfo */
        public readonly UsersTrophiesResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersTrophiesResponseTrophies => UsersTrophiesResponseTrophies::fromArray($item), $data['trophies']),
            UsersTrophiesResponseSystemInfo::fromArray($data['system_info']),
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

final class UsersTrophiesResponseSystemInfo
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

final class UsersSecretAnswerTypesResponse
{
    public function __construct(
        /** @var list<UsersSecretAnswerTypesResponseData> */
        public readonly array $data,
        /** @var UsersSecretAnswerTypesResponseSystemInfo */
        public readonly UsersSecretAnswerTypesResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): UsersSecretAnswerTypesResponseData => UsersSecretAnswerTypesResponseData::fromArray($item), $data['data']),
            UsersSecretAnswerTypesResponseSystemInfo::fromArray($data['system_info']),
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

final class UsersSecretAnswerTypesResponseSystemInfo
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

final class UsersSAResetResponse
{
    public function __construct(
        public readonly bool $success,
        public readonly string $waiting_time,
        /** @var UsersSAResetResponseSystemInfo */
        public readonly UsersSAResetResponseSystemInfo $system_info,
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
            UsersSAResetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class UsersSAResetResponseSystemInfo
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

final class UsersSACancelResetResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var UsersSACancelResetResponseSystemInfo|null */
        public readonly ?UsersSACancelResetResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? UsersSACancelResetResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class UsersSACancelResetResponseSystemInfo
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

final class ProfilePostsListResponse
{
    public function __construct(
        /** @var list<ProfilePostsListResponseProfilePosts> */
        public readonly array $profile_posts,
        public readonly int $totalProfilePosts,
        public readonly bool $canPostOnProfile,
        /** @var ProfilePostsListResponseLinks */
        public readonly ProfilePostsListResponseLinks $links,
        /** @var ProfilePostsListResponseSystemInfo */
        public readonly ProfilePostsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ProfilePostsListResponseProfilePosts => ProfilePostsListResponseProfilePosts::fromArray($item), $data['profile_posts']),
            $data['totalProfilePosts'],
            $data['canPostOnProfile'],
            ProfilePostsListResponseLinks::fromArray($data['links']),
            ProfilePostsListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ProfilePostsListResponseProfilePosts
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
        /** @var ProfilePostsListResponseProfilePostsLinks */
        public readonly ProfilePostsListResponseProfilePostsLinks $links,
        /** @var ProfilePostsListResponseProfilePostsPermissions */
        public readonly ProfilePostsListResponseProfilePostsPermissions $permissions,
        /** @var ProfilePostsListResponseProfilePostsTimelineUser */
        public readonly ProfilePostsListResponseProfilePostsTimelineUser $timeline_user,
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
            ProfilePostsListResponseProfilePostsLinks::fromArray($data['links']),
            ProfilePostsListResponseProfilePostsPermissions::fromArray($data['permissions']),
            ProfilePostsListResponseProfilePostsTimelineUser::fromArray($data['timeline_user']),
        );
    }
}

final class ProfilePostsListResponseProfilePostsLinks
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

final class ProfilePostsListResponseProfilePostsPermissions
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

final class ProfilePostsListResponseProfilePostsTimelineUser
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
        /** @var ProfilePostsListResponseProfilePostsTimelineUserLinks */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserLinks $links,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserPermissions */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<ProfilePostsListResponseProfilePostsTimelineUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<ProfilePostsListResponseProfilePostsTimelineUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<ProfilePostsListResponseProfilePostsTimelineUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserSelfPermissions */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserSelfPermissions $self_permissions,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserEditPermissions */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserEditPermissions $edit_permissions,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserBirthday */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserUserFollowing */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserUserFollowing $user_following,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserUserFollowers */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserUserFollowers $user_followers,
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
            ProfilePostsListResponseProfilePostsTimelineUserLinks::fromArray($data['links']),
            ProfilePostsListResponseProfilePostsTimelineUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): ProfilePostsListResponseProfilePostsTimelineUserUserGroups => ProfilePostsListResponseProfilePostsTimelineUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): ProfilePostsListResponseProfilePostsTimelineUserFields => ProfilePostsListResponseProfilePostsTimelineUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): ProfilePostsListResponseProfilePostsTimelineUserUserExternalAuthentications => ProfilePostsListResponseProfilePostsTimelineUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            ProfilePostsListResponseProfilePostsTimelineUserSelfPermissions::fromArray($data['self_permissions']),
            ProfilePostsListResponseProfilePostsTimelineUserEditPermissions::fromArray($data['edit_permissions']),
            ProfilePostsListResponseProfilePostsTimelineUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            ProfilePostsListResponseProfilePostsTimelineUserUserFollowing::fromArray($data['user_following']),
            ProfilePostsListResponseProfilePostsTimelineUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class ProfilePostsListResponseProfilePostsTimelineUserLinks
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

final class ProfilePostsListResponseProfilePostsTimelineUserPermissions
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

final class ProfilePostsListResponseProfilePostsTimelineUserUserGroups
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

final class ProfilePostsListResponseProfilePostsTimelineUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<ProfilePostsListResponseProfilePostsTimelineUserFieldsChoices> */
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
            array_map(static fn (array $item): ProfilePostsListResponseProfilePostsTimelineUserFieldsChoices => ProfilePostsListResponseProfilePostsTimelineUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class ProfilePostsListResponseProfilePostsTimelineUserFieldsChoices
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

final class ProfilePostsListResponseProfilePostsTimelineUserUserExternalAuthentications
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

final class ProfilePostsListResponseProfilePostsTimelineUserSelfPermissions
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

final class ProfilePostsListResponseProfilePostsTimelineUserEditPermissions
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

final class ProfilePostsListResponseProfilePostsTimelineUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var ProfilePostsListResponseProfilePostsTimelineUserBirthdayTimeStamp */
        public readonly ProfilePostsListResponseProfilePostsTimelineUserBirthdayTimeStamp $timeStamp,
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
            ProfilePostsListResponseProfilePostsTimelineUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class ProfilePostsListResponseProfilePostsTimelineUserBirthdayTimeStamp
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

final class ProfilePostsListResponseProfilePostsTimelineUserUserFollowing
{
    public function __construct(
        /** @var list<ProfilePostsListResponseProfilePostsTimelineUserUserFollowingUsers> */
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
            array_map(static fn (array $item): ProfilePostsListResponseProfilePostsTimelineUserUserFollowingUsers => ProfilePostsListResponseProfilePostsTimelineUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class ProfilePostsListResponseProfilePostsTimelineUserUserFollowingUsers
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

final class ProfilePostsListResponseProfilePostsTimelineUserUserFollowers
{
    public function __construct(
        /** @var list<ProfilePostsListResponseProfilePostsTimelineUserUserFollowersUsers> */
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
            array_map(static fn (array $item): ProfilePostsListResponseProfilePostsTimelineUserUserFollowersUsers => ProfilePostsListResponseProfilePostsTimelineUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class ProfilePostsListResponseProfilePostsTimelineUserUserFollowersUsers
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

final class ProfilePostsListResponseSystemInfo
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

final class ProfilePostsGetResponse
{
    public function __construct(
        /** @var ProfilePostsGetResponseProfilePost */
        public readonly ProfilePostsGetResponseProfilePost $profile_post,
        /** @var ProfilePostsGetResponseSystemInfo */
        public readonly ProfilePostsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ProfilePostsGetResponseProfilePost::fromArray($data['profile_post']),
            ProfilePostsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ProfilePostsGetResponseProfilePost
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
        /** @var ProfilePostsGetResponseProfilePostLinks */
        public readonly ProfilePostsGetResponseProfilePostLinks $links,
        /** @var ProfilePostsGetResponseProfilePostPermissions */
        public readonly ProfilePostsGetResponseProfilePostPermissions $permissions,
        /** @var ProfilePostsGetResponseProfilePostTimelineUser */
        public readonly ProfilePostsGetResponseProfilePostTimelineUser $timeline_user,
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
            ProfilePostsGetResponseProfilePostLinks::fromArray($data['links']),
            ProfilePostsGetResponseProfilePostPermissions::fromArray($data['permissions']),
            ProfilePostsGetResponseProfilePostTimelineUser::fromArray($data['timeline_user']),
        );
    }
}

final class ProfilePostsGetResponseProfilePostLinks
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

final class ProfilePostsGetResponseProfilePostPermissions
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

final class ProfilePostsGetResponseProfilePostTimelineUser
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
        /** @var ProfilePostsGetResponseProfilePostTimelineUserLinks */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserLinks $links,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserPermissions */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<ProfilePostsGetResponseProfilePostTimelineUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<ProfilePostsGetResponseProfilePostTimelineUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<ProfilePostsGetResponseProfilePostTimelineUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserSelfPermissions */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserSelfPermissions $self_permissions,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserEditPermissions */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserEditPermissions $edit_permissions,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserBirthday */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserUserFollowing */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserUserFollowing $user_following,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserUserFollowers */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserUserFollowers $user_followers,
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
            ProfilePostsGetResponseProfilePostTimelineUserLinks::fromArray($data['links']),
            ProfilePostsGetResponseProfilePostTimelineUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): ProfilePostsGetResponseProfilePostTimelineUserUserGroups => ProfilePostsGetResponseProfilePostTimelineUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): ProfilePostsGetResponseProfilePostTimelineUserFields => ProfilePostsGetResponseProfilePostTimelineUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): ProfilePostsGetResponseProfilePostTimelineUserUserExternalAuthentications => ProfilePostsGetResponseProfilePostTimelineUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            ProfilePostsGetResponseProfilePostTimelineUserSelfPermissions::fromArray($data['self_permissions']),
            ProfilePostsGetResponseProfilePostTimelineUserEditPermissions::fromArray($data['edit_permissions']),
            ProfilePostsGetResponseProfilePostTimelineUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            ProfilePostsGetResponseProfilePostTimelineUserUserFollowing::fromArray($data['user_following']),
            ProfilePostsGetResponseProfilePostTimelineUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class ProfilePostsGetResponseProfilePostTimelineUserLinks
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

final class ProfilePostsGetResponseProfilePostTimelineUserPermissions
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

final class ProfilePostsGetResponseProfilePostTimelineUserUserGroups
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

final class ProfilePostsGetResponseProfilePostTimelineUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<ProfilePostsGetResponseProfilePostTimelineUserFieldsChoices> */
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
            array_map(static fn (array $item): ProfilePostsGetResponseProfilePostTimelineUserFieldsChoices => ProfilePostsGetResponseProfilePostTimelineUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class ProfilePostsGetResponseProfilePostTimelineUserFieldsChoices
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

final class ProfilePostsGetResponseProfilePostTimelineUserUserExternalAuthentications
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

final class ProfilePostsGetResponseProfilePostTimelineUserSelfPermissions
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

final class ProfilePostsGetResponseProfilePostTimelineUserEditPermissions
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

final class ProfilePostsGetResponseProfilePostTimelineUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var ProfilePostsGetResponseProfilePostTimelineUserBirthdayTimeStamp */
        public readonly ProfilePostsGetResponseProfilePostTimelineUserBirthdayTimeStamp $timeStamp,
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
            ProfilePostsGetResponseProfilePostTimelineUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class ProfilePostsGetResponseProfilePostTimelineUserBirthdayTimeStamp
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

final class ProfilePostsGetResponseProfilePostTimelineUserUserFollowing
{
    public function __construct(
        /** @var list<ProfilePostsGetResponseProfilePostTimelineUserUserFollowingUsers> */
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
            array_map(static fn (array $item): ProfilePostsGetResponseProfilePostTimelineUserUserFollowingUsers => ProfilePostsGetResponseProfilePostTimelineUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class ProfilePostsGetResponseProfilePostTimelineUserUserFollowingUsers
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

final class ProfilePostsGetResponseProfilePostTimelineUserUserFollowers
{
    public function __construct(
        /** @var list<ProfilePostsGetResponseProfilePostTimelineUserUserFollowersUsers> */
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
            array_map(static fn (array $item): ProfilePostsGetResponseProfilePostTimelineUserUserFollowersUsers => ProfilePostsGetResponseProfilePostTimelineUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class ProfilePostsGetResponseProfilePostTimelineUserUserFollowersUsers
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

final class ProfilePostsGetResponseSystemInfo
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

final class ProfilePostsEditResponse
{
    public function __construct(
        /** @var ProfilePostsEditResponseProfilePost */
        public readonly ProfilePostsEditResponseProfilePost $profile_post,
        /** @var ProfilePostsEditResponseSystemInfo */
        public readonly ProfilePostsEditResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ProfilePostsEditResponseProfilePost::fromArray($data['profile_post']),
            ProfilePostsEditResponseSystemInfo::fromArray($data['system_info']),
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

final class ProfilePostsEditResponseSystemInfo
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

final class ProfilePostsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsDeleteResponseSystemInfo|null */
        public readonly ?ProfilePostsDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsDeleteResponseSystemInfo
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

final class ProfilePostsReportReasonsResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $reasons,
        /** @var ProfilePostsReportReasonsResponseSystemInfo */
        public readonly ProfilePostsReportReasonsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['reasons'],
            ProfilePostsReportReasonsResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ProfilePostsReportReasonsResponseSystemInfo
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

final class ProfilePostsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsReportResponseSystemInfo|null */
        public readonly ?ProfilePostsReportResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsReportResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsReportResponseSystemInfo
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

final class ProfilePostsCreateResponse
{
    public function __construct(
        /** @var ProfilePostsCreateResponseProfilePost */
        public readonly ProfilePostsCreateResponseProfilePost $profile_post,
        /** @var ProfilePostsCreateResponseSystemInfo */
        public readonly ProfilePostsCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ProfilePostsCreateResponseProfilePost::fromArray($data['profile_post']),
            ProfilePostsCreateResponseSystemInfo::fromArray($data['system_info']),
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

final class ProfilePostsCreateResponseSystemInfo
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

final class ProfilePostsStickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsStickResponseSystemInfo|null */
        public readonly ?ProfilePostsStickResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsStickResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsStickResponseSystemInfo
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

final class ProfilePostsUnstickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsUnstickResponseSystemInfo|null */
        public readonly ?ProfilePostsUnstickResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsUnstickResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsUnstickResponseSystemInfo
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

final class ProfilePostsLikesResponse
{
    public function __construct(
        /** @var list<ProfilePostsLikesResponseUsers> */
        public readonly array $users,
        /** @var ProfilePostsLikesResponseSystemInfo */
        public readonly ProfilePostsLikesResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ProfilePostsLikesResponseUsers => ProfilePostsLikesResponseUsers::fromArray($item), $data['users']),
            ProfilePostsLikesResponseSystemInfo::fromArray($data['system_info']),
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

final class ProfilePostsLikesResponseSystemInfo
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

final class ProfilePostsLikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsLikeResponseSystemInfo|null */
        public readonly ?ProfilePostsLikeResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsLikeResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsLikeResponseSystemInfo
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

final class ProfilePostsUnlikeResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsUnlikeResponseSystemInfo|null */
        public readonly ?ProfilePostsUnlikeResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsUnlikeResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsUnlikeResponseSystemInfo
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

final class ProfilePostsCommentsListResponse
{
    public function __construct(
        /** @var list<ProfilePostsCommentsListResponseComments> */
        public readonly array $comments,
        public readonly int $comments_total,
        /** @var ProfilePostsCommentsListResponseProfilePost */
        public readonly ProfilePostsCommentsListResponseProfilePost $profile_post,
        /** @var ProfilePostsCommentsListResponseTimelineUser */
        public readonly ProfilePostsCommentsListResponseTimelineUser $timeline_user,
        /** @var ProfilePostsCommentsListResponseSystemInfo */
        public readonly ProfilePostsCommentsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ProfilePostsCommentsListResponseComments => ProfilePostsCommentsListResponseComments::fromArray($item), $data['comments']),
            $data['comments_total'],
            ProfilePostsCommentsListResponseProfilePost::fromArray($data['profile_post']),
            ProfilePostsCommentsListResponseTimelineUser::fromArray($data['timeline_user']),
            ProfilePostsCommentsListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ProfilePostsCommentsListResponseComments
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
        /** @var ProfilePostsCommentsListResponseCommentsLinks */
        public readonly ProfilePostsCommentsListResponseCommentsLinks $links,
        /** @var ProfilePostsCommentsListResponseCommentsPermissions */
        public readonly ProfilePostsCommentsListResponseCommentsPermissions $permissions,
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
            ProfilePostsCommentsListResponseCommentsLinks::fromArray($data['links']),
            ProfilePostsCommentsListResponseCommentsPermissions::fromArray($data['permissions']),
        );
    }
}

final class ProfilePostsCommentsListResponseCommentsLinks
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

final class ProfilePostsCommentsListResponseCommentsPermissions
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

final class ProfilePostsCommentsListResponseTimelineUser
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
        /** @var ProfilePostsCommentsListResponseTimelineUserLinks */
        public readonly ProfilePostsCommentsListResponseTimelineUserLinks $links,
        /** @var ProfilePostsCommentsListResponseTimelineUserPermissions */
        public readonly ProfilePostsCommentsListResponseTimelineUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<ProfilePostsCommentsListResponseTimelineUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<ProfilePostsCommentsListResponseTimelineUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<ProfilePostsCommentsListResponseTimelineUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var ProfilePostsCommentsListResponseTimelineUserSelfPermissions */
        public readonly ProfilePostsCommentsListResponseTimelineUserSelfPermissions $self_permissions,
        /** @var ProfilePostsCommentsListResponseTimelineUserEditPermissions */
        public readonly ProfilePostsCommentsListResponseTimelineUserEditPermissions $edit_permissions,
        /** @var ProfilePostsCommentsListResponseTimelineUserBirthday */
        public readonly ProfilePostsCommentsListResponseTimelineUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var ProfilePostsCommentsListResponseTimelineUserUserFollowing */
        public readonly ProfilePostsCommentsListResponseTimelineUserUserFollowing $user_following,
        /** @var ProfilePostsCommentsListResponseTimelineUserUserFollowers */
        public readonly ProfilePostsCommentsListResponseTimelineUserUserFollowers $user_followers,
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
            ProfilePostsCommentsListResponseTimelineUserLinks::fromArray($data['links']),
            ProfilePostsCommentsListResponseTimelineUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): ProfilePostsCommentsListResponseTimelineUserUserGroups => ProfilePostsCommentsListResponseTimelineUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): ProfilePostsCommentsListResponseTimelineUserFields => ProfilePostsCommentsListResponseTimelineUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): ProfilePostsCommentsListResponseTimelineUserUserExternalAuthentications => ProfilePostsCommentsListResponseTimelineUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            ProfilePostsCommentsListResponseTimelineUserSelfPermissions::fromArray($data['self_permissions']),
            ProfilePostsCommentsListResponseTimelineUserEditPermissions::fromArray($data['edit_permissions']),
            ProfilePostsCommentsListResponseTimelineUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            ProfilePostsCommentsListResponseTimelineUserUserFollowing::fromArray($data['user_following']),
            ProfilePostsCommentsListResponseTimelineUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class ProfilePostsCommentsListResponseTimelineUserLinks
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

final class ProfilePostsCommentsListResponseTimelineUserPermissions
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

final class ProfilePostsCommentsListResponseTimelineUserUserGroups
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

final class ProfilePostsCommentsListResponseTimelineUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<ProfilePostsCommentsListResponseTimelineUserFieldsChoices> */
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
            array_map(static fn (array $item): ProfilePostsCommentsListResponseTimelineUserFieldsChoices => ProfilePostsCommentsListResponseTimelineUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class ProfilePostsCommentsListResponseTimelineUserFieldsChoices
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

final class ProfilePostsCommentsListResponseTimelineUserUserExternalAuthentications
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

final class ProfilePostsCommentsListResponseTimelineUserSelfPermissions
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

final class ProfilePostsCommentsListResponseTimelineUserEditPermissions
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

final class ProfilePostsCommentsListResponseTimelineUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var ProfilePostsCommentsListResponseTimelineUserBirthdayTimeStamp */
        public readonly ProfilePostsCommentsListResponseTimelineUserBirthdayTimeStamp $timeStamp,
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
            ProfilePostsCommentsListResponseTimelineUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class ProfilePostsCommentsListResponseTimelineUserBirthdayTimeStamp
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

final class ProfilePostsCommentsListResponseTimelineUserUserFollowing
{
    public function __construct(
        /** @var list<ProfilePostsCommentsListResponseTimelineUserUserFollowingUsers> */
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
            array_map(static fn (array $item): ProfilePostsCommentsListResponseTimelineUserUserFollowingUsers => ProfilePostsCommentsListResponseTimelineUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class ProfilePostsCommentsListResponseTimelineUserUserFollowingUsers
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

final class ProfilePostsCommentsListResponseTimelineUserUserFollowers
{
    public function __construct(
        /** @var list<ProfilePostsCommentsListResponseTimelineUserUserFollowersUsers> */
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
            array_map(static fn (array $item): ProfilePostsCommentsListResponseTimelineUserUserFollowersUsers => ProfilePostsCommentsListResponseTimelineUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class ProfilePostsCommentsListResponseTimelineUserUserFollowersUsers
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

final class ProfilePostsCommentsListResponseSystemInfo
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

final class ProfilePostsCommentsCreateResponse
{
    public function __construct(
        /** @var ProfilePostsCommentsCreateResponseComment */
        public readonly ProfilePostsCommentsCreateResponseComment $comment,
        /** @var ProfilePostsCommentsCreateResponseSystemInfo */
        public readonly ProfilePostsCommentsCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ProfilePostsCommentsCreateResponseComment::fromArray($data['comment']),
            ProfilePostsCommentsCreateResponseSystemInfo::fromArray($data['system_info']),
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

final class ProfilePostsCommentsCreateResponseSystemInfo
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

final class ProfilePostsCommentsEditResponse
{
    public function __construct(
        /** @var ProfilePostsCommentsEditResponseComment */
        public readonly ProfilePostsCommentsEditResponseComment $comment,
        /** @var ProfilePostsCommentsEditResponseSystemInfo */
        public readonly ProfilePostsCommentsEditResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ProfilePostsCommentsEditResponseComment::fromArray($data['comment']),
            ProfilePostsCommentsEditResponseSystemInfo::fromArray($data['system_info']),
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

final class ProfilePostsCommentsEditResponseSystemInfo
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

final class ProfilePostsCommentsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsCommentsDeleteResponseSystemInfo|null */
        public readonly ?ProfilePostsCommentsDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsCommentsDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsCommentsDeleteResponseSystemInfo
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

final class ProfilePostsCommentsGetResponse
{
    public function __construct(
        /** @var ProfilePostsCommentsGetResponseComment */
        public readonly ProfilePostsCommentsGetResponseComment $comment,
        /** @var ProfilePostsCommentsGetResponseSystemInfo */
        public readonly ProfilePostsCommentsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ProfilePostsCommentsGetResponseComment::fromArray($data['comment']),
            ProfilePostsCommentsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ProfilePostsCommentsGetResponseComment
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
        /** @var ProfilePostsCommentsGetResponseCommentLinks */
        public readonly ProfilePostsCommentsGetResponseCommentLinks $links,
        /** @var ProfilePostsCommentsGetResponseCommentPermissions */
        public readonly ProfilePostsCommentsGetResponseCommentPermissions $permissions,
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
            ProfilePostsCommentsGetResponseCommentLinks::fromArray($data['links']),
            ProfilePostsCommentsGetResponseCommentPermissions::fromArray($data['permissions']),
        );
    }
}

final class ProfilePostsCommentsGetResponseCommentLinks
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

final class ProfilePostsCommentsGetResponseCommentPermissions
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

final class ProfilePostsCommentsGetResponseSystemInfo
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

final class ProfilePostsCommentsReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ProfilePostsCommentsReportResponseSystemInfo|null */
        public readonly ?ProfilePostsCommentsReportResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ProfilePostsCommentsReportResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ProfilePostsCommentsReportResponseSystemInfo
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

final class ConversationsListResponse
{
    public function __construct(
        /** @var list<ConversationsListResponseConversations> */
        public readonly array $conversations,
        public readonly bool $can_start,
        /** @var list<ConversationsListResponseFolders> */
        public readonly array $folders,
        /** @var ConversationsListResponseLinks */
        public readonly ConversationsListResponseLinks $links,
        /** @var ConversationsListResponseSystemInfo */
        public readonly ConversationsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ConversationsListResponseConversations => ConversationsListResponseConversations::fromArray($item), $data['conversations']),
            $data['can_start'],
            array_map(static fn (array $item): ConversationsListResponseFolders => ConversationsListResponseFolders::fromArray($item), $data['folders']),
            ConversationsListResponseLinks::fromArray($data['links']),
            ConversationsListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsListResponseConversations
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
        /** @var ConversationsListResponseConversationsPermissions */
        public readonly ConversationsListResponseConversationsPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsListResponseConversationsRecipient */
        public readonly ConversationsListResponseConversationsRecipient $recipient,
        /** @var list<ConversationsListResponseConversationsRecipients> */
        public readonly array $recipients,
        /** @var ConversationsListResponseConversationsLinks */
        public readonly ConversationsListResponseConversationsLinks $links,
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
            ConversationsListResponseConversationsPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsListResponseConversationsRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsListResponseConversationsRecipients => ConversationsListResponseConversationsRecipients::fromArray($item), $data['recipients']),
            ConversationsListResponseConversationsLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsListResponseConversationsPermissions
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

final class ConversationsListResponseConversationsRecipient
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

final class ConversationsListResponseConversationsRecipients
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

final class ConversationsListResponseConversationsLinks
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

final class ConversationsListResponseSystemInfo
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

final class ConversationsCreateResponse
{
    public function __construct(
        /** @var ConversationsCreateResponseConversation */
        public readonly ConversationsCreateResponseConversation $conversation,
        /** @var ConversationsCreateResponseSystemInfo */
        public readonly ConversationsCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsCreateResponseConversation::fromArray($data['conversation']),
            ConversationsCreateResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsCreateResponseConversation
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
        /** @var ConversationsCreateResponseConversationPermissions */
        public readonly ConversationsCreateResponseConversationPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsCreateResponseConversationRecipient */
        public readonly ConversationsCreateResponseConversationRecipient $recipient,
        /** @var list<ConversationsCreateResponseConversationRecipients> */
        public readonly array $recipients,
        /** @var ConversationsCreateResponseConversationLinks */
        public readonly ConversationsCreateResponseConversationLinks $links,
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
            ConversationsCreateResponseConversationPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsCreateResponseConversationRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsCreateResponseConversationRecipients => ConversationsCreateResponseConversationRecipients::fromArray($item), $data['recipients']),
            ConversationsCreateResponseConversationLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsCreateResponseConversationPermissions
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

final class ConversationsCreateResponseConversationRecipient
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

final class ConversationsCreateResponseConversationRecipients
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

final class ConversationsCreateResponseConversationLinks
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

final class ConversationsCreateResponseSystemInfo
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

final class ConversationsUpdateResponse
{
    public function __construct(
        /** @var ConversationsUpdateResponseConversation */
        public readonly ConversationsUpdateResponseConversation $conversation,
        /** @var ConversationsUpdateResponseSystemInfo */
        public readonly ConversationsUpdateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsUpdateResponseConversation::fromArray($data['conversation']),
            ConversationsUpdateResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsUpdateResponseConversation
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
        /** @var ConversationsUpdateResponseConversationPermissions */
        public readonly ConversationsUpdateResponseConversationPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsUpdateResponseConversationRecipient */
        public readonly ConversationsUpdateResponseConversationRecipient $recipient,
        /** @var list<ConversationsUpdateResponseConversationRecipients> */
        public readonly array $recipients,
        /** @var ConversationsUpdateResponseConversationLinks */
        public readonly ConversationsUpdateResponseConversationLinks $links,
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
            ConversationsUpdateResponseConversationPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsUpdateResponseConversationRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsUpdateResponseConversationRecipients => ConversationsUpdateResponseConversationRecipients::fromArray($item), $data['recipients']),
            ConversationsUpdateResponseConversationLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsUpdateResponseConversationPermissions
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

final class ConversationsUpdateResponseConversationRecipient
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

final class ConversationsUpdateResponseConversationRecipients
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

final class ConversationsUpdateResponseConversationLinks
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

final class ConversationsUpdateResponseSystemInfo
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

final class ConversationsDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsDeleteResponseSystemInfo|null */
        public readonly ?ConversationsDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsDeleteResponseSystemInfo
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

final class ConversationsStartResponse
{
    public function __construct(
        /** @var ConversationsStartResponseConversation */
        public readonly ConversationsStartResponseConversation $conversation,
        /** @var ConversationsStartResponseSystemInfo */
        public readonly ConversationsStartResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsStartResponseConversation::fromArray($data['conversation']),
            ConversationsStartResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsStartResponseConversation
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
        /** @var ConversationsStartResponseConversationPermissions */
        public readonly ConversationsStartResponseConversationPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsStartResponseConversationRecipient */
        public readonly ConversationsStartResponseConversationRecipient $recipient,
        /** @var list<ConversationsStartResponseConversationRecipients> */
        public readonly array $recipients,
        /** @var ConversationsStartResponseConversationLinks */
        public readonly ConversationsStartResponseConversationLinks $links,
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
            ConversationsStartResponseConversationPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsStartResponseConversationRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsStartResponseConversationRecipients => ConversationsStartResponseConversationRecipients::fromArray($item), $data['recipients']),
            ConversationsStartResponseConversationLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsStartResponseConversationPermissions
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

final class ConversationsStartResponseConversationRecipient
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

final class ConversationsStartResponseConversationRecipients
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

final class ConversationsStartResponseConversationLinks
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

final class ConversationsStartResponseSystemInfo
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

final class ConversationsSaveResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsSaveResponseSystemInfo|null */
        public readonly ?ConversationsSaveResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsSaveResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsSaveResponseSystemInfo
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

final class ConversationsGetResponse
{
    public function __construct(
        /** @var ConversationsGetResponseConversation */
        public readonly ConversationsGetResponseConversation $conversation,
        /** @var ConversationsGetResponseSystemInfo */
        public readonly ConversationsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsGetResponseConversation::fromArray($data['conversation']),
            ConversationsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsGetResponseConversation
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
        /** @var ConversationsGetResponseConversationPermissions */
        public readonly ConversationsGetResponseConversationPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsGetResponseConversationRecipient */
        public readonly ConversationsGetResponseConversationRecipient $recipient,
        /** @var list<ConversationsGetResponseConversationRecipients> */
        public readonly array $recipients,
        /** @var ConversationsGetResponseConversationLinks */
        public readonly ConversationsGetResponseConversationLinks $links,
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
            ConversationsGetResponseConversationPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsGetResponseConversationRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsGetResponseConversationRecipients => ConversationsGetResponseConversationRecipients::fromArray($item), $data['recipients']),
            ConversationsGetResponseConversationLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsGetResponseConversationPermissions
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

final class ConversationsGetResponseConversationRecipient
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

final class ConversationsGetResponseConversationRecipients
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

final class ConversationsGetResponseConversationLinks
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

final class ConversationsGetResponseSystemInfo
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

final class ConversationsMessagesListResponse
{
    public function __construct(
        /** @var list<ConversationsMessagesListResponseMessages> */
        public readonly array $messages,
        public readonly int $messages_total,
        /** @var ConversationsMessagesListResponseLinks */
        public readonly ConversationsMessagesListResponseLinks $links,
        /** @var ConversationsMessagesListResponseSystemInfo */
        public readonly ConversationsMessagesListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ConversationsMessagesListResponseMessages => ConversationsMessagesListResponseMessages::fromArray($item), $data['messages']),
            $data['messages_total'],
            ConversationsMessagesListResponseLinks::fromArray($data['links']),
            ConversationsMessagesListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsMessagesListResponseMessages
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
        /** @var ConversationsMessagesListResponseMessagesLinks */
        public readonly ConversationsMessagesListResponseMessagesLinks $links,
        /** @var ConversationsMessagesListResponseMessagesPermissions */
        public readonly ConversationsMessagesListResponseMessagesPermissions $permissions,
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
            ConversationsMessagesListResponseMessagesLinks::fromArray($data['links']),
            ConversationsMessagesListResponseMessagesPermissions::fromArray($data['permissions']),
        );
    }
}

final class ConversationsMessagesListResponseMessagesLinks
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

final class ConversationsMessagesListResponseMessagesPermissions
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

final class ConversationsMessagesListResponseSystemInfo
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

final class ConversationsMessagesCreateResponse
{
    public function __construct(
        /** @var ConversationsMessagesCreateResponseMessage */
        public readonly ConversationsMessagesCreateResponseMessage $message,
        /** @var ConversationsMessagesCreateResponseSystemInfo */
        public readonly ConversationsMessagesCreateResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsMessagesCreateResponseMessage::fromArray($data['message']),
            ConversationsMessagesCreateResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsMessagesCreateResponseMessage
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
        /** @var ConversationsMessagesCreateResponseMessageLinks */
        public readonly ConversationsMessagesCreateResponseMessageLinks $links,
        /** @var ConversationsMessagesCreateResponseMessagePermissions */
        public readonly ConversationsMessagesCreateResponseMessagePermissions $permissions,
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
            ConversationsMessagesCreateResponseMessageLinks::fromArray($data['links']),
            ConversationsMessagesCreateResponseMessagePermissions::fromArray($data['permissions']),
        );
    }
}

final class ConversationsMessagesCreateResponseMessageLinks
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

final class ConversationsMessagesCreateResponseMessagePermissions
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

final class ConversationsMessagesCreateResponseSystemInfo
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

final class ConversationsSearchResponse
{
    public function __construct(
        /** @var list<ConversationsSearchResponseConversations> */
        public readonly array $conversations,
        public readonly bool $recipients,
        /** @var ConversationsSearchResponseSystemInfo */
        public readonly ConversationsSearchResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ConversationsSearchResponseConversations => ConversationsSearchResponseConversations::fromArray($item), $data['conversations']),
            $data['recipients'],
            ConversationsSearchResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsSearchResponseConversations
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
        /** @var ConversationsSearchResponseConversationsPermissions */
        public readonly ConversationsSearchResponseConversationsPermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsSearchResponseConversationsRecipient */
        public readonly ConversationsSearchResponseConversationsRecipient $recipient,
        /** @var list<ConversationsSearchResponseConversationsRecipients> */
        public readonly array $recipients,
        /** @var ConversationsSearchResponseConversationsLinks */
        public readonly ConversationsSearchResponseConversationsLinks $links,
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
            ConversationsSearchResponseConversationsPermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsSearchResponseConversationsRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsSearchResponseConversationsRecipients => ConversationsSearchResponseConversationsRecipients::fromArray($item), $data['recipients']),
            ConversationsSearchResponseConversationsLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsSearchResponseConversationsPermissions
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

final class ConversationsSearchResponseConversationsRecipient
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

final class ConversationsSearchResponseConversationsRecipients
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

final class ConversationsSearchResponseConversationsLinks
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

final class ConversationsSearchResponseSystemInfo
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

final class ConversationsMessagesGetResponse
{
    public function __construct(
        /** @var ConversationsMessagesGetResponseMessage */
        public readonly ConversationsMessagesGetResponseMessage $message,
        /** @var ConversationsMessagesGetResponseSystemInfo */
        public readonly ConversationsMessagesGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsMessagesGetResponseMessage::fromArray($data['message']),
            ConversationsMessagesGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsMessagesGetResponseMessage
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
        /** @var ConversationsMessagesGetResponseMessagePermissions */
        public readonly ConversationsMessagesGetResponseMessagePermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsMessagesGetResponseMessageRecipient */
        public readonly ConversationsMessagesGetResponseMessageRecipient $recipient,
        /** @var list<ConversationsMessagesGetResponseMessageRecipients> */
        public readonly array $recipients,
        /** @var ConversationsMessagesGetResponseMessageLinks */
        public readonly ConversationsMessagesGetResponseMessageLinks $links,
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
            ConversationsMessagesGetResponseMessagePermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsMessagesGetResponseMessageRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsMessagesGetResponseMessageRecipients => ConversationsMessagesGetResponseMessageRecipients::fromArray($item), $data['recipients']),
            ConversationsMessagesGetResponseMessageLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsMessagesGetResponseMessagePermissions
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

final class ConversationsMessagesGetResponseMessageRecipient
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

final class ConversationsMessagesGetResponseMessageRecipients
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

final class ConversationsMessagesGetResponseMessageLinks
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

final class ConversationsMessagesGetResponseSystemInfo
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

final class ConversationsMessagesEditResponse
{
    public function __construct(
        /** @var ConversationsMessagesEditResponseMessage */
        public readonly ConversationsMessagesEditResponseMessage $message,
        /** @var ConversationsMessagesEditResponseSystemInfo */
        public readonly ConversationsMessagesEditResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ConversationsMessagesEditResponseMessage::fromArray($data['message']),
            ConversationsMessagesEditResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsMessagesEditResponseMessage
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
        /** @var ConversationsMessagesEditResponseMessagePermissions */
        public readonly ConversationsMessagesEditResponseMessagePermissions $permissions,
        public readonly int $conversation_message_count,
        public readonly bool $conversation_is_new,
        public readonly bool $creator_is_ignored,
        public readonly bool $conversation_is_open,
        public readonly bool $conversation_is_deleted,
        /** @var ConversationsMessagesEditResponseMessageRecipient */
        public readonly ConversationsMessagesEditResponseMessageRecipient $recipient,
        /** @var list<ConversationsMessagesEditResponseMessageRecipients> */
        public readonly array $recipients,
        /** @var ConversationsMessagesEditResponseMessageLinks */
        public readonly ConversationsMessagesEditResponseMessageLinks $links,
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
            ConversationsMessagesEditResponseMessagePermissions::fromArray($data['permissions']),
            $data['conversation_message_count'],
            $data['conversation_is_new'],
            $data['creator_is_ignored'],
            $data['conversation_is_open'],
            $data['conversation_is_deleted'],
            ConversationsMessagesEditResponseMessageRecipient::fromArray($data['recipient']),
            array_map(static fn (array $item): ConversationsMessagesEditResponseMessageRecipients => ConversationsMessagesEditResponseMessageRecipients::fromArray($item), $data['recipients']),
            ConversationsMessagesEditResponseMessageLinks::fromArray($data['links']),
        );
    }
}

final class ConversationsMessagesEditResponseMessagePermissions
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

final class ConversationsMessagesEditResponseMessageRecipient
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

final class ConversationsMessagesEditResponseMessageRecipients
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

final class ConversationsMessagesEditResponseMessageLinks
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

final class ConversationsMessagesEditResponseSystemInfo
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

final class ConversationsMessagesDeleteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsMessagesDeleteResponseSystemInfo|null */
        public readonly ?ConversationsMessagesDeleteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsMessagesDeleteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsMessagesDeleteResponseSystemInfo
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

final class ConversationsInviteResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsInviteResponseSystemInfo|null */
        public readonly ?ConversationsInviteResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsInviteResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsInviteResponseSystemInfo
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

final class ConversationsKickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsKickResponseSystemInfo|null */
        public readonly ?ConversationsKickResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsKickResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsKickResponseSystemInfo
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

final class ConversationsReadResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsReadResponseSystemInfo|null */
        public readonly ?ConversationsReadResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsReadResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsReadResponseSystemInfo
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

final class ConversationsReadAllResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ConversationsReadAllResponseSystemInfo */
        public readonly ConversationsReadAllResponseSystemInfo $system_info,
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
            ConversationsReadAllResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsReadAllResponseSystemInfo
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

final class ConversationsMessagesStickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsMessagesStickResponseSystemInfo|null */
        public readonly ?ConversationsMessagesStickResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsMessagesStickResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsMessagesStickResponseSystemInfo
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

final class ConversationsMessagesUnstickResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ConversationsMessagesUnstickResponseSystemInfo|null */
        public readonly ?ConversationsMessagesUnstickResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ConversationsMessagesUnstickResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ConversationsMessagesUnstickResponseSystemInfo
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

final class ConversationsStarResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ConversationsStarResponseSystemInfo */
        public readonly ConversationsStarResponseSystemInfo $system_info,
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
            ConversationsStarResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsStarResponseSystemInfo
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

final class ConversationsUnstarResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ConversationsUnstarResponseSystemInfo */
        public readonly ConversationsUnstarResponseSystemInfo $system_info,
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
            ConversationsUnstarResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsUnstarResponseSystemInfo
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

final class ConversationsAlertsEnableResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ConversationsAlertsEnableResponseSystemInfo */
        public readonly ConversationsAlertsEnableResponseSystemInfo $system_info,
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
            ConversationsAlertsEnableResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsAlertsEnableResponseSystemInfo
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

final class ConversationsAlertsDisableResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $message,
        /** @var ConversationsAlertsDisableResponseSystemInfo */
        public readonly ConversationsAlertsDisableResponseSystemInfo $system_info,
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
            ConversationsAlertsDisableResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ConversationsAlertsDisableResponseSystemInfo
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

final class NotificationsListResponse
{
    public function __construct(
        /** @var list<NotificationsListResponseNotifications> */
        public readonly array $notifications,
        public readonly int $notifications_total,
        /** @var NotificationsListResponseLinks */
        public readonly NotificationsListResponseLinks $links,
        /** @var NotificationsListResponseSystemInfo */
        public readonly NotificationsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): NotificationsListResponseNotifications => NotificationsListResponseNotifications::fromArray($item), $data['notifications']),
            $data['notifications_total'],
            NotificationsListResponseLinks::fromArray($data['links']),
            NotificationsListResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class NotificationsListResponseNotifications
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
        /** @var NotificationsListResponseNotificationsLinks */
        public readonly NotificationsListResponseNotificationsLinks $links,
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
            NotificationsListResponseNotificationsLinks::fromArray($data['links']),
            $data['notification_html'],
        );
    }
}

final class NotificationsListResponseNotificationsLinks
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

final class NotificationsListResponseSystemInfo
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

final class NotificationsGetResponse
{
    public function __construct(
        public readonly int $notification_id,
        /** @var NotificationsGetResponseNotification */
        public readonly NotificationsGetResponseNotification $notification,
        /** @var NotificationsGetResponseSystemInfo */
        public readonly NotificationsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['notification_id'],
            NotificationsGetResponseNotification::fromArray($data['notification']),
            NotificationsGetResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class NotificationsGetResponseNotification
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
        /** @var NotificationsGetResponseNotificationLinks */
        public readonly NotificationsGetResponseNotificationLinks $links,
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
            NotificationsGetResponseNotificationLinks::fromArray($data['links']),
            $data['notification_html'],
        );
    }
}

final class NotificationsGetResponseNotificationLinks
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

final class NotificationsGetResponseSystemInfo
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

final class NotificationsReadResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var NotificationsReadResponseSystemInfo|null */
        public readonly ?NotificationsReadResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? NotificationsReadResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class NotificationsReadResponseSystemInfo
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

final class TagsPopularResponse
{
    public function __construct(
        /** @var TagsPopularResponseTags */
        public readonly TagsPopularResponseTags $tags,
        /** @var TagsPopularResponseSystemInfo */
        public readonly TagsPopularResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            TagsPopularResponseTags::fromArray($data['tags']),
            TagsPopularResponseSystemInfo::fromArray($data['system_info']),
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

final class TagsPopularResponseSystemInfo
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

final class TagsListResponse
{
    public function __construct(
        /** @var TagsListResponseTags */
        public readonly TagsListResponseTags $tags,
        public readonly int $tags_total,
        /** @var TagsListResponseLinks */
        public readonly TagsListResponseLinks $links,
        /** @var TagsListResponseSystemInfo */
        public readonly TagsListResponseSystemInfo $system_info,
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
            TagsListResponseSystemInfo::fromArray($data['system_info']),
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

final class TagsListResponseSystemInfo
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
        /** @var TagsGetResponseSystemInfo */
        public readonly TagsGetResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            TagsGetResponseTag::fromArray($data['tag']),
            array_map(static fn (array $item): TagsGetResponseTagged => TagsGetResponseTagged::fromArray($item), $data['tagged']),
            $data['tagged_total'],
            TagsGetResponseLinks::fromArray($data['links']),
            TagsGetResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): TagsGetResponseTaggedThreadPrefixes => TagsGetResponseTaggedThreadPrefixes::fromArray($item), $data['thread_prefixes']),
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
            array_map(static fn (array $item): TagsGetResponseTaggedForumForumPrefixes => TagsGetResponseTaggedForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
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
            array_map(static fn (array $item): TagsGetResponseTaggedForumForumPrefixesGroupPrefixes => TagsGetResponseTaggedForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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

final class TagsGetResponseSystemInfo
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

final class TagsFindResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $tags,
        /** @var list<int> */
        public readonly array $ids,
        /** @var TagsFindResponseSystemInfo */
        public readonly TagsFindResponseSystemInfo $system_info,
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
            TagsFindResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class TagsFindResponseSystemInfo
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

final class SearchAllResponse
{
    public function __construct(
        /** @var list<SearchAllResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var list<SearchAllResponseUsers> */
        public readonly array $users,
        /** @var SearchAllResponseLinks */
        public readonly SearchAllResponseLinks $links,
        /** @var SearchAllResponseSystemInfo */
        public readonly SearchAllResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchAllResponseData => SearchAllResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            array_map(static fn (array $item): SearchAllResponseUsers => SearchAllResponseUsers::fromArray($item), $data['users']),
            SearchAllResponseLinks::fromArray($data['links']),
            SearchAllResponseSystemInfo::fromArray($data['system_info']),
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

final class SearchAllResponseUsers
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
        /** @var SearchAllResponseUsersLinks */
        public readonly SearchAllResponseUsersLinks $links,
        /** @var SearchAllResponseUsersPermissions */
        public readonly SearchAllResponseUsersPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<SearchAllResponseUsersUserGroups> */
        public readonly array $user_groups,
        /** @var list<SearchAllResponseUsersFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<SearchAllResponseUsersUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var SearchAllResponseUsersSelfPermissions */
        public readonly SearchAllResponseUsersSelfPermissions $self_permissions,
        /** @var SearchAllResponseUsersEditPermissions */
        public readonly SearchAllResponseUsersEditPermissions $edit_permissions,
        /** @var SearchAllResponseUsersBirthday */
        public readonly SearchAllResponseUsersBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var SearchAllResponseUsersUserFollowing */
        public readonly SearchAllResponseUsersUserFollowing $user_following,
        /** @var SearchAllResponseUsersUserFollowers */
        public readonly SearchAllResponseUsersUserFollowers $user_followers,
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
            SearchAllResponseUsersLinks::fromArray($data['links']),
            SearchAllResponseUsersPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): SearchAllResponseUsersUserGroups => SearchAllResponseUsersUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): SearchAllResponseUsersFields => SearchAllResponseUsersFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): SearchAllResponseUsersUserExternalAuthentications => SearchAllResponseUsersUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            SearchAllResponseUsersSelfPermissions::fromArray($data['self_permissions']),
            SearchAllResponseUsersEditPermissions::fromArray($data['edit_permissions']),
            SearchAllResponseUsersBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            SearchAllResponseUsersUserFollowing::fromArray($data['user_following']),
            SearchAllResponseUsersUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class SearchAllResponseUsersLinks
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

final class SearchAllResponseUsersPermissions
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

final class SearchAllResponseUsersUserGroups
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

final class SearchAllResponseUsersFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<SearchAllResponseUsersFieldsChoices> */
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
            array_map(static fn (array $item): SearchAllResponseUsersFieldsChoices => SearchAllResponseUsersFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class SearchAllResponseUsersFieldsChoices
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

final class SearchAllResponseUsersUserExternalAuthentications
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

final class SearchAllResponseUsersSelfPermissions
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

final class SearchAllResponseUsersEditPermissions
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

final class SearchAllResponseUsersBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var SearchAllResponseUsersBirthdayTimeStamp */
        public readonly SearchAllResponseUsersBirthdayTimeStamp $timeStamp,
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
            SearchAllResponseUsersBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class SearchAllResponseUsersBirthdayTimeStamp
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

final class SearchAllResponseUsersUserFollowing
{
    public function __construct(
        /** @var list<SearchAllResponseUsersUserFollowingUsers> */
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
            array_map(static fn (array $item): SearchAllResponseUsersUserFollowingUsers => SearchAllResponseUsersUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class SearchAllResponseUsersUserFollowingUsers
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

final class SearchAllResponseUsersUserFollowers
{
    public function __construct(
        /** @var list<SearchAllResponseUsersUserFollowersUsers> */
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
            array_map(static fn (array $item): SearchAllResponseUsersUserFollowersUsers => SearchAllResponseUsersUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class SearchAllResponseUsersUserFollowersUsers
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

final class SearchAllResponseSystemInfo
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

final class SearchThreadsResponse
{
    public function __construct(
        /** @var list<SearchThreadsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchThreadsResponseLinks */
        public readonly SearchThreadsResponseLinks $links,
        /** @var SearchThreadsResponseSystemInfo */
        public readonly SearchThreadsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchThreadsResponseData => SearchThreadsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchThreadsResponseLinks::fromArray($data['links']),
            SearchThreadsResponseSystemInfo::fromArray($data['system_info']),
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

final class SearchThreadsResponseSystemInfo
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

final class SearchPostsResponse
{
    public function __construct(
        /** @var list<SearchPostsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchPostsResponseLinks */
        public readonly SearchPostsResponseLinks $links,
        /** @var SearchPostsResponseSystemInfo */
        public readonly SearchPostsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchPostsResponseData => SearchPostsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchPostsResponseLinks::fromArray($data['links']),
            SearchPostsResponseSystemInfo::fromArray($data['system_info']),
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

final class SearchPostsResponseSystemInfo
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

final class SearchUsersResponse
{
    public function __construct(
        /** @var list<SearchUsersResponseUsers> */
        public readonly array $users,
        /** @var SearchUsersResponseSystemInfo */
        public readonly SearchUsersResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchUsersResponseUsers => SearchUsersResponseUsers::fromArray($item), $data['users']),
            SearchUsersResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class SearchUsersResponseUsers
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
        /** @var SearchUsersResponseUsersLinks */
        public readonly SearchUsersResponseUsersLinks $links,
        /** @var SearchUsersResponseUsersPermissions */
        public readonly SearchUsersResponseUsersPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<SearchUsersResponseUsersUserGroups> */
        public readonly array $user_groups,
        /** @var list<SearchUsersResponseUsersFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<SearchUsersResponseUsersUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var SearchUsersResponseUsersSelfPermissions */
        public readonly SearchUsersResponseUsersSelfPermissions $self_permissions,
        /** @var SearchUsersResponseUsersEditPermissions */
        public readonly SearchUsersResponseUsersEditPermissions $edit_permissions,
        /** @var SearchUsersResponseUsersBirthday */
        public readonly SearchUsersResponseUsersBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var SearchUsersResponseUsersUserFollowing */
        public readonly SearchUsersResponseUsersUserFollowing $user_following,
        /** @var SearchUsersResponseUsersUserFollowers */
        public readonly SearchUsersResponseUsersUserFollowers $user_followers,
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
            SearchUsersResponseUsersLinks::fromArray($data['links']),
            SearchUsersResponseUsersPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): SearchUsersResponseUsersUserGroups => SearchUsersResponseUsersUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): SearchUsersResponseUsersFields => SearchUsersResponseUsersFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): SearchUsersResponseUsersUserExternalAuthentications => SearchUsersResponseUsersUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            SearchUsersResponseUsersSelfPermissions::fromArray($data['self_permissions']),
            SearchUsersResponseUsersEditPermissions::fromArray($data['edit_permissions']),
            SearchUsersResponseUsersBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            SearchUsersResponseUsersUserFollowing::fromArray($data['user_following']),
            SearchUsersResponseUsersUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class SearchUsersResponseUsersLinks
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

final class SearchUsersResponseUsersPermissions
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

final class SearchUsersResponseUsersUserGroups
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

final class SearchUsersResponseUsersFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<SearchUsersResponseUsersFieldsChoices> */
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
            array_map(static fn (array $item): SearchUsersResponseUsersFieldsChoices => SearchUsersResponseUsersFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class SearchUsersResponseUsersFieldsChoices
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

final class SearchUsersResponseUsersUserExternalAuthentications
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

final class SearchUsersResponseUsersSelfPermissions
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

final class SearchUsersResponseUsersEditPermissions
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

final class SearchUsersResponseUsersBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var SearchUsersResponseUsersBirthdayTimeStamp */
        public readonly SearchUsersResponseUsersBirthdayTimeStamp $timeStamp,
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
            SearchUsersResponseUsersBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class SearchUsersResponseUsersBirthdayTimeStamp
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

final class SearchUsersResponseUsersUserFollowing
{
    public function __construct(
        /** @var list<SearchUsersResponseUsersUserFollowingUsers> */
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
            array_map(static fn (array $item): SearchUsersResponseUsersUserFollowingUsers => SearchUsersResponseUsersUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class SearchUsersResponseUsersUserFollowingUsers
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

final class SearchUsersResponseUsersUserFollowers
{
    public function __construct(
        /** @var list<SearchUsersResponseUsersUserFollowersUsers> */
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
            array_map(static fn (array $item): SearchUsersResponseUsersUserFollowersUsers => SearchUsersResponseUsersUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class SearchUsersResponseUsersUserFollowersUsers
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

final class SearchUsersResponseSystemInfo
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

final class SearchProfilePostsResponse
{
    public function __construct(
        /** @var list<SearchProfilePostsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchProfilePostsResponseLinks */
        public readonly SearchProfilePostsResponseLinks $links,
        /** @var SearchProfilePostsResponseSystemInfo */
        public readonly SearchProfilePostsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchProfilePostsResponseData => SearchProfilePostsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchProfilePostsResponseLinks::fromArray($data['links']),
            SearchProfilePostsResponseSystemInfo::fromArray($data['system_info']),
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
        /** @var SearchProfilePostsResponseDataTimelineUser */
        public readonly SearchProfilePostsResponseDataTimelineUser $timeline_user,
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
            SearchProfilePostsResponseDataTimelineUser::fromArray($data['timeline_user']),
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

final class SearchProfilePostsResponseDataTimelineUser
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
        /** @var SearchProfilePostsResponseDataTimelineUserLinks */
        public readonly SearchProfilePostsResponseDataTimelineUserLinks $links,
        /** @var SearchProfilePostsResponseDataTimelineUserPermissions */
        public readonly SearchProfilePostsResponseDataTimelineUserPermissions $permissions,
        public readonly bool $user_is_ignored,
        public readonly bool $user_is_visitor,
        public readonly int $user_group_id,
        /** @var list<string> */
        public readonly array $curator_titles,
        /** @var list<SearchProfilePostsResponseDataTimelineUserUserGroups> */
        public readonly array $user_groups,
        /** @var list<SearchProfilePostsResponseDataTimelineUserFields> */
        public readonly array $fields,
        public readonly int $user_timezone_offset,
        /** @var list<SearchProfilePostsResponseDataTimelineUserUserExternalAuthentications> */
        public readonly array $user_external_authentications,
        /** @var SearchProfilePostsResponseDataTimelineUserSelfPermissions */
        public readonly SearchProfilePostsResponseDataTimelineUserSelfPermissions $self_permissions,
        /** @var SearchProfilePostsResponseDataTimelineUserEditPermissions */
        public readonly SearchProfilePostsResponseDataTimelineUserEditPermissions $edit_permissions,
        /** @var SearchProfilePostsResponseDataTimelineUserBirthday */
        public readonly SearchProfilePostsResponseDataTimelineUserBirthday $birthday,
        public readonly string $secret_answer_rendered,
        public readonly string $secret_answer_first_letter,
        /** @var SearchProfilePostsResponseDataTimelineUserUserFollowing */
        public readonly SearchProfilePostsResponseDataTimelineUserUserFollowing $user_following,
        /** @var SearchProfilePostsResponseDataTimelineUserUserFollowers */
        public readonly SearchProfilePostsResponseDataTimelineUserUserFollowers $user_followers,
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
            SearchProfilePostsResponseDataTimelineUserLinks::fromArray($data['links']),
            SearchProfilePostsResponseDataTimelineUserPermissions::fromArray($data['permissions']),
            $data['user_is_ignored'],
            $data['user_is_visitor'],
            $data['user_group_id'],
            $data['curator_titles'],
            array_map(static fn (array $item): SearchProfilePostsResponseDataTimelineUserUserGroups => SearchProfilePostsResponseDataTimelineUserUserGroups::fromArray($item), $data['user_groups']),
            array_map(static fn (array $item): SearchProfilePostsResponseDataTimelineUserFields => SearchProfilePostsResponseDataTimelineUserFields::fromArray($item), $data['fields']),
            $data['user_timezone_offset'],
            array_map(static fn (array $item): SearchProfilePostsResponseDataTimelineUserUserExternalAuthentications => SearchProfilePostsResponseDataTimelineUserUserExternalAuthentications::fromArray($item), $data['user_external_authentications']),
            SearchProfilePostsResponseDataTimelineUserSelfPermissions::fromArray($data['self_permissions']),
            SearchProfilePostsResponseDataTimelineUserEditPermissions::fromArray($data['edit_permissions']),
            SearchProfilePostsResponseDataTimelineUserBirthday::fromArray($data['birthday']),
            $data['secret_answer_rendered'],
            $data['secret_answer_first_letter'],
            SearchProfilePostsResponseDataTimelineUserUserFollowing::fromArray($data['user_following']),
            SearchProfilePostsResponseDataTimelineUserUserFollowers::fromArray($data['user_followers']),
            $data['banner'],
        );
    }
}

final class SearchProfilePostsResponseDataTimelineUserLinks
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

final class SearchProfilePostsResponseDataTimelineUserPermissions
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

final class SearchProfilePostsResponseDataTimelineUserUserGroups
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

final class SearchProfilePostsResponseDataTimelineUserFields
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $position,
        public readonly bool $is_required,
        public readonly ?string $value,
        public readonly bool $is_multi_choice,
        /** @var list<SearchProfilePostsResponseDataTimelineUserFieldsChoices> */
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
            array_map(static fn (array $item): SearchProfilePostsResponseDataTimelineUserFieldsChoices => SearchProfilePostsResponseDataTimelineUserFieldsChoices::fromArray($item), $data['choices']),
            $data['values'],
        );
    }
}

final class SearchProfilePostsResponseDataTimelineUserFieldsChoices
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

final class SearchProfilePostsResponseDataTimelineUserUserExternalAuthentications
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

final class SearchProfilePostsResponseDataTimelineUserSelfPermissions
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

final class SearchProfilePostsResponseDataTimelineUserEditPermissions
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

final class SearchProfilePostsResponseDataTimelineUserBirthday
{
    public function __construct(
        public readonly int $age,
        /** @var SearchProfilePostsResponseDataTimelineUserBirthdayTimeStamp */
        public readonly SearchProfilePostsResponseDataTimelineUserBirthdayTimeStamp $timeStamp,
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
            SearchProfilePostsResponseDataTimelineUserBirthdayTimeStamp::fromArray($data['timeStamp']),
            $data['format'],
        );
    }
}

final class SearchProfilePostsResponseDataTimelineUserBirthdayTimeStamp
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

final class SearchProfilePostsResponseDataTimelineUserUserFollowing
{
    public function __construct(
        /** @var list<SearchProfilePostsResponseDataTimelineUserUserFollowingUsers> */
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
            array_map(static fn (array $item): SearchProfilePostsResponseDataTimelineUserUserFollowingUsers => SearchProfilePostsResponseDataTimelineUserUserFollowingUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class SearchProfilePostsResponseDataTimelineUserUserFollowingUsers
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

final class SearchProfilePostsResponseDataTimelineUserUserFollowers
{
    public function __construct(
        /** @var list<SearchProfilePostsResponseDataTimelineUserUserFollowersUsers> */
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
            array_map(static fn (array $item): SearchProfilePostsResponseDataTimelineUserUserFollowersUsers => SearchProfilePostsResponseDataTimelineUserUserFollowersUsers::fromArray($item), $data['users']),
            $data['count'],
        );
    }
}

final class SearchProfilePostsResponseDataTimelineUserUserFollowersUsers
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

final class SearchProfilePostsResponseSystemInfo
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

final class SearchTaggedResponse
{
    public function __construct(
        /** @var list<SearchTaggedResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchTaggedResponseSearchTags */
        public readonly SearchTaggedResponseSearchTags $search_tags,
        /** @var SearchTaggedResponseSystemInfo */
        public readonly SearchTaggedResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchTaggedResponseData => SearchTaggedResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchTaggedResponseSearchTags::fromArray($data['search_tags']),
            SearchTaggedResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): SearchTaggedResponseDataForumForumPrefixes => SearchTaggedResponseDataForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
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
            array_map(static fn (array $item): SearchTaggedResponseDataForumForumPrefixesGroupPrefixes => SearchTaggedResponseDataForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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

final class SearchTaggedResponseSystemInfo
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

final class SearchResultsResponse
{
    public function __construct(
        /** @var list<SearchResultsResponseData> */
        public readonly array $data,
        public readonly int $data_total,
        /** @var SearchResultsResponseSearchTags */
        public readonly SearchResultsResponseSearchTags $search_tags,
        /** @var SearchResultsResponseSystemInfo */
        public readonly SearchResultsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): SearchResultsResponseData => SearchResultsResponseData::fromArray($item), $data['data']),
            $data['data_total'],
            SearchResultsResponseSearchTags::fromArray($data['search_tags']),
            SearchResultsResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): SearchResultsResponseDataForumForumPrefixes => SearchResultsResponseDataForumForumPrefixes::fromArray($item), $data['forum_prefixes']),
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
            array_map(static fn (array $item): SearchResultsResponseDataForumForumPrefixesGroupPrefixes => SearchResultsResponseDataForumForumPrefixesGroupPrefixes::fromArray($item), $data['group_prefixes']),
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

final class SearchResultsResponseSystemInfo
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
        /** @var ChatboxIndexResponseSystemInfo */
        public readonly ChatboxIndexResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ChatboxIndexResponseRooms => ChatboxIndexResponseRooms::fromArray($item), $data['rooms']),
            $data['ban'],
            array_map(static fn (array $item): ChatboxIndexResponseIgnore => ChatboxIndexResponseIgnore::fromArray($item), $data['ignore']),
            ChatboxIndexResponsePermissions::fromArray($data['permissions']),
            $data['commands'],
            ChatboxIndexResponseRoomsOnline::fromArray($data['roomsOnline']),
            ChatboxIndexResponseSystemInfo::fromArray($data['system_info']),
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

final class ChatboxIndexResponseSystemInfo
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

final class ChatboxGetMessagesResponse
{
    public function __construct(
        /** @var list<ChatboxGetMessagesResponseMessages> */
        public readonly array $messages,
        /** @var ChatboxGetMessagesResponseSystemInfo */
        public readonly ChatboxGetMessagesResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ChatboxGetMessagesResponseMessages => ChatboxGetMessagesResponseMessages::fromArray($item), $data['messages']),
            ChatboxGetMessagesResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ChatboxGetMessagesResponseMessages
{
    public function __construct(
        public readonly bool $can_report,
        public readonly int $date,
        public readonly bool $is_deleted,
        public readonly string $message,
        public readonly int $message_id,
        public readonly string $messageJson,
        public readonly string $messageRaw,
        /** @var ChatboxGetMessagesResponseMessagesRoom */
        public readonly ChatboxGetMessagesResponseMessagesRoom $room,
        /** @var ChatboxGetMessagesResponseMessagesUser */
        public readonly ChatboxGetMessagesResponseMessagesUser $user,
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
            ChatboxGetMessagesResponseMessagesRoom::fromArray($data['room']),
            ChatboxGetMessagesResponseMessagesUser::fromArray($data['user']),
        );
    }
}

final class ChatboxGetMessagesResponseMessagesRoom
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

final class ChatboxGetMessagesResponseMessagesUser
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
        /** @var ChatboxGetMessagesResponseMessagesUserRendered */
        public readonly ChatboxGetMessagesResponseMessagesUserRendered $rendered,
        public readonly string $short_link,
        public readonly int $trophy_points,
        /** @var ChatboxGetMessagesResponseMessagesUserUniqBanner */
        public readonly ChatboxGetMessagesResponseMessagesUserUniqBanner $uniq_banner,
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
            ChatboxGetMessagesResponseMessagesUserRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            ChatboxGetMessagesResponseMessagesUserUniqBanner::fromArray($data['uniq_banner']),
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
        );
    }
}

final class ChatboxGetMessagesResponseMessagesUserRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxGetMessagesResponseMessagesUserRenderedAvatars */
        public readonly ChatboxGetMessagesResponseMessagesUserRenderedAvatars $avatars,
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
            ChatboxGetMessagesResponseMessagesUserRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
        );
    }
}

final class ChatboxGetMessagesResponseMessagesUserRenderedAvatars
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

final class ChatboxGetMessagesResponseMessagesUserUniqBanner
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

final class ChatboxGetMessagesResponseSystemInfo
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

final class ChatboxPostMessageResponse
{
    public function __construct(
        /** @var ChatboxPostMessageResponseMessage */
        public readonly ChatboxPostMessageResponseMessage $message,
        /** @var ChatboxPostMessageResponseSystemInfo */
        public readonly ChatboxPostMessageResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ChatboxPostMessageResponseMessage::fromArray($data['message']),
            ChatboxPostMessageResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ChatboxPostMessageResponseMessage
{
    public function __construct(
        public readonly bool $can_report,
        public readonly int $date,
        public readonly bool $is_deleted,
        public readonly string $message,
        public readonly int $message_id,
        public readonly string $messageJson,
        public readonly string $messageRaw,
        /** @var ChatboxPostMessageResponseMessageRoom */
        public readonly ChatboxPostMessageResponseMessageRoom $room,
        /** @var ChatboxPostMessageResponseMessageUser */
        public readonly ChatboxPostMessageResponseMessageUser $user,
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
            ChatboxPostMessageResponseMessageRoom::fromArray($data['room']),
            ChatboxPostMessageResponseMessageUser::fromArray($data['user']),
        );
    }
}

final class ChatboxPostMessageResponseMessageRoom
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

final class ChatboxPostMessageResponseMessageUser
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
        /** @var ChatboxPostMessageResponseMessageUserRendered */
        public readonly ChatboxPostMessageResponseMessageUserRendered $rendered,
        public readonly string $short_link,
        public readonly int $trophy_points,
        /** @var ChatboxPostMessageResponseMessageUserUniqBanner */
        public readonly ChatboxPostMessageResponseMessageUserUniqBanner $uniq_banner,
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
            ChatboxPostMessageResponseMessageUserRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            ChatboxPostMessageResponseMessageUserUniqBanner::fromArray($data['uniq_banner']),
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
        );
    }
}

final class ChatboxPostMessageResponseMessageUserRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxPostMessageResponseMessageUserRenderedAvatars */
        public readonly ChatboxPostMessageResponseMessageUserRenderedAvatars $avatars,
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
            ChatboxPostMessageResponseMessageUserRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
        );
    }
}

final class ChatboxPostMessageResponseMessageUserRenderedAvatars
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

final class ChatboxPostMessageResponseMessageUserUniqBanner
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

final class ChatboxPostMessageResponseSystemInfo
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

final class ChatboxEditMessageResponse
{
    public function __construct(
        /** @var ChatboxEditMessageResponseMessage */
        public readonly ChatboxEditMessageResponseMessage $message,
        /** @var ChatboxEditMessageResponseSystemInfo */
        public readonly ChatboxEditMessageResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            ChatboxEditMessageResponseMessage::fromArray($data['message']),
            ChatboxEditMessageResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ChatboxEditMessageResponseMessage
{
    public function __construct(
        public readonly bool $can_report,
        public readonly int $date,
        public readonly bool $is_deleted,
        public readonly string $message,
        public readonly int $message_id,
        public readonly string $messageJson,
        public readonly string $messageRaw,
        /** @var ChatboxEditMessageResponseMessageRoom */
        public readonly ChatboxEditMessageResponseMessageRoom $room,
        /** @var ChatboxEditMessageResponseMessageUser */
        public readonly ChatboxEditMessageResponseMessageUser $user,
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
            ChatboxEditMessageResponseMessageRoom::fromArray($data['room']),
            ChatboxEditMessageResponseMessageUser::fromArray($data['user']),
        );
    }
}

final class ChatboxEditMessageResponseMessageRoom
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

final class ChatboxEditMessageResponseMessageUser
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
        /** @var ChatboxEditMessageResponseMessageUserRendered */
        public readonly ChatboxEditMessageResponseMessageUserRendered $rendered,
        public readonly string $short_link,
        public readonly int $trophy_points,
        /** @var ChatboxEditMessageResponseMessageUserUniqBanner */
        public readonly ChatboxEditMessageResponseMessageUserUniqBanner $uniq_banner,
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
            ChatboxEditMessageResponseMessageUserRendered::fromArray($data['rendered']),
            $data['short_link'],
            $data['trophy_points'],
            ChatboxEditMessageResponseMessageUserUniqBanner::fromArray($data['uniq_banner']),
            $data['uniq_username_css'],
            $data['user_id'],
            $data['username'],
        );
    }
}

final class ChatboxEditMessageResponseMessageUserRendered
{
    public function __construct(
        public readonly string $username,
        /** @var ChatboxEditMessageResponseMessageUserRenderedAvatars */
        public readonly ChatboxEditMessageResponseMessageUserRenderedAvatars $avatars,
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
            ChatboxEditMessageResponseMessageUserRenderedAvatars::fromArray($data['avatars']),
            $data['link'],
        );
    }
}

final class ChatboxEditMessageResponseMessageUserRenderedAvatars
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

final class ChatboxEditMessageResponseMessageUserUniqBanner
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

final class ChatboxEditMessageResponseSystemInfo
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

final class ChatboxDeleteMessageResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ChatboxDeleteMessageResponseSystemInfo|null */
        public readonly ?ChatboxDeleteMessageResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ChatboxDeleteMessageResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxDeleteMessageResponseSystemInfo
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

final class ChatboxOnlineResponse
{
    public function __construct(
        /** @var list<ChatboxOnlineResponseUsers> */
        public readonly array $users,
        /** @var ChatboxOnlineResponseSystemInfo */
        public readonly ChatboxOnlineResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ChatboxOnlineResponseUsers => ChatboxOnlineResponseUsers::fromArray($item), $data['users']),
            ChatboxOnlineResponseSystemInfo::fromArray($data['system_info']),
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

final class ChatboxOnlineResponseSystemInfo
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

final class ChatboxReportReasonsResponse
{
    public function __construct(
        /** @var list<string> */
        public readonly array $reasons,
        /** @var ChatboxReportReasonsResponseSystemInfo */
        public readonly ChatboxReportReasonsResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['reasons'],
            ChatboxReportReasonsResponseSystemInfo::fromArray($data['system_info']),
        );
    }
}

final class ChatboxReportReasonsResponseSystemInfo
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

final class ChatboxReportResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ChatboxReportResponseSystemInfo|null */
        public readonly ?ChatboxReportResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ChatboxReportResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxReportResponseSystemInfo
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

final class ChatboxGetLeaderboardResponse
{
    public function __construct(
        /** @var list<ChatboxGetLeaderboardResponseLeaderboard> */
        public readonly array $leaderboard,
        /** @var ChatboxGetLeaderboardResponseSystemInfo */
        public readonly ChatboxGetLeaderboardResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ChatboxGetLeaderboardResponseLeaderboard => ChatboxGetLeaderboardResponseLeaderboard::fromArray($item), $data['leaderboard']),
            ChatboxGetLeaderboardResponseSystemInfo::fromArray($data['system_info']),
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

final class ChatboxGetLeaderboardResponseSystemInfo
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

final class ChatboxGetIgnoreResponse
{
    public function __construct(
        /** @var list<ChatboxGetIgnoreResponseIgnored> */
        public readonly array $ignored,
        /** @var ChatboxGetIgnoreResponseSystemInfo */
        public readonly ChatboxGetIgnoreResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): ChatboxGetIgnoreResponseIgnored => ChatboxGetIgnoreResponseIgnored::fromArray($item), $data['ignored']),
            ChatboxGetIgnoreResponseSystemInfo::fromArray($data['system_info']),
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

final class ChatboxGetIgnoreResponseSystemInfo
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

final class ChatboxPostIgnoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ChatboxPostIgnoreResponseSystemInfo|null */
        public readonly ?ChatboxPostIgnoreResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ChatboxPostIgnoreResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxPostIgnoreResponseSystemInfo
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

final class ChatboxDeleteIgnoreResponse
{
    public function __construct(
        public readonly ?string $status,
        public readonly ?string $message,
        /** @var ChatboxDeleteIgnoreResponseSystemInfo|null */
        public readonly ?ChatboxDeleteIgnoreResponseSystemInfo $system_info,
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
            isset($data['system_info']) && is_array($data['system_info']) ? ChatboxDeleteIgnoreResponseSystemInfo::fromArray($data['system_info']) : null,
        );
    }
}

final class ChatboxDeleteIgnoreResponseSystemInfo
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

final class FormsListResponse
{
    public function __construct(
        /** @var list<FormsListResponseForms> */
        public readonly array $forms,
        public readonly int $formsPerPage,
        public readonly int $page,
        public readonly int $totalForms,
        /** @var FormsListResponseSystemInfo */
        public readonly FormsListResponseSystemInfo $system_info,
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(static fn (array $item): FormsListResponseForms => FormsListResponseForms::fromArray($item), $data['forms']),
            $data['formsPerPage'],
            $data['page'],
            $data['totalForms'],
            FormsListResponseSystemInfo::fromArray($data['system_info']),
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
            array_map(static fn (array $item): FormsListResponseFormsFields => FormsListResponseFormsFields::fromArray($item), $data['fields']),
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

final class FormsListResponseSystemInfo
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

final class FormsCreateResponse
{
    public function __construct(
        public readonly string $message,
        /** @var FormsCreateResponseContent */
        public readonly FormsCreateResponseContent $content,
        /** @var FormsCreateResponseSystemInfo */
        public readonly FormsCreateResponseSystemInfo $system_info,
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
            FormsCreateResponseSystemInfo::fromArray($data['system_info']),
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

final class FormsCreateResponseSystemInfo
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
