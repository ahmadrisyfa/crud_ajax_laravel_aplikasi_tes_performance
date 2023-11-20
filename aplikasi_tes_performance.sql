-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2023 at 04:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_tes_performance`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_kegiatan`
--

INSERT INTO `jadwal_kegiatan` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Deserunt cupiditate', 'Atque obcaecati aliq', '2023-11-16 07:19:32', '2023-11-16 07:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2023_11_10_042610_create_jadwal_kegiatan_table', 2),
(4, '2023_11_14_163744_create_nilai_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil_nilai_lari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_nilai_pull_up` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_nilai_sit_up` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_nilai_push_up` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_nilai_shuttle_run` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_nilai_renang_dada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_nilai_renang_bebas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_garjas_A` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_garjas_B` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_nilai_garjas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `user_id`, `tanggal`, `hasil_nilai_lari`, `hasil_nilai_pull_up`, `hasil_nilai_sit_up`, `hasil_nilai_push_up`, `hasil_nilai_shuttle_run`, `hasil_nilai_renang_dada`, `hasil_nilai_renang_bebas`, `nilai_garjas_A`, `nilai_garjas_B`, `total_nilai_garjas`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, NULL),
(2, '3', '2023-12-02', '200', '200', '200', '200', '200', '200', '200', '200', '200', '200', NULL, '2023-11-16 06:30:30'),
(5, '3', '1974-10-12', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, NULL, '2023-11-16 07:15:00', '2023-11-16 07:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `username`, `ttl`, `jenis_kelamin`, `no_hp`, `usia`, `tb`, `bb`, `alamat`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bertha Mathis', '1', 'admin', 'Voluptatem maiores t', 'Perempuan', 'Molestiae enim eius', 'Inventore vitae aut', 'Quasi tempora qui of', 'Et consectetur modi', 'In officia velit mai', NULL, '$2y$10$h9s13Poa37BsezSxojbJQOW5JvE25mNEKvQB44OayuYuQEuLG.xqe', NULL, '2023-11-09 10:33:47', '2023-11-16 07:40:56'),
(3, 'Justine Cash', '0', 'user', 'Ducimus dignissimos', 'Quisquam fugiat quo', 'Elit quibusdam labo', 'Assumenda velit in e', 'Deserunt eiusmod et', 'Labore reprehenderit', 'Accusamus impedit l', NULL, '$2y$10$P35cUNUi6fA9X6CtBnRbpOGcOOQEOLpsL1KNYfSJ7se92vMSot81G', NULL, '2023-11-09 10:40:20', '2023-11-16 07:05:40'),
(7, 'Zia Britt', '0', 'politejipu', 'Nesciunt molestiae', 'Laki-Laki', '97', 'Reiciendis esse con', 'Mollit mollit incidi', 'Eius assumenda ut ad', 'Ipsum laboris in par', NULL, '$2y$10$Wv.zKsPHnIq4lGPQbgQRG.la4nGGEZDNtg2LYVucTFZp1clZOQz8O', NULL, '2023-11-16 01:54:14', '2023-11-16 01:54:14'),
(10, 'Xanthus Mathews', '1', 'sosezamym', 'Non possimus ea des', 'Perempuan', '41', 'Dicta magni quam lab', 'Magna incididunt eiu', 'Sequi ut qui cupidit', 'Sed et et aut mollit', NULL, '$2y$10$VkMHfgay0fDv/HaP.anJcu8B2DiLdqe6SJzcUsulxKXPl.cU2Hjy6', NULL, '2023-11-16 05:31:50', '2023-11-16 05:38:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
