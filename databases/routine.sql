-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 01:34 PM
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
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `te_id` int(11) NOT NULL,
  `te_name` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `subject_name`, `class`, `te_id`, `te_name`, `time`, `date`, `day`) VALUES
(1, 'Bangla', 1, 1, 'Mark Willy', '11:30:00', '2023-09-06', 'Sunday'),
(2, 'English', 1, 2, 'Jessia Rose', '12:00:00', '2023-09-14', 'Monday'),
(3, 'Bangla', 3, 3, 'Umme Mahjabeen', '11:30:00', '2023-09-06', 'Sunday'),
(4, 'English', 3, 4, 'Thomas', '12:00:00', '2023-09-14', 'Monday'),
(5, 'Religion', 4, 5, 'Daniel', '11:30:00', '2023-09-06', 'Sunday'),
(6, 'ICT', 4, 6, 'Martin', '12:00:00', '2023-09-14', 'Monday'),
(7, 'Bangla', 5, 7, 'Emma', '11:30:00', '2023-09-06', 'Sunday'),
(8, 'English', 5, 8, 'Sophia', '12:00:00', '2023-09-14', 'Monday'),
(9, 'English 2nd paper', 1, 9, 'James', '11:30:00', '2023-09-06', 'Sunday'),
(10, 'Drawing', 1, 10, 'William', '12:00:00', '2023-09-14', 'Monday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
