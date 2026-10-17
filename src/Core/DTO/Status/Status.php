<?php declare(strict_types=1);

namespace Silent\Core\DTO\Status;

final class Status {
    public bool $ready;
    public string $message;
    /**
     * @param Node $nodes
     * @var array<Node> $nodes
     */
    public array $nodes;
}