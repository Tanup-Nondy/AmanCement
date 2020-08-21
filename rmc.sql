-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 04:28 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cement`
--

-- --------------------------------------------------------

--
-- Table structure for table `rmc`
--

CREATE TABLE IF NOT EXISTS `rmc` (
  `SL_NO` int(11) NOT NULL,
  `Category` varchar(250) NOT NULL,
  `Name_of_com` varchar(250) NOT NULL,
  `PO_UP` varchar(250) NOT NULL,
  `Name_of_des_maker` varchar(250) NOT NULL,
  `Position` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Mob_phn` varchar(250) NOT NULL,
  `Pro_Per` varchar(250) NOT NULL,
  `Mobile_Phn` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rmc`
--

INSERT INTO `rmc` (`SL_NO`, `Category`, `Name_of_com`, `PO_UP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_phn`, `Pro_Per`, `Mobile_Phn`, `district`) VALUES
(1, '9', 'uniliver', 'rin', 'Tanup', '6', 'Barisal', '01743647423', 'mim', '019xxxxxxx', 'barisal'),
(2, '9', 'uniliver', 'rin', 'a', '6', 'c', 'z', 'mim', '5', 'barisal'),
(3, 'jhfd', 'ghkm', 'nbas', 'm,vd,f', 'rhwie', 'iuyr4', 'klfjgk', 'trwe', 'uiteir', 'hwegj'),
(4, 'd', 'gh', 'hg', 'a', 'y', 'c', '01743647423', 'mim', '5', 'barisal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rmc`
--
ALTER TABLE `rmc`
  ADD PRIMARY KEY (`SL_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rmc`
--
ALTER TABLE `rmc`
  MODIFY `SL_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
