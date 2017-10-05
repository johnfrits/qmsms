-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 08:26 PM
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
(191, 206, 5, 1, '2017-10-06 00:07:48'),
(192, 207, 5, 1, '2017-10-06 01:10:01'),
(193, 208, 6, 1, '2017-10-06 01:23:49'),
(194, 209, 6, 1, '2017-10-06 01:24:19'),
(195, 210, 6, 1, '2017-10-06 01:25:46'),
(196, 207, 5, 1, '2017-10-06 01:27:37'),
(197, 211, 6, 1, '2017-10-06 01:29:31'),
(198, 212, 6, 1, '2017-10-06 01:33:08'),
(199, 212, 6, 1, '2017-10-06 01:34:25'),
(200, 217, 5, 1, '2017-10-06 01:34:55'),
(201, 218, 5, 1, '2017-10-06 01:35:12'),
(202, 213, 6, 1, '2017-10-06 01:35:21'),
(203, 214, 6, 1, '2017-10-06 01:35:57'),
(204, 219, 5, 1, '2017-10-06 01:36:36'),
(205, 215, 6, 1, '2017-10-06 01:40:42'),
(206, 216, 6, 1, '2017-10-06 01:53:09'),
(207, 220, 5, 1, '2017-10-06 01:56:59'),
(208, 216, 6, 1, '2017-10-06 01:57:53'),
(209, 220, 5, 1, '2017-10-06 01:58:10'),
(210, 220, 5, 1, '2017-10-06 01:58:43'),
(211, 216, 6, 1, '2017-10-06 02:01:53'),
(212, 216, 6, 1, '2017-10-06 02:02:27'),
(213, 220, 5, 1, '2017-10-06 02:02:33'),
(214, 216, 6, 1, '2017-10-06 02:03:49'),
(215, 216, 6, 1, '2017-10-06 02:03:59'),
(216, 220, 5, 1, '2017-10-06 02:04:16'),
(217, 216, 6, 1, '2017-10-06 02:06:19'),
(218, 220, 5, 1, '2017-10-06 02:07:20'),
(219, 216, 6, 1, '2017-10-06 02:09:00'),
(220, 220, 5, 1, '2017-10-06 02:09:38'),
(221, 216, 6, 1, '2017-10-06 02:11:24'),
(222, 220, 5, 1, '2017-10-06 02:12:31'),
(223, 220, 5, 1, '2017-10-06 02:15:41'),
(224, 220, 5, 1, '2017-10-06 02:15:41'),
(225, 216, 6, 1, '2017-10-06 02:16:15'),
(226, 220, 5, 1, '2017-10-06 02:19:44'),
(227, 216, 6, 1, '2017-10-06 02:19:49'),
(228, 216, 6, 1, '2017-10-06 02:23:39'),
(229, 216, 6, 1, '2017-10-06 02:25:02'),
(230, 220, 5, 1, '2017-10-06 02:25:07'),
(231, 216, 6, 1, '2017-10-06 02:25:10'),
(232, 220, 5, 1, '2017-10-06 02:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `CountersID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `AssignedService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`CountersID`, `Name`, `AssignedService`) VALUES
(5, 'Counter 1', 10),
(6, 'Counter 2', 11);

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
(157, '09179545286'),
(158, '09179545286'),
(159, '09179545286'),
(160, '09179545286'),
(161, '09179545286'),
(162, 'printed'),
(163, 'printed'),
(164, 'printed'),
(165, 'printed'),
(166, 'printed'),
(167, 'printed'),
(168, '09179545286'),
(169, 'printed'),
(170, '09179545286'),
(171, 'printed'),
(172, '09179545286'),
(173, '09179545286'),
(174, '09179545286'),
(175, '09091795452'),
(176, '09179545286'),
(177, '09179545286'),
(178, 'printed'),
(179, '09179545286'),
(180, '09179545286'),
(181, '09179545286'),
(182, '09179545286'),
(183, '09179545286'),
(184, '09179545286'),
(185, '09179545286'),
(186, '09179545286'),
(187, '09179545286'),
(188, '09179545286'),
(189, '09179545286'),
(190, '09179545286'),
(191, '09179545286'),
(192, '09179545286'),
(193, '09179545286'),
(194, '09179545286'),
(195, '09179545286'),
(196, '09179545286'),
(197, '09179545286'),
(198, '09092148361'),
(199, 'printed'),
(200, 'printed'),
(201, 'printed'),
(202, '09179545286'),
(203, 'printed'),
(204, 'printed'),
(205, 'printed'),
(206, 'printed'),
(207, 'printed'),
(208, 'printed'),
(209, 'printed'),
(210, 'printed'),
(211, 'printed'),
(212, 'printed'),
(213, 'printed'),
(214, 'printed'),
(215, 'printed'),
(216, 'printed'),
(217, 'printed'),
(218, 'printed');

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
(1, 'Finance', '2017-10-04 13:37:12', 'Active'),
(2, 'Management', '2017-10-06 01:20:54', 'Active');

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
  `CreatedDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queues`
--

INSERT INTO `queues` (`QueueID`, `ServiceID`, `CustomerID`, `TicketNumber`, `Called`, `CreatedDateTime`) VALUES
(206, 10, 203, 1001, 1, '2017-10-06 00:07:15'),
(207, 10, 204, 1002, 1, '2017-10-06 00:07:19'),
(208, 11, 205, 2001, 1, '2017-10-06 01:23:31'),
(209, 11, 206, 2002, 1, '2017-10-06 01:23:35'),
(210, 11, 207, 2003, 1, '2017-10-06 01:23:38'),
(211, 11, 208, 2004, 1, '2017-10-06 01:29:23'),
(212, 11, 209, 2005, 1, '2017-10-06 01:29:28'),
(213, 11, 210, 2006, 1, '2017-10-06 01:34:10'),
(214, 11, 211, 2007, 1, '2017-10-06 01:34:14'),
(215, 11, 212, 2008, 1, '2017-10-06 01:34:17'),
(216, 11, 213, 2009, 1, '2017-10-06 01:34:21'),
(217, 10, 214, 1003, 1, '2017-10-06 01:34:43'),
(218, 10, 215, 1004, 1, '2017-10-06 01:34:48'),
(219, 10, 216, 1005, 1, '2017-10-06 01:36:13'),
(220, 10, 217, 1006, 1, '2017-10-06 01:36:18'),
(221, 10, 218, 1007, 0, '2017-10-06 02:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DefaultNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `departmentId`, `Name`, `DefaultNumber`) VALUES
(10, 1, 'PaYMeNt', 1000),
(11, 2, 'TrY', 2000);

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
  `AssignedCounterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Username`, `Password`, `Email`, `Role`, `AssignedCounterID`) VALUES
(1, 'Jade', 'admin', 'admin', 'jade@gmail.com', 'Administrator', 6);

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
  MODIFY `CallID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `CountersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `queues`
--
ALTER TABLE `queues`
  MODIFY `QueueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
