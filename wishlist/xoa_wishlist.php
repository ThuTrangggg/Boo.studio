<html>
<head>
    <meta charset="utf-8" />
</head>
<?php 
session_start();
if(isset($_GET['id'])&&isset($_SESSION['wishlist']['mat_hang_wishlist']))
{
	$id = $_GET['id'];
	unset($_SESSION['wishlist']['mat_hang_wishlist'][$id]);
 	echo"<script>
    window.location = 'wishlist.php';
    </script>"; 
}
else
{
    echo"<script>
    window.location = 'wishlist.php';
        </script>";    
}
?>
</html>