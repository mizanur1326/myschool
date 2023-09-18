-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 11:44 AM
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
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `subject`, `class`, `date`, `time`) VALUES
(1, 'Monthly Exam', 'English', 2, '2023-09-08', '11:30:00'),
(2, 'Yearly Exam', 'Bangla', 1, '2023-09-21', '10:30:00'),
(3, 'Tutorial Exam', 'GK', 1, '2023-09-08', '11:30:00'),
(4, 'Yearly Exam', 'Math', 1, '2023-09-21', '10:30:00'),
(5, 'Monthly Exam', 'Religion', 2, '2023-09-08', '11:30:00'),
(6, 'Yearly Exam', 'ICT', 2, '2023-09-21', '10:30:00'),
(7, 'Monthly Exam', 'General Science', 3, '2023-09-08', '11:30:00'),
(8, 'Yearly Exam', 'Social Science', 3, '2023-09-21', '10:30:00'),
(9, 'Monthly Exam', 'Math', 4, '2023-09-08', '11:30:00'),
(10, 'Yearly Exam', 'Drawing', 1, '2023-09-21', '10:30:00'),
(11, 'Monthly Exam', 'ICT', 5, '2023-09-08', '11:30:00'),
(12, 'Yearly Exam', 'General Science', 5, '2023-09-21', '10:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
