<?php declare(strict_types=1);

namespace Silent\Core\DTO\Status;


final class Node {
    public OsInfo $osInfo;
    public int $maxSessions;
    public string $availability;
    public string $version;
    public int $sessionTimeout;
    public string $id;
    /**
     * @param Slot[] $slots
     * @var array<Slot> $slots
     */
    public array $slots;
    public int $heartbeatPeriod;
    public string $uri;
}