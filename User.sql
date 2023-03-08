-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 07, 2023 at 04:21 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IS_4460_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `User_ID` int(11) NOT NULL,
  `FirstName` varchar(128) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`User_ID`, `FirstName`, `LastName`, `Username`, `Password`) VALUES
(1, 'Ronald', 'Harbord', 'rharbord0', 'Green'),
(2, 'Burk', 'Diggons', 'bdiggons1', 'Fuscia'),
(3, 'Nevins', 'Burfitt', 'nburfitt2', 'Green'),
(4, 'Abel', 'Gerring', 'agerring3', 'Orange'),
(5, 'Thomasin', 'Pfleger', 'tpfleger4', 'Crimson'),
(6, 'Stevana', 'Harroll', 'sharroll5', 'Purple'),
(7, 'Karia', 'Popping', 'kpopping6', 'Khaki'),
(8, 'Bordy', 'Morehall', 'bmorehall7', 'Indigo'),
(9, 'Husain', 'Sawbridge', 'hsawbridge8', 'Pink'),
(10, 'Keven', 'Alvey', 'kalvey9', 'Teal'),
(11, 'Farah', 'Snoddy', 'fsnoddya', 'Purple'),
(12, 'Barnabe', 'Bence', 'bbenceb', 'Pink'),
(13, 'Reggis', 'Cosgry', 'rcosgryc', 'Turquoise'),
(14, 'Bale', 'Penrose', 'bpenrosed', 'Maroon'),
(15, 'Geri', 'Laundon', 'glaundone', 'Khaki'),
(16, 'Jaclyn', 'Lanyon', 'jlanyonf', 'Orange'),
(17, 'Virgil', 'Haibel', 'vhaibelg', 'Khaki'),
(18, 'Eugene', 'Loache', 'eloacheh', 'Indigo'),
(19, 'Brier', 'Leyban', 'bleybani', 'Aquamarine'),
(20, 'Tamarra', 'Sisnett', 'tsisnettj', 'Green'),
(21, 'Jackson', 'Stark', '1111', '$2y$10$ZwkZv58lBHgL2ZofxFBT9utSq4cdOWZzb.IpJOL23nTrTQKujbW5i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
