-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2023 at 11:26 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19867063_cvbuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `editables`
--

CREATE TABLE `editables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edudesc1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edudsc2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workpos1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workyear1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workdsc1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workpos2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workyear2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workdsc2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refdesg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refdept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editables`
--

INSERT INTO `editables` (`id`, `user`, `name`, `designation`, `age`, `email`, `phone`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `edu1`, `edudesc1`, `edu2`, `edudsc2`, `work1`, `workpos1`, `workyear1`, `workdsc1`, `work2`, `workpos2`, `workyear2`, `workdsc2`, `ref`, `refdesg`, `refdept`, `refphone`, `img`, `created_at`, `updated_at`) VALUES
(1, '0', 'Oleraj Hossin', 'Full-Stack Web Developer', '30', 'JasonHolder@gmail.com', '01781886507', 'HTML/CSS', 'JavaScript', 'Laravel', 'React', 'Python', 'Kayra High School', 'Obtaining GPA 4.94 2016-2018', 'Kayra High School', 'Obtaining GPA 4.04 2016-2018', 'NavieaSoft LTD', 'Laravel Developer', '6 Month', 'Doing Backend Development uisng PHP and Laravel. Also Know HTML, CSS,JS,AJAX,Jquery etc for frontend.', 'ABC Company LTD', 'Full Stack Developer', 'Currently ', 'Doing Backend Development uisng PHP and Laravel. Also Know HTML, CSS,JS,AJAX,Jquery etc for frontend.', 'Oleraj hossin', 'Chairman of MTV', 'CSE and EEE', '029323239', 'image/user_1684090260_99795.jpg', '2023-05-14 01:14:57', '2023-05-14 10:48:51'),
(28, '3', 'Oleraj Hossin', 'Full-Stack Web Developer', '22', 'olerajhossin@gmail.com', '01781886507', 'HTML/CSS', 'JavaScript', 'Laravel', 'React', 'Python', 'Kayra High School', 'Obtaining GPA 4.94 2016-2018', 'Kayra High School', 'Obtaining GPA 4.04 2016-2018', 'NavieaSoft LTD', 'Laravel Developer', '6 Month', 'Doing Backend Development uisng PHP and Laravel. Also Know HTML, CSS,JS,AJAX,Jquery etc for frontend.', 'ABC Company LTD', 'Full Stack Developer', 'Currently', 'Doing Backend Development uisng PHP and Laravel. Also Know HTML, CSS,JS,AJAX,Jquery etc for frontend.', 'Oleraj hossin', 'Chairman of MTV', 'CSE and EEE', '029323239', 'image/user_1684097887_32478.jpg', '2023-05-14 20:46:28', '2023-05-14 20:58:07'),
(29, '4', 'Oleraj Hossin', 'Full-Stack Web Developer', '30', 'JasonHolder@gmail.com', '01781886507', 'HTML/CSS', 'JavaScript', 'Laravel', 'React', 'Python', 'Kayra High School', 'Obtaining GPA 4.94 2016-2018', 'Kayra High School', 'Obtaining GPA 4.04 2016-2018', 'NavieaSoft LTD', 'Laravel Developer', '6 Month', 'Doing Backend Development uisng PHP and Laravel. Also Know HTML, CSS,JS,AJAX,Jquery etc for frontend.', 'ABC Company LTD', 'Full Stack Developer', 'Currently', 'Doing Backend Development uisng PHP and Laravel. Also Know HTML, CSS,JS,AJAX,Jquery etc for frontend.', 'Oleraj hossin', 'Chairman of MTV', 'CSE and EEE', '029323239', NULL, '2023-05-14 21:17:08', '2023-05-14 21:17:08');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_13_061930_create_editables_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Oleraj Hossin', 'olerajhossin@gmail.com', NULL, '$2y$10$CB0ee88gfkbI6NuoQXsgDuUX9Rxqpy1yXz64itGgm2FgNJWCwx.zK', NULL, '2023-05-14 20:45:28', '2023-05-14 20:45:28'),
(4, 'MD. NOOR MOHAMMAD', 'nuri1999sept@gmail.com', NULL, '$2y$10$regOxK1gYUs0KQwcTN46c.j9pXAx1zolgdmbSrptqshBSqZ58QL8m', NULL, '2023-05-14 21:16:43', '2023-05-14 21:16:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editables`
--
ALTER TABLE `editables`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `editables`
--
ALTER TABLE `editables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
