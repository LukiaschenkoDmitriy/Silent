<?php declare(strict_types=1);

namespace Silent\Core\DTO\Cookie;

final class Cookie {
    public function __construct(
        public ?string $name,
        public ?string $value,
        public ?string $path = null,
        public ?string $domain = null,
        public ?bool $secure = null,
        public ?bool $httpOnly = null,
        public ?int $expiry = null,
        public ?string $sameSite = null
    ) {}
}