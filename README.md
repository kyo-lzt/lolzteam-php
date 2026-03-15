# lolzteam-php

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![CI](https://github.com/kyo-lzt/lolzteam-php/actions/workflows/ci.yml/badge.svg)](https://github.com/kyo-lzt/lolzteam-php/actions)

PHP API wrapper for the [Lolzteam](https://lolz.live) Forum and Market APIs. **266 endpoints** (151 Forum + 115 Market), auto-generated from OpenAPI specifications.

## Features

- **Complete API coverage** -- 266 endpoints across Forum and Market clients
- **Auto-generated** -- clients and models generated from OpenAPI 3.1.0 specs, always in sync
- **Fully typed** -- PHP 8.1 readonly classes for all request/response models
- **Proxy support** -- HTTP, HTTPS, and SOCKS5 via Guzzle
- **Retry logic** -- exponential backoff with jitter, respects `Retry-After` headers
- **Rate limiting** -- token bucket algorithm
- **Typed exceptions** -- structured exception hierarchy

## Quick Start

Requires **PHP 8.1+** and Composer.

```bash
git clone https://github.com/kyo-lzt/lolzteam-php.git
cd lolzteam-php
composer install
```

## Usage

```php
use Lolzteam\Generated\Forum\ForumClient;
use Lolzteam\Generated\Market\MarketClient;

$forum = new ForumClient(token: 'your_token');
$market = new MarketClient(token: 'your_token');

// Forum API
$threads = $forum->threads->list();
$user = $forum->users->get(userId: 1);
$posts = $forum->posts->list(threadId: 123);

// Market API
$items = $market->category->list();
$profile = $market->profile->get();
```

Forum API groups: `oAuth`, `assets`, `categories`, `forums`, `links`, `pages`, `navigation`, `threads`, `posts`, `users`, `profilePosts`, `conversations`, `notifications`, `tags`, `search`, `batch`, `chatbox`, `forms`.

Market API groups: `category`, `list`, `managing`, `profile`, `cart`, `purchasing`, `customDiscounts`, `publishing`, `payments`, `autoPayments`, `proxy`, `imap`, `batch`.

## Configuration

```php
use Lolzteam\Runtime\RetryConfig;

$forum = new ForumClient(
    token: 'your_token',
    proxy: 'http://user:pass@127.0.0.1:8080',
    retry: new RetryConfig(
        maxRetries: 5,        // default: 3
        baseDelayMs: 1000,    // default: 1000
        maxDelayMs: 30000,    // default: 30000
    ),
);
```

| Parameter | Type | Default | Description |
|-----------|------|---------|-------------|
| `token` | `string` | *required* | API access token |
| `proxy` | `?string` | `null` | Proxy URL (`http://`, `https://`, `socks5://`) |
| `retry` | `?RetryConfig` | 3 retries, 1s base, 30s max | Retry behavior |

## Retry Logic

Failed requests are retried automatically for transient errors. The delay uses exponential backoff with jitter. `Retry-After` header on 429 responses is respected.

| Status | Retried | Behavior |
|--------|---------|----------|
| 429 | Yes | Uses `Retry-After` header if present |
| 502, 503 | Yes | Exponential backoff with jitter |
| 401, 403 | No | Thrown immediately |
| 404 | No | Thrown immediately |
| Other | No | Thrown immediately |

Delay formula: `min(baseDelayMs * 2^attempt + random(0, baseDelayMs), maxDelayMs)`

## Proxy

Supported schemes: `http`, `https`, `socks5`.

```php
// HTTP proxy
$client = new ForumClient(token: '...', proxy: 'http://127.0.0.1:8080');

// Authenticated proxy
$client = new ForumClient(token: '...', proxy: 'http://user:pass@127.0.0.1:8080');

// SOCKS5 proxy
$client = new ForumClient(token: '...', proxy: 'socks5://127.0.0.1:1080');
```

## Error Handling

All exceptions extend `LolzteamException`:

```php
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\LolzteamException;

try {
    $threads = $forum->threads->list();
} catch (AuthException $e) {
    // Invalid or expired token
} catch (RateLimitException $e) {
    // Rate limit exceeded
    $e->retryAfter; // seconds until retry
} catch (LolzteamException $e) {
    // Any other API error
    $e->statusCode;
    $e->body;
}
```

Error hierarchy:

```
LolzteamException
├── HttpException
│   ├── RateLimitException    (429)
│   ├── AuthException         (401, 403)
│   ├── NotFoundException     (404)
│   └── ServerException       (500, 502, 503)
├── NetworkException
└── ConfigException
```

## Rate Limits

The built-in rate limiter uses a token bucket algorithm. When the bucket is empty, the current thread blocks until tokens refill -- no requests are dropped.

| Client | Default limit |
|--------|---------------|
| Forum  | 300 req/min   |
| Market | 120 req/min   |

## Code Generation

Clients and models are auto-generated from OpenAPI 3.1.0 specs in `schemas/`:

```bash
php codegen/generate.php
```

| Input | Output |
|-------|--------|
| `schemas/forum.json` | `src/Generated/Forum/ForumClient.php`, `Models/` |
| `schemas/market.json` | `src/Generated/Market/MarketClient.php`, `Models/` |

Generator source is in `codegen/`.

## Project Structure

```
schemas/                        OpenAPI 3.1.0 specifications
codegen/                        Code generator
src/
  Runtime/
    ClientConfig.php            Shared configuration
    HttpClient.php              Guzzle-based HTTP client
    Retry.php                   Retry with exponential backoff + jitter
    RateLimiter.php             Token bucket rate limiter
    RetryConfig.php             Retry configuration
    Errors/                     Exception class hierarchy
  Generated/
    Forum/
      ForumClient.php           Forum API client (151 endpoints)
      Models/                   Forum request/response models
    Market/
      MarketClient.php          Market API client (115 endpoints)
      Models/                   Market request/response models
tests/
composer.json
phpunit.xml
```

## Commands

```bash
composer install               # Install dependencies
php codegen/generate.php       # Generate clients from OpenAPI specs
composer test                  # Run tests
composer cs-fix                # Fix code style
composer cs-check              # Check code style
```

## License

[MIT](LICENSE)
