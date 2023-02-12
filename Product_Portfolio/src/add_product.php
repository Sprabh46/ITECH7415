<?php include('connect.php')?>
<?php


	//function to prevent mysql injection
		function test_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}

	echo"1";
	//taking value of message and member id from home.php(created in session)
			$title = test_input($_POST['title']);
			$category =test_input($_POST['category']);

			$description=$_POST['editor'];
			$ingredients=$_POST['editor1'];
			$items=test_input($_POST['items']);
			$rate=test_input($_POST['rate']);
			$d=strtotime("now");
			$d1= date("Y-m-d h:i:s", $d);


	//.strtotime-The function expects to be given a string containing an English date format and will try to parse that format into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 UTC).

		$sql="INSERT INTO product (Product_Name,date_created, Category,Product_Description,Product_Ingredients,Product_Rate,Number_of_Item) VALUES ('$title','$d1','$category', '$description','$ingredients','$rate','$items')";
		//echo $messages;
		if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error($connection));
  }

	//if (!isset($_FILES['photo']['tmp_name'])) {
		//echo "greet1();";
		//}
		//else
		//{
			$totalfiles = count($_FILES['photo']['name']);
			$last_id = $connection->insert_id;
			for($i=0;$i<$totalfiles;$i++)
			{
				$filename = $_FILES['photo']['name'][$i];
				if(move_uploaded_file($_FILES["photo"]["tmp_name"][$i],'upload/'.$filename)){
					$location="upload/" . $_FILES["photo"]["name"][$i];
		// Image db insert sql

		$insert = "INSERT into photos(Location,Product_ID) values('$location','$last_id')";
		if(mysqli_query($connection, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($connection);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
	}

		//$image= addslashes(file_get_contents($_FILES['photo']['tmp_name'][$i]));
		//$image_name= addslashes($_FILES['photo']['name'][$i]);
		//$image_size= ($_FILES['photo']['size'][$i]);
		//$error=$_FILES['photo']['error'][$i];
		//$last_id = $connection->insert_id;
		//	if ($error > 0){
			//		die("Error uploading file! Code $error.");
				//}
				//else
				//{
				//	if($image_size > 10000000) //conditions for the file
					//{
					//die("Format is not allowed or file size is too big!");
				//	}
			//else{

				//if (move_uploaded_file($_FILES["photo"]["tmp_name"][$i],"upload/" . $_FILES["photo"]["name"]));
				//{
				//$location="upload/" . $_FILES["photo"]["name"];
				//$by=$_POST['product_id'];

				//$sql="INSERT INTO photos (location, product_id)VALUES('$location','$last_id')";
			//}
	//if (!mysqli_query($connection,$sql))
	  //{
	  //die('Error: ' . mysqli_error($connection,$sql));
	  //}
	//}
}
header("location: home.php");
exit();
//}


?>
