-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 02:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` tinyint(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `name`, `class`, `gender`, `dob`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Mizanur Rahman', 2, 'Male', '1998-12-30', 'Narayanganj', '01768139923', 'mizanur@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'K.A Rayhan', 3, 'Male', '1997-12-30', 'Mirpur', '01785469712', 'rayhan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Masum Hossain', 1, 'Male', '1998-05-30', 'Jatrabari', '01469875213', 'masum@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Ahad Rahman', 4, 'Male', '1998-12-30', 'Kakrail', '987 4562 1234', 'ahad@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'Jahin Anam', 5, 'Male', '1997-07-17', 'Narayanganj', '987 4562 1234', 'jahin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'David', 1, 'Male', '2023-09-03', 'England', '(123) 456 7890', 'da@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'Mehedi Hasan', 2, 'Male', '2023-09-01', 'Kakrail', '456 789 0000', 'shuvo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
