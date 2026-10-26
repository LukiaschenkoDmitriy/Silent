<?php declare(strict_types=1);

namespace Silent\Core\Normalizer\Actions;

use ArrayObject;
use Silent\Core\DTO\Actions\Enum\OriginType;
use Silent\Core\DTO\Actions\Pause;
use Silent\Core\DTO\Actions\Scroll\ScrollActions;
use Silent\Core\DTO\Actions\Scroll\ScrollEvent;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class ScrollActionsNormalizer implements NormalizerInterface, DenormalizerInterface {
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type == ScrollActions::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof ScrollActions;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [ScrollActions::class => true];
    }

    /**
     * Summary of normalize
     * @param ScrollActions $data
     * @param mixed $format
     * @param array $context
     */
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
    {
        $actions = [];

        $actions["id"] = $data->id;
        $actions["actions"] = [];
        $actions["type"] = ScrollActions::TYPE->value;
        foreach ($data->actions as $action) {
            if ($action instanceof ScrollEvent) {
                $actions["actions"][] = [
                    "type" => ScrollEvent::TYPE,
                    "x" => $action->x,
                    "y" => $action->y,
                    "deltaX" => $action->deltaX,
                    "deltaY" => $action->deltaY,
                    "origin" => $action->origin->value,
                    "duration" => $action->duration
                ];
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
            if ($action["type"] == ScrollEvent::TYPE) {
                $actions[] = new ScrollEvent(
                    $action["x"],
                    $action["y"],
                    $action["deltaX"],
                    $action["deltaY"],
                    OriginType::from($action["origin"]),
                    $action["duration"]
                );
            } else {
                $actions[] = new Pause($action["duration"]);
            }
        }

        return new ScrollActions($data["id"], $actions);
    }
}