<!DOCTYPE html>
<html>
<head>
  <title>Edit</title>
  <!-- bs.css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style type ="text/css">

   </style>
</head>
<body class="bg-secondary">
	<nav class="navbar navbar-light bg-light mb-5">
  		<a class="navbar-brand" href="index.php">
    	<img src="https://banner2.cleanpng.com/20180719/blp/kisspng-library-computer-icons-librarian-reference-work-cl-knowledge-edition-5b5110a02097f7.2706046915320393281335.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    	Big Shaq Library
  		</a>
	</nav>
  	<div class="container-fluid">
  		<form action="actions/a_create.php" method="post">
	    <div class="form-group">
	      <label for="inputType">Type</label>
	      <input type="text" name="type" class="form-control" id="inputType">
	    </div>
	    <div class="form-group">
	      <label for="inputTitle">Title</label>
	      <input type="text" name="title" class="form-control" id="inputTitle">
	    </div>
	    <div class="form-group">
	      <label for="inputImage">Image URL</label>
	      <input type="text" name="image" class="form-control" id="inputImage">
	    </div>
	    <div class="form-row">
	      <div class="form-group col-md-6">
	        <label for="inputAuthor1">Author's first name</label>
	        <input type="text" name="author_fName" class="form-control" id="inputAuthor1">
	      </div>
	      <div class="form-group col-md-6">
	        <label for="inputAuthor2">Author's last name</label>
	        <input type="text" name="author_lName" class="form-control" id="inputAuthor2">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputDescription">Description</label>
	      <textarea class="form-control" name="description" id="inputDescription" rows="3"></textarea>
	    </div>
	    <div class="form-group">
	      <label for="inputIsbn">ISBN</label>
	      <input type="text" name="isbn" class="form-control" id="inputIsbn">
	    </div>
	    <div class="form-row">
	      <div class="form-group col-md-4">
	      <label for="inputPublisher">Publisher</label>
	      <input type="datextte" name="publisher" class="form-control" id="inputPublisher">
	      </div>
	      <div class="form-group col-md-4">
	        <label for="inputPublisherSize">Publisher size</label>
	        <input type="text" name="publisher_size" class="form-control" id="inputPublisherSize">
	      </div>
	      <div class="form-group col-md-4">
	        <label for="inputPublisherAddress">Publisher address</label>
	        <input type="text" name="publisher_address" class="form-control" id="inputPublisherAddress">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputPublicationDate">Publication date</label>
	      <input type="date" name="publication_date" class="form-control" id="inputPublicationDate">
	    </div>
	    <div class="form-group">
	      <label for="inputStatus">Status</label>
	      <input type="text" name="status" class="form-control" id="inputStatus">
	    </div>
	    <button type="submit" class="btn btn-primary">Save Changes</button>
  	</form>
  	</div>



	
<!-- 	<form action="actions/a_update.php" method="post">
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
	</form> -->
</body>
</html>