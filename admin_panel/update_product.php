<!-- =============================================================Product update Query Start========================================================================== -->
<?php
include 'partials/_dbconnect.php';
$showmassage=false;
if(isset($_POST['update'])){
    $id = $_POST['id'];
   
     $product_name=$_POST['product_name'];
     $product_price=$_POST['product_price'];

    
     $product_disc=$_POST['product_disc'];
     $status=$_POST['status'];
     $select_cat_id=$_POST['select_cat_id'];
     $select_subcat_id=$_POST['select_subcat_id'];

     if(!empty($_FILES['image']['tmp_name'])){
        $img_loc=$_FILES['image']['tmp_name'];
        $img_name=$_FILES['image']['name'];
        $img_des = "uploaded_Images/".$img_name;
        move_uploaded_file($img_loc, 'uploaded_Images/'.$img_name);  

        $sql = "UPDATE `product` SET `name`= '$product_name',`description`='$product_disc',`image`='$img_des',`price`='$product_price',`status`='$status' WHERE  `id` ='$id'";
        
     }
    else{
        $IMAGE1 = $_POST["old_img"];  

     $sql = "UPDATE `product` SET `name`='$product_name',`description`='$product_disc',`image`='$IMAGE1',`price`='$product_price',`status`='$status' WHERE  `id` ='$id'";
    
    }
     $result=mysqli_query($conn,$sql);
    header("location: view_product.php");

}

?>
<!-- =============================================================Product update Query Ends========================================================================== -->

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
    include 'partials/_dbconnect.php';
    $id = $_GET['id'];

    $sql ="SELECT * FROM `product` WHERE `id`= $id";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    ?>


    <div class="container main-con ">
        <?php  
                  if($showmassage){

                    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success! </strong> your categories has been successfully updated
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
          ?>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1 bg-primary col-md-12"><b>Update Product</b></a>
            </div>
            <div class="card-body">

                <div class="container">
                    <form action="update_product.php" method="post" enctype='multipart/form-data' class="row">
                        <div class="col-md-12 mb-3">
                            <label for="product_name" class="form-label">Product name</label>
                            <input type="text" value="<?php echo $data['name'] ?>" class="form-control"
                                name="product_name" id="product_name" aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="number" value="<?php echo $data['price'] ?>" class="form-control"
                                name="product_price" id="exampleInputPassword1">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="product_image" class="form-label">Product image</label> <br>
                            <input type="file" name="image" id="" value="./<?php echo $data['image'] ?>"> <img src="./<?php echo $data['image']  ?>"
                                width='120px'>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="old_img" class="form-label"></label>
                            <input type="hidden" value="./<?php echo $data['image'] ?>" class="form-control"
                                name="old_img" id="old_img" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="id" class="form-label"></label>
                            <input type="hidden" value="<?php echo $data['id'] ?>" class="form-control"
                                name="id" id="id" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Proguct Discription</label>
                            <textarea class="form-control" value="<?php echo $data['description'] ?>"
                                name="product_disc" id="exampleFormControlTextarea1"
                                rows="3"><?php echo $data['description'] ?> </textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <select class="form-control" name="status" value="<?php echo $data['status'] ?>" id="">
                                <option value="1">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <select name="select_cat_id" class="form-control" id="categories-dropdown">
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
                            <select name="select_subcat_id" class="col-md-12 form-control" id="subcategory-dropdown">
                                <option value="">select subcategories</option>
                            </select>
                        </div>
                        <div class="text-center col-md-12 my-4">
                            <button type="submit" name="update" class="btn btn-primary">Submit</button>
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



<<<<<<< HEAD
=======



























>>>>>>> 204c9fa31495b5f6f7edb42f704080cb6c7c2235
</div>



<?php include 'includes/_footer.php'; ?>