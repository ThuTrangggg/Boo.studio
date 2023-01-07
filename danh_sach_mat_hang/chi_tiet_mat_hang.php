<?php
include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php";

session_start();; ?>
<!DOCTYPE html>
<html lang="li">

<!-- <head>
    <link rel="stylesheet" href="css/sp.css">
    <link rel="icon" type="image/x-icon" href="./image/logo.jpg">
    <title>BOO | DANH MỤC SẢN PHẨM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Nhom14/assets/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="anhdanhmuc/Logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="anhdanhmuc/Logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="anhdanhmuc/Logo.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head> -->

<body>
    <?php
    $sanpham_id = $_GET['id'];
    $sql1 = "SELECT tbl_sanpham.sanpham_id,tbl_sanpham.loaisanpham_id, 
    tbl_sanpham.ten_sanpham,tbl_sanpham.anh,tbl_sanpham.gia, 
    tbl_sanpham.so_luong-COALESCE(tbl_giohang.so_luong,0),tbl_sanpham.gia_ban_khuyen_mai
    FROM tbl_sanpham 
    LEFT JOIN tbl_giohang ON tbl_sanpham.sanpham_id=tbl_giohang.sanpham_id 
    WHERE tbl_sanpham.sanpham_id='" . $sanpham_id . "' ";

    $kq = mysqli_query($ket_noi, $sql1);


    $row1 = mysqli_fetch_array($kq);

    $loaisanpham_id = $row1["loaisanpham_id"];

    $sql2 =  "SELECT * FROM tbl_loaisanpham WHERE loaisanpham_id = '" . $loaisanpham_id . "' ";
    $loai_sanpham = mysqli_query($ket_noi, $sql2);
    $row2 = mysqli_fetch_array($loai_sanpham);

    // $sql = "select * from mis_mat_hang where id=".$id;
    // $result = $conn->query($sql);
    ?>
    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container" style="margin-top: 50px;">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $row2["ten_loaisanpham"]; ?></a></li>
                <li class="breadcrumb-item"><a href=""><?php echo $row1["ten_sanpham"]; ?></a></li>
            </ol>
        </div>
    </section>

    <!-- nội dung của trang  -->
    <section class="product-page mb-4">
        <div class="container">
            <!-- chi tiết 1 sản phẩm -->
            <div class="product-detail bg-white p-4">
                <div class="row">
                    <!-- ảnh  -->
                    <div class="col-md-6 khoianh">
                        <div class="anhto mb-4">
                            <a class="active" href="<?php echo $row1["anh"]; ?>" data-fancybox="thumb-img">
                                <img class="product-image" src="<?php echo $row1["anh"]; ?>" alt="<?php echo $row1["anh"]; ?>" style="width: 100%;">
                            </a>
                            <a href="<?php echo $row1["anh"]; ?>" data-fancybox="thumb-img"></a>
                        </div>
                    </div>
                    <!-- thông tin sản phẩm: tên, giá bìa giá bán tiết kiệm, các khuyến mãi, nút chọn mua.... -->
                    <div class="col-md-6 khoithongtin">

                        <h2 style="margin-left: 50px"><?php echo $row1["ten_sanpham"]; ?></h2>

                        <h5 style="margin-left: 50px">GIÁ BÁN:
                            <h3 style="color: #F5A623; margin-left: 50px;">
                                <?php echo number_format($row1["gia"], 0, '', '.'); ?>₫
                            </h3>
                            <?php
                            if (isset($row1['gia_ban_khuyen_mai'])) {
                            ?>
                                <div style="text-decoration:line-through; color: #F5A623; margin-left: 50px; text-align: right" class="col-lg-6"><?php echo number_format($row1['gia'], 0, '', '.') . 'đ'; ?></div>
                                <div class="col-lg-6" style="color: red;  text-align: left"><?php echo number_format($row1['gia_ban_khuyen_mai'], 0, '', '.') . 'đ'; ?></div>
                            <?php
                            } else { ?> <p> <?php echo number_format($row1['gia'], 0, '', '.') . 'đ';
                                            } ?></p>
                        </h5>

                        <h6 style="margin-left: 50px">TÌNH TRẠNG: <?php if ($row1["tbl_sanpham.so_luong-COALESCE(tbl_giohang.so_luong,0)"] > 0) echo "CÒN HÀNG";
                                                                    else echo "HẾT HÀNG"; ?></h6>


                        <form class="form-inline" method="post" action="../thanh_toan/themgiohang.php" id="form_them_gio_hang">
                            <div class="form-floating mb-3">
                                <input style="margin-left: 50px" class="form-control" id="so_luong" name="so_luong" placeholder="Số lượng" type="number" value="1" min="0" max="<?= $row1["tbl_sanpham.so_luong-COALESCE(tbl_giohang.so_luong,0)"] ?>">

                            </div>
                            <select name="size" id="">
                                <option  value="S">S</option>
                                <option value="M">M</option>
                            </select>
                            <input type="hidden" value="<?= $row1["sanpham_id"] ?>" name="sanpham_id" />
                            <input type="hidden" value="<?= $row1["ten_sanpham"] ?>" name="ten_sanpham" />
                            <input type="hidden" value="<?= $row1["gia_ban_khuyen_mai"] ?>" name="gia_ban_khuyen_mai" />
                            <input type="hidden" value="<?= $row1["tbl_sanpham.so_luong-COALESCE(tbl_giohang.so_luong,0)"] ?>" name="ton_kho" />
                            <input type="hidden" value="<?php if ($row1["tbl_sanpham.so_luong-COALESCE(tbl_giohang.so_luong,0)"] > 0) echo "Còn hàng";
                                                        else echo "Hết hàng"; ?>" name="tinh_trang" />
                            <input type="submit" id="<?= $row1["sanpham_id"] ?>" class="button-capnhat text-uppercase offset-md-4 btn btn-warning mb-4" name="btnSubmit" value="Thêm vào giỏ hàng " onclick="addtocard(<?= $row1["sanpham_id"] ?>)">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- het product-page -->

    <!-- khối sản phẩm tương tự -->
    <section class="_1khoi spmoi">
        <div class="container-fluid">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- <div class="row"> -->
                <!--header-->
                <!-- <div class="sptt-ttl">
                        <div class="header text-uppercase">Sản phẩm tương tự</div> 
                    </div>
                </div> -->
                <div class="khoisanpham row" style="padding-bottom: 2rem;">
                    <!-- 1 sản phẩm -->
                    <?php
                    $sql = "SELECT * FROM tbl_sanpham where loaisanpham_id='" . $loaisanpham_id . "'";
                    $kq = mysqli_query($ket_noi, $sql);
                    while ($row = mysqli_fetch_array($kq)) {; ?>
                        <div class="card col-md-">
                            <a href="sanpham.php?id=<?php echo $row["sanpham_id"]; ?>" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row["ten_sanpham"]; ?>">
                                <img class="card-img-top anh" style="width: 40%" src="<?php echo $row["anh"]; ?>" style="width: 23px;height: 30px" alt="<?php echo $row["anh"]; ?>">

                                <div class="card-body noidungsp">
                                    <h6 class="card-title ten"><?php echo $row["ten_sanpham"]; ?></h6>
                                    <div class="gia d-flex align-items-baseline">
                                        <div class="giamoi" style="color: #f68634"><?php echo number_format($row["gia"], 0, '', ','); ?>₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- footer  -->


    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#" style="background:#f68634;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script type="text/javascript">
        function addtocard(data1) {
            //alert(id);
            var so_luong1 = $("#so_luong").val();
            //alert("Thêm");
            $.ajax({
                url: "themgiohang.php", // gửi ajax đến file result.php
                type: "get", // chọn phương thức gửi là get
                dateType: "text", // dữ liệu trả về dạng text
                data: { // Danh sách các thuộc tính sẽ gửi đi
                    id: data1,
                    so_luong: so_luong1
                },
                success: function(result) {
                    // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                    // đó vào thẻ div có id = result
                    alert(result);
                }
            });
        }
    </script>
</body>
<?php include("../footer.php"); ?>

</html>