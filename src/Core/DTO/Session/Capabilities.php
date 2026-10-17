<?php declare(strict_types=1);

namespace Silent\Core\DTO\Session;

use Silent\Core\DTO\Capabilities\Timeouts;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class Capabilities {
    public function __construct(
        public ?bool $acceptInsecureCerts = null,
        public ?string $browserName = null,
        public ?string $browserVersion = null,
        public ?Chrome $chrome = null,
        #[SerializedName("fedcm:accounts")]
        public ?bool $fedcmAccounts = null,
        #[SerializedName("goog:chromeOptions")]
        public ?array $chromeOptions = null,
        #[SerializedName("goog:processID")]
        public ?int $googProcessId = null,
        public ?bool $networkConnectionEnabled = null,
        public ?string $pageLoadStrategy = null,
        public ?string $platformName = null,
        public ?array $proxy = null,
        #[SerializedName("se:bidiEnabled")]
        public ?bool $seBidiEnabled = null,
        #[SerializedName("se:cdp")]
        public ?string $seCdp = null,
        #[SerializedName("se:cdpVersion")]
        public ?string $seCdpVersion = null,
        #[SerializedName("se:containerName")]
        public ?string $seContainerName = null,
        #[SerializedName("se:deleteSessionOnUi")]
        public ?bool $seDeleteSessionOnUi = null,
        #[SerializedName("se:downloadsEnabled")]
        public ?bool $seDownloadsEnabled = null,
        #[SerializedName("se:noVncPort")]
        public ?int $seNoVncPort = null,
        #[SerializedName("se:vnc")]
        public ?string $seVnc = null,
        #[SerializedName("se:vncEnabled")]
        public ?bool $seVncEnabled = null,
        #[SerializedName("se:vncLocalAddress")]
        public ?string $seVncLocalAddress = null,
        public ?bool $setWindowRect = null,
        public ?Timeouts $timeouts = null,
        public ?string $unhandledPromptBehavior = null,
        #[SerializedName("webauthn:extension:cmtgKey")]
        public ?bool $webauthnExtensionCmtgKey = null,
        #[SerializedName("webauthn:extension:credBlob")]
        public ?bool $webauthnExtensionCredBlob = null,
        #[SerializedName("webauthn:extension:largeBlob")]
        public ?bool $webauthnExtensionLargeBlob = null,
        #[SerializedName("webauthn:extension:minPinLength")]
        public ?bool $webauthnExtensionMinPinLength = null,
        #[SerializedName("webauthn:extension:prf")]
        public ?bool $webauthnExtensionPrf = null,
        #[SerializedName("webauthn:virtualAuthenticators")]
        public ?bool $webauthnExtensionVirtualAuthenticator = null
    ) {}
}