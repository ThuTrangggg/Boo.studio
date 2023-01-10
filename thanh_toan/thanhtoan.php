<?php
include('../header.php');
include('../connect.php');

?>
<?php
var_dump($_SESSION['gio_hang']['tong_so']);
if (isset($_SESSION['gio_hang']['tong_so']) > 0) {
    $sql = "SELECT * from tbl_khachhang WHERE khachhang_id = " . $_SESSION['userId'];
    $kq = mysqli_query($ket_noi, $sql);
    $tbl_khachhang = mysqli_fetch_array($kq);

?>
    <div class="container" style="margin-top: 150px;">

        <div class="col-lg-6">

            <h1 align="center" style="margin-bottom: 20px">Thông tin thanh toán</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_thanh_toan.php" id="form_thanh_toan" onsubmit="return(validateForm());">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="ten_khachhang" id="ten_thanh_toan" placeholder="Tên khách hàng" value="<?php echo $tbl_khachhang['ten_khachhang'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Địa chỉ email" value="<?php echo $tbl_khachhang['email'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="dia_chi" id="dia_chi" placeholder="Địa chỉ nhận hàng" value="<?php echo $tbl_khachhang['dia_chi'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select name="phuong_thuc_thanh_toan" class="form-control ">
                            <option value="">Phương thức thanh toán</option>
                            <option value="ZaloPay"> Zalo Pay</option>
                            <option value="momo">Momo</option>
                            <option value="cod">COD</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="txttongtien" value="<?php echo number_format($tongtien) ?>">
                <!-- <div class="form-group">
                                <label for="order_id">Mã hóa đơn</label>
                                <input readonly class="form-control" id="order_id" name="order_id" type="text" value="<?php echo $_SESSION['hoadon_id'] ?>" />
                            </div> -->
                <!-- <div class="form-group">
                                <label for="amount">Số tiền</label>
                                <input class="form-control" id="amount" name="amount" type="number" value="<?php echo $_SESSION['tongtien']; ?>" />
                            </div> -->
                <!-- <div class="form-group">
                                <label for="order_desc">Nội dung thanh toán</label>
                                <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                            </div> -->

                <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán</button>
        </div>
        <div class="col-lg-6">
            Tóm tắt đơn hàng
            
        </div>
    </div>
    </form>
    </div>
<?php
} else { ?>
    <center>
        <h2>Vui lòng đăng nhập để mua hàng!</h2>
    </center>
<?php } ?>
<script>
    // window.location.href="thongtindathangonline.php";
</script>
<br><br><br>
<?php include ('../footer.php');
?>