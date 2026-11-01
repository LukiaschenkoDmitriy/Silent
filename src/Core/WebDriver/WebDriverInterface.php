<?php declare(strict_types=1);

namespace Silent\Core\WebDriver;

use Silent\Core\CDPExecutor\CDPExecutorProviderInterface;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\HttpExecutor\HttpExecutorProviderInterface;
use Silent\Core\ScopeBuilder\ScopeBuilder;
use Silent\Core\WebSocket\WebSocketProviderInterface;

interface WebDriverInterface extends HttpExecutorProviderInterface, WebDriverSessionInterface, CDPExecutorProviderInterface, WebSocketProviderInterface {
    public function getCapabilitites(): ?Capabilities;
    public function builder(): ScopeBuilder;
    public function init(): WebDriverInterface;
}