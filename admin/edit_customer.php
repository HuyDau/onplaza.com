<?php
session_start();
if (!isset($_SESSION['user_admin'])) {
    header("location: login.php");
}

require_once("../config/config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $info = "SELECT * FROM users WHERE id = $id AND permission = 2";
    $query_info = mysqli_query($conn, $info);
    $row_info = mysqli_fetch_assoc($query_info);
}

if (isset($_POST['edit_customer'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $id = $_GET['id'];
    $edit = "UPDATE `users` SET `username`='$user',`password`='$pass',`gmail`='$email',`fullname`='$full_name',`phone`='$phone',`permission`='2' WHERE id = $id";
    $query_edit = mysqli_query($conn, $edit);
    if ($query_edit) {
        echo "<script>window.alert('Cập nhật thông tin khách hàng thành công!');window.location.href = 'customer.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Onplaza - Chỉnh sửa thông tin khách hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\fav-icon.png">
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                <span class="float-right">
                                    <a href="" class="text-white">
                                        <small>Xem hết</small>
                                    </a>
                                </span>Thông báo
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="assets\images\users\user-1.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets\images\users\user-4.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart text-danger"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-dark">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            Xem tất cả
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets\images\users\user-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?php if (isset($_SESSION['user_admin'])) {
                                echo $_SESSION['fullname_admin'];
                            } ?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Setting</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Screen Block</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="logout.php" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>




            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.php" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets\images\logo-2.png" alt="" height="24">
                        <!-- <span class="logo-lg-text-light">Onplaza</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="assets\images\fav-icon.png" alt="" height="28">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </li>

                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        Báo cáo
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Financial Báo cáo
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Báo cáo hàng tháng
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Monthly Báo cáo
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Support
                        </a>

                    </div>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="slimscroll-menu">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-dashboard"></i>
                                <span class="badge badge-info badge-pill float-right">2</span>
                                <span> Trang chủ </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="index.php">Thống kê</a>
                                </li>
                                <li>
                                    <a href="index2.php">Thống kê chi tiết</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-cube"></i>
                                <span> Onplaza </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="category.php">Danh mục</a>
                                </li>
                                <li>
                                    <a href="portfolio.php">Danh mục sản phẩm</a>
                                </li>
                                <li>
                                    <a href="product.php">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="customer.php">Khách hàng</a>
                                </li>
                                
                                
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="email-inbox.php">Hộp thư đến</a>
                                </li>
                                <li>
                                    <a href="email-read.php">Đọc Email</a>
                                </li>
                                <li>
                                    <a href="email-compose.php">Soạn Email</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class=" fab fa-opencart"></i>
                                <span> Đơn hàng </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="order.php">Danh sách đơn hàng</a>
                                </li>
                                <li>
                                    <a href="list_complete_order.php">Danh sách đơn hàng hoàn thành</a>
                                </li>
                                <li>
                                    <a href="list_cancel_order.php">Danh sách đơn hàng bị hủy</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Onplaza</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Onplaza</a></li>
                                        <li class="breadcrumb-item active">Edit Customer</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Khách hàng</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-9" style="margin: auto;">
                            <h2>Chỉnh sửa thông tin khách hàng</h2>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label class="control-label">Username: </label>
                                    <input class="form-control form-white" placeholder="Nhập username..." type="text" name="username" value="<?php if (isset($row_info['username'])) {
                                                                                                                                                    echo $row_info['username'];
                                                                                                                                                } ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password: </label>
                                    <input type='password' class="form-control form-white" placeholder="Nhập password..." type="text" name="password" value="<?php if (isset($row_info['password'])) {
                                                                                                                                                                    echo $row_info['password'];
                                                                                                                                                                } ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Gmail: </label>
                                    <input type="email" class="form-control form-white" placeholder="Nhập gmail..." type="text" name="email" value="<?php if (isset($row_info['gmail'])) {
                                                                                                                                                            echo $row_info['gmail'];
                                                                                                                                                        } ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Họ tên: </label>
                                    <input class="form-control form-white" placeholder="Nhập họ tên..." type="text" name="full_name" value="<?php if (isset($row_info['fullname'])) {
                                                                                                                                                    echo $row_info['fullname'];
                                                                                                                                                } ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number: </label>
                                    <input class="form-control form-white" placeholder="Nhập số điện thoại..." type="text" name="phone" value="0<?php if (isset($row_info['phone'])) {
                                                                                                                                                            echo $row_info['phone'];
                                                                                                                                                        } ?>">
                                </div>
                                <div class="text-right pt-2">
                                    <button type="button" class="btn btn-light " data-dismiss="modal"><a style="color: white;" href="customer.php">Back</a></button>
                                    <button class="btn btn-primary" name="edit_customer">Save</button>
                                </div>
                            </form>
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2023 &copy; Design by <a href="">Le Huy Dau</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>

    <!-- Third Party js-->
    <script src="assets\libs\peity\jquery.peity.min.js"></script>
    <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
    <script src="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets\libs\jquery-vectormap\jquery-jvectormap-us-merc-en.js"></script>

    <!-- Dashboard init -->
    <script src="assets\js\pages\dashboard-1.init.js"></script>

    <!-- App js -->
    <script src="assets\js\app.min.js"></script>

</body>

</html>