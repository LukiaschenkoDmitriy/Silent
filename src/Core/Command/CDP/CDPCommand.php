<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP;

abstract class CDPCommand implements CDPCommandInterface {
    public function transformParams(array $params): mixed
    {
        return $params;
    }

    public function transformResult(array $data): mixed
    {
        return $data;
    }

    public function result(): ?string
    {
        return null;
    }

    public function webSocketCommand(): bool
    {
        return false;
    }
}