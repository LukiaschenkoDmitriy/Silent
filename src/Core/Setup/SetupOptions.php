<?php declare(strict_types=1);

namespace Silent\Core\WebDriverSetup;

#[\Attribute(\Attribute::TARGET_CLASS)]
final class SetupOptions {
    public const GET_EXISTED_SESSION_OR_CREATE = 1;
    public const ONLY_GET_EXISTED = 4;
    public function __construct(public int $flags = SetupOptions::GET_EXISTED_SESSION_OR_CREATE) {}
}