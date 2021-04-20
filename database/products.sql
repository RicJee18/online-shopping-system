
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Database: `allphptricks`

-- --------------------------------------------------------

-- Table structure for table `products`

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- Dumping data for table `products`


INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Samsung Galaxy A12', 'S01', 9990.00, 'product-images/Galaxy A12 9990.webp'),
(2, 'Samsung Galaxy A32', 'S02', 13990.00, 'product-images/Galaxy A32 13990.webp'),
(3, 'Samsung Galaxy A52 5G', 'S03', 23990.00, 'product-images/Galaxy A52 5G 23990.webp'),
(4, 'Samsung Galaxy A72', 'S04', 23990.00, 'product-images/Galaxy A72 23990.webp'),
(5, 'Samsung Galaxy Note20', 'S05', 48990.00, 'product-images/Galaxy Note20 48990.webp'),
(6, 'Samsung Galaxy S21 5G', 'S06', 47990.00, 'product-images/Galaxy S21 5G 47990.webp'),
(7, 'Samsung Galaxy S21 Ultra 5G', 'S07', 69990.00, 'product-images/Galaxy S21 Ultra 5G 69990.webp'),
(8, 'Samsung Galaxy S21+ 5G', 'S08', 57990.00, 'product-images/Galaxy S21+ 5G 57990.webp'),
(9, 'Samsung Galaxy Z Fold2', 'S09', 99990.00, 'product-images/Galaxy Z Fold2 99990.webp'),
(10, 'iPhone X', 'S10', 700.00, 'product-images/iphone.jpg');

