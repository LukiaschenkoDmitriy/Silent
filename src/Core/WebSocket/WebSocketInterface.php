<?php declare(strict_types=1);

namespace Silent\Core\WebSocket;

use Silent\Core\CDPExecutor\CDPExecutorInterface;

interface WebSocketInterface extends CDPExecutorInterface {
    public function close(): void;
}