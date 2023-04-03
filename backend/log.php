<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "db_connect.php" ;
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $sql ="SELECT * FROM `user` WHERE `email` = '$email' ";
    $result =mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
if($num ==1){
    $row=mysqli_fetch_array($result);
    if($row['password']== $pass){
        $_SESSION['name'] =$row['firstname'];
        $_SESSION['user_id'] =$row['id'];
        $_SESSION['login'] =true;
        header("Location: ../index.php");
    }   

    else{
        echo "password is worn bhardbe";    
    }
}
else{
    echo "not found";
}
}
?>