<?php

// Arrow Functions
$add = fn ($a, $b) => $a + $b;

// Arrow Functions for Callbacks
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);
print_r($squaredNumbers);
