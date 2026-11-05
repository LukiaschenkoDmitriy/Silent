<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Location\Exception;

use Silent\Core\Command\CommandException;
use Silent\Core\Command\W3C\Location\SetLocationCommand;

class LocationNotSetException extends CommandException {
    public function __construct()
    {
        parent::__construct(sprintf("Location is not set. Please set the location using the %s before using this command.", SetLocationCommand::class));
    }
}