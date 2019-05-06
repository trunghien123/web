<?php
	require("../connection.php");
	session_start();
	$id= isset($_POST['id']) ? $_POST['id']:"";
	$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user']:"";
	if(!isset($_SESSION['id_user']))
	{
		echo "Bạn phải đăng nhập mới được mua sản phẩm";
	}
	else
	{
		echo "Sản phẩm đã được thêm vào giỏ hàng";
		$query="SELECT * FROM sanphamdb,thanhvien WHERE masp='$id' AND id_user='$id_user'";
		$result=mysqli_query($con,$query);
		while ($row = mysqli_fetch_array($result)) 
		{
			if(isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$id]['sl'] +=1;
			}
			else
			{
				$_SESSION['cart'][$id]['sl']=1;
				$_SESSION['cart'][$id]['ten']=$row['tensp'];
				$_SESSION['cart'][$id]['hinhanh']=$row['hinhanh'];
				$_SESSION['cart'][$id]['giatien']=$row['giatien'];
				
		 	}
		}
	}
?>