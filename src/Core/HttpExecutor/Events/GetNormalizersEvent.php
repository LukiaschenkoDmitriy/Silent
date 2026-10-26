<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor\Events;

use Symfony\Contracts\EventDispatcher\Event;

class GetNormalizersEvent extends Event {
    public function __construct(
        public string $executorClass,
        public array $normalizers
    ) {}
}