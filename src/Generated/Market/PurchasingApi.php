<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class PurchasingApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param int $item_id
     * @param array{price?: float, balance_id?: int} $body
     * @return array{
    status: string,
    item: array{
        item_id: int,
        item_state: string,
        category_id: int,
        published_date: int,
        title: string,
        description: string,
        price: int,
        update_stat_date: int,
        refreshed_date: int,
        edit_date: int,
        login: string,
        temp_email: string,
        view_count: int,
        is_sticky: int,
        information: string,
        item_origin: string,
        extended_guarantee: int,
        nsb: int,
        allow_ask_discount: int,
        title_en: string,
        description_en: string,
        information_en: string,
        email_type: string,
        email_provider: string,
        item_domain: string,
        resale_item_origin: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        priceWithSellerFee: int,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        loginData: array{
            raw: string,
            encodedRaw: string,
            login: string,
            password: string,
            encodedPassword: string,
            oldPassword: string,
            encodedOldPassword: mixed,
        },
        canViewEmailLoginData: bool,
        emailLoginData: array{
            raw: string,
            encodedRaw: string,
            login: string,
            password: string,
            encodedPassword: string,
            oldPassword: string,
            encodedOldPassword: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: string,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            uniq_username_css: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        sold_items_category_count: int,
        restore_items_category_count: int,
        rub_price: int,
        price_currency: string,
        canValidateAccount: bool,
        canResellItemAfterPurchase: bool,
        account_last_activity: int,
        displayConvertedBalance: bool,
        canViewAccountLink: bool,
        accountLinks: list<array{
            link: string,
            text: string,
            iconClass: string,
        }>,
        accountLink: string,
        emailLoginUrl: string,
        canChangePassword: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: list<mixed>,
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        needToRequireVideoToViewLoginData: bool,
        descriptionHtml: string,
        descriptionEnHtml: string,
        descriptionPlain: string,
        descriptionEnPlain: string,
        seller: array{
            user_id: int,
            username: string,
            avatar_date: int,
            is_banned: int,
            display_style_group_id: int,
            joined_date: int,
            sold_items_count: int,
            active_items_count: int,
            restore_data: string,
            restore_percents: int,
            isOnline: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function fastBuy(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/fast-buy", [], $body);
    }

    /**
     * @param int $item_id
     * @return array{
    status: string,
    item: array{
        item_id: int,
        item_state: string,
        category_id: int,
        published_date: int,
        title: string,
        description: string,
        price: int,
        update_stat_date: int,
        refreshed_date: int,
        edit_date: int,
        view_count: int,
        is_sticky: int,
        item_origin: string,
        extended_guarantee: int,
        nsb: int,
        allow_ask_discount: int,
        title_en: string,
        description_en: string,
        email_type: string,
        email_provider: string,
        item_domain: string,
        resale_item_origin: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        category_title: string,
        category_url: string,
        require_temp_email: int,
        available_temp_email: int,
        check_button_enabled: int,
        checker_enabled: int,
        buy_without_validation: int,
        has_guarantee: int,
        require_video_recording: int,
        can_be_resold: int,
        login_type: string,
        require_email_login_data: int,
        category_prefix_id: int,
        ask_user_id: mixed,
        ask_item_id: mixed,
        ask_date: mixed,
        discount_price: mixed,
        discount_accepted: mixed,
        user_alerted: mixed,
        message: mixed,
        min_price: int,
        priceWithSellerFee: int,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: mixed,
            active: mixed,
            cancelled: mixed,
            remainingTime: mixed,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewEmailLoginData: bool,
        showGetEmailCodeButton: bool,
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        canValidateAccount: bool,
        canResellItemAfterPurchase: bool,
        isSmallExf: bool,
        account_last_activity: int,
        canViewAccountLink: bool,
        accountLinks: list<array{
            link: string,
            text: string,
            iconClass: string,
        }>,
        accountLink: string,
        emailLoginUrl: string,
        canChangePassword: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: list<mixed>,
        customFields: list<mixed>,
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        needToRequireVideoToViewLoginData: bool,
        descriptionHtml: string,
        descriptionEnHtml: string,
        descriptionPlain: string,
        descriptionEnPlain: string,
        seller: array{
            user_id: int,
            username: string,
            avatar_date: int,
            is_banned: int,
            display_style_group_id: int,
            joined_date: int,
            sold_items_count: int,
            active_items_count: int,
            restore_data: string,
            restore_percents: mixed,
            isOnline: bool,
        },
    },
    requireVideoRecording: bool,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function check(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/check-account");
    }

    /**
     * @param int $item_id
     * @param array{price?: int, balance_id?: int} $body
     * @return array{
    status?: string,
    item: array{
        loginData: array{
            raw: string,
            encodedRaw: string,
            login: string,
            password: string,
            encodedPassword: string,
            oldPassword: string,
            encodedOldPassword: string,
            adviceToChangePassword: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function confirm(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/confirm-buy", [], $body);
    }

    /**
     * @param int $item_id
     * @param array{discount_price: float, message?: string} $body
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
    public function discountRequest(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/discount", [], $body);
    }

    /**
     * @param int $item_id
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
    public function discountCancel(int $item_id): array
    {
        return $this->http->request('DELETE', "/{$item_id}/discount");
    }
}
