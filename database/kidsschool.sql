-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 09:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidsschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumnail` varchar(255) NOT NULL,
  `publics` int(11) NOT NULL,
  `createAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `thumnail`, `publics`, `createAt`) VALUES
(3, 'Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.', '<p>M&agrave;u sắc tr&ecirc;n mẫu iPhone mới n&agrave;y cũng đa dạng hơn, trong đ&oacute; nổi bật l&agrave; iPhone 13 m&agrave;u hồng. C&aacute;c m&agrave;u sắc c&ograve;n lại đề đ&atilde; từng được xuất hiện tr&ecirc;n c&aacute;c phi&ecirc;n bản trước đ&oacute; như trắng, đen, đỏ, xanh blue.</p>\r\n\r\n<p><img alt=\"Nhiều màu sắc lựa chọn\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/apple/iphone-13-13.png\" /></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh m&agrave;n h&igrave;nh Super Retina XDR độ s&aacute;ng cao</strong></h3>\r\n\r\n<p>Điện thoại iPhone 13 sẽ được sử dụng tấm nền OLED chất lượng cao v&agrave; c&oacute; k&iacute;ch thước 6.1 inch, lớn hơn&nbsp;<strong><a href=\"https://cellphones.com.vn/iphone-13-mini.html\" target=\"_blank\">iPhone 13 mini</a></strong>&nbsp;(5.4 inch). Với tấm nền n&agrave;y với c&ocirc;ng nghệ ProMotion gi&uacute;p iPhone 13 tiết kiệm pin đến tối đa khi sử dụng. Người d&ugrave;ng cũng c&oacute; thể dễ d&agrave;ng điều chỉnh tốc độ l&agrave;m tươi t&ugrave;y theo &yacute; th&iacute;ch.</p>\r\n\r\n<p><img alt=\"Màn hình tần số quét 120Hz, sự xuất hiện lại của TouchID\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/apple/IPHONE-13-2.jpg\" /></p>\r\n\r\n<p>Về khả năng hiển thị, mang đến chất lượng hiển thị vượt trội với m&agrave;n h&igrave;nh OLED độ ph&acirc;n giải cao, độ s&aacute;ng lớn. Nhờ đ&oacute; người d&ugrave;ng c&oacute; thể nh&igrave;n r&otilde; trong nhiều điều kiện s&aacute;ng kh&aacute;c nhau, kể cả ngo&agrave;i trời.</p>\r\n\r\n<p>Cụ thể, m&agrave;n h&igrave;nh&nbsp;Super Retina XDR với độ s&aacute;ng cao l&ecirc;n đ&ecirc;n 800 nits, v&agrave; tối đa c&oacute; thể l&ecirc;n tới&nbsp;1200 nits c&ugrave;ng dải m&agrave;u rộng P3, tỉ lệ tương phản lớn. Ph&iacute;a b&ecirc;n ngo&agrave;i m&agrave;n h&igrave;nh được phủ lớp&nbsp;oleophobic gi&uacute;p chống b&aacute;m v&acirc;n tay. Nhờ đ&oacute; hạn chế được c&aacute;c t&igrave;nh trạng b&aacute;m bụi bẩn v&agrave; mồ h&ocirc;i trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<h3><strong>Camera k&eacute;p 12MP, hỗ trợ ổn định h&igrave;nh ảnh quang học</strong></h3>\r\n\r\n<p>iPhone 13 c&oacute; một sự thay đổi lớn về camera so với tr&ecirc;n iPhone 12 Series. Cụ thể, iPhone c&oacute; thể được trang bị ống k&iacute;nh si&ecirc;u rộng mới gi&uacute;p m&aacute;y hiển thị được nhiều chi tiết hơn ở c&aacute;c bức h&igrave;nh thiếu s&aacute;ng.&nbsp;Trong khi đ&oacute; ống k&iacute;nh g&oacute;c rộng c&oacute; thể thu được nhiều s&aacute;ng hơn, l&ecirc;n đến 47% gi&uacute;p chất lượng bức ảnh, video được cải thiện hơn.</p>\r\n\r\n<p>Cụm camera được trang bị t&iacute;nh năng ổn định h&igrave;nh ảnh quang học c&ugrave;ng cảm biến mới, nhờ đ&oacute; bức h&igrave;nh chụp mang lại khả năng ổn định.</p>\r\n\r\n<p><img alt=\"Camera tiềm vọng, hỗ trợ zoom 10x\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/apple/IPHONE-13-4.jpg\" /></p>\r\n\r\n<p>Số ống k&iacute;nh tr&ecirc;n iPhone 13 vẫn được giữ nguy&ecirc;n so với iPhone 12, chỉ kh&aacute;c về vị tr&iacute; từng ống kinh. Cả hai ống k&iacute;nh vẫn sở hữu độ ph&acirc;n giải 12MP. Trong đ&oacute; camera g&oacute;c rộng được trang bị khẩu độ&nbsp;&fnof; / 1.6 trong khi g&oacute;c si&ecirc;u rộng l&agrave;&nbsp;&fnof; / 2.4 c&ugrave;ng g&oacute;c quay 120 độ.</p>\r\n\r\n<p>Với iP13, người d&ugrave;ng c&oacute; thể quay phim chuy&ecirc;n nghiệp với chế độ điện ảnh. Cụm camera n&agrave;y cũng hỗ trợ người d&ugrave;ng chụp c&ugrave;ng l&uacute;c nhiều bức ảnh kh&aacute;c nhau m&agrave; kh&ocirc;ng cần nhấc ng&oacute;n tay. Đặc biệt với chế độ ch&acirc;n dung hỗ trợ l&agrave;m mờ hậu cảnh chuy&ecirc;n nghiệp gi&uacute;p to&agrave;n bức ảnh tập trung v&agrave;o chủ thể m&agrave; người d&ugrave;ng hướng tới.</p>\r\n\r\n<p>Ở chế độ chụp&nbsp;Smart HDR 4, m&aacute;y c&oacute; thể nhận diện được tối đa bốn người kh&aacute;c nhau trong một khung h&igrave;nh. Sau đ&oacute; sẽ tiến h&agrave;nh tối ưu h&oacute;a &aacute;nh s&aacute;ng, độ tương phản v&agrave; tone m&agrave;y cho từng người, mang lại một bức ảnh chất lượng tốt nhất.&nbsp;Nếu sử dụng b&ecirc;n đ&ecirc;m để chụp c&aacute;c bức ảnh thiếu s&aacute;ng, l&uacute;c n&agrave;y chế độ&nbsp;Deep Fusion k&iacute;ch hoạt v&agrave; ph&acirc;n t&iacute;ch chế độ phơi s&aacute;ng ở từng&nbsp;pixel.&nbsp;</p>\r\n\r\n<p><img alt=\"Chế độ điện ảnh chuyên nghiệp\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/apple/IPHONE-13-5.jpg\" /></p>\r\n\r\n<p>Nhờ đ&oacute;, ảnh chụp tr&ecirc;n điện thoại hứa hẹn mang đến chất lượng như được chụp từ một m&aacute;y ảnh chuy&ecirc;n nghiệp. H&igrave;nh ảnh cho ra với chi tiết r&otilde;, dải nhạy s&aacute;ng cao, m&agrave;u sắc ch&acirc;n thực. Khả năng chụp đ&ecirc;m tr&ecirc;n 13 cũng được cải thiện với khả năng phơi s&aacute;ng tốt hơn mang đến nhi&ecirc;u chi tiết hơn.</p>\r\n\r\n<p>Về camera trước, điện thoại vẫn được trang bị camera đơn nằm trong notch tai thỏ với độ ph&acirc;n giải&nbsp;12MP c&ugrave;ng&nbsp;khẩu độ&nbsp;&fnof; / 2.2. Camera selfie n&agrave;y cũng được trang bị nhiều c&ocirc;ng nghệ chụp ảnh chuy&ecirc;n nghiệp như&nbsp;hiệu ứng bokeh, chế độ điện ảnh,&nbsp;Animoji v&agrave; Memoji,... mang lại những bức h&igrave;nh selfie chất lượng.</p>\r\n\r\n<p><img alt=\"Camera trước 12MP\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/apple/IPHONE-13-6.jpg\" /></p>\r\n\r\n<h3><strong>Khả năng quay video được cải thiện</strong></h3>\r\n\r\n<p>Về khả năng quay video, iPhone 13 c&oacute; thể hỗ trợ quay video 4K ở tốc độ ở ba tốc độ khung h&igrave;nh kh&aacute;c nhau. M&aacute;y cũng hỗ trợ t&iacute;nh năng ổn định h&igrave;nh ảnh quang học c&ugrave;ng khả năng zoom 3x.&nbsp;Nhờ đ&oacute;, hứa hẹn mang để khả năng quay phim chuy&ecirc;n nghiệp.</p>\r\n\r\n<p><img alt=\"Khả năng quay video được cải thiện\" src=\"https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/apple/IPHONE-13-7.jpg\" /></p>\r\n\r\n<p>iPhone 13 cũng hỗ trợ nhiều c&ocirc;ng cụ t&ugrave;y chỉnh n&acirc;ng cao với c&ocirc;ng nghệ Dolby Vision c&ugrave;ng khả năng quay Video HDR với độ ph&acirc;n giải 4K. Đặc biệt, người d&ugrave;ng c&oacute; thể l&agrave;m mọi việc tr&ecirc;n chiếc điện thoại n&agrave;y từ quay phim, chỉnh sửa&nbsp;đến&nbsp;render video một c&aacute;ch mượt m&agrave;.</p>\r\n\r\n<h3><strong>Tốc độ 5G tốt hơn với nhiều băng tần</strong></h3>\r\n\r\n<p>Thế hệ iPhone mới được cải thiện chất lượng 5G với nhiều băng tần hơn. Nhờ đ&oacute; việc xem trực tuyến hay tải xuống dữ liệu diễn ra nhanh hơn. Đặc biệt với chế độ dữ liệu th&ocirc;ng minh, thiết bị sẽ tự động ph&aacute;t hiện v&agrave; giảm tải tốc độ khi kh&ocirc;ng cần thiết kể tiết kiệm năng lượng.</p>\r\n', 'banner.jpg', 0, '2023-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `tuition` varchar(15) NOT NULL,
  `desc_class` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_class`, `class_name`, `start_date`, `end_date`, `tuition`, `desc_class`, `capacity`, `images`) VALUES
(26, 'Lớp văn', '2023-05-29', '2023-06-29', '1500000', 'Mô tả lớp học', 10, 'banner_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `phone_farther` varchar(11) NOT NULL,
  `phone_morther` varchar(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `day_admission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_student`, `birthday`, `student_name`, `phone_farther`, `phone_morther`, `id_class`, `day_admission`) VALUES
(2, '2023-04-26', ' Trần Minh Nhật ', '0967550072', '876541230', 2, '2023-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_address` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
