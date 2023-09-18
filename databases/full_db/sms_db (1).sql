-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 07:39 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'abc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(11) NOT NULL,
  `name` tinyint(4) NOT NULL,
  `c_teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, 33, 'Hashem', 'Salary', 30000, 'paid', '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `posted_by` varchar(70) DEFAULT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `te_id` int(11) DEFAULT NULL,
  `te_name` varchar(50) NOT NULL,
  `time` time DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `subject_name`, `class`, `te_id`, `te_name`, `time`, `day`) VALUES
(1, 'Bangla', 1, 1, 'Mark Willy', '11:30:00', 'Sunday'),
(2, 'English', 1, 2, 'Jessia Rose', '12:00:00', 'Monday'),
(3, 'Bangla', 3, 3, 'Umme Mahjabeen', '11:30:00', 'Sunday'),
(4, 'English', 3, 4, 'Thomas', '12:00:00', 'Monday'),
(5, 'Religion', 4, 5, 'Daniel', '11:30:00', 'Sunday'),
(6, 'ICT', 4, 6, 'Martin', '12:00:00', 'Monday'),
(7, 'Bangla', 5, 7, 'Emma', '11:30:00', 'Sunday'),
(8, 'English', 5, 8, 'Sophia', '12:00:00', 'Monday'),
(9, 'English 2nd paper', 1, 9, 'James', '11:30:00', 'Sunday'),
(10, 'Drawing', 1, 10, 'William', '12:00:00', 'Monday'),
(11, 'General Knowledge', 3, 4, 'Thomas', '00:00:00', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(20, 'Kamrul', 4, 'Male', '2023-09-14', 'Dhaka', '123456', 'al@gmail.com', '');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `student_delete_trigger` AFTER DELETE ON `students` FOR EACH ROW DELETE FROM student_fees_collection WHERE st_id = OLD.s_id
$$
DELIMITER ;

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
(21, 33, 'TestyTreat', 1, 'Exam', 2000, 'paid', '2023-09-21');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 'David', 'Male', 'Chandpur', '654 789 6543', 'dd@gmail.com', '40bd001563085fc35165');

--
-- Triggers `teachers`
--
DELIMITER $$
CREATE TRIGGER `teacher_delete_after` AFTER DELETE ON `teachers` FOR EACH ROW DELETE FROM expenses WHERE te_id = OLD.t_id
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_teacher` (`c_teacher`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_fees_collection`
--
ALTER TABLE `student_fees_collection`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_fees_collection`
--
ALTER TABLE `student_fees_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
