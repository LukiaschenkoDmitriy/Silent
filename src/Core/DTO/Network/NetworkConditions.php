<?php declare(strict_types=1);

namespace Silent\Core\DTO\Network;

use Symfony\Component\Serializer\Attribute\SerializedName;

class NetworkConditions
{
    public function __construct(
        public float $latency,
        #[SerializedName("download_throughput")] public float $downloadThroughput,
        #[SerializedName("upload_throughput")] public float $uploadThroughput,
        public bool $offline = false
    ) {}
}