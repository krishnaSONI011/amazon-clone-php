<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "amazon";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    header("location: error.php");
    die("Error".  mysqli_connect_error());
}else{
echo"database connected";
}
?>
