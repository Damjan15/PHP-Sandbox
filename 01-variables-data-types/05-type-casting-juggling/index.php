<?php
$number1 = 5;
$number2 = 10;
$number3 = "20";
$fruit = "apple";
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Type Casting (Type Juggling)
$result = $number1 + $number2; // int
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; // string (int to string)
// $result = $fruit + $number2; // error
$result = $number1 + $bool1; // int 6 (true to 1)
$result = $number1 + $bool2; // int 5 (false to 0)
$result = $number1 + $null; // int 5 (false to 0)

// Explicit Type Casting
$result = (string) $number1; // int to string
$result = (int) $number3; // string to int
$result = (bool) $number1; // int to bool

var_dump($result);
