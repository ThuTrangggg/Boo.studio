<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <link rel="stylesheet" href="/Nhom14/assets/css/js_bootstrap/js.js">
    <link rel="stylesheet" href="/Nhom14/assets/css/fontawesome-free-6.2.1-web/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="/Nhom14/assets/css/js_bootstrap/bootstrap.min.css">
    <script src="/Nhom14/assets/css/js_bootstrap/jquery-3.1.1.min.js"></script>
    <script src="/Nhom14/assets/css/js_bootstrap/bootstrap.min.js"></script>
    <link rel="icon" href="/Nhom14/assets/img/boo_logo.png">
    <link rel="stylesheet" href="/Nhom14/assets/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/Nhom14/assets/css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <title>BOO.VN-NHOM14</title>
</head>
<?php include 'connect.php' ?>

<body>
    <div class="header">
        <div class="mt-8 logo">
            <a href="/Nhom14/index.php">
                <img src="/Nhom14/assets/img/boo_logo1.png" alt="">
            </a>
        </div>
        <div class="nav">
            <li>
                <a href="/Nhom14/danh_sach_mat_hang/danh_sach_mat_hang.php?id=1">áo</a>
            <li>
                <a href="/Nhom14/danh_sach_mat_hang/danh_sach_mat_hang.php?id=2">Váy</a>

            </li>
            <li>
                <a href="/Nhom14/danh_sach_mat_hang/danh_sach_mat_hang.php?id=3">Quần</a>

            </li>
            <li>
                <a href="/Nhom14/danh_sach_mat_hang/danh_sach_mat_hang.php?id=4">Phụ kiện</a>

            </li>
            <li>
                <a href="" style="color:red; font-weight:600">Tết mua hết</a>
                <!-- <ul class="subnav" style="text-transform: uppercase; ">
                    <div class="row">
                        <li class="col-lg-2"></li>
                        <li class="col-lg-2" style="font-weight:bold"><a href="">Tất cả mặt hàng nam</a></li>
                        <?php
                        // $sql = "SELECT *from tbl_loaisanpham where parent_id = 5";
                        // $ketquatruyvan = $conn->query($sql);
                        // if ($ketquatruyvan->num_rows > 0) {
                        //     while ($loaiHang = $ketquatruyvan->fetch_assoc()) 
                        // {
                        // $id = $loaiHang['id'];
                        // $sql1 = "select ten_loai_hang from danh_sach_loai_hang_2 where parent_id1 =" . $id;
                        // $ketquatruyvan1 = $conn->query($sql1);
                        ?>
                                <li class="col-lg-2"><a href="">
                                        <a style="font-weight:bold" href="./danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?
                                                                                                                        // = 
                                                                                                                        // $loaiHang['id'] 
                                                                                                                        ?>">
                                            <?php
                                            // echo $loaiHang['ten_loai_hang']; 
                                            ?>
                                        </a>
                                        <?php
                                        // while ($loaiHang1 = $ketquatruyvan1->fetch_assoc()) {
                                        ?>
                                            <a href="">
                                    <?php
                                    //  echo $loaiHang1['ten_loai_hang'];
                                    // }
                                    // }
                                    // }
                                    ?>
                                            </a>
                                </li>
                </ul> -->
            </li>
            <li>
                <a href="" style="color:green; font-weight:600">Boovironment</a>
            </li>
        </div>

        <script>
            function openSearch() {
                // console.log('2');
                // console.log(document.getElementById("search-id").style.display)
                // if(console.log(document.getElementById("search-id").style.display) ==="none"){
                //     document.getElementById("search-id").style.display= "block";
                // }else {
                //     document.getElementById("search-id").style.display}
                var x = document.getElementById('search-id');
                x.classList.toggle("visibile");

            }

            function openlogin() {
                // console.log('2');
                // console.log(document.getElementById("search-id").style.display)
                // if(console.log(document.getElementById("search-id").style.display) ==="none"){
                //     document.getElementById("search-id").style.display= "block";
                // }else {
                //     document.getElementById("search-id").style.display}
                var x = document.getElementById('login-subnav');
                x.classList.toggle("visibile");

            }
        </script>

        <div class="btn-right">
            <div class="search-btn">
                <a class="header-btn">
                    <i class="ti-search" style="cursor: pointer;" onclick="openSearch()"></i>
                </a>
                <div id="search-id" class="subnav">
                    <form action="/Nhom14/timkiem.php" method="get">
                        <div class="search-container">
                            <input class="search-input" size="110" type="text" name="search" placeholder="Bạn đang tìm kiếm?" />
                            <button type="submit" class="search-submit">
                                <i class="ti-search"></i>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="like-btn">
                <a class="header-btn" href="">
                    <i class="fa-regular fa-heart"></i>
                </a>
            </div>
            <div class="login-btn">
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role_id'] == 1) {
                ?>
                    <a class="header-btn dropdown-toggle" data-toggle="dropdown" href="">
                        <i class="fa-regular fa-user" style="color: red"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Thông tin tài khoản</a></li>
                        <li><a href="/Nhom14/admin/index.php">Quản lý website</a></li>
                        <li><a href="/Nhom14/sign_log_in/dang_xuat.php">Đăng xuất</a></li>
                    <?php
                } elseif (isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role_id'] == 2) {
                    ?>
                        <a class="header-btn dropdown-toggle" data-toggle="dropdown" href="">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Thông tin tài khoản</a></li>
                            <li><a href="/Nhom14/sign_log_in/dang_xuat.php">Đăng xuất</a></li>
                        <?php
                    } else {
                        ?>
                            <a class="header-btn dropdown-toggle" data-toggle="dropdown" href="">
                                <i class="fa-regular fa-user"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/Nhom14/sign_log_in/dang_nhap.php">Đăng nhập</a></li>
                                <li><a href="/Nhom14/sign_log_in/dang_ky.php">Đăng ký</a></li>
                            <?php
                        }
                            ?>
                            </ul>
            </div>
            <div class="cart-btn">
                <a class="header-btn" href="/Nhom14/thanh_toan/giohang.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="number-cart"> 
                        <?php
                        if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                            echo "" . $_SESSION['gio_hang']['tong_so'] . "";
                        }
                        ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>