-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 01:25 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `paid_free` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `published_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_book` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_name`, `book_img`, `category_id`, `paid_free`, `user_id`, `published_date`, `sort_des`, `main_book`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Book Name', 'Author Name', 'backend/image/book/uUJwgBKlpm8Q1AnvpvUZ9y87f1WfidlfkdslDAD9.png', 2, 'Free', 3, '2021-03-09', 'Book Title', 'Book Upload', '1', '2021-03-09 05:27:49', '2021-03-09 05:27:49'),
(2, 'Random Readers', 'Mr. Reader', 'backend/image/book/sLCECsIwwuxN8I2IOVYrFa8d3nmrZBdQwz4dT02i.png', 2, 'Paid', 3, '2021-03-09', 'A group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!', 'A group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!A group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!\r\n\r\nA group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!\r\nA group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!\r\n\r\nA group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!A group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!A group for people who read a little bit of everything! If you love reading different genres and talking about various books, this is the place for you!', '1', '2021-03-09 06:31:53', '2021-03-09 06:31:53'),
(3, 'The Rose Code', 'Kate Quinn', 'backend/image/book/uWCKE3kuBa3V5R8khhPK7ihlXH3Hd0vfCFRcsX9Y.jpg', 3, 'Free', 3, '2021-03-03', 'You should read this book if you like: Historical fiction, WWII stories, female cryptographers,', 'You should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice NetworkYou should read this book if you like: Historical fiction, WWII stories, female cryptographers, mysterious strangers from the past, The Huntress, The Alice Network', '1', '2021-03-09 11:48:21', '2021-03-09 11:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sport', 'backend/image/category/ZfmJFkbQBkoWnioBbQpzIPufHSSbMLQCvkB9FBpx.png', '1', '2021-03-09 04:27:55', '2021-03-09 04:27:55'),
(2, 'Arts & Photography', 'backend/image/category/fur2RIsQM4y36lvQbwBTONFUEoOPzhHPLOrsgGYV.png', '1', '2021-03-09 04:28:19', '2021-03-09 04:28:19'),
(3, 'Math', 'backend/image/category/KvhpGNB2810cwdseL14MXyBYlCGxTTeEyvoLSRtt.jpg', '1', '2021-03-09 11:43:11', '2021-03-09 11:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `like` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `like`, `book_id`, `user_id`, `created_at`, `updated_at`) VALUES
(38, 'emj_heart', 2, 19, '2021-03-09 10:07:30', '2021-03-09 10:07:30'),
(39, 'emj_like', 1, 19, '2021-03-09 10:07:39', '2021-03-09 10:07:39');

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
(4, '2020_12_09_013153_create_roles_table', 2),
(5, '2020_12_09_152111_create_posts_table', 3),
(6, '2020_12_12_005915_create_likes_table', 4),
(7, '2021_03_09_094835_create_categoriess_table', 5),
(8, '2021_03_09_094835_create_categories_table', 6),
(9, '2021_03_09_101443_create_books_table', 6);

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
('247247ar@gmail.com', '$2y$10$/KFZUDx/.oq4nFq5hii9TuYcYAwLwMXqwU88iq0//sz1M.ZV9tyxu', '2020-12-08 19:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'free',
  `role_id` int(2) NOT NULL DEFAULT 2,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `occupation`, `phone`, `user_type`, `role_id`, `email`, `email_verified_at`, `password`, `google_id`, `img`, `address`, `birthday`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Md. Admin', 'Web Developer', '00000000000', 'paid', 1, 'admin@gmail.com', NULL, '$2y$10$emEo0U1qGq2ym./jyVZFbOjHXB/YiyWXoFg0b5wmS1R0YtXQQeMn6', NULL, 'avatar.png', NULL, NULL, 1, NULL, NULL, NULL),
(4, 'Md. Author', 'Web Developer', '00000000000', 'free', 2, 'author@gmail.com', NULL, '$2y$10$emEo0U1qGq2ym./jyVZFbOjHXB/YiyWXoFg0b5wmS1R0YtXQQeMn6', NULL, 'user_image_110.png', NULL, NULL, 1, NULL, NULL, NULL),
(19, 'Book', 'Student', '00000000001', 'free', 2, 'book@gmail.com', NULL, '$2y$10$ywsRqQ6UFHu.GIO3jHUL4OQK28zMhgPBGCzYlKDGPTrtxdVB4bzjO', NULL, 'user_image_852.png', 'Dhaka, Bangladesh', '2001-01-01', 1, NULL, '2021-03-09 02:18:33', '2021-03-09 09:00:52'),
(20, 'code fun', 'Web Developer', NULL, 'paid', 2, 'codefun.xyz@gmail.com', NULL, '86a08a8cd53357d3fb437a6810af55cc', '111044794500832035105', 'avatar.png', 'Dhaka, Bangladesh', '2021-03-09', 1, NULL, '2021-03-09 02:21:35', '2021-03-09 09:00:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
