<?php
	session_start();
	if( !isset($_SESSION['cart']))
	{
		header("Location:../index.php");
	}
	$key = isset($_GET['key'])?$_GET['key']:"";
	if($key=='0')
	{
		unset($_SESSION['cart']);
	}
	else
	{
		unset($_SESSION['cart'][$key]);
	}
	header("Location:../giohang.php");exit();
?>