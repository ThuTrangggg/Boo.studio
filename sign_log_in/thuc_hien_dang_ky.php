<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php";
$ten_nguoi_dung = $_POST['ten_nguoi_dung'];
$mat_khau = $_POST['mat_khau'];
$email = $_POST['email'];
?>
<?php
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `role_id`)
 VALUES (NULL, '".$ten_nguoi_dung."', MD5('".$mat_khau."'), '".$email."', '2')";

?>

<?php
    if($conn->query($sql))
    {
      ?><script>  
        window.alert( "Đăng ký thành công");
        window.location.href="./dang_nhap.php";
        die();
        </script>
<?php
        
    }else
    {?> <script>  
        window.alert( "Đăng ký không thành công");
        header("location: ./dangky.php");
        die();
        </script>  <?php} 

include "../footer.php";
?>
</body>
</html>