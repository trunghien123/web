<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đồng Hồ Shop</title>
	<link rel="shortcut icon" href="images/clock.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/chitietsanpham.css">
</head>
<body>
	<?php require("connection.php"); session_start(); ?>
	<?php require("php/templates/header.php"); ?>
	<div class="row">
		<?php 
			$ids = $_GET['id'];
			$sql="SELECT * FROM sanphamdb where masp='$ids'";
      		$result = mysqli_query($con,$sql);
      		while($row = mysqli_fetch_assoc($result)){
      			echo '<div class="col-md-4">
					<img src="'.$row['hinhanh'].'" height="500px" width="400px" style="margin: 20px 20px 5px 0px;">
				</div>
				<div class="col-md-3">
					<div style="margin-top: 150px;" >
						<b  class="box'.$row['masp'].'" id="'.$row['masp'].'">';
						echo $row['tensp'].'<br/><br/>
						</b>
							<p>'.number_format($row["giatien"],0,".",".").' đ</p>
						<br/>
						<a id="addcart'.$row['masp'].'" class="btn btn-primary btn-lg" style="padding: 10px 80px 10px 80px; margin-top:70px;" >MUA NGAY</a>
					</div>
				</div>';
				echo '<script>
						$(document).ready(function(){
							$("#addcart'.$row['masp'].'").click(function(){
								var id=$(".box'.$row['masp'].'").attr("id");
								$.ajax({
									type: "POST",
									url: "giohang/addcart.php",
									data: {id:id},
									cache:false,
									success: function(results){
										//if(isset($_SESSION["user"])){alert("helo");}
										alert(results);
										//window.location.reload();
									}
								})
							})
						})
					  </script>';
      		}
		?>
		<div class="col-md-4" >
			<h3 align="center">THÔNG SỐ </h3>
			Thương hiệu : Casio <hr/>
			Loại mặt kính : Sapphire <hr/>
			Chất liệu dây : Thép không gỉ 316L xi mạ theo công nghệ PVD<hr/>
			Chất liệu vỏ : Thép không gỉ mạ vàng công nghệ PVD<hr/>
			Đường kính mặt : 32.3mm <hr/>
			Độ dày mặt đồng hồ : 8.3mm <hr/>
			Thời hạn bảo hành: Bảo hành máy 1 năm, Pin 1 năm <hr/>
			Chống nước : 5ATM <hr/>

		</div>
	</div>
<?php
	mysqli_close($con); 
	require("php/templates/footer.php"); 
?>
</body>
</html>
