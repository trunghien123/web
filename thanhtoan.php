<?php 
  require("connection.php");
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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/giohangg.css">
  <link rel="stylesheet" href="css/container.css">
</head>
<body>
  <!-- header-->
  <?php 
    require("php/templates/header.php");
    if(isset($_SESSION['cart']))
    {
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
       
        $tongtien = $_SESSION['tongtien'];
        $id_user = $_SESSION['id_user'];
        $sql="insert into donhang(tongtien,id_user) values('$tongtien','$id_user')"; 
        if (mysqli_query($con, $sql)) 
        {
          $last_id = mysqli_insert_id($con);
          foreach ($_SESSION['cart'] as $key => $value) 
          {
            $id_dh = $last_id;
            $masp  = $key;
            $soluong = $value['sl'];
            $giatien = $value['giatien'];
            $sql="insert into sanphamdonhang(id_dh,masp,giatien,soluong) values('$id_dh','$masp','$giatien','$soluong')";
            $kq=mysqli_query($con,$sql);
          }
        }
        header("Location: index.php");    
        unset($_SESSION['cart']);
      }
    }
    else
    {
      header("Location: index.php");
    }
    
  ?>
  <div style="min-height: 500px;">
    </br>
    <div class="tieudethanhtoan">Thanh toán đơn hàng: </div>
    <?php
      $user=$_SESSION["user"];
      $sql="select * from thanhvien where user='$user'";
      $result=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($result)) {
        ?>
        </br>
        <table class="thanhtoan">
          <form action="" method="post">
            <tr>
              <td><b>Họ và tên : </b></td>
              <td><input type="text" name="ht" readonly="" value="<?php echo $row['hoten']; ?>" size="50" class="thongtin" /></td>
            </tr>
            <tr>
              <td><b>Email : </b></td>
              <td><input type="text" name="email" readonly="" value="<?php echo $row['email']; ?>" size="50" class="thongtin" /></td>
            </tr>
            <tr>
              <td><b>Số địa chỉ : </b></td>
              <td><input type="text" name="diachi" readonly="" value="<?php echo $row['diachi']; ?>" size="50" class="thongtin" /></td>
            </tr>
            <tr>
              <td><b>Số điện thoại : </b></td>
              <td><input type="text" name="dienthoai" readonly="" value="<?php echo $row['dienthoai']; ?>" size="50" class="thongtin" /></td>
            </tr>
            <tr>
              <td><b>Tổng tiền : </b></td>
              <td><input type="text" name="tien" readonly="" value="<?php echo number_format($_SESSION['tongtien'],0,'.','.').' ₫'; ?>" size="50" class="thongtin" /></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-success xacnhan" >Xác nhận</button>  
      </form>
        <?php  
      }
    ?>
  </div> 
  </br>
  <!-- footer -->
  <?php require("php/templates/footer.php"); ?>
</body>
</html>