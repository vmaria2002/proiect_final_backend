-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t4`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'blanditiis magni', 'blanditiis-magni', '2022-08-18 16:34:58', '2022-08-18 16:34:58'),
(2, 'neque et', 'neque-et', '2022-08-18 16:34:58', '2022-08-18 16:34:58'),
(3, 'ut quos', 'ut-quos', '2022-08-18 16:34:58', '2022-08-18 16:34:58'),
(4, 'iste ut', 'iste-ut', '2022-08-18 16:34:58', '2022-08-18 16:34:58'),
(5, 'quisquam aperiam', 'quisquam-aperiam', '2022-08-18 16:34:58', '2022-08-18 16:34:58'),
(6, 'quod autem', 'quod-autem', '2022-08-18 16:34:58', '2022-08-18 16:34:58'),
(7, 'ipsam voluptatem', 'ipsam-voluptatem', '2022-08-18 16:36:48', '2022-08-18 16:36:48'),
(8, 'voluptatem omnis', 'voluptatem-omnis', '2022-08-18 16:36:48', '2022-08-18 16:36:48'),
(9, 'qui nostrum', 'qui-nostrum', '2022-08-18 16:36:48', '2022-08-18 16:36:48'),
(10, 'quasi eos', 'quasi-eos', '2022-08-18 16:36:48', '2022-08-18 16:36:48'),
(11, 'in et', 'in-et', '2022-08-18 16:36:48', '2022-08-18 16:36:48'),
(12, 'est ut', 'est-ut', '2022-08-18 16:36:48', '2022-08-18 16:36:48'),
(13, 'soluta recusandae', 'soluta-recusandae', '2022-08-18 16:38:22', '2022-08-18 16:38:22'),
(14, 'nihil commodi', 'nihil-commodi', '2022-08-18 16:38:22', '2022-08-18 16:38:22'),
(15, 'repellendus minima', 'repellendus-minima', '2022-08-18 16:38:22', '2022-08-18 16:38:22'),
(16, 'perspiciatis aut', 'perspiciatis-aut', '2022-08-18 16:38:22', '2022-08-18 16:38:22'),
(17, 'dolorem culpa', 'dolorem-culpa', '2022-08-18 16:38:22', '2022-08-18 16:38:22'),
(18, 'quisquam aut', 'quisquam-aut', '2022-08-18 16:38:22', '2022-08-18 16:38:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_07_29_085216_create_sessions_table', 1),
(7, '2022_07_29_092927_create_tasks_table', 2),
(8, '2022_07_29_110716_create_roles_table', 3),
(9, '2022_07_29_112006_create_role_user_table', 4),
(10, '2022_07_31_130353_create_permissions_table', 5),
(11, '2022_07_31_130803_create_permission_role_table', 5),
(12, '2022_08_01_092620_create_paginare_table', 5),
(13, '2022_08_01_121745_create_user_verifies_table', 5),
(14, '2022_08_01_132033_create_notifications_table', 5),
(15, '2022_08_03_084907_create_user_verifies_table', 6),
(16, '2022_08_04_220325_create_students_table', 6),
(17, '2022_08_18_181907_create_categories_table', 6),
(18, '2022_08_18_182029_create_products_table', 6),
(19, '2022_08_19_120205_create_products_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paginare`
--

CREATE TABLE `paginare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin_access', NULL, NULL, NULL),
(2, 'user_access', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy S9', 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.', 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1', '698.88', NULL, NULL),
(2, 'Apple iPhone X', 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.', 'https://kwingy.com/wp-content/uploads/2022/05/apple-iphone-x-64gb-space-grey-with-facetime-d85_1-1-600x600-1.jpg', '983.00', NULL, NULL),
(3, 'Google Pixel 2 XL', 'New condition\n ??? No returns, but backed by eBay Money back guarantee', 'https://s13emagst.akamaized.net/products/9595/9594608/images/res_3fe695b0d0f9c47990ffa15a69fda86f.jpg', '675.00', NULL, NULL),
(4, 'LG V10 H900', 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).', 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1', '159.99', NULL, NULL),
(5, 'Huawei Elate', 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.', 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg', '68.00', NULL, NULL),
(6, 'HTC One M10', 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.', 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg', '129.99', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `title`, `name`) VALUES
(1, NULL, NULL, 'admin', 'admin'),
(2, NULL, NULL, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(10, 2),
(11, 2),
(13, 2),
(14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OLvnDeNZwrxnftQuAjiiEyxjFjH26A37wJqnnLPx', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoic0pVRHZNODVjTDVpdnpLTjVUeVBZUmJ4SzZ5bjdrMjRQVUdLS1RpeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE2NjA5MTAxMDU7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkekFMTjk5d1pxdEJpbTBab3pJamgzZURReFZkZlBlbC9XdTFmeTRQckpoZy9SN1lzclZNNjIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHpBTE45OXdacXRCaW0wWm96SWpoM2VEUXhWZGZQZWwvV3UxZnk0UHJKaGcvUjdZc3JWTTYyIjtzOjQ6ImNhcnQiO2E6NDp7aToxO2E6NDp7czo0OiJuYW1lIjtzOjE3OiJTYW1zdW5nIEdhbGF4eSBTOSI7czo4OiJxdWFudGl0eSI7aTo0O3M6NToicHJpY2UiO3M6NjoiNjk4Ljg4IjtzOjU6InBob3RvIjtzOjg1OiJodHRwczovL2kuZWJheWltZy5jb20vMDAvcy9PRFkwV0Rnd01BPT0vei85UzRBQU9Td01aUmFucWI3LyRfMzUuSlBHP3NldF9pZD04OTA0MDAwM0MxIjt9aToyO2E6NDp7czo0OiJuYW1lIjtzOjE0OiJBcHBsZSBpUGhvbmUgWCI7czo4OiJxdWFudGl0eSI7aToxO3M6NToicHJpY2UiO3M6NjoiOTgzLjAwIjtzOjU6InBob3RvIjtzOjg1OiJodHRwczovL2kuZWJheWltZy5jb20vMDAvcy9NVFl3TUZnNU9UVT0vei85VUFBQU9Td0Z5aGFGWFpKLyRfMzUuSlBHP3NldF9pZD04OTA0MDAwM0MxIjt9aTo0O2E6NDp7czo0OiJuYW1lIjtzOjExOiJMRyBWMTAgSDkwMCI7czo4OiJxdWFudGl0eSI7aToyO3M6NToicHJpY2UiO3M6NjoiMTU5Ljk5IjtzOjU6InBob3RvIjtzOjg1OiJodHRwczovL2kuZWJheWltZy5jb20vMDAvcy9OalF4V0RReU5BPT0vei9WRG9BQU9Td2drMVhGMm9vLyRfMzUuSlBHP3NldF9pZD04OTA0MDAwM0MxIjt9aTo1O2E6NDp7czo0OiJuYW1lIjtzOjEyOiJIdWF3ZWkgRWxhdGUiO3M6ODoicXVhbnRpdHkiO2k6MTtzOjU6InByaWNlIjtzOjU6IjY4LjAwIjtzOjU6InBob3RvIjtzOjYxOiJodHRwczovL3NzbGkuZWJheWltZy5jb20vaW1hZ2VzL2cvYUowQUFPU3c3emxhbGRZMi9zLWw2NDAuanBnIjt9fX0=', 1660920456);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Laptop', '2022-07-29 06:55:48', '2022-08-02 11:37:07', NULL),
(2, 'mouse', '2022-07-29 06:56:20', '2022-07-29 08:58:50', '2022-07-29 08:58:50'),
(3, 'tastatura', '2022-07-29 08:59:21', '2022-07-29 08:59:21', NULL),
(4, 'PC', '2022-08-02 09:05:06', '2022-08-02 11:32:27', NULL),
(5, 'telefon Huawei', '2022-08-02 09:06:24', '2022-08-02 11:35:19', '2022-08-02 11:35:19'),
(6, 'imprimanta', '2022-08-02 09:06:34', '2022-08-02 09:06:34', NULL),
(7, 'CD', '2022-08-02 09:08:06', '2022-08-02 11:19:26', NULL),
(8, 'scanner', '2022-08-02 11:34:58', '2022-08-02 11:34:58', NULL),
(9, 'Mouse LG', '2022-08-02 11:37:24', '2022-08-02 11:37:24', NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`, `rol`) VALUES
(1, 'MariaV', 'maria.vasilache02@gmail.com', NULL, '$2y$10$EZiG14ENReOeBaBLtdwsyulSP2nt65TFCt64dyurEqdU/TP7h7bDi', NULL, NULL, NULL, 'o4OJV2qaoEV7154GLi9XiKPmZqgh7N6gWCpsFhRTXVXRwSjKv0YW3H7aw40j', NULL, NULL, '2022-07-29 06:09:43', '2022-08-02 08:53:58', '', 'user'),
(2, 'Emi', 'vasilaaria20@yahoo.com', NULL, 'zaq12wsx', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 08:22:22', '2022-07-29 08:22:22', '', 'user'),
(4, 'Vasilache Maria', 'vasiaria20@yahoo.com', NULL, 'zaq12wsx', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 08:23:48', '2022-07-29 08:23:48', '', 'user'),
(5, 'Iulia', 'iulia20@yahoo.com', NULL, 'zaq12wsx', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 08:31:09', '2022-07-29 08:31:09', '', 'user'),
(9, 'Mada', 'madalinanegrea40@gmail.com', NULL, 'zaq12wsx', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 08:48:59', '2022-07-29 08:48:59', NULL, 'user'),
(10, 'irena', 'irena@yahoo.com', NULL, '$2y$10$cp.xCgRqBwAg96cWfJcI/el0ahsXqSQr29Y52iafPqO8m0QYPLLnu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 09:03:05', '2022-07-29 09:03:05', NULL, 'user'),
(11, 'Maria', 'vasilachemaria20@yahoo.com', NULL, '$2y$10$zALN99wZqtBim0ZozIjh3eDQxVdfPel/Wu1fy4PrJhg/R7YsrVM62', NULL, NULL, NULL, 'jh5TE6soABMShv0iQfyGAHnoXvtxxQFz63zHecJcYCnbAiBMwoAldkMmLW17', NULL, NULL, NULL, '2022-08-02 10:36:21', NULL, 'admin'),
(12, 'Edi', 'edi20@yahoo.com', NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-02 09:18:48', '2022-08-02 09:19:18', NULL, 'user'),
(13, 'adina', 'adina.forna@yahoo.com', NULL, '$2y$10$1hCDwBgFogYe7FAQMuIn7OMgYF9fb6ov93cY2eYbzFLCao06OI59e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-02 09:20:09', '2022-08-02 09:20:09', NULL, 'user'),
(14, 'Daria', 'daria@gmail.com', NULL, '$2y$10$1R4LBkiZvhaIfaCkJS7QS.KVihkY//A6TB0CDYkDhR0KWO0i0M3ka', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-02 11:03:17', '2022-08-02 11:03:17', NULL, 'user'),
(15, 'Ella', 'ella@yahoo.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-02 11:35:47', '2022-08-02 11:35:47', NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_verifies`
--

CREATE TABLE `user_verifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginare`
--
ALTER TABLE `paginare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_verifies`
--
ALTER TABLE `user_verifies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paginare`
--
ALTER TABLE `paginare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_verifies`
--
ALTER TABLE `user_verifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
