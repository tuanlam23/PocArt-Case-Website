-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 04:04 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u112936407_linh`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ten_banner` varchar(128) NOT NULL,
  `img_banner` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ten_banner`, `img_banner`) VALUES
('center_banner_1', '2.jpg'),
('center_banner_2', '1.jpg'),
('center_banner_3', '3.jpg'),
('left_banner', '18110739_882555291882721_1245003888_n.jpg'),
('logo', 'logo.png'),
('right_banner', '13620972_1142678989139164_997104061962241874_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cate`, `name_cate`) VALUES
(0, 'Siêu anh hùng'),
(1, ''),
(2, 'Xiaomi'),
(3, 'Oppo'),
(4, 'Meizu');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `SDT` varchar(16) NOT NULL,
  `TenKH` varchar(256) NOT NULL,
  `Mail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`SDT`, `TenKH`, `Mail`) VALUES
('', 'sd', 'sdsda'),
('0943004093', 'Nguyễn Quang Đakjt', 'nguyen'),
('0965658574', 'dat', 'nguyen'),
('111', 'Phạm Mạnh Linh', 'linh@gmail.com'),
('a', 'a', 'a'),
('c', 'c', 'c'),
('v', 'v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang_diachi`
--

CREATE TABLE `khachhang_diachi` (
  `DiaChi` varchar(1024) NOT NULL,
  `ID_DiaChi` varchar(8) NOT NULL,
  `SDT` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang_diachi`
--

INSERT INTO `khachhang_diachi` (`DiaChi`, `ID_DiaChi`, `SDT`) VALUES
('minh tan', '0', '0965658574'),
('dsd', '1', '0965658574'),
('Cầu Giấy', '2', '111'),
('minh tan', '3', '0943004093'),
('a', '4', 'a'),
('bfbf', '5', ''),
('c', '6', 'c'),
('v', '7', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `kieu`
--

CREATE TABLE `kieu` (
  `id_kieu` int(11) NOT NULL,
  `ten_kieu` varchar(256) NOT NULL,
  `gia_kieu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kieu`
--

INSERT INTO `kieu` (`id_kieu`, `ten_kieu`, `gia_kieu`) VALUES
(0, 'Skin', 70),
(1, 'Case 2D', 120),
(2, 'Case 3D (bóng,sần)', 130),
(3, 'Case silicon dẻo in', 140),
(4, 'Bao da ', 160);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID_Order` int(11) NOT NULL,
  `SDT` varchar(16) NOT NULL,
  `IDDiaChi` varchar(8) NOT NULL,
  `noidung` varchar(512) DEFAULT NULL,
  `date_or` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID_Order`, `SDT`, `IDDiaChi`, `noidung`, `date_or`) VALUES
(0, '0965658574', '0', 'b', '0000-00-00 00:00:00'),
(1, '0965658574', '1', 'c', '0000-00-00 00:00:00'),
(2, '111', '2', 'iphone 7', '0000-00-00 00:00:00'),
(3, '0943004093', '3', 's', '0000-00-00 00:00:00'),
(4, 'a', '4', '', '0000-00-00 00:00:00'),
(5, '', '5', 'c', '0000-00-00 00:00:00'),
(6, 'c', '6', '', '0000-00-00 00:00:00'),
(7, 'v', '7', 'v', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `SoLuong` int(11) NOT NULL,
  `ID_Order` int(11) NOT NULL,
  `ID_SP` varchar(8) NOT NULL,
  `id_kieu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`SoLuong`, `ID_Order`, `ID_SP`, `id_kieu`) VALUES
(1, 1, '0', 2),
(1, 2, '0', 3),
(1, 3, '0', 2),
(1, 4, '0', 0),
(1, 5, '0', 0),
(1, 6, '0', 3),
(1, 7, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

CREATE TABLE `quantri` (
  `ten_dang_nhap` varchar(32) NOT NULL,
  `mat_khau` varchar(32) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`ten_dang_nhap`, `mat_khau`, `quyen`) VALUES
('admin', '30ceab92f405ea8ac0fc74b1f75a855a', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `TenSP` varchar(256) NOT NULL,
  `ID_SP` varchar(8) NOT NULL,
  `Status` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `img` varchar(256) DEFAULT NULL,
  `sanpham_detail` varchar(512) DEFAULT NULL,
  `date_in` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`TenSP`, `ID_SP`, `Status`, `id_cate`, `img`, `sanpham_detail`, `date_in`) VALUES
('Ốp XiaoMi', '0', 1, 0, '18109563_882555321882718_2136869066_n.jpg', '', NULL),
('Ốp Iphone 7', '1', 1, 0, '18136404_882555718549345_1809930209_n.jpg', 'Kiểu chủ shop đáng yêu nên khách của mình cũng cứ bị đáng yêu ấy . Cho các bạn lo về chất lượng hình in nhé  Mau mau đặt cho mình một chiếc ốp thật đẹp nào ', NULL),
('Ốp XiaoMi', '2', 1, 0, '18109480_882555771882673_1287181068_n.jpg', '', NULL),
('Ốp Iphone 7', '3', 1, 0, '18109838_882555238549393_1527717375_n.jpg', '', NULL),
('Ốp Iphone 6', '4', 1, 0, '18109873_882555468549370_1691260481_n.jpg', '', NULL),
('Ốp iphone 6s', '5', 1, 0, '18072433_882555261882724_1585642988_n.jpg', '', NULL),
('Ốp Samsung', '6', 1, 1, '18110739_882555291882721_1245003888_n.jpg', '', NULL),
('Ốp Iphone 6', '7', 1, 0, 'iphone.jpg', '', NULL),
('Ốp Iphone 7', '8', 1, 2, '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ten_banner`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`SDT`);

--
-- Indexes for table `khachhang_diachi`
--
ALTER TABLE `khachhang_diachi`
  ADD PRIMARY KEY (`ID_DiaChi`),
  ADD KEY `SDT` (`SDT`);

--
-- Indexes for table `kieu`
--
ALTER TABLE `kieu`
  ADD PRIMARY KEY (`id_kieu`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_Order`),
  ADD KEY `SDT` (`SDT`),
  ADD KEY `IDDiaChi` (`IDDiaChi`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID_Order`),
  ADD KEY `ID_SP` (`ID_SP`),
  ADD KEY `id_kieu` (`id_kieu`);

--
-- Indexes for table `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`ten_dang_nhap`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID_SP`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khachhang_diachi`
--
ALTER TABLE `khachhang_diachi`
  ADD CONSTRAINT `khachhang_diachi_ibfk_1` FOREIGN KEY (`SDT`) REFERENCES `khachhang` (`SDT`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`SDT`) REFERENCES `khachhang` (`SDT`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`IDDiaChi`) REFERENCES `khachhang_diachi` (`ID_DiaChi`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`ID_Order`) REFERENCES `orders` (`ID_Order`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`ID_SP`) REFERENCES `sanpham` (`ID_SP`),
  ADD CONSTRAINT `order_detail_ibfk_3` FOREIGN KEY (`id_kieu`) REFERENCES `kieu` (`id_kieu`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id_cate`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
