-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 02:53 AM
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
-- Table structure for table `studcurr`
--

CREATE TABLE `studcurr` (
  `cd` varchar(4) NOT NULL,
  `sb` varchar(8) NOT NULL,
  `ds` varchar(50) NOT NULL,
  `un` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studcurr`
--

INSERT INTO `studcurr` (`cd`, `sb`, `ds`, `un`) VALUES
('2000', 'IT 211', 'Object-Oriented Programming', '3'),
('2001', 'IT 212', 'Human Computer Interaction', '3'),
('2002', 'IT 213', 'Application Dev and Emerging Tech', '3'),
('2003', 'IT 214', 'Information Management 2', '3'),
('2004', 'GE 8', 'Ethics', '3'),
('2005', 'GE 9', 'The Life and Works of Rizal', '3'),
('2006', 'Theo 2b', 'Mariology', '3'),
('2007', 'IT 215', 'System Analysis and Design', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studcurr`
--
ALTER TABLE `studcurr`
  ADD PRIMARY KEY (`cd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
