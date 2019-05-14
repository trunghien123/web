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
  <!-- <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/giohangg.css">
  <link rel="stylesheet" href="css/menu.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font/css/all.css">
  <link rel="stylesheet" href="css/qluser.css">
  <link rel="stylesheet" href="css/qldm.css">
  <link rel="stylesheet" href="css/qldh.css">
  <link rel="stylesheet" href="css/qlsp.css">
</head>
<body >
  <?php
	if(isset($_SESSION['user']))
     {
     ?>
  
    <div class="wrapper">
            <!-- header-->
            <div class="header">
                <a href="index.php"><span class="title-header">Xin chào <?php echo $_SESSION['user'];?></span></a>
            </div>
            <div class="left-menu">
                <a class="left-menu__item active" style="text-decoration: none;" href="index.php?b=tk"><span id="speed-icon"></span>Thống kê</a>
                <a class="left-menu__item" style="text-decoration: none;" href="index.php?b=qlsp"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
                <a class="left-menu__item" style="text-decoration: none;" href="index.php?b=qluser"><span class="icon" id="user-icon"></span>Quản lý người dùng</a>
                <a class="left-menu__item" style="text-decoration: none;" href="index.php?b=qldh"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
                <a class="left-menu__item" style="text-decoration: none;"  href="index.php?b=qldm"><span class="icon" id="danh-muc-icon"></span>Quản lý danh mục</a>
                <hr/>
                <a class="left-menu__item" style="text-decoration: none;" href="../accout/logout.php">&nbsp; <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;&nbsp;&nbsp;Đăng xuất</a>
            </div>
            <!-- container -->
            <div class="main">
            <?php 
              $b=isset($_REQUEST["b"])?$_REQUEST["b"]:"";
              if(!isset($_REQUEST['b']))
              {
                echo '<br/><div style="text-align:center;color: green;font-size:30px;font-weight:bold">Chào mừng bạn đến với trang Admin</div>';
              }
              switch($b){
                case "tk":
                  include('thongke.php');
                  break;  
                case "qlsp":
                  include('qlsp.php');
                  if(isset($_GET['c'])) 
                  {
                    if($_GET['c']=='sua')
                    {
                      require('formsuasp.php');
                      require('suasp.php'); 
                    } 
                  }
                  break;
                case "qluser":
                  include('qluser.php');
                  if(isset($_GET['c'])?$_GET['c']:""=='sua')
                    {
                      require('formsuauser.php');
                      require('suauser.php'); 
                    }
                  break;
                case "qldh":
                include('qldh.php');
                break;
                case "qldm":
                  include('qldm.php');
                  break;
        }
        
      ?>
            </div>
            <div class="footer">
                <div>Powered by <a href="index.php"> World Phone</a></div>
            </div>
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