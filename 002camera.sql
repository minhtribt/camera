-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2016 at 03:41 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `camera`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_img` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_url` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_create_day` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `banner`
--


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_Id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_User` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `cart_Date` datetime DEFAULT NULL,
  `cart_FullName` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT '',
  `cart_Phone` varchar(50) DEFAULT NULL,
  `cart_Email` varchar(50) DEFAULT NULL,
  `cart_delete` bit(1) DEFAULT NULL,
  `cart_Add` varchar(1000) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `cart_Notes` varchar(1000) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `cart_Price` decimal(10,0) unsigned DEFAULT NULL,
  PRIMARY KEY (`cart_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_Id`, `cart_User`, `cart_Date`, `cart_FullName`, `cart_Phone`, `cart_Email`, `cart_delete`, `cart_Add`, `cart_Notes`, `cart_Price`) VALUES
(1, NULL, '2016-08-11 00:00:00', 'sâm phạm hữu', '0922926269', 'phamhuusam@ueh.edu.vn', b'0', 'Số 1 Trần TRọng Cung', '  SDSD', '2424'),
(2, NULL, '2016-08-11 00:00:00', 'sâm phạm hữu', '0922926269', 'phamhuusam@ueh.edu.vn', b'0', 'Số 1 Trần TRọng Cung', '', '2424');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE IF NOT EXISTS `cartdetail` (
  `cd_Id` int(11) NOT NULL AUTO_INCREMENT,
  `cd_IdProduct` int(11) DEFAULT NULL,
  `cd_Price` decimal(10,0) DEFAULT NULL,
  `cd_Count` int(11) DEFAULT NULL,
  `cd_IdCart` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cartdetail`
--

INSERT INTO `cartdetail` (`cd_Id`, `cd_IdProduct`, `cd_Price`, `cd_Count`, `cd_IdCart`) VALUES
(1, 15, '1212', 1, 1),
(2, 10, '1212', 1, 1),
(3, 7, '1212', 1, 2),
(4, 6, '1212', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'category_camera 1'),
(2, 'category_camera 2');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `download_id` int(11) NOT NULL AUTO_INCREMENT,
  `download_name` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_content` text COLLATE utf8_unicode_ci,
  `download_file` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_create_day` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`download_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `download`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `new_id` int(11) NOT NULL AUTO_INCREMENT,
  `new_cate_id` int(11) DEFAULT NULL,
  `new_title` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_desc` text COLLATE utf8_unicode_ci,
  `new_content` text COLLATE utf8_unicode_ci,
  `new_img` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_show` int(11) DEFAULT NULL,
  `new_create_day` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_cate_id` int(11) DEFAULT NULL,
  `product_name` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_desc` text COLLATE utf8_unicode_ci,
  `product_content_1` text COLLATE utf8_unicode_ci,
  `product_content_2` text COLLATE utf8_unicode_ci,
  `product_content_3` text COLLATE utf8_unicode_ci,
  `product_content_4` text COLLATE utf8_unicode_ci,
  `product_img` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_note` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_show` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_cate_id`, `product_name`, `product_desc`, `product_content_1`, `product_content_2`, `product_content_3`, `product_content_4`, `product_img`, `product_price`, `product_note`, `product_show`) VALUES
(1, 1, 'camera 1_tốt nhất việt nam', 'camera 1_tốt nhất việt nam', 'content 1- camera 1_tốt nhất việt nam ', 'content 2- camera 1_tốt nhất việt nam ', 'content 3- camera 1_tốt nhất việt nam ', 'content 4 - camera 1_tốt nhất việt nam ', '1.jpg', '1200000', NULL, NULL),
(2, 2, '2', '2', '2', '2', '2', '2', '1.jpg', '2', '2', 2),
(4, 1, '1', '1', '1', '1', '1', '1', '2.jpg', '1', '1', 1),
(5, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL),
(6, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '2.jpg', '1212', '12', NULL),
(7, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL),
(8, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '2.jpg', '1212', '12', NULL),
(9, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL),
(10, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL),
(11, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '2.jpg', '1212', '12', NULL),
(12, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL),
(13, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL),
(14, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '2.jpg', '1212', '12', NULL),
(15, 2, '2', '2', 'ew', 'ưe', 'ưe', 'ưe', '1.jpg', '1212', '12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `static_page`
--

CREATE TABLE IF NOT EXISTS `static_page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_content` text COLLATE utf8_unicode_ci,
  `page_create_day` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_img` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `static_page`
--

