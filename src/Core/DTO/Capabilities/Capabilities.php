<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities;

final class Capabilities {
    public function __construct(
        public ?CapabilityMatch $alwaysMatch,
        /**
         * @var array<CapabilityMatch> $alwaysMatch
         * @param CapabilityMatch[] $alwaysMatch
         */
    ) {}
}