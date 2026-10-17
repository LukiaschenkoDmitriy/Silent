<?php declare(strict_types=1);

namespace Silent\Core\DTO\Element;

enum FindStrategy: string {
    case CSS_SELECTOR = "css selector";
    case TEXT = "link text";
    case PARTIAL_TEXT = "partial link text";
    case TAG = "tag name";
    case XPATH = "xpath";
}