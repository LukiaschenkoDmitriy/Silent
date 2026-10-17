<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Session;

use Silent\Core\Command\W3C\W3CCommand;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Session\Session;

final class NewSessionCommand extends W3CCommand {
    public function __construct(public Capabilities $capabilities) {}
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return "/session";
    }

    public function result(): string
    {
        return Session::class;
    }
}