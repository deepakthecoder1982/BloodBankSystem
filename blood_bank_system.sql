-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 04:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS blood_bank_system;

-- Use the created database
USE blood_bank_system;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequests`
--

CREATE TABLE `bloodrequests` (
  `request_id` int(11) NOT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `blood_group` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `request_date` date NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `sample_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodrequests`
--

INSERT INTO `bloodrequests` (`request_id`, `receiver_id`, `blood_group`, `status`, `request_date`, `hospital_id`, `sample_id`) VALUES
(25, 10, 'B+', 'requested', '2023-10-19', 13, 18),
(26, 10, 'B+', 'requested', '2023-10-19', 13, 18),
(27, 11, 'O-', 'requested', '2023-10-19', 14, 21),
(28, 11, 'A-', 'requested', '2023-10-19', 14, 20);

-- --------------------------------------------------------

--
-- Table structure for table `bloodsamples`
--

CREATE TABLE `bloodsamples` (
  `sample_id` int(11) NOT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `blood_group` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodsamples`
--

INSERT INTO `bloodsamples` (`sample_id`, `hospital_id`, `blood_group`, `quantity`) VALUES
(18, 13, 'B+', 2),
(19, 13, 'O+', 5),
(20, 14, 'A-', 2),
(21, 14, 'O-', 7);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `NAME`, `email`, `PASSWORD`) VALUES
(13, 'hospital', 'hospital@gmail.com', '$2y$10$7tR1bKXxp4voUeFvZMpgxubqFTr3hqAuzWRydx38036CdTHkuLiEC'),
(14, 'hospital12', 'hospital12@gmail.com', '$2y$10$eecdUwwLmEs91Hzy502/ZOTJuDefflC6Ss9SsNyOtAp1I2GQbUGDy');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `receiver_id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`receiver_id`, `NAME`, `email`, `PASSWORD`, `blood_group`) VALUES
(10, 'receiver', 'receiver@gmail.com', '$2y$10$BPmG/oxQNJsevTkLst./ieivqfmFmWutTYI.1iwx6Hm7qSgPIWBV.', 'B-'),
(11, 'receiver12', 'reciver12@gmail.com', '$2y$10$PjG0W.vinfsQSeDlnjo2HOuWw2TRVd5ro0prL6mT.X..d5rRgAPhe', 'O+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `bloodsamples`
--
ALTER TABLE `bloodsamples`
  ADD PRIMARY KEY (`sample_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`receiver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bloodsamples`
--
ALTER TABLE `bloodsamples`
  MODIFY `sample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `receiver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  ADD CONSTRAINT `bloodrequests_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `receivers` (`receiver_id`);

--
-- Constraints for table `bloodsamples`
--
ALTER TABLE `bloodsamples`
  ADD CONSTRAINT `bloodsamples_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`hospital_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
