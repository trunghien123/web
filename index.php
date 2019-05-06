<?php
 ini_set('display_errors', 0);
if(!isset($_SESSION))
  session_start();
  $user=$_SESSION["user"];
?> 
<?php
      require("connection.php");
      require("function.php");
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đồng Hồ Shop</title>
  <link rel="shortcut icon" href="images/clock.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="js/ajax.js"></script>
  <!-- <script src="js/addcart.js"></script> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/container.css">

  
</head>
<body>
  <!-- header-->
    <?php require("php/templates/header.php");?>
  <!--slide show-->
    <?php require("php/templates/slideshow.php");?>
  
<div class="row">    
 <br/>
  <div class="col-md-4">
    <?php require("php/templates/left.php"); ?>
    <br/>
  </div>
  <div class="col-md-8 " id="dulieu"> 
    <?php
    $file="timkiem.php";
    if(isset($_REQUEST["b"]))
    {
      $b=$_REQUEST["b"];
      if($b=="cpw")
        $file="accout/change-pw.php";
      if($b=="dangki")
        $file="accout/register.php";
      if($b=="ttcn")
        $file="accout/thongtincanhan.php";    
    }
    include "$file";
    
    ?>  
    <?php  
      //TÌM KIẾM
      //require("timkiem.php");
    ?>
  </div> 
</div>
<?php 
      mysqli_close($con);
?> 
<?php require("php/templates/footer.php"); ?>
</body>
</html>