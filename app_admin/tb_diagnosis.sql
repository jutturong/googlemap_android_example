-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2016 at 11:15 PM
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
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tb_diagnosis` (
  `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `result_analysis` text COLLATE utf8mb4_bin NOT NULL,
  `facialcleft` int(2) NOT NULL,
  `otherfacialcleft` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_diagnosis`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id_diagnosis`, `id_history_patient`, `result_analysis`, `facialcleft`, `otherfacialcleft`) VALUES
(1, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(2, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(3, 21, 'Complete hard palate cleft', 2, 'ระบุ Facial cleft'),
(4, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(5, 21, 'Bilateral cleft lip', 0, ''),
(6, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(7, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
