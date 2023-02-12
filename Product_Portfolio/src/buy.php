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
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />

  <script type="text/javascript">
  function greet()
  {
    i=parseInt(document.getElementByID("item").value);
    p=pareseInt(document.getElementByID("price").value);
    res=i*p;
    document.getElementByID("total").innerHTML=res;
  }
  </script>
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
    <?php
   $prod=$_GET['id'];
  $sql = "SELECT Product_id, Location FROM Photos where Product_id='".$prod."' LIMIT 4";
  $resultset = mysqli_query($connection, $sql) or die("database error:". mysqli_error($conn));
  $image_count = 0;
  $button_html = '';
  $slider_html = '';
  $thumb_html = '';
  while( $rows = mysqli_fetch_assoc($resultset)){
  	$active_class = "";
  	if(!$image_count) {
  		$active_class = 'active';
  		$image_count = 1;
  	}
  	$image_count++;
  	$thumb_image = $rows['Location'];
  	// slider image html
  	$slider_html.= "<div class='item ".$active_class."'>";
      $slider_html.= "<img src='".$rows['Location']."' height='490'  alt='1.jpg' class='img-responsive'>";
      $slider_html.= "<div class='carousel-caption'></div></div>";
  	// Thumbnail html
  	$thumb_html.= "<li><img src='".$thumb_image."' height=100 width=100 alt='$thumb_image'></li>";
  	// Button html
  	$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
  }
  ?>
<section id="about" class="text-center py-5 bg-light ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 center">

  	<div id="carousel-example-generic" class="carousel slide d-md-block d-none" data-ride="carousel" data-interval="false">
  		<ol class="carousel-indicators">
  		<?php echo $button_html; ?>
  		</ol>
  		<div class="carousel-inner">
  			<?php echo $slider_html; ?>
  		</div>
  		<a class="carousel-control-prev dark" href="#carousel-example-generic" role="button" data-slide="prev">
  			<span class="carousel-control-prev-icon"></span>
  		</a>
  		<a class="carousel-control-next dark" href="#carousel-example-generic" role="button" data-slide="next">
  			<span class="carousel-control-next-icon"></span>
  		</a>
  		<!-----<ul class="thumbnails-carousel clearfix">
  		<?//php echo $thumb_html; ?>
    </ul>------->
  	</div>
  </div>
<div class="col-md-6">
  <div class="card-body ">
    <table class="table">
      <tbody>
     <?php $prod_id=$_GET['id'];
     $result = mysqli_query($connection,"SELECT * FROM Product Where Product_ID= '$prod_id' ");
     $i=1;
      while($row = mysqli_fetch_assoc($result))
      {

       echo "<tr>";
        echo "<td>";
        echo '<div class="h1">'.$row["Product_Name"].'</div>';
        echo "</td>";

        echo "</tr>";


        //echo"<tr>";

        //echo "<td>";
        //echo "<div class='h2'>".$row["Category"]."</div>";
      //  echo "</td></tr>";
        //echo  "<tr>";
        //echo "<td>";
        //echo "<div class='h4'> Date of Creation:-".$row['date_created']."";
        //echo "</div>";
        //echo "</td></tr>";

        echo "<tr><td>";
        echo "<div class='h2'>Description";
        echo "</div>";
        echo "<span>".$row['Product_Description']."</span>";
        echo "</td></tr>";
        echo"<tr><td>";
        echo "<div class=h2>Ingredients";
        echo"</div>";
        echo "<span>".$row['Product_Ingredients']. "</span>";

        echo "</td></tr>";
        echo"<tr><td>";
        $items=$row["Number_of_Item"];

        echo "<div class='h2'>Price:-$".$row["Product_Rate"]."</div>";
        $rate=$row["Product_Rate"];
        echo "</td></tr>";





      $i++;
      }		?>



  </tbody>
  </table>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#buy">Buy</button>
    <a href="#" data-toggle="modal" data-target="#review" class="h3">Like This product? Would u like to review it...</a>
  </div>
</div>
  </div>
  </div>
</section>
<div class="container">
  <div class="row">
<div class="col-md-12">
  <div class="">
    <div class="bg-success">
      <h1>Reviews</h4>
    </div>
    <div class=" ">
      <section id="icon-boxes" class=" p-4">
    <div class="">
      <div class="row ">
        <?php $prod_id=$_GET['id'];
        $result = mysqli_query($connection,"SELECT * FROM review Where Product_id= '$prod_id' order by Added_on DESC");
        $i=1;
        if(mysqli_num_rows($result)>0)
        {

         while($row = mysqli_fetch_assoc($result))
         {
      echo   '<div class="col-md-4">';
        echo   '<div class="card bg-lead text-center bg-dark border-warning text-warning mb-3">';
          echo   '<div class="card-body">';
              echo '<i class="fa fa-building"></i>';
            //  echo "<h3>xorem ipsum</h3>";
            echo '<div class="h3">Added By:'.$row["Name"].'</div>';
              //echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.";
              echo "<div class='h6'> Added on:-".$row['Added_on']."</div>";
                echo "<span class='h4'> Comments:-".$row['Comment']."</span>";
                echo "<div class='h4'>Replies: ".$row['Reply']."</div>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
        echo "<br>";
        $i++;
      }
    }


      else {
        echo "No reviews yet.";
      }
    ?>
  </div>
</div>
</div>
</section>




    </div>
  </div>
</div>
</div>
</div>
<div class="modal fade col-md-12" id="buy">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title">Confirm Details</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>

				<form method="post" action="update_item.php" enctype="" class="was-validated">

            <div class="modal-body">

            <div class="form-group">
  						<label for="items">Number of Items</label>
  						<input type="number" class="form-control" id="item" name="item"  min="1" max="<?php echo $items-1;  ?>" value="1" required>
              <input type="number" classs="form-control" id="Product_id" name="id" value="<?php echo $prod_id; ?>" hidden>
  					</div>
            <div class="form-group">
  						<label for="items">Price</label>
  						<input type="text" class="form-control" id="price" name="price"  value="<?php echo $rate ?>" readonly>
  					</div>
<!-----------
            <div class="form-group">
              <button onmouseover='greet();'>Total</button>
                 <label for="items">Total</label>
     						<input type="text" class="form-control" id="total" name="total"  readonly>

  					</div>
-------->
          </div>

			<div class="modal-footer">
				<a class="btn btn-secondary" href="#" data-dismiss="modal">Close</a>
				<button class="btn btn-primary" href="" name="buy" value="POST" data-dismiss="close" >Confirm</button>
			</div>
      </form>

	</div>
</div>
</div>

  <div class="modal fade col-md-12" id="review">
    <div class="modal-dialog modal-lg">
  		<div class="modal-content">
        <form method="post" action="add_review.php" enctype="" class="was-validated">
          <div class="card p-4">
            <div class="card-body">
              <h3 class="text-center">Please fill out this form.</h3>
              <hr>
              <div class="row">

                <div class="col-md-6">

                  <div class="form-group">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                  </div>
                </div>
                <!---------
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                  </div>
                </div>--------->

                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                    <input type='number' class='form-control' name='id' value='<?php echo $prod_id;?>' hidden>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="comment" placeholder="Message" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <a class="btn btn-secondary" href="#" data-dismiss="modal">Close</a>
                  <input type="submit" name="submit" value="POST" href="#" class="btn btn-outline-danger">
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>


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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src="js/carousel-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>
