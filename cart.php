<?php 
// session_start();
// if(!isset($_SESSION['login'])){
//     header("Location: pages/login/login.php");
//     exit;
// }
include "backend/db_connect.php";

$id =$_GET['id'];
$sql ="SELECT * FROM `cart` WHERE `user_id`='$id' ";
$result =mysqli_query($conn,$sql);
$num =mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container ">
        <div class="row p-4">
            <div class="col-md-9 white super">
                <div class="p-2">
                    <h3>Shopping Cart</h3>
                </div>
                <!-- p-2 -->
                <hr>
                <?php 
             if($num > 0){
    while($row=mysqli_fetch_array($result)){
        $pro_id = $row['product_id'];
        $sql2="SELECT * FROM `product` WHERE `id` = '$pro_id'";
        $result2 =mysqli_query($conn,$sql2);
        $num2 =mysqli_num_rows($result2);
        if($num2==1){
            $row2 =mysqli_fetch_array($result2);

             ?>

                <div class="cart-body ">
                    <div class="d-flex cart">
                        <div class="cart-img text-center w-100">
                            <img src="admin_panel/<?php echo $row2['image'] ?>" alt="">
                        </div>
                        <div class="w-100" >
                            <p><strong><?php echo $row2['name']?></strong> <?php echo $row2['description']?></p>
                            <div class="qty">
                                <input type="number" style="width:14%" placeholder="QTY"
                                    value="<?php echo $row['quantity']?>" class="qut"> |
                                <a href="backend/delete_cart.php?prod_id=<?php echo $pro_id?>& user_id=<?php echo $id?>" class="text-decoration-none">Delete</a>
                            </div>
                        </div>
                        <div class="price text-center" style="width:20%">
                            <span class="daam"><?php echo $row2['price']?></span>
                        </div>
                    </div>
                </div>
                <hr>
                
             

                <?php       }
    }
}  
else{
    echo "<h2>you have nothing in yoru cart</h2>";
}
?>
            </div>

            <!-- col-md-9 -->
            <div class="col-md-3 pesa-section ">
                <div class="text-bg-light text-center p-2">
                    <p>Subtotle(<span id="num">0</span> items):<strong id="total">0<strong></p>
                    <div>
                        <form action="checkout_page.php?id=<?php echo $id ?>&page_id=cart" method="POST">
                           <input type="hidden" name="price" id="sending" value="">
                        <button class="btn btn-warning">Proceed to Buy</button></form>
                    </div>
                </div>
            </div>

        </div>
        <!-- row -->
    </div>

    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
    if (document.readyState == 'loding') {
        document.addEventListener('DOMContentLoaded', ready);
    } else {
        ready();
    }

    function ready() {
        updateTotle();
        let qut = document.getElementsByClassName('qut');
        for (let i = 0; qut.length; i++) {
            let input = qut[i];
            input.addEventListener('change', qutChange);
        }
    }

    function qutChange(event) {
        let input = event.target;
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1;
        }

        updateTotle();
    }

    function updateTotle() {
        let total =0
    let cart =document.getElementsByClassName('cart-body');
   for(let i =0;i<cart.length;i++){
    let carBox =cart[i];
    let priceElement =carBox.getElementsByClassName('daam')[0];
    let qyt =carBox.getElementsByClassName('qut')[0];
    let price =parseInt(priceElement.innerText);
    // console.log(price);
    let value =qyt.value;
    total = total +(price*value);
   }
//    console.log(total)

document.getElementById('total').innerText =total;
document.getElementById('sending').value= total
document.getElementById('num').innerText = cart.length;

    }
    </script>
</body>

</html>