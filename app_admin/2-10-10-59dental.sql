-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2016 at 10:12 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_bin AUTO_INCREMENT=51 ;

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
(45, 35, '', '2011-01-10', '', '', '', '', 1, 3, 1, ''),
(46, 42, 'รพ.ศรีนครินทร์', '2004-03-26', '', '', '', '', 0, 1, 0, ''),
(47, 42, 'อ.สุภาพร/อ.เอกสิทธิ์', '2005-01-06', '', '', '', '', 0, 2, 0, ''),
(48, 49, '555', '0000-00-00', '5555', '', '', '', 1, 1, 1, ''),
(49, 49, '555555', '0000-00-00', '', '', '', '', 1, 2, 0, ''),
(50, 49, '7777777777777', '0000-00-00', '888888888', '', '', '', 1, 3, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_corrective`
--

CREATE TABLE IF NOT EXISTS `tb_corrective` (
  `id_corrective` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(11) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `tool` text NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `dentalcast` int(5) NOT NULL,
  PRIMARY KEY (`id_corrective`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_corrective`
--

INSERT INTO `tb_corrective` (`id_corrective`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `tool`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(2, 21, 'ทพญ.กาญจนา ด่านภักดี', '2012-02-01', '2005-02-02', 5, 4, 3, 'ชนิดของเครื่องมือ :', '10690103_764556926991167_1787453937051832021_n.jpg', 'd89cdfec85eb868a2abe1b1cc5e568d5.png', '12102555214751.jpg', 1),
(3, 21, '8457', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', '', 0),
(4, 23, 'อ.ชุติมาพร', '2010-07-02', '2016-03-22', 1, 0, 3, '', '', '', '', 1),
(5, 25, 'อ.พูนศักดิ์', '2012-10-05', '2016-09-25', 1, 4, 3, 'Fixed orthodontic appliance', '', '', '', 1),
(6, 26, 'วัลลภ อ.มนเฑียร', '1998-07-02', '2016-09-25', 1, 4, 3, '', '', '', '', 1),
(7, 26, 'วัลลภ อ.มนเฑียร', '1998-07-02', '2016-09-25', 1, 4, 3, '', '', '', '', 1),
(8, 28, 'อัจฉริยาพร อ.ทัศนีย์', '2006-08-25', '2016-09-25', 1, 4, 3, '', '', '', '', 1),
(9, 30, 'อ.ธนพร', '2009-01-14', '2014-01-19', 1, 4, 3, 'Band, Active spring and plate', '', '', '', 1),
(10, 33, 'อ.นิธิภาวี', '2002-01-31', '2016-09-26', 1, 1, 3, 'Fixed appliance', '', '', '', 1),
(11, 33, 'อ.นิธิภาวี', '2002-01-31', '2016-09-26', 1, 1, 3, 'Fixed appliance', '', '', '', 1),
(12, 34, 'อ.พูนศักดิ์', '2011-07-15', '2016-09-26', 1, 4, 3, 'Fixed appliance', '', '', '', 1),
(13, 35, 'อ.ชุติมาพร', '2014-06-03', '2016-07-25', 1, 4, 3, '', '', '', '', 1),
(14, 40, 'อ.มนเฑียร', '2014-06-03', '2016-09-26', 1, 4, 3, 'removable plate/FB', '', '', '', 1),
(15, 0, 'อ.ชุติมาพร', '2010-07-16', '2016-10-03', 1, 4, 3, '', '', '', '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_dentalprocedure`
--

INSERT INTO `tb_dentalprocedure` (`id_dentalprocedure`, `id_history_patient`, `tooth`, `dental`, `begin_date`, `tool`, `fileupload1`, `fileupload2`, `fileupload3`) VALUES
(1, 23, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2013-02-06', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-03 21:24:31.png', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-13 21:21:13.png'),
(2, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2016-09-07', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 11:58:51.png'),
(5, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2014-02-05', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-13 21:21:13.png', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-11 23:19:32.png'),
(6, 21, '', '5555555', '0000-00-00', '', '', '', ''),
(7, 21, '', '88888', '0000-00-00', '', '', '', ''),
(8, 33, '22', '', '2004-11-11', '', '', '', ''),
(9, 37, '21', '', '0000-00-00', '', '', '', ''),
(10, 42, '', 'jgh', '0000-00-00', '', '', '', ''),
(11, 49, '555555555', '55555555555', '0000-00-00', '55555555555', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id_diagnosis`, `id_history_patient`, `result_analysis`, `facialcleft`, `otherfacialcleft`) VALUES
(1, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(2, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(3, 21, 'Complete hard palate cleft', 2, 'ระบุ Facial cleft'),
(4, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(6, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(7, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(9, 21, '', 0, ''),
(10, 21, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 0, ''),
(11, 23, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(12, 24, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(13, 25, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(14, 26, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(15, 27, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(16, 28, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(17, 29, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(18, 30, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(19, 31, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(20, 33, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(21, 34, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(22, 35, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(23, 36, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(24, 37, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(25, 38, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(26, 39, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(27, 40, 'Complete right unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(28, 42, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(29, 42, '', 0, ''),
(30, 49, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_distraction`
--

INSERT INTO `tb_distraction` (`id_distraction`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`) VALUES
(5, 21, 'ทพญ.กาญจนา ด่านภักดี', '2011-02-08', '2014-02-05', 4, 3, 1, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', 'Screenshot from 2016-09-03 21:24:31.png', 'Screenshot from 2016-09-10 13:15:24.png', 'Screenshot from 2016-09-11 23:41:50.png'),
(6, 21, '5555555555', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', ''),
(7, 23, '', '2015-04-09', '0000-00-00', 1, 4, 0, 1, '1 Jaw', 1, '', 'Internal distraction', '', '', ''),
(8, 25, '', '2014-12-09', '2015-03-24', 1, 4, 0, 1, '', 1, '', '', '', '', ''),
(9, 26, 'อ.ภัทรมน', '2016-07-12', '2016-09-25', 1, 4, 3, 1, 'Maxillary distraction osteogenesis', 1, '', '', '', '', ''),
(10, 49, '888888888888', '0000-00-00', '0000-00-00', 1, 1, 1, 1, '', 0, '', '99999999999999', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_growth`
--

CREATE TABLE IF NOT EXISTS `tb_growth` (
  `id_growth` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(60) COLLATE utf32_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(10) NOT NULL,
  `incisor` int(10) NOT NULL,
  `skeletal` int(10) NOT NULL,
  `typetool` int(10) NOT NULL,
  `other_typetool` text COLLATE utf32_bin NOT NULL,
  `appliance` int(10) NOT NULL,
  `other_appliance` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename1` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename2` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename3` varchar(60) COLLATE utf32_bin NOT NULL,
  `dentalcast` int(10) NOT NULL,
  PRIMARY KEY (`id_growth`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_growth`
--

INSERT INTO `tb_growth` (`id_growth`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `typetool`, `other_typetool`, `appliance`, `other_appliance`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(4, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(5, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(6, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(7, 21, '45218', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', 0),
(8, 34, 'อ.พูนศักดิ์', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 1, 'RME', '', '', '', 1),
(9, 35, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 1, 3, 1, '', 1, '', '', '', '', 1),
(10, 49, '6666666666666', '0000-00-00', '0000-00-00', 1, 1, 1, 1, '', 0, '88888888888888', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_patient`
--

CREATE TABLE IF NOT EXISTS `tb_history_patient` (
  `id_history_patient` int(11) NOT NULL AUTO_INCREMENT,
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
  `otherevertreat` text NOT NULL,
  `treatmentfacility` varchar(60) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `developmentallevel` int(10) NOT NULL,
  `otherdevelopmentallevel` text NOT NULL,
  `daterecord` date NOT NULL,
  `id_user` int(5) NOT NULL,
  `sex` int(2) NOT NULL,
  `tel` text NOT NULL,
  PRIMARY KEY (`id_history_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `tb_history_patient`
--

INSERT INTO `tb_history_patient` (`id_history_patient`, `HN`, `DN`, `othnumber`, `CN`, `seriesnumber`, `firstname`, `lastname`, `filename`, `birthdate`, `address`, `nationality`, `race`, `religion`, `namefather`, `fatherlastname`, `career`, `birthdatefahter`, `age1`, `disease`, `mothername`, `motherlastname`, `mothercareer`, `birthdatemother`, `age2`, `diseasemother`, `spousename`, `spouselastname`, `benefits`, `otherbenefits`, `numberbenefits`, `evertreat`, `otherevertreat`, `treatmentfacility`, `doctor`, `developmentallevel`, `otherdevelopmentallevel`, `daterecord`, `id_user`, `sex`, `tel`) VALUES
(49, 'EB2937', '421013', 'C41/42', '', '1102001968211', 'ณัฐพล', 'ศรีสาร', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', '0000-00-00', 0, '', '', '', 0, '', '', '', '', '', '', 0, '', '2016-10-09', 0, 1, '0831517171');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=73 ;

--
-- Dumping data for table `tb_interceptive`
--

INSERT INTO `tb_interceptive` (`id_interceptive`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeleta`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(44, 21, 'พญ.กานดา สิทธิ', '2013-02-05', '2013-02-20', 4, 2, 2, '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 1),
(45, 21, '888', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', 0),
(46, 21, '888', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', 0),
(47, 35, 'อ.ชุติมาพร', '2016-09-26', '2014-06-17', 1, 0, 0, '', '', '', 1),
(48, 35, 'อ.ชุติมาพร', '2016-09-26', '2014-06-17', 1, 0, 0, '', '', '', 1),
(49, 35, 'อ.ชุติมาพร', '2011-11-15', '2014-06-17', 1, 0, 0, '', '', '', 1),
(50, 35, 'อ.ชุติมาพร', '2011-11-15', '2014-06-17', 1, 0, 0, '', '', '', 1),
(51, 37, 'อ.พูนศักดิ์', '2011-03-30', '0000-00-00', 1, 3, 0, '', '', '', 1),
(52, 37, 'อ.พูนศักดิ์', '2011-03-30', '0000-00-00', 1, 3, 0, '', '', '', 1),
(53, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1),
(54, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1),
(55, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0),
(56, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0),
(57, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0),
(58, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0),
(59, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(60, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(61, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(62, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(63, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(64, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(65, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(66, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(67, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(68, 0, '5555555555555', '0000-00-00', '0000-00-00', 1, 1, 1, '', '', '', 1),
(69, 49, '', '0000-00-00', '0000-00-00', 1, 2, 2, '', '', '', 2),
(70, 49, '', '0000-00-00', '0000-00-00', 1, 2, 2, '', '', '', 2),
(71, 49, '5555555555', '0000-00-00', '0000-00-00', 1, 2, 2, '', '', '', 2),
(72, 49, '5555555555', '0000-00-00', '0000-00-00', 1, 2, 2, '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_orthognathic`
--

CREATE TABLE IF NOT EXISTS `tb_orthognathic` (
  `id_orthognathic` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `technic` int(5) NOT NULL,
  `othertechnic` text COLLATE utf16_bin NOT NULL,
  `mandible` int(5) NOT NULL,
  `othermandible` text COLLATE utf16_bin NOT NULL,
  `tool` text COLLATE utf16_bin NOT NULL,
  `file1` text COLLATE utf16_bin NOT NULL,
  `file2` text COLLATE utf16_bin NOT NULL,
  `file3` text COLLATE utf16_bin NOT NULL,
  `dentalcast` int(5) NOT NULL,
  PRIMARY KEY (`id_orthognathic`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_orthognathic`
--

INSERT INTO `tb_orthognathic` (`id_orthognathic`, `id_history_patient`, `doctor`, `begin_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(8, 21, 'พญ.กันยากร โนนสูง', '2014-02-04', 4, 3, 1, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(9, 21, '141111', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', '', 0),
(10, 21, 'ดดดดดดดดดดดด', '2016-09-07', 5, 3, 2, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'นิดเครื่องมือ', '648498.jpg', '648502.jpg', '648588.jpg', 1),
(11, 28, 'รพ.ศูนย์ขอนแก่น', '2016-02-10', 1, 4, 3, 0, '', 1, 'mandibular set back+rotation', '', '', '', '', 1),
(12, 33, '', '2007-06-18', 1, 1, 0, 1, '', 1, '', '', '', '', '', 1),
(13, 42, 'อ.สุภาพร', '2015-08-28', 1, 4, 3, 1, 'Le fort I osteotomy', 1, 'BSSRO set back', '', '', '', '', 0),
(14, 49, '888888888888', '0000-00-00', 1, 1, 1, 1, '', 0, '', '88888888888', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_othersurgery`
--

CREATE TABLE IF NOT EXISTS `tb_othersurgery` (
  `id_othersurgery` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `id_tab` int(5) NOT NULL,
  `doctor` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename1` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename2` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(10) NOT NULL,
  PRIMARY KEY (`id_othersurgery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tb_othersurgery`
--

INSERT INTO `tb_othersurgery` (`id_othersurgery`, `id_history_patient`, `id_tab`, `doctor`, `begin_date`, `tool`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(1, 21, 1, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-11 23:19:32.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 10:35:51.png', 1),
(5, 21, 5, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(6, 21, 5, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(7, 21, 6, 'พญ.กาญจนา ด่านภักดี', '2014-02-11', 'กรรไกร', 'Screenshot from 2016-09-08 11:58:51.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-10 13:15:58.png', 2),
(8, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2013-02-06', 'เครื่องมือที่ใช้', '629255.jpg', 'logo-tawanchai.png', 'usa.jpg', 1),
(9, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2013-02-06', 'เครื่องมือที่ใช้', '629255.jpg', 'logo-tawanchai.png', '629415.jpg', 2),
(13, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2012-02-15', 'เครื่องมือที่ใช้', '$_35.JPG', '12190112484.gif', 'TAT-Logo_500x300.jpg', 1),
(14, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2012-02-15', 'เครื่องมือที่ใช้', '$_35.JPG', '12190112484.gif', 'TAT-Logo_500x300.jpg', 1),
(17, 21, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2012-02-14', 'กรรไกร', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(18, 21, 3, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-04', 'กรรไกร', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', '632244.jpg', 1),
(19, 21, 3, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-04', 'กรรไกร', '632244.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 2),
(21, 21, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-18', 'กรรไกร', '632241.jpg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 1),
(22, 21, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-18', 'กรรไกร', '632241.jpg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 2),
(23, 21, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-18', 'กรรไกร', '632241.jpg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 2),
(24, 23, 1, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-05', 'กรรไกร', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(27, 21, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-03', 'กรรไกร', '632243.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 1),
(28, 21, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-03', 'กรรไกร', '632243.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 2),
(29, 21, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-03', 'กรรไกร', '632243.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 1),
(30, 21, 1, '1452', '0000-00-00', '', '', '', '', 0),
(31, 21, 1, '85964', '0000-00-00', '', '', '', '', 0),
(32, 21, 1, '85964', '0000-00-00', '', '', '', '', 0),
(33, 21, 1, '748521', '0000-00-00', '', '', '', '', 0),
(34, 21, 2, '78541', '0000-00-00', '', '', '', '', 0),
(35, 21, 2, '874521', '0000-00-00', '', '', '', '', 0),
(36, 21, 3, '77777', '0000-00-00', '', '', '', '', 0),
(37, 21, 4, '785412', '0000-00-00', '', '', '', '', 0),
(38, 21, 5, '452178', '0000-00-00', '', '', '', '', 0),
(39, 21, 6, '4788510000', '0000-00-00', '', '', '', '', 0),
(40, 28, 2, '', '2008-12-23', '', '', '', '', 0),
(41, 28, 4, '', '2007-05-24', '', '', '', '', 0),
(42, 34, 6, '', '0000-00-00', '', '', '', '', 0),
(43, 23, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-11', '', '', '', '', 1),
(46, 23, 2, '', '2014-11-02', '', '', '', '', 1),
(47, 23, 1, 'นพ.นพคุณ ดวงจินทร์ดา', '2012-03-08', '', '', '', '', 1),
(48, 23, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2010-03-10', '', '', '', '', 1),
(49, 23, 3, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-11', '', '', '', '', 1),
(50, 23, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-11', '', '', '', '', 1),
(51, 23, 5, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-05', '', '', '', '', 1),
(52, 23, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-04', '', '', '', '', 1),
(53, 42, 1, '', '2005-10-05', '', '', '', '', 0),
(54, 49, 1, '555555555', '0000-00-00', '88888888888888', '', '', '', 1),
(55, 49, 2, '8888888888888', '0000-00-00', '99999999999999999', '', '', '', 1),
(56, 49, 3, '888888888888888', '0000-00-00', '99999999999999', '', '', '', 1),
(57, 49, 4, '666666666666666', '0000-00-00', '9999999999', '', '', '', 1),
(58, 49, 5, '9999999999999', '0000-00-00', '5555555555555555', '', '', '', 1),
(60, 49, 6, '9999999999', '0000-00-00', 'gggggggg', '', '', '', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_prosthodontic`
--

INSERT INTO `tb_prosthodontic` (`id_prosthodontic`, `id_history_patient`, `dental`, `begin_date`, `appliance`, `otherappliance`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(10, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(11, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(12, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 2),
(13, 21, '412587', '0000-00-00', 1, '', '', '', '', 0),
(14, 21, '748521', '0000-00-00', 1, '', '', '', '', 0),
(15, 23, '', '0000-00-00', 7, 'Pontic22อยู่ในretainer', '', '', '', 1),
(16, 49, '888888888888888', '0000-00-00', 3, '', '', '', '', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=25 ;

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
(17, 21, '85', '95', '2016-09-01', '2016-09-29', 1, 1, 1, 1, 1, '5.อื่นๆ', '', '', '', 1),
(18, 24, 'อัจฉริยาพร', 'อ.มนเฑียร', '2015-06-25', '2016-05-17', 0, 0, 0, 0, 0, '', '', '', '', 1),
(19, 27, 'อ.พูนศักดิ์', 'โอภาส', '2013-05-07', '2014-04-22', 0, 0, 0, 0, 0, '', '', '', '', 1),
(20, 29, 'โอภาส', 'อ.พูนศักดิ์', '2013-05-07', '2014-04-22', 1, 1, 1, 1, 0, '', '', '', '', 1),
(21, 31, 'อ.พูนศักดิ์', '', '2015-06-18', '2014-04-22', 1, 1, 1, 1, 0, '', '', '', '', 1),
(22, 34, 'อ.สมศักดิ์', '', '2011-07-07', '0000-00-00', 1, 0, 0, 1, 0, '', '', '', '', 1),
(23, 36, 'รพ.ศรีนครินทร์', '', '2002-09-20', '0000-00-00', 0, 0, 0, 1, 0, '', '', '', '', 1),
(24, 49, '666666666666', '8888888888888888', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
