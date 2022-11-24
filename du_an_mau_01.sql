-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 06:54 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_mau_01`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung_bl` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `date_bl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `name_dm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name_dm`) VALUES
(1, 'Trà sữa'),
(2, 'Fresh Fruit'),
(4, 'Macchiato Cream Cheese'),
(5, 'Sữa Chua Đào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `address_user` varchar(255) NOT NULL,
  `phone_user` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_user`, `name_user`, `pass_user`, `email_user`, `address_user`, `phone_user`, `role`) VALUES
(1, 'tien', 'abc123', 'tiendkph20777@fpt.edu.vn', '', 332573175, 0),
(2, 'tien18', 'tien18', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `name_sp` varchar(255) NOT NULL,
  `price_sp` int(11) NOT NULL,
  `img_sp` varchar(255) NOT NULL,
  `mota_sp` text NOT NULL,
  `luotxem_sp` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `name_sp`, `price_sp`, `img_sp`, `mota_sp`, `luotxem_sp`, `id_dm`) VALUES
(1, 'Ô Long Xoài Kem Cà Phê', 49000, 'O-Long-xoai-kem-coffee[1].jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\n\n?Và giờ anh biết chuyện tình mình chẳng còn gì\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\n\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\n\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\n\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 1),
(2, 'Trà Đào Hồng Trân Châu', 38000, 'Tra-dao-buoi-hong-tran-chau-baby[1].jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 5),
(3, 'Instant Milk Tea - Strawberry', 155000, '6ly_hong[1].png', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 5),
(4, 'Instant Milk Tea - Original', 144000, '6ly_vang[1].png', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 5),
(5, 'Trà Đào Hồng Trân Châu', 123000, 'tải xuống (1).jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 1),
(6, 'Sữa Chua Đào', 110000, 'tải xuống (2).jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 1),
(7, 'Macchiato Cream Cheese', 50000, 'tải xuống (3).jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 1),
(8, 'Macchiato Cream Cheese', 50000, 'tải xuống (3).jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️\r\n\r\n?Và giờ anh biết chuyện tình mình chẳng còn gì\r\n??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN\r\n\r\n✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ?\r\n?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ??\r\n\r\n♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ??\r\n\r\n?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 1),
(9, 'trà hồng đào trân châu', 15000, 'tải xuống (4).jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️ ?Và giờ anh biết chuyện tình mình chẳng còn gì ??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN ✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ? ?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ?? ♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ?? ?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 2),
(10, 'trà sữa chanh leo', 60000, 'tải xuống (5).jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️ ?Và giờ anh biết chuyện tình mình chẳng còn gì ??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN ✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ? ?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ?? ♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ?? ?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 4),
(11, 'Macchiato Cream Cheese', 40000, 'anh-pha-tra-sua-dep_062227481.jpg', '⭐️⭐️TRÀ Ô LONG XOÀI KEM MẶN⭐️⭐️ ?Và giờ anh biết chuyện tình mình chẳng còn gì ??Khi đó thu sang em thèm TRÀ ÔLONG XOÀI KEM MẶN ✨Là sự kết hợp hoàn hảo của vị trà chát nhẹ ?và hương thơm quyến rũ của xoài chín vàng ??thêm lớp kem mặn béo ngậy cực đỉnh ? ?Nhà Cảm Xúc? chắc chắn rằng thức uống này sẽ chiếm trọn trái tim bạn mỗi độ thu về ?? ♥️ Đặc biệt, chỉ với giá từ 40K bạn đã có thể rinh em nó liền tay rồi ?? ?Nào hãy gọi ngay hội chị em bạn dì ra Feeling Tea thử vội món đồ uống này đi thôiiiii?', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `lk_binhluan_sanpham` (`id_sp`),
  ADD KEY `lk_binhluan_khachhang` (`id_user`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `lk_sanpham_danhmuc` (`id_dm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_khachhang` FOREIGN KEY (`id_user`) REFERENCES `khachhang` (`id_user`),
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
