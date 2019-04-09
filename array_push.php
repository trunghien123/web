 <?php
   $result = mysqli_query($con,$sql); 
   while($row = mysqli_fetch_array($result)) {
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