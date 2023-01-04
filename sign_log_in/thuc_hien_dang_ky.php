<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php"; ?>

<?php
$ten_nguoi_dung = $_POST['ten_nguoi_dung'];
$mat_khau = $_POST['mat_khau'];
$email = $_POST['email'];
include "../functions.php";
    $sql = "insert into mis_nguoi_dung(ten_nguoi_dung,mat_khau,email,admin)
    values ('".$ten_nguoi_dung."','".md5($mat_khau)."','".$email."',0)";

    if($conn->query($sql)){
        echo "Đăng ký thành công";
        
    }else echo "Đăng ký không thành công";
?>