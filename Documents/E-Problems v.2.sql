-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 12:15 PM
-- Server version: 11.6.2-MariaDB
-- PHP Version: 8.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E-Problems`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Category ID',
  `enable` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Enable',
  `priority_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Priority',
  `title` varchar(100) NOT NULL COMMENT 'Title',
  `description` varchar(500) NOT NULL COMMENT 'Description',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `enable`, `priority_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Web Site blocker', 'add new web site blocker', '2024-12-11 22:59:33', '2024-12-11 22:59:33'),
(2, 1, 2, 'Allow access to websites', 'Allow access to websites', '2024-12-11 22:59:34', '2024-12-11 22:59:34'),
(3, 1, 3, 'install program', 'allow install program', '2024-12-11 23:00:15', '2024-12-11 23:00:15'),
(4, 1, 4, 'blocking program', 'blocking program, disallow install program, remove program', '2024-12-11 22:59:35', '2024-12-11 22:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_11_000000_create_categories_table', 1),
(5, '2024_12_11_000000_create_organizations_table', 1),
(6, '2024_12_11_000000_create_service_lines_table', 1),
(7, '2024_12_11_000000_create_service_lines_vessels_table', 1),
(8, '2024_12_11_000000_create_support_engineer_table', 1),
(9, '2024_12_11_000000_create_tickets_table', 1),
(10, '2024_12_11_000000_create_vessels_table', 1),
(11, '2024_12_12_095330_create_relational_table', 1),
(12, '2024_12_15_162553_create_personal_access_tokens_table', 1),
(13, '2024_12_15_162553_create_teams_table', 1),
(14, '2024_12_15_165655_add_two_factor_columns_to_users_table', 1),
(15, '2024_12_15_165711_create_team_user_table', 1),
(16, '2024_12_15_165712_create_team_invitations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Organization ID',
  `enable` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Enable',
  `title` varchar(256) NOT NULL COMMENT 'Title',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `enable`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'FedEx', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(2, 1, 'DHL', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(3, 1, 'UPS', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(4, 1, 'Blue Dart', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(5, 1, 'PostNL', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(6, 1, 'DB Schenker', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(7, 1, 'R + L Carriers', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(8, 1, 'DTDC', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(9, 1, 'TNT', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(10, 1, 'YRC Freight', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(11, 1, 'Royal Mail', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(12, 1, 'Asendia', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(13, 1, 'Flat Export', '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(14, 1, 'Passport', '2024-12-16 05:15:36', '2024-12-16 05:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_lines`
--

CREATE TABLE `service_lines` (
  `id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Service Line',
  `enable` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Enable',
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL COMMENT 'Title',
  `descriptions` varchar(500) NOT NULL COMMENT 'Descriptions',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_lines`
--

INSERT INTO `service_lines` (`id`, `enable`, `organization_id`, `title`, `descriptions`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Asia-Europe Express', 'It would connect major ports in East Asia (e.g., Shanghai, Ningbo, Yantian) with key hubs in Europe (e.g., Rotterdam, Hamburg, Antwerp).', '2024-12-11 22:56:12', '2024-12-11 22:56:12'),
(2, 1, 0, 'Silk Route Service', 'It would likely connect major ports in East Asia (e.g., Shanghai, Ningbo, Hong Kong) with key hubs in the Mediterranean region and Europe (e.g., Piraeus, Istanbul, Venice, Genoa). It might also include ports in Southeast Asia and the Indian Subcontinent, reflecting the historical Silk Road.', '2024-12-11 22:56:12', '2024-12-11 22:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `service_lines_vessels`
--

CREATE TABLE `service_lines_vessels` (
  `service_line_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Service Line ID',
  `vessel_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Vessel ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_lines_vessels`
--

INSERT INTO `service_lines_vessels` (`service_line_id`, `vessel_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 4),
(2, 5),
(2, 6),
(1, 7),
(1, 8),
(2, 9),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_engineer`
--

CREATE TABLE `support_engineer` (
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'User ID',
  `level` tinyint(4) NOT NULL COMMENT 'Level',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 2, 'TIER 1 SUPPORT (L1)', 1, '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(2, 3, 'TIER 2 SUPPORT (L2)', 1, '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(3, 4, 'TIER 3 SUPPORT (L3)', 1, '2024-12-16 05:15:36', '2024-12-16 05:15:36'),
(4, 5, 'TIER 4 SUPPORT (L4)', 1, '2024-12-16 05:15:36', '2024-12-16 05:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'Case ID',
  `status_id` tinyint(4) NOT NULL COMMENT 'Status',
  `category_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Category',
  `vessel_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Vessel',
  `service_lines_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'Service Lines',
  `support_engineer_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Support Engineer ID',
  `sla_dt` datetime NOT NULL COMMENT 'SLA',
  `working_time` int(10) UNSIGNED DEFAULT NULL COMMENT 'Working Time',
  `descriptions` text NOT NULL COMMENT 'Descriptions',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL COMMENT 'Created By',
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Updated By',
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Deleted By'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `status_id`, `category_id`, `vessel_id`, `service_lines_id`, `support_engineer_id`, `sla_dt`, `working_time`, `descriptions`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, 1, 1, 2, '2024-12-12 08:00:01', NULL, 'descriptions about issue', '2024-12-12 01:01:38', NULL, 1, NULL, NULL),
(2, 2, 2, 2, 2, 3, '2024-12-12 08:00:01', NULL, 'detail', '2024-12-12 01:01:38', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@plusmagi.internal', NULL, '$2y$12$Ss0chljIxB930f6mu5ViKOlC9dVe9eN4Aj3PNQipL9DiL9lhsXj..', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34'),
(2, 'Supporter 1', 'supporter1@plusmagi.internal', NULL, '$2y$12$N2kxhSeUPTjnNUe9BzrOaOuJ9pgCnVlqOCC35uZHmZDH3Q9y0sYL2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34'),
(3, 'Supporter 2', 'supporter2@plusmagi.internal', NULL, '$2y$12$agIpdQEEUi3sDPcDeyLOaOc7uhh5hlw4bwKlJffupZrk/12yXnBLq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34'),
(4, 'Supporter 3', 'supporter3@plusmagi.internal', NULL, '$2y$12$iHJ/fOWRD7zng/xNa21s7eQxspJpg9idTD.RrUAgq2Ux8Vvl6zQ0m', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34'),
(5, 'Supporter 4', 'supporter4@plusmagi.internal', NULL, '$2y$12$RGGi.pur5PM.8d6hKI8oKu5V7.8KTl3g4lwtLRqv8hdb.0lhAHBgG', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34'),
(6, 'Supporter 5', 'supporter5@plusmagi.internal', NULL, '$2y$12$cf16hW8XnvqbcMEWip7eT.slCZuj6tyIFwbzlOYlsAIpsrxX0lYZO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34'),
(7, 'Administrator', 'administrator@plusmagi.internal', NULL, '$2y$12$JlCf2KwswvheUeUXrPI0nexWTcORrty2jEV7NBb/C4mjM7tdddxXC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 05:15:34', '2024-12-16 05:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `vessels`
--

CREATE TABLE `vessels` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'Organization ID',
  `organization_id` tinyint(3) UNSIGNED NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Enable',
  `title` varchar(256) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vessels`
--

INSERT INTO `vessels` (`id`, `organization_id`, `enable`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'MSC Irina Class', '2024-12-11 23:26:03', '2024-12-11 23:26:03'),
(2, 2, 1, 'OOCL G Class (2023)', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(3, 3, 1, 'ONE I Class', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(4, 4, 1, 'MSC Tessa Class', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(5, 5, 1, 'Evergreen A Class (2022)', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(6, 6, 1, 'Evergreen A Class (2021)', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(7, 7, 1, 'HMM Algeciras Class (Daewoo)', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(8, 8, 1, 'HMM Algeciras Class (SHI)', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(9, 9, 1, 'MSC Gülsün Class', '2024-12-11 23:26:04', '2024-12-11 23:26:04'),
(10, 10, 1, 'Hapag Lloyd Berlin Express Class (2023)', '2024-12-11 23:26:04', '2024-12-11 23:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `service_lines`
--
ALTER TABLE `service_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_lines_vessels`
--
ALTER TABLE `service_lines_vessels`
  ADD UNIQUE KEY `unique_service_line_vessel` (`service_line_id`,`vessel_id`),
  ADD KEY `fk_service_lines_vessels_vessels` (`vessel_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `support_engineer`
--
ALTER TABLE `support_engineer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tickets_categories` (`category_id`),
  ADD KEY `fk_tickets_users_created_by` (`created_by`),
  ADD KEY `fk_tickets_users_deleted_by` (`deleted_by`),
  ADD KEY `fk_tickets_users_support_engineer_id` (`support_engineer_id`),
  ADD KEY `fk_tickets_users_updated_by` (`updated_by`),
  ADD KEY `fk_tickets_vessels` (`vessel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vessels`
--
ALTER TABLE `vessels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vessels_organizations` (`organization_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Category ID', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Organization ID', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_lines`
--
ALTER TABLE `service_lines`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Service Line', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support_engineer`
--
ALTER TABLE `support_engineer`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User ID';

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Case ID', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vessels`
--
ALTER TABLE `vessels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Organization ID', AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_lines_vessels`
--
ALTER TABLE `service_lines_vessels`
  ADD CONSTRAINT `fk_service_lines_vessels_service_lines` FOREIGN KEY (`service_line_id`) REFERENCES `service_lines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_service_lines_vessels_vessels` FOREIGN KEY (`vessel_id`) REFERENCES `vessels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_tickets_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_tickets_users_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tickets_users_deleted_by` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tickets_users_support_engineer_id` FOREIGN KEY (`support_engineer_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tickets_users_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tickets_vessels` FOREIGN KEY (`vessel_id`) REFERENCES `vessels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vessels`
--
ALTER TABLE `vessels`
  ADD CONSTRAINT `fk_vessels_organizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
