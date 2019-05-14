<?php
	require 'connection.php';
if($_POST['submit'])
{
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
	$id=$_POST['id'];
	$user=$_POST['user'];
	$hoten=$_POST['hoten'];
	$diachi=$_POST['diachi'];
	$email=$_POST['email'];
	$dt=$_POST['dt'];
	$quyen=$_POST['quyen'];
	$sql="update thanhvien set id_user= '$id' , user='$user', hoten='$hoten' , diachi='$diachi' ,email='$email' ,dienthoai='$dt' ,capquyen='$quyen' where id_user=$id";

	if(!mysqli_query($con,$sql)){
			echo "<script>alert('Sữa thất bại');window.location='../admin/index.php?b=qluser';</script>";
	}
	else echo "<script>alert('Sữa thành công');window.location='../admin/index.php?b=qluser';</script>";
		
}
?>