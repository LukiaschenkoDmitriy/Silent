<?php declare(strict_types=1);

namespace Silent\Core\DTO\CDP\Browser;

class BrowserVersion {
    public function __construct(
        public string $jsVersion,
        public string $product,
        public string $protocolVersion,
        public string $revision,
        public string $userAgent,
    ) {}
}