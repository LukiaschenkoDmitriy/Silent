<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities;

final class Timeouts {
    public function __construct(
        public ?int $script = null,
        public int $pageLoad = 300000,
        public int $implicit = 0
    ) {}
}