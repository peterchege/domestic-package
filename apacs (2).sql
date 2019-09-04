-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 02:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apacs`
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
(1, '2019_09_02_105005_adding_timestamps_to_products_table', 1),
(2, '2019_09_02_105708_adding_timestamp_columns_to_tables_without_timestamps', 2);

-- --------------------------------------------------------

--
-- Table structure for table `old_all_risk_item`
--

CREATE TABLE `old_all_risk_item` (
  `all_risk_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` int(11) DEFAULT NULL,
  `serial_no` int(65) NOT NULL,
  `item_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anthonbaru@gmail.com', '$2y$10$18w4QBe2aAcZeFT.dE5piuP.y3weetjJt.5ISoEqPoMHO7rI035vm', '2019-09-03 07:31:32'),
('anthonybaru@gmail.com', '$2y$10$OgCbEI39kJHuQel8qRv1denaxRb4.gK7XV9CTWSIDCd9OSQKmw6Uq', '2019-09-03 09:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `created_at`, `updated_at`) VALUES
(1, 'Domestic Package', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Building', 1, NULL, NULL),
(2, 'Contents', 1, NULL, NULL),
(3, 'All Risk', 1, NULL, NULL),
(4, 'Domestic Employee', 1, NULL, NULL),
(5, 'Owner Liability', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_allrisks`
--

CREATE TABLE `pr_dp_allrisks` (
  `allrisk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cover_id` int(11) DEFAULT NULL,
  `serial_number` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `make_model` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `item_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` double(20,0) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pr_dp_allrisks`
--

INSERT INTO `pr_dp_allrisks` (`allrisk_id`, `user_id`, `cover_id`, `serial_number`, `make_model`, `item_description`, `value`, `created_at`, `updated_at`) VALUES
(1, 1665378265, NULL, '7899564', 'toshiba', 'laptop', 200000, '2019-09-04 09:01:10.000000', '2019-09-04 09:01:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_contents`
--

CREATE TABLE `pr_dp_contents` (
  `content_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_description` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_value` double NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pr_dp_contents`
--

INSERT INTO `pr_dp_contents` (`content_id`, `user_id`, `item_description`, `item_value`, `created_at`, `updated_at`) VALUES
(1, NULL, 'laptop', 60000, '2019-09-04 06:52:50.000000', '2019-09-04 06:52:50.000000'),
(2, NULL, 'bed', 60000, '2019-09-04 06:52:50.000000', '2019-09-04 06:52:50.000000'),
(3, 1665378265, 'laptop', 80000, '2019-09-04 08:59:07.000000', '2019-09-04 08:59:07.000000'),
(4, 1665378265, 'furniture', 90000, '2019-09-04 08:59:07.000000', '2019-09-04 08:59:07.000000'),
(5, 1665378265, 'naem', 9555, '2019-09-04 08:59:07.000000', '2019-09-04 08:59:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_covers`
--

CREATE TABLE `pr_dp_covers` (
  `cover_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cover` double NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'User Foreign Key ',
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_domestics`
--

CREATE TABLE `pr_dp_domestics` (
  `domestic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_type` set('Indoors Staff','Gardener','Stablemen','Chauffeurs','Watchmen') COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `number_of_employees` int(11) NOT NULL,
  `annual_salary` double NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pr_dp_domestics`
--

INSERT INTO `pr_dp_domestics` (`domestic_id`, `user_id`, `employee_type`, `number_of_employees`, `annual_salary`, `created_at`, `updated_at`) VALUES
(1, 1665378265, 'Indoors Staff', 65, 80000, '2019-09-04 09:23:57.000000', '2019-09-04 09:23:57.000000'),
(2, 1665378265, 'Gardener', 2, 800000, '2019-09-04 09:23:57.000000', '2019-09-04 09:23:57.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_general_informations`
--

CREATE TABLE `pr_dp_general_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `insurer_decline` tinyint(1) NOT NULL,
  `insurer_decline_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `special_terms` tinyint(1) DEFAULT NULL,
  `special_terms_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cancelled_refused_cover` tinyint(1) NOT NULL,
  `cancelled_refused_cover_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `increased_premium` tinyint(1) NOT NULL,
  `increased_premium_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sustained_loss_from_mentioned_perils` tinyint(1) NOT NULL,
  `sustained_loss_from_mentioned_perils_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pr_dp_general_informations`
--

INSERT INTO `pr_dp_general_informations` (`id`, `user_id`, `insurer_decline`, `insurer_decline_details`, `special_terms`, `special_terms_details`, `cancelled_refused_cover`, `cancelled_refused_cover_details`, `increased_premium`, `increased_premium_details`, `sustained_loss_from_mentioned_perils`, `sustained_loss_from_mentioned_perils_details`, `created_at`, `updated_at`) VALUES
(1, 1665378265, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-09-02 09:23:47.000000', '2019-09-02 09:23:47.000000'),
(2, 1665378265, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-09-02 09:30:10.000000', '2019-09-02 09:30:10.000000'),
(3, 1665378265, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-09-02 12:09:58.000000', '2019-09-02 12:09:58.000000'),
(4, 1665378265, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, '2019-09-04 09:24:09.000000', '2019-09-04 09:24:09.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dp_premises`
--

CREATE TABLE `pr_dp_premises` (
  `premises_id` int(11) NOT NULL,
  `customer_role` set('Owner','Tenant') COLLATE utf8_unicode_ci DEFAULT '',
  `user_id` int(255) NOT NULL,
  `location` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `dwelling_wall` int(11) NOT NULL,
  `dwelling_roof` int(11) DEFAULT NULL,
  `floors` int(11) NOT NULL,
  `outbuilding_wall` int(11) DEFAULT NULL,
  `outbuilding_roof` int(11) DEFAULT NULL,
  `business` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `business_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dwelling` enum('private','self-contained','room-not-self-contained') COLLATE utf8_unicode_ci NOT NULL,
  `sole_occupation` tinyint(1) NOT NULL,
  `for_hire` tinyint(1) DEFAULT NULL,
  `thirty_day_inoccupancy` tinyint(1) NOT NULL,
  `thirty_day_inoccupancy_details` longtext COLLATE utf8_unicode_ci,
  `seven_day_inoccupancy` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seven_day_inoccupancy_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `good_state_of_repair` tinyint(1) NOT NULL,
  `burglar_proof` tinyint(1) NOT NULL,
  `burglar_proof_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sec_arrangement` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `premises_value` double DEFAULT NULL,
  `cover_id` int(11) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pr_dp_premises`
--

INSERT INTO `pr_dp_premises` (`premises_id`, `customer_role`, `user_id`, `location`, `dwelling_wall`, `dwelling_roof`, `floors`, `outbuilding_wall`, `outbuilding_roof`, `business`, `business_description`, `dwelling`, `sole_occupation`, `for_hire`, `thirty_day_inoccupancy`, `thirty_day_inoccupancy_details`, `seven_day_inoccupancy`, `seven_day_inoccupancy_details`, `good_state_of_repair`, `burglar_proof`, `burglar_proof_details`, `other_sec_arrangement`, `premises_value`, `cover_id`, `created_at`, `updated_at`) VALUES
(5, '', 1665378265, 'PLOT NO. 1870/VI/209 MVULI ROAD WESTLANDS, NAIROBI', 1, 1, 5, 2, 1, '1', 'Shops', 'self-contained', 1, NULL, 0, NULL, '0', NULL, 0, 0, NULL, 'Guards', 5000000, NULL, '2019-09-02 09:49:32.000000', '2019-09-02 09:49:32.000000'),
(6, '', 1665378265, 'PLOT NO. 1870/VI/209 MVULI ROAD WESTLANDS, NAks', 2, 1, 2, 1, 1, '1', 'Shops', 'self-contained', 1, NULL, 0, NULL, NULL, '0', 0, 0, NULL, 'Guards', 5000000, NULL, '2019-09-02 11:01:27.000000', '2019-09-02 11:01:27.000000'),
(7, '', 1665378265, 'PLOT NO. 1870/VI/209 MVULI ROAD WESTLAND Area', 2, 2, 8, 2, 2, '1', 'Saloon.', 'self-contained', 0, 0, 0, NULL, '0', NULL, 0, 0, NULL, 'Dogs', 5000000, NULL, '2019-09-02 11:04:00.000000', '2019-09-02 11:04:00.000000'),
(8, '', 1665378265, 'PLOT NO. 1870/VI/209 MVULI ROAD WESTLAND Nanyuki', 1, 1, 1, 1, 1, '1', 'Saloon.', 'self-contained', 0, 0, 0, NULL, NULL, '0', 0, 0, NULL, 'Dogs', 5000000, NULL, '2019-09-02 11:10:26.000000', '2019-09-02 11:10:26.000000'),
(9, 'Owner', 1665378265, 'PLOT NO. 1870/VI/209 MVULI ROAD WESTLAND Niavasha', 1, 1, 1, 1, 1, '1', 'Saloon.', 'self-contained', 0, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'Dogs', 5000000, NULL, '2019-09-02 11:24:39.000000', '2019-09-02 11:24:39.000000'),
(10, 'Owner', 1665378265, 'PLOT NO. 1870/VI/209 MVULI ROAD WESTLANDS, COAST', 1, 1, 6, 1, 2, '0', NULL, 'self-contained', 0, 0, 0, NULL, NULL, '0', 0, 0, NULL, NULL, 500000, NULL, '2019-09-04 08:58:31.000000', '2019-09-04 08:58:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ref_content_type`
--

CREATE TABLE `ref_content_type` (
  `content_type_id` int(11) NOT NULL,
  `type` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `ref_jobs`
--

CREATE TABLE `ref_jobs` (
  `job_id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `ref_outbuilding_roofs`
--

CREATE TABLE `ref_outbuilding_roofs` (
  `id` int(11) NOT NULL,
  `description` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ref_outbuilding_roofs`
--

INSERT INTO `ref_outbuilding_roofs` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Stone', '2019-09-02 09:50:55.000000', '2019-09-02 09:51:00.000000'),
(2, 'Brick', '2019-09-02 11:08:12.000000', '2019-09-02 11:08:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ref_outbuilding_walls`
--

CREATE TABLE `ref_outbuilding_walls` (
  `id` int(11) NOT NULL,
  `description` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ref_outbuilding_walls`
--

INSERT INTO `ref_outbuilding_walls` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Stone', '2019-09-02 09:50:55', '2019-09-02 09:51:00'),
(2, 'Brick', '2019-09-02 11:09:21', '2019-09-02 11:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `ref_roof_materials`
--

CREATE TABLE `ref_roof_materials` (
  `id` int(11) NOT NULL,
  `description` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ref_roof_materials`
--

INSERT INTO `ref_roof_materials` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Stone', '2019-09-02 09:50:55.000000', '2019-09-02 09:51:00.000000'),
(2, 'Brick', '2019-09-02 11:05:11.000000', '2019-09-02 11:05:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ref_wall_materials`
--

CREATE TABLE `ref_wall_materials` (
  `id` int(11) NOT NULL,
  `description` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ref_wall_materials`
--

INSERT INTO `ref_wall_materials` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Stone', '2019-09-02 09:50:55.000000', '2019-09-02 12:51:00.000000'),
(2, 'Brick', '2019-09-02 09:50:55.000000', '2019-09-02 12:51:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `other_number` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `national_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `kra` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_address` int(11) DEFAULT NULL,
  `city_town` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `county` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `phone_number`, `other_number`, `national_id`, `kra`, `postal_address`, `city_town`, `post_code`, `county`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 1665378265, 'ANTHONY', 'JOHN', 'DOE', 'anthonbaru@gmail.com', '$2y$10$X41jZU/in8MV3SMMHVR95OBJ7/RcUfu3HhJZQIO1H33iUavSCpEMC', '700658856', '0712345678', '12345678', 'A8528452568541P', 9577, 'Mombasa', 300, 'Mombasa', NULL, NULL, '2019-09-02 06:46:25.000000', '2019-09-02 09:30:42.000000'),
(6, 26672089, 'John', NULL, 'Doe', 'anthonybaru@gmail.com', '$2y$10$1oEUMNy1Il27sgIE23tO/u6iz1R66.Dpcq9fnbvAxbr6.jG3/GfXO', '0712345678', NULL, '12345678', 'A8528452568541P', NULL, NULL, NULL, NULL, NULL, 'ZYUm536fgGqnZmLlLUzuX77AHdvslsaorbrjlDZdX4OsEcSk4nMtHLSlJuDT', '2019-09-03 07:33:38.000000', '2019-09-03 08:01:37.000000'),
(8, 97772024, 'John', NULL, 'Doe', 'johndoe@gmail.com', '$2y$10$QwzhIVSCEtj/ZR9h5yS6C.KDVufxRRhgCrwWkmOfmx7fbU/tGCdeq', '0712345678', NULL, '12345622', 'A456982158I', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-04 11:42:41.000000', '2019-09-04 11:42:41.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_all_risk_item`
--
ALTER TABLE `old_all_risk_item`
  ADD PRIMARY KEY (`item_id`) USING BTREE,
  ADD KEY `IX_Relationship29` (`item_id`) USING BTREE,
  ADD KEY `all_risk_id` (`all_risk_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `item_type` (`item_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`) USING BTREE,
  ADD UNIQUE KEY `invoice_no` (`invoice_no`) USING BTREE,
  ADD KEY `Relationship2` (`user_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`) USING BTREE,
  ADD UNIQUE KEY `product_name` (`product_name`) USING BTREE;

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`) USING BTREE,
  ADD KEY `Reference Table` (`product_id`) USING BTREE,
  ADD KEY `category_id` (`category_id`) USING BTREE;

--
-- Indexes for table `pr_dp_allrisks`
--
ALTER TABLE `pr_dp_allrisks`
  ADD PRIMARY KEY (`allrisk_id`) USING BTREE,
  ADD KEY `cover_id` (`cover_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pr_dp_contents`
--
ALTER TABLE `pr_dp_contents`
  ADD PRIMARY KEY (`content_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pr_dp_covers`
--
ALTER TABLE `pr_dp_covers`
  ADD PRIMARY KEY (`cover_id`) USING BTREE,
  ADD KEY `IX_Relationship3` (`user_id`) USING BTREE,
  ADD KEY `IX_Relationship4` (`category_id`,`product_id`) USING BTREE,
  ADD KEY `cover_id` (`cover_id`,`user_id`),
  ADD KEY `Cover must have a product` (`product_id`),
  ADD KEY `end_date` (`end_date`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `pr_dp_domestics`
--
ALTER TABLE `pr_dp_domestics`
  ADD PRIMARY KEY (`domestic_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pr_dp_general_informations`
--
ALTER TABLE `pr_dp_general_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pr_dp_general_informations_ibfk_1` (`user_id`) USING BTREE;

--
-- Indexes for table `pr_dp_premises`
--
ALTER TABLE `pr_dp_premises`
  ADD PRIMARY KEY (`premises_id`) USING BTREE,
  ADD KEY `Relationship18` (`customer_role`) USING BTREE,
  ADD KEY `Relationship7` (`dwelling_wall`) USING BTREE,
  ADD KEY `outbuilding walll material` (`outbuilding_wall`) USING BTREE,
  ADD KEY `outbuilding roof` (`outbuilding_roof`) USING BTREE,
  ADD KEY `building_id` (`premises_id`,`customer_role`) USING BTREE,
  ADD KEY `cover_id` (`cover_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dwelling_roo` (`dwelling_roof`);

--
-- Indexes for table `ref_content_type`
--
ALTER TABLE `ref_content_type`
  ADD PRIMARY KEY (`content_type_id`) USING BTREE,
  ADD UNIQUE KEY `type` (`type`) USING BTREE;

--
-- Indexes for table `ref_jobs`
--
ALTER TABLE `ref_jobs`
  ADD PRIMARY KEY (`job_id`) USING BTREE,
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `ref_outbuilding_roofs`
--
ALTER TABLE `ref_outbuilding_roofs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `primary key` (`id`) USING BTREE;

--
-- Indexes for table `ref_outbuilding_walls`
--
ALTER TABLE `ref_outbuilding_walls`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `primary key` (`id`) USING BTREE;

--
-- Indexes for table `ref_roof_materials`
--
ALTER TABLE `ref_roof_materials`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `roof id index` (`id`);

--
-- Indexes for table `ref_wall_materials`
--
ALTER TABLE `ref_wall_materials`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `description` (`description`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `unique customer_id` (`id`) USING BTREE,
  ADD KEY `IX_Relationship21` (`password`) USING BTREE,
  ADD KEY `phone` (`phone_number`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pr_dp_allrisks`
--
ALTER TABLE `pr_dp_allrisks`
  MODIFY `allrisk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pr_dp_contents`
--
ALTER TABLE `pr_dp_contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pr_dp_covers`
--
ALTER TABLE `pr_dp_covers`
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pr_dp_domestics`
--
ALTER TABLE `pr_dp_domestics`
  MODIFY `domestic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pr_dp_general_informations`
--
ALTER TABLE `pr_dp_general_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pr_dp_premises`
--
ALTER TABLE `pr_dp_premises`
  MODIFY `premises_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ref_content_type`
--
ALTER TABLE `ref_content_type`
  MODIFY `content_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_jobs`
--
ALTER TABLE `ref_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_outbuilding_roofs`
--
ALTER TABLE `ref_outbuilding_roofs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_outbuilding_walls`
--
ALTER TABLE `ref_outbuilding_walls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_roof_materials`
--
ALTER TABLE `ref_roof_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_wall_materials`
--
ALTER TABLE `ref_wall_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `user id to payment relation` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Product categories` FOREIGN KEY (`product_id`) REFERENCES `product_categories` (`category_id`);

--
-- Constraints for table `pr_dp_allrisks`
--
ALTER TABLE `pr_dp_allrisks`
  ADD CONSTRAINT `pr_dp_all_risks to users relation` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_dp_covers`
--
ALTER TABLE `pr_dp_covers`
  ADD CONSTRAINT `Cover must have a product` FOREIGN KEY (`product_id`) REFERENCES `product_categories` (`product_id`),
  ADD CONSTRAINT `pr_dp_covers_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `pr_dp_premises` (`user_id`),
  ADD CONSTRAINT `pr_dp_covers_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `pr_dp_contents` (`user_id`),
  ADD CONSTRAINT `user id to cover relation` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_dp_domestics`
--
ALTER TABLE `pr_dp_domestics`
  ADD CONSTRAINT `domestics to users relation` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_dp_general_informations`
--
ALTER TABLE `pr_dp_general_informations`
  ADD CONSTRAINT `user id to general info` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_dp_premises`
--
ALTER TABLE `pr_dp_premises`
  ADD CONSTRAINT `pr_dp_premises_ibfk_1` FOREIGN KEY (`dwelling_wall`) REFERENCES `ref_wall_materials` (`id`),
  ADD CONSTRAINT `pr_dp_premises_ibfk_2` FOREIGN KEY (`dwelling_roof`) REFERENCES `ref_roof_materials` (`id`),
  ADD CONSTRAINT `pr_dp_premises_ibfk_3` FOREIGN KEY (`outbuilding_roof`) REFERENCES `ref_outbuilding_roofs` (`id`),
  ADD CONSTRAINT `pr_dp_premises_ibfk_4` FOREIGN KEY (`outbuilding_wall`) REFERENCES `ref_outbuilding_walls` (`id`),
  ADD CONSTRAINT `premises to users relationship` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
