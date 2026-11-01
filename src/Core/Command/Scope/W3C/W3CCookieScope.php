<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\Command\W3C\Cookie\AddCookieCommand;
use Silent\Core\Command\W3C\Cookie\DeleteAllCookiesCommand;
use Silent\Core\Command\W3C\Cookie\DeleteCookieCommand;
use Silent\Core\Command\W3C\Cookie\GetCookieCommand;
use Silent\Core\Command\W3C\Cookie\GetCookiesCommand;
use Silent\Core\DTO\Cookie\Cookie;

class W3CCookieScope extends AbstractW3CScope {
    public function add(Cookie $cookie): void
    {
        $this->e->execute(new AddCookieCommand($cookie, $this->s));
    }

    public function delete(string $cookieName): void
    {
        $this->e->execute(new DeleteCookieCommand($cookieName, $this->s));
    }

    public function get(string $cookieName): Cookie
    {
        return $this->e->execute(new GetCookieCommand($cookieName, $this->s));
    }

    /**
     * Summary of all
     * @return array<Cookie>
     */
    public function all(): array
    {
        return $this->e->execute(new GetCookiesCommand($this->s));
    }

    public function clear(): void
    {
        $this->e->execute(new DeleteAllCookiesCommand($this->s));
    }
}