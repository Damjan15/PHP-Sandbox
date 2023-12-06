<?php

// Method 1: array() function
$names = array("John", "Jane", "Joe");

// Method 2: bracket syntax
$fruits = ['Apple', 'Orange', 'Banana'];

// Using var_dump() with arrays
var_dump($names);


// Formatting arrays with function
function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    // die();
}

inspect($names);
inspect($fruits);

// print_r
print_r($names);
echo "<br />";

// Accessing Array Items
echo "First name on the list is {$names[0]}";

// Changing Array Items
$names[0] = "Mary";
$fruits[2] = "Grape";
inspect($names);
inspect($fruits);

// Adding Items To An Array
$names[3] = "Sue";
inspect($names);

// Removing Items From An Array
unset($names[3]);
inspect($names);

// Mixing Data Types
$arr = [1, 'Hello', 3.14, true];
inspect($arr);
