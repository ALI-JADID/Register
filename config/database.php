<?php

global $database;
$host = "localhost";
$username = "root";
$password = "";

try {
    $database = new PDO("mysql:host=$host;dbname=sabzlearn", $username, $password);
    // set the PDO error mode to exception
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>