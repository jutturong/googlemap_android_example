-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2016 at 02:26 PM
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
-- Table structure for table `tb_doctor`
--

CREATE TABLE IF NOT EXISTS `tb_doctor` (
  `id_doctor` int(5) NOT NULL AUTO_INCREMENT,
  `doctor_detail` varchar(100) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_doctor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`id_doctor`, `doctor_detail`) VALUES
(1, 'อ.ชุติมาพร'),
(2, 'อ.มนเทียร'),
(3, 'อ.พูนศักดิ์'),
(4, 'อ.ทัศนีย์'),
(5, 'อ.อมรรัตน์'),
(6, 'อ.เอกสิทธิ์'),
(7, 'อ.ณัฐวีร์'),
(8, 'อ.สมศักดิ์'),
(9, 'อ.สุปราณี'),
(10, 'อ.ธิติวัฒน์');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
