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


  <!---HEADER SECTION --->
  <header id="header" class="bg-success text-white py-2">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					<i class="fa fa-folder"></i>
					Categories
				</h1>
			</div>
		</div>
	</div>

  </header>


  <!---SEARCH --->
  <section id="search" class="bg-light text-white py-4 mb-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ml-auto">
				<div class="input-group">
					<input type="text" placeholder="Search" class="form-control">
					<button class="btn btn-success">Search</button>
				</div>
			</div>
		</div>
	</div>

  </section>



<!---POST SECTION --->

<section id="posts">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h4>Latest Categories</h4>
					</div>
					<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								<th>#</th>
								<th>Title</th>

								<th>Date Posted</th>

							</tr>
						</thead>
            <tbody>
						 <?php

						 $result = mysqli_query($connection,"SELECT * FROM Product order by product_id Asc");
						 $i=1;
						 	while($row = mysqli_fetch_assoc($result))
							{
							 echo "<tr>";
								echo "<td scope='row'>".$i."</td>";




                						echo"<td>".$row["Category"]."</td>";
														echo  "<td>".$row["date_created"]."</td>";






							echo "</tr>";
							$i++;
							}		?>

						</tbody>
					</table>
					<nav class="ml-4">
						<ul class="pagination">
							<li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
							<li class="page-item active"><a href="#" class="page-link">1</a></li>
							<li class="page-item"><a href="#" class="page-link">2</a></li>
							<li class="page-item"><a href="#" class="page-link">3</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


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
