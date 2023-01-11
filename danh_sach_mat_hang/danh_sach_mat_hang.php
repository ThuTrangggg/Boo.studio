<?php
include '../connect.php';
include '../header.php';
$id = $_GET['id'];

?>

<section class="breadcrumbbar">
    <div class="container" style="margin-top: 150px; margin-bottom: 150px">
        <!-- <div class="row"> -->

        <!-- <div class="slick"> -->
        <?php
        $sql = "select * from tbl_sanpham where loaisanpham_id=" . $id;
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
                        <div class="info" style="position: relative;">
                            <div class="panel-body" style="padding: 0">
                                <a href="/Nhom14/danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?= $matHang['sanpham_id'] ?>">
                                    <img src="<?php echo $matHang['anh'] ?>" class="img-responsive" style="width:100%; object-fit: contain" alt="Image">
                                </a>
                            </div>
                            <div class="panel-heading text-center">
                                <a style="color: black;" href="/Nhom14/danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?= $matHang['sanpham_id'] ?>">
                                    <?php echo $matHang['ten_sanpham']; ?>
                                </a>
                            </div>
                            <div class="text-center row">
                                <?php
                                if (isset($matHang['gia_ban_khuyen_mai'])) {
                                ?>
                                    <div style="text-decoration:line-through; text-align: right" class="col-lg-6"><?php echo number_format($matHang['gia'], 0, '', '.') . 'đ'; ?></div>
                                    <div class="col-lg-6" style="color: red;  text-align: left"><?php echo number_format($matHang['gia_ban_khuyen_mai'], 0, '', '.') . 'đ'; ?></div>
                                <?php
                                } else { ?> <p> <?php echo number_format($matHang['gia'], 0, '', '.') . 'đ';
                                            } ?></p>
                            </div>
                            
                            <div class="row row-hide">
                                <div class="row like" style="position: absolute; left: 232px;
    bottom: 140px;">
                                    <button <i class="fa-regular fa-heart" style="border: none; box-shadow: 0 2px 4px rgb(0 0 0 / 16%); border-radius: 20px; width: 30px; height: 30px; font-size: 18px; background-color: white;"></i></button>
                                </div>
                                <div class="row tt" style="position: absolute;bottom: 100px;margin-left:10px">
                                    <div class="col-md-6">
                                        <select name="size" id="" style="border: none; outline: none; width: 120px; height: 25px; /* border-radius: 20px; */ text-align: center; font-size: 13px;">
                                            <option value="Size">Size</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="position: absolute;
    left: 118px;">
                                        <input type="submit" class="button-capnhat text-uppercase offset-md-1 btn col-md-6" style="background-color: #000; border-radius: 0; color: #fff; height: 25px; width: 120px; font-size: 13px; line-height: 14px;" name="btnSubmit" value="Thêm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($i % 4 == 1 && $i > 4) {
                    ?>
                    </div>
                    </br>
                    <br>
            <?php
                    }
                    $i++;
                }
            } elseif ($ketquatruyvan->num_rows == 0) {
            ?>
            <div class="text-center">
                <img src="./assets/img/notfound.jpg" alt="">
            </div><?php
                }

                    ?>
    </div>
</section>
<?php include '../footer.php' ?>