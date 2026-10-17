<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C;

use Silent\Core\Command\W3C\W3CCommand;
use Silent\Core\DTO\Status\Status;

final class StatusCommand extends W3CCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return "/status";
    }

    public function result(): string
    {
        return Status::class;
    }
}