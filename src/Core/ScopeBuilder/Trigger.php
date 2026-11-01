<?php declare(strict_types=1);

namespace Silent\Core\ScopeBuilder;

final class Trigger
{
    /**
     * @param class-string|null $class
     */
    public function __construct(
        public readonly TriggerPhase $phase,
        public readonly ?string $class = null,
    ) {}
}