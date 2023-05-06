<?php 
 $page_id=$_GET['pageid'];
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
        if($page_id=='home'){
        header("Location: ../");
        }
        else if($page_id=='cart'){
            header("Location: ../cart.php");
       

        }
        else if($page_id=='address'){
            header("Location:../all_address.php");

        }
    }   

    else{
        header("location: ../admin_panel/error.php");   
    }
}
else{
    header("location: ../admin_panel/error.php");
}
}
?>