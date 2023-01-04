<?php include $_SERVER["DOCUMENT_ROOT"] . "/Nhom14/header.php"; ?>
<div class="container" style="margin: 200px;">
  <div class="col-md-4">
    <form name="register" class="form-horizontal" id="registration" onsubmit="return checkForm()" method='post' action='thuc_hien_dang_nhap.php'>
      <fieldset class="fieldset create account">
        <div class="field required">
          <label for="email_address" class="label"><span>Email *</span></label>
          <div class="control">
            <input type="text" name="email" autocomplete="email" id="email_address" value="" placeholder="Email" title="Email" class="input-text" aria-required="true">
          </div>
        </div>
        <div class="field password required">
          <label for="password" class="label"><span>Mật khẩu</span></label>
          <div class="control">
            <input type="password" name="password" id="password" placeholder="Mật khẩu" title="Mật khẩu" class="input-text" autocomplete="off" aria-required="true">
          </div>

        </div>
      </fieldset>
      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <button type="submit" class="btn btn-success">Đăng nhập</button>
        </div>
      </div>
    </form>
  </div>
</div>

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

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>

</html>