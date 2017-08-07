-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 10:10 PM
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
  `CalledDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `CountersID` int(11) NOT NULL,
  `Name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(29, '09179545286');

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
(1, 1, 1, 1001, b'0', '2017-08-06 18:48:49'),
(4, 2, 1, 2002, b'0', '2017-08-06 23:27:33'),
(5, 2, 1, 2003, b'0', '2017-08-06 23:30:18'),
(7, 2, 1, 2004, b'0', '2017-08-06 23:31:22'),
(8, 3, 1, 3001, b'0', '2017-08-06 23:56:06'),
(9, 3, 1, 3002, b'0', '2017-08-06 23:56:46'),
(10, 3, 1, 3003, b'0', '2017-08-07 00:09:03'),
(11, 3, 1, 3004, b'0', '2017-08-07 00:10:07'),
(12, 3, 1, 3005, b'0', '2017-08-07 00:10:28'),
(13, 3, 1, 3006, b'0', '2017-08-07 00:20:42'),
(14, 3, 1, 3007, b'0', '2017-08-07 00:21:04'),
(15, 3, 1, 3008, b'0', '2017-08-07 01:36:58'),
(16, 3, 8, 3009, b'0', '2017-08-07 02:11:21'),
(17, 2, 9, 2005, b'0', '2017-08-08 00:41:21'),
(18, 1, 10, 1002, b'0', '2017-08-08 02:36:27'),
(19, 2, 11, 2006, b'0', '2017-08-08 02:36:43'),
(20, 2, 12, 2007, b'0', '2017-08-08 02:37:19'),
(21, 1, 13, 1003, b'0', '2017-08-08 02:54:56'),
(22, 1, 14, 1004, b'0', '2017-08-08 02:56:11'),
(23, 1, 15, 1005, b'0', '2017-08-08 02:58:20'),
(24, 1, 16, 1006, b'0', '2017-08-08 03:01:09'),
(25, 1, 17, 1007, b'0', '2017-08-08 03:18:31'),
(26, 3, 18, 3010, b'0', '2017-08-08 03:19:09'),
(27, 1, 19, 1008, b'0', '2017-08-08 03:21:35'),
(28, 1, 20, 1009, b'0', '2017-08-08 03:25:38'),
(29, 1, 21, 1010, b'0', '2017-08-08 03:28:42'),
(30, 1, 22, 1011, b'0', '2017-08-08 03:29:02'),
(31, 3, 23, 3011, b'0', '2017-08-08 03:32:35'),
(32, 3, 24, 3012, b'0', '2017-08-08 03:37:34'),
(33, 3, 25, 3013, b'0', '2017-08-08 03:40:46'),
(34, 3, 26, 3014, b'0', '2017-08-08 03:43:30'),
(35, 3, 28, 3015, b'0', '2017-08-08 04:05:28'),
(36, 1, 29, 1012, b'0', '2017-08-08 04:08:10');

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
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Username`, `Password`, `Email`, `Role`) VALUES
(1, 'Frits', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'frats.frets.frits@gmail.com', 'Administrator');

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
  MODIFY `CallID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `queues`
--
ALTER TABLE `queues`
  MODIFY `QueueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
