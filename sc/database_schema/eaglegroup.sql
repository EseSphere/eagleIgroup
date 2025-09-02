-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2025 at 05:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eaglegroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `userId` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `bloger` varchar(500) DEFAULT NULL,
  `xu874Iu` varchar(500) DEFAULT NULL,
  `specialId` varchar(500) DEFAULT NULL,
  `article` text NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`userId`, `title`, `bloger`, `xu874Iu`, `specialId`, `article`, `image_path`, `dateTime`) VALUES
(1, 'Excepturi temporibus', 'Master Man', 'Art-YnI915-6852a4cb7988a-0628ED9E', 'SSvT43-BJy820-68514bb8a3a02-C1CD2657', 'Adipisicing officia ', 'uploads/1750246603_wp9028432.webp', '2025-06-18 11:36:43'),
(2, 'Unde ea quia fugiat ', 'Master Man', 'Art-boA124-6852a59ba9bbe-5DE22680', 'SSvT43-BJy820-68514bb8a3a02-C1CD2657', 'Hope you\\\'re having a great day! Just wanted to check in and see how everything’s going. Let me know if you need anything or just want to chat. Take care! Hope you\\\'re having a great day! Just wanted to check in and see how everything’s going. Let me know if you need anything or just want to chat. Take care! ', 'uploads/secondblog.webp', '2025-06-18 15:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `cleaning_job_app`
--

CREATE TABLE `cleaning_job_app` (
  `userId` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `cv_file` varchar(255) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cleaning_job_app`
--

INSERT INTO `cleaning_job_app` (`userId`, `full_name`, `email`, `phone`, `position`, `cv_file`, `submitted_at`) VALUES
(1, 'Jordan Whitfield', 'gaxinuc@mailinator.com', '+1 (602) 621-2743', 'Lorem modi id recusa', 'uploads/1750258241_careplan.pdf', '2025-06-18 14:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `userId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`userId`, `name`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Clarke Herrera', 'pavelo@mailinator.com', 'Corporis et quasi vo', 'Architecto fuga Aut', '2025-06-18 13:06:33'),
(2, 'Kirestin Guerrero', 'fogohorylo@mailinator.com', 'Consequat Beatae nu', 'Esse animi recusan', '2025-06-18 13:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `userId` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `services` varchar(500) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`userId`, `name`, `email`, `phone`, `services`, `message`, `dateTime`) VALUES
(1, 'Maite Ballard', 'vyhided@mailinator.com', '+1 (106) 605-4411', 'Security', 'Enim quasi id qui do', '2025-06-18 12:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `security_job_app`
--

CREATE TABLE `security_job_app` (
  `userId` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `sia_number` varchar(100) NOT NULL,
  `cv_file` varchar(255) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security_job_app`
--

INSERT INTO `security_job_app` (`userId`, `full_name`, `email`, `phone`, `position`, `sia_number`, `cv_file`, `submitted_at`) VALUES
(1, 'Martina Terrell', 'daloc@mailinator.com', '+1 (118) 749-6964', 'Aliquam pariatur Do', '275', 'uploads/1750258093_Samson CV.pdf', '2025-06-18 14:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `col_fullname` varchar(500) DEFAULT NULL,
  `col_email` varchar(500) DEFAULT NULL,
  `col_password` varchar(500) DEFAULT NULL,
  `company_name` varchar(500) DEFAULT NULL,
  `company_domain` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `post_code` varchar(500) DEFAULT NULL,
  `specialId` varchar(500) DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `col_fullname`, `col_email`, `col_password`, `company_name`, `company_domain`, `address`, `country`, `state`, `city`, `post_code`, `specialId`, `dateTime`) VALUES
(1, 'Master Man', 'deman4master@gmail.com', '$2y$10$A0iin905WPr9v/Q/4D6as.Wfntdi4fDRaLiBascE8RzhCL7EKyVQG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SSvT43-BJy820-68514bb8a3a02-C1CD2657', '2025-06-17 11:04:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `cleaning_job_app`
--
ALTER TABLE `cleaning_job_app`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `security_job_app`
--
ALTER TABLE `security_job_app`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cleaning_job_app`
--
ALTER TABLE `cleaning_job_app`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `security_job_app`
--
ALTER TABLE `security_job_app`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
