<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class ManagingApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param int $item_id
     * @param array{parse_same_item_ids?: bool} $params
     * @return array{
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
            },
        },
    },
    canStickItem: bool,
    canUnstickItem: bool,
    canBuyItem: bool,
    cannotBuyItemError: string,
    canCloseItem: bool,
    canOpenItem: bool,
    canReportItem: bool,
    canEditItem: bool,
    canDeleteItem: bool,
    canCancelConfirmedBuy: bool,
    canViewItemHistory: bool,
    faveCount: bool,
    isVisibleItem: bool,
    canViewLoginData: bool,
    showToFavouritesButton: bool,
    itemLink: string,
    canChangeOwner: bool,
    sameItemsIds: list<int>,
    sameItemsCount: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function get(int $item_id, array $params = []): array
    {
        return $this->http->request('GET', "/{$item_id}", $params);
    }

    /**
     * @param int $item_id
     * @param array{reason: string} $body
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
    public function delete(int $item_id, array $body = []): array
    {
        return $this->http->request('DELETE', "/{$item_id}", [], $body);
    }

    /**
     * @param array{item_id: int, post_body: string} $body
     * @return array{
    thread: array{
        thread_id: int,
        forum_id: int,
        thread_title: string,
        thread_view_count: int,
        creator_user_id: int,
        creator_username: string,
        thread_create_date: int,
        thread_update_date: int,
        user_is_ignored: bool,
        thread_post_count: int,
        thread_is_published: bool,
        thread_is_deleted: bool,
        thread_is_sticky: bool,
        thread_is_followed: bool,
        first_post: array{
            post_id: int,
            thread_id: int,
            poster_user_id: int,
            poster_username: string,
            post_create_date: int,
            post_body: string,
            post_body_html: string,
            post_body_plain_text: string,
            signature: string,
            signature_html: string,
            signature_plain_text: string,
            post_like_count: int,
            post_attachment_count: int,
            like_users: list<array{
                user_id: int,
                username: string,
                display_style_group_id?: int,
                is_banned?: int,
                uniq_username_css?: string,
            }>,
            user_is_ignored: bool,
            post_is_published: bool,
            post_is_deleted: bool,
            post_update_date: int,
            post_is_first_post: bool,
            links: array{
                permalink: string,
                detail: string,
                thread: string,
                poster: string,
                likes: string,
                report: string,
                attachments: string,
                poster_avatar: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                reply: bool,
                like: bool,
                report: bool,
                upload_attachment: bool,
            },
        },
        thread_prefixes: list<mixed>,
        thread_tags: list<mixed>,
        links: array{
            permalink: string,
            detail: string,
            followers: string,
            forum: string,
            posts: string,
            first_poster: string,
            first_poster_avatar: string,
            first_post: string,
            last_poster: string,
            last_post: string,
        },
        permissions: array{
            view: bool,
            delete: bool,
            follow: bool,
            post: bool,
            upload_attachment: bool,
            edit: bool,
        },
        forum: array{
            forum_id: int,
            forum_title: string,
            forum_description: string,
            forum_thread_count: int,
            forum_post_count: int,
            forum_prefixes: list<array{
                group_title: string,
                group_prefixes: list<array{
                    prefix_id: int,
                    prefix_title: string,
                }>,
            }>,
            thread_default_prefix_id: int,
            thread_prefix_is_required: bool,
            links: array{
                permalink: string,
                detail: string,
                sub-categories: string,
                sub-forums: string,
                threads: string,
                followers: string,
            },
            permissions: array{
                view: bool,
                edit: bool,
                delete: bool,
                create_thread: bool,
                upload_attachment: bool,
                tag_thread: bool,
                follow: bool,
            },
            forum_is_followed: bool,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
    },
}
     */
    public function createClaim(array $body = []): array
    {
        return $this->http->request('POST', '/claims', [], $body);
    }

    /**
     * @param array{item_id?: list<int>, parse_same_item_ids?: bool} $body
     * @return array{
    items: list<array{
        0?: array{
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
            pending_deletion_date: int,
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
            note_text: string,
            content_type: mixed,
            content_id: mixed,
            delete_date: int,
            delete_user_id: int,
            delete_username: string,
            delete_reason: string,
            user_allow_ask_discount: int,
            max_discount_percent: int,
            market_custom_title: string,
            feedback_data: string,
            buyer_display_icon_group_id: int,
            buyer_uniq_banner: string,
            buyer_avatar_date: int,
            buyer_user_group_id: int,
            is_fave: mixed,
            in_cart: mixed,
            cart_price: mixed,
            canResellItem: bool,
            priceWithSellerFee: float,
            guarantee: array{
                duration: int,
                class: string,
                durationPhrase: string,
                endDate: int,
                active: bool,
                cancelled: bool,
                remainingTime: int,
                remainingTimePhrase: string,
                cancelledReason: string,
                cancelledReasonPhrase: string,
            },
            canViewLoginData: bool,
            canUpdateItemStats: bool,
            canReportItem: bool,
            canViewItemViews: bool,
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
            copyFormatData: array{
                title_link: string,
                login_data: string,
                full: string,
            },
            showGetEmailCodeButton: bool,
            getEmailCodeDisplayLogin: mixed,
            buyer: array{
                user_id: int,
                operation_date: int,
                visitorIsBuyer: bool,
                username: string,
                is_banned: int,
                display_style_group_id: int,
                display_icon_group_id: int,
                uniq_username_css: string,
                uniq_banner: string,
                user_group_id: int,
            },
            isPersonalAccount: bool,
            rub_price: int,
            price_currency: string,
            priceWithSellerFeeLabel: string,
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
            imagePreviewLinks: list<string>,
            canChangePassword: bool,
            canChangeEmailPassword: bool,
            uniqueKeyExists: bool,
            itemOriginPhrase: string,
            visitorIsAuthor: bool,
            canAskDiscount: bool,
            tags: array{
                1234567890: array{
                    tag_id: int,
                    title: string,
                    isDefault: bool,
                    forOwnedAccountsOnly: bool,
                    bc: string,
                },
            },
            customFields: array{
                _4: string,
                allowSelfUnban: list<mixed>,
                ban_reason: string,
                discord: string,
                github: string,
                jabber: string,
                lztUnbanAmount: string,
                steam: string,
                telegram: string,
                vk: string,
            },
            externalAuth: list<mixed>,
            isTrusted: bool,
            isBirthdayToday: bool,
            isIgnored: bool,
            deposit: int,
            extraPrices: list<array{
                currency: string,
                price: string,
                priceValue: float,
            }>,
            canViewAccountLoginAndTempEmail: bool,
            bumpSettings: array{
                canBumpItem: bool,
                canBumpItemGlobally: bool,
                shortErrorPhrase: mixed,
                nextAllowedBumpDate: mixed,
                errorPhrase: mixed,
            },
            canCheckGuarantee: bool,
            canShareItem: bool,
            canCheckAiPrice: bool,
            aiPrice: int,
            aiPriceCheckDate: int,
            needToRequireVideoToViewLoginData: bool,
            canCheckAutoBuyPrice: bool,
            autoBuyPrice: int,
            autoBuyPriceCheckDate: int,
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
                effective_last_activity: int,
                restore_percents: mixed,
                isOnline: bool,
                contacts: array{
                    ban_reason: string,
                    telegram: string,
                },
            },
        },
    }>,
    left_item_id: list<int>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function bulkGet(array $body): array
    {
        return $this->http->request('POST', '/bulk/items', [], $body);
    }

    /**
     * @param int $item_id
     * @param array{app_id?: 730|578080|753|570|440|252490|304930|232090|322330, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', ignore_cache?: bool} $params
     * @return array{
    query?: string,
    data?: array{
        items: array{
            0?: array{
                classid: string,
                tradable: int,
                marketable: int,
                image_url: string,
                title: string,
                price: float,
                count: int,
                type: string,
                market_hash_name: string,
                fraudwarnings: mixed,
                stickers: array{
                    stickerCount: int,
                    count: int,
                    images: list<string>,
                    title: string,
                },
            },
        },
        steam_id: string,
        appId: int,
        appTitle: string,
        totalValue: float,
        itemCount: int,
        marketableItemCount: int,
        currency: string,
        currencyIcon: string,
        language: string,
        time: int,
    },
    appId?: int,
    system_info?: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function steamInventoryValue(int $item_id, array $params = []): array
    {
        return $this->http->request('GET', "/{$item_id}/inventory-value", $params);
    }

    /**
     * @param array{link: string, app_id?: 730|578080|753|570|440|252490|304930|232090|322330, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', ignore_cache?: bool} $params
     * @return array{
    query?: string,
    data?: array{
        items: array{
            0?: array{
                classid: string,
                tradable: int,
                marketable: int,
                image_url: string,
                title: string,
                price: float,
                count: int,
                type: string,
                market_hash_name: string,
                fraudwarnings: mixed,
                stickers: array{
                    stickerCount: int,
                    count: int,
                    images: list<string>,
                    title: string,
                },
            },
        },
        steam_id: string,
        appId: int,
        appTitle: string,
        totalValue: float,
        itemCount: int,
        marketableItemCount: int,
        currency: string,
        currencyIcon: string,
        language: string,
        time: int,
    },
    appId?: int,
    system_info?: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function steamValue(array $params = []): array
    {
        return $this->http->request('GET', '/steam-value', $params);
    }

    /**
     * @param int $item_id
     * @param array{type?: 'profiles'|'games'} $params
     * @return mixed
     */
    public function steamPreview(int $item_id, array $params = []): array
    {
        return $this->http->request('GET', "/{$item_id}/steam-preview", $params);
    }

    /**
     * @param int $item_id
     * @param array{title?: string, title_en?: string, price?: int, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', item_origin?: 'brute'|'phishing'|'stealer'|'personal'|'resale'|'autoreg'|'dummy', email_login_data?: string, email_type?: 'native'|'autoreg', allow_ask_discount?: bool, proxy_id?: int, description?: string, information?: string} $body
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
    public function edit(int $item_id, array $body = []): array
    {
        return $this->http->request('PUT', "/{$item_id}/edit", [], $body);
    }

    /**
     * @param int $item_id
     * @return array{
    price: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function aIPrice(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/ai-price");
    }

    /**
     * @param int $item_id
     * @return array{
    price: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function autoBuyPrice(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/auto-buy-price");
    }

    /**
     * @param int $item_id
     * @param array{text?: string} $body
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
    public function note(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/note-save", [], $body);
    }

    /**
     * @param int $item_id
     * @param array{all?: bool, app_id?: 730|578080|753|570|440|252490|304930|232090|322330, authorize?: bool} $body
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
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
    public function steamUpdateValue(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/update-inventory", [], $body);
    }

    /**
     * @param int $item_id
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
    public function bump(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/bump");
    }

    /**
     * @param int $item_id
     * @param array{hour: int} $body
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
    public function autoBump(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/auto-bump", [], $body);
    }

    /**
     * @param int $item_id
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
    public function autoBumpDisable(int $item_id): array
    {
        return $this->http->request('DELETE', "/{$item_id}/auto-bump");
    }

    /**
     * @param int $item_id
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
    public function open(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/open");
    }

    /**
     * @param int $item_id
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
    public function close(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/close");
    }

    /**
     * @param int $item_id
     * @param array{type: 'skins'|'pickaxes'|'dances'|'gliders'|'weapons'|'agents'|'buddies'} $params
     * @return array{
    base64: string,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function image(int $item_id, array $params = []): array
    {
        return $this->http->request('GET', "/{$item_id}/image", $params);
    }

    /**
     * @param int $item_id
     * @return array{
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
            },
        },
    },
    codeData: array{
        code: string,
        date: int,
        textPlain: string,
    },
}
     */
    public function emailCode(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/email-code");
    }

    /**
     * @param array{email_password?: string, email?: string, password?: string, limit?: int} $params
     * @return array{
    email: string,
    letters: list<array{
        textHtml: string,
        textPlain: string,
        from: string,
        date: int,
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function getLetters2(array $params = []): array
    {
        return $this->http->request('GET', '/letters2', $params);
    }

    /**
     * @param int $item_id
     * @return array{
    maFile: array{
        shared_secret: string,
        serial_number: int,
        revocation_code: string,
        uri: string,
        account_name: string,
        token_gid: string,
        identity_secret: string,
        secret_1: string,
        device_id: string,
        fully_enrolled: bool,
        Session: array{
            SessionID: string,
            AccessToken: string,
            RefreshToken: string,
            SteamID: string,
            SteamLoginSecure: string,
        },
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function steamGetMafile(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/mafile");
    }

    /**
     * @param int $item_id
     * @return array{
    status: string,
    message: string,
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
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
    public function steamAddMafile(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/mafile");
    }

    /**
     * @param int $item_id
     * @return array{
    status: string,
    message: string,
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
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
    public function steamRemoveMafile(int $item_id): array
    {
        return $this->http->request('DELETE', "/{$item_id}/mafile");
    }

    /**
     * @param int $item_id
     * @return array{
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
            },
        },
    },
    codeData: array{
        code: string,
        date: int,
        textPlain: string,
    },
}
     */
    public function steamMafileCode(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/guard-code");
    }

    /**
     * @param int $item_id
     * @param array{id?: int, nonce?: int} $body
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
    public function steamSDA(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/confirm-sda", [], $body);
    }

    /**
     * @param int $item_id
     * @return array{
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
        pending_deletion_date: int,
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
        note_text: string,
        content_type: mixed,
        content_id: mixed,
        delete_date: int,
        delete_user_id: int,
        delete_username: string,
        delete_reason: string,
        user_allow_ask_discount: int,
        max_discount_percent: int,
        market_custom_title: string,
        feedback_data: string,
        buyer_display_icon_group_id: int,
        buyer_uniq_banner: string,
        buyer_avatar_date: int,
        buyer_user_group_id: int,
        is_fave: mixed,
        in_cart: mixed,
        cart_price: mixed,
        canResellItem: bool,
        priceWithSellerFee: float,
        guarantee: array{
            duration: int,
            class: string,
            durationPhrase: string,
            endDate: int,
            active: bool,
            cancelled: bool,
            remainingTime: int,
            remainingTimePhrase: string,
            cancelledReason: string,
            cancelledReasonPhrase: string,
        },
        canViewLoginData: bool,
        canUpdateItemStats: bool,
        canReportItem: bool,
        canViewItemViews: bool,
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
        copyFormatData: array{
            title_link: string,
            login_data: string,
            full: string,
        },
        showGetEmailCodeButton: bool,
        getEmailCodeDisplayLogin: mixed,
        buyer: array{
            user_id: int,
            operation_date: int,
            visitorIsBuyer: bool,
            username: string,
            is_banned: int,
            display_style_group_id: int,
            display_icon_group_id: int,
            uniq_username_css: string,
            uniq_banner: string,
            user_group_id: int,
        },
        isPersonalAccount: bool,
        rub_price: int,
        price_currency: string,
        priceWithSellerFeeLabel: string,
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
        imagePreviewLinks: list<string>,
        canChangePassword: bool,
        canChangeEmailPassword: bool,
        uniqueKeyExists: bool,
        itemOriginPhrase: string,
        visitorIsAuthor: bool,
        canAskDiscount: bool,
        tags: array{
            1234567890: array{
                tag_id: int,
                title: string,
                isDefault: bool,
                forOwnedAccountsOnly: bool,
                bc: string,
            },
        },
        customFields: array{
            _4: string,
            allowSelfUnban: list<mixed>,
            ban_reason: string,
            discord: string,
            github: string,
            jabber: string,
            lztUnbanAmount: string,
            steam: string,
            telegram: string,
            vk: string,
        },
        externalAuth: list<mixed>,
        isTrusted: bool,
        isBirthdayToday: bool,
        isIgnored: bool,
        deposit: int,
        extraPrices: list<array{
            currency: string,
            price: string,
            priceValue: float,
        }>,
        canViewAccountLoginAndTempEmail: bool,
        bumpSettings: array{
            canBumpItem: bool,
            canBumpItemGlobally: bool,
            shortErrorPhrase: mixed,
            nextAllowedBumpDate: mixed,
            errorPhrase: mixed,
        },
        canCheckGuarantee: bool,
        canShareItem: bool,
        canCheckAiPrice: bool,
        aiPrice: int,
        aiPriceCheckDate: int,
        needToRequireVideoToViewLoginData: bool,
        canCheckAutoBuyPrice: bool,
        autoBuyPrice: int,
        autoBuyPriceCheckDate: int,
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
            effective_last_activity: int,
            restore_percents: mixed,
            isOnline: bool,
            contacts: array{
                ban_reason: string,
                telegram: string,
            },
        },
    },
    codes: array{
        code?: string,
        date?: int,
    },
}
     */
    public function telegramCode(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/telegram-login-code");
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
    public function telegramResetAuth(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/telegram-reset-authorizations");
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
    public function refuseGuarantee(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/refuse-guarantee");
    }

    /**
     * @param int $item_id
     * @param array{i_voluntarily_and_with_full_awareness_of_my_actions_waive_any_claims_regarding_this_item: bool} $body
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
    public function declineVideoRecording(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/decline-video-recording", [], $body);
    }

    /**
     * @param int $item_id
     * @return array{
    message: string,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function checkGuarantee(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/check-guarantee");
    }

    /**
     * @param int $item_id
     * @param array{_cancel?: 1} $body
     * @return array{
    status?: string,
    message?: string,
    new_password: string,
}
     */
    public function changePassword(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/change-password", [], $body);
    }

    /**
     * @param int $item_id
     * @return array{
    item: array{
        account: string,
    },
}
     */
    public function tempEmailPassword(int $item_id): array
    {
        return $this->http->request('GET', "/{$item_id}/temp-email-password");
    }

    /**
     * @param int $item_id
     * @param array{tag_id: int} $body
     * @return array{
    itemId: int,
    tag: array{
        tag_id: int,
        title: string,
        isDefault: bool,
        forOwnedAccountsOnly: bool,
        bc: string,
    },
    addedTagId: int,
    deleteTags: list<int>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function tag(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/tag", [], $body);
    }

    /**
     * @param int $item_id
     * @param array{tag_id: int} $body
     * @return array{
    itemId: int,
    tag: array{
        tag_id: int,
        title: string,
        isDefault: bool,
        forOwnedAccountsOnly: bool,
        bc: string,
    },
    addedTagId: int,
    deleteTags: list<int>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function untag(int $item_id, array $body = []): array
    {
        return $this->http->request('DELETE', "/{$item_id}/tag", [], $body);
    }

    /**
     * @param int $item_id
     * @param array{tag_id: int} $body
     * @return array{
    itemId: int,
    tag: array{
        tag_id: int,
        title: string,
        isDefault: bool,
        forOwnedAccountsOnly: bool,
        bc: string,
    },
    addedTagId: int,
    deleteTags: list<int>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function publicTag(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/public-tag", [], $body);
    }

    /**
     * @param int $item_id
     * @param array{tag_id: int} $body
     * @return array{
    itemId: int,
    tag: array{
        tag_id: int,
        title: string,
        isDefault: bool,
        forOwnedAccountsOnly: bool,
        bc: string,
    },
    addedTagId: int,
    deleteTags: list<int>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function publicUntag(int $item_id, array $body = []): array
    {
        return $this->http->request('DELETE', "/{$item_id}/public-tag", [], $body);
    }

    /**
     * @param int $item_id
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
    public function favorite(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/star");
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
    public function unfavorite(int $item_id): array
    {
        return $this->http->request('DELETE', "/{$item_id}/star");
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
    public function stick(int $item_id): array
    {
        return $this->http->request('POST', "/{$item_id}/stick");
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
    public function unstick(int $item_id): array
    {
        return $this->http->request('DELETE', "/{$item_id}/stick");
    }

    /**
     * @param int $item_id
     * @param array{username: string, secret_answer: string} $body
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
    public function transfer(int $item_id, array $body = []): array
    {
        return $this->http->request('POST', "/{$item_id}/change-owner", [], $body);
    }
}
