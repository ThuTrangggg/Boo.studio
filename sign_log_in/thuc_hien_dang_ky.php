
<?php 
include("../connect.php");
$ten_nguoi_dung = $_POST['ten_nguoi_dung'];
$mat_khau = $_POST['mat_khau'];
$email = $_POST['email'];
$dia_chi = $_POST['dia_chi'];

//Thực hiện check trùng tài khoản theo email
$sqlCheckExist = "SELECT * FROM `tbl_khachhang` WHERE email = '".$email."'";

$count = $conn->query($sqlCheckExist)->num_rows;
//Nếu đếm email > 1 thì đã có email trong database thực hiện return false
if($count > 0){
    echo '
    <script>  
        window.alert( "Tài khoản đã tồn tại");
        history.back();
        die();
    </script>
    ';
    exit();
}

$sql = "INSERT INTO `tbl_khachhang` (`mat_khau`, `ten_khachhang`, `dia_chi`, `email`, `role_id`) VALUES ('".MD5($mat_khau)."', '".$ten_nguoi_dung."', '".$dia_chi."', '".$email."', '2')";

?>

<?php if($conn->query($sql)){ ?>
      <script>  
        window.alert( "Đăng ký thành công");
        window.location.href="./dang_nhap.php";
        die();
        </script>

        
    <?php }else{?>
    <script>  
        window.alert( "Đăng ký không thành công");
        header("location: ./dang_ky.php");
        die();
    </script>  
    <?php } 
?>

