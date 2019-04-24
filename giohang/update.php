<?php
	session_start();
	$key = $_GET['key'];
	$soluong = $_GET['sl'];
	if( $soluong > 0 && is_numeric($soluong))
	{
		$_SESSION['cart'][$key]['sl'] = $soluong;
	}
?>