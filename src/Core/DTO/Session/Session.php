<?php declare(strict_types=1);

namespace Silent\Core\DTO\Session;

final class Session {
    public function __construct(
        public ?Capabilities $capabilities = null,
        public ?string $sessionId = null,
    ) {}
}