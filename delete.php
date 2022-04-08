<?php
  include "db_conn.php";

  if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

  $sql = "DELETE FROM `users` WHERE `id` ='$users_id'";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "Record deleted succesfully.";
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  }
?>