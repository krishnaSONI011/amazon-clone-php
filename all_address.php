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
    <div class="container p-4">
        <h2>Your Address</h2>

        <div class="container p-4">
            <div class="row pb-4 ">

                <div class="col-md-3 white" id="forborder" style=" border: 3px gray dashed;padding: 54px;
border-radius: 30px; margin-right:10px">
                    <a href="#" class="text-decoration-none">
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
                <div class="col-md-3 p-3 m-2 white" style="border:2px gray solid;border-radius:30px">
                    <div class="address">
                        <p><strong>Krishna soni</strong></p>
                        <p>Near PNB ATM,sarafa bazar deeg
                            DEEG, RAJASTHAN 321203
                            India</p>
                        <p>phone number:999900099</p>
                        <div><a href="#" class="text-decoration-none" style="color:#007185">Edit</a> | <a href="#"
                                class="text-decoration-none" style="color:#007185">Remove</a></div>
                    </div>
                </div><!-- col-->

            </div>
            <!--row -->
        </div>

    </div>
    <?php include "footer.php" ?>

</body>

</html>