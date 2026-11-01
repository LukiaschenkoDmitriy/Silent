<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\Network;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Network\NetworkConditions;
use Silent\Core\DTO\Network\NetworkPreset;
use Symfony\Component\Serializer\Attribute\Ignore;

class SetNetworkConditionsCommand extends W3CSessionCommand {
    public function __construct(#[Ignore] private NetworkConditions|NetworkPreset $network,?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/chromium/network_conditions", $this->sessionId);
    }

    public function transformParams(array $params): mixed
    {
        if ($this->network instanceof NetworkConditions) {
            return [
                "network_conditions" => [
                    "offline" => $this->network->offline,
                    "latency" => $this->network->latency,
                    "download_throughput" => $this->network->downloadThroughput,
                    "upload_throughput" => $this->network->uploadThroughput
                ]
            ];
        } else {
            return [
                "network_name" => $this->network->value
            ];
        }
    }
}