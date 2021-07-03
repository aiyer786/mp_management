-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `c_id` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`c_id`, `dept`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`) VALUES
('DYCOD1', 'Comps', 'Gopal', 'Shankardas', 'Makhija', 'makhija@naijaunga', 'dypatil@456', 1234554321),
('DYCOD5', 'IT', 'Rupali', 'Tribhivandas', 'Aye', 'Ayerupali@carry', 'dypatil@456', 5677655678);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `g_id` varchar(10) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `Leader` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `h_id` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`h_id`, `dept`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`) VALUES
('DYHOD1', 'EXTC', 'Tughlaq', 'Rumani', 'Shah', 'rumani@hojaye', 'dypatil@456', 4545454545454),
('DYHOD2', 'Comps', 'Mandir', 'Wahi', 'Banega', 'Jayram@jiki', 'dypatil@456', 7867867863);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `m_id` varchar(20) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `count` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`m_id`, `dept`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`, `count`) VALUES
('DY456', 'Comps', 'Mohammad', 'Bashir', 'Khan', 'mohmadd@bashirkhan', 'dypatil@456', 1234567891, 0),
('DY789', 'EXTC', 'Tughlaq', 'Rumani', 'Shah', 'rumani@hojaye', 'dypatil@456', 2342342345, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `g_id` varchar(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `leader` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_suggestions`
--

CREATE TABLE `project_suggestions` (
  `g_id` varchar(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sr_no` int(10) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `division` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sr_no`, `s_id`, `dept`, `roll_no`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`, `year`, `division`, `batch`, `active`) VALUES
(1, 'DY001', 'IT', '19CE7013', 'ADITYA', 'SAMBASIVAN', 'IYER', 'aiyer786@gmail.com', 'dypatil@123', 123456743223, 'TE', 'C', 'C1', 0),
(2, 'DY002', 'Comps', '19CE7015', 'Omkar', 'Datta', 'Ukirde', 'ukirdeomkar4@gmail.com', 'dypatil@123', 9892419197, 'TE', 'B', 'B3', 0),
(3, 'DY003', 'Comps', '19CE7014', 'Kshitija', 'Shashank', 'Bharambe', 'bharambekshitija@gmail.com', 'dypatil@123', 23334343433, 'TE', 'C', 'C1', 0),
(4, 'DY004', 'EXTC', '19CE7020', 'Nazar', 'Ke', 'Saamne', ' jigar@kepaas', 'dypatil@123', 143431143, 'TE', 'F', 'F3', 0),
(5, 'DY005', 'EXTC', '19CE7019', 'Fogg', 'chalraha', 'Hai', 'yehle@perfumelaga', 'dypatil@123', 56787654567876, 'BE', 'Z', 'Z5', 0),
(7, '', 'Comps', '19CE7013', 'suresh', 'bhagat', 'shastri', 'suresh@bhagat', 'dypatil@123', 5678765678, 'TE', '', 'C10', 0),
(13, 'DY000013', 'cs', '1234', 'BHARAMBE', 'KSHITIJA', 'SHASHANK', 'bharambekshitija2@gmail.com', 'dypatil@123', 123456789876, '3', '', 'c1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
