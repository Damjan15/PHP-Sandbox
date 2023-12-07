<?php

// Creating a function

function sayHello()
{
    echo "Hello";
}

// Calling a function
sayHello();
sayHello();
sayHello();

// Return values

function sayGoodbye()
{
    return "Goodbye";
}

$goodbye = sayGoodbye();
echo $goodbye;
