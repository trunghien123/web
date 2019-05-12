 <?php
      require("../connection.php");
      require("../function.php");
      session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đồng Hồ Shop</title>
  <link rel="shortcut icon" href="../images/clock.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="css/menu.css">
</head>
<body style="background: #2E2E2E">
  <?php
	if(isset($_SESSION['user']))
     {
     ?>
  <!-- header-->
    <nav class="navbar navbar-inverse" style="position: sticky;position: -webkit-sticky;top: 0;z-index: 12;background: #2E2E2E">
      <div class="container-fluid" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand">
              <strong style="color: #6E6E6E;padding-left: 20px"> Xin chào <?php echo $_SESSION['user'] ?></strong>
            </a>
          </div>
      </div>
	</nav>
  <!-- ============== -->
  <?php
  if(isset($_REQUEST["b"]))
    {
      $b=$_REQUEST["b"];
      if($b=="change")
        $file="accout/change.php";
      if($b=="cpw")
        $file="accout/change-pw.php";
      if($b=="dangki")
        $file="accout/register.php";
      if($b=="ttcn")
        $file="accout/thongtincanhan.php";    
    }?>
  <!-- ============== -->
  <div class="row">
    <div class="col-md-2">
      <div class="vertical-menu">
        <a href="#" class="active">Sản phẩm</a>
        <a href="index.php?b=thanhvien">Thành viên</a>
        <a href="index.php?b=donhang">Đơn hàng</a>
        <a href="#">Thống kê</a>
        <a href="../accout/logout.php">Đăng xuất</a>
      
      </div>
    </div>
    <div class="col-md-8" style="background: #FFF;min-height: 500px;">
      <br/>
      aaaaaaaaaaaa
    </div>
  
  <?php
	}
	else{
		echo "<div style='color:red;font-size:30px;font-weight:bold;text-align:center'>TRUY CẬP BỊ TỪ CHỐI !!!</div>";
	}
  ?>
  <!-- ===========||=============== -->

<?php 
      mysqli_close($con);
?> 
</body>
</html>