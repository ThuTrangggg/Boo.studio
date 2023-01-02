<?php
require("./header.php");
include("connect.php");
?>
<html>

<body>

  <div id="content">

    <div id="slider"></div>
    <div class="first-row " style="margin-top: 200px;">

    </div>
    <div class="second-row slick">
      <div class="col-lg-3" style="margin-bottom: 20px;">

        <!-- <div class="slick"> -->
        <?php $sql = "SELECT *from danh_sach_mat_hang  ORDER by created_date DESC ";
        $ketquatruyvan = $conn->query($sql);
$i=0;
        if ($ketquatruyvan->num_rows > 0) {
          while ($matHang = $ketquatruyvan->fetch_assoc()) {
          $i++;
        ?>
        
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
                <div class="row" style="margin-top: 10px;">
                  <?php
                  if (isset($matHang['gia_ban_khuyen_mai'])) {
                  ?>
                    <div class="col-lg-2"></div>
                    <div style="text-decoration:line-through;" class="col-lg-4"><?php echo number_format($matHang['gia_ban_khuyen_mai'], 0, '', '.') . 'đ'; ?></div>
                    <div class="col-lg-4" style="color: red;"><?php echo number_format($matHang['gia_ban'], 0, '', '.') . 'đ'; ?></div>
                    <div class="col-lg-2"></div>
                  <?php
                  } else { ?>
                    <div class=""><?php echo number_format($matHang['gia_ban'], 0, '', '.') . 'đ';
                                } ?></div>
                </div>
              </div>
            </div>
        <?php }
        } ?>
      </div>

    </div>

    <script>
      $(document).ready(function() {
        $('.slick').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1
        });
      });
    </script>
  </div>
</body>

</html>

<?php
// require("./footer.php")
//  include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/footer.php"; 

?>

<html>

</html>