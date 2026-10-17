<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor;

final class HttpExecutorException extends \Exception {
    public function __construct(string $message, string $error)
    {
        return parent::__construct(sprintf("%s\n\n%s;\n\n", $error, $message));
    }
}