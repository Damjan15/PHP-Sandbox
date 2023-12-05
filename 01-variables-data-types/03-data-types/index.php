<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
$name = "John Doe";
$name2 = 'Sarah Doe';
var_dump($name);
echo "<br />";
echo gettype($name2);
echo "<br />";

// Integer
$age = 35;
$negativeNum = -35;
var_dump($age);
echo "<br />";
var_dump($negativeNum);
echo "<br />";

// Float
$rating = 4.5;
var_dump($rating);
echo "<br />";

// Boolean
$is_loaded = true;
var_dump($is_loaded);
echo "<br />";

// Array
$friends = array("John", "Jane", "Jill");
var_dump($friends);
echo "<br />";

// Object
$person = new stdClass();
var_dump($person);
echo "<br />";

// Null
$car = null;
var_dump($car);
echo "<br />";

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
