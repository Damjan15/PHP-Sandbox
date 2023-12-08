<?php

// Starting a Session
session_start();

$_SESSION['username'] = 'john';
print_r($_SESSION);
