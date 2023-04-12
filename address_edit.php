<!-- =============================================================Adress update Query Start========================================================================== -->
<?php
include 'admin_panel/partials/_dbconnect.php';
if(isset($_POST['update'])){

    $id = $_POST['id'];

    $name =$_POST['name'];
    $mobile =$_POST['moblie'];
    $address_line1=$_POST['address_line1'];
    $address_line2=$_POST['address_line2'];
    $landmark=$_POST['landmark'];
    $city =$_POST['city'];
    $pincode=$_POST['pincode'];
    $state =$_POST['state'];
   

    $sql= "UPDATE `address` SET `address_line1`='$address_line1',`address_line2`='$address_line2',`city`='$city',`landmark`='$landmark',`state`='$state',`pincode`='$pincode',`name`='$name',`mobile`='$mobile' WHERE `id` ='$id'";
    $result=mysqli_query($conn,$sql);
    header("location: all_address.php");


}

?>
<!-- =============================================================Adress update Query Ends========================================================================== -->

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
    body{
        background-color: white;
    }
</style>
<body>
    <!-- =====================================================Navbar========================================================================== -->
    <?php include "navbar.php"?>
 <!-- =====================================================Getting Id========================================================================== -->
<?php 
    include 'admin_panel/partials/_dbconnect.php';
    $id = $_GET['id'];

    $sql ="SELECT * FROM `address` WHERE `id`= $id";
    $Record = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($Record);
?>


    <div class="white">
        <div class="container">
            <div class="container px-4 border mt-3 w-50">
                <div class="p-4">
                    <h2>Add a new address</h2>
                </div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Full name (First and Last name)</label>
                        <input type="text" value="<?php echo $data['name'] ?>" class="form-control" name="name" id=""
                            aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mobile</label>
                        <input type="text" value="<?php echo $data['mobile'] ?>" class="form-control" name="moblie" id="" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pincode</label>
                        <input type="text" value="<?php echo $data['pincode'] ?>" class="form-control" name="pincode" id="" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Flat, House no., Building, Company, Apartment</label>
                        <input type="text" value="<?php echo $data['address_line1'] ?>" class="form-control" name="address_line1" id=""
                            aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Area, Street, Sector, Village</label>
                        <input type="text" value="<?php echo $data['address_line2'] ?>" class="form-control" name="address_line2" id=""
                            aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Landmark</label>
                        <input type="text" value="<?php echo $data['landmark'] ?>" class="form-control" name="landmark" id="" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Town/City</label>
                                <input type="text" value="<?php echo $data['city'] ?>" class="form-control" name="city" id="" 
                                    aria-describedby="emailHelpId">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">State</label>
                                <input type="text" value="<?php echo $data['state'] ?>" class="form-control" name="state" id=""
                                    aria-describedby="emailHelpId">
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $data['id'] ?>" id="id" value="<?php echo $data['id'] ?>"  name="id">
                        <!--row -->
                    </div>
                    <input type="submit" name="update" value="Update Address" class="btn btn-warning mb-3">
                </form>
            </div><!-- container w-50 -->
        </div><!-- container -->
        <?php include "footer.php" ?>
    </div><!-- white -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>