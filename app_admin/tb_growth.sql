-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 03:29 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_growth`
--

CREATE TABLE IF NOT EXISTS `tb_growth` (
  `id_growth` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(60) COLLATE utf32_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(10) NOT NULL,
  `incisor` int(10) NOT NULL,
  `skeletal` int(10) NOT NULL,
  `typetool` int(10) NOT NULL,
  `other_typetool` text COLLATE utf32_bin NOT NULL,
  `appliance` int(10) NOT NULL,
  `other_appliance` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename1` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename2` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename3` varchar(60) COLLATE utf32_bin NOT NULL,
  `dentalcast` int(10) NOT NULL,
  PRIMARY KEY (`id_growth`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_growth`
--

INSERT INTO `tb_growth` (`id_growth`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `typetool`, `other_typetool`, `appliance`, `other_appliance`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(1, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 3, 1, 'Facial mask     ระบุ', 1, 'Functional appliance     ระบุ', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 2),
(2, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 3, 1, 'Facial mask     ระบุ', 1, 'Functional appliance     ระบุ', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 2),
(3, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 4, 3, 2, 1, 'Facial mask     ระบุ', 1, 'Functional appliance     ระบุ', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 2),
(4, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 2, 1, 'Facial mask     ระบุ', 1, 'Functional appliance     ระบุ', '', '', '', 2),
(5, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 2, 1, 'Facial mask     ระบุ', 1, 'Functional appliance     ระบุ', '', '', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
