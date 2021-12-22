-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 03:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `suggestion`, `created_at`, `updated_at`) VALUES
(1, 'Contact One', 'contactone@gmil.com', '09999999999', 'Want to know', 'Suggestion', '2021-12-19 11:50:10', '2021-12-19 11:50:10'),
(2, 'Contact Two', 'contacttwo@gmail.com', '09999999999', 'Want To Know', 'Suggestion Suggestion', '2021-12-19 12:07:05', '2021-12-21 10:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Customer One', '09777777777', 'Yangon', '2021-12-17 09:50:09', '2021-12-17 09:50:09'),
(2, 'Customer One', '09777777777', 'Yangon', '2021-12-17 10:06:50', '2021-12-17 10:06:50'),
(4, 'Company Two', '09777777777', 'Mandalay', '2021-12-17 10:12:03', '2021-12-17 10:12:03'),
(5, 'Customer Five', '09777777777', 'Mogkok', '2021-12-17 10:17:41', '2021-12-17 10:17:41'),
(6, 'Customer Five', '09777777777', 'Monya', '2021-12-17 10:20:44', '2021-12-17 10:20:44'),
(7, 'Customer Seven', '09777777777', 'Yangon', '2021-12-17 10:56:46', '2021-12-17 10:56:46'),
(8, 'Customer Eight', '09777777777', 'Yangon', '2021-12-17 11:02:05', '2021-12-17 11:02:05'),
(9, 'Company Nine', '09777777777', 'Yangon', '2021-12-17 11:04:52', '2021-12-17 11:04:52'),
(10, 'Company Nine', '09777777777', 'Yangon', '2021-12-17 11:24:18', '2021-12-17 11:24:18'),
(11, 'Customer Ten', '09777777777', 'Yangon', '2021-12-17 11:25:41', '2021-12-17 11:25:41'),
(12, 'Customer Eleven', '09777777777', 'Shwebo', '2021-12-18 07:53:27', '2021-12-18 07:53:27'),
(13, 'Customer Twelve', '09777777777', 'Shwebo', '2021-12-18 08:47:48', '2021-12-18 08:47:48'),
(14, 'Customer Thirteen', '09999999999', 'Mandalay', '2021-12-19 08:53:10', '2021-12-19 08:53:10'),
(15, 'Customer Fourteen', '09999999999', 'Mandalay', '2021-12-19 09:50:30', '2021-12-19 09:50:30'),
(16, 'Customer Fifteen', '09999999999', 'Shwebo', '2021-12-19 10:04:49', '2021-12-19 10:04:49'),
(17, 'Customer Sixteen', '09999999999', 'Sagaing', '2021-12-21 10:59:44', '2021-12-21 10:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`id`, `image`, `title`, `qty`, `price`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '198776683boy-short-shirt.jpg', 'Product Six', 1, 20000, 1, '2021-12-17 09:50:10', '2021-12-17 09:50:10'),
(2, '1588398505boy-short-shirt1.jpg', 'Product Seven', 1, 20000, 1, '2021-12-17 09:50:10', '2021-12-17 09:50:10'),
(3, '1373303076girl-shirt2.jpg', 'Product Thirteen', 3, 8000, 2, '2021-12-17 10:06:50', '2021-12-17 10:06:50'),
(7, '912264490girl-long-shirt.jpg', 'Product Twenty', 1, 15000, 4, '2021-12-17 10:12:03', '2021-12-17 10:12:03'),
(8, '1517355076girl-long-shirt1.jpg', 'Product TwentyOne', 3, 15000, 4, '2021-12-17 10:12:04', '2021-12-17 10:12:04'),
(9, '219397574girl-one-set8.jpg', 'Product Eighteen', 1, 15000, 5, '2021-12-17 10:17:41', '2021-12-17 10:17:41'),
(10, '1189182336girl-long-shirt4.jpg', 'Product TwentyFour', 1, 15000, 7, '2021-12-17 10:56:46', '2021-12-17 10:56:46'),
(11, '1193269509girl-one-set9.jpg', 'Product Nineteen', 1, 18000, 8, '2021-12-17 11:02:05', '2021-12-17 11:02:05'),
(12, '1373303076girl-shirt2.jpg', 'Product Thirteen', 1, 8000, 9, '2021-12-17 11:04:52', '2021-12-17 11:04:52'),
(13, '717513189girl-shirt16.jpg', 'Product Fourteen', 1, 8000, 9, '2021-12-17 11:04:52', '2021-12-17 11:04:52'),
(14, '1517355076girl-long-shirt1.jpg', 'Product TwentyOne', 1, 15000, 11, '2021-12-17 11:25:41', '2021-12-17 11:25:41'),
(15, '1447009136girl-shirt.jpg', 'Product Twelve', 1, 7000, 12, '2021-12-18 07:53:27', '2021-12-18 07:53:27'),
(16, '717513189girl-shirt16.jpg', 'Product Fourteen', 1, 8000, 12, '2021-12-18 07:53:27', '2021-12-18 07:53:27'),
(17, '1915359661boy-shirt1.jpg', 'Product One', 2, 15000, 13, '2021-12-18 08:47:49', '2021-12-18 08:47:49'),
(18, '1021407115boy-shirt3.jpg', 'Product Three', 2, 17000, 13, '2021-12-18 08:47:49', '2021-12-18 08:47:49'),
(19, '1517355076girl-long-shirt1.jpg', 'Product TwentyOne', 1, 15000, 14, '2021-12-19 08:53:11', '2021-12-19 08:53:11'),
(20, '1676300133girl-long-shirt2.jpg', 'Product TwentyTwo', 1, 15000, 14, '2021-12-19 08:53:11', '2021-12-19 08:53:11'),
(21, '339671880boy-long-shirt.jpg', 'Product Nine', 1, 15000, 15, '2021-12-19 09:50:30', '2021-12-19 09:50:30'),
(22, '219397574girl-one-set8.jpg', 'Product Eighteen', 1, 15000, 16, '2021-12-19 10:04:49', '2021-12-19 10:04:49'),
(23, '1373303076girl-shirt2.jpg', 'Product Thirteen', 1, 8000, 16, '2021-12-19 10:04:49', '2021-12-19 10:04:49'),
(24, '1373303076girl-shirt2.jpg', 'Product Thirteen', 1, 8000, 17, '2021-12-21 10:59:45', '2021-12-21 10:59:45'),
(25, '1676300133girl-long-shirt2.jpg', 'Product TwentyTwo', 1, 15000, 17, '2021-12-21 10:59:45', '2021-12-21 10:59:45');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_09_182428_create_products_table', 2),
(6, '2021_12_16_184646_create_customers_table', 3),
(7, '2021_12_16_191347_create_customer_orders_table', 4),
(8, '2021_12_19_022759_create_contacts_table', 5);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `image`, `item_type`, `item_code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Product One', 15000, '1915359661boy-shirt1.jpg', 'Boy-Tshirt', 'bs001', 'Boy T-Shirt / Medium Size / bs001', '2021-12-11 05:42:24', '2021-12-11 05:42:24'),
(7, 'Product Two', 15000, '319081315boy-shirt2.jpg', 'Boy-Tshirt', 'bs002', 'Boy T-Shirt / Medium Size/ bs002', '2021-12-11 05:45:06', '2021-12-11 05:45:06'),
(8, 'Product Three', 17000, '1021407115boy-shirt3.jpg', 'Boy-Tshirt', 'bs003', 'Boy T-Shirt / Large Size / bs003', '2021-12-11 05:47:28', '2021-12-11 05:47:28'),
(9, 'Product Four', 17000, '1005031701boy-shirt4.jpg', 'Boy-Tshirt', 'bs004', 'Boy T-Shirt / Large Size / bs004', '2021-12-11 05:48:34', '2021-12-11 05:48:34'),
(10, 'Product Five', 17000, '1961443362boy-shirt5.jpg', 'Boy-Tshirt', 'bs005', 'Boy T-Shirt / Large Size / bs005', '2021-12-11 05:49:31', '2021-12-11 05:49:31'),
(11, 'Product Six', 20000, '198776683boy-short-shirt.jpg', 'Boy-Short-Shirt', 'bss001', 'Boy Short-Shirt / Medium Size / bss001', '2021-12-11 05:51:02', '2021-12-11 05:51:02'),
(12, 'Product Seven', 20000, '1588398505boy-short-shirt1.jpg', 'Boy-Short-Shirt', 'bss002', 'Boy Short-Shirt / Medium Size / bss002', '2021-12-11 05:51:52', '2021-12-11 05:51:52'),
(13, 'Product Eight', 18000, '1955235920boy-short-shirt9.jpg', 'Boy-Short-Shirt', 'bss003', 'Boy Short-Shirt / Medium Size / bss003', '2021-12-11 05:54:39', '2021-12-11 05:54:39'),
(14, 'Product Nine', 15000, '339671880boy-long-shirt.jpg', 'Boy-Long-Shirt', 'bls001', 'Boy Long-Shirt / Large Size / bls001', '2021-12-11 05:55:48', '2021-12-11 05:55:48'),
(15, 'Product Ten', 20000, '886690796boy-long-shirt5.jpg', 'Boy-Long-Shirt', 'bls002', 'Boy Long-Shirt / Large Size / bls002', '2021-12-11 05:56:34', '2021-12-11 05:56:34'),
(16, 'Product Eleven', 15000, '1427450580boy-long-shirt9.jpg', 'Boy-Long-Shirt', 'bls003', 'Boy Long-Shirt / Large Size / bls003', '2021-12-11 05:57:20', '2021-12-11 05:57:20'),
(17, 'Product Twelve', 7000, '1447009136girl-shirt.jpg', 'Girl-Tshirt', 'gs001', 'Girl T-Shirt / Medium / gs001', '2021-12-11 05:58:32', '2021-12-11 05:58:32'),
(18, 'Product Thirteen', 8000, '1373303076girl-shirt2.jpg', 'Girl-Tshirt', 'gs002', 'Girl T-Shirt / Medium / gs002', '2021-12-11 05:59:33', '2021-12-11 05:59:33'),
(19, 'Product Fourteen', 8000, '717513189girl-shirt16.jpg', 'Girl-Tshirt', 'gs003', 'Girl T-Shirt / Medium / gs003', '2021-12-11 06:00:16', '2021-12-11 06:00:16'),
(20, 'Product Fifteen', 7000, '1825301270girl-shirt7.jpg', 'Girl-Tshirt', 'gs004', 'Girl T-Shirt / Medium / gs004', '2021-12-11 06:01:07', '2021-12-11 06:01:07'),
(21, 'Product Sixteen', 7000, '1197614101girl-shirt4.jpg', 'Girl-Tshirt', 'gs005', 'Girl T-Shirt / Medium / gs005', '2021-12-11 06:01:42', '2021-12-11 06:01:42'),
(22, 'Product Seventeen', 15000, '810816054girl-one-set.jpg', 'Girl-Dress', 'gd001', 'Girl-Dress One Set / Medium Size /gd001', '2021-12-11 06:02:52', '2021-12-11 06:02:52'),
(23, 'Product Eighteen', 15000, '219397574girl-one-set8.jpg', 'Girl-Dress', 'gd002', 'Girl-Dress One Set / Medium Size /gd002', '2021-12-11 06:03:25', '2021-12-11 06:03:25'),
(24, 'Product Nineteen', 18000, '1193269509girl-one-set9.jpg', 'Girl-Dress', 'gd003', 'Girl-Dress One Set / Medium Size /gd003', '2021-12-11 06:04:15', '2021-12-11 06:04:15'),
(25, 'Product Twenty', 15000, '912264490girl-long-shirt.jpg', 'Girl-Long-Shirt', 'gls001', 'Girl-Long-Shirt / Medium Size / gls001', '2021-12-11 06:05:46', '2021-12-11 06:05:46'),
(26, 'Product TwentyOne', 15000, '1517355076girl-long-shirt1.jpg', 'Girl-Long-Shirt', 'gls002', 'Girl-Long-Shirt / Medium Size / gls002', '2021-12-11 06:06:19', '2021-12-11 06:06:19'),
(27, 'Product TwentyTwo', 15000, '1676300133girl-long-shirt2.jpg', 'Girl-Long-Shirt', 'gls003', 'Girl-Long-Shirt / Medium Size / gls003', '2021-12-11 06:07:19', '2021-12-11 06:07:19'),
(28, 'Product TwentyThree', 15000, '2116837061girl-long-shirt3.jpg', 'Girl-Long-Shirt', 'gls004', 'Girl-Long-Shirt / Medium Size / gls004', '2021-12-11 06:07:50', '2021-12-11 06:07:50'),
(29, 'Product TwentyFour', 15000, '1189182336girl-long-shirt4.jpg', 'Girl-Long-Shirt', 'gls005', 'Girl-Long-Shirt / Medium Size / gls005', '2021-12-11 06:08:32', '2021-12-11 06:08:32'),
(30, 'Boy Short Shirt', 20000, '1997182261boy-short-shirt6.jpg', 'Boy-Short-Shirt', 'bss004', 'Boy Short-Shirt / Medium Size / bss004', '2021-12-17 12:27:54', '2021-12-17 12:27:54'),
(31, 'Boy Short Shirt', 20000, '276681848boy-short-shirt3.jpg', 'Boy-Short-Shirt', 'bss005', 'Boy Short-Shirt / Medium Size / bss005', '2021-12-17 12:28:36', '2021-12-17 12:28:36'),
(32, 'Boy Long Shirt', 15000, '264583021boy-long-shirt7.jpg', 'Boy-Long-Shirt', 'bls004', 'Boy Long-Shirt / Large Size / bls004', '2021-12-17 12:30:07', '2021-12-17 12:30:07'),
(33, 'Boy Long Shirt', 15000, '1393351904boy-long-shirt8.jpg', 'Boy-Long-Shirt', 'bls005', 'Boy Long-Shirt / Large Size / bls005', '2021-12-17 12:31:31', '2021-12-17 12:31:31'),
(34, 'Girl Dress', 15000, '1282666737girl-one-set1.jpg', 'Girl-Dress', 'gd004', 'Girl-Dress One Set / Medium Size /gd004', '2021-12-17 12:32:58', '2021-12-17 12:32:58'),
(35, 'Girl Dress', 15000, '1348621068girl-one-set2.jpg', 'Girl-Dress', 'gd005', 'Girl-Dress One Set / Medium Size /gd005', '2021-12-17 12:33:29', '2021-12-17 12:33:29');

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
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$buKUoT5I3NLnJzszFAz2EeiX6t1W0RORW/Kvk2yWGioyaAYga/xoG', '353859868testimonials-3.jpg', NULL, '2021-12-09 03:57:54', '2021-12-21 09:34:44'),
(3, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$a2V0ZrskL5FfMbmhaa3umeISFK4wFsdIqwarR2I9o2M1b9O9iVFya', '210414492testimonials-2.jpg', NULL, '2021-12-12 11:32:41', '2021-12-13 09:54:24'),
(4, 'admin3', 'admin3@gmail.com', NULL, '$2y$10$FppxeT4dxy60d8aQOg.mweewsdEeTp2j5RJXhYSM3NvNO8oZEDTPK', '387050894portfolio-4.jpg', NULL, '2021-12-12 12:05:29', '2021-12-12 12:05:29'),
(5, 'admin4', 'admin4@gmail.com', NULL, '$2y$10$Vdw8EvXT2W.mFi/ho0oqI.uKkAgfLYtSspq6aC/87D7/5lS5DWujW', '1280569734portfolio-1.jpg', NULL, '2021-12-13 09:11:28', '2021-12-13 09:11:28'),
(6, 'admin6', 'admin6@gmail.com', NULL, '$2y$10$urm12k8vNg9DKPTz55Gmv.M0FTg9YR0tujPhQ.wP/L33BAOk4mnqS', '2007451599portfolio-2.jpg', NULL, '2021-12-13 09:15:32', '2021-12-13 09:15:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
