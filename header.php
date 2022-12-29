
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="/Nhom14/assets/css/fontawesome-free-6.2.1-web/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="/Nhom14/assets/css/js_bootstrap/bootstrap.min.css">
    <script src="/Nhom14/assets/css/js_bootstrap/jquery-3.1.1.min.js"></script>
    <script src="/Nhom14/assets/css/js_bootstrap/bootstrap.min.js"></script>
    <link rel="icon" href="/Nhom14/assets/img/boo_logo.png">
    <link rel="stylesheet" href="/Nhom14/assets/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/Nhom14/assets/css/style.css">

    <title>BOO.VN-NHOM14</title>
</head>
<body>
    <div class="header">
        <div class="mt-8 logo">
            <a href="">
                <img src="/Nhom14/assets/img/boo_logo1.png" alt="">
            </a>
        </div>
        <div class="nav">
            <li>
                <a href="">Nữ</a>
                <ul class="subnav">
                          </ul>
            </li>
            <li><a href="">Nam</a></li>
            <li><a href="">Hoodie</a></li>
            <li><a href="">Boovironment</a></li>
            <li><a href="">Holiday Holi</a></li>
        </div>
        <div class="btn-right">
            <div class="search-btn">
                <a class="header-btn" href="">
                
                    <i class="ti-search"></i>
                </a>
            </div>
            <div class="like-btn">
                <a class="header-btn" href="">
                    <i class="fa-regular fa-heart"></i>  
                </a>
            </div>
            <div class="login-btn">
                <a class="header-btn" href="">
                    <i class="fa-regular fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Đăng ký</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="cart-btn">
                <a class="header-btn" href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "nhom14";

//Creat connection
$conn = new mysqli($severname,$username,$password,$dbname);

//Check connection
if($conn -> connect_error){
    die("connection failed:".$conn->connect_error);
}
?>