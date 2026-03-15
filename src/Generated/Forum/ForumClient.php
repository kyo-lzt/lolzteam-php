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
     * @return Models\OAuthTokenResponse
     */
    public function token(array $body): Models\OAuthTokenResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/oauth/token', [], $body, 'multipart');

        return Models\OAuthTokenResponse::fromArray($data);
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
     * @return Models\AssetsCssResponse
     */
    public function css(array $params = []): Models\AssetsCssResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/css', $params);

        return Models\AssetsCssResponse::fromArray($data);
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
     * @return Models\CategoriesListResponse
     */
    public function getList(array $params = []): Models\CategoriesListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/categories', $params);

        return Models\CategoriesListResponse::fromArray($data);
    }

    /**
     * @param int $category_id
     * @return Models\CategoriesGetResponse
     */
    public function get(int $category_id): Models\CategoriesGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/categories/{$category_id}");

        return Models\CategoriesGetResponse::fromArray($data);
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
     * @return Models\ForumsListResponse
     */
    public function getList(array $params = []): Models\ForumsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums', $params);

        return Models\ForumsListResponse::fromArray($data);
    }

    /**
     * @return Models\ForumsGroupedResponse
     */
    public function grouped(): Models\ForumsGroupedResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums/grouped');

        return Models\ForumsGroupedResponse::fromArray($data);
    }

    /**
     * @param int $forum_id
     * @return Models\ForumsGetResponse
     */
    public function get(int $forum_id): Models\ForumsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/forums/{$forum_id}");

        return Models\ForumsGetResponse::fromArray($data);
    }

    /**
     * @param int $forum_id
     * @return Models\ForumsFollowersResponse
     */
    public function followers(int $forum_id): Models\ForumsFollowersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/forums/{$forum_id}/followers");

        return Models\ForumsFollowersResponse::fromArray($data);
    }

    /**
     * @param int $forum_id
     * @param array{post?: bool, alert?: bool, email?: bool, prefix_ids?: list<int>, minimal_contest_amount?: int} $body
     * @return Models\ForumsFollowResponse
     */
    public function follow(int $forum_id, array $body = []): Models\ForumsFollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/forums/{$forum_id}/followers", [], $body, 'json');

        return Models\ForumsFollowResponse::fromArray($data);
    }

    /**
     * @param int $forum_id
     * @return Models\ForumsUnfollowResponse
     */
    public function unfollow(int $forum_id): Models\ForumsUnfollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/forums/{$forum_id}/followers");

        return Models\ForumsUnfollowResponse::fromArray($data);
    }

    /**
     * @param array{total?: bool} $params
     * @return Models\ForumsFollowedResponse
     */
    public function followed(array $params = []): Models\ForumsFollowedResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums/followed', $params);

        return Models\ForumsFollowedResponse::fromArray($data);
    }

    /**
     * @return Models\ForumsGetFeedOptionsResponse
     */
    public function getFeedOptions(): Models\ForumsGetFeedOptionsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums/feed/options');

        return Models\ForumsGetFeedOptionsResponse::fromArray($data);
    }

    /**
     * @param array{node_ids?: list<int>, keywords?: list<string>} $body
     * @return Models\ForumsEditFeedOptionsResponse
     */
    public function editFeedOptions(array $body = []): Models\ForumsEditFeedOptionsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', '/forums/feed/options', [], $body, 'json');

        return Models\ForumsEditFeedOptionsResponse::fromArray($data);
    }
}

final class LinksApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @return Models\LinksListResponse
     */
    public function getList(): Models\LinksListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/link-forums');

        return Models\LinksListResponse::fromArray($data);
    }

    /**
     * @param int $link_id
     * @return Models\LinksGetResponse
     */
    public function get(int $link_id): Models\LinksGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/link-forums/{$link_id}");

        return Models\LinksGetResponse::fromArray($data);
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
     * @return Models\PagesListResponse
     */
    public function getList(array $params = []): Models\PagesListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/pages', $params);

        return Models\PagesListResponse::fromArray($data);
    }

    /**
     * @param int $page_id
     * @return Models\PagesGetResponse
     */
    public function get(int $page_id): Models\PagesGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/pages/{$page_id}");

        return Models\PagesGetResponse::fromArray($data);
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
     * @return Models\NavigationListResponse
     */
    public function getList(array $params = []): Models\NavigationListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/navigation', $params);

        return Models\NavigationListResponse::fromArray($data);
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
     * @return Models\ThreadsListResponse
     */
    public function getList(array $params = []): Models\ThreadsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/threads', $params);

        return Models\ThreadsListResponse::fromArray($data);
    }

    /**
     * @param array{post_body: string, forum_id: int, title?: string, title_en?: string, prefix_id?: list<int>, tags?: list<string>, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool, dont_alert_followers?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool} $body
     * @return Models\ThreadsCreateResponse
     */
    public function create(array $body): Models\ThreadsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/threads', [], $body, 'json');

        return Models\ThreadsCreateResponse::fromArray($data);
    }

    /**
     * @param array{post_body: string, title?: string, title_en?: string, contest_type: 'by_finish_date', length_value?: int, length_option?: 'minutes'|'hours'|'days', prize_type: 'money'|'upgrades', count_winners?: int, prize_data_money?: float, is_money_places?: bool, prize_data_places?: list<float>, prize_data_upgrade?: 1|6|12|14|17|19|20|21|22, require_like_count: int, require_total_like_count: int, secret_answer?: string, tags?: list<string>, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool, dont_alert_followers?: bool, hide_contacts?: bool, allow_ask_hidden_content?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool} $body
     * @return Models\ThreadsCreateContestResponse
     */
    public function createContest(array $body): Models\ThreadsCreateContestResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/contests', [], $body, 'json');

        return Models\ThreadsCreateContestResponse::fromArray($data);
    }

    /**
     * @param array{as_responder: string, as_is_market_deal: bool, as_market_item_id?: int, as_data?: string, as_amount: float, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try', transfer_type: 'guarantor'|'safe'|'notsafe', pay_claim?: 'now'|'later', as_funds_receipt?: string, as_tg_login_screenshot?: string, tags?: list<string>, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool, dont_alert_followers?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool, post_body: string} $body
     * @return Models\ThreadsClaimResponse
     */
    public function claim(array $body): Models\ThreadsClaimResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/claims', [], $body, 'json');

        return Models\ThreadsClaimResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @param array{fields_include?: list<'*'|'latest_posts'>} $params
     * @return Models\ThreadsGetResponse
     */
    public function get(int $thread_id, array $params = []): Models\ThreadsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}", $params);

        return Models\ThreadsGetResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @param array{title?: string, title_en?: string, prefix_id?: list<int>, tags?: list<string>, discussion_open?: bool, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: 0|2|21|22|23|60|351, comment_ignore_group?: bool} $body
     * @return Models\ThreadsEditResponse
     */
    public function edit(int $thread_id, array $body = []): Models\ThreadsEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/threads/{$thread_id}", [], $body, 'json');

        return Models\ThreadsEditResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @param array{reason?: string} $body
     * @return Models\ThreadsDeleteResponse
     */
    public function delete(int $thread_id, array $body = []): Models\ThreadsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/threads/{$thread_id}", [], $body, 'json');

        return Models\ThreadsDeleteResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @param array{node_id: string, title?: string, title_en?: string, prefix_id?: list<int>, apply_thread_prefix?: bool, send_alert?: bool} $body
     * @return Models\ThreadsMoveResponse
     */
    public function move(int $thread_id, array $body): Models\ThreadsMoveResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/move", [], $body, 'json');

        return Models\ThreadsMoveResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsBumpResponse
     */
    public function bump(int $thread_id): Models\ThreadsBumpResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/bump");

        return Models\ThreadsBumpResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsHideResponse
     */
    public function hide(int $thread_id): Models\ThreadsHideResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/hide");

        return Models\ThreadsHideResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsStarResponse
     */
    public function star(int $thread_id): Models\ThreadsStarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/star");

        return Models\ThreadsStarResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsUnstarResponse
     */
    public function unstar(int $thread_id): Models\ThreadsUnstarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/threads/{$thread_id}/star");

        return Models\ThreadsUnstarResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsFollowersResponse
     */
    public function followers(int $thread_id): Models\ThreadsFollowersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}/followers");

        return Models\ThreadsFollowersResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @param array{email?: bool} $body
     * @return Models\ThreadsFollowResponse
     */
    public function follow(int $thread_id, array $body = []): Models\ThreadsFollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/followers", [], $body, 'json');

        return Models\ThreadsFollowResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsUnfollowResponse
     */
    public function unfollow(int $thread_id): Models\ThreadsUnfollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/threads/{$thread_id}/followers");

        return Models\ThreadsUnfollowResponse::fromArray($data);
    }

    /**
     * @param array{total?: bool, fields_include?: list<'*'|'latest_posts'>} $params
     * @return Models\ThreadsFollowedResponse
     */
    public function followed(array $params = []): Models\ThreadsFollowedResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/threads/followed', $params);

        return Models\ThreadsFollowedResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsNavigationResponse
     */
    public function navigation(int $thread_id): Models\ThreadsNavigationResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}/navigation");

        return Models\ThreadsNavigationResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsPollGetResponse
     */
    public function pollGet(int $thread_id): Models\ThreadsPollGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}/poll");

        return Models\ThreadsPollGetResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @param array{response_id?: int, response_ids?: list<int>} $body
     * @return Models\ThreadsPollVoteResponse
     */
    public function pollVote(int $thread_id, array $body = []): Models\ThreadsPollVoteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/poll/votes", [], $body, 'json');

        return Models\ThreadsPollVoteResponse::fromArray($data);
    }

    /**
     * @param array{limit?: int, forum_id?: int, data_limit?: int} $params
     * @return Models\ThreadsUnreadResponse
     */
    public function unread(array $params = []): Models\ThreadsUnreadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/threads/new', $params);

        return Models\ThreadsUnreadResponse::fromArray($data);
    }

    /**
     * @param array{days?: int, limit?: int, forum_id?: int, data_limit?: int} $params
     * @return Models\ThreadsRecentResponse
     */
    public function recent(array $params = []): Models\ThreadsRecentResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/threads/recent', $params);

        return Models\ThreadsRecentResponse::fromArray($data);
    }

    /**
     * @param int $thread_id
     * @return Models\ThreadsFinishResponse
     */
    public function finish(int $thread_id): Models\ThreadsFinishResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/contests/{$thread_id}/finish");

        return Models\ThreadsFinishResponse::fromArray($data);
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
     * @return Models\PostsListResponse
     */
    public function getList(array $params = []): Models\PostsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/posts', $params);

        return Models\PostsListResponse::fromArray($data);
    }

    /**
     * @param array{post_body: string, thread_id?: int, quote_post_id?: int} $body
     * @return Models\PostsCreateResponse
     */
    public function create(array $body): Models\PostsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/posts', [], $body, 'json');

        return Models\PostsCreateResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @return Models\PostsGetResponse
     */
    public function get(int $post_id): Models\PostsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/posts/{$post_id}");

        return Models\PostsGetResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @param array{post_body?: string} $body
     * @return Models\PostsEditResponse
     */
    public function edit(int $post_id, array $body = []): Models\PostsEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/posts/{$post_id}", [], $body, 'json');

        return Models\PostsEditResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @param array{reason?: string} $body
     * @return Models\PostsDeleteResponse
     */
    public function delete(int $post_id, array $body = []): Models\PostsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/posts/{$post_id}", [], $body, 'json');

        return Models\PostsDeleteResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @param array{page?: int, limit?: int} $params
     * @return Models\PostsLikesResponse
     */
    public function likes(int $post_id, array $params = []): Models\PostsLikesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/posts/{$post_id}/likes", $params);

        return Models\PostsLikesResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @return Models\PostsLikeResponse
     */
    public function like(int $post_id): Models\PostsLikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/posts/{$post_id}/likes");

        return Models\PostsLikeResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @return Models\PostsUnlikeResponse
     */
    public function unlike(int $post_id): Models\PostsUnlikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/posts/{$post_id}/likes");

        return Models\PostsUnlikeResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @return Models\PostsReportReasonsResponse
     */
    public function reportReasons(int $post_id): Models\PostsReportReasonsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/posts/{$post_id}/report");

        return Models\PostsReportReasonsResponse::fromArray($data);
    }

    /**
     * @param int $post_id
     * @param array{message: string} $body
     * @return Models\PostsReportResponse
     */
    public function report(int $post_id, array $body): Models\PostsReportResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/posts/{$post_id}/report", [], $body, 'json');

        return Models\PostsReportResponse::fromArray($data);
    }

    /**
     * @param array{post_id: int, before?: int, before_comment?: int} $params
     * @return Models\PostsCommentsGetResponse
     */
    public function commentsGet(array $params = []): Models\PostsCommentsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/posts/comments', $params);

        return Models\PostsCommentsGetResponse::fromArray($data);
    }

    /**
     * @param array{post_id: int, comment_body: string} $body
     * @return Models\PostsCommentsCreateResponse
     */
    public function commentsCreate(array $body): Models\PostsCommentsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/posts/comments', [], $body, 'json');

        return Models\PostsCommentsCreateResponse::fromArray($data);
    }

    /**
     * @param array{post_comment_id: int, comment_body: string} $body
     * @return Models\PostsCommentsEditResponse
     */
    public function commentsEdit(array $body): Models\PostsCommentsEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', '/posts/comments', [], $body, 'json');

        return Models\PostsCommentsEditResponse::fromArray($data);
    }

    /**
     * @param array{post_comment_id: int, reason?: string} $body
     * @return Models\PostsCommentsDeleteResponse
     */
    public function commentsDelete(array $body): Models\PostsCommentsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/posts/comments', [], $body, 'json');

        return Models\PostsCommentsDeleteResponse::fromArray($data);
    }

    /**
     * @param array{post_comment_id: int, message: string} $body
     * @return Models\PostsCommentsReportResponse
     */
    public function commentsReport(array $body): Models\PostsCommentsReportResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/posts/comments/report', [], $body, 'json');

        return Models\PostsCommentsReportResponse::fromArray($data);
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
     * @return Models\UsersListResponse
     */
    public function getList(array $params = []): Models\UsersListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users', $params);

        return Models\UsersListResponse::fromArray($data);
    }

    /**
     * @return Models\UsersFieldsResponse
     */
    public function fields(): Models\UsersFieldsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users/fields');

        return Models\UsersFieldsResponse::fromArray($data);
    }

    /**
     * @param array{username?: string, custom_fields?: array<string, string>, fields_include?: list<'*'|'alerts'>} $params
     * @return Models\UsersFindResponse
     */
    public function find(array $params = []): Models\UsersFindResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users/find', $params);

        return Models\UsersFindResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{fields_include?: list<'*'|'alerts'>} $params
     * @return Models\UsersGetResponse
     */
    public function get(string|int $user_id, array $params = []): Models\UsersGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}", $params);

        return Models\UsersGetResponse::fromArray($data);
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
     * @return Models\UsersEditResponse
     */
    public function edit(string|int $user_id, array $body = []): Models\UsersEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/users/{$user_id}", [], $body, 'json');

        return Models\UsersEditResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{type?: 'market'|'nomarket', claim_state?: 'active'|'solved'|'rejected'|'settled'} $params
     * @return Models\UsersClaimsResponse
     */
    public function claims(string|int $user_id, array $params = []): Models\UsersClaimsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/claims", $params);

        return Models\UsersClaimsResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{avatar: string, x?: int, y?: int, crop?: int} $body
     * @return Models\UsersAvatarUploadResponse
     */
    public function avatarUpload(string|int $user_id, array $body): Models\UsersAvatarUploadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/avatar", [], $body, 'multipart');

        return Models\UsersAvatarUploadResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersAvatarDeleteResponse
     */
    public function avatarDelete(string|int $user_id): Models\UsersAvatarDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/avatar");

        return Models\UsersAvatarDeleteResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{x?: int, y?: int, crop?: int} $body
     * @return Models\UsersAvatarCropResponse
     */
    public function avatarCrop(string|int $user_id, array $body = []): Models\UsersAvatarCropResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/avatar/crop", [], $body, 'json');

        return Models\UsersAvatarCropResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{background: string, x?: int, y?: int, crop?: int} $body
     * @return Models\UsersBackgroundUploadResponse
     */
    public function backgroundUpload(string|int $user_id, array $body): Models\UsersBackgroundUploadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/background", [], $body, 'multipart');

        return Models\UsersBackgroundUploadResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersBackgroundDeleteResponse
     */
    public function backgroundDelete(string|int $user_id): Models\UsersBackgroundDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/background");

        return Models\UsersBackgroundDeleteResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{x?: int, y?: int, crop?: int} $body
     * @return Models\UsersBackgroundCropResponse
     */
    public function backgroundCrop(string|int $user_id, array $body): Models\UsersBackgroundCropResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/background/crop", [], $body, 'json');

        return Models\UsersBackgroundCropResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{order?: 'natural'|'follow_date'|'follow_date_reverse', page?: int, limit?: int} $params
     * @return Models\UsersFollowersResponse
     */
    public function followers(string|int $user_id, array $params = []): Models\UsersFollowersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/followers", $params);

        return Models\UsersFollowersResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersFollowResponse
     */
    public function follow(string|int $user_id): Models\UsersFollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/followers");

        return Models\UsersFollowResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersUnfollowResponse
     */
    public function unfollow(string|int $user_id): Models\UsersUnfollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/followers");

        return Models\UsersUnfollowResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{order?: 'natural'|'follow_date'|'follow_date_reverse', page?: int, limit?: int} $params
     * @return Models\UsersFollowingsResponse
     */
    public function followings(string|int $user_id, array $params = []): Models\UsersFollowingsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/followings", $params);

        return Models\UsersFollowingsResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{node_id?: int, like_type?: 'like'|'like2', type?: 'gotten'|'given', page?: int, content_type?: 'post'|'post_comment'|'profile_post'|'profile_post_comment', search_user_id?: int, stats?: bool} $params
     * @return Models\UsersLikesResponse
     */
    public function likes(string|int $user_id, array $params = []): Models\UsersLikesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/likes", $params);

        return Models\UsersLikesResponse::fromArray($data);
    }

    /**
     * @param array{total?: bool} $params
     * @return Models\UsersIgnoredResponse
     */
    public function ignored(array $params = []): Models\UsersIgnoredResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users/ignored', $params);

        return Models\UsersIgnoredResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersIgnoreResponse
     */
    public function ignore(string|int $user_id): Models\UsersIgnoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/ignore");

        return Models\UsersIgnoreResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{ignore_conversations?: bool, ignore_content?: bool, restrict_view_profile?: bool} $params
     * @return Models\UsersIgnoreEditResponse
     */
    public function ignoreEdit(string|int $user_id, array $params = []): Models\UsersIgnoreEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/users/{$user_id}/ignore", $params);

        return Models\UsersIgnoreEditResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersUnignoreResponse
     */
    public function unignore(string|int $user_id): Models\UsersUnignoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/ignore");

        return Models\UsersUnignoreResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @param array{page?: int, limit?: int} $params
     * @return Models\UsersContentsResponse
     */
    public function contents(string|int $user_id, array $params = []): Models\UsersContentsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/timeline", $params);

        return Models\UsersContentsResponse::fromArray($data);
    }

    /**
     * @param string|int $user_id
     * @return Models\UsersTrophiesResponse
     */
    public function trophies(string|int $user_id): Models\UsersTrophiesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/trophies");

        return Models\UsersTrophiesResponse::fromArray($data);
    }

    /**
     * @return Models\UsersSecretAnswerTypesResponse
     */
    public function secretAnswerTypes(): Models\UsersSecretAnswerTypesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users/secret-answer/types');

        return Models\UsersSecretAnswerTypesResponse::fromArray($data);
    }

    /**
     * @return Models\UsersSAResetResponse
     */
    public function sAReset(): Models\UsersSAResetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/account/secret-answer/reset');

        return Models\UsersSAResetResponse::fromArray($data);
    }

    /**
     * @return Models\UsersSACancelResetResponse
     */
    public function sACancelReset(): Models\UsersSACancelResetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/account/secret-answer/reset');

        return Models\UsersSACancelResetResponse::fromArray($data);
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
     * @return Models\ProfilePostsListResponse
     */
    public function getList(string|int $user_id, array $params = []): Models\ProfilePostsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/profile-posts", $params);

        return Models\ProfilePostsListResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsGetResponse
     */
    public function get(int $profile_post_id): Models\ProfilePostsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}");

        return Models\ProfilePostsGetResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @param array{post_body?: string, disable_comments?: bool} $body
     * @return Models\ProfilePostsEditResponse
     */
    public function edit(int $profile_post_id, array $body = []): Models\ProfilePostsEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/profile-posts/{$profile_post_id}", [], $body, 'json');

        return Models\ProfilePostsEditResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @param array{reason?: string} $params
     * @return Models\ProfilePostsDeleteResponse
     */
    public function delete(int $profile_post_id, array $params = []): Models\ProfilePostsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/profile-posts/{$profile_post_id}", $params);

        return Models\ProfilePostsDeleteResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsReportReasonsResponse
     */
    public function reportReasons(int $profile_post_id): Models\ProfilePostsReportReasonsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}/report");

        return Models\ProfilePostsReportReasonsResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @param array{message: string} $body
     * @return Models\ProfilePostsReportResponse
     */
    public function report(int $profile_post_id, array $body): Models\ProfilePostsReportResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/profile-posts/{$profile_post_id}/report", [], $body, 'json');

        return Models\ProfilePostsReportResponse::fromArray($data);
    }

    /**
     * @param array{user_id: string|int, post_body: string} $body
     * @return Models\ProfilePostsCreateResponse
     */
    public function create(array $body): Models\ProfilePostsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/profile-posts', [], $body, 'json');

        return Models\ProfilePostsCreateResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsStickResponse
     */
    public function stick(int $profile_post_id): Models\ProfilePostsStickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/profile-posts/{$profile_post_id}/stick");

        return Models\ProfilePostsStickResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsUnstickResponse
     */
    public function unstick(int $profile_post_id): Models\ProfilePostsUnstickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/profile-posts/{$profile_post_id}/stick");

        return Models\ProfilePostsUnstickResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsLikesResponse
     */
    public function likes(int $profile_post_id): Models\ProfilePostsLikesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}/likes");

        return Models\ProfilePostsLikesResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsLikeResponse
     */
    public function like(int $profile_post_id): Models\ProfilePostsLikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/profile-posts/{$profile_post_id}/likes");

        return Models\ProfilePostsLikeResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @return Models\ProfilePostsUnlikeResponse
     */
    public function unlike(int $profile_post_id): Models\ProfilePostsUnlikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/profile-posts/{$profile_post_id}/likes");

        return Models\ProfilePostsUnlikeResponse::fromArray($data);
    }

    /**
     * @param array{profile_post_id: int, before?: int, limit?: int} $params
     * @return Models\ProfilePostsCommentsListResponse
     */
    public function commentsList(array $params = []): Models\ProfilePostsCommentsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/profile-posts/comments', $params);

        return Models\ProfilePostsCommentsListResponse::fromArray($data);
    }

    /**
     * @param array{profile_post_id: int, comment_body: string} $body
     * @return Models\ProfilePostsCommentsCreateResponse
     */
    public function commentsCreate(array $body): Models\ProfilePostsCommentsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/profile-posts/comments', [], $body, 'json');

        return Models\ProfilePostsCommentsCreateResponse::fromArray($data);
    }

    /**
     * @param array{comment_id: int, comment_body: string} $body
     * @return Models\ProfilePostsCommentsEditResponse
     */
    public function commentsEdit(array $body): Models\ProfilePostsCommentsEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', '/profile-posts/comments', [], $body, 'json');

        return Models\ProfilePostsCommentsEditResponse::fromArray($data);
    }

    /**
     * @param array{comment_id: int} $body
     * @return Models\ProfilePostsCommentsDeleteResponse
     */
    public function commentsDelete(array $body): Models\ProfilePostsCommentsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/profile-posts/comments', [], $body, 'json');

        return Models\ProfilePostsCommentsDeleteResponse::fromArray($data);
    }

    /**
     * @param int $profile_post_id
     * @param int $comment_id
     * @return Models\ProfilePostsCommentsGetResponse
     */
    public function commentsGet(int $profile_post_id, int $comment_id): Models\ProfilePostsCommentsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}/comments/{$comment_id}");

        return Models\ProfilePostsCommentsGetResponse::fromArray($data);
    }

    /**
     * @param int $comment_id
     * @param array{message: string} $body
     * @return Models\ProfilePostsCommentsReportResponse
     */
    public function commentsReport(int $comment_id, array $body): Models\ProfilePostsCommentsReportResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/profile-posts/comments/{$comment_id}/report", [], $body, 'json');

        return Models\ProfilePostsCommentsReportResponse::fromArray($data);
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
     * @return Models\ConversationsListResponse
     */
    public function getList(array $params = []): Models\ConversationsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/conversations', $params);

        return Models\ConversationsListResponse::fromArray($data);
    }

    /**
     * @param array{recipient_id?: int, recipients?: list<string>, is_group?: bool, title?: string, open_invite?: bool, allow_edit_messages?: bool, allow_sticky_messages?: bool, allow_delete_own_messages?: bool, message_body?: string} $body
     * @return Models\ConversationsCreateResponse
     */
    public function create(array $body = []): Models\ConversationsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations', [], $body, 'json');

        return Models\ConversationsCreateResponse::fromArray($data);
    }

    /**
     * @param array{conversation_id: int, title?: string, open_invite?: bool, history_open?: bool, allow_edit_messages?: bool, allow_sticky_messages?: bool, allow_delete_own_messages?: bool} $body
     * @return Models\ConversationsUpdateResponse
     */
    public function update(array $body): Models\ConversationsUpdateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', '/conversations', [], $body, 'json');

        return Models\ConversationsUpdateResponse::fromArray($data);
    }

    /**
     * @param array{conversation_id: int, delete_type: 'delete'|'delete_ignore'} $body
     * @return Models\ConversationsDeleteResponse
     */
    public function delete(array $body): Models\ConversationsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/conversations', [], $body, 'json');

        return Models\ConversationsDeleteResponse::fromArray($data);
    }

    /**
     * @param array{user_id: string|int} $body
     * @return Models\ConversationsStartResponse
     */
    public function start(array $body): Models\ConversationsStartResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations/start', [], $body, 'json');

        return Models\ConversationsStartResponse::fromArray($data);
    }

    /**
     * @param array{link: string} $body
     * @return Models\ConversationsSaveResponse
     */
    public function save(array $body): Models\ConversationsSaveResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations/save', [], $body, 'json');

        return Models\ConversationsSaveResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @return Models\ConversationsGetResponse
     */
    public function get(int $conversation_id): Models\ConversationsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/conversations/{$conversation_id}");

        return Models\ConversationsGetResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param array{page?: int, limit?: int, order?: 'natural'|'natural_reverse', before?: int, after?: int} $params
     * @return Models\ConversationsMessagesListResponse
     */
    public function messagesList(int $conversation_id, array $params = []): Models\ConversationsMessagesListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/conversations/{$conversation_id}/messages", $params);

        return Models\ConversationsMessagesListResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param array{reply_message_id?: int, message_body: string} $body
     * @return Models\ConversationsMessagesCreateResponse
     */
    public function messagesCreate(int $conversation_id, array $body): Models\ConversationsMessagesCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/messages", [], $body, 'json');

        return Models\ConversationsMessagesCreateResponse::fromArray($data);
    }

    /**
     * @param array{q?: string, conversation_id?: int, search_recipients?: bool} $body
     * @return Models\ConversationsSearchResponse
     */
    public function search(array $body = []): Models\ConversationsSearchResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations/search', [], $body, 'json');

        return Models\ConversationsSearchResponse::fromArray($data);
    }

    /**
     * @param int $message_id
     * @return Models\ConversationsMessagesGetResponse
     */
    public function messagesGet(int $message_id): Models\ConversationsMessagesGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/conversations/messages/{$message_id}");

        return Models\ConversationsMessagesGetResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @param array{message_body: string} $body
     * @return Models\ConversationsMessagesEditResponse
     */
    public function messagesEdit(int $conversation_id, int $message_id, array $body): Models\ConversationsMessagesEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/conversations/{$conversation_id}/messages/{$message_id}", [], $body, 'json');

        return Models\ConversationsMessagesEditResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @return Models\ConversationsMessagesDeleteResponse
     */
    public function messagesDelete(int $conversation_id, int $message_id): Models\ConversationsMessagesDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/messages/{$message_id}");

        return Models\ConversationsMessagesDeleteResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param array{recipients: list<string>} $body
     * @return Models\ConversationsInviteResponse
     */
    public function invite(int $conversation_id, array $body): Models\ConversationsInviteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/invite", [], $body, 'json');

        return Models\ConversationsInviteResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param array{user_id: int} $body
     * @return Models\ConversationsKickResponse
     */
    public function kick(int $conversation_id, array $body): Models\ConversationsKickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/kick", [], $body, 'json');

        return Models\ConversationsKickResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @return Models\ConversationsReadResponse
     */
    public function read(int $conversation_id): Models\ConversationsReadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/read");

        return Models\ConversationsReadResponse::fromArray($data);
    }

    /**
     * @return Models\ConversationsReadAllResponse
     */
    public function readAll(): Models\ConversationsReadAllResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations/read-all');

        return Models\ConversationsReadAllResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @return Models\ConversationsMessagesStickResponse
     */
    public function messagesStick(int $conversation_id, int $message_id): Models\ConversationsMessagesStickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/messages/{$message_id}/stick");

        return Models\ConversationsMessagesStickResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @param int $message_id
     * @return Models\ConversationsMessagesUnstickResponse
     */
    public function messagesUnstick(int $conversation_id, int $message_id): Models\ConversationsMessagesUnstickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/messages/{$message_id}/stick");

        return Models\ConversationsMessagesUnstickResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @return Models\ConversationsStarResponse
     */
    public function star(int $conversation_id): Models\ConversationsStarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/star");

        return Models\ConversationsStarResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @return Models\ConversationsUnstarResponse
     */
    public function unstar(int $conversation_id): Models\ConversationsUnstarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/star");

        return Models\ConversationsUnstarResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @return Models\ConversationsAlertsEnableResponse
     */
    public function alertsEnable(int $conversation_id): Models\ConversationsAlertsEnableResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/alerts");

        return Models\ConversationsAlertsEnableResponse::fromArray($data);
    }

    /**
     * @param int $conversation_id
     * @return Models\ConversationsAlertsDisableResponse
     */
    public function alertsDisable(int $conversation_id): Models\ConversationsAlertsDisableResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/alerts");

        return Models\ConversationsAlertsDisableResponse::fromArray($data);
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
     * @return Models\NotificationsListResponse
     */
    public function getList(array $params = []): Models\NotificationsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/notifications', $params);

        return Models\NotificationsListResponse::fromArray($data);
    }

    /**
     * @param int $notification_id
     * @return Models\NotificationsGetResponse
     */
    public function get(int $notification_id): Models\NotificationsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/notifications/{$notification_id}/content");

        return Models\NotificationsGetResponse::fromArray($data);
    }

    /**
     * @param array{notification_id?: int} $body
     * @return Models\NotificationsReadResponse
     */
    public function read(array $body = []): Models\NotificationsReadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/notifications/read', [], $body, 'json');

        return Models\NotificationsReadResponse::fromArray($data);
    }
}

final class TagsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @return Models\TagsPopularResponse
     */
    public function popular(): Models\TagsPopularResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/tags');

        return Models\TagsPopularResponse::fromArray($data);
    }

    /**
     * @param array{page?: int, limit?: int} $params
     * @return Models\TagsListResponse
     */
    public function getList(array $params = []): Models\TagsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/tags/list', $params);

        return Models\TagsListResponse::fromArray($data);
    }

    /**
     * @param int $tag_id
     * @param array{page?: int, limit?: int} $params
     * @return Models\TagsGetResponse
     */
    public function get(int $tag_id, array $params = []): Models\TagsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/tags/{$tag_id}", $params);

        return Models\TagsGetResponse::fromArray($data);
    }

    /**
     * @param array{tag: string} $params
     * @return Models\TagsFindResponse
     */
    public function find(array $params = []): Models\TagsFindResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/tags/find', $params);

        return Models\TagsFindResponse::fromArray($data);
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
     * @return Models\SearchAllResponse
     */
    public function all(array $body = []): Models\SearchAllResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search', [], $body, 'json');

        return Models\SearchAllResponse::fromArray($data);
    }

    /**
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, data_limit?: int} $body
     * @return Models\SearchThreadsResponse
     */
    public function threads(array $body = []): Models\SearchThreadsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/threads', [], $body, 'json');

        return Models\SearchThreadsResponse::fromArray($data);
    }

    /**
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, data_limit?: int} $body
     * @return Models\SearchPostsResponse
     */
    public function posts(array $body = []): Models\SearchPostsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/posts', [], $body, 'json');

        return Models\SearchPostsResponse::fromArray($data);
    }

    /**
     * @param array{q?: string} $body
     * @return Models\SearchUsersResponse
     */
    public function users(array $body = []): Models\SearchUsersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/users', [], $body, 'json');

        return Models\SearchUsersResponse::fromArray($data);
    }

    /**
     * @param array{q?: string, user_id?: int, page?: int, limit?: int} $body
     * @return Models\SearchProfilePostsResponse
     */
    public function profilePosts(array $body = []): Models\SearchProfilePostsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/profile-posts', [], $body, 'json');

        return Models\SearchProfilePostsResponse::fromArray($data);
    }

    /**
     * @param array{tag?: string, tags?: list<string>, page?: int, limit?: int} $body
     * @return Models\SearchTaggedResponse
     */
    public function tagged(array $body = []): Models\SearchTaggedResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/tagged', [], $body, 'json');

        return Models\SearchTaggedResponse::fromArray($data);
    }

    /**
     * @param string|int $search_id
     * @param array{page?: int, limit?: int} $params
     * @return Models\SearchResultsResponse
     */
    public function results(string|int $search_id, array $params = []): Models\SearchResultsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/search/{$search_id}/results", $params);

        return Models\SearchResultsResponse::fromArray($data);
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
     * @return Models\BatchExecuteResponse
     */
    public function execute(array $body = []): Models\BatchExecuteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/batch', [], $body, 'json');

        return Models\BatchExecuteResponse::fromArray($data);
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
     * @return Models\ChatboxIndexResponse
     */
    public function index(array $params = []): Models\ChatboxIndexResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox', $params);

        return Models\ChatboxIndexResponse::fromArray($data);
    }

    /**
     * @param array{room_id: 1|2|3|4|13, before_message_id?: int} $params
     * @return Models\ChatboxGetMessagesResponse
     */
    public function getMessages(array $params = []): Models\ChatboxGetMessagesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages', $params);

        return Models\ChatboxGetMessagesResponse::fromArray($data);
    }

    /**
     * @param array{room_id: 1|2|3|4|13, reply_message_id?: int, message: string} $body
     * @return Models\ChatboxPostMessageResponse
     */
    public function postMessage(array $body): Models\ChatboxPostMessageResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/chatbox/messages', [], $body, 'json');

        return Models\ChatboxPostMessageResponse::fromArray($data);
    }

    /**
     * @param array{message_id: int, message: string} $body
     * @return Models\ChatboxEditMessageResponse
     */
    public function editMessage(array $body): Models\ChatboxEditMessageResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', '/chatbox/messages', [], $body, 'json');

        return Models\ChatboxEditMessageResponse::fromArray($data);
    }

    /**
     * @param array{message_id: int} $body
     * @return Models\ChatboxDeleteMessageResponse
     */
    public function deleteMessage(array $body): Models\ChatboxDeleteMessageResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/chatbox/messages', [], $body, 'json');

        return Models\ChatboxDeleteMessageResponse::fromArray($data);
    }

    /**
     * @param array{room_id: 1|2|3|4|13} $params
     * @return Models\ChatboxOnlineResponse
     */
    public function online(array $params = []): Models\ChatboxOnlineResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages/online', $params);

        return Models\ChatboxOnlineResponse::fromArray($data);
    }

    /**
     * @param array{message_id: int} $params
     * @return Models\ChatboxReportReasonsResponse
     */
    public function reportReasons(array $params = []): Models\ChatboxReportReasonsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages/report', $params);

        return Models\ChatboxReportReasonsResponse::fromArray($data);
    }

    /**
     * @param array{message_id: int, reason: string} $body
     * @return Models\ChatboxReportResponse
     */
    public function report(array $body): Models\ChatboxReportResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/chatbox/messages/report', [], $body, 'json');

        return Models\ChatboxReportResponse::fromArray($data);
    }

    /**
     * @param array{duration?: 'day'|'week'|'month'} $params
     * @return Models\ChatboxGetLeaderboardResponse
     */
    public function getLeaderboard(array $params = []): Models\ChatboxGetLeaderboardResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages/leaderboard', $params);

        return Models\ChatboxGetLeaderboardResponse::fromArray($data);
    }

    /**
     * @return Models\ChatboxGetIgnoreResponse
     */
    public function getIgnore(): Models\ChatboxGetIgnoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/ignore');

        return Models\ChatboxGetIgnoreResponse::fromArray($data);
    }

    /**
     * @param array{user_id: string|int} $body
     * @return Models\ChatboxPostIgnoreResponse
     */
    public function postIgnore(array $body): Models\ChatboxPostIgnoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/chatbox/ignore', [], $body, 'json');

        return Models\ChatboxPostIgnoreResponse::fromArray($data);
    }

    /**
     * @param array{user_id: string|int} $body
     * @return Models\ChatboxDeleteIgnoreResponse
     */
    public function deleteIgnore(array $body): Models\ChatboxDeleteIgnoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/chatbox/ignore', [], $body, 'json');

        return Models\ChatboxDeleteIgnoreResponse::fromArray($data);
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
     * @return Models\FormsListResponse
     */
    public function getList(array $params = []): Models\FormsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forms', $params);

        return Models\FormsListResponse::fromArray($data);
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
     * @return Models\FormsCreateResponse
     */
    public function create(array $body): Models\FormsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/forms/save', [], $body, 'json');

        return Models\FormsCreateResponse::fromArray($data);
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
