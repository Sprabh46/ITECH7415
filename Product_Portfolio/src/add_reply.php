<?php
include('connect.php');
?>
<?php
if (isset($_POST['add']))
{ $id=$_POST['id'];
   $reply=$_POST['reply'];
   echo $id;
   echo $reply;
  // $email=$_POST['email'];
   //$comment=$_POST['comment'];
   //$d=strtotime("now");
  //$d1= date("Y-m-d h:i:s", $d);

   $res=mysqli_query($connection,"UPDATE review set Reply='$reply' where Review_id='$id' ") or die(mysqli_errno());
header("location:review.php");
 }
?>
