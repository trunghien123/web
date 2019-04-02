<?php
      require("connection.php");
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
  <script></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/containerr.css">

  
</head>
<body>
  <!-- header-->
    <?php require("header.php");?>
  <!--slide show-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://shopdongho.com/wp-content/uploads/2019/01/banner-desktop-3.jpg" alt="Image">
            <div class="carousel-caption"></div>      
          </div>

          <div class="item">
            <img src="https://shopdongho.com/wp-content/uploads/2018/09/banner-shop-dong-ho-3.jpg" alt="Image">
            <div class="carousel-caption"></div>      
          </div>

          <div class="item">
            <img src="https://www.pnj.com.vn/images/promo/49/Banner-dong-ho-tra-gop1200x450.png" alt="Image">      
            <div class="carousel-caption"></div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  
<div class="row">    
 <br/>
  <div class="col-md-4">
    <div>
      <form class="input-search" style="margin-left: 70px" method="get" action="index.php" >
            <div class="autocomplete">
                <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                <button type="submit" name="submit" value="tìm kiếm">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
      </form>
    </div><br/>
    <table style="margin-left: 70px">
        <tr> 
          <td> Phân loại : </td>
          <td>  
                <select style="margin-left: 10px">
                  <option value="casio">Casio</option>
                  <option value="skagen">Skagen</option>
                  <option value="tissot">Tissot</option>
                  <option value="op">OP</option>
                  <option value="doxa">Doxa</option>
                  <option value="seiko">Seiko</option>
                  <option value="gshock">G-shock</option>
                  <option value="movado">Movado</option>
                  <option value="candino">Candino</option>
                  <option value="citizen">Citizen</option>
                  <option value="dw">Daniel Wellington (DW)</option>
                </select>
          </td>
        </tr>
    </table><br/>
    <table style="margin-left: 70px">
        <tr>
          <form>
            <td> Khoảng giá: </td>
            <td> <input type="text" name="giatu" size="10">~<input type="text" name="giaden" size="10"> </td>
          </form>
        </tr>
    </table><br/>
    <table style="margin-left: 160px">
        <tr>
          <td colspan="2">
            <form method="get" action="index.php">
              <input type="submit" name="timkiem" value="Tìm kiếm" class="timkiemnc" >
            </form>
          </td>
        </tr>
    </table>
    <br/>
  </div>
  <div class="col-md-8">
     
    <!--ket noi co so du lieu -->
    <!-- TIMKIEM -->
    <?php
        if(isset($_GET['search'])){
          $search = $_GET['search'];
        }
        else
          $search = "";
        
        if(empty($search))
        {
          require("phantrang.php");
          
        }
        else
        {
             
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
            $sql="SELECT * FROM sanphamdb WHERE tensp like '%$search%' LIMIT $from, $sotin1trang";
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
        }

     ?> 
     <div id="df"></div> 
  </div> 
</div>
 <div style="text-align: center;">  
        <?php 
          // phan trang
            $x = "SELECT masp from sanphamdb where tensp like '%$search%'";
            $r = mysqli_query($con,$x);
            $tongsotin = mysqli_num_rows($r);
            $sotrang = ceil($tongsotin/$sotin1trang);
            echo '<ul class="pagination">';
            for($t=1;$t<=$sotrang;$t++)
              {  
                if ($t == $trang)
                {
                  echo '<li><span style="background-color: #58FA82">'.$t.'</span</li>';
                } 
                else      
                  echo '<li><a href="index.php?search='.$search.'&submit=&trang='.$t.'">'.$t.'</a></li>';         
              }
            echo '</ul>';
            // sản phẩm rỗng
            if ($tongsotin==0)
            {
              require("sanphamrong.php");
            }

        ?>  
        </div>   
<?php 
      mysqli_close($con);
?> 
<?php require("footer.php"); ?>

</body>
</html>