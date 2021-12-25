-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2021 lúc 08:54 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpbase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `create_at`, `update_at`) VALUES
(1, 'admin@gmail.com', '778f964511290de03dd01b6481416331', '2021-12-09', '2021-12-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `code_cart` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `bill` double NOT NULL,
  `phone` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `code_cart`, `user_name`, `id_product`, `product_name`, `total`, `bill`, `phone`, `address`, `status`) VALUES
(3, 7652, 'Lê Văn Tú', 6, 'Áo Hoodie HDXD88353.', 1, 350000, 123456789, 'Mỹ Đình', 1),
(4, 4776, 'Huy Hoàng', 2, 'Áo thun thời trang 2.', 2, 420000, 36225225, 'Đình Thôn', 1),
(5, 9844, 'Huy Hoàng', 2, 'Áo thun thời trang 2.', 2, 420000, 123456789, 'Hà Đông', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `cate_name`, `create_at`, `update_at`) VALUES
(1, 'Áo khoác', '0000-00-00', '0000-00-00'),
(2, 'Áo thời trang', '0000-00-00', '0000-00-00'),
(3, 'Áo Hoodie', '0000-00-00', '0000-00-00'),
(4, 'Áo thun', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_post`
--

CREATE TABLE `cate_post` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cate_post`
--

INSERT INTO `cate_post` (`id`, `cate_name`, `create_at`, `update_at`) VALUES
(2, 'Tin tức nổi bật', '0000-00-00', '0000-00-00'),
(5, 'Tin tức mới', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` tinytext NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `content`, `product_name`) VALUES
(7, 'Lê Văn Tú', 'Sản phẩm rất đẹp', ' Áo thun thời trang 1'),
(8, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo thun thời trang 2'),
(9, 'Dũng', 'Sản phẩm tốt', ' áo nỉ 1'),
(10, 'Lê Văn Tú', 'Sản phẩm tốt', ' Áo nỉ 2'),
(11, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(12, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(13, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(14, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(15, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(16, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(17, 'Huy Hoàng', 'Sản phẩm tốt', ' Áo nỉ 2'),
(18, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(19, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(20, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(21, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(22, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(23, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(24, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(25, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(26, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(27, 'Lê Văn Tú', 'sản phẩm tốt', ' Áo thun thời trang 1'),
(28, 'Lê Văn Tú', 'đẹp', ' '),
(29, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(30, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(31, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(32, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(33, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(34, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(35, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(36, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(37, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(38, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(39, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(40, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(41, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(42, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(43, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(44, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(45, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(46, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(47, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(48, 'Huy Hoàng', 'gg', ' áo nỉ 1'),
(49, '212112', 'fdfd', ' Áo thun thời trang 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `name_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `money`
--

INSERT INTO `money` (`id`, `name_unit`) VALUES
(1, 'VNĐ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_cate_post` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `id_cate_post`, `avatar`, `content`, `create_at`, `update_at`) VALUES
(4, '7 kiểu chân váy mọi quý cô nên có trong tủ quần áo của mình', 'Tin tức nổi bật', 'large_6ef761c405fd8ac3d863c9c720e5e0f2-1155.jpg', '<p><strong>1.<a href=\"https://phunutoday.vn/4-cach-mix-do-voi-ao-ba-lo-giup-cac-nang-cuc-xinh-ma-lai-mat-trong-mua-he-nong-nuc-d183321.html\" target=\"_blank\">Ch&acirc;n v&aacute;y</a>&nbsp;b&uacute;t ch&igrave;</strong></p>\r\n\r\n<p>Ch&acirc;n v&aacute;y b&uacute;t ch&igrave;&nbsp;xuất hiện từ những năm 40 của thế kỷ trước, nhưng đến nay n&oacute; vẫn l&agrave; m&ograve;n đồ được h&agrave;ng triệu &quot;t&iacute;n đồ&quot; thời trang y&ecirc;u mến.&nbsp;Ch&acirc;n v&aacute;y b&uacute;t ch&igrave;&nbsp;thường c&oacute; độ d&agrave;i đến gối hay qua gối một ch&uacute;t v&agrave; thiết kế &ocirc;m. Điều n&agrave;y đ&atilde; gi&uacute;p&nbsp;ch&acirc;n v&aacute;y b&uacute;t ch&igrave;&nbsp;trở th&agrave;nh một trong những m&oacute;n đồ l&yacute; tưởng để d&aacute;ng người đồng hồ c&aacute;t khoe &quot;d&aacute;ng ngọc&quot; v&agrave; d&aacute;ng quả l&ecirc;, quả t&aacute;o hay tam gi&aacute;c khắc phục nhược điểm v&oacute;c d&aacute;ng.</p>\r\n\r\n<p>Ch&acirc;n v&aacute;y b&uacute;t ch&igrave;&nbsp;kh&ocirc;ng chỉ gi&uacute;p người mặc khắc phục nhược điểm v&oacute;c d&aacute;ng m&agrave; c&ograve;n to&aacute;t l&ecirc;n n&eacute;t thanh lịch, duy&ecirc;n d&aacute;ng. Ch&iacute;nh v&igrave; vậy m&agrave; n&oacute; được coi l&agrave; m&oacute;n đồ kh&ocirc;ng thể thiếu của c&aacute;c n&agrave;ng c&ocirc;ng sở.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"large_6ef761c405fd8ac3d863c9c720e5e0f2\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/large_6ef761c405fd8ac3d863c9c720e5e0f2-1155.jpg\" style=\"height:846px; width:564px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"cv1399-02-1127\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/cv1399-02-1127-1155.jpg\" style=\"height:738px; width:494px\" /></p>\r\n\r\n<p><strong>2.Ch&acirc;n v&aacute;y xếp li</strong></p>\r\n\r\n<p>Ch&acirc;n v&aacute;y xếp li l&agrave; c&acirc;u trả lời ho&agrave;n hảo cho những n&agrave;ng c&ocirc;ng sở th&iacute;ch phong c&aacute;ch preppy thanh lịch v&agrave; trang nh&atilde;. Kh&ocirc;ng qu&aacute; k&eacute;n ch&acirc;n v&agrave; kh&ocirc;ng qu&aacute; k&eacute;n v&oacute;c người, chiếc&nbsp;<a href=\"https://phunutoday.vn/chan-vay-tag8538/\">ch&acirc;n v&aacute;y</a>&nbsp;n&agrave;y đem tới n&eacute;t trẻ trung cho c&aacute;c c&ocirc; n&agrave;ng, tăng th&ecirc;m n&eacute;t quyến rũ cho cả set đồ của bạn.</p>\r\n', '0000-00-00', '0000-00-00'),
(5, 'Chân váy xếp li', 'Tin tức mới', '63334E5a79bd830fa76d.jpeg', '<p>&nbsp;</p>\r\n\r\n<p><strong>2.Ch&acirc;n v&aacute;y xếp li</strong></p>\r\n\r\n<p>Ch&acirc;n v&aacute;y xếp li l&agrave; c&acirc;u trả lời ho&agrave;n hảo cho những n&agrave;ng c&ocirc;ng sở th&iacute;ch phong c&aacute;ch preppy thanh lịch v&agrave; trang nh&atilde;. Kh&ocirc;ng qu&aacute; k&eacute;n ch&acirc;n v&agrave; kh&ocirc;ng qu&aacute; k&eacute;n v&oacute;c người, chiếc&nbsp;<a href=\"https://phunutoday.vn/chan-vay-tag8538/\">ch&acirc;n v&aacute;y</a>&nbsp;n&agrave;y đem tới n&eacute;t trẻ trung cho c&aacute;c c&ocirc; n&agrave;ng, tăng th&ecirc;m n&eacute;t quyến rũ cho cả set đồ của bạn.</p>\r\n', '0000-00-00', '0000-00-00'),
(6, 'Chân váy maxi (dài chấm gót)', 'Tin tức nổi bật', 'final45.jpg', '<p>Ch&acirc;n&nbsp;v&aacute;y maxi&nbsp;đa dạng về kiểu d&aacute;ng, chất liệu v&agrave; m&agrave;u sắc, v&igrave; vậy m&agrave;, d&ugrave; bạn c&oacute; phong c&aacute;ch thời trang n&agrave;o cũng c&oacute; thể t&igrave;m cho m&igrave;nh một chiếc v&aacute;y ph&ugrave; hợp.</p>\r\n\r\n<p>Nhiều người kh&ocirc;ng d&aacute;m mặc&nbsp;ch&acirc;n&nbsp;v&aacute;y maxi&nbsp;v&igrave; cho rằng đ&acirc;y l&agrave; kiểu thời trang... k&eacute;n d&aacute;ng. Nhưng thực tế kh&ocirc;ng phải như vậy, với những bạn g&aacute;i c&oacute; v&oacute;c d&aacute;ng nhỏ nhắn hay hơi mập một ch&uacute;t, c&aacute;c bạn vẫn c&oacute; thể mặc&nbsp;v&aacute;y maxi&nbsp;c&oacute; độ d&agrave;i tr&ecirc;n mắt c&aacute; ch&acirc;n, kết hợp c&ugrave;ng&nbsp;gi&agrave;y/d&eacute;p cao g&oacute;t gi&uacute;p người mặc tr&ocirc;ng cao hơn. C&ograve;n với những bạn g&aacute;i cao gầy v&agrave; kh&ocirc;ng c&oacute; đường cong cơ thể,&nbsp;ch&acirc;n&nbsp;v&aacute;y maxi&nbsp;l&agrave; sự lựa chọn ho&agrave;n hảo để tạo n&eacute;t mềm mại v&agrave; to&aacute;t l&ecirc;n sự quyến rũ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"1375414594-vay--14-\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/1375414594-vay-14-1204.jpg\" style=\"height:625px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"20150410-bien-hoa-da-phong-cach-voi-chan-vay-maxi-1\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/20150410-bien-hoa-da-phong-cach-voi-chan-vay-maxi-1-1204.jpg\" style=\"height:807px; width:660px\" /></p>\r\n', '0000-00-00', '0000-00-00'),
(7, 'Mẹo vặt cho phái nữ', 'Tin tức nổi bật', 'meo-quan-ao-ma-con-gai-can-biet-1.jpg', '<p>Ch&acirc;n v&aacute;y quấn&nbsp;l&agrave; loại v&aacute;y gần giống như miếng vải lớn được quấn quanh người một c&aacute;ch kh&eacute;o l&eacute;o, tạo th&agrave;nh những đường xếp nếp ấn tượng, độc đ&aacute;o, l&ocirc;i cuốn. T&ugrave;y theo chất liệu cứng hay mềm, n&oacute; sẽ tạo th&agrave;nh d&aacute;ng v&aacute;y &ocirc;m hoặc x&ograve;e như d&aacute;ng chữ A v&agrave; c&oacute; thể khắc phục hiệu quả nhiều nhược điểm cơ thể như phần bụng kh&ocirc;ng phẳng, m&ocirc;ng l&eacute;p hay h&ocirc;ng b&eacute;.</p>\r\n\r\n<p>Kiểu v&aacute;y &quot;nổi loạn&quot; n&agrave;y l&agrave; một gợi &yacute; ho&agrave;n hảo cho những qu&yacute; c&ocirc; muốn nhấn nh&aacute; n&eacute;t c&aacute; t&iacute;nh, thời thượng cho style dịu d&agrave;ng quen thuộc.&nbsp;Ch&acirc;n v&aacute;y quấn&nbsp;c&ograve;n c&oacute; thể được kết hợp từ nhiều chất liệu kh&aacute;c nhau như vải tweed, da, sợi kim loại... mang đến những trải nghiệm mới lạ với sự pha trộn phong c&aacute;ch ngẫu hứng v&agrave; hiện đại, đầy sức h&uacute;t.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"03-1498820773812\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/03-1498820773812-1203.jpg\" style=\"height:900px; width:900px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"mix-do-giao-mua-ngot-ngao-nhu-cac-quy-co-thoi-trang-viet-46-080857\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/mix-do-giao-mua-ngot-ngao-nhu-cac-quy-co-thoi-trang-viet-46-080857-1203.jpg\" style=\"height:726px; width:660px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"skirttrends2016_1-1\" src=\"https://media.phunutoday.vn/files/thanhhai/2018/06/20/skirttrends2016_1-1-1204.jpg\" style=\"height:1350px; width:900px\" /></p>\r\n', '0000-00-00', '0000-00-00'),
(8, 'Bỏ túi ngay tuyệt chiêu phối đồ với quần jogger “siêu độc”', 'Tin tức nổi bật', 'pn1-0532.jpg', '<p>Bỏ t&uacute;i ngay tuyệt chi&ecirc;u phối đồ với quần jogger &ldquo;si&ecirc;u độc&rdquo;</p>\r\n\r\n<p>Jogger hiện đang l&agrave; tr&agrave;o lưu cho c&aacute;c c&ocirc; n&agrave;ng s&agrave;nh điệu v&agrave; c&aacute; t&iacute;nh, kể cả c&aacute;c&nbsp;<a href=\"https://phunutoday.vn/ngoi-sao-tag17463/\">ng&ocirc;i sao</a>&nbsp;Hollywood...Đ&acirc;y l&agrave; mẫu quần được biến tấu từ những chiếc quần thể thao cổ điển ống thun t&uacute;m v&agrave; d&acirc;y r&uacute;t. Chỉ cần &quot;nằm l&ograve;ng&quot; những b&iacute; k&iacute;p si&ecirc;u đơn giản dưới đ&acirc;y, chị em sẽ tự tin ăn diện xuống phố hoặc khi bắt đầu một ng&agrave;y mới l&agrave;m việc.&nbsp;</p>\r\n\r\n<p><strong>1. Khỏe khoắn c&ugrave;ng croptop&nbsp;</strong></p>\r\n\r\n<p>Với c&aacute;c c&ocirc; n&agrave;ng c&oacute; v&ograve;ng hai thon gọn th&igrave; những chiếc&nbsp;<a href=\"https://phunutoday.vn/croptop-tag17496/\">croptop</a>&nbsp;l&agrave; trang phục kh&ocirc;ng thể thiếu. M&aacute;ch nhỏ với c&aacute;c bạn rằng jogger cũng c&oacute; thể l&agrave;m người bạn đồng h&agrave;nh của những chiếc&nbsp;<a href=\"https://phunutoday.vn/croptop-tag17496/\">croptop</a>&nbsp;nh&eacute;. Chị em nh&igrave;n xem, đ&acirc;y l&agrave; một sự kết hợp thật tinh tế.</p>\r\n\r\n<p><img alt=\"Croptop đi với quần jogger là sự kết hợp không hề tồi các nàng nhé. Ảnh: Internet\" src=\"https://media.phunutoday.vn/files/hang.nguyen/2018/05/20/pn1-0532.jpg\" style=\"height:466px; width:700px\" /></p>\r\n\r\n<h2>Croptop đi với quần jogger l&agrave; sự kết hợp kh&ocirc;ng hề tồi c&aacute;c n&agrave;ng nh&eacute;. Ảnh: Internet</h2>\r\n\r\n<p><strong>2. Thanh lịch với &aacute;o sơ mi</strong></p>\r\n\r\n<p>Với phong c&aacute;ch chỉn chu, lịch sự d&agrave;nh cho người đi l&agrave;m, sự kết hợp giữa bộ đ&ocirc;i&nbsp;<a href=\"https://phunutoday.vn/ao-so-mi-tag4564/\">&aacute;o sơ mi</a>&nbsp;v&agrave; quần jogger l&agrave; sự lựa chọn tốt nhất cho chị em nh&eacute;.&nbsp;</p>\r\n\r\n<p><img alt=\"Áo sơ mi mà đi cùng quần jogger thì miễn chê. Ảnh: Internet\" src=\"https://media.phunutoday.vn/files/hang.nguyen/2018/05/20/pn3-0539.jpg\" style=\"height:627px; width:699px\" /></p>\r\n\r\n<h2>&Aacute;o sơ mi m&agrave; đi c&ugrave;ng quần jogger th&igrave; miễn ch&ecirc;. Ảnh: Internet</h2>\r\n\r\n<p>Jogger hiện đang l&agrave; tr&agrave;o lưu cho c&aacute;c c&ocirc; n&agrave;ng s&agrave;nh điệu v&agrave; c&aacute; t&iacute;nh, kể cả c&aacute;c&nbsp;<a href=\"https://phunutoday.vn/ngoi-sao-tag17463/\">ng&ocirc;i sao</a>&nbsp;Hollywood...Đ&acirc;y l&agrave; mẫu quần được biến tấu từ những chiếc quần thể thao cổ điển ống thun t&uacute;m v&agrave; d&acirc;y r&uacute;t. Chỉ cần &quot;nằm l&ograve;ng&quot; những b&iacute; k&iacute;p si&ecirc;u đơn giản dưới đ&acirc;y, chị em sẽ tự tin ăn diện xuống phố hoặc khi bắt đầu một ng&agrave;y mới l&agrave;m việc.&nbsp;</p>\r\n\r\n<p><strong>1. Khỏe khoắn c&ugrave;ng croptop&nbsp;</strong></p>\r\n\r\n<p>Với c&aacute;c c&ocirc; n&agrave;ng c&oacute; v&ograve;ng hai thon gọn th&igrave; những chiếc&nbsp;<a href=\"https://phunutoday.vn/croptop-tag17496/\">croptop</a>&nbsp;l&agrave; trang phục kh&ocirc;ng thể thiếu. M&aacute;ch nhỏ với c&aacute;c bạn rằng jogger cũng c&oacute; thể l&agrave;m người bạn đồng h&agrave;nh của những chiếc&nbsp;<a href=\"https://phunutoday.vn/croptop-tag17496/\">croptop</a>&nbsp;nh&eacute;. Chị em nh&igrave;n xem, đ&acirc;y l&agrave; một sự kết hợp thật tinh tế.</p>\r\n\r\n<p><img alt=\"Croptop đi với quần jogger là sự kết hợp không hề tồi các nàng nhé. Ảnh: Internet\" src=\"https://media.phunutoday.vn/files/hang.nguyen/2018/05/20/pn1-0532.jpg\" style=\"height:466px; width:700px\" /></p>\r\n\r\n<h2>Croptop đi với quần jogger l&agrave; sự kết hợp kh&ocirc;ng hề tồi c&aacute;c n&agrave;ng nh&eacute;. Ảnh: Internet</h2>\r\n\r\n<p><strong>2. Thanh lịch với &aacute;o sơ mi</strong></p>\r\n\r\n<p>Với phong c&aacute;ch chỉn chu, lịch sự d&agrave;nh cho người đi l&agrave;m, sự kết hợp giữa bộ đ&ocirc;i&nbsp;<a href=\"https://phunutoday.vn/ao-so-mi-tag4564/\">&aacute;o sơ mi</a>&nbsp;v&agrave; quần jogger l&agrave; sự lựa chọn tốt nhất cho chị em nh&eacute;.&nbsp;</p>\r\n\r\n<p><img alt=\"Áo sơ mi mà đi cùng quần jogger thì miễn chê. Ảnh: Internet\" src=\"https://media.phunutoday.vn/files/hang.nguyen/2018/05/20/pn3-0539.jpg\" style=\"height:627px; width:699px\" /></p>\r\n\r\n<h2>&Aacute;o sơ mi m&agrave; đi c&ugrave;ng quần jogger th&igrave; miễn ch&ecirc;. Ảnh: Internet</h2>\r\n', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `cate_name`, `thumbnail`, `price`, `short_description`, `description`, `create_at`, `update_at`) VALUES
(1, 'Áo thun thời trang 1', 'Áo thun', 'den_ath011_1_7ae9c8ef67084144bfb559da825c5f3b_master.jpg', 255000, 'Sợi cotton Eco được chọn từ những xơ bông đạt chuẩn dài mảnh tạo nên vải không có bụi xơ cho đặc điểm tối ưu trên vải', 'Sợi cotton Eco được chọn từ những xơ bông đạt chuẩn dài mảnh tạo nên vải không có bụi xơ cho đặc điểm tối ưu trên vải', '0000-00-00', '0000-00-00'),
(2, 'Áo thun thời trang 2', 'Áo thun', '401bbdda-dc80-0500-d07b-00186804cbed.jpg', 210000, 'Sợi cotton Eco được chọn từ những xơ bông đạt chuẩn dài mảnh tạo nên vải không có bụi xơ cho đặc điểm tối ưu trên vải', 'Sợi cotton Eco được chọn từ những xơ bông đạt chuẩn dài mảnh tạo nên vải không có bụi xơ cho đặc điểm tối ưu trên vải', '0000-00-00', '0000-00-00'),
(3, 'áo nỉ 1', 'Áo Hoodie', 'c28544ad-7c22-0100-d982-0018762dd009.jpg', 44000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(4, 'Áo nỉ 2', 'Áo thời trang', 'sp1.jpg', 390000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(5, 'Áo Hoodie O.S.L HDXD88353', 'Áo Hoodie', '6961ede57e0eeb8e1e7f03d05e2fb6aa.jpg', 660000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(6, 'Áo Hoodie HDXD88353', 'Áo khoác', 'af0eee56b495e6bd922c23e2c7a33bfc.jpg', 350000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(7, 'Áo khoác thời trang 1', 'Áo khoác', 'nen-mua-ao-khoac-du-hay-kaki.jpg', 800000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(8, 'Áo khoác thời trang 2', 'Áo khoác', 'ao-khoac-nam-nian-jeep-xanh-quan-doi-new.jpg', 900000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(9, 'Áo thun phong cách', 'Áo thời trang', '31032021090331_1.jpg', 32000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00'),
(10, 'Áo thun năng động', 'Áo thun', 'ao-thun-nam-form-rong-tay-lo-mau-den-1.jpg', 44000, 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', 'Bộ đồ nỉ da cá mỏng nhẹ, chất liệu mềm mại nhưng ấm áp, độ co giãn đàn hồi tốt', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `number`, `description`) VALUES
(1, 1, 'Đang giao'),
(2, 2, 'Đã giao thành công'),
(3, 3, 'Giao không thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phone`) VALUES
(1, 'Lê Văn Tú', 'e10adc3949ba59abbe56e057f20f883e', 123456789),
(2, 'Huy Hoàng', 'e10adc3949ba59abbe56e057f20f883e', 36225225);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_post`
--
ALTER TABLE `cate_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cate_post`
--
ALTER TABLE `cate_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
