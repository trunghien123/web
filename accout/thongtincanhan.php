<?php
$user=$_SESSION["user"];
$sql="select * from thanhvien where user='$user'";
$kq=mysqli_query($con,$sql);
$r=mysqli_fetch_array($kq);
$hoten=$r["hoten"];$email=$r["email"];$diachi=$r["diachi"];$dienthoai=$r["dienthoai"];
?>
<table width="560" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="border:1px solid #CCC;">
          <tr>
            <td height="35" colspan="2" align="center" class="tieude"><div align="center"><b>THÔNG TIN CÁ NHÂN CỦA KHÁCH HÀNG</b> <strong style="color: red"><?php echo $user ?></strong></div></td>
          </tr>
		  <tr bgcolor="#f9f9f9" onmouseover="style.background='#d4340c'" onmouseout="style.background='#F9F9F9'">  
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px;font-weight: bold;">Tên đăng nhập:</div></td>
 			<td width="405" style="padding-left:15px" align="left">
                <?php echo "$user"?>                   				
              </td>            
          </tr>
          <tr onmouseover="style.background='#d4340c'" onmouseout="style.background='#FFFFFF'">            
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px;font-weight: bold;">Họ tên:</div></td>
     		<td width="405" style="padding-left:15px">
       		  <?php echo "$hoten"; ?></td>            
          </tr>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#d4340c'" onmouseout="style.background='#F9F9F9'">            
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px;font-weight: bold;">Email:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <?php echo "$email"; ?>
              </div></td>            
          </tr>
          <tr onmouseover="style.background='#d4340c'" onmouseout="style.background='#FFFFFF'">   
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px;font-weight: bold;">Địa chỉ:</div></td>
 			<td width="405" style="padding-left:15px">
             <div align="left">
			<?php echo "$diachi"; ?>
            </div>
              </td>            
          </tr>       
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#d4340c'" onmouseout="style.background='#F9F9F9'">            
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px;font-weight: bold;">Điện thoại:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <?php echo "$dienthoai"; ?>
              </div></td>            
          </tr>
          <tr>
            <td height="35" colspan="2" align="center" bgcolor="#d4340c">
              <div align="right" style="padding-right:10px">
              <a href="index.php?b=change"><font color="#FFFFFF">Thay đổi thông tin cá nhân</font></a>
              <input type="hidden" name="act"/>
            </div></td>
          </tr>
        </table></br>