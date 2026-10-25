<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities;

use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\DTO\Capabilities\Enum\PageLoadStrategy;
use Silent\Core\DTO\Capabilities\Enum\PlatformName;
use Silent\Core\DTO\Capabilities\Enum\PromptBehavior;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class CapabilityMatch {
    public function __construct(
        public ?BrowserName $browserName = BrowserName::CHROME,
        #[SerializedName("goog:chromeOptions")] 
        public ?ChromeOptions $chromeOptions = new ChromeOptions(),
        public ?string $userAgent = null,
        public ?PageLoadStrategy $pageLoadStrategy = null,
        public ?Proxy $proxy = null,
        public ?string $browserVersion = null,
        public ?Timeouts $timeouts = null,
        public ?PromptBehavior $unhandledPromptBehavior = null,
        public ?bool $acceptInsecureCerts = null,
        public ?bool $strictFileInteractability = null,
        public ?bool $setWindowRect = null,
        public ?bool $webSocketUrl = null,
        public ?string $platformVersion = null,
        public ?PlatformName $platformName = null,
    ) { }
}