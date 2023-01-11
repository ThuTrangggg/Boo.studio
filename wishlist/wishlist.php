<?php
include("../connect.php");
include("../header.php");

if ($_SESSION['login'] != 1) {
?>
    <script>
        alert('Bạn chưa đăng nhập');
        location = '../sign_log_in/dang_nhap.php';
    </script>
<?php
}
?>

<body>
    
    <div class="container" style="margin-top: 150px">
        <div class="row" style="margin-bottom: 200pX;"> 
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <!-- <h1>  Danh sách yêu thích </h1> -->
            <h1 style="
    font-size: 30;
    margin-top: 15px;
    margin-bottom: 45px;
    margin-left: 180px;
"> Danh sách yêu thích </h1>
                <table class="table" style="margin-bottom: -110px;">
                    <tr style="border-bottom: solid;border-top: solid;border-color: lightgrey;border-width: 1px;" >
                    <style>
                                    th{
                                        text-align: center;
                                        line-height: 50px;
                                        }
                                </style>
                        <th>STT</th>
                        <th>Sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Xóa</th>
                    </tr>
                    <tbody id="wishlist" >
                        <?php
                        $stt = 0;
                        //$tongtien = 0;
                        $_SESSION["wishlist"]["tong_so_wishlist"] = 0;
                        foreach ($_SESSION['wishlist']["mat_hang_wishlist"] as $key => $row) {
                            $stt = $stt + 1;
                            //$thanhtien = $row['so_luong'] * $row['gia'];
                            //$tongtien = $thanhtien + $tongtien;
                           // $_SESSION["wishlist"]["tong_so_wishlist"] += $row["so_luong"];
                        ?>
                            <tr style="border-bottom: solid; border-width: 1px;border-color: lightgrey;">
                                <style>
                                    td{
                                        text-align: center;
                                        padding: 10px 15px 15px 10px;
                                        }
                                </style>
                                <td><?php echo $stt ?></td>
                                <td><a href="../danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?php echo $row['sanpham_id'] ?>"><?php echo $row['ten_sanpham'] ?></a></td>
                                <td><img height="100px" src="<?= $row['anh'] ?>"></td>
                                <!-- <td><?php // echo $row['size'] ?> </td> -->
                                <td><?php echo number_format($row['gia'],0,'','.') ?> đ</td>
                                <td><a class="btn btn-danger" href="xoa_wishlist.php?id=<?php echo $key ?>">Xóa</a></td>
                            </tr>
                        <?php }
                        ?>
                        <!-- <tr>
                            <td colspan="8" class="text-center">
                                Danh sach yêu thích  
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <hr style="border: none;"><br><br><br>
                <?php
            //     if(isset($_SESSION['wishlist']['tong_so_wishlist']) && $_SESSION['wishlist']['tong_so_wishlist']>0){
            //     ?>
            <!-- //         <div style="text-align:center;margin-bottom: 50px;margin-top: 10px;">
            //             <a class="btn text-uppercase" style="background-color: #000; border-radius: 40px; color:#fff;height: 36px; width: 152px; margin-left:64px;" href="thanhtoan.php"></a>
            //         </div> -->
               <?php
            // }elseif($_SESSION['wishlist']['tong_so_wishlist']==0){ ?>
            <!-- // <div style="text-align:center; margin-bottom: 50px">
            //             <img src="https://bizweb.dktcdn.net/100/333/755/themes/688335/assets/empty_cart.png?1647314197820" alt="">
            //         </div> -->
                     <?php //}?>
                <!--Nếu số hàng trong giỏ >0 thì mới hiện form dưới-->

            </div>
            <div class="col-sm-2"></div>
        </div>
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script type="text/javascript">
            //function suagiohang(id) {
                var so_luong = $("#soluong" + id).val();
                if (so_luong == null || so_luong.length <= 0) {

                } else {
                    if (so_luong == 0) {
                        so_luong = 1;
                    } else {
                        so_luong = so_luong;
                    }
                    $.ajax({
                        url: "suagiohang.php", // gửi ajax đến file result.php
                        type: "get", // chọn phương thức gửi là get
                        dateType: "text", // dữ liệu trả về dạng text
                        data: { // Danh sách các thuộc tính sẽ gửi đi
                            id: id,
                            so_luong: so_luong
                        },
                        success: function(result) {
                            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                            // đó vào thẻ div có id = result
                            //alert(result);
                            $("#giohang").html(result);

                        }
                    });
                }
            
        </script>
    </div>
</body>




</html>
<?php include("../footer.php"); ?>