<?php 
    session_start();
    include("../connect.php");

    $id=$_GET['id'];
    $sql1 = "SELECT DISTINCT tbl_taikhoan.id
    FROM tbl_hoadon JOIN tbl_taikhoan 
    ON  tbl_hoadon.id_taikhoan=tbl_taikhoan.id 
    WHERE tbl_taikhoan.id= '".$id."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $so_luong = mysqli_num_rows($kq1);
    if($so_luong==0)
    {
        $sql2 = "
             DELETE FROM `tbl_taikhoan` WHERE id = '".$id."';
              ";
        $kq2 = mysqli_query($ket_noi, $sql2);
        $sql = "
             DELETE FROM `tbl_admin` WHERE id_taikhoan = '".$id."';
              ";
        $kq = mysqli_query($ket_noi, $sql2);
        
        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã xoá nhân viên thành công!');
                window.location.href='quantrivien.php';
            </script>
    ";
    }
    else
    {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không thể xoá nhân viên này!');
                window.location.href='quantrivien.php';
            </script>";
    }
;?>