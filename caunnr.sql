-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caunnr`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `notes`, `slug`, `color`, `image`, `price`, `discount`, `rating`, `model_id`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy S10', '32GB - 128GB', 'Lorem Ipsdjhljcszhhasd asjihgcsakjdhja jagzbcijasdhajdasn hjbscjk', 'samsung-s10', 'black', 'samsung-s10.jpg', '98000', 8.00, 5, 1, '2020-03-08 23:00:00', NULL),
(2, 'iPhone X', '120 gig', 'lkjshl ushdfnkjasnas ijshdfjkhasdfnsa', 'iphonex', 'silver', 'phone-x.png', '220000', 3.00, 5, 2, '2020-03-08 23:00:00', NULL),
(3, 'Mac Book Pro 13', '2018, 500gig, Touchbar, Silver', 'HNbmkdsmnds jsdmndsknkldss kasnsdklsd', 'mac-book-pro-13', 'silver', 'pro13.jpg', '460000', 11.00, 4, 3, '2020-03-08 23:00:00', NULL),
(4, 'Galaxy Note 10+', 'Led View, Sensor Cover', 'Samsung Note 10 LED view cover', 'samsung-note10', 'Black', 'note10.jpg', '380000', 6.00, 5, 1, '2020-03-09 23:00:00', NULL),
(5, 'Galaxy A20s', '6.5Inch (3GB, 64Gig ROM) Android 10', 'Samsung Galaxy A20s 6.5-Inch (3GB,32GB ROM) Android 9.0, (13MP+8MP+5MP)+ 8MP Dual SIM 4000mAh 4G LTE Smartphone - Black (BF19)', 'samsung-a20', 'silver', 'A20s.jpg', '61000', 2.70, 5, 1, '2020-03-09 23:00:00', NULL),
(6, 'Gionee S8s', '5.86\' 32GB ROM, 3GB RAM, 13MP Camera', 'S8s Black - 5.86\' 32GB ROM, 3GB RAM, 13MP Camera, 4G LTE Smartphone With 15 Months Warranty', 'gionee-s8', 'Black', 'S8s.jpg', '39400', 3.90, 5, 4, '2020-03-09 23:00:00', NULL),
(7, 'Galaxy A51', '(4GB,128GB ROM) Android10', 'Galaxy A51 6.5\'\' (4GB,128GB ROM) Android10.0, (48MP +12MP + 5MP + 5MP) + 32MP Dual SIM - Prism Crush Black', 'galaxy-a51', 'Gold', 'galaxya51.jpg', '123000', 11.97, 5, 1, '2020-03-09 23:00:00', NULL),
(8, 'POP 3', '5.7\" FW+ Screen16GB ROM + 1GB RAM', 'POP 3 (BB2) 5.7\" FW+ Screen16GB ROM + 1GB RAM,Android 8.1 Oreo, 8MP + 5MP Camera, 3500mAh, Fingerprint -Sandstone Black', 'pop3', 'Black', 'technopop.jpg', '26900', 4.80, 5, 5, '2020-03-09 23:00:00', NULL),
(9, 'Galaxy A30s', '6.4-Inch (4GB,64GB ROM) Android 9.0', 'Galaxy A30s 6.4-Inch (4GB,64GB ROM) Android 9.0, (25MP+8MP+5MP)+ 16MP Dual SIM 4000mAh 4G LTE - Prism Crush Black', 'galaxy-a30', 'Black', 'A30s.jpg', '103800', 9.43, 5, 1, '2020-03-09 23:00:00', NULL),
(10, 'MacBook Air 13', 'Corei5 - 256GB - Gold', 'MacBook Air 13.3 - Corei5 - 256GB - Gold - New 2019 Model', 'macbook-air-13', 'Gold', 'macbookair.jpg', '489600', 0.89, 5, 6, '2020-03-09 23:00:00', NULL),
(11, 'MacBook Pro 16 2019', 'CoreI7/512GB/16gb - Touch Bar', 'MacBook Pro 16inch  CoreI7/512GB/16gb - Touch Bar - New 2019', 'pro-16', 'Gold', 'macbook-pro-16.jpg', '793000', 6.70, 5, 3, '2020-03-09 23:00:00', NULL),
(12, 'HP Notebook 15', 'Intel Core I3 (8GB RAM, 1TB HDD) 32GB', 'Notebook 15 Intel Core I3 (8GB RAM, 1TB HDD) 32GB Flash+Mouse+USB Light For Keyboard 15.6-Inch Windows 10 Black Colour', 'note-15', 'Black', 'note-15.jpg', '128000', 1.60, 5, 7, '2020-03-09 23:00:00', NULL),
(13, 'HP 255 G6', 'Quad Core (4GB,500GB HDD) 32GB', '255 G6 AMD Quad Core (4GB,500GB HDD) 32GB Flash+Mouse+Fashion Watch Windows 10 Laptop + Free Bag + HP Mouse', 'hp-255', 'Black', 'hp-quadcore.jpg', '96000', 7.63, 5, 7, '2020-03-09 23:00:00', NULL),
(14, 'ThinkPad X390', 'Intel Core I7-8665U 1.9Ghz 512GB SSD 16GB RAM', 'ThinkPad X390 Intel Core I7-8665U 1.9Ghz 512GB SSD 16GB RAM 13 Inch Touch Backlit Win 10 Pro', 'thinkpad', 'Black', 'lenovo-thinkpad.jpg', '521000', 11.78, 5, 8, '2020-03-09 23:00:00', NULL),
(15, 'Lenovo Ideapad', 'Celeron 1TB HDD 4GB RAM', 'Ideapad Intel Celeron 1TB HDD 4GB RAM Windows 10 +USB LIGHT', 'ideapad', 'Black', 'ideapad.jpg', '91000', 7.10, 5, 8, '2020-03-09 23:00:00', NULL),
(16, 'Yoga 310', 'Intel Pentium 11.6\" Touchscreen', 'Yoga 310 Intel Pentium 11.6\" Touchscreen , 4gb RAM, 32gb  EMMC Win 10+Mouse & Usb Led', 'yoga-310', 'Black', 'yoga.jpg', '95400', 9.50, 5, 8, '2020-03-09 23:00:00', NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_05_112544_create_products_table', 1),
(5, '2020_03_06_140956_create_models_table', 1),
(6, '2020_03_06_141935_create_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `name`, `tag_text`, `notes`, `slug`, `logo`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'Samsung mobile phones', NULL, 'samsung', 'phone-x.png', 1, '2020-03-05 23:00:00', NULL),
(2, 'Apple', 'iPhones', NULL, 'iphone', 'phone-x.png', 1, '2020-03-05 23:00:00', NULL),
(3, 'Mac Book Pro', 'Pro 2019 ', '16 inches Mac Book Pro2019', 'mac-book', 'laptop.png', 2, '2020-03-05 23:00:00', NULL),
(4, 'Gionee', 'Gionnee Smart Phones', 'asfdfsf fgfdgdg', 'gionee', 'gionee.png', 1, '2020-03-09 23:00:00', NULL),
(5, 'Techno', 'Techno mobile', 'Techno smart phones', 'techno', 'techno.png', 1, '2020-03-09 23:00:00', NULL),
(6, 'Mac Book Air', 'Mac book air', 'djhjsndfjnsdff', 'macbook-air', 'macbookair.png', 2, '2020-03-09 23:00:00', NULL),
(7, 'HP', 'HP Laptops', 'hjdjsjdss', 'hp', 'hp.png', 2, '2020-03-09 23:00:00', NULL),
(8, 'Lenovo', 'Lenovo laptops', 'sfddgsbsdd', 'lenovo', 'lenovo.png', 2, '2020-03-09 23:00:00', NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `tag_text`, `slug`, `avatar`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Mobile Phones', 'Save on Your\r\nMobile Phone', 'phones', 'phones.png', 'yes', '2020-03-04 23:00:00', NULL),
(2, 'Laptops', 'Save on Your\r\nLaptops', 'laptops', 'laptop.png', 'yes', '2020-03-04 23:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_model_id_index` (`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `models_product_id_index` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
