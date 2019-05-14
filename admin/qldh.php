    			<div class="breadcrumb">
					<span><a href="index.php">Trang chủ</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý Đơn hàng</span>
				</div>
				<div class="section">
					<table id="table-dh">
						<thead>
							<tr>
								<th colspan="6" style="text-align: left;">DANH SÁCH ĐƠN HÀNG</th>
							</tr>
							<!-- <tr>
								<th colspan="3">Chọn ngày
									<input type="date" value="2016-07-22"><span> - </span><input type="date" value="2019-07-22">
								</th>
								<th colspan="3">Trạng thái
									<select id="trang_thai">
										<option value="Đã giao">Đã giao</option>
										<option value="Chưa giao">Chưa giao</option>
										<option value="Chưa liên lạc">Chưa liên lạc</option>
										<option value="all" selected>Tất cả</option>
									</select>
								</th>
							</tr> -->
							<tr>
								<th style="text-align: center;">STT</th>
								<th>Khách Hàng</th>
								<th>Thời Điểm Đặt Hàng</th>
								<th>Tổng Tiền</th>
								<th>Tình Trạng</th>
                            	<th>Thao tác</th>
							</tr>
						</thead>
						<?php
							$sql="SELECT * FROM donhang as d,thanhvien as t WHERE d.id_user=t.id_user ";
							$result = mysqli_query($con,$sql);
							$stt=1;
							while ($rows=mysqli_fetch_array($result)) {
						?>
						<tr style="height: 60px">
								<td><?php echo $stt++ ?></td>
								<td><?php echo $rows['hoten'] ?></td>
								<td><?php echo $rows['thoigian']?></td>
								<td><?php echo number_format($rows['tongtien'],0,".",".").' ₫' ?></td>
								<td>
									<?php
										switch ($rows['trangthai']) {
											case '0':
												echo "<a href='trangthai.php?id=".$rows['id']."' class='btn btn-danger' onclick='thanhcong();' data-toggle='tooltip' title='Ấn để thay đổi trạng thái đơn hàng'>Chưa xử lí</a>";
												break;
											case '1':
												echo "<a href='trangthai.php?id=".$rows['id']."' class='btn btn-warning' onclick='thanhcong();' data-toggle='tooltip' title='Ấn để thay đổi trạng thái đơn hàng'>Đã xử lí</a>";
												break;
											case '2':
												echo "<a href='trangthai.php?id=".$rows['id']."' class='btn btn-success' onclick='thanhcong();' data-toggle='tooltip' title='Ấn để thay đổi trạng thái đơn hàng'>Đã giao hàng</a>";
												break;
											case '-1':
												echo "<a href='trangthai.php?id=".$rows['id']."' class='btn btn-success' onclick='thanhcong();' data-toggle='tooltip' title='Ấn để thay đổi trạng thái đơn hàng' class='btn btn-success' style='background: #6E6E6E' >Đã hủy</a>";
												break;
											default:
											break;
										}
									?>
								</td>
								<td><?php echo "<a href='huydonhang.php?id=".$rows['id']."' class='btn btn-danger' data-toggle='tooltip' title='Hãy cân nhắc trước khi hủy'>Hủy</a>"?></td>
						</tr>
						<?php
							}
						?>	
					</table>
				</div>
			</div>
		</div>
    <!-- popup thong tin chi tiet don hang -->
		<div class="popup-themsp">
			<div class="popup-themsp__content">
				<div class="popup-themsp__title">Chi Tiết Đơn Hàng</div>
				<div class="popup-themsp-left">
					<div class="popup-themsp-left__label">Khách hàng</div>
					<div class="popup-themsp-left__label">Thời điểm đặt hàng</div>
					<div class="popup-themsp-left__label">Iphone XS MAX</div>
					<div class="popup-themsp-left__label">Tổng tiền</div>
					<div class="popup-themsp-left__label">Tình trạng</div>
				</div>
				<div class="popup-themsp-right">
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
				</div>
				<span class="back" onclick="close_popup_themsp()">&times;</span>
			</div>
		</div>
    <!-- popup sửa sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa Đơn Hàng</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">STT</div>
                <div class="popup-themsp-left__label">Khách Hàng</div>
                <div class="popup-themsp-left__label">Thời Điểm</div>
                <div class="popup-themsp-left__label">Tổng Tiền</div>
                <div class="popup-themsp-left__label">Tình Trạng</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="sua-user" type="text" readonly=""></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
                <div class="popup-themsp-left__input">
                	<select class="sua-user">
                		<option>Chưa giao</option>
                		<option>Đã giao</option>
                		<option>Chưa liên lạc</option>
                	</select>
                </div>
            </div>
            <button class="popup-themsp__btn" onclick="sua_thong_tin_don_hang()">Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
    <script type="text/javascript">
    	function thanhcong()
    	{
    		alert("Cập nhật thành công");
    	}
    	$(document).ready(function(){
    		$('[data-toggle="tooltip"]').tooltip(); 
    	});
    </script>    