-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 08:38 PM
-- Server version: 10.4.6-MariaDB
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
-- Database: `tfp_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `service_id`, `provider_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 3, 'this is first comment', '2021-01-03 04:06:39', '2021-01-03 04:06:39'),
(2, 2, 2, 4, 'Ami $9 deta chai', '2021-01-03 07:43:03', '2021-01-03 07:43:03'),
(3, 3, 2, 3, '1k hfghghnghgnhgnhghg', '2021-01-03 08:16:16', '2021-01-03 08:16:16'),
(4, 5, 2, 5, 'plz $90', '2021-01-03 12:09:20', '2021-01-03 12:09:20'),
(5, 4, 2, 6, 'Vai 150 tk raka jai na', '2021-01-03 13:30:47', '2021-01-03 13:30:47'),
(6, 4, 2, 6, 'Ok vai amr order ta confirm koren', '2021-01-03 13:31:49', '2021-01-03 13:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `replay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `comment_id`, `provider_id`, `replay`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'provider replay', '2021-01-03 05:45:06', '2021-01-03 05:45:06'),
(2, 1, 2, 'okkkk', '2021-01-03 07:51:24', '2021-01-03 07:51:24'),
(3, 2, 2, 'Hello Shovon', '2021-01-03 12:00:36', '2021-01-03 12:00:36'),
(4, 3, 2, 'Why?', '2021-01-03 12:01:02', '2021-01-03 12:01:02'),
(5, 4, 2, 'Sorry sir', '2021-01-03 12:09:47', '2021-01-03 12:09:47'),
(6, 5, 2, 'Sryyy via, 160tk raka jibo', '2021-01-03 13:31:18', '2021-01-03 13:31:18'),
(7, 6, 2, 'Thank you bro', '2021-01-03 13:32:11', '2021-01-03 13:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_12_28_035639_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(7, '2020_12_28_044005_create_services_table', 3),
(9, '2020_12_31_133803_create_comments_table', 4),
(10, '2021_01_01_085814_create_comment_replies_table', 4),
(11, '2021_01_03_121351_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `provider_id`, `service_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 3, '1', '2021-01-03 08:03:21', '2021-01-03 13:34:43'),
(3, 2, 5, 5, '1', '2021-01-03 12:11:39', '2021-01-03 12:41:48'),
(4, 2, 4, 6, '1', '2021-01-03 13:32:14', '2021-01-03 13:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'active', '2021-01-02 23:37:53', '2021-01-02 23:37:53'),
(2, 'porvider', 'active', '2021-01-02 23:38:22', '2021-01-02 23:38:22'),
(3, 'user', 'active', '2021-01-02 23:51:34', '2021-01-02 23:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_approve` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `is_approve`, `provider_id`, `title`, `description`, `unit_price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '0', 2, 'title updated', 'this is title', 100.00, 'assets/provider/service/1609658781prothomalo.jpg', 'inactive', '2021-01-03 01:26:21', '2021-01-03 08:15:58'),
(3, '1', 2, 'Phone Servicing', 'Mobile Phone Repair & Services in Ahmedabad /Mobile Phone Repair & Services in Bangalore /Mobile Phone Repair & Services in Chandigarh /Mobile Phone Repair & Services in Chennai /Mobile Phone Repair & Services in Coimbatore /Mobile Phone Repair & Services in Delhi /Mobile Phone Repair & Services in Ernakulam /Mobile Phone Repair & Services in Goa /Mobile Phone Repair & Services in Hyderabad /Mobile Phone Repair & Services in Indore /Mobile Phone Repair & Services in Jaipur /Mobile Phone Repair & Services in Kolkata /Mobile Phone Repair & Services in Mumbai /Mobile Phone Repair & Services in Mysore /Mobile Phone Repair & Services in Nagpur /Mobile Phone Repair & Services in Nashik /Mobile Phone Repair & Services in Pune /Mobile Phone Repair & Services in Surat /Mobile Phone Repair & Services in Vadodara /Mobile Phone Repair & Services in Vizag /Latest Reviews', 120.00, 'assets/provider/service/1609682971oppo-reno4-5g-blue.jpg', 'active', '2021-01-03 08:09:31', '2021-01-03 08:09:54'),
(4, '1', 2, 'Latop Servicing', 'Dell Vostro 14 3405 Laptop comes with Ryzen 3 3250U (4MB CPU Cache, 2.60GHz up to 3.50GHz), 4GB 2666 MHz DDR4 RAM, 1TB 5400rpm SATA HDD, AMD Radeon Vega 8 Graphics and Windows 10 Home. This Laptop is featured with 14\" HD (1366x768) Anti-glare Display, Battery 3 Cell 42 Whr, Battery Type Integrated, Power Adapter 45 W AC adapter, Adapter Type External. Here, Ethernet RJ-45, WiFi 802.11 ac (1x1), Bluetooth Network & Connectivity are also available. In this Laptop, It is also has Multimedia Card Slot x 1, SD Media Card Reader, 1 x USB2.0, 1 x USB 3.2 Gen 1 Type-A, Headphone Port Combo, Microphone Port Combo with Security Lock Slot 1 x Wedge-shaped lock slot and Ports are also available. This new Dell Vostro 14 3405 Laptop has 03 years of warranty.', 200.00, 'assets/provider/service/1609683042isometric-labtop-computer-isometric-labtop-d-computer-notebook-blank-copy-space-screen-vector-illustration-technology-159799906.jpg', 'active', '2021-01-03 08:10:42', '2021-01-03 08:14:49'),
(5, '1', 2, 'DVD Servicing', 'SATA Half-Height internal DVD+R / DVD+RW / DVD-R / DVD-RW / DVD+R9/ DVD-R9/ DVD-RAM/DVD-ROM / CD-R/ CD-RW / CD-ROM combination drive\r\nSupport Double Layer DVD+/- R9 Recording FunctionSMART-BURN avoiding Buffer Under Run error, Automatically adjusting writing strategy & walking OPC to provide the best burning qualitySMART-X function adjusts CD-DA / VCD / DVD data extraction to a fastest allowable speed according to both data request rate from host and disk qualityBS system reduce vibration and noise during recording and reading.Support Fixed Packet, Variable Packet, TAO, SAO, DAO, Random Access Write, Incremental, sequential recording, restricted overwrite, Layer Jump recording, Raw Mode Burning & Over-Burn\r\nDVD read compliant: DVD single/dual layer (PTP/OTP), DVD-R(3.9GB/4.7GB), DVD-R multi-borders, DVD-RAM DVD+R, DVD+R multi-sessions, DVD-RW, and DVD+RW.CD read compliant: CD-DA, CD-ROM, CD-ROM/XA, Photo-CD, Multi-session, Karaoke-CD, Video-CD, CD-I FMV, CD Extra, CD Plus, CD-R, and CD-RW\r\nSupport both 8cm and 12cm disc of CD and DVD family\r\nConform to Orange Book: Part 2 CD-R Volume 1, Part 2 CD-R Volume 2 Multi Speed, Part 3 CD-RW Volume 1 (1x, 2x, and 4x), Part 3 CD-RW Volume2: High Speed, Part 3 CD-RW Volume 3: Ultra Speed.', 100.00, 'assets/provider/service/1609683115dvd106_a_001-unmarked-67705-800x800.jpg', 'active', '2021-01-03 08:11:55', '2021-01-03 08:14:44'),
(6, '1', 2, 'Destop Servicing', 'The exclusiveApple M1 chip comes with 8-core Processor and 8-core GPU 512GB storage. This latest Apple M1 chip designed for a giant leap in CPU, GPU, and machine learning performance. The 8-core CPU featured with up to 3x faster performance to fly through workflows quicker than ever and also the 8-core GPU featured with up to 6x faster graphics for graphics-intensive apps and games; 16-core Neural Engine for advanced machine learning. Here, Advanced cooling system sustains breakthrough performance. It supports Next-generation Wi-Fi 6 (802.11ax Wi-Fi 6 wireless networking IEEE, 802.11a/b/g/n/ac compatible, Bluetooth 5.0 wireless technology) for faster connectivity with Two Thunderbolt / USB 4 ports with support for: DisplayPort, Thunderbolt 3 (up to 40 Gbps), USB 3.1 Gen 2 (up to 10 Gbps), Thunderbolt 2, HDMI, DVI, and VGA supported using adapters (sold separately), Two USB-A ports (up to 5 Gbps), HDMI 2.0 port, Gigabit Ethernet port (configurable to 10Gb Ethernet), 3.5 mm headphone jack and also the macOS Big Sur with a bold new design and major app updates for Safari, Messages, and Maps. This Apple Mac Mini comes with 01 year International warranty', 400.00, 'assets/provider/service/16096832451586093246406016.png', 'active', '2021-01-03 08:14:05', '2021-01-03 12:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$kHx0WHJXzaUM9B2nuuDDlerTreeuUqVq75GzJZEY9m3fYC4BVqiq.', 1, 'active', 'TyxwAt87QmV51erehv3YpXPxJO8vb0f0QvRA80IDqcR8DhBSJstBj0AqaGjr', '2021-01-02 23:52:18', '2021-01-03 07:24:16'),
(2, 'Provider', 'provider@gmail.com', NULL, '$2y$10$5XFAYRyj416C69tuqwB.tOc5ixqcpoftH6p8/F3.cmK6X0mNxV4ny', 2, 'active', NULL, '2021-01-02 23:53:04', '2021-01-03 07:23:58'),
(3, 'Mizanur Rahaman', 'mizanur@gmail.com', NULL, '$2y$10$ReKLKx7Vv.gLhoT9QTBxz.01NszgErtorr4yFbflst6xo/5tAu1Ay', 3, 'active', 'eLyGT178L8lqubIkIAhU6nCQsDkELn3xovwzpQeXQyGOdL8KeLIY99oeUD6a', '2021-01-02 23:53:35', '2021-01-03 07:40:12'),
(4, 'Jahid Hasan Shovon', 'shovon@gmail.com', NULL, '$2y$10$YdOqSpJqEkvQxUnLIuJX1OkiZKfOsetTzh65U6qxZnJyKjDlkrhSi', 3, 'active', NULL, '2021-01-03 07:42:22', '2021-01-03 07:42:22'),
(5, 'Tanjil', 'tanjil@gmail.com', NULL, '$2y$10$B5G1m8ezZOMlqofp/MkQPelTcUJDLj9XLxpThQwlk.vjsse6LwteS', 3, 'active', NULL, '2021-01-03 10:44:40', '2021-01-03 10:44:40'),
(6, 'Jahid Vai', 'jahidvai@gmail.com', NULL, '$2y$10$QYi73jdWgnWp3Si9obtCW.dgqshzykX58Idrm4mGI3ApbUYp5l1Gm', 3, 'active', NULL, '2021-01-03 13:30:25', '2021-01-03 13:30:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_service_id_foreign` (`service_id`),
  ADD KEY `comments_provider_id_foreign` (`provider_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_comment_id_foreign` (`comment_id`),
  ADD KEY `comment_replies_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_provider_id_foreign` (`provider_id`),
  ADD KEY `orders_service_id_foreign` (`service_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_replies_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
