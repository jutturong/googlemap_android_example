-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2016 at 11:21 PM
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
-- Table structure for table `tb_prosthodontic`
--

CREATE TABLE IF NOT EXISTS `tb_prosthodontic` (
  `id_prosthodontic` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `dental` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `appliance` int(5) NOT NULL,
  `otherappliance` varchar(100) COLLATE utf16_bin NOT NULL,
  `file1` varchar(100) COLLATE utf16_bin NOT NULL,
  `file2` varchar(100) COLLATE utf16_bin NOT NULL,
  `file3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(5) NOT NULL,
  PRIMARY KEY (`id_prosthodontic`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_prosthodontic`
--

INSERT INTO `tb_prosthodontic` (`id_prosthodontic`, `id_history_patient`, `dental`, `begin_date`, `appliance`, `otherappliance`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(7, 21, 'พญ.กาญจนา ด่านภักดี', '2014-02-04', 7, 'ระบุ', '', '', '', 2),
(8, 21, 'พญ.กาญจนา ด่านภักดี', '2014-02-04', 7, 'ระบุ', '', '', '', 2),
(9, 21, 'พญ.กาญจนา ด่านภักดี', '2014-02-04', 7, 'ระบุ', '', '', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
