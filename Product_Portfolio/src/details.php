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
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
	<div class="container">
		<a href="index.html" class="navbar-brand">Blogen</a>
		<ul class=" navbar-nav">
			<li class="nav-link px-2"><a href="home.php" class="nav-link">Dashboard</a></li>
			<li class="nav-link px-2"><a href="categories.php" class="nav-link">Categories</a></li>
			<li class="nav-link px-2"><a href="products.php" class="nav-link">Products</a></li>
			<li class="nav-link px-2"><a href="review.php" class="nav-link">Reviews</a></li>
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

<!---POST SECTION---->
<header id="header" class="py-2 bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					Details
				</h1>
			</div>
		</div>
	</div>
</header>
<!----ACTION---->
<header id="action" class="py-4 bg-light mb-4">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="home.php" class="btn btn-light btn-block">
					<i class="fa fa-arrow-left"></i>
					Back to Dashboard
				</a>
			</div>
		<div class="col-md-3">
			<?php $prod_id=$_GET['id'];
			echo "<a href='update.php?id=" . $prod_id."' class='btn btn-success btn-block'>";

			echo	"<i class='fa fa-pencil'></i>";
				echo " Update";
			echo "</a>";
?>
			</div>
			<div class="col-md-3">
				<?php
				$prod_id=$_GET['id'];
				echo "<a href='remove.php?id=" . $prod_id ."' class='btn btn-danger btn-block'>";
					echo "<i class='fa fa-minus'></i>";
					echo " Remove";
				echo "</a>";
				?>
			</div>
		</div>
	</div>
</header>

<!---EDIT SECTION --->
<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header bg-success">
						<h4>Product Details</h4>
					</div>
					<div class="card-body ">
						<table class="table">
							<tbody>
						 <?php $prod_id=$_GET['id'];
						 $result = mysqli_query($connection,"SELECT * FROM Product Where Product_ID= '$prod_id' ");
						 $i=1;
						 	while($row = mysqli_fetch_assoc($result))
							{
								echo "<div >";
							 echo "<tr>";
								echo "<td scope='row'>";
								echo '<div class="h3">'.$row["Product_Name"].'</div>';
								echo "</td>";

                echo "</tr>";
								echo "</div>";
								echo "<tr>";
 								echo "<td scope='row'>";
								echo "<div>";
										$result1 = mysqli_query($connection,"SELECT * FROM Photos Where Product_ID= '$prod_id' ");
										while ($row1=mysqli_fetch_assoc($result1))
										{
											echo "<img src='".$row1["Location"]."' height='500' width='360'>";
										}
										echo "</td></tr>";
	 						 	echo "</div>";
                echo"<tr>";

								echo "<td>";
								echo "<div class='h2'>".$row["Category"]."</div>";
								echo "</td></tr>";
								echo  "<tr>";
								echo "<td>";
								echo "<div class='h4'> Date of Creation:-".$row['date_created']."";
								echo "</div>";
								echo "</td></tr>";
								echo"<tr><td>";
								echo "<div class='h4'>Number of items(Available stock):-".$row["Number_of_Item"]."</div>";
								echo "</td></tr>";
								echo"<tr><td>";
								echo "<div class='h4'>Price(Current):-$".$row["Product_Rate"]."</div>";
								echo "</td></tr>";
								echo"<tr><td>";


								echo "<div class='h2'>Description";
								echo "</div>";
								echo "<span>".$row['Product_Description']."</span>";
								echo "</td></tr>";
								echo"<tr><td>";
								echo "<div class=h2>Ingredients";
								echo"</div>";
								echo "<span>".$row['Product_Ingredients']. "</span>";

								echo "</td></tr>";


							//echo "	<td>";
								//	echo "<a href='details.php' class='btn btn-secondary'>";
									//	echo "<i class='fa fa-angle-double-right'></i>";
										//echo " Details";
									//echo "</a>";
								//echo "</td>";

                //echo "<td>";
                  //echo "<a href='#' class='btn btn-success' data-toggle='modal' data-target='#addcat'>";
          				//echo	"<i class='fa fa-pencil'></i>";
          					//echo " Update";
          				//echo "</a>";
                //echo "</td>";
                //echo "<td>";
                  //echo "<a href='#' class='btn btn-danger btn-block' data-toggle='modal' data-target='#adduser'>";
          					//echo "<i class='fa fa-minus'></i>";
          					//echo " Remove";
          				//echo "</a>";
                //echo "</td>";


							$i++;
							}		?>


						<!--<form>
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" placeholder="Post one">
							</div>
							<div class="form-group">
								<label for="category">Category</label>
								<select class="form-control">
									<option>Web Development</option>
									<option>Tech Gadgets</option>
									<option>Business</option>
									<option>Health & Wellness</option>
								</select>
							</div>
							<div class="form-group">
								<label for="file">Image Upload</label>
								<input type="file" class="form-control-file">
								<small class="form-text text-muted">Max Size 3mb</small>
							</div>
							<div class="form-group">
								<label for="body">Body</label>
								<textarea name="editor1" class="form-control"></textarea>
							</div>
						</form>------->
					</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--footer--->

<!---FOOTER --->
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
</body>
</html>
