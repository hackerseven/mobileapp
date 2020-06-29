-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 07:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'per square feet',
  `area` int(11) NOT NULL COMMENT 'in square feet',
  `location` varchar(500) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'office',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `image`, `price`, `area`, `location`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Umiya Business Bay', '1582104597-umiya-business-bay-bangalore-1.jpg', 13846, 1950, 'Outer Ring Road , Bangalore', 'office', '2020-06-28 09:05:00', '2020-06-28 09:05:00', NULL),
(2, 'The Pavilion II', '1578542240-the-pavilion-ii-bangalore-1.jpg', 12500, 24392, 'Outer Ring Road , Bangalore', 'office', '2020-06-28 09:05:41', '2020-06-28 09:05:41', NULL),
(3, 'The Pavilion I', '1578542236-the-pavilion-i-bangalore-1.jpg', 12500, 29185, 'Outer Ring Road , Bangalore', 'office', '2020-06-28 09:06:15', '2020-06-28 09:06:15', NULL),
(4, 'Miraya Rose', '1578542213-miraya-rose-whitefield-bangalore-1.jpg', 11059, 22588, 'Whitefield , Bangalore', 'retail', '2020-06-28 09:06:52', '2020-06-28 09:06:52', NULL),
(5, 'Seawoods Grand Central III', '1578542223-seawoods-grand-central-iii-mumbai-1.jpg', 14105, 22716, 'Navi Mumbai , Mumbai', 'office', '2020-06-28 09:07:21', '2020-06-28 09:07:21', NULL),
(6, 'The Capital II', '1578665094-the-capital-bkc-ii-mumbai-1.jpg', 35266, 5501, 'Bandra Kurla Complex (BKC) , Mumbai', 'office', '2020-06-28 09:08:05', '2020-06-28 09:08:05', NULL),
(7, 'IBC Knowledge Park II', '1578665089-ibc-knowledge-park-ii-bangalore-1.jpg', 11350, 22392, 'Bannerghatta Road , Bangalore', 'office', '2020-06-28 09:08:37', '2020-06-28 09:08:37', NULL),
(8, 'IBC Knowledge Park', '1578665086-ibc-knowledge-park-bangalore-1.jpg', 11350, 32277, 'Bannerghatta Road , Bangalore', 'office', '2020-06-28 09:09:07', '2020-06-28 09:09:07', NULL),
(9, 'The Capital', '1578665092-the-capital-mumbai-1.jpg', 34646, 7721, 'Bandra Kurla Complex , Mumbai', 'office', '2020-06-28 09:09:38', '2020-06-28 09:09:38', NULL),
(10, 'Sky Vista', '1578542226-sky-vista-pune-1.jpg', 13417, 8944, 'Viman Nagar , Pune', 'office', '2020-06-28 09:10:06', '2020-06-28 09:10:06', NULL),
(11, 'Manjeera Trinity Corporate', '1578542212-manjeera-trinity-corporate-hyderabad-1.jpg', 6246, 6884, 'Kukatpally , Hyderabad', 'office', '2020-06-28 09:10:34', '2020-06-28 09:10:34', NULL),
(12, 'Brigade Tech Park II', '1578542197-brigade-tech-park-ii-bangalore-1.jpg', 4750, 50500, 'Whitefield , Bangalore', 'office', '2020-06-28 09:11:07', '2020-06-28 09:11:07', NULL),
(13, 'Umiya Business Bay I', '1578542243-umiya-business-bay-i-bangalore-1.jpg', 9115, 1950, 'Outer Ring Road , Bangalore', 'office', '2020-06-28 09:11:32', '2020-06-28 09:11:32', NULL),
(14, 'Seawoods Grand Central II', '1578542219-seawoods-grand-central-ii-mumbai-1.jpg', 13563, 10988, 'Navi Mumbai , Mumbai', 'office', '2020-06-28 09:11:59', '2020-06-28 09:11:59', NULL),
(15, 'Seawoods Grand Central', '1578542216-seawoods-grand-central-mumbai-1.jpg', 13302, 14320, 'Navi Mumbai , Mumbai', 'office', '2020-06-28 09:12:26', '2020-06-28 09:12:26', NULL),
(16, 'Brigade Tech Park', '1578542194-brigade-tech-park-bangalore-1.jpg', 5204, 17468, 'Whitefield , Bangalore', 'office', '2020-06-28 09:13:06', '2020-06-28 09:13:06', NULL),
(17, 'Embassy Tech Square', '1578542200-embassy-tech-square-bangalore-1.jpg', 9655, 40392, 'Sarjapur ORR , Bangalore', 'office', '2020-06-28 09:13:31', '2020-06-28 09:13:31', NULL),
(18, 'Umiya Business Bay II', '1578542246-umiya-business-bay-ii-bangalore-1.jpg', 10865, 5200, 'Outer Ring Road , Bangalore', 'office', '2020-06-28 09:14:02', '2020-06-28 09:14:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sun_sign` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_accessed_from` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
