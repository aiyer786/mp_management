-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2021 at 03:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
(7, 'DYCS0007', 'CS', '', 'Ball', 'palladium', 'Stadium', 'palladium@stadium.com', 'dypatil@456', 988908899);

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
  `division` varchar(1) NOT NULL,
  `Leader` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`sr_no`, `g_id`, `s_id`, `division`, `Leader`) VALUES
(71, '1', 'DYCS0026', 'C', 1),
(86, '1', 'DYCS0027', 'C', 0),
(87, '1', 'DYCS0028', 'C', 0),
(88, '610401a532d29', 'DYCS0029', 'C', 1),
(89, '610401a532d29', 'DYCS0030', 'C', 0),
(90, '610401f4c15a8', 'DYCS0031', 'B', 1),
(91, '610401f4c15a8', 'DYCS0032', 'B', 0);

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
  `count` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`sr_no`, `m_id`, `dept`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`, `count`) VALUES
(1, 'DYET0007', 'IT', 'Kshitija', 'esrtghjfh', 'Bharambe', 'bharambekshitija2@gmail.com', 'dypatil@456', 23456765432, 0),
(2, 'DYET0007', 'IT', 'Kshitija', 'ars', 'Bharambe', 'bharambekshitija2@gmail.com', 'dypatil@456', 1234567890, 0),
(3, '124', 'Comps', 'Mohammad', 'Bashir', 'Khan', 'mohmadd@bashirkhan', 'dypatil@456', 1234567891, 0),
(4, '125', 'EXTC', 'Tughlaq', 'Rumani', 'Shah', 'rumani@hojaye', 'dypatil@456', 2342342345, 0),
(5, 'DYET0007', 'IT', 'Kshitija', 'fsdfa', 'Bharambe', 'bharambekshitija2@gmail.com', 'dypatil@456', 1234567897654, NULL),
(6, 'DY0006', 'CS', 'jnssnj', 'dxnwj', 'dwws', 'whns', 'dypatil@456', 0, NULL),
(7, 'DYET0007', 'ET', 'Kshitija', 'dqwfe', 'Bharambe', 'bharambekshitija2@gmail.com', 'dypatil@456', 23456789, NULL),
(8, 'DYCS0008', 'CS', 'ADITYA', 'SAMBASIVAN', 'IYER', 'aiyer786@gmail.com', 'dypatil@456', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `g_id` varchar(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `leader` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_suggestions`
--

CREATE TABLE `project_suggestions` (
  `sr_no` int(11) NOT NULL,
  `g_id` varchar(10) NOT NULL,
  `topic_id` varchar(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `approved` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_suggestions`
--

INSERT INTO `project_suggestions` (`sr_no`, `g_id`, `topic_id`, `topic`, `description`, `dept`, `approved`, `status`) VALUES
(2, '1', '2', 'Freelancing App:', 'A decentralized skill assessment and freelancing app that will let people assess their particular skills through a series of automated tests or problems.\r\n', 'CS', 0, 0),
(3, '1', '3', '\r\nReviews website\r\n', 'Dedicated to reviewing certain items or products. \r\nWe  can critique tech gadgets, movies, pet toys, or anything else that interests you. \r\nAlso how worthy is that product as per the price ie if its a worth to buy or not\r\nAlso real life review can be provided using images to check the quality and quantity of products.\r\n', 'CS', 0, 0),
(5, '1', '4', 'a gift planner', 'plan gifts for birthdays etc.', 'CS', 0, 0);

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
(26, 'DYCS0026', 'CS', '19CE7013', 'ADITYA', 'SAMBASIVAN', 'IYER', 'aiyer786@gmail.com', 'dypatil@123', 90882765456, 'TE', 'C', 'C1', 0),
(27, 'DYCS0027', 'CS', '19CE7014', 'Kshitija ', 'Shashank ', 'Bharambe', 'bharambekshitija@gmail.com', 'dypatil@123', 87876554321, 'TE', 'C', 'C1', 0),
(28, 'DYCS0028', 'CS', '19CE7015', 'Omkar', 'Datta', 'Ukirde', 'ukirdeomkar4@gmail.com', 'dypatil@123', 766578763457, 'TE', 'C', 'C1', 0),
(29, 'DYCS0029', 'CS', '19CE7016', 'Jay', 'Middlename', 'Doshi', 'middlename@gmail.com', 'dypatil@123', 12345676545677, 'TE', 'C', 'C1', 0),
(30, 'DYCS0030', 'CS', '19CE7017', 'Amol', 'Kamlakar', 'Palekar', 'chhotisi@baat', 'dypatil@123', 4567654334567, 'TE', 'C', 'C1', 0),
(31, 'DYCS0031', 'CS', '19CE8013', 'Akshay ', 'Khiladi', 'Kumar', 'khiladi786@kumar.com', 'dypatil@123', 786786786786, 'TE', 'B', 'b1', 0),
(32, 'DYCS0032', 'CS', '19CE8014', 'Shahrukh', 'Taj', 'Khan', 'badshah@bollywood.com', 'dypatil@123', 45678945623, 'TE', 'B', 'B3', 0),
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
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

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
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;