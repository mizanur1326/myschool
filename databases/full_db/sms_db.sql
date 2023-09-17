-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 05:13 AM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'abc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(11) NOT NULL,
  `name` tinyint(4) NOT NULL,
  `c_teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `name`, `c_teacher`) VALUES
(1, 1, 'Mark Willy'),
(2, 2, 'Jessia Rose'),
(3, 3, 'Thomas'),
(4, 4, 'Daniel'),
(5, 5, 'Martin');

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
(7, 'Mehedi Hasan', 2, 'Male', '2023-09-01', 'Kakrail', '456 789 0000', 'shuvo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'Rana', 3, 'Male', '2023-09-14', 'Dhaka', '123456', 'aa@gmail.com', ''),
(10, 'Ahad', 4, 'Male', '2023-09-14', 'Dhaka', '123456', 'ab@gmail.com', ''),
(11, 'Ikbal', 5, 'Male', '2023-09-14', 'Dhaka', '123456', 'ac@gmail.com', ''),
(12, 'Shuvo', 1, 'Male', '2023-09-14', 'Dhaka', '123456', 'ad@gmail.com', ''),
(13, 'Sadid', 2, 'Male', '2023-09-14', 'Dhaka', '123456', 'ae@gmail.com', ''),
(14, 'Mamun', 3, 'Male', '2023-09-14', 'Dhaka', '123456', 'af@gmail.com', ''),
(15, 'Masum', 4, 'Male', '2023-09-14', 'Dhaka', '123456', 'ag@gmail.com', ''),
(16, 'Rayhan', 5, 'Male', '2023-09-14', 'Dhaka', '123456', 'ah@gmail.com', ''),
(17, 'Nadia', 1, 'Female', '2023-09-14', 'Dhaka', '123456', 'ai@gmail.com', ''),
(18, 'Alauddin', 2, 'Male', '2023-09-14', 'Dhaka', '123456', 'aj@gmail.com', ''),
(19, 'Rojoni', 3, 'Male', '2023-09-14', 'Dhaka', '123456', 'ak@gmail.com', ''),
(20, 'Kamrul', 4, 'Male', '2023-09-14', 'Dhaka', '123456', 'al@gmail.com', ''),
(21, 'Mahidul', 5, 'Male', '2023-09-14', 'Dhaka', '123456', 'am@gmail.com', ''),
(22, 'Imran', 1, 'Male', '2023-09-14', 'Dhaka', '123456', 'an@gmail.com', ''),
(23, 'Sakib', 1, 'Male', '2023-09-14', 'Dhaka', '123456', 'ao@gmail.com', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_class_view`
-- (See below for the actual view)
--
CREATE TABLE `student_class_view` (
`s_id` int(11)
,`student_name` varchar(50)
,`s_class` tinyint(4)
,`c_name` tinyint(4)
);

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

-- --------------------------------------------------------

--
-- Structure for view `student_class_view`
--
DROP TABLE IF EXISTS `student_class_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_class_view`  AS SELECT `students`.`s_id` AS `s_id`, `students`.`name` AS `student_name`, `students`.`class` AS `s_class`, `class`.`name` AS `c_name` FROM (`students` join `class`) WHERE `students`.`class` = `class`.`name``name`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_teacher` (`c_teacher`);

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
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
