<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Enum;

enum PromptBehavior: string {
    case DISMISS = "dismiss";
    case ACCEPT = "accept";
    case DISMISS_AND_NOTIFY = "dismiss and notify";
    case ACCEPT_AND_NOTIFY = "accept and notify";
    case IGNORE = "ignore";
}