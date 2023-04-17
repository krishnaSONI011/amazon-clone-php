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
require 'partials/_dbconnect.php';
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Orders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                        <li class="breadcrumb-item active">View Orders</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
    .dataTables_wrapper {
        position: relative;
        margin-left: -70px;
    }
    </style>
    <div class="container">

        <table class='myTable'>
            <thead>
                <tr>
                    <th>s.no</th>
                    <th>username</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>product_name</th>
                    <th>price</th>
                    <th>add line</th>

                    <th>city</th>
                    <th>landmark</th>
                    <th>state</th>
                    <th>pincode</th>
                    <th>method</th>
                    <th>image</th>
                   
                </tr>

            </thead>
            <tbody>
                <?php
           $sql="SELECT 
           user.firstname, user.lastname, user.email, user.mobile, 
           product.name, product.price, product.image,
           address.address_line1, address.address_line2, address.city, address.landmark, address.state, address.pincode, 
           orders.method
       FROM 
           user, product, address, orders
       WHERE 
           user.id = orders.user_id 
           AND product.id = orders.product_id 
           AND user.id = address.user_id 
           ORDER BY product.price asc";

           $result=mysqli_query($conn,$sql);
         
          $num = mysqli_num_rows($result);
        $nums=0;
        
        if($num>0){
             $n=1;

            while($row =mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $n?></td>
                    <td> <?php echo $row['firstname'].' '. $row['lastname'];?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['address_line1'].' '.$row['address_line2'];?></td>

                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['landmark']?></td>
                    <td><?php echo $row['state']?></td>
                    <td><?php echo $row['pincode']?></td>
                    <td><?php echo $row['method']?></td>
                    <td> <img src="<?php echo $row['image'] ?>" alt="" width="100px"></td>
                 <?php $n=$n+1;  }?>
                </tr>


                <?php }?>


            </tbody>
        </table>

    </div>



    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
    let table = new DataTable('.myTable');
    </script>









    <?php include 'includes/_footer.php'; ?>