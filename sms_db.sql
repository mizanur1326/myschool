-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 01:25 PM
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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `class` tinyint(4) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `gender`, `class`, `subject`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Mark Willy', 'Male', 1, 'Bangla', 'Rajbari', '456 789 0000', 'mw@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(2, 'Mark Willy', 'Male', 2, 'English', 'Rajbari', '456 789 1234', 'mw@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(3, 'Mark Willy', 'Male', 3, 'Math', 'Rajbari', '456 789 1234', 'mw@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(4, 'Mark Willy', 'Male', 4, 'Science', 'Rajbari', '456 789 1234', 'mw@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(5, 'Mark Willy', 'Male', 5, 'GK', 'Rajbari', '456 789 1234', 'mw@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(6, 'Jessia Rose', 'Female', 1, 'GK', 'Barisal', '456 789 1234', 'jr@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(7, 'Jessia Rose', 'Female', 2, 'Science', 'Barisal', '456 789 1234', 'jr@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(8, 'Jessia Rose', 'Female', 3, 'English', 'Barisal', '456 789 1234', 'jr@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(9, 'Jessia Rose', 'Female', 4, 'Math', 'Barisal', '456 789 1234', 'jr@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(10, 'Jessia Rose', 'Female', 5, 'Bangla', 'Barisal', '456 789 1234', 'jr@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(11, 'Aristotle', 'Male', 1, 'Science', 'Noakhali', '456 789 1234', 'ar@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(12, 'Aristotle', 'Male', 2, 'GK', 'Noakhali', '456 789 1234', 'ar@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(13, 'Aristotle', 'Male', 3, 'Bangla', 'Noakhali', '456 789 1234', 'ar@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(14, 'Aristotle', 'Male', 4, 'English', 'Noakhali', '456 789 1234', 'ar@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(15, 'Aristotle', 'Male', 5, 'Math', 'Noakhali', '456 789 1234', 'ar@gmail.com', '40bd001563085fc35165329ea1ff5c'),
(16, 'Rayhan', 'Male', 2, 'GK', 'Mirpur', '001 568 9874', 'rayhan@gmail.com', ''),
(17, 'Mizanur Rahman', 'Male', 4, 'English', 'Narayanganj', '01768139923', 'mizanur@gmail.com', ''),
(18, 'Masum Hossain', 'Male', 3, 'Bangla', 'Jatrabari', '987 4562 1234', 'masum@gmail.com', ''),
(19, 'Mehedi Hasan', 'Male', 3, 'Math', 'Kakrail', '654 9874 1235', 'shuvo@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
