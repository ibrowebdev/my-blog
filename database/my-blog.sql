-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 12:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-blog`
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:1;', 1739020295),
('c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1739020295;', 1739020295);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(6, 'Science', '2025-01-04 14:06:07', '2025-01-04 14:06:07'),
(7, 'Technology', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 5, 'hi', '2025-02-08 12:08:52', '2025-02-08 12:08:52'),
(2, 5, 'Ok', '2025-02-08 12:09:05', '2025-02-08 12:09:05');

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
(4, '2025_01_03_140559_create_posts_table', 1),
(5, '2025_01_03_140619_create_comments_table', 1),
(6, '2025_01_04_132739_create_categories_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(7, 5, 7, 'Hello World', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores excepturi molestiae tenetur ipsa amet dolorem sunt minima beatae rem. Necessitatibus natus, debitis accusamus itaque suscipit ut id quis minus tempora architecto aspernatur hic nostrum fugiat provident pariatur! Sapiente nobis tempora unde doloribus distinctio facilis, enim, nisi sit dolores alias vitae. Reiciendis explicabo dolores accusantium dicta commodi maxime aperiam. Expedita, libero? Nisi exercitationem repellendus neque distinctio deleniti libero esse ipsam porro, quis voluptatibus voluptates dolor placeat vitae quam voluptate sunt sint ut est fugiat corrupti aliquid eaque ullam? Temporibus sint debitis velit officiis harum numquam dolores, delectus maxime! Unde est at inventore porro, eius nam voluptatum maiores. Aliquid numquam reiciendis dolor voluptatibus omnis maiores voluptas modi et vero error vitae nihil velit, necessitatibus eum, enim praesentium assumenda obcaecati quae doloremque beatae soluta facilis. Ipsa excepturi dolorum eveniet reiciendis eaque, ut ratione facere odit voluptatibus minima tenetur molestiae sit eum repudiandae esse magnam ea repellendus reprehenderit perferendis sapiente. Omnis nihil voluptas adipisci quisquam sequi at quidem qui! Eligendi nam maiores ea mollitia porro iure odio alias magni accusantium minus, esse molestiae quidem illo amet eius enim, quos fuga qui sint fugit minima ducimus. Dolorem id modi magni quis fugit, tempora doloribus odio!', 'postimages/nrW7e0W6wP6cvx4e4veje4zsqzNImbjBqi6sOnu3.jpg', '2025-01-05 16:26:34', '2025-01-05 16:26:34'),
(8, 4, 7, 'The Realm Of Life', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores excepturi molestiae tenetur ipsa amet dolorem sunt minima beatae rem. Necessitatibus natus, debitis accusamus itaque suscipit ut id quis minus tempora architecto aspernatur hic nostrum fugiat provident pariatur! Sapiente nobis tempora unde doloribus distinctio facilis, enim, nisi sit dolores alias vitae. Reiciendis explicabo dolores accusantium dicta commodi maxime aperiam. Expedita, libero? Nisi exercitationem repellendus neque distinctio deleniti libero esse ipsam porro, quis voluptatibus voluptates dolor placeat vitae quam voluptate sunt sint ut est fugiat corrupti aliquid eaque ullam? Temporibus sint debitis velit officiis harum numquam dolores, delectus maxime! Unde est at inventore porro, eius nam voluptatum maiores. Aliquid numquam reiciendis dolor voluptatibus omnis maiores voluptas modi et vero error vitae nihil velit, necessitatibus eum, enim praesentium assumenda obcaecati quae doloremque beatae soluta facilis. Ipsa excepturi dolorum eveniet reiciendis eaque, ut ratione facere odit voluptatibus minima tenetur molestiae sit eum repudiandae esse magnam ea repellendus reprehenderit perferendis sapiente. Omnis nihil voluptas adipisci quisquam sequi at quidem qui! Eligendi nam maiores ea mollitia porro iure odio alias magni accusantium minus, esse molestiae quidem illo amet eius enim, quos fuga qui sint fugit minima ducimus. Dolorem id modi magni quis fugit, tempora doloribus odio!', 'postimages/v0JSXokruPwJMBeat734MJHmbPewC5Vf6haHL5LD.jpg', '2025-01-05 16:26:34', '2025-01-05 16:26:34');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XBDQ71ScEGuo10QqzkGYZub32FU4ajFIySVMVJOH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOHNrUXNscEx2T3NJY0VabVp0djVkdVQ0eWVXNDc4d1RyU0pqWHdtOSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2F1dGhvci9kYXNoYm9hcmQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2F1dGhvciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1739136621);

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
(4, 'Yusuf Ibrohim', 'aa@a.a', '2025-01-04 14:06:07', '$2y$12$wX.zyviXM.Q3UjEzRSkYYeiCiQsrmXfsnecA/QtDFvLVKbCKzXENS', NULL, '2025-01-04 14:06:07', '2025-01-04 14:06:07'),
(5, 'Abu Dardaa', 'admin@gmail.com', '2025-01-04 14:06:07', '$2y$12$cZFIhg/H7fPxBzIFs1RD/eIMltKj1Ot9x.bgYGEu4p0lHGhgei6XW', NULL, '2025-01-05 16:26:34', '2025-01-05 16:26:34'),
(6, 'waziri', 'waziri@waziri.com', NULL, '$2y$12$P9w9OhdXWArGBoFCFUCQ2.thqHNsP5U6vFGzAqj0S6n.fd7X0JTsi', NULL, '2025-02-08 12:09:45', '2025-02-08 12:09:45'),
(7, 'www', 'admin@gmail.comsddd', NULL, '$2y$12$MiobO5.c.oXmXMh7LdIUneUAbkJOQIm0i7oPqE59Ex3CF0ZHikynK', NULL, '2025-02-09 09:33:28', '2025-02-09 09:33:28'),
(8, 'www', 'admin@gmail.comsdds', NULL, '$2y$12$LW5jGTSsAiTMGB6igRqUteDXmEeL7l9c8Pk49T8BAwwfnvsiROTya', NULL, '2025-02-09 09:56:55', '2025-02-09 09:56:55');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
