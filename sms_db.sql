-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 01:54 PM
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
(1, 'Mizanur Rahman', 2, 'Male', '1998-12-30', 'Narayangaj', '01768139923', 'mizanur@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'K.A Rayhan', 3, 'Male', '1997-12-30', 'Mirpur', '01785469712', 'rayhan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Masum Hossain', 1, 'Male', '1998-05-30', 'Jatrabari', '01469875213', 'masum@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Ahad Rahman', 4, 'Male', '1998-12-30', 'Kakrail', '987 4562 1234', 'ahad@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'Jahin Anam', 5, 'Male', '1997-07-17', 'Narayanganj', '987 4562 1234', 'jahin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'David', 1, 'Male', '2023-09-03', 'England', '(123) 456 7890', 'da@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'Mehedi Hasan', 2, 'Male', '2023-09-01', 'Kakrail', '456 789 0000', 'shuvo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `gender`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Mark Willy', 'Male', 'Dhaka', '987 456 1234', 'mw@gmail.com', '40bd001563085fc35165'),
(2, 'Jessia Rose', 'Female', 'Barisal', '987 456 1234', 'jr@gmail.com', '40bd001563085fc35165'),
(3, 'Umme Mahjabeen', 'Female', 'Narayanganj', '987 456 1234', 'um@gmail.com', '40bd001563085fc35165'),
(4, 'Thomas', 'Male', 'Noakhali', '987 456 1234', 'th@gmail.com', '40bd001563085fc35165'),
(5, 'Daniel', 'Male', 'Comilla', '987 456 1234', 'da@gmail.com', '40bd001563085fc35165'),
(6, 'Martin', 'Male', 'Comilla', '987 456 1234', 'mr@gmail.com', '40bd001563085fc35165'),
(7, 'Emma', 'Female', 'Savar', '877 628 2133', 'em@gmail.com', '40bd001563085fc35165'),
(8, 'Sophia', 'Female', 'Sylhet', '456 789 0000', 'so@gmail.com', '40bd001563085fc35165'),
(9, 'James', 'Male', 'Rangpur', '456 789 0000', 'ja@gmail.com', '40bd001563085fc35165'),
(10, 'William', 'Male', 'Chitagong', '456 789 0000', 'wi@gmail.com', '40bd001563085fc35165'),
(11, 'Soha', 'Female', 'Sylhet', '456 789 0000', 'sh@gmail.com', '40bd001563085fc35165'),
(12, 'Sarah', 'Female', 'Dhaka', '456 789 0000', 'sr@gmail.com', '40bd001563085fc35165'),
(13, 'Mary', 'Female', 'Dhaka', '456 789 0000', 'ma@gmail.com', '40bd001563085fc35165'),
(14, 'David', 'Male', 'Chandpur', '654 789 6543', 'dd@gmail.com', '40bd001563085fc35165'),
(15, 'Amelia', 'Female', 'Bhola', '456 789 0000', 'am@gmail.com', '40bd001563085fc35165');

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
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
