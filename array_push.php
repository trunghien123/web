 <?php
   $result = mysqli_query($con,$sql); 
   while($row = mysqli_fetch_array($result)) {
   echo '<div class="col-sm-6 khungsp" style="height: 300px">
    <a href="chitietsanpham.php?id='.$row['masp'].'">';
      echo '<img src="'.$row["hinhanh"].'" width="180px">
      <p style="text-align: center;" class="box'.$row['masp'].'" id="'.$row['masp'].'"> ';
      echo $row["tensp"].'</br>
    </a>';
    echo '<b>'.number_format($row["giatien"],0,".",".").' ₫</b>
  </p>';
  echo '<a  id="addcart'.$row['masp'].'"  class="btn btn-success" style="margin-left:12px" >
    <i class="glyphicon glyphicon-shopping-cart"></i> Thêm vào giỏ hàng
  </a>
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
                  
                  alert(results);
                }
                })
              })
            })
        </script>';
}
?>