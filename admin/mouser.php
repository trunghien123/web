<?php
	$id=$_GET['id'];
	include("connection.php");
	$sql="update thanhvien set hieuluc= '1'  where id_user=$id";
	//echo "<script>alert($sql);</script>";
	if(!mysqli_query($con,$sql)){
			echo "<script>alert('Mở thất bại');window.location='../admin/index.php?b=qluser';</script>";
	}
	else echo "<script>alert('Mở thành công');window.location='../admin/index.php?b=qluser';</script>";
?>