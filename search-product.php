<?php 
// include 'admin_panel/partials/_dbconnect.php';
//     $query = "SELECT `category_id`, `subcategory_id` FROM product ORDER BY id DESC LIMIT 1";
//     $result = mysqli_query($conn, $query);
//     if($result){
//       $row =mysqli_fetch_assoc($result);
//       $cid = $row['category_id'];
//       $sid = $row['subcategory_id'];
//     }else{                                                                                                              
//         $cid = 0;
//         $sid = 0;
//     }
include "backend/db_connect.php";
$sql ="SELECT * FROM `category` ";
$result =mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if( $num >0 ){
   
    while($row =mysqli_fetch_array($result)){
        $cat_id=$row['id'];
        $sql2 ="SELECT * FROM `sub-category` WHERE `parent_cat_id`='$cat_id'";
        $result2 =mysqli_query($conn,$sql2);
        
?>

<div class="main-category container text-bg-light p-3 ">
    <div class="container">
        <h4><?php echo $row['categories'] ?></h4>
    </div>
    <div class="d-flex container justify-content-evenly">
        <?php while($row2=mysqli_fetch_array($result2)){ ?>
        <div class="category-item text-center">
                <a href="allproduct.php?categoryid=<?php echo $row['id'] ?> & subcategoryid=<?php echo $row2['id'] ?>" class="text-decoration-none" style="color:black">
                    <img src="admin_panel/<?php echo $row2['subimage']?>" alt="">
                    <p><?php echo $row2['name'] ?></p>
                </a>
            </div>
            
            
            <?php }  ?>
        </div>

    
    </div>
       
<?php  }
 }  ?>
    
         </div>
    <!-- </div> -->