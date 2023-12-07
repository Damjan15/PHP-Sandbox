<?php

// Callback Functions

function applyCallback($callback, $value)
{
    return $callback($value);
};

// Define a callback function to double a number
$double = function ($number) {
    return $number * 2;
};

// Use our custom function to apply the callback
$result = applyCallback($double, 5);

echo $result;
