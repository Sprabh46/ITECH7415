<?php
include('connect.php');
?>
<?php if (isset($_POST['submit']))
  { $prod_id=$_POST['id'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $d=strtotime("now");
    $d1= date("Y-m-d h:i:s", $d);

    $res=mysqli_query($connection,"INSERT into review (Name,Email,Product_id,Comment,Added_on) values ('$fname','$email','$prod_id','$comment','$d1') ") or die(mysqli_errno());
    header("location:Customer_index.php");
  }

    ?>
