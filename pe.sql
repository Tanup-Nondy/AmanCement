-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 06:08 PM
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
-- Table structure for table `pe`
--

CREATE TABLE IF NOT EXISTS `pe` (
  `SI_NO` int(11) NOT NULL,
  `E_N` varchar(250) NOT NULL,
  `O_A` varchar(250) NOT NULL,
  `C_N` varchar(250) NOT NULL,
  `Thana` varchar(250) NOT NULL,
  `Des` varchar(250) NOT NULL,
  `E_Mail` varchar(250) NOT NULL,
  `E_Q` varchar(250) NOT NULL,
  `U_C` varchar(250) NOT NULL,
  `Year` varchar(250) NOT NULL,
  `A_C` varchar(250) NOT NULL,
  `D_of_B` date NOT NULL,
  `M_D` date NOT NULL,
  `Hobby` varchar(250) NOT NULL,
  `I_C` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe`
--

INSERT INTO `pe` (`SI_NO`, `E_N`, `O_A`, `C_N`, `Thana`, `Des`, `E_Mail`, `E_Q`, `U_C`, `Year`, `A_C`, `D_of_B`, `M_D`, `Hobby`, `I_C`, `district`) VALUES
(1, 'ghg', 'fhdhr', 'rtyr', 'gfhfj', 'hdfgf', 'trtr', 'rtyt', '455555', 'strrtr', 'hrdthr', '2009-07-10', '2018-07-17', '76867', '564yr', 'yty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pe`
--
ALTER TABLE `pe`
  ADD PRIMARY KEY (`SI_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pe`
--
ALTER TABLE `pe`
  MODIFY `SI_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
