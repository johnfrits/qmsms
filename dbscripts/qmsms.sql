-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 12:28 PM
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
(33, 1, 2, 2, '2017-08-11 16:57:32'),
(34, 1, 2, 2, '2017-08-11 16:58:17'),
(35, 1, 2, 2, '2017-08-11 17:06:43'),
(37, 13, 2, 2, '2017-08-11 18:20:39'),
(38, 14, 2, 2, '2017-08-11 18:26:13'),
(39, 15, 2, 2, '2017-08-11 18:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `CountersID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`CountersID`, `Name`) VALUES
(1, 'Counter 1'),
(2, 'Counter 2');

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
(1, '09179545286'),
(2, '0'),
(3, '0'),
(4, '0'),
(5, '0'),
(6, '912321'),
(7, '09179545286'),
(8, '09179545286'),
(9, '09128559175'),
(10, '09179545286'),
(11, '09179545286'),
(12, '09179545286'),
(13, '09179545286'),
(14, '09179545286'),
(15, '09179545286'),
(16, '09179545286'),
(17, '09179545286'),
(18, '09128059018'),
(19, '09128059018'),
(20, '11111111111'),
(21, '11111111111'),
(22, '09179545286'),
(23, '09128059018'),
(24, '09179545286'),
(25, '09179545286'),
(26, '09179545286'),
(27, '88888888888'),
(28, '09179545286'),
(29, '09179545286'),
(30, '09179545286'),
(31, '09104095072'),
(32, '09179545286'),
(33, '09179545286'),
(34, '09179545286'),
(35, '09179545286');

-- --------------------------------------------------------

--
-- Table structure for table `queues`
--

CREATE TABLE `queues` (
  `QueueID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `TicketNumber` int(11) NOT NULL,
  `Called` bit(1) NOT NULL DEFAULT b'0',
  `CreatedDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queues`
--

INSERT INTO `queues` (`QueueID`, `ServiceID`, `CustomerID`, `TicketNumber`, `Called`, `CreatedDateTime`) VALUES
(13, 3, 1, 3006, b'1', '2017-08-07 00:20:42'),
(14, 3, 1, 3007, b'1', '2017-08-07 00:21:04'),
(15, 3, 1, 3008, b'0', '2017-08-07 01:36:58'),
(16, 3, 8, 3009, b'0', '2017-08-07 02:11:21'),
(26, 3, 18, 3010, b'0', '2017-08-08 03:19:09'),
(31, 3, 23, 3011, b'0', '2017-08-08 03:32:35'),
(32, 3, 24, 3012, b'0', '2017-08-08 03:37:34'),
(33, 3, 25, 3013, b'0', '2017-08-08 03:40:46'),
(34, 3, 26, 3014, b'0', '2017-08-08 03:43:30'),
(35, 3, 28, 3015, b'0', '2017-08-08 04:05:28'),
(38, 3, 31, 3016, b'0', '2017-08-08 18:02:42'),
(39, 3, 32, 3017, b'0', '2017-08-10 03:06:27'),
(41, 3, 34, 3018, b'0', '2017-08-10 18:53:01'),
(42, 1, 35, 1002, b'0', '2017-08-11 17:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DefaultNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `Name`, `DefaultNumber`) VALUES
(1, 'Finance', 1001),
(2, 'Management', 2000),
(3, 'Test', 3000);

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
(1, 'Frits', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'frats.frets.frits@gmail.com', 'Administrator', 1),
(2, 'Jade Sira Ulo', 'Jade', '33f5a7e8f4f310f9774894d807728e3c', 'jade@gmail.com', 'Staff', 2);

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
  MODIFY `CallID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `CountersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `queues`
--
ALTER TABLE `queues`
  MODIFY `QueueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
