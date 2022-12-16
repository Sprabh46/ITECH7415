<?php include("connect.php")?>
<?php
//Start session
session_start();



	function test_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}

		//Sanitize the POST values
$UserName = test_input($_POST['UserName']);
	$Password =(($_POST['Password']));




	echo $UserName;
	echo $Password;
		//Create query
	$qry="SELECT * FROM members WHERE Id='$UserName' AND Password='$Password'";
	$result=mysqli_query($connection,$qry);


		//Check whether the query was successful or not
if($result) {
	echo "query working";
	echo "Problem";
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			echo "function working";
			session_regenerate_id();
			//$member = mysqli_fetch_assoc($connection,$result);
			$member=mysqli_fetch_assoc($result);
			echo "function2 working";
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];

			session_write_close();

			echo"If you can see this problem ended.";
			header("location: Customer_index.php");
			exit();
		}
		else { echo " function Not working";
			echo "else part working";
			//Login failed
			header("location: errorlogin.php");
			exit();
		}
	}else {
		echo "Query not working";
	die("Query failed");
	}



?>
