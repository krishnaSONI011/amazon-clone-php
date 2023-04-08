<?php 
include 'admin_panel/partials/_dbconnect.php';
    $query = "SELECT `categories_id`, `subcategories_id` FROM product ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);
    if($result){
      $row =mysqli_fetch_assoc($result);
      $cid = $row['categories_id'];
      $sid = $row['subcategories_id'];
    }else{                                                                                                              
        $cid = 0;
        $sid = 0;
    }
?>

<div class="main-category container text-bg-light p-3 ">
        <div class="container">
            <h4>Fashion</h4>
        </div>
        <div class="d-flex container justify-content-around">
            <div class="category-item text-center">
                <a href="allproduct.php?categoryid=<?php echo $cid ?> & subcategoryid=<?php echo $sid ?>" class="text-decoration-none" style="color:black">
                    <img src="images/mens-cate.jpg" alt="">
                    <p>mens</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/woman-cate.jpg" alt="" >
                    <p>Woman</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/kids-cate.jpg" alt="">
                    <p>kids</p>
                </a>
            </div>
        </div>
    </div>


    <div class="main-category container text-bg-light p-3 my-4">
        <div class="container">
            <h4>Electronic</h4>
        </div>
        <div class="d-flex container justify-content-around">
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/mobile-cate.jpg" alt="">
                    <p>Mobile</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/laptop-cate.jpg" alt="" >
                    <p>laptop</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/tabs-cate.jpg" alt="">
                    <p>tablets</p>
                </a>
            </div>
        </div>
    </div>


    <div class="main-category container text-bg-light p-3 my-4">
        <div class="container">
            <h4>Home appliances</h4>
        </div>
        <div class="d-flex container justify-content-around">
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/mens-cate.jpg" alt="">
                    <p>mens</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/woman-cate.jpg" alt="" >
                    <p>Woman</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/kids-cate.jpg" alt="">
                    <p>kids</p>
                </a>
            </div>
        </div>
    </div>


    <div class="main-category container text-bg-light p-3 ">
        <div class="container">
            <h4>Fitness</h4>
        </div>
        <div class="d-flex container justify-content-around">
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/mens-cate.jpg" alt="">
                    <p>mens</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/woman-cate.jpg" alt="" >
                    <p>Woman</p>
                </a>
            </div>
            <div class="category-item text-center">
                <a href="#" class="text-decoration-none" style="color:black">
                    <img src="images/kids-cate.jpg" alt="">
                    <p>kids</p>
                </a>
            </div>
        </div>
    </div>