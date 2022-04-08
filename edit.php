<?php

  include "db_conn.php";
  
  if(isset($_POST['update'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE 'users' SET 'user_name' = '$user_name' = 'email' = '$email' 'password' = '$password' WHERE 'id'='$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE) {
      echo "Record Updated Succesfully";
    } else {
      echo "Error:". $sql . "<br>" . $conn->error;
    }
  }

  if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT *FROM 'users' WHERE 'id'=$user_id'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user_name = $row['user_name'];
        $email = $row['email'];
        $password = $row['password'];
      }
    }
  }
  ?>
  
  <h2> User Update Form</h2>
  <form action="" method="post">
    <fieldset>
      <legend>Personal information:</legend>
      First name:<br>
      <input type="text" name="user_name" value="<?php echo $user_name;?>">
      <input type="hidden" name="user_id" value="<?php echo $id; ?>">
    </fieldset>