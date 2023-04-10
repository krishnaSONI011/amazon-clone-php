<?php
include 'partials/_dbconnect.php';
$category_id=$_POST["category_id"];

$result=mysqli_query($conn,"SELECT * FROM `sub-category` WHERE `parent_cat_id` LIKE $category_id");
?>
<?php
while($row=mysqli_fetch_array($result)){   

    ?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
<?php
}
?>
