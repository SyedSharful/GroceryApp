-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 23, 2023 at 06:32 AM
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
-- Table structure for table `Grocery_Coupons`
--

CREATE TABLE IF NOT EXISTS `Grocery_Coupons` (
`Id` int(11) NOT NULL,
  `Brand` varchar(53) DEFAULT NULL,
  `Save` varchar(64) DEFAULT NULL,
  `Details` varchar(132) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=81 ;

--
-- Dumping data for table `Grocery_Coupons`
--

INSERT INTO `Grocery_Coupons` (`Id`, `Brand`, `Save`, `Details`) VALUES
(1, '', '', ''),
(2, ' Sundown', 'Save $3.00  Sundown', 'Off any ONE (1) Sundown Nutrition Vitamin or Supplement Product'),
(3, '', '', ''),
(4, ' Lipton Iced Tea', '$0.50 OFF  Lipton Iced Tea', 'ANY ONE (1) LIPTON ICED TEA 64OZ'),
(5, '', '', ''),
(6, ' all® and Snuggle®', '$1.50 OFF  all® and Snuggle®', 'on any ONE (1) all® Laundry Detergent Product or Snuggle® (75oz or larger Liquid, 105ct or larger Sheets or 19oz Scent Booster)'),
(7, '', '', ''),
(8, ' Lysol®', 'Save $0.50  Lysol®', 'on Any ONE (1) Lysol® Product (excluding trial and travel sizes)'),
(9, '', '', ''),
(10, ' Cetaphil®', 'Save $3.00  Cetaphil®', 'on any ONE (1) Cetaphil product (excludes 4 oz. or less–Daily Facial Cleanser, Gentle Skin Cleanser, Moisturizing Lotion or'),
(11, '', '', ''),
(12, ' L’Oréal Paris®', '$5.00 OFF  L’Oréal Paris®', 'ANY ONE (1) L’Oréal Paris® Skincare or Sublime Bronze™ product (see details for exclusions)'),
(13, '', '', ''),
(14, ' Blue Buffalo', 'Save $5.00  Blue Buffalo', 'when you buy ONE (1) bag of BLUE Wilderness Dry Dog Food (4lb or larger)'),
(15, '', '', ''),
(16, ' Welch''s® Fruit Snacks', 'SAVE $1.25  Welch''s® Fruit Snacks', 'on TWO (2) Welch’s® Fruit Snacks (8oz or larger bag or 8ct or larger box)'),
(17, '', '', ''),
(18, ' Garnier® Skincare', '$2.00 OFF  Garnier® Skincare', 'ANY ONE (1) Garnier® SkinActive or Green Labs product'),
(19, '', '', ''),
(20, ' Carvel®', 'SAVE $3.00  Carvel®', 'off any ONE (1) Carvel®, OREO®, or REESE’s® Ice Cream Cake (32oz. or larger)'),
(21, '', '', ''),
(22, ' COVERGIRL®', '$2.00 OFF  COVERGIRL®', 'ONE (1) COVERGIRL® Eye Product (excludes 1-kit shadows, accessories, and travel/trial size)'),
(23, '', '', ''),
(24, ' Pine-Sol® Multi-Surface Cleaner and Clorox® Bleach', 'Save $1.00  Pine-Sol® Multi-Surface Cleaner and Clorox® Bleach', 'OFF any ONE (1) Pine-Sol® Multi-Surface Cleaner, 40oz+ or Clorox® Bleach product, 43oz+'),
(25, '', '', ''),
(26, ' Kellogg''s® Cereals', 'SAVE $1.00  Kellogg''s® Cereals', 'on ONE (1) Kellogg''s Corn Flakes® Honey Cereal'),
(27, '', '', ''),
(28, ' Air Wick®', 'Save $1.00  Air Wick®', 'On Any TWO (2) Air Wick® Products - Excluding 8oz Aerosols'),
(29, '', '', ''),
(30, ' M&M''s Cookie Sandwich', 'Save $1.25  M&M''s Cookie Sandwich', 'off ONE (1) M&M''s Cookie Sandwich (4 ct) including Cookies and Cream Ice Cream Multipacks'),
(31, '', '', ''),
(32, ' Kellogg''s® Cereals', 'SAVE $1.00  Kellogg''s® Cereals', 'on ONE Kellogg''s® Froot Loops® with Marshmallows Jumbo Snax (5.04 oz.)'),
(33, '', '', ''),
(34, ' Friskies® Lil''s', 'SAVE $1.00  Friskies® Lil''s', 'on FIVE (5) individual 1.2 oz - 1.55 oz Friskies® Lil'' Soups, Lil'' Grillers, or Lil'' Gravies® Cat Complements'),
(35, '', '', ''),
(36, ' Kellogg''s® Cereals', 'SAVE $1.00  Kellogg''s® Cereals', 'on ONE (1) Kellogg''s® Little Debbie® Nutty Buddy Cereal'),
(37, '', '', ''),
(38, ' Kellogg''s® Cereals', 'SAVE $2.00  Kellogg''s® Cereals', 'on ONE (1) Kellogg''s® Special K® High Protein Chocolate Almond Cereal'),
(39, '', '', ''),
(40, ' Busy Bone® Dog Treat', '$1.50 Off  Busy Bone® Dog Treat', 'on ONE (1) 6oz or larger package of Busy Bone® Dog Treats (excludes Rollhide®)'),
(41, '', '', ''),
(42, ' Kellogg''s® Cereals', 'SAVE $1.00  Kellogg''s® Cereals', 'on ONE (1) Kellogg''s® Special K® Oat Crunch Honey Cereal'),
(43, '', '', ''),
(44, ' Lipton Iced Tea', '$1.00 OFF  Lipton Iced Tea', 'ANY ONE (1) LIPTON ICED TEA 12-PACK'),
(45, '', '', ''),
(46, ' Kellogg''s® Special K®', 'SAVE $2.00  Kellogg''s® Special K®', 'on ONE (1) Kellogg''s® Special K® Keto Friendly Cinnamon Cereal'),
(47, '', '', ''),
(48, ' L''Oreal Paris', '$6.00 OFF  L''Oreal Paris', 'ANY TWO (2) L’Oréal Paris® Superior Preference, Excellence, Feria, LeColor Gloss, Men''s Expert, Root Precision, Magic Root Cover'),
(49, '', '', ''),
(50, ' Gerber®', 'Save $2.00  Gerber®', 'off any FIVE (5) Gerber® Organic Products'),
(51, '', '', ''),
(52, ' COVERGIRL®', '$2.00 OFF  COVERGIRL®', 'ONE (1) COVERGIRL® Lip Product (excludes Clean Fresh Lip Balm, Continuous Color Lipstick, accessories and travel/trial size)'),
(53, '', '', ''),
(54, ' COVERGIRL®', '$2.00 OFF  COVERGIRL®', 'ONE (1) COVERGIRL® Face Product (excludes Cheekers, accessories and travel/trial size)'),
(55, '', '', ''),
(56, ' Ajax®', 'SAVE $0.50  Ajax®', 'On any ONE (1) Ajax® Dish Liquid'),
(57, '', '', ''),
(58, ' Kellogg''s® Cereals', 'SAVE $1.00  Kellogg''s® Cereals', 'on ONE (1) Kellogg''s® Cinnabon® Cereal'),
(59, '', '', ''),
(60, ' Clorox® Dishwasher Detergent Pacs', 'SAVE $0.50  Clorox® Dishwasher Detergent Pacs', 'on any ONE (1) Clorox Dishwasher Detergent Oximax 15 count'),
(61, '', '', ''),
(62, ' Kellogg''s® Cereals', 'SAVE $1.00  Kellogg''s® Cereals', 'ONE Kellogg''s® Krave™ Double Chocolate Brownie Batter Cereal (10.5 oz. or Larger)'),
(63, '', '', ''),
(64, ' Glad®', 'Save $0.75  Glad®', 'on ONE (1) Glad® Press''n Seal®,70SF or larger, Flex''n Seal®, 25ct or larger, or Cling''n Seal, 70SF or larger'),
(65, '', '', ''),
(66, ' Splenda Brand Sweeteners', 'Save $2.00  Splenda Brand Sweeteners', 'On Any ONE (1) Splenda sweetener - original, stevia, monk fruit, liquid. (Excludes 50ct original and 40ct stevia)'),
(67, '', '', ''),
(68, ' COVERGIRL®', '$3.00 OFF  COVERGIRL®', 'ONE (1) COVERGIRL® Clean Beauty Product + Skincare (excludes Clean Fresh Lip Balm)'),
(69, '', '', ''),
(70, ' Frutero Ice Cream', 'SAVE $1.00  Frutero Ice Cream', 'on ONE (1) Pint of any flavor of Frutero Ice Cream. Mango, Coconut, Passion Fruit, Guava, Guanabana, Raspberry, Strawberry.'),
(71, '', '', ''),
(72, ' TENA', 'Save $3.00  TENA', 'on any ONE (1) TENA Product (Overnight Pads, Ultimate Pads, Maximum Pads, Any Underwear, or Brief)'),
(73, '', '', ''),
(74, ' NEUTROGENA®', 'Save $1.00  NEUTROGENA®', 'off any ONE (1) NEUTROGENA® Makeup Remover Cleansing Towelettes or Liquid Remover (excludes Trial and Travel sizes)'),
(75, '', '', ''),
(76, ' NEUTROGENA®', 'Save $3.00  NEUTROGENA®', 'off any ONE (1) NEUTROGENA® Facial Moisturizer, Serum or Treatment (excludes Acne and Trial & Travel sizes)'),
(77, '', '', ''),
(78, ' "I and love and you" Wet Food for dogs or cats', '$3.00 OFF  "I and love and you" Wet Food for dogs or cats', 'On any FOUR (4) "I and love and you" Wet Food for dogs or cats, any flavor, 13oz or less'),
(79, '', '', ''),
(80, ' Nature''s Bounty®', 'SAVE $2.00  Nature''s Bounty®', 'when you buy any ONE (1) The Nature''s Bounty Co. Melatonin Product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Coupons`
--
ALTER TABLE `Grocery_Coupons`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Grocery_Coupons`
--
ALTER TABLE `Grocery_Coupons`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
