<?php
	$id=$_GET['id'];
	include("connection.php");
	$sql="update thanhvien set hieuluc= '0'  where id_user=$id";
	//echo "<script>alert($sql);</script>";
	if(!mysqli_query($con,$sql)){
			echo "<script>alert('Khóa thất bại');window.location='../admin/index.php?b=qluser';</script>";
	}
	else echo "<script>alert('Khóa thành công');window.location='../admin/index.php?b=qluser';</script>";
?>