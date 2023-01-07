<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Boo shop | Admin | Danh sách Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="./css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        include("slide.php");
        ?>
            <div id="layoutSidenav_content">
            <?php
                include("../connect.php");
                $sql="SELECT * FROM tbl_khachhang where role_id ='1'";
                $kq = mysqli_query($ket_noi, $sql);
                $row = mysqli_fetch_array($kq);
            ;?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Danh sách Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Quản lý hệ thống</a></li>
                            <li class="breadcrumb-item active">Danh sách Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách Admin | <a href="quantrivien_themmoi.php">Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            
                                            <th>Mật khẩu</th>
                                            
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            
                                            <th>Mật khẩu</th>
                                            
                                            <th>Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql1 = "
                                                  SELECT * FROM tbl_khachhang where role_id='1'
                                        ";
                                        $ket_qua = mysqli_query($ket_noi, $sql1);
                                        $i=0;
                                        while ($row1 = mysqli_fetch_array($ket_qua)) {
                                            $i++;

                                            
                                    ;?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row1["ten_khachhang"];?></td>
                                            <td><?php echo $row1["email"];?></td>
                                           
                                            <td><?php echo $row1["mat_khau"];?></td>
                                            
                                            
                                            
                                                <td><a  class="btn btn-danger" href="quantrivien_xoa.php?id=<?php echo $role_id["1"]; ?>" onclick="return confirm('Bạn có muốn xoá?')">Xoá</a></td>
                                           
                                        </tr>
                                    <?php
                                        }
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </main>
               
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
