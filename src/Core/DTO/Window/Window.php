<?php declare(strict_types=1);

namespace Silent\Core\DTO\Window;

final class Window {
    public function __construct(
        public ?string $handle = null,
        public ?string $type = null
    ) {}
}