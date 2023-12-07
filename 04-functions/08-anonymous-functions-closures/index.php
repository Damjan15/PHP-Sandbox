<?php

// Anonymous Functions
$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo "The square of 5 is: " . $result . "<br>";

// Closure and Outer Scope
function createCounter()
{
    $count = 0;

    // Define a closure that captures the $count variable
    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}

// Create a counter function
$counter = createCounter();

// Use the counter function to increment and display the count
echo $counter() . "\n";
echo $counter() . "\n";
echo $counter() . "\n";
