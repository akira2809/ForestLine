-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2024 lúc 03:09 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_pro1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image_blog` varchar(200) NOT NULL,
  `author` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_review`
--

CREATE TABLE `blog_review` (
  `blog_review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Áo sơ mi nam'),
(2, 'Áo thun nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `slogan` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collection`
--

INSERT INTO `collection` (`collection_id`, `title`, `image`, `slogan`, `status`) VALUES
(1, 'mùa hè sôi động', 'download.jpg', 'hehehe', 1),
(2, 'mùa hè sôi động', 'download1.jpg', 'hehehe', 1),
(5, 'tesst', 'download4.jpg', 'hehehe', 1),
(7, '', 'uploads.', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`image_id`, `product_id`, `image`) VALUES
(13, 11, 'line dino teeCopy.webp'),
(14, 11, 'line dino tee-canoCopy.webp'),
(15, 11, 'line dino tee-dt1Copy.webp'),
(16, 11, 'line dino tee-grayCopy.webp'),
(17, 11, 'line dino tee-navyCopy.webp'),
(18, 10, 'polo five star-blackCopy.webp'),
(19, 10, 'polo five star-canoli creamCopy.webp'),
(20, 10, 'polo five star-dt1Copy.webp'),
(21, 10, 'polo five star-pastel pinkCopy.webp'),
(22, 10, 'polo five star-sky blueCopy.png'),
(23, 9, 'baby tee pinky draco-canoli creamCopy.webp'),
(24, 9, 'baby tee pinky draco-dt1Copy.webp'),
(25, 9, 'baby tee pinky draco-redCopy.png'),
(26, 8, 'lovin baby tee-blackCopy.webp'),
(27, 8, 'lovin baby tee-canoli creamCopy.webp'),
(28, 8, 'lovin baby tee-dt1Copy.webp'),
(29, 7, 'billard club tee-blackCopy.webp'),
(30, 7, 'billiard club tee-canoli creamCopy.webp'),
(31, 6, 'Áo thun bow tie-blackCopy.webp'),
(32, 6, 'Áo thun bow tie-pinkCopy.webp'),
(33, 6, 'Áo thun bow tie-whiteCopy.webp'),
(34, 5, 'bunnies tee-blackCopy.webp'),
(35, 5, 'bunnies tee-canoli creamCopy.webp'),
(36, 5, 'bunnies tee-dt1Copy.webp'),
(37, 5, 'bunnies tee-dt2Copy.webp'),
(38, 5, 'bunnies tee-dt3Copy.jpg'),
(39, 5, 'bunnies tee-dt4Copy.jpg'),
(40, 5, 'bunnies tee-redCopy.webp'),
(41, 4, 'Áo thun corgi line-blackCopy.webp'),
(42, 4, 'Áo thun corgi line-dt1Copy.jpg'),
(43, 4, 'Áo thun corgi line-dt2Copy.jpg'),
(44, 4, 'Áo thun corgi line-dt3Copy.jpg'),
(45, 4, 'Áo thun corgi line-navyCopy.jpg'),
(46, 4, 'Áo thun corgi line-white creamCopy.webp'),
(47, 3, 'Áo thun babytee original phối line-blackCopy.webp'),
(48, 3, 'Áo thun babytee original phối line-dtCopy.jpg'),
(49, 3, 'Áo thun babytee original phối line-pinkCopy.webp'),
(50, 3, 'Áo thun babytee original phối line-redCopy.webp'),
(51, 3, 'Áo thun babytee original phối line-whiteCopy.webp'),
(52, 2, 'uploadsCopy.'),
(53, 1, 'hoodieCopy.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Confirmed','Shipped','Canceled','Delivered') NOT NULL DEFAULT 'Pending',
  `total_money` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` text NOT NULL,
  `voucher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`, `status`, `total_money`, `user_name`, `phone_number`, `address`, `voucher_id`) VALUES
(50, 1, '2024-12-03 00:38:05', 'Pending', 542000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', 2),
(51, 1, '2024-12-03 07:27:24', 'Pending', 383000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(52, 1, '2024-12-03 07:30:32', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(53, 1, '2024-12-03 07:35:27', 'Pending', 204000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(54, 1, '2024-12-03 09:42:35', 'Pending', 275000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(55, 1, '2024-12-03 11:11:09', 'Pending', 184000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', 2),
(56, 1, '2024-12-03 11:14:04', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(57, 1, '2024-12-03 11:14:22', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(59, 1, '2024-12-03 13:14:23', 'Pending', 373000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', 2),
(60, 1, '2024-12-03 13:17:24', 'Pending', 373000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', 2),
(61, 1, '2024-12-04 12:41:13', 'Delivered', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(62, 1, '2024-12-04 12:45:22', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(63, 1, '2024-12-04 12:46:34', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(64, 1, '2024-12-04 12:47:11', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(65, 1, '2024-12-04 12:47:24', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(66, 1, '2024-12-04 12:48:19', 'Delivered', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(67, 1, '2024-12-05 10:59:31', 'Pending', 383000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(68, 1, '2024-12-05 10:59:52', 'Pending', 383000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(69, 1, '2024-12-05 10:59:52', 'Pending', 383000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL),
(70, 1, '2024-12-05 11:00:14', 'Pending', 214000, 'Boss Huy', 764303467, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_variant_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `review` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `product_variant_id`, `quantity`, `price`, `review`) VALUES
(51, 50, 267, 2, 179000, 0),
(52, 50, 272, 1, 179000, 0),
(53, 51, 265, 1, 179000, 0),
(54, 51, 273, 1, 179000, 0),
(55, 52, 283, 1, 189000, 0),
(56, 53, 274, 1, 179000, 0),
(57, 54, 293, 2, 125000, 0),
(58, 55, 274, 1, 179000, 0),
(59, 56, 284, 1, 189000, 0),
(60, 59, 277, 1, 189000, 0),
(61, 59, 272, 1, 179000, 0),
(62, 61, 287, 1, 189000, 0),
(63, 66, 276, 1, 189000, 1),
(64, 67, 274, 2, 179000, 0),
(65, 70, 280, 1, 189000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method` varchar(70) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` enum('SUCCESS','PENDING','FAILED','CANCELLED','REFUND') NOT NULL DEFAULT 'PENDING',
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `payment_method`, `order_id`, `status`, `update_at`) VALUES
(7, 'Chuyển khoản ngân hàng', 50, 'SUCCESS', '2024-12-03 00:38:51'),
(8, 'Chuyển khoản ngân hàng', 51, 'CANCELLED', '2024-12-03 07:28:17'),
(9, 'Chuyển khoản ngân hàng', 52, 'PENDING', NULL),
(10, 'Chuyển khoản ngân hàng', 53, 'SUCCESS', '2024-12-03 07:36:29'),
(11, 'Chuyển khoản ngân hàng', 54, 'PENDING', NULL),
(12, 'Chuyển khoản ngân hàng', 55, 'SUCCESS', '2024-12-03 11:12:37'),
(13, 'Chuyển khoản ngân hàng', 56, 'PENDING', NULL),
(14, 'Chuyển khoản ngân hàng', 57, 'PENDING', NULL),
(15, 'Chuyển khoản ngân hàng', 60, 'SUCCESS', '2024-12-03 13:20:08'),
(16, 'Thanh toán khi giao hàng', 61, 'PENDING', NULL),
(17, 'Thanh toán khi giao hàng', 62, 'PENDING', NULL),
(18, 'Thanh toán khi giao hàng', 63, 'PENDING', NULL),
(19, 'Thanh toán khi giao hàng', 64, 'PENDING', NULL),
(20, 'Thanh toán khi giao hàng', 65, 'PENDING', NULL),
(21, 'Thanh toán khi giao hàng', 66, 'PENDING', NULL),
(22, 'Chuyển khoản ngân hàng', 67, 'PENDING', NULL),
(23, 'Chuyển khoản ngân hàng', 68, 'PENDING', NULL),
(24, 'Chuyển khoản ngân hàng', 69, 'PENDING', NULL),
(25, 'Chuyển khoản ngân hàng', 70, 'PENDING', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `base_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `main_image` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `collection_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `name`, `base_price`, `sale_price`, `description`, `main_image`, `status`, `collection_id`, `category_id`, `view`) VALUES
(1, 'Áo Hoodie Nam', 300000, 245000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'hoodie.jpg', 1, NULL, 1, 2),
(3, 'Áo Thun Babytee Original Phối Line', 149000, 219000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'abo2016_631c6c00d4024960bfab310ba85ebfe2_master.webp', 1, NULL, 2, 0),
(4, 'Áo Thun Corgi Line / Unisex Localbrand', 179000, 219000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'ao-thun-corgi-lineCopy.webp', 1, NULL, 2, 0),
(5, 'Bunnies Tee', 187000, 380000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'bunniesCopy.webp', 1, NULL, 1, 0),
(6, 'Áo Thun Bow Tie', 187000, 255000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'bowtieCopy.webp', 1, NULL, 2, 0),
(7, 'Billiard Club Tee', 177000, 380000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'billardCopy.webp', 1, NULL, 1, 0),
(8, 'Lovin Baby Tee', 159000, 250000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'lovinbbteeCopy.webp', 1, NULL, 2, 0),
(9, 'Baby tee Pinky Draco', 125000, 230000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'bbteepinkyCopy.webp', 1, NULL, 2, 6),
(10, 'Polo Five Star', 189000, 250000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'polofiveCopy.webp', 1, NULL, 1, 2),
(11, 'Line Dino Tee', 179000, 380000, '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Tên sản phẩm: Phông Mệt<br>Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi mệt vì những câu chuyện nhỏ mà vui</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Kích thước<br>S 1m60 - 1m65 55 - 60kg<br>M 1m64 - 1m69 60 - 65kg<br>L 1m70 - 1m74 66 - 70kg<br>XL 1m74 - 1m7670 - 76kg</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Chất liệu<br>Cotton mềm</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Phong cách liên quan<br>Streetwear, beachwear,...</p><h6 style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">PHONG CÁCH</h6><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(248, 249, 250);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">Dáng người phù hợp: Quả lê<br>Gợi ý kết hợp: Jeans beggie, Chân váy</p>', 'outerity line dino teeCopy.webp', 1, NULL, 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_color`
--

CREATE TABLE `product_color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(50) NOT NULL,
  `hex_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_color`
--

INSERT INTO `product_color` (`color_id`, `color_name`, `hex_color`) VALUES
(1, 'Trắng', '#FFFFFF'),
(2, 'Đen', '#000000'),
(3, 'Xanh dương', '#0000FF'),
(4, 'Đỏ', '#FF0000'),
(5, 'Vàng', '#FFFF00'),
(6, 'Xanh lá', '#008800'),
(7, 'Hồng', '#FF00FF'),
(8, 'Xám', '#808080'),
(9, 'Xanh dương nhạt', '#00FFFF'),
(10, 'Nâu', '#A52A2A'),
(11, 'Xanh dương đậm', '#00008B');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_size`
--

CREATE TABLE `product_size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_size`
--

INSERT INTO `product_size` (`size_id`, `size_name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variant`
--

CREATE TABLE `product_variant` (
  `product_variant_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 50,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variant`
--

INSERT INTO `product_variant` (`product_variant_id`, `product_id`, `color_id`, `size_id`, `stock`, `image_id`) VALUES
(264, 11, 2, 1, 200, 13),
(265, 11, 2, 2, 198, 13),
(266, 11, 2, 3, 199, 13),
(267, 11, 1, 1, 198, 14),
(268, 11, 1, 2, 200, 14),
(269, 11, 1, 3, 200, 14),
(270, 11, 1, 4, 200, 14),
(271, 11, 8, 1, 200, 16),
(272, 11, 8, 2, 198, 16),
(273, 11, 11, 1, 199, 17),
(274, 11, 11, 2, 195, 17),
(275, 10, 2, 1, 200, 18),
(276, 10, 2, 2, 199, 18),
(277, 10, 2, 3, 199, 18),
(278, 10, 2, 4, 200, 18),
(279, 10, 1, 1, 200, 19),
(280, 10, 1, 2, 199, 19),
(281, 10, 1, 3, 400, 19),
(282, 10, 1, 4, 200, 19),
(283, 10, 7, 1, 199, 21),
(284, 10, 7, 2, 199, 21),
(285, 10, 7, 3, 200, 21),
(286, 10, 6, 2, 200, 22),
(287, 10, 6, 3, 199, 22),
(288, 9, 1, 1, 200, 23),
(289, 9, 1, 2, 200, 23),
(290, 9, 1, 3, 200, 23),
(291, 9, 1, 4, 200, 23),
(292, 9, 4, 1, 200, 25),
(293, 9, 4, 2, 198, 25),
(294, 9, 4, 3, 200, 25),
(295, 8, 1, 1, 200, 27),
(296, 8, 1, 2, 200, 27),
(297, 8, 1, 3, 200, 27),
(298, 8, 1, 4, 200, 27),
(299, 8, 2, 1, 200, 26),
(300, 8, 2, 2, 200, 26),
(301, 8, 2, 3, 200, 26),
(302, 7, 2, 1, 200, 29),
(303, 7, 2, 2, 200, 29),
(304, 7, 2, 3, 200, 29),
(305, 7, 2, 4, 200, 29),
(306, 7, 1, 1, 200, 30),
(307, 7, 1, 3, 200, 30),
(308, 7, 1, 2, 200, 30),
(309, 7, 1, 4, 200, 30),
(310, 6, 1, 1, 200, 33),
(311, 6, 1, 2, 200, 33),
(312, 6, 1, 3, 200, 33),
(313, 6, 1, 4, 200, 33),
(314, 6, 2, 1, 200, 31),
(315, 6, 2, 2, 200, 31),
(316, 6, 7, 1, 200, 32),
(317, 6, 7, 2, 200, 32),
(318, 6, 7, 3, 200, 32),
(319, 6, 7, 4, 200, 32),
(320, 6, 2, 3, 200, 31),
(321, 3, 2, 1, 200, 47),
(322, 3, 2, 2, 200, 47),
(323, 3, 2, 3, 200, 47),
(324, 3, 2, 4, 200, 47),
(325, 3, 7, 1, 200, 49),
(326, 3, 7, 2, 200, 49),
(327, 3, 7, 3, 200, 49),
(328, 3, 7, 4, 200, 49),
(329, 3, 4, 1, 200, 50),
(330, 3, 4, 2, 200, 50),
(331, 3, 4, 3, 200, 50),
(332, 3, 1, 1, 200, 51),
(333, 3, 1, 2, 200, 51),
(334, 3, 1, 3, 200, 51),
(335, 4, 2, 1, 200, 41),
(336, 4, 2, 2, 200, 41),
(337, 4, 1, 2, 200, 46),
(338, 4, 1, 1, 200, 46),
(339, 4, 2, 3, 200, 41),
(340, 4, 2, 4, 200, 41),
(341, 4, 1, 3, 200, 46),
(342, 4, 1, 4, 200, 46),
(343, 5, 1, 1, 200, 35),
(344, 5, 1, 2, 200, 35),
(345, 5, 1, 3, 200, 35),
(346, 5, 1, 4, 200, 35),
(347, 5, 4, 1, 200, 40),
(348, 5, 4, 2, 200, 40),
(349, 5, 4, 3, 200, 40),
(350, 5, 4, 4, 200, 40),
(351, 5, 2, 1, 200, 34),
(352, 5, 2, 2, 200, 34),
(353, 5, 2, 3, 200, 34),
(354, 1, 2, 1, 200, 53),
(355, 1, 2, 2, 200, 53),
(356, 1, 2, 3, 200, 53),
(357, 1, 2, 4, 200, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `order_detail_id`, `content`, `rating`, `date`) VALUES
(1, 1, 63, 'vãi đẹp', 5, '2024-12-04 13:18:12'),
(2, 1, 63, 'vãi đẹp', 5, '2024-12-04 13:20:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review_image`
--

CREATE TABLE `review_image` (
  `review_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_image` varchar(200) NOT NULL,
  `review_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `phone_number` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `address` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `role`, `phone_number`, `active`, `address`) VALUES
(1, 'Boss Huy', 'huynvps39718@gmail.com', 'otMXqxvY', 0, 764303467, 1, 'Ấp trung xã đông thạnh huyện Cần Giuộc tỉnh Long An'),
(4, 'Kha', 'khadoan.190809@gmail.com', 'Kha', 0, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `voucher_id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `day_start` date NOT NULL,
  `day_end` date NOT NULL,
  `value` int(11) NOT NULL,
  `type` enum('one','many') NOT NULL DEFAULT 'many',
  `usage_limit` int(11) NOT NULL,
  `min_order_value` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`voucher_id`, `code`, `day_start`, `day_end`, `value`, `type`, `usage_limit`, `min_order_value`, `status`, `description`) VALUES
(1, 'BOSSHUY', '2024-11-28', '2024-11-29', 30000, 'many', 19, 150000, 1, 'Giảm 30.000 VNĐ'),
(2, 'forestline', '2024-11-29', '2024-12-03', 20000, 'many', 10, 100000, 1, 'Giảm 20.000 VNĐ'),
(3, 'khachhangmoi', '2024-11-29', '2024-12-31', 15000, 'many', 0, 100000, 1, 'Giảm 15.000 VND với giá trị sản phẩm trên 100.000 VNĐ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `author` (`author`);

--
-- Chỉ mục cho bảng `blog_review`
--
ALTER TABLE `blog_review`
  ADD PRIMARY KEY (`blog_review_id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `orders_ibfk_2` (`voucher_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_variant_id` (`product_variant_id`);

--
-- Chỉ mục cho bảng `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_ibfk_1` (`collection_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Chỉ mục cho bảng `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Chỉ mục cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  ADD PRIMARY KEY (`product_variant_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `order_order_id` (`order_detail_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `review_image`
--
ALTER TABLE `review_image`
  ADD PRIMARY KEY (`review_image_id`),
  ADD KEY `review_id` (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog_review`
--
ALTER TABLE `blog_review`
  MODIFY `blog_review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_color`
--
ALTER TABLE `product_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product_size`
--
ALTER TABLE `product_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  MODIFY `product_variant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `review_image`
--
ALTER TABLE `review_image`
  MODIFY `review_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `voucher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `blog_review`
--
ALTER TABLE `blog_review`
  ADD CONSTRAINT `blog_review_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`voucher_id`) REFERENCES `voucher` (`voucher_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variant` (`product_variant_id`);

--
-- Các ràng buộc cho bảng `payment_method`
--
ALTER TABLE `payment_method`
  ADD CONSTRAINT `payment_method_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`collection_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`collection_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  ADD CONSTRAINT `product_variant_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_variant_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `product_color` (`color_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_variant_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `product_size` (`size_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_variant_ibfk_4` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`order_detail_id`) REFERENCES `order_detail` (`order_detail_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `review_image`
--
ALTER TABLE `review_image`
  ADD CONSTRAINT `review_image_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `review` (`review_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_image_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
