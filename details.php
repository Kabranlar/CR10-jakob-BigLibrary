<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<!-- bs.css -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type ="text/css">

   </style>
</head>

<body class="bg-secondary">
	<nav class="navbar navbar-light bg-light mb-5">
  		<a class="navbar-brand" href="#">
    	<img src="https://banner2.cleanpng.com/20180719/blp/kisspng-library-computer-icons-librarian-reference-work-cl-knowledge-edition-5b5110a02097f7.2706046915320393281335.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    	Big Shaq Library
  		</a>
	</nav>

	<div class="container-fluid mb-4">

		<div class ="row d-flex justify-content-center">

	       	<?php
				include ("actions/db_connect.php");
				if ($_GET["item_id"]) {
				    $item_id = $_GET["item_id"];
				    $sql = "SELECT * FROM item WHERE item_id = $item_id";
				    $result = mysqli_query($conn, $sql);
				    $row = $result->fetch_assoc();
				}

			 	echo "
			 	<div class='card col-6 mt-5 mx-auto'>
	                <img class='card-img-top mt-4 mx-auto' src='" . $row['image'] . "' style='width: 200px; object-fit:contain' alt='Card image cap'>
	                <div class='card-body'>
	                    <h5 class='card-title'>" . $row['title'] . "</h5>
	                    <p class='card-text'>" . $row['description'] . "</p>
	                </div>
	                <ul class='list-group list-group-flush'>
	                    <li class='list-group-item'>Author: " . $row['author_fName'] . " " . $row['author_lName'] . "</li>
	                    <li class='list-group-item'>ISBN: " . $row['isbn'] . "</li>
	                    <li class='list-group-item'>Publish Date:" . $row['publication_date'] . "</li>
	                    <li class='list-group-item'><a href='publisher.php?publisher=" . $row['publisher'] . "'>" . $row['publisher'] . "</a></li>
	                    <li class='list-group-item'>Publisher Address: " . $row['publisher_address'] . "</li>
	                    <li class='list-group-item'>Publisher Size: " . $row['publisher_size'] . "</li>
	                    <li class='list-group-item'>Type: " . $row['type'] . "</li>
	                    <li class='list-group-item'>Status: " . $row['status'] . "</li>
	                </ul>
	                <div class='card-body bottom d-flex justify-content-center'>
	                    <a class='card-link' href='update.php?item_id=" . $row['item_id'] . "'><button class='btn btn-primary' type='button'>Edit</button></a>
	                    <a class='card-link' href='delete.php?item_id=" . $row['item_id'] . "'><button class='btn btn-danger' type='button'>Delete</button></a>
	                    <a class='card-link' href='index.php'><button class='btn btn-info' type='button'>Home</button></a>
	                </div>
                </div>";
			?>
		</div>
	</div>
</body>
</html>