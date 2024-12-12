-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 09:46 AM
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
(4, '2024_12_11_112917_create_organizations_table', 1),
(5, '2024_12_11_142728_create_categories_table', 1),
(6, '2024_12_11_153226_create_vessels_table', 1),
(7, '2024_12_11_161036_create_service_lines_table', 1),
(8, '2024_12_12_065529_create_service_lines_vessels_table', 1),
(9, '2024_12_12_070319_create_support_engineer_table', 1),
(10, '2024_12_12_071111_create_tickets_table', 1);

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
(1, 1, 'FedEx', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(2, 1, 'DHL', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(3, 1, 'UPS', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(4, 1, 'Blue Dart', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(5, 1, 'PostNL', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(6, 1, 'DB Schenker', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(7, 1, 'R + L Carriers', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(8, 1, 'DTDC', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(9, 1, 'TNT', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(10, 1, 'YRC Freight', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(11, 1, 'Royal Mail', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(12, 1, 'Asendia', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(13, 1, 'Flat Export', '2024-12-12 02:45:56', '2024-12-12 02:45:56'),
(14, 1, 'Passport', '2024-12-12 02:45:56', '2024-12-12 02:45:56');

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
(1, 2),
(1, 3),
(1, 4),
(1, 7),
(1, 8),
(2, 1),
(2, 4),
(2, 5),
(2, 6),
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

--
-- Dumping data for table `support_engineer`
--

INSERT INTO `support_engineer` (`user_id`, `level`, `created_at`, `updated_at`) VALUES
(2, 1, '2024-12-11 23:16:36', '2024-12-11 23:16:36'),
(3, 2, '2024-12-11 23:16:36', '2024-12-11 23:16:36'),
(4, 3, '2024-12-11 23:16:36', '2024-12-11 23:16:36'),
(5, 4, '2024-12-11 23:16:36', '2024-12-11 23:16:36');

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

INSERT INTO `tickets` (`id`, `status_id`, `category_id`, `vessel_id`, `service_lines_id`, `support_engineer_id`, `sla_dt`, `descriptions`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, 1, 1, 2, '2024-12-12 08:00:01', 'descriptions about issue', '2024-12-12 01:01:38', NULL, 1, NULL, NULL),
(2, 2, 2, 2, 2, 3, '2024-12-12 08:00:01', 'detail', '2024-12-12 01:01:38', NULL, 1, NULL, NULL);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pitt phunsanit', 'phunsani@gmail.com', '2024-12-11 00:44:57', 'f315ec52b0f080581bc2be4fb602a480', 'zVCvkZD3I3', '2024-12-11 00:44:57', '2024-12-11 00:44:57'),
(2, 'supporter 1', 'supporter1@plusmagi.internal', '2024-12-11 21:52:10', '7f6729f1bcf83e3bb5bb1215c9e9b855', 'remember_token', '2024-12-11 21:52:10', '2024-12-11 21:52:10'),
(3, 'supporter 2', 'supporter2@plusmagi.internal', '2024-12-11 21:57:10', 'fb89cd3050bfa2388c55cdbdd9d71126', 'remember_token', '2024-12-11 21:57:10', '2024-12-11 21:57:10'),
(4, 'supporter 3', 'supporter3@plusmagi.internal', '2024-12-11 21:57:11', '4ad8eb6cdac65347da2f0a4882269091', 'remember_token', '2024-12-11 21:57:11', '2024-12-11 21:57:11'),
(5, 'supporter 4', 'supporter4@plusmagi.internal', '2024-12-11 21:57:11', '59849eef7b512344be7f56eb40297339', 'remember_token', '2024-12-11 21:57:11', '2024-12-11 21:57:11');

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
-- Indexes for table `service_lines`
--
ALTER TABLE `service_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_lines_vessels`
--
ALTER TABLE `service_lines_vessels`
  ADD UNIQUE KEY `service_lines_vessels_vessel_id_service_line_id_unique` (`vessel_id`,`service_line_id`),
  ADD KEY `fk_service_lines` (`service_line_id`);

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
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tickets_categories` (`category_id`),
  ADD KEY `fk_tickets_support_engineer` (`support_engineer_id`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Organization ID', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service_lines`
--
ALTER TABLE `service_lines`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Service Line', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support_engineer`
--
ALTER TABLE `support_engineer`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Case ID', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `fk_service_lines` FOREIGN KEY (`service_line_id`) REFERENCES `service_lines` (`id`),
  ADD CONSTRAINT `fk_vessels` FOREIGN KEY (`vessel_id`) REFERENCES `vessels` (`id`);

--
-- Constraints for table `support_engineer`
--
ALTER TABLE `support_engineer`
  ADD CONSTRAINT `fk_support_engineer_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_tickets_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_tickets_support_engineer` FOREIGN KEY (`support_engineer_id`) REFERENCES `support_engineer` (`user_id`),
  ADD CONSTRAINT `fk_tickets_vessels` FOREIGN KEY (`vessel_id`) REFERENCES `vessels` (`id`);

--
-- Constraints for table `vessels`
--
ALTER TABLE `vessels`
  ADD CONSTRAINT `fk_vessels_organizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
