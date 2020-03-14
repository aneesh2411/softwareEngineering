-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 10:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ml`
--

CREATE TABLE `ml` (
  `id` int(255) NOT NULL,
  `firstname` varchar(5000) NOT NULL,
  `lastname` varchar(5000) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `advisor` varchar(1000) NOT NULL,
  `file` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ml`
--

INSERT INTO `ml` (`id`, `firstname`, `lastname`, `startdate`, `enddate`, `rollno`, `branch`, `phoneno`, `reason`, `advisor`, `file`) VALUES
(1, 's', 'ww', '1111-02-12', '4444-12-12', '545', 'ss', '54', 'ss', 'ss', 'XAT2049723 '),
(2, 'juu', 'hi', '0000-00-00', '0000-00-00', '20', 'cse', '665', 'bad', 'gjk', 'hi'),
(3, 'swe', 'p', '1111-12-12', '1111-02-12', '1', 'SAZ', '12', 'ASa', 'szA', 'Iris+Recogn');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_numbers`
--

CREATE TABLE `mobile_numbers` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Verified, 0=Not verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mobile_numbers`
--

INSERT INTO `mobile_numbers` (`id`, `mobile_number`, `verification_code`, `verified`) VALUES
(1, '9526251058', '93307', 0);

-- --------------------------------------------------------

--
-- Table structure for table `od`
--

CREATE TABLE `od` (
  `id` int(11) NOT NULL,
  `fname` varchar(2000) NOT NULL,
  `lname` varchar(2000) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `number` varchar(12) NOT NULL,
  `reason` varchar(2000) NOT NULL,
  `advisor` varchar(200) NOT NULL,
  `file` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `od`
--

INSERT INTO `od` (`id`, `fname`, `lname`, `sdate`, `edate`, `rollno`, `branch`, `number`, `reason`, `advisor`, `file`) VALUES
(1, 'swethu', 'p', '2000-12-12', '2001-12-12', '21', 'cs', '51', 'ss', 'ss', 'XAT2049723 (1).pdf'),
(5, 'anees', 'm', '1222-12-12', '1111-12-12', '007', 'cse', '9092', 'mosquito', 'sss', 'Finger+Scan.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `ordinary`
--

CREATE TABLE `ordinary` (
  `id` int(255) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(2000) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `rollno` varchar(3000) NOT NULL,
  `branch` varchar(3000) NOT NULL,
  `pno` varchar(12) NOT NULL,
  `reason` varchar(3000) NOT NULL,
  `advisor` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordinary`
--

INSERT INTO `ordinary` (`id`, `firstname`, `lastname`, `startdate`, `enddate`, `rollno`, `branch`, `pno`, `reason`, `advisor`) VALUES
(1, 'swe', 'p', '1222-12-12', '1111-11-12', '22', 'cs', '22', 'ws', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, NULL, 'admin', NULL, NULL, 'f925916e2754e5e03f75dd58a5733251', '2019-10-04 06:10:04'),
(5, 'Swetha', '', 909, 'swetha.nandhainfotech@gmail.com', 'swe', NULL),
(7, 'jahnavi', 'juhi', 909, 'swe1999@gmail.com', 'd35aded8859af97ae8418cf952c419c6', '2020-01-24 16:27:13'),
(8, 'aniiiiiiiiiiiii', '17007', 9000000000, 'ani1999@gmail.com', 'ani', '2020-01-31 08:08:50'),
(10, 'shyamala', '17007', 922, 'swe@gmail.com', 'mommy', '2020-02-03 08:23:40'),
(11, 'shyam', '17007', 909, 'swe@gmail.com', 'swe123', '2020-02-03 08:24:55'),
(13, 'prak', '17007', 666, 'swetha.nandhainfotech@gmail.com', 'swee', '2020-02-03 08:27:48'),
(15, 'SwethaP', '17007', 123, 'swetha.nandhainfotech@gmail.com', 'swe1234', '2020-02-03 08:30:14'),
(16, 'ani', '17007', 123, 'swetha.nandhainfotech@gmail.com', 'swe123', '2020-02-03 08:31:45'),
(17, 'Shyamala ', 'shyam', 9092555555, 'swe1999@gmail.com', 'swe123', '2020-02-03 08:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `ID` int(10) NOT NULL,
  `Subject` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`ID`, `Subject`, `CreationDate`) VALUES
(1, 'Mathmetics', '2019-10-07 06:11:06'),
(2, 'Physics', '2019-10-07 06:11:19'),
(3, 'Chemistry', '2019-10-07 06:11:32'),
(4, 'Biology', '2019-10-07 06:11:41'),
(5, 'Hindi', '2019-10-07 06:11:49'),
(6, 'English', '2019-10-07 06:11:56'),
(7, 'Science', '2019-10-07 06:12:06'),
(8, 'Social Science', '2019-10-07 06:12:19'),
(9, 'Accounts', '2019-10-07 06:12:32'),
(10, 'Arts', '2019-10-07 06:12:44'),
(11, 'Musics', '2019-10-07 06:12:53'),
(12, 'Sanskrit', '2019-10-07 06:13:08'),
(13, 'Operating System (OS)', '2019-10-13 19:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Qualifications` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `TeacherSub` varchar(120) DEFAULT NULL,
  `JoiningDate` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `Name`, `Picture`, `Email`, `MobileNumber`, `Qualifications`, `Address`, `TeacherSub`, `JoiningDate`, `RegDate`) VALUES
(1, 'Abir Singh', '7fdc1a630c238af0815181f9faa190f51570433828.jpg', 'abir@gmail.com', 4654654646, 'M.Tech(IT)', 'Flat No=646, Mayur Vihar Phase 1 New Delhi', 'Mathmetics', '2019-10-07', '2019-10-07 07:37:08'),
(2, 'Gyan Tripathi', 'e9db84d0e11b5c26723e9951e4f7204b1570445433.jpg', 'gyan@gmail.com', 8989898988, 'B.TECH', 'H.No=B 3/4 Shivala Varanasi 221001', 'Accounts', '2019-10-02', '2019-10-07 07:45:52'),
(3, 'Nikhil Singh', '2d99ae9e904f880eef8feb4e61882b791570445365.jpg', 'nik@gmail.com', 1213123213, 'B.ED(Commerce)', 'JK block H.no 3156 Laxmi Nagar', 'Arts', '2019-10-01', '2019-10-07 07:47:20'),
(4, 'Anuj Kumar', '3640809ea9da2fb83a3f8ac12432d8551570993351.png', 'phpgurukulofficial@gmail.com', 9864723742, 'B.Tech, MBA', 'New Delhi India 110091', 'Operating System (OS)', '2019-10-01', '2019-10-13 19:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ml`
--
ALTER TABLE `ml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `od`
--
ALTER TABLE `od`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordinary`
--
ALTER TABLE `ordinary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ml`
--
ALTER TABLE `ml`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `od`
--
ALTER TABLE `od`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ordinary`
--
ALTER TABLE `ordinary`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `od`
--
ALTER TABLE `od`
  ADD CONSTRAINT `od_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbladmin` (`ID`),
  ADD CONSTRAINT `od_ibfk_2` FOREIGN KEY (`id`) REFERENCES `tbladmin` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
