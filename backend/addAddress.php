<?php  
include "db_connect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =$_POST['name'];
    $mobile=$_POST['mobile'];
    $address_line1=$_POST['address_line1'];
    $address_line2=$_POST['address_line2'];
    $landmark=$_POST['landmark'];
    $city =$_POST['city'];
    $pincode=$_POST['pincode'];
    $state =$_POST['state'];
    

}

?>
