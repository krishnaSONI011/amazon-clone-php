<?php
$user_id =$_GET['user_id'];
$id = $_GET['id'];

include "db_connect.php";
$check ="SELECT * FROM `cart` WHERE `user_id`='$user_id' AND `product_id`='$id'";
$result1= mysqli_query($conn,$check);
// print_r($result1);
// exit;
$num =mysqli_num_rows($result1);
if($num>0){
      
    header("Location:../product.php?id=$id&status=nahi");
   
}
else{
$sql ="INSERT INTO `cart`(`product_id`,`user_id`,`quantity`) VALUES('$id','$user_id','1')";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:../product.php?id=$id&status=done");
}
}   
  ?>
