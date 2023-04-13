<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){          //when form is post method this will start running
   
// ========================================================DATABASE CONNECTION CALLED(INCLUDE)========================================    
include '../../backend/db_connect.php';                

// Storing data 
 $email = $_POST['email'];                   
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $mobile = $_POST['mobile'];
 $password = $_POST['password'];



//  $exists=false;
//  checking wheter user already exist
$existSql = "SELECT * FROM `signup` WHERE email = '$email'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
    $showError = " Email already been registered";
}
else{
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `user`(`email`, `firstname`, `lastname`, `mobile`, `password`) VALUES ('$email','$firstname','$lastname','$mobile','$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
      header("location: login.php");
        $showAlert = true;
    }

 }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">

    <title>Hello, world!</title>
  </head>
  <style>
    .main-con{
        border: 2px solid #ebebeb;;
        max-width: 355px;
        border-radius: 7px;
    }
   
  </style>
  <body>
    <!-- ==========================================================ALERT======================================================== -->
    <?php
if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>SUCCESS</strong> Signup succsessfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';}

  if($showError){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>ERROR!</strong> '. $showError .'.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';}
  ?>
   <!-- ==========================================================ALERT END======================================================== -->


      <!-- ==========================================================FORM======================================================== -->
      <div class="white py-3">
  <div class="text-center mb-3"> <img src="../../images/lg.png" alt="image" width="120px">  </div>

    <div class="container main-con">

    <h3 class="mt-2 ml-3 mb-2">Create Account</h3>
     
    <form action="user_signup.php" method="post" class="px-3">

    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Your First Name">
  </div>

  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Your Last Name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
  </div>

  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Your Password">
  </div>

  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="text" name="mobile" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="Enter Your Mobile Number">
  </div>

  
  <button type="submit" name="submit" class="btn btn-warning col-md-12 mt-2 mb-4 ">Sign up</button>

  <div class="mb-3"> <span>Already have an account.</span> <a href="login.php">Login?</a> </div>

</form>
</div>
</div>
<div class="text-center my-3">
    <p>© 1996-2023, Amazon.com, Inc. or its affiliates</p>
 </div>
    <!-- ==========================================================FORM END======================================================== -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>