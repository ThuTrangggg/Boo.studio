<?php
include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php";
// include ("../header.php");
// include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/connect.php"; 
include("../connect.php");

$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT *FROM `tbl_khachhang` WHERE
 `email` = '" . $email . "' AND `mat_khau` = '" . $password . "' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($nguoiDung = $result->fetch_assoc()) {
        $nguoiDungId = $nguoiDung['khachhang_id'];
        $nguoiDungemail = $nguoiDung['email'];
        $nguoiDungrole = $nguoiDung['role_id'];
        $mat_khau_cu = $nguoiDung['mat_khau'];
        // $nguoiDungAdmin = $nguoiDung['admin'];
    }
        session_start(); // Muốn làm việc với SESSION luôn phải dùng hàm khởi tạo này
        $_SESSION["login"] = 1;
        $_SESSION["role_id"] = $nguoiDungrole;
        $_SESSION["ten_dang_nhap"] = $nguoiDungemail;
        $_SESSION["gio_hang"]["mat_hang"] = array();
        $_SESSION["gio_hang"]["tong_so"] = 0;
        $_SESSION["gio_hang"]["tong_tien"] = 0;
        $_SESSION['userId'] = $nguoiDungId;
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
</script>
";
