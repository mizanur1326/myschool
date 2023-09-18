-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 10:19 AM
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
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_class` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`id`, `st_id`, `st_name`, `st_class`, `status`) VALUES
(1, 1, 'Mizanur Rahman', '2', ''),
(2, 2, 'K.A Rayhan', '3', ''),
(3, 3, 'Masum Hossain', '1', ''),
(4, 4, 'Ahad Rahman', '4', ''),
(5, 5, 'Jahin Anam', '5', ''),
(6, 6, 'David', '1', ''),
(7, 7, 'Mehedi Hasan', '2', ''),
(8, 8, 'Rana', '3', ''),
(9, 10, 'Ahad', '4', ''),
(10, 11, 'Ikbal', '5', ''),
(11, 12, 'Shuvo', '1', ''),
(12, 13, 'Sadid', '2', ''),
(13, 14, 'Mamun', '3', ''),
(14, 15, 'Masum', '4', ''),
(15, 16, 'Rayhan', '5', ''),
(16, 17, 'Nadia', '1', ''),
(17, 18, 'Alauddin', '2', ''),
(18, 19, 'Rojoni', '3', ''),
(19, 20, 'Kamrul', '4', ''),
(20, 21, 'Mahidul', '5', ''),
(21, 22, 'Imran', '1', ''),
(22, 23, 'Sakib', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
