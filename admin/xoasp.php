<?php
	include('connection.php');

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="DELETE FROM sanphamdb WHERE id_ctsp = $id";
		if(!mysqli_query($con,$sql))
			{
			echo "<script>alert('$sql');window.location='../admin/index.php?b=qlsp';</script>";	
			}
		else{
				header("location:../admin/index.php?b=qlsp");
			}
	}
?>