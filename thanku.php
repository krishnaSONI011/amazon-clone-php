<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
<style>
    .h {
        height:100vh;
    }
    .di{
        flex-direction: column;
    }
    </style>
</head>
<body>
    <?php include "navbar.php" ?>
        <div class="container h p-3">
            <div class="d-flex justify-content-center align-items-center bg-light h di ">
                <div class="">
                    <h1>Thank You</h1>
                </div>
                <div class="m-4">
                 <a href="your_orders.php">  <button class="btn btn-warning">Your Orders</button></a>
                  <a href="index.php">  <button class="btn btn-warning">Home</button></a>
                </div>
            </div>
        </div>

    <?php include "footer.php" ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>
</html>