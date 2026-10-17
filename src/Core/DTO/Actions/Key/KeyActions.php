<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Key;

use Silent\Core\DTO\Actions\Enum\InputSourceType;

final class KeyActions {
    public const TYPE = InputSourceType::KEY;
    public function __construct(
        public string $id,
        public array $actions,
    ) {}
}