<?php declare(strict_types=1);

namespace Silent\Core\Normalizer\Actions;

final class ActionsNormalizer {
    public static function getActionsNormalizers(): array
    {
        return [
            new KeyActionsNormalizer(),
            new PointerActionsNormalizer(),
            new ScrollActionsNormalizer()
        ];
    }
}