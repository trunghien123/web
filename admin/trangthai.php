<?php require("connection.php"); ?>
<?php
	$id=isset($_GET['id']) ? $_GET['id'] : "";
	$sql="SELECT * FROM donhang WHERE id=$id";
	$result = mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$trangthai = $row['trangthai'];
	if($trangthai==0)
	{
		$sql1="UPDATE donhang SET trangthai='1' WHERE id=$id ";
		$kq=mysqli_query($con,$sql1);
	}
	elseif($trangthai==1)
	{
		$sql2="UPDATE donhang SET trangthai='2' WHERE id=$id ";
		$kq2=mysqli_query($con,$sql2);	
	}
	elseif($trangthai==2)
	{
		$sql2="UPDATE donhang SET trangthai='0' WHERE id=$id ";
		$kq2=mysqli_query($con,$sql2);	
	}
	elseif($trangthai==-1)
	{
		$sql2="UPDATE donhang SET trangthai='0' WHERE id=$id ";
		$kq2=mysqli_query($con,$sql2);	
	}
	header("Location:index.php?b=qldh");	
?>