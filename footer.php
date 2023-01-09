<html>
<head>
<meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <link rel="stylesheet" href="/Nhom14/assets/css/js_bootstrap/js.js">
    <link rel="stylesheet" href="/Nhom14/assets/css/fontawesome-free-6.2.1-web/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="/Nhom14/assets/css/js_bootstrap/bootstrap.min.css">
    <script src="/Nhom14/assets/css/js_bootstrap/jquery-3.1.1.min.js"></script>
    <script src="/Nhom14/assets/css/js_bootstrap/bootstrap.min.js"></script>
    <link rel="icon" href="/Nhom14/assets/img/boo_logo.png">
    <link rel="stylesheet" href="/Nhom14/assets/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/Nhom14/assets/css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <title>BOO.VN-NHOM14</title> -->
    <title></title>
</head>
<footer id="footer" class="container-fluid text-center">
    <!-- import icon font awesome -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> -->
<!-- Import thư viện JQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
// kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
var offset = 100;
// thời gian di trượt 0.75s ( 1000 = 1s )
var duration = 350;
$(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > offset)
$('#top-up').fadeIn(duration);else
$('#top-up').fadeOut(duration);
});
$('#top-up').click(function () {
$('body,html').animate({scrollTop: 0}, duration);
});
});
handleButtonClick = () => {
	const btn =	document.getElementById('open-button');
	btn.classList.toggle("open--on");
	const tools = document.getElementById('toolbar');
	tools.classList.toggle("visibile");
}
</script>
<div class="col">
    <div title="Về đầu trang" id="top-up">
    <i class="fa-solid fa-circle-chevron-up"></i>

    </div>

    <div title="Về đầu trang" class="contact">
        <i 	id="open-button" class="open open--on fa-solid fa-circle-plus" onclick="handleButtonClick()"></i>
        <ul id="toolbar"class="toolbar">
            <li ><a  href="tel:09">
            <i class="fa-solid fa-phone"></i>
            Gọi ngay
            </a></li>
            <li ><a href="">
            <i class="fa-solid fa-message"></i>
            Messenger
            </a></li>
            <li ><a href="">
            <i class="fa-solid fa-ticket"></i>
            Ticket
            </a></li>

        </ul>
       
    </div>
</div>

<script>
    function dangkyemail(){
        alert("Đã gửi thành công!")
    }
</script>

<section class="abovefooter text-white" style="background-color: #fff; ">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="d-flex">
                        <div class="footer_header" style="font-size: 14px">
                        <p>Gửi ý kiến phản hồi về Boo.vn</p>
                        </div> 
                        <form class="" style="    display: inline-flex;" onsubmit="mail" action="mailto: trangtrangg002@gmail.com">
                            <textarea style="margin: 0 20px 0 0;" class="" name="" id="" cols="60" rows="2"></textarea>
                            <button class="" type="submit" class="btn btn-danger col-lg-2" style="background-color:black; color:#fff; border:none; width: 70px;">GỬI</button>
                        </form>
                        <div class="footer_detail" style="letter-spacing:0; line-height:20px; font-size:13px; margin: 25px 0 0 0">
                            <p> Công ty Cổ phần Thương mại Boo </p>
                            <p>
                            Trụ sở: 19A Đặng Trần Côn, P.Quốc Tử Giám, Q.Đống Đa, Tp.Hà Nội, Việt Nam.
                            </p>
                            <p>
                            Văn phòng: Tầng 8, tòa nhà Kim Khí Thăng Long, số 1 Lương Yên, P.Bạch Đằng, Q.Hai Bà Trưng, Tp.Hà Nội, Việt Nam.
                            </p>
                            <p>
                            Mã số thuế: 0103469019 do Sở kế hoạch và Đầu tư TP. Hà Nội, cấp lần đầu ngày 02/03/2009, đăng ký thay đổi lần thứ 12 ngày 11/11/2015.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="noidung">
                            <h3 class="footer_header">
                                <img src="/Nhom14/assets/img/boo_logo1.png" width="60px" alt="">
                            </h3>
                            <ul class="footer_detail">
                                <li><a href="">Về BOO</a></li>
                                <li><a href="">Về đại lý</a></li>
                                <li><a href="">Địa chỉ cửa hàng</a></li>
                                <li><a href="">Tuyển dụng</a></li>
                                <li><a href="">Đặt làm đồng phục</a></li>
                                <li><a href="">Boo Green</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="noidung">
                            <h3 class="footer_header">Chính sách</h3>
                            <ul class="footer_detail">
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Đăng nhập/Đăng ký thành viên</a></li>
                                <li><a href="">Chính sách thành viên</a></li>
                                <li><a href="">Hướng dẫn mua hàng trực tuyến</a></li>
                                <li><a href="">Đổi trả & hoàn tiền</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-2 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="noidung">
                            <h3 class="footer_header">Kết nối</h3>
                            <ul class="footer_detail">
                                <li><a href="">
                                <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href=""><i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href=""><i class="fa-brands fa-youtube"></i></i>
                                </a>
                            </li>
                                <li>CSKH: 0383709939</li>
                                <li>Đơn hàng: 0936303632</li>
                                <li>Email: online@boo.vn</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="noidung">
                            <h3 class="footer_header">CÁC HÌNH THỨC THANH TOÁN</h3>
                            <ul class="footer_detail">
                                <li>
                                    <img width="70px" src="/Nhom14/assets/logo/momo.png" alst="">
                                    <img width="50px" src="/Nhom14/assets/logo/zalopay.png" alst="">

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
</footer>
  

</html>