-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2021 at 12:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
  `sr_no` int(11) NOT NULL,
  `c_id` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `year` text NOT NULL,
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

INSERT INTO `coordinator` (`sr_no`, `c_id`, `dept`, `year`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`) VALUES
(7, 'DYCS0007', 'CS', '', 'M.S.', '', 'DHONI', 'palladium@stadium.com', 'dypatil@456', 988908899);

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
  `sr_no` int(11) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `Leader` tinyint(1) DEFAULT NULL,
  `dept` varchar(10) NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`sr_no`, `g_id`, `s_id`, `Leader`, `dept`, `division`) VALUES
(276, '615eaae9bd3b8', 'DYCS0031', 1, 'CS', 'B'),
(277, '615eaae9bd3b8', 'DYCS0032', 0, 'CS', 'B'),
(278, '615eabdcf0972', 'DYCS0029', 1, 'CS', 'C'),
(279, '615eabdcf0972', 'DYCS0030', 0, 'CS', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `sr_no` int(11) NOT NULL,
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

INSERT INTO `hod` (`sr_no`, `h_id`, `dept`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`) VALUES
(6, 'DYCS0006', 'CS', 'h', 'o', 'd', 'hod@hod.com', 'dypatil@456', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `sr_no` int(11) NOT NULL,
  `m_id` varchar(20) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`sr_no`, `m_id`, `dept`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`, `count`) VALUES
(3, '124', 'CS', 'Mohammad', 'Bashir', 'Khan', 'mohmadd@bashirkhan', 'dypatil@456', 1234567891, 0),
(4, '125', 'EXTC', 'Tughlaq', 'Rumani', 'Shah', 'rumani@hojaye', 'dypatil@456', 2342342345, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `g_id` varchar(20) NOT NULL,
  `topic_id` varchar(20) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `leader` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`g_id`, `topic_id`, `topic`, `leader`, `mentor`, `active`) VALUES
('615eabdcf0972', '615eac18377a0', 'topic 3', 'DYCS0029', '124', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_suggestions`
--

CREATE TABLE `project_suggestions` (
  `sr_no` int(11) NOT NULL,
  `g_id` varchar(20) NOT NULL,
  `topic_id` varchar(20) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `approved` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_suggestions`
--

INSERT INTO `project_suggestions` (`sr_no`, `g_id`, `topic_id`, `topic`, `description`, `approved`, `status`) VALUES
(57, '615eabdcf0972', '615eabf9c5174', 'topic 1', 'something related to topic 1', 2, 0),
(58, '615eabdcf0972', '615eac0a15a46', 'topic 2', 'something related to topic 2', 2, 0),
(59, '615eabdcf0972', '615eac18377a0', 'topic 3', 'something related to topic 3', 1, 1);

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
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sr_no`, `s_id`, `dept`, `roll_no`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`, `year`, `division`, `batch`, `active`) VALUES
(26, 'DYCS0026', 'CS', '19CE7013', 'ADITYA', 'SAMBASIVAN', 'IYER', 'aiyer786@gmail.com', 'dypatil@123', 90882765456, 'TE', 'C', 'C1', 0),
(27, 'DYCS0027', 'CS', '19CE7014', 'Kshitija ', 'Shashank ', 'Bharambe', 'bharambekshitija@gmail.com', 'dypatil@123', 87876554321, 'TE', 'C', 'C1', 0),
(28, 'DYCS0028', 'CS', '19CE7015', 'Omkar', 'Datta', 'Ukirde', 'ukirdeomkar4@gmail.com', 'dypatil@123', 766578763457, 'TE', 'C', 'C1', 0),
(29, 'DYCS0029', 'CS', '19CE7016', 'Jay', 'Middlename', 'Doshi', 'middlename@gmail.com', 'dypatil@123', 12345676545677, 'TE', 'C', 'C1', 1),
(30, 'DYCS0030', 'CS', '19CE7017', 'Amol', 'Kamlakar', 'Palekar', 'chhotisi@baat', 'dypatil@123', 4567654334567, 'TE', 'C', 'C1', 1),
(31, 'DYCS0031', 'CS', '19CE8013', 'Akshay ', 'Khiladi', 'Kumar', 'khiladi786@kumar.com', 'dypatil@123', 786786786786, 'TE', 'B', 'b1', 1),
(32, 'DYCS0032', 'CS', '19CE8014', 'Shahrukh', 'Taj', 'Khan', 'badshah@bollywood.com', 'dypatil@123', 45678945623, 'TE', 'B', 'B3', 1),
(33, 'DYCS0033', 'CS', '19CE8015', 'Irrfan', 'Yaseen Ali', 'Khan', 'greatest@actor.com', 'dypatil@123', 9082946276, 'TE', 'B', 'B3', 0),
(36, 'DYCS0036', 'CS', '19CE8017', 'Tom', 'Thomas', 'Cruise', 'knight@day', 'dypatil@123', 70070070, 'TE', 'B', 'B4', 0),
(39, 'DYCS0039', 'CS', '19ce1345', 'anna', 'Ken', 'Kendrik', 'anna@gmail.com', 'dypatil@123', 1234567890, 'TE', 'A', 'a1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `project_suggestions`
--
ALTER TABLE `project_suggestions`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_suggestions`
--
ALTER TABLE `project_suggestions`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
