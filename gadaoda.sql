-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 06:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadaoda`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `fullname`, `email`, `username`, `password`, `phonenumber`, `type`) VALUES
(4, 'bereket', 'beki@gmail.com', 'beki', '3aa00f6bf44ef9dedba2bdaaefd029', 9101245, 'Customer'),
(6, 'bereket', 'beki@gmail.com', 'beki', '3aa00f6bf44ef9dedba2bdaaefd029', 9101245, 'Customer'),
(7, 'degsew', 'degsew@gmail.com', 'deg', 'b8c7912aa9e509bf62a4659b07907e', 2147483647, 'Customer'),
(11, 'admin', 'admin@geda.et', 'admin', '12345', 251478756, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `addbus`
--

CREATE TABLE `addbus` (
  `Id` int(10) NOT NULL,
  `busname` varchar(20) NOT NULL,
  `platenumber` varchar(20) NOT NULL,
  `sidenumber` varchar(20) NOT NULL,
  `numberofseat` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `owner` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbus`
--

INSERT INTO `addbus` (`Id`, `busname`, `platenumber`, `sidenumber`, `numberofseat`, `model`, `price`, `owner`) VALUES
(3, 'oda', 'oro123', '9958', 60, '2008', 50000, ''),
(4, 'somebusname', '44646', '4568', 21, '2020', 1000000, 'type'),
(5, 'aaaaaaaaa', '13467', '4568', 60, '2020', 1000000, 'Gada'),
(7, 'ad', '6545', '654', 50, '2021', 140000, 'Oda'),
(10, 'xx', '2146', '654789', 25, '2020', 2000000, 'Gada'),
(11, 'yyyy', '21546', '2354687', 60, '2019', 1000000, 'Oda'),
(13, 'oda', 'Ad12', '358', 38, '2020', 140000, 'Gada');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `commented_by` varchar(25) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id`, `commented_by`, `comment_date`, `comment`) VALUES
(1, 'Assefa', '0000-00-00 00:00:00', 'this gonna be the first comment'),
(2, 'Mr. x', '0000-00-00 00:00:00', 'this gonna be the comment from mr.x'),
(4, 'Mr. Y', '0000-00-00 00:00:00', 'Mr.Y\'s comment'),
(5, 'Mr. Y', '0000-00-00 00:00:00', 'Mr.Y\'s comment'),
(6, 'xx', '2020-10-19 21:14:32', 'this is the comment of xx');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `Id` int(2) NOT NULL,
  `departure_city` varchar(30) NOT NULL,
  `destination_city` varchar(30) NOT NULL,
  `distancein_km` int(5) NOT NULL,
  `distance_priece` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`Id`, `departure_city`, `destination_city`, `distancein_km`, `distance_priece`) VALUES
(1, 'Jimma', 'Addis Abeba', 353, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `addbus`
--
ALTER TABLE `addbus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `addbus`
--
ALTER TABLE `addbus`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
