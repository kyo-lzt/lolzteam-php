<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class AutoPaymentsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @return array{
    payments: array{
        1234567890: array{
            user_id: int,
            receiver_id: int,
            amount: string,
            description: string,
            next_payment: int,
            next_alert_date: int,
            auto_payment_id: int,
            day: string,
            receiver: array{
                user_id: int,
                username: string,
                username_html: string,
                user_message_count: int,
                user_register_date: int,
                user_like_count: int,
                user_like2_count: int,
                contest_count: int,
                trophy_count: int,
                custom_title: string,
                is_banned: int,
                user_title: string,
                user_is_valid: bool,
                user_is_verified: bool,
                user_is_followed: bool,
                user_last_seen_date: int,
                user_following_count: int,
                user_followers_count: int,
                links: array{
                    permalink: string,
                    detail: string,
                    avatar: string,
                    avatar_big: string,
                    avatar_small: string,
                    followers: string,
                    followings: string,
                    ignore: string,
                    timeline: string,
                },
                permissions: array{
                    edit: bool,
                    follow: bool,
                    ignore: bool,
                    profile_post: bool,
                },
                user_is_ignored: bool,
                user_is_visitor: bool,
                user_group_id: int,
                fields: list<array{
                    id: string,
                    title: string,
                    description: string,
                    position: string,
                    is_required: bool,
                    value: string,
                }>,
            },
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function list(): array
    {
        return $this->http->request('GET', '/auto-payments');
    }

    /**
     * @param array{secret_answer?: string, username_receiver: string, day: 0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28, amount: float, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', description?: string} $body
     * @return array{
    status: string,
    message: string,
    auto_payment_id: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function create(array $body = []): array
    {
        return $this->http->request('POST', '/auto-payment', [], $body);
    }

    /**
     * @param array{auto_payment_id: int} $body
     * @return array{
    status: string,
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function delete(array $body = []): array
    {
        return $this->http->request('DELETE', '/auto-payment', [], $body);
    }
}
