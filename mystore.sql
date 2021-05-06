-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 09:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `brand_name` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `price`, `image`) VALUES
(10, 'OPPO A3s', 'oppo01', 3899.00, '../product-images/oppo-img/OPPO A3s 3899.00.jpg'),
(11, 'OPPO A5s', 'oppo02', 2039.00, '../product-images/oppo-img/OPPO A5s 2039.00.jpg'),
(12, 'OPPO A37', 'oppo03', 6990.00, '../product-images/oppo-img/OPPO A37 6990.jpg'),
(13, 'OPPO F5', 'oppo04', 3080.00, '../product-images/oppo-img/OPPO F5 3080.00.jpg'),
(14, 'OPPO F7', 'oppo05', 18999.00, '../product-images/oppo-img/OPPO F7 18,999.00.jpg'),
(15, 'OPPO F9', 'oppo06', 5499.00, '../product-images/oppo-img/OPPO F9 5499.00.jpg'),
(16, 'OPPO F11', 'oppo07', 10299.00, '../product-images/oppo-img/OPPO F11 10,299.00.jpg'),
(17, 'OPPO F11 Pro', 'oppo08', 10890.00, '../product-images/oppo-img/OPPO F11 Pro 10,890.00.jpg'),
(18, 'OPPO Reno', 'oppo09', 30888.00, '../product-images/oppo-img/OPPO Reno 30,888.00.jpg'),
(35, 'Samsung Galaxy S21+ 5G', 'samsung08', 57990.00, '../product-images/samsung-img/Galaxy S21+ 5G 57990.png');



INSERT INTO `product`(`id`, `name`, `code`, `price`, `image`) VALUES
(10, 'OPPO A3s', 'oppo01', 3899.00, '../product-images/oppo-img/OPPO A3s 3899.00.jpg'),
(11, 'OPPO A5s', 'oppo02', 2039.00, '../product-images/oppo-img/OPPO A5s 2039.00.jpg'),
(12, 'OPPO A37', 'oppo03', 6990.00, '../product-images/oppo-img/OPPO A37 6990.jpg'),
(13, 'OPPO F5', 'oppo04', 3080.00, '../product-images/oppo-img/OPPO F5 3080.00.jpg'),
(14, 'OPPO F7', 'oppo05', 18999.00, '../product-images/oppo-img/OPPO F7 18,999.00.jpg'),
(15, 'OPPO F9', 'oppo06', 5499.00, '../product-images/oppo-img/OPPO F9 5499.00.jpg'),
(16, 'OPPO F11', 'oppo07', 10299.00, '../product-images/oppo-img/OPPO F11 10,299.00.jpg'),
(17, 'OPPO F11 Pro', 'oppo08', 10890.00, '../product-images/oppo-img/OPPO F11 Pro 10,890.00.jpg'),
(18, 'OPPO Reno', 'oppo09', 30888.00, '../product-images/oppo-img/OPPO Reno 30,888.00.jpg');

INSERT INTO `product`(`id`, `name`, `code`, `price`, `image`) VALUES
(19, 'realme  C12', 'realme01', 5990.00, 'product-images/realme-img/realme  C12 5990.png'),
(20, 'realme 6', 'realme02', 8990.00, 'product-images/realme-img/realme 6 8990.jpg'),
(21, 'realme 6 Pro', 'realme03', 12990.00, 'product-images/realme-img/realme 6 Pro 12990.jpg'),
(22, 'realme 7', 'realme04', 11990.00, 'product-images/realme-img/realme 7 11990.jpg'),
(23, 'realme 7 Pro', 'realme05', 15990.00, 'product-images/realme-img/realme 7Pro 15990.jpg'),
(24, 'realme C15', 'realme06', 6490.00, 'product-images/realme-img/realme C15 6490.png'),
(25, 'realme C25', 'realme07', 7490.00, 'product-images/realme-img/realme C25 7490.png'),
(26, 'realme narzo 20', 'realme08', 7990.00, 'product-images/realme-img/realme narzo 20 7990.jpg'),
(27, 'realme X3 SuperZoom', 'realme09', 22990.00, 'product-images/realme-img/realme X3 SuperZoom 22990.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` char(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `address`, `added_at`) VALUES
(8, 'Prince Baterna', 'Prince', 'prince@gmail.com', 'Prince', '008008989', 'Medellin, Cebu', '2021-05-02 11:07:42'),
(9, 'jeric', 'jeric123', 'jericbaternakho@gmail.com', 'jeric123', '092222222222222', 'Medellin, Cebu', '2021-05-02 11:28:29'),
(10, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '7210', 'talamban', '2021-05-02 14:39:34'),
(11, 'usertest', 'user', 'user@passerellesnumeriques.org', 'ee11cbb19052e40b07aac0ca060c23ee', '8984', 'Medellin, Cebu', '2021-05-02 15:53:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
