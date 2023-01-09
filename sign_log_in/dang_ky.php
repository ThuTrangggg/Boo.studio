<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php"; ?>

<div class="container">
	<div class="mt-5 row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="    margin-top: 100px;">
			<form name="register" class="form-horizontal" id="registration" onsubmit="return checkForm()" method='post' action='thuc_hien_dang_ky.php'>
				<fieldset>
					<legend style="font-size: 35px;  color: black;
     font-weight: 500;
     
     text-transform: uppercase;
	 margin-top: 0px;
     margin-bottom: 20px;
     border-bottom: 0px solid #ff4584;
     display: inline-block;
     margin-left: 90px;
     margin-right: auto;
     
     letter-spacing: 1px;">ĐĂNG KÝ</legend>

					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<input placeholder="Họ và tên" class="form-control" type="text" id="username" name="ten_nguoi_dung">
						</div>
					</div>
	
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<input placeholder="Email" class="form-control" type="text" id="email" name="email">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<input placeholder="Mật khẩu"class="form-control" type="text" id="password" name="mat_khau">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<input placeholder="Xác nhận mật khẩu" class="form-control" type="text" id="confirmPassword" name="confirmPassword">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<input placeholder="Địa chỉ" class="form-control" type="text" id="address" name="dia_chi">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<button type="submit" style=" width: 100%;
     padding: 10px 20px;
     outline: none;
     border: 1px solid #607d8b;
     font-size: 16px;
     letter-spacing: 1px;
     color:blanchedalmond;
     
     background: black;
     border-radius: 30px;
     
     margin-top:10px;
 " >ĐĂNG KÝ</button>
						</div>
	  				</div>
					<br>
					<input type="checkbox" name="gender" value="female"> Đồng ý nhận E-mail
</br>
					
                    <input type="checkbox"  style=" margin-bottom: 70px" name="gender" value="male"> Chấp nhận điều khoản quyền riêng tư và bảo mật
</br>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<script>
	function checkForm() {
		var username = $('#username').val();
		var password = $('#password').val();
		var confirmPassword = $('#confirmPassword').val();
		var email = $('#email').val();

		if (username == '') {
			alert('Bạn phải nhập họ tên');
			$('#username').focus();
			return false;
		} else if (password == '') {
			alert('Bạn phải nhập mật khẩu');
			$('#password').focus();
			return false;
		} else if (email == '') {
			alert('Bạn phải nhập email');
			$('#email').focus();
			return false;
		} else if (password != confirmPassword) {
			alert('Mật khẩu xác nhận chưa khớp !');
			return false;
		} else return true;
	}



</script>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/footer.php"; ?>
<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>