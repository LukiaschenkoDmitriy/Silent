<?php declare(strict_types=1);

namespace Silent\Core\DTO\Location;

use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Validator\Constraints\Range;

class Location {
    public function __construct(
        #[Range(min: -90, max: 90, notInRangeMessage: 'Invalid latitude. The value must be between {{ min }} and {{ max }}. Your latitude is {{ value }}.')]
        public float $latitude,
        #[Range(min: -180, max: 180, notInRangeMessage: 'Invalid longitude. The value must be between {{ min }} and {{ max }}. Your longitude is {{ value }}.')]
        public float $longitude,
        #[PositiveOrZero]
        public float $accuracy  = 100,
    ) {}
}