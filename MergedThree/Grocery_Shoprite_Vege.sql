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
-- Table structure for table `Grocery_Shoprite_Vege`
--

CREATE TABLE IF NOT EXISTS `Grocery_Shoprite_Vege` (
  `Position` int(2) DEFAULT NULL,
  `Vege_Img` varchar(125) DEFAULT NULL,
  `Vege_Text` varchar(72) DEFAULT NULL,
  `Vege_Price` varchar(12) DEFAULT NULL,
  `Vege_X` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `Grocery_Shoprite_Vege`
--

INSERT INTO `Grocery_Shoprite_Vege` (`Position`, `Vege_Img`, `Vege_Text`, `Vege_Price`, `Vege_X`) VALUES
(1, 'https://assets.wakefern.com/is/image/wakefern/PRO2197?$Mi9Product_cell$', 'Acorn Squash, 2 pound\nOpen Product Description', '$2.58 avg/ea', '$1.29/lb'),
(2, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/srs/img/missing-Image-Square.svg', 'Alfalfa Sprouts , 3.5 oz\nOpen Product Description', '$1.99', '$0.57/oz'),
(3, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000094351.jpg', 'Alfalfa Sprouts, 3.5 oz\nOpen Product Description', '$5.29', '$1.51/oz'),
(4, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000030649.jpg', 'Aloe Vera Leaves, 1 each\nOpen Product Description', '$1.49', ''),
(5, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000046770.jpg', 'Anaheim Peppers, 1 pound\nOpen Product Description', '$3.99/lb', '$3.99/lb'),
(6, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000045155.jpg', 'Anise Florence/Sweet Fennel/Fennel, 1 each\nOpen Product Description', '$3.99', ''),
(7, 'https://assets.wakefern.com/is/image/wakefern/CVP794?$Mi9Product_cell$', 'Asparagus Bundle, 1 pound\nOpen Product Description', '$3.49 avg/ea', '$3.49/lb'),
(8, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00611123220000.jpg', 'B&W Baby Arugula, 4 oz\nOpen Product Description', '$3.49', '$0.87/oz'),
(9, 'https://assets.wakefern.com/is/image/wakefern/61112312000-001?$Mi9Product_cell$', 'B&W Watercress, 4 oz\nOpen Product Description', '$3.49', '$0.87/oz'),
(10, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000032773.jpg', 'Baby Broccoli Bunch, 8 oz\nOpen Product Description', '$2.99', '$0.37/oz'),
(11, 'https://assets.wakefern.com/is/image/wakefern/CVP546?$Mi9Product_cell$', 'Baby Carrots - 4 Pack, 12 oz\nOpen Product Description', '$2.49', '$0.21/oz'),
(12, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000091084.jpg', 'Baby Carrots, 5lb Bag, 5 pound\nOpen Product Description', '$6.49', '$1.30/lb'),
(13, 'https://assets.wakefern.com/is/image/wakefern/pro2112?$Mi9Product_cell$', 'Baby Seedless Cucumbers, 16 oz\nOpen Product Description', '$3.49', '$3.49/lb'),
(14, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000091046.jpg', 'Bagged Baby Carrots, 1 lb, 16 oz\nOpen Product Description', '$0.99', '$0.06/oz'),
(15, 'https://assets.wakefern.com/is/image/wakefern/75045500044-009?$Mi9Product_cell$', 'Bailey Farms BellaFina Baby Bell Peppers, 2 lbs\nOpen Product Description', '$5.99', '$0.19/oz'),
(16, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000045391.jpg', 'Beets 1 Bunch, 1 each\nOpen Product Description', '$3.99', ''),
(17, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00033383904245.jpg', 'Beets Organically Grown, 1 each\nOpen Product Description', '$2.99', ''),
(18, 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/cell/00000000045438.jpg', 'Belgian Endive, 1 pound\nOpen Product Description', '$4.99 avg/ea', '$4.99/lb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Shoprite_Vege`
--
ALTER TABLE `Grocery_Shoprite_Vege`
 ADD UNIQUE KEY `Position` (`Position`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
