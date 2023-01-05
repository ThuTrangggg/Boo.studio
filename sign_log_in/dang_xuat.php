<?php
include '../connect.php';
session_start();
session_destroy();
?>
<script>
    alert('Đăng xuất ok');
</script>
<?php
header('location: ../index.php');
?>
