<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class BatchApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @return array{
    jobs: array{
        job_id: array<string, mixed>,
    },
}
     */
    public function execute(): array
    {
        return $this->http->request('POST', '/batch');
    }
}
