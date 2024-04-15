-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Generation Time: Apr 05, 2024 at 10:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
CREATE DATABASE rems-2.O;
SELECT DATABASE rems-2.O;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rems-2.o`
--

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `g_userID` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `fund` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`g_userID`, `department`, `fund`) VALUES
(1, 'Department 1', 'Fund 1'),
(2, 'Department 2', 'Fund 2'),
(3, 'Department 3', 'Fund 3'),
(4, 'Department 4', 'Fund 4'),
(5, 'Department 5', 'Fund 5'),
(6, 'Department 6', 'Fund 6');

-- --------------------------------------------------------

--
-- Table structure for table `investor_col_project`
--

CREATE TABLE `investor_col_project` (
  `projectID` int(11) NOT NULL,
  `p_userID` int(11) NOT NULL,
  `bid_num` int(11) NOT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investor_col_project`
--

INSERT INTO `investor_col_project` (`projectID`, `p_userID`, `bid_num`, `amount`, `count`) VALUES
(1, 1, 1, '2000.00', 2),
(2, 2, 1, '3000.00', 3),
(3, 3, 1, '4000.00', 4),
(4, 4, 1, '5000.00', 5),
(5, 5, 1, '6000.00', 6),
(6, 6, 1, '7000.00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE `milestone` (
  `milestoneNum` int(11) NOT NULL,
  `tenure` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `budget` decimal(15,2) DEFAULT NULL,
  `budgetSpend` decimal(15,2) DEFAULT NULL,
  `numberOfMember` int(11) DEFAULT NULL,
  `projectID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milestone`
--

INSERT INTO `milestone` (`milestoneNum`, `tenure`, `startDate`, `endDate`, `budget`, `budgetSpend`, `numberOfMember`, `projectID`) VALUES
(1, 6, '2022-01-01', '2022-06-30', '5000.00', '2000.00', 3, 1),
(2, 8, '2022-03-01', '2022-10-31', '8000.00', '4000.00', 4, 2),
(3, 10, '2022-05-01', '2022-12-31', '10000.00', '6000.00', 5, 3),
(4, 12, '2022-07-01', '2023-06-30', '12000.00', '8000.00', 6, 4),
(5, 14, '2022-09-01', '2023-08-31', '15000.00', '10000.00', 7, 5),
(6, 16, '2022-11-01', '2023-10-31', '18000.00', '12000.00', 8, 6),
(7, 10, '2024-04-04', '2024-04-13', '5000.50', '1000.50', 10, 6),
(14, 49, '2024-04-05', '2024-05-24', '4000.00', NULL, 4, 17),
(15, 49, '2024-04-05', '2024-05-24', '4000.00', NULL, 4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `privateinvestor`
--

CREATE TABLE `privateinvestor` (
  `p_userID` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privateinvestor`
--

INSERT INTO `privateinvestor` (`p_userID`, `firstName`, `lastName`, `type`, `gender`, `location`) VALUES
(1, 'John', 'Doe', 'Type A', 'Male', 'Location X'),
(2, 'Jane', 'Smith', 'Type B', 'Female', 'Location Y'),
(3, 'Bob', 'Johnson', 'Type C', 'Male', 'Location Z'),
(4, 'Alice', 'Williams', 'Type D', 'Female', 'Location W'),
(5, 'Michael', 'Brown', 'Type E', 'Male', 'Location V'),
(6, 'Emily', 'Jones', 'Type F', 'Female', 'Location U'),
(14, 'Ana', 'De', 'Angel Investor', 'female', 'College Street'),
(16, 'Ema', 'Watson', 'Angel Investor', 'female', 'New York'),
(17, 'The', 'Rock', 'VC', 'male', 'rock street'),
(18, 'Gal', 'Gadot', 'PE Investor', 'female', 'gal street');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(11) NOT NULL,
  `projectName` varchar(100) NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `revenue` decimal(15,2) DEFAULT NULL,
  `projectManager` varchar(50) NOT NULL,
  `investmentReceived` decimal(15,2) DEFAULT NULL,
  `governmentFund` decimal(15,2) DEFAULT NULL,
  `g_userID` int(11) DEFAULT NULL,
  `s_userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `projectName`, `source`, `revenue`, `projectManager`, `investmentReceived`, `governmentFund`, `g_userID`, `s_userID`) VALUES
(1, 'Project1', 'Source 1', '10000.00', '1', '5000.00', '3000.00', 1, 1),
(2, 'Project2', 'Source 2', '15000.00', '2', '7000.00', '4000.00', 2, 2),
(3, 'Project3', 'Source 3', '20000.00', '3', '10000.00', '5000.00', 3, 3),
(4, 'Project4', 'Source 4', '25000.00', '4', '12000.00', '6000.00', 4, 4),
(5, 'Project5', 'Source 5', '30000.00', '5', '15000.00', '7000.00', 5, 5),
(6, 'Project6', 'Source 6', '35000.00', '6', '18000.00', '8000.00', 6, 6),
(9, 'solar city', NULL, NULL, '18', NULL, NULL, NULL, 19),
(16, 'barisal solar project', NULL, NULL, '18', NULL, NULL, NULL, 25),
(17, 'Chattogram wind project', NULL, NULL, '6', NULL, NULL, NULL, 6),
(18, 'Rangpur Solar projcet', NULL, NULL, '6', NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder`
--

CREATE TABLE `stakeholder` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `startDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stakeholder`
--

INSERT INTO `stakeholder` (`userID`, `email`, `phone`, `address`, `password`, `startDate`) VALUES
(1, 'user1@example.com', '1234567890', '123 Main St, City, Country', 'password123', '2022-01-01 00:00:00'),
(2, 'user2@example.com', '9876543210', '456 Elm St, City, Country', 'password456', '2022-02-15 00:00:00'),
(3, 'user3@example.com', '555444333', '789 Oak St, City, Country', 'password789', '2022-03-20 00:00:00'),
(4, 'user4@example.com', '1234567890', '123 Pine St, City, Country', 'password123', '2022-04-25 00:00:00'),
(5, 'user5@example.com', '9876543210', '456 Maple St, City, Country', 'password456', '2022-05-30 00:00:00'),
(6, 'user6@example.com', '555444333', '789 Cedar St, City, Country', 'pass6', '2022-06-10 00:00:00'),
(14, 'ana@gmail.com', '2424241414', 'College Street', 'anapass', '0000-00-00 00:00:00'),
(16, 'ema@gmail.com', '24242424', 'New York', 'emapass', '0000-00-00 00:00:00'),
(17, 'rock@gmail.com', '2424521', 'rock street', 'rockpass', '0000-00-00 00:00:00'),
(18, 'gal@gmail.com', '2421522', 'gal street', 'galpasss', '0000-00-00 00:00:00'),
(19, 'renewrocks@gmail.com', '2425252113', 'renew street', 'renew', '0000-00-00 00:00:00'),
(20, 'renewrocks@gmail.com', '2425252113', 'renew street', 'renew', '0000-00-00 00:00:00'),
(21, 'base@gmail.com', '14142452', 'base street', 'base', '0000-00-00 00:00:00'),
(22, 'solar@gmail.com', '2420741241', 'solar city street', 'solar', '0000-00-00 00:00:00'),
(23, 'wind@gmail.com', '97824728', 'wind street', 'wind', '0000-00-00 00:00:00'),
(24, 'wind@gmail.com', '97824728', 'wind street', 'wind', '0000-00-00 00:00:00'),
(25, 'nuclear@gamil.com', '42977131', 'nuclear street', 'nuclear', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `startup`
--

CREATE TABLE `startup` (
  `s_userID` int(11) NOT NULL,
  `startupName` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `startup`
--

INSERT INTO `startup` (`s_userID`, `startupName`, `location`) VALUES
(1, 'Startup 1', 'Location 1'),
(2, 'Startup 2', 'Location 2'),
(3, 'Startup 3', 'Location 3'),
(4, 'Startup 4', 'Location 4'),
(5, 'Startup 5', 'Location 5'),
(6, 'Startup 6', 'Location 6'),
(19, 'RenewRocks', 'renew street'),
(21, 'baseRenew', 'base street'),
(22, 'solarcity', 'solar city street'),
(23, 'windRenew', 'wind street'),
(25, 'nuclear.co', 'nuclear street');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskName` varchar(255) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `completionStatus` tinyint(1) DEFAULT NULL,
  `budget` decimal(15,2) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `totalExpenditure` decimal(15,2) DEFAULT NULL,
  `milestoneNum` int(11) DEFAULT NULL,
  `memberAssigned` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskName`, `duration`, `completionStatus`, `budget`, `startDate`, `endDate`, `totalExpenditure`, `milestoneNum`, `memberAssigned`) VALUES
('Task 1', 30, 1, '2000.00', '2022-01-01', '2022-01-30', '1000.00', 1, 1),
('Task 2', 60, 0, '3000.00', '2022-02-01', '2022-03-31', '2000.00', 2, 2),
('Task 3', 90, 0, '4000.00', '2022-04-01', '2022-06-30', '3000.00', 3, 3),
('Task 4', 120, 0, '5000.00', '2022-07-01', '2022-10-31', '4000.00', 4, 4),
('Task 5', 150, 0, '6000.00', '2022-09-01', '2023-01-31', '5000.00', 5, 5),
('Task 6', 10, 1, '7000.00', '2024-04-01', '2024-04-10', '6000.00', 6, 6),
('TASK 7', 100, 0, '5000.50', '2024-04-04', '2024-04-13', '1000.50', 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(11) NOT NULL,
  `teamSize` int(11) DEFAULT NULL,
  `teamLeader` varchar(50) DEFAULT NULL,
  `projectManager` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `teamSize`, `teamLeader`, `projectManager`) VALUES
(1, 5, 'Team Leader 1', 'Project Manager 1'),
(2, 6, 'Team Leader 2', 'Project Manager 2'),
(3, 7, 'Team Leader 3', 'Project Manager 3'),
(4, 8, 'Team Leader 4', 'Project Manager 4'),
(5, 9, 'Team Leader 5', 'Project Manager 5'),
(6, 10, 'Team Leader 6', 'Project Manager 6');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `teamID` int(11) NOT NULL,
  `member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`teamID`, `member`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`g_userID`);

--
-- Indexes for table `investor_col_project`
--
ALTER TABLE `investor_col_project`
  ADD PRIMARY KEY (`projectID`,`p_userID`,`bid_num`),
  ADD KEY `p_userID` (`p_userID`);

--
-- Indexes for table `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`milestoneNum`,`projectID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `privateinvestor`
--
ALTER TABLE `privateinvestor`
  ADD PRIMARY KEY (`p_userID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`,`projectManager`),
  ADD KEY `g_userID` (`g_userID`),
  ADD KEY `s_userID` (`s_userID`);

--
-- Indexes for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `startup`
--
ALTER TABLE `startup`
  ADD PRIMARY KEY (`s_userID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskName`),
  ADD KEY `milestoneNum` (`milestoneNum`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`teamID`,`member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `government`
--
ALTER TABLE `government`
  MODIFY `g_userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `milestone`
--
ALTER TABLE `milestone`
  MODIFY `milestoneNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stakeholder`
--
ALTER TABLE `stakeholder`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `government`
--
ALTER TABLE `government`
  ADD CONSTRAINT `government_ibfk_1` FOREIGN KEY (`g_userID`) REFERENCES `stakeholder` (`userID`);

--
-- Constraints for table `investor_col_project`
--
ALTER TABLE `investor_col_project`
  ADD CONSTRAINT `investor_col_project_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`),
  ADD CONSTRAINT `investor_col_project_ibfk_2` FOREIGN KEY (`p_userID`) REFERENCES `privateinvestor` (`p_userID`);

--
-- Constraints for table `milestone`
--
ALTER TABLE `milestone`
  ADD CONSTRAINT `milestone_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `privateinvestor`
--
ALTER TABLE `privateinvestor`
  ADD CONSTRAINT `privateinvestor_ibfk_1` FOREIGN KEY (`p_userID`) REFERENCES `stakeholder` (`userID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`g_userID`) REFERENCES `government` (`g_userID`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`s_userID`) REFERENCES `startup` (`s_userID`);

--
-- Constraints for table `startup`
--
ALTER TABLE `startup`
  ADD CONSTRAINT `startup_ibfk_1` FOREIGN KEY (`s_userID`) REFERENCES `stakeholder` (`userID`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`milestoneNum`) REFERENCES `milestone` (`milestoneNum`);

--
-- Constraints for table `team_member`
--
ALTER TABLE `team_member`
  ADD CONSTRAINT `team_member_ibfk_1` FOREIGN KEY (`teamID`) REFERENCES `team` (`teamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
