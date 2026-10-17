<?php declare(strict_types=1);

namespace Silent\Core\WebDriver;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Session\Session;

interface WebDriverSessionInterface {
    public function getSession(): Session;
    public function closeSession(): void;
    public static function createSession(Capabilities $capabilities, ?string $url): WebDriver;
    public static function createFromSession(Session $session, ?string $url): WebDriver;
    public static function createFromSessionId(string $sessionId, ?string $url): WebDriver;
    public static function createSessionWithMinimalCapabilities(?string $url = null): WebDriver;
    public static function cloaseSessionById(string $sessionId, ?string $url): void;
    public static function getFirstSession(?string $url = null): ?WebDriver;
    public static function getSessions(?string $url = null): array;
    public static function closeAllSessions(?string $url = null): void;
}