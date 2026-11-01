<?php declare(strict_types=1);

namespace Silent\Core\ScopeBuilder;

enum TriggerPhase
{
    case Before;

    case After;

    case Event;
}