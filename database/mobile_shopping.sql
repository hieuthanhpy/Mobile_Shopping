-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2019 lúc 05:07 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile_shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'hieuthanhpy', 'ththanh.12a.cva@gmail.com', 'hieuthanhpy99'),
(3, 'leduytan', 'leduytan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'iPhone'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Huawei'),
(5, 'Xiaomi'),
(6, 'Nokia'),
(7, 'Asus'),
(8, 'Vsmart'),
(9, 'Vivo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(1, 48, '::1', 1, 1),
(3, 82, '::1', -1, 1),
(4, 41, '::1', 22, 1),
(6, 0, '::1', 22, 1),
(7, 41, '::1', -1, 1),
(8, 0, '::1', -1, 1),
(9, 82, '::1', -1, 1),
(10, 36, '::1', -1, 1),
(11, 74, '::1', -1, 1),
(12, 74, '::1', -1, 1),
(13, 71, '::1', -1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `email_info`
--

CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `email_info`
--

INSERT INTO `email_info` (`email_id`, `email`) VALUES
(3, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `p_status`) VALUES
(2, 14, 2, 1, 'Completed');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_pro_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(15) DEFAULT NULL,
  `amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(12) NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_image` text NOT NULL,
  `product_TechSpecifications` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_guest` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `brand_id`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_TechSpecifications`, `product_guest`) VALUES
(1, 1, 'iPhone Xr 256GB', 23990000, '', 'iphone-xr-256gb-white-600x600.jpg', '', 1),
(2, 1, 'iPhone Xr Max 256GB', 39900000, '', 'iphone-xs-max-512gb-gold-600x600.jpg', '', 0),
(3, 1, 'iPhone 7 Plus 32GB', 12990000, '', 'iphone-7-plus-32gb-gold-600x600-600x600.jpg', '', 1),
(4, 1, 'iPhone 7 32GB', 10990000, '', 'iphone-7-32gb-600x600.jpg', '', 1),
(5, 1, 'iPhone X Plus 256GB', 27990000, '', 'iphone-x-256gb-a1-600x600.jpg', '', 0),
(6, 1, 'iPhone 6S Plus 32GB', 9900000, '', 'iphone-6s-plus-32gb-600x600.jpg', '', 0),
(7, 1, 'iPhone Xs 256GB', 32990000, '', 'iphone-xs-256gb-white-600x600.jpg', '', 0),
(8, 1, 'iPhone 8 Plus 256GB', 18990000, '', 'iphone-8-plus-256gb.jpg', '', 1),
(9, 2, 'Samsung Galaxy A6+ 2018', 5290000, '', 'samsung-galaxy-a6-plus-2018-xanh-600x600.jpg', '', 0),
(10, 2, 'Samsung Galaxy A7 2018', 6490000, '', 'samsung-galaxy-a7-2018-128gb-black-600x600.jpg', '', 1),
(11, 2, 'Samsung Galaxy A8 Star', 7990000, '<h4>Thiết kế quen thuộc</h4>\r\n                  <p>Bộ đôi iPhone mới không có nhiều thay đổi về mặt thiết kế so với người anh em iPhone 6s và 6s Plus. Máy vẫn mang trong mình thiết kế nguyên khối với các góc cạnh được bo cong mềm mại mang lại cảm giác cầm nắm khá thoải mái.<br><br>\r\n                    Dải nhựa bắt sóng chạy ngang mặt lưng khá \"vô duyên\" trên thế hệ điện thoại cũ đã bị loại bỏ và thay vào đó là phần bắt sóng được chạy dọc thân máy thẩm mỹ hơn.<br><br>\r\n                    Jack cắm tai nghe trên bộ đôi mới cũng đã bị Apple loại bỏ và thay vào đó là người dùng sẽ chỉ sử dụng cổng lightning cho cả việc sạc máy cũng như nghe nhạc. Ngoài ra thì điểm khác biệt dễ nhận ra nhất trên iPhone 7 Plus so với những chiếc iPhone trước là cụm camera kép được làm khá to và lồi hẳn lên ở mặt lưng</p>\r\n                  <img src=\"https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus--7.jpg\" \"/>\r\n                  <h4>Màu Jet black mới</h4>\r\n                  <p>Với bộ đôi điện thoại iPhone mới thì Apple đã bổ sung thêm màu mới cho các thiết bị của mình là màu Jet Back hay còn gọi là đen bóng. Ở phiên bản màu mới này thì dải nhựa bắt sóng đã được làm gần như trùng màu với màu máy giúp thiết bị liền mạch và cuốn hút hơn.<br><br>Ngoài ra thì iPhone 7 Plus cũng sở hữu các màu khác như màu bạc, đen nhám, vàng và hồng.</p>\r\n                  <img src=\" https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus8.jpg\" />\r\n                  <h4>Camera kép ấn tượng</h4>\r\n                  <p>iPhone 7 Plus thể hiện sự đột phá của Apple về camera với bộ đôi camera kép có cùng độ phân giải 12 MP lần đầu tiên xuất hiện trên các chiếc iPhone. Theo đó thì iPhone 7 Plus sẽ có một camera chính góc rộng và một camera tele phụ giúp máy có thể zoom quang học lên 2 lần mà vẫn giữ nguyên chất lượng ảnh.\r\n                    <br><br>\r\n                    Ngoài ra Apple cũng trang bị cho máy khẩu độ lên tới f1.8 giúp iPhone 7 Plus thu nhận ánh sáng tốt hơn. Camera trước được nâng lên độ phân giải 7 MP giúp người dùng có những bức ảnh tự sướng chất lượng.\r\n                  </p>\r\n                  <img src=\"https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus--4.jpg\" />\r\n                  <h4>Phím Home cảm ứng lực</h4>\r\n                  <p>Với bộ đôi iPhone 7 và iPhone 7 Plus thì Apple cũng đã loại bỏ phím Home vật lý truyền thống trên các dòng iPhone và thay vào đó là phím Home cảm ứng lực mới mang lại trải nghiệm mới mẻ và tiện dụng hơn cho người dùng.\r\n                  <img src=\"https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus5.jpg\" />\r\n                  <h4>Hiệu năng mạnh mẽ</h4>\r\n                  <p>Với con chip Apple A10 4 lõi xử lý trong đó có 2 lõi hoạt động với xung nhịp cao và 2 lõi hoạt động với xung nhịp thấp thì iPhone 7 plus sẽ mang lại cho người dùng thời gian sử dụng pin ấn tượng hơn đồng thời tốc độ xử lý cũng nhanh hơn so với thế hệ trước.\r\n                  <br><br>\r\n                  Máy được trang bị 3 GB RAM kết hợp với hệ điều hành iOS mới mang lại cho người dùng trải nghiệm mượt mà, ít khi xảy ra hiện tượng giật lag.<p>\r\n                  <img src=\"https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus--6.jpg\" />\r\n                  <p>Với những nâng cấp khá hữu ích cho người dùng cũng như hiệu năng hàng đầu mà máy mang lại thì iPhone 7 Plus sẽ là smartphone đáng sở hữu nhất trong nửa cuối năm 2016.<p>', 'samsung-galaxy-a8-star-black-600x600.jpg', '<p><b>Màn hình: </b>LED-backlit IPS LCD, 5.5\", Retina HD</p>                   <p><b>Hệ điều hành: </b>iOS 12</p>                   <p><b>Camera sau: </b> Chính 12 MP & Phụ 12 MP</p>                   <p><b>Camera trước: </b> 7 MP</p>                   <p><b>CPU: </b> Apple A10 Fusion 4 nhân 64-bit</p>                   <p><b>RAM: </b> 3 GB</p>                   <p><b>Bộ nhớ trong: </b> 32 GB</p>                   <p><b>Thẻ SIM: </b> 1 Nano SIM, Hỗ trợ 4G</p>                   <p><b>Dung lượng pin: </b> 2900 mAh</p>', 1),
(12, 2, 'Samsung Galaxy A9 2018', 7990000, '', 'samsung-galaxy-a9-2018-blue-600x600.jpg', '', 0),
(13, 2, 'Samsung Galaxy S10+', 25990000, '', 'samsung-galaxy-s10-plus-512gb-ceramic-black-600x600.jpg', '', 0),
(14, 2, 'Samsung Galaxy Note 9', 18990000, '', 'samsung-galaxy-note-9-black-600x600.jpg', '', 1),
(15, 2, 'Samsung Galaxy J6 Plus', 3990000, '', 'samsung-galaxy-j6-plus-7-600x600.jpg', '', 0),
(16, 2, 'Samsung Galaxy J4', 3190000, '', 'samsung-galaxy-j4-core-1-600x600.jpg', '', 0),
(17, 2, 'Samsung Galaxy J2 Core', 1990000, '', 'samsung-galaxy-j2-core-600x600.jpg', '', 0),
(18, 2, 'Samsung Galaxy A50', 7990000, '', 'samsung-galaxy-a50-128gb-blue-600x600.jpg', '', 1),
(19, 2, 'Samsung Galaxy A70', 9290000, '', 'samsung-galaxy-a70-black-600x600.jpg', '', 1),
(20, 5, 'Xiaomi Mi 8', 10990000, '', 'xiaomi-mi-8-black-600x600.jpg', '', 1),
(22, 5, 'Xiaomi Mi 8 Lite', 6490000, '', 'xiaomi-mi-8-lite-6gb-18thangbh-600x600.jpg', '', 0),
(24, 5, 'Xiaomi Mi A2 Lite', 3590000, '', 'xiaomi-mi-a2-lite-gold-600x600.jpg', '', 0),
(25, 5, 'Xiaomi Redmi 7', 3690000, '', 'xiaomi-redmi-7-16gb-black-docquyen-600x600.jpg', '', 0),
(31, 5, 'Xiaomi Redmi Note 6 Pro', 4890000, '', 'xiaomi-redmi-note-6-pro-32gb-blue-18thangbh-600x600.jpg', '', 0),
(35, 5, 'Xiaomi Redmi Note 7', 4690000, '', 'xiaomi-redmi-note-7-blue-18thangbh-600x600.jpg', '', 0),
(36, 8, 'Vsmart Active 1+', 5590000, '', 'vsmart-active-1-plus-blue-600x600.jpg', '', 0),
(37, 8, 'Vsmart Joy 1+ 16GB', 2190000, '', 'vsmart-joy-1-plus-16gb-blue-600x600.jpg', '', 0),
(38, 8, 'Vsmart Joy 1 Plus 32GB', 2590000, '', 'vsmart-joy-1-plus-black-600x600.jpg', '', 0),
(40, 9, 'Vivo V11i', 5490000, '', 'vivo-v11i-blue-600x600.jpg', '', 1),
(41, 9, 'Vivo V15 128GB', 7990000, '', 'vivo-v15-quanghai-600x600.jpg', '', 1),
(42, 9, 'Vivo Y15', 4990000, '', 'vivo-y15-600x600.jpg', '', 0),
(43, 9, 'Vivo Y71', 2590000, '', 'vivo-y71-docquyen-600x600.jpg', '', 0),
(44, 9, 'Vivo Y85', 3690000, '', 'vivo-y85-red-docquyen-600x600.jpg', '', 0),
(45, 9, 'Vivo Y91', 3990000, '', 'vivo-y91-600x600.jpg', '', 0),
(46, 9, 'Vivo Y91C', 2990000, '', 'vivo-y91c-600x600.jpg', '', 0),
(47, 3, 'OPPO A3S', 3790000, '', 'oppo-a3s-16gb-1853-600x600.jpg', '', 0),
(48, 3, 'OPPO A5S', 3990000, '', 'oppo-a5s-red-600x600.jpg', '', 0),
(49, 3, 'OPPO A7', 3990000, '', 'oppo-a7-green-600x600.jpg', '', 0),
(53, 3, 'OPPO F7', 5490000, '', 'oppo-f7-red-mtp-600x600.jpg', '', 1),
(54, 3, 'OPPO F9', 6190000, '', 'oppo-f9-6gb-red-600x600.jpg', '', 1),
(55, 3, 'OPPO F11', 8490000, '', 'oppo-f11-mtp-600x600.jpg', '', 1),
(65, 3, 'OPPO F11 Pro', 8490000, '', 'oppo-f11-pro-xam-128gb-docquyen-600x600.jpg', '', 1),
(66, 6, 'Nokia 2.1', 1790000, '', 'nokia-21-black-giatot-600x600.jpg', '', 0),
(67, 6, 'Nokia 3.1', 2790000, '', 'nokia-31-plus-18thangbh-600x600.jpg', '', 0),
(68, 6, 'Nokia 3.2', 2990000, '', 'nokia-32-1-600x600.jpg', '', 0),
(69, 6, 'Nokia 5.1', 3790000, '', 'nokia-51-plus-black-18thangbh-600x600.jpg', '', 0),
(70, 6, 'Nokia 6.1 Plus', 4790000, '', 'nokia-61-plus-2-600x600.jpg', '', 0),
(71, 6, 'Nokia 8.1', 7490000, '', 'nokia-81-silver-18thangbh-600x600.jpg', '', 1),
(72, 4, 'Huawei Nova 3i', 5490000, '', 'huawei-nova-3i-trang-chipu-600x600.jpg', '', 0),
(73, 4, 'Huawei P30', 16990000, '', 'huawei-p30-blue-600x600.jpg', '', 0),
(74, 4, 'Huawei P30 Lite', 6990000, '', 'huawei-p30-lite-1-600x600.jpg', '', 1),
(75, 4, 'Huawei P30 Pro', 22990000, '', 'huawei-p30-pro-1-600x600.jpg', '', 0),
(76, 4, 'Huawei Y6 Prime', 2790000, '', 'huawei-y6-prime-2018-1-2-600x600.jpg', '', 0),
(77, 4, 'Huawei Y7 Pro', 3490000, '', 'huawei-y7-pro-2019-1-600x600.jpg', '', 0),
(78, 4, 'Huawei Y9', 4990000, '', 'huawei-y9-2019-blue-600x600.jpg', '', 0),
(80, 3, 'OPPO R17 Pro', 13390000, '', 'oppo-r17-pro-14-600x600.jpg', '', 1),
(81, 7, 'Asus Zenfone Max Pro M1', 5990000, '', 'asus-zenfone-max-pro-m1-blue-silver-600x600.jpg', '', 0),
(82, 7, 'Asus Zenfone Max Pro M2', 3790000, '', 'asus-zenfone-max-pro-m2-600x600.jpg', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Lion', 'To', 'hieuthanhpy99@gmail.com', '123456', '0377369213', 'KTX1', 'KTX2'),
(3, 'a', '', 'hi@gmail.com', '123456', '', '', '');

--
-- Bẫy `user_info`
--
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info_backup`
--

CREATE TABLE `user_info_backup` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_info_backup`
--

INSERT INTO `user_info_backup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, '', '', '', '', '', '', ''),
(12, 'puneeth', 'Reddy', 'puneethreddy951@gmail.com', '123456789', '9448121558', '123456789', 'sdcjns,djc'),
(14, 'hemanthu', 'reddy', 'hemanthreddy951@gmail.com', '123456788', '6526436723', 's,dc wfjvnvn', 'b efhfhvvbr'),
(15, 'hemu', 'ajhgdg', 'keeru@gmail.com', '346778', '536487276', ',mdnbca', 'asdmhmhvbv'),
(16, 'venky', 'vs', 'venkey@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(19, 'abhishek', 'bs', 'abhishekbs@gmail.com', 'asdcsdcc', '9871236534', 'bangalore', 'hassan'),
(20, 'pramod', 'vh', 'pramod@gmail.com', '124335353', '9767645653', 'ksbdfcdf', 'sjrgrevgsib'),
(21, 'prajval', 'mcta', 'prajvalmcta@gmail.com', '1234545662', '202-555-01', 'bangalore', 'kumbalagodu'),
(22, 'puneeth', 'v', 'hemu@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(23, 'hemanth', 'reddy', 'hemanth@gmail.com', 'Puneeth@123', '9876543234', 'Bangalore', 'Kumbalagodu'),
(24, 'newuser', 'user', 'newuser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu'),
(25, 'otheruser', 'user', 'otheruser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`customer_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_pro_id`),
  ADD KEY `order_products` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_brandID` (`brand_id`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `user_info_backup`
--
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `email_info`
--
ALTER TABLE `email_info`
  MODIFY `email_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_pro_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_info_backup`
--
ALTER TABLE `user_info_backup`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`customer_id`) REFERENCES `user_info` (`user_id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_products` FOREIGN KEY (`order_id`) REFERENCES `bill` (`order_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_brandID` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
