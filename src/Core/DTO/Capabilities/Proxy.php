<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities;

use Silent\Core\DTO\Capabilities\Enum\ProxyType;

final class Proxy {
    public function __construct(
        public ?ProxyType $proxyType = null,
        public ?string $proxyAutoconfigUrl = null,
        public ?string $httpProxy = null,
        public ?string $sslProxy = null,
        public ?string $ftpProxy = null,
        public ?string $socksProxy = null,
        public ?int $socksVersion = null,
        public null|array|string $noProxy = null
    ) {}
    
}