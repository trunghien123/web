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
  <script type="text/javascript" src="js/giohang.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/containerr.css">
  <link rel="stylesheet" href="css/giohangg.css">
  
</head>
<body>
  <!-- header-->
    <?php require("php/templates/header.php");?>
  </br>
  <div class="row" style="min-height: 500px">
    <?php
      if(isset($_SESSION['user']))
      { 
        $stt=1;$tongtien=0;$temp=1;
        if(isset($_SESSION['cart']))
        {  
    ?>
          <table border="1" class="order" id="dltable">            
            <tr>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Giá tiền</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
              <th>Cập nhật</th>
            </tr>
            <?php
              foreach ($_SESSION['cart'] as $key => $value) 
              { 
                ?>
                <tr class="tr">
                  <td><?php echo $stt++; ?></td>
                  <td><img src="<?php echo $value['hinhanh']; ?>" style="height: 100px;"></td>
                  <td><?php echo $value['ten']; ?></td>
                  <td><?php echo number_format($value['giatien'],0,".",".").' ₫'; ?></td>
                  <td><form method="get">
                    <input type="number" name="soluong" min=1 class="soluong" id="soluong" value="<?php echo $value['sl'] ?>" style="text-align:center;width: 80px"/></form>
                  </td>
                  <td><?php echo number_format($value['giatien']*$value['sl'],0,".",".").' ₫'; ?></td>
                  <td>
                      <a href="" class="updatecart" data_key=<?php echo $key; ?> >
                        <i class="glyphicon glyphicon-repeat"></i>
                      </a>&nbsp;&nbsp;
                      <a href="giohang/delete.php?key=<?php echo $key; ?>" style="cursor: pointer;">
                        <i class="glyphicon glyphicon-trash"></i>
                      </a>
                  </td>
                </tr>
                <?php
                    $tongtien+=$value['giatien']*$value['sl'];
                    if(isset($key))
                    {
                      $temp=2;
                    }
                
              }
              $_SESSION['tongtien']=$tongtien;
            ?>
            <tr>
              <td colspan="3"></td>
              <td colspan="2" style="padding: 15px 0px 15px 0px; background: #01DF3A;cursor: pointer;" >
                <a href="thanhtoan.php" style="text-decoration: none;font-size: 18px;font-weight: bold;color: black">
                  Thanh toán
                </a>
              </td>
              <td>Tổng tiền: <?php echo number_format($tongtien,0,".",".").' ₫' ; ?></td>
              <td style="background: #FE030F"><a href="giohang/delete.php?key=0" style="text-decoration: none; color: white;">Xóa hết</a></td>
            </tr>
          </table>
    <?php
        }    
        if($temp!=2)
        {
          echo "<b style='padding-left:460px;font-size:25px;color:red'>BẠN KHÔNG CÓ SẢN PHẨM NÀO !!!</b>";
          ?>
            <script type="text/javascript">
              document.getElementById('dltable').style.display='none';
            </script>
          <?php
        }
      }
      else
      {     
         echo "<b style='padding-left:460px;;font-size:25px;color:red'>BẠN CHƯA ĐĂNG NHẬP !!!</b>";     
      }
    ?>
  </div>
  </br>
<?php 
      mysqli_close($con);
?> 
<?php require("php/templates/footer.php"); ?>
</body>
</html>