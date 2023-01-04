<?php
session_start();
include("../action/connect.php");

if(isset($_SESSION["user"])){
	unset($_SESSION["user"]);
}

?>
<script language="javascript">
	parent.location.href = "/login.php";
</script>

?>