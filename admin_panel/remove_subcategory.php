<?php 
 
 include "partials/_dbconnect.php";
 echo $ID = $_GET['id'];

 $sql = "DELETE FROM `sub-category` WHERE id = $ID";
 $result = mysqli_query($conn, $sql);

 header('location: view_product.php');
?>