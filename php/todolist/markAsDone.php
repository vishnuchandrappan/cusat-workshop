<?php
include('./connection.php');

if (isset($_POST['mark_as_done'])) {
  $todoId = (int)$_POST['mark_as_done'];

  global $tableName;
  $sql = "UPDATE $tableName SET completed=1-completed WHERE id=$todoId";

  $connection->query($sql);
  $connection->close();
}
?>
<script>
  window.location.href = "/";
</script>