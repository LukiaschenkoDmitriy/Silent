<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Events;

use Silent\Core\Command\W3C\W3CCommandInterface;
use Symfony\Contracts\EventDispatcher\Event;

class W3CommandEvent extends Event {
    public function __construct(
        public W3CCommandInterface $command,
        public mixed $params
    ) {}
}