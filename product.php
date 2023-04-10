<?php  
$id= $_GET['id'];
include "backend/db_connect.php";
$sql ="SELECT * FROM `product` WHERE `id` ='$id'";

$result =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);
if(!isset($_GET['status'])){
    $_GET['status'] =null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div style="background:white">
        <?php include "navbar.php" ?>
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-4 text-center ">

                    <img src="<?php echo $row['image'] ?>" alt="" style="width:90%">


                </div>
                <div class="col-md-4">
                    <div class="product-title">
                        <h3><?php echo $row['name']?></h3>
                        <p><?php  echo $row['description']  ?></p>
                    </div>
                    <!--product-title -->
                    <hr>
                    <div class="pro-price">
                        <span class="price-logo">&#8377;</span><strong class="daam"><?php echo $row['price'] ?></strong>
                        <p>Inclusive of all taxes</p>
                    </div>
                    <hr>
                    <div class="icons-container d-flex justify-content-evenly">
                        <div class="icon  text-center">
                            <img src="images/truck-icon.png" alt="">
                            <p>Free delivery</p>
                        </div>
                        <div class="icon text-center">
                            <img src="images/cod-icon.png" alt="">
                            <p>cash on delivery</p>
                        </div>
                        <div class="icon text-center">
                            <img src="images/warr-icon.png" alt="">
                            <p>warranty policy</p>
                        </div>
                        <div class="icon text-center">
                            <img src="images/replace-icon.png" alt="">
                            <p>10 day replacement</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card text-center" style="width: 18rem;">

                        <div class="card-body text-center">
                            <h5 class="card-title text-success">Available to ship in 1-2 days</h5>
                            <p class="card-text">Sold by Appario Retail Private Ltd and Fulfilled by Amazon.</p>
                            <?php if(!isset($_SESSION['login'])){ ?>
                            <a href="#">
                                <button class="btn btn-warning w-100 border-r">Add to carts</button>
                            </a>
                            <?php } ?>
                            <?php if(isset($_SESSION['login'])){ 

                               
         
    
    
                            if($_GET['status']=='done'){ ?>
                            <button disabled="disabled">ADDED</button>
                            <?php  }
                            else if($_GET['status']=="nahi"){ ?>
                            <script>
                            alert("product is already there");
                            </script>
                            <a href="backend/cartBack.php?id=<?php echo $id ?>&user_id=<?php echo $_SESSION['user_id']?>">
                                <button class="btn btn-warning w-100 border-r">Add to carts</button>
                            </a>

                            <?php }
                            else{?>
                                <a href="backend/cartBack.php?id=<?php echo $id ?>&user_id=<?php echo $_SESSION['user_id']?>">
                                <button class="btn btn-warning w-100 border-r">Add to carts</button>
                            </a>
                           <?php }
                                  } ?>
                            <a href="checkout_page.php?id=<?php echo $_SESSION['user_id']?>&product_id=<?php echo $id ?>&page_id=product"><button class="btn btn-orange w-100 my-3 border-r">Buy Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
</body>

</html>