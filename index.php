<?php
		//$servername="localhost";
		//$username="root";
		//$password="";
		//$dbname="socialnet";

		//$con=new mysqli($servername,$username,$password,$dbname);
		//if($con->connect_error){
			//die("Sorry, could not connect to server");
		//}
		//else {
			//echo "connected";
		//}<?php
		$servername="localhost";
		$username="root";
		$password="admin@123";
		$dbname="Product_Portfolio_Admin";

		$con=new mysqli($servername,$username,$password,$dbname);
		if($con->connect_error){
			die("Sorry, could not connect to server");
		}
		else {
			//echo "connected";
		}

			//function to exclude sql injection
		function test_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
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
				<a href="index.html" class="navbar-brand">LoveFromYours</a>
				<button class="navbar-toggler bg-dark" data-toggle="collapse" data-target="#navCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>

			</div>
		</nav>
		<header class="py-2 text-white bg-primary">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>
							<i class="fa fa-user"></i>
							Blogen Admin
						</h1>
					</div>
				</div>
			</div>
		</header>



<section class="mt-3 mb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 m-auto">
						<div class="card">
							<div class="card-header">
								<h4>Account Login</h4>
							</div>
							<div class="card-body">
								<form action="login.php" method="post">
									<div class="form-group">
										<label for="email">Email</label>
										<input name="UserName" type="text" class="form-control">
									</div>

									<div class="form-group">
										<label for="email">Password</label>
										<input name="Password" type="password" class="form-control">
									</div>

									<button name="submit" class="btn btn-primary btn-block">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>
