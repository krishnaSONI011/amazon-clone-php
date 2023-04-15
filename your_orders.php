<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.amazon.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    background-color: white;
}

.main-con {
    border: 1px solid black;
    border-radius: 6px;
    background-color: rgb(235, 235, 235);
}

.box sample {
    border: 1px solid grey;
}

.search_btn {
    background-color: black;
    color: white;
    border-radius: 20px;
}

.search_btn:hover {
    background-color: rgb(66, 66, 66);
}

.head_box {
    background-color: rgb(206, 206, 206);
    border-radius: 6px;
}
</style>

<body>
    <?php include "navbar.php" ?>

    <div class="container main-container my-5">

        <div class="row">
            <div class="col-md-7 box">
                <h3>Your Orders</h3>
            </div>
            <div class="col-md-3 box"> <input class="form-control mr-sm-2" type="search" placeholder="Search all orders"
                    aria-label="Search"> </div>
            <div class="col-md-2 box"> <button class="btn search_btn btn-outline-dark my-2 my-sm-0 col-md-8"
                    type="submit">Search Orders</button> </div>
        </div>

        <?php
        
                include "backend/db_connect.php";
                $user_id =$_SESSION['user_id'];
                $sql1="SELECT * FROM `user` WHERE `id`='$user_id'";
                $users =mysqli_query($conn,$sql1);

                $row_user=mysqli_fetch_array($users);
        // print_r($sql);exit;

             $sql2="SELECT * FROM `orders` WHERE `user_id`=$user_id";
             $order =mysqli_query($conn,$sql2);
             $num_order =mysqli_num_rows($order);

             if($num_order>0){
                while($row_order=mysqli_fetch_array($order)){
                    $product_id =$row_order['product_id'];
                    $address_id=$row_order['address_id'];
                $sql3="SELECT * FROM `product` WHERE `id`=$product_id";
                $product =mysqli_query($conn,$sql3);
                $row_product =mysqli_fetch_array($product);
                $sql4="SELECT * FROM `address`WHERE `id`=$address_id";
                $address=mysqli_query($conn,$sql4);
                 $row_address=mysqli_fetch_array($address);   

                    
             
                    


       
          
        ?>
        
        <div class="container main-con my-5">
            <div class="row box head_box py-2">
                <div class="col-md-2">
                    <h6> ORDER PLACED<br>12th April 2023</h6>
                </div>
                <div class="col-md-2">
                    <h6> TOTAL<br><?php echo $row_product['price'];?></h6>
                </div>
                <div class="col-md-6">
                    <h6>SHIP TO<br><?php echo $row_address['name'].","; echo $row_address['address_line1'].",";echo $row_address['address_line2'].",";echo $row_address['city']." "; echo $row_address['state']." ";echo $row_address['pincode'];  ?></h6>
                </div>
                <div class="col-md-2">
                    <h6>View Order Details</h6>
                </div>
            </div>

            <div class="col-md-12 box py-2">
                <h6>Arriving Saturday</h6>
                <p>Not yet dispached</p>
            </div>

            <div class="row box mb-4">
                <div class="col-md-2 box"> <img src="admin_panel/<?php echo $row_product['image']; ?>" alt="" width="200px"> </div>
                <div class="col-md-7 box">
                    <p class="my-5"><?php echo $row_product['name'];?> <br>
                    <?php echo $row_product['description'];?></p>
                </div>
                <div class="col-md-2 box mt-3"> <a href="track_orders.php?id=<?php echo $row_product['id'] ?> "> <button type="button" class="btn btn-warning col-md-12 mb-2">Track Order</button> </a>
                                                <a href="cancel_orders.php?id=<?php echo $row_product['id'] ?> "> <button type="button" class="btn btn-light col-md-12">Cancel Order</button> </a>
                </div>
            </div>
    
        </div>

<?php
         } // while for orders
        }
        else{
            echo"<h1> you not order yet</h1>";
        }
?>

    </div> <!-- -------<<<< Main div (dont delete)----------- -->

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>