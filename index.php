

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
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
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
    <!-- slider end  -->
    <div class="set-holder">
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
    </div>
    <!-- middle section end  -->
    <!-- category section start -->
   <?php include "category-home-page.php" ?>
    <!-- category section end -->

   <!-- footer -->

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>