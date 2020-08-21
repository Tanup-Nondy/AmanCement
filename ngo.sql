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
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
  `SI_NO` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`SI_NO`, `Category`, `Name_of_com`, `PO_UP`, `Name_of_des_maker`, `Position`, `Address`, `Mob_phn`, `Pro_Per`, `Mobile_Phn`, `district`) VALUES
(1, 'Ab', 'cd', 'hg', 'a', 'r', 'c', 'z', 'v', '5', 'barisal'),
(3, '9', 'uniliver', 'rin', 'Tanup', '5', 'Barisal', '01743647423', 'mim', '019xxxxxxx', 'barisal'),
(4, '9', 'uniliver', 'hg', 'Tanup', '5', 'c', '01743647423', 'v', '5', 'barisal'),
(5, 'd', 'uniliver', 'hg', 'a', 'r', 'c', 'z', 'mim', '019xxxxxxx', 'barisal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`SI_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `SI_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
