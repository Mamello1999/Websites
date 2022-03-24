-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 07:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgi_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `st_id` int(4) NOT NULL,
  `std_balance` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`st_id`, `std_balance`, `attendance`, `due_date`) VALUES
(2000, 2500, 70, '2021-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `st_id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(25) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `cellnumber` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nationality` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`st_id`, `username`, `password`, `firstname`, `surname`, `email`, `qualification`, `cellnumber`, `gender`, `nationality`) VALUES
(2000, 'Mamello62', 'mamello', 'Mamello', 'Sekhu', 'ezekielsekhu@gmail.com', 'BSC.IT', 792931525, 'Male', 'South African');

-- --------------------------------------------------------

--
-- Table structure for table `student_res`
--

CREATE TABLE `student_res` (
  `st_id` int(4) NOT NULL,
  `Programming` int(11) NOT NULL,
  `InternetProgramming` int(11) NOT NULL,
  `CloudComputing` int(11) NOT NULL,
  `InformationSystems` int(11) NOT NULL,
  `BigData` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_res`
--

INSERT INTO `student_res` (`st_id`, `Programming`, `InternetProgramming`, `CloudComputing`, `InformationSystems`, `BigData`) VALUES
(2000, 80, 96, 87, 90, 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `st_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
