<?php 
include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php"; 

$email = $_POST['email'];
$password = $_POST['password'];

echo " <script>
window.location = 'dang_nhap.php' 
window.alert("Đăng nhập không thành công")
</script>
"

$sqlLogin = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
echo "d";
$result = $conn->query($sqlLogin);

if($result->num_rows>0){
    echo "Đăng nhập thành công";
    $i=0;
    while($nguoiDung = $result->fetch_assoc()){
        $nguoiDungId = $nguoiDung['id'];
        $nguoiDungAdmin = $nguoiDung['admin'];
    }
    session_start(); // Muốn làm việc với SESSION luôn phải dùng hàm khởi tạo này
    $_SESSION["login"] = 1;
    $_SESSION["ten_dang_nhap"] = $ten_nguoi_dung;
    $_SESSION["gio_hang"]["mat_hang"] = array();
    $_SESSION["gio_hang"]["tong_so"] = 0;
    $_SESSION["gio_hang"]["tong_tien"] = 0;
    $_SESSION['userId'] = $nguoiDungId;
    $_SESSION['admin'] = $nguoiDungAdmin;
    header('location: ../index.php');
}else?>
<script>
window.location = 'dang_nhap.php' 
window.alert("Đăng nhập không thành công");
</script>
