-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 07:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec_magicshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'category/beYEdEB7m2oXteoVY7FOCgDwUZlpq3r7IKeB77rO.png', '2024-01-01 22:11:00', '2024-01-01 22:11:00'),
(2, 'Clothes', 'category/dluTqVAKEeh9AdhXHHBd8iKOoMt2NdMPDEWll9G9.png', '2024-01-01 23:13:31', '2024-01-01 23:13:31'),
(3, 'Accessoires', 'category/9pVG5DxvDWJms585Lva155JH5aTUZ1ZQqTxRYmN6.jpg', '2024-01-03 22:37:30', '2024-01-03 22:37:30'),
(4, 'House1212', 'category/E3lC9btZZHcvDUcchYaolKJK7AbL94XGcOOGPRKA.jpg', '2024-01-03 22:37:58', '2024-01-04 00:29:51'),
(5, 'Nature', 'category/a9z45EW25c5diObwDDYVBO65d8Hrsq10nUIkkDVd.jpg', '2024-01-03 22:38:20', '2024-01-03 22:38:20'),
(6, 'Cucci Parfum', 'category/RxQUBtjS52YS9vpfeWajkEohzHXG6moE6AC5rLXq.jpg', '2024-01-04 00:28:18', '2024-01-04 00:28:18');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_28_182714_create_products_table', 1),
(6, '2023_12_31_151844_create_categories_table', 1),
(7, '2023_12_31_153144_update_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('In Stock','Out of Stock') NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `quantity`, `price`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Redmi C12', 'Bonnet ours de dessin animé pour bébé, doux et confortable, bonnets chauds pour nouveau-nés, tout-petits et enfants, garçons et filles, automne et hiver', 10, 1600, 'product/Lr5gPgeypuJIJiQWMzK0J2ugrWp0hJDf8R2SfuL9.png', 'In Stock', NULL, '2024-01-01 22:12:31', '2024-01-02 12:56:10', 1),
(2, 'Iphone PRO 11', 'Téléphone portable iPhone 12 Mini, 64 Go, 128 Go, 256 Go, IOS, A14 5.4, en effet, touristes, 12MP', 19, 2500, 'product/qAhwwydbplGfL3hNE5Dfue08zZnnS3ft89IUCK90.png', 'In Stock', NULL, '2024-01-01 23:15:02', '2024-01-01 23:15:02', 1),
(3, 'Samsung A20', 'Samsung-Téléphone portable Galaxy Note 20 Ultra 5G Note20, N986U1, 128 Go, 256 Go, 512 Go, Octa Core, Snapdragon 865 +, 6.9 \", 12 Go, 108MP et 12MP, eSim,', 200, 3975, 'product/HpT5TNM40hbbsSS5Z3CcaK2puciBii6uGQVmkTib.png', 'In Stock', NULL, '2024-01-01 23:16:30', '2024-01-01 23:16:30', 1),
(4, 'Watch', 'Montre à quartz en acier inoxydable pour homme, bracelet en maille d\'affaires simple, style décontracté, boîtier en alliage, cadran rond, structure universelle', 10, 68, 'product/s2gojFyfJ47oVY2RXcZN6IgqFCKzjQnHd4XQZ0kS.jpg', 'In Stock', NULL, '2024-01-03 16:37:29', '2024-01-03 16:37:29', 2),
(5, 'Cucci Parfum', 'Montre à quartz en acier inoxydable pour homme, bracelet en maille d\'affaires simple, style décontracté, boîtier en alliage, cadran rond, structure universelle, tout général', 2, 130, 'product/H3JyD2v4h0dUzHrvvb8kf1hO1hJVkk85R1e7JqfW.jpg', 'In Stock', NULL, '2024-01-03 16:38:32', '2024-01-03 16:38:32', 2),
(6, 'Sunglasses', 'Montre à quartz en acier inoxydable pour homme, bracelet en maille d\'affaires simple, style décontracté, boîtier en alliage, cadran rond, structure universelle', 10, 50, 'product/PL3IChb1CeJ2wXdeNiBevC1pZZukNnsw8oFgTRuc.jpg', 'In Stock', NULL, '2024-01-03 16:39:32', '2024-01-03 16:39:32', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','desactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$CGJKkGN7Exb5ZmWyBcMn1ONR15z4bey5wgc4jMh5spMk.DELaQ2tS', 'admin', 'active', NULL, NULL, NULL),
(2, 'User', 'user', 'user@gmail.com', NULL, '$2y$12$Nq5bJ7jhoW9.4YUqryRPt..OlTiWhFPzAw8nWh3/YNm914OEzMLee', 'user', 'active', NULL, NULL, NULL),
(3, 'Tasneem', NULL, 'tasneem@gmail.com', NULL, '$2y$12$aLRb5tI33/X1aWu7izNFPuEwOwhq2QPPRiJI.j71FYOb/hX9xEXh6', 'user', 'active', NULL, '2024-01-01 22:57:22', '2024-01-01 22:57:22'),
(4, 'Oussama', NULL, 'oussama@gmail.com', NULL, '$2y$12$f1ZKGbbKdVdg4MjhauKvM.HCfp/.mDak33RUyaQAhXzKbZIR6O/Li', 'user', 'active', NULL, '2024-01-01 23:08:42', '2024-01-01 23:08:42');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
