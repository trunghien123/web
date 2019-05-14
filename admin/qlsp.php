           <div class="breadcrumb">
                <span><a href="index.php">Trang chủ</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý sản phẩm</span>
            </div>
            <div class="section">
                <div class="them-sp"><button onclick="popup_themsp()">Thêm Sản Phẩm</button></div>
                <table id="table-sp">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Loại</th>
                            <th>Mã</th>
                            <th>Hiển Thị</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php 
						require('dssp.php');
					?>
                </table>
            </div>
        </div>
    </div>
    <!-- popup thêm sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content" style="width:60%;height:500px">
            <div class="popup-themsp__title">Thêm Sản Phẩm</div>
            <div class="popup-themsp-left" style="width:10%">
                <div class="popup-themsp-left__label">Nhập mã</div>
                <div class="popup-themsp-left__label">Nhập tên</div>
                <div class="popup-themsp-left__label">Nhập giá</div>
                <div class="popup-themsp-left__label">Chọn Hình</div>
                <div class="popup-themsp-left__label">Nhập Loại</div>
                <div class="popup-themsp-left__label">ID</div>
            </div>
            <div class="popup-themsp-right" style="float:left;width:30%">
            	<form action="themsp.php" method="post" enctype="multipart/form-data">
                <div class="popup-themsp-left__input"><input class="them-ten them-mot-sp" type="text" name="ma" id="ma"></div>
                <div class="popup-themsp-left__input"><input class="them-gia them-mot-sp" type="text" name="ten" id="ten"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-mot-sp" type="text" name="gia" id="gia"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="file" name="file" id="file"></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="loai" id="loai"></div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="id" id="id">
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
                    <input class="them-ten them-mot-sp" type="text" name="matkinh" id="matkinh">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-gia them-mot-sp" type="text" name="chatlieuday" id="chatlieuday">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-thu-tu them-mot-sp" type="text" name="chatlieuvo" id="chatlieuvo">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-hinh them-mot-sp" type="text" name="duongkinhmat" id="duongkinhmat">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="baohanh" id="baohanh">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="chongnuoc" id="chongnuoc">
                </div>
                <div class="popup-themsp-left__input">
                    <input class="them-loai them-mot-sp" type="text" name="xuatxu" id="xuatxu">
                </div>
            </div>
            <input type="submit" class="popup-themsp__btn" name="submit" value="Thêm">
            <span class="back" onclick="close_popup_themsp()">&times;</span>
            </form>
        </div>
    </div>
    
    <!-- popup sửa sp -->
<script >
function popup_themsp() {
    document.getElementsByClassName('popup-themsp')[0].style.display = 'block';
}
function close_popup_themsp() {
    document.getElementsByClassName('popup-themsp')[0].style.display = 'none';
    try {
        document.getElementsByClassName('popup-themsp')[1].style.display = 'none';
    } catch (e) {
        console.log("Đang ở trang Quản lý Đơn Hàng");
    }
}

</script>
<?php
				if(isset($_GET["c"])) 
				{
					$c=$_GET["c"];
						
				switch($c){
					case "delete":
						include('xoasp.php');
						break;	

					}
				}
?>