<?php
include("../action/connect.php");

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['telephone'];
$email = $_POST['email'];
$password = $_POST['password'];

$name = $firstName.' '.$lastName;

if(strlen($email) || empty($password) || empty($name) || empty($phone)){
    echo json_encode(['status'=>false,'message'=>'Có lỗi xảy ra']);
    exit();
}

$sqlCheckExist = "SELECT * FROM `users` WHERE email = '".$email."'";
$checkExist = count_query($sqlCheckExist);
if($checkExist > 0){
    echo json_encode(['status'=>false,'message'=>'Đã tồn tại tài khoản']);
    exit();
}
$sqlInsert = "INSERT INTO `users` (`username`, `password`, `email`, `ho_ten`, `sdt`,`role_id`) VALUES ('".$email."', '".$password."', '".$email."', '".$name."', '".$phone."',2)";
$insert = action($sqlInsert);
echo json_encode(['status'=>true,'message'=>'Đăng ký tài khoản thành công','url'=>'/login.php']);
exit();

$sql = "insert into users(username,password,email,ho_ten,sdt, admin)
values ('".$ten_nguoi_dung."','".md5($mat_khau)."','".$email."',0)";

if($conn->query($sql)){
    echo "Đăng ký thành công";
    
}else echo "Đăng ký không thành công";
?>