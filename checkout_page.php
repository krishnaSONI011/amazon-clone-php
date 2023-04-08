<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="nav">
            <div class="container">
                <div class="d-flex justify-content-between p-2 align-items-center">
                    <div class="logo">
                        <img src="images/logo5.png" alt="">
                    </div>
                    <div class="head">
                        <p>CheckOut</p>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
                <div class="col-md-9">
                        <div class="address">
                            <h4>1. Select a delivery address</h4>
                            <div id="main-address">
                            <div class="address-body m-2">
                                <div class="body d-flex width ">
                                    <input type="radio" value="1" id="1" class="radio" name="radio">
                                    <label for="1" class="label"><strong> Krishna soni</strong> kanod student hostel, Pacific University, Debari, UDAIPUR, RAJASTHAN, 313001, India, Phone number: 9549990097</label>
                                </div>

                            </div>
                            <!-- address-body -->
                            <div class="address-body m-2">
                                <div class="body d-flex width ">
                                    <input type="radio" value="2" id="2" class="radio" name="radio">
                                    <label for="2" class="label"><strong> vivek</strong> kanod student hostel, Pacific University, Debari, UDAIPUR, RAJASTHAN, 313001, India, Phone number: 9549990097</label>
                                </div>

                            </div>
                            <!-- address-body -->
                        </div>
                        <div id="sele">
                            <strong> Selected Address : </strong> <p id="address-here">  </p>
                            <input type="hidden" name="final-address" value="" id="address-here-database" >
                        </div>
                        <button type="button" class="btn btn-warning" id="address_btn">Select address</button>
                        <!-- main-address -->
                    </div>
                        <!-- address -->
                </div>
                <!-- col-md-9 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

<script src="js/script2.js"></script>
</body>

</html>