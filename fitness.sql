-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 06:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `coverPhoto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `coverPhoto`) VALUES
(1, 'Cardio', 'assets/img/cardio.jpg'),
(2, 'Chest', 'assets/img/chest.jpg'),
(3, 'Legs', 'assets/img/legs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipmentID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `equipmentName` varchar(150) NOT NULL,
  `equipmentPhoto` text NOT NULL,
  `equipmentCoverPhoto` varchar(350) NOT NULL,
  `equipmentCount` int(11) NOT NULL,
  `approxUseTime` int(11) NOT NULL,
  `waitCount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equipmentID`, `categoryID`, `equipmentName`, `equipmentPhoto`, `equipmentCoverPhoto`, `equipmentCount`, `approxUseTime`, `waitCount`) VALUES
(1, 1, 'Treadmill', '', 'assets/img/treadmill_1.jpg', 3, 15, 2),
(2, 2, 'Bench Press', '', '', 3, 15, 5),
(3, 1, 'Spin Bike', '', 'assets/img/spin_bike_3.jpg', 5, 10, 1),
(5, 1, 'Squat Station', '', 'assets/img/squat_station_cover.jpg', 1, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `userName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usetime`
--

CREATE TABLE `usetime` (
  `rowID` int(11) NOT NULL,
  `equipmentID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `timeOfUse` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equipmentID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `usetime`
--
ALTER TABLE `usetime`
  ADD PRIMARY KEY (`rowID`),
  ADD KEY `FK_equipmentID` (`equipmentID`),
  ADD KEY `FK_userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equipmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usetime`
--
ALTER TABLE `usetime`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `FK_categoryID` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);

--
-- Constraints for table `usetime`
--
ALTER TABLE `usetime`
  ADD CONSTRAINT `FK_equipmentID` FOREIGN KEY (`equipmentID`) REFERENCES `equipments` (`equipmentID`),
  ADD CONSTRAINT `FK_userName` FOREIGN KEY (`userName`) REFERENCES `profile` (`userName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
