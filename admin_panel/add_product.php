<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){   //agara user login nahi ha || login false ha 
  header("location: login.php");                                     //login page pa jao
  exit;
}
?>
<?php
include 'includes/_header.php';
include 'includes/_navbar.php';
include 'includes/_sidebar.php';
include 'partials/_dbconnect.php';
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->








    <?php

require 'partials/_dbconnect.php';
$showmassage=false;
if(isset($_POST['submit'])){
 
    $catname=$_POST['catname'];
    $catstatus=$_POST['catstatus'];
    
    $sql="INSERT INTO `categories`(`categories`,`status`) VALUE('$catname','$catstatus')";
    $result=mysqli_query($conn,$sql);
    if($result){
        $showmassage=true;
        
    }

}

?>


    <div class="container main-con ">
        <?php  
                  if($showmassage){

                    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success! </strong> your categories has been successfully inserted 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
          ?>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1 bg-primary col-md-12"><b>Add Product</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg ">Add a new Product</p>

                <div class="container">
                    <form class="row">
                        <div class="col-md-12 mb-3">
                            <label for="product_name" class="form-label">Product name</label>
                            <input type="text" class="form-control" name="product_name" id="product_name"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="number" class="form-control" name="product_price" id="exampleInputPassword1">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="product_image" class="form-label">Product image</label>
                            <input type="file" class="form-control" name="product_image" id="exampleInputPassword1">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Proguct Discription</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <select class="form-control" name="status" id="">
                                <option value="1">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="category" class="form-control" id="categories-dropdown">
                                <option>select categories</option>
                                <?php
                                     $res=mysqli_query($conn, "SELECT id,categories FROM category order by id ASC");
                                    while($row=mysqli_fetch_assoc($res)){
        
                                    echo "<option value=".$row['id'].">".$row['categories']."</option>";
                                    }
                                   ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="" class="col-md-12 form-control" id="subcategory-dropdown">
                                <option value="">select subcategories</option>
                            </select>
                        </div>
                        <div class="text-center col-md-12 my-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


            </div>

        </div><!-- /.card -->
    </div>



<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script>
$(document).ready(function() {
    // alert();
    $('#categories-dropdown').on('change', function() {
        var category_id = $(this).val();
        // alert(category_id);
        if (category_id != '') {
            $.ajax({
                url: "getsubcategory.php",
                method: "POST",
                data: {
                    category_id: category_id
                },
                success: function(data) {
                    // $('#subcategory-dropdown').fadeIn();
                    console.log(data);
                    $('#subcategory-dropdown').html(data);
                }
            });
        }
    });


});
</script>






























</div>



<?php include 'includes/_footer.php'; ?>