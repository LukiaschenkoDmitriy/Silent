<?php declare(strict_types=1);

namespace Silent\Core\EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcher;

final class SEventDispatcher extends EventDispatcher {
    public function registerSubscribers(iterable $subscribers) {
        foreach ($subscribers as $subscriber) {
            $this->addSubscriber($subscriber);
        }
    }
}