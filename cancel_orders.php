<?php 
 
 include "admin_panel/partials/_dbconnect.php";
 echo $ID = $_GET['id'];

 $sql = "DELETE FROM `orders` WHERE id = $ID";
 $result = mysqli_query($conn, $sql);

 header('location: your_orders.php');
?>