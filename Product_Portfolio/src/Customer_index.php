<!DOCTYPE html>

<?php
include('connect.php');

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LoveFromYours</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style4.css">
</head>
<body id="home">
	<nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
		<div class="container">
			<a class="navbar-brand" href="index.html">
			<img src="img/mlogo.png"height="40" width="200">
			<h3 class="d-inline align-middle"></h3></a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="Customer_index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#about" class="nav-link">Products</a></li>
				<li class="nav-item"><a href="#authors" class="nav-link">Profile</a></li>
				<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
			</ul>
			</div>
		</div>
	</nav>
	<!----explore--->
<section id="showcase" class="py-5">
<div class="primary-overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center">
				<h1 class="display-2 mt-5 pt-5 text-left">So What You Dream Of...</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum,quas.</p>
        <a href="#" data-toggle="modal" data-target="#quesModal" id="a1" class="d-lg-block d-none">
						<span class="front">Have a question ?</span>
						<span class="center"></span>
						<span class="back">Click Here !</span>
					</a>
			</div>
			<div class="col-lg-6">
				<img src="img/book.jpg" class="img-fluid d-lg-block d-none">

			</div>
		</div>
	</div>
</div>
</section>
<!-----newsletter--->
<section id="newsletter"class="py-5 text-white bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<form>

					<input type="text" placeholder="Enter username" class="form-control form-control-lg">

			</form>
			</div>
			<div class="col-md-4">
				<form>

					<input type="email" placeholder="Enter password" class="form-control form-control-lg">

			</form>
			</div>
			<div class="col-md-4">
				<button class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-open-o pr-1"></i>Login</button>
			</div>

		</div>
	</div>
</section>
<!---BOX---->
<?php
$result = mysqli_query($connection,"SELECT * FROM Product order by product_id Desc Limit 3");


?>
<section id="box" class="py-5">
	<div class="container">
		<div class="row">
      <?php
      while($row=mysqli_fetch_assoc($result))
      {
			 echo '<div class="col-md-4">';
				echo '<div class="card border-primary text-center">';
					echo '<div class="card-body">';



              $prod_id=$row['Product_ID'];
              $result1 = mysqli_query($connection,"SELECT * FROM Photos Where Product_ID= '$prod_id' Limit 1");
              while ($row1=mysqli_fetch_assoc($result1))
              {
              echo "<img src='".$row1["Location"]."' height=100 width=100 class='img-fluid rounded-circle mb-3'>";
              }
              echo '<h3 class="text-dark">'.$row['Product_Name'].'</h3>';
              echo "<br>";

              echo   '</div>';
              echo "<div class='card-footer'>";
            echo '<a href="Product_reviews.php?id=' . $row["Product_ID"] .'" class="btn btn-secondary">';
              echo "<i class='fa fa-angle-double-right'></i>";
              echo " Reviews";
            echo "</a>";
            echo "<a href='buy.php?id=" . $row["Product_ID"] ."' class='btn btn-success ml-3'>";

            echo	"<i class='fa fa-pencil'></i>";
              echo " buy";
            echo "</a>";
            echo "</div>";

				echo '</div>';
        echo '</div>';
      }
      ?>

		</div>
	</div>
</section>

<!----ABOUT US --->
<section id="about" class="py-5 text-center bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="info-header mb-5">
					<h1 class="text-primary mb-3">Why Buy From Us?</h1>
					<p class="lead mb-3">Video provides a powerful way to help you prove your point. When you click online
					video</p>
				</div>
				<div id="accordian" role="tablist">
					<div class="card">
						<div class="card-header" id="heading">
							<h5>
								<div href="#collapse1" data-toggle="collapse" data-parent="#accordian">
									<i class="fa fa-arrow-circle-down"></i>
									Get Inspired
								</div>
							</h5>
						</div>
						<div id="collapse1" class="collapse show">
							<div class="card-body">
								Video provides a powerful way to help you prove your point. When you click online
								video.Video provides a powerful way to help you prove your point. When you click online
								video
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="heading">
							<h5>
								<div href="#collapse2" data-toggle="collapse" data-parent="#accordian">
									<i class="fa fa-arrow-circle-down"></i>
									Gain The Knowledge
								</div>
							</h5>
						</div>
						<div id="collapse2" class="collapse">
							<div class="card-body">
								Video provides a powerful way to help you prove your point. When you click online
								video.Video provides a powerful way to help you prove your point. When you click online
								video
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="heading">
							<h5>
								<div href="#collapse3" data-toggle="collapse" data-parent="#accordian">
									<i class="fa fa-arrow-circle-down"></i>
									Get Inspired
								</div>
							</h5>
						</div>
						<div id="collapse3" class="collapse">
							<div class="card-body">
								Video provides a powerful way to help you prove your point. When you click online
								video.Video provides a powerful way to help you prove your point. When you click online
								video
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<!-----AUTHORS---->
<section id="authors" class="my-5 text-center">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="info-header mb-5">
					<h1 class="text-primary mb-3">Reviews from our Customers</h1>
					<p class="lead mb-3">Video provides a powerful way to help you prove your point. When you click online
						video.Video provides a powerful way to help you prove your point.</p>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="img/person1.jpg" class="img-fluid rounded-circle w-50 mb-3">
						<h3>Susan Williams</h3>
						<h5 class="text-muted">Lead Writer</h5>
						<p>Video provides a powerful way to help you prove your point. When you click online
						video.Video provides a powerful way to help you prove your point.</p>
						<div class="d-flex flex-row justify-content-center">
							<div class="p-4">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="img/person2.jpg" class="img-fluid rounded-circle w-50 mb-3">
						<h3>Susan Williams</h3>
						<h5 class="text-muted">Co Writer</h5>
						<p>Video provides a powerful way to help you prove your point. When you click online
						video.Video provides a powerful way to help you prove your point.</p>
						<div class="d-flex flex-row justify-content-center">
							<div class="p-4">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="img/person3.jpg" class="img-fluid rounded-circle w-50 mb-3">
						<h3>Susan Williams</h3>
						<h5 class="text-muted">Lead Writer</h5>
						<p>Video provides a powerful way to help you prove your point. When you click online
						video.Video provides a powerful way to help you prove your point.</p>
						<div class="d-flex flex-row justify-content-center">
							<div class="p-4">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="img/person4.jpg" class="img-fluid rounded-circle w-50 mb-3">
						<h3>Susan Williams</h3>
						<h5 class="text-muted">Lead Writer</h5>
						<p>Video provides a powerful way to help you prove your point. When you click online
						video.Video provides a powerful way to help you prove your point.</p>
						<div class="d-flex flex-row justify-content-center">
							<div class="p-4">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
							<div class="p-4">
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!---TOUCH SECTION --->
<section id="touch" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="heading">
					<h1 class="mb-3">Get In Touch
					</h1>
					<p class="lead mb-3">Video provides a powerful way to help you prove your point. When you click online
						video.</p>
				</div>
				<form>
					<div class="form-group">

						<input type="text" placeholder="Name" class="form-control form-control-lg">

					</div>

					<div class="form-group">
						<input type="text" placeholder="Email" class="form-control form-control-lg">
						<i class="fa fa-pen"></i>
					</div>

					<div class="form-group">
						<textarea type="text" placeholder="Message" class="form-control form-control-lg"></textarea>
					</div>
					<button class="btn btn-primary btn-block btn-lg">Submit</button>
				</form>
			</div>
			<div class="col-md-3">
				<img src="img/mlogo.png" class="img-fluid mb-3">
			</div>
		</div>
	</div>
</section>
<!-----FOOTER SECTION ----->
<footer id="footer" class="py-5 bg-primary text-white text-right">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="copy">
					<h5 class="pr-5">Copyright &copy; 2018
					</h5>
				</div>
			</div>
		</div>
	</div>
</footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>
