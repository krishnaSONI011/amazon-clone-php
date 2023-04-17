<nav id="navbar">
    <div class="nav-main d-flex justify-content-between align-items-center">

        <div class="img white-border">
            <a href="index.php">
                <img src="images/logo3.png" alt="" class="logo"></a>
        </div>
 
       
        <div class="search d-flex">
            <form action="search-product.php" method="get" class="w-100 d-flex">
            <input name="search-product" id="" class="form-input" type="text" placeholder="Search Amazon.in">
            <button id="btn-search" name="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button></form>
        </div>
    
   
        <!--search -->

        <div class="right-side d-flex justify-content-around">
            <?php 
            session_start();
    if(isset($_SESSION['login'])){ 
?>
            <div class="signin white-border">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="your_account.php" role="button">
                        <span>Hello,<?php echo $_SESSION['name']; ?> </span><br>
                        <span><strong>Account&Lists</strong></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="text-center"><a href="backend/logout.php"><button class="btn btn-warning"
                                    id="btn-log_out">Log out</button></a></li>

                        <li><a class="dropdown-item" href="#">Your Account</a></li>
                        <li><a class="dropdown-item" href="your_orders.php">Your Orders</a></li>
                    </ul>
                </div>
            </div>
            <?php 
    } 
    if(!isset($_SESSION['login'])){
?>
            <div class="signin white-border">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="pages/login/login.php?pageid=home" role="button">
                        <span>Hello,sign in </span><br>
                        <span><strong>Account&Lists</strong></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="text-center"><button class="btn btn-warning" id="btn-sign_in">Sign in</button></li>
                        <li><a class="dropdown-item" href="#">Your Account</a></li>
                        <li><a class="dropdown-item" href="#">Your Orders</a></li>
                    </ul>
                </div>
            </div>
            <?php 
    } 
?>

            <!--sign in -->
            <div class="return-order white-border">
                <a href="track_orders.php" class="text-decoration-none text-light">
                    <span>Return</span><br>
                    <strong> & Orders</strong>
                </a>

            </div>
            <!--return&order -->

            <div class="cart white-border">
                <?php if(isset($_SESSION['login'])){ 
?>
                <a href="cart.php?id=<?php echo $_SESSION['user_id'] ?>" class="text-decoration-none text-light">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></sapn>
                        <sapn>cart</sapn>
                </a>
                <?php  } 
                  if(!isset($_SESSION['login'])){?>
                <a href='pages/login/login.php?pageid=cart' class="text-decoration-none text-light">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></sapn>
                        <sapn>cart</sapn>
                </a>
                <?php       }
                   ?>
            </div>
        </div>


    </div>

</nav>