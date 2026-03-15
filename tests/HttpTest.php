<?php

declare(strict_types=1);

namespace Lolzteam\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\RetryExhaustedException;
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\RetryConfig;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

final class HttpTest extends TestCase
{
    /**
     * @var list<array{request: RequestInterface, response: Response}>
     */
    private array $history = [];

    /**
     * @param list<Response> $responses
     */
    private function createClient(
        array $responses,
        RetryConfig $retry = new RetryConfig(maxRetries: 0),
        string $token = 'test-token',
    ): HttpClient {
        $this->history = [];
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($this->history));

        $config = new ClientConfig(
            token: $token,
            baseUrl: 'https://api.lolz.live',
            retry: $retry,
            requestsPerMinute: 60000,
            handler: $stack,
        );

        return new HttpClient($config);
    }

    // ── 1. Successful request ──────────────────────────────────────

    public function testSuccessfulJsonResponse(): void
    {
        $client = $this->createClient([
            new Response(200, ['Content-Type' => 'application/json'], '{"threads":[]}'),
        ]);

        $result = $client->request('GET', '/threads');

        $this->assertSame(['threads' => []], $result);
    }

    // ── 2. Auth header sent ────────────────────────────────────────

    public function testBearerTokenSentInAuthHeader(): void
    {
        $client = $this->createClient(
            [new Response(200, ['Content-Type' => 'application/json'], '{}')],
            token: 'my-secret-token',
        );

        $client->request('GET', '/threads');

        $this->assertCount(1, $this->history);
        $request = $this->history[0]['request'];
        $this->assertInstanceOf(RequestInterface::class, $request);
        $this->assertSame('Bearer my-secret-token', $request->getHeaderLine('Authorization'));
    }

    // ── 3. 401 → AuthException ─────────────────────────────────────

    public function testUnauthorizedThrowsAuthException(): void
    {
        $client = $this->createClient([
            new Response(401, [], '{"error":"unauthorized"}'),
        ]);

        $this->expectException(AuthException::class);
        $client->request('GET', '/threads');
    }

    // ── 4. 404 → NotFoundException ─────────────────────────────────

    public function testNotFoundThrowsNotFoundException(): void
    {
        $client = $this->createClient([
            new Response(404, [], '{"error":"not found"}'),
        ]);

        $this->expectException(NotFoundException::class);
        $client->request('GET', '/threads/999');
    }

    // ── 5. 429 retry then success ──────────────────────────────────

    public function testRetryOn429ThenSuccess(): void
    {
        $client = $this->createClient(
            [
                new Response(429, ['Retry-After' => '0'], '{"error":"rate limit"}'),
                new Response(200, ['Content-Type' => 'application/json'], '{"threads":[]}'),
            ],
            retry: new RetryConfig(maxRetries: 1, baseDelayMs: 1, maxDelayMs: 1),
        );

        $result = $client->request('GET', '/threads');

        $this->assertSame(['threads' => []], $result);
        $this->assertCount(2, $this->history);
    }

    // ── 6. 502/503 retry then success ──────────────────────────────

    public function testRetryOn502ThenSuccess(): void
    {
        $client = $this->createClient(
            [
                new Response(502, [], 'Bad Gateway'),
                new Response(200, ['Content-Type' => 'application/json'], '{"ok":true}'),
            ],
            retry: new RetryConfig(maxRetries: 1, baseDelayMs: 1, maxDelayMs: 1),
        );

        $result = $client->request('GET', '/threads');

        $this->assertSame(['ok' => true], $result);
        $this->assertCount(2, $this->history);
    }

    public function testRetryOn503ThenSuccess(): void
    {
        $client = $this->createClient(
            [
                new Response(503, [], 'Service Unavailable'),
                new Response(200, ['Content-Type' => 'application/json'], '{"ok":true}'),
            ],
            retry: new RetryConfig(maxRetries: 1, baseDelayMs: 1, maxDelayMs: 1),
        );

        $result = $client->request('GET', '/threads');

        $this->assertSame(['ok' => true], $result);
        $this->assertCount(2, $this->history);
    }

    // ── 7. 429 retry exhausted → RetryExhaustedException ───────────

    public function testRetryExhaustedThrowsRetryExhaustedException(): void
    {
        $client = $this->createClient(
            [
                new Response(429, ['Retry-After' => '0'], '{}'),
                new Response(429, ['Retry-After' => '0'], '{}'),
                new Response(429, ['Retry-After' => '0'], '{}'),
            ],
            retry: new RetryConfig(maxRetries: 2, baseDelayMs: 1, maxDelayMs: 1),
        );

        $this->expectException(RetryExhaustedException::class);
        $client->request('GET', '/threads');
    }

    public function testRetryExhaustedOn502ThrowsRetryExhaustedException(): void
    {
        $client = $this->createClient(
            [
                new Response(502, [], ''),
                new Response(502, [], ''),
            ],
            retry: new RetryConfig(maxRetries: 1, baseDelayMs: 1, maxDelayMs: 1),
        );

        $this->expectException(RetryExhaustedException::class);
        $client->request('GET', '/threads');
    }

    // ── 8. Query params ────────────────────────────────────────────

    public function testQueryParamsAppendedToUrl(): void
    {
        $client = $this->createClient([
            new Response(200, ['Content-Type' => 'application/json'], '{"threads":[]}'),
        ]);

        $client->request('GET', '/threads', ['forum_id' => 2, 'limit' => 10]);

        $this->assertCount(1, $this->history);
        $request = $this->history[0]['request'];
        $this->assertInstanceOf(RequestInterface::class, $request);
        $query = $request->getUri()->getQuery();
        $this->assertStringContainsString('forum_id=2', $query);
        $this->assertStringContainsString('limit=10', $query);
    }

    // ── 9. Path params ─────────────────────────────────────────────

    public function testPathInterpolation(): void
    {
        $client = $this->createClient([
            new Response(200, ['Content-Type' => 'application/json'], '{"thread":{}}'),
        ]);

        $threadId = 42;
        $client->request('GET', "/threads/{$threadId}");

        $this->assertCount(1, $this->history);
        $request = $this->history[0]['request'];
        $this->assertInstanceOf(RequestInterface::class, $request);
        $this->assertSame('/threads/42', $request->getUri()->getPath());
    }
}
