<?php 
include "db_connect.php";
$category_id =$_GET['categoryid'];
$subcategory_id=$_GET['subcategoryid'];

$sql ="SELECT * FROM `product` WHERE `category_id`=1";
$result=mysqli_query($conn,$sql);
header("Location:../allproduct.php?result=".$result);
exit;
?>