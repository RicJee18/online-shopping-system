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
('Punk_Blue_02', 'Punk_Blue_02', 6000.00, 'product-images/Punk_Blue__02.jpg'),
('Redmi-note-7', 'Redmi-note-7', 5090.00, 'product-images/redmi-note-7.jpg'),
('Vivo Y30', 'Vivo Y30', 10600.00, 'product-images/Vivo-Y30.png'),
('samsung_galaxy_a50', 'samsung_galaxy_a50', 10600.00, 'product-images/samsung_galaxy_a50.jpg')
;

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(4, 'Punk_Blue_02', 'Punk_Blue_02', 6000.00, 'product-images/'),
(5, 'Redmi-note-7', 'Redmi-note-7', 5090.00, 'product-images/'),
(6, 'Vivo Y30', 'Vivo Y30', 10600.00, 'product-images/');