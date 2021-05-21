<?php
include('./connection.php');

if (isset($_POST['delete_id'])) {
  $todoId = (int)$_POST['delete_id'];

  global $tableName;
  echo $sql = "DELETE FROM $tableName WHERE id=$todoId";

  $connection->query($sql);
  $connection->close();
}
?>
<script>
  window.location.href = "/";
</script>