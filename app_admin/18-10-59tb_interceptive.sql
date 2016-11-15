-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2016 at 02:45 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

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
  `procedure_detail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_interceptive`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tb_interceptive`
--

INSERT INTO `tb_interceptive` (`id_interceptive`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeleta`, `filename1`, `filename2`, `filename3`, `dentalcast`, `procedure_detail`) VALUES
(44, 21, 'พญ.กานดา สิทธิ', '2013-02-05', '2013-02-20', 4, 2, 2, '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 1, ''),
(45, 21, '888', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', 0, ''),
(46, 21, '888', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', 0, ''),
(47, 35, 'อ.ชุติมาพร', '2016-09-26', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(48, 35, 'อ.ชุติมาพร', '2016-09-26', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(49, 35, 'อ.ชุติมาพร', '2011-11-15', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(50, 35, 'อ.ชุติมาพร', '2011-11-15', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(51, 37, 'อ.พูนศักดิ์', '2011-03-30', '0000-00-00', 1, 3, 0, '', '', '', 1, ''),
(52, 37, 'อ.พูนศักดิ์', '2011-03-30', '0000-00-00', 1, 3, 0, '', '', '', 1, ''),
(53, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1, ''),
(54, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1, ''),
(55, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(56, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(57, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(58, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
