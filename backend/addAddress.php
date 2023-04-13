<?php  
include "db_connect.php";
$user_id = $_GET['user_id'] ;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =$_POST['name'];
    $mobile =$_POST['moblie'];
    $address_line1=$_POST['address_line1'];
    $address_line2=$_POST['address_line2'];
    $landmark=$_POST['landmark'];
    $city =$_POST['city'];
    $pincode=$_POST['pincode'];
    $state =$_POST['state'];

    print_r($_POST);
    
    $sql ="INSERT INTO `address`(`user_id`,`address_line1`,`address_line2`,`city`,`landmark`,`state`,`pincode`,`name`,`mobile`) VALUE('$user_id','$address_line1','$address_line2','$city','$landmark','$state','$pincode','$name','$mobile')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:../all_address.php");
    }
    else{
        echo "somthing went worng";
    }
}

?>
