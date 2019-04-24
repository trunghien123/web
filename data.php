<?php
      require("connection.php");
      $key=$_POST['id'];
      if($key=="")
      {
        require("timkiem.php");
      }
      $sotin1trang = 8;

            if(isset($_GET['trang']))
            {
              $trang = $_GET['trang'];
            }
            if(!isset($_GET['trang'])||$_GET['trang']<1 || $_GET['trang']>12)
            {
              $trang =1;
            }
      $from = ($trang -1 )* $sotin1trang;
      $sql = "SELECT * from phanloai,sanphamdb where loaisanpham=loaisp AND loaisanpham='$key' LIMIT $from, $sotin1trang";
      require("array_push.php");

    echo '<div style="clear: both;margin-left: 90px;">';
          // phan trang
            $x = "SELECT masp from phanloai,sanphamdb where loaisanpham=loaisp AND loaisanpham='$key'";
            $r = mysqli_query($con,$x);
            $tongsotin = mysqli_num_rows($r);
            $sotrang = ceil($tongsotin/$sotin1trang);
            echo '<ul class="pagination">';
            if ($trang > 1 && $sotrang > 1){
              echo '<li><a href="index.php?search='.$search.'&trang=1"> << </a></li> ';
              echo '<li><a href="index.php?search='.$search.'&trang='.($trang-1).'"> < </a></li> ';   
            }
            for($t=1;$t<=$sotrang;$t++)
              {  
                if ($t == $trang)
                {
                  echo '<li><span style="background-color: #58FA82">'.$t.'</span</li>';
                } 
                else      
                  echo '<li><a href="index.php?trang='.$t.'">'.$t.'</a></li>';         
              }
            if ($trang < $sotrang && $sotrang > 1){
                echo '<li><a href="index.php?trang='.($trang+1).'"> > </a></li>';
                echo '<li><a href="index.php?trang='.$sotrang.'"> >> </a></li>';
            }
            echo '</ul>';
    echo '</div';
?> 