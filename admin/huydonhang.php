<?php
	require("connection.php");
	$id=isset($_GET['id']) ? $_GET['id'] : "";
	$sql="UPDATE donhang SET trangthai='-1' WHERE id=$id ";
	$kq=mysqli_query($con,$sql);	
	header("Location:index.php?b=qldh");
?>