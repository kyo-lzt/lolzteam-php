<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class ProfileApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param array{type?: 'market'|'nomarket', claim_state?: 'active'|'solved'|'rejected'|'settled'} $params
     * @return array{
    claims: list<array{
        thread_id: int,
        claim_date: int,
        claim_state: string,
        message_body: string,
        amount_formatted: string,
        author: array{
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
            },
            user_is_ignored: bool,
            user_is_visitor: bool,
            user_group_id: int,
            ban_reason: string,
            fields: list<array{
                id: string,
                title: string,
                description: string,
                position: string,
                is_required: bool,
            }>,
        },
    }>,
    stats: array{
        market: array{
            total: int,
            solved: int,
            settled: int,
            rejected: int,
        },
        noMarket: array{
            total: int,
            solved: int,
            settled: int,
            rejected: int,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function claims(array $params = []): array
    {
        return $this->http->request('GET', '/claims', $params);
    }

    /**
     * @param array{fields_include?: list<'*'|'searchHistory'|'savedSearch'>} $params
     * @return array{
    user: array{
        active_items_count: int,
        activity_visible: bool,
        age: int,
        balance: string,
        balances: list<array{
            balance: string,
            balance_id: int,
            convertedBalance: float,
            custom_title: mixed,
            fullTitle: string,
            merchant_id: int,
            title: string,
            type: string,
            user_id: int,
        }>,
        bump_item_period: int,
        can_edit: bool,
        can_follow: bool,
        can_ignore: bool,
        can_post_profile: bool,
        can_view_profile: bool,
        can_view_profile_posts: bool,
        can_warn: bool,
        contest_count: int,
        conv_welcome_message: string,
        convertedBalance: int,
        convertedDeposit: int,
        convertedHold: int,
        currency: string,
        currencyPhrase: string,
        custom_account_download_format: string,
        custom_fields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztAwardUserTrophy: string,
            lztLikesIncreasing: string,
            lztLikesZeroing: string,
            lztSympathyIncreasing: string,
            lztSympathyZeroing: string,
            lztUnbanAmount: string,
            maecenasValue: string,
            scamURL: string,
            steam: string,
            telegram: string,
            vk: string,
            favoritePorn: string,
            favoriteVape: string,
            favoriteAnime: string,
            matrix: string,
        },
        custom_title: string,
        deposit: int,
        dob: array{
            year: int,
            month: int,
            day: int,
        },
        feedback_data: array{
            12345: array{
                positive: int,
                negative: int,
            },
        },
        hold: string,
        homepage: string,
        imap_data: array{
            domain.zone: array{
                domain: string,
                imap_server: string,
                port: int,
                secure: bool,
            },
        },
        is_admin: bool,
        is_banned: bool,
        is_followed: bool,
        is_ignored: bool,
        is_moderator: bool,
        is_staff: bool,
        is_super_admin: bool,
        joined_date: int,
        last_activity: int,
        like2_count: int,
        like_count: int,
        location: string,
        market_custom_title: string,
        max_discount_percent: int,
        message_count: int,
        paid_mail_left: int,
        public_tags: list<array{
            background_color: string,
            tag_id: int,
            title: string,
        }>,
        register_date: int,
        rendered: array{
            username: string,
            avatars: array{
                l: string,
                m: string,
                s: string,
            },
            backgrounds: array{
                l: string,
                m: string,
            },
            link: string,
        },
        restore_count: int,
        restore_data: array{
            12345: int,
        },
        short_link: string,
        sold_items_count: int,
        tags: list<array{
            tag_id: int,
            title: string,
            isDefault: bool,
            forOwnedAccountsOnly: bool,
            bc: string,
        }>,
        telegram_client: array{
            telegram_api_id: string,
            telegram_api_hash: string,
            telegram_device_model: string,
            telegram_system_version: string,
            telegram_app_version: string,
            telegram_system_lang_code: string,
            telegram_lang_code: string,
            telegram_lang_pack: string,
        },
        trophy_points: int,
        user_allow_ask_discount: bool,
        user_id: int,
        user_title: string,
        username: string,
        view_url: string,
        visible: bool,
        warning_points: int,
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function get(array $params = []): array
    {
        return $this->http->request('GET', '/me', $params);
    }

    /**
     * @param array{user?: array{
    currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl',
    user_allow_ask_discount?: bool,
    max_discount_percent?: int,
    market_custom_title?: string,
}, option?: array{
    disable_steam_guard?: bool,
    deauthorize_steam?: bool,
    change_password_on_purchase?: bool,
    hide_favourites?: bool,
    show_too_low_price_change_warning?: bool,
}, allow_accept_accounts?: list<string>, telegram_api_id?: string, telegram_api_hash?: string, telegram_device_model?: string, telegram_system_version?: string, telegram_app_version?: string, telegram_lang_pack?: string, telegram_lang_code?: string, telegram_system_lang_code?: string, clear_telegram_client?: bool} $body
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
    public function edit(array $body = []): array
    {
        return $this->http->request('PUT', '/me', [], $body);
    }
}
