<?php

$hostName = "localhost";
$username = "temp";
$password = "password";
$dbName = "todoList";

// Creating a connection
$connection = new mysqli($hostName, $username, $password, $dbName);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$tableName = "todos";