<?php
include "db_connect.php";

$product_id=$_GET['prod_id'];
$user_id=$_GET['user_id'];


$sql="DELETE FROM `cart` WHERE `product_id` LIKE $product_id AND `user_id` LIKE $user_id";

$result=mysqli_query($conn,$sql);
if($result){
    header("location:../cart.php?id=$user_id");
}
?>