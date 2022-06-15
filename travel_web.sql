-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2022 lúc 08:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `maBV` int(11) NOT NULL,
  `trangThai` int(11) DEFAULT NULL,
  `maDM` int(11) DEFAULT NULL,
  `maSK` int(11) DEFAULT NULL,
  `chiTietBaiViet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tenBV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`maBV`, `trangThai`, `maDM`, `maSK`, `chiTietBaiViet`, `image`, `created_at`, `tenBV`) VALUES
(26, 0, 13, 2, '<p><em>Ch&ugrave;a LINH ỨNG tọa lạc tại khu vực B&atilde;i Bụt, b&aacute;n đảo Sơn Tr&agrave;, nằm c&aacute;ch trung t&acirc;m th&agrave;nh phố Đ&agrave; Nẵng 10km về hướng Đ&ocirc;ng Bắc, do cố H&ograve;a thượng Th&iacute;ch Thiện Nguy&ecirc;n khai sơn. Ch&ugrave;a được khởi c&ocirc;ng x&acirc;y dựng ng&agrave;y 04 th&aacute;ng 7 năm 2004 ( nhằm ng&agrave;y 19 th&aacute;ng 6 năm Gi&aacute;p Th&acirc;n) v&agrave; kh&aacute;nh th&agrave;nh ng&agrave;y 30 th&aacute;ng 7 năm 2010 ( nhằm ng&agrave;y 19 th&aacute;ng 6 năm Canh Dần).</em></p>\r\n\r\n<p>To&agrave;n cảnh Ch&ugrave;a nằm tr&ecirc;n một địa h&igrave;nh vững ch&atilde;i, một khung cảnh bao la: sau lưng l&agrave; n&uacute;i, trước mặt l&agrave; biển, mang vẻ đẹp thi&ecirc;n nhi&ecirc;n hiếm thấy, kh&oacute; c&oacute; ng&ocirc;i ch&ugrave;a n&agrave;o c&oacute; được:</p>\r\n\r\n<p>Nơi đ&acirc;y, thuở xưa vốn l&agrave; nơi hoang địa, c&acirc;y cối um t&ugrave;m, rậm rạp, đồi n&uacute;i nhấp nh&ocirc; đầy sỏi đ&aacute;. Để c&oacute; được mặt bằng rộng r&atilde;i như h&ocirc;m nay, Ch&ugrave;a đ&atilde; phải đầu tư biết bao c&ocirc;ng đức, đ&uacute;ng như lời cố H&ograve;a Thượng khai sơn:</p>\r\n\r\n<p>Tương truyền, v&agrave;o thời vua Minh Mạng triều Nguyễn, v&agrave;o buổi s&aacute;ng tinh sương, d&acirc;n ch&agrave;i ven biển nơi đ&acirc;y t&igrave;nh cờ ph&aacute;t hiện một tượng Phật nh&ocirc; l&ecirc;n khỏi mặt c&aacute;t. D&acirc;n l&agrave;ng nghinh nước về, lập am thờ phụng. V&agrave; đặt t&ecirc;n cho v&ugrave;ng n&agrave;y l&agrave; B&atilde;i Bụt ( Phật). Từ đ&oacute;, nơi n&agrave;y s&oacute;ng y&ecirc;n biển lặng d&acirc;n ch&agrave;i an ổn l&agrave;m ăn.</p>\r\n\r\n<p>Theo lời cố H&ograve;a Thượng Th&iacute;ch Thiện Nguyện kể lại th&igrave; sau ng&agrave;y đất nước thống nhất, H&ograve;a Thượng c&oacute; dịp đi ngang qua đ&acirc;y bằng thuyền, được ngắm Sơn Tr&agrave; v&agrave;o một chiều lặng gi&oacute;, cảnh quan thật đẹp v&agrave; n&ecirc;n thơ:</p>\r\n\r\n<p>Kết hợp giữa truyền thuyết v&agrave; cảnh quan, H&ograve;a Thượng đ&atilde; ph&aacute;t khởi &yacute; nguyện, nếu sau n&agrave;y c&oacute; đủ nh&acirc;n duy&ecirc;n th&igrave; sẽ tạo dựng nơi đ&acirc;y một cảnh Gi&agrave; Lam nghiệm tịnh.</p>\r\n\r\n<p>V&agrave; rồi, nh&acirc;n duy&ecirc;n đ&oacute; đ&atilde; đến. Ngay sau khi H&ograve;a Thượng x&acirc;y dựng xong ch&ugrave;a Linh Ứng B&agrave; N&agrave; tại khu du lịch B&agrave; N&agrave;, th&igrave; cũng được TP Đ&agrave; Nẵng cấp đất x&acirc;y dựng ch&ugrave;a tại nơi đ&acirc;y (năm 2004).</p>\r\n\r\n<p>Quần thể Ch&ugrave;a Linh Ứng- B&atilde;i Bụt được x&acirc;y dựng tr&ecirc;n diện t&iacute;ch đất 20ha bao gồm c&aacute;c hạng mục lớn như Ch&aacute;nh điện, Hậu tổ, Tăng x&aacute;, Giảng đường, Nh&agrave; kh&aacute;ch, Phương trượng, Thư viện, Th&aacute;nh tượng Bồ T&aacute;t Qu&aacute;n Thế &Acirc;m, th&aacute;p thờ X&aacute; Lợi, tượng Phật Niết B&agrave;n&hellip; v&agrave; c&aacute;c hạng mục nhỏ: vườn L&acirc;m Tỳ Ni, vườn Lộc Uyển&hellip;</p>\r\n\r\n<p>Từ cổng Tam quan nh&igrave;n v&agrave;o l&agrave; 18 vị La H&aacute;n uy nghi&ecirc;m xếp th&agrave;nh 2 h&agrave;ng b&ecirc;n lối dẫn v&agrave;o ch&aacute;nh điện. Ch&aacute;nh điện l&agrave; nơi thờ phụng trang nghi&ecirc;m, ch&iacute;nh giữa l&agrave; tượng Phật Bổn Sư Th&iacute;ch Ca M&acirc;u Ni, b&ecirc;n phải l&agrave; tượng Bồ T&aacute;t Qu&aacute;n Thế &Acirc;m, b&ecirc;n tr&aacute;i l&agrave; tượng Bồ T&aacute;t Địa Tạng Vương v&agrave; 4 vị Thi&ecirc;n Vương.</p>\r\n\r\n<p>Điểm độc đ&aacute;o nổi bật nhất trong quần thể kiến tr&uacute;c n&agrave;y l&agrave; th&aacute;nh tượng Bồ T&aacute;t Qu&aacute;n Thế &Acirc;m. Đ&acirc;y l&agrave; c&ocirc;ng tr&igrave;nh kiến tr&uacute;c mỹ thuật t&acirc;m linh độc đ&aacute;o nhất, thu h&uacute;t, tập trung nhiều t&acirc;m lực, tr&iacute; lực, t&agrave;i lực nhất.</p>\r\n\r\n<p>V&igrave; dự định k&iacute;ch thước thiết kế ban đầu của tượng l&agrave; 32m nhưng khi ho&agrave;n th&agrave;nh đ&atilde; cao 67m, với đường k&iacute;nh t&ograve;a sen 35m. Điều đ&oacute; n&oacute;i l&ecirc;n t&iacute;nh quy m&ocirc;, sự cải tạo v&agrave; gia cố v&ocirc; c&ugrave;ng kh&oacute; khăn.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; pho tượng Qu&aacute;n Thế &Acirc;m được xem l&agrave; cao nhất Đ&ocirc;ng Nam &Aacute; ( UNESCO c&ocirc;ng nhận). B&ecirc;n trong l&ograve;ng tượng c&oacute; 12 tầng, mỗi tầng đều c&oacute; bệ thờ, tầng trệt thờ Phật A Di Đ&agrave;, Bồ T&aacute;t Qu&aacute;n Thế &Acirc;m v&agrave; Bồ T&aacute;t Địa Tạng, từ tầng 2 trở l&ecirc;n thờ 12 ứng th&acirc;n của Bồ T&aacute;t Qu&aacute;n Thế &Acirc;m với h&igrave;nh d&aacute;ng vẻ mặt tư thế kh&aacute;c nhau, tầng tr&ecirc;n c&ugrave;ng thờ 7 vị Phật qu&aacute; khứ.</p>\r\n\r\n<p>Điều quan trọng khi x&acirc;y dựng pho tượng được cố H&ograve;a Thượng trụ tr&igrave; v&agrave; c&aacute;c nghệ nh&acirc;n như b&aacute;c Thụy Lam&hellip; ch&uacute; trọng l&agrave; l&agrave;m thế n&agrave;o để pho tượng to&aacute;t l&ecirc;n được t&iacute;nh Từ Bi &ndash; Hỷ X&atilde; &ndash; H&ugrave;ng Lực của đức Bồ T&aacute;t lu&ocirc;n v&igrave; sự ban vui cứu khổ cho ch&uacute;ng sanh m&agrave; thị hiện. Thế đứng của tượng lưng tựa v&agrave;o n&uacute;i, nh&igrave;n ra biển cả với đ&ocirc;i mắt hiền từ như ban tr&atilde;i l&ograve;ng từ bi cho vạn loại ch&uacute;ng sinh đắm ch&igrave;m trong biển khổ.</p>\r\n\r\n<p>Từ l&uacute;c x&acirc;y ch&ugrave;a v&agrave; t&ocirc;n tạo Th&aacute;nh tượng đến nay đ&atilde; chứng kiến 13 lần &aacute;nh h&agrave;o quang xuất hiện. Lần đầu ti&ecirc;n l&uacute;c 11h ng&agrave;y 16 th&aacute;ng 8 năm 2008, trong khi đang thi c&ocirc;ng th&igrave; &aacute;nh h&agrave;o quang bất ngờ xuất hiện v&agrave; k&eacute;o d&agrave;i rất l&acirc;u. Về sau xuất hiện nhiều lần nữa m&agrave; c&ocirc;ng nh&acirc;n, du kh&aacute;ch đ&atilde; được chi&ecirc;m ngưỡng v&agrave; chụp ảnh, quay phim&hellip;</p>\r\n\r\n<p>Hiện nay tại Phương trượng&nbsp;<em>(nay l&agrave; nh&agrave; lưu niệm cố H&ograve;a Thượng khai sơn)</em>&nbsp;vẫn c&ograve;n lưu giữ những h&igrave;nh ảnh hiếm thấy n&agrave;y.</p>\r\n\r\n<p>Cảnh quan khu ch&aacute;nh điện kết hợp với pho tượng Bồ T&aacute;t Quan &Acirc;m&hellip;, tạo n&ecirc;n một bức tranh to&agrave;n cảnh thi&ecirc;ng thanh tịnh v&agrave; trang nghi&ecirc;m. Để tạo n&ecirc;n được cảnh đẹp n&agrave;y, c&oacute; thể thấy được t&acirc;m huyết v&agrave; sự đầu tư rất lớn của cố H&ograve;a Thượng trụ tr&igrave; trong việc x&acirc;y dựng ch&ugrave;a.</p>\r\n\r\n<p>Đến nay hầu hết c&aacute;c hạng mục c&ocirc;ng tr&igrave;nh đều đ&atilde; ho&agrave;n th&agrave;nh. Một c&ocirc;ng tr&igrave;nh trọng điểm nữa m&agrave; cố H&ograve;a Thượng trụ tr&igrave; định thực hiện l&uacute;c sanh tiền l&agrave; t&ocirc;n tạo tượng đức Phật Th&iacute;ch Ca ngự tọa tr&ecirc;n t&ograve;a sen cao 60m. Việc t&ocirc;n tạo bức tượng n&agrave;y sẽ do vị kế thế trụ tr&igrave; thực hiện trong tương lai gần khi hội đủ nh&acirc;n duy&ecirc;n.</p>\r\n\r\n<p>Ch&ugrave;a Linh Ứng- B&atilde;i Bụt từ l&acirc;u đ&atilde; l&agrave; một trong những điểm đến t&acirc;m linh ưa th&iacute;ch của Phật tử v&agrave; du kh&aacute;ch thập phương trong v&agrave; ngo&agrave;i nước khi đến tham quan th&agrave;nh phố Đ&agrave; Nẵng.</p>\r\n\r\n<p>Ch&ugrave;a c&oacute; một cảnh sắc thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ, thơ mộng gắn liền với những c&acirc;u chuyện truyền thuyết hấp dẫn, đ&acirc;y l&agrave; một trong những yếu tố thu h&uacute;t kh&aacute;ch thập phương tham quan, chi&ecirc;m b&aacute;i. Khi đến ch&ugrave;a Linh Ứng- B&atilde;i Bụt qu&yacute; kh&aacute;ch sẽ c&oacute; cơ hội kh&aacute;m ph&aacute; văn h&oacute;a Phật gi&aacute;o c&ugrave;ng cảnh quan thi&ecirc;n nhi&ecirc;n v&agrave; hệ sinh th&aacute;i độc đ&aacute;o nơi đ&acirc;y./.</p>', 'chua-linh-ung-bai-but-da-nang-0542.jpg', '2022-06-07 14:42:22', 'Chùa Linh Ứng – Bãi Bụt – Đà Nẵng'),
(27, 0, 13, 1, '<h3><strong><em>Bảo t&agrave;ng Mỹ thuật Đ&agrave; Nẵng</em></strong></h3>\r\n\r\n<p><em>Bảo t&agrave;ng Mỹ thuật Đ&agrave; Nẵng được th&agrave;nh lập ng&agrave;y 29/7/2014, c&oacute; chức năng bảo tồn, khai th&aacute;c v&agrave; ph&aacute;t huy gi&aacute; trị di sản mỹ thuật của Đ&agrave; Nẵng v&agrave; khu vực.</em></p>\r\n\r\n<p>Tọa lạc tại số 78 L&ecirc; Duẩn, phường Thạch Thang, quận Hải Ch&acirc;u, th&agrave;nh phố Đ&agrave; Nẵng, Bảo t&agrave;ng Mỹ thuật Đ&agrave; Nẵng hiện đang lưu giữ v&agrave; trưng b&agrave;y, giới thiệu đến c&ocirc;ng ch&uacute;ng hơn 1000 t&aacute;c phẩm mỹ thuật hiện đại v&agrave; c&aacute;c hiện vật mỹ thuật d&acirc;n gian v&agrave; sản phẩm thủ c&ocirc;ng mỹ nghệ truyền&nbsp; thống.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh sưu tầm c&aacute;c hiện vật, bảo t&agrave;ng Mỹ Thuật Đ&agrave; Nẵng lu&ocirc;n nhận được sự gi&uacute;p đỡ từ l&atilde;nh đạo Hội Mỹ thuật Việt Nam v&agrave; l&atilde;nh đạo Cục Mỹ thuật &ndash; Nhiếp ảnh.</p>\r\n\r\n<p>Đặc biệt, c&oacute; rất nhiều nghệ sĩ đi&ecirc;u khắc, họa sĩ, nh&agrave; sưu tầm trong th&agrave;nh phố v&agrave; khu vực đ&atilde; chuyển nhượng, hiến tặng t&aacute;c phẩm c&oacute; gi&aacute; trị hoặc để lại to&agrave;n bộ t&aacute;c phẩm cho Bảo t&agrave;ng. Do đ&oacute;, bảo t&agrave;ng Mỹ Thuật Đ&agrave; Nẵng kh&ocirc;ng chỉ l&agrave; nơi lưu giữ, ph&aacute;t huy v&agrave; t&ocirc;n vinh gi&aacute; trị của c&aacute;c t&aacute;c phẩm mỹ thuật m&agrave; c&ograve;n thể hiện được sự giao lưu ấm &aacute;p, th&acirc;n t&igrave;nh của giới nghệ sĩ mỹ thuật khắp cả nước v&agrave; nghễ sĩ quốc tế.</p>\r\n\r\n<p>Bảo t&agrave;ng Mỹ thuật Đ&agrave; Nẵng&nbsp;<strong>gồm 3 tầng</strong>, c&oacute; tổng diện t&iacute;ch trưng b&agrave;y 1.185,5m2 tr&ecirc;n diện t&iacute;ch đất 1.875m2, vốn l&agrave; cơ sở cũ của Bảo t&agrave;ng Lịch sử Đ&agrave; Nẵng. Bức tường b&ecirc;n ngo&agrave;i được x&acirc;y dựng theo từng khối vu&ocirc;ng g&oacute;c cạnh, khu&ocirc;n vi&ecirc;n trưng b&agrave;y trồng rất nhiều hoa cỏ, mang đến cảm gi&aacute;c thư th&aacute;i, thoải m&aacute;i cho kh&aacute;ch trong suốt qu&aacute; tr&igrave;nh tham quan.</p>\r\n\r\n<p>Tầng 1 gồm kh&ocirc;ng gian đại sảnh, khu trưng b&agrave;y chuy&ecirc;n đề ngắn hạn v&agrave; kh&ocirc;ng gian trưng b&agrave;y, kh&aacute;m ph&aacute; nghệ thuật d&agrave;nh cho thiếu nhi.</p>\r\n\r\n<p>Kh&ocirc;ng gian đại sảnh l&agrave; nơi trang trọng nhất của bảo t&agrave;ng được d&ugrave;ng để đ&oacute;n tiếp v&agrave; cung cấp những th&ocirc;ng tin cần thiết cho du kh&aacute;ch về lộ tr&igrave;nh tham quan. Ở đ&acirc;y c&ograve;n đặt một bức ph&ugrave; đi&ecirc;u g&ograve; đồng c&oacute; k&iacute;ch thước 5m x 3m được c&aacute;c nghệ nh&acirc;n chạm khắc tinh xảo với chủ đề về tiến tr&igrave;nh ph&aacute;t triển của Mỹ thuật Đ&agrave; Nẵng v&agrave; khu vực miền Trung &ndash; T&acirc;y Nguy&ecirc;n.</p>\r\n\r\n<p>Kh&ocirc;ng gian trưng b&agrave;y chuy&ecirc;n đề ngắn hạn l&agrave; một trong những kh&ocirc;ng gian nghệ thuật hấp dẫn của Bảo t&agrave;ng v&igrave; chủ đề, nội dung, h&igrave;nh thức trưng b&agrave;y lu&ocirc;n được thay đổi, &iacute;t nhất mỗi th&aacute;ng sẽ c&oacute; một cuộc triển l&atilde;m mới diễn ra tại đ&acirc;y.</p>\r\n\r\n<p>Ngo&agrave;i ra, kh&ocirc;ng gian trưng b&agrave;y v&agrave; kh&aacute;m ph&aacute; nghệ thuật d&agrave;nh cho thiếu nhi l&agrave; một nơi hấp dẫn để c&aacute;c em nhỏ c&oacute; thể thưởng thức c&aacute;c t&aacute;c phẩm c&oacute; chất lượng cao, từng đạt giải trong c&aacute;c cuộc thi vẽ tranh thiếu nhi tr&ecirc;n địa b&agrave;n th&agrave;nh phố v&agrave; cả nước.</p>\r\n\r\n<p>Tầng 2 giới thiệu 5 chuy&ecirc;n đề về mỹ thuật hiện đại của Đ&agrave; Nẵng, khu vực v&agrave; cả nước, g&ocirc;̀m các tác ph&acirc;̉m có giá trị ngh&ecirc;̣ thu&acirc;̣t ti&ecirc;u biểu trong sưu tập của Bảo t&agrave;ng v&ecirc;̀ sơn mài, sơn d&acirc;̀u, lụa, đ&ocirc;̀ họa và đi&ecirc;u khắc&hellip; v&agrave; đề t&agrave;i đấu tranh c&aacute;ch mạng.</p>', 'tong-quan-bao-tang-my-thuat-da-nang-78-le-duan-danang-fantasticity-com11.jpg', '2022-06-14 08:01:20', 'Bảo tàng mỹ thuật Đà Nẵng'),
(28, 0, 13, 1, '<p><strong>Địa chỉ:&nbsp;</strong>Phường H&ograve;a Hiệp Bắc, Quận Li&ecirc;n Chiểu, T.P Đ&agrave; Nẵng</p>\r\n\r\n<p><strong>Tổng quan:</strong></p>\r\n\r\n<p>Nằm trải d&agrave;i theo sườn n&uacute;i Hải V&acirc;n, đ&egrave;o Hải V&acirc;n cao 500m so với mực nuớc biển, l&agrave; ranh giới tỉnh Thừa Thi&ecirc;n &ndash; Huế v&agrave; th&agrave;nh phố Đ&agrave; Nẵng. Khi dừng ch&acirc;n nơi đ&acirc;y, vua L&ecirc; Th&aacute;nh T&ocirc;ng đ&atilde; phong tặng l&agrave; &ldquo;Thi&ecirc;n hạ đệ nhất h&ugrave;ng quan&rdquo;</p>\r\n\r\n<p><strong>Kh&aacute;m ph&aacute;:</strong></p>\r\n\r\n<p>Hiện nay c&oacute; hai con đường qua đ&egrave;o Hải V&acirc;n: hầm đường bộ xuy&ecirc;n đ&egrave;o Hải V&acirc;n v&agrave; đường đ&egrave;o Hải V&acirc;n.</p>\r\n\r\n<p>Hầm đường bộ xuy&ecirc;n đ&egrave;o Hải V&acirc;n</p>\r\n\r\n<p>&ndash; Thời gian mở cửa: Tất cả c&aacute;c ng&agrave;y. Thời gian đ&oacute;ng hầm l&agrave; 3h đến 4h s&aacute;ng mỗi ng&agrave;y để vệ sinh, sửa chữa, bảo tr&igrave; c&aacute;c hạng mục đường hầm.</p>\r\n\r\n<p>&ndash; Gi&aacute; v&eacute;: Vận chuyển m&ocirc; t&ocirc;/xe m&aacute;y l&agrave; 25.000 &ndash; 30.000 VNĐ/lượt/xe, người đi bộ l&agrave; 8.000VNĐ/lượt/người.</p>\r\n\r\n<p>&ndash; Lưu &yacute;: V&igrave; l&agrave; đường hầm xuy&ecirc;n đ&egrave;o n&ecirc;n du kh&aacute;ch sẽ kh&ocirc;ng thể thưởng ngoạn cảnh đẹp hay tham quan một số địa điểm nổi tiếng tr&ecirc;n đ&egrave;o Hải V&acirc;n.</p>\r\n\r\n<p>Đường đ&egrave;o Hải V&acirc;n</p>\r\n\r\n<p>&ndash; Thời gian mở cửa: Tất cả c&aacute;c ng&agrave;y.</p>\r\n\r\n<p>&ndash; Gi&aacute; v&eacute;: Kh&ocirc;ng mất ph&iacute;.</p>\r\n\r\n<p>&ndash; Ph&ugrave; hợp loại h&igrave;nh: Du lịch, tham quan, Kh&aacute;m ph&aacute;:, phượt.</p>\r\n\r\n<p>&ndash; Lưu &yacute;: Bạn n&ecirc;n chọn tuyến đường n&agrave;y nếu muốn Kh&aacute;m ph&aacute;:, trải nghiệm trọn vẹn cảm gi&aacute;c chinh phục đ&egrave;o Hải V&acirc;n</p>\r\n\r\n<p><strong>Những cung đường ngoạn mục:</strong></p>\r\n\r\n<p>Đ&egrave;o Hải V&acirc;n l&agrave; một trong những đường đ&egrave;o ven biển đẹp v&agrave; ấn tượng bậc nhất thế giới. Cung đường Hải V&acirc;n ch&ecirc;nh v&ecirc;nh, kh&uacute;c khuỷu, nổi bật giữa m&agrave;u xanh bạt ng&agrave;n n&uacute;i non h&ugrave;ng vĩ. C&oacute; l&uacute;c n&oacute; cong m&igrave;nh uốn lượn &ocirc;m theo triền n&uacute;i. Đ&ocirc;i khi n&oacute; lại bất ngờ rẽ ngoặt, tạo ra những đường zigzag lạ mắt. Hải V&acirc;n với một b&ecirc;n l&agrave; n&uacute;i cao, ph&iacute;a xa l&agrave; biển lớn. Tất cả tạo n&ecirc;n bức tranh thi&ecirc;n nhi&ecirc;n tr&aacute;ng lệ, m&ecirc; đắm l&ograve;ng người. N&oacute; l&agrave; t&aacute;c phẩm tuyệt vời của tạo h&oacute;a v&agrave; l&agrave; một c&ocirc;ng tr&igrave;nh kỳ c&ocirc;ng của b&agrave;n tay con người.</p>\r\n\r\n<p>Hải V&acirc;n đem lại cho người chinh phục n&oacute; những cung bậc cảm x&uacute;c kh&oacute; tả. Bạn sẽ thật h&agrave;o hừng v&agrave; t&ograve; m&ograve; khi khởi đầu h&agrave;nh tr&igrave;nh tại ch&acirc;n đ&egrave;o. Tiếp đ&oacute; l&agrave; hồi hộp v&agrave; lo lắng với những cung đường đ&egrave;o quanh co, kh&uacute;c khuỷu. Hải V&acirc;n được mệnh danh l&agrave; con đ&egrave;o hiểm trở nhất Việt Nam. Ch&iacute;nh điều đ&oacute; lại đem đến cho du kh&aacute;ch những cảm gi&aacute;c th&uacute; vị v&agrave; th&aacute;ch thức. V&agrave; rồi bạn sẽ cho&aacute;ng ngợp trước khung cảnh thi&ecirc;n nhi&ecirc;n tuyệt đẹp. Từ tr&ecirc;n đ&egrave;o c&oacute; thể ph&oacute;ng tầm mắt bao qu&aacute;t cả một v&ugrave;ng trời, d&atilde;y Bạch M&atilde; nối nhau tr&ugrave;ng điệp ẩn hiện sau l&agrave;n sương mờ, tuyến t&agrave;u hỏa Bắc &ndash; Nam lượn m&igrave;nh ph&iacute;a đưới v&agrave; xa hơn l&agrave; biển xanh chạm đường ch&acirc;n trời. Đứng ph&iacute;a Bắc đ&egrave;o c&oacute; thể nh&igrave;n thấy l&agrave;ng ch&agrave;i v&agrave; vịnh Lăng C&ocirc; xanh m&agrave;u ngọc b&iacute;ch với b&atilde;i c&aacute;t trắng trải d&agrave;i, đẹp như tranh vẽ. C&ograve;n đứng ph&iacute;a Nam đ&egrave;o l&agrave; cả th&agrave;nh phố Đ&agrave; Nẵng, cảng Ti&ecirc;n Sa, c&ugrave; lao Ch&agrave;m v&agrave; b&aacute;n đảo Sơn Tr&agrave; xanh mướt được nh&igrave;n từ tr&ecirc;n cao.</p>\r\n\r\n<p><strong>Hải V&acirc;n Quan</strong></p>\r\n\r\n<p>Hải V&acirc;n Quan hay c&ograve;n gọi l&agrave; cửa ải Hải V&acirc;n, nằm tr&ecirc;n đỉnh đ&egrave;o Hải V&acirc;n. Nếu bạn đ&atilde; chinh phục những cung đường ngoạn mục của đ&egrave;o Hải V&acirc;n th&igrave; đừng qu&ecirc;n gh&eacute; thăm Hải V&acirc;n Quan.</p>\r\n\r\n<p>Cửa ải n&agrave;y được x&acirc;y dựng v&agrave;o thời nh&agrave; Trần, tr&ugrave;ng tu v&agrave;o năm 1926 thời vua Minh Mạng (nh&agrave; Nguyễn). Hải V&acirc;n Quan được x&acirc;y bằng gạch đỏ, cao khoảng 6m, b&ecirc;n dưới c&oacute; v&ograve;m cổng lớn, b&ecirc;n tr&ecirc;n l&agrave; một tầng ri&ecirc;ng c&oacute; cửa sổ để quan s&aacute;t. Cửa ải được x&acirc;y với bờ tường d&agrave;y, rất kiến cố. Mặt cửa tr&ocirc;ng về phủ Thừa Thi&ecirc;n đề &ldquo;Hải V&acirc;n Quan&rdquo;, mặt cửa tr&ocirc;ng về Quảng Nam đề &ldquo;Thi&ecirc;n hạ đệ nhất h&ugrave;ng quan&rdquo;. Khi xưa ai qua cửa n&agrave;y phải tr&igrave;nh giấy tờ.</p>\r\n\r\n<p>Đến với Hải V&acirc;n Quan, bạn sẽ được &ldquo;chạm tay&rdquo; v&agrave;o một c&ocirc;ng tr&igrave;nh kiến tr&uacute;c mang đậm dấu ấn lịch sử. Nơi đ&acirc;y đ&atilde; từng chứng kiến nhiều cuộc tuần du của c&aacute;c vị vua thời phong kiến. Kh&ocirc;ng chỉ thế, n&oacute; c&ograve;n l&agrave; vị tr&iacute; chiến lược qu&acirc;n sự thời kỳ chiến tranh Việt Nam. Tại đ&acirc;y vẫn c&ograve;n lưu lại những t&agrave;n t&iacute;ch của đồn Nhất với một số l&ocirc; cốt do qu&acirc;n đội Ph&aacute;p x&acirc;y dựng từ năm 1826. Hiện nay, c&aacute;c di t&iacute;ch n&agrave;y đang bị xuống cấp trầm trọng.</p>\r\n\r\n<p>Đứng tr&ecirc;n Hải V&acirc;n Quan, bạn sẽ chi&ecirc;m ngưỡng được to&agrave;n cảnh đ&egrave;o Hải V&acirc;n m&acirc;y trắng phủ mờ với những cung đường v&ocirc; c&ugrave;ng ngoạn mục, đồi n&uacute;i trải thảm xanh tr&ugrave;ng điệp, trời cao v&agrave; biển xanh như h&ograve;a l&agrave; một. V&agrave; bạn c&oacute; thể chụp cho m&igrave;nh những bức ảnh đẹp nhất về Hải V&acirc;n.</p>\r\n\r\n<p><strong>Đường đến:</strong></p>\r\n\r\n<p>&ndash; Đ&egrave;o Hải V&acirc;n c&aacute;ch th&agrave;nh phố Đ&agrave; Nẵng 20km v&agrave; c&aacute;ch th&agrave;nh phố Huế 80km. Để thuận tiện, bạn c&oacute; thể di chuyển đến th&agrave;nh phố Đ&agrave; Nẵng bằng nhiều phương tiện như m&aacute;y bay, t&agrave;u hỏa, xe kh&aacute;ch&hellip; sau đ&oacute; thu&ecirc; xe đến đ&egrave;o Hải V&acirc;n.</p>\r\n\r\n<p>&ndash; &Ocirc; t&ocirc;: V&igrave; hầu hết c&aacute;c &ocirc; t&ocirc; hiện nay đều chọn đi tuyến hầm xuy&ecirc;n đ&egrave;o Hải V&acirc;n n&ecirc;n việc di chuyển bằng &ocirc; t&ocirc; đi đường đ&egrave;o kh&aacute; hạn chế.</p>\r\n\r\n<p>&ndash; Xe m&aacute;y: Đ&acirc;y l&agrave; phương tiện tốt nhất để bạn trải nghiệm trọn vẹn cảm gi&aacute;c chinh phục đ&egrave;o Hải V&acirc;n. Di chuyển bằng xe m&aacute;y, bạn c&oacute; thể linh hoạt dừng ở nhiều địa điểm tr&ecirc;n đ&egrave;o để nghỉ ngắm cảnh, chụp ảnh, nghỉ ngơi&hellip; Nếu xuất ph&aacute;t từ Đ&agrave; Nẵng, sau khoảng 1 giờ, bạn sẽ đến được ch&acirc;n đ&egrave;o Hải V&acirc;n.</p>\r\n\r\n<p><strong>Kinh nghiệm du lịch:</strong></p>\r\n\r\n<p>&ndash;&nbsp;C&oacute; mặt tại đỉnh đ&egrave;o l&uacute;c b&igrave;nh minh hoặc ho&agrave;ng h&ocirc;n c&oacute; thể sở hữu những tấm ảnh đẹp v&agrave; tận hưởng kh&ocirc;ng kh&iacute; tốt nhất trong ng&agrave;y.</p>\r\n\r\n<p>&ndash;&nbsp;C&ugrave;ng bạn b&egrave; leo l&ecirc;n Hải V&acirc;n Quan nh&acirc;m nhi c&agrave; ph&ecirc; được mua ở đỉnh Đ&egrave;o cũng l&agrave; một trải nghiệm mới kh&aacute; th&uacute; vị.</p>', 'deo-hai-van-03-450x30032.jpg', '2022-06-07 14:52:45', 'Đèo hải vân'),
(29, 0, 17, 1, '<p>Cầu Rồng được khởi c&ocirc;ng x&acirc;y dựng ng&agrave;y 19/7/2009, sau gần 4 năm thi c&ocirc;ng cầu Rồng được kh&aacute;nh th&agrave;nh đưa v&agrave;o sử dụng ng&agrave;y 29/3/2013. Cầu Rồng c&oacute; chiều d&agrave;i 666,5 m&eacute;t, nặng gần 9.000 tấn, 6 l&agrave;n xe, 5 nhịp, hai l&agrave;n đường d&agrave;nh cho người đi bộ với tổng vốn đầu tư 1.739 tỷ đồng. Cầu Rồng bắc qua S&ocirc;ng H&agrave;n tại vị tr&iacute; rất đắc địa, nối s&acirc;n bay Đ&agrave; Nẵng với b&atilde;i biển tuyệt đẹp.</p>\r\n\r\n<p>Cầu Rồng c&oacute; kiến tr&uacute;c độc đ&aacute;o m&ocirc; phỏng h&igrave;nh con rồng thời L&yacute; mạnh mẽ vươn ra biển, trở th&agrave;nh điểm nhấn quan trọng, l&agrave; biểu tượng kiến tr&uacute;c của th&agrave;nh phố. N&eacute;t đặc trưng của cầu dễ ph&acirc;n biệt đ&oacute; l&agrave; m&ocirc; h&igrave;nh hệ thống kết cấu dầm th&eacute;p dưới dạng một con rồng bay qua s&ocirc;ng H&agrave;n, hướng ra biển. Đ&acirc;y được cho l&agrave; thiết kế độc đ&aacute;o chưa từng c&oacute; tr&ecirc;n thế giới về kết cấu chịu lực l&agrave; sự kết hợp giữa dầm th&eacute;p, v&ograve;m th&eacute;p v&agrave; dầm b&ecirc; t&ocirc;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Điểm nổi bật nữa của cầu Rồng l&agrave; mọi người c&oacute; thể chi&ecirc;m ngưỡng rồng phun lửa, phun nước v&agrave;o mỗi tối thứ 7, chủ nhật l&uacute;c 21h00. Một cảnh tượng rất đẹp m&agrave; du kh&aacute;ch kh&ocirc;ng n&ecirc;n bỏ qua.</p>\r\n\r\n<p><em><strong>&Yacute; tưởng thiết kế dự &aacute;n:</strong></em></p>\r\n\r\n<p>Th&agrave;nh phố Đ&agrave; Nẵng với những bờ biển d&agrave;i v&agrave; đẹp đang phấn đấu trở th&agrave;nh th&agrave;nh phố du lịch. Do đ&oacute; nhu cầu cấp thiết cần c&oacute; một con đường kết nối thẳng từ s&acirc;n bay đến ph&iacute;a Đ&ocirc;ng của th&agrave;nh phố, gi&uacute;p du kh&aacute;ch c&oacute; thể đến với biển một c&aacute;ch nhanh nhất. Đặc điểm ph&iacute;a T&acirc;y dự &aacute;n (trung t&acirc;m th&agrave;nh phố) l&agrave; rất nhiều c&aacute;c c&ocirc;ng tr&igrave;nh cao tầng đ&atilde; được ho&agrave;n thiện, c&ugrave;ng với c&aacute;c c&ocirc;ng tr&igrave;nh văn h&oacute;a cần phải được t&ocirc;n trọng như Bảo t&agrave;ng Ch&agrave;m, ch&ugrave;a An Long. Do vậy, chỉ c&oacute; một giải ph&aacute;p duy nhất gắn kết c&ocirc;ng tr&igrave;nh với th&agrave;nh phố l&agrave; c&acirc;y cầu n&agrave;y sẽ bắt đầu v&agrave; kết th&uacute;c ở m&eacute;p nước để đảm bảo kh&ocirc;ng cản trở tầm nh&igrave;n, kh&ocirc;ng ph&aacute; vỡ c&aacute;c c&ocirc;ng tr&igrave;nh kiến tr&uacute;c cổ k&iacute;nh như Bảo t&agrave;ng Chăm. Tuyến đường nối v&agrave; cầu sẽ dẫn c&aacute;c phương tiện v&agrave; con người đến thẳng quảng trường c&ocirc;ng cộng ở ph&iacute;a trước bảo t&agrave;ng, cho ph&eacute;p bộ h&agrave;nh dạo chơi dọc bờ s&ocirc;ng c&oacute; thể l&ecirc;n thẳng cầu. C&oacute; thể n&oacute;i, đề xuất của Tư vấn đ&atilde; ho&agrave;n to&agrave;n gắn kết c&acirc;y cầu v&agrave;o với th&agrave;nh phố, tạo một sự h&ograve;a quyện đồng điệu giữa cổ điển v&agrave; hiện đại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cầu Rồng bắt đầu với h&igrave;nh d&aacute;ng cơ bản của v&ograve;m; một trong những h&igrave;nh d&aacute;ng cổ điển nhất được sử dụng cho nhịp vượt s&ocirc;ng. Điểm đặc biệt của thiết kế l&agrave; &aacute;p dụng v&ograve;m li&ecirc;n tục, cả ở tr&ecirc;n v&agrave; dưới bề mặt đường tr&ecirc;n cầu; một xương sống li&ecirc;n tục gợi cho ch&uacute;ng ta li&ecirc;n tưởng đến h&igrave;nh ảnh một con Rồng tr&ecirc;n s&ocirc;ng. V&ograve;m sẽ n&acirc;ng giữ bản mặt cầu bằng c&aacute;c c&aacute;p được bố tr&iacute; so le, cho ph&eacute;p phần đường v&agrave; đường bộ h&agrave;nh như nổi tr&ecirc;n s&ocirc;ng. Tầm nh&igrave;n từ c&aacute;c phương tiện giao th&ocirc;ng v&agrave; của người đi bộ kh&ocirc;ng bị che chắn bởi kết cấu của cầu. Thiết kế n&agrave;y kết hợp một h&igrave;nh d&aacute;ng rất độc đ&aacute;o của v&ograve;m với c&aacute;c c&ocirc;ng nghệ thiết kế cầu lớn hiện đại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một đặc điểm được xem x&eacute;t đ&oacute; l&agrave; t&iacute;nh ưa chuộng &ldquo;phong thủy&rdquo; của người d&acirc;n địa phương. Tự h&agrave;o l&agrave; &ldquo;con Rồng, ch&aacute;u Ti&ecirc;n&rdquo;, một m&ocirc; phỏng của h&igrave;nh d&aacute;ng Rồng sẽ mang lại niềm tự tin cho cư d&acirc;n địa phương. Th&ecirc;m nữa, Long v&agrave; Phụng l&agrave; hai linh vật trong t&acirc;m niệm của người &Aacute; Đ&ocirc;ng, nếu nh&igrave;n sang cầu Trần Thị L&yacute; mới, ch&uacute;ng ta sẽ thấy h&igrave;nh d&aacute;ng của chim Phụng với 2 sải c&aacute;nh bay bổng v&agrave; th&acirc;n m&igrave;nh hướng l&ecirc;n tr&ecirc;n. Th&ecirc;m một linh vật Rồng sẽ t&ocirc; điểm th&ecirc;m cho cảnh quan v&agrave; niềm tự h&agrave;o nơi mảnh đất n&agrave;y.</p>\r\n\r\n<p><strong>Địa chỉ:&nbsp;</strong>&nbsp;Đường&nbsp;Nguyễn Văn Linh, Phước Ninh, Đ&agrave; Nẵng</p>\r\n\r\n<p><strong>Tổng quan:</strong></p>\r\n\r\n<p>Cầu Rồng l&agrave; c&acirc;y cầu thứ 7 v&agrave; l&agrave; c&acirc;y cầu mới nhất bắc qua s&ocirc;ng H&agrave;n. V&igrave; c&acirc;y cầu c&oacute; h&igrave;nh d&aacute;ng giống 1 con rồng n&ecirc;n được gọi l&agrave; Cầu Rồng. Cầu Rồng d&agrave;i 666m v&agrave; rộng 37.5m với 6 l&agrave;n xe chạy. N&oacute; được ch&iacute;nh thức th&ocirc;ng xe ng&agrave;y 29 th&aacute;ng 3 năm 2013, kinh ph&iacute; x&acirc;y cầu gần 1,5 ngh&igrave;n tỷ đồng (US$88m). Cầu được thiết kế bởi Ammann &amp; Whitney Consulting Engineers với tập đo&agrave;n Louis Berger.</p>\r\n\r\n<p>C&acirc;y cầu hiện đại n&agrave;y bắc qua s&ocirc;ng H&agrave;n tại b&ugrave;ng binh L&ecirc; Đ&igrave;nh Dương/Bạch Đằng, tạo con đường ngắn nhất từ s&acirc;n bay quốc tế Đ&agrave; Nẵng tới c&aacute;c đường ch&iacute;nh trong th&agrave;nh phố Đ&agrave; Nẵng, v&agrave; một tuyến đường trực tiếp đến b&atilde;i biển Mỹ Kh&ecirc; v&agrave; B&atilde;i biển Non Nước ở r&igrave;a ph&iacute;a đ&ocirc;ng của th&agrave;nh phố. Cầu được thiết kế v&agrave; x&acirc;y dựng với h&igrave;nh dạng của một con rồng c&oacute; khả năng phun lửa v&agrave; phun nước như thật.</p>\r\n\r\n<p><strong>Kh&aacute;m ph&aacute;:</strong></p>\r\n\r\n<p>Khả năng phun lửa v&agrave; phun nước</p>\r\n\r\n<p>&ndash; Phun lửaTheo thiết kế, con rồng tr&ecirc;n cầu c&oacute; thể phun lửa trong hai ph&uacute;t v&agrave; kế tiếp l&agrave; 3 ph&uacute;t phun nước khiến cầu đ&atilde; trở th&agrave;nh một điểm nhấn ấn tượng, độc đ&aacute;o v&agrave; hấp dẫn ở Th&agrave;nh phố Đ&agrave; Nẵng.</p>\r\n\r\n<p>&ndash; Phun nướcMột lần phun (3 ph&uacute;t), cần 20m3 nước v&agrave; 40kWh điện. Con Rồng kh&ocirc;ng phun d&ograve;ng nước đặc m&agrave; phun nước th&agrave;nh luồng hơi cực mạnh v&agrave; đẹp, thể hiện kh&aacute;t vọng vươn xa của Đ&agrave; Nẵng. Để l&agrave;m điều n&agrave;y, cầu được thiết kế bồn chứa 20 m&eacute;t khối nước v&agrave; 325 m&eacute;t khối kh&iacute; n&eacute;n, tao ra h&agrave;ng vạn m&eacute;t khối hơi lẫn nước phun với lưu tốc 1.944 l/s.</p>\r\n\r\n<p>Thời gian phun lửa v&agrave; phun nước: bắt đầu v&agrave;o l&uacute;c 21 giờ c&aacute;c ng&agrave;y Thứ Bảy, Chủ nhật h&agrave;ng tuần v&agrave; c&aacute;c ng&agrave;y Lễ lớn.</p>', 'cau-rong-da-nang-115.jpg', '2022-06-07 14:56:33', 'Cầu rồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tenDanhMuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slugDanhMuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kichhoat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tenDanhMuc`, `slugDanhMuc`, `kichhoat`) VALUES
(20, 'Về Đà Nẵng', 've-da-nang', 0),
(21, 'Nổi bậc', 'noi-bac', 0),
(22, 'Điểm du lịch', 'diem-du-lich', 0),
(23, 'Trải nghiệm', 'trai-nghiem', 0),
(24, 'Khác', 'khac', 1),
(25, 'Sư kiện', 'su-kien', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuccon`
--

CREATE TABLE `danhmuccon` (
  `id` int(11) NOT NULL,
  `tenDMC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slugDMC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idDM` int(11) DEFAULT NULL,
  `kichhoat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuccon`
--

INSERT INTO `danhmuccon` (`id`, `tenDMC`, `slugDMC`, `idDM`, `kichhoat`) VALUES
(13, 'Văn Hóa', 'van-hoa', 22, 0),
(14, 'Làng nghề', 'lang-nghe', 22, 0),
(15, 'Thiên nhiên', 'thien-nhien', 22, 0),
(16, 'Cùng khám phá', 'cung-kham-pha', 22, 0),
(17, 'Cầu Đà Nẵng', 'cau-da-nang', 22, 0),
(18, 'Đà Nẵng về đêm', 'da-nang-ve-dem', 23, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maHinhAnh` int(11) NOT NULL,
  `hinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maBV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`maHinhAnh`, `hinhAnh`, `maBV`) VALUES
(19, 'chua-linh-ung-bai-but-da-nang-0121.jpg', 26),
(20, 'chua-linh-ung-bai-but-da-nang-03602.jpg', 26),
(21, 'chua-linh-ung-bai-but-da-nang-04895.jpg', 26),
(22, 'chua-linh-ung-bai-but-da-nang-05403.jpg', 26),
(23, 'chua-linh-ung-bai-but-da-nang-010440.jpg', 26),
(24, 'tang-1-kham-pha-nghe-thuat-danh-cho-thieu-nhi-bao-tang-my-thuat-da-nang-78-le-duan-danang-fantasticity-com694.jpg', 27),
(25, 'tang-2-bao-tang-my-thuat-da-nang-78-le-duan-danang-fantasticity-com-01918.jpg', 27),
(26, 'tang-3-bao-tang-my-thuat-da-nang-78-le-duan-danang-fantasticity-com-01797.jpg', 27),
(27, 'tang-3-bao-tang-my-thuat-da-nang-78-le-duan-danang-fantasticity-com-03218.jpg', 27),
(28, 'tang-3-bao-tang-my-thuat-da-nang-78-le-duan-danang-fantasticity-com-04299.jpg', 27),
(29, 'deo-hai-van-01-300x22549.jpg', 28),
(30, 'deo-hai-van-02-300x225511.jpg', 28),
(31, 'deo-hai-van-05-450x300230.jpg', 28),
(32, 'deo-hai-van-06-450x300674.jpg', 28),
(33, 'cau-rong-da-nang-nemtv-16276.jpg', 29),
(34, 'da-nang-thanh-pho-cua-nhung-cay-cau-07658.jpg', 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `maSuKien` int(11) NOT NULL,
  `tenSuKien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayBatDau` date DEFAULT NULL,
  `ngayKetThuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`maSuKien`, `tenSuKien`, `ngayBatDau`, `ngayKetThuc`) VALUES
(1, 'Xuân 2022', '2022-02-01', '2022-02-28'),
(2, 'Hè 2022', '2022-05-28', '2022-07-28'),
(4, '30/4 -1/5', '2022-04-28', '2022-05-04'),
(5, 'Thu đông', '2022-08-28', '2022-11-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `maVideo` int(11) NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maBV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`maVideo`, `video`, `maBV`) VALUES
(10, 'Toàn cảnh chùa Linh Ứng Đà Nẵng nhìn từ trên cao4739.mp4', 26);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`maBV`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuccon`
--
ALTER TABLE `danhmuccon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maHinhAnh`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`maSuKien`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`maVideo`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `maBV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `danhmuccon`
--
ALTER TABLE `danhmuccon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `maHinhAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `maSuKien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `maVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
