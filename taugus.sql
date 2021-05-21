-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 05:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taugus`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Hei', 'Hei', 'lorem impon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'fdasfa', 'adfda', 'adsfasdfasdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'rumah kaca', 'rumah-kaca', 'andai aku bisa', '2021-05-20 14:40:56', '2021-05-20 14:40:56'),
(4, 'adsfasdf', 'adsfasdf', 'adsfasdfasd', '2021-05-20 15:03:43', '2021-05-20 15:03:43'),
(5, 'halo halo', 'halo-halo', 'halo', '2021-05-20 15:23:57', '2021-05-20 15:23:57'),
(6, 'hallo', 'hallo', 'iya hallo', '2021-05-20 15:29:12', '2021-05-20 15:29:12'),
(7, 'pradita', 'pradita', 'jowwokwokwowkkowkkwokwokwo jajaja', '2021-05-20 15:39:38', '2021-05-20 15:39:38'),
(8, 'antonio', 'antonio', 'valheim is da best', '2021-05-20 15:42:41', '2021-05-20 15:42:41'),
(9, 'asfdadsf', 'asfdadsf', 'adsfasdfsdf', '2021-05-20 15:50:18', '2021-05-20 15:50:18'),
(10, 'New', 'dafasdfad', 'ada deh dih', '2021-05-20 15:51:54', '2021-05-20 20:13:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
