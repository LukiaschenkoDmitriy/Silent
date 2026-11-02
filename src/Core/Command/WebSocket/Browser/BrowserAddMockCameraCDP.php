<?php declare(strict_types=1);

namespace Silent\Core\Command\WebSocket\Browser;

use Silent\Core\Command\CDP\CDPCommand;

class BrowserAddMockCameraCDP extends CDPCommand {
    public function __construct(
        public string $deviceId,
    ) {}
    
    public function command(): string
    {
        return "Browser.addMockCamera";
    }

    public function webSocketCommand(): bool
    {
        return true;
    }
}