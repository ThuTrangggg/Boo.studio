<?php
include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php";
// include ("../header.php");
// include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/connect.php"; 
include("../connect.php");

$ten_dangnhap = $_POST['ten_dangnhap'];
$password = $_POST['password'];
$sql = "SELECT *FROM `tbl_taikhoan` JOIN tbl_khachhang 
on tbl_taikhoan.id = tbl_khachhang.id_taikhoan WHERE
 `ten_dangnhap` = '" . $ten_dangnhap . "' AND `mat_khau` = '" . $password . "' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($nguoiDung = $result->fetch_assoc()) {
        $nguoiDungId = $nguoiDung['id']; //Tài khoản ID
        $nguoiDungten_dangnhap = $nguoiDung['ten_dangnhap'];
        $nguoiDungrole = $nguoiDung['id_loaitaikhoan'];
        $mat_khau_cu = $nguoiDung['mat_khau'];

        $khachHangId =$nguoiDung['khachhang_id'];
        // $nguoiDungAdmin = $nguoiDung['admin'];
    }
        session_start(); // Muốn làm việc với SESSION luôn phải dùng hàm khởi tạo này
        $_SESSION["login"] = 1;
        $_SESSION["role_id"] = $nguoiDungrole;
        $_SESSION["ten_dang_nhap"] = $nguoiDungten_dangnhap;
        $_SESSION["gio_hang"]["mat_hang"] = array();
        $_SESSION["gio_hang"]["tong_so"] = 0;
        $_SESSION["gio_hang"]["tong_tien"] = 0;
        $_SESSION['userId'] = $nguoiDungId; //Tài khoản ID
        $_SESSION['khachHangId'] = $khachHangId; //Tài khoản ID

        $_SESSION["wishlist"]["tong_so_wishlist"] = 0;
        $_SESSION["wishlist"]["mat_hang_wishlist"] = array();
        $_SESSION['mat_khau']=$mat_khau_cu;
        // $_SESSION['admin'] = $nguoiDungAdmin;
        // echo "
        //         <script type='text/javascript'>
        //             window.alert('Bạn đã đăng nhập thành công');
        //         </script>
        //     ";

        echo "
                <script type='text/javascript'>
                    window.location.href='/Nhom14/index.php';
                </script>
            ";
} else echo "
<script type='text/javascript'>
    window.alert('Bạn đã đăng nhập không thành công');
    window.location.href='/Nhom14/sign_log_in/thuc_hien_dang_nhap.php';
</script>
";
