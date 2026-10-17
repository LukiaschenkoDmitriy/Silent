<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C;

use Override;
use Symfony\Component\Serializer\Attribute\Ignore;

abstract class W3CSessionCommand extends W3CCommand {
    public function __construct(#[Ignore] protected ?string $sessionId = null) { }
    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }
}