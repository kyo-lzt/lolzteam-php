<?php

declare(strict_types=1);

/**
 * Naming conventions: operationId parsing, group/class/file name generation.
 */

function lowercaseFirst(string $s): string
{
    if ($s === '') {
        return $s;
    }
    return lcfirst($s);
}

function capitalizeFirst(string $s): string
{
    if ($s === '') {
        return $s;
    }
    return ucfirst($s);
}

/**
 * Extract group name from operationId: first segment, lowercased first char.
 * E.g. "Threads.List" -> "threads"
 */
function operationIdToGroup(string $operationId): string
{
    $parts = explode('.', $operationId);
    $first = $parts[0] ?? $operationId;
    return lowercaseFirst($first);
}

/**
 * Extract method name from operationId: everything after the first dot, camelCased.
 * E.g. "Users.SA.Reset" -> "saReset"
 */
function operationIdToMethod(string $operationId): string
{
    $parts = explode('.', $operationId);
    if (count($parts) < 2) {
        return lowercaseFirst($operationId);
    }
    $rest = array_slice($parts, 1);
    $result = '';
    foreach ($rest as $i => $part) {
        $result .= $i === 0 ? lowercaseFirst($part) : capitalizeFirst($part);
    }
    return $result;
}

/**
 * Convert group name to PascalCase + "Api" class name.
 * E.g. "threads" -> "ThreadsApi", "profilePosts" -> "ProfilePostsApi"
 */
function groupToClassName(string $group): string
{
    return capitalizeFirst($group) . 'Api';
}

/**
 * Convert group name to camelCase property name.
 * E.g. "threads" -> "threads", "profilePosts" -> "profilePosts"
 */
function groupToPropertyName(string $group): string
{
    return lowercaseFirst($group);
}

/**
 * Convert group name to PascalCase file name (for PHP class files).
 * E.g. "threads" -> "ThreadsApi", "profilePosts" -> "ProfilePostsApi"
 */
function groupToFileName(string $group): string
{
    return capitalizeFirst($group) . 'Api';
}

/**
 * Sanitize method names that clash with PHP reserved keywords.
 */
function sanitizeMethodName(string $name): string
{
    return match ($name) {
        'list' => 'getList',
        'match' => 'getMatch',
        'clone' => 'doClone',
        'empty' => 'isEmpty',
        default => in_array($name, PHP_RESERVED_KEYWORDS, true)
            ? 'do' . ucfirst($name)
            : $name,
    };
}

const PHP_RESERVED_KEYWORDS = [
    'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch',
    'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do',
    'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach',
    'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final',
    'finally', 'fn', 'for', 'foreach', 'function', 'global', 'goto', 'if',
    'implements', 'include', 'include_once', 'instanceof', 'insteadof',
    'interface', 'isset', 'list', 'match', 'namespace', 'new', 'or', 'print',
    'private', 'protected', 'public', 'readonly', 'require', 'require_once',
    'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use',
    'var', 'while', 'xor', 'yield',
];

/**
 * Build a type name prefix from group + method.
 * E.g. group "threads", method "list" -> "ThreadsList"
 */
function buildTypeName(string $group, string $method): string
{
    return capitalizeFirst($group) . capitalizeFirst($method);
}
