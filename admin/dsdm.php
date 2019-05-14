<?php
include 'connection.php';
$sql="SELECT * FROM phanloai ";
$result = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($result)) {
	 	echo	   '<tr>
                     <td>'. $row['maloaisp'].'</td>
                      <td>' .$row['loaisanpham']. '</td>
                        
                        <td>
                            <button class="xoa_sp">Xóa</button><br>
                            <button class="sua_sp">Sửa</button>
                        </td>
                    </tr>';
	}
?>