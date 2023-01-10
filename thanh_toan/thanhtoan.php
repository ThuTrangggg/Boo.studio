<?php
include('../header.php');
include('../connect.php');

?>
<?php
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
            <table class="" style="margin-bottom: -110px;">
                    
                    <tbody id="giohang" >
                        <?php
                        $stt = 0;
                        $tongtien = 0;
                        $_SESSION["gio_hang"]["tong_so"] = 0;
                        foreach ($_SESSION['gio_hang']["mat_hang"] as $key => $row) {
                            $stt = $stt + 1;
                            $thanhtien = $row['so_luong'] * $row['gia'];
                            $tongtien = $thanhtien + $tongtien;
                            $_SESSION["gio_hang"]["tong_so"] += $row["so_luong"];
                        ?>
                            <tr style="border: solid lightgrey; border-width: 1px 0">
                                <style>
                                    td{
                                        text-align: center;
                                        padding: 10px 15px 15px 10px;
                                        }
                                </style>
                                <td><img height="100px" src="<?= $row['anh'] ?>"></td>
                                <td><a href="../danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?php echo $row['sanpham_id'] ?>"><?php echo $row['ten_sanpham'] ?></a></td>
                                <td><?php echo $row['size'] ?> </td>
                                <td><?php echo number_format($row['gia'],0,'','.') ?> đ</td>
                                <td><input style="width: 65px" onkeyup="suagiohang(<?php echo $key; ?>)" id="soluong<?php echo $key; ?>" value="<?php echo $row['so_luong'] ?>"></td>
                                <td><?php echo number_format($thanhtien,0,'','.') ?> đ</td>
                            </tr>
                        <?php }
                        ?>
                        <tr>
                            <td colspan="8" class="text-center">
                                Tổng tiền: <strong class="text-primary"><?php echo number_format($tongtien,0,'','.') ?> đ</strong>
                                    </td>
                            <td colspan="8">Vận chuyển
                            <?php echo number_format(35000,0,'','.') ?>
                            </td>
                        </tr>
                        <td style="border: 1px solid lightgrey; border-width: 1px 0">Tổng cộng 
                        <p></p>
                    </td>
                    </tbody>
                </table>
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