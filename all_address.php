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
    <?php 
if(!isset($_SESSION['login'])){
    header("Location:pages/login/login.php?pageid=address");
    exit;
}
include "backend/db_connect.php";

$user_id =$_SESSION['user_id'];
$sql ="SELECT * FROM `address` WHERE `user_id`='$user_id'";
$reslut =mysqli_query($conn,$sql);
$num =mysqli_num_rows($reslut);



// $query = "SELECT id FROM `address`";
// $result = mysqli_query($conn, $query);
// if($result){
//   $row =mysqli_fetch_assoc($result);
//   $id = $row['id'];
//   echo $id;
// }else{                                                                                                              
//   $id=0;
// }


  
?>
    <div class="container p-4">
        <h2>Your Address</h2>

        <div class="container p-4">
            <div class="row pb-4 ">

                <div class="col-md-3 white" id="forborder" style=" border: 3px gray dashed;padding: 54px;border-radius: 30px; margin-right:10px">
                    <a href="add_address.php?user_id=<?php echo $user_id ?>" class="text-decoration-none">
                        <div class="add text-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            <p>ADD ADDRESS</p>

                        </div>
                    </a>
                </div>
                <?php if($num >0){ 
                    while($row=mysqli_fetch_array($reslut)){
                    ?>
                <div class="col-md-3 p-3 m-2 white" style="border:2px gray solid;border-radius:30px">
                    <div class="address">
                        <p><strong><?php echo $row['name'] ?></strong></p>
                        <p><?php echo $row['address_line1'].",";echo $row['address_line2'].",";echo $row['city']." ";echo $row['pincode']." ";echo $row['state'] ?>
                        </p>
                        <p>phone number:<?php echo $row['mobile'] ?></p>
                        <div> <a href="address_edit.php?id=<?php echo $row['id'] ?> " class="text-decoration-none text-success" style="color:#007185">Edit</a> |
                              <a href="address_remove.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-danger" style="color:#007185">Remove</a></div>
                           
                    </div>
                </div><!-- col-->
                <?php  }
                }?>
            </div>
            <!--row -->
        </div>

    </div>
    <?php include "footer.php" ?>

</body>

</html>