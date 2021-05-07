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
(1, 'Galaxy A32', 'samsung01', 13990.00, 'product-images/samsung-img/Galaxy A32 13990.png'),
(2, 'Galaxy A52 5G', 'samsung02', 23990.00, 'product-images/samsung-img/Galaxy A52 5G 23990.png'),
(3, 'Galaxy A52', 'samsung03', 18990.00, 'product-images/samsung-img/Galaxy A52 18990.png'),
(4, 'Galaxy A72', 'samsung04', 23990.00, 'product-images/samsung-img/Galaxy A72 23990.png'),
(5, 'Galaxy Note20', 'samsung05', 48990.00, 'product-images/samsung-img/Galaxy Note20 48990.png'),
(6, 'Galaxy S21 5G', 'samsung06', 47990.00, 'product-images/samsung-img/Galaxy S21 5G 47990.png'),
(7, 'Galaxy S21 Ultra 5G', 'samsung07', 69990.00, 'product-images/samsung-img/Galaxy S21 Ultra 5G 69990.png'),
(8, 'Galaxy S21+ 5G', 'Bag0samsung08', 57990.00, 'product-images/samsung-img/Galaxy S21+ 5G 57990.png'),
(9, 'Galaxy Z Fold2', 'samsung09', 99990.00, 'product-images/samsung-img/Galaxy Z Fold2 99990.png');


INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(5, 'Galaxy Note20', 'samsung05', 48990.00, 'product-images/samsung-img/Galaxy Note20 48990.png'),
(6, 'Galaxy S21 5G', 'samsung06', 47990.00, 'product-images/samsung-img/Galaxy S21 5G 47990.png'),
(7, 'Galaxy S21 Ultra 5G', 'samsung07', 69990.00, 'product-images/samsung-img/Galaxy S21 Ultra 5G 69990.png'),
(8, 'Galaxy S21+ 5G', 'Bag0samsung08', 57990.00, 'product-images/samsung-img/Galaxy S21+ 5G 57990.png'),
(9, 'Galaxy Z Fold2', 'samsung09', 99990.00, 'product-images/samsung-img/Galaxy Z Fold2 99990.png');

-- -- admin ---
-- table products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(250) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
) 
