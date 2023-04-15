<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php" class="brand-link">
        <img src="assets/dist/img/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><span style="color:white">Amazon </span><span style="color:orange">Seller</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php if (isset($_SESSION['name'])) { ?>
                    <?php echo $_SESSION['name'] ?>
                    <?php } else { ?>
                    <p>Plese sign up again</p>
                    <?php } ?>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="admin.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                            
                        </p>
                    </a>
                    <!-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul> -->
                </li>



        

                <!-- ===============================================================Category=========================================================== -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="add_category.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="add_subcategory.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Sub Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="view_subcategory.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Sub Category</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <!-- ===============================================================Products=========================================================== -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tshirt "></i> 
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="add_product.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_product.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- ===============================================================Orders=========================================================== -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        
                        <li class="nav-item">
                            <a href="order_view.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>









                <!-- ===============================================================SEETINGS=========================================================== -->
                <!-- ========================================================================================================================== -->

                <li class="nav-header">Seetings</li>
                <!-- ===============================================================ADMIN PROFILE=========================================================== -->
                <li class="nav-item">
                    <a href="admin_profile.php" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Admin Profile
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <!-- ===============================================================Register Users=========================================================== -->
                <li class="nav-item">
                    <a href="viewuser.php" class="nav-link">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                            Registered Users
                        </p>
                    </a>
                </li>
                <!-- ===============================================================Role For Users=========================================================== -->
                <li class="nav-item">
                    <a href="pages/kanban.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Role For Users
                        </p>
                    </a>
                </li>



            </ul> <!-- dont erase this ul -------------------------------------------<<<<<<<Main UL- -->
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>