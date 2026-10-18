<?php declare(strict_types=1);

namespace Silent\Core\Builder;

final class JsFileBuilder
{
    /**
     * @param array<string, mixed> $parameters
     */
    public function build(string $path, array $parameters = []): string
    {
        if (!is_file($path) || !is_readable($path)) {
            throw new \InvalidArgumentException("Template not found: $path");
        }

        $template = file_get_contents($path);

        return preg_replace_callback(
            '/\{\{\s*([\w.]+)\s*(?:\|\s*(json|raw))?\s*\}\}/',
            function (array $m) use ($parameters, $path): string {
                $value = $this->resolve($parameters, $m[1], $path);
                $filter = $m[2] ?? 'raw';

                if ($filter === 'json') {
                    return json_encode(
                        $value,
                        JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
                    );
                }

                return match (true) {
                    is_bool($value) => $value ? 'true' : 'false',
                    $value === null => 'null',
                    is_scalar($value), $value instanceof \Stringable => (string) $value,
                    default => throw new \InvalidArgumentException(
                        "Parameter '{$m[1]}' is not scalar, use {{ {$m[1]}|json }}"
                    ),
                };
            },
            $template
        );
    }

    private function resolve(array $parameters, string $key, string $path): mixed
    {
        $value = $parameters;

        foreach (explode('.', $key) as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                throw new \InvalidArgumentException("Missing parameter '$key' for template $path");
            }

            $value = $value[$segment];
        }

        return $value;
    }
}