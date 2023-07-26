<?php
session_start();
require_once("../config/config.php");
if (!isset($_SESSION['user_admin'])) {
    header("location: login.php");
}
// $sql_customer = mysqli_query($conn, "SELECT * FROM user WHERE permission = 2");
// $count_customer = mysqli_num_rows($sql_customer);

$sql_product = mysqli_query($conn, "SELECT * FROM product");
$count_product = mysqli_num_rows($sql_product);

$sql_order = mysqli_query($conn, "SELECT * FROM cart WHERE id_status = 3 OR id_status = 2 OR id_status = 1 ");
$count_order = mysqli_num_rows($sql_order);

$money = mysqli_query($conn, "SELECT * FROM cart WHERE id_status = 3");
$total = 0;
while ($row = mysqli_fetch_array($money)) {
    $total += $row['total'];
}

$money_dec = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 12 AND id_status = 3");
$total_dec = 0;
while ($row_dec = mysqli_fetch_array($money_dec)) {
    $total_dec += $row_dec['total'];
}

$money_nov = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 11 AND id_status = 3");
$total_nov = 0;
while ($row_nov = mysqli_fetch_array($money_nov)) {
    $total_nov += $row_nov['total'];
}

$money_oct = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 10 AND id_status = 3");
$total_oct = 0;
while ($row_oct = mysqli_fetch_array($money_oct)) {
    $total_oct += $row_oct['total'];
}

$money_sep = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 9 AND id_status = 3");
$total_sep = 0;
while ($row_sep = mysqli_fetch_array($money_sep)) {
    $total_sep += $row_sep['total'];
}

$money_aug = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 8 AND id_status = 3");
$total_aug = 0;
while ($row_aug = mysqli_fetch_array($money_aug)) {
    $total_aug += $row_aug['total'];
}

$money_jul = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 7 AND id_status = 3");
$total_jul = 0;
while ($row_jul = mysqli_fetch_array($money_jul)) {
    $total_jul += $row_jul['total'];
}

$money_jun = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 6 AND id_status = 3");
$total_jun = 0;
while ($row_jun = mysqli_fetch_array($money_jun)) {
    $total_jun += $row_jun['total'];
}

$money_may = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 5 AND id_status = 3");
$total_may = 0;
while ($row_may = mysqli_fetch_array($money_may)) {
    $total_may += $row_may['total'];
}
$money_apr = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 4 AND id_status = 3");
$total_apr = 0;
while ($row_apr = mysqli_fetch_array($money_apr)) {
    $total_apr += $row_apr['total'];
}
$money_mar = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 3 AND id_status = 3");
$total_mar = 0;
while ($row_mar = mysqli_fetch_array($money_mar)) {
    $total_mar += $row_mar['total'];
}
$money_feb = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 2 AND id_status = 3");
$total_feb = 0;
while ($row_feb = mysqli_fetch_array($money_feb)) {
    $total_feb += $row_feb['total'];
}
$money_jan = mysqli_query($conn, "SELECT * FROM cart WHERE MONTH(time) = 1 AND id_status = 3");
$total_jan = 0;
while ($row_jan = mysqli_fetch_array($money_jan)) {
    $total_jan += $row_jan['total'];
}

$money_month = mysqli_query($conn, "SELECT * FROM `cart` WHERE MONTH(time) = MONTH(now()) AND id_status = 3");
$total_month = 0;
while ($row_month = mysqli_fetch_array($money_month)) {
    $total_month += $row_month['total'];
}

$money_last_month = mysqli_query($conn, "SELECT * FROM `cart` WHERE MONTH(time) = MONTH(DATE_SUB(now(), INTERVAL 1 MONTH)) AND id_status = 3");
$total_last_month = 0;
while ($row_last_month = mysqli_fetch_array($money_last_month)) {
    $total_last_month += $row_last_month['total'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Onplaza - Thống kê chi tiết</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\fav-icon.png">

    <!-- third party css -->
    <link href="assets\libs\datatables\dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="assets\libs\datatables\responsive.bootstrap4.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    
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
                                
                                
                                <li>
                                    <a href="order.php">Đơn hàng</a>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bảng điều khiển</a></li>
                                        <li class="breadcrumb-item active">Bảng điều khiển 2</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Bảng điều khiển 2</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                </div>

                                <h4 class="header-title mt-0 mb-2">Khách hàng</h4>

                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#f05050 " data-bgcolor="#48525e" value="<?= $count_customer ?>" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15">
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> <?php 
                                        // $count_customer 
                                        ?>0 </h2>
                                        <p class="text-muted mb-0">Tất cả</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                </div>

                                <h4 class="header-title mt-0 mb-3">Sản phẩm</h4>

                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#675db7" data-bgcolor="#48525e" value="<?= $count_product ?> " data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15">
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> <?= $count_product ?> </h2>
                                        <p class="text-muted mb-0">Tất cả sản phẩm</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                </div>

                                <h4 class="header-title mt-0 mb-3">Đơn hàng Online</h4>

                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#23b397" data-bgcolor="#48525e" value="<?= $count_order ?>" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15">
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> <?= $count_order ?> </h2>
                                        <p class="text-muted mb-0">Tất cả đơn hàng</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>

                                </div>

                                <h4 class="header-title mt-0 mb-3">Doanh thu</h4>

                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#ffbd4a" data-bgcolor="#48525e" value="35" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15">
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> <?= number_format($total,0,"",".") ?>₫ </h2>
                                        <p class="text-muted mb-0">Doanh thu</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="container">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div> <!-- end col-->

                        <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                                <h4 class="header-title">Báo cáo doanh thu</h4>
                                <p class="text-muted">1 Mar - 31 Mar </p>
                                <h2 class="mb-4"></i><?=number_format($total,0,"",".")?>₫</h2>

                                <div class="row mb-4">
                                    <div class="col-6">
                                        <p class="text-muted mb-1">Tháng này</p>
                                        <h3 class="mt-0 font-20"><?php echo number_format( $total_month,0,"","."); ?>₫ <?php if(($total_month/10  -100)<0){echo '<small class="badge badge-light-danger font-13">'. ($total_month/10  -100) ."%".'</small>';}else{echo '<small class="badge badge-light-success font-13">'. ($total_month/10  -100)."%" . '</small>';}?></h3>
                                    </div>

                                    <div class="col-6">
                                        <p class="text-muted mb-1">Tháng trước</p>
                                        <h3 class="mt-0 font-20">$<?php echo $total_last_month; ?> <?php if(($total_last_month/10  -100)<0){echo '<small class="badge badge-light-danger font-13">'. ($total_last_month/10  -100) . "%". '</small>';}else{echo '<small class="badge badge-light-success font-13">'. ($total_last_month/10  -100). "%" .'</small>';}?></h3>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="80">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                                </div>

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->

                        <div class="col-xl-8">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                                <h4 class="header-title mb-3">Lịch sử giao dịch</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-borderless table-hover table-nowrap mb-0" id="datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-top-0">Họ tên</th>
                                                <th class="border-top-0">Card</th>
                                                <th class="border-top-0">Ngày</th>
                                                <th class="border-top-0">Tổng</th>
                                                <th class="border-top-0">Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql_customer = mysqli_query($conn, "SELECT * FROM cart INNER JOIN status ON cart.id_status = status.id_status LIMIT 10");
                                                $i=1;
                                                while($row = mysqli_fetch_array($sql_customer)){
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <img src="assets\images\users\user-<?=$i++?>.jpg" alt="user-pic" class="rounded-circle avatar-sm">
                                                                <span class="ml-2"><?= $row['name_kh'] ?></span>
                                                            </td>
                                                            <td>
                                                                <img src="assets\images\cards\visa.png" alt="user-card" height="24">
                                                                <span class="ml-2">**** 3256</span>
                                                            </td>
                                                            <td><?= date('d-m-Y',strtotime($row['time']))?></td>
                                                            <td>$<?=number_format($row['total'],0,"",".")?>₫</td>
                                                            <td>
                                                                <?php
                                                                    if ($row['id_status'] == 1) {
                                                                        echo '<span class="badge badge-pink">' . $row['name_status'] . '</span>';
                                                                    } elseif ($row['id_status'] == 2) {
                                                                        echo '<span class="badge badge-warning">' . $row['name_status'] . '</span>';
                                                                    } elseif ($row['id_status'] == 3) {
                                                                        echo '<span class="badge badge-success">' . $row['name_status'] . '</span>';
                                                                    } else {
                                                                        echo '<span class="badge badge-danger">' . $row['name_status'] . '</span>';
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                }
                                            ?>
                                            </tbody>
                                    </table>
                                </div> <!-- end table-responsive -->

                            </div> <!-- end card-box-->
                        </div> <!-- end col-->

                    </div>
                    <!-- end row -->

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

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>

    <!-- Third Party js-->
    <script src="assets\libs\jquery-knob\jquery.knob.min.js"></script>
    <script src="assets\libs\peity\jquery.peity.min.js"></script>
    <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
    <script src="assets\libs\datatables\jquery.dataTables.min.js"></script>
    <script src="assets\libs\datatables\dataTables.bootstrap4.js"></script>
    <script src="assets\libs\datatables\dataTables.responsive.min.js"></script>
    <script src="assets\libs\datatables\responsive.bootstrap4.min.js"></script>
    <!-- third party js ends -->

    <!-- Dashboard init -->
    <script src="assets\js\pages\dashboard-2.init.js"></script>

    <!-- App js -->
    <script src="assets\js\app.min.js"></script>
    
    <script>
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'],
        datasets:[{
          label:'Tổng doanh thu',
          data:[
            <?php echo $total_jan?>,
            <?php echo $total_feb?>,
            <?php echo $total_mar?>,
            <?php echo $total_apr?>,
            <?php echo $total_may?>,
            <?php echo $total_jun?>,
            <?php echo $total_jul?>,
            <?php echo $total_aug?>,
            <?php echo $total_sep?>,
            <?php echo $total_oct?>,
            <?php echo $total_nov?>,
            <?php echo $total_dec?>,
          ],
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Doanh thu theo tháng',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>

</body>

</html>