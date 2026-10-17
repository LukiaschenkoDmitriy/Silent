<?php declare(strict_types=1);

namespace Silent\Core\DTO\Status;

use Symfony\Component\Serializer\Attribute\SerializedName;

final class Stereotype {
    public string $browserName;
    public string $browserVersion;
    #[SerializedName("container:hostname")]
    public string $containerHostname;
    #[SerializedName("goog:chromeOptions")]
    public GoogChromeOptions $googChromeOptions;
    public string $platformName;
    #[SerializedName("se:containerName")]
    public string $seContainerName;
    #[SerializedName("se:deleteSessionOnUi")]
    public bool $seDeleteSessionOnUi;
    #[SerializedName("se:downloadsEnabled")]
    public bool $seDownloadsEnabled;
    #[SerializedName("se:noVncPort")]
    public int $seNoVncPort;
    
}