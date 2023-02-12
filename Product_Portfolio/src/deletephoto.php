<?php
include('connect.php');
				  if (isset($_GET['id']))
	{



			$id = $_GET['id'];
			$result = mysqli_query($connection,"SELECT Product_id FROM Photos Where Photo_id= '$id' ");
			while($row1=mysqli_fetch_assoc($result))
			{


			mysqli_query($connection,"DELETE FROM photos WHERE Photo_id='$id'");
			header("location: home.php");
		}


			}
			?>
