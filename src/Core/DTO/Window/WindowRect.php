<?php declare(strict_types=1);

namespace Silent\Core\DTO\Window;

final class WindowRect {
    public function __construct(
        public ?int $x = null,
        public ?int $y = null,
        public ?int $width = null,
        public ?int $height = null
    ) {}
}