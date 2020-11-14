<?php
	require_once 'actions/db_connect.php';
	if ($_GET["item_id"]) {
		$item_id = $_GET["item_id"];
		$sql = "SELECT * FROM item WHERE item_id = $item_id";
		$result = mysqli_query($conn, $sql);

		$row = $result->fetch_assoc();

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="actions/a_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['item_id'] ?>">

		<input type="text" name="type" value="<?php echo $row['type'] ?>"><br>
		<input type="text" name="title" value="<?php echo $row['title'] ?>"><br>
		<input type="text" name="image" value="<?php echo $row['image'] ?>"><br>
		<input type="text" name="author_fName" value="<?php echo $row['author_fName'] ?>"><br>
		<input type="text" name="author_lName" value="<?php echo $row['author_lName'] ?>"><br>
		<input type="text" name="description" value="<?php echo $row['description'] ?>"><br>
		<input type="text" name="isbn" value="<?php echo $row['isbn'] ?>"><br>
		<input type="date" name="publication_date" value="<?php echo $row['publication_date'] ?>"><br>
		<input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"><br>
		<input type="text" name="publisher_address" value="<?php echo $row['publisher_address'] ?>"><br>
		<input type="text" name="publisher_size" value="<?php echo $row['publisher_size'] ?>"><br>
		<input type="text" name="status" value="<?php echo $row['status'] ?>"><br>
		<input type="submit">
	</form>
</body>
</html>