<?php
	require("../connection.php");
	session_start();
	if(!isset($_SESSION['user']))
	{
		echo "Bạn phải đăng nhập mới được mua hàng";
	}
	else
	{
		echo "Sản phẩm đã được thêm vào giỏ hàng";
		$id= isset($_POST['id']) ? $_POST['id']:"";
		$query="SELECT * FROM sanphamdb WHERE masp='$id'";
		$result=mysqli_query($con,$query);
		while ($row = mysqli_fetch_array($result)) {

			if(isset($_SESSION['cart']))
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
					$_SESSION['cart'][$id]['user']=$_SESSION['user'];
				}
			}
			else
			{
				
				$_SESSION['cart'][$id]['sl']=1;
				$_SESSION['cart'][$id]['ten']=$row['tensp'];
				$_SESSION['cart'][$id]['hinhanh']=$row['hinhanh'];
				$_SESSION['cart'][$id]['giatien']=$row['giatien'];
				$_SESSION['cart'][$id]['user']=$_SESSION['user'];
			}
		}
		//var_dump($_SESSION['cart']);
	}
?>