-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2025 at 05:28 PM
-- Server version: 11.4.8-MariaDB-cll-lve-log
-- PHP Version: 8.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tashsmzr_eagle`
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
(1, 'Why UK Security Workers Are Facing Their Biggest Challenge Yet', 'Ese Sphere', 'Art-emp705-68c180f802e9f-1CD59D27', 'SSvT43-Dud416-68c18062e5fa3-6D301C2E', 'If you work in security or are thinking about getting into the industry, you need to know what’s happening right now. The landscape is changing fast, and honestly, it’s both concerning and full of opportunity for UK security workers.\\r\\n\\r\\nThe Government Just Issued a Wake-Up Call\\r\\nLast week, the UK government published something that should grab everyone’s attention: the National Security Strategy 2025. And it’s not your typical policy document filled with bureaucratic language. This one comes with a stark warning that we need to “actively prepare for the possibility of the UK coming under direct threat, potentially in a wartime scenario”.\\r\\n\\r\\nLet that sink in for a moment. We’re not talking about distant threats anymore. The government is telling us to prepare for the possibility of conflict on home soil. This isn’t fear-mongering – it’s a reality check based on what security experts are seeing around the world.\\r\\n\\r\\nWhat does this mean for UK security workers? It means your role just became more critical than ever. The government is committing to spending 5% of GDP on national security by 2035 – that’s the highest level since 1945. This kind of investment doesn’t happen unless there’s serious recognition that security threats are real and growing.\\r\\n\\r\\nFor those looking to build a career in this expanding field, our security training programmes provide the foundation you need to succeed.\\r\\n\\r\\nRetail Workers Are Under Attack\\r\\nWhilst we’re dealing with national security concerns, there’s another crisis happening right in front of us. If you’ve worked retail security, you probably already know this, but the numbers are staggering. According to the latest government data, there were 737,000 incidents of violence and abuse against retail workers in just one year. That’s over 2,000 incidents every single day.\\r\\n\\r\\nThink about that – every day, more than 2,000 retail workers face violence or abuse. And it’s getting worse. The British Retail Consortium reports that violence and abuse incidents jumped from 475,000 to 737,000 in just one year. That’s a 55% increase.\\r\\n\\r\\nThe human cost is devastating. Recent surveys show that 77% of retail workers have been verbally abused in the past year, 53% received threats of violence, and 10% were physically assaulted. Over 80% of Co-op workers say they feel unsafe due to understaffing, with many forced to work alone despite the rising violence.\\r\\n\\r\\nThis isn’t just about statistics – it’s about real people going to work every day, wondering if they’ll be safe. And it’s creating a crisis in the industry, with many workers considering leaving because of the abuse they face.\\r\\n\\r\\nThe Cyber Threat Is Real Too\\r\\nIt’s not just physical security we need to worry about. Just last week, Glasgow City Council was hit by a cyberattack that’s still causing problems a week later. Major retailers like Co-op, Harrods, and Marks & Spencer have all suffered serious cyber breaches this year, compromising millions of customer records.\\r\\n\\r\\nThe Legal Aid Agency had to make temporary operational changes due to a cyber incident. We’re seeing a pattern here – cyber criminals are getting bolder and more sophisticated, and they’re targeting everything from local councils to major retailers.', 'uploads/1757511928_FINAL-GL-banners-1313-x-524px-1.jpg', '2025-09-10 13:45:28'),
(2, 'Can Security Guards Touch Your Bags in the UK?', 'Ese Sphere', 'Art-vBe167-68c18297e2e20-8FD1B3F4', 'SSvT43-Dud416-68c18062e5fa3-6D301C2E', 'Did you know there are over 140,700 security guards working in the UK as of 2024? Dozens of individuals undergo security guard training each year to enter the security industry, contributing to the safety, protection, and well-being of individuals across the country. However, many people are sceptical about the role of security guards and the legal power they hold. One question often asked is: Can security guards touch your bags in the UK? \\r\\n<br><br>\\r\\nIf you’re considering a career as a security guard in the UK, understanding your rights and responsibilities is crucial. In this blog, we’ll explore the legal boundaries of a security guard’s authority, helping you prepare for the role while respecting the rights of individuals.\\r\\n<br><br>\\r\\nWhat Are Security Guards Legally Allowed to Do?\\r\\nIn the UK, security guards operate under private law and do not have the same powers as police officers. However, they are authorised to perform certain duties within the boundaries of the law, including:\\r\\n<br><br>\\r\\nProtecting private property.\\r\\nPreventing theft and trespass.\\r\\nAssisting in maintaining order in public and private spaces.\\r\\nWhile these responsibilities are significant, security guards must adhere to strict legal guidelines to avoid infringing on individuals’ rights. \\r\\n<br><br>\\r\\nCan Security Guards Touch Your Bags?\\r\\nSo, are security guards allowed to touch–and search–a person’s bags? The simple answer is: no, security guards in the UK do not have the legal right to touch or search anybody’s bags without their consent. If you refuse to authorise a search, they cannot touch your property. \\r\\n<br><br>\\r\\nThis, of course, means that you may lose certain privileges. For instance, if you don’t consent to a security guard searching your bag when entering a private property where bag inspection is part of the entry policy, it’s likely that you will be denied entry. \\r\\n<br><br>\\r\\nThat said, there are certain situations in which security guards can check your bags without your consent. These include:\\r\\n<br><br>\\r\\nChecking unattended bags for potential bomb threats.\\r\\nChecking bags to find identification documents if you’re unconscious. \\r\\nChecking bags to find medication to assist you in a health crisis.\\r\\nRecommended read: What Security Guards Can and Can’t Do. \\r\\n<br><br>\\r\\nSo, what happens if a security guard suspects someone of stealing and wants to inspect their bag? In this case, they will ask the individual for a bag search. If the person refuses, the security guard can detain them on suspicion of concealing stolen items in their bag. However, they cannot legally perform a search and will wait for a police officer to arrive and conduct one.', 'uploads/1757512343_FINAL-GL-banners-1313-x-524px-7.jpg', '2025-09-10 13:52:23'),
(3, 'What You’ll Learn in a CCTV Security Course: Skills and Career Opportunities', 'Ese Sphere', 'Art-MEv750-68c182ff33586-FA628927', 'SSvT43-Dud416-68c18062e5fa3-6D301C2E', 'With over 5.2 million CCTV cameras operating across the nation—one for nearly every 13 people—security has never been more essential! It’s no surprise, then, that security is one of the fastest-growing sectors in the UK. If you’re looking to step into this dynamic and ever-evolving industry, a CCTV security course is your ticket to success. It allows you to become a licensed CCTV operator, a critical role in safeguarding public and private spaces.\\r\\n<br><br>\\r\\nWhether you’re just starting out or aiming to level up your skills, completing CCTV training unlocks exciting career opportunities and gives you the expertise to thrive in this high-demand field. Let’s dive in.\\r\\n<br><br>\\r\\nA Closer Look at CCTV Training Courses: What Do They Include?\\r\\nCCTV (closed-circuit television) plays a crucial role in protecting businesses, public spaces, and homes. In the UK, CCTV operators are in high demand, making it an excellent career choice. To work in this sector legally, you’ll need to complete a CCTV security course and obtain an SIA CCTV licence.\\r\\n<br><br>\\r\\nKey Skills You’ll Learn\\r\\nA CCTV training course equips you with the technical and interpersonal skills needed to monitor security systems effectively. Here’s a breakdown of what you’ll learn:\\r\\n<br><br>\\r\\n1. Operational Knowledge\\r\\n<br>\\r\\nUnderstanding the principles of CCTV systems.\\r\\nLearning how to operate cameras, monitors, and recording equipment.\\r\\nBecoming familiar with the software used for modern CCTV systems.\\r\\n<br><br>\\r\\n2. Legislation and Compliance\\r\\n<br>\\r\\nGaining in-depth knowledge of the Data Protection Act and GDPR compliance.\\r\\nUnderstanding privacy laws and your responsibilities as a CCTV operator.\\r\\n<br><br>\\r\\n3. Incident Management\\r\\n<br>\\r\\nHow to identify, record, and report suspicious activities.\\r\\nEffective communication with security teams and law enforcement.\\r\\n<br><br>\\r\\n4. Communication and Teamwork\\r\\n<br>\\r\\nBuilding strong verbal and written communication skills.\\r\\nCollaborating with other security professionals to ensure site safety.\\r\\nBenefits of Completing CCTV Training\\r\\nCompleting a CCTV course provides benefits that extend beyond technical expertise:\\r\\n<br><br>\\r\\nCompliance: A recognised qualification ensures you meet all regulatory requirements to work in the UK security industry.\\r\\nCareer Advancement: Opens doors to better roles within security companies, retail, or event management.\\r\\nPractical Skills: Provides real-world, hands-on training to prepare you for any scenario.\\r\\nNetworking: Many courses allow you to connect with industry experts.', 'uploads/1757512447_FINAL-GL-banners-1313-x-524px-3.jpg', '2025-09-10 13:54:07');

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
(1, 'Jagsir Singh Dhanoa ', 'jagsir.singh26@yahoo.com', '07915 034139', 'Security guard ', '1012 3511 7344 3922', 'uploads/1760791136_Screenshot_20250826_152252 (1).jpg', '2025-10-18 12:38:56');

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
(1, 'Ese Sphere', 'info@esesphere.com', '$2y$10$aaGSmS.9eXIeowjOH02NxuNf/TuyfpG9gBvgzvsAu/2AOkOg.dRZe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SSvT43-Dud416-68c18062e5fa3-6D301C2E', '2025-09-10 13:42:59'),
(2, 'Godsgift Oviawe', 'admin@eagleisecurity.co.uk', '$2y$10$nhG8n98LPjuq/nyaCY3TZ.2i9iE2ubmbU6o3SByZ6jZfQzwZ/UiSK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SSvT43-pEu285-6924d929763a6-F63F004A', '2025-11-24 22:16:09');

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cleaning_job_app`
--
ALTER TABLE `cleaning_job_app`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
