<?php
include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php";
// include ("../header.php");
// include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/connect.php"; 
include("../connect.php");
$tenKhachhang = $_POST['ten_khachhang'];
$email = $_POST['email'];
$diaChi = $_POST['dia_chi'];

// $sql = "SELECT *FROM `tbl_khachhang` WHERE
//  `email` = '" . $email . "' AND `mat_khau` = '" . $password . "' ";

// $result = $conn->query($sql);

$khachhang_id = $_SESSION['userId'];
$sql = "INSERT INTO `tbl_hoadon`(`khachhang_id`, `ngay_xuat`, `tinh_trang`) 
VALUES ('$khachhang_id',current_timestamp(), '0')";
$kq = mysqli_query($ket_noi, $sql);

$sql = "SELECT MAX(`hoadon_id`) as `hoadon_id` FROM `tbl_hoadon`";
$kq = mysqli_query($ket_noi, $sql);
$id = mysqli_fetch_array($kq);
$id = $id['hoadon_id'];
$_SESSION['hoadon_id'] = $id;
$tongtien = 0;
foreach ($_SESSION['gio_hang']['mat_hang'] as $key => $row) {
    $so_luong = $row['so_luong'];
    $sql = "SELECT so_luong FROM tbl_sanpham WHERE sanpham_id=$key";
    $kq = mysqli_query($ket_noi, $sql);
    $sl = mysqli_fetch_array($kq);
    $so_luong_kho = $sl['so_luong'];
    $sql1 = "INSERT INTO `tbl_giohang`
    (`sanpham_id`, `hoadon_id`, `so_luong`) 
    VALUES ('" . $row['sanpham_id'] . "',$id,$so_luong)";
    $kq = mysqli_query($ket_noi, $sql1);
    $sql2 = "UPDATE tbl_sanpham 
    SET so_luong= $so_luong_kho-$so_luong WHERE sanpham_id=$key";
    $kq = mysqli_query($ket_noi, $sql2);
    $thanhtien = $row['so_luong'] * $row['gia'];
    $tongtien = $thanhtien + $tongtien;

    $sqlChitiethd = "insert into tbl_chitiethoadon(hoadon_id,product_id,soluong,size,dongia,thanhtien) 
    values ('" . $_SESSION['hoadon_id'] . "','" . $row['sanpham_id'] . "',
    '" . $row['so_luong'] . "','" . $row['size'] . "','" . $row['gia'] . "',
    '" . $thanhtien . "')";
    $result = mysqli_query($ket_noi, $sqlChitiethd);
?>
<?php
}
$_SESSION['tongtien'] = $tongtien;
$_SESSION["gio_hang"]["mat_hang"] = array();
$_SESSION["gio_hang"]["tong_so"] = 0;
?>
<script type="text/javascript">
    alert('Thanh toán thành công');
    location = '../index.php';
</script>