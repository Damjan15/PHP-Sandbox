<?php

// Database configuration
$host = "localhost";
$port = 3306;
$dbName = "blog";
$username = "root";
$password = "";

// Connection string (DNS)
$dns = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";


try {
    // Create a PDO instance
    $pdo = new PDO($dns, $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set to fetch associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo "Databse Connected...";
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
