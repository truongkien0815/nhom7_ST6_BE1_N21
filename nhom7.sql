-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 06:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom7`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Sony'),
(2, 'Oppo'),
(3, 'Samsung'),
(4, 'Apple'),
(5, 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(2, 'Điện thoại OPPO A74', 2, 1, 6690000, 'oppo-a74-blue-9.jpg', 'Chiếc điện thoại OPPO A74 vẫn sở hữu cụm camera nằm trong mô-đun hình chữ nhật góc trái thân thuộc của hãng, máy được gia công tỉ mỉ, tối ưu kích thước giúp smartphone mỏng nhẹ, thiết kế thân máy cong 3D mảnh mai, dễ cầm nắm sử dụng.', 1, '2021-10-29 03:02:57'),
(3, 'Điện thoại Samsung Galaxy A52s 5G', 3, 1, 10990000, 'samsung-galaxy-a52s-5g-mint.jpg', 'Samsung Galaxy A52s tiếp tục sử dụng ngôn ngữ thiết kế nguyên khối theo phong cách trẻ trung với các tuỳ chọn màu sắc như: Đen, trắng, tím và xanh mint.', 1, '2021-10-29 03:02:57'),
(4, 'iPhone 13 Pro Max', 4, 1, 31490000, 'iphone-13-pro-max-graphite-600x600.jpg', 'iPhone mới kế thừa thiết kế đặc trưng từ iPhone 12 Pro Max khi sở hữu khung viền vuông vức, mặt lưng kính cùng màn hình tai thỏ tràn viền nằm ở phía trước.', 1, '2021-10-29 03:02:57'),
(5, 'Laptop HP Envy 13 ba1030TU i7 1165G7/8GB/512GB/Office H&S2019/Win10 (2K0B6PA)', 5, 2, 30490000, 'hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857.jpg', 'Laptop HP Envy 13 ba1030TU i7 (2K0B6PA) sở hữu thiết kế mỏng nhẹ cùng cấu hình cực mạnh mẽ đáp ứng đa dạng nhu cầu làm việc, giúp bạn đạt được hiệu suất làm việc tốt nhất.', 1, '2021-10-29 03:02:57'),
(26, 'Samsung Galaxy Tab S7 FE', 3, 4, 12790000, 'samsung-galaxy-tab-s7-fe-green-600x600.jpg', 'Samsung chính thức trình làng mẫu máy tính bảng có tên Galaxy Tab S7 FE, máy trang bị cấu hình mạnh mẽ, màn hình giải trí siêu lớn và điểm ấn tượng nhất là viên pin siêu khủng được tích hợp bên trong, giúp tăng hiệu suất làm việc nhưng vẫn có tính di động cực cao.', 1, '2021-10-29 03:02:57'),
(6, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 R177N Trắng ', 3, 5, 2990000, 'bluetooth-true-wireless-samsung-buds-2-r177n-trang-600x600.jpg', 'Thiết kế thời thượng, cá tính.\r\nChất âm chuẩn studio với loa 2 chiều.\r\nHiệu quả chống ồn lên đến 98%.\r\nĐàm thoại dễ dàng với 3 micro và bộ cảm biến nhận diện giọng nói.\r\nĐồng bộ với các thiết bị Samsung Galaxy.\r\nThời gian nghe nhạc: Khoảng 5 giờ (bật chống ồn), khoảng 7.5 giờ (tắt chống ồn).\r\nThời gian đàm thoại: Khoảng 3.5 giờ (bật chống ồn), khoảng 3.5 giờ (tắt chống ồn).\r\n 5 phút sạc cho 1 giờ chơi nhạc\r\nĐạt tiêu chuẩn chống nước IPX2.\r\nĐiều khiển cảm ứng dừng/phát, trả lời cuộc gọi, chuyển bài.', 1, '2021-10-29 03:05:49'),
(7, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 3, 4, 9090000, 'samsung-galaxy-tab-s6-lite-600x600-2-600x600.jpg', 'Máy tính bảng Galaxy Tab S6 Lite sở hữu thiết ấn tượng với độ dày chỉ 7mm và trọng lượng siêu nhẹ 467g, giúp người dùng dễ dàng bỏ vào túi xách hay mang theo bất kì đâu.', 1, '2021-10-29 03:05:49'),
(8, 'Loa Bluetooth Sony SRS-XB13', 1, 3, 1290000, 'bluetooth-sony-srs-xb13-avatar-600x600.jpg', 'Thiết kế nhỏ gọn, vỏ chống trầy với UV coating, có dây treo tiện dụng.\r\nÂm bass mạnh mẽ nhờ công nghệ Extra Bass và bộ xử lý khuếch tán âm thanh.\r\nHỗ trợ nghe nhạc không dây qua kết nối Bluetooth 4.2.\r\nKết nối cùng lúc 2 loa SRS-XB13 để trải nghiệm âm thanh Stereo.\r\nThời lượng pin lên đến 16 tiếng, sạc đầy pin trong khoảng 4 - 5 tiếng.\r\nChuẩn chống nước, chống bụi IP67 thoải mái thưởng thức âm nhạc ở bất cứ nơi đâu.\r\nDễ thao tác tăng/giảm âm lượng, phát/dừng nhạc, nghe/nhận cuộc gọi,...', 1, '2021-10-29 03:41:30'),
(9, 'Loa Bluetooth Sony Extra Bass SRS-XB23', 1, 3, 2365000, 'loa-bluetooth-sony-extra-bass-srs-xb23-den-av-600x600.jpg', 'Loa Sony kiểu dáng tinh tế, năng động, dễ mang theo \r\nHình trụ tròn tinh xảo, loa có kích thước dễ cầm nắm, di chuyển. Sở hữu các màu sắc sang trọng là xanh dương, đen, xanh rêu giúp tôn vinh nét đẹp của mọi không gian sử dụng, cho người dùng thêm cá tính, sành điệu.', 1, '2021-10-29 03:05:49'),
(10, 'Loa Bluetooth Sony Extra Bass SRS-XB33 ', 1, 3, 3505000, 'bluetooth-airpods-2-apple-mv7n2-imei-ava-600x600.jpg', 'Loa Bluetooth kiểu dáng năng động, nhiều màu sắc lựa chọn\r\nThiết kế cầm vừa tay, có thể trực tiếp cầm loa nghe nhạc hoặc cho vào túi xách, balo khi đi chơi, du lịch, đi làm,... Với 3 gam màu nổi bật là đen, đỏ và xanh dương, bạn nam và nữ có thể tiện chọn mua theo sở thích của mình.', 1, '2021-10-29 03:05:49'),
(11, 'Điện thoại OPPO Reno5 5G', 2, 1, 899000, 'oppo-reno5-5g-thumb-600x600.jpg', '', 0, '2021-10-23 11:18:10'),
(12, 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81', 2, 5, 1290000, 'bluetooth-tws-oppo-enco-buds-eti81-ava-1-600x600.jpg', '', 0, '2021-10-22 22:51:10'),
(13, 'Tai nghe Có Dây EP OPPO MH151', 2, 5, 472000, 'co-day-ep-oppo-mh151-10-600x600.jpg', '', 0, '2021-10-22 22:55:36'),
(14, 'iPhone 13 Pro', 4, 1, 29990000, 'iphone-13-pro-sierra-blue-600x600.jpg', 'iPhone 13 Pro không có nhiều sự thay đổi về thiết kế, khi máy vẫn sở hữu kiểu dáng tương tự như iPhone 12 Pro với các cạnh viền vuông vắn và hai mặt kính cường lực cao cấp. Sở hữu 4 phiên bản màu gồm xanh dương, bạc, vàng đồng và xám cho bạn tùy chọn theo sở thích của mình. ', 1, '2021-10-29 03:05:49'),
(15, 'iPhone 13 mini', 4, 1, 32890000, 'iphone-13-mini-blue-2-600x600.jpg', 'iPhone 13 mini được trang bị bộ vi xử lý A15 Bionic sản xuất trên tiến trình 5 nm giúp cải thiện hiệu suất và giảm điện năng tiêu thụ đến 15% so với phiên bản A14 Bionic trước đó, đáp ứng hoàn hảo trong công việc cũng như trong giải trí của người dùng tốt hơn.', 1, '2021-10-29 03:05:49'),
(16, 'Điện thoại iPhone XR 64GB ', 4, 1, 13490000, 'iphone-xr-hopmoi-den-600x600-2-600x600.jpg', '', 0, '2021-10-29 03:05:49'),
(17, 'iPhone SE (2020)', 4, 1, 12490000, 'iphone-se-128gb-2020-do-600x600.jpg', 'Không nằm ngoài mọi đồn đoán, iPhone SE 2020 mang trên mình hình dáng của iPhone 8 cách đây 3 năm, vẫn mặt lưng bằng kính và khung kim loại, cảm biến vân tay touch ID huyền thoại đã quay trở lại và nằm ở vị trí quen thuộc.\r\n\r\nĐối với những ai ưa thích sự nhỏ gọn, đặc biệt là các bạn nữ thì iPhone SE là một sự lựa chọn lý tưởng. Kích thước nhỏ gọn không quá to, giúp cho iPhone SE 2020 dễ dàng cầm nắm và sử dụng bằng 1 tay hay nhét vào túi quần dễ dàng.', 0, '2021-10-29 03:05:49'),
(18, 'HP 15s fq2556TU i7 1165G7 (46M24PA)', 5, 2, 20090000, 'hp-15s-fq2556tu-i7-46m24pa-600x600.jpg', '', 0, '2021-10-22 23:50:30'),
(19, 'HP Pavilion 15 eg0505TU i5 1135G7 (46M02PA)', 5, 2, 18790000, 'hp-pavilion-15-eg0505tu-i5-46m02pa-15-600x600.jpg', '', 0, '2021-10-22 23:52:02'),
(20, 'HP 240 G8 i5 1135G7 (518V7PA)', 5, 2, 18090000, 'hp-240-g8-i5-1135g7-8gb-512gb-win10-518v7pa-600x600.jpg', '', 0, '2021-10-22 23:52:57'),
(21, 'HP Pavilion 14 dv0520TU i3 1125G4 (46L92PA)', 5, 2, 14690000, 'hp-pavilion-14-dv0520tu-i3-1125g4-4gb-256gb-600x600.jpg', '', 0, '2021-10-29 03:47:55'),
(22, 'Loa Bluetooth Sony Extra Bass SRS-XB22', 1, 3, 1790000, 'loa-bluetooth-sony-srs-xb22-600x600.jpg', 'Loa Bluetooth Sony SRS-XB22 có thiết kế năng động, màu sắc nổi bật, dễ dàng mang theo, cho các buổi tiệc thêm phần vui nhộn', 1, '2021-10-29 03:09:01'),
(23, 'Loa Bluetooth Sony Extra Bass SRS-XB12', 1, 3, 1090000, 'loa-bluetooth-sony-srs-xb12-1-600x600.jpg', 'Loa Bluetooth Sony SRS-XB12 có thiết kế nhỏ gọn, 4 màu sắc thời trang và năng động, phù hợp mang theo trong những chuyến đi chơi ngoài trời', 1, '2021-10-29 03:09:01'),
(33, 'Tai nghe Có Dây Samsung IG935', 3, 5, 270000, 'tai-nghe-nhet-tai-samsung-ig935b-avatar-1-600x600.jpg', 'Thiết kế nhỏ nhẹ, đệm tai êm, đeo dễ chịu.\r\nTrang bị jack 3.5 mm thông dụng, dây dài 1.2 m.\r\nÂm thanh chi tiết, sinh động.\r\nCó mic thoại, nút chuyển bài, dừng/chơi nhạc, tăng/giảm âm lượng, nhận cuộc gọi.', 1, '2021-10-29 03:50:20'),
(25, 'Tai nghe Bluetooth 1 Bên Samsung MG900E', 3, 5, 765000, 'tai-nghe-bluetooth-samsung-mg900e-avatar-1-1-600x600.jpg', 'Tai nghe Bluetooth Samsung MG900E có 2 màu đen - trắng, kiểu dáng nhỏ gọn, vỏ nhựa cho trọng lượng nhẹ', 1, '2021-10-29 03:09:01'),
(28, 'Samsung Galaxy Tab A7 Lite', 3, 4, 4140000, 'samsung-galaxy-tab-a7-lite-gray-600x600.jpg', 'Galaxy Tab A7 Lite sở hữu kiểu thiết kế đặc trưng của dòng Galaxy Tab A7. Thiết bị sử dụng chất liệu nhôm với thiết kế nguyên khối giúp cho máy trở nên cao cấp hơn dù chỉ thuộc phân khúc tầm trung giá rẻ.', 1, '2021-10-29 03:09:01'),
(27, 'Samsung Galaxy Tab S7', 3, 4, 15990000, 'samsung-galaxy-tab-s7-gold-new-600x600.jpg', 'Samsung Galaxy Tab S7 chiếc máy tính bảng có thiết kế tuyệt đẹp, màn hình 120 Hz siêu mượt, camera kép ấn tượng, bút S Pen cùng một hiệu năng mạnh mẽ thuộc top đầu thị trường máy tính bảng Android.', 1, '2021-10-29 03:09:01'),
(29, 'Samsung Galaxy Tab A7 (2020)', 3, 4, 7390000, 'samsung-galaxy-tab-a7-2020-vangdong-600x600.jpg', 'Chiếc Galaxy Tab A7 mang khá nhiều nét kế thừa từ người đàn anh ở phân khúc cao cấp là Galaxy Tab S7 vừa ra mắt không lâu, sở hữu thiết kế nguyên khối cứng cáp liền mạch, được hoàn thiện từ nhôm đi kèm khung viền kim loại sang trọng, ấn tượng.', 1, '2021-10-29 03:09:01'),
(30, 'iPhone 13 128GB', 4, 1, 24990000, 'iphone-13-midnight-2-600x600.jpg', '', 0, '2021-10-29 03:09:01'),
(37, 'Điện thoại OPPO Reno6 Z 5G', 2, 1, 9490000, 'oppo-reno6-z-5g-aurora-1.jpg', 'Hệ thống camera sau được trang bị tối tân, trong đó có camera chính 64 MP, camera góc siêu rộng 8 MP và camera macro 2 MP cùng camera trước 32 MP luôn sẵn sàng bắt trọn mọi cảm xúc trong khung hình, giúp người dùng thoải mái ghi lại những khoảnh khắc trong cuộc sống một cách ấn tượng nhất.', 1, '2021-10-29 03:09:01'),
(52, 'iphone mới', 1, 1, 10000000, 'iphone_x_64gb_3.jpg', '1', 0, '2021-12-16 09:17:49'),
(57, 'Điện thoại Samsung Galaxy Z Fold3 5G 256GB', 3, 1, 41900000, 'samsung-galaxy-tab-a7-lite-gray-600x600.jpg', '<h3 style=\"text-align: center; margin: 20px 0px 15px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 20px; line-height: 28px; font-family: Arial, Helvetica, sans-serif; color: rgb(51, 51, 51); outline: none;\"><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3\" target=\"_blank\" title=\"Tham khảo giá điện thoại Samsung Galaxy Z Fold3 5G 256GB chính hãng\" style=\"margin: 0px; padding: 0px; transition: all 0.2s ease 0s; color: rgb(47, 128, 237); font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; outline: none;\">Galaxy Z Fold3 5G</a>, chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone chính hãng\" style=\"margin: 0px; padding: 0px; transition: all 0.2s ease 0s; color: rgb(47, 128, 237); font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; outline: none;\">điện thoại</a>&nbsp;được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của&nbsp;<a href=\"https://thegioididong.com/samsung\" target=\"_blank\" title=\"Tham khảo sản phẩm Samsung chính hãng tại Thegioididong.com\" style=\"margin: 0px; padding: 0px; transition: all 0.2s ease 0s; color: rgb(47, 128, 237); font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; outline: none;\">Samsung</a>&nbsp;góp phần mang đến những trải nghiệm mới cho người dùng.</h3>', 0, '2021-12-23 14:15:55'),
(61, 'nhom7v1', 3, 1, 12000000, 'dell-gaming-g15-5515-r7-5800h-16gb-512gb-4gb-600x600.jpg', '<p><u>nhóm 7 v1 là đây</u></p>', 0, '2021-12-24 01:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Loa'),
(4, 'Tablet'),
(5, 'Tai nghe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `soDT` int(11) NOT NULL,
  `gmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password1`, `role_id`, `soDT`, `gmail`) VALUES
(9, 'kien', 'c4ca4238a0b923820dcc509a6f75849b', 0, 978380000, 'truongkien0978@gmail.com'),
(11, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1, 111, 'truongkien0978@gmail.com'),
(72, 'kien2', 'c4ca4238a0b923820dcc509a6f75849b', 0, 2222, 'truongkien08@gmail.com'),
(74, 'kienv2', 'c4ca4238a0b923820dcc509a6f75849b', 0, 222, 'truongkien@gmail.com'),
(85, 'nhom7', 'c4ca4238a0b923820dcc509a6f75849b', 0, 222, 'truongkien@gmail.com'),
(86, 'kienv7', 'c4ca4238a0b923820dcc509a6f75849b', 0, 333, 'truongkien@gmail.com'),
(87, 'kienv098', 'c4ca4238a0b923820dcc509a6f75849b', 0, 19192, 'kienv1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
