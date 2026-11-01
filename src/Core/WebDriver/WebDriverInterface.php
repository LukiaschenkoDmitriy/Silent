<?php declare(strict_types=1);

namespace Silent\Core\WebDriver;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\HttpExecutor\HttpExecutorProviderInterface;

interface WebDriverInterface extends HttpExecutorProviderInterface, WebDriverSessionInterface {
    public function getCapabilitites(): ?Capabilities;
    public function init(): WebDriverInterface;
}