-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 03:50 AM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Sex` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `uname`, `pass`, `Fname`, `Lname`, `Sex`) VALUES
(1001, 'Elon', 'Elon', 'Elon', 'Musk', 'M'),
(1002, 'Jeff', 'Jeff', 'Jeff', 'Bezos', 'M'),
(1003, 'Larry', 'Larry', 'Larry', 'Ellison', 'M'),
(1004, 'Steve', 'Steve', 'Steve', 'Jobs', 'M'),
(1005, 'Michael', 'Michael', 'Michael', 'Dell', 'M'),
(1006, 'Mark', 'Mark', 'Mark', 'Zuckerberg', 'M'),
(1007, 'Rupert', 'Rupert', 'Rupert', 'Murdoch', 'M'),
(1008, 'Jim', 'Jim', 'Jim', 'Walton', 'M'),
(1009, 'Warren', 'Warren', 'Warren', 'Buffett', 'M'),
(1010, 'Jack', 'Jack', 'Jack', 'Ma', 'M'),
(1011, 'Bill', 'Bill', 'Bill', 'Gates', 'M'),
(1012, 'Bernard', 'Bernard', 'Bernard', 'Arnault', 'M'),
(1013, 'Zhong', 'Zhong', 'Zhong', 'Shanshan', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1040;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
