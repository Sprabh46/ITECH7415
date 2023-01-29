<?php
include('connect.php');
				  if (isset($_GET['id']))
	{



			$id = $_GET['id'];

			mysqli_query($connection,"DELETE FROM photos WHERE Photo_id='$id'");
			header("location: update.php");
			exit();

			mysqli_close($connection);
			}
			?>
