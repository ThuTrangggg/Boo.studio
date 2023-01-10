<nav c<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <!--<a class="navbar-brand ps-3" href="../index.php">Boo</a>-->
            <!-- Sidebar Toggle-->
            <!--<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>-->
            <!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">-->
             <!--   <div class="input-group">
                    <i class="fas fa-search"></i>
                </div>-->
            </form>
            <!-- Navbar-->
            <?php // include("../header.php")?>
            <?php
                include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/connect.php";
                //$sql="SELECT * FROM tbl_khachhang where role_id = '".$_SESSION['role_id']."'";
                //$kq = mysqli_query($ket_noi, $sql);
                //$row = mysqli_fetch_array($kq);
            ;?>
            <!--<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>   <?php echo $_SESSION['ten_dang_nhap'];?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/Nhom14/index.php">Website</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/Nhom14/sign_log_in/dang_xuat.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" >
                    <div class="sb-sidenav-menu" >
                        <div class="nav">
                            <!--<a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản lý hệ thống
                            </a>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Danh mục sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="toanbosanpham.php">Toàn bộ sản phẩm</a> -->
                                    <?php
                                        //$sql = "SELECT * FROM tbl_loaisanpham";
                                       // $danh_muc = mysqli_query($ket_noi,$sql);
                                       // while ($row=mysqli_fetch_array($danh_muc)) 
                                       {
                                    ;?> 
                                    <!--<a class="nav-link" href="sanpham.php?id=<?php //echo $row["loaisanpham_id"];?>"><?php //echo $row["ten_loaisanpham"];?></a>-->
                                    <?php
                                        }
                                    ;?>
                                </nav>
                            </div>
                            <a class="nav-link" style="color: #0e0e0f;    font-size: 20px;" href="/Nhom14/thongtintaikhoan.php">
                                <div style="color: #0e0e0f;" class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Thông tin tài khoản
                            </a>
                            <a class="nav-link" style="color: #0e0e0f;    font-size: 20px;" href="/Nhom14/thong_tin/lichsumuahang.php">
                                <div style="color: #0e0e0f;" class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Lịch sử mua hàng
                            </a>
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <!-- <div class="small">User: <?php echo $_SESSION['ten_admin'];?> </div> -->
                    </div>
                </nav>
            </div>