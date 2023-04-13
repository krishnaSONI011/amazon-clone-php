<?php
include 'includes/_header.php';
include 'includes/_navbar.php';
include 'includes/_sidebar.php';
require 'partials/_dbconnect.php';
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <div class="container">

        <table id='myTable'>
            <thead>
                <tr>
                    <th>s.no</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Operation</th>

                </tr>

            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT category.categories, 
                `sub-category`.`name` AS subcategory_name, 
                `sub-category`.subimage AS subcategory_image, 
                `sub-category`.parent_cat_id, 
                product.id, product.name AS product_name, 
                product.description AS product_description, 
                product.image AS product_image, 
                product.price AS product_price, 
                product.status AS product_status
                FROM category
                JOIN `sub-category`
                ON category.id = `sub-category`.parent_cat_id
                JOIN product
                ON `sub-category`.id = product.subcategory_id
                ";
 
        //    $sql="SELECT * FROM `product`";

                    $result=mysqli_query($conn,$sql);
                    
                    $num = mysqli_num_rows($result);
                    $nums=0;
                    
                    if($num>0){
                        $num;


                while($row =mysqli_fetch_array($result)){?>
                <tr>
                <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['categories'] ?></td>
                    <td><?php echo $row['subcategory_name'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['product_description'] ?></td>
                    <td><?php echo $row['product_price'] ?></td>
                    <td> <img src="../<?php echo $row['product_image'] ?>" alt="" width ="100px"> </td>
                    <td> <button><?php echo $row['product_status'] ?> </button> </td>
                    <td> <a href="update_product.php?id=<?php echo $row['id'] ?> "> <button type="button" class="btn btn-success">Update</button>
                         <a href="remove_product.php?id=<?php echo $row['id'] ?> "> <button type="button" class="btn btn-danger my-2">Remove</button> </td>
                </tr>


                <?php } ?>
                <?php } ?>
            </tbody>
        </table>

    </div>



    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>









    <?php include 'includes/_footer.php'; ?>