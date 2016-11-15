-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2016 at 02:56 PM
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
-- Table structure for table `tb_bonegraft`
--

CREATE TABLE IF NOT EXISTS `tb_bonegraft` (
  `id_bonegraft` int(11) NOT NULL,
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
  `other_complication` varchar(100) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_corrective`
--

CREATE TABLE IF NOT EXISTS `tb_corrective` (
  `id_corrective` int(11) NOT NULL,
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
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

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
(14, 40, 'อ.มนเฑียร', '2014-06-03', '2016-09-26', 1, 4, 3, 'removable plate/FB', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dentalprocedure`
--

CREATE TABLE IF NOT EXISTS `tb_dentalprocedure` (
  `id_dentalprocedure` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `tooth` varchar(60) COLLATE utf16_bin NOT NULL,
  `dental` varchar(60) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` text COLLATE utf16_bin NOT NULL,
  `fileupload1` varchar(100) COLLATE utf16_bin NOT NULL,
  `fileupload2` varchar(100) COLLATE utf16_bin NOT NULL,
  `fileupload3` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

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
(9, 37, '21', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tb_diagnosis` (
  `id_diagnosis` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `result_analysis` text COLLATE utf8mb4_bin NOT NULL,
  `facialcleft` int(2) NOT NULL,
  `otherfacialcleft` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
(27, 40, 'Complete right unilateral cleft lip with alveolus and complete hard palate cleft', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_distraction`
--

CREATE TABLE IF NOT EXISTS `tb_distraction` (
  `id_distraction` int(11) NOT NULL,
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
  `file3` varchar(80) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_distraction`
--

INSERT INTO `tb_distraction` (`id_distraction`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`) VALUES
(5, 21, 'ทพญ.กาญจนา ด่านภักดี', '2011-02-08', '2014-02-05', 4, 3, 1, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', 'Screenshot from 2016-09-03 21:24:31.png', 'Screenshot from 2016-09-10 13:15:24.png', 'Screenshot from 2016-09-11 23:41:50.png'),
(6, 21, '5555555555', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', ''),
(7, 23, '', '2015-04-09', '0000-00-00', 1, 4, 0, 1, '1 Jaw', 1, '', 'Internal distraction', '', '', ''),
(8, 25, '', '2014-12-09', '2015-03-24', 1, 4, 0, 1, '', 1, '', '', '', '', ''),
(9, 26, 'อ.ภัทรมน', '2016-07-12', '2016-09-25', 1, 4, 3, 1, 'Maxillary distraction osteogenesis', 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_growth`
--

CREATE TABLE IF NOT EXISTS `tb_growth` (
  `id_growth` int(11) NOT NULL,
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
  `dentalcast` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `tb_growth`
--

INSERT INTO `tb_growth` (`id_growth`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `typetool`, `other_typetool`, `appliance`, `other_appliance`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(4, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(5, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(6, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(7, 21, '45218', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', 0),
(8, 34, 'อ.พูนศักดิ์', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 1, 'RME', '', '', '', 1),
(9, 35, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 1, 3, 1, '', 1, '', '', '', '', 1);

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
  `otherevertreat` text NOT NULL,
  `treatmentfacility` varchar(60) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `developmentallevel` int(10) NOT NULL,
  `otherdevelopmentallevel` text NOT NULL,
  `daterecord` date NOT NULL,
  `id_user` int(5) NOT NULL,
  `sex` int(2) NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_history_patient`
--

INSERT INTO `tb_history_patient` (`id_history_patient`, `HN`, `DN`, `othnumber`, `CN`, `seriesnumber`, `firstname`, `lastname`, `filename`, `birthdate`, `address`, `nationality`, `race`, `religion`, `namefather`, `fatherlastname`, `career`, `birthdatefahter`, `age1`, `disease`, `mothername`, `motherlastname`, `mothercareer`, `birthdatemother`, `age2`, `diseasemother`, `spousename`, `spouselastname`, `benefits`, `otherbenefits`, `numberbenefits`, `evertreat`, `otherevertreat`, `treatmentfacility`, `doctor`, `developmentallevel`, `otherdevelopmentallevel`, `daterecord`, `id_user`, `sex`, `tel`) VALUES
(23, '2607', '511505', 'c24/51', 'D10200800637', '1409900916411', 'ปณิตา', 'คำอ้อ', '', '0000-00-00', '48 หมู่3 ต.หนองกุง อ.น้ำพอง จ.ขอนแก่น 40140', 'ไทย', 'ไทย', 'พุทธ', 'พงษ์ศักดิ์', 'คำอ้อ', 'ก่อสร้าง', '0000-00-00', 0, '', 'ศรีวิไล', 'คำอ้อ', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท8248520060', '2', '0', '', '', 1, '', '2016-09-25', 0, 2, '0981036646'),
(24, '', '584771', 'c61/58', 'D10201506481', '1459200101598', 'กานต์ธิดา', 'ยอดยิ่ง', '', '2015-05-15', '3 หมู่2 ต.โพธิ์ใหญ่ อ.พนมไพร จ.ร้อยเอ็ด', 'ไทย', 'ไทย', 'พุทธ', 'บุรินทร์', 'ยอดยิ่ง', '', '0000-00-00', 0, '', 'สุริยา', 'นันทะมา', '', '0000-00-00', 0, '', '', '', 2, '', 'R714500281542', '2', '0', '', '', 1, '', '2016-09-25', 0, 2, '0806057249'),
(25, '', '536072', 'c9/54', 'D10201102413', '1451100221642', 'มุกดารัตน์', 'สัตตัง', '', '1994-08-18', '116/2 ต.ทุ่งศรีเมือง อ.สุวรรณภูมิ จ.ร้อยเอ็ด 45130', 'ไทย', 'ไทย', 'พุทธ', 'ถนอม (เสียชีวิต)', 'สัตตัง', '', '0000-00-00', 0, '', 'วงเดือน', 'สัตตัง', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท7349887123', '2', '0', '', '', 1, '', '2016-09-25', 0, 2, '0880607803'),
(26, '', '455578', 'c88/45', '', '1469900321418', 'แทนไท', 'ภูเป่งน้ำ', '', '1995-11-14', '183 หมู่6 ต.หัวงัว อ.ยางตลาด จ.กาฬสินธุ์ 46120', 'ไทย', 'ไทย', 'พุทธ', 'ภูชะนะ', 'ภูเป่งน้ำ', '', '0000-00-00', 0, '', 'จิระภา', 'ภูเป่งน้ำ', '', '0000-00-00', 0, '', '', '', 2, '', 'ท7351444516', '3', '0', '', '', 1, '', '2016-09-25', 0, 1, '0835617781'),
(28, '', '486284', 'c18/49', 'D10200900558', '1410400279121', 'ธิดาเทพ', 'แสนสง่า', '', '1994-12-05', '60 หมู่3 ต.ตาดทอง อ.ศรีธาตุ จ.อุดรธานี 41230', 'ไทย', 'ไทย', 'พุทธ', 'กฤษฎา', 'แสนสง่า', '', '0000-00-00', 0, '', 'มธุรดา', 'สีแสง', '', '0000-00-00', 0, '', '', '', 1, '', '', '3', '0', '', '', 1, '', '2016-09-25', 0, 2, '0846848323'),
(29, 'IK1888', '563005', 'c34/56', '', '1470801479387', 'มิณณพัฒน์', 'วิชาโคตร', '', '2013-04-21', '85 หมู่17 ต.ธาตุ อ.วานรนิวาส จ.สกลนคร 47120', 'ไทย', 'ไทย', 'พุทธ', 'ณัฐพร', 'วิชาโคตร', 'รับจ้าง/นักศึกษา', '0000-00-00', 0, '', 'จิตรพร', 'ต้นพรม', 'รับจ้าง/นักศึกษา', '0000-00-00', 0, '', '', '', 5, 'สิทธิ์ว่าง', '', '2', '0', '', '', 1, '', '2016-09-26', 0, 2, '0899014936'),
(30, '', '437079', 'c1/36', 'D10-2008-00791', '1409900981728', 'มณฑนา', 'ชุติมารังสรรค์', '', '1992-12-30', '388/1 หมู่5 ต.โนนสะอาด อ.ชุมแพ จ.ขอนแก่น 40290', 'ไทย', 'ไทย', 'พุทธ', 'เกษม', 'ชุติมารังสรรค์', 'ค้าขาย', '0000-00-00', 0, '', 'ลำไพร', 'ชุติมารังสรรค์', 'แม่บ้าน', '0000-00-00', 0, '', '', '', 2, '', '', '2', '0', '', '', 1, '', '2016-09-26', 0, 2, '0872137764'),
(31, '', '584558', 'c50/58', 'D10-2015-06508', '1409904423088', 'ณนษภัทร', 'กองกะมุด', '', '2015-06-15', '588/91 หมู่บ้านชลพฤกษ์พาร์ควิลล์ ต.เมืองเก่า อ.เมือง จ.ขอนแก่น 40000', 'ไทย', 'ไทย', 'พุทธ', 'รุจิภาส', 'กองกะมุด', 'ธุรกิจส่วนตัว', '0000-00-00', 0, '', 'ยศวันต์', 'กองกะมุด', 'แม่บ้าน', '0000-00-00', 0, '', '', '', 2, '', '', '2', '0', '', '', 1, '', '2016-09-26', 0, 1, '0924766821'),
(32, '', '', '', '', '3409900637209', 'รวิศุทธ์', 'อำไพกรองกาญจน์', '', '2015-06-15', '588/91 หมู่บ้านชลพฤกษ์พาร์ควิลล์ ต.เมืองเก่า อ.เมือง จ.ขอนแก่น 40000', 'ไทย', 'ไทย', 'พุทธ', 'รุจิภาส', 'กองกะมุด', 'ธุรกิจส่วนตัว', '0000-00-00', 0, '', 'ยศวันต์', 'กองกะมุด', 'แม่บ้าน', '0000-00-00', 0, '', '', '', 2, '', '', '2', '0', '', '', 1, '', '2016-09-26', 0, 1, '0924766821'),
(33, 'cw6863', '432074', 'c14/43', 'D10-2008-01337', '3409900637209', 'ธนาภรณ์', 'กลายกลาง', '', '1996-08-17', '22 หมู่ 14 อ.เฉลิมพระเกียรติ จ.นครราชสีมา  30000', 'ไทย', 'ไทย', 'พุทธ', 'บุญส่ง', 'กลายกลาง', 'รับราชการ', '0000-00-00', 0, '', 'พิรุณ', 'กลายกลาง', 'รับราชการ', '0000-00-00', 0, '', '', '', 3, '', '', '3', '0', 'รพ.มหาราช นครราชสีมา', '', 1, '', '2016-09-26', 0, 2, '0887278292'),
(34, 'FG4274', '443682', 'c44/44', 'D10-2008-01387', '1429900406839', 'ศิรวุฒิ', 'อยู่ภักดี', '', '2001-07-05', '49/117 หมู่5 ต.หนองบัว อ.เมือง จ.อุดรธานี 42000', 'ไทย', 'ไทย', 'พุทธ', 'พต.พงศ์พิบูล', 'อยู่ภักดี', 'รับราชการ', '0000-00-00', 0, '', 'ธันวะดี', 'อยู่ภักดี', '', '0000-00-00', 0, '', '', '', 2, '', '', '3', '0', '', '', 1, '', '2016-09-26', 0, 1, '0814713424'),
(35, 'HG3004', '520928', 'c8/52', 'D10-2009-00391', '1419901931988', 'สุปัญญา', 'บุสุวะ', '', '2000-07-07', '8/1 หมู่5 ต.หนองขอนกว้าง อ.เมือง จ.อุดรธานี 41000', 'ไทย', 'ไทย', 'พุทธ', 'พรชัย', 'บุสุวะ', 'เกษตรกรรม', '0000-00-00', 0, '', 'วาสนา', 'บุสุวะ', 'ทำนา/ค้าขาย', '0000-00-00', 0, 'โลหิตจาง', '', '', 2, '', 'ท0026830477', '3', '0', 'รพ.อุดรธานี', 'ทพญ.วรางคณา หลักคำ', 1, '', '2016-09-26', 0, 1, '0835999120'),
(36, 'FM4565', '455114', 'c84/45', '', '1409903148610', 'ปณกานต์', 'คำภาเกะ', '', '2002-09-17', '3/9 ต.เมืองพล อ.พล จ.ขอนแก่น 40120', 'ไทย', 'ไทย', 'พุทธ', 'พิชิต', 'คำภาเกะ', 'รับราชการ', '0000-00-00', 0, '', 'กาญจนา', 'คำภาเกะ', 'รับราชการ', '0000-00-00', 0, '', '', '', 1, '', '', '2', '0', '', '', 1, '', '2016-09-26', 0, 0, ''),
(37, 'GH2455', '513094', 'c29/51', 'D10-2008-00213', '1311901035625', 'ดารกา', 'แวทไธสง', '', '2004-12-01', '31/1 หมู่6 ต.ทองหลาง อ.บ้านใหม่ไชยพจน์ จ.บุรีรัมย์ 31120', 'ไทย', 'ไทย', 'พุทธ', 'อภิวัฒน์', 'แวทไธสง', 'ทำนา', '0000-00-00', 0, '', 'ทองม้วน', 'แวทไธสง', 'ทำนา', '0000-00-00', 0, 'พาหะ Thalassemia', '', '', 2, '', 'ท7120543907', '3', '0', 'รพ.บุรีรัมย์,รพ.ศรีนครินทร์', '', 1, '', '2016-09-26', 0, 0, '0871046836'),
(38, 'EW3887', '436020', 'c39/43', '', '1420200070163', 'กาญจนา', 'ศรีเลิศ', '', '1999-07-08', '338 หมู่15 ต.นาดอกคำ อ.นาด้วง จ.เลย 42210', 'ไทย', 'ไทย', 'พุทธ', 'กาญน์', 'ศรีลิศ', '', '1964-04-10', 52, '', 'บาหยัน', 'ศรีเลิศ', '', '0000-00-00', 0, '', '', '', 2, '', 'ท0000035499', '1', '0', '', '', 1, '', '2016-09-26', 0, 0, '0933763991'),
(39, 'IF3673', '55558', 'c46/55', 'D10-2013-04335', '1100700966886', 'ขวัญจุฬา', 'จันโคตร', '', '1989-04-03', '18 ถ.พิทักษ์สันติราษฎร ต.ศรีบุญเรือง อ.เมือง จ.มุกดาหาร 49000', 'ไทย', 'ไทย', 'พุทธ', 'ชูชาติ', 'กัทลี', '', '0000-00-00', 0, '', 'พูนสิน', 'จันโคตร', '', '0000-00-00', 0, '', '', '', 1, '', '11472', '3', '0', 'รพ.สรรพสิทธิ์ประสงค์ จ.อุบลราชธานี', '', 1, '', '2016-09-26', 0, 0, '0801907129'),
(40, 'FI4437', '470813', 'c76/45', 'D10-2007-10874', '1103100480977', 'สุมาลี', 'อามาตมุลตรี', '', '1997-04-28', '54 หมู่14 ต.จังหาร อ.จังหาร จ.ร้อยเอ็ด 45000', 'ไทย', 'ไทย', 'พุทธ', 'ทองดี', 'อามาตมุลตรี', 'ทำนา', '0000-00-00', 0, '', 'หนูเพียร', 'อามาตมุลตรี', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', '', '3', '0', 'รพ.เจริญกรุง,รพ.ศรีนครินทร์', '', 1, '', '2016-09-26', 0, 0, '0850589872');

-- --------------------------------------------------------

--
-- Table structure for table `tb_interceptive`
--

CREATE TABLE IF NOT EXISTS `tb_interceptive` (
  `id_interceptive` int(11) NOT NULL,
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
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(54, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_orthognathic`
--

CREATE TABLE IF NOT EXISTS `tb_orthognathic` (
  `id_orthognathic` int(11) NOT NULL,
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
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_orthognathic`
--

INSERT INTO `tb_orthognathic` (`id_orthognathic`, `id_history_patient`, `doctor`, `begin_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(8, 21, 'พญ.กันยากร โนนสูง', '2014-02-04', 4, 3, 1, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(9, 21, '141111', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', '', 0),
(10, 21, 'ดดดดดดดดดดดด', '2016-09-07', 5, 3, 2, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'นิดเครื่องมือ', '648498.jpg', '648502.jpg', '648588.jpg', 1),
(11, 28, 'รพ.ศูนย์ขอนแก่น', '2016-02-10', 1, 4, 3, 0, '', 1, 'mandibular set back+rotation', '', '', '', '', 1),
(12, 33, '', '2007-06-18', 1, 1, 0, 1, '', 1, '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_othersurgery`
--

CREATE TABLE IF NOT EXISTS `tb_othersurgery` (
  `id_othersurgery` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `id_tab` int(5) NOT NULL,
  `doctor` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename1` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename2` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

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
(52, 23, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-04', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_prosthodontic`
--

CREATE TABLE IF NOT EXISTS `tb_prosthodontic` (
  `id_prosthodontic` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `dental` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `appliance` int(5) NOT NULL,
  `otherappliance` varchar(100) COLLATE utf16_bin NOT NULL,
  `file1` varchar(100) COLLATE utf16_bin NOT NULL,
  `file2` varchar(100) COLLATE utf16_bin NOT NULL,
  `file3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_prosthodontic`
--

INSERT INTO `tb_prosthodontic` (`id_prosthodontic`, `id_history_patient`, `dental`, `begin_date`, `appliance`, `otherappliance`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(10, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(11, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(12, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 2),
(13, 21, '412587', '0000-00-00', 1, '', '', '', '', 0),
(14, 21, '748521', '0000-00-00', 1, '', '', '', '', 0),
(15, 23, '', '0000-00-00', 7, 'Pontic22อยู่ในretainer', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_psot`
--

CREATE TABLE IF NOT EXISTS `tb_psot` (
  `id_psot` int(11) NOT NULL,
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
  `cast` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

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
(23, 36, 'รพ.ศรีนครินทร์', '', '2002-09-20', '0000-00-00', 0, 0, 0, 1, 0, '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bonegraft`
--
ALTER TABLE `tb_bonegraft`
  ADD PRIMARY KEY (`id_bonegraft`);

--
-- Indexes for table `tb_corrective`
--
ALTER TABLE `tb_corrective`
  ADD PRIMARY KEY (`id_corrective`);

--
-- Indexes for table `tb_dentalprocedure`
--
ALTER TABLE `tb_dentalprocedure`
  ADD PRIMARY KEY (`id_dentalprocedure`);

--
-- Indexes for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`);

--
-- Indexes for table `tb_distraction`
--
ALTER TABLE `tb_distraction`
  ADD PRIMARY KEY (`id_distraction`);

--
-- Indexes for table `tb_growth`
--
ALTER TABLE `tb_growth`
  ADD PRIMARY KEY (`id_growth`);

--
-- Indexes for table `tb_history_patient`
--
ALTER TABLE `tb_history_patient`
  ADD PRIMARY KEY (`id_history_patient`);

--
-- Indexes for table `tb_interceptive`
--
ALTER TABLE `tb_interceptive`
  ADD PRIMARY KEY (`id_interceptive`);

--
-- Indexes for table `tb_orthognathic`
--
ALTER TABLE `tb_orthognathic`
  ADD PRIMARY KEY (`id_orthognathic`);

--
-- Indexes for table `tb_othersurgery`
--
ALTER TABLE `tb_othersurgery`
  ADD PRIMARY KEY (`id_othersurgery`);

--
-- Indexes for table `tb_prosthodontic`
--
ALTER TABLE `tb_prosthodontic`
  ADD PRIMARY KEY (`id_prosthodontic`);

--
-- Indexes for table `tb_psot`
--
ALTER TABLE `tb_psot`
  ADD PRIMARY KEY (`id_psot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bonegraft`
--
ALTER TABLE `tb_bonegraft`
  MODIFY `id_bonegraft` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tb_corrective`
--
ALTER TABLE `tb_corrective`
  MODIFY `id_corrective` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_dentalprocedure`
--
ALTER TABLE `tb_dentalprocedure`
  MODIFY `id_dentalprocedure` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_distraction`
--
ALTER TABLE `tb_distraction`
  MODIFY `id_distraction` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_growth`
--
ALTER TABLE `tb_growth`
  MODIFY `id_growth` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_history_patient`
--
ALTER TABLE `tb_history_patient`
  MODIFY `id_history_patient` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tb_interceptive`
--
ALTER TABLE `tb_interceptive`
  MODIFY `id_interceptive` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tb_orthognathic`
--
ALTER TABLE `tb_orthognathic`
  MODIFY `id_orthognathic` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_othersurgery`
--
ALTER TABLE `tb_othersurgery`
  MODIFY `id_othersurgery` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tb_prosthodontic`
--
ALTER TABLE `tb_prosthodontic`
  MODIFY `id_prosthodontic` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_psot`
--
ALTER TABLE `tb_psot`
  MODIFY `id_psot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
