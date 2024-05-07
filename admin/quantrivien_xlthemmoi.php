<?php
include("../connect.php");

$ho_ten = $_POST['txthoten'];
$email = $_POST['txtemail'];
$sdt = $_POST['txtsdt'];
$chuc_vu = $_POST['txtchucvu'];
$mat_khau = $_POST['txtmatkhau'];
$ten_tk = $_POST['txttentaikhoan'];
$datetime = $_POST['datetime'];
echo $datetime;
if ($chuc_vu == "Quản lý") {
    $id_loaitaikhoan = 1;
} else {
    $id_loaitaikhoan = 2;
}

$sql = "select * from tbl_taikhoan where ten_dangnhap = '" . $ten_tk . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "
    <script type='text/javascript'>
        window.alert('Tên tài khoản đã tồn tại');
        history.back() ;
    </script>
";;
}
else{

    $sql = "INSERT INTO `tbl_taikhoan` (`ten_dangnhap`, `mat_khau`, id_loaitaikhoan ) VALUES ('" . $ten_tk . "','" . $mat_khau . "', '" . $id_loaitaikhoan . "');
        ";
    $kq = mysqli_query($ket_noi, $sql);
    
    $sql = "select * from tbl_taikhoan where ten_dangnhap = '" . $ten_tk . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($taikhoan = $result->fetch_assoc()) {
            $taikhoanID = $taikhoan['id']; //Tài khoản ID
        }
    }
    $sql2 = "INSERT INTO `tbl_admin` (`ten_admin`, `email`, `sdt`,`chuc_vu`, id_taikhoan ) VALUES ('" . $ho_ten . "', '" . $email . "', '" . $sdt . "', '" . $chuc_vu . "', '" . $taikhoanID . "');
            ";
    $kq = mysqli_query($ket_noi, $sql2);
    
    $kq = mysqli_query($ket_noi, $sql);
    
    echo "
            <script type='text/javascript'>
                window.alert('Bạn đã thêm nhân viên thành công');
                window.location.href='quantrivien.php';
            </script>
        ";;
}
