<?php

declare(strict_types=1);

/**
 * $ref resolution utilities for OpenAPI specs.
 */

/**
 * Follow a JSON pointer path like #/components/schemas/Foo.
 *
 * @param array<string, mixed> $spec
 */
function resolveRef(string $ref, array $spec): mixed
{
    $parts = explode('/', ltrim($ref, '#/'));
    $current = $spec;

    foreach ($parts as $part) {
        if (!is_array($current) || !array_key_exists($part, $current)) {
            return null;
        }
        $current = $current[$part];
    }

    return $current;
}

function isRefObject(mixed $value): bool
{
    return is_array($value) && isset($value['$ref']) && is_string($value['$ref']);
}

/**
 * Recursively resolve all $ref pointers in a value.
 *
 * @param array<string, mixed> $spec
 * @param array<string, bool> $visited
 */
function deref(mixed $value, array $spec, array $visited = []): mixed
{
    if (isRefObject($value)) {
        /** @var string $ref */
        $ref = $value['$ref'];
        if (isset($visited[$ref])) {
            return [];
        }
        $visited[$ref] = true;
        $resolved = resolveRef($ref, $spec);
        return deref($resolved, $spec, $visited);
    }

    if (is_array($value)) {
        // Check if sequential array
        if (array_is_list($value)) {
            return array_map(fn(mixed $item) => deref($item, $spec, $visited), $value);
        }
        $result = [];
        foreach ($value as $key => $val) {
            $result[$key] = deref($val, $spec, $visited);
        }
        return $result;
    }

    return $value;
}

/**
 * Shallow $ref resolution — only resolves the top-level ref.
 *
 * @param array<string, mixed> $spec
 */
function derefShallow(mixed $value, array $spec): mixed
{
    if (isRefObject($value)) {
        /** @var string $ref */
        $ref = $value['$ref'];
        $resolved = resolveRef($ref, $spec);
        if (isRefObject($resolved)) {
            return derefShallow($resolved, $spec);
        }
        return $resolved;
    }
    return $value;
}
