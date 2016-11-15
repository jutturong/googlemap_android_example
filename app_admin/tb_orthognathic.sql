-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2016 at 01:08 PM
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
-- Table structure for table `tb_orthognathic`
--

CREATE TABLE IF NOT EXISTS `tb_orthognathic` (
  `id_orthognathic` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `technic` int(5) NOT NULL,
  `othertechnic` text COLLATE utf16_bin NOT NULL,
  `mandible` int(5) NOT NULL,
  `othermandible` text COLLATE utf16_bin NOT NULL,
  `tool` text COLLATE utf16_bin NOT NULL,
  `file1` text COLLATE utf16_bin NOT NULL,
  `dentalcast` int(5) NOT NULL,
  PRIMARY KEY (`id_orthognathic`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_orthognathic`
--

INSERT INTO `tb_orthognathic` (`id_orthognathic`, `id_history_patient`, `doctor`, `begin_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `dentalcast`) VALUES
(1, 21, 'พญ.กันยากร โนนสูง', '0000-00-00', 1, 1, 3, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', 'cf7d5352020f6a18e9be8d39404ab747.jpg', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
