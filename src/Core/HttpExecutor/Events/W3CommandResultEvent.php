<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor\Events;

use Silent\Core\Command\W3C\W3CCommandInterface;
use Symfony\Contracts\EventDispatcher\Event;

class W3CommandResultEvent extends Event {
    public function __construct(
        public W3CCommandInterface $command,
        public mixed $result
    ) {}
}