<?php declare(strict_types=1);

namespace Silent\Core\DTO\Status;

use Silent\Core\DTO\Session\Session;

final class Slot {
    public Id $id;
    public string $lastStarted;
    public ?Session $session;
    public Stereotype $stereotype;
}