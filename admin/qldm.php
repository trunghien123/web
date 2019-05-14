				<div class="breadcrumb">
					<span><a href="index.php">Trang chủ</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý danh mục</span>
				</div>
				<div class="section">
				<div class="them-sp" onclick="popup_themsp()"><button>Thêm Danh Mục</button></div>
				<table id="table-dm">
					<thead>
						<tr>
							<th style="text-align: center;">Mã loại sản phẩm</th>
							<th>Loại sản phẩm</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
					<?php
						include('dsdm.php');
					?>
					</tbody>
				</table>
			</div>
			</div>
		</div>

    <!-- popup thêm sp -->
    <div class="popup-themsp">
    	<form action="themdm.php" method="POST">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Thêm Danh Mục</div>
            <div class="popup-themsp-left" style="width: 30%">
                <div class="popup-themsp-left__label">Mã loại sản phẩm</div>
                <div class="popup-themsp-left__label">Loại sản phẩm</div>
            </div>
            <div class="popup-themsp-right" style="float: left;">
                <div class="popup-themsp-left__input"><input class="them-ten them-danh-muc" type="text" placeholder="Mã loại sản phẩm" id="maloai" name="maloai"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-danh-muc" type="text" placeholder="Loại sản phẩm" id="loai" name="loai"></div>
            </div>
            <input type="submit" class="popup-themsp__btn" name="submit" value="Thêm">
            <span class="back" onclick="close_popup_themsp()">&times;</span>
            </form>
        </div>
    </div>
    <!-- popup sửa sp -->
<script>
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