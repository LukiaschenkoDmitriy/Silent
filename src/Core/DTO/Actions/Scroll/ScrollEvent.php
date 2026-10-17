<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Scroll;

use Silent\Core\DTO\Actions\Enum\OriginType;

final class ScrollEvent {
    public const TYPE = "scroll";
    public function __construct(
        public int $x,
        public int $y,
        public int $deltaX,
        public int $deltaY,
        public OriginType $origin,
        public int $duration
    ) {}
}