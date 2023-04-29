-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 29, 2023 at 01:53 AM
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
-- Table structure for table `Grocery_Order`
--

CREATE TABLE IF NOT EXISTS `Grocery_Order` (
`orderid` int(10) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `orderlist` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total` double NOT NULL,
  `date` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ordertime` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `Grocery_Order`
--

INSERT INTO `Grocery_Order` (`orderid`, `username`, `location`, `orderlist`, `total`, `date`, `ordertime`) VALUES
(15, 'Archbacker', '12 adas', '3 Shoprite Vege 1/', 7.74, '12-23-2222 12:30 pm', '04-29-2023 01:51 AM'),
(16, 'Archbacker', '12 asfas ct', '10 Walmart Vege 3/1 Walmart Dairy 2/1 Shoprite Vege 7/', 25.46, '12-22-2024 1:14 pm', '04-29-2023 01:53 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Order`
--
ALTER TABLE `Grocery_Order`
 ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Grocery_Order`
--
ALTER TABLE `Grocery_Order`
MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
