<?php declare(strict_types=1);

namespace Silent\Core\Normalizer\Actions;

use ArrayObject;
use Override;
use Silent\Core\DTO\Actions\Enum\ButtonType;
use Silent\Core\DTO\Actions\Enum\OriginType;
use Silent\Core\DTO\Actions\Enum\PointerType;
use Silent\Core\DTO\Actions\Pause;
use Silent\Core\DTO\Actions\Pointer\PointerActions;
use Silent\Core\DTO\Actions\Pointer\PointerCancelEvent;
use Silent\Core\DTO\Actions\Pointer\PointerDownEvent;
use Silent\Core\DTO\Actions\Pointer\PointerMoveEvent;
use Silent\Core\DTO\Actions\Pointer\PointerParameters;
use Silent\Core\DTO\Actions\Pointer\PointerUpEvent;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class PointerActionsNormalizer implements NormalizerInterface, DenormalizerInterface {
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof PointerActions;
    }

    /**
     * Summary of normalize
     * @param PointerActions $data
     * @param mixed $format
     * @param array $context
     */
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
    {
        $actions = [];

        $actions["id"] = $data->id;
        $actions["parameters"] = $this->normalizePoitnerActionsParamameters($data->parameters);
        $actions["actions"] = [];
        $actions["type"] = PointerActions::TYPE->value;

        foreach ($data->actions as $action) {
            $actions["actions"][] = $this->resolveAndNormalizeActions($action);
        }

        return $actions;
    }

    private function normalizePoitnerActionsParamameters(PointerParameters $parameters): array
    {
        return [
            "pointerType" => $parameters->pointerType->value
        ];
    }

    private function resolveAndNormalizeActions(mixed $action): array
    {
        return match ($action::class) {
            PointerCancelEvent::class => ["type" => PointerCancelEvent::TYPE->value],
            PointerDownEvent::class => ["type" => PointerDownEvent::TYPE->value, "button" => $action->button->value],
            PointerUpEvent::class => ["type" => PointerUpEvent::TYPE->value, "button" => $action->button->value],
            PointerMoveEvent::class => array_merge([
                "type" => PointerMoveEvent::TYPE->value,
                "x" => $action->x,
                "y" => $action->y,
                "origin" => $action->origin->value,
            ], $action->duration ? ["duration" => $action->duration] : []),
            default => ["type" => Pause::TYPE, "duration" => $action->duration ]
        };
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type == PointerActions::class;
    }

    /**
     * Summary of denormalize
     * @param array $data
     * @param string $type
     * @param mixed $format
     * @param array $context
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $actions = [];
        foreach ($data["actions"] as $action) {
            $actions[] = $this->resolveAndDenormalizeActions($action);
        }

        return new PointerActions($data["id"], $this->denormalizePointerParameters($data["parameters"]), $actions);
    }

    private function denormalizePointerParameters(array $parameters): PointerParameters
    {
        return new PointerParameters(PointerType::from($parameters["pointerType"]));
    }

    private function resolveAndDenormalizeActions(array $action): mixed
    {
        return match ($action["type"]) {
            PointerCancelEvent::TYPE->value => new PointerCancelEvent(),
            PointerUpEvent::TYPE->value => new PointerUpEvent(ButtonType::from($action["button"])),
            PointerDownEvent::TYPE->value => new PointerDownEvent(ButtonType::from($action["button"])),
            PointerMoveEvent::TYPE->value => new PointerMoveEvent(
                $action["x"], 
                $action["y"], 
                OriginType::from($action["origin"]),
                in_array("duration", array_keys($action)) ? $action["duration"] : null
            ),
            default => new Pause($action["duration"])
        };
    }

    public function getSupportedTypes(?string $format): array
    {
        return [PointerActions::class => true];
    }
}