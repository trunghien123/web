<?php
$id=$_GET['id'];
$sql="select * from sanphamdb as s,chitietsanpham as c where s.id_ctsp=c.id_ctsp AND masp='$id'";
			$kq=mysqli_query($con,$sql);
			$sp=mysqli_fetch_array($kq);
			$masp=$sp["masp"];
			$tensp=$sp["tensp"];
			$giatien=$sp["giatien"];
			$loaisp=$sp["loaisp"];
			$hinhanh=$sp["hinhanh"];
			$id_ctsp=$sp["id_ctsp"];
            $matkinh=$sp["loaimatkinh"];
            $chatlieuday=$sp["chatlieuday"];
            $chatlieuvo=$sp["chatlieuvo"];
            $duongkinhmat=$sp["duongkinhmat"];
            $xuatxu=$sp["xuatxu"];
            $baohanh=$sp["baohanh"];
            $chongnuoc=$sp["chongnuoc"];
echo 
'<div class="popup-themsp1">
<form method="post" action="suasp.php" enctype="multipart/form-data">
        <div class="popup-themsp__content" style="width:60%;height:500px">
            <div class="popup-themsp__title">Sửa</div>
            <div class="popup-themsp-left" style="width:10%">
                <div class="popup-themsp-left__label">Nhập mã</div>
                <div class="popup-themsp-left__label">Nhập tên</div>
                <div class="popup-themsp-left__label">Nhập giá</div>
                <div class="popup-themsp-left__label">Chọn Hình</div>
                <div class="popup-themsp-left__label"></div>
                <div class="popup-themsp-left__label">Nhập Loại</div>
                <div class="popup-themsp-left__label">ID</div>
            </div>
            <div class="popup-themsp-right" style="float:left;width:30%">
                <div class="popup-themsp-left__input"><input class="them-ten them-mot-sp" type="text" name="ma" id="ma" value="' .$masp. '"></div>
                <div class="popup-themsp-left__input"><input class="them-gia them-mot-sp" type="text" name="ten" id="ten" value="'.$tensp.'"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-mot-sp" type="text" name="gia" id="gia" value="'.$giatien.'"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="file" name="file" id="file" value="'.$hinhanh.'"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="text" name="hinh" id="file" value="'.$hinhanh.'"></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="loai" id="loai" value="'.$loaisp.'"></div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" readonly="" type="text" name="id" id="id" value="'.$id_ctsp.'">
                </div>
                
            </div>
            <div class="popup-themsp-left" style="width:20%">
                <div class="popup-themsp-left__label">Loại mặt kính</div>
                <div class="popup-themsp-left__label">Chất liệu dây</div>
                <div class="popup-themsp-left__label">Chất liệu vỏ</div>
                <div class="popup-themsp-left__label">Đường kính mặt</div>
                <div class="popup-themsp-left__label">Thời gian bảo hành</div>
                <div class="popup-themsp-left__label">Chống nước</div>
                <div class="popup-themsp-left__label">Xuất xứ</div>
            </div>
            <div class="popup-themsp-right" style="float:left;width:20%">
                <div class="popup-themsp-left__input">
                    <input class="them-ten them-mot-sp" type="text" name="matkinh" id="matkinh" value="' .$matkinh. '">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-gia them-mot-sp" type="text" name="chatlieuday" id="chatlieuday" value="'.$chatlieuday.'">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-thu-tu them-mot-sp" type="text" name="chatlieuvo" id="chatlieuvo" value="'.$chatlieuvo.'">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-hinh them-mot-sp" type="text" name="duongkinhmat" id="duongkinhmat" value="'.$duongkinhmat.'">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="baohanh" id="baohanh" value="'.$baohanh.'">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="chongnuoc" id="chongnuoc" value="'.$chongnuoc.'">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="xuatxu" id="xuatxu" value="'.$xuatxu.'">
                </div>
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