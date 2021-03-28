-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 06:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_v`
-- (See below for the actual view)
--
CREATE TABLE `chart_v` (
`date` date
,`systemMode` tinyint(1)
,`sessionID` varchar(40)
,`successfulTry` varchar(10)
,`AchievedTime` time(6)
,`childID` int(20)
,`taskID` int(20)
,`levelNum` int(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `childID` int(10) NOT NULL,
  `childUsername` varchar(20) NOT NULL,
  `CaregiverName` varchar(20) NOT NULL,
  `CaregiverEmail` varchar(40) NOT NULL,
  `ADHDT` varchar(25) NOT NULL,
  `gender` char(1) NOT NULL,
  `age` int(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `physicianID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`childID`, `childUsername`, `CaregiverName`, `CaregiverEmail`, `ADHDT`, `gender`, `age`, `pass`, `physicianID`) VALUES
(1, 'Mohammed', 'Ali', 'group9.gp@gmail.com', 'Combined', 'm', 9, '44e16ffdf19dd856cc468ad9c013af8c872a6086', 1),
(2, 'naif', 'ayman', 'ayman@gmail.com', 'Combined', 'm', 9, '07bddcea057d186cab68a4a7ee053442bf104599', 1),
(3, 'hasan', 'mohammed', 'mohammed@gmail.com', 'Combined', 'm', 9, 'cd8c6e21bceadeedc9d66c0683f0fd93ded33200', 1),
(4, 'sarah', 'bajabaa', '438202742@student.ksu.edu.sa', 'Hyperactive/Impulsive', 'f', 7, 'b99cd7fe8870ca6e9c2036fc979eee4a43802e73', 2),
(5, 'Raghad', 'abdulaziz', 'raghad.907@gmail.com', 'Combined', 'f', 9, '4223c6822654d6bdba5af294d3b98f443872c9ea', 2),
(6, 'ahmad', 'abdulaziz', 'raghad.907@gmail.com', 'Inattentive', 'm', 6, 'd9cfebe7ca27bd7b6a54fc64ca4675e855533777', 2),
(12, 'nehal', 'ali', 'fee.x27@gmail.com', 'Inattentive', 'f', 6, 'c67feb6a4a7d0feb40701e16ea41135748a935d1', 0),
(13, 'lulu', 'mohammed', 'fee.x27@gmail.com', 'Inattentive', 'f', 6, 'ced67036470ea587eae9649e0bff289d1687e9b1', 1),
(14, 'luluh', 'mohammed', 'fee.x27@gmail.com', 'Hyperactive/Impulsive', 'f', 6, '16155f3d1ba4e9d44087d523b87b98b192189277', 1),
(15, 'naifo', 'Ali', 'fee.x27@gmail.com', 'Inattentive', 'm', 6, '8a87472f63d3b3b80887bee22b74091958a9c06d', 1),
(16, 'popo', 'Atiah', 'fee.x27@gmail.com', 'Inattentive', 'm', 6, '648ce0d71fa23441480ffe1b738bb2681682f3d6', 1),
(17, 'nehalo', 'Ali', 'fee.x27@gmail.com', 'Inattentive', 'f', 7, 'aa8e56ec1fb357aa167fc66e18ca139796f819ab', 1),
(18, 'nasser', 'mohammed', 'ahmad@gmail.com', 'Inattentive', 'f', 9, 'f94d5cbed30a24b250a5e1a57935d64977473a27', 1),
(19, 'anas', 'ayman', 'ahmad@gmail.com', 'Inattentive', 'm', 8, '875cf2c9cca5a7884c5f91486b0ded7d86127027', 1),
(20, 'reem', 'ayman', 'fee.x27@gmail.com', 'Hyperactive/Impulsive', 'f', 6, '6cb7d298cb5fdeab1127ec29db93c25c37414e5f', 1),
(21, 'alhanoof', 'ali', 'fee.x27@gmail.com', 'Inattentive', 'f', 7, 'b675ad90c3c549843918a4555ae0700b7d7e7c36', 2),
(22, 'Ghala', 'Ali', 'fee.x27@gmail.com', 'Hyperactive/Impulsive', 'F', 6, 'dd004c2a7d15dc59cf9435da78d969b92e3263c8', 2),
(23, 'kala', 'Ali', 'fee.x27@gmail.com', 'Combined', 'F', 7, 'bef18772fa5a43085cbbc183e364690dfaa97424', 1),
(24, 'maram', 'Atiah', 'fee.x27@gmail.com', 'Inattentive', 'F', 6, '6ae025c7e985e6dd00252e995de11b85e3501ff6', 1),
(25, 'maramy', 'mohammed', 'ahmad@gmail.com', 'Inattentive', 'F', 6, '7006fd4f7e01e3ec3a172098dc034ce311d72123', 1),
(26, '', 'ali', 'ahmad@gmail.com', 'Combined', 'F', 6, '5dfa46b4c9cc20ef21bc0706e6cb903ba5ff3bb7', 1),
(28, 'waleed', 'ali', 'fee.x27@gmail.com', 'Inattentive', 'M', 6, '26fff602bfa67af49289c58be5677154a09a364e', 1),
(29, 'emad', 'Ali', 'fee.x27@gmail.com', 'Inattentive', 'M', 6, '0fca99067120d7755cbf1eb2ea647419965f5d07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `levelNum` int(10) NOT NULL,
  `numOfItems` int(10) NOT NULL,
  `numOfSuccessfulTries` int(10) NOT NULL,
  `triesNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`levelNum`, `numOfItems`, `numOfSuccessfulTries`, `triesNumber`) VALUES
(1, 2, 2, 7),
(2, 2, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `physician`
--

CREATE TABLE `physician` (
  `physicianID` int(10) NOT NULL,
  `phUsername` varchar(20) NOT NULL,
  `phPassword` varchar(40) NOT NULL,
  `phEmail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physician`
--

INSERT INTO `physician` (`physicianID`, `phUsername`, `phPassword`, `phEmail`) VALUES
(1, 'ahmad', 'c074e0cdada4da98245d51debad96f537c692511', 'ahmad@gmail.com'),
(2, 'dinal', 'bfdb239b07a3cd2a0fc090cb746c8349db6e865a', 'dinal@gmail.com'),
(3, 'SaraAliba', '8c63f70197d1b5b12cde655db7d0f194d721a9df', 'sara@gmail.com'),
(4, 'afnan', '2187a59ab537581bd5fc1db711d3257db97c50f5', 'afnan@gmail.com'),
(5, 'Amal', 'c074e0cdada4da98245d51debad96f537c692511', 'amal@gmail.com'),
(6, 'Amal', 'c074e0cdada4da98245d51debad96f537c692511', 'amal@gmail.com'),
(7, 'vin', '16a614a7e251715cfd14555944ecb210c64e6781', 'raghad.90700000'),
(9, 'suha', '8c63f70197d1b5b12cde655db7d0f194d721a9df', 'suha@gmail.com'),
(10, 'suha', '8c63f70197d1b5b12cde655db7d0f194d721a9df', 'suha@gmail.com'),
(11, 'sami', '8c63f70197d1b5b12cde655db7d0f194d721a9df', 'sami@gmail.com'),
(12, 'sami', '8c63f70197d1b5b12cde655db7d0f194d721a9df', 'sami@gmail.com'),
(13, 'omar', '9ab5cb07436e582eefa47aa0d2b59352e2a820f5', 'omar@gmail.com'),
(14, 'omar', '9ab5cb07436e582eefa47aa0d2b59352e2a820f5', 'omar@gmail.com'),
(19, 'afnano', 'c074e0cdada4da98245d51debad96f537c692511', 'afnan0@gmail.com'),
(20, 'Sarah', '8c63f70197d1b5b12cde655db7d0f194d721a9df', 'Sarah@gmail.com'),
(22, 'amai', 'c074e0cdada4da98245d51debad96f537c692511', 'amani@gmail.com'),
(24, 'zain', 'c074e0cdada4da98245d51debad96f537c692511', 'zain@student.ksu.edu');

-- --------------------------------------------------------

--
-- Table structure for table `questionnare`
--

CREATE TABLE `questionnare` (
  `QuestionnareID` int(10) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Is this evaluation based on atime when the child` varchar(20) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `q6` int(10) NOT NULL,
  `q7` int(10) NOT NULL,
  `q8` int(10) NOT NULL,
  `q9` int(10) NOT NULL,
  `q10` int(10) NOT NULL,
  `q11` int(10) NOT NULL,
  `q12` int(10) NOT NULL,
  `q13` int(10) NOT NULL,
  `q14` int(10) NOT NULL,
  `q15` int(10) NOT NULL,
  `q16` int(10) NOT NULL,
  `q17` int(10) NOT NULL,
  `q18` int(10) NOT NULL,
  `q19` int(10) NOT NULL,
  `q20` int(10) NOT NULL,
  `q21` int(10) NOT NULL,
  `q22` int(10) NOT NULL,
  `q23` int(10) NOT NULL,
  `q24` int(10) NOT NULL,
  `q25` int(10) NOT NULL,
  `q26` int(10) NOT NULL,
  `q27` int(10) NOT NULL,
  `q28` int(10) NOT NULL,
  `q29` int(10) NOT NULL,
  `q30` int(10) NOT NULL,
  `q31` int(10) NOT NULL,
  `q32` int(10) NOT NULL,
  `q33` int(10) NOT NULL,
  `q34` int(10) NOT NULL,
  `q35` int(10) NOT NULL,
  `q36` int(10) NOT NULL,
  `q37` int(10) NOT NULL,
  `q38` int(10) NOT NULL,
  `q39` int(10) NOT NULL,
  `q40` int(10) NOT NULL,
  `q41` int(10) NOT NULL,
  `q42` int(10) NOT NULL,
  `q43` int(10) NOT NULL,
  `q44` int(10) NOT NULL,
  `q45` int(10) NOT NULL,
  `q46` int(10) NOT NULL,
  `q47` int(10) NOT NULL,
  `q48` int(10) NOT NULL,
  `q49` int(10) NOT NULL,
  `q50` int(10) NOT NULL,
  `q51` int(10) NOT NULL,
  `q52` int(10) NOT NULL,
  `q53` int(10) NOT NULL,
  `q54` int(10) NOT NULL,
  `q55` int(10) NOT NULL,
  `filledThisWeek` varchar(10) NOT NULL,
  `childID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionnare`
--

INSERT INTO `questionnare` (`QuestionnareID`, `Date`, `Is this evaluation based on atime when the child`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `q41`, `q42`, `q43`, `q44`, `q45`, `q46`, `q47`, `q48`, `q49`, `q50`, `q51`, `q52`, `q53`, `q54`, `q55`, `filledThisWeek`, `childID`) VALUES
(1, '2021-03-19', 'not sure', 2, 3, 2, 2, 3, 3, 3, 3, 3, 3, 4, 4, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 5, 5, 'yes', 1),
(2, '2021-03-20', 'yes med.', 2, 2, 3, 3, 3, 2, 2, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 0, 'yes', 1),
(3, '2021-03-21', 'not sure', 2, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 0, 0, 'yes', 1),
(4, '2021-03-22', '0', 0, 0, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', 0),
(5, '2021-03-23', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', 0),
(6, '2021-03-24', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', 0),
(7, '2021-03-25', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', 0),
(8, '2021-03-26', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sessionID` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `startTime` time(6) NOT NULL,
  `endTime` time(6) NOT NULL,
  `systemMode` tinyint(1) NOT NULL,
  `childID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sessionID`, `date`, `startTime`, `endTime`, `systemMode`, `childID`) VALUES
('tun', '2021-03-03', '00:00:01.000000', '00:00:04.000000', 1, 1),
('xyz', '2021-03-08', '00:00:01.000000', '00:00:04.000000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskID` int(10) NOT NULL,
  `taskname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskID`, `taskname`) VALUES
(1, 'Card Matching Task'),
(2, 'Object Detecting Task'),
(3, 'Picture Sequenceing Task');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `tryNumber` int(1) NOT NULL,
  `timeForTry` time(6) NOT NULL,
  `AchievedTime` time(6) NOT NULL,
  `successfulTry` varchar(10) NOT NULL,
  `numOfCorrectPlacemnt` int(1) NOT NULL,
  `childID` int(20) NOT NULL,
  `sessionID` varchar(40) NOT NULL,
  `taskID` int(20) NOT NULL,
  `levelNum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`tryNumber`, `timeForTry`, `AchievedTime`, `successfulTry`, `numOfCorrectPlacemnt`, `childID`, `sessionID`, `taskID`, `levelNum`) VALUES
(1, '00:00:00.000000', '00:00:04.000000', 'yes', 0, 1, 'yu', 1, 1),
(2, '00:00:00.000000', '00:00:02.000000', 'no', 0, 1, 'tun', 2, 1),
(3, '00:00:00.000000', '00:00:03.000000', 'yes', 0, 1, 'tun', 2, 1),
(4, '00:00:00.000000', '00:00:04.000000', 'yes', 0, 1, 'xyz', 2, 1),
(6, '27:35:57.000000', '00:00:02.000000', 'yes', 1, 1, 'xyz', 2, 1),
(7, '27:35:57.000000', '00:04:52.000000', 'yes', 1, 1, 'tun', 2, 1),
(8, '00:41:52.000000', '00:03:52.000000', 'yes', 1, 1, 'tun', 2, 1);

-- --------------------------------------------------------

--
-- Structure for view `chart_v`
--
DROP TABLE IF EXISTS `chart_v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_v`  AS SELECT `s`.`date` AS `date`, `s`.`systemMode` AS `systemMode`, `s`.`sessionID` AS `sessionID`, `t`.`successfulTry` AS `successfulTry`, `t`.`AchievedTime` AS `AchievedTime`, `t`.`childID` AS `childID`, `t`.`taskID` AS `taskID`, `t`.`levelNum` AS `levelNum` FROM (`session` `s` join `try` `t`) WHERE `s`.`childID` = `t`.`childID` AND `t`.`sessionID` = `s`.`sessionID` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`childID`),
  ADD KEY `physicianID` (`physicianID`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`levelNum`);

--
-- Indexes for table `physician`
--
ALTER TABLE `physician`
  ADD PRIMARY KEY (`physicianID`);

--
-- Indexes for table `questionnare`
--
ALTER TABLE `questionnare`
  ADD PRIMARY KEY (`QuestionnareID`),
  ADD KEY `childID` (`childID`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sessionID`),
  ADD KEY `childID` (`childID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskID`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`tryNumber`),
  ADD KEY `childID` (`childID`),
  ADD KEY `levelNum` (`levelNum`),
  ADD KEY `taskID` (`taskID`),
  ADD KEY `sessionID` (`sessionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `childID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `levelNum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `physician`
--
ALTER TABLE `physician`
  MODIFY `physicianID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questionnare`
--
ALTER TABLE `questionnare`
  MODIFY `QuestionnareID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100002;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `tryNumber` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
