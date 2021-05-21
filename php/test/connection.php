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

/**
 // creating table

 $createTableQuery = "CREATE TABLE todos (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 content VARCHAR(30) NOT NULL,
 completed BOOLEAN
 )";

 if ($connection->query($createTableQuery) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $connection->error;
}

 */

/**

// inserting values
$sql = "INSERT INTO todos (content, completed)
VALUES ('Learn HTML', false)";

if ($connection->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

 */


/**
 // fetching data
$sql = "SELECT id, content, completed FROM todos";
$result = $connection->query($sql);

foreach ($result as $item) {
  var_dump($item);
  echo "\n";
}

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id=>" . $row["id"] . "|| => content => " . $row["content"] . "|| => completed? => " . $row["completed"] . "<br>";
  }
} else {
  echo "0 results";
}

 */