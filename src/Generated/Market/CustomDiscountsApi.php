<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class CustomDiscountsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @return array{
    discounts: list<array{
        category_id: int,
        discount_id: int,
        discount_percent: int,
        discount_user_id: int,
        max_price: int,
        min_price: int,
        user_id: int,
    }>,
    total: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function get(): array
    {
        return $this->http->request('GET', '/custom-discounts');
    }

    /**
     * @param array{user_id: int, category_id: 1|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|22|24|28|30|31, discount_percent: float, min_price: float, max_price?: float, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl'} $body
     * @return array{
    discount: array{
        category_id: int,
        discount_id: int,
        discount_percent: int,
        discount_user_id: int,
        max_price: int,
        min_price: int,
        user_id: int,
    },
    total: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function create(array $body = []): array
    {
        return $this->http->request('POST', '/custom-discounts', [], $body);
    }

    /**
     * @param array{discount_id: int, discount_percent?: float, min_price?: float, max_price?: float} $body
     * @return array{
    discounts: list<array{
        category_id: int,
        discount_id: int,
        discount_percent: int,
        discount_user_id: int,
        max_price: int,
        min_price: int,
        user_id: int,
    }>,
    total: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function edit(array $body = []): array
    {
        return $this->http->request('PUT', '/custom-discounts', [], $body);
    }

    /**
     * @param array{discount_id: int} $body
     * @return array{
    status?: string,
    message?: string,
    system_info?: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function delete(array $body = []): array
    {
        return $this->http->request('DELETE', '/custom-discounts', [], $body);
    }
}
