<?php 
include "db_connect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $address_id =$_POST['radio'];
    $user_id=$_GET['id'];
    $method =$_POST['payment'];
    $product= $_POST['product'];

    for($i=0 ;$i < count($product);$i++){
      $product_id =$product[$i];
        
      $sql ="INSERT INTO `orders`(`product_id`,`user_id`,`address_id`,`method`) VALUE('$product_id','$user_id','$address_id','$method')";
      $result =mysqli_query($conn,$sql);


    }
    header("Location:../thanku.php");
}


?>