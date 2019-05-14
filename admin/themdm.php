<?php
	require 'connection.php';
	if(!isset($_POST['maloai'])){
		echo "<script>alert('Bạn chưa nhập mã loại sản phẩm');window.location='../admin/index.php?b=qldm';</script>";	
	}
	if(!isset($_POST['loai'])){
		echo "<script>alert('Bạn chưa nhập tên loại sản phẩm');window.location='../admin/index.php?b=qldm';</script>";	
	}
	$maloai=$_POST['maloai'];
	$loai=$_POST['loai'];
	$sql='insert into `phanloai` '
			."(`maloaisp`,`loaisanpham`) "
			."values "
			." ('$maloai', '$loai ')" ;
	if(!mysqli_query($con,$sql)){
			echo "<script>alert('Thêm thất bại');window.location='../admin/index.php?b=qldm';</script>";
	}
	else echo "<script>alert('Thêm thành công');window.location='../admin/index.php?b=qldm';</script>";
		
		
?>