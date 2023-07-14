-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2023 lúc 12:53 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onplaza`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `ma_category` varchar(50) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_category`, `ma_category`, `name_category`) VALUES
(1, 'nhansam', 'Nhân Sâm Hàn Quốc'),
(2, 'dongtrung', 'Đông Trùng Hạ thảo'),
(3, 'namlinhchi', 'Nấm Linh Chi Hàn Quốc'),
(4, 'yensao', 'Yến Sào Khánh Hòa'),
(5, 'nhunghuou', 'Nhung Hươu'),
(6, 'ancungnguu', 'An Cung Ngưu'),
(7, 'tinhdau', 'Tinh Dầu Thông Đỏ'),
(8, 'matong', 'Mật Ong Nguyên Chất'),
(9, 'khoangchat', 'Khoáng Chất - Vitamin'),
(11, 'sam', 'Sâm Ngọc Linh'),
(12, 'sam', 'Sâm Lai Châu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `ma_portfolio` varchar(50) NOT NULL,
  `name_portfolio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `id_category`, `ma_portfolio`, `name_portfolio`) VALUES
(3, 1, 'nhansam', 'Nhân Sâm 6 Năm Tuổi'),
(4, 1, 'hongsam', 'Hồng Sâm Hàn Quốc'),
(5, 1, 'hongsam', 'Hồng Sâm Củ Khô'),
(6, 1, 'hongsam', 'Cao Hồng Sâm'),
(7, 1, 'hongsam', 'Nước Hồng Sâm'),
(8, 1, 'hongsam', 'Sâm Tẩm Mật Ong'),
(9, 1, 'hongsam', 'Viên Hồng Sâm'),
(10, 1, 'hongsam', 'Kẹo Sâm'),
(11, 1, 'nhansam', 'Hồng SÂM Baby'),
(12, 1, 'hongsam', 'Trà Sâm'),
(13, 1, 'ruou', 'Rượu Sâm Hàn Quốc'),
(14, 2, 'dongtrung', 'Dông Trùng Tây Tạng'),
(15, 2, 'dongtrung', 'Nấm Đông Trung Hạ Thảo'),
(16, 2, 'dongtrung', 'Viên Đông Trùng Hạ Thảo'),
(17, 2, 'dongtrung', 'Nước Đông Trùng Hạ Thảo'),
(18, 3, 'namlinhchi', 'Nấm Linh Chi Vàng'),
(19, 3, 'namlinhchi', 'Trà Nấm Linh Chi'),
(20, 3, 'namlinhchi', 'Nấm Linh Chi Đỏ'),
(21, 3, 'namlinhchi', 'Cao Nấm Linh Chi'),
(22, 3, 'namlinhchi', 'Nấm Linh Chi Thượng Hoàng'),
(23, 3, 'namlinhchi', 'Nấm Linh Chi Thái Lát'),
(24, 3, 'namlinhchi', 'Nấm Lim Xanh'),
(25, 4, 'yensao', 'Tổ Yến Thô'),
(26, 4, 'yensao', 'Yến Sơ Chế Nguyên Tổ'),
(27, 4, 'yensao', 'Yến Tinh Chế Nguyên Tổ'),
(28, 4, 'yensao', 'Yến Hồng Nguyên Tổ'),
(29, 4, 'yensao', 'Yến Huyết Nguyên Tổ'),
(30, 4, 'yensao', 'Nước Yến Sanest'),
(31, 5, 'nhunghuou', 'Nhung Hươu Tươi'),
(32, 5, 'nhunghuou', 'Cao Ban Long'),
(33, 5, 'nhunghuou', 'Nhung Hươu Khô Thái Lát'),
(34, 5, 'nhunghuou', 'Viên Nhung Hươu'),
(35, 5, 'nhunghuou', 'Bột Nhung Hươu'),
(36, 5, 'nhunghuou', 'Đầu Hươu Mỹ Nghệ'),
(37, 6, 'ancungnguu', 'An Cung Ngưu Trung Quốc'),
(38, 6, 'ancungnguu', 'An Cung Ngưu Hàn Quốc'),
(39, 7, 'tinhdauthongdo', 'Tinh Dầu Thông Đỏ'),
(40, 8, 'matong', 'Mật Ong Rừng'),
(41, 8, 'matong', 'Sữa Ong Chúa'),
(42, 8, 'matong', 'Phấn Hoa'),
(43, 9, 'khoangchat', 'Khoáng Chất - Vitamin'),
(44, 11, 'samngoclinh', 'Rượu Sâm Ngọc Linh'),
(45, 11, 'samngoclinh', 'Sâm Ngọc Linh Mật Ong'),
(46, 11, 'samngoclinh', 'Sâm Ngọc Linh Tự Nhiên'),
(47, 11, 'samngoclinh', 'Sâm Ngọc Linh Trồng'),
(48, 11, 'samngoclinh', 'Trà Sâm Ngọc Linh'),
(50, 12, 'samlaichau', 'Sâm Lai Châu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_portfolio` int(11) NOT NULL,
  `ma_product` varchar(50) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `price1` int(11) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `specifications` varchar(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `image_product` varchar(255) NOT NULL,
  `des1` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_portfolio`, `ma_product`, `name_product`, `price`, `price1`, `origin`, `specifications`, `img`, `image_product`, `des1`, `description`) VALUES
(7, 3, 'NS004', 'SÂM TƯƠI HÀN QUỐC CAO CẤP LOẠI 6 CỦ/KG NS004', 3570000, 2200000, '(Korea) Hàn Quốc', '6 củ/kg', 'SÂM TƯƠI HÀN QUỐC CAO CẤP NS004.png', 'SÂM TƯƠI HÀN QUỐC CAO CẤP.png', '                                                                                                                        g                                                                                                                                              ', '<p><a href=\"https://onplaza.vn/sam-tuoi-han-quoc-cao-cap-6-cu-kg-ns004/\">S&acirc;m tươi H&agrave;n Quốc cao cấp loại 6 củ/kg</a>l&agrave; những<strong>củ s&acirc;m đủ 6 năm tuổi</strong>&nbsp;được lấy trực tiếp tại v&ugrave;ng trồng s&acirc;m nổi tiếng bậc nhất H&agrave;n Quốc- v&ugrave;ng n&uacute;i Geumsan. Với h&igrave;nh thực hộp s&acirc;m gồm 6 củ 6 năm tuổi như thế n&agrave;y, ngo&agrave;i việc mua loại&nbsp;<a href=\"https://onplaza.vn/gia-nhan-sam-han-quoc\">s&acirc;m H&agrave;n</a>&nbsp;n&agrave;y về với mục đ&iacute;ch sử dụng để chăm s&oacute;c sức khỏe, kh&aacute;ch h&agrave;ng cũng c&oacute; thể d&ugrave;ng l&agrave;m qu&agrave; biếu tặng sếp, người th&acirc;n, bạn b&egrave;.</p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 \" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004.jpg\" style=\"height:700px; width:700px\" /></strong></p>\r\n\r\n<h2><strong>Đặc điểm của nh&acirc;n s&acirc;m tươi H&agrave;n Quốc 6 củ/kg&nbsp;</strong></h2>\r\n\r\n<p>Sản phẩm s&acirc;m tươi&nbsp;n&agrave;y được đ&oacute;ng trong hộp gồm 6 củ to, h&igrave;nh thức s&acirc;m đẹp, nhiều rễ, số tuổi s&acirc;m được quy định v&agrave; nhận biết ngay tại phần th&acirc;n củ ( người mua c&oacute; thể kiểm tra độ ch&iacute;nh x&aacute;c bằng c&aacute;ch kiểm tra sản phẩm ngay khi vừa nhận được h&agrave;ng, mỗi mắt tương tr&ecirc;n th&acirc;n củ tương đương với 1 tuổi).&nbsp;</p>\r\n\r\n<p>- 1 hộp bao gồm 6 củ n&ecirc;n nếu muốn tiết kiệm, kh&aacute;ch h&agrave;ng c&oacute; thể chia l&agrave;m hai hộp (mỗi hộp 3 củ) để mang đến biếu tặng, hộp qu&agrave; vừa sang, vừa &yacute; nghĩa.&nbsp;</p>\r\n\r\n<p>- 1 hộp 6 củ cũng vừa đủ số lượng củ để ng&acirc;m trong b&igrave;nh thủy tinh khoảng 41L tạo vật trưng b&agrave;y v&agrave; trang tr&iacute;.&nbsp;</p>\r\n\r\n<p>- Như vậy, nếu người mua mua loại s&acirc;m 6 củ/kg sẽ kh&ocirc;ng cần phải mua lẻ th&ecirc;m củ s&acirc;m kh&aacute;c để ng&acirc;m m&agrave; vẫn c&oacute; thể tạo d&aacute;ng một b&igrave;nh ng&acirc;m s&acirc;m đẹp mắt&hellip;</p>\r\n\r\n<p>Ngo&agrave;i ra, c&ograve;n c&oacute; những loại s&acirc;m kh&aacute;c như s&acirc;m 10-12 củ 1 kg d&ugrave;ng để hầm g&agrave; hoặc nấu canh hoặc c&aacute;c loại s&acirc;m tươi 2 củ, 3 củ, 4 củ,... tr&ecirc;n 6 năm tuổi, th&acirc;n củ to, d&aacute;ng đẹp th&iacute;ch hợp mang l&agrave;m qu&agrave; biếu tặng hoặc d&ugrave;ng để ng&acirc;m rượu. Xem gi&aacute; mới nhất tại b&agrave;i viết:&nbsp;<a href=\"https://onplaza.vn/nhan-sam-tuoi\">[Gi&aacute; Nh&acirc;n S&acirc;m Tươi H&agrave;n Quốc] loại 3, 4, 5, 6 củ 1kg</a></p>\r\n\r\n<p>Tại cửa h&agrave;ng b&aacute;n s&acirc;m tươi&nbsp;On Plaza, ch&uacute;ng t&ocirc;i nhận ng&acirc;m ruou, ng&acirc;m mật ong v&agrave; th&aacute;i l&aacute;t s&acirc;m tươi miễn ph&iacute;, sẵn s&agrave;ng phục vụ c&aacute;c kh&aacute;ch h&agrave;ng. Cam kết đền gấp 10 lần nếu ph&aacute;t hiện s&acirc;m giả, s&acirc;m nh&aacute;i, s&acirc;m k&eacute;m chất lượng. NHẬN GIAO H&Agrave;NG TẬN NƠI TR&Ecirc;N TO&Agrave;N QUỐC, ĐẢM BẢO S&Acirc;M VẪN TƯƠI V&Agrave; NGUY&Ecirc;N D&Aacute;NG BAN ĐẦU.&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>Loại s&acirc;m nhỏ&nbsp;thường để ng&acirc;m mật ong&nbsp;l&agrave; loại s&acirc;m 8 củ / 1kg c&aacute;c bạn c&oacute; thể&nbsp;<a href=\"https://onplaza.vn/nhan-sam-tuoi-han-quoc-8-cukg-ns006/\">tham khảo th&ecirc;m tại đ&acirc;y&nbsp;</a></p>\r\n</blockquote>\r\n\r\n<p><strong><em>**&nbsp;<u>Lưu &yacute;</u>:&nbsp;</em></strong></p>\r\n\r\n<p><strong><em>- Sản phẩm kh&ocirc;ng phải l&agrave; thuốc kh&ocirc;ng c&oacute; t&aacute;c dụng thay thế thuốc chữa bệnh.</em></strong></p>\r\n\r\n<p><strong><em>-&nbsp;T&aacute;c dụng của sản phẩm c&oacute; thể thay đổi t&ugrave;y theo t&igrave;nh trạng cơ địa của mỗi người.</em></strong></p>\r\n\r\n<p><em><strong>CẢNH B&Aacute;O MUA PHẢI S&Acirc;M NON, S&Acirc;M K&Eacute;M CHẤT LƯỢNG TR&Ecirc;N THỊ TRƯỜNG</strong></em></p>\r\n\r\n<p><img alt=\"Cam kết onplaza\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/nhan-biet-sam-tot/cam-ket-onplaza.jpg\" style=\"height:200px; width:700px\" /></p>\r\n\r\n<p><strong>Mẹo nhận biết nh&acirc;n s&acirc;m tươi H&agrave;n Quốc đủ 6 năm tuổi:&nbsp;</strong></p>\r\n\r\n<p><img alt=\"Đặc điểm nhận biết nhân sâm tươi Hàn Quốc chất lượng tốt 1\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/nhan-biet-sam-tot/dac-diem-nhan-biet-nhan-sam-tuoi-han-quoc-chat-luong-tot_01.jpg\" style=\"height:609px; width:700px\" /></p>\r\n\r\n<p><img alt=\"Đặc điểm nhận biết nhân sâm tươi Hàn Quốc chất lượng tốt 2\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/nhan-biet-sam-tot/dac-diem-nhan-biet-nhan-sam-tuoi-han-quoc-chat-luong-tot_02.jpg\" style=\"height:758px; width:700px\" /></p>\r\n\r\n<p><img alt=\"Đặc điểm nhận biết nhân sâm tươi Hàn Quốc chất lượng tốt 3\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/nhan-biet-sam-tot/dac-diem-nhan-biet-nhan-sam-tuoi-han-quoc-chat-luong-tot_03.jpg\" style=\"height:770px; width:700px\" /></p>\r\n\r\n<p><img alt=\"Đặc điểm nhận biết nhân sâm tươi Hàn Quốc chất lượng tốt 4\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/nhan-biet-sam-tot/dac-diem-nhan-biet-nhan-sam-tuoi-han-quoc-chat-luong-tot_04.jpg\" style=\"height:1008px; width:700px\" /></p>\r\n\r\n<p><img alt=\"Đặc điểm nhận biết nhân sâm tươi Hàn Quốc chất lượng tốt 5\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/nhan-biet-sam-tot/dac-diem-nhan-biet-nhan-sam-tuoi-han-quoc-chat-luong-tot_05.jpg\" style=\"height:769px; width:700px\" /></p>\r\n\r\n<p><em><strong>- Quan s&aacute;t b&ecirc;n ngo&agrave;i:</strong></em>nếu l&agrave; nh&acirc;n s&acirc;m H&agrave;n Quốc th&igrave; củ sẽ c&oacute; h&igrave;nh vu&ocirc;ng nhưng hơi bầu hoặch h&igrave;nh trụ,th&acirc;n củ to tr&ograve;n đều từ tr&ecirc;n xuống dưới,rễ rất th&ocirc; ngắn c&oacute; chiều d&agrave;i khoảng&nbsp;1,5 đ&ecirc;n 2 cm v&agrave; phần rễ phụ cũng rất &iacute;t c&oacute; m&agrave;u đỏ đục, phần th&acirc;n c&oacute; m&agrave;u v&agrave;ng &oacute;ng.</p>\r\n\r\n<p><em><strong>- Đếm số đốt tr&ecirc;n th&acirc;n củ s&acirc;m:</strong></em>&nbsp;Mỗi đốt tượng trưng cho 1 năm tuổi. Nh&acirc;n s&acirc;m c&agrave;ng c&oacute; độ tuổi cao th&igrave; c&agrave;ng c&oacute; nhiều chất dinh dưỡng.Nh&acirc;n s&acirc;m c&agrave;ng gi&agrave; th&igrave; c&oacute; trọng lượng c&agrave;ng cao c&oacute; củ l&ecirc;n đến 2 đến 3 kg một củ.</p>\r\n\r\n<p><strong><em>- M&ugrave;i thơm:</em></strong>&nbsp;S&acirc;m H&agrave;n Quốc từ 4 năm tuổi c&oacute; m&ugrave;i thơm ngọt ng&agrave;o, tự nhi&ecirc;nđ&acirc;y cũng l&agrave; điểm đặc trưng của&nbsp;<a href=\"http://onplaza.vn/duoc-lieu/phan-biet-nhan-sam-that-gia-n50.html\">nh&acirc;n s&acirc;m thật</a>.</p>\r\n\r\n<p><strong>Bảo quản s&acirc;m tươi H&agrave;n Quốc như thế n&agrave;o?</strong></p>\r\n\r\n<p>V&igrave; l&agrave; nh&acirc;n s&acirc;m tươi nhập từ H&agrave;n Quốc về Việt Nam đ&atilde; mất một khoảng thời gian n&ecirc;n ch&uacute;ng ta chỉ bảo quản nh&acirc;n s&acirc;m trong khoảng thời gian 10 ng&agrave;y đổ lại v&agrave; để trong ngăn m&aacute;t tủ lạnh với nhiệt độ tối đa l&agrave; 4 độC</p>\r\n\r\n<p><strong>Một số h&igrave;nh ảnh chi tiết của sản phẩm Nh&acirc;n s&acirc;m tươi H&agrave;n Quốc 6 năm tuổi loại 4 củ/kg</strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 1\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_01.jpg\" style=\"height:531px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 2\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_02.jpg\" style=\"height:441px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 3\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_03.jpg\" style=\"height:503px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 4\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_04.jpg\" style=\"height:524px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 5\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_05.jpg\" style=\"height:461px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 6\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_06.jpg\" style=\"height:392px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 7\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_07.jpg\" style=\"height:461px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 8\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/NS004/sam-tuoi-han-quoc-cao-cap-loai-6-cu-kg-NS004_08.jpg\" style=\"height:481px; width:700px\" /></strong></p>\r\n\r\n<p><strong>Cận cảnh qu&aacute; tr&igrave;nh khai th&aacute;c nh&acirc;n s&acirc;m tươi tại H&agrave;n Quốc:</strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 1\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_01.jpg\" style=\"height:533px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 2\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_02.jpg\" style=\"height:687px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 3\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_03.jpg\" style=\"height:454px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 4\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_04.jpg\" style=\"height:260px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 5\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_05.jpg\" style=\"height:598px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 6\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_06.jpg\" style=\"height:518px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 7\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_07.jpg\" style=\"height:443px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 8\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_08.jpg\" style=\"height:516px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 9\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_09.jpg\" style=\"height:701px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 10\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_10.jpg\" style=\"height:524px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"Cận cảnh quy trình khai thác sâm tươi Hàn Quốc 11\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/quy-trinh-khai-thac-sam/can-canh-quy-trinh-khai-thac-nhan-tuoi-han-quoc_11.jpg\" style=\"height:820px; width:700px\" /></strong></p>\r\n\r\n<p><strong>Chi&ecirc;m ngưỡng bộ sưu tập&nbsp;b&igrave;nh Nh&acirc;n s&acirc;m H&agrave;n Quốc của Onplaza:</strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 1\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_01.jpg\" style=\"height:333px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 2\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_02.jpg\" style=\"height:459px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 3\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_03.jpg\" style=\"height:342px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 4\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_04.jpg\" style=\"height:393px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 5\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_05.jpg\" style=\"height:333px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 6\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_06.jpg\" style=\"height:524px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 7\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_07.jpg\" style=\"height:634px; width:700px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"bộ sưu tập bình Nhân sâm Hàn Quốc của Onplaza 8\" src=\"https://onplaza.vn/upload_images/images/Nhan-sam/sam-tuoi-hq/bst-binh-sam-hq/bo-suu-tap-binh-ngam-nhan-sam-han-quoc-cua-onplaza_08.jpg\" style=\"height:292px; width:700px\" /></strong></p>\r\n\r\n<p>Xem th&ecirc;m</p>\r\n\r\n<p><img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_01_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_02_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_03_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_04_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_05_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_06_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_07_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_08_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_09_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_10_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_11_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_12_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_13_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_14_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_15_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_16_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_17_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_18_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_19_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_20_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_21_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_22_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_23_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_24_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_25_1672892238.jpg\" />&nbsp;<img src=\"https://onplaza.vn/images/products/2023/01/05/compress/ad-nhan-sam-tuoi-han-quoc_26_1672892238.jpg\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `gmail`, `phone`, `permission`) VALUES
(1, 'admin@onplaza.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'onplaza@gmail.com', 999999999, 1),
(3, 'nhuvanhung@gmail.com', 'b68e968bf607e6398dd4c3806a42d1f2', 'Nhữ Văn Hưng', 'nhuvanhung@gmail.com', 969531991, 2),
(4, 'lehuydau2312@gmail.com', 'f7b4165f1c078afdb92eb1c0b488424f', 'Lê Huy Dậu', 'lehuydau2312@gmail.com', 386131716, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `portfolio` (`id_portfolio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
