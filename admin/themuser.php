<?php
	require 'connection.php';
	if(!isset($_POST['id'])){
		echo "<script>alert('Bạn chưa nhập id');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['user'])){
		echo "<script>alert('Bạn chưa nhập user');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['hoten'])){
		echo "<script>alert('Bạn chưa nhập họ tên');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['diachi'])){
		echo "<script>alert('Bạn chưa nhập địa chỉ');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['email'])){
		echo "<script>alert('Bạn chưa nhập email');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['dt'])){
		echo "<script>alert('Bạn chưa nhập điện thoại');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['quyen'])){
		echo "<script>alert('Bạn chưa nhập quyền');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['pass'])){
		echo "<script>alert('Bạn chưa nhập mật khẩu');window.location='../admin/index.php?b=qluser';</script>";	
	}
	if(!isset($_POST['hieuluc'])){
		echo "<script>alert('Bạn chưa nhập hiệu lực');window.location='../admin/index.php?b=qluser';</script>";	
	}
	$id=$_POST['id'];
	$user=$_POST['user'];
	$hoten=$_POST['hoten'];
	$diachi=$_POST['diachi'];
	$email=$_POST['email'];
	$dt=$_POST['dt'];
	$quyen=$_POST['quyen'];
	$pass=md5($_POST['pass']);
	$hieuluc=$_POST['hieuluc'];
	$sql='insert into `thanhvien`'
			."(`id_user`,`user`,`hoten`,`diachi`,`email`,`dienthoai`,`pass`,`hieuluc`,`capquyen`)"
			."values "
			."('$id', $user, '$hoten', '$diachi' , '$email' , '$dt','$pass','$hieuluc','$capquyen' )" ;

	if(!mysqli_query($con,$sql)){
			echo "<script>alert('Thêm thất bại');window.location='../admin/index.php?b=qluser';</script>";
	}
	else echo "<script>alert('Thêm thành công');window.location='../admin/index.php?b=qluser';</script>";
		

?>