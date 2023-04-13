<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
.main-con {
    /* border: 2px solid yellow; */
    max-width: 883px;
}

.main2-con {
    border: 1px solid rgb(190, 190, 190);
    max-width: 883px;
    border-radius: 5px;
}

.main2-con:hover {
    background-color: rgb(217, 217, 217);
}

.box {
    border: 2px solid green;
}

.head-sub {
    color: #6b6b6b;
}

a:link {
    text-decoration: none;
}

.heading {
    color: black;
}
</style>

<body>
    <div class="white">
    <?php include "navbar.php" ?>
    <div class="container main-con my-5">

        <a href="your_orders.php">
            <div class="main2-con row my-3 py-2 white">
                <div class="col-md-2 my-2"><img src="images/box.png" alt="" width="100px"></div>
                <div class="col-md-4 my-3">
                    <h6 class="my-1 heading">Your Order</h6> <span class="head-sub">Track, return, or buy things
                        again</span>
                </div>
            </div>
        </a>

        <a href="">
            <div class="main2-con row my-3 py-2 white">
                <div class="col-md-2 my-2"> <img src="images/profile.png" alt="" width="100px"></div>
                <div class="col-md-4 my-3">
                    <h6 class="my-1 heading">Your Profile</h6> <span class="head-sub">Check Your Profile for sucurity
                    </span>
                </div>
            </div>
        </a>

        <a href="all_address.php">
            <div class="main2-con row my-3 py-2 white">
                <div class="col-md-2 my-2"> <img src="images/address.png" alt="" width="95px">
                </div>
                <div class="col-md-4 my-3">
                    <h6 class="my-1 heading">Your Address</h6> <span class="head-sub">Edit addresses for orders and
                        gifts</span>
                </div>
            </div>
        </a>


    </div>

    <?php include "footer.php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>