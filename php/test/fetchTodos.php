<?php
include('./connection.php');

$todos = [];

function fetchTodos()
{
  global $connection;

  $sql = "SELECT id, content, completed FROM todos";
  $GLOBALS['todos'] = $connection->query($sql);
}

fetchTodos();
