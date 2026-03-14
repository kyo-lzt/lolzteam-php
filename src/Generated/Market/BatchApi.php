<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class BatchApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @return array{
    jobs: array{
        job_id: array{
            _job_result?: string,
            _job_error?: string,
        },
    },
    system_info?: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function batch(): array
    {
        return $this->http->request('POST', '/batch');
    }
}
