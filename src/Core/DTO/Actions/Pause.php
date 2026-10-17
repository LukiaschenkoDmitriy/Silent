<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions;

final class Pause {
    public const TYPE = "pause";
    public function __construct(
        public int $duration
    ) {}
}