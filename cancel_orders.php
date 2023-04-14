<?php 
  
 include "admin_panel/partials/_dbconnect.php";
 $ID = $_GET['id'];

 $sql = "DELETE FROM `orders` WHERE product_id = $ID";
 $result = mysqli_query($conn, $sql);
 if($result){
    echo "deleted";
 }else{
    echo "not deleted";
 }
 header("location: your_orders.php");

?>