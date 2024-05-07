<?php
include("../connect.php");
$idhd = $_GET['idhd'];
$sql = "Select * from `tbl_hoadon` WHERE hoadon_id = " . $idhd;
$kq = mysqli_query($ket_noi, $sql);
$row = mysqli_fetch_array($kq);
if ($row['tinh_trang'] == 'Đang chờ xử lý') {
	$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = 'Đã xác nhận' WHERE hoadon_id = '" . $idhd . "'";
	$kq = mysqli_query($ket_noi, $sql);
	echo "
	        <script type='text/javascript'>
	            window.alert('Cập nhập thành công');
	            window.location.href='hoadon.php';
	        </script>
	    ";

} else if ($row['tinh_trang'] == 'Đã xác nhận') {
	$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = 'Đang giao hàng' WHERE hoadon_id = '" . $idhd . "'";
	$kq = mysqli_query($ket_noi, $sql);
	echo "
	        <script type='text/javascript'>
	            window.alert('Cập nhập thành công');
	            window.location.href='hoadon.php';
	        </script>
	    ";

} else {
	$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = 'Đã nhận hàng' WHERE hoadon_id = '" . $idhd . "'";
	$kq = mysqli_query($ket_noi, $sql);
	echo "
	        <script type='text/javascript'>
	            window.alert('Cập nhập thành công');
	            history.back();
	        </script>
	    ";

}






// if (isset($_GET['idkhachhang'])) {
// 	$idhd = $_GET['idhd'];
// 	$idkhachhang = $_GET['idkhachhang'];

// 	$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = 'Đã xác nhận' WHERE hoadon_id = '" . $idhd . "' AND tinh_trang = 'Đang chờ xử lý'";

// 	$sql = "update tbl_hoadon set tinh_trang = '" . $tinh_trang . "' where hoadon_id = '" . $row["hoadon_id"] . "'";
// 	$ket_qua = mysqli_query($ket_noi, $sql);

// 	$kq = mysqli_query($ket_noi, $sql);
// 	echo "
//         <script type='text/javascript'>
//             window.alert('Cập nhập thành công');
//             window.location.href='hoadon.php';
//         </script>
//     ";
// } else {
// 	$idhd = $_GET['idhd'];
// 	$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = '2' WHERE hoadon_id = " . $idhd;
// 	$kq = mysqli_query($ket_noi, $sql);
// 	echo "
// 	        <script type='text/javascript'>
// 	            window.alert('Cập nhập thành công');
// 	            window.location.href='hoadon.php';
// 	        </script>
// 	    ";
// }
