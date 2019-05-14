
<?php
include 'connection.php';
$sql="SELECT * FROM thanhvien ";
$result = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($result)) {
	   	$id=$row['id_user'];
		$user=$row['user'];
		$hoten=$row['hoten'];
		$diachi=$row['diachi'];
		$email=$row['email'];
		$dt=$row['dienthoai'];
  		$hieuluc=$row['hieuluc'];
		$quyen=$row['capquyen'];
		echo		"<tr>
                        <td>  $id  </td>
                        <td>  $user </td>
                        <td>  $hoten </td>
                        <td> $diachi </td>
                        <td> $email</td>
                        <td> $dt </td>
                        <td> $hieuluc </td>
                        <td> $quyen </td>
						<td>".
                            "<button class='xoa_sp'><a href='index.php?b=qluser&id=".$row['id_user']."&c=khoa'>Khóa</a></button><br>
							<button class='xoa_sp'><a href='index.php?b=qluser&id=".$row['id_user']."&c=mo'>Mở</a></button><br>
                           	<button class='sua_sp'><a href='index.php?b=qluser&id=".$row['id_user']."&c=sua'>Sửa</button>
                       </td>
                    </tr>";
   }
?>