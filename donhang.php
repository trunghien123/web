<?php
      require("connection.php");
      require("function.php");
      session_start();
      $id_user=$_SESSION["id_user"];
      if(!isset($_SESSION['user']))
      {
        header("Location:index.php");
      }
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
  <link rel="stylesheet" href="css/giohangg.css">

  
</head>
<body>
  <!-- header-->
  <?php require("php/templates/header.php");?>
  <div class="row" style="min-height: 550px">
      <br/>
      <table border="1" class="order" id="dltable">            
            <tr>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Giá tiền</th>
              <th>Số lượng</th>
              <th>Trạng thái</th>
              <th>Thời gian</th>
            </tr>
          <?php
            $stt=1;$temp=0;
            $sql="SELECT * FROM donhang as d,sanphamdonhang as s,sanphamdb as sa WHERE d.id=s.id_dh AND s.masp=sa.masp AND id_user='$id_user'";
            $result=mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($result)) {
              ?>
              <tr>
                  <td><?php echo $stt++; ?></td>
                  <td><img src="<?php echo $row['hinhanh']; ?>" style="height: 100px;"></td>
                  <td><?php echo $row['tensp']; ?></td>
                  <td><?php echo number_format($row['giatien'],0,".",".").' ₫'; ?></td>
                  <td><?php echo $row['soluong'] ?></td>
                  <td>
                    <?php 
                      if($row['trangthai']==0)
                      {
                        echo "<b style='color:red'>Chưa xử lí<b>";
                      }
                      else
                      {
                        echo "<b style='color:green'>Đã xử lí<b>";
                      }
                    ?>
                  </td>
                  <td><?php echo $row['thoigian'] ?></td>
                </tr>
              <?php
              if($row)
              {
                $temp=1;
              }
            }
          ?>
      </table>
      <?php
      if($temp!=1)
        {
          echo "<b style='padding-left:460px;font-size:25px;color:red'>BẠN CHƯA CÓ ĐƠN HÀNG NÀO !!!</b>";
          ?>
            <script type="text/javascript">
              document.getElementById('dltable').style.display='none';
            </script>
          <?php
        }
      ?>
  </div>
<?php 
      mysqli_close($con);
?> 
<?php require("php/templates/footer.php"); ?>
</body>
</html>