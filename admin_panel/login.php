<?php
 $login = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){          //when form is post method this will start running
   
// ========================================================DATABASE CONNECTION CALLED(INCLUDE)========================================    
include 'partials/_dbconnect.php';                

// Storing data 
  
 $email = $_POST['email'];                     
 $password = $_POST['password'];
  




 // $sql = "Select * from users8201 where username = '$username' AND password = '$password'";
    $sql = "Select * from signup where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      while($row = mysqli_fetch_assoc($result)){               //fetch
        if(password_verify($password, $row['password'])){      //hash password verify
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email'] = $email;
          $_SESSION['name'] =$row['name'];
          header("location: admin.php");
        }
        else{
          $showError = "Password do not match";
        }
      }
    }
     
  else{
    $showError = "Enter the email correctly";
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
    html{
      background-color: rgb(188, 188, 188);
    }
    .main-con{
        max-width: 355px;
        border-radius: 5px;
    }
    .foot{
      background-color: rgb(188, 188, 188);
    }
  </style>
  <body>

  <!-- ---------------------------------------------------------------Alert if sucess--------------------------------------------------------     -->
 <?php
 if($login){
   echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SUCCESS </strong>You Are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div> ';
   }
// ---------------------------------------------------------------Error if password do not match-------------------------------------
   if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error! </strong> '. $showError .'
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
   </div> ';
    }
 ?>




<div class="white py-3">
  <div class="text-center img mt-4"> <img src="image/sc-unified._CB485930462_.png" alt="image" width="180px">  </div>

    <div class="container mt-3 border main-con">

    <h2 class="mt-4 ml-3">Login</h2>
     
    <form action="login.php" method="post" class="px-3">

 
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" onchange=checkvalidemail() required>
    <div id="emailerror"></div>

  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" onchange=checkstrongpassword() required>
    <div id="passworderror"></div>
  </div>

  <div class="form-check my-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
  </div>

  <button type="submit" class="btn btn-warning col-md-12 mb-4 mt-2">Login</button>
  <hr>
  <div class="text-center mb-2">New to Amazon?</div>

</form>
<a href="signup.php" class="btn btn-light col-md-12 mb-3">Create Your Amazon Account</a>
</div>
</div>

<div class="text-center my-3">
    <p class="foot">© 1996-2023, Amazon.com, Inc. or its affiliates</p>
 </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
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

function checkstrongpassword(){
   let password = document.getElementById("password");
   let password_value = password.value;
   if(password_value.length < 8){
     let passworderror = document.getElementById("passworderror").innerHTML =
     "<p style ='color:red'>password must be atleast 8 charecter</p>";
     password.value = "";
   }else if(password_value.length > 15){
    let passworderror = document.getElementById("passworderror").innerHTML =
     "<p style ='color:red'>password must exceet 15 charecter</p>";
     password.value = "";
   }else{
    let passworderror = document.getElementById("passworderror").innerHTML ="";
   }
}
    </script>
  </body>
</html>