<?php
session_start();
if (!isset($_SESSION['user_admin'])) {
    header("location: login.php");
}

require_once("../config/config.php");
$sql_cat = mysqli_query($conn, "SELECT * FROM portfolio");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = mysqli_query($conn, "SELECT * FROM product WHERE id_product = $id");
    $row_prod = mysqli_fetch_assoc($product);

    $sql_cate = mysqli_query($conn, "SELECT * FROM product INNER JOIN portfolio ON product.id_portfolio = portfolio.id_portfolio WHERE id_product = $id");
    $info_cate = mysqli_fetch_assoc($sql_cate);
}


if (isset($_POST['edit_product'])) {
    $prod_code = $_POST['prod-code'];
    $prod_name = $_POST['prod-name'];
    $portfolio = $_POST['portfolio'];
    $price = $_POST['price'];
    $origin = $_POST['origin'];
    $specifications = $_POST['specifications'];


    if ($_FILES['img']['name'] == "") {
        $img = $row_prod['img'];
    } else {
        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($img_tmp, '../uploads/background/' . $img);
    }

    if ($_FILES['image']['name'] == "") {
        $image = $row_prod['image_product'];
    } else {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, '../uploads/products/' . $image);
    }

    $dess = $_POST['dess'];
    $des = $_POST['des'];

    //echo $update_product;
    $query_update_product = mysqli_query($conn, "UPDATE `product` SET `id_portfolio`='$portfolio',`ma_product`='$prod_code',`name_product`='$prod_name',`price`='$price',`origin` = '$origin',`specifications` = '$specifications' ,`img` = '$img',`image_product`='$image',`des1`='$dess',`description`='$des' WHERE id_product = $id");
    if ($query_update_product) {
        echo "<script>window.alert('Cập nhật thông tin sản phẩm thành công!');window.location.href = 'product.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Onplaza - Edit Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\fav-icon.png">
    <!-- third party css -->

    <!-- third party css end -->

    <!-- App css -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">

    <link href="assets\css\style.css" rel="stylesheet" type="text/css">

    <!-- CKEditor -->
    <script src="assets/ckeditor/ckeditor.js"></script>
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
                                        <li class="breadcrumb-item active">Chính sửa thông tin sản phẩm</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Sản phẩm</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-9" style="margin: auto;">
                            <h2>Chỉnh sửa thông tin sản phẩm</h2>
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label">Mã sản phẩm: </label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="prod-code" value="<?php if(isset($row_prod['ma_product'])){echo $row_prod['ma_product'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tên sản phẩm: </label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="prod-name" value="<?php if(isset($row_prod['name_product'])){echo $row_prod['name_product'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label>Danh mục sản phẩm: </label>
                                    <select class="form-control" name="portfolio">
                                        <?php
                                        while ($row_cat = mysqli_fetch_assoc($sql_cat)) { ?>
                                            <option value="<?php if(isset( $row_cat['id_portfolio'])){echo $row_cat['id_portfolio'];}  ?>" <?php if (isset($info_cate['id_portfolio'])&& isset($row_cat['id_portfolio']) && $info_cate['id_portfolio'] ==  $row_cat['id_portfolio']) {
                                                                                                        echo 'selected';
                                                                                                    } ?>><?php if(isset($row_cat['name_portfolio'])){echo $row_cat['name_portfolio'];}  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Giá: </label>
                                    <input type="text" placeholder="Nhập giá sản phẩm ..." name="price" class="form-control" value="<?php if(isset($row_prod['price'])){echo $row_prod['price'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Giá khuyến mãi: </label>
                                    <input type="text" placeholder="Nhập giá khuyến mãi ..." name="price1" class="form-control" value="<?php if(isset($row_prod['price1'])){echo $row_prod['price1'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label>Xuất sứ: </label>
                                    <select class="form-control" name="origin">
                                        <option value="(Korea) Hàn Quốc">(Korea) Hàn Quốc</option>
                                        <option value="Trung Quốc">Trung Quốc</option>
                                        <option value="Việt Nam">Việt Nam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Quy cách: </label>
                                    <input type="text" placeholder="Nhập quy cách ..." name="specifications" class="form-control" value="<?php if(isset($row_prod['price1'])){echo $row_prod['specifications'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Hình nền: </label>
                                    <input type="file" multiple="multiple" name="img" class="form-control">
                                    <p>
                                        <?php
                                            if(isset($row_prod['img'])){
                                                echo $row_prod['img'];
                                            } 
                                        ?>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="">Hình ảnh: </label>
                                    <input type="file" multiple="multiple" name="image" class="form-control">
                                    <p><?php if(isset($row_prod['image_product'])){
                                      echo  $row_prod['image_product'];
                                    } ?></p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Mô tả: </label>
                                    <textarea name="dess" id="editor1" cols="80" rows="10">
                                        <?php if(isset($row_prod['des1'])){echo $row_prod['des1'];} ?>
                                    </textarea>
                                    <script>
                                        CKEDITOR.replace('editor1')
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="">Chi tiết sản phẩm: </label>
                                    <textarea name="des" id="editor" cols="80" rows="10">
                                        <?php if(isset( $row_prod['description'])){echo  $row_prod['description'];} ?>
                                    </textarea>
                                    <script>
                                        CKEDITOR.replace('editor')
                                    </script>
                                </div>
                                <div class="text-right pt-2">
                                    <button type="button" class="btn btn-light " data-dismiss="modal"><a style="color: white;" href="product.php">Trở về</a></button>
                                    <button class="btn btn-primary" name="edit_product">Lưu</button>
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

    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>
    <!-- Scritp -->

    <!-- Third Party js-->
    <script src="assets\libs\peity\jquery.peity.min.js"></script>
    <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
    <script src="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets\libs\jquery-vectormap\jquery-jvectormap-us-merc-en.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="assets\js\pages\datatables.init.js"></script>

    <!-- App js -->
    <script src="assets\js\app.min.js"></script>

</body>

</html>