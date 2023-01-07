<?php
include("../connect.php");
if(isset($_GET['idkhachhang']))
{
$idhd = $_GET['idhd'];
$idkhachhang = $_GET['idkhachhang'];
$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = '1',`khachhang_id` = '".$idkhachhang."' WHERE hoadon_id = " .$idhd;
$kq = mysqli_query($ket_noi, $sql);
    echo "
        <script type='text/javascript'>
            window.alert('Cập nhập thành công');
            window.location.href='hoadon.php';
        </script>
    ";
}
else
{
	$idhd = $_GET['idhd'];
	$sql = "UPDATE `tbl_hoadon` SET `tinh_trang` = '2' WHERE hoadon_id = " .$idhd;
	$kq = mysqli_query($ket_noi, $sql);
	    echo "
	        <script type='text/javascript'>
	            window.alert('Cập nhập thành công');
	            window.location.href='hoadon.php';
	        </script>
	    ";
}
