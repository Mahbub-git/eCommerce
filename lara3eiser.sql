-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 11:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara3eiser`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_desc`, `brand_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Acer', 'This handy tool helps you create dummy text for all your layout needs.', 'admin/brand-images/Marketing-Strategy-of-Acer-2.jpg', 1, '2019-11-23 10:02:45', '2019-11-24 03:42:34'),
(3, 'Aarong', 'This handy tool helps you create dummy text for all your layout needs.', 'admin/brand-images/Aarong.png', 1, '2019-11-23 10:03:20', '2019-11-23 10:03:20'),
(4, 'Casio', 'This handy tool helps you create dummy text for all your layout needs.', 'admin/brand-images/download.png', 1, '2019-11-23 10:03:55', '2019-11-23 10:03:55'),
(5, 'Seiko', 'This handy tool helps you create dummy text for all your layout needs.', 'admin/brand-images/Seiko.png', 1, '2019-11-23 10:04:22', '2019-11-23 10:04:22'),
(6, 'Samsung', 'Samsung Samsung Samsung Samsung Samsung', 'admin/brand-images/00000001562.png', 1, '2019-11-24 01:51:56', '2019-11-24 04:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_desc`, `cat_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/a1.jpg', 1, '2019-11-23 07:08:15', '2019-11-23 07:10:19'),
(2, 'Dress', 'This handy tool helps you create Dress text for all your layout needs', 'admin/category-images/e41223fe87d34110e044015e980a06f1_350x350.jpg', 1, '2019-11-23 07:08:43', '2019-11-23 07:08:43'),
(3, 'Watch', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/71gdBQP+qGL._UL1500_.jpg', 1, '2019-11-23 07:09:31', '2019-11-23 07:09:31'),
(4, 'Electronics', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/f.jpg', 1, '2019-11-23 07:09:57', '2019-11-23 07:09:57'),
(5, 'Dress', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/41dQGHqOLFL._SY445_QL70_.jpg', 1, '2019-11-23 07:11:04', '2019-11-23 07:11:04'),
(6, 'Watch', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/71QHGTKiwAL._UX342_.jpg', 1, '2019-11-23 07:11:50', '2019-11-23 07:11:50'),
(7, 'Bags', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/910zU0vyBrL._UL1500_.jpg', 1, '2019-11-23 07:12:19', '2019-11-23 07:12:19'),
(8, 'Watch', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/jewel-mr-lr1010-white-ch-500x500.jpg', 1, '2019-11-23 07:13:15', '2019-11-23 07:13:15'),
(9, 'Bags', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/356666-4520-666653-2-detail.jpg', 1, '2019-11-23 07:13:46', '2019-11-23 07:13:46'),
(10, 'Dress', 'This handy tool helps you create dummy text for all your layout needs', 'admin/category-images/81u83sifAnL._SX522._SX._UX._SY._UY_.jpg', 1, '2019-11-23 07:14:20', '2019-11-23 07:14:20');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_19_131048_create_categories_table', 1),
(4, '2019_11_23_125358_create_brands_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nisha', 'nisha@gmail.com', NULL, '$2y$10$oeiePSLqHKToRgyOkQsaI.NfubzC9ZNZtyOeHzCcYkRVVRiE/RiMe', NULL, '2019-11-23 07:06:11', '2019-11-23 07:06:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
