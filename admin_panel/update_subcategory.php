
<!-- =============================================================Product update Query Start========================================================================== -->
<?php
include 'partials/_dbconnect.php';
$showmassage=false;
if(isset($_POST['update'])){
    $id = $_POST['id'];
   
     $sub_name=$_POST['subcatname'];

     if(!empty($_FILES['image']['tmp_name'])){
        $img_loc=$_FILES['image']['tmp_name'];
        $img_name=$_FILES['image']['name'];
        $img_des = "uploaded_Images/".$img_name;
        move_uploaded_file($img_loc, 'uploaded_Images/'.$img_name);  

        $sql = "UPDATE `sub-category` SET `name`='$sub_name',`subimage`='$img_des' WHERE `id` ='$id'";
        
     }
    else{
        $IMAGE1 = $_POST["old_img"];  

     $sql = "UPDATE `product` SET `name`='$product_name',`description`='$product_disc',`image`='$IMAGE1',`price`='$product_price',`status`='$status' WHERE  `id` ='$id'";
    
    }
     $result=mysqli_query($conn,$sql);
    header("location: view_product.php");

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
    include 'partials/_dbconnect.php';
    $id = $_GET['id'];

    $sql ="SELECT * FROM `sub-category` WHERE `id`= $id";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    ?>

    <div class="container main-con mt-5">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Add Sub Caterogies</b></a>
            </div>
            <div class="card-body">

                <form action="update_subcategory.php" method="POST" enctype='multipart/form-data'>
                    <select name="select" class="form-control" id="select" required>
                        <option>select parent categories</option>
                        <?php
                            $res = mysqli_query($conn, "SELECT id, categories FROM category order by categories desc");
                            while($row=mysqli_fetch_assoc($res)){
                                
                                echo "<option value=".$row['id'].">".$row['categories']."</option>";
                            }
           
                        ?>
                    </select>

                    <div class="input-group mb-3 my-4">
                        <input type="text" class="form-control" value="<?php echo $data['name'] ?>" name="subcatname"
                            placeholder="Sub Categories name " required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-status"></span>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="product_image" class="form-label">Product image</label> <br>
                            <input type="file" name="image" id="" value="<?php echo $data['subimage'] ?>"> <img
                                src="./<?php echo $data['subimage']  ?>" width='120px'>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="old_img" class="form-label"></label>
                            <input type="text" value="<?php echo $data['subimage'] ?>" class="form-control"
                                name="old_img" id="old_img" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="id" class="form-label"></label>
                            <input type="text" value="<?php echo $data['id'] ?>" class="form-control" name="id" id="id"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary my-2 mb-4">
                                    <input type="reset" id="agreeTerms" name="terms" value="reset">
                                    <label for="agreeTerms">
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                            </div>
                            <!-- /.col -->
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block" id="btn-res">Update Sub
                            Category</button>
                </form>


            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

    <!-- dont delete this div -->
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