<?php

declare(strict_types=1);

namespace Lolzteam\Tests;

use Lolzteam\Generated\Forum\AssetsApi;
use Lolzteam\Generated\Forum\BatchApi as ForumBatchApi;
use Lolzteam\Generated\Forum\CategoriesApi;
use Lolzteam\Generated\Forum\ChatboxApi;
use Lolzteam\Generated\Forum\ConversationsApi;
use Lolzteam\Generated\Forum\FormsApi;
use Lolzteam\Generated\Forum\ForumClient;
use Lolzteam\Generated\Forum\ForumsApi;
use Lolzteam\Generated\Forum\LinksApi;
use Lolzteam\Generated\Forum\NavigationApi;
use Lolzteam\Generated\Forum\NotificationsApi;
use Lolzteam\Generated\Forum\OAuthApi;
use Lolzteam\Generated\Forum\PagesApi;
use Lolzteam\Generated\Forum\PostsApi;
use Lolzteam\Generated\Forum\ProfilePostsApi;
use Lolzteam\Generated\Forum\SearchApi;
use Lolzteam\Generated\Forum\TagsApi;
use Lolzteam\Generated\Forum\ThreadsApi;
use Lolzteam\Generated\Forum\UsersApi;
use Lolzteam\Generated\Market\AutoPaymentsApi;
use Lolzteam\Generated\Market\BatchApi as MarketBatchApi;
use Lolzteam\Generated\Market\CartApi;
use Lolzteam\Generated\Market\CategoryApi;
use Lolzteam\Generated\Market\CustomDiscountsApi;
use Lolzteam\Generated\Market\ImapApi;
use Lolzteam\Generated\Market\ListApi;
use Lolzteam\Generated\Market\ManagingApi;
use Lolzteam\Generated\Market\MarketClient;
use Lolzteam\Generated\Market\PaymentsApi;
use Lolzteam\Generated\Market\ProfileApi;
use Lolzteam\Generated\Market\ProxyApi;
use Lolzteam\Generated\Market\PublishingApi;
use Lolzteam\Generated\Market\PurchasingApi;
use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\HttpException;
use Lolzteam\Runtime\Errors\LolzteamException;
use Lolzteam\Runtime\Errors\NetworkException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\ServerException;
use Lolzteam\Runtime\RetryConfig;
use PHPUnit\Framework\TestCase;

final class ClientTest extends TestCase
{
    // ── ForumClient ─────────────────────────────────────────────────

    public function testForumClientConstructsWithTokenOnly(): void
    {
        $client = new ForumClient('test-token');

        $this->assertInstanceOf(ForumClient::class, $client);
    }

    public function testForumClientConstructsWithProxyAndRetry(): void
    {
        $retry = new RetryConfig(maxRetries: 5, baseDelayMs: 500, maxDelayMs: 10000);
        $client = new ForumClient('test-token', 'http://proxy:8080', $retry);

        $this->assertInstanceOf(ForumClient::class, $client);
    }

    /**
     * @return array<string, array{string, class-string}>
     */
    public static function forumApiGroupProvider(): array
    {
        return [
            'oAuth' => ['oAuth', OAuthApi::class],
            'assets' => ['assets', AssetsApi::class],
            'categories' => ['categories', CategoriesApi::class],
            'forums' => ['forums', ForumsApi::class],
            'links' => ['links', LinksApi::class],
            'pages' => ['pages', PagesApi::class],
            'navigation' => ['navigation', NavigationApi::class],
            'threads' => ['threads', ThreadsApi::class],
            'posts' => ['posts', PostsApi::class],
            'users' => ['users', UsersApi::class],
            'profilePosts' => ['profilePosts', ProfilePostsApi::class],
            'conversations' => ['conversations', ConversationsApi::class],
            'notifications' => ['notifications', NotificationsApi::class],
            'tags' => ['tags', TagsApi::class],
            'search' => ['search', SearchApi::class],
            'batch' => ['batch', ForumBatchApi::class],
            'chatbox' => ['chatbox', ChatboxApi::class],
            'forms' => ['forms', FormsApi::class],
        ];
    }

    /**
     * @dataProvider forumApiGroupProvider
     * @param class-string $expectedType
     */
    public function testForumClientApiGroupTypes(string $property, string $expectedType): void
    {
        $client = new ForumClient('test-token');

        $this->assertInstanceOf($expectedType, $client->{$property});
    }

    public function testForumClientHasExactly18ApiGroups(): void
    {
        $reflection = new \ReflectionClass(ForumClient::class);
        $properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);

        $this->assertCount(18, $properties);
    }

    // ── MarketClient ────────────────────────────────────────────────

    public function testMarketClientConstructsWithTokenOnly(): void
    {
        $client = new MarketClient('test-token');

        $this->assertInstanceOf(MarketClient::class, $client);
    }

    public function testMarketClientConstructsWithProxyAndRetry(): void
    {
        $retry = new RetryConfig(maxRetries: 1, baseDelayMs: 200, maxDelayMs: 5000);
        $client = new MarketClient('test-token', 'socks5://proxy:1080', $retry);

        $this->assertInstanceOf(MarketClient::class, $client);
    }

    /**
     * @return array<string, array{string, class-string}>
     */
    public static function marketApiGroupProvider(): array
    {
        return [
            'category' => ['category', CategoryApi::class],
            'list' => ['list', ListApi::class],
            'managing' => ['managing', ManagingApi::class],
            'profile' => ['profile', ProfileApi::class],
            'cart' => ['cart', CartApi::class],
            'purchasing' => ['purchasing', PurchasingApi::class],
            'customDiscounts' => ['customDiscounts', CustomDiscountsApi::class],
            'publishing' => ['publishing', PublishingApi::class],
            'payments' => ['payments', PaymentsApi::class],
            'autoPayments' => ['autoPayments', AutoPaymentsApi::class],
            'proxy' => ['proxy', ProxyApi::class],
            'imap' => ['imap', ImapApi::class],
            'batch' => ['batch', MarketBatchApi::class],
        ];
    }

    /**
     * @dataProvider marketApiGroupProvider
     * @param class-string $expectedType
     */
    public function testMarketClientApiGroupTypes(string $property, string $expectedType): void
    {
        $client = new MarketClient('test-token');

        $this->assertInstanceOf($expectedType, $client->{$property});
    }

    public function testMarketClientHasExactly13ApiGroups(): void
    {
        $reflection = new \ReflectionClass(MarketClient::class);
        $properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);

        $this->assertCount(13, $properties);
    }

    // ── RetryConfig ─────────────────────────────────────────────────

    public function testRetryConfigDefaults(): void
    {
        $config = new RetryConfig();

        $this->assertSame(3, $config->maxRetries);
        $this->assertSame(1000, $config->baseDelayMs);
        $this->assertSame(30000, $config->maxDelayMs);
    }

    public function testRetryConfigCustomValues(): void
    {
        $config = new RetryConfig(maxRetries: 5, baseDelayMs: 500, maxDelayMs: 10000);

        $this->assertSame(5, $config->maxRetries);
        $this->assertSame(500, $config->baseDelayMs);
        $this->assertSame(10000, $config->maxDelayMs);
    }

    public function testRetryConfigZeroRetriesAllowed(): void
    {
        $config = new RetryConfig(maxRetries: 0);

        $this->assertSame(0, $config->maxRetries);
    }

    public function testRetryConfigRejectsNegativeRetries(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('maxRetries must be >= 0');
        new RetryConfig(maxRetries: -1);
    }

    public function testRetryConfigRejectsZeroBaseDelay(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('baseDelayMs must be >= 1');
        new RetryConfig(baseDelayMs: 0);
    }

    public function testRetryConfigRejectsZeroMaxDelay(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('maxDelayMs must be >= 1');
        new RetryConfig(maxDelayMs: 0);
    }

    // ── ClientConfig ────────────────────────────────────────────────

    public function testClientConfigCreation(): void
    {
        $config = new ClientConfig(
            token: 'my-token',
            baseUrl: 'https://api.lolz.live',
        );

        $this->assertSame('my-token', $config->token);
        $this->assertSame('https://api.lolz.live', $config->baseUrl);
        $this->assertNull($config->proxy);
        $this->assertSame(300, $config->requestsPerMinute);
        $this->assertSame(3, $config->retry->maxRetries);
    }

    public function testClientConfigWithAllOptions(): void
    {
        $retry = new RetryConfig(maxRetries: 1, baseDelayMs: 100, maxDelayMs: 5000);
        $config = new ClientConfig(
            token: 'my-token',
            baseUrl: 'https://api.lzt.market',
            proxy: 'http://proxy:8080',
            retry: $retry,
            requestsPerMinute: 120,
        );

        $this->assertSame('http://proxy:8080', $config->proxy);
        $this->assertSame(120, $config->requestsPerMinute);
        $this->assertSame(1, $config->retry->maxRetries);
    }

    public function testClientConfigRejectsEmptyToken(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('token must not be empty');
        new ClientConfig(token: '', baseUrl: 'https://api.lolz.live');
    }

    public function testClientConfigRejectsZeroRequestsPerMinute(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('requestsPerMinute must be >= 1');
        new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', requestsPerMinute: 0);
    }

    public function testClientConfigRejectsNegativeRequestsPerMinute(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('requestsPerMinute must be >= 1');
        new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', requestsPerMinute: -5);
    }

    public function testClientConfigRejectsProxyWithUnsupportedScheme(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('unsupported proxy scheme');
        new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', proxy: 'ftp://proxy:8080');
    }

    public function testClientConfigRejectsProxyWithNoScheme(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('unsupported proxy scheme');
        new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', proxy: 'just-a-host:8080');
    }

    public function testClientConfigRejectsProxyWithNoHost(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('invalid proxy URL');
        new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', proxy: 'http://');
    }

    public function testClientConfigAcceptsValidHttpProxy(): void
    {
        $config = new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', proxy: 'http://proxy:8080');
        $this->assertSame('http://proxy:8080', $config->proxy);
    }

    public function testClientConfigAcceptsValidSocks5Proxy(): void
    {
        $config = new ClientConfig(token: 'tok', baseUrl: 'https://api.lolz.live', proxy: 'socks5://proxy:1080');
        $this->assertSame('socks5://proxy:1080', $config->proxy);
    }

    // ── Exception hierarchy ─────────────────────────────────────────

    public function testLolzteamExceptionExtendsRuntimeException(): void
    {
        $e = new LolzteamException('test');

        $this->assertInstanceOf(\RuntimeException::class, $e);
    }

    public function testHttpExceptionExtendsLolzteamException(): void
    {
        $e = new HttpException(500, null, []);

        $this->assertInstanceOf(LolzteamException::class, $e);
        $this->assertSame(500, $e->statusCode);
        $this->assertNull($e->body);
        $this->assertSame([], $e->headers);
        $this->assertSame('HTTP 500', $e->getMessage());
    }

    public function testHttpExceptionPreservesBodyAndHeaders(): void
    {
        $body = ['error' => 'something went wrong'];
        $headers = ['Content-Type' => 'application/json'];
        $e = new HttpException(422, $body, $headers);

        $this->assertSame(422, $e->statusCode);
        $this->assertSame($body, $e->body);
        $this->assertSame($headers, $e->headers);
    }

    public function testRateLimitExceptionExtendsHttpException(): void
    {
        $e = new RateLimitException(429, null, ['Retry-After' => '60']);

        $this->assertInstanceOf(HttpException::class, $e);
        $this->assertInstanceOf(LolzteamException::class, $e);
        $this->assertSame(429, $e->statusCode);
    }

    public function testRateLimitExceptionParsesRetryAfterHeader(): void
    {
        $e = new RateLimitException(429, null, ['Retry-After' => '120']);

        $this->assertSame(120, $e->retryAfter);
    }

    public function testRateLimitExceptionParsesRetryAfterCaseInsensitive(): void
    {
        $e = new RateLimitException(429, null, ['retry-after' => '45']);

        $this->assertSame(45, $e->retryAfter);
    }

    public function testRateLimitExceptionHandlesArrayRetryAfter(): void
    {
        $e = new RateLimitException(429, null, ['Retry-After' => ['30', '60']]);

        $this->assertSame(30, $e->retryAfter);
    }

    public function testRateLimitExceptionRetryAfterNullWhenMissing(): void
    {
        $e = new RateLimitException(429, null, []);

        $this->assertNull($e->retryAfter);
    }

    public function testRateLimitExceptionRetryAfterNullWhenNonNumeric(): void
    {
        $e = new RateLimitException(429, null, ['Retry-After' => 'Wed, 21 Oct 2025 07:28:00 GMT']);

        $this->assertNull($e->retryAfter);
    }

    public function testAuthExceptionExtendsHttpException(): void
    {
        $e = new AuthException(401, null, []);

        $this->assertInstanceOf(HttpException::class, $e);
        $this->assertInstanceOf(LolzteamException::class, $e);
    }

    public function testNotFoundExceptionExtendsHttpException(): void
    {
        $e = new NotFoundException(404, null, []);

        $this->assertInstanceOf(HttpException::class, $e);
        $this->assertInstanceOf(LolzteamException::class, $e);
    }

    public function testServerExceptionExtendsHttpException(): void
    {
        $e = new ServerException(503, null, []);

        $this->assertInstanceOf(HttpException::class, $e);
        $this->assertInstanceOf(LolzteamException::class, $e);
    }

    public function testNetworkExceptionExtendsLolzteamException(): void
    {
        $e = new NetworkException('connection refused');

        $this->assertInstanceOf(LolzteamException::class, $e);
        $this->assertNotInstanceOf(HttpException::class, $e);
    }
}
