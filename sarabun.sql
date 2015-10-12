-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2015 at 03:02 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarabun`
--

-- --------------------------------------------------------

--
-- Table structure for table `actiontb`
--

CREATE TABLE IF NOT EXISTS `actiontb` (
  `actionID` varchar(50) NOT NULL,
  `bookID` int(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `froms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booktb`
--

CREATE TABLE IF NOT EXISTS `booktb` (
  `bookID` int(4) NOT NULL,
  `send` varchar(1) NOT NULL,
  `inid` int(4) NOT NULL,
  `id` varchar(150) NOT NULL,
  `bookType` varchar(2) NOT NULL,
  `secret` varchar(15) NOT NULL,
  `author` varchar(30) NOT NULL,
  `days` datetime NOT NULL,
  `subject` varchar(250) NOT NULL,
  `datein` datetime NOT NULL,
  `beginword` varchar(250) NOT NULL,
  `locals` varchar(50) NOT NULL,
  `bookFile` varchar(30) NOT NULL,
  `manual` varchar(1) NOT NULL,
  `manualID` varchar(30) NOT NULL,
  `info` varchar(1) NOT NULL,
  `speed` varchar(50) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `years` int(4) NOT NULL,
  `refer` int(4) NOT NULL,
  `infodate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reunit`
--

CREATE TABLE IF NOT EXISTS `reunit` (
  `bookID` int(4) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `redate` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sendunit`
--

CREATE TABLE IF NOT EXISTS `sendunit` (
  `bookID` int(4) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `signtb`
--

CREATE TABLE IF NOT EXISTS `signtb` (
  `bookid` int(4) NOT NULL,
  `signer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactiontb`
--

CREATE TABLE IF NOT EXISTS `transactiontb` (
  `bookid` int(4) NOT NULL,
  `actions` varchar(30) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `acUnit` varchar(150) NOT NULL,
  `trandate` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typetb`
--

CREATE TABLE IF NOT EXISTS `typetb` (
  `typeID` varchar(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typetb`
--

INSERT INTO `typetb` (`typeID`, `name`, `public`) VALUES
('1', 'งป. / การเงิน', 1),
('2', 'สวัสดิการ / การส่งกำลังบำรุง', 1),
('3', 'กำลังพล', 1),
('4', 'การฝึก / ศึกษา / อบรม', 1),
('5', 'คำสั่ง', 1),
('6', 'ระเบียบ', 1),
('7', 'เรื่องเชิญ', 1),
('8', 'รายงาน', 1),
('9', 'เรือ / อากาศยาน', 1),
('10', 'แผนงาน', 1),
('11', 'การข่าว', 1),
('12', 'อื่นๆ', 1),
('13', 'อนุมัติ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE IF NOT EXISTS `usertb` (
  `id` int(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `access` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `acroname` varchar(50) NOT NULL,
  `nameID` varchar(30) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`id`, `username`, `password`, `access`, `name`, `acroname`, `nameID`, `section`) VALUES
(1, 'a1', 'J3a01', 'u2', 'สำนักงานเจ้ากรมยุทธการทหาร', 'สน.จก.ยก.ทหาร', 'กห 0304', 'ยก.ทหาร(สน.)'),
(2, 'a10', 'J3a10', 'u2', 'กองการฝึก', 'กมส.สปก.ฯ', 'กห 0304.06', 'ยก.ทหาร(กกฝ.)'),
(3, 'a11', 'J3a11', 'u2', 'สำนักวางแผนการฝึกร่วมและผสมฯ', 'สวฝ.', 'กห 0304', 'ยก.ทหาร(สวฝ.)'),
(4, 'a12', 'coa12', 'u1', 'แผนกธุรการ', 'ผธก.ฝยก.ศบท.', 'กห 0318.4', 'ฝยก.ศบท.ฯ'),
(5, 'a13', 'coa13', 'u2', 'ส่วนแผน', 'ส่วนแผน', 'กห 0318.4', 'ฝยก.ศบท.(ส่วนแผน)'),
(6, 'a14', 'coa14', 'u2', 'ส่วนปฏิบัติการ', 'สปก.ฝยก.ศบท.ฯ', 'กห 0318.4', 'ฝยก.ศบท.(สปก.)'),
(7, 'a15', 'coa15', 'u2', 'ส่วนบัญชาการยุทธ', 'สบย.ฝยก.ศบท.ฯ', 'กห 0318.4', 'ฝยก.ศบท.(สบย.)'),
(8, 'a16', 'coa16', 'u2', 'ชุดเจ้าหน้าที่ประสานงานติดต่อ', 'ชสต.ฝยก.ศบท.ฯ', 'กห 0318.4', 'ฝยก.ศบท.(ชสต.)'),
(9, 'a17', 'coa17', 'u2', 'ผยก.ศบท.ฯ(กสภ.)', 'ผยก.ศบท.ฯ(กสภ.)', 'กห 0318.4', 'ฝยก.ศบท.(กสภ.)'),
(10, 'a18', 'coa18', 'u2', 'กองสงครามเครือข่าย', 'กสค.สปก.ฯ', 'กห 0304.6.5', 'ยก.ทหาร(กสค.)'),
(11, 'a2', 'J3a02', 'u2', 'สำนักงานรองเจ้ากรมยุทธการทหาร(ทอ.)', 'สน.รอง(ทอ.)', 'กห', 'ยก.ทหาร(สน.)'),
(12, 'a3', 'J3a03', 'u2', 'สำนักงานรองเจ้ากรมยุทธการ(ทร.)', 'สน.รอง(ทร.)', 'กห', 'ยก.ทหาร(สน.)'),
(13, 'a4', 'J3a04', 'u2', 'กองกลางกรมยุทธการทหาร', 'กกล.ฯ', 'กห 0304', 'ยก.ทหาร(กกล.)'),
(14, 'a5', 'J3a05', 'u2', 'สำนักนโยบายและแผนฯ', 'สนผ.ยก.ทหาร', 'กห 0304', 'ยก.ทหาร(สนผ.)'),
(15, 'a6', 'J3a06', 'u2', 'กองปฏิบัติการพิเศษ', 'กพศ.สปก.ยก.ทหาร', 'กห 0304.6', 'สปก.ยก.ทหาร(กพศ.)'),
(16, 'a66', 'J3a066', 'u2', 'สำนักปฏิบัติการ', 'สปก.ยก.ทหาร', 'กห 0304', 'ยก.ทหาร(สปก.)'),
(17, 'a7', 'J3a07', 'u2', 'กองยุทธการกรมยุทธการทหาร', 'กยก.สปก.ฯ', 'กห 0304.6', 'สปก.ยก.ทหาร(กยก.ฯ)'),
(18, 'a77', 'J3a077', 'u2', 'ศูนย์ปฏิบัติการเพื่อสันติภาพ', 'ศสภ.ยก.ทหาร', 'กห', 'ยก.ทหาร(ศสภ.)'),
(19, 'a8', 'J3a08', 'u2', 'ศูนย์ปฏิบัติการเพื่อสันติภาพ', 'ศสภ.ยก.ทหาร', 'กห', 'ยก.ทหาร(ศสภ.)'),
(20, 'a9', 'J3a09', 'u2', 'กองการจัด', 'กกจ.สนผ.', 'กห 0304.5', 'สนผ.ยก.ทหาร(กกจ.)'),
(21, 'b03', 'J3b03', 'u2', 'สำนักรองเจ้ากรมยุทธการ(ทบ.)', 'สน.รอง(ทบ.)', 'กห', 'ยก.ทหาร(สน.)'),
(22, 'it', 'j3it', 'u2', 'กองกรรมวิธีข้อมูล', 'กกม.ยก.ทหาร', 'กห 0304', 'ยก.ทหาร(กกม.)'),
(23, 'j3', 'J03', 'u1', 'สารบรรณ', 'ยก.ทหาร', 'กห', 'ยก.ทหาร'),
(24, 'money', 'j3money', 'u2', 'กองการเงิน', 'กกง.ยก.ทหาร', 'กห', 'ยก.ทหาร(กกง.)'),
(25, 'ิีbudget', 'J3budget', 'u2', 'กองแผนและงบประมาณ', 'กผง.ยก.ทหาร', 'กห 0304', 'ยก.ทหาร(กผง.)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actiontb`
--
ALTER TABLE `actiontb`
  ADD PRIMARY KEY (`actionID`);

--
-- Indexes for table `booktb`
--
ALTER TABLE `booktb`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `signtb`
--
ALTER TABLE `signtb`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
