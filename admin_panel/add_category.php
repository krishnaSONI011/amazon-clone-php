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
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add</a></li>
                        <li class="breadcrumb-item active">Categoriess</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <style>
    .main-con{
        max-width: 900px;
    }
</style>




<!-- =========================================================Inserting======================================================================== -->
 <?php

    require 'partials/_dbconnect.php';
    $showmassage=false;
    if(isset($_POST['submit'])){
    
        $catname=$_POST['catname'];
        $sql="INSERT INTO `category`(`categories`) VALUES ('$catname')";

        $result=mysqli_query($conn,$sql);
        if($result){
            $showmassage=true;
            
        }
    }
 ?>

<!-- =========================================================Form======================================================================== -->

    <div class="container main-con mt-5 ">
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
                <a class="h1"><b>Add Caterogies</b></a>
            </div>
            <div class="card-body">

                <form method="POST">
                <label for="exampleFormControlSelect1">Select Category</label>
                    <div class="input-group mb-3 my-3">
                        <input type="text" class="form-control" name="catname" placeholder="Categories name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-product"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary mt-2 mb-4">
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
                    <button type="submit" name="submit" class="btn btn-primary btn-block" id="btn-res">Add
                        Categories</button>
                </form>


            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</div>
<!-- /.register-box -->


</div><!-- content-wrapper div dont delete <=========================== -->




<?php include 'includes/_footer.php'; ?>