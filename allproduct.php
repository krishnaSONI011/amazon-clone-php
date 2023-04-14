<?php 
include "admin_panel/partials/_dbconnect.php";
$category_id =$_GET['categoryid'];
$subcategory_id=$_GET['subcategoryid'];

$sql ="SELECT * FROM `product` WHERE `category_id`= $category_id AND `subcategory_id` = $subcategory_id";
$result=mysqli_query($conn,$sql);

$num =mysqli_num_rows($result);
?>



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

<body>
    <?php include "navbar.php" ?>
    <div class="container">
        <div class="row">
            <?php if($num > 0){ 
                while($row=mysqli_fetch_array($result)){ ?>
            <div class="col-md-3 my-3 text-center ">
                <a href="product.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                <div class="card text-center" style="width: 18rem;">
                <div class="text-center">
                    <img src="admin_panel/<?php echo $row['image'] ?>" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                            <span>&#8377;</sapn> <strong><?php echo $row['price'] ?></strong>
                    </div>
                </div>
    </a>
            </div>
            <?php }
            } ?>
         <!-- col-md-3-->
         
        </div>
        <!--row -->
    </div>
    <!--container -->
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>