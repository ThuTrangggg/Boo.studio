<?php
session_start();
include("../action/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

// if(strlen($email) || empty($password)){
//     echo json_encode(['status'=>false,'message'=>'Có lỗi xảy ra']);
//     exit();
// }

// $sqlLogin = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
// $data = data($sqlLogin,true);
// if($data){
//     $_SESSION['user'] = [
//         'name' => $data['ho_ten'],
//         'email' => $data['email'],
//         'phone' => $data['sdt']
//     ];
//     echo json_encode(['status'=>true,'message'=>'Đăng nhập thành công','url' => '/index.php']);
//     exit();
// }else{
//     echo json_encode(['status'=>false,'message'=>'Đăng nhập thất bại']);
//     exit();
// }

$sql = "SELECT ten_nguoi_dung, mat_khau,id,admin
        FROM mis_nguoi_dung 
        WHERE ten_nguoi_dung='".$ten_nguoi_dung."' and mat_khau='".$mat_khau_mh."'";
$result = $conn->query($sql);

if($result->num_rows>0){
    echo "Đăng nhập thành công";
    $i=0;
    while($nguoiDung = $result->fetch_assoc()){
        $nguoiDungId = $nguoiDung['id'];
        $nguoiDungAdmin = $nguoiDung['admin'];
    }
    session_start(); // Muốn làm việc với SESSION luôn phải dùng hàm khởi tạo này
    $_SESSION["login"] = 1;
    $_SESSION["ten_dang_nhap"] = $ten_nguoi_dung;
    $_SESSION["gio_hang"]["mat_hang"] = array();
    $_SESSION["gio_hang"]["tong_so"] = 0;
    $_SESSION["gio_hang"]["tong_tien"] = 0;
    $_SESSION['userId'] = $nguoiDungId;
    $_SESSION['admin'] = $nguoiDungAdmin;
    header('location: ../index.php');
}else?>
<script>
window.location = 'dang_nhap.php' 
window.alert("Đăng nhập không thành công");
</script>

?>