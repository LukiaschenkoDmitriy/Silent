<?php declare(strict_types=1);

namespace Silent\Core\Setup\Events;

use Symfony\Contracts\EventDispatcher\Event;

class ModuleRegisterEvent extends Event {
    public function __construct(
        public string $moduleClass,
        public ?object $module
    ) {}

    public function skipModule(): void
    {
        $this->module = null;
    }
}