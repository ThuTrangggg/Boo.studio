<?php 
    session_start();
    include("../connect.php");

    $id=$_GET['id'];
    $sql1 = "SELECT DISTINCT tbl_khachhang.khachhang_id FROM tbl_hoadon JOIN tbl_khachhang ON  tbl_hoadon.khachhang_id=tbl_khachhang.admin_id WHERE tbl_khachhang.khachhang_id='".$khachhang_id."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $so_luong = mysqli_num_rows($kq1);
    if($so_luong==0)
    {
        $sql2 = "
             DELETE FROM `tbl_khachhang` WHERE `tbl_khachhang`.`khachhang_id` = '".$khachhang_id."';
              ";
        $kq2 = mysqli_query($ket_noi, $sql2);
        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã xoá quản Admin thành công!');
                window.location.href='quantrivien.php';
            </script>
    ";
    }
    else
    {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không thể xoá Admin này!');
                window.location.href='quantrivien.php';
            </script>";
    }
;?>