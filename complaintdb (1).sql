-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 11:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaintdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `gstn` varchar(15) NOT NULL,
  `accnt` int(16) NOT NULL,
  `ifsc` varchar(15) NOT NULL,
  `contact` int(12) NOT NULL,
  `amount` int(10) NOT NULL,
  `uab` int(12) NOT NULL,
  `date` date NOT NULL,
  `uniqid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`gstn`, `accnt`, `ifsc`, `contact`, `amount`, `uab`, `date`, `uniqid`) VALUES
('123456789123', 2147483647, 'sbin0015674', 2147483647, 20000, 2147483647, '0000-00-00', '18190687665c7b975e1f'),
('97987654651', 84513513, 'sbin001354', 2147483647, 560000, 2147483647, '2019-03-22', '17290635155c7b97bbcb'),
('165135169865', 198153165, 'sbi4915646', 651984987, 5639813, 46448, '2019-03-29', '18207534485c7bb8c09f'),
('659846515', 88779874, 'sbi986598', 2147483647, 500000, 4846516, '2019-03-23', '7901670445c7bb8da6e1'),
('1653136', 645613, 'sbi4651651', 2147483647, 30000, 846516512, '2019-03-29', '14387456595c7bb8eddc'),
('588203', 849765165, 'sbi5654', 853518, 845100, 8665441, '2019-03-28', '10769299245c7bb90245');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `anum` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cat` varchar(10) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`anum`, `name`, `cat`, `complaint`) VALUES
(0, '', 'a', ''),
(156489, 'nyam', 'b', 'hai'),
(123456789, 'masgn1', 'b', 'yes'),
(749856164, 'masgn', 'a', 'hai'),
(2147483647, 'masgn', 'a', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE `dues` (
  `id` int(10) NOT NULL,
  `anum` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dues`
--

INSERT INTO `dues` (`id`, `anum`, `amount`, `date`, `status`) VALUES
(1, 123456789, 4000, '2018-01-12', 1),
(2, 123456789, 50000, '2018-11-12', 0),
(3, 2147483647, 3000, '2018-10-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fileuploadtable`
--

CREATE TABLE `fileuploadtable` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileuploadtable`
--

INSERT INTO `fileuploadtable` (`username`, `password`) VALUES
('masgn', 'hack');

-- --------------------------------------------------------

--
-- Table structure for table `thirdparty`
--

CREATE TABLE `thirdparty` (
  `id` int(10) NOT NULL,
  `category` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thirdparty`
--

INSERT INTO `thirdparty` (`id`, `category`, `email`) VALUES
(1, 'b', 'manogna.vunnava2@gmail.com'),
(2, 'a', 'navyadeepthit4@gmail.com'),
(3, 'c', 'y.e.s.akhila@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`anum`);

--
-- Indexes for table `dues`
--
ALTER TABLE `dues`
  ADD KEY `id` (`id`),
  ADD KEY `anum` (`anum`);

--
-- Indexes for table `thirdparty`
--
ALTER TABLE `thirdparty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thirdparty`
--
ALTER TABLE `thirdparty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dues`
--
ALTER TABLE `dues`
  ADD CONSTRAINT `dues_ibfk_1` FOREIGN KEY (`id`) REFERENCES `thirdparty` (`id`),
  ADD CONSTRAINT `dues_ibfk_2` FOREIGN KEY (`anum`) REFERENCES `complaints` (`anum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
