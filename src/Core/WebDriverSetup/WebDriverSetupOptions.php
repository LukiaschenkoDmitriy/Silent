<?php declare(strict_types=1);

namespace Silent\Core\WebDriverSetup;

final class WebDriverSetupOptions {
    public function __construct(
        public bool $getFirstIfExists = true
    ) {}
}