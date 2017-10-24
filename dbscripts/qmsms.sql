-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 01:41 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qmsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `CallID` int(11) NOT NULL,
  `QueueID` int(11) NOT NULL,
  `CountersID` int(11) NOT NULL,
  `UsersID` int(11) NOT NULL,
  `CalledDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`CallID`, `QueueID`, `CountersID`, `UsersID`, `CalledDateTime`) VALUES
(49, 90, 22, 1, '2017-10-24 13:24:06'),
(50, 91, 22, 1, '2017-10-24 18:52:50'),
(51, 92, 22, 1, '2017-10-24 18:53:21'),
(52, 93, 22, 1, '2017-10-24 19:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `CountersID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `AssignedService` int(11) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`CountersID`, `Name`, `AssignedService`, `status`) VALUES
(22, 'Counter 1', 30, 'Active'),
(23, 'Counter 2', 30, 'Active'),
(24, 'Counter 3', 30, 'Active'),
(25, 'Counter 4', 30, 'Active'),
(26, 'Counter 5', 30, 'Active'),
(27, 'Counter 6', 30, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `PhoneNumber`) VALUES
(44, 'printed'),
(45, 'printed'),
(46, 'printed'),
(47, 'printed'),
(48, 'printed'),
(49, 'printed'),
(50, 'printed'),
(51, 'printed'),
(52, 'printed'),
(53, 'printed'),
(54, 'printed'),
(55, 'printed'),
(56, 'printed'),
(57, 'printed'),
(58, 'printed'),
(59, 'printed'),
(60, 'printed'),
(61, 'printed'),
(62, 'printed'),
(63, 'printed'),
(64, 'printed'),
(65, 'printed'),
(66, 'printed'),
(67, 'printed'),
(68, 'printed'),
(69, 'printed'),
(70, 'printed'),
(71, 'printed'),
(72, 'printed'),
(73, 'printed'),
(74, 'printed'),
(75, 'printed'),
(76, '09179545286'),
(77, 'printed'),
(78, 'printed'),
(79, 'printed'),
(80, 'printed'),
(81, 'printed'),
(82, 'printed'),
(83, 'printed'),
(84, 'printed'),
(85, 'printed'),
(86, '09179545286'),
(87, '09179545286'),
(88, 'printed'),
(89, 'printed'),
(90, 'printed'),
(91, 'printed'),
(92, 'printed'),
(93, 'printed'),
(94, 'printed'),
(95, '09179545286'),
(96, 'printed'),
(97, 'printed');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentId`, `name`, `datecreated`, `status`) VALUES
(10, 'Finance', '2017-10-13 16:04:55', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `queues`
--

CREATE TABLE `queues` (
  `QueueID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `TicketNumber` int(11) NOT NULL,
  `Called` int(11) NOT NULL DEFAULT '0',
  `Missed` int(11) NOT NULL DEFAULT '0',
  `CreatedDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queues`
--

INSERT INTO `queues` (`QueueID`, `ServiceID`, `CustomerID`, `TicketNumber`, `Called`, `Missed`, `CreatedDateTime`) VALUES
(90, 30, 90, 1001, 1, 0, '2017-10-24 12:13:05'),
(91, 30, 91, 1002, 1, 0, '2017-10-24 12:13:10'),
(92, 30, 92, 1003, 1, 0, '2017-10-24 12:13:13'),
(93, 30, 93, 1004, 1, 0, '2017-10-24 12:13:27'),
(94, 30, 94, 1005, 0, 0, '2017-10-24 12:52:48'),
(95, 30, 95, 1006, 0, 0, '2017-10-24 12:57:07'),
(96, 30, 96, 1007, 0, 0, '2017-10-24 13:06:36'),
(97, 30, 97, 1008, 0, 0, '2017-10-24 13:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DefaultNumber` int(11) NOT NULL,
  `Prefix` varchar(3) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `departmentId`, `Name`, `DefaultNumber`, `Prefix`, `status`) VALUES
(30, 10, 'Payment', 1000, 'pay', 'Active'),
(31, 10, 'testsss', 2000, 'tse', 'Active'),
(32, 10, 'Tessttt', 3000, 'tes', 'Active'),
(33, 10, 'fasfdas', 4000, 'fin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` longtext NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `AssignedCounterID` int(11) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Active',
  `LoggedIn` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Username`, `Password`, `Email`, `Role`, `AssignedCounterID`, `status`, `LoggedIn`) VALUES
(1, 'Jade', 'admin', 'admin', 'jade@gmail.com', 'Administrator', 22, 'Active', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`CallID`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`CountersID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentId`);

--
-- Indexes for table `queues`
--
ALTER TABLE `queues`
  ADD PRIMARY KEY (`QueueID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `CallID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `CountersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `queues`
--
ALTER TABLE `queues`
  MODIFY `QueueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
