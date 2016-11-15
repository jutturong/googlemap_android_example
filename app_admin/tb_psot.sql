-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2016 at 08:21 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
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
-- Table structure for table `tb_psot`
--

CREATE TABLE IF NOT EXISTS `tb_psot` (
  `id_psot` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(50) COLLATE utf16_bin NOT NULL,
  `joindoctor` varchar(50) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `procedure` int(5) NOT NULL,
  `nasal` int(5) NOT NULL,
  `alveolar` int(5) NOT NULL,
  `simple` int(5) NOT NULL,
  `other_procedure` int(5) NOT NULL,
  `otherprocedure` varchar(100) COLLATE utf16_bin NOT NULL,
  `file1` text COLLATE utf16_bin NOT NULL,
  `file2` text COLLATE utf16_bin NOT NULL,
  `file3` text COLLATE utf16_bin NOT NULL,
  `cast` int(5) NOT NULL,
  PRIMARY KEY (`id_psot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_psot`
--

INSERT INTO `tb_psot` (`id_psot`, `id_history_patient`, `doctor`, `joindoctor`, `begin_date`, `end_date`, `procedure`, `nasal`, `alveolar`, `simple`, `other_procedure`, `otherprocedure`, `file1`, `file2`, `file3`, `cast`) VALUES
(5, 21, 'นพ.ปราโมทย์  คำชะนินท์', 'พญ.อินทญา  คำชะนินท์', '2014-02-04', '2014-02-05', 5, 0, 0, 0, 0, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(6, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, '', '', '', '', 0),
(7, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, '', '', '', '', 0),
(8, 21, '2541', '8596', '2016-09-07', '2016-09-28', 0, 1, 1, 1, 1, '', '648498.jpg', '648501.jpg', '648588.jpg', 1),
(9, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 1, 1, 1, 1, '', '', '', '', 1),
(10, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 1, 1, 1, 1, '', '', '', '', 1),
(11, 21, '2541', '8596', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1),
(12, 21, '2541', '8596', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1),
(13, 21, '2541', '8596', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1),
(14, 21, '85', '95', '2015-02-04', '2014-02-12', 1, 1, 1, 1, 1, '', '', '', '', 1),
(15, 21, '85', '95', '2016-09-01', '2016-09-16', 1, 1, 1, 1, 1, '5.อื่นๆ', 'IMG_2283.JPG', 'IMG_2287.JPG', '04200-2011410121158.jpg', 1),
(16, 21, '85', '95', '2016-09-01', '2016-09-16', 1, 1, 1, 1, 1, '5.อื่นๆ', 'IMG_2283.JPG', 'IMG_2287.JPG', '04200-2011410121158.jpg', 1),
(17, 21, '85', '95', '2016-09-01', '2016-09-29', 1, 1, 1, 1, 1, '5.อื่นๆ', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
