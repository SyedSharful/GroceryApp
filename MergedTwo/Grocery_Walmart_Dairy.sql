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
-- Table structure for table `Grocery_Walmart_Dairy`
--

CREATE TABLE IF NOT EXISTS `Grocery_Walmart_Dairy` (
  `Position` int(2) DEFAULT NULL,
  `Milk_Image` varchar(149) DEFAULT NULL,
  `Milk_Price` varchar(5) DEFAULT NULL,
  `Milk_Text` varchar(66) DEFAULT NULL,
  `Milk_X` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `Grocery_Walmart_Dairy`
--

INSERT INTO `Grocery_Walmart_Dairy` (`Position`, `Milk_Image`, `Milk_Price`, `Milk_Text`, `Milk_X`) VALUES
(1, 'https://i5.walmartimages.com/asr/a4034dd6-c190-43aa-a8b1-6226a762321d.5eee867e805ed69a4080ff16337c6d83.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$3.97', 'Califia Farms Extra Creamy Oat Milk 48 Fluid Ounces', '8.3 ¢/fl oz'),
(2, 'https://i5.walmartimages.com/asr/8991fc2c-00f6-4427-bf20-4a4e863cb69a.925c9ff99e858f3573dcdb673fabd0c8.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$3.17', 'Parmalat Whole Milk, 32 fl oz', '9.9 ¢/fl oz'),
(3, 'https://i5.walmartimages.com/asr/523b0eb2-2a79-4685-9ea4-b0fd9ef6e725.a58b576d67eec5cf70b249eb755e1811.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$3.97', 'Califia Farms Zero Sugar Oat Milk 48 Fluid Ounces', '8.3 ¢/fl oz'),
(4, 'https://i5.walmartimages.com/asr/9f432c97-e2e8-4614-8914-886526caf751.cafd3601211ea4ba1bf3537d3d09c111.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$4.84', 'Stonyfield Organic Whole Vitamin D Milk, Half Gallon, 64 fl oz', '7.6 ¢/fl oz'),
(5, 'https://i5.walmartimages.com/asr/83f533c3-3234-4bea-80bf-a0f9a43cd279_2.9b223f40bab27c513ba64f9f0e3fc2d9.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$4.06', 'Great Value Whole Vitamin D Milk, Gallon, 128 fl oz', '3.2 ¢/fl oz'),
(6, 'https://i5.walmartimages.com/asr/b8cd5dd9-eb4c-44f8-84c5-6c3fa0ade504_2.b93305e90bf7f66b9ab5f36f25652660.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$3.80', 'Great Value 2% Reduced Fat Milk, 128 Fl Oz', '3.0 ¢/fl oz'),
(7, 'https://i5.walmartimages.com/asr/e3f8e853-2603-4740-adf8-6df6f05583a4_1.3a71c637485dea1f6fd8409a666bf287.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$4.34', 'Clover Farms 2% Reduced Fat Milk, 1 Gallon', '3.4 ¢/fl oz'),
(8, 'https://i5.walmartimages.com/asr/670fdbc0-a12a-493e-a0d1-5e1fff84e200_1.c1a08125c47d543ab975f0c484225aaa.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$2.03', 'Great Value 2% Reduced Fat Milk, Half Gallon, 64 fl oz', '3.2 ¢/fl oz'),
(9, 'https://i5.walmartimages.com/asr/1347c2ba-9373-463d-8714-c678a6949090_2.f72cceb2686f8ea62c4d647f5fa4ee68.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$2.16', 'Great Value Whole Vitamin D Milk, Half Gallon, 64 fl oz', '3.4 ¢/fl oz'),
(10, 'https://i5.walmartimages.com/asr/0b2bba81-1172-4550-8143-7277398d2700_3.f4762f11cc6b9c6f1e40253951c533f8.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$3.85', 'Great Value 1% Low Fat Chocolate Milk, Gallon, 128 fl oz', '3.0 ¢/fl oz'),
(11, 'https://i5.walmartimages.com/asr/3d57f4fd-8e3f-4f47-946b-79d8f59d90f1.c1f0ee6d97010a676263d42784ecbae1.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$7.28', 'Stonyfield Organic Ultra Pasteurized Organic Whole Milk, 128 Fl Oz', '5.7 ¢/fl oz'),
(12, 'https://i5.walmartimages.com/asr/24ae75c5-7555-4dca-a0a9-302678b40210_1.161ffd6331d5e1ef5f7ce2b92b70674f.jpeg?odnHeight=784&odnWidth=580&odnBg=FFFFFF', '$4.84', 'Stonyfield Organic Reduced Fat 2% Milk, Half Gallon, 64 fl oz', '7.6 ¢/fl oz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Walmart_Dairy`
--
ALTER TABLE `Grocery_Walmart_Dairy`
 ADD UNIQUE KEY `Position` (`Position`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
