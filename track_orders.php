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
.main-con border sample {
    border: 1px solid black
}
</style>

<body>
    <?php include "navbar.php"; 
     
 include "admin_panel/partials/_dbconnect.php";
 $ID = $_GET['id'];

 $sql="SELECT * FROM `product` WHERE id=$ID";
 $res=mysqli_query($conn, $sql);
  
 $row=mysqli_fetch_array($res);
    ?>


    <div class="container main-con my-5">

        <h3 class="mb-5 text-success">Arriving Saturday</h3>


        <div class="row my-5">
            <div class="first_box main-con col-md-8">
                <div class="form-check mt-5">
                    <input class="form-check-input p-3" type="checkbox" value="" id="defaultCheck1" checked>
                    <label class="form-check-label" for="defaultCheck1">
                        Ordered Today
                    </label>
                </div>


                <!-- <div><i class="fa fa-angle-down" style="font-size:24px"></i></div> -->

                <div class="form-check my-4">
                    <input class="form-check-input p-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Shipped
                    </label>
                </div>


                <div class="form-check my-4">
                    <input class="form-check-input p-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Out for delivery
                    </label>
                </div>

                <div class="form-check my-4">
                    <input class="form-check-input p-3" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Arriving Saturday
                    </label>
                </div>
            </div>

<!-- ====================================================Image displaying===================================================================             -->

<?php
      include "admin_panel/partials/_dbconnect.php";

        $ID = $_GET['id'];
        $sql ="SELECT * FROM `product` WHERE `id` = $ID";
        $result = mysqli_query($conn, $sql);
        $row =mysqli_fetch_assoc($result);
?>

            <div class="second_box main-con col-md-4">
                <h5 class="text-center">Your Product</h5>
            <div class="text-center"><img src="admin_panel/<?php echo $row['image'] ?>" alt="" width="200px"> </div>
            <h6 class="text-center"><?php echo $row['name'] ?></h6>
            <p class="text-center"><?php echo $row['description'] ?></p>
            <p class="text-center">₹<?php echo $row['price'] ?></p>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>