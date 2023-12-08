<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email); // Calls the parent constructor
  }

  public function showStatus()
  {
    echo $this->status;
  }

  // Overrindg Method from Parent Class
  public function login()
  {
    echo 'Admin ' . $this->name . ' logged in.';
  }
}

$admin1 = new Admin("Tom Smith", "tom@gmail.com", 5);
echo $admin1->name . "<br>";
echo $admin1->email . "<br>";
$admin1->login();
// $admin1->status;
