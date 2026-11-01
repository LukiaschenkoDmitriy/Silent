<?php declare(strict_types=1);

namespace Silent\Core\DTO\Location;

class Location {
    public function __construct(
        public float $latitude,
        public float $longitude,
        public float $accuracy  = 100,
    ) {}
}