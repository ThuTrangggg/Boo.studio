<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php"; ?>
<div class="container" style="margin: 150px;">
  <div class="col-md-4">
    <form name="register" class="form-horizontal" id="registration" onsubmit="return checkForm()" method='post' action='thuc_hien_dang_nhap.php'>
      <fieldset class="fieldset create account">
        <legend style="font-size: 35px;  color: black;
     font-weight: 400;
     
     text-transform: uppercase;
     margin-bottom: 20px;
     border-bottom: 0px solid #ff4584;
     display: inline-block;
     margin-left: 400px;
     margin-right: auto;
     
     letter-spacing: 1px;">ĐĂNG NHẬP</legend>
        <div class="field required">
          <label for="email_address" class="label"><span>Email *</span></label>
          <div class="control">
            <input type="text" style="font-size: 16px;
            margin-top: 40px;
     margin-bottom: 5x;
     margin-left: 340px;
     margin-right: auto;
     display: inline-block;
     color: Black;
     letter-spacing: 1px;
     width: 100%;
      height:30px;
      " name="email" autocomplete="email" id="email_address" value="" placeholder="Email" title="Email" class="input-text" aria-required="true">
          </div>
        </div>
        <div class="field password required">
          <label for="password" class="label"><span>Mật khẩu</span></label>
          <div class="control">
            <input type="password" style="font-size: 16px;
     margin-bottom: 5x;
     margin-left: 340px;
     margin-right: auto;
     display: inline-block;
     color: Black;
     letter-spacing: 1px;
     width: 100%;
     height:30px;
      " name="password" id="password" placeholder="Mật khẩu" title="Mật khẩu" class="input-text" autocomplete="off" aria-required="true">
          </div>

        </div>
      </fieldset>
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
     margin-left: 340px;
     margin-top:10px;
 ">ĐĂNG NHẬP</button>
        </div>
      </div>
    </form>
  </div>
</div>
<p class="center" style="margin-left: 570px;

">Bạn chưa có tài khoản? <a style="color:black; 
text-decoration:underline; 
text-align: center;"

href="dang_ky.php"> ĐĂNG KÝ</a></p>



<script>
  function checkForm() {
    var email = document.forms['register']["email"].value;
    var password = document.forms['register']["password"].value;

    if (email == '') {
      alert('Bạn phải nhập đầy đủ thông tin người dùng');
      document.forms["register"]["email"].focus();
      return false;
    } else if (password == '') {
      alert('Bạn phải nhập mật khẩu');
      document.forms["register"]["password"].focus();
      return false;
    }
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