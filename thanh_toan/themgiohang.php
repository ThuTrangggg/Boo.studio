<?php
session_start();
$id = $_POST['sanpham_id'];
$so_luong = $_POST['so_luong'];
$size = $_POST['size'];
include('../connect.php');

$sql = "SELECT * FROM tbl_sanpham WHERE sanpham_id = " . $id;
$query = mysqli_query($ket_noi, $sql);
$row = mysqli_fetch_assoc($query);
if ($so_luong == 0 || $so_luong == "") {
?>
	<script type="text/javascript">
		alert("Số lượng phải lớn hơn 0");
		history.back(-2);
	</script>
<?php } else {
	if (!isset($_SESSION["gio_hang"]["mat_hang"][$id])) {
		$_SESSION["gio_hang"]["mat_hang"][$id] = array(
			'sanpham_id' => $id,
			'ten_sanpham' => $row['ten_sanpham'],
			'anh' => $row['anh'],
			'gia' => $row['gia_ban_khuyen_mai'],
			'so_luong' => $so_luong,
			'size' => $size,
		);
	} else {
		$_SESSION["gio_hang"]["mat_hang"][$id]['so_luong'] += $so_luong;
	};
}
$_SESSION["gio_hang"]["tong_so"] = 0;

foreach ($_SESSION["gio_hang"]["mat_hang"] as $gioHang) {
	$_SESSION["gio_hang"]["tong_so"] += $gioHang["so_luong"];
}
?>
<script type="text/javascript">
	// alert("Thêm thành công");
	location = 'giohang.php';
</script>