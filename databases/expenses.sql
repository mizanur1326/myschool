-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:11 PM
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
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `te_id` int(11) NOT NULL,
  `te_name` varchar(100) NOT NULL,
  `expense_type` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `te_id`, `te_name`, `expense_type`, `amount`, `status`, `date`) VALUES
(1, 1, 'Mark Willy', 'salary', 15000, 'paid', '2023-09-20'),
(2, 2, 'Jessia Rose', 'salary', 15000, 'unpaid', '2023-09-22'),
(3, 3, 'Umme Mahjabeen', 'salary', 15000, 'unpaid', '2023-09-20'),
(4, 4, 'Thomas', 'salary', 15000, 'unpaid', '2023-09-22'),
(5, 5, 'Daniel', 'salary', 15000, 'paid', '2023-09-20'),
(6, 6, 'Martin', 'salary', 15000, 'paid', '2023-09-22'),
(7, 7, 'Emma', 'salary', 15000, 'paid', '2023-09-20'),
(8, 8, 'Sophia', 'salary', 15000, 'paid', '2023-09-22'),
(9, 9, 'James', 'salary', 15000, 'paid', '2023-09-20'),
(10, 10, 'William', 'salary', 15000, 'unpaid', '2023-09-22'),
(11, 11, 'Soha', 'salary', 15000, 'paid', '2023-09-20'),
(12, 12, 'Sarah', 'salary', 15000, 'unpaid', '2023-09-22'),
(13, 13, 'Mary', 'salary', 15000, 'paid', '2023-09-20'),
(14, 14, 'David', 'salary', 15000, 'paid', '2023-09-22'),
(15, 15, 'Amelia', 'salary', 15000, 'paid', '2023-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
