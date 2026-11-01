<?php declare(strict_types=1);

namespace Silent\Core\WebDriver\Events;

use Silent\Core\DTO\Session\Session;
use Silent\Core\WebDriver\WebDriverInterface;

class AfterCreateSessionEvent {
    public function __construct(
        public Session $session,
        public WebDriverInterface $webdriver
    ) {}
}