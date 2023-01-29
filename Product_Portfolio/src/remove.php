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
  <title>Admin Area</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/">
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
	<div class="container">
		<a href="home.php" class="navbar-brand">LoveFromYours</a>
		<ul class=" navbar-nav">
			<li class="nav-item px-2"><a class="nav-link" href="home.php">Dashboard</a></li>
			<li class="nav-item px-2"><a class="nav-link active" href="products.php">Products</a></li>
			<li class="nav-item px-2"><a class="nav-link" href="categories.php">Categories</a></li>
			<li class="nav-item px-2"><a class="nav-link" href="review.php">Review</a></li>
		</ul>
		<ul class="navbar navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link dropdown-toggle mr-3" href="#" data-toggle="dropdown">
					<i class="fa fa-user"></i>
					Welcome Admin
				</a>
				<div class="dropdown-menu">
					<a href="profile.php" class="dropdown-item">
						<i class="fa fa-user-circle"></i>
						Profile
					</a>
					<a href="settings.php" class="dropdown-item">
						<i class="fa fa-gear"></i>
						Settings
					</a>
				</div>
			</li>
			<li class="nav-item"><a href="logout.php" class="nav-link">
				<i class="fa fa-user-times"></i>
				Logout
			</a></li>
		</ul>
	</div>
 </nav>
 <header id="header" class="py-2 bg-primary text-white">
 	<div class="container">
 		<div class="row">
 			<div class="col">
 				<h1>
 					Remove Product
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
					<div class="card-header bg-danger">
						<h4 class="text-white">Remove</h4>
					</div>
					<div class="card-body">
					<form method="Post" action="" enctype="multipart/form-data" class="was-validated">
						<div class="row">

						<div class="form-group col-md-6">
							<?php $prod_id=$_GET['id'];
 						 $result = mysqli_query($connection,"SELECT * FROM Product Where Product_ID= '$prod_id' ");
						 while($row = mysqli_fetch_assoc($result))
						 {
						echo '	<label for="title">Title</label>';
							echo '<input type="text" class="form-control" name="title" value="'.$row['Product_Name'].'" readonly>';
						echo '</div>';

						echo '<div class="form-group col-md-6">';
							echo '<label for="category">Category</label>';
							echo '<select class="form-control" name="category" value="'.$row['Category'].'" readonly>';
								echo '<option>'.$row['Category'].'</option>';

							echo '</select>';
						echo '</div>';
					echo '</div>';



						echo '<div class="row">';
						echo'<div class="form-group col-md-6">';
							echo'<label for="rate">Rate</label>';
							echo'<input type="text" class="form-control" name="rate" value="'.$row['Product_Rate'].'" readonly>';
						echo '</div>';

						echo '<div class="form-group col-md-6">';
							echo '<label for="items">Number of Items</label>';
							echo '<input type="text" class="form-control" name="items" value="'.$row['Number_of_Item'].'" readonly>';
						echo '</div>';
						echo '</div>';
						echo '<div class="card-footer col-md-12 ">';
						//echo 	'<a class="btn btn-secondary ml-2" href="#" data-dismiss="modal">Close</a>';
						//echo '<a class="col-md-6"></a>';
							echo'<button class="btn btn-danger col-md-12" name="remove" href="#">Remove Product</button>';
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
<?php if (isset($_POST['remove']))
	{ $prod_id=$_GET['id'];

		$res=mysqli_query($connection,"DELETE  From product where Product_ID='$prod_id' ") or die(mysqli_errno());
		$res=mysqli_query($connection,"DELETE  From photos where Product_ID='$prod_id' ") or die(mysqli_errno());
		header("location: home.php");
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
