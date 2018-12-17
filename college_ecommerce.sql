-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2018 at 09:25 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aloginname` varchar(255) NOT NULL,
  `aloginpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aloginname`, `aloginpassword`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` double NOT NULL,
  `pro_description` varchar(255) NOT NULL,
  `pro_photo` varchar(255) NOT NULL,
  `pro_type` varchar(255) NOT NULL,
  `pro_rating` varchar(255) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_description`, `pro_photo`, `pro_type`, `pro_rating`) VALUES
(1, 'samsung ', 1000, '', '9.jpg', 'Trending', '3'),
(2, 'Apple iphone7', 40000, '', '11.jpg', 'New Product', '1.5'),
(3, 'iphone 10', 80000, '', '6.jpg', 'New Product', '5'),
(4, 'LG', 8000, '', '5.jpg', 'New Product', '3'),
(7, 'LAVA ', 7000, 'Product Description Product Description Product Description', '5.jpg', 'Trending', '2.5');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_price` double NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `pro_id`, `store_name`, `store_price`) VALUES
(1, '1', 'Amazon', 700),
(2, '1', 'Flipkart', 900),
(3, '1', 'Flipkart1', 800),
(4, '1', 'Flipkart12', 1000),
(6, '2', 'Amazon', 6000),
(7, '2', 'Flipkart', 8000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
