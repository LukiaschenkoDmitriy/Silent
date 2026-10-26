<?php declare(strict_types=1);

namespace Silent\Core\EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcher;

final class SEventDispatcher extends EventDispatcher {
    public function __construct(iterable $subscribers)
    {
        parent::__construct();

        foreach ($subscribers as $subscriber) {
            $this->addSubscriber($subscriber);
        }
    }
}