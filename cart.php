<?php 
// session_start();
// if(!isset($_SESSION['login'])){
//     header("Location: pages/login/login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container ">
        <div class="row p-4">
            <div class="col-md-9 white">
                <div class="p-2">
                    <h3>Shopping Cart</h3>
                </div>
                <!-- p-2 -->
                <hr>

                <div class="cart-body ">
                    <div class="d-flex ">
                        <div class="cart-img text-center ">
                            <img src="images/product-img.jpg" alt="">
                        </div>
                        <div class="" style="width:50%">
                            <p><strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor vel explicabo
                                    quibusdam facilis cupidita</strong></p>
                                    <div class="qty">
                            <input type="number" style="width:14%" placeholder="QTY">
                            <a href="#" class=" ">Delete</a></div>
                        </div>
                        <div class="price text-center" style="width:20%">
                            <span class="daam">3000</span>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
                
            <!-- col-md-9 -->
            <div class="col-md-3 pesa-section ">
                <div class="text-bg-light text-center p-2">
                   <p>Subtotle(2 items):<strong>3000<strong></p>
                   <div>
                    <button class="btn btn-warning">Proceed to Buy</button>
                   </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>