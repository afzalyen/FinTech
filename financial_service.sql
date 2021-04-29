-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 03:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial service`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`) VALUES
('111222333', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `User Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile Number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`User Id`, `Name`, `Email`, `Mobile Number`) VALUES
(111222333, 'Jhonny Depp', 'jhonnydepp123@gmail.com', '0162232356'),
(235424535, 'Robert jr.', 'ironman@gmail.com', '0196665353');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `Text` varchar(100) NOT NULL,
  `ammount` int(255) NOT NULL,
  `date` datetime NOT NULL,
  `month` varchar(30) NOT NULL,
  `Transaction num` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Sender` int(20) NOT NULL,
  `Reciever` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`Text`, `ammount`, `date`, `month`, `Transaction num`, `id`, `Sender`, `Reciever`) VALUES
('You have received 4000 Taka.', 5000, '2020-02-06 06:04:11', 'February', 2001, 111222333, 123456789, 111222333),
('You send 1000 Taka.', 1000, '2020-01-15 04:09:04', 'January', 2002, 111222333, 111222333, 333456123),
('You send 1500 Taka.', 1500, '2020-01-23 06:31:06', 'January', 2003, 111222333, 111222333, 1272562522),
('You have received 2000 Taka.', 2000, '2020-01-30 07:56:18', 'January', 2004, 111222333, 123456123, 111222333),
('You have received 1000 Taka.', 1000, '2020-02-02 02:49:38', 'February', 2005, 111222333, 12345678, 111222333),
('You send 3500 Taka.', 3000, '2020-02-05 06:01:25', 'February', 2006, 111222333, 111222333, 456789123),
('You have received 5000 Taka.', 5000, '2020-02-12 12:19:13', 'February', 2007, 111222333, 234234535, 111222333),
('You send 1550 Taka.', 1550, '2020-02-27 12:20:42', 'February', 2008, 111222333, 111222333, 234234234),
('You have received 2200 Taka.', 2200, '2020-03-04 12:22:59', 'March', 2009, 111222333, 123323421, 111222333),
('You have received 3450 Taka.', 3450, '2020-03-18 12:23:57', 'March', 2010, 111222333, 123333423, 111222333),
('You send 2100 Taka.', 2100, '2020-03-25 12:25:08', 'March', 2011, 111222333, 111222333, 342342324),
('You send 4500 Taka.', 4500, '2020-03-31 12:25:54', 'March', 2012, 111222333, 111222333, 342342342),
('You send 1200 Taka.', 1200, '2020-04-01 12:28:31', 'April', 2013, 111222333, 111222333, 123131231),
('You send 3160 Taka.', 3160, '2020-04-07 12:29:22', 'April', 2014, 111222333, 111222333, 234234342),
('You have received 6490 Taka.', 6490, '2020-04-23 12:30:35', 'April', 2015, 111222333, 213213312, 111222333),
('You have received 4220 Taka.', 4220, '2020-04-29 12:31:35', 'April', 2016, 111222333, 123131231, 111222333),
('You have received 4500 Taka.', 4500, '2020-05-02 12:37:29', 'May', 2017, 111222333, 123232131, 111222333),
('You send 500 Taka.', 500, '2020-05-07 12:38:26', 'May', 2018, 111222333, 111222333, 123131313),
('You send 2500 Taka.', 2500, '2020-05-13 12:39:38', 'May', 2019, 111222333, 111222333, 123131231),
('You send 2200 Taka.', 2200, '2020-06-02 12:40:33', 'June', 2020, 111222333, 111222333, 234221312),
('You send 1200 Taka.', 1200, '2020-06-24 12:42:07', 'June', 2021, 111222333, 111222333, 343131311),
('You have received 5000 Taka.', 5000, '2020-07-02 12:43:57', 'July', 2022, 111222333, 112321313, 111222333),
('You have received 2300 Taka.', 2300, '2020-07-08 12:44:46', 'July', 2023, 111222333, 123131233, 111222333),
('You have received 3400 Taka.', 3400, '2020-08-03 12:46:59', 'August', 2024, 111222333, 123131333, 111222333),
('You have received 2100 Taka.', 2100, '2020-08-11 12:47:57', 'August', 2025, 111222333, 131313133, 111222333),
('You send 2600 Taka.', 2600, '2020-08-19 12:48:41', 'August', 2026, 111222333, 111222333, 123123123),
('You have received 3300 Taka.', 3300, '2020-09-02 04:35:12', 'September', 2027, 111222333, 123242342, 111222333),
('You send 1100 Taka.', 1100, '2020-09-10 04:37:53', 'September', 2028, 111222333, 111222333, 234234234),
('You send 3000 Taka.', 3000, '2020-10-07 04:38:44', 'October', 2029, 111222333, 111222333, 234242344),
('You received 2250 Taka.', 2250, '2020-10-14 04:39:43', 'October', 2030, 111222333, 123243244, 111222333),
('You send 4500 Taka.', 4500, '2020-11-03 04:41:14', 'November', 2031, 111222333, 111222333, 342342344),
('You send 500 Taka.', 500, '2020-11-17 04:42:43', 'November', 2032, 111222333, 111222333, 234242344),
('You have received 5400 Taka.', 5400, '2020-12-02 04:43:53', 'December', 2033, 111222333, 24235435, 111222333),
('You send 1350 Taka.', 1350, '2020-12-16 04:44:39', 'December', 2034, 111222333, 111222333, 45325355),
('You send 2350 Taka.', 2350, '2020-12-23 04:45:35', 'December', 2035, 111222333, 111222333, 34234234),
('You have received 5500 Taka.', 5500, '2020-12-30 04:46:24', 'December', 2036, 111222333, 23424234, 111222333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`Transaction num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
