<?php declare(strict_types=1);

namespace Silent\Core\Scope;

use Silent\Core\HttpExecutor\HttpExecutorInterface;

abstract class AbstractScope {
    public function __construct(
        protected HttpExecutorInterface $e,
        protected string $s
    ) {}

    public function getExecutor(): HttpExecutorInterface
    {
        return $this->e;
    }

    public function getSessionId(): string
    {
        return $this->s;
    }
}