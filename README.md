# lolzteam-php

PHP 8.1+ API wrapper for Lolzteam Forum and Market. Clients and types are generated from OpenAPI specs.

## Requirements

- PHP 8.1+
- Composer

## Setup

```bash
git clone https://github.com/kyo-lzt/lolzteam-php.git
cd lolzteam-php
composer install
```

## Code Generation

```bash
php codegen/generate.php
```

Reads schemas from `schemas/forum.json` and `schemas/market.json`, generates typed clients into:

| What | Where |
|------|-------|
| Forum client | `src/Generated/Forum/ForumClient.php` |
| Market client | `src/Generated/Market/MarketClient.php` |

Generator source — `codegen/`.

## Project Structure

```
schemas/          — OpenAPI 3.1.0 specs
codegen/          — Code generator
src/Runtime/      — HTTP client, retry, rate limiter, proxy, errors
src/Generated/    — Generated code (committed to repo)
tests/
composer.json
phpunit.xml
```

## Commands

```bash
composer install           # Install dependencies
php codegen/generate.php   # Generate clients from schemas
composer cs-fix            # Fix code style
composer cs-check          # Check code style
composer test              # Tests
```

## License

MIT
