<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Exception;

use Silent\Core\Command\CommandException;

class NotFoundElementException extends CommandException {
    public function __construct(string $selector)
    {
        parent::__construct(sprintf("Failed to find an element with the given selector: %s", $selector));
    }
}