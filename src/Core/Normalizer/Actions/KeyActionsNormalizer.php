<?php declare(strict_types=1);

namespace Silent\Core\Normalizer\Actions;

use ArrayObject;
use Override;
use Silent\Core\DTO\Actions\Enum\KeyType;
use Silent\Core\DTO\Actions\Key\KeyActions;
use Silent\Core\DTO\Actions\Key\KeyEvent;
use Silent\Core\DTO\Actions\Pause;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class KeyActionsNormalizer implements NormalizerInterface, DenormalizerInterface {
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type == KeyActions::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof KeyActions;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [KeyActions::class => true];
    }

    /**
     * Summary of normalize
     * @param KeyActions $data
     * @param mixed $format
     * @param array $context
     */
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
    {
        $actions = [];
        $actions["id"] = $data->id;
        $actions["actions"] = [];
        $actions["type"] = KeyActions::TYPE->value;
        
        foreach ($data->actions as $action) {
            if ($action::class == KeyEvent::class) {
                $actions["actions"][] = ["type" => $action->type->value, "value" => $action->value];
            } else {
                $actions["actions"][] = ["type" => Pause::TYPE, "duration" => $action->duration];
            }
        }

        return $actions;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $actions = [];

        foreach ($data["actions"] as $action) {
            if ($action["type"] == KeyType::KEY_UP->value || $action["type"] == KeyType::KEY_DOWN->value) {
                $actions[] = new KeyEvent(KeyType::from($action["type"]), $action["value"]);
            } else {
                $actions[] = new Pause($action["duration"]);
            }
        }

        return new KeyActions($data["id"], $actions);
    }
}