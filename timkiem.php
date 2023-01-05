<?php
include 'connect.php';
include 'header.php';

?>
    <section class="breadcrumbbar">
        <div class="container" style="margin-top: 150px;">
            <!-- <div class="row"> -->

            <!-- <div class="slick"> -->
            <?php
           
            if (isset($_GET["search"]) && !empty($_GET["search"])) {
                $key = $_GET["search"];
                $sql = "select*from tbl_sanpham join tbl_loaisanpham on tbl_sanpham.sanpham_id = tbl_loaisanpham where ten_sanpham like '%" . $key . "%' or ten_mat_hang like'%" . $key . "%' or
                danh_sach_loai_hang_2.ten_loai_hang like '%" . $key . "%'";
                $ketquatruyvan = $conn->query($sql);
            if ($ketquatruyvan->num_rows > 0) {
                $i = 0;
                while ($matHang = $ketquatruyvan->fetch_assoc()) {
                    if ($i % 4 == 0) {
                    ?>
                        <div class="row">
                        <?php
                    }
                        ?>
                        <div class="col-sm-3">
                            <div class="">
                                <div class="panel-body" style="padding: 0">
                                    <a href="./danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?= $matHang['id'] ?>">
                                        <img src="<?php echo $matHang['hinh_anh'] ?>" class="img-responsive" style="width:100%; object-fit: contain" alt="Image">
                                    </a>
                                </div>
                                <div class="panel-heading text-center">
                                    <a style="color: black;" href="./danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?= $matHang['id'] ?>">
                                        <?php echo $matHang['ten_mat_hang']; ?>
                                    </a>
                                </div>
                                <div class="text-center row">
                                    <?php
                                    if (isset($matHang['gia_ban_khuyen_mai'])) {
                                    ?>
                                        <div style="text-decoration:line-through; text-align: right" class="col-lg-6"><?php echo number_format($matHang['gia_ban_khuyen_mai'], 0, '', '.') . 'đ'; ?></div>
                                        <div class="col-lg-6" style="color: red;  text-align: left"><?php echo number_format($matHang['gia_ban'], 0, '', '.') . 'đ'; ?></div>
                                    <?php
                                    } else { ?> <p> <?php echo number_format($matHang['gia_ban'], 0, '', '.') . 'đ';} ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($i % 4 == 1 && $i>4) {
                        ?>
                            <br>
                        <?php
                        }
                        $i++;
                    }
                } 
            elseif($ketquatruyvan->num_rows == 0){
                ?>
                <div class="text-center">
                    <img src="./assets/img/notfound.jpg" alt="">
                </div><?php
                }
            }
                        ?>
                        </div>
        </div>
    </section>
    <?php include 'footer.php' ?>