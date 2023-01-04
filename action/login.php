<?php
session_start();
include("../action/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

if(strlen($email) || empty($password)){
    echo json_encode(['status'=>false,'message'=>'Có lỗi xảy ra']);
    exit();
}

$sqlLogin = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
$data = data($sqlLogin,true);
if($data){
    $_SESSION['user'] = [
        'name' => $data['ho_ten'],
        'email' => $data['email'],
        'phone' => $data['sdt']
    ];
    echo json_encode(['status'=>true,'message'=>'Đăng nhập thành công','url' => '/index.php']);
    exit();
}else{
    echo json_encode(['status'=>false,'message'=>'Đăng nhập thất bại']);
    exit();
}

?>