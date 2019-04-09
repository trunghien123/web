<div>
  <form class="input-search" style="margin-left: 70px" method="get" action="index.php" >
        <div class="autocomplete">
            <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
            <button type="submit" name="submit" value="tìm kiếm" id="tk">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </div>
  </form>
</div><br/>
<table style="margin-left: 70px">
    <tr> 
      <td> Phân loại : </td>
      <td>
      <form method="get" action="timkiemnangcao.php">  
            <select style="margin-left: 10px" id="loaisp" name="phanloai">
              <option value="">Hiệu đồng hồ</option>
                <?php
                  $sqll="SELECT * FROM phanloai";
                  $resultt=mysqli_query($con,$sqll);
                  while ($row = mysqli_fetch_array($resultt)) {
                    ?>
                    <option value="<?php echo $row['loaisanpham'] ?>"><?php echo $row['loaisanpham'] ?></option>;
                    <?php
                  }
                ?>
            </select>
      </td>
    </tr>
</table><br/>
<table style="margin-left: 70px">
    <tr>          
        <td> Khoảng giá: </td>
        <td> <input type="text" name="giatu" size="10">~<input type="text" name="giaden" size="10"> </td>         
    </tr>
</table><br/>
<table style="margin-left: 160px">
    <tr>
      <td colspan="2">
          <button type="submit" name="submit" value="Tìm kiếm" class="timkiemnc">Tìm kiếm </button> 
        </form>
      </td>
    </tr>
</table>