 <!-- =====================================================Remove Address========================================================================== -->
<?php 
 
 include 'admin_panel/partials/_dbconnect.php';
 echo $id = $_GET['id'];

 $sql = "DELETE FROM `address` WHERE `id` = $id";
 $result = mysqli_query($conn, $sql);

 header('location: all_address.php');
?>