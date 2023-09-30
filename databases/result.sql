-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 05:21 AM
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
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_class` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `marks` int(11) NOT NULL,
  `result` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `st_id`, `st_name`, `st_class`, `exam_name`, `marks`, `result`) VALUES
(1, 1, 'Mizanur Rahman', 2, 'Mid-Term', 85, 'Pass'),
(2, 2, 'K.A Rayhan', 3, 'Mid-Term', 74, 'Pass'),
(3, 3, 'Masum Hossain', 1, 'Mid-Term', 20, 'Pass'),
(4, 4, 'Ahad Rahman', 4, 'Mid-Term', 15, 'Fail'),
(5, 5, 'Jahin Anam', 5, 'Mid-Term', 90, 'Pass'),
(6, 6, 'David', 1, 'Mid-Term', 30, 'Fail'),
(7, 7, 'Mehedi Hasan', 2, 'Mid-Term', 30, 'Fail'),
(8, 10, 'Ahad', 4, 'Mid-Term', 85, 'Pass'),
(9, 11, 'Ikbal', 5, 'Mid-Term', 95, 'Pass'),
(10, 12, 'Shuvo', 1, 'Mid-Term', 75, 'Pass'),
(11, 13, 'Sadid', 2, 'Mid-Term', 65, 'Pass'),
(12, 14, 'Mamun', 3, 'Mid-Term', 85, 'Pass'),
(13, 15, 'Masum', 4, 'Mid-Term', 85, 'Pass'),
(14, 16, 'Rayhan', 5, 'Mid-Term', 85, 'Pass'),
(15, 17, 'Nadia', 1, 'Mid-Term', 85, 'Pass'),
(16, 18, 'Alauddin', 2, 'Mid-Term', 85, 'Pass'),
(17, 19, 'Rojoni', 3, 'Mid-Term', 85, 'Pass'),
(18, 20, 'Kamrul', 4, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
