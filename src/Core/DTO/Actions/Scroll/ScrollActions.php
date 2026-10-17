<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Scroll;

use Silent\Core\DTO\Actions\Enum\InputSourceType;

final class ScrollActions {
    public const TYPE = InputSourceType::WHEEL;
    public function __construct(
        public string $id,
        public array $actions
    ) {}
}