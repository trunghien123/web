<nav class="navbar navbar-inverse" style="position: sticky;position: -webkit-sticky;top: 0;z-index: 12;">
      <div class="container-fluid" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">WATCH SHOP</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php" class="active">Trang chủ</a></li>
              <li><a href="gioithieu.php">Giới thiệu</a></li>
              <li><a href="#">Liên hệ</a></li>
            </ul>
          <?php
            if(isset($_SESSION['success']))
            {
              ?>             
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="donhang.php"><span class="glyphicon glyphicon-align-left"></span> Đơn hàng
                </a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" >
              <li>
                <a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                </a>
              </li>
            </ul>
              <?php
            }
            else{
              ?>
            <ul class="nav navbar-nav navbar-right" >
              <li>
                <a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                </a>
              </li>
            </ul>
              <?php
            }
          ?>
            <ul class="nav navbar-nav navbar-right">
              <?php
              if(isset($_SESSION["success"])){
                include "accout/login_success.php";
              }
              else
                include "accout/login.php";
              ?>
            </ul>
          </div>
      </div>
</nav>