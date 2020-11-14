<?php
	require_once 'actions/db_connect.php';

if ($_GET['item_id']) {
   $item_id = $_GET['item_id'];

   $sql = "SELECT * FROM item WHERE item_id = {$item_id}" ;
   $result = mysqli_query($conn, $sql);
   $row = $result->fetch_assoc();

   $conn->close();

   ?>
<!DOCTYPE html>
<html>
<head>
   <title> Delete User</title>
</head>
<body>

<h3>Do you really want to delete this user?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "item_id" value="<?php echo $row['item_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"> <button type="button"> No, go back!</button ></a>
</form>

</body>
</html>
<?php
}
?>