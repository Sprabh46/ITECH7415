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

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
	<div class="container">
		<a href="#" class="navbar-brand">LoveFromYours</a>
		<ul class="navbar-nav">
			<li class="nav-item px-2"><a class="nav-link" href="home.php">Dashboard</a></li>
			<li class="nav-item px-2"><a class="nav-link" href="products.php">Products</a></li>
			<li class="nav-item px-2"><a class="nav-link" href="categories.php">Categories</a></li>
			<li class="nav-item px-2"><a class="nav-link" href="reviews.php">Review</a></li>
		</ul>
		<ul class="navbar navbar-nav ml-auto">
			<li class="nav-item mr-3">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
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
			<li class="nav-item">
				<a href="logout.php" class="nav-link">
					<i class="fa fa-user-times"></i>
					Logout
				</a>
			</li>
		</ul>
	</div>
</nav>

<!----HEADER--->
<header class="bg-primary py-2 text-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					<i class="fa fa-gear"></i>
					Settings
				</h1>
			</div>
		</div>
	</div>
</header>

<!----Action--->
<section class="py-4 mb-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="home.php" class="btn btn-light btn-block">
					<i class="fa fa-arrow-left"></i>
					Back to Dashboard
				</a>
			</div>
			<div class="col-md-3 ml-auto">
				<a href="#" class="btn btn-success btn-block">
					<i class="fa fa-check"></i>
					Save Changes
				</a>
			</div>
		</div>
	</div>
</section>


<!---SETTING SECTION -->
<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h4>Edit Settings</h4>
						</div>
						<div class="card-body">
							<form>
								<div class="form-group">
									<legend>Allow User Registeration</legend>

									<input type="radio" class="" value="yes" checked name="o"> Yes<br>
									<input type="radio" class="" value="yes" name="o"> No
								</div>

								<div class="form-group">
									<legend>Homepage Format</legend>

									<input type="radio" class="" value="yes" checked name="p"> Post Index<br>
									<input type="radio" class="" value="yes" name="p"> Single Page
								</div>
							</form>
						</div>
					</div>
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
