<?php
include('connect.php');
?>

<?php
if (isset($_POST['buy']))
{ $id=$_POST['id'];
   $item=$_POST['item'];
   echo $id;
   echo $item;
   $result=mysqli_query($connection, "SELECT * FROM product Where Product_ID= '$id'");
   while($row=mysqli_fetch_assoc($result))
   {
     $total_item=$row['Number_of_Item'];

   }
   $final=$total_item-$item;



  // $email=$_POST['email'];
   //$comment=$_POST['comment'];
   //$d=strtotime("now");
  //$d1= date("Y-m-d h:i:s", $d);

   $res=mysqli_query($connection,"UPDATE product set Number_of_Item='$final' where Product_ID='$id' ") or die(mysqli_errno());
header("location:Customer_index.php");
 }
?>
