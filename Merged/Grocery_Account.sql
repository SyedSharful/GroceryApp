-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 19, 2023 at 07:42 PM
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
-- Table structure for table `Grocery_Account`
--

CREATE TABLE IF NOT EXISTS `Grocery_Account` (
  `Username` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `First_Name` varchar(32) NOT NULL,
  `Last_Name` varchar(32) NOT NULL,
  `Address` varchar(64) NOT NULL,
  `Phone_Number` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Grocery_Account`
--

INSERT INTO `Grocery_Account` (`Username`, `Email`, `Password`, `First_Name`, `Last_Name`, `Address`, `Phone_Number`) VALUES
('Archbacker', 'addr@google.com', '123456', 'Test', 'A', '111 Fake Dr.', '123-456-7890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grocery_Account`
--
ALTER TABLE `Grocery_Account`
 ADD UNIQUE KEY `Username` (`Username`), ADD UNIQUE KEY `Email` (`Email`), ADD UNIQUE KEY `Phone_Number` (`Phone_Number`), ADD UNIQUE KEY `Phone_Number_2` (`Phone_Number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
