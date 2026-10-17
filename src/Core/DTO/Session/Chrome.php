<?php declare(strict_types=1);

namespace Silent\Core\DTO\Session;

final class Chrome {
    public function __construct(
        public ?string $chromedriverVersion = null,
        public ?string $userDataDir = null
    ) {}
}