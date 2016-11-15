-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2016 at 10:12 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

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
-- Table structure for table `tb_distraction`
--

CREATE TABLE IF NOT EXISTS `tb_distraction` (
  `id_distraction` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(70) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `technic` int(5) NOT NULL,
  `othertechnic` varchar(50) COLLATE utf16_bin NOT NULL,
  `mandible` int(10) NOT NULL,
  `othermandible` text COLLATE utf16_bin NOT NULL,
  `tool` varchar(80) COLLATE utf16_bin NOT NULL,
  `file1` varchar(80) COLLATE utf16_bin NOT NULL,
  `file2` varchar(80) COLLATE utf16_bin NOT NULL,
  `file3` varchar(80) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_distraction`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_distraction`
--

INSERT INTO `tb_distraction` (`id_distraction`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`) VALUES
(1, 21, 'ทพญ.กาญจนา ด่านภักดี', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 0, '', '', '', '', ''),
(2, 21, 'ทพญ.กาญจนา ด่านภักดี', '2012-02-08', '0000-00-00', 0, 0, 0, 0, '', 0, '', '', '', '', ''),
(3, 21, 'ทพญ.กาญจนา ด่านภักดี', '2012-02-08', '0000-00-00', 0, 0, 0, 0, '', 0, '', '', '', '', ''),
(4, 21, 'ทพญ.กาญจนา ด่านภักดี', '2012-02-08', '2015-02-11', 0, 0, 0, 0, '', 0, '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
