-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 04:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allphptricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Samsung Galaxy A32', 'samsung01', 13990.00, 'product-images/samsung-img/Galaxy A32 13990.png'),
(2, 'Samsung Galaxy A52 5G', 'samsung02', 23990.00, 'product-images/samsung-img/Galaxy A52 5G 23990.png'),
(3, 'Samsung Galaxy A52', 'samsung03', 18990.00, 'product-images/samsung-img/Galaxy A52 18990.png'),
(4, 'Samsung Galaxy A72', 'samsung04', 23990.00, 'product-images/samsung-img/Galaxy A72 23990.png'),
(5, 'Samsung Galaxy Note20', 'samsung05', 48990.00, 'product-images/samsung-img/Galaxy Note20 48990.png'),
(6, 'Samsung Galaxy S21 5G', 'samsung06', 47990.00, 'product-images/samsung-img/Galaxy S21 5G 47990.png'),
(7, 'Samsung Galaxy S21 Ultra 5G', 'samsung07', 69990.00, 'product-images/samsung-img/Galaxy S21 Ultra 5G 69990.png'),
(8, 'Samsung Galaxy S21+ 5G', 'samsung08', 57990.00, 'product-images/samsung-img/Galaxy S21+ 5G 57990.png'),
(9, 'Samsung Galaxy Z Fold2', 'samsung09', 99990.00, 'product-images/samsung-img/Galaxy Z Fold2 99990.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(10, 'Vivo V9', 'vivo01', 14999.00, 'product-images/vivo-img/V9 14999.png'),
(11, 'Vivo Y11', 'vivo02', 5999.00, 'product-images/vivo-img/Y11 5999.png'),
(12, 'Vivo Y12', 'vivo03', 6999.00, 'product-images/vivo-img/Y12 6999.png'),
(13, 'Vivo Y15', 'vivo04', 12999.00, 'product-images/vivo-img/Y15 12999.png'),
(14, 'Vivo Y17', 'vivo05', 9999.00, 'product-images/vivo-img/Y17 9999.png'),
(15, 'Vivo Y17 Pro', 'vivo06', 21999.00, 'product-images/vivo-img/Y17 Pro 21999.png'),
(16, 'Vivo Y81', 'vivo07', 7999.00, 'product-images/vivo-img/Y81 7999.png'),
(17, 'Vivo Y91  32GB', 'vivo08', 5999.00, 'product-images/vivo-img/Y91  32GB 5999.jpg'),
(18, 'Vivo Y91C', 'vivo09', 4999.00, 'product-images/vivo-img/Y91C 4999.png');

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(19, 'OPPO A3s', 'oppo01', 3899.00, 'product-images/oppo-img/OPPO A3s 3899.00.jpg'),
(20, 'OPPO A5s', 'oppo02', 2039.00, 'product-images/oppo-img/OPPO A5s 2039.00.jpg'),
(21, 'OPPO A37', 'oppo03', 6990.00, 'product-images/oppo-img/OPPO A37 6990.jpg'),
(22, 'OPPO F5', 'oppo04', 3080.00, 'product-images/oppo-img/OPPO F5 3080.00.jpg'),
(23, 'OPPO F7', 'oppo05', 18999.00, 'product-images/oppo-img/OPPO F7 18,999.00.jpg'),
(24, 'OPPO F9', 'oppo06', 5499.00, 'product-images/oppo-img/OPPO F9 5499.00.jpg'),
(25, 'OPPO F11', 'oppo07', 10299.00, 'product-images/oppo-img/OPPO F11 10,299.00.jpg'),
(26, 'OPPO F11 Pro', 'oppo08', 10890.00, 'product-images/oppo-img/OPPO F11 Pro 10,890.00.jpg'),
(27, 'OPPO Reno', 'oppo09', 30888.00, 'product-images/oppo-img/OPPO Reno 30,888.00.jpg');

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(28, 'realme  C12', 'realme01', 5990.00, 'product-images/realme-img/realme  C12 5990.png'),
(29, 'realme 6', 'realme02', 8990.00, 'product-images/realme-img/realme 6 8990.jpg'),
(30, 'realme 6 Pro', 'realme03', 12990.00, 'product-images/realme-img/realme 6 Pro 12990.jpg'),
(31, 'realme 7', 'realme04', 11990.00, 'product-images/realme-img/realme 7 11990.jpg'),
(32, 'realme 7 Pro', 'realme05', 15990.00, 'product-images/realme-img/realme 7Pro 15990.jpg'),
(33, 'realme C15', 'realme06', 6490.00, 'product-images/realme-img/realme C15 6490.png'),
(34, 'realme C25', 'realme07', 7490.00, 'product-images/realme-img/realme C25 7490.png'),
(35, 'realme narzo 20', 'realme08', 7990.00, 'product-images/realme-img/realme narzo 20 7990.jpg'),
(36, 'realme X3 SuperZoom', 'realme09', 22990.00, 'product-images/realme-img/realme X3 SuperZoom 22990.jpg');
