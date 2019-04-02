<?php
      $sotin1trang = 8;
      if(isset($_GET['trang']))
      {
        $trang = $_GET['trang'];
      }
      if(!isset($_GET['trang'])||$_GET['trang']<1 || $_GET['trang']>6)
      {
        $trang =1;
      }
      $from = ($trang -1 )* $sotin1trang;
      $sql="SELECT * FROM sanphamdb LIMIT $from, $sotin1trang";
      $result = mysqli_query($con,$sql); 
      while($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col-sm-6 khungsp" style="height: 300px">
            <a href="chitietsanpham.php?id='.$row['masp'].'">';
              echo '<img src="'.$row["hinhanh"].'" width="180px">
                    <p style="text-align: center;"> ';
              echo $row["tensp"].'</br>
            </a>';
              echo '<b>'.$row["giatien"].' ₫</b>
              </p>';
          echo '<button class="nutgiohang">
              <i class="glyphicon glyphicon-shopping-cart"></i> Thêm vào giỏ hàng
          </button>
          </div>';
      }
?>
