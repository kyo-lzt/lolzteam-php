# lolzteam-api-php

API wrapper for Lolzteam Forum and Market APIs (PHP 8.1+).

## Project structure

```
schemas/          — Symlinks to OpenAPI 3.1.0 specs (forum.json, market.json)
codegen/          — Code generator (reads OpenAPI -> emits PHP client code)
src/Runtime/      — HTTP client, retry, rate limiter, proxy, auth, errors
src/Generated/    — Generated clients and types (committed to repo)
tests/            — Tests
```

## Key commands

- `composer install` — install deps
- `php codegen/generate.php` — regenerate clients from OpenAPI schemas
- `composer test` — run tests
- `composer cs-fix` — fix code style
- `composer cs-check` — check code style

## Architecture

- **Two separate clients**: `ForumClient` and `MarketClient` (different baseUrl, rate limits)
- **DX pattern**: `$client->threads->list()`, `$client->managing->get($id)` — methods grouped by API tags
- **Codegen**: PHP script reads OpenAPI JSON, resolves $refs, groups by tags, emits typed methods
- **Runtime**: Guzzle HTTP client, proxy support via Guzzle options
- **Generated code is committed** — no codegen needed at install time

## API details

- **Auth**: Bearer token only (both Forum and Market)
- **Forum**: base URL `https://api.lolz.live`, rate limit 300 req/min
- **Market**: base URL `https://api.lzt.market`, rate limit 120 req/min (search: 20 req/min)
- **Retry**: 429 (Retry-After), 502, 503 — exponential backoff + jitter
- **Parameters**: snake_case preserved (1:1 with API)

## Conventions

- PHP 8.1+: readonly properties, enums, named arguments
- PSR-4 autoloading under `Lolzteam\` namespace
- Strict types in every file
- Custom exception hierarchy: `LolzteamException` -> `HttpException` / `NetworkException`
