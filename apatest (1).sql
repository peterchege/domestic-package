-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 09:17 AM
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_07_060054_create_social_facebook_accounts_table', 1),
(15, '2019_08_07_074743_create_pr_dp_premises_table', 2),
(16, '2019_08_07_090428_create_ref_roof_materials_table', 3),
(17, '2019_08_07_091849_create_ref_wall_materials_table', 3),
(18, '2019_08_09_131738_create_pr_dp_contents_table', 4),
(19, '2019_08_13_122235_create_pr_dp_allrisks_table', 5),
(20, '2019_08_14_201427_add_premises_id_to_allrisk_table', 6),
(21, '2019_08_19_170359_create_pr_dp_general_informations_table', 7),
(22, '2019_08_20_125832_adding_middle_name_po_box_city', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_allrisks`
--

CREATE TABLE `pr_dp_allrisks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `premises_id` int(11) NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `customer_role` enum('owner','tenant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pr_dp_allrisks`
--

INSERT INTO `pr_dp_allrisks` (`id`, `section_id`, `content_id`, `premises_id`, `serial_number`, `make_model`, `item_description`, `value`, `customer_role`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 3, 'serial', 'make', 'name', 12055, 'owner', '2019-08-14 17:28:10', '2019-08-14 17:28:10'),
(2, 3, 1, 3, '12358', 'samsung', 'tv', 50000, 'owner', '2019-08-14 17:28:57', '2019-08-14 17:28:57'),
(3, 3, 1, 3, '12358', 'jvc', 'radio', 50000, 'owner', '2019-08-14 17:28:57', '2019-08-14 17:28:57'),
(4, 3, 1, 3, 'sero', 'make', 'na', 300, 'owner', '2019-08-16 05:45:48', '2019-08-16 05:45:48'),
(5, 3, 1, 3, 'lk', 'mak', 'yu', 3200, 'owner', '2019-08-16 05:45:49', '2019-08-16 05:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_contents`
--

CREATE TABLE `pr_dp_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_value` int(11) DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` enum('owner','tenant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `premises_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pr_dp_contents`
--

INSERT INTO `pr_dp_contents` (`id`, `item_description`, `item_value`, `section_id`, `customer_role`, `premises_id`, `created_at`, `updated_at`) VALUES
(1, 'nmae', 1321231, 2, 'owner', 3, '2019-08-09 11:51:46', '2019-08-09 11:51:46'),
(2, 'nmae', 1321231, 2, 'owner', 3, '2019-08-09 11:51:46', '2019-08-09 11:51:46'),
(3, 'Cupboard', 100000, 2, 'owner', 3, '2019-08-13 10:01:07', '2019-08-13 10:01:07'),
(4, 'Bed', 1500000, 2, 'owner', 3, '2019-08-13 10:01:07', '2019-08-13 10:01:07'),
(5, 'Furniture', 5000, 2, 'owner', 3, '2019-08-13 10:01:07', '2019-08-13 10:01:07'),
(6, 'recent', 80000, 2, 'owner', 3, '2019-08-14 14:03:30', '2019-08-14 14:03:30'),
(7, 'name', 485, 2, 'owner', 3, '2019-08-15 06:59:33', '2019-08-15 06:59:33'),
(8, 'name', 8, 2, 'owner', 3, '2019-08-15 06:59:33', '2019-08-15 06:59:33'),
(9, 'name', 86, 2, 'owner', 3, '2019-08-15 06:59:33', '2019-08-15 06:59:33'),
(10, 'sofa', 800000, 2, 'owner', 3, '2019-08-15 08:35:36', '2019-08-15 08:35:36'),
(11, 'table', 600000, 2, 'owner', 3, '2019-08-15 08:35:37', '2019-08-15 08:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_domestics`
--

CREATE TABLE `pr_dp_domestics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type` int(11) DEFAULT NULL,
  `number_of_employees` int(11) DEFAULT NULL,
  `annual_salary` double DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` enum('owner','tenant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `premises_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pr_dp_domestics`
--

INSERT INTO `pr_dp_domestics` (`id`, `employee_type`, `number_of_employees`, `annual_salary`, `section_id`, `customer_role`, `premises_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3000, 5000, 1, 'owner', 3, '2019-08-16 09:37:37', '2019-08-16 09:37:37'),
(2, NULL, NULL, NULL, 1, 'owner', 3, '2019-08-16 09:38:17', '2019-08-16 09:38:17'),
(3, NULL, NULL, NULL, 1, 'owner', 3, '2019-08-16 09:43:27', '2019-08-16 09:43:27'),
(4, 1, 8000, 5000, 1, 'owner', 3, '2019-08-16 09:55:42', '2019-08-16 09:55:42'),
(5, 2, NULL, NULL, 1, 'owner', 3, '2019-08-16 09:57:12', '2019-08-16 09:57:12'),
(6, 2, 10, 10000, 1, 'owner', 3, '2019-08-16 09:57:46', '2019-08-16 09:57:46'),
(7, 1, 6000, 9000, 1, 'owner', 3, '2019-08-16 10:00:30', '2019-08-16 10:00:30'),
(8, 1, 1000, 10000, 1, 'owner', 3, '2019-08-16 10:02:08', '2019-08-16 10:02:08'),
(9, 2, 200, 8000, 1, 'owner', 3, '2019-08-16 10:02:31', '2019-08-16 10:02:31'),
(10, 1, 1000, 30000, 1, 'owner', 3, '2019-08-16 10:58:11', '2019-08-16 10:58:11'),
(11, 1, 1000, 30000, 1, 'owner', 3, '2019-08-16 10:58:34', '2019-08-16 10:58:34'),
(12, 2, 500, 60000, 1, 'owner', 3, '2019-08-16 10:58:34', '2019-08-16 10:58:34'),
(13, 3, 36, 5000, 1, 'owner', 3, '2019-08-16 10:58:34', '2019-08-16 10:58:34'),
(14, 1, 20, 500000, 1, 'owner', 3, '2019-08-16 10:59:34', '2019-08-16 10:59:34'),
(15, 3, 5, 50000, 1, 'owner', 3, '2019-08-16 10:59:34', '2019-08-16 10:59:34'),
(16, 1, 300, 2000, 1, 'owner', 3, '2019-08-16 11:08:31', '2019-08-16 11:08:31'),
(17, 4, 8555, 6555, 1, 'owner', 3, '2019-08-16 11:08:31', '2019-08-16 11:08:31'),
(18, 1, 8, 65, 1, 'owner', 3, '2019-08-18 09:13:16', '2019-08-18 09:13:16'),
(19, 1, 30, 58, 1, 'owner', 3, '2019-08-18 09:13:52', '2019-08-18 09:13:52'),
(20, 1, 800, 2300, 1, 'owner', 3, '2019-08-18 09:28:07', '2019-08-18 09:28:07'),
(21, 1, 1, 1, 1, 'owner', 3, '2019-08-18 09:33:01', '2019-08-18 09:33:01'),
(22, 1, 30, 3000, 1, 'owner', 3, '2019-08-19 06:14:56', '2019-08-19 06:14:56'),
(23, 2, 5000, 3600, 1, 'owner', 3, '2019-08-19 06:14:56', '2019-08-19 06:14:56'),
(24, 1, 200, 300, 1, 'owner', 3, '2019-08-20 09:23:08', '2019-08-20 09:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_general_informations`
--

CREATE TABLE `pr_dp_general_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `insurer_decline` tinyint(1) NOT NULL,
  `insurer_decline_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_terms` tinyint(1) NOT NULL,
  `special_terms_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancelled_refused_cover` tinyint(1) NOT NULL,
  `cancelled_refused_cover_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increased_premium` tinyint(1) NOT NULL,
  `increased_premium_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sustained_loss_from_mentioned_perils` tinyint(1) NOT NULL,
  `sustained_loss_from_mentioned_perils_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pr_dp_general_informations`
--

INSERT INTO `pr_dp_general_informations` (`id`, `user_id`, `insurer_decline`, `insurer_decline_details`, `special_terms`, `special_terms_details`, `cancelled_refused_cover`, `cancelled_refused_cover_details`, `increased_premium`, `increased_premium_details`, `sustained_loss_from_mentioned_perils`, `sustained_loss_from_mentioned_perils_details`, `created_at`, `updated_at`) VALUES
(1, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 16:55:02', '2019-08-19 16:55:02'),
(2, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:02:34', '2019-08-19 17:02:34'),
(3, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:03:06', '2019-08-19 17:03:06'),
(4, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:03:32', '2019-08-19 17:03:32'),
(5, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:03:46', '2019-08-19 17:03:46'),
(6, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:04:00', '2019-08-19 17:04:00'),
(7, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:04:00', '2019-08-19 17:04:00'),
(8, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:05:12', '2019-08-19 17:05:12'),
(9, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:05:39', '2019-08-19 17:05:39'),
(10, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-19 17:05:49', '2019-08-19 17:05:49'),
(11, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-20 09:23:18', '2019-08-20 09:23:18'),
(12, 1687971775, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-08-20 09:42:53', '2019-08-20 09:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_premises`
--

CREATE TABLE `pr_dp_premises` (
  `premises_id` bigint(20) NOT NULL,
  `user_id` int(255) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floors` int(11) DEFAULT NULL,
  `business` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sole_occupation` tinyint(1) NOT NULL,
  `dwelling` enum('private','self-contained','room-not-self-contained') COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_hire` tinyint(1) DEFAULT NULL,
  `thirty_day_inoccupancy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirty_day_inoccupancy_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_state_of_repair` tinyint(1) NOT NULL,
  `burglar_proof` tinyint(1) NOT NULL,
  `burglar_proof_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_sec_arrangement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `premises_value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pr_dp_premises`
--

INSERT INTO `pr_dp_premises` (`premises_id`, `user_id`, `location`, `floors`, `business`, `business_description`, `sole_occupation`, `dwelling`, `for_hire`, `thirty_day_inoccupancy`, `thirty_day_inoccupancy_details`, `good_state_of_repair`, `burglar_proof`, `burglar_proof_details`, `other_sec_arrangement`, `premises_value`, `created_at`, `updated_at`) VALUES
(1, 1687971775, NULL, 8, '0', NULL, 1, 'private', NULL, '0', NULL, 1, 0, NULL, 'Dogs', NULL, '2019-08-08 11:11:32', '2019-08-08 11:11:32'),
(2, 1687971775, NULL, 8, '0', NULL, 1, 'private', NULL, '0', NULL, 1, 0, NULL, 'Dogs', NULL, '2019-08-08 11:12:38', '2019-08-08 11:12:38'),
(3, 1687971775, NULL, 8, '0', NULL, 1, 'private', NULL, '0', NULL, 1, 0, NULL, 'Dogs', 20000000, '2019-08-08 11:26:44', '2019-08-08 11:26:44'),
(4, 0, NULL, 5, '1', 'Green Grocey', 1, 'self-contained', NULL, '0', NULL, 1, 0, NULL, 'Dogs', 5000000, '2019-08-09 03:06:29', '2019-08-09 03:06:29'),
(5, 0, NULL, 5, '1', 'Green Grocey', 1, 'self-contained', NULL, '0', NULL, 1, 0, NULL, 'Dogs', 5000000, '2019-08-09 05:08:15', '2019-08-09 05:08:15'),
(6, 0, NULL, 5, '1', 'Green Grocey', 1, 'self-contained', NULL, '0', NULL, 1, 0, NULL, 'Dogs', 5000000, '2019-08-09 05:23:49', '2019-08-09 05:23:49'),
(7, 0, NULL, 6, '1', 'Bar', 1, 'private', NULL, '1', 'On holiday.', 1, 1, 'G4S', 'Dogs-German Shepherds.', 10000000, '2019-08-13 09:58:17', '2019-08-13 09:58:17'),
(8, 1687971775, NULL, 4852548, '0', NULL, 1, 'room-not-self-contained', NULL, '0', NULL, 0, 1, 'Metal windows', 'Dogs', 10000000, '2019-08-14 08:43:58', '2019-08-14 08:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_social_facebook_accounts`
--

CREATE TABLE `pr_dp_social_facebook_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_roof_materials`
--

CREATE TABLE `ref_roof_materials` (
  `id` bigint(20) NOT NULL,
  `roof_id` bigint(20) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_wall_materials`
--

CREATE TABLE `ref_wall_materials` (
  `id` bigint(20) NOT NULL,
  `wall_id` bigint(20) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pr_dp_allrisks`
--
ALTER TABLE `pr_dp_allrisks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pr_dp_contents`
--
ALTER TABLE `pr_dp_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pr_dp_domestics`
--
ALTER TABLE `pr_dp_domestics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pr_dp_general_informations`
--
ALTER TABLE `pr_dp_general_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pr_dp_premises`
--
ALTER TABLE `pr_dp_premises`
  ADD PRIMARY KEY (`premises_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pr_dp_social_facebook_accounts`
--
ALTER TABLE `pr_dp_social_facebook_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_roof_materials`
--
ALTER TABLE `ref_roof_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roof index` (`roof_id`);

--
-- Indexes for table `ref_wall_materials`
--
ALTER TABLE `ref_wall_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wall_id` (`wall_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pr_dp_allrisks`
--
ALTER TABLE `pr_dp_allrisks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pr_dp_contents`
--
ALTER TABLE `pr_dp_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pr_dp_domestics`
--
ALTER TABLE `pr_dp_domestics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pr_dp_general_informations`
--
ALTER TABLE `pr_dp_general_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pr_dp_premises`
--
ALTER TABLE `pr_dp_premises`
  MODIFY `premises_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pr_dp_social_facebook_accounts`
--
ALTER TABLE `pr_dp_social_facebook_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_roof_materials`
--
ALTER TABLE `ref_roof_materials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_wall_materials`
--
ALTER TABLE `ref_wall_materials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pr_dp_general_informations`
--
ALTER TABLE `pr_dp_general_informations`
  ADD CONSTRAINT `pr_dp_general_informations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pr_dp_premises` (`user_id`);

--
-- Constraints for table `pr_dp_premises`
--
ALTER TABLE `pr_dp_premises`
  ADD CONSTRAINT `pr_dp_premises_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `ref_roof_materials`
--
ALTER TABLE `ref_roof_materials`
  ADD CONSTRAINT `ref_roof_materials_ibfk_1` FOREIGN KEY (`roof_id`) REFERENCES `pr_dp_premises` (`premises_id`);

--
-- Constraints for table `ref_wall_materials`
--
ALTER TABLE `ref_wall_materials`
  ADD CONSTRAINT `ref_wall_materials_ibfk_1` FOREIGN KEY (`wall_id`) REFERENCES `pr_dp_premises` (`premises_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
