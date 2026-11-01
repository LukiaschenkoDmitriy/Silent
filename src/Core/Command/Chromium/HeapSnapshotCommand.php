<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium;

use Override;
use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

class HeapSnapshotCommand extends W3CSessionCommand {
    public function __construct(#[Ignore] private string $filePath,  ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/chromium/heap_snapshot", $this->sessionId);
    }

    public function transformResult(array $data): mixed
    {
        file_put_contents($this->filePath, $data["value"]);

        return $this->filePath;
    }
}