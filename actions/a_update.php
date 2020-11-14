<?php 
	require_once 'db_connect.php';

	if ($_POST) {
		$id = $_POST["id"];
		$type = $_POST["type"];
		$title = $_POST["title"];
		$image = $_POST["image"];
		$author_fName = $_POST["author_fName"];
		$author_lName = $_POST["author_lName"];
		$description = $_POST["description"];
		$isbn = $_POST["isbn"];
		$publication_date = $_POST["publication_date"];
		$publisher = $_POST["publisher"];
		$publisher_address = $_POST["publisher_address"];
		$publisher_size = $_POST["publisher_size"];
		$status = $_POST["status"];

		$title = mysqli_real_escape_string($conn, $title);
        $author_fName = mysqli_real_escape_string($conn, $author_fName);
        $author_lName = mysqli_real_escape_string($conn, $author_lName);
        $description = mysqli_real_escape_string($conn, $description);
        $publisher = mysqli_real_escape_string($conn, $publisher);
        $publisher_address = mysqli_real_escape_string($conn, $publisher_address);

		$sql = "UPDATE `item` SET `type` = '$type', `title` = '$title', `image` = '$image', `author_fName` = '$author_fName', `author_lName` = '$author_lName', `description` = '$description', `isbn` = '$isbn', `publication_date` = '$publication_date', `publisher` = '$publisher', `publisher_address` = '$publisher_address', `publisher_size` = '$publisher_size', `status` = '$status' WHERE item_id = $id";

		if (mysqli_query($conn, $sql)) {
			echo "success <br> <a href='../index.php'>Back to home page</a>";
		}else {
			echo "error";
		}
	}
?>