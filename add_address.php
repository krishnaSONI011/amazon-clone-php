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
    <?php include "navbar.php"?>
    <div class="white">
        <div class="container">
            <div class="container border px-4 mt-3 w-50">
                <div class="p-4">
                    <h2>Add a new address</h2>
                </div>
                <form action="backend/addAddress.php?user_id=<?php echo $_GET['user_id']?>" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Full name (First and Last name)</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mobile</label>
                        <input type="number" class="form-control" name="moblie" id="number" onchange=checknumber()
                            aria-describedby="emailHelpId" required>
                        <div id="numbererror"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pincode</label>
                        <input type="number" class="form-control" name="pincode" id="pincode" onchange=checkvalidpincode() aria-describedby="emailHelpId" required>
                        <div id="pincodeerror"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Flat, House no., Building, Company, Apartment</label>
                        <input type="text" class="form-control" name="address_line1" id=""
                            aria-describedby="emailHelpId" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Area, Street, Sector, Village</label>
                        <input type="text" class="form-control" name="address_line2" id=""
                            aria-describedby="emailHelpId" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Landmark</label>
                        <input type="text" class="form-control" name="landmark" id="" aria-describedby="emailHelpId" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Town/City</label>
                                <input type="text" class="form-control" name="city" id=""
                                    aria-describedby="emailHelpId" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">State</label>
                                <input type="text" class="form-control" name="state" id=""
                                    aria-describedby="emailHelpId" required>
                            </div>
                        </div>
                        <!--row -->
                    </div>
                    <input type="submit" value="Add Address" class ="btn btn-warning mb-3">
                </form>
            </div><!-- container w-50 -->
        </div><!-- container -->
        <?php include "footer.php" ?>
    </div><!-- white -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
    function checknumber() {

        let number_feild = document.getElementById('number');
        let value = number_feild.value;
        let numbers = value.toString().split('').map(Number)

        if (numbers.length > 10) {
            let numbererror = document.getElementById('numbererror').innerHTML =
                "<p style='color:red'>Number must be  required 10 digit</p>";
                number_feild.value="";

        } else if (numbers.length < 10) {
            let numbererror = document.getElementById('numbererror').innerHTML =
                "<p style='color:red'>Number must be  required 10 digit</p>";
                number_feild.value="";

        } else {
            let numbererror = document.getElementById('numbererror').innerHTML = "";
        }
    }

    function checkvalidpincode(){
        let pincode_feild = document.getElementById('pincode');
        let value = pincode_feild.value;
        let pincode = value.toString().split('').map(Number)

        if (pincode.length > 6) {
            let pincodeerror = document.getElementById('pincodeerror').innerHTML =
                "<p style='color:red'>Number must be  required 6 digit</p>";
                pincode_feild.value="";

        } else if (pincode.length < 6) {
            let pincodeerror = document.getElementById('pincodeerror').innerHTML =
                "<p style='color:red'>Number must be  required 6 digit</p>";
                pincode_feild.value="";
        } else {
            let pincodeerror = document.getElementById('pincodeerror').innerHTML = "";
        }
    }
    </script>
</body>

</html>