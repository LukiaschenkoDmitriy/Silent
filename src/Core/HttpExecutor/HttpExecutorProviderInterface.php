<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor;

use Silent\Core\Command\Scope\W3C\W3CScope;
use Silent\Core\Command\W3C\W3CCommandInterface;

interface HttpExecutorProviderInterface  {
    public static function setHub(string $hub): void;
    public function executeW3C(W3CCommandInterface $w3CCommand): mixed;
    public function getExecutor(): HttpExecutorInterface;
    public function scope(): W3CScope;
}