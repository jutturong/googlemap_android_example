-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2016 at 05:09 PM
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
-- Table structure for table `tb_dentalprocedure`
--

CREATE TABLE IF NOT EXISTS `tb_dentalprocedure` (
  `id_dentalprocedure` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `tooth` varchar(60) COLLATE utf16_bin NOT NULL,
  `dental` varchar(60) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` text COLLATE utf16_bin NOT NULL,
  `fileupload1` varchar(100) COLLATE utf16_bin NOT NULL,
  `fileupload2` varchar(100) COLLATE utf16_bin NOT NULL,
  `fileupload3` varchar(100) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_dentalprocedure`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_dentalprocedure`
--

INSERT INTO `tb_dentalprocedure` (`id_dentalprocedure`, `id_history_patient`, `tooth`, `dental`, `begin_date`, `tool`, `fileupload1`, `fileupload2`, `fileupload3`) VALUES
(1, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2013-02-06', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-03 21:24:31.png', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-13 21:21:13.png'),
(2, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2016-09-07', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 11:58:51.png'),
(5, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2014-02-05', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-13 21:21:13.png', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-11 23:19:32.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
