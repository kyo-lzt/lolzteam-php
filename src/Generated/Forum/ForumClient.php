<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\RateLimitConfig;
use Lolzteam\Runtime\RetryConfig;

final class OAuthTokenClientCredentials
{
    public function __construct(
        public readonly string $client_id,
        public readonly string $client_secret,
        public readonly array $scope,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'grant_type' => 'client_credentials',
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'scope' => $this->scope,
        ];
    }
}

final class OAuthTokenAuthorizationCode
{
    public function __construct(
        public readonly string $code,
        public readonly string $client_id,
        public readonly string $client_secret,
        public readonly string $redirect_uri,
        public readonly array $scope,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'grant_type' => 'authorization_code',
            'code' => $this->code,
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'redirect_uri' => $this->redirect_uri,
            'scope' => $this->scope,
        ];
    }
}

final class OAuthTokenRefreshToken
{
    public function __construct(
        public readonly string $refresh_token,
        public readonly string $client_id,
        public readonly string $client_secret,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->refresh_token,
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
        ];
    }
}

final class OAuthTokenPassword
{
    public function __construct(
        public readonly string $username,
        public readonly string $password,
        public readonly string $client_id,
        public readonly string $client_secret,
        public readonly array $scope,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'grant_type' => 'password',
            'username' => $this->username,
            'password' => $this->password,
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'scope' => $this->scope,
        ];
    }
}


final class FormsCreateP2PTrade
{
    public function __construct(
        public readonly array $fields,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'form_id' => 1,
            'fields' => $this->fields,
        ];
    }
}

final class FormsCreateComplaint
{
    public function __construct(
        public readonly array $fields,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'form_id' => 3,
            'fields' => $this->fields,
        ];
    }
}



final class OAuthApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * Get Access Token
     *
     * Obtain an access token using various grant types.
     *
     * Supports the following grant types:
     * - Client Credentials
     * - Authorization Code
     * - Refresh Token
     * - Password
     *
     * @param OAuthTokenClientCredentials|OAuthTokenAuthorizationCode|OAuthTokenRefreshToken|OAuthTokenPassword $body
     * @return Models\OAuthTokenResponse
     */
    public function token(OAuthTokenClientCredentials|OAuthTokenAuthorizationCode|OAuthTokenRefreshToken|OAuthTokenPassword $body): Models\OAuthTokenResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/oauth/token', [], $body->toArray(), 'multipart');

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
     * Get CSS
     *
     * Gets css rulesets for requested selectors.
     *
     * - **css**: The names or identifiers of the CSS selectors to retrieve.
     *
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
     * Get Categories
     *
     * List of all categories in the system.
     *
     * Required scopes:
     * + **read**
     *
     * - **parent_category_id**: Id of parent category. If exists, filter categories that are direct children of that category.
     * - **parent_forum_id**: Id of parent forum. If exists, filter categories that are direct children of that forum.
     * - **order**: Ordering of categories.
     *
     * @param array{parent_category_id?: int, parent_forum_id?: int, order?: Enums\CategoriesOrder} $params
     * @return Models\CategoriesListResponse
     */
    public function getList(array $params = []): Models\CategoriesListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/categories', $params);

        return Models\CategoriesListResponse::fromArray($data);
    }

    /**
     * Get Category
     *
     * Detail information of a category.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $category_id Id of category.
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
     * Get Forums
     *
     * List of all forums in the system.
     *
     * Required scopes:
     * + **read**
     *
     * - **parent_category_id**: Id of parent category. If exists, filter forums that are direct children of that category.
     * - **parent_forum_id**: Id of parent forum. If exists, filter forums that are direct children of that forum.
     * - **order**: Ordering of forums.
     *
     * @param array{parent_category_id?: int, parent_forum_id?: int, order?: Enums\CategoriesOrder} $params
     * @return Models\ForumsListResponse
     */
    public function getList(array $params = []): Models\ForumsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums', $params);

        return Models\ForumsListResponse::fromArray($data);
    }

    /**
     * Get Forums Tree
     *
     * Returns grouped forums.
     *
     * Required scopes:
     * + **read**
     *
     * @return Models\ForumsGroupedResponse
     */
    public function grouped(): Models\ForumsGroupedResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums/grouped');

        return Models\ForumsGroupedResponse::fromArray($data);
    }

    /**
     * Get Forum
     *
     * Detail information of a forum.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $forum_id Id of forum.
     * @return Models\ForumsGetResponse
     */
    public function get(int $forum_id): Models\ForumsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/forums/{$forum_id}");

        return Models\ForumsGetResponse::fromArray($data);
    }

    /**
     * Get Followers
     *
     * List of a forum's followers. For privacy reason, only the current user will be included in the list (if the user follows the specified forum).
     *
     * Required scopes:
     * + **read**
     *
     * @param int $forum_id Id of forum.
     * @return Models\ForumsFollowersResponse
     */
    public function followers(int $forum_id): Models\ForumsFollowersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/forums/{$forum_id}/followers");

        return Models\ForumsFollowersResponse::fromArray($data);
    }

    /**
     * Follow Forum
     *
     * Follow a forum.
     *
     * Required scopes:
     * + **post**
     *
     * - **post**: Whether to receive notification for post.
     * - **alert**: Whether to receive notification as alert.
     * - **email**: Whether to receive notification as email.
     * - **prefix_ids**: Prefix ids.
     * - **minimal_contest_amount**: Minimal contest amount. (Only for 766 forumId)
     *
     * @param int $forum_id Id of forum.
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
     * Unfollow Forum
     *
     * Unfollow a forum.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $forum_id Id of forum.
     * @return Models\ForumsUnfollowResponse
     */
    public function unfollow(int $forum_id): Models\ForumsUnfollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/forums/{$forum_id}/followers");

        return Models\ForumsUnfollowResponse::fromArray($data);
    }

    /**
     * Get Followed Forums
     *
     * List of followed forums by current user.
     *
     * Required scopes:
     * + **read**
     *
     * - **total**: If included in the request, only the forum count is returned as **forums_total**.
     *
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
     * Get Feed Options
     *
     * Returns available options for the forums feed.
     *
     * Required scopes:
     * + **read**
     *
     * @return Models\ForumsGetFeedOptionsResponse
     */
    public function getFeedOptions(): Models\ForumsGetFeedOptionsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/forums/feed/options');

        return Models\ForumsGetFeedOptionsResponse::fromArray($data);
    }

    /**
     * Edit Feed Options
     *
     * Edit feed options.
     *
     * Required scopes:
     * + **post**
     *
     * - **node_ids**: Array of forum ids to exclude from the feed.
     * - **keywords**: List of keywords to exclude specific threads from the feed.
     *
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
     * Get Links Forum
     *
     * List of all link forums.
     *
     * Required scopes:
     * + **read**
     *
     * @return Models\LinksListResponse
     */
    public function getList(): Models\LinksListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/link-forums');

        return Models\LinksListResponse::fromArray($data);
    }

    /**
     * Get Link Forum
     *
     * Detail information of a link forum.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $link_id Id of link forum.
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
     * Get Pages
     *
     * List of all pages in the system.
     *
     * Required scopes:
     * + **read**
     *
     * - **parent_page_id**: Id of parent page. If exists, filter pages that are direct children of that page.
     * - **order**: Ordering of pages.
     *
     * @param array{parent_page_id?: int, order?: Enums\CategoriesOrder} $params
     * @return Models\PagesListResponse
     */
    public function getList(array $params = []): Models\PagesListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/pages', $params);

        return Models\PagesListResponse::fromArray($data);
    }

    /**
     * Get Page
     *
     * Detail information of a page.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $page_id Id of page.
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
     * Get Navigation
     *
     * List of navigation elements within the system.
     *
     * Required scopes:
     * + **read**
     *
     * - **parent**: Id of parent element. If exists, filter elements that are direct children of that element.
     *
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
     * Get Threads
     *
     * List of threads in a forum (with pagination).
     *
     * Required scopes:
     * + **read**
     *
     * - **forum_id**: Id of the containing forum.
     * - **tab**: Tab to get threads from.
     * - **state**: Thread state. Works only if **forum_id** is set.
     * - **period**: Filter to get only threads created within the selected period. Works only if **forum_id** is set.
     * - **title**: Thread title.
     * - **title_only**: Search only in titles.
     * - **creator_user_id**: Filter to get only threads created by the specified user.
     * - **sticky**: Filter to get only sticky or non-sticky threads. By default, all threads will be included and sticky ones will be at the top of the result on the first page. In mixed mode, sticky threads are not counted towards **threads_total** and does not affect pagination.
     * - **prefix_ids[]**: Filter to get only threads with the specified prefix.
     * - **prefix_ids_not[]**: Filter to get only threads without the specified prefix.
     * - **thread_tag_id**: Filter to get only threads with the specified tag.
     * - **page**: Page number of threads.
     * - **limit**: Number of threads in a page.
     * - **order**: Ordering of threads.
     * - **direction**: Direction of threads ordering.
     * - **thread_create_date**: Filter threads by creation date. Only works with 'thread_create_date' and 'thread_create_date_reverse' ordering.
     * - **thread_update_date**: Filter threads by update date. Only works with 'thread_update_date' and 'thread_update_date_reverse' ordering.
     * - **fields_include**: List of fields to include.
     *
     * @param array{forum_id?: int, tab?: string, state?: Enums\State, period?: Enums\Period, title?: string, title_only?: bool, creator_user_id?: int, sticky?: bool, prefix_ids[]?: list<int>, prefix_ids_not[]?: list<int>, thread_tag_id?: int, page?: int, limit?: int, order?: Enums\ThreadsOrder, direction?: Enums\Direction, thread_create_date?: int, thread_update_date?: int, fields_include?: list<'*'|'latest_posts'>} $params
     * @return Models\ThreadsListResponse
     */
    public function getList(array $params = []): Models\ThreadsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/threads', $params);

        return Models\ThreadsListResponse::fromArray($data);
    }

    /**
     * Create Thread
     *
     * Create a new thread.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_body**: Content of the new thread.
     * - **forum_id**: Id of the target forum.
     * - **title**: Thread title. Can be skipped if **title_en** set.
     * - **title_en**: Thread english title. Can be skipped if **title** set.
     * - **prefix_id**: Prefix ids.
     * - **tags**: Thread tags.
     * - **hide_contacts**: Hide contacts.
     * - **allow_ask_hidden_content**: Allow ask hidden content.
     * - **reply_group**: Allow to reply only users with chosen or higher group.
     * - **comment_ignore_group**: Allow commenting if user can't post in thread.
     * - **dont_alert_followers**: Don't alert followers about thread creation.
     * - **schedule_date**: Date to schedule thread creation (format: `DD-MM-YYYY`).
     * - **schedule_time**: Time to schedule thread creation (format: `HH:MM`).
     * - **watch_thread_state**: Watch thread state.
     * - **watch_thread**: Receive forum notifications of new posts in this thread.
     * - **watch_thread_email**: Receive email notifications of new posts in this thread.
     *
     * @param array{post_body: string, forum_id: int, title?: string, title_en?: string, prefix_id?: list<int>, tags?: list<string>, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: Enums\ReplyGroup (Default: 2), comment_ignore_group?: bool, dont_alert_followers?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool} $body
     * @return Models\ThreadsCreateResponse
     */
    public function create(array $body): Models\ThreadsCreateResponse
    {
        $body = $body + ['reply_group' => 2];
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/threads', [], $body, 'json');

        return Models\ThreadsCreateResponse::fromArray($data);
    }

    /**
     * Create Contest
     *
     * Create a new contest.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_body**: Content of the new contest.
     * - **title**: Thread title. Can be skipped if **title_en** set.
     * - **title_en**: Thread english title. Can be skipped if **title** set.
     * - **contest_type**: Contest type.
     * - **length_value**: Giveaway duration value. The maximum duration is 3 days. Required if **contest_type** is **by_finish_date**.
     * - **length_option**: Giveaway duration type. The maximum duration is 3 days. Required if **contest_type** is **by_finish_date**.
     * - **prize_type**: Prize type.
     * - **count_winners**: Winner count (prize count). Optional if **prize_type** is **money**.
     * - **prize_data_money**: How much money will each winner receive. Optional if **prize_type** is **money**.
     * - **is_money_places**: Enable the distribution of money prizes by places. Optional if **prize_type** is **money**.
     * - **prize_data_places**: How much money will receive each place. Required if **is_money_places** is **1**.
     * - **prize_data_upgrade**: Which upgrade will each winner receive. Required if **prize_type** is **upgrades**.
     * - **require_like_count**: Sympathies for this week.
     * - **require_total_like_count**: Sympathies for all time.
     * - **secret_answer**: Secret answer of your account.
     * - **tags**: Thread tags.
     * - **reply_group**: Allow to reply only users with chosen or higher group.
     * - **comment_ignore_group**: Allow commenting if user can't post in thread.
     * - **dont_alert_followers**: Don't alert followers about thread creation.
     * - **hide_contacts**: Hide contacts.
     * - **allow_ask_hidden_content**: Allow ask hidden content.
     * - **schedule_date**: Date to schedule thread creation (format: `DD-MM-YYYY`).
     * - **schedule_time**: Time to schedule thread creation (format: `HH:MM`).
     * - **watch_thread_state**: Watch thread state.
     * - **watch_thread**: Receive forum notifications of new posts in this thread.
     * - **watch_thread_email**: Receive email notifications of new posts in this thread.
     *
     * @param array{post_body: string, title?: string, title_en?: string, contest_type: Enums\ContestType (Default: "by_finish_date"), length_value?: int, length_option?: Enums\LengthOption, prize_type: Enums\PrizeType, count_winners?: int, prize_data_money?: float, is_money_places?: bool, prize_data_places?: list<float>, prize_data_upgrade?: Enums\PrizeDataUpgrade, require_like_count: int, require_total_like_count: int, secret_answer?: string, tags?: list<string>, reply_group?: Enums\ReplyGroup (Default: 2), comment_ignore_group?: bool, dont_alert_followers?: bool, hide_contacts?: bool, allow_ask_hidden_content?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool} $body
     * @return Models\ThreadsCreateContestResponse
     */
    public function createContest(array $body): Models\ThreadsCreateContestResponse
    {
        $body = $body + ['contest_type' => 'by_finish_date', 'reply_group' => 2];
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/contests', [], $body, 'json');

        return Models\ThreadsCreateContestResponse::fromArray($data);
    }

    /**
     * Create Claim
     *
     * Create a Claim.
     *
     * Required scopes:
     * + **post**
     *
     * - **as_responder**: To whom the complaint is filed. Specify a nickname or a link to the profile.
     * - **as_is_market_deal**: Did you buy account on the market?
     * - **as_market_item_id**: Market item id.
Required if **as_is_market_deal** is 1.
     * - **as_data**: Contacts and wallets of the responder. Specify the known data about the responder, if any.
Optional if **as_is_market_deal** is 0.
     * - **as_amount**: Indicate the amount by which the responder deceived you.
     * - **currency**: Currency of Claim.
     * - **transfer_type**: The transaction took place through a guarantor or there was a transfer to the market with a hold?
Required if **as_is_market_deal** is 0.
     * - **pay_claim**: Pay claim fee now or later. (Only for **transfer_type** = **notsafe**)
     * - **as_funds_receipt**: Funds transfer receipt.
Upload a receipt for the transfer of funds, use the "View receipt" button in your wallet. May be uploaded to [Imgur](https://imgur.com/upload). Write "no" if you have not paid.
Required if **as_is_market_deal** is 0.
     * - **as_tg_login_screenshot**: Screenshot showing the respondent's Telegram login.
If the correspondence was conducted in Telegram, upload a screenshot that will display the respondent's Telegram login against the background of your dialogue. The screenshot may be uploaded to [Imgur](https://imgur.com/upload). If the correspondence was conducted elsewhere, write "no".
     * - **tags**: Thread tags.
     * - **hide_contacts**: Hide contacts.
     * - **allow_ask_hidden_content**: Allow ask hidden content.
     * - **reply_group**: Allow to reply only users with chosen or higher group.
     * - **comment_ignore_group**: Allow commenting if user can't post in thread.
     * - **dont_alert_followers**: Don't alert followers about thread creation.
     * - **schedule_date**: Date to schedule thread creation (format: `DD-MM-YYYY`).
     * - **schedule_time**: Time to schedule thread creation (format: `HH:MM`).
     * - **watch_thread_state**: Watch thread state.
     * - **watch_thread**: Receive forum notifications of new posts in this thread.
     * - **watch_thread_email**: Receive email notifications of new posts in this thread.
     * - **post_body**: You should describe what's happened.
- describe the situation in a nutshell. If you wish, you can describe the situation in more detail using the "Spoiler" function.
- attach screenshots of correspondence. You may upload to the site [Imgur](https://imgur.com/upload) - for convenience, use Ctrl + V when uploading screenshots to the album.
- other evidence;
- notify the respondent about the complaint you created, familiarize him with hidden content

Describe the situation in as much detail as possible.
     *
     * @param array{as_responder: string, as_is_market_deal: bool, as_market_item_id?: int, as_data?: string, as_amount: float, currency?: Enums\Currency, transfer_type: Enums\TransferType, pay_claim?: Enums\PayClaim, as_funds_receipt?: string, as_tg_login_screenshot?: string, tags?: list<string>, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: Enums\ReplyGroup (Default: 2), comment_ignore_group?: bool, dont_alert_followers?: bool, schedule_date?: string, schedule_time?: string, watch_thread_state?: bool, watch_thread?: bool, watch_thread_email?: bool, post_body: string} $body
     * @return Models\ThreadsClaimResponse
     */
    public function claim(array $body): Models\ThreadsClaimResponse
    {
        $body = $body + ['reply_group' => 2];
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/claims', [], $body, 'json');

        return Models\ThreadsClaimResponse::fromArray($data);
    }

    /**
     * Get Thread
     *
     * Detail information of a thread.
     *
     * Required scopes:
     * + **read**
     *
     * - **fields_include**: List of fields to include.
     *
     * @param int $thread_id Id of thread.
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
     * Edit thread
     *
     * Edit a thread.
     *
     * Required scopes:
     * + **post**
     *
     * - **title**: Thread title.
     * - **title_en**: Thread title english.
     * - **prefix_id**: Prefix ids. Set "0" to remove all thread prefixes.
     * - **tags**: Thread tags.
     * - **discussion_open**: Discussion state.
     * - **hide_contacts**: Hide contacts.
     * - **allow_ask_hidden_content**: Allow ask hidden content.
     * - **reply_group**: Allow to reply only users with chosen or higher group.
     * - **comment_ignore_group**: Allow commenting if user can't post in thread.
     *
     * @param int $thread_id Id of thread.
     * @param array{title?: string, title_en?: string, prefix_id?: list<int>, tags?: list<string>, discussion_open?: bool, hide_contacts?: bool, allow_ask_hidden_content?: bool, reply_group?: Enums\ReplyGroup, comment_ignore_group?: bool} $body
     * @return Models\ThreadsEditResponse
     */
    public function edit(int $thread_id, array $body = []): Models\ThreadsEditResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('PUT', "/threads/{$thread_id}", [], $body, 'json');

        return Models\ThreadsEditResponse::fromArray($data);
    }

    /**
     * Delete Thread
     *
     * Delete a thread.
     *
     * Required scopes:
     * + **post**
     *
     * - **reason**: Reason of the thread removal.
     *
     * @param int $thread_id Id of thread.
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
     * Move Thread
     *
     * Move a thread to another forum.
     *
     * Required scopes:
     * + **post**
     *
     * - **node_id**: Forum id.
     * - **title**: Thread title.
     * - **title_en**: Thread title english.
     * - **prefix_id**: Prefix ids. Set "0" to remove all thread prefixes.
     * - **apply_thread_prefix**: Apply thread prefix.
     * - **send_alert**: Send a notification to users who are followed to target node.
     *
     * @param int $thread_id Id of thread.
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
     * Bump Thread
     *
     * Bump a thread.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsBumpResponse
     */
    public function bump(int $thread_id): Models\ThreadsBumpResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/bump");

        return Models\ThreadsBumpResponse::fromArray($data);
    }

    /**
     * Hide Thread
     *
     * Hide a thread from your feed.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsHideResponse
     */
    public function hide(int $thread_id): Models\ThreadsHideResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/hide");

        return Models\ThreadsHideResponse::fromArray($data);
    }

    /**
     * Bookmark Thread
     *
     * Bookmark a thread.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsStarResponse
     */
    public function star(int $thread_id): Models\ThreadsStarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/threads/{$thread_id}/star");

        return Models\ThreadsStarResponse::fromArray($data);
    }

    /**
     * Unbookmark Thread
     *
     * Unbookmark a thread.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsUnstarResponse
     */
    public function unstar(int $thread_id): Models\ThreadsUnstarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/threads/{$thread_id}/star");

        return Models\ThreadsUnstarResponse::fromArray($data);
    }

    /**
     * Get Thread Followers
     *
     * List of a thread's followers. For privacy reason, only the current user will be included in the list.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsFollowersResponse
     */
    public function followers(int $thread_id): Models\ThreadsFollowersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}/followers");

        return Models\ThreadsFollowersResponse::fromArray($data);
    }

    /**
     * Follow Thread
     *
     * Follow a thread.
     *
     * Required scopes:
     * + **post**
     *
     * - **email**: Whether to receive notification as email.
     *
     * @param int $thread_id Id of thread.
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
     * Unfollow Thread
     *
     * Unfollow a thread.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsUnfollowResponse
     */
    public function unfollow(int $thread_id): Models\ThreadsUnfollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/threads/{$thread_id}/followers");

        return Models\ThreadsUnfollowResponse::fromArray($data);
    }

    /**
     * Get Followed Threads
     *
     * List of followed threads by current user.
     *
     * Required scopes:
     * + **read**
     *
     * - **total**: If included in the request, only the thread count is returned as **threads_total**.
     * - **fields_include**: List of fields to include.
     *
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
     * Get Navigation Elements
     *
     * List of navigation elements to reach the specified thread.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsNavigationResponse
     */
    public function navigation(int $thread_id): Models\ThreadsNavigationResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}/navigation");

        return Models\ThreadsNavigationResponse::fromArray($data);
    }

    /**
     * Get Poll
     *
     * Detail information of a poll.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $thread_id Id of thread.
     * @return Models\ThreadsPollGetResponse
     */
    public function pollGet(int $thread_id): Models\ThreadsPollGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/threads/{$thread_id}/poll");

        return Models\ThreadsPollGetResponse::fromArray($data);
    }

    /**
     * Vote Poll
     *
     * Vote on a thread poll.
     *
     * Required scopes:
     * + **post**
     *
     * - **response_id**: The id of the response to vote for. Can be skipped if **response_ids** set.
     * - **response_ids**: An array of ids of responses (if the poll allows multiple choices).
     *
     * @param int $thread_id Id of thread.
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
     * Get Unread Threads
     *
     * List of unread threads (must be logged in).
     *
     * Required scopes:
     * + **read**
     *
     * - **limit**: Maximum number of result threads. The limit may get decreased if the value is too large (depending on the system configuration).
     * - **forum_id**: Id of the container forum to search for threads. Child forums of the specified forum will be included in the search.
     * - **data_limit**: Number of thread data to be returned. Default value is 20.
     *
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
     * Get Recent Threads
     *
     * List of recent threads.
     *
     * Required scopes:
     * + **read**
     *
     * - **days**: Maximum number of days to search for threads.
     * - **limit**: Maximum number of result threads. The limit may get decreased if the value is too large.
     * - **forum_id**: Id of the container forum to search for threads. Child forums of the specified forum will be included in the search.
     * - **data_limit**: Number of thread data to be returned. Default value is 20.
     *
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
     * Finish Contest
     *
     * Finishes a contest.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $thread_id Id of thread.
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
     * Get Posts
     *
     * List of posts in a thread (with pagination).
     *
     * Required scopes:
     * + **read**
     *
     * - **thread_id**: Id of the containing thread.
     * - **page_of_post_id**: Id of a post, posts that are in the same page with the specified post will be returned. **thread_id** may be skipped.
     * - **page**: Page number of posts.
     * - **limit**: Number of posts in a page.
     * - **order**: Ordering of posts.
     *
     * @param array{thread_id?: int, page_of_post_id?: int, page?: int, limit?: int, order?: Enums\PostsOrder} $params
     * @return Models\PostsListResponse
     */
    public function getList(array $params = []): Models\PostsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/posts', $params);

        return Models\PostsListResponse::fromArray($data);
    }

    /**
     * Create Post
     *
     * Create a new post.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_body**: Content of the new post.
     * - **thread_id**: Id of the target thread. **quote_post_id** can be skipped if this parameter is provided.
     * - **quote_post_id**: Id of the quote post. **thread_id** can be skipped if this parameter is provided.
     *
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
     * Get Post
     *
     * Detail information of a post.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $post_id Id of post.
     * @return Models\PostsGetResponse
     */
    public function get(int $post_id): Models\PostsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/posts/{$post_id}");

        return Models\PostsGetResponse::fromArray($data);
    }

    /**
     * Edit Post
     *
     * Edit a post.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_body**: Content of the post.
     *
     * @param int $post_id Id of post.
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
     * Delete Post
     *
     * Delete a post.
     *
     * Required scopes:
     * + **post**
     *
     * - **reason**: Reason of the post removal.
     *
     * @param int $post_id Id of post.
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
     * Get Post Likes
     *
     * List of users who liked a post.
     *
     * Required scopes:
     * + **read**
     *
     * - **page**: Page number of users.
     * - **limit**: Number of users in a page.
     *
     * @param int $post_id Id of post.
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
     * Like Post
     *
     * Like a post.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $post_id Id of post.
     * @return Models\PostsLikeResponse
     */
    public function like(int $post_id): Models\PostsLikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/posts/{$post_id}/likes");

        return Models\PostsLikeResponse::fromArray($data);
    }

    /**
     * Unlike Post
     *
     * Unlike a post.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $post_id Id of post.
     * @return Models\PostsUnlikeResponse
     */
    public function unlike(int $post_id): Models\PostsUnlikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/posts/{$post_id}/likes");

        return Models\PostsUnlikeResponse::fromArray($data);
    }

    /**
     * Get Post Report Reasons
     *
     * Get post report reasons.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $post_id Id of post.
     * @return Models\PostsReportReasonsResponse
     */
    public function reportReasons(int $post_id): Models\PostsReportReasonsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/posts/{$post_id}/report");

        return Models\PostsReportReasonsResponse::fromArray($data);
    }

    /**
     * Report Post
     *
     * Report a post.
     *
     * Required scopes:
     * + **post**
     *
     * - **message**: Reason of the report.
     *
     * @param int $post_id Id of post.
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
     * Get Post Comments
     *
     * List of post comments in a thread.
     *
     * Required scopes:
     * + **read**
     *
     * - **post_id**: Id of post.
     * - **before**: The time in milliseconds (e.g. 1652177794083) before last comment date.
     * - **before_comment**: Comment id to get older comments.
     *
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
     * Create Post Comment
     *
     * Create a post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_id**: Id of post.
     * - **comment_body**: Content of the a post comment.
     *
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
     * Edit Post Comment
     *
     * Edit a post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_comment_id**: Id of post.
     * - **comment_body**: Content of the new post comment.
     *
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
     * Delete Post Comment
     *
     * Delete a post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_comment_id**: Id of post comment.
     * - **reason**: Reason of a post comment removal.
     *
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
     * Report Post Comment
     *
     * Report a post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_comment_id**: Id of post comment.
     * - **message**: Reason of the report.
     *
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
     * Get Users
     *
     * List of users (with pagination).
     *
     * Required scopes:
     * + **read**
     *
     * - **page**: Page number of users.
     * - **limit**: Number of users in a page.
     * - **fields_include**: List of fields to include.
     *
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
     * Get User Fields
     *
     * List of user fields.
     *
     * Required scopes:
     * + **read**
     *
     * @return Models\UsersFieldsResponse
     */
    public function fields(): Models\UsersFieldsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users/fields');

        return Models\UsersFieldsResponse::fromArray($data);
    }

    /**
     * Find Users
     *
     * List of users filtered by username, email or custom fields.
     *
     * Required scopes:
     * + **read**
     *
     * - **username**: Username to filter. Usernames start with the query will be returned.
     * - **custom_fields**: Custom fields to filter. Example: **custom_fields[telegram]=telegramLogin**.
     * - **fields_include**: List of fields to include.
     *
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
     * Get User
     *
     * Detail information of a user.
     *
     * Required scopes:
     * + **read**
     * + **basic**
     *
     * - **fields_include**: List of fields to include.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
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
     * Edit User
     *
     * Edit a user.
     *
     * Required scopes:
     * + **post**
     *
     * - **username**: New username.
     * - **user_title**: New custom title of the user.
     * - **display_group_id**: Id of the group you want to display.
     * - **display_icon_group_id**: Id of the icon group you want to display.
     * - **display_banner_id**: Id of the banner you want to display.
     * - **conv_welcome_message**: This message is shown when someone wants to write to you.
     * - **user_dob_day**: Your date of birth (day).
     * - **user_dob_month**: Your date of birth (month).
     * - **user_dob_year**: Your date of birth (year).
     * - **secret_answer**: Secret answer.
     * - **secret_answer_type**: Secret answer type.
     * - **short_link**: Profile short link.
     * - **language_id**: User interface language ID.
     * - **gender**: User gender.
     * - **timezone**: User timezone.
     * - **receive_admin_email**: Whether to receive admin emails.
     * - **activity_visible**: Whether user activity is visible.
     * - **show_dob_date**: Show date of birth (day and month).
     * - **show_dob_year**: Show year of birth.
     * - **hide_username_change_logs**: Hide username change logs.
     * - **allow_view_profile**: Who can view your profile.
     * - **allow_post_profile**: Who can post on your profile.
     * - **allow_send_personal_conversation**: Who can send you personal conversations.
     * - **allow_invite_group**: Who can invite you to groups.
     * - **allow_receive_news_feed**: Who can see your news feed.
     * - **alert**: Alert settings.
     * - **fields**: Custom user profile fields.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{username?: string, user_title?: string, display_group_id?: int, display_icon_group_id?: int, display_banner_id?: int, conv_welcome_message?: string, user_dob_day?: int, user_dob_month?: int, user_dob_year?: int, secret_answer?: string, secret_answer_type?: int, short_link?: string, language_id?: Enums\LanguageId, gender?: Enums\Gender, timezone?: Enums\Timezone, receive_admin_email?: bool, activity_visible?: bool, show_dob_date?: bool, show_dob_year?: bool, hide_username_change_logs?: bool, allow_view_profile?: Enums\AllowViewProfile, allow_post_profile?: Enums\AllowPostProfile, allow_send_personal_conversation?: Enums\AllowSendPersonalConversation, allow_invite_group?: Enums\AllowInviteGroup, allow_receive_news_feed?: Enums\AllowReceiveNewsFeed, alert?: array<string, bool>, fields?: array{
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
     * Get User Claims
     *
     * Get user claims.
     *
     * Required scopes:
     * + **read**
     *
     * - **type**: Filter claims by their type.
     * - **claim_state**: Filter claims by their state.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{type?: Enums\UsersType, claim_state?: Enums\ClaimState} $params
     * @return Models\UsersClaimsResponse
     */
    public function claims(string|int $user_id, array $params = []): Models\UsersClaimsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/claims", $params);

        return Models\UsersClaimsResponse::fromArray($data);
    }

    /**
     * Upload Avatar
     *
     * Upload avatar for a user.
     *
     * Required scopes:
     * + **post**
     *
     * - **avatar**: Binary data of the avatar.
     * - **x**: The starting point of the selection by width. Default value - 0
     * - **y**: The starting point of the selection by height. Default value - 0
     * - **crop**: Selection size.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{avatar: resource|string, x?: int, y?: int, crop?: int} $body
     * @return Models\UsersAvatarUploadResponse
     */
    public function avatarUpload(string|int $user_id, array $body): Models\UsersAvatarUploadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/avatar", [], $body, 'multipart');

        return Models\UsersAvatarUploadResponse::fromArray($data);
    }

    /**
     * Delete Avatar
     *
     * Delete avatar for a user.
     *
     * Required scopes:
     * + **post**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersAvatarDeleteResponse
     */
    public function avatarDelete(string|int $user_id): Models\UsersAvatarDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/avatar");

        return Models\UsersAvatarDeleteResponse::fromArray($data);
    }

    /**
     * Crop Avatar
     *
     * Crop avatar for a user.
     *
     * Required scopes:
     * + **post**
     *
     * - **x**: The starting point of the selection by width. Default value - 0
     * - **y**: The starting point of the selection by height. Default value - 0
     * - **crop**: Selection size.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
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
     * Upload Background
     *
     * Upload background for a user.
     *
     * Required scopes:
     * + **post**
     *
     * - **background**: Binary data of the background. Background image must be 1920x1080 pixels
     * - **x**: The starting point of the selection by width. Default value - 0
     * - **y**: The starting point of the selection by height. Default value - 0
     * - **crop**: Selection size.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{background: resource|string, x?: int, y?: int, crop?: int} $body
     * @return Models\UsersBackgroundUploadResponse
     */
    public function backgroundUpload(string|int $user_id, array $body): Models\UsersBackgroundUploadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/background", [], $body, 'multipart');

        return Models\UsersBackgroundUploadResponse::fromArray($data);
    }

    /**
     * Delete Background
     *
     * Delete background for a user.
     *
     * Required scopes:
     * + **post**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersBackgroundDeleteResponse
     */
    public function backgroundDelete(string|int $user_id): Models\UsersBackgroundDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/background");

        return Models\UsersBackgroundDeleteResponse::fromArray($data);
    }

    /**
     * Crop Background
     *
     * Crop background for a user.
     *
     * Required scopes:
     * + **post**
     *
     * - **x**: The starting point of the selection by width. Default value - 0
     * - **y**: The starting point of the selection by height. Default value - 0
     * - **crop**: Selection size.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
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
     * Get User Followers
     *
     * List of a user's followers.
     *
     * Required scopes:
     * + **read**
     *
     * - **order**: Ordering of followers.
     * - **page**: Page number of followers.
     * - **limit**: Number of followers in a page.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{order?: Enums\UsersOrder, page?: int, limit?: int} $params
     * @return Models\UsersFollowersResponse
     */
    public function followers(string|int $user_id, array $params = []): Models\UsersFollowersResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/followers", $params);

        return Models\UsersFollowersResponse::fromArray($data);
    }

    /**
     * Follow User
     *
     * Follow a user.
     *
     * Required scopes:
     * + **post**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersFollowResponse
     */
    public function follow(string|int $user_id): Models\UsersFollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/followers");

        return Models\UsersFollowResponse::fromArray($data);
    }

    /**
     * Unfollow User
     *
     * Unfollow a user.
     *
     * Required scopes:
     * + **post**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersUnfollowResponse
     */
    public function unfollow(string|int $user_id): Models\UsersUnfollowResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/followers");

        return Models\UsersUnfollowResponse::fromArray($data);
    }

    /**
     * Get Followed Users By User
     *
     * List of users whom are followed by a user.
     *
     * Required scopes:
     * + **read**
     *
     * - **order**: Ordering of users.
     * - **page**: Page number of users.
     * - **limit**: Number of users in a page.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{order?: Enums\UsersOrder, page?: int, limit?: int} $params
     * @return Models\UsersFollowingsResponse
     */
    public function followings(string|int $user_id, array $params = []): Models\UsersFollowingsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/followings", $params);

        return Models\UsersFollowingsResponse::fromArray($data);
    }

    /**
     * Get User Likes
     *
     * Get information about user likes.
     *
     * Required scopes:
     * + **read**
     *
     * - **node_id**: Filter by forum section.
     * - **like_type**: Like type.
     * - **type**: Likes type.
     * - **page**: Page number.
     * - **content_type**: Content type.
     * - **search_user_id**: Get only likes from specified user.
     * - **stats**: Show weekly statistics.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @param array{node_id?: int, like_type?: Enums\LikeType, type?: Enums\UsersType2 (Default: "gotten"), page?: int, content_type?: Enums\ContentType (Default: "post"), search_user_id?: int, stats?: bool} $params
     * @return Models\UsersLikesResponse
     */
    public function likes(string|int $user_id, array $params = []): Models\UsersLikesResponse
    {
        $params = $params + ['type' => 'gotten', 'content_type' => 'post'];
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/likes", $params);

        return Models\UsersLikesResponse::fromArray($data);
    }

    /**
     * Get Ignored Users
     *
     * List of ignored users of current user.
     *
     * Required scopes:
     * + **read**
     *
     * - **total**: If included in the request, only the user count is returned as **users_total**.
     *
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
     * Ignore User
     *
     * Ignore a user.
     *
     * Required scopes:
     * + **post**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersIgnoreResponse
     */
    public function ignore(string|int $user_id): Models\UsersIgnoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/users/{$user_id}/ignore");

        return Models\UsersIgnoreResponse::fromArray($data);
    }

    /**
     * Edit Ignoring Options
     *
     * Edit ignoring options.
     *
     * Required scopes:
     * + **post**
     *
     * - **ignore_conversations**: Ignore user's conversations.
     * - **ignore_content**: Ignore user's content.
     * - **restrict_view_profile**: Restrict user from viewing your profile.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
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
     * Unignore User
     *
     * Stop ignoring a user.
     *
     * Required scopes:
     * + **post**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersUnignoreResponse
     */
    public function unignore(string|int $user_id): Models\UsersUnignoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/users/{$user_id}/ignore");

        return Models\UsersUnignoreResponse::fromArray($data);
    }

    /**
     * Get Contents
     *
     * List of contents created by user (with pagination).
     *
     * Required scopes:
     * + **read**
     *
     * - **page**: Page number of contents.
     * - **limit**: Number of contents in a page.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
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
     * Get Trophies
     *
     * List of user trophies.
     *
     * Required scopes:
     * + **read**
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
     * @return Models\UsersTrophiesResponse
     */
    public function trophies(string|int $user_id): Models\UsersTrophiesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/users/{$user_id}/trophies");

        return Models\UsersTrophiesResponse::fromArray($data);
    }

    /**
     * Get Secret Answer Types
     *
     * Get available secret answer types for user account security.
     *
     * Required scopes:
     * + **read**
     *
     * @return Models\UsersSecretAnswerTypesResponse
     */
    public function secretAnswerTypes(): Models\UsersSecretAnswerTypesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/users/secret-answer/types');

        return Models\UsersSecretAnswerTypesResponse::fromArray($data);
    }

    /**
     * Reset Secret Answer
     *
     * Request a reset of the secret answer for the account.
     *
     * Required scopes:
     * + **post**
     *
     * @return Models\UsersSAResetResponse
     */
    public function sAReset(): Models\UsersSAResetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/account/secret-answer/reset');

        return Models\UsersSAResetResponse::fromArray($data);
    }

    /**
     * Cancel Secret Answer Reset
     *
     * Cancel a pending secret answer reset request for the account.
     *
     * Required scopes:
     * + **post**
     *
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
     * Get Profile Posts
     *
     * List of profile posts (with pagination).
     *
     * Required scopes:
     * + **read**
     *
     * - **posts_user_id**: Filter to get only posts from the specified user.
     * - **page**: Page number of contents.
     * - **limit**: Number of contents in a page.
     * - **fields_include**: List of fields to include.
     *
     * @param string|int $user_id User ID.
> You can use shortlink `me` to interact with your profile.
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
     * Get Profile Post
     *
     * Detail information of a profile post.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsGetResponse
     */
    public function get(int $profile_post_id): Models\ProfilePostsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}");

        return Models\ProfilePostsGetResponse::fromArray($data);
    }

    /**
     * Edit Profile Post
     *
     * Edit a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_body**: New content of the profile post.
     * - **disable_comments**: Disable comments.
     *
     * @param int $profile_post_id Id of profile post.
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
     * Delete Profile Post
     *
     * Delete a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * - **reason**: Reason of the profile post removal.
     *
     * @param int $profile_post_id Id of profile post.
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
     * Get Profile Post Report Reasons
     *
     * Get Profile Post Report Reasons.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsReportReasonsResponse
     */
    public function reportReasons(int $profile_post_id): Models\ProfilePostsReportReasonsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}/report");

        return Models\ProfilePostsReportReasonsResponse::fromArray($data);
    }

    /**
     * Report a Profile Post
     *
     * Report a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * - **message**: Reason of the report.
     *
     * @param int $profile_post_id Id of profile post.
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
     * Create Profile Post
     *
     * Create a profile post on a user profile.
     *
     * Required scopes:
     * + **post**
     *
     * - **post_body**: Content of a profile post.
     *
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
     * Stick Profile Post
     *
     * Stick a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsStickResponse
     */
    public function stick(int $profile_post_id): Models\ProfilePostsStickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/profile-posts/{$profile_post_id}/stick");

        return Models\ProfilePostsStickResponse::fromArray($data);
    }

    /**
     * Unstick Profile Post
     *
     * Unstick a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsUnstickResponse
     */
    public function unstick(int $profile_post_id): Models\ProfilePostsUnstickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/profile-posts/{$profile_post_id}/stick");

        return Models\ProfilePostsUnstickResponse::fromArray($data);
    }

    /**
     * Get Profile Post Likes
     *
     * List of users who liked a profile post.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsLikesResponse
     */
    public function likes(int $profile_post_id): Models\ProfilePostsLikesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}/likes");

        return Models\ProfilePostsLikesResponse::fromArray($data);
    }

    /**
     * Like Profile Post
     *
     * Like a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsLikeResponse
     */
    public function like(int $profile_post_id): Models\ProfilePostsLikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/profile-posts/{$profile_post_id}/likes");

        return Models\ProfilePostsLikeResponse::fromArray($data);
    }

    /**
     * Unlike Profile Post
     *
     * Unlike a profile post.
     *
     * Required scopes:
     * + **post**
     *
     * @param int $profile_post_id Id of profile post.
     * @return Models\ProfilePostsUnlikeResponse
     */
    public function unlike(int $profile_post_id): Models\ProfilePostsUnlikeResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/profile-posts/{$profile_post_id}/likes");

        return Models\ProfilePostsUnlikeResponse::fromArray($data);
    }

    /**
     * Get Profile Post Comments
     *
     * List of comments of a profile post.
     *
     * Required scopes:
     * + **read**
     *
     * - **profile_post_id**: Id of profile post.
     * - **before**: Date to get older comments. Please note that this entry point does not support the page parameter but it still does support **limit**.
     * - **limit**: Number of profile posts in a page.
     *
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
     * Create Profile Post Comment
     *
     * Create a new profile post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **profile_post_id**: Id of profile post.
     * - **comment_body**: Content of the new profile post comment.
     *
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
     * Edit Profile Post Comment
     *
     * Edit a profile post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **comment_id**: Id of profile post comment.
     * - **comment_body**: New content for the profile post comment.
     *
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
     * Delete Profile Post Comment
     *
     * Delete a profile post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **comment_id**: Id of profile post comment.
     *
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
     * Get Profile Post Comment
     *
     * Detail information of a profile post comment.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $profile_post_id Id of profile post.
     * @param int $comment_id Id of profile post comment.
     * @return Models\ProfilePostsCommentsGetResponse
     */
    public function commentsGet(int $profile_post_id, int $comment_id): Models\ProfilePostsCommentsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/profile-posts/{$profile_post_id}/comments/{$comment_id}");

        return Models\ProfilePostsCommentsGetResponse::fromArray($data);
    }

    /**
     * Report a Profile Post Comment
     *
     * Report a profile post comment.
     *
     * Required scopes:
     * + **post**
     *
     * - **message**: Reason of the report.
     *
     * @param int $comment_id Id of profile post comment.
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
     * Get Conversations
     *
     * List of conversations (with pagination).
     *
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * - **folder**: Filter conversations by folder.
     * - **page**: Page number of conversations.
     * - **limit**: Number of conversations in a page.
     *
     * @param array{folder?: Enums\Folder, page?: int, limit?: int} $params
     * @return Models\ConversationsListResponse
     */
    public function getList(array $params = []): Models\ConversationsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/conversations', $params);

        return Models\ConversationsListResponse::fromArray($data);
    }

    /**
     * Create Conversation
     *
     * Create a new conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * - **recipient_id**: Id of recipient. Required if **is_group=false**.
     * - **recipients**: List of recipients username's. Max recipients count is 10. Required if **is_group=true**.
     * - **is_group**: Is group. Set **false** if personal conversation, or set **true** if group.
     * - **title**: The title of new conversation. Required if **is_group=1**.
     * - **open_invite**: Open invite.
     * - **allow_edit_messages**: Allow edit messages.
     * - **allow_sticky_messages**: Allow members to stick messages.
     * - **allow_delete_own_messages**: Allow members to delete their own messages.
     * - **message_body**: First message. Required if **is_group**=false
     *
     * @param array{recipient_id?: int, recipients?: list<string>, is_group?: bool (Default: false), title?: string, open_invite?: bool, allow_edit_messages?: bool, allow_sticky_messages?: bool, allow_delete_own_messages?: bool, message_body?: string} $body
     * @return Models\ConversationsCreateResponse
     */
    public function create(array $body = []): Models\ConversationsCreateResponse
    {
        $body = $body + ['is_group' => false];
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations', [], $body, 'json');

        return Models\ConversationsCreateResponse::fromArray($data);
    }

    /**
     * Edit Conversation
     *
     * Edit conversation.
     *
     * Required scopes:
     * + **conversate**
     *
     * - **conversation_id**: Id of conversation.
     * - **title**: New conversation title.
     * - **open_invite**: Allow members to invite others.
     * - **history_open**: Make conversation history visible to new members.
     * - **allow_edit_messages**: Allow members to edit their own messages.
     * - **allow_sticky_messages**: Allow members to stick messages.
     * - **allow_delete_own_messages**: Allow members to delete their own messages.
     *
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
     * Leave Conversation
     *
     * Leave the conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * - **conversation_id**: Id of conversation.
     * - **delete_type**: Deletion type.
     *
     * @param array{conversation_id: int, delete_type: Enums\DeleteType} $body
     * @return Models\ConversationsDeleteResponse
     */
    public function delete(array $body): Models\ConversationsDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', '/conversations', [], $body, 'json');

        return Models\ConversationsDeleteResponse::fromArray($data);
    }

    /**
     * Start Conversation
     *
     * Start a new conversation with a user.
     *
     * Required scopes:
     * + **conversate**
     *
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
     * Send Content To Saved Messages
     *
     * Send content to Saved Messages.
     *
     * Required scopes:
     * + **conversate**
     *
     * - **link**: Content url.
     *
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
     * Get Conversation
     *
     * Detail information of a conversation.
     *
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @return Models\ConversationsGetResponse
     */
    public function get(int $conversation_id): Models\ConversationsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/conversations/{$conversation_id}");

        return Models\ConversationsGetResponse::fromArray($data);
    }

    /**
     * Get Conversation Messages
     *
     * List of messages in a conversation (with pagination).
     *
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * - **page**: Page number of messages.
     * - **limit**: Number of messages in a page.
     * - **order**: Ordering of messages.
     * - **before**: Date to get older messages.
     * - **after**: Date to get newer messages.
     *
     * @param int $conversation_id Id of conversation.
     * @param array{page?: int, limit?: int, order?: Enums\ConversationsOrder, before?: int, after?: int} $params
     * @return Models\ConversationsMessagesListResponse
     */
    public function messagesList(int $conversation_id, array $params = []): Models\ConversationsMessagesListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/conversations/{$conversation_id}/messages", $params);

        return Models\ConversationsMessagesListResponse::fromArray($data);
    }

    /**
     * Create Conversation Message
     *
     * Create a new conversation message.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * - **reply_message_id**: ID of the message being replied to.
     * - **message_body**: Content of the new message.
     *
     * @param int $conversation_id Id of conversation.
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
     * Search Conversations Messages
     *
     * Search for conversations messages or recipients.
     *
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * - **q**: Search query string.
     * - **conversation_id**: Id of conversation.
     * - **search_recipients**: Search for recipients.
     *
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
     * Get Conversation Message
     *
     * Detail information of a message.
     *
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @param int $message_id Id of message.
     * @return Models\ConversationsMessagesGetResponse
     */
    public function messagesGet(int $message_id): Models\ConversationsMessagesGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/conversations/messages/{$message_id}");

        return Models\ConversationsMessagesGetResponse::fromArray($data);
    }

    /**
     * Edit Conversation Message
     *
     * Edit a message.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * - **message_body**: New content of the message.
     *
     * @param int $conversation_id Id of conversation.
     * @param int $message_id Id of message.
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
     * Delete Conversation Message
     *
     * Deletes a message from a conversation.
     *
     * Required scopes:
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @param int $message_id Id of message.
     * @return Models\ConversationsMessagesDeleteResponse
     */
    public function messagesDelete(int $conversation_id, int $message_id): Models\ConversationsMessagesDeleteResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/messages/{$message_id}");

        return Models\ConversationsMessagesDeleteResponse::fromArray($data);
    }

    /**
     * Invite Users to Conversation
     *
     * Invite one or more users to an existing conversation.
     *
     * Required scopes:
     * + **conversate**
     * + **post**
     *
     * - **recipients**: List of recipients username's.
     *
     * @param int $conversation_id Id of conversation.
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
     * Kick User from Conversation
     *
     * Kicks a user from a conversation.
     *
     * Required scopes:
     * + **conversate**
     *
     * - **user_id**: Id of user to kick from conversation.
     *
     * @param int $conversation_id Id of conversation.
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
     * Read a Conversation
     *
     * Read a specific conversation.
     *
     * Required scopes:
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @return Models\ConversationsReadResponse
     */
    public function read(int $conversation_id): Models\ConversationsReadResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/read");

        return Models\ConversationsReadResponse::fromArray($data);
    }

    /**
     * Read All Conversations
     *
     * Mark all conversations as read.
     *
     * Required scopes:
     * + **read**
     * + **conversate**
     *
     * @return Models\ConversationsReadAllResponse
     */
    public function readAll(): Models\ConversationsReadAllResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/conversations/read-all');

        return Models\ConversationsReadAllResponse::fromArray($data);
    }

    /**
     * Stick Conversation Message
     *
     * Stick a message in a conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @param int $message_id Id of message.
     * @return Models\ConversationsMessagesStickResponse
     */
    public function messagesStick(int $conversation_id, int $message_id): Models\ConversationsMessagesStickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/messages/{$message_id}/stick");

        return Models\ConversationsMessagesStickResponse::fromArray($data);
    }

    /**
     * Unstick Conversation Message
     *
     * Unstick a message in a conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @param int $message_id Id of message.
     * @return Models\ConversationsMessagesUnstickResponse
     */
    public function messagesUnstick(int $conversation_id, int $message_id): Models\ConversationsMessagesUnstickResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/messages/{$message_id}/stick");

        return Models\ConversationsMessagesUnstickResponse::fromArray($data);
    }

    /**
     * Star Conversation
     *
     * Star conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @return Models\ConversationsStarResponse
     */
    public function star(int $conversation_id): Models\ConversationsStarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/star");

        return Models\ConversationsStarResponse::fromArray($data);
    }

    /**
     * Unstar Conversation
     *
     * Unstar conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @return Models\ConversationsUnstarResponse
     */
    public function unstar(int $conversation_id): Models\ConversationsUnstarResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('DELETE', "/conversations/{$conversation_id}/star");

        return Models\ConversationsUnstarResponse::fromArray($data);
    }

    /**
     * Enable Conversation Alerts
     *
     * Enable alerts for conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
     * @return Models\ConversationsAlertsEnableResponse
     */
    public function alertsEnable(int $conversation_id): Models\ConversationsAlertsEnableResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', "/conversations/{$conversation_id}/alerts");

        return Models\ConversationsAlertsEnableResponse::fromArray($data);
    }

    /**
     * Disable Conversation Alerts
     *
     * Disable alerts for conversation.
     *
     * Required scopes:
     * + **post**
     * + **conversate**
     *
     * @param int $conversation_id Id of conversation.
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
     * Get Notifications
     *
     * List of notifications (both read and unread).
     *
     * Required scopes:
     * + **read**
     *
     * - **type**: Filter notifications by their type.
     * - **page**: Page number of notifications.
     * - **limit**: Number of notifications in a page.
     *
     * @param array{type?: Enums\UsersType, page?: int, limit?: int} $params
     * @return Models\NotificationsListResponse
     */
    public function getList(array $params = []): Models\NotificationsListResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/notifications', $params);

        return Models\NotificationsListResponse::fromArray($data);
    }

    /**
     * Get Notification
     *
     * Get associated content of notification. The response depends on the content type.
     *
     * Required scopes:
     * + **read**
     *
     * @param int $notification_id Id of notification.
     * @return Models\NotificationsGetResponse
     */
    public function get(int $notification_id): Models\NotificationsGetResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', "/notifications/{$notification_id}/content");

        return Models\NotificationsGetResponse::fromArray($data);
    }

    /**
     * Mark Notification Read
     *
     * Mark single notification or all existing notifications read.
     *
     * Required scopes:
     * + **post**
     *
     * - **notification_id**: If notification_id is omitted, it's mark all existing notifications as read.
     *
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
     * Get Popular Tags
     *
     * List of popular tags (no pagination).
     *
     * Required scopes:
     * + **read**
     *
     * @return Models\TagsPopularResponse
     */
    public function popular(): Models\TagsPopularResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/tags');

        return Models\TagsPopularResponse::fromArray($data);
    }

    /**
     * Get Tags
     *
     * List of tags.
     *
     * Required scopes:
     * + **read**
     *
     * - **page**: Page number of tags list.
     * - **limit**: Number of results in a page.
     *
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
     * Get Tagged Content
     *
     * List of tagged contents.
     *
     * Required scopes:
     * + **read**
     *
     * - **page**: Page number of tagged contents.
     * - **limit**: Number of tagged contents in a page.
     *
     * @param int $tag_id Id of tag.
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
     * Get Filtered Content
     *
     * Filtered list of tags.
     *
     * Required scopes:
     * + **read**
     *
     * - **tag**: tag to filter. Tags start with the query will be returned.
     *
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
     * Search
     *
     * Search for all supported contents.
     *
     * Required scopes:
     * + **post**
     *
     * - **q**: Search query. Can be skipped if **user_id** is set.
     * - **tag**: Tag to search for tagged contents.
     * - **forum_id**: Id of the container forum to search for contents. Child forums of the specified forum will be included in the search.
     * - **page**: Page number of results.
     * - **limit**: Number of results in a page.
     * - **before**: The time in milliseconds (e.g. 1767214800) before last content date.
     *
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, before?: int} $body
     * @return Models\SearchAllResponse
     */
    public function all(array $body = []): Models\SearchAllResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search', [], $body, 'json');

        return Models\SearchAllResponse::fromArray($data);
    }

    /**
     * Search Thread
     *
     * Search for threads.
     *
     * Required scopes:
     * + **post**
     *
     * - **q**: Search query. Can be skipped if **user_id** is set.
     * - **tag**: Tag to search for tagged contents.
     * - **forum_id**: Id of the container forum to search for contents. Child forums of the specified forum will be included in the search.
     * - **page**: Page number of results.
     * - **limit**: Number of results in a page.
     * - **data_limit**: Number of thread data to be returned.
     * - **before**: The time in milliseconds (e.g. 1767214800) before last content date.
     *
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, data_limit?: int, before?: int} $body
     * @return Models\SearchThreadsResponse
     */
    public function threads(array $body = []): Models\SearchThreadsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/threads', [], $body, 'json');

        return Models\SearchThreadsResponse::fromArray($data);
    }

    /**
     * Search Post
     *
     * Search for posts.
     *
     * Required scopes:
     * + **post**
     *
     * - **q**: Search query. Can be skipped if **user_id** is set.
     * - **tag**: Tag to search for tagged contents.
     * - **forum_id**: Id of the container forum to search for contents. Child forums of the specified forum will be included in the search.
     * - **page**: Page number of results.
     * - **limit**: Number of results in a page.
     * - **data_limit**: Number of post data to be returned.
     * - **before**: The time in milliseconds (e.g. 1767214800) before last content date.
     *
     * @param array{q?: string, tag?: string, forum_id?: int, user_id?: string|int, page?: int, limit?: int, data_limit?: int, before?: int} $body
     * @return Models\SearchPostsResponse
     */
    public function posts(array $body = []): Models\SearchPostsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/posts', [], $body, 'json');

        return Models\SearchPostsResponse::fromArray($data);
    }

    /**
     * Search Users
     *
     * Search for users.
     *
     * Required scopes:
     * + **post**
     *
     * - **q**: Search query.
     *
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
     * Search Profile Posts
     *
     * Search for profile posts.
     *
     * Required scopes:
     * + **post**
     *
     * - **q**: Search query. Can be skipped if **user_id** is set.
     * - **user_id**: User ID to filter profile posts.
     * - **page**: Page number of results.
     * - **limit**: Number of results in a page.
     * - **before**: The time in milliseconds (e.g. 1767214800) before last content date.
     *
     * @param array{q?: string, user_id?: int, page?: int, limit?: int, before?: int} $body
     * @return Models\SearchProfilePostsResponse
     */
    public function profilePosts(array $body = []): Models\SearchProfilePostsResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/search/profile-posts', [], $body, 'json');

        return Models\SearchProfilePostsResponse::fromArray($data);
    }

    /**
     * Search Tagged
     *
     * Search for tagged contents.
     *
     * Required scopes:
     * + **post**
     *
     * - **tag**: Tag to search for tagged contents.
     * - **tags**: Array of tags to search for tagged contents.
     * - **page**: Page number of results.
     * - **limit**: Number of results in a page.
     *
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
     * Get Search Results
     *
     * List of search results (with pagination).
     *
     * Required scopes:
     * + **get**
     *
     * - **page**: Page number of results.
     * - **limit**: Number of results in a page.
     *
     * @param string|int $search_id Search ID.
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
     * Batch
     *
     * Execute multiple API requests at once (Separated by comma). Maximum batch jobs is 10.
     *
     * Required scopes:
     * + Same as called API requests.
     *
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
     * Get Chats
     *
     * Get chat rooms.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **room_id**: Room id.
     *
     * @param array{room_id?: Enums\RoomId} $params
     * @return Models\ChatboxIndexResponse
     */
    public function index(array $params = []): Models\ChatboxIndexResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox', $params);

        return Models\ChatboxIndexResponse::fromArray($data);
    }

    /**
     * Get Chat Messages
     *
     * Get chat messages.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **room_id**: Room id.
     * - **before_message_id**: Message id to get older chat messages.
     *
     * @param array{room_id: Enums\RoomId, before_message_id?: int} $params
     * @return Models\ChatboxGetMessagesResponse
     */
    public function getMessages(array $params = []): Models\ChatboxGetMessagesResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages', $params);

        return Models\ChatboxGetMessagesResponse::fromArray($data);
    }

    /**
     * Create Chat Message
     *
     * Create chat message.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **room_id**: Room ID.
     * - **reply_message_id**: ID of the message being replied to.
     * - **message**: Content of the chat message.
     *
     * @param array{room_id: Enums\RoomId, reply_message_id?: int, message: string} $body
     * @return Models\ChatboxPostMessageResponse
     */
    public function postMessage(array $body): Models\ChatboxPostMessageResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/chatbox/messages', [], $body, 'json');

        return Models\ChatboxPostMessageResponse::fromArray($data);
    }

    /**
     * Edit Chat Message
     *
     * Edit chat message.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **message_id**: Message id.
     * - **message**: New content of the chat message.
     *
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
     * Delete Chat Message
     *
     * Delete chat message.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **message_id**: Message id.
     *
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
     * Get Chat Online
     *
     * Get chat Online Users.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **room_id**: Room id.
     *
     * @param array{room_id: Enums\RoomId} $params
     * @return Models\ChatboxOnlineResponse
     */
    public function online(array $params = []): Models\ChatboxOnlineResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages/online', $params);

        return Models\ChatboxOnlineResponse::fromArray($data);
    }

    /**
     * Get Chat Message Report Reasons
     *
     * Report chat message.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **message_id**: Message id.
     *
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
     * Report Chat Message
     *
     * Report chat message.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **message_id**: Message id.
     * - **reason**: Report reason.
     *
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
     * Get Chat Leaderboard
     *
     * Get chat leaderboard.
     *
     * Required scopes:
     * + **chatbox**
     *
     * - **duration**: Duration.
     *
     * @param array{duration?: Enums\Duration} $params
     * @return Models\ChatboxGetLeaderboardResponse
     */
    public function getLeaderboard(array $params = []): Models\ChatboxGetLeaderboardResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/messages/leaderboard', $params);

        return Models\ChatboxGetLeaderboardResponse::fromArray($data);
    }

    /**
     * Get Ignored Chat Users
     *
     * Get list of ignored chat users.
     *
     * Required scopes:
     * + **chatbox**
     *
     * @return Models\ChatboxGetIgnoreResponse
     */
    public function getIgnore(): Models\ChatboxGetIgnoreResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('GET', '/chatbox/ignore');

        return Models\ChatboxGetIgnoreResponse::fromArray($data);
    }

    /**
     * Ignore Chat User
     *
     * Ignore chat user.
     *
     * Required scopes:
     * + **chatbox**
     *
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
     * Unignore Chat User
     *
     * Unignore chat user.
     *
     * Required scopes:
     * + **chatbox**
     *
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
     * Get Forms List
     *
     * Get Forms List
     *
     * - **page**: Page number of forms.
     *
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
     * Create Form
     *
     * Create Form.
     *
     * @param FormsCreateP2PTrade|FormsCreateComplaint $body
     * @return Models\FormsCreateResponse
     */
    public function create(FormsCreateP2PTrade|FormsCreateComplaint $body): Models\FormsCreateResponse
    {
        /** @var array<string, mixed> $data */
        $data = $this->http->request('POST', '/forms/save', [], $body->toArray(), 'json');

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

    /**
     * @param ClientConfig|string $config Config object or API token (deprecated)
     */
    public function __construct(ClientConfig|string $config)
    {
        if (is_string($config)) {
            $config = new ClientConfig(token: $config);
        }
        $defaultRateLimit = new RateLimitConfig(
            requestsPerMinute: $config->rateLimit?->requestsPerMinute ?? 300,
        );
        $defaultSearchRateLimit = $config->searchRateLimit;
        $resolvedConfig = new ClientConfig(
            token: $config->token,
            baseUrl: $config->baseUrl !== '' ? $config->baseUrl : 'https://prod-api.lolz.live',
            proxy: $config->proxy,
            retry: $config->retry ?? new RetryConfig(),
            rateLimit: $defaultRateLimit,
            searchRateLimit: $defaultSearchRateLimit,
            onRetry: $config->onRetry,
            timeout: $config->timeout,
        );
        $http = new HttpClient($resolvedConfig);
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
