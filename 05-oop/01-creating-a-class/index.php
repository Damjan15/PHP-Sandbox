<?php

// Creating a Class
class User
{
    // Adding properties
    public $name;
    public $email;

    // The constructor method
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Adding methods
    public function login()
    {
        echo $this->name . ' logged in.';
    }
}

// Instantiating an Object
$user1 = new User("John Doe", "john@gmail.com");
$user2 = new User("Jane", "jane@gmail.com");
echo $user1->name;
echo "<br>";
echo $user2->name;
echo "<br>";
$user1->login();
