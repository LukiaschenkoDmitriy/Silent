<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C;

use Silent\Core\Command\Command;
use Silent\Core\Command\W3C\Document\GetTitleCommand;

abstract class W3CCommand extends Command implements W3CCommandInterface {
    public const DOCUMENT_GET_TITLE = GetTitleCommand::class;

    public function transformResult(array $data): mixed
    {
        return $data["value"];
    }

    public function transformParams(array $params): mixed
    {
        return $params;
    }

    public function skipNullValue(): bool
    {
        return true;
    }
}