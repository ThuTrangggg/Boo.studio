<?php 
session_start();
?>

<script type="text/javascript">
      function validateForm1()
      {
        var phone = document.forms["form_thong_tin"]["txtSdt"].value;
        var address = document.forms["form_thong_tin"]["txtDiachi"].value;      
    
        if(address.trim()=="")
        {
            alert("Nhập địa chỉ của bạn");
            document.forms["form_thong_tin"]["txtDiachi"].focus();
            return false;
        }
      }
      function validateForm2()
      {
        var mk_cu = md5(document.forms["formdoimk"]["mk_cu"].value);
        
           
        if(mk_cu.trim()=="")
        {
            alert("Nhập mật khẩu cũ của bạn");
            document.forms["formdoimk"]["mk_cu"].focus();
            return false;
        }
        var mk_moi = document.forms["formdoimk"]["mk_moi"].value;
        if(mk_moi.trim()=="")
        {
            alert("Nhập mật khẩu mới của bạn");
            document.forms["formdoimk"]["mk_moi"].focus();
            return false;
        }
        var mk_nhaplai = document.forms["formdoimk"]["mk_nhaplai"].value;     
        if(mk_nhaplai.trim()=="")
        {
            alert("Nhập lại mật khẩu mới");
            document.forms["formdoimk"]["mk_nhaplai"].focus();
            return false;
        }
        if(mk_nhaplai!=mk_moi)
        {
            alert("Bạn nhập lại sai mật khẩu!");
            document.forms["formdoimk"]["mk_moi"].value='';
            document.forms["formdoimk"]["mk_nhaplai"].value='';
            document.forms["formdoimk"]["mk_moi"].focus();
            return false;
        }
      }
    </script>

<?php 
    include("connect.php");
    if(!isset($_POST['mk_cu']))
    {
        $ten_khachhang = $_POST['txtTenKH'];
        $dia_chi = $_POST['txtDiachi'];
        $email = $_POST['txtEmail'];
        
        $sql ="UPDATE `tbl_khachhang` SET `ten_khachhang`='".$ten_khachhang."',`dia_chi`='".$dia_chi."',`email`='".$email."' WHERE `tbl_khachhang`.`khachhang_id` = '".$_SESSION['userId']."'
        ";
        $kq = mysqli_query($ket_noi, $sql);
        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhập thông tin tài khoản thành công');
                window.location.href='thongtintaikhoan.php';
            </script>
        ";
    }
  
    else
    {
        $mat_khau_cu=md5($_POST['mk_cu']);
        if($mat_khau_cu==$_SESSION['mat_khau'])
        {
        $mat_khau_moi=$_POST['mk_moi'];
        $sql ="UPDATE `tbl_khachhang` SET `mat_khau`='".$mat_khau_moi."' WHERE `tbl_khachhang`.`khachhang_id` = '".$_SESSION['userId']."'
        ";
        $kq = mysqli_query($ket_noi, $sql);
        session_destroy();
        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đổi mật khẩu thành công');
                window.location.href='dangnhap.php';
            </script>
        ";
        }else
        echo "
                <script type='text/javascript'>
                    window.alert('Bạn nhập sai mật khẩu!!');
                </script>
            ";

        
    
    }
?> 
