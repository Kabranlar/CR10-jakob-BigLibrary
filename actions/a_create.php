<?php
	require_once 'db_connect.php';

	if ($_POST) {
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

		$sql = "INSERT INTO item(type, title, image, author_fName, author_lName, description, isbn, publication_date, publisher, publisher_address, publisher_size, status) VALUES ('$type', '$title', '$image', '$author_fName', '$author_lName', '$description', '$isbn', '$publication_date', '$publisher', '$publisher_address', '$publisher_size', '$status')";

		if(mysqli_query($conn, $sql)) {
			echo "success <br><a href='../index.php'>Back to the home page</a>";
		} else {
			echo "error blabla".$conn->error;
		}
	}
?>