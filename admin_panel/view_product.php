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
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Status</th>

                </tr>

            </thead>
            <tbody>
                <?php
           $sql="SELECT * FROM `product`";
           $result=mysqli_query($conn,$sql);
         
          $num = mysqli_num_rows($result);
        $nums=0;
        
        if($num>0){
             $num;


while($row =mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td> <img src="../<?php echo $row['image'] ?>" alt="" width ="100px"> </td>
                    <td> <button><?php echo $row['status'] ?> </button> </td>
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