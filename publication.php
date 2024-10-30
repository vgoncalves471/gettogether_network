<?php

$servername= "localhost";
$username= "root";
$password= "";

$dsn = "mysql:host=localhost;dbname=mango;charset=utf8mb4";
$options = [
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   //make the default fetch be 
                                                    // an associative array
];

try {
    $pdo = new PDO($dsn, "username", "password", $options);
  } catch (Exception $e) {
    error_log($e->getMessage());
    exit('Something weird happened'); //something a user can understand
  }
