<?php declare(strict_types=1);

namespace Silent\Core\WebSocket;

use Silent\Core\Command\CDP\CDPCommandInterface;

interface WebSocketProviderInterface {
    public function executeWS(CDPCommandInterface $command): mixed;
}