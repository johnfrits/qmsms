-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 04:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(44, '09179545286'),
(45, '09425677739'),
(46, '09179545286');

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
(48, 2, 44, 2001, 0, '2017-08-12 03:00:26'),
(49, 4, 45, 5001, 0, '2017-08-12 03:05:35'),
(50, 3, 46, 3001, 0, '2017-08-12 03:16:42');

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
(3, 'Test', 3000),
(4, 'Clinic', 5000);

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
  MODIFY `CallID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `CountersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `queues`
--
ALTER TABLE `queues`
  MODIFY `QueueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
