<?php declare(strict_types=1);

namespace Silent\Core\DTO\Cast;

class CastSink {
    public function __construct(
        public string $id,
        public string $name
    ) {}
}