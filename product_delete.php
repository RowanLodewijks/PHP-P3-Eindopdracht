<?php
  include "db_conn.php";

  if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

  $sql = "DELETE FROM `product` WHERE `product_id` ='$product_id'";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "Record deleted succesfully.";
    header('location:admin_products.php');
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  }
?>