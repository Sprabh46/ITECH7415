<?php
	require_once('session.php');
?>
<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blogen Admin Area</title>


  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/">

</head>
<style type="text/css">
.ppp{
margin-left:px;
text-decoration:none;
margin-bottom:px;
color:#3300FF;
}
</style>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
		<div class="container">
			<a href="home.php" class="navbar-brand">LoveFromYours</a>
			<button class="bg-dark navbar-toggler" data-toggle="collapse" data-target="#navCollapse"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navCollapse">
			<ul class="navbar-nav">
				<li class="nav-item px-2 active"><a href="home.php" class="nav-link">Dashboard</a></li>
				<li class="nav-item px-2"><a href="products.php" class="nav-link">Products</a></li>
				<li class="nav-item px-2"><a href="categories.php" class="nav-link">Categories</a></li>
				<li class="nav-item px-2"><a href="review.php" class="nav-link">Reviews</a></li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle mr-3" data-toggle="dropdown">
						<i class="fa fa-user"></i>
						Welcome Admin
					</a>

				<div class="dropdown-menu">
					<a href="profile.php" class="dropdown-item"><i class="fa fa-user-circle"></i>
					Profile
					</a>
					<a href="settings.php" class="dropdown-item"><i class="fa fa-gear"></i>
					Settings
					</a>
				</div>
				</li>
				<li class="nav-item">
					<a href="logout.php" class="nav-link">
						<i class="fa fa-user-times"></i>
						Logout
					</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>
 <header id="header" class="py-2 bg-primary text-white">
 	<div class="container">
 		<div class="row">
 			<div class="col">
 				<h1>
 					Update Product
 				</h1>
 			</div>
 		</div>
 	</div>
 </header>
 <header id="action" class="py-4 bg-light mb-4">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3">
 				<a href="home.php" class="btn btn-light btn-block">
 					<i class="fa fa-arrow-left"></i>
 					Back to Dashboard
 				</a>
 			</div>
		</div>
	</div>
</header>

<section id="posts">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header bg-warning">
						<h4 class="text-white">Update</h4>
					</div>
					<div class="card-body">
					<form method="Post" enctype="multipart/form-data" class="was-validated">
						<div class="row">

						<div class="form-group col-md-6">
							<?php $prod_id=$_GET['id'];
							echo $prod_id;
 						 $result = mysqli_query($connection,"SELECT * FROM Product Where Product_ID= '".$prod_id."' ");
						 while($row = mysqli_fetch_assoc($result))
						 {
						echo '	<label for="title">Title</label>';
							echo '<input type="text" class="form-control" name="title" value="'.$row['Product_Name'].'" required>';
						echo '</div>';

						echo '<div class="form-group col-md-6">';
							echo '<label for="category">Category</label>';
							echo '<select class="form-control" name="category" value="'.$row['Category'].'" required>';
								echo '<option>'.$row['Category'].'</option>';
								echo '<option>FaceWash</option>';
								echo '<option>Serum</option>';
								echo '<option>Eye Balm</option>';
								echo '<option>Balm</option>';
								echo '<option>FaceMask</option>';
								echo '<option>Deo</option>';
							echo '</select>';
						echo '</div>';
					echo '</div>';
						echo '<div class="form-group">';
							echo '<label for="upload">Image Upload</label>';
							echo '<input type="file" class="form-control-file" name="photo[]" required multiple>';
							echo '<small class="form-text text-muted">Max Size 3mb</small>';
							$result1 = mysqli_query($connection,"SELECT * FROM Photos Where Product_ID= '$prod_id' ");
							while ($row1=mysqli_fetch_assoc($result1))
							{

								echo "<img width=140 height=140 src='".$row1['Location']."' class='img-fluid'>";
								echo'<a class="ppp" href="deletephoto.php?id=' . $row1["Photo_id"] . '">delete</a>';
							}

						echo '</div>';
						echo '<div class="form-group">';
							echo '<label for="Description">Description</label>';
							echo '<textarea name="editor" class="form-control" required>'.$row['Product_Description'].'</textarea>';
						echo '</div>';
	          echo '<div class="form-group">';
							echo '<label for="Ingredients">Ingredients</label>';
							echo '<textarea name="editor1" class="form-control" required>'.$row['Product_Ingredients'].'</textarea>';
						echo '</div>';

						echo '<div class="row">';
						echo'<div class="form-group col-md-6">';
							echo'<label for="rate">Rate</label>';
							echo'<input type="text" class="form-control" name="rate" value="'.$row['Product_Rate'].'" required>';
						echo '</div>';

						echo '<div class="form-group col-md-6">';
							echo '<label for="items">Number of Items</label>';
							echo '<input type="text" class="form-control" name="items" value="'.$row['Number_of_Item'].'" required>';
						echo '</div>';
						echo '</div>';
						echo '<div class="card-footer col-md-12 ">';
						//echo 	'<a class="btn btn-secondary ml-2" href="#" data-dismiss="modal">Close</a>';
						//echo '<a class="col-md-6"></a>';
							echo'<button class="btn btn-primary col-md-12" name="save" href="#">Save Changes</button>';
						echo "</div>";

					echo "</form>";
				}
					?>
				</div>




				</div>
			</div>
		</div>
	</div>
</section>
<?php if (isset($_POST['save']))
	{ $prod_id=$_GET['id'];

		$totalfiles = count($_FILES['photo']['name']);
		$last_id = $connection->insert_id;
		for($i=0;$i<$totalfiles;$i++)
		{
			$filename = $_FILES['photo']['name'][$i];
			if(move_uploaded_file($_FILES["photo"]["tmp_name"][$i],'upload/'.$filename)){
				$location="upload/" . $_FILES["photo"]["name"][$i];
	// Image db insert sql

	$insert = "INSERT into photos(Location,Product_ID) values('$location','$prod_id')";
	if(mysqli_query($connection, $insert)){
		//echo 'Data inserted successfully';
	}
	else{
		echo 'Error: '.mysqli_error($connection);
	}
}else{
	echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
}
}
$title=$_POST['title'];
$category=$_POST['category'];
$description=$_POST['editor'];
$ingredients=$_POST['editor1'];
$rate=$_POST['rate'];
$items=$_POST['items'];
$res=mysqli_query($connection,"UPDATE product SET Product_Name='$title',Category='$category',Product_Description='$description',Product_Ingredients='$ingredients', Product_Rate='$rate',Number_of_Item='$items' where Product_ID='$prod_id' ") or die(mysqli_errno());

	}
 ?>
      <footer class="text-center bg-dark py-5 text-white">
      	<div class="container">
      		<div class="row">
      			<div class="col">
      				<h4>Copyright <span>&copy;</span> 2017 LoveFromYours</h4>
      			</div>
      		</div>
      	</div>
      </footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
				<script>
            CKEDITOR.replace( 'editor' );
        </script>
      </body>
      </html>
