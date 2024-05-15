-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2023 at 08:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints_tlb`
--

DROP TABLE IF EXISTS `complaints_tlb`;
CREATE TABLE IF NOT EXISTS `complaints_tlb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `hospital` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `concern` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `remark` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compliments_tlb`
--

DROP TABLE IF EXISTS `compliments_tlb`;
CREATE TABLE IF NOT EXISTS `compliments_tlb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `hospital` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `remark` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dr_achievements`
--

DROP TABLE IF EXISTS `dr_achievements`;
CREATE TABLE IF NOT EXISTS `dr_achievements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `awards` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `drId` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drId` (`drId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_achievements`
--

INSERT INTO `dr_achievements` (`id`, `awards`, `drId`) VALUES
(1, 'Intermediate topper in Tehsil Level', 'D00001'),
(2, 'Top 1% in U.P. in Intermediate Examination (in 2020)', 'D00001'),
(3, 'Bharat Jyoti Award, 2006', 'D00005'),
(4, 'ACADIMA 2001, awarded in the field of Minimal Access Surgery', 'D00005'),
(5, 'Padma award', 'D77777'),
(6, 'School topper in board exam', 'D00003'),
(7, 'Best Anchoring Award in College', 'D00003');

-- --------------------------------------------------------

--
-- Table structure for table `dr_education`
--

DROP TABLE IF EXISTS `dr_education`;
CREATE TABLE IF NOT EXISTS `dr_education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `education` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `drId` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drId` (`drId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_education`
--

INSERT INTO `dr_education` (`id`, `education`, `drId`) VALUES
(1, 'Intermediate from Sardar Patel Inter College, Kaisarganj, Bahraich-271903', 'D00001'),
(2, 'Diploma In Computer Science & Engineering from Govt. Polytechnic Aadampur, Tarabganj, Gonda-271401', 'D00001'),
(3, 'FMAS', 'D00005'),
(4, 'FRCS (London)', 'D00005'),
(5, 'MBBS, MS (Jabalpur Medical College)', 'D00005'),
(6, 'AIIMS College', 'D77777'),
(7, 'High School from PSA Inter College Dhaneypur Gonda 271602', 'D00003'),
(8, 'MBBS from Cambridge University London', 'D00003');

-- --------------------------------------------------------

--
-- Table structure for table `dr_image`
--

DROP TABLE IF EXISTS `dr_image`;
CREATE TABLE IF NOT EXISTS `dr_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(355) COLLATE utf8mb4_general_ci NOT NULL,
  `drId` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drId` (`drId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_image`
--

INSERT INTO `dr_image` (`id`, `image`, `drId`) VALUES
(1, 'dp/171671259214386.jpg', 'D00001'),
(2, 'dp/011672603171arry jpg.jpg', 'D00003');

-- --------------------------------------------------------

--
-- Table structure for table `dr_memberships`
--

DROP TABLE IF EXISTS `dr_memberships`;
CREATE TABLE IF NOT EXISTS `dr_memberships` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `drId` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drId` (`drId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_memberships`
--

INSERT INTO `dr_memberships` (`id`, `member`, `drId`) VALUES
(1, 'Member of the SPI College, London, UK', 'D00001'),
(2, 'Member, International Society of Surgery (ISS)', 'D00005'),
(3, 'Member, Indian Society of Oncology (ISO)', 'D00005'),
(4, 'Events membership', 'D77777'),
(5, 'Member of Cambridge University London', 'D00003');

-- --------------------------------------------------------

--
-- Table structure for table `dr_speciality`
--

DROP TABLE IF EXISTS `dr_speciality`;
CREATE TABLE IF NOT EXISTS `dr_speciality` (
  `id` int NOT NULL AUTO_INCREMENT,
  `special` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `drId` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drId` (`drId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_speciality`
--

INSERT INTO `dr_speciality` (`id`, `special`, `drId`) VALUES
(1, 'Computer Science & Engineering', 'D00001'),
(2, 'Listening song', 'D00001'),
(3, 'Playing Badminton', 'D00001'),
(4, 'Thyroid & Parathyroid', 'D00005'),
(5, 'Endoscopic Surgery', 'D00005'),
(6, 'Surgeon', 'D77777'),
(7, 'Computer Science & Engineering', 'D00003'),
(8, 'Listening Song', 'D00003'),
(9, 'Playing Video Games', 'D00003');

-- --------------------------------------------------------

--
-- Table structure for table `dr_work`
--

DROP TABLE IF EXISTS `dr_work`;
CREATE TABLE IF NOT EXISTS `dr_work` (
  `id` int NOT NULL AUTO_INCREMENT,
  `work` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `drId` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drId` (`drId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_work`
--

INSERT INTO `dr_work` (`id`, `work`, `drId`) VALUES
(1, 'Director of PHP Super Specialty Hospital, Bahraich', 'D00001'),
(2, 'Head of Department of Public Healthcare Portal', 'D00001'),
(3, 'More than 45 years of surgical experience', 'D00005'),
(4, 'Completed nearly 85,000 surgical procedures during this period', 'D00005'),
(5, 'Devised a novel endoscopic approach for surgery in the neck.', 'D00005'),
(6, '2 year work experience', 'D77777'),
(7, 'Super specialist in Kidney Transplant & Diabetes', 'D00003'),
(8, '2 years in KGMU Lucknow as a surgen in Kidney Transplant', 'D00003');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_tlb`
--

DROP TABLE IF EXISTS `enquiry_tlb`;
CREATE TABLE IF NOT EXISTS `enquiry_tlb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enquiryType` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `hospital` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `callingTime` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `remark` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fregister`
--

DROP TABLE IF EXISTS `fregister`;
CREATE TABLE IF NOT EXISTS `fregister` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reg` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `desig` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`reg`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fregister`
--

INSERT INTO `fregister` (`id`, `reg`, `name`, `contact`, `email`, `desig`, `gender`, `pass`, `date`) VALUES
(1, 'D00001', 'Dr. Kanhaiya Gupta', '7081676773', 'kanhaiyaguptaksg@gmail.com', 'Cancer Care / Oncology, Thoracic Oncology, Surgical Oncology, Robotic Surgery', 'male', '92449b81d2b1f76a2a398aef37e3539e1a7f9d88', '2022-12-17'),
(2, 'D00002', 'Dr. Jyoti Sahu', '9918649005', 'jyotisahu123@gmail.com', 'Neurosciences, Neurosurgery, Spine Surgery', 'female', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-12-17'),
(3, 'D00003', 'Dr. Arif Ansari', '7081168219', 'mohdarifansari@gmail.com', 'Kidney Transplant, Nephrology, Endocrinology & Diabetes', 'male', 'f706420d7862c84e69c7ee22b20f744add555a8b', '2022-12-17'),
(5, 'D00004', 'Dr. Sukirti Singh', '7007156003', 'sukirtisingh123@gmail.com', 'Liver Transplant and Biliary Sciences, Robotic Surgery', 'female', 'f706420d7862c84e69c7ee22b20f744add555a8b', '2022-12-17'),
(6, 'D00005', 'Dr. Bharat Aggarwal', '9792316600', 'bharatgoel@gmail.com', 'Cardiac Sciences, Cardiology', 'male', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-12-17'),
(11, 'D00007', 'Tanu Singh', '9161650250', 'tanusingh@gmail.com', 'Department of neurology', 'female', '9eda8dc5de30b141f79c162e5d7b9f1eb459c0fa', '2023-01-01'),
(12, 'D00015', 'Dr. Tauheed Khan', '7678881486', 'tk767888@gmail.com', 'Cardiology, Heart Surgeon', 'male', 'f101c7a4d41a56d437f6cfccdd234ef8924b14f3', '2023-01-30'),
(7, 'D77777', 'Jugnu', '7777777777', 'jugnu@gmail.com', 'MBBS', 'male', 'fba9f1c9ae2a8afe7815c9cdd492512622a66302', '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `others_tlb`
--

DROP TABLE IF EXISTS `others_tlb`;
CREATE TABLE IF NOT EXISTS `others_tlb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enquiryType` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `hospital` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `remark` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptregister`
--

DROP TABLE IF EXISTS `ptregister`;
CREATE TABLE IF NOT EXISTS `ptregister` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `aadhar` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `dob` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `doctor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`aadhar`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ptregister`
--

INSERT INTO `ptregister` (`id`, `name`, `email`, `aadhar`, `contact`, `dob`, `password`, `gender`, `date`, `doctor`) VALUES
(7, 'sahjad', 'sahjad@gmail.com', '010101010101', '0101010101', '2000-04-06', 'f706420d7862c84e69c7ee22b20f744add555a8b', 'male', '2023-01-01', 'Dr. Arif Ansari'),
(10, 'Subham Sharma', 'subham@gmail.com', '123123123123', '0000000000', '2006-02-16', 'b7a96285fb5d026669c4829d9875a3e3d92a41f2', 'male', '2023-02-02', 'Dr. Arif Ansari'),
(12, 'Harshit', 'harsh@gmail.com', '123456781234', '9044386112', '2023-03-16', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'male', '2023-03-18', 'Dr. Arif Ansari'),
(9, 'Aryan Gupta', 'aryan639412@gmail.com', '745164654468', '6386291924', '2004-03-05', '03dcb34b45c0c97558c41582b322de85953d5262', 'male', '2023-01-20', 'Dr. Arif Ansari'),
(2, 'John Roy', 'johnroy12345@gmail.com', '755011260001', '7007156003', '2007-11-13', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'male', '2022-12-17', 'Dr. Kanhaiya Gupta'),
(3, 'Laxhmi', 'laxhmi@gmail.com', '755011260002', '9792316600', '2015-09-15', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'female', '2022-12-17', 'Dr. Bharat Aggarwal'),
(1, 'Kanhaiya', 'kanhaiyaguptaksg@gmail.com', '755011262701', '7081676773', '2002-03-04', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'male', '2022-12-17', 'Dr. Bharat Aggarwal'),
(4, 'Jugnu', 'jugnu@gmail.com', '777777777777', '7777777777', '2022-12-24', 'fba9f1c9ae2a8afe7815c9cdd492512622a66302', 'female', '2022-12-23', 'Dr. Bharat Aggarwal'),
(11, 'Harsh', 'harsh@gmail.com', '789812345678', '9044386112', '2010-03-09', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'male', '2023-03-18', 'Dr. Kanhaiya Gupta'),
(5, 'Vartika', 'vartika@gmail.com', '991567452316', '9918926563', '2018-07-09', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', 'female', '2022-12-31', 'Dr. Jyoti Sahu'),
(8, 'Savy', 'tanusingh@gmail.com', '991814001734', '9161250000', '2014-01-28', '482118394b38b5b7e39fc07e59151694d1a2460e', 'female', '2023-01-02', 'Dr. Sukirti Singh'),
(6, 'Aditi', 'aditi@gmail.com', '991984129010', '9919840000', '2015-01-28', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', 'female', '2023-01-01', 'Dr. Sukirti Singh');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dr_achievements`
--
ALTER TABLE `dr_achievements`
  ADD CONSTRAINT `dr_achievements_ibfk_1` FOREIGN KEY (`drId`) REFERENCES `fregister` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dr_education`
--
ALTER TABLE `dr_education`
  ADD CONSTRAINT `dr_education_ibfk_1` FOREIGN KEY (`drId`) REFERENCES `fregister` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dr_image`
--
ALTER TABLE `dr_image`
  ADD CONSTRAINT `dr_image_ibfk_1` FOREIGN KEY (`drId`) REFERENCES `fregister` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dr_memberships`
--
ALTER TABLE `dr_memberships`
  ADD CONSTRAINT `dr_memberships_ibfk_1` FOREIGN KEY (`drId`) REFERENCES `fregister` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dr_speciality`
--
ALTER TABLE `dr_speciality`
  ADD CONSTRAINT `dr_speciality_ibfk_1` FOREIGN KEY (`drId`) REFERENCES `fregister` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dr_work`
--
ALTER TABLE `dr_work`
  ADD CONSTRAINT `dr_work_ibfk_1` FOREIGN KEY (`drId`) REFERENCES `fregister` (`reg`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
