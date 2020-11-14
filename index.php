<!DOCTYPE html>
<html>
<head>
	<title>Big Library</title>
	<!-- bs.css -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type ="text/css">
   	.manageTable {
       width : 80%;
       margin: auto;
    }

    table {
       	width: 100%;
    	margin-top: 20px;
   	}

   	td {
		width: 25% ;
	}
   </style>
</head>

<body>

	<div class ="manageTable">
	   	<a href= "create.php"><button type="button">Add Item</button></a>
	   	<table border="1" cellpadding="5">
	       <thead>
	           <tr>
	               <th>Type</th>
	               <th>Title</th>
	               <th>Image</th>
	               <th>Author | First Name</th>
	               <th>Author | Last Name</th>
	               <th>Description</th>
	               <th>ISBN</th>
	               <th>Publication Date</th>
	               <th>Publisher</th>
	               <th>Publisher | Address</th>
	               <th>Publisher | Size</th>
	               <th>Status</th>
	               <?php
		               	include ("actions/db_connect.php");
	                    $sql = "SELECT * FROM item";
	                    $result = mysqli_query($conn, $sql);
	                    if($result->num_rows > 0) {
	                        echo "<th>Edit</th>
	                    		<th>Delete</th>";
	                    } 
                   ?>
	           </tr>
	       </thead>
	       <tbody>
				<?php
					include ("actions/db_connect.php");

					$sql = "SELECT * FROM item";
					$result = mysqli_query($conn, $sql);
					$conn->close();

					if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                   	echo "<tr class='text-center'>
		                       	<td>".$row['type']."</td>
		                       	<td>".$row['title']."</td>
		                       	<td><img class='img-fluid' src='".$row['image']."'</td>
		                       	<td>".$row['author_fName']."</td>
		                       	<td>".$row['author_lName']."</td>
		                       	<td>".$row['description']."</td>
		                       	<td>".$row['isbn']."</td>
		                       	<td>".$row['publication_date']."</td>
		                       	<td>".$row['publisher']."</td>
		                       	<td>".$row['publisher_address']."</td>
		                       	<td>".$row['publisher_size']."</td>
		                       	<td>".$row['status']."</td>
		                       	<td><a href='update.php?item_id=".$row['item_id']."'><button type='button'>Edit</button></a></td>
                                <td><a href='delete.php?item_id=".$row['item_id']."'><button type='button'>Delete</button></a></td>
		                   		</tr>";
		               	}
		           	} else  {
	               		echo  "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
		           	}
				?>
       		</tbody>
	   	</table>
	</div>
</body>
</html>