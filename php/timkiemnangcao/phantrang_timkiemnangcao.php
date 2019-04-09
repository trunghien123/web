<?php
		$sotin1trang = 4;
		if(isset($_GET['trang']))
		{
			$trang = $_GET['trang'];
		}
		if(!isset($_GET['trang'])||$_GET['trang']<1 || $_GET['trang']>12)
		{
			$trang =1;
		}
		$from = ($trang -1 )* $sotin1trang;
?>