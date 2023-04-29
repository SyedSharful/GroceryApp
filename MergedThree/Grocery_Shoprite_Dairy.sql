-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 29, 2023 at 02:00 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klz4`
--

-- --------------------------------------------------------

--
-- Table structure for table `Grocery_Shoprite_Dairy`
--

CREATE TABLE IF NOT EXISTS `Grocery_Shoprite_Dairy` (
  `Position` int(8) DEFAULT NULL,
  `Milk_Image` varchar(79) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Milk_Text` varchar(84) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Milk_Price` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `Grocery_Shoprite_Dairy`
--

INSERT INTO `Grocery_Shoprite_Dairy` (`Position`, `Milk_Image`, `Milk_Text`, `Milk_Price`) VALUES
(1, 'https://assets.wakefern.com/is/image/wakefern/81326702007-001?$Mi9Product_cell$', 'a2 Milk 2% Reduced Fat Milk, 59 fl oz\nOpen Product Description', '$5.29 '),
(2, 'https://assets.wakefern.com/is/image/wakefern/81326702000-001?$Mi9Product_cell$', 'a2 Milk Whole Milk, 59 fl oz\nOpen Product Description', '$5.29 '),
(3, 'https://assets.wakefern.com/is/image/wakefern/4119046719-597?$Mi9Product_cell$', 'Bowl & Basket 1% Low Fat Chocolate Milk, one gallon\nOpen Product Description', '$4.79 '),
(4, 'https://assets.wakefern.com/is/image/wakefern/4119046721-001?$Mi9Product_cell$', 'Bowl & Basket 1% Low Fat Milk, half gallon\nOpen Product Description', '$3.19 '),
(5, 'https://assets.wakefern.com/is/image/wakefern/4119046716-597?$Mi9Product_cell$', 'Bowl & Basket 1% Low Fat Milk, one gallon\nOpen Product Description', '$4.59 '),
(6, 'https://assets.wakefern.com/is/image/wakefern/4119046726-001?$Mi9Product_cell$', 'Bowl & Basket 1% Low Fat Milk, one quart\nOpen Product Description', '$1.89 '),
(7, 'https://assets.wakefern.com/is/image/wakefern/4119046731-001?$Mi9Product_cell$', 'Bowl & Basket 2% Reduced Fat Milk, 1 pint\nOpen Product Description', '$0.99 '),
(8, 'https://assets.wakefern.com/is/image/wakefern/4119046722-001?$Mi9Product_cell$', 'Bowl & Basket 2% Reduced Fat Milk, half gallon\nOpen Product Description', '$3.19 '),
(9, 'https://assets.wakefern.com/is/image/wakefern/4119046717-001?$Mi9Product_cell$', 'Bowl & Basket 2% Reduced Fat Milk, one gallon\nOpen Product Description', '$4.59 '),
(10, 'https://assets.wakefern.com/is/image/wakefern/4119046727-001?$Mi9Product_cell$', 'Bowl & Basket 2% Reduced Fat Milk, one quart\nOpen Product Description', '$1.89 '),
(11, 'https://assets.wakefern.com/is/image/wakefern/4119046732-001?$Mi9Product_cell$', 'Bowl & Basket Chocolate Milk, 1 pint\nOpen Product Description', '$0.99 '),
(12, 'https://assets.wakefern.com/is/image/wakefern/4119046724-001?$Mi9Product_cell$', 'Bowl & Basket Chocolate Milk, half gallon\nOpen Product Description', '$3.49 '),
(13, 'https://assets.wakefern.com/is/image/wakefern/4119046723-001?$Mi9Product_cell$', 'Bowl & Basket Fat Free Milk, half gallon\nOpen Product Description', '$3.19 '),
(14, 'https://assets.wakefern.com/is/image/wakefern/4119046718-597?$Mi9Product_cell$', 'Bowl & Basket Fat Free Milk, one gallon\nOpen Product Description', '$4.59 '),
(15, 'https://assets.wakefern.com/is/image/wakefern/4119046728-001?$Mi9Product_cell$', 'Bowl & Basket Fat Free Milk, one quart\nOpen Product Description', '$1.89 '),
(16, 'https://assets.wakefern.com/is/image/wakefern/4119047121-597?$Mi9Product_cell$', 'Bowl & Basket Iced Green Tea with Ginseng, 1 gallon\nOpen Product Description', '$2.49 '),
(17, 'https://assets.wakefern.com/is/image/wakefern/4119046876-001?$Mi9Product_cell$', 'Bowl & Basket Lactose Free 1% Low Fat Milk, half gallon\nOpen Product Description', '$3.99 '),
(18, 'https://assets.wakefern.com/is/image/wakefern/4119046874-001?$Mi9Product_cell$', 'Bowl & Basket Lactose Free 2% Reduced Fat Milk, half gallon\nOpen Product Description', '$3.99 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Shoprite_Dairy`
--
ALTER TABLE `Grocery_Shoprite_Dairy`
 ADD UNIQUE KEY `COL 1` (`Position`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
