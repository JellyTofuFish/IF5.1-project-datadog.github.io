-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2017 at 06:57 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

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
  `created` date NOT NULL,
  `team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created`, `team_id`) VALUES
(1, 'School project', '2017-05-19', 4),
(2, 'Personal', '2017-05-19', 4),
(3, 'Anniversaries, birthdays, etc', '2017-05-19', 4),
(4, 'Test', '2017-05-19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE `priorities` (
  `id` int(11) NOT NULL,
  `priorities` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `priorities`) VALUES
(1, 'Low'),
(2, 'Medium'),
(3, 'High');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Just started'),
(2, 'Working'),
(3, 'Working hard'),
(4, 'Almost done'),
(5, 'Done'),
(6, 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `authorUser_id` int(11) DEFAULT NULL,
  `priority_id` int(11) DEFAULT NULL,
  `taskname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `taskcomment` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `dueto` datetime NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `category_id`, `authorUser_id`, `priority_id`, `taskname`, `taskcomment`, `created`, `dueto`, `team_id`, `status_id`) VALUES
(1, 2, 2, 1, 'Buy groceries', 'Oranges, bananas, kiwi, cucumbers, tomatoes, lettuce...', '2017-05-19 06:20:17', '2017-05-19 18:00:00', 4, 1),
(2, 1, 2, 3, 'Start writing documentation', NULL, '2017-05-17 00:00:00', '2017-05-24 00:00:00', 1, 2),
(3, 1, 1, 2, 'Get research results', NULL, '2017-05-15 15:04:45', '2017-05-25 00:00:00', 1, 3);

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
(4, '404 Brain not found'),
(3, 'Bits Please'),
(2, 'Hackslash'),
(1, 'Xterm-inate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `lastname`) VALUES
(1, 'oblivion', 'Ilona', 'ilona.brazauskaite@ktu.edu', '$2y$13$M13jdcnqT/og17D1xOHO3ukhnPooSaoSO7ETa.5F7Ry90CxfwzMou', 'Brazauskaitė'),
(2, 'cassie', NULL, 'cassie@mail.com', '$2y$13$E2ml81I5QunZHJpo3ZfbQOqa2/sCdRWsTU.eX/Xs.K3mmm5ty.16m', NULL),
(3, 'DannyTheDuck', 'Danny', 'dannytheduck@mail.com', '$2y$13$3y7CXTRVMce1q3JOFYwIPeqDSX7C4EQYkZMX7LHPwGHZkzktDvBuq', NULL);

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
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 3, 3),
(5, 3, 4),
(6, 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3AF34668296CD8AE` (`team_id`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5058659712469DE2` (`category_id`),
  ADD KEY `IDX_50586597497B19F9` (`priority_id`),
  ADD KEY `IDX_5058659774233BA7` (`authorUser_id`),
  ADD KEY `IDX_50586597296CD8AE` (`team_id`),
  ADD KEY `IDX_505865976BF700BD` (`status_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_96C2225849DBED58` (`teamname`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usersteams`
--
ALTER TABLE `usersteams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_3AF34668296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `FK_5058659712469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_50586597296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `FK_50586597497B19F9` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`),
  ADD CONSTRAINT `FK_505865976BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
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
