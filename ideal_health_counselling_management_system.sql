-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 10:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideal_health_counselling_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `counselling_report`
--

CREATE TABLE `counselling_report` (
  `id` int(60) NOT NULL,
  `patients_name` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `doctor_name` varchar(60) NOT NULL,
  `patients_ailment` varchar(60) NOT NULL,
  `doctors_remedy` varchar(60) NOT NULL,
  `doctor_id` varchar(60) NOT NULL,
  `patient_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `consulting_room` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `department`, `gender`, `mobile_number`, `consulting_room`, `user_id`) VALUES
(1, 'Dr.Sudipta', 'Cognitive', 'Male', '01987777724', 'DB609H', '35');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `salary` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `employee_office` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date_of_birth` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `marital_status` varchar(60) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `patients_category` varchar(60) NOT NULL,
  `patients_room` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `date_of_birth`, `age`, `address`, `marital_status`, `mobile_number`, `patients_category`, `patients_room`, `user_id`) VALUES
(1, 'abdul', '22-05-1995', '28', 'Chittagong', 'single', '01856743567', 'inpatient', 'DF5630A', ''),
(2, 'jamal', '22-05-1996', '27', 'Cumilla', 'single', '01987263334', 'Outpatient', 'DF5630C', ''),
(3, 'fahim', '25-06-1990', '33', 'Rangpur', 'single', '01856743500', 'inpatient', 'DH5630C', '');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(60) NOT NULL,
  `medicine_name` varchar(60) NOT NULL,
  `vendor` varchar(60) NOT NULL,
  `barcode` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `medicine_name`, `vendor`, `barcode`, `description`, `user_id`) VALUES
(1, 'Nexito 10', 'Square Pharmaceutical Limited', '2000987643', 'cures stress hormones problem, makes relief and mindfulness', ''),
(2, 'Sertraline', 'Beximco Pharmaceutical Limited', '2000987670', 'prevent from dizziness, phobia, and sickness problem', ''),
(3, 'Lamotrigine', 'Apex Pharmaceuticals Limited', '20001234987', 'reduces symptoms of mental health problem, works as antidepr', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(60) NOT NULL,
  `patients_name` varchar(60) NOT NULL,
  `patients_ailment` varchar(60) NOT NULL,
  `test_name` varchar(60) NOT NULL,
  `test_category` varchar(60) NOT NULL,
  `lab_test_date_conducted` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `patients_name`, `patients_ailment`, `test_name`, `test_category`, `lab_test_date_conducted`, `user_id`) VALUES
(1, 'abdul', 'Depression disorder', 'Dopamin test', 'Normal', '20-05-2023', ''),
(2, 'jamal', 'stress and anxiety disorder', 'Aptitude test', 'Medium', '15-05-2023', ''),
(3, 'fahim', 'Post-traumatic disorder', 'Dissiciative Experiences Scale', 'Horrible', '20-04-2023', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(19, 'test1@gmail.com', 'testPass1@', 'admin'),
(20, 'anik@gmail.com', '5678anik', 'admin'),
(21, 'alex45@gmail.com', '345retr', 'admin'),
(22, 'test2@gmail.com', '1234', 'admin'),
(23, 'test2@gmail.com', '1234', 'admin'),
(24, 'test2@gmail.com', '1234', 'admin'),
(25, 'test2@gmail.com', '1234', 'admin'),
(26, 'antik5@gmail.com', '1234', 'admin'),
(27, 'karim@gmail.com', '0987', 'admin'),
(28, 'mahi@gmail.com', '2345', 'admin'),
(29, 'mahi@gmail.com', '1234', 'admin'),
(30, 'mahi@gmail.com', '1234', 'admin'),
(31, 'uchaashbarua@gmail.com', '3456', 'admin'),
(32, 'test2@gmail.com', '1234', 'admin'),
(33, 'antik@gmail.com', '345', 'admin'),
(34, 'malik@gmail.com', '456', 'admin'),
(35, 'sudipto@gmail.com', '9876', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counselling_report`
--
ALTER TABLE `counselling_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counselling_report`
--
ALTER TABLE `counselling_report`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
