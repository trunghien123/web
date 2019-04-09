<?php
        $r = mysqli_query($con,$x);
        $tongsotin = mysqli_num_rows($r);
        $sotrang = ceil($tongsotin/$sotin1trang);
        echo '<ul class="pagination">';
        if ($trang > 1 && $sotrang > 1){
         echo '<li><a href="timkiemnangcao.php?phanloai='.$search_phanloai.'&giatu='.$search_giatu.'&giaden='.$search_giaden.'&trang=1"> << </a></li> ';
         echo '<li><a href="timkiemnangcao.php?phanloai='.$search_phanloai.'&giatu='.$search_giatu.'&giaden='.$search_giaden.'&trang='.($trang-1).'"> < </a></li> ';   
        }
        for($t=1;$t<=$sotrang;$t++)
        {  
          if ($t == $trang)
          {
            echo '<li><span style="background-color: #58FA82">'.$t.'</span</li>';
          } 
          else      
            echo '<li><a href="timkiemnangcao.php?phanloai='.$search_phanloai.'&giatu='.$search_giatu.'&giaden='.$search_giaden.'&trang='.$t.'">'.$t.'</a></li>';         
        }
        if ($trang < $sotrang && $sotrang > 1){
         echo '<li><a href="timkiemnangcao.php?phanloai='.$search_phanloai.'&giatu='.$search_giatu.'&giaden='.$search_giaden.'&trang='.($trang+1).'"> > </a></li>';
         echo '<li><a href="timkiemnangcao.php?phanloai='.$search_phanloai.'&giatu='.$search_giatu.'&giaden='.$search_giaden.'&trang='.$sotrang.'"> >> </a></li>';
        }
        echo '</ul>';
                    // sản phẩm rỗng
        if ($tongsotin==0)
        {
          echo "<b style='font-size: 30px; color: red'>KHÔNG TÌM THẤY SẢN PHẨM !!!</b>";
        }
?>