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
  <title>DashBoard</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
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
<!--HEADER SECTION --->
<header class="bg-primary py-2 text-white" id="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					<i class="fa fa-gear"></i>
					Dashboard
				</h1>
			</div>
		</div>
	</div>
</header>

<!----ACTION --->
<section class="py-4 mb-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#add">
					<i class="fa fa-plus"></i>
					Add Product
				</a>
			</div>

			<div class="col-md-3">

			</div>
		</div>
	</div>
</section>

<!----POST SECTION -->

<section id="posts">
	<div class="container">
		<div class="row">
			<div class='col-md-9'>
				<div class="card">
					<div class="card-header">
						<h4>Latest Products</h4>
					</div>

					<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Categorie</th>
								<th>Date Posted</th>
								<th>Number of Items</th>
                <th></th>
                <th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						 <?php

						 $result = mysqli_query($connection,"SELECT * FROM Product order by product_id Desc Limit 6");
						 $i=1;
						 	while($row = mysqli_fetch_assoc($result))
							{
							 echo "<tr>";
								echo "<td scope='row'>".$i."</td>";
								echo "<td>";
														$_SESSION['SESS_Prod_ID'] = $row['Product_ID'];
    												echo $row["Product_Name"];

                						echo"<td>".$row["Category"]."</td>";
														echo  "<td>".$row["date_created"]."</td>";
														echo"<td>".$row["Number_of_Item"]. "</td>";


							echo "	<td>";
									echo '<a href="details.php?id=' . $row["Product_ID"] .'" class="btn btn-secondary">';
										echo "<i class='fa fa-angle-double-right'></i>";
										echo " Details";
									echo "</a>";
								echo "</td>";
								
                echo "<td>";
                  echo "<a href='update.php?id=" . $row["Product_ID"] ."' class='btn btn-success'>";

									echo	"<i class='fa fa-pencil'></i>";
          					echo " Update";
          				echo "</a>";
                echo "</td>";
                echo "<td>";
                  echo "<a href='remove.php?id=" . $row["Product_ID"] ."' class='btn btn-danger btn-block'>";
          					echo "<i class='fa fa-minus'></i>";
          					echo " Remove";
          				echo "</a>";
                echo "</td>";

							echo "</tr>";
							$i++;
							}		?>
							<tr>
								<!---
								<td scope="row">2</td>
								<td>


  //$result = mysqli_query($connection,"SELECT * FROM Product WHERE Product_ID=20");
  //while($row = mysqli_fetch_array($result))
    //{

    //echo $row["Product_Name"];
  }		//?></td>
								<td>Serum</td>
								<td>25 july 2018</td>
								<td></td>
								<td>
									<a href="details.html" class="btn btn-secondary">
										<i class="fa fa-angle-double-right"></i>
										Details
									</a>

								</td>
                <td>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addcat">
          					<i class="fa fa-pencil"></i>
          					Update
          				</a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#adduser">
          					<i class="fa fa-minus"></i>
          					Remove
          				</a>
                </td>
							</tr>
							<tr>
								<td scope="row">3</td>
								<td>Products</td>
								<td>#</td>
								<td>25 july 2018</td>
								<td></td>
								<td>
									<a href="details.html" class="btn btn-secondary">
										<i class="fa fa-angle-double-right"></i>
										Details
									</a>
								</td>
                <td>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addcat">
          					<i class="fa fa-pencil"></i>
          					Update
          				</a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#adduser">
          					<i class="fa fa-minus"></i>
          					Remove
          				</a>
                </td>

							</tr>
							<tr>
								<td scope="row">4</td>
								<td>Products</td>
								<td>#</td>

								<td>25 july 2018</td>
								<td></td>
								<td>
									<a href="details.html" class="btn btn-secondary">
										<i class="fa fa-angle-double-right"></i>
										Details
									</a>
								</td>
                <td>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addcat">
          					<i class="fa fa-pencil"></i>
          					Update
          				</a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#adduser">
          					<i class="fa fa-minus"></i>
          					Remove
          				</a>
                </td>

							</tr>
							<tr>
								<td scope="row">5</td>
								<td>Products</td>
								<td>#</td>
								<td>25 july 2018</td>
								<td></td>
								<td>
									<a href="details.html" class="btn btn-secondary">
										<i class="fa fa-angle-double-right"></i>
										Details
									</a>
								</td>
                <td>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addcat">
          					<i class="fa fa-pencil"></i>
          					Update
          				</a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#adduser">
          					<i class="fa fa-minus"></i>
          					Remove
          				</a>
                </td>

							</tr>
							<tr>
								<td scope="row">6</td>
								<td>Products</td>
								<td>#</td>
								<td>25 july 2018</td>
								<td>
									<a href="details.html" class="btn btn-secondary">
										<i class="fa fa-angle-double-right"></i>
										Details
									</a>
								</td>
                <td>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addcat">
          					<i class="fa fa-pencil"></i>
          					Update
          				</a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#adduser">
          					<i class="fa fa-minus"></i>
          					Remove
          				</a>
                </td>

							</tr>
							----->
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card  bg-primary text-white text-center mb-3">
					<div class="card-body">
						<h3>Products</h3>
						<h1 class="display-4">
							<i class="fa fa-pencil"></i>
							<?php
								$result = mysqli_query($connection,"SELECT * FROM product");

								$numberOfRows = mysqli_num_rows($result);
								echo  $numberOfRows;
								?>
						</h1>
						<a href=products.php
						class="btn btn-outline-light btn-sm">View</a>
					</div>
				</div>
				<div class="card  bg-success text-white text-center mb-3">
					<div class="card-body">
						<h3>Categories</h3>
						<h1 class="display-4">
							<i class="fa fa-folder-open-o"></i>6
						</h1>
						<a href=categories.php class="btn btn-outline-light btn-sm">View</a>
					</div>
				</div>
				<div class="card  bg-warning text-white text-center mb-3">
					<div class="card-body">
						<h3>Users</h3>
						<h1 class="display-4">
							<i class="fa fa-users"></i>6
						</h1>
						<a href=users.php class="btn btn-outline-light btn-sm">View</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!---footer--->
<footer class="text-center bg-dark py-5 text-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<legend>Copyright <span>&copy;</span> 2022 LoveFromYours</legend>

			</div>
		</div>

	</div>
</footer>

<!---MOdal SECTION --->

<!----POST MODAL-->
<div class="modal fade col-md-12" id="add">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title">Add Product</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form method="Post" action="add_product.php" enctype="multipart/form-data" class="was-validated">
					<div class="row">
					<div class="form-group col-md-6">
						<label for="title">Title</label>
						<input type="text" class="form-control" name="title" required>
					</div>

					<div class="form-group col-md-6">
						<label for="category">Category</label>
						<select class="form-control" name="category" required>
							<option>FaceWash</option>
							<option>Serum</option>
							<option>Eye Balm</option>
							<option>Balm</option>
							<option>FaceMask</option>
							<option>Deo</option>
						</select>
					</div>
				</div>
					<div class="form-group">
						<label for="upload">Image Upload</label>
						<input type="file" class="form-control-file" name="photo[]" required multiple>
						<small class="form-text text-muted">Max Size 3mb</small>
					</div>
					<div class="form-group">
						<label for="Description">Description</label>
						<textarea name="editor" class="form-control" required></textarea>
					</div>
          <div class="form-group">
						<label for="Ingredients">Ingredients</label>
						<textarea name="editor1" class="form-control" required></textarea>
					</div>

					<div class="row">
					<div class="form-group col-md-6">
						<label for="rate">Rate</label>
						<input type="text" class="form-control" name="rate" required>
					</div>

					<div class="form-group col-md-6">
						<label for="items">Number of Items</label>
						<input type="text" class="form-control" name="items" required>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<a class="btn btn-secondary" href="#" data-dismiss="modal">Close</a>
				<button class="btn btn-primary" href="#" data-dismiss="close" value="Post">Save Changes</button>
			</div>
      </form>
		</div>
	</div>
</div>

<!-----Category MODAL----

<!---USER MODAL-->
<div class="modal fade" id="adduser">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-warning text-white">
				<h5 class="modal-title">Remove Product</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="name">Product Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Category</label>
						<input type="emial" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="cpassword">Confirm Password</label>
						<input type="password" class="form-control">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button class="btn btn-secondary" data-dismiss="modal">Save Changes</button>
			</div>
		</div>
	</div>
</div>


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
	<script>
      CKEDITOR.replace( 'editor2' );
  </script><script>
      CKEDITOR.replace( 'editor3' );
  </script>
</body>
</html>
