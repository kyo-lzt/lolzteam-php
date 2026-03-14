<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class AssetsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param array{css?: list<string>} $params
     * @return array{
    contents: string,
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function css(array $params = []): array
    {
        return $this->http->request('GET', '/css', $params);
    }
}
