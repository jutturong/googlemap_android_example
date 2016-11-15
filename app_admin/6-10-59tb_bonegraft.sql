-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2016 at 02:07 PM
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
-- Table structure for table `tb_bonegraft`
--

CREATE TABLE IF NOT EXISTS `tb_bonegraft` (
  `id_bonegraft` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf32_bin NOT NULL,
  `date1` date NOT NULL,
  `technic` varchar(100) COLLATE utf32_bin NOT NULL,
  `file1` text COLLATE utf32_bin NOT NULL,
  `file2` text COLLATE utf32_bin NOT NULL,
  `file3` text COLLATE utf32_bin NOT NULL,
  `dentalcast` int(10) NOT NULL,
  `id_tab` int(5) NOT NULL,
  `complication` int(5) NOT NULL,
  `other_complication` varchar(100) COLLATE utf32_bin NOT NULL,
  PRIMARY KEY (`id_bonegraft`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_bin AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tb_bonegraft`
--

INSERT INTO `tb_bonegraft` (`id_bonegraft`, `id_history_patient`, `doctor`, `date1`, `technic`, `file1`, `file2`, `file3`, `dentalcast`, `id_tab`, `complication`, `other_complication`) VALUES
(24, 24, 'อ.ธนศักดิ์ เชวงสันติสุข', '2010-05-12', '', '', '', '', 1, 1, 0, ''),
(25, 25, 'อ.สัญญา', '2012-08-07', '', '', '', '', 1, 1, 0, ''),
(27, 28, 'อ.ศิริพงศ์', '2006-08-25', '', '', '', '', 1, 1, 0, ''),
(28, 33, '', '2000-11-15', '', '', '', '', 2, 1, 0, ''),
(29, 34, 'อ.วรัญญู', '2013-12-03', '', '', '', '', 1, 1, 0, ''),
(30, 35, 'อ.วรัญญู/อ.สุภาพร', '2009-02-20', '', '', '', '', 1, 1, 0, ''),
(32, 36, 'อ.สัญญา,อ.สุภาพร', '2013-03-12', '', '', '', '', 1, 1, 0, ''),
(33, 37, 'อ.สุปรียา,อ.ภัทรมน', '2015-03-03', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(34, 38, 'อ.สุภาพร,อ.เสาวลักษณ์', '2010-11-30', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(35, 39, 'อ.สุภาพร,อ.สุทิน', '2013-06-25', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(37, 40, 'อ.ศิริพงศ์', '2011-10-11', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(38, 36, 'อ.วรัญญู/อ.สุภาพร', '2010-08-02', '', '', '', '', 1, 1, 1, ''),
(42, 35, '', '2014-02-11', '', '', '', '', 1, 2, 1, ''),
(43, 35, '', '2014-02-11', '', '', '', '', 1, 2, 1, ''),
(44, 35, '', '2014-02-19', '', '', '', '', 1, 3, 1, ''),
(45, 35, '', '2011-01-10', '', '', '', '', 1, 3, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
