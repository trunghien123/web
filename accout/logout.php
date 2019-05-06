<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["success"]);
		unset($_SESSION["user"]);
		unset($_SESSION['id_user']);
		header("location:../index.php");
?>