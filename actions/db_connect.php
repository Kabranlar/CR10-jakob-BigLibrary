<?php 
	$hostName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "biglibrary";

	$conn = mysqli_connect($hostName, $userName, $password, $dbName);

	if (!$conn) {
		echo "error";
	}
?>