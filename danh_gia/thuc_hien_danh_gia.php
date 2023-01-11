<?php
include '../connect.php';
$user_id = $_POST['user_id'];
$sanpham_id = $_POST['sanpham_id'];
$detail = $_POST['detail'];
$rate = $_POST['star'];
$anh = $_POST['anh'];

$sql = "INSERT INTO feed_back(user_id,sanpham_id,detail,rate,anh) 
VALUES ('".$user_id."','".$sanpham_id."','".$detail."','".$rate."','".$anh."')";
$kq = $conn->query($sql);
?>


<script>

    alert('Bạn đã gửi đánh giá thành công');
    // location.url = '/Nhom14/danh_sach_mat_hang/chi_tiet_mat_hang.php?id=' <?=$sanpham_id?>;
    location = '../index.php'
</script>