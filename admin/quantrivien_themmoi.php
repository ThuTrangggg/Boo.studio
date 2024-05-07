<?php
session_start();
if (!isset($_SESSION['login'])) {
}; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Boo shop | Nhân viên | Thêm mới Nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    include("slide.php");
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Thêm mới Nhân viên</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="quantrivien_xlthemmoi.php" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txthoten" type="text" placeholder="Họ tên" name="txthoten" />
                                        <label for="txthoten">Họ tên</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtemail" type="email" placeholder="name@example.com" name="txtemail" />
                                        <label for="txtemail">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtsdt" type="text" placeholder="Số điện thoại" name="txtsdt" />
                                        <label for="txtsdt">Số điện thoại</label>
                                    </div>
                                    <div class="form-floating mb-3" style="display:flex">
                                        <select style="float: left" class="form-control" id="chucvu" name="txtchucvu" class="form-control " style="width: 50%">
                                            <option value="">Chức vụ</option>
                                            <option value="Quản lý">Quản lý</option>
                                            <option value="Nhân viên">Nhân viên</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txttentaikhoan" type="text" placeholder="Tên tài khoản" name="txttentaikhoan" />
                                        <label for="txttaikhoan">Tên tài khoản</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtmatkhau" type="text" placeholder="Mật khẩu" name="txtmatkhau" />
                                        <label for="txtmatkhau">Mật khẩu</label>
                                    </div>
                                    <input hidden id="datetime" type="datetime-local" name="datetime" />
                                    <script>
                                        var today = new Date();
                                        var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
                                        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                                        var dateTime = date + ' ' + time;
                                        document.getElementById("datetime").innerHTML = dateTime;
                                    </script>
                                    <div class="mt-4 mb-0">
                                        <input type="submit" name="btnSubmit" value="Thêm mới">
                                    </div>

                                </form>
                            </div>
                        </div>
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