<?php

// Function parameters

function add($a, $b)
{
    return $a + $b;
}

echo add(1, 2);
echo add(5, 5);
echo "<br />";

// Default values

function sayHello($name = "World")
{
    return "Hello {$name}";
}

$greeting = sayHello();
$greeting2 = sayHello("Everyone");

echo $greeting;
echo "<br />";
echo $greeting2;
