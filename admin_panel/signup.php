<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){          //when form is post method this will start running
   
// ========================================================DATABASE CONNECTION CALLED(INCLUDE)========================================    
include 'partials/_dbconnect.php';                

// Storing data 
 $name = $_POST['name'];                   
 $email = $_POST['email'];
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
    $sql = "INSERT INTO `signup`(`name`, `email`, `password`) VALUES ('$name','$email','$hash')";
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

    <title>Hello, world!</title>
  </head>
  <style>
    .main-con{
        max-width: 355px;
        border-radius: 5px;
    }
    html{
      background-color: rgb(188, 188, 188);
    }
    .foot{
      background-color: rgb(188, 188, 188);
    }
  </style>
   
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
      <div class ="white pt-5 pb-4">
  <div class="text-center img"> <img src="image/sc-unified._CB485930462_.png" alt="image" width="180px">  </div>

    <div class="container mt-3 border main-con">

    <h2 class="mt-4 ml-3">Sign-up</h2>
     
    <form action="signup.php" method="post" class="px-3">

    <div class="form-group ">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name="name" class="form-control"  id="name" onchange=checkfirstname()  aria-describedby="emailHelp" placeholder="Enter Name" required >
    <div id="fname"> </div>
  </div>

  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" required onchange=checkvalidemail() required>
    <div id="emailerror"></div>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" onchange=ckeckstrongpassword() required>
    <div id="passworderror"></div>
  </div>

  
  <button type="submit" name="submit" class="btn btn-warning col-md-12 mt-2 mb-4 ">Sign up</button>

</form>
</div>
</div>
    <!-- ==========================================================FORM END======================================================== -->

    <div class="text-center my-3">
    <p class="foot">© 1996-2023, Amazon.com, Inc. or its affiliates</p>
 </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      function checkfirstname() {
    let name = document.getElementById("name");
    let name_value = name.value;
    let regex = /^[a-zA-Z\s]+$/;
    if (!regex.test(name_value)) {
        // alert("Invalid name! Only letters and spaces are allowed.");
        let fname = document.getElementById('fname').innerHTML =
            "<p style='color:red'>Name only allow to enter letter or spaces</p>";
        name.value = "";

    }

    if (regex.test(name_value)) {
        let fname = document.getElementById('name').innerHTML = "";

    }
}

function checkvalidemail() {
  let email = document.getElementById("email");
    let email_value = email.value;
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(email_value)) {
        let emailerror = document.getElementById("emailerror").innerHTML =
            "<p style ='color:red'>please enter a valid email</p>";
        email.value = "";
    } else {
        let emailerror = document.getElementById("emailerror").innerHTML = "";
    }
}

function ckeckstrongpassword(){
     let password = document.getElementById("password");
     let password_value =password.value;

     if(password_value.length < 8){
      let passworderror =document.getElementById("passworderror").innerHTML =
      "<p style ='color:red'>password must be atleast 8 charecter</p>"
      password.value="";
     }else if(password_value.length > 15){
      let passworderror =document.getElementById("passworderror").innerHTML =
      "<p style ='color:red'>password must not exceed 15 cherecter</p>"
      password.value="";
     }else{
      let passworderror = document.getElementById("passworderror").innerHTML = "";
     }
}

    </script>
  </body>
</html>