<?php

declare(strict_types=1);

function getSum(int $a, int $b): int
{
    return $a + $b;
}

echo getSum(1, 2);
// echo getSum("1", "2"); -> This returns error

function greeting(string $name): string
{
    return "Hello {$name}";
}

echo greeting("John");
// echo greeting(123); -> This returns error
