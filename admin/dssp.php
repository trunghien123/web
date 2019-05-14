<?php
include 'connection.php';
$sql="SELECT * FROM sanphamdb ";
$result = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($result)) {
  		echo		"<tr>".
        	           '<td>' .$row["id_ctsp"]. '</td>'.
                        '<td><img src="../' .$row["hinhanh"].'" width="110px"></td>'.
                        '<td>'  .$row["tensp"].  '</td>
                        <td>' . number_format($row["giatien"],0,".",".").' ₫</td>
                        <td>' . $row["loaisp"] . '</td>
                        <td>' . $row['masp'] . '</td>
                        <td>' . 1 . '</td>
                       <td>'.
                            "<button class='xoa_sp'><a href='index.php?b=qlsp&id=".$row['id_ctsp']."&c=delete'>Xóa</a></button><br>
                           <button class='sua_sp'><a href='index.php?b=qlsp&id=".$row['masp']."&c=sua'>Sửa</button>
                       </td>
                    </tr>";
   }
?>