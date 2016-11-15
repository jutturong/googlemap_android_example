-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2016 at 11:15 AM
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
-- Table structure for table `tb_interceptive`
--

CREATE TABLE IF NOT EXISTS `tb_interceptive` (
  `id_interceptive` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf8_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeleta` int(5) NOT NULL,
  `filename1` text COLLATE utf8_bin NOT NULL,
  `filename2` text COLLATE utf8_bin NOT NULL,
  `filename3` text COLLATE utf8_bin NOT NULL,
  `dentalcast` int(5) NOT NULL,
  PRIMARY KEY (`id_interceptive`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tb_interceptive`
--

INSERT INTO `tb_interceptive` (`id_interceptive`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeleta`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(40, 21, 'พญ.กานดา สิทธิ', '0000-00-00', '0000-00-00', 1, 2, 1, '', '', '', 1),
(42, 21, 'พญ.กานดา สิทธิ', '0000-00-00', '0000-00-00', 1, 2, 1, '', '', '', 1),
(43, 21, 'พญ.กานดา สิทธิ', '0000-00-00', '0000-00-00', 1, 2, 1, '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
