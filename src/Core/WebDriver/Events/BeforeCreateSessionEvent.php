<?php declare(strict_types=1);

namespace Silent\Core\WebDriver\Events;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;

class BeforeCreateSessionEvent {
    public function __construct(
        public Capabilities $capabilities,
        public ChromeOptions $chromeOptions
    ) {}
}