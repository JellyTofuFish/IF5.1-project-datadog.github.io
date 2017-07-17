-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2017 at 03:23 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE `priorities` (
  `id` int(11) NOT NULL,
  `priorities` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority_id` int(11) DEFAULT NULL,
  `taskname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `taskcomment` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `dueto` datetime NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `authorUser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `teamname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `teamname`) VALUES
(1, 'Bananai'),
(4, 'Kamera'),
(6, 'Namu biuras'),
(10, 'Namai'),
(11, 'Raudonos pandos');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `lastname`, `email`, `password`) VALUES
(6, 'NaujasNamas', 'a', NULL, 'a@sxx.com', '$2y$13$IQZerqLR8lLnf.nBPtch3.s8XcBRlXY3cvWHdPKmds.nwYdJB1Szq'),
(8, 'NaujasNamas2', 'a', NULL, 'a@asb.com', '$2y$13$vk/NR2.9HigIHteqNG7N3O0xDkppLi6quqySAQKe/UScfSEfSyje6'),
(9, 'Vardas123', NULL, NULL, 'a@abc.com', '$2y$13$y6MVVFHCPb1sti7sUPUsvuRtj68yArD7ZxVatRBceRv/Kdj5trJIq'),
(12, 'naujasvardas', NULL, NULL, 'b@a.com', '$2y$13$36anxd3h.5Us/L7uyc55Xu4GdxuLmDJ0r7p7RZiYXpgMaQUdktpMq'),
(13, 'Vardas', NULL, NULL, 'n@m.c', '$2y$13$3iTEmPsNMScyPTP00Wcmf.XM9fPR1.OfaLB4TRsoyMcI5McJq2vpO'),
(14, 'Vardas2', NULL, NULL, 'm@a.c', '$2y$13$p1FHAeI3QaJRzLAifg7tBekMAfx3FPCqZ7oGEg7vgDSHoN52r6LBa'),
(15, 'Vardas3', NULL, NULL, 'm@m.a', '$2y$13$ItkP6cqD8G7.6yy42/yo.upgE286X36f7/dGcojX.LMDeC/xj/ie6');

-- --------------------------------------------------------

--
-- Table structure for table `usersteams`
--

CREATE TABLE `usersteams` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `teams_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usersteams`
--

INSERT INTO `usersteams` (`id`, `user_id`, `teams_id`) VALUES
(3, 13, 10),
(4, 13, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3AF34668368ACAA6` (`categoryname`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5058659712469DE2` (`category_id`),
  ADD KEY `IDX_5058659774233BA7` (`authorUser_id`),
  ADD KEY `IDX_50586597497B19F9` (`priority_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- Indexes for table `usersteams`
--
ALTER TABLE `usersteams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_46E1C4DA76ED395` (`user_id`),
  ADD KEY `IDX_46E1C4DD6365F12` (`teams_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `usersteams`
--
ALTER TABLE `usersteams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `FK_5058659712469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_50586597497B19F9` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`),
  ADD CONSTRAINT `FK_5058659774233BA7` FOREIGN KEY (`authorUser_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `usersteams`
--
ALTER TABLE `usersteams`
  ADD CONSTRAINT `FK_46E1C4DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_46E1C4DD6365F12` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
