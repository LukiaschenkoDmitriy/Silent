<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\HttpExecutor\HttpExecutorInterface;

abstract class AbstractW3CScope {
    public function __construct(
        protected HttpExecutorInterface $e,
        protected string $s
    ) {}
}