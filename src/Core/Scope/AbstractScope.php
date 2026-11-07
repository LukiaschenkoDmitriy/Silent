<?php declare(strict_types=1);

namespace Silent\Core\Scope;

use Silent\Core\HttpExecutor\HttpExecutorInterface;
use Silent\Core\WebDriver\WebDriverInterface;

abstract class AbstractScope {
    protected HttpExecutorInterface $e;
    protected string $s;
    public function __construct(
        WebDriverInterface $webdriver
    ) {
        $this->e = $webdriver->getExecutor();
        $this->s = $webdriver->getSession()->sessionId;
    }

    public function getExecutor(): HttpExecutorInterface
    {
        return $this->e;
    }

    public function getSessionId(): string
    {
        return $this->s;
    }
}