<?php
	require 'connection.php';
if($_POST['submit'])
{
	// echo "<script>alert('a');</script>";
	// if(!isset($_POST['ten'])){
	// 	echo "<script>alert('Bạn chưa nhập tên');window.location='../admin/index.php?b=qlsp';</script>";	
	// }
	// if(!isset($_POST['gia'])){
	// 	echo "<script>alert('Bạn chưa nhập giá');window.location='../admin/index.php?b=qlsp';</script>";	
	// }
	// if(!isset($_POST['ma'])){
	// 	echo "<script>alert('Bạn chưa nhập mã');window.location='../admin/index.php?b=qlsp';</script>";	
	// }
	// // if(!isset($_FILES['file'])){
	// // 	echo "<script>alert('Bạn chưa nhập hinh');window.location='../admin/index.php?b=qlsp';</script>";	
	// // }
	// if(!isset($_POST['loai'])){
	// 	echo "<script>alert('Bạn chưa nhập loai');window.location='../admin/index.php?b=qlsp';</script>";	
	// }
	// if(!isset($_POST['id'])){
	// 	echo "<script>alert('Bạn chưa nhập id');window.location='../admin/index.php?b=qlsp';</script>";	
	// }
	if ((($_FILES["file"]["type"] =="image/gift") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 2097152)) //kích thước không quá 2MB
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			// echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			// echo "Type: " . $_FILES["file"]["type"] . "<br />";
			// echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			// echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

			if (file_exists("../images/" . $_FILES["file"]["name"]))
			{
				echo "<script>alert(".$_FILES["file"]["name"]." đã tồn tại)</script>";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],
					"../images/" . $_FILES["file"]["name"]);
				// echo "Stored in: " . "../images/" . $_FILES["file"]["name"];
			}
		}
	}
	else
	{
		echo "<script>alert('Chưa có hình ảnh hoặc ảnh không đúng yêu cầu');window.location='index.php?b=qlsp';</script>";
	}
	$ten=$_POST['ten'];
	$gia=$_POST['gia'];
	$ma=$_POST['ma'];
	$hinh='images/'.$_FILES['file']['name'];
	$hinh1=$_POST['hinh'];
	if( isset($_FILES['file'])) 
	{
		$anh = $hinh;
	}
	else
	{
		$anh = $hinh1;
	}
	$loai=$_POST['loai'];
	$id=$_POST['id'];
	$matkinh=$_POST["matkinh"];
	$chatlieuday=$_POST["chatlieuday"];
	$chatlieuvo=$_POST["chatlieuvo"];
	$duongkinhmat=$_POST["duongkinhmat"];
	$xuatxu=$_POST["xuatxu"];
	$baohanh=$_POST["baohanh"];
	$chongnuoc=$_POST["chongnuoc"];
	$sql="UPDATE sanphamdb SET tensp= '$ten' , giatien=$gia , masp='$ma' , hinhanh='$anh' ,loaisp='$loai' ,id_ctsp='$id' where masp='$ma' ";
	$sql1="UPDATE chitietsanpham SET id_ctsp=$id,loaimatkinh='$matkinh',chatlieuday='$chatlieuday',chatlieuvo='$chatlieuvo',duongkinhmat='$duongkinhmat',xuatxu='$xuatxu',baohanh='$baohanh',chongnuoc='$chongnuoc' WHERE id_ctsp=$id ";
	$kq=mysqli_query($con,$sql);
	$kq1=mysqli_query($con,$sql1);
	if(!$kq || !$kq){
			echo "<script>alert('Sửa thất bại');window.location='index.php?b=qlsp';</script>";
	}
	else echo "<script>alert('Sửa thành công');window.location='index.php?b=qlsp';</script>";
		
}
?>