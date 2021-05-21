<?php
include('./connection.php');

$todos = [];

function fetchTodos()
{
  global $connection, $tableName;

  $sql = "SELECT id, content, completed FROM $tableName";
  return $connection->query($sql);
}

