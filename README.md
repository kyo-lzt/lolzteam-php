# lolzteam-api

Fully typed PHP 8.1+ API wrapper for [Lolzteam](https://lolz.live) Forum and Market APIs.

**151 Forum endpoints + 115 Market endpoints** — all generated from the official OpenAPI schemas.

## Installation

```bash
composer require lolzteam/api
```

## Quick Start

```php
use Lolzteam\Generated\Forum\ForumClient;
use Lolzteam\Generated\Market\MarketClient;

// Forum
$forum = new ForumClient(token: 'your_token');

$threads = $forum->threads->getList(['forum_id' => 876]);
$thread = $forum->threads->get(thread_id: 123456);
$user = $forum->users->get(user_id: 1);

// Market
$market = new MarketClient(token: 'your_token');

$items = $market->category->getList(['category_name' => 'steam']);
$item = $market->managing->get(item_id: 123456);
```

Full PHPDoc array shape annotations — your IDE provides autocompletion and type checking out of the box.

## Features

- **Fully typed** — PHPDoc array shape annotations generated from OpenAPI schemas
- **Auto-retry** — 429 (respects `Retry-After`), 502, 503, 504 with exponential backoff + jitter
- **Rate limiting** — built-in token bucket (Forum: 300 req/min, Market: 120 req/min)
- **Proxy support** — via Guzzle HTTP options
- **File uploads** — `multipart/form-data` for avatar/background endpoints
- **PHP 8.1+** — readonly properties, enums, named arguments

## Configuration

```php
use Lolzteam\Runtime\RetryConfig;

$forum = new ForumClient(
    // Required
    token: 'your_bearer_token',

    // Optional: proxy
    proxy: 'http://user:pass@proxy.example.com:8080',

    // Optional: retry config
    retry: new RetryConfig(
        maxRetries: 5,       // default: 3
        baseDelayMs: 2000,   // default: 1000
        maxDelayMs: 60000,   // default: 30000
    ),
);
```

## Error Handling

```php
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\ServerException;
use Lolzteam\Runtime\Errors\NetworkException;
use Lolzteam\Runtime\Errors\HttpException;

try {
    $thread = $forum->threads->get(thread_id: 999999);
} catch (RateLimitException $e) {
    echo $e->retryAfter; // seconds to wait
} catch (AuthException $e) {
    // 401 or 403 — invalid or expired token
} catch (NotFoundException $e) {
    // 404 — not found
} catch (ServerException $e) {
    // 500/502/503/504 — server error
} catch (NetworkException $e) {
    // Connection failed, DNS error, timeout
} catch (HttpException $e) {
    echo $e->statusCode;
    echo $e->body;
}
```

## API Groups

### ForumClient

| Group | Methods | Description |
|-------|---------|-------------|
| `$forum->threads` | 22 | Threads CRUD, follow, bump, move |
| `$forum->posts` | 15 | Posts CRUD, like, report |
| `$forum->users` | 26 | Users, avatar/background upload, settings |
| `$forum->conversations` | 23 | Private conversations |
| `$forum->profilePosts` | 18 | Profile posts and comments |
| `$forum->chatbox` | 12 | Chat messages |
| `$forum->forums` | 9 | Forum listing, follow |
| `$forum->search` | 7 | Search threads, posts, users |
| `$forum->tags` | 4 | Content tags |
| `$forum->notifications` | 3 | Notifications |
| `$forum->categories` | 2 | Categories |
| `$forum->forms` | 2 | Forms |
| `$forum->links` | 2 | Link forums |
| `$forum->pages` | 2 | Pages |
| `$forum->assets` | 1 | CSS assets |
| `$forum->batch` | 1 | Batch requests |
| `$forum->navigation` | 1 | Navigation |
| `$forum->oAuth` | 1 | OAuth token |

### MarketClient

| Group | Methods | Description |
|-------|---------|-------------|
| `$market->managing` | 40 | Account management, edit, steam values |
| `$market->category` | 28 | Category search (Steam, Fortnite, etc.) |
| `$market->payments` | 12 | Payments, invoices, balance |
| `$market->list` | 6 | User items, orders, favorites |
| `$market->purchasing` | 5 | Buy, confirm, discount requests |
| `$market->publishing` | 4 | Publish accounts for sale |
| `$market->customDiscounts` | 4 | Custom discount management |
| `$market->cart` | 3 | Shopping cart |
| `$market->autoPayments` | 3 | Auto-payment setup |
| `$market->profile` | 3 | User profile |
| `$market->proxy` | 3 | Proxy management |
| `$market->imap` | 2 | IMAP email management |
| `$market->batch` | 1 | Batch requests |

## Code Generation

All client code and types are **generated from OpenAPI 3.1.0 schemas** — not written by hand.

```bash
php codegen/generate.php
# or using Bun
bun codegen/generate.ts
```

This reads `schemas/forum.json` and `schemas/market.json`, resolves all `$ref` pointers, and emits typed PHP classes. Generated code is committed to the repo — no codegen step needed at install time.

### Where types are generated

| What | Where |
|------|-------|
| Generator source | `codegen/generate.php` (or `codegen/generate.ts`) |
| Forum client + groups | `src/Generated/Forum/` (19 files) |
| Market client + groups | `src/Generated/Market/` (15 files) |

## Project Structure

```
lolzteam-php/
  schemas/              OpenAPI 3.1.0 specs (forum.json, market.json)
  codegen/              Code generator (reads OpenAPI -> emits PHP code)
  src/Runtime/          HTTP client, retry, rate limiter, errors
  src/Generated/        Generated clients and types (committed to repo)
  tests/
  composer.json
  phpunit.xml
```

## Development

```bash
composer install        # Install deps
php codegen/generate.php  # Regenerate from schemas
composer cs-fix         # Fix code style
composer cs-check       # Check code style
composer test           # Run tests
```

## Requirements

- PHP 8.1+
- [Guzzle](https://docs.guzzlephp.org/) ^7.0

## License

MIT
