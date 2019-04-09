<?php
      if(isset($_GET['phanloai'])){
        $search_phanloai = $_GET['phanloai'];
      }
      else
        $search_phanloai = "";

      if(isset($_GET['giatu'])){
        $search_giatu = $_GET['giatu'];
      }
      else
        $search_giatu = "";
      if(isset($_GET['giaden'])){
        $search_giaden = $_GET['giaden'];
      }
      else
      $search_giaden = "";

      //Xét điều kiện form tìm kiếm
      
      if(empty($search_phanloai)&&empty($search_giatu)&&empty($search_giaden))
      {
        require("timkiem.php"); 
      }
      else if(empty($search_phanloai)&&isset($search_giaden)&& isset($search_giatu))
      {
        require("php/timkiemnangcao/phantrang_timkiemnangcao.php");
        $sql="SELECT * FROM sanphamdb WHERE giatien>='$search_giatu' AND giatien<='$search_giaden' LIMIT $from, $sotin1trang";
        require("array_push.php");  
        //button phan trang
        echo '<div style="clear: both;margin-left: 90px;"> ';
          $x = "SELECT * FROM sanphamdb WHERE giatien>='$search_giatu' AND giatien<='$search_giaden'";
          require("php/timkiemnangcao/button_timkiemnangcao.php");
        echo '</div>';
      }
      else if(empty($search_giaden))
      {
        require("php/timkiemnangcao/phantrang_timkiemnangcao.php");
        $sql="SELECT * FROM sanphamdb WHERE loaisp='$search_phanloai' AND giatien>='$search_giatu' LIMIT $from, $sotin1trang";
        require("array_push.php");       
        //button phan trang
        echo '<div style="clear: both;margin-left: 90px;"> ';
          $x = "SELECT * FROM sanphamdb WHERE loaisp='$search_phanloai' AND giatien>='$search_giatu' ";
          require("php/timkiemnangcao/button_timkiemnangcao.php");
        echo '</div>';
      }
      else if(empty($search_giatu))
      {
        require("php/timkiemnangcao/phantrang_timkiemnangcao.php");
        $sql="SELECT * FROM sanphamdb WHERE loaisp='$search_phanloai' AND giatien<='$search_giaden' LIMIT $from, $sotin1trang";
        require("array_push.php");       
        //button phan trang
        echo '<div style="clear: both;margin-left: 90px;"> ';
          $x = "SELECT * FROM sanphamdb WHERE loaisp='$search_phanloai' AND giatien<='$search_giaden' ";
          require("php/timkiemnangcao/button_timkiemnangcao.php");
        echo '</div>';
      }
      else
      {
        require("php/timkiemnangcao/phantrang_timkiemnangcao.php");
        $sql="SELECT * FROM sanphamdb WHERE loaisp='$search_phanloai' AND giatien>='$search_giatu' AND giatien<='$search_giaden' LIMIT $from, $sotin1trang";
        require("array_push.php");
        
        //button phan trang
        echo '<div style="clear: both;margin-left: 90px;"> ';
          $x = "SELECT * FROM sanphamdb WHERE loaisp='$search_phanloai' AND giatien>='$search_giatu' AND giatien<='$search_giaden'";
          require("php/timkiemnangcao/button_timkiemnangcao.php");
        echo '</div>';
      }
?>  