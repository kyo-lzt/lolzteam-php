<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class CartApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {
    }

    /**
     * @param array{category_id?: 1|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|22|24|28|30|31, page?: int, pmin?: int, pmax?: int, title?: string, order_by?: 'price_to_up'|'price_to_down'|'pdate_to_down'|'pdate_to_up'|'pdate_to_down_upload'|'pdate_to_up_upload'|'edate_to_up'|'edate_to_down'|'ddate_to_up'|'ddate_to_down', tag_id[]?: list<int>, not_tag_id[]?: list<int>, public_tag_id[]?: list<int>, not_public_tag_id[]?: list<int>, origin[]?: list<'brute'|'phishing'|'stealer'|'personal'|'resale'|'autoreg'|'self_registration'|'retrieve'|'retrieve_via_support'|'dummy'>, not_origin[]?: list<'brute'|'phishing'|'stealer'|'personal'|'resale'|'autoreg'|'self_registration'|'retrieve'|'retrieve_via_support'|'dummy'>, user_id?: int, nsb?: bool, sb?: bool, nsb_by_me?: bool, sb_by_me?: bool, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', email_login_data?: bool, email_provider[]?: list<'other'|'rambler'|'outlook'|'firstmail'|'notletters'|'mail_ru'>, not_email_provider[]?: 'other'|'rambler'|'outlook'|'firstmail'|'notletters'|'mail_ru', parse_same_item_ids?: bool} $params
     * @return array{
    items: list<array{
        item_id?: int,
        item_state?: string,
        category_id?: int,
        published_date?: int,
        title?: string,
        description?: string,
        price?: int,
        update_stat_date?: int,
        refreshed_date?: int,
        view_count?: int,
        is_sticky?: int,
        item_origin?: string,
        extended_guarantee?: int,
        nsb?: int,
        allow_ask_discount?: int,
        title_en?: string,
        description_en?: string,
        item_domain?: string,
        resale_item_origin?: string,
        isIgnored?: int,
        guarantee?: bool,
        canViewLoginData?: bool,
        canUpdateItemStats?: bool,
        canViewEmailLoginData?: bool,
        showGetEmailCodeButton?: bool,
        canOpenItem?: bool,
        canCloseItem?: bool,
        canEditItem?: bool,
        canDeleteItem?: bool,
        canStickItem?: bool,
        canUnstickItem?: bool,
        bumpSettings?: array{
            canBumpItem?: bool,
            canBumpItemGlobally?: bool,
            shortErrorPhrase?: string,
            errorPhrase?: string,
        },
        canBumpItem?: bool,
        canBuyItem?: bool,
        rub_price?: int,
        price_currency?: string,
        canValidateAccount?: bool,
        canResellItemAfterPurchase?: bool,
        canViewAccountLink?: bool,
        itemOriginPhrase?: string,
        tags?: list<string>,
        note_text?: string,
        description_html?: string,
        description_html_en?: string,
        seller?: array{
            user_id?: int,
            sold_items_count?: int,
            active_item_count?: int,
            restore_data?: string,
            username?: string,
            avatar_date?: int,
            is_banned?: int,
            display_style_group_id?: int,
            restore_percents?: int,
        },
    }>,
    totalItems: int,
    totalItemsPrice: mixed,
    hasNextPage: bool,
    perPage: int,
    page: int,
    searchUrl: string,
    stickyItems: list<array{
        item_id?: int,
        item_state?: string,
        category_id?: int,
        published_date?: int,
        title?: string,
        description?: string,
        price?: int,
        update_stat_date?: int,
        refreshed_date?: int,
        view_count?: int,
        is_sticky?: int,
        item_origin?: string,
        extended_guarantee?: int,
        nsb?: int,
        allow_ask_discount?: int,
        title_en?: string,
        description_en?: string,
        item_domain?: string,
        resale_item_origin?: string,
        isIgnored?: int,
        guarantee?: bool,
        canViewLoginData?: bool,
        canUpdateItemStats?: bool,
        canViewEmailLoginData?: bool,
        showGetEmailCodeButton?: bool,
        canOpenItem?: bool,
        canCloseItem?: bool,
        canEditItem?: bool,
        canDeleteItem?: bool,
        canStickItem?: bool,
        canUnstickItem?: bool,
        bumpSettings?: array{
            canBumpItem?: bool,
            canBumpItemGlobally?: bool,
            shortErrorPhrase?: string,
            errorPhrase?: string,
        },
        canBumpItem?: bool,
        canBuyItem?: bool,
        rub_price?: int,
        price_currency?: string,
        canValidateAccount?: bool,
        canResellItemAfterPurchase?: bool,
        canViewAccountLink?: bool,
        itemOriginPhrase?: string,
        tags?: list<string>,
        note_text?: string,
        description_html?: string,
        description_html_en?: string,
        seller?: array{
            user_id?: int,
            sold_items_count?: int,
            active_item_count?: int,
            restore_data?: string,
            username?: string,
            avatar_date?: int,
            is_banned?: int,
            display_style_group_id?: int,
            restore_percents?: int,
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function get(array $params = []): array
    {
        return $this->http->request('GET', '/cart', $params);
    }

    /**
     * @param array{item_id: int} $body
     * @return array{
    success: bool,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function add(array $body): array
    {
        return $this->http->request('POST', '/cart', [], $body);
    }

    /**
     * @param array{item_id?: int} $body
     * @return array{
    success: bool,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function delete(array $body = []): array
    {
        return $this->http->request('DELETE', '/cart', [], $body);
    }
}
