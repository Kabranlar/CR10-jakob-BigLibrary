<?php
require_once 'db_connect.php';
if ($_POST) {
  $item_id = $_POST['item_id'];

$sql = "DELETE FROM item WHERE item_id={$item_id}";
  if(mysqli_query($conn, $sql)){
    echo "success <br> <a href='../index.php'> Back to Homepage</a>";
  }else {
    echo "error";
  }$conn->close();
}
?>