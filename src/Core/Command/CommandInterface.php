<?php declare(strict_types=1);

namespace Silent\Core\Command;

interface CommandInterface {
    public function result(): ?string;
    public function transformResult(array $data): mixed;
    public function transformParams(array $params): mixed;
}