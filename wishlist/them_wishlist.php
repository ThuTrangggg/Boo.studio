<?php
session_start();
$id = $_POST['sanpham_id'];

include('../connect.php');

$sql = "SELECT * FROM tbl_sanpham WHERE sanpham_id = " . $id;
$query = mysqli_query($ket_noi, $sql);
$row = mysqli_fetch_assoc($query);
	if (!isset($_SESSION["wishlist"]["mat_hang_wishlist"][$id])) {
		$_SESSION["wishlist"]["mat_hang_wishlist"][$id] = array(
			'sanpham_id' => $id,
			'ten_sanpham' => $row['ten_sanpham'],
			'anh' => $row['anh'],
			'gia' => $row['gia_ban_khuyen_mai'],
			//'so_luong' => $so_luong,
			// 'size' => $size,
		);
	}else{?>
		<script type="text/javascript">
	alert("Sản phẩm đã có trong danh sách yêu thích");
	location = 'wishlist.php'
</script>
	<?php
	}
$_SESSION["wishlist"]["tong_so_wishlist"] = 0;

// foreach ($_SESSION["wishlist"]["mat_hang_wishlist"] as $wishlist) {
// 	$_SESSION["wishlist"]["tong_so_wishlist"] += $wishlist["so_luong"];
// }
?>
<script type="text/javascript">
	alert("Thêm vào danh sách yêu thích thành công");
	location = history.back(-2);
</script>