
				<div class="breadcrumb">
					<span><a href="index.php">Trang chủ</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý người dùng</span>
				</div>
            <div class="section">
                <div class="them-sp" onclick="popup_themsp()"><button>Thêm người dùng</button></div>
                <table id="table-user">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Họ tên</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Hiệu lực</th>
                            <th>Quyền</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
						if(isset($_GET['b']))
						{
							if($_GET['b']=='qluser'){
								require "dsuser.php";
								}
						}
					?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    <!-- popup thêm sp -->
    <form action="themuser.php" method="POST">
    <div class="popup-themsp">
        <div class="popup-themsp__content" style="height: 550px">
            <div class="popup-themsp__title">Thêm người dùng</div>
            <div class="popup-themsp-left" style="width: 30%">
                <div class="popup-themsp-left__label">ID</div>
                <div class="popup-themsp-left__label">Tên đăng nhập</div>
                <div class="popup-themsp-left__label">Họ tên</div>
                <div class="popup-themsp-left__label">Địa chỉ</div>
                <div class="popup-themsp-left__label">emali</div>
                <div class="popup-themsp-left__label">Điện thoại</div>
                <div class="popup-themsp-left__label">Mật khẩu</div>
                <div class="popup-themsp-left__label">Hiệu lực</div>
                <div class="popup-themsp-left__label">Cấp quyền</div>
            </div>
            <div class="popup-themsp-right" style="float: left">
                <div class="popup-themsp-left__input"><input class="them-ten them-mot-sp" type="text" name="id" id="id" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-gia them-mot-sp" type="text" name="user" id="user" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-mot-sp" type="text" name="hoten" id="hoten" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="text" name="diachi" id="diachi" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="email" id="email" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="dt" id="dt" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="password" name="pass" id="pass" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="hieuluc" id="hieuluc" value=""></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" name="quyen" id="quyen" value="""></div>
            </div>
            <button class="popup-themsp__btn" onclick="them_mot_user()">Thêm</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
    </form>
    <!-- popup sửa sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa User</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">STT</div>
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label">Địa Chỉ</div>
                <div class="popup-themsp-left__label">SĐT</div>
                <div class="popup-themsp-left__label">Email</div>
                <div class="popup-themsp-left__label">Giới Tính</div>
                <div class="popup-themsp-left__label">Ngày Sinh</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="sua-user" type="text" readonly></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
            </div>
            <button class="popup-themsp__btn" onclick="sua_thong_tin_user()">Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
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
				if(isset($_GET['c'])) 
				{
					$c=$_GET["c"];
						
				switch($c){
					case "khoa":
						include('khoauser.php');
						break;	
					case "mo":
						include('mouser.php');
						break;
					case "sua":
						include('suauser.php');
						break;
					}
				}
?>