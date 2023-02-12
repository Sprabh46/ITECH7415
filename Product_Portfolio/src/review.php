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
  <link rel="stylesheet" href="css">
</head>
<body>

 <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
	<div class="container">
		<a href="home.php" class="navbar-brand">LoveFromYours</a>
		<button class="navbar-toggler bg-dark" data-toggle="collapse" data-target="#navCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navCollapse">
		<ul class="navbar-nav">
      <li class="nav-item px-2 "><a href="home.php" class="nav-link">Dashboard</a></li>
			<li class="nav-item px-2"><a href="products.php" class="nav-link">Products</a></li>
			<li class="nav-item px-2"><a href="categories.php" class="nav-link">Categories</a></li>
			<li class="nav-item px-2 active"><a href="review.php" class="nav-link">Reviews</a></li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown mr-3">
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
			<li>
				<a href="logout.php" class="nav-link">
					<i class="fa fa-user-times"></i>
					Logout
				</a>
			</li>
		</ul>
		</ul>
	</div>
 </nav>

 <!---HEADER ---->

 <header class="bg-warning text-white py-2">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					<i class="fa fa-users"></i>
				Reviews
				</h1>
			</div>
		</div>
	</div>
 </header>


 <!--ACTION SECTION-->
 <section class="py-4 mb-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ml-auto">
				<div class="input-group">
					<input type="text" placeholder="Search" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-warning">Search</button>
					</span>
				</div>
			</div>
		</div>
	</div>
 </section>


 <!---USERS SECTION --->
 <section class="mb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card-header">
					<h4>Latest Reviews</h4>
				</div>
				<table class="table table-striped">
					<thead class="thead-inverse">
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Review</th>
              <th>Added on</th>
              <th>Product Id</th>
              <th></th>
						</tr>
					</thead>
					<tbody>
            <?php

            $result = mysqli_query($connection,"SELECT * FROM review order by Added_on Desc Limit 6");
            $i=1;
             while($row = mysqli_fetch_assoc($result))
             {
              echo "<tr>";
               echo "<td scope='row'>".$i."</td>";
               echo "<td>";
                           //$_SESSION['SESS_Prod_ID'] = $row['Product_ID'];
                           echo $row["Name"];
                            $id=$row['Review_Id'];
                           echo"<td>".$row["Email"]."</td>";
                           echo  "<td>".$row["Comment"]."</td>";
                           echo"<td>".$row["Added_on"]. "</td>";


             echo "	<td>";
             echo $row['Product_id']." ";
                 echo '<a href="details.php?id=' . $row["Product_id"] .'" class="btn btn-secondary">';
                   echo "<i class='fa fa-angle-double-right'></i>";
                   echo " Details";
                 echo "</a>";
               echo "</td>";

               //echo "<td>";
                 //echo "<a href='update.php?id=" . $row["Product_id"] ."' class='btn btn-success'>";

                 //echo	"<i class='fa fa-pencil'></i>";
                   //echo " Update";
                 //echo "</a>";
               //echo "</td>";
               echo "<td>";
               echo "<form method='POST' action='add_reply.php'>";
               echo "<input type='text'class='form-control' name='reply'> ";
               echo "<input type='number' class='form-control' name='id' value=".$id." hidden>";
                 echo " <button name='add' class='btn btn-warning mt-1 ml-5 ' value='Post'>";
                   echo "<i class='fa fa-plus'></i>";
                   echo " Reply";
                 echo "</button>";
               echo "</td>";
               echo "</form>";



             echo "</tr>";
             $i++;
             }		?>

					</tbody>

				</table>
				<div class="ml-4">
					<ul class="pagination">
						<li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
						<li class="page-item active"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
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
				<legend>Copyright <span>&copy;</span> 2017 Blogen</legend>
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
