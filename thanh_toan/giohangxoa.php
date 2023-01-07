<html>
<head>
    <meta charset="utf-8" />
</head>
<?php 
session_start();
if(isset($_GET['id'])&&isset($_SESSION['gio_hang']['mat_hang']))
{
	$id = $_GET['id'];
	unset($_SESSION['gio_hang']['mat_hang'][$id]);
 	echo"<script>
    window.location = 'giohang.php';
    </script>"; 
}
else
{
    echo"<script>
    window.location = 'giohang.php';
        </script>";    
}
?>
</html>