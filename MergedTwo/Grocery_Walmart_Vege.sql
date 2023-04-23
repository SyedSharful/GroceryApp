-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 23, 2023 at 06:33 AM
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
-- Table structure for table `Grocery_Walmart_Vege`
--

CREATE TABLE IF NOT EXISTS `Grocery_Walmart_Vege` (
  `Position` int(2) DEFAULT NULL,
  `Vege_Img` varchar(149) DEFAULT NULL,
  `Vege_Price` varchar(9) DEFAULT NULL,
  `Vege_X` varchar(10) DEFAULT NULL,
  `Vege_Text` varchar(49) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `Grocery_Walmart_Vege`
--

INSERT INTO `Grocery_Walmart_Vege` (`Position`, `Vege_Img`, `Vege_Price`, `Vege_X`, `Vege_Text`) VALUES
(1, 'https://i5.walmartimages.com/asr/5985ccc8-109e-411d-aca7-556ab217e1da.e3770028b0d00b3fa4e6a40c4e630ef9.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$0.62', '', 'Fresh Cucumber, Each'),
(2, 'https://i5.walmartimages.com/asr/15c8fcf1-7b73-429e-8a7c-802091d818f1.4730164455d5cc0a04d2b1f675971dd1.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$0.72', '', 'Fresh Green Bell Pepper, Each'),
(3, 'https://i5.walmartimages.com/asr/6989391c-7793-442e-b937-f2d0562fef2b.7979218cc798806f9f713c77e3da4939.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$1.88', '', 'Fresh Iceberg Lettuce, Each'),
(4, 'https://i5.walmartimages.com/asr/5af56fe3-27ea-4c78-9d3f-74f0fdecfcff_1.1f4e7886b6e329ccb374d9e3fa675e45.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$0.48', '', 'Fresh Green Onions Bunch, Each'),
(5, 'https://i5.walmartimages.com/asr/1816695f-3a84-418d-96c1-86521eca7d38_2.48b201b3f23d17a6d8c5bb80b28020d1.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$0.29', '98.0 ¢/lb', 'Fresh Roma Tomato, Each'),
(6, 'https://i5.walmartimages.com/asr/c721459d-3826-4461-9e79-c077d5cf191e_3.ca214f10bb3c042f473588af8b240eca.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$1.41', '$1.88/ea', 'Fresh Broccoli Crowns, Each'),
(7, 'https://i5.walmartimages.com/asr/7d7a2618-ed85-45bd-bf30-11b14b289c34.d484064e9e02e1132b6a3da45c871632.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$0.87', '$1.38/lb', 'Fresh Zucchini Squash, Each'),
(8, 'https://i5.walmartimages.com/asr/85febc30-2685-463e-bcdc-d8ed38376b3c.001db6e0d6920f2a6fbc0ba87cbecf8d.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$1.24', '7.8 ¢/oz', 'Bolthouse Farms Fresh Baby-Cut Carrots, 1lb Bag'),
(9, 'https://i5.walmartimages.com/asr/fa41578e-f8be-4e38-9eed-65e119ad74f4_1.a275a50d8f6cf85fb6c0b130260f6ca6.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$2.98', '', 'Asparagus, Bunch'),
(10, 'https://i5.walmartimages.com/asr/39e383c7-abe5-42fa-9078-5d6d0bb5c0d4.8fc19a526bf85bd640d369c4c85a2bf2.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$4.27', '85.4 ¢/lb', 'Russet Potatoes, 5 lb Bag'),
(11, 'https://i5.walmartimages.com/asr/b9f848d3-13f1-43d3-99db-33e17abb9c1c_1.987f0112fa028282b940a6502fc0db18.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$1.68', '', 'Fresh Celery Stalk, Each'),
(12, 'https://i5.walmartimages.com/asr/c78d8a57-c0e8-43a4-98b1-777826530117_1.797a40ee7523a8add2629830dc41914f.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', 'Now $0.50', '$0.60', 'Fresh Sweet Corn on the Cob (1 each)'),
(13, 'https://i5.walmartimages.com/asr/70ca0c8a-4720-4fe9-8052-f16b7150c03c.3b1e00b3fe7411a314e4783c27dfdb5a.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$2.18', '27.3 ¢/oz', 'Freshness Guaranteed Sliced White Mushrooms, 8 oz'),
(14, 'https://i5.walmartimages.com/asr/cb81c962-009d-46d9-aef1-501599accee4.2c907234f30c15a9c2f57e4e347511ed.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$2.28', '22.8 ¢/oz', 'Grape Tomato, 10 oz Package');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Walmart_Vege`
--
ALTER TABLE `Grocery_Walmart_Vege`
 ADD UNIQUE KEY `Position` (`Position`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
