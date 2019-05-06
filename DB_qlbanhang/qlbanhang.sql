-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2019 lúc 03:18 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id_ctsp` int(20) NOT NULL,
  `loaimatkinh` varchar(50) NOT NULL,
  `chatlieuday` varchar(50) NOT NULL,
  `chatlieuvo` varchar(50) NOT NULL,
  `duongkinhmat` varchar(50) NOT NULL,
  `xuatxu` varchar(50) NOT NULL,
  `baohanh` varchar(50) NOT NULL,
  `chongnuoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id_ctsp`, `loaimatkinh`, `chatlieuday`, `chatlieuvo`, `duongkinhmat`, `xuatxu`, `baohanh`, `chongnuoc`) VALUES
(1, 'Sapphire', 'Dây da cao cấp', 'Thép không gỉ ', '32.3mm', 'Nhật Bản', 'Bảo hành máy 1 năm, Pin 1 năm', '5ATM'),
(2, 'Kính cứng', 'Thép không gỉ 316L xi mạ theo công nghệ PVD', 'Thép không gỉ công nghệ PVD', '25.3mm', 'Hàn Quốc', 'Bảo hành máy 1 năm, Pin 2 năm', '5ATM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(50) NOT NULL,
  `tongtien` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `trangthai` varchar(255) DEFAULT NULL,
  `thoigian` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `tongtien`, `id_user`, `trangthai`, `thoigian`) VALUES
(1, 48950000, 2, NULL, '2019-05-05 08:29:14.077618');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
--

CREATE TABLE `phanloai` (
  `maloaisp` int(50) NOT NULL,
  `loaisanpham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phanloai`
--

INSERT INTO `phanloai` (`maloaisp`, `loaisanpham`) VALUES
(1, 'Casio'),
(2, 'Skagen'),
(3, 'Tissot'),
(4, 'OP'),
(5, 'Doxa'),
(6, 'Seiko'),
(7, 'G-shock'),
(8, 'Movado'),
(9, 'Candino'),
(10, 'Citizen'),
(11, 'Daniel Wellington');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamdb`
--

CREATE TABLE `sanphamdb` (
  `masp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `giatien` int(50) NOT NULL,
  `loaisp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_ctsp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanphamdb`
--

INSERT INTO `sanphamdb` (`masp`, `tensp`, `giatien`, `loaisp`, `hinhanh`, `id_ctsp`) VALUES
('ca1', 'Casio MTP-SW330L-1AV', 2800000, 'Casio', 'images/casio1.png', 1),
('ca2', 'Casio MTP-1239D-7ADF', 1180000, 'Casio', 'images/casio2.png', 2),
('ca3', 'Casio ESK-300D-7AVUDF', 5000000, 'Casio', 'images/casio3.png', 3),
('ca4', 'Casio EFV-540D-1AVUDF', 2562000, 'Casio', 'images/casio4.png', 4),
('ca5', 'Casio F-91WM-3ADF', 500000, 'Casio', 'images/casio5.png', 5),
('ca6', 'Casio AW-80D-7AVDF', 1000000, 'Casio', 'images/casio6.png', 6),
('ca7', 'Casio EFR-526D-1AVUDF', 3300000, 'Casio', 'images/casio7.png', 7),
('ca8', 'Casio EFR-552D-1A2VUDF', 3361000, 'Casio', 'images/casio8.png', 8),
('can1', 'Candino', 3222000, 'Candino', 'images/candino1.png', 9),
('ci1', 'Citizen BI5000-87L', 2450000, 'Citizen', 'images/citizen1.png', 10),
('ci2', 'Citizen AW1370-51M', 4830000, 'Citizen', 'images/citizen2.png', 11),
('ci3', 'Citizen BH3005-56E', 5100000, 'Citizen', 'images/citizen3.png', 12),
('do1', 'Doxa D212GBK', 43660000, 'Doxa', 'images/doxa1.png', 13),
('do10', 'Doxa D162SBY', 30100000, 'Doxa', 'images/doxa10.png', 14),
('do2', 'Doxa D220SGY', 37000000, 'Doxa', 'images/doxa2.png', 15),
('do3', 'Doxa D194SSD', 23740000, 'Doxa', 'images/doxa3.png', 16),
('do4', 'Doxa D141TWH', 37200000, 'Doxa', 'images/doxa4.png', 17),
('do5', 'Doxa D122SBK', 27120000, 'Doxa', 'images/doxa5.png', 18),
('do6', 'Doxa D211SBU', 43650000, 'Doxa', 'images/doxa6.png', 19),
('do7', 'Doxa D206SIY', 28620000, 'Doxa', 'images/doxa7.png', 20),
('do8', 'Doxa D206SGY', 28630000, 'Doxa', 'images/doxa8.png', 21),
('do9', 'Doxa D155SBR', 18420000, 'Doxa', 'images/doxa9.png', 22),
('dw1', 'Daniel Wellington', 5000000, 'Daniel Wellington', 'images/dw1.png', 23),
('gs1', 'G-Shock GG-1000-1A3DR', 4230000, 'G-shock', 'images/gshock1.png', 24),
('gs2', 'G-Shock AW-591GBX-1A4DR', 3200000, 'G-shock', 'images/gshock2.png', 25),
('gs3', 'G-Shock GST-S300BD-1ADR', 11200000, 'G-shock', 'images/gshock3.png', 0),
('gs4', 'G-Shock GBA-800-2A2DR', 4019000, 'G-shock', 'images/gshock4.png', 0),
('mo1', 'Movado 0607122', 27400000, 'Movado', 'images/movado1.png', 0),
('mo2', 'Movado 0606703', 34000000, 'Movado', 'images/movado2.png', 0),
('op1', 'OP 98023MCRS-T-21', 3380000, 'Op', 'images/op1.png', 0),
('op2', 'OP 5708MCRS-T', 2840000, 'Op', 'images/op2.png', 0),
('se1', 'Seiko SSA357J1', 10931000, 'Seiko', 'images/seiko1.png', 0),
('se2', 'Seiko SPB075J1', 40790000, 'Seiko', 'images/seiko2.png', 0),
('se3', 'Seiko SSA346J1', 17520000, 'Seiko', 'images/seiko3.png', 0),
('sk1', 'Skagen SKW6445', 5230000, 'Skagen', 'images/skagen1.png', 0),
('sk2', 'Skagen SKW6472', 5000000, 'Skagen', 'images/skagen2.png', 0),
('sk3', 'Skagen SKW6469', 4400000, 'Skagen', 'images/skagen3.png', 0),
('sk4', 'Skagen SKW6367', 3300000, 'Skagen', 'images/skagen4.png', 0),
('ti1', 'Tissot T006.407.36', 18830000, 'Tissot', 'images/tissot1.png', 0),
('ti2', 'Tissot T063.610.36', 10000000, 'Tissot', 'images/tissot2.png', 0),
('ti3', 'Tissot T109.610.16', 9999000, 'Tissot', 'images/tissot3.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamdonhang`
--

CREATE TABLE `sanphamdonhang` (
  `id_spdh` int(50) NOT NULL,
  `id_dh` int(50) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `giatien` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `thoigian` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanphamdonhang`
--

INSERT INTO `sanphamdonhang` (`id_spdh`, `id_dh`, `masp`, `giatien`, `soluong`, `thoigian`) VALUES
(1, 1, 'ca1', 2800000, 2, '2019-05-05 08:29:14.155775'),
(2, 1, 'ci1', 2450000, 3, '2019-05-05 08:29:14.221929'),
(3, 1, 'ca6', 1000000, 6, '2019-05-05 08:29:14.310905'),
(4, 1, 'ti2', 10000000, 3, '2019-05-05 08:29:14.422322');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_user` int(50) NOT NULL,
  `user` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `hieuluc` int(10) NOT NULL,
  `capquyen` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id_user`, `user`, `hoten`, `diachi`, `email`, `dienthoai`, `pass`, `hieuluc`, `capquyen`) VALUES
(1, 'trungh3', 'trung hiá»ƒn', '6', 'hienhuynh076@gmail.com', '0925351662', '4297f44b13955235245b2497399d7a93', 1, 3),
(2, 'trungh', 'huá»³nh trung hiá»ƒn', '6', 'hienhuynh076@gmail.com', '0925351662', '4297f44b13955235245b2497399d7a93', 1, 3),
(3, 'trungha', 'huá»³nh trung hiá»ƒn', '6', 'hienhuynh076@gmail.com', '0925351662', '4297f44b13955235245b2497399d7a93', 1, 3),
(4, '123abc', 'huá»³nh trung hiá»ƒn', '6', 'hienhuynh076@gmail.com', '0925351662', '4297f44b13955235245b2497399d7a93', 1, 3),
(5, 'trungh123', 'huá»³nh trung hiá»ƒn', '6', 'hienhuynh076@gmail.com', '0925351662', '4297f44b13955235245b2497399d7a93', 1, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_ctsp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `sanphamdb`
--
ALTER TABLE `sanphamdb`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `sanphamdonhang`
--
ALTER TABLE `sanphamdonhang`
  ADD PRIMARY KEY (`id_spdh`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  MODIFY `maloaisp` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sanphamdonhang`
--
ALTER TABLE `sanphamdonhang`
  MODIFY `id_spdh` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
