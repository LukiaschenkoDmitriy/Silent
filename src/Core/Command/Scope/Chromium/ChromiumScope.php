<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\Chromium;

use Silent\Core\CDPExecutor\CDPExecutorInterface;
use Silent\Core\Command\Chromium\HeapSnapshotCommand;
use Silent\Core\Command\Scope\AbstractScope;
use Silent\Core\HttpExecutor\HttpExecutorInterface;

class ChromiumScope extends AbstractScope {
    public ChromiumCastScope $cast;
    public ChromiumCDPScope $cdp;
    public ChromiumNetworkScope $network;
    public ChromiumPageScope $page;
    public function __construct(private CDPExecutorInterface $cdpExecutor, HttpExecutorInterface $e, string $s)
    {
        parent::__construct($e, $s);

        $this->cast = new ChromiumCastScope($e, $s);
        $this->cdp = new ChromiumCDPScope($cdpExecutor);
        $this->network = new ChromiumNetworkScope($e, $s);
        $this->page = new ChromiumPageScope($e, $s);
    }

    public function heapSnapshot(string $filepath) {
        $this->e->execute(new HeapSnapshotCommand($filepath, $this->s));
    }
}