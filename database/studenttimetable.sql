-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 03:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenttimetable`
--

CREATE TABLE `studenttimetable` (
  `cd` varchar(4) NOT NULL,
  `sb` varchar(8) NOT NULL,
  `dy` varchar(9) NOT NULL,
  `st` varchar(10) NOT NULL,
  `et` varchar(10) NOT NULL,
  `rm` varchar(3) NOT NULL,
  `sc` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studenttimetable`
--

INSERT INTO `studenttimetable` (`cd`, `sb`, `dy`, `st`, `et`, `rm`, `sc`) VALUES
('3192', 'IT 211', 'Thu', '1:00pm', '2:30pm', '408', 'T'),
('3193', 'IT 212', 'Thu', '4:00pm', '5:30pm', '409', 'T'),
('3194', 'IT 213', 'Thu', '9:00am', '10:30am', '421', 'T'),
('3195', 'IT 214', 'Wed', '7:30am', '9:00am', 'ILL', 'T'),
('3196', 'GE 8', 'Fri', '10:30am', '12:00am', '321', 'T'),
('3197', 'GE 9', 'Thu', '2:30pm', '4:00pm', '321', 'T'),
('3198', 'Theo 2b', 'Fri', '9:00am', '10:30am', '422', 'T'),
('3703', 'IT 215', 'Wed', '1:00pm', '2:30pm', 'ILL', 'T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenttimetable`
--
ALTER TABLE `studenttimetable`
  ADD PRIMARY KEY (`cd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
