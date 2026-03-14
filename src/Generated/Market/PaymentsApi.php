<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\HttpClient;

final class PaymentsApi
{
    public function __construct(
        private readonly HttpClient $http,
    ) {}

    /**
     * @param array{invoice_id?: int, payment_id?: string} $params
     * @return array{
    invoice: array{
        additional_data: string,
        amount: int,
        comment: string,
        expires_at: int,
        invoice_date: int,
        invoice_id: int,
        is_test: bool,
        merchant_id: int,
        paid_date: int,
        payer_user_id: int,
        payment_id: string,
        resend_attempts: int,
        status: string,
        url: string,
        url_callback: string,
        url_success: string,
        user_id: int,
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function invoiceGet(array $params = []): array
    {
        return $this->http->request('GET', '/invoice', $params);
    }

    /**
     * @param array{currency: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', amount: float, payment_id: string, comment: string, url_success: string, url_callback?: string, merchant_id: int, required_telegram_id?: int, required_telegram_username?: string, lifetime?: float, additional_data?: string, is_test?: bool} $body
     * @return array{
    invoice: array{
        additional_data: string,
        amount: int,
        comment: string,
        expires_at: int,
        invoice_date: int,
        invoice_id: int,
        is_test: bool,
        merchant_id: int,
        paid_date: int,
        payer_user_id: int,
        payment_id: string,
        resend_attempts: int,
        status: string,
        url: string,
        url_callback: string,
        url_success: string,
        user_id: int,
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function invoiceCreate(array $body = []): array
    {
        return $this->http->request('POST', '/invoice', [], $body);
    }

    /**
     * @param array{page?: int, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', status?: 'paid'|'not_paid', amount?: float, merchant_id?: int} $params
     * @return array{
    invoices: list<array{
        additional_data: string,
        amount: int,
        comment: string,
        expires_at: int,
        invoice_date: int,
        invoice_id: int,
        is_test: bool,
        merchant_id: int,
        paid_date: int,
        payer_user_id: int,
        payment_id: string,
        resend_attempts: int,
        status: string,
        url: string,
        url_callback: string,
        url_success: string,
        user_id: int,
    }>,
    count: int,
    page: int,
    perPage: int,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function invoiceList(array $params = []): array
    {
        return $this->http->request('GET', '/invoice/list', $params);
    }

    /**
     * @return array{
    currencyList: array{
        BTC: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        ETH: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        BNB: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        BCH: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        XMR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        SOL: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        LTC: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        DASH: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        TON: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        USDT: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        MATIC: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        TRX: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        DOGE: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        KWD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        GBP: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        CHF: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        EUR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        USD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        SGD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        CAD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        AUD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        NZD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        BGN: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        GEL: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        ILS: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        QAR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        PEN: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        AED: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        SAR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        PLN: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        MYR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        RON: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        BRL: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        DKK: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        CNY: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        HKD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        SEK: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        NOK: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        ZAR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        MXN: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        CZK: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        TWD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        THB: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        TRY: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        UAH: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        UYU: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        PHP: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        INR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        RUB: array{
            title: string,
            rate: int,
            formattedRate: string,
            symbol: string,
        },
        RSD: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        JPY: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        HUF: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        KZT: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        CRC: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        CLP: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        ARS: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        KRW: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        COP: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        IDR: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
        VND: array{
            title: string,
            rate: float,
            formattedRate: string,
            symbol: string,
        },
    },
    lastUpdate: int,
    visitorCurrency: string,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function currency(): array
    {
        return $this->http->request('GET', '/currency');
    }

    /**
     * @return array{
    from: array{
        balance: array{
            balance: string,
            convertedBalance: int,
            fullTitle: string,
            title: string,
            type: string,
        },
        12345: array{
            balance: string,
            balance_id: int,
            custom_title: mixed,
            fullTitle: string,
            merchant_id: int,
            title: string,
            type: string,
            user_id: int,
        },
    },
    to: array{
        balance: array{
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
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function balanceList(): array
    {
        return $this->http->request('GET', '/balance/exchange');
    }

    /**
     * @param array{from_balance: string, to_balance: string, amount: int} $body
     * @return array{
    from: array{
        balance: array{
            balance: string,
            convertedBalance: int,
            fullTitle: string,
            title: string,
            type: string,
        },
        12345: array{
            balance: string,
            balance_id: int,
            custom_title: mixed,
            fullTitle: string,
            merchant_id: int,
            title: string,
            type: string,
            user_id: int,
        },
    },
    to: array{
        balance: array{
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
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function balanceExchange(array $body = []): array
    {
        return $this->http->request('POST', '/balance/exchange', [], $body);
    }

    /**
     * @param array{user_id?: int, username?: string, amount: int, currency: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', comment?: string, telegram_deal?: bool, telegram_username?: string, transfer_hold?: bool, hold_length_value?: int, hold_length_option?: 'hour'|'day'|'week'|'month'|'year'} $body
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
    public function transfer(array $body = []): array
    {
        return $this->http->request('POST', '/balance/transfer', [], $body);
    }

    /**
     * @param array{amount?: float} $params
     * @return array{
    commission_percentage: int,
    spentCurrentMonth: int,
    calculator: array{
        inputAmount: int,
        commissionAmount: int,
        totalOutputAmount: int,
    },
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function fee(array $params = []): array
    {
        return $this->http->request('GET', '/balance/transfer/fee', $params);
    }

    /**
     * @param array{payment_id: int} $body
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
    public function cancel(array $body = []): array
    {
        return $this->http->request('POST', '/balance/transfer/cancel', [], $body);
    }

    /**
     * @param array{type?: 'paid_item'|'sold_item'|'withdrawal_balance'|'refilled_balance'|'internal_purchase'|'money_transfer'|'receiving_money'|'claim_hold'|'insurance_deposit'|'paid_mail'|'contest'|'invoice'|'balance_exchange', pmin?: int, pmax?: int, currency?: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', page?: int, operation_id_lt?: int, receiver?: string, sender?: string, is_api?: bool, startDate?: string, endDate?: string, wallet?: string, comment?: string, is_hold?: bool, show_payment_stats?: bool} $params
     * @return array{
    payments: array{
        1234567890: array{
            operation_id: int,
            operation_date: int,
            operation_type: string,
            outgoing_sum: string,
            incoming_sum: string,
            item_id: int,
            wallet: string,
            is_finished: int,
            is_hold: int,
            payment_system: string,
            data: array{
                user_id: int,
                username: string,
                comment: string,
                fee: int,
                invoice_id: int,
                is_test: bool,
                payment_id: string,
                commentPlain: string,
                is_banned: int,
                display_style_group_id: int,
                uniq_username_css: string,
                uniq_banner: string,
                avatar_date: int,
                user_group_id: int,
                username_html: string,
                avatar: string,
            },
            hold_end_date: int,
            operation_end_date: int,
            api: int,
            sum: string,
            payment_status: string,
            supportLink: mixed,
            paymentSystemIcons: list<mixed>,
            canCancelPaidMailPayment: bool,
            canCancelBalanceTransfer: bool,
            canCancelBalancePayout: bool,
            canCancelBalanceHold: bool,
            canFinishBalanceTransfer: bool,
            canFinishBalancePayout: bool,
            canFinishBalanceHold: bool,
            label: array{
                title: string,
            },
            merchant: array{
                merchant_id: int,
                name: string,
                user_id: int,
                created_date: int,
                secret_key: string,
                avatar_data: string,
                url: string,
            },
            user: array{
                user_id: int,
                user_balance: string,
                user_hold: string,
                user_balance_with_hold: float,
            },
        },
    },
    perPage: string,
    page: int,
    pageNavLink: string,
    pageNavParams: array{
        type: string,
        startDate: string,
        endDate: string,
    },
    periodLabel: string,
    periodLabelPhrase: string,
    filterDatesDefault: bool,
    input: array{
        user_id: int,
        type: string,
        startDate: string,
        endDate: string,
        page: int,
        period_label: string,
        receiver: string,
        sender: string,
        comment: string,
        pmin: string,
        pmax: string,
        category_id: int,
        wallet: string,
        is_hold: bool,
        currency: string,
        operation_id_lt: int,
    },
    paymentStats: mixed,
    hasNextPage: bool,
    lastOperationId: int,
    nextPageHref: string,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function history(array $params = []): array
    {
        return $this->http->request('GET', '/user/payments', $params);
    }

    /**
     * @return array{
    systems: list<array{
        system: string,
        commission: string,
        min: int,
        max: int,
        instant_payout: bool,
        problematic_payout: bool,
        is_unavailable: bool,
        p2p: bool,
        has_wallet: bool,
        providers: array{
            BEP20: array{
                title: string,
                isUnavailable: bool,
            },
            TRC20: array{
                title: string,
                isUnavailable: bool,
            },
            ERC20: array{
                title: string,
                isUnavailable: bool,
            },
            TRX: array{
                title: string,
                isUnavailable: bool,
            },
            BTC: array{
                title: string,
                isUnavailable: bool,
            },
            TON: array{
                title: string,
                isUnavailable: bool,
            },
            ETH: array{
                title: string,
                isUnavailable: bool,
            },
            LTC: array{
                title: string,
                isUnavailable: bool,
            },
            BNB: array{
                title: string,
                isUnavailable: bool,
            },
            DASH: array{
                title: string,
                isUnavailable: bool,
            },
            DOGE: array{
                title: string,
                isUnavailable: bool,
            },
            XMR: array{
                title: string,
                isUnavailable: bool,
            },
            SOL: array{
                title: string,
                isUnavailable: bool,
            },
            BCH: array{
                title: string,
                isUnavailable: bool,
            },
        },
    }>,
    system_info: array{
        visitor_id: int,
        time: int,
        log_id: int,
    },
}
     */
    public function payoutServices(): array
    {
        return $this->http->request('GET', '/balance/payout/services');
    }

    /**
     * @param array{payment_system: string, wallet: string, amount: float, currency: 'rub'|'uah'|'kzt'|'byn'|'usd'|'eur'|'gbp'|'cny'|'try'|'jpy'|'brl', include_fee?: bool, extra?: array{
    provider?: string,
}} $body
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
    public function payout(array $body = []): array
    {
        return $this->http->request('POST', '/balance/payout', [], $body);
    }
}
