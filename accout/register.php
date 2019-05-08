<?php
$act=""; $hoten=""; $diachi=""; $email="";$dienthoai="";$user="";;
if(isset($_POST["act"]))
{
	include "connection.php";
	$hoten=$_POST["hoten"];
	$hoten=EncodeSpecialChar($hoten);
	$diachi=$_POST["diachi"];
	$diachi=EncodeSpecialChar($diachi);	
	$email=$_POST["email"];
	$email=EncodeSpecialChar($email);
	$dienthoai=$_POST["dienthoai"];
	$dienthoai=EncodeSpecialChar($dienthoai);	
	$user=$_POST["user"];
	$user=EncodeSpecialChar($user);	
	$pass=md5($_POST["pass"]);
		{    
    	$sql="insert into thanhvien(hoten,diachi,email,dienthoai,user,pass,hieuluc,capquyen) values('$hoten','$diachi','$email','$dienthoai','$user','$pass',1,3)";
		$kq=mysqli_query($con,$sql);
		if(!$kq)
		{
			echo "<script>alert('Có lỗi SQL! Nhập lại!');</script>";		
		}
		else 
		{
			echo "<script>alert('Chúc mừng $user! Quý khách đã đăng ký thành công! ');window.location='index.php';</script>";
		}	
	}
}
?>
<script type="text/javascript" src="js/quanli.js"></script>
<script language="javascript">
function createXMLHttp()
    {
        var xmlHttp =false;
        try{
          xmlHttp = new XMLHttpRequest();
        }
        catch(e)
        {
          xmlHttp = new ActiveXObject("Microsoft.XMLHttp");
        }
        if (!xmlHttp)
        {
          alert("Loi ...");
        }
        else
        {
          return xmlHttp;
        
        }
    
    }
    
        
var xmlHttp = new createXMLHttp();
function process()
{
  if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
  { 
    tendangnhap = encodeURIComponent(document.getElementById("user").value);
    xmlHttp.open("GET", "accout/kt-user.php?user=" + tendangnhap, true);
    xmlHttp.onreadystatechange = handleServerResponse;
    xmlHttp.send(null);
  }
}

function handleServerResponse()
{
  if (xmlHttp.readyState == 4)
  {
    if (xmlHttp.status == 200)
    {
		ResponseText =xmlHttp.responseText;
		document.getElementById("kqkiemtra").innerHTML = '<i>' + ResponseText + '</i>';
	}
    else
    {
      alert("There was a problem accessing the server: " + xmlHttp.statusText);
    }
  }
}
</script>
<div align="center">
<form method="post" onSubmit="return thanhvien_insert(user.value,pass.value,apass.value,hoten.value,email.value,diachi.value,dienthoai.value,anti.value);" id="formthanhvien" name="formthanhvien">
      <table width="660px" cellspacing="0" cellpadding="0" border="0" style="border:1px solid #222222;">
          <tr>
            <td height="35" colspan="2" align="center" style="background: #222222; color: #9d9d9d; font-size: 23px;">
              <div align="center">ĐĂNG KÝ THÀNH VIÊN</div>
            </td>
          </tr>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#F9F9F9'">  
            <td height="50" style="padding-left:70px"><div align="left" style="width:120px;font-weight:bold">Tên đăng nhập:</div></td>
            <td width="405" style="padding-left:8px" align="left">
              <input type="text" name="user" id="user" style="width:220px" value="<?php echo "$user"; ?>" onBlur="process()" />   
              <font color="#FF0000">* </font>
              <div id="kqkiemtra" style="color:#ff0000;"></div>
            </td>            
          </tr>
          <tr onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#FFFFFF'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px;font-weight:bold">Mật khẩu:</div></td>
            <td width="405" style="padding-left:8px">
              <div align="left">
                <input type="password" name="pass" style="width:220px" />
                <font color="#FF0000">*</font>
              </div>
            </td>            
          </tr>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#F9F9F9'">  
            <td height="30" style="padding-left:70px"><div align="left" style="width:130px;font-weight:bold">Nhập lại mật khẩu:</div></td>
            <td width="405" style="padding-left:8px">
              <div align="left">
                <input type="password" name="apass" style="width:220px"/>
                <font color="#FF0000">*</font>
              </div>
            </td>            
          </tr>
          <tr onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#FFFFFF'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px;font-weight:bold">Họ tên:</div></td>
            <td width="405" style="padding-left:8px">
             <div align="left">
               <input type="text" name="hoten" style="width:220px" value="<?php echo "$hoten"; ?>"/>
               <font color="#FF0000">*</font>
             </div>
           </td>            
          </tr>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#F9F9F9'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px;font-weight:bold">Email:</div></td>
            <td width="405" style="padding-left:8px">
              <div align="left">
                <input type="text" name="email" style="width:220px" value="<?php echo "$email"; ?>"/>
                <font color="#FF0000">*</font>
              </div>
            </td>            
          </tr>
          <tr onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#FFFFFF'">   
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px;font-weight:bold">Địa chỉ:</div></td>
            <td width="405" style="padding-left:8px" valign="top" align="left">              
              <textarea name="diachi" rows="6" style="width:220px;resize: none;"><?php echo "$diachi"; ?></textarea>
              <font color="#FF0000">*
                <input type="hidden" name="anti" style="width:1px">
              </font>
            </td>            
          </tr>       
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#9d9d9d'" onmouseout="style.background='#F9F9F9'">            
            <td height="30" style="padding-left:70px">
              <div align="left" style="width:120px; font-weight: bold;">Điện thoại:
            </div>
            </td>
            <td width="405" style="padding-left:8px">
              <div align="left">
                <input type="text" name="dienthoai" style="width:220px" value="<?php echo "$dienthoai"; ?>" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')"/>
                <font color="#FF0000">*</font>
              </div>
            </td>            
          </tr>
          <tr>
            <td height="35" colspan="2" align="center" >
              <div align="center">
                <input type="submit" value="Đăng ký" class="button">
                <input type="reset" value="Nhập lại" class="button">	
                <input type="hidden" name="act"/>
              </div>
            </td>
          </tr>
      </table></br>
</form>
</div>    