<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

use Lolzteam\Runtime\HttpClient;

final class OAuthApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{grant_type: 'client_credentials'|'authorization_code'|'refresh_token'|'password', client_id: string, client_secret: string, scope?: list<'basic'|'read'|'post'|'conversate'|'market'|'payment'|'invoice'>, code?: string, redirect_uri?: string, refresh_token?: string, username?: string, password?: string} $body
     * @return array{
    access_token: string,
    token_type: string,
    expires_in: int,
    refresh_token?: string,
    scope?: string,
}
     */
    public function token(array $body): array
    {
        return $this->http->request('POST', '/oauth/token', [], $body);
    }
}
