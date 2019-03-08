<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="js/dungchung.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- header-->
    <script>header();</script>
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
            <div class="carousel-caption">
              <!-- <h3>Sell $</h3>
              <p>Money Money.</p> -->
            </div>      
          </div>

          <div class="item">
            <img src="https://www.pnj.com.vn/images/promo/49/Banner-dong-ho-tra-gop1200x450.png" alt="Image">
            <div class="carousel-caption">
              <!-- <h3>Sell $</h3>
              <p>Money Money.</p> -->
            </div>      
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
  
<div class="container text-center">    
 <br/>
  <div class="  container-float-left" style="width:70%">
    <script type="text/javascript">
      for(var i=1;i<26;i++)
      {
        document.write(`<img src='https://placehold.it/150x80?text=IMAGE'  alt="Image" > &nbsp`)

      }
    </script>
  </div>
  <div style="float: right;width: 22%">
    <div>
      <form class="input-search" method="get" action="index.html">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </form>
    </div>
    Tìm kiếm nâng cao: <br/>
    <div>
      <form class="input-search" method="get" action="index.html">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </form>
    </div>
      <!--<div class="well">
       <p>Some text..</p>
      </div>-->
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>