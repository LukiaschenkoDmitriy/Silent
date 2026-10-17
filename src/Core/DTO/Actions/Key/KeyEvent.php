<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Key;

use Silent\Core\DTO\Actions\Enum\KeyType;

final class KeyEvent {
    public function __construct(
        public KeyType $type,
        public string $value
    ) {}
}