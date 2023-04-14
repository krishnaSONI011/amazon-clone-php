<?php 
 
 include "admin_panel/partials/_dbconnect.php";
 $ID = $_GET['id'];

 $sql = "DELETE FROM `orders` WHERE product_id = $ID";
 $result = mysqli_query($conn, $sql);

if($result){
   header("location:your_orders.php");
}else{
    echo "does not deleted";
}
?>