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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `published` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `subject`, `class`, `published`) VALUES
(1, 'English Basics', 'English', 1, 2019),
(2, 'Bangla Grammer', 'Bangla', 2, 2020),
(3, 'Islam Shikkha', 'Religion', 1, 2018),
(4, 'Knowledge World', 'General Knowledge', 3, 2020),
(5, 'General Math', 'Math', 3, 2019),
(6, 'General Science', 'Science', 4, 2020),
(7, 'English 2nd Paper', 'English', 4, 2019),
(8, 'Bangla 2nd paper', 'Bangla', 5, 2020),
(9, 'WordBook', 'English', 1, 2019),
(10, 'Drawing', 'Drawing', 1, 2020),
(11, 'Social Science', 'Science', 5, 2020),
(12, 'Information & Communication Technology', 'ICT', 5, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
