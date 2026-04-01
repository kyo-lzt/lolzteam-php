<?php

declare(strict_types=1);

namespace Lolzteam\Runtime;

final readonly class ProxyConfig
{
    public string $url;

    public function __construct(
        string $url,
    ) {
        $parsed = parse_url($url);
        if ($parsed === false) {
            throw new \InvalidArgumentException('invalid proxy URL');
        }
        $scheme = $parsed['scheme'] ?? null;
        if ($scheme === null || !in_array($scheme, ['http', 'https', 'socks5'], true)) {
            throw new \InvalidArgumentException('unsupported proxy scheme: ' . ($scheme ?? '<none>'));
        }
        if (empty($parsed['host'])) {
            throw new \InvalidArgumentException('proxy URL has no host');
        }
        $this->url = $url;
    }
}
