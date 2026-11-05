<?php declare(strict_types=1);

namespace Silent\Core\Command;

use Throwable;

class CommandException extends \Exception {
    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        return parent::__construct($message, $code, $previous);
    }
}