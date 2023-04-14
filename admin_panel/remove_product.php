<?php 
 
 include "partials/_dbconnect.php";
 echo $ID = $_GET['id'];

 $sql = "DELETE FROM `product` WHERE id = $ID";
 $result = mysqli_query($conn, $sql);

 header('location: view_product.php');
?>