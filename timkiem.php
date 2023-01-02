<?php 
include 'connect.php';
include 'header.php';
if(isset($_GET["search"]) && !empty($_GET["search"])){
    $key = $_GET["search"];
    $sql = "select*from danh_sach_mat_hang join danh_sach_loai_hang_2 on
    danh_sach_mat_hang.loai_hang_id2 = danh_sach_loai_hang_2.id where mo_ta like '%".$key."%' or ten_mat_hang like'%".$key."%' or
    danh_sach_loai_hang_2.ten_loai_hang like '%".$key."%'";
    ?>
    <section class="breadcrumbbar">
        <div class="container" style="margin-top: 150px;">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="items">
                    <div class="row" style="margin-bottom: 20px;">
                        <?php 
                            $result = $conn->query($sql);
                            if($result->num_rows > 0){
                                while($matHang = $result->fetch_assoc()){
                                ?>
                                <div class="col-lg-3"> 
                                    <div class="panel-body" style="padding: 0">
                                        <a href="./danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?=$matHang['id']?>">
                                        <img src="<?php echo $matHang['hinh_anh']?>" class="img-responsive" style="width:100%; object-fit: contain"  alt="Image">
                                        </a>
                                    </div>
                                    <div class="panel-heading text-center">
                                        <a style="color: black;" href="./danh_sach_mat_hang/chi_tiet_mat_hang.php?id=<?=$matHang['id']?>">
                                        <?php echo $matHang['ten_mat_hang']; ?>
                                        </a>
                                        <div class="row" style="margin-top: 10px;" >
                                            <?php 
                                            if(isset($matHang['gia_ban_khuyen_mai'])){
                                                ?>
                                            <div class="col-lg-2"></div>
                                            <div style="text-decoration:line-through;" class="col-lg-4" ><?php echo number_format($matHang['gia_ban_khuyen_mai'],0,'','.').'đ';?></div>
                                            <div class="col-lg-4" style="color: red;" ><?php echo number_format($matHang['gia_ban'],0,'','.').'đ'; ?></div>
                                            <div class="col-lg-2"></div>
                                            <?php
                                            }else{?>
                                                <div class=""><?php echo number_format($matHang['gia_ban'],0,'','.').'đ'; }?></div>
                                                <?  
                                            }
                                        
                                        ?>
                                        </div>
                                    </div>
                                </div>                                            
                                 <?php
                                }
                            }
                        else{
                            ?>
                            <div class="text-center">
                                <img src="./assets/img/notfound.jpg" alt="">
                            </div><?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </section>
<?php }include 'footer.php'?>