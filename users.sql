-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 02:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apatest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` int(255) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` int(11) NOT NULL,
  `kra` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` int(11) DEFAULT NULL,
  `city_town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `county` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `phone_number`, `national_id`, `kra`, `postal_address`, `city_town`, `post_code`, `county`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 0, 'ANTHONY', '', 'KARONJI', 'anthonybaru@gmail.com', '$2y$10$MXS1/dg8eI7RJdPcb3/SV.eH9CjE6O5vL2neNlIkl.9k2ELn1tBYm', '700658856', 312215234, 'A54218542345I', 0, '', 0, '', NULL, NULL, '2019-08-08 06:01:18', '2019-08-08 06:01:18'),
(5, 201148874, 'Victor', NULL, 'Asava', 'vickyavicky23@gmail.com', '$2y$10$TlVUBu/0KfW8keruHqa.A.qXyUZ8XkxW.NWqK62UrHLVzhitF5yPq', '0712345678', 12345678, 'A123456789', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-20 12:41:36', '2019-08-20 12:41:36'),
(4, 1687971775, 'ANTHONY', '', 'KARONJI', 'anthonbaru@gmail.com', '$2y$10$2ANuRLGVTqa5BmGUeYDjtuEJO1/OgWZ8wCFz/8PB/Il7nWHWtAp/6', '700658856', 32132121, 'A8528452568541P', 0, '', 0, '', NULL, NULL, '2019-08-08 06:54:31', '2019-08-08 06:54:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
