-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 11:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saylabus`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_code` varchar(5) NOT NULL,
  `ref_fac_id` varchar(5) NOT NULL,
  `faculty_name` varchar(191) NOT NULL,
  `faculty_name_eng` varchar(191) NOT NULL,
  `user_edit` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_code`, `ref_fac_id`, `faculty_name`, `faculty_name_eng`, `user_edit`, `created_at`, `updated_at`) VALUES
(1, 'sci', '83', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'Faculty of Sciences and Technology', 'admin', '2020-10-12 08:04:44', NULL),
(2, 'edu', '11', 'คณะครุศาสตร์', 'Faculty of Education', 'admin', '2020-10-12 08:04:17', NULL),
(3, 'hum', '64', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'Faculty of Humanities and Social Sciences', 'admin', '2020-10-12 08:06:45', NULL),
(4, 'man', '73', 'คณะวิทยาการจัดการ', 'Faculty of Management Sciences', 'admin', '2020-10-12 08:06:45', NULL),
(5, 'ind', '33', 'คณะเทคโนโลยีอุตสาหกรรม', 'Faculty of Industrial Technology', 'admin', '2020-10-12 08:08:36', NULL),
(6, 'gdu', '14', 'บัณฑิตวิทยาลัย', 'The Graduate School', 'admin', '2020-10-12 08:09:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`,`ref_fac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
