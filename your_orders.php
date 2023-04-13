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
        include "admin_panel/partials/_dbconnect.php";
       

        $sql = "SELECT 
        user.firstname, user.lastname, user.email, user.mobile, 
        product.name AS product_name, product.description, product.price, product.image, 
        address.`name` AS address_name, address.address_line1, address.address_line2, address.city, address.landmark, address.state, address.pincode, 
        orders.id, orders.method 
        
        FROM orders
        LEFT JOIN user ON orders.user_id = user.id 
        INNER JOIN product ON orders.product_id = product.id
        INNER JOIN `address` ON orders.address_id = address.id";

        




        $result=mysqli_query($conn,$sql);
      
       $row = mysqli_num_rows($result);
       if($row>0){
          
         while($row =mysqli_fetch_array($result)){?>
        
        <div class="container main-con my-5">
            <div class="row box head_box py-2">
                <div class="col-md-2">
                    <h6> ORDER PLACED<br>12th April 2023</h6>
                </div>
                <div class="col-md-2">
                    <h6> TOTAL<br><?php echo $row['price'];?></h6>
                </div>
                <div class="col-md-6">
                    <h6>SHIP TO<br><?php echo $row['address_name'];?></h6>
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
                <div class="col-md-2 box"> <img src="<?php echo $row['image']; ?>" alt="" width="200px"> </div>
                <div class="col-md-7 box">
                    <p class="my-5"><?php echo $row['product_name'];?> <br>
                    <?php echo $row['description'];?></p>
                </div>
                <div class="col-md-2 box mt-3"> <a href="track_orders.php"> <button type="button"
                            class="btn btn-warning mb-3 col-md-12">Track package</button> </a> <br>
                            <a href="cancel_orders.php?id=<?php echo $row['id'] ?> "> <button type="button" class="btn btn-light col-md-12">Cancel items</button>
                    </a>
                </div>
            </div>

        </div>

<?php
         }}
?>

    </div> <!-- -------<<<< Main div (dont delete)----------- -->

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>