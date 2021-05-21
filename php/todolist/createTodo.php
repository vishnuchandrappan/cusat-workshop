<?php
include('./connection.php');

if (isset($_POST['content'])) {
  global $connection, $tableName;
  $content = $_POST['content'];
  $sql = "INSERT INTO $tableName (content, completed) VALUES ('$content', false)";
  $connection->query($sql);
  $connection->close();
}

?>

<script>
  window.location.href = "/";
</script>