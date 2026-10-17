<?php declare(strict_types=1);

namespace Silent\Core\DTO\Window;

enum WindowType: string {
    case TAB = "tab";
    case WINDOW = "window";
}