<?php
	include("../connection.php");
	if(!isset($_POST["user"])){	
		echo "<script>alert('Bạn chưa nhập username');window.location='../index.php';</script>";
		//header("location:login.php");
	}
	else 
	{
		$user=$_POST["user"];
		if (!isset($_POST["pass"])) {
			echo "<script>alert('Bạn chưa nhập mật khẩu');window.location='../index.php';</script>";
			//header("location:login.php");					
		}
		else
		{
			$pass=md5($_POST["pass"]);			
			$sql="select * from thanhvien where user='$user' and pass='$pass'";
			$kq=mysqli_query($con,$sql);
			$thanhvien=mysqli_fetch_array($kq);
			$hieuluc=$thanhvien["hieuluc"];
			$n=mysqli_num_rows($kq);
			if($n==0)
			{
				echo "<script>alert('Thông tin bạn nhập không chính xác!');window.location='../index.php';</script>";
				//header("location: login.php");
			}	
			else 
			{	
				if($hieuluc==1){
					if(!isset($_SESSION))
					session_start();
					$_SESSION["user"]=$user;
					$_SESSION["success"]=true;
					$_SESSION['hoten']=$thanhvien['hoten'];	
					$_SESSION["hieuluc"]=$thanhvien["hieuluc"];
					$_SESSION['capquyen']=$thanhvien["capquyen"];
					header("location:../index.php");
				}
				else echo"<script>alert('Bạn không có quyền truy cập!');window.location='../index.php'</script>";
			}
		}
	}
?>	