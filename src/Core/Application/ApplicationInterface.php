<?php declare(strict_types=1);

namespace Silent\Core\Application;


interface ApplicationInterface {
    public function loadModules(): void;
    public function run(): void;
}