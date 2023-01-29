<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Admin Area</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/">
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
	<div class="container">
		<a href="home.php" class="navbar-brand">LoveFromYours</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item px-2"><a href="home.php" class="nav-link">Dashboard</a></li>
			<li class="nav-item px-2"><a href="products.php" class="nav-link">Posts</a></li>
			<li class="nav-item px-2"><a href="categories.php" class="nav-link">Categories</a></li>
			<li class="nav-item px-2"><a href="review.php" class="nav-link">Reviews</a></li>
		</ul>
		<ul class="navbar navbar-nav ml-auto">
			<li class="nav-item">
				<a href="#" class="nav-link dropdown-toggle mr-3" data-toggle="dropdown">
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
				<a class="nav-link" href="index.php">
					<i class="fa fa-user-times"></i>
					LogOut
				</a>
			</li>
		</ul>
	</div>
 </nav>

<!----EDIT SECTION --->
<section id="edit" class="py-2 bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					<i class="fa fa-user"></i>
					Edit Profile
				</h1>
			</div>
		</div>
	</div>
</section>

 <!----ACTION ---->
 <section class="py-4 bg-light mb-4">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="index.php" class="btn btn-light btn-block">
					<i class="fa fa-arrow-left"></i>
					Back to Dashboard
				</a>
			</div>
			<div class="col-md-3 ml-auto">
				<a href="#passwordModal" class="btn btn-success btn-block" data-toggle="modal">
					<i class="fa fa-lock"></i>
					Change Password
				</a>
			</div>
			<div class="col-md-3">
				<a href="#" class="btn btn-danger btn-block">
					<i class="fa fa-times"></i>
					Delete Account
				</a>
			</div>
		</div>
	</div>
 </section>

 <!----Password MODAL--->
 <div class="modal fade" id="passwordModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5>Change Password</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form>
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
				<button class="btn btn-primary" data-dismiss="modal">Update Password</button>
			</div>
		</div>
	</div>
 </div>

 <!----EDIT POFILE---->
 <section id="profile">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h4>Edit Profile</h4>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="Name">Name</label/>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label/>
								<input type="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="bio">bio</label/>
								<textarea name="editor1"  class="form-control"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h4>Your Avatar</h4>
				<img src="img/avatar.png" class="img-fluid">
				<button class="btn btn-primary btn-block mt-3">Edit Image</button>
				<button class="btn btn-danger btn-block mt-2">Delete Image</button>
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
