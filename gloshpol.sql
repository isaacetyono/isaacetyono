-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2023 at 01:08 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gloshpol`
--

-- --------------------------------------------------------

--
-- Table structure for table `policetb`
--

DROP TABLE IF EXISTS `policetb`;
CREATE TABLE IF NOT EXISTS `policetb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(250) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Passwordw` varchar(250) NOT NULL,
  `Phonenumber` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policetb`
--

INSERT INTO `policetb` (`id`, `Firstname`, `Lastname`, `Username`, `Email`, `Passwordw`, `Phonenumber`) VALUES
(1, 'etyono', 'issaaa', 'root', 'isaacetyono@gmail.com', 'root1234', '4256700000');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `policeid` int(11) NOT NULL AUTO_INCREMENT,
  `reporter` varchar(250) NOT NULL,
  `reporternumber` varchar(250) NOT NULL,
  `happenings` varchar(250) NOT NULL,
  `incidentpic` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `dateandtime` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  PRIMARY KEY (`policeid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`policeid`, `reporter`, `reporternumber`, `happenings`, `incidentpic`, `location`, `dateandtime`, `district`) VALUES
(11, 'chesang gloria', '+2544256700000', 'two cars knocked each other', 'acc2.jpg', 's side road', '2023-02-07 12:22:04pm', 'KAPCHORWA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
