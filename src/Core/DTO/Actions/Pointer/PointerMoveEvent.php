<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Pointer;

use Silent\Core\DTO\Actions\Enum\OriginType;
use Silent\Core\DTO\Actions\Enum\PointerActionType;

final class PointerMoveEvent {
    public const TYPE = PointerActionType::POINTER_MOVE;
    public function __construct(
        public int $x,
        public int $y,
        public OriginType $origin,
        public ?int $duration = null
    ) {}
}