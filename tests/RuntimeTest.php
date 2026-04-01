<?php

declare(strict_types=1);

namespace Lolzteam\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\ForbiddenException;
use Lolzteam\Runtime\Errors\HttpException;
use Lolzteam\Runtime\Errors\LolzteamException;
use Lolzteam\Runtime\Errors\NetworkException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\ServerException;
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\HttpExceptionFactory;
use Lolzteam\Runtime\RateLimitConfig;
use Lolzteam\Runtime\RateLimiter;
use Lolzteam\Runtime\Retry;
use Lolzteam\Runtime\RetryConfig;
use PHPUnit\Framework\TestCase;

final class RuntimeTest extends TestCase
{
    // ── HttpExceptionFactory ────────────────────────────────────────

    public function testFactoryReturnsRateLimitExceptionFor429(): void
    {
        $e = HttpExceptionFactory::create(429, null, ['Retry-After' => '5']);

        $this->assertInstanceOf(RateLimitException::class, $e);
        $this->assertSame(429, $e->statusCode);
        $this->assertSame(5, $e->retryAfter);
    }

    public function testFactoryReturnsAuthExceptionFor401(): void
    {
        $e = HttpExceptionFactory::create(401, null, []);

        $this->assertInstanceOf(AuthException::class, $e);
        $this->assertSame(401, $e->statusCode);
    }

    public function testFactoryReturnsForbiddenExceptionFor403(): void
    {
        $e = HttpExceptionFactory::create(403, null, []);

        $this->assertInstanceOf(ForbiddenException::class, $e);
        $this->assertSame(403, $e->statusCode);
    }

    public function testFactoryReturnsNotFoundExceptionFor404(): void
    {
        $e = HttpExceptionFactory::create(404, null, []);

        $this->assertInstanceOf(NotFoundException::class, $e);
        $this->assertSame(404, $e->statusCode);
    }

    /** @dataProvider serverErrorStatusProvider */
    public function testFactoryReturnsServerExceptionFor5xx(int $status): void
    {
        $e = HttpExceptionFactory::create($status, null, []);

        $this->assertInstanceOf(ServerException::class, $e);
        $this->assertSame($status, $e->statusCode);
    }

    /** @return array<string, array{int}> */
    public static function serverErrorStatusProvider(): array
    {
        return [
            '500' => [500],
            '502' => [502],
            '503' => [503],
            '504' => [504],
        ];
    }

    public function testFactoryReturnsBaseHttpExceptionForUnknown(): void
    {
        $e = HttpExceptionFactory::create(418, ['detail' => 'teapot'], []);

        $this->assertInstanceOf(HttpException::class, $e);
        $this->assertNotInstanceOf(RateLimitException::class, $e);
        $this->assertNotInstanceOf(AuthException::class, $e);
        $this->assertNotInstanceOf(NotFoundException::class, $e);
        $this->assertNotInstanceOf(ServerException::class, $e);
        $this->assertSame(418, $e->statusCode);
    }

    // ── Retry logic (via HTTP mock) ─────────────────────────────────

    public function testRetryDoesNotRetryOnAuthException(): void
    {
        $mock = new MockHandler([
            new Response(401, [], '{"error":"unauthorized"}'),
        ]);
        $stack = HandlerStack::create($mock);
        $config = new ClientConfig(
            token: 'tok',
            baseUrl: 'https://api.lolz.live',
            retry: new RetryConfig(maxRetries: 2, baseDelayMs: 1, maxDelayMs: 1),
            rateLimit: new RateLimitConfig(requestsPerMinute: 60000),
            handler: $stack,
        );
        $client = new HttpClient($config);

        $this->expectException(AuthException::class);
        $client->request('GET', '/test');
    }

    public function testRetryDoesNotRetryOnNotFound(): void
    {
        $mock = new MockHandler([
            new Response(404, [], '{"error":"not found"}'),
        ]);
        $stack = HandlerStack::create($mock);
        $config = new ClientConfig(
            token: 'tok',
            baseUrl: 'https://api.lolz.live',
            retry: new RetryConfig(maxRetries: 2, baseDelayMs: 1, maxDelayMs: 1),
            rateLimit: new RateLimitConfig(requestsPerMinute: 60000),
            handler: $stack,
        );
        $client = new HttpClient($config);

        $this->expectException(NotFoundException::class);
        $client->request('GET', '/test');
    }

    public function testRetryDoesNotRetryServerError500(): void
    {
        $mock = new MockHandler([
            new Response(500, [], '{"error":"internal"}'),
        ]);
        $stack = HandlerStack::create($mock);
        $config = new ClientConfig(
            token: 'tok',
            baseUrl: 'https://api.lolz.live',
            retry: new RetryConfig(maxRetries: 2, baseDelayMs: 1, maxDelayMs: 1),
            rateLimit: new RateLimitConfig(requestsPerMinute: 60000),
            handler: $stack,
        );
        $client = new HttpClient($config);

        $this->expectException(ServerException::class);
        $client->request('GET', '/test');
    }

    // ── RateLimiter ─────────────────────────────────────────────────

    public function testRateLimiterAllowsBurstWithinLimit(): void
    {
        $limiter = new RateLimiter(600); // 10 per sec
        $start = microtime(true);
        for ($i = 0; $i < 10; $i++) {
            $limiter->acquire();
        }
        $elapsed = microtime(true) - $start;

        $this->assertLessThan(0.1, $elapsed, 'Burst should be near-instant');
    }

    public function testRateLimiterDelaysWhenExhausted(): void
    {
        $limiter = new RateLimiter(60); // 1 per sec
        // Drain all 60 tokens
        for ($i = 0; $i < 60; $i++) {
            $limiter->acquire();
        }
        $start = microtime(true);
        $limiter->acquire();
        $elapsed = microtime(true) - $start;

        $this->assertGreaterThan(0.5, $elapsed, 'Should wait when tokens exhausted');
    }

    // ── Error message formatting ────────────────────────────────────

    public function testHttpExceptionMessageFormat(): void
    {
        $e = new HttpException(503, null, []);

        $this->assertSame('HTTP 503', $e->getMessage());
    }

    public function testNetworkExceptionPreservesCauseMessage(): void
    {
        $e = new NetworkException('connection timed out');

        $this->assertSame('connection timed out', $e->getMessage());
        $this->assertInstanceOf(LolzteamException::class, $e);
    }

    public function testRateLimitExceptionRetryAfterParsesFloat(): void
    {
        $e = new RateLimitException(429, null, ['Retry-After' => '2.5']);

        // PHP casts to int, so 2.5 becomes 2
        $this->assertSame(2, $e->retryAfter);
    }
}
