<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php"; ?>

<div class="container">
  <div class="col-md-4"> 
        <form name="register" class="form-horizontal" id="registration" 
            onsubmit="return checkForm()" method='post' action='thuc_hien_dang_ky.php'>
    		<fieldset>
    			<legend>Form đăng ký</legend>
    			
				<div class="control-group">
    				<label class="control-label">Email</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="email" name="email">
    				</div>
    			</div>
    			<div class="control-group">
    				<label class="control-label">Mật khẩu</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="password" name="mat_khau">
    				</div>
    			</div>
    			<div class="control-group">
    				<label class="control-label">Xác nhận mật khẩu</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="confirmPassword" name="confirmPassword">
    				</div>
    			</div>
    			<div class="control-group">
    				<label class="control-label">Họ tên</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="username" name="ten_nguoi_dung">
    				</div>
    			</div>
				<div class="control-group">
    				<label class="control-label">Địa chỉ</label>
    				<div class="controls">
    					<input class="form-control" type="text" id="username" name="dia_chi">
    				</div>
    			</div>
    			<div class="control-group">
    				<label class="control-label"></label>
    				<div class="controls">
    					<button  type="submit" class="btn btn-success" >Submit</button>
    				</div>
    			</div>
    		</fieldset>
    	</form>
    </div>
</div>

<script>
function checkForm()
{
     var username = document.forms['register']["username"].value;
     var password = document.forms['register']["password"].value;
     var confirmPassword = document.forms['register']["confirmPassword"].value;
     var email = document.forms['register']["email"].value;
     
     if(username == '')
     {
        alert('Bạn phải nhập đầy đủ thông tin người dùng');
        document.forms["register"]["username"].focus();
        return false;
     }
     else if(password == '')
     {
        alert('Bạn phải nhập mật khẩu');
        document.forms["register"]["password"].focus();
        return false;
     }
     else if(email == '')
     {
        alert('Bạn phải nhập email');
        document.forms["register"]["email"].focus();
        return false;
     }
     else if(password != confirmPassword)
     {
        alert('Mật khẩu xác nhận chưa khớp !');
        return false;
     }
     else return true;  
}
</script>
