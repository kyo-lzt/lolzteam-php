<?php

// Auto-generated. Do not edit manually.

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Runtime\ClientConfig;
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\RetryConfig;

final class MarketClient
{
    public readonly CategoryApi $category;
    public readonly ListApi $list;
    public readonly ManagingApi $managing;
    public readonly ProfileApi $profile;
    public readonly CartApi $cart;
    public readonly PurchasingApi $purchasing;
    public readonly CustomDiscountsApi $customDiscounts;
    public readonly PublishingApi $publishing;
    public readonly PaymentsApi $payments;
    public readonly AutoPaymentsApi $autoPayments;
    public readonly ProxyApi $proxy;
    public readonly ImapApi $imap;
    public readonly BatchApi $batch;

    public function __construct(
        string $token,
        ?string $proxy = null,
        ?RetryConfig $retry = null,
    ) {
        $config = new ClientConfig(
            token: $token,
            baseUrl: 'https://api.lzt.market',
            proxy: $proxy,
            retry: $retry ?? new RetryConfig(),
            requestsPerMinute: 120,
        );
        $http = new HttpClient($config);
        $this->category = new CategoryApi($http);
        $this->list = new ListApi($http);
        $this->managing = new ManagingApi($http);
        $this->profile = new ProfileApi($http);
        $this->cart = new CartApi($http);
        $this->purchasing = new PurchasingApi($http);
        $this->customDiscounts = new CustomDiscountsApi($http);
        $this->publishing = new PublishingApi($http);
        $this->payments = new PaymentsApi($http);
        $this->autoPayments = new AutoPaymentsApi($http);
        $this->proxy = new ProxyApi($http);
        $this->imap = new ImapApi($http);
        $this->batch = new BatchApi($http);
    }
}
