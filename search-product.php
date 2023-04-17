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

<body>
    <header class="">
        <?php include "navbar.php" ?>
    </header>
    <!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
     slider end  -->
    <!--<div class="set-holder">
        <div class="over-the-img">
            <div class="d-flex justify-content-around ">
                <div class="back-white w-auto">
                    <h5>Home appliances | 10% off on select cards</h5>
                    <div class="d-flex">
                        <img src="images/product-1.jpg" alt="" class="me-2 ">
                        <img src="images/product-2.jpg" alt="">

                    </div>
                    <div class="d-flex my-2">
                        <img src="images/product-3.jpg" alt="" class="me-2">
                        <img src="images/product-4.jpg" alt="">

                    </div>

                </div>
                <div class="back-white w-auto">
                    <h5>Up to 60% off | Styles for men</h5>
                    <div class="d-flex">
                        <img src="images/product-5.jpg" alt="" class="me-2 ">
                        <img src="images/product-6.jpg" alt="">

                    </div>
                    <div class="d-flex my-2">
                        <img src="images/product-7.jpg" alt="" class="me-2">
                        <img src="images/product-8.jpg" alt="">

                    </div>
                </div>
                <div class="back-white w-auto">
                    <h5>Today’s Deals</h5>
                    <div class="d-flex">
                        <img src="images/product-1.jpg" alt="" class="me-2 ">
                        <img src="images/product-2.jpg" alt="">

                    </div>
                    <div class="d-flex my-2">
                        <img src="images/product-3.jpg" alt="" class="me-2">
                        <img src="images/product-4.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- middle section end  -->
    <!-- category section start -->


    <!-- category section end -->
    <?php
    include "backend/db_connect.php";

// if(isset($_POST['submit'])){
    $pname = $_GET['search-product'];    
    
    $sql="SELECT * FROM `category` WHERE `categories` LIKE '%$pname%'";
    $result= mysqli_query($conn, $sql);
    if($result){
    $num= mysqli_num_rows($result);
    if( $num > 0 ){
   
    while($row =mysqli_fetch_array($result)){
        $cat_id=$row['id'];
        $sql2 ="SELECT * FROM `sub-category` WHERE `parent_cat_id`='$cat_id'";
        $result2 =mysqli_query($conn, $sql2);
        
    ?>
    <div class="main-category container text-bg-light p-3 ">
        <div class="container">
            <h4><?php echo $row['categories'] ?></h4>
        </div>
        <div class="d-flex container justify-content-evenly">
            <?php while($row2=mysqli_fetch_array($result2)){ ?>
            <div class="category-item text-center">
                <a href="allproduct.php?categoryid=<?php echo $row['id'] ?> & subcategoryid=<?php echo $row2['id'] ?>"
                    class="text-decoration-none" style="color:black">
                    <img src="admin_panel/<?php echo $row2['subimage']?>" alt="">
                    <p><?php echo $row2['name'] ?></p>
                </a>
            </div>


            <?php }  ?>
        </div>


    </div>

    <?php  }
 } 
    
 else { ?>
 
 <div class="container">
        <div class="row">
            <?php
           
           
           $sql1 ="SELECT * FROM `product` WHERE `name` LIKE '%$pname%'";
            //echo $sql1;exit;       
           $result1=mysqli_query($conn,$sql1);
           
           $num1 =mysqli_num_rows($result1);
            // echo $num1;
            if($num1 > 0){ 
                while($row3=mysqli_fetch_array($result1)){ 
                    // echo "<pre>";print_r($row3);exit;
                    ?>
            <div class="col-md-3 my-3 text-center ">
                <a href="product.php?id=<?php echo $row3['id'] ?>" class="text-decoration-none">
                <div class="card text-center" style="width: 18rem;">
                <div class="text-center">
                    <img src="admin_panel/<?php echo $row3['image'] ?>" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row3['name'] ?></h5>
                        <p class="card-text"><?php echo $row3['description'] ?></p>
                            <span>&#8377;</sapn> <strong><?php echo $row3['price'] ?></strong>
                    </div>
                </div>
    </a>
            </div>
            <?php }
            } ?>
<?php 
}
    
        }

 
 ?>

    </div>
    <!-- </div> -->
    </div>




    <!-- footer -->

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>