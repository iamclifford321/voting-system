-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2009 at 05:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avs2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateId` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `facebookUrl` text,
  `age` int(2) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthDate` varchar(20) NOT NULL,
  `partyList` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `grade` varchar(15) DEFAULT NULL,
  `roomOrSection` varchar(20) DEFAULT NULL,
  `strand` varchar(100) DEFAULT NULL,
  `yearLevel` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `major` varchar(20) DEFAULT NULL,
  `userId` varchar(20) DEFAULT NULL,
  `electionId` varchar(11) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateId`, `firstName`, `lastName`, `middleName`, `facebookUrl`, `age`, `sex`, `birthDate`, `partyList`, `position`, `grade`, `roomOrSection`, `strand`, `yearLevel`, `course`, `major`, `userId`, `electionId`, `votes`) VALUES
(1, 'secretary', 'secretary', 'secretary', '', 56, 'Male', '01/26/2010', '1', '1', 'Grade 11', '3', 'Gas', '', '', '', '7', '4', 4),
(2, 'secretary', 'secretary', 'secretary', 'secretary', 4, 'Female', '01/19/2010', '1', '1', 'Grade 11', '3', 'Gas', '', '', '', '7', '4', 4),
(3, 'vice', 'vice', 'vice', 'vice', 7, 'Female', '01/29/2010', '2', '2', 'Grade 7', '3', '', '', '', '', '7', '4', 4),
(4, 'vice', 'vice', 'vice', 'vice', 8, 'Female', '01/29/2010', '1', '2', 'Grade 7', '3', '', '', '', '', '7', '4', 3),
(5, 'Clifford', 'Ursabia', 'Monterola', 'president', 7, 'Female', '01/29/2010', '2', '1', 'Grade 7', '3', '', '', '', '', '7', '4', 5),
(7, 'president', 'president', 'president', 'president', 7, 'Female', '01/29/2010', '1', '1', 'Grade 7', '3', '', '', '', '', '7', '4', 5),
(8, 'kj', 'kjjuh', 'jlkjlk', 'jjh', 9, 'Male', '01/27/2010', '2', '2', 'Grade 7', '3', '', '', '', '', '7', '4', 5),
(9, 'uhyiuyiuy', 'uu', 'iuyiu', 'jhiuh', 0, 'Male', '01/27/2010', '2', '1', 'Grade 7', '3', '', '', '', '', '7', '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(200) NOT NULL,
  `courseYear` year(4) NOT NULL,
  `electionId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `electionId` int(11) NOT NULL,
  `schoolName` text NOT NULL,
  `electionName` text NOT NULL,
  `electionFor` varchar(20) NOT NULL,
  `datAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`electionId`, `schoolName`, `electionName`, `electionFor`, `datAdded`, `status`, `theme`, `userId`) VALUES
(3, 'Clifford', 'Clifford Election (2009)', 'junior', '2010-01-01 09:18:40', 'In Progres', 'skin-yellow', 7),
(4, 'asd', 'asd Election (2010)', 'junior', '2010-01-01 09:21:28', 'In Progres', 'skin-red', 7),
(5, 'senior', 'senior Election (2010)', 'senior', '2010-01-01 11:31:24', 'In Progres', 'skin-green', 7);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `historyId` int(11) NOT NULL,
  `msg` text NOT NULL,
  `userId` varchar(21) NOT NULL,
  `electionId` varchar(21) NOT NULL,
  `dateHistory` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`historyId`, `msg`, `userId`, `electionId`, `dateHistory`) VALUES
(23, 'Election named asdzxc Election (2010) Created.', '7', '', '2010-01-01 09:18:40'),
(24, 'Election named asd Election (2010) Created.', '7', '', '2010-01-01 09:21:28'),
(25, 'New position called president added.', '7', '4', '2010-01-01 09:23:01'),
(26, 'New position called Vice added.', '7', '4', '2010-01-01 09:23:49'),
(27, 'New position called secretary added.', '7', '4', '2010-01-01 09:24:10'),
(28, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 09:26:45'),
(29, 'New partylist called ytuyt added.', '7', '4', '2010-01-01 09:51:54'),
(30, 'New Room / Section called dsa added.', '7', '4', '2010-01-01 09:52:11'),
(31, 'Candidate named secretary secretary secretary created.', '7', '4', '2010-01-01 09:52:13'),
(32, 'Candidate named secretary secretary secretary created.', '7', '4', '2010-01-01 09:52:38'),
(33, 'Candidate named vice vice vice created.', '7', '4', '2010-01-01 09:53:18'),
(34, 'Candidate named vice vice vice created.', '7', '4', '2010-01-01 09:53:39'),
(35, 'Candidate named president president president created.', '7', '4', '2010-01-01 09:54:09'),
(36, 'Candidate named president president president created.', '7', '4', '2010-01-01 09:54:25'),
(37, 'Candidate named president president president created.', '7', '4', '2010-01-01 09:56:07'),
(38, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 10:09:23'),
(39, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 11:16:15'),
(40, 'Election asdzxc Election (2010) details are updated.', '7', '4', '2010-01-01 11:30:08'),
(41, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 11:31:12'),
(42, 'Election named senior Election (2010) Created.', '7', '', '2010-01-01 11:31:24'),
(43, 'Election asd Election (2010) details are updated.', '7', '5', '2010-01-01 11:31:58'),
(44, 'Election asd Election (2010) details are updated.', '7', '5', '2010-01-01 11:32:41'),
(45, 'Election asdzxc Election (2010) details are updated.', '7', '5', '2010-01-01 11:32:51'),
(46, 'Election asdzxc Election (2010) details are updated.', '7', '4', '2010-01-01 11:33:34'),
(47, 'New user named Clifford Ursabia Created.', '7', '', '2010-01-01 11:34:18'),
(48, 'Standard User | Clifford Ursabia logged in on the system.', '8', '', '2010-01-01 11:34:45'),
(49, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 11:36:36'),
(50, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 11:37:55'),
(51, 'Standard User | Clifford Ursabia logged in on the system.', '8', '', '2010-01-01 11:38:28'),
(52, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 04:25:40'),
(53, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:48:26'),
(54, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:55:53'),
(55, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:55:53'),
(56, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:56:16'),
(57, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:56:16'),
(58, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:56:16'),
(59, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:56:28'),
(60, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:56:48'),
(61, 'Candidate Mary queen Sanguilla Balote details are  updated.', '7', '4', '2010-01-01 04:56:48'),
(62, 'Candidate Mary queen Sanguilla Balote DELETED SUCCESSFULLY.', '7', '4', '2010-01-01 04:57:02'),
(63, 'Candidate secretary secretary secretary details are  updated.', '7', '4', '2010-01-01 05:01:42'),
(64, 'Candidate secretary secretary secretary details are  updated.', '7', '4', '2010-01-01 05:01:55'),
(65, 'Candidate secretary secretary secretary details are  updated.', '7', '4', '2010-01-01 05:01:55'),
(66, 'Candidate vice vice vice details are  updated.', '7', '4', '2010-01-01 05:02:06'),
(67, 'New partylist called The Great World War starter added.', '7', '4', '2010-01-01 05:48:04'),
(68, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 05:48:09'),
(69, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 05:48:10'),
(70, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 06:02:40'),
(71, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 06:02:40'),
(72, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 06:02:41'),
(73, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 06:02:41'),
(74, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 06:02:41'),
(75, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 06:02:41'),
(76, 'Candidate president president president details are  updated.', '7', '4', '2010-01-01 06:03:35'),
(77, 'Election asdzxc Election (2010) details are updated.', '7', '4', '2010-01-01 06:04:37'),
(78, 'Election asdzxc Election (2010) details are updated.', '7', '4', '2010-01-01 06:04:42'),
(79, 'Election asd Election (2010) details are updated.', '7', '3', '2010-01-01 06:04:59'),
(80, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 06:06:59'),
(81, 'Candidate president president president details are  updated.', '7', '4', '2010-01-01 06:15:34'),
(82, 'Candidate president president president details are  updated.', '7', '4', '2010-01-01 06:15:45'),
(83, 'Candidate president president president details are  updated.', '7', '4', '2010-01-01 06:15:45'),
(84, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 14:32:08'),
(85, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 16:01:40'),
(86, 'Candidate vice vice vice details are  updated.', '7', '4', '2010-01-01 18:19:28'),
(87, 'Candidate named kj jlkjlk kjjuh created.', '7', '4', '2010-01-01 18:19:51'),
(88, 'Candidate named uhyiuyiuy iuyiu uu created.', '7', '4', '2010-01-01 20:07:21'),
(89, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 20:09:49'),
(90, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 20:09:49'),
(91, 'Candidate Clifford Monterola Ursabia details are  updated.', '7', '4', '2010-01-01 20:09:49'),
(92, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-10-01 12:35:26'),
(93, 'Standard User | Clifford Ursabia logged in on the system.', '8', '', '2010-10-01 15:20:21'),
(94, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-10-01 15:21:33'),
(95, 'System Admin | asdzxc asdzxc logged in on the system.', '7', '', '2010-01-01 00:14:01'),
(96, 'New position called Clifford added.', '7', '4', '2010-01-01 00:18:36'),
(97, 'Election Clifford Election (2009) details are updated.', '7', '4', '2010-01-01 00:19:53'),
(98, 'Standard User | Clifford Ursabia logged in on the system.', '8', '', '2010-01-01 00:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `majorId` int(11) NOT NULL,
  `majorName` varchar(200) NOT NULL,
  `majorYear` year(4) NOT NULL,
  `electionId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partylist`
--

CREATE TABLE `partylist` (
  `partyId` int(11) NOT NULL,
  `partyListName` varchar(255) NOT NULL,
  `partyListyear` year(4) NOT NULL,
  `electionId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partylist`
--

INSERT INTO `partylist` (`partyId`, `partyListName`, `partyListyear`, `electionId`) VALUES
(1, 'ytuyt', 2010, '4'),
(2, 'The Great World War starter', 2010, '4');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionId` int(11) NOT NULL,
  `positionName` varchar(150) NOT NULL,
  `type` varchar(10) NOT NULL,
  `min` int(3) NOT NULL,
  `max` int(3) NOT NULL,
  `WhoCan` varchar(15) NOT NULL,
  `positionYear` year(4) NOT NULL,
  `electionId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionId`, `positionName`, `type`, `min`, `max`, `WhoCan`, `positionYear`, `electionId`) VALUES
(1, 'president', 'multi', 3, 4, 'all', 2010, '4'),
(2, 'Vice', 'single', 0, 0, 'all', 2010, '4'),
(3, 'secretary', 'single', 0, 0, 'all', 2010, '4'),
(4, 'Clifford', 'multi', 4, 7, 'grade', 2009, '4');

-- --------------------------------------------------------

--
-- Table structure for table `roomorsection`
--

CREATE TABLE `roomorsection` (
  `roomOrSectionId` int(11) NOT NULL,
  `roomOrSectionName` varchar(200) NOT NULL,
  `roomOrSectionYear` year(4) NOT NULL,
  `electionId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomorsection`
--

INSERT INTO `roomorsection` (`roomOrSectionId`, `roomOrSectionName`, `roomOrSectionYear`, `electionId`) VALUES
(3, 'dsa', 2010, '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `course` varchar(10) DEFAULT NULL,
  `yearlevel` varchar(10) DEFAULT NULL,
  `major` varchar(10) DEFAULT NULL,
  `strand` varchar(100) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `roomorsection` varchar(10) DEFAULT NULL,
  `userName` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `electionId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `session_id` varchar(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `userAbove` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `electionId` varchar(15) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `session_id`, `firstName`, `lastName`, `username`, `email`, `type`, `userAbove`, `password`, `electionId`, `dateAdded`) VALUES
(7, '01-01-2010 - ODc4', 'asdzxc', 'asdzxc', 'asdzxc', 'asdzxc', 'System Admin', '', 'cffbad68bb97a6c3f943538f119c992c', '', '2010-01-01 09:18:19'),
(8, '01-01-2010 - NDI1', 'Clifford', 'Ursabia', 'asdzxc@gmail.com', 'asdzxc@gmail.com', 'Standard User', '7', 'NzI2', '3', '2010-01-01 11:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `yearlevel`
--

CREATE TABLE `yearlevel` (
  `yearLevelid` int(11) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `yearLevelyear` year(4) NOT NULL,
  `electionId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateId`),
  ADD KEY `partyList` (`partyList`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `election`
--
ALTER TABLE `election`
  ADD PRIMARY KEY (`electionId`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`historyId`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`majorId`);

--
-- Indexes for table `partylist`
--
ALTER TABLE `partylist`
  ADD PRIMARY KEY (`partyId`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `roomorsection`
--
ALTER TABLE `roomorsection`
  ADD PRIMARY KEY (`roomOrSectionId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `yearlevel`
--
ALTER TABLE `yearlevel`
  ADD PRIMARY KEY (`yearLevelid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `election`
--
ALTER TABLE `election`
  MODIFY `electionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `majorId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partylist`
--
ALTER TABLE `partylist`
  MODIFY `partyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomorsection`
--
ALTER TABLE `roomorsection`
  MODIFY `roomOrSectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `yearlevel`
--
ALTER TABLE `yearlevel`
  MODIFY `yearLevelid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
