<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C;

use Silent\Core\Command\CommandInterface;

interface W3CCommandInterface extends CommandInterface {
    public CONST GET_METHOD = "GET";
    public CONST POST_METHOD = "POST";
    public CONST DELETE_METHOD = "DELETE";
    public function method(): string;
    public function url(): string;
    public function skipNullValue(): bool;
}