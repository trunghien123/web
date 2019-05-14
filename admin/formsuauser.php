<?php
$id=$_GET['id'];
$sql="select * from thanhvien where id_user='$id'";
			$kq=mysqli_query($con,$sql);
			$sp=mysqli_fetch_array($kq);
			$id=$sp["id_user"];
			$user=$sp["user"];
			$hoten=$sp["hoten"];
			$diachi=$sp["diachi"];
			$email=$sp["email"];
			$dt=$sp["dienthoai"];
			$hieuluc=$sp["hieuluc"];
			$capquyen=$sp["capquyen"];
echo
'<div class="popup-themsp1">
<form method="post" action="suauser.php">
        <div class="popup-themsp__content" style="height:480px">
            <div class="popup-themsp__title">Sửa</div>
            <div class="popup-themsp-left" style="width:30%">
                <div class="popup-themsp-left__label">ID</div>
                <div class="popup-themsp-left__label">Tên đăng nhập</div>
                <div class="popup-themsp-left__label">Họ tên</div>
                <div class="popup-themsp-left__label">Địa chỉ</div>
                <div class="popup-themsp-left__label">Email</div>
                <div class="popup-themsp-left__label">Điên thoại</div>
                <div class="popup-themsp-left__label">Quyền</div>
            </div>
            <div class="popup-themsp-right" style="float:left">
                <div class="popup-themsp-left__input"><input class="them-ten them-mot-sp" type="text" name="id" id="id" value="'.$id.'"></div>
                <div class="popup-themsp-left__input"><input class="them-gia them-mot-sp" type="text" name="user" id="user" value="'.$user.'"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-mot-sp" type="text" name="hoten" id="hoten" value="'.$hoten.'"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="text" name="diachi" id="diachi" value="'.$diachi.'"></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="email" id="email" value="'.$email.'"></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="dt" id="dt" value="'.$dt.'""></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="quyen" id="quyen" value="'.$capquyen.'""></div>
            </div>
            <input type="submit" class="popup-themsp__btn" name="submit" value="Sửa" id="submit">
            <span class="back" onclick="close_popup_themsp()">&times;</span>
 		 </div>

</form>
</div>
<script>
function close_popup_themsp() {
    document.getElementsByClassName("popup-themsp1")[0].style.display = "none";
    try {
        document.getElementsByClassName("popup-themsp1")[1].style.display = "none";
    } catch (e) {
        console.log("Đang ở trang Quản lý Đơn Hàng");
    }
}
</script>';

?>