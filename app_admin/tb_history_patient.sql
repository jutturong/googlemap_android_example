-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2016 at 06:18 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_patient`
--

CREATE TABLE IF NOT EXISTS `tb_history_patient` (
  `id_history_patient` int(11) NOT NULL,
  `HN` varchar(20) NOT NULL,
  `DN` varchar(20) NOT NULL,
  `othnumber` varchar(20) NOT NULL,
  `CN` varchar(20) NOT NULL,
  `seriesnumber` varchar(20) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` text NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `race` varchar(30) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `namefather` varchar(35) NOT NULL,
  `fatherlastname` varchar(50) NOT NULL,
  `career` varchar(50) NOT NULL,
  `birthdatefahter` date NOT NULL,
  `age1` float NOT NULL,
  `disease` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `motherlastname` varchar(50) NOT NULL,
  `mothercareer` varchar(50) NOT NULL,
  `birthdatemother` date NOT NULL,
  `age2` int(11) NOT NULL,
  `diseasemother` varchar(50) NOT NULL,
  `spousename` varchar(50) NOT NULL,
  `spouselastname` varchar(50) NOT NULL,
  `benefits` int(5) NOT NULL,
  `otherbenefits` varchar(50) NOT NULL,
  `numberbenefits` varchar(20) NOT NULL,
  `evertreat` varchar(20) NOT NULL,
  `otherevertreat` int(5) NOT NULL,
  `treatmentfacility` varchar(60) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `developmentallevel` int(10) NOT NULL,
  `otherdevelopmentallevel` text NOT NULL,
  `daterecord` date NOT NULL,
  `id_user` int(5) NOT NULL,
  `sex` int(2) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_history_patient`
--

INSERT INTO `tb_history_patient` (`id_history_patient`, `HN`, `DN`, `othnumber`, `CN`, `seriesnumber`, `firstname`, `lastname`, `filename`, `birthdate`, `address`, `nationality`, `race`, `religion`, `namefather`, `fatherlastname`, `career`, `birthdatefahter`, `age1`, `disease`, `mothername`, `motherlastname`, `mothercareer`, `birthdatemother`, `age2`, `diseasemother`, `spousename`, `spouselastname`, `benefits`, `otherbenefits`, `numberbenefits`, `evertreat`, `otherevertreat`, `treatmentfacility`, `doctor`, `developmentallevel`, `otherdevelopmentallevel`, `daterecord`, `id_user`, `sex`, `tel`) VALUES
(22, 'ER2315', 'RT2136', 'TY2316', 'RY2135', '1111111111111', 'การดา', 'มารศรี', '', '1975-05-22', '123 ต.ในเมือง อ.เมือง จ.ขอนแก่น 40002', 'ไทย', 'ไทย', 'พุทธ', 'สุรพงษ์', 'สุขเจริญ', 'รับจ้างทั่วไป', '2011-02-08', 0, 'โรคลมชัก', 'นวลฉวี', 'สุขเจริญ', 'บริษัทเอกชน', '0000-00-00', 0, 'ความดันสูง', 'อาทิตยา', 'นามวงศ์', 1, '', 'TR145287', '', 0, 'รพ.พยาบาลศรีนครินทร์', 'นพ.นพคุณ ดวงจินทร์ดา', 2, '', '2016-09-21', 1, 1, '0987869087');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_history_patient`
--
ALTER TABLE `tb_history_patient`
  ADD PRIMARY KEY (`id_history_patient`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_history_patient`
--
ALTER TABLE `tb_history_patient`
  MODIFY `id_history_patient` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
