<?php 
    //Create constant database configuration
    define('DB_HOST', 'localhost');
    define('DB_USER', 'admin');
    define('DB_PASS', 1234);
    define('DB_NAME', 'wrisin');

    //Create database connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection Failed: ". $conn->connect_error);
    }
?>