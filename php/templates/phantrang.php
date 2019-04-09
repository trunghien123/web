<?php
      $sotin1trang = 8;
      if(isset($_GET['trang']))
      {
        $trang = $_GET['trang'];
      }
      if(!isset($_GET['trang'])||$_GET['trang']<1 || $_GET['trang']>7)
      {
        $trang =1;
      }
      $from = ($trang -1 )* $sotin1trang;
      $sql="SELECT * FROM sanphamdb LIMIT $from, $sotin1trang";
      require("array_push.php");
?>
