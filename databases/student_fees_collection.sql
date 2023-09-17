-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
-- Table structure for table `student_fees_collection`
--

CREATE TABLE `student_fees_collection` (
  `id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `class` int(11) NOT NULL,
  `expense_type` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fees_collection`
--

INSERT INTO `student_fees_collection` (`id`, `st_id`, `st_name`, `class`, `expense_type`, `amount`, `status`, `date`) VALUES
(1, 1, 'Mizanur Rahman', 2, 'exam fee', 1500, 'paid', '2023-09-08'),
(2, 2, 'K.A Rayhan', 3, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(3, 3, 'Masum Hossain', 1, 'exam fee', 1500, 'paid', '2023-09-08'),
(4, 4, 'Ahad Rahman', 4, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(5, 5, 'Jahin Anam', 5, 'exam fee', 1500, 'paid', '2023-09-08'),
(6, 6, 'David', 1, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(7, 7, 'Mehedi Hasan', 2, 'exam fee', 1500, 'paid', '2023-09-08'),
(8, 10, 'Ahad', 4, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(9, 11, 'Ikbal', 5, 'exam fee', 1500, 'paid', '2023-09-08'),
(10, 12, 'K.A Rayhan', 1, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(11, 13, 'Sadid', 2, 'exam fee', 1500, 'paid', '2023-09-08'),
(12, 14, 'Mamun', 3, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(13, 15, 'Masum', 4, 'exam fee', 1500, 'paid', '2023-09-08'),
(14, 16, 'K.A Rayhan', 5, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(15, 17, 'Nadia', 1, 'exam fee', 1500, 'paid', '2023-09-08'),
(16, 18, 'Alauddin', 2, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(17, 19, 'Rojoni', 3, 'exam fee', 1500, 'paid', '2023-09-08'),
(18, 20, 'Kamrul', 4, 'exam fee', 1500, 'unpaid', '2023-09-14'),
(19, 21, 'Mahidul', 5, 'exam fee', 1500, 'paid', '2023-09-08'),
(20, 22, 'Imran', 1, 'exam fee', 1500, 'unpaid', '2023-09-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_fees_collection`
--
ALTER TABLE `student_fees_collection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_fees_collection`
--
ALTER TABLE `student_fees_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
