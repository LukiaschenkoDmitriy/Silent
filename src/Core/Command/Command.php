<?php declare(strict_types=1);

namespace Silent\Core\Command;

abstract class Command implements CommandInterface {
    public function result(): ?string
    {
        return null;
    }
}