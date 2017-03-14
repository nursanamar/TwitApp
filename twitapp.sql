-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 03:53 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `userId`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'adsdsdasdasdsadsad', '2017-03-12 01:47:30', NULL),
(2, 2, ' halao halao halaohalao vhalaohalao halao v', '2017-03-12 08:36:07', NULL),
(3, 3, 'shakshskahskashkashkashkashakshkashkasha', '2017-03-12 08:36:25', NULL),
(4, 1, 'dsadafdfsdfsdfsdsdfsfsd', '2017-03-13 03:16:07', NULL),
(5, 1, 'dsdsdsadasdsa', '2017-03-13 03:35:35', NULL),
(6, 1, 'asasasasasasasas', '2017-03-13 03:41:35', NULL),
(7, 2, 'helao', '2017-03-13 08:02:24', NULL),
(8, 1, 'hghghgjhgjhgjhg', '2017-03-13 08:33:58', NULL),
(9, 1, 'hay', '2017-03-14 02:49:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nursan amar', 'nursan011@gmail.com', '$2y$10$11w4cVc4SUROKukYKCpd4eL5aAk7CyMHzHrA.RnKJXItBKALg2Kxa', 'profilimage/1489393811.jpg', 'FASoFTzMSl3STyRLjHOn4n17FV87AgBdcndJ6eEhqY0rgRZZptvZDg8ecvRf', NULL, NULL),
(2, 'Hadija tahirahas as', 'akunhadija@gmail.com', '$2y$10$9s9gvEf4Bif7bas2Uu7GJOZOeiYyBAYIGnA9jKpyzSfUjJBCj3Dhm', 'profilimage/1489388579.jpg', 'NIPEDk87dYccz0ONYqasdyzQcoqkCodGEio1yTxxGuaWL8pxFG0QmBhSz0Qx', NULL, NULL),
(3, 'Mita', 'mhytakarmila@yahoo.com', '$2y$10$oBA7A5BZ5hNCg6nwxTxyBuaQ7tSHHZk3lQTpxL47Y6jz/ULV3sobm', NULL, 'TYkrIOP8cq1Yv47DFimX1CzQm9OGv0QgSy5heheE4yqtduA38DztPJNBQRpm', NULL, NULL),
(4, 'coba', 'coba@coba.com', '$2y$10$qvMXKrPb.z7KvFDu7XkuEuyHScetL05qwkQDlzxZEWUawgVOIqLKu', NULL, NULL, NULL, NULL),
(5, 'tes', 'ctes@coba.com', '$2y$10$D2MeAfJtpUpoyj2e2jayZ.7e/RbmJVDdtqHoSKdxR2KjVkJtYjE5S', NULL, NULL, NULL, NULL),
(6, 'qwqw', 'ctes@coba.com', '$2y$10$9h3G..JzpQh5/gZgU2RozeicKIEv9NoZ6MHE45k.Lat9kSxGk1yta', NULL, NULL, NULL, NULL),
(7, 'qwqw', 'ctes@coba.com', '$2y$10$fzYJxvcPWahbxXhQX3wtmekThnEP8sXVI0tOS6z6lH4Dy8K5jYRCu', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
