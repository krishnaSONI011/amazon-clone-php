
<?php
$user_id=$_GET['id'];
$page_id=$_GET['page_id'];
include "backend/db_connect.php";
$sql ="SELECT * FROM `address` WHERE `user_id`='$user_id'";
$adress =mysqli_query($conn,$sql);
$num_address =mysqli_num_rows($adress);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="nav">
            <div class="container">
                <div class="d-flex justify-content-between p-2 align-items-center">
                    <div class="logo">
                        <img src="images/logo5.png" alt="">
                    </div>
                    <div class="head">
                        <p>CheckOut</p>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <form action="backend/order.php?id=<?php echo $user_id?>" method="POST">
    <div class="container">
        <div class="row p-4">
            <div class="col-md-9">
                <div class="address">
                    <h4>1. Select a delivery address</h4>
                    <hr>
                    <div id="main-address">
                        <?php if($num_address > 0) {
                            $forid =1;
                                while($row=mysqli_fetch_array($adress)){

                            ?>
                        <div class="address-body m-2">
                            <div class="body d-flex width ">
                                <input type="radio" value="<?php echo $row['id']?>" id="<?php echo $forid?>" class="radio" name="radio" >
                                <label for="<?php echo $forid?>"
                                    class="label"><strong><?php echo $row['name'] ?></strong>
                                    <?php echo $row['address_line1'].","; echo $row['address_line2'].","; echo $row['city']." "; echo $row['state']." "; echo $row['pincode']." "?>
                                    Phone number:<?php echo $row['mobile'] ?> </label>
                            </div>

                        </div>
                        <!-- address-body -->
                        <?php
                       $forid +=1;
                        }
                    }
                    ?>
                    </div>
                    <div id="sele">
                        <strong> Selected Address : </strong>
                        <p id="address-here"> </p>
                        <input type="hidden" name="final-address" value="" id="address-here-database" >
                    </div>
                    <!-- main-address -->
                    <button type="button" class="btn btn-warning" id="address_btn">Select address</button>
                    <a href="all_address.php"><button type="button" class="btn btn-dark" id="address_btn">Add address</button></a>


                </div>
                <hr>
                <!-- address -->
                <div class="payment">
                    <h4>2. Payment Method </h4>
                    <hr>
                    <div class="payment-body">
                        <input type="radio" name="payment" id="cash" value="COD" required>
                        <label for="cash">Cash on delivery</label>
                    </div>
                    <hr>
                </div>
                <!-- payment -->
                <div class="items">
                    <h4>3.Items</h4>
                    <hr>
                    <?php 
                    if($page_id =="cart"){
                $sql2 ="SELECT * FROM `cart` WHERE `user_id` ='$user_id'";
                $cart =mysqli_query($conn,$sql2);
                while($row2=mysqli_fetch_array($cart)){
                    $price = $_POST['price'] ==null ? 3 :$_POST['price'];
                    $pro_id =$row2['product_id'];
                    $sql3 ="SELECT * FROM `product` WHERE `id` ='$pro_id'";
                    $product =mysqli_query($conn,$sql3);
                    $row3 =mysqli_fetch_array($product);
                 ?>
                    <div class="body p-2">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="admin_panel/<?php echo $row3['image'] ?>" alt="" class="item-img">
                            </div>
                            <div class="col-md-4">
                                <p><strong><?php echo $row3['name']." ";  ?></strong><?php echo $row3['description'] ?>
                                <input type="hidden" name="product[]" value="<?php echo $pro_id ?>">

                                </p>
                            </div>
                        </div>
                    </div>

                    <?php }
                    }
                                     ?>
                    <?php 
                    if($page_id =="product"){
               
                        $pro_id =$_GET['product_id'];
                        $sql3 ="SELECT * FROM `product` WHERE `id` ='$pro_id'";
                        $product =mysqli_query($conn,$sql3);
                        $row3 =mysqli_fetch_array($product);
                        $p_price =$row3['price'];
                        ?>
                    <div class="body p-2">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="admin_panel/<?php echo $row3['image'] ?>" alt="" class="item-img">
                            </div>
                            <div class="col-md-4">
                                <p><strong><?php echo $row3['name']." ";  ?></strong><?php echo $row3['description'] ?>
                                </p>
                                <input type="hidden" name="product[]" value="<?php echo $pro_id ?>">
                            </div>
                        </div>
                    </div>

                    <?php }
                    
                                     ?>
                </div>
                <hr>
            </div>
            <!-- col-md-9 -->
            <div class="col-md-3">
                <div class="summary">
                    <hr>
                    <p>no. of items: 2</p>
                    <p> totle: 400</p>
                    <?php $price = ""?>
                    <!-- if pgaeid==product => p_price else ==Post -->
                    
                    <hr>
                    <p id="">Oreder Total: <?php  echo $price = $page_id =="product" ?$p_price: $_POST['price']; ?></p>
                    <hr>
                    <button type="submit" class="btn btn-warning">Proceed to buy</button>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
                    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="js/script2.js"></script>
</body>

</html>