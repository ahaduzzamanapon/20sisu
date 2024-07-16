-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2021 at 12:15 PM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_daycares_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `time` datetime DEFAULT NULL,
  `device_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `members_id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `time`, `device_id`, `members_id`, `day_cares_id`, `created`, `updated`) VALUES
(1, '2020-01-13 04:05:27', '1', 3, 1, '2020-01-13 00:00:00', '2020-01-13 00:00:00'),
(2, '2020-01-13 10:18:04', '1', 4, 1, '2020-01-13 00:00:00', '2020-01-13 00:00:00'),
(3, '2020-01-21 17:16:13', NULL, 3, 1, '2020-01-21 17:16:16', NULL),
(4, '2020-01-25 17:43:44', NULL, 3, 1, '2020-01-25 17:43:48', NULL),
(11, '2021-02-13 18:01:56', '101', 11, 1, '2021-02-15 17:02:50', NULL),
(12, '2021-02-13 18:02:07', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(13, '2021-02-13 18:02:14', '101', 9, 1, '2021-02-15 17:02:50', NULL),
(14, '2021-02-13 18:02:19', '101', 6, 1, '2021-02-15 17:02:50', NULL),
(15, '2021-02-13 18:10:59', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(16, '2021-02-13 18:11:01', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(17, '2021-02-13 18:11:03', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(18, '2021-02-13 18:11:05', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(19, '2021-02-13 18:11:06', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(20, '2021-02-13 18:12:27', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(21, '2021-02-13 08:54:43', '101', 13, 1, '2021-02-15 17:02:50', NULL),
(22, '2021-02-13 08:54:48', '101', 13, 1, '2021-02-15 17:02:50', NULL),
(23, '2021-02-13 09:25:29', '101', 16, 1, '2021-02-15 17:02:50', NULL),
(24, '2021-02-13 09:59:14', '101', 11, 1, '2021-02-15 17:02:50', NULL),
(25, '2021-02-13 10:10:20', '101', 18, 1, '2021-02-15 17:02:50', NULL),
(26, '2021-02-13 10:11:50', '101', 18, 1, '2021-02-15 17:02:50', NULL),
(27, '2021-02-13 10:15:38', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(28, '2021-02-13 10:17:35', '101', 20, 1, '2021-02-15 17:02:50', NULL),
(29, '2021-02-13 10:22:58', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(30, '2021-02-13 10:23:00', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(31, '2021-02-13 10:23:01', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(32, '2021-02-13 10:23:05', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(33, '2021-02-13 10:23:06', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(34, '2021-02-13 10:23:13', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(35, '2021-02-13 10:23:17', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(36, '2021-02-13 10:23:19', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(37, '2021-02-13 10:23:22', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(38, '2021-02-13 10:23:24', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(39, '2021-02-13 10:23:26', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(40, '2021-02-13 10:23:30', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(41, '2021-02-13 10:23:46', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(42, '2021-02-13 10:24:26', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(43, '2021-02-13 10:24:29', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(44, '2021-02-13 10:24:31', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(45, '2021-02-13 10:24:34', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(46, '2021-02-13 10:24:36', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(47, '2021-02-13 10:24:37', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(48, '2021-02-13 10:24:39', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(49, '2021-02-13 10:24:41', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(50, '2021-02-13 10:24:43', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(51, '2021-02-13 10:28:16', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(52, '2021-02-13 10:28:18', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(53, '2021-02-13 10:28:21', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(54, '2021-02-13 10:28:22', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(55, '2021-02-13 10:28:26', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(56, '2021-02-13 10:28:29', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(57, '2021-02-13 10:28:32', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(58, '2021-02-13 10:28:34', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(59, '2021-02-13 10:28:39', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(60, '2021-02-13 10:28:41', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(61, '2021-02-13 10:28:43', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(62, '2021-02-13 10:28:44', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(63, '2021-02-13 10:28:47', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(64, '2021-02-13 10:28:53', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(65, '2021-02-13 10:28:58', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(66, '2021-02-13 10:31:49', '101', 20, 1, '2021-02-15 17:02:50', NULL),
(67, '2021-02-13 10:31:50', '101', 20, 1, '2021-02-15 17:02:50', NULL),
(68, '2021-02-13 10:32:28', '101', 20, 1, '2021-02-15 17:02:50', NULL),
(69, '2021-02-13 10:32:35', '101', 20, 1, '2021-02-15 17:02:50', NULL),
(70, '2021-02-13 10:45:09', '101', 17, 1, '2021-02-15 17:02:50', NULL),
(71, '2021-02-13 10:45:11', '101', 17, 1, '2021-02-15 17:02:50', NULL),
(72, '2021-02-13 10:46:16', '101', 17, 1, '2021-02-15 17:02:50', NULL),
(73, '2021-02-13 10:47:05', '101', 17, 1, '2021-02-15 17:02:50', NULL),
(74, '2021-02-13 12:29:03', '101', 23, 1, '2021-02-15 17:02:50', NULL),
(75, '2021-02-13 12:43:54', '101', 25, 1, '2021-02-15 17:02:50', NULL),
(76, '2021-02-13 13:09:41', '101', 26, 1, '2021-02-15 17:02:50', NULL),
(77, '2021-02-13 13:09:43', '101', 26, 1, '2021-02-15 17:02:50', NULL),
(78, '2021-02-13 14:10:14', '101', 27, 1, '2021-02-15 17:02:50', NULL),
(79, '2021-02-13 14:32:17', '101', 28, 1, '2021-02-15 17:02:50', NULL),
(80, '2021-02-13 14:33:47', '101', 29, 1, '2021-02-15 17:02:50', NULL),
(81, '2021-02-13 15:05:21', '101', 16, 1, '2021-02-15 17:02:50', NULL),
(82, '2021-02-13 15:05:23', '101', 16, 1, '2021-02-15 17:02:50', NULL),
(83, '2021-02-13 15:16:03', '101', 28, 1, '2021-02-15 17:02:50', NULL),
(84, '2021-02-13 15:16:04', '101', 28, 1, '2021-02-15 17:02:50', NULL),
(85, '2021-02-13 15:19:29', '101', 20, 1, '2021-02-15 17:02:50', NULL),
(86, '2021-02-13 15:23:24', '101', 26, 1, '2021-02-15 17:02:50', NULL),
(87, '2021-02-13 15:25:20', '101', 29, 1, '2021-02-15 17:02:50', NULL),
(88, '2021-02-13 15:36:56', '101', 21, 1, '2021-02-15 17:02:50', NULL),
(89, '2021-02-13 15:36:57', '101', 21, 1, '2021-02-15 17:02:50', NULL),
(90, '2021-02-13 15:42:00', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(91, '2021-02-13 15:46:17', '101', 19, 1, '2021-02-15 17:02:50', NULL),
(92, '2021-02-13 15:54:28', '101', 18, 1, '2021-02-15 17:02:50', NULL),
(93, '2021-02-13 15:55:49', '101', 18, 1, '2021-02-15 17:02:50', NULL),
(94, '2021-02-13 16:15:24', '101', 23, 1, '2021-02-15 17:02:50', NULL),
(95, '2021-02-13 16:45:56', '101', 14, 1, '2021-02-15 17:02:50', NULL),
(96, '2021-02-13 16:47:42', '101', 14, 1, '2021-02-15 17:02:50', NULL),
(97, '2021-02-13 16:56:03', '101', 25, 1, '2021-02-15 17:02:50', NULL),
(98, '2021-02-13 16:57:21', '101', 31, 1, '2021-02-15 17:02:50', NULL),
(99, '2021-02-13 16:57:23', '101', 31, 1, '2021-02-15 17:02:50', NULL),
(100, '2021-02-13 16:57:32', '101', 31, 1, '2021-02-15 17:02:50', NULL),
(101, '2021-02-13 16:57:34', '101', 31, 1, '2021-02-15 17:02:50', NULL),
(102, '2021-02-13 17:51:41', '101', 2, 1, '2021-02-15 17:02:50', NULL),
(103, '2021-02-13 17:52:57', '101', 31, 1, '2021-02-15 17:02:50', NULL),
(104, '2021-02-13 17:52:59', '101', 31, 1, '2021-02-15 17:02:50', NULL),
(105, '2021-02-13 17:55:49', '101', 22, 1, '2021-02-15 17:02:50', NULL),
(106, '2021-02-13 17:57:43', '101', 16, 1, '2021-02-15 17:02:50', NULL),
(107, '2021-02-13 17:57:50', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(108, '2021-02-13 17:57:52', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(109, '2021-02-13 17:58:03', '101', 12, 1, '2021-02-15 17:02:50', NULL),
(110, '2021-02-13 17:58:05', '101', 12, 1, '2021-02-15 17:02:50', NULL),
(111, '2021-02-13 17:58:51', '101', 13, 1, '2021-02-15 17:02:50', NULL),
(112, '2021-02-13 18:01:22', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(113, '2021-02-13 18:01:23', '101', 4, 1, '2021-02-15 17:02:50', NULL),
(114, '2021-02-14 11:41:01', '101', 16, 1, '2021-02-15 17:02:58', NULL),
(115, '2021-02-14 20:18:25', '101', 6, 1, '2021-02-15 17:02:58', NULL),
(119, '2021-02-10 07:59:49', NULL, 15, 1, '2021-02-15 18:00:04', NULL),
(120, '2021-02-10 18:00:11', NULL, 15, 1, '2021-02-15 18:00:20', NULL),
(290, '2021-02-16 12:54:42', '101', 39, 1, '2021-02-16 13:25:17', NULL),
(289, '2021-02-16 12:54:39', '101', 39, 1, '2021-02-16 13:25:17', NULL),
(288, '2021-02-16 12:54:15', '101', 40, 1, '2021-02-16 13:25:17', NULL),
(287, '2021-02-16 12:43:40', '101', 35, 1, '2021-02-16 13:25:17', NULL),
(286, '2021-02-16 12:43:38', '101', 35, 1, '2021-02-16 13:25:17', NULL),
(285, '2021-02-16 12:43:37', '101', 35, 1, '2021-02-16 13:25:17', NULL),
(284, '2021-02-16 12:31:43', '101', 38, 1, '2021-02-16 13:25:17', NULL),
(283, '2021-02-16 12:22:25', '101', 41, 1, '2021-02-16 13:25:17', NULL),
(282, '2021-02-16 12:18:41', '101', 6, 1, '2021-02-16 13:25:17', NULL),
(281, '2021-02-16 12:11:50', '101', 41, 1, '2021-02-16 13:25:17', NULL),
(280, '2021-02-16 12:00:41', '101', 2, 1, '2021-02-16 13:25:17', NULL),
(279, '2021-02-16 11:53:18', '101', 1, 1, '2021-02-16 13:25:17', NULL),
(278, '2021-02-16 11:53:16', '101', 1, 1, '2021-02-16 13:25:17', NULL),
(277, '2021-02-16 11:52:27', '101', 2, 1, '2021-02-16 13:25:17', NULL),
(276, '2021-02-16 11:51:32', '101', 1, 1, '2021-02-16 13:25:17', NULL),
(275, '2021-02-16 11:30:16', '101', 26, 1, '2021-02-16 13:25:17', NULL),
(274, '2021-02-16 11:28:33', '101', 37, 1, '2021-02-16 13:25:17', NULL),
(273, '2021-02-16 11:28:31', '101', 37, 1, '2021-02-16 13:25:17', NULL),
(272, '2021-02-16 11:28:17', '101', 27, 1, '2021-02-16 13:25:17', NULL),
(271, '2021-02-16 11:28:16', '101', 27, 1, '2021-02-16 13:25:17', NULL),
(270, '2021-02-16 11:03:07', '101', 40, 1, '2021-02-16 13:25:17', NULL),
(269, '2021-02-16 11:00:25', '101', 39, 1, '2021-02-16 13:25:17', NULL),
(268, '2021-02-16 11:00:23', '101', 39, 1, '2021-02-16 13:25:17', NULL),
(267, '2021-02-16 10:58:57', '101', 38, 1, '2021-02-16 13:25:17', NULL),
(266, '2021-02-16 10:58:56', '101', 38, 1, '2021-02-16 13:25:17', NULL),
(265, '2021-02-16 10:54:30', '101', 37, 1, '2021-02-16 13:25:17', NULL),
(264, '2021-02-16 10:54:28', '101', 37, 1, '2021-02-16 13:25:17', NULL),
(263, '2021-02-16 10:53:19', '101', 26, 1, '2021-02-16 13:25:17', NULL),
(262, '2021-02-16 10:51:54', '101', 26, 1, '2021-02-16 13:25:17', NULL),
(261, '2021-02-16 10:41:28', '101', 12, 1, '2021-02-16 13:25:17', NULL),
(260, '2021-02-16 10:41:26', '101', 12, 1, '2021-02-16 13:25:17', NULL),
(259, '2021-02-16 10:41:12', '101', 36, 1, '2021-02-16 13:25:17', NULL),
(258, '2021-02-16 10:41:09', '101', 36, 1, '2021-02-16 13:25:17', NULL),
(257, '2021-02-16 10:41:06', '101', 36, 1, '2021-02-16 13:25:17', NULL),
(256, '2021-02-16 10:40:07', '101', 10, 1, '2021-02-16 13:25:17', NULL),
(255, '2021-02-16 10:40:05', '101', 10, 1, '2021-02-16 13:25:17', NULL),
(254, '2021-02-16 10:39:13', '101', 4, 1, '2021-02-16 13:25:17', NULL),
(253, '2021-02-16 10:39:12', '101', 4, 1, '2021-02-16 13:25:17', NULL),
(252, '2021-02-16 10:38:52', '101', 9, 1, '2021-02-16 13:25:17', NULL),
(251, '2021-02-16 10:34:27', '101', 35, 1, '2021-02-16 13:25:17', NULL),
(250, '2021-02-16 10:34:25', '101', 35, 1, '2021-02-16 13:25:17', NULL),
(249, '2021-02-16 10:34:23', '101', 35, 1, '2021-02-16 13:25:17', NULL),
(248, '2021-02-16 10:32:59', '101', 27, 1, '2021-02-16 13:25:17', NULL),
(247, '2021-02-16 10:03:37', '101', 34, 1, '2021-02-16 13:25:17', NULL),
(246, '2021-02-16 10:03:10', '101', 34, 1, '2021-02-16 13:25:17', NULL),
(245, '2021-02-16 10:00:09', '101', 22, 1, '2021-02-16 13:25:17', NULL),
(244, '2021-02-16 10:00:06', '101', 22, 1, '2021-02-16 13:25:17', NULL),
(243, '2021-02-16 09:57:23', '101', 33, 1, '2021-02-16 13:25:17', NULL),
(242, '2021-02-16 09:55:57', '101', 31, 1, '2021-02-16 13:25:17', NULL),
(241, '2021-02-16 09:55:16', '101', 29, 1, '2021-02-16 13:25:17', NULL),
(240, '2021-02-16 09:54:33', '101', 29, 1, '2021-02-16 13:25:17', NULL),
(239, '2021-02-16 09:53:56', '101', 32, 1, '2021-02-16 13:25:17', NULL),
(238, '2021-02-16 09:49:55', '101', 17, 1, '2021-02-16 13:25:17', NULL),
(237, '2021-02-16 09:49:00', '101', 17, 1, '2021-02-16 13:25:17', NULL),
(236, '2021-02-16 09:47:46', '101', 13, 1, '2021-02-16 13:25:17', NULL),
(235, '2021-02-16 09:47:32', '101', 13, 1, '2021-02-16 13:25:17', NULL),
(234, '2021-02-16 09:46:56', '101', 19, 1, '2021-02-16 13:25:17', NULL),
(233, '2021-02-16 09:46:12', '101', 18, 1, '2021-02-16 13:25:17', NULL),
(232, '2021-02-16 09:45:52', '101', 18, 1, '2021-02-16 13:25:17', NULL),
(231, '2021-02-16 09:44:22', '101', 19, 1, '2021-02-16 13:25:17', NULL),
(230, '2021-02-16 09:44:21', '101', 19, 1, '2021-02-16 13:25:17', NULL),
(229, '2021-02-16 09:40:07', '101', 15, 1, '2021-02-16 13:25:17', NULL),
(228, '2021-02-16 09:40:05', '101', 15, 1, '2021-02-16 13:25:17', NULL),
(227, '2021-02-16 09:39:25', '101', 6, 1, '2021-02-16 13:25:17', NULL),
(226, '2021-02-16 09:30:27', '101', 16, 1, '2021-02-16 13:25:17', NULL),
(225, '2021-02-16 08:53:15', '101', 11, 1, '2021-02-16 13:25:17', NULL),
(224, '2021-02-16 08:13:17', '101', 21, 1, '2021-02-16 13:25:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `budget_types_id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `total_item_count` int(11) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `day_cares_id`, `budget_types_id`, `title`, `description`, `total_item_count`, `total_amount`, `created`, `updated`) VALUES
(1, 1, 1, 'October 2019 Monthly Budget', NULL, 10, NULL, '2020-01-14 00:00:00', '2020-01-14 00:00:00'),
(2, 1, 1, 'November 2019 Monthly Budget', 'November budget ', NULL, NULL, '2020-01-14 20:04:26', NULL),
(7, 1, 2, 'Advance Bill January 2020', 'test', NULL, NULL, '2020-01-15 16:18:54', NULL),
(5, 1, 1, 'test monthly', 'dddd', NULL, NULL, '2020-01-15 14:52:15', NULL),
(6, 1, 2, 'Advance Bill December 2019', 'test', NULL, NULL, '2020-01-15 15:31:21', NULL),
(8, 1, 2, 'ধানমন্ডি শিশু দিবাযত্ন কেন্দ্র এর অগ্রীম বিল ', NULL, NULL, NULL, '2021-02-16 13:40:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `budget_items`
--

CREATE TABLE `budget_items` (
  `id` int(11) NOT NULL,
  `budgets_id` int(11) NOT NULL,
  `item_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sorting` tinyint(2) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `item_count` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `budget_items`
--

INSERT INTO `budget_items` (`id`, `budgets_id`, `item_name`, `sorting`, `status`, `item_count`, `amount`, `created`, `updated`) VALUES
(1, 1, 'hand wash', NULL, NULL, 6, NULL, '2020-01-14 00:00:00', '2020-01-14 00:00:00'),
(2, 1, 'Refil pack', NULL, NULL, 6, NULL, '2020-01-14 00:00:00', '2020-01-14 00:00:00'),
(3, 2, 'হ্যান্ড ওয়াশ', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(4, 2, 'রিফিল প্যাক', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(5, 2, 'বেবি পাউডার (১০০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(6, 2, 'বেবি লোশন (১০০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(7, 2, 'বেবি শ্যাম্পু (১০০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(8, 2, 'বেবি সোপ (৪০ মি. গ্রা.)', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(9, 2, 'অলিভ অয়েল (৫০০ মি. গ্রা.)', NULL, NULL, 4, NULL, '2020-01-14 20:04:26', NULL),
(10, 2, 'ভ্যাসলিন (১৫ মি. গ্রা.)', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(11, 2, 'সরিষার তেল (৫০০ মি. গ্রা.)', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(12, 2, 'ভিম বার', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(13, 2, 'লিকুইড ডিশ ওয়াশ', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(14, 2, 'ওয়াশিং পাউডার (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(15, 2, 'লাইজল (৫০০ মি. লি.)', NULL, NULL, 5, NULL, '2020-01-14 20:04:26', NULL),
(16, 2, 'হারপিক', NULL, NULL, 4, NULL, '2020-01-14 20:04:26', NULL),
(17, 2, 'হারপিক পাউডার (৫০০ গ্রাম)', NULL, NULL, 5, NULL, '2020-01-14 20:04:26', NULL),
(18, 2, 'ওডোনিল', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(19, 2, 'ফেসিয়াল টিস্যু', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(20, 2, 'ন্যাপকিন টিস্যু', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(21, 2, 'টয়লেট টিস্যু', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(22, 2, 'অ্যারোসল (৮৭৫ মি. লি.)', NULL, NULL, 5, NULL, '2020-01-14 20:04:26', NULL),
(23, 2, 'এয়ার ফ্রেশনার', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(24, 2, 'ডেটল (১ লিটার)', NULL, NULL, 3, NULL, '2020-01-14 20:04:26', NULL),
(25, 2, 'ফিনাইল (১ লিটার)', NULL, NULL, 4, NULL, '2020-01-14 20:04:26', NULL),
(26, 2, 'ফুলের ঝাড়ু', NULL, NULL, 6, NULL, '2020-01-14 20:04:26', NULL),
(27, 2, 'ঝুল ঝাড়ু', NULL, NULL, 2, NULL, '2020-01-14 20:04:26', NULL),
(28, 2, 'মব', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(29, 2, 'শলার ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-14 20:04:26', NULL),
(30, 1, 'dsfsdfsd', NULL, NULL, 3, NULL, NULL, NULL),
(31, 1, 'sdssss', NULL, NULL, 4, NULL, NULL, NULL),
(32, 1, 'sdfssss', NULL, NULL, 44, NULL, NULL, NULL),
(33, 5, 'হ্যান্ড ওয়াশ', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(34, 5, 'রিফিল প্যাক', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(35, 5, 'বেবি পাউডার (১০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(36, 5, 'বেবি লোশন (১০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(37, 5, 'বেবি শ্যাম্পু (১০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(38, 5, 'বেবি সোপ (৪০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(39, 5, 'অলিভ অয়েল (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(40, 5, 'ভ্যাসলিন (১৫ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(41, 5, 'সরিষার তেল (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(42, 5, 'ভিম বার', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(43, 5, 'লিকুইড ডিশ ওয়াশ', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(44, 5, 'ওয়াশিং পাউডার (৫০০ মি. গ্রা.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(45, 5, 'লাইজল (৫০০ মি. লি.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(46, 5, 'হারপিক', NULL, NULL, 2, NULL, '2020-01-15 14:52:15', NULL),
(47, 5, 'হারপিক পাউডার (৫০০ গ্রাম)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(48, 5, 'ওডোনিল', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(49, 5, 'ফেসিয়াল টিস্যু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(50, 5, 'ন্যাপকিন টিস্যু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(51, 5, 'টয়লেট টিস্যু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(52, 5, 'অ্যারোসল (৮৭৫ মি. লি.)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(53, 5, 'এয়ার ফ্রেশনার', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(54, 5, 'ডেটল (১ লিটার)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(55, 5, 'ফিনাইল (১ লিটার)', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(56, 5, 'ফুলের ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(57, 5, 'ঝুল ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(58, 5, 'মব', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(59, 5, 'শলার ঝাড়ু', NULL, NULL, 1, NULL, '2020-01-15 14:52:15', NULL),
(60, 6, 'বিদ্যুত বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(61, 6, 'ডিশ বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(62, 6, 'ইন্টারনেট বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(63, 6, 'ময়লা বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(64, 6, 'পেপার বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(65, 6, 'পানির কিট', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(66, 6, 'পলিথিন বাবদ', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(67, 6, 'চা পাতা, টি-ব্যাগ, চিনি, বিস্কুট বাবদ', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(68, 6, 'আপ্যায়ন খরচ', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(69, 6, 'টেলিফোন বিল', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(70, 6, 'মেরামত সংক্রান্ত', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(71, 6, 'বাচ্চাদের জরুরী ঔষধসহ আনুষাঙ্গিক (ডেঙ্গু প্রত', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(72, 6, 'অন্যান্য', NULL, NULL, 1000, NULL, '2020-01-15 15:31:21', NULL),
(73, 7, 'বিদ্যুত বিল', NULL, NULL, NULL, 4000, '2020-01-15 16:18:54', NULL),
(74, 7, 'ডিশ বিল', NULL, NULL, NULL, 500, '2020-01-15 16:18:54', NULL),
(75, 7, 'ইন্টারনেট বিল', NULL, NULL, NULL, 1000, '2020-01-15 16:18:54', NULL),
(76, 7, 'ময়লা বিল', NULL, NULL, NULL, 250, '2020-01-15 16:18:54', NULL),
(77, 7, 'পেপার বিল', NULL, NULL, NULL, 240, '2020-01-15 16:18:54', NULL),
(78, 7, 'পানির কিট', NULL, NULL, NULL, 1300, '2020-01-15 16:18:54', NULL),
(79, 7, 'পলিথিন বাবদ', NULL, NULL, NULL, 570, '2020-01-15 16:18:54', NULL),
(80, 7, 'চা পাতা, টি-ব্যাগ, চিনি, বিস্কুট বাবদ', NULL, NULL, NULL, 1500, '2020-01-15 16:18:54', NULL),
(81, 7, 'আপ্যায়ন খরচ', NULL, NULL, NULL, 1500, '2020-01-15 16:18:54', NULL),
(82, 7, 'টেলিফোন বিল', NULL, NULL, NULL, 1000, '2020-01-15 16:18:54', NULL),
(83, 7, 'মেরামত সংক্রান্ত', NULL, NULL, NULL, 3000, '2020-01-15 16:18:54', NULL),
(84, 7, 'বাচ্চাদের জরুরী ঔষধসহ আনুষাঙ্গিক (ডেঙ্গু প্রত', NULL, NULL, NULL, 2000, '2020-01-15 16:18:54', NULL),
(85, 7, 'অন্যান্য', NULL, NULL, NULL, 1000, '2020-01-15 16:18:54', NULL),
(86, 8, 'বিদ্যুত বিল', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(87, 8, 'ডিশ বিল', NULL, NULL, NULL, 500, '2021-02-16 13:40:45', NULL),
(88, 8, 'ইন্টারনেট বিল', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(89, 8, 'ময়লা বিল', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(90, 8, 'পেপার বিল', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(91, 8, 'পানির কিট', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(92, 8, 'পলিথিন বাবদ', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(93, 8, 'চা পাতা, টি-ব্যাগ, চিনি, বিস্কুট বাবদ', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(94, 8, 'আপ্যায়ন খরচ', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(95, 8, 'টেলিফোন বিল', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(96, 8, 'মেরামত সংক্রান্ত', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(97, 8, 'বাচ্চাদের জরুরী ঔষধসহ আনুষাঙ্গিক (ডেঙ্গু প্রত', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL),
(98, 8, 'অন্যান্য', NULL, NULL, NULL, 1000, '2021-02-16 13:40:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `budget_types`
--

CREATE TABLE `budget_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `budget_types`
--

INSERT INTO `budget_types` (`id`, `name`, `status`) VALUES
(1, 'Monthly', 1),
(2, 'Advance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `day_cares_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `location`, `feature_image`, `day_cares_id`, `status`) VALUES
(1, 'test event 2', '<p>test description</p>\r\n\r\n<p>update</p>', '2020-01-20 05:18:18', 'dhaka 2', 'Blick-auf-die-Skyline-von-Dhaka-Copyright-iStockphoto-948x320.jpg', 1, 1),
(2, 'test 2', '<p>dsf dsfsdf</p>\r\n\r\n<p>dsf sd</p>\r\n\r\n<p>fds&', '2020-01-20 12:36:54', 'chittagong', '10553589_254574751406826_109475571718522446_n1.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `day_cares_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `status`, `day_cares_id`) VALUES
(4, '1-01.png', 1, 1),
(3, '1-02.jpg', 1, 1),
(5, '1-04.png', 1, 1),
(6, '1-12.png', 1, 1),
(7, '1-03.jpg', 1, 1),
(8, '1-07.png', 1, 1),
(9, '1-011.png', 1, 1),
(10, '1-08.jpg', 1, 1),
(11, '1-07.jpg', 1, 1),
(12, '1-02.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `parents_id` int(11) DEFAULT NULL,
  `registrations_id` int(11) DEFAULT NULL,
  `member_types_id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `child_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_dob` date DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_age` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_weight` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_height` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_mark` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_certificate_no` int(11) DEFAULT NULL,
  `child_name_2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `child_dob_2` date DEFAULT NULL,
  `birth_certificate_no_2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `describe_food` text COLLATE utf8_unicode_ci,
  `describe_health_problem` text COLLATE utf8_unicode_ci,
  `child_vaccination` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `bcg` tinyint(1) NOT NULL DEFAULT '0',
  `penta` tinyint(1) NOT NULL DEFAULT '0',
  `pcb` tinyint(1) NOT NULL DEFAULT '0',
  `opb` tinyint(1) NOT NULL DEFAULT '0',
  `ipb` tinyint(1) NOT NULL DEFAULT '0',
  `mr` tinyint(1) NOT NULL DEFAULT '0',
  `ham` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `image_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `immunization_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `is_waiting_sms_send` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `is_applied` tinyint(1) NOT NULL DEFAULT '0',
  `machine_id` int(10) DEFAULT NULL,
  `child_diseases_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_diseases_reason` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_medicine` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_medicine_range` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_prescription` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_check` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_result` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_allergic_food` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_allergic_food_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_viral_disease` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_novaccine_reason` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_strong_side` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_week_side` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_social_describe` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `parents_id`, `registrations_id`, `member_types_id`, `day_cares_id`, `child_name`, `child_dob`, `gender`, `child_age`, `child_weight`, `child_height`, `birth_mark`, `birth_certificate_no`, `child_name_2`, `child_dob_2`, `birth_certificate_no_2`, `describe_food`, `describe_health_problem`, `child_vaccination`, `bcg`, `penta`, `pcb`, `opb`, `ipb`, `mr`, `ham`, `phone`, `designation`, `address`, `doj`, `image_file`, `immunization_file`, `created`, `updated`, `is_waiting_sms_send`, `status`, `is_applied`, `machine_id`, `child_diseases_name`, `child_diseases_reason`, `child_diseases_medicine`, `child_diseases_medicine_range`, `child_diseases_prescription`, `child_diseases_check`, `child_diseases_result`, `child_allergic_food`, `child_allergic_food_name`, `child_viral_disease`, `child_novaccine_reason`, `child_strong_side`, `child_week_side`, `child_social_describe`) VALUES
(1, 27, 2, 1, 1, 'হুমাইরা মোস্তাফা', '2019-10-23', 'Female', '১৪ মাস', '৫ কেজি', '২ ফুট', 'নাই', 2147483647, NULL, NULL, NULL, 'নাই', 'নাই', 'No', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 18:14:20', NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 27, 2, 1, 1, 'বাবু', '2019-10-23', 'Male', '১০ মাস', '৫ কেজি', '১.৫ ফুট', 'নাই', 2147483647, NULL, NULL, NULL, 'নাই', 'নাই', 'No', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 18:14:20', NULL, 0, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 27, 3, 1, 1, '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-13 20:49:02', NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 27, 4, 1, 0, '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-13 21:40:32', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 27, 5, 1, 1, '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-13 22:11:25', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 41, 6, 1, 1, 'Abdullah', '2019-02-15', 'Male', '', '', '', '', 0, '', '0000-00-00', '', '', 'Yes', 'Yes', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1613373951-10000001.png', NULL, '2021-02-15 13:25:51', NULL, 0, 1, 1, NULL, '', '', 'Yes', '', 'Yes', NULL, '', 'Yes', '', 'Yes', '', NULL, NULL, '                              	\r\n                              '),
(10, 42, 7, 1, 1, 'fsadfasfw', '2014-09-14', NULL, NULL, NULL, NULL, NULL, 0, 'fafwadfasdfas', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:04:22', NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 41, 8, 1, 1, 'Abdullah bin', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:48:46', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 41, 9, 1, 1, 'Abdullah bin hassan', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:49:26', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 44, 10, 1, 1, 'Shuvo Hasan', '2014-09-14', NULL, NULL, NULL, NULL, NULL, 0, 'fafwadfasdfas', '0000-00-00', '2566888', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:49:50', NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, 2, 1, 'আলেয়া সুলতানা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭৩৩৩৩৬৬৩৩', 'ডে-কেয়ার অফিসার', 'গ্রাম:রামচন্দ্রপুর, পোষ্ট:বাঘুন, \r\nথানা:কালীগঞ্জ, জেলা:গাজীপুর।', '2018-01-25', 'WhatsApp_Image_2021-02-16_at_4_40_17_PM.jpeg', NULL, NULL, NULL, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, 2, 1, 'জাকিয়া সুলতানা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭৪৮৭৮৩১৬৩', 'স্বাস্থ্য শিক্ষিকা', 'গ্রাম: বষ্ণিুপুর, পোষ্ট:ফতেপুর, \r\nথানা:বাগেরহাট, জেলা:বাগেরহাট।', '2018-05-27', 'Ambia_Begum_(Aya).JPG', NULL, NULL, NULL, 0, 0, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, 2, 1, 'আনিকা রহমান', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৫২১১০১৮৯১', 'শিক্ষিকা', '১৫/১, শের শাহ শুরী রোড(৪র্থ তলা), মোহাম্মদপুর, ঢাকা-১২০৭।\r\n\r\n', '2018-05-27', 'Anika_Rahman_(Teacher).jpg', NULL, NULL, NULL, 0, 0, 0, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 43, 16, 1, 1, 'jhkjhklh', '2017-01-15', 'Male', '4', '25', '3 ft', '', 0, '', '0000-00-00', '', '', 'Yes', 'Yes', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 13:46:19', NULL, 0, 1, 1, NULL, 'নাই', '', 'Yes', '', 'Yes', NULL, '', 'Yes', '', 'Yes', '', NULL, NULL, '                              	\r\n                              '),
(18, NULL, NULL, 2, 1, 'শাকিল আহমেদ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭০৬৭৩৭৪৪৭', 'গার্ড', 'গ্রাম:রহিমাবাদ, পোষ্ট:ডেমা,  থানা:শাজাহানপুর, জেলা:বগুড়া।	', '2018-08-14', 'Shakil_Ahmed_(Guard).JPG', NULL, NULL, NULL, 0, 0, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 43, 22, 1, 1, 'মনিকা', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 13:58:11', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, 2, 1, 'মাহবুব আলম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৯৮৪৫০৫৫৬৬', 'গার্ড', 'গ্রাম:চন্দন চহট,পোষ্ট:নেকমরদ  থানা:রানীসনকৈল,জেলা:ঠাকুরগাও।	', '2018-08-16', 'Md__Mahabub_Alam_(Guard).JPG', NULL, NULL, NULL, 0, 0, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, 2, 1, 'মো: উজ্জল মিয়া', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭৫২৮৩২২০৫', 'ক্লিনার	', 'গ্রাম:লাকুড়ী পাড়া, পোষ্ট:রামশ্রী,  থানা:বাহুবল, জেলা:হবিগঞ্জ।	', '2018-11-01', 'Md__Mahabub_Alam_(Guard)1.JPG', NULL, NULL, NULL, 0, 0, 0, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 2, 1, 'মোছা: ওয়াজেদা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭৯৮৭৩০৭৪১', 'আয়া', 'গ্রাম:গজারিয়া, পোষ্ট:সোনারাই,  থানা:গাবতলী, জেলা:বগুড়া।	', '2018-11-01', 'Wazeda_(Aya).JPG', NULL, NULL, NULL, 0, 0, 0, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, 2, 1, 'মমতাজ বেগম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭৪১৪৭৪২৮১', 'আয়া', 'গ্রাম:মধ্যম জয়নগর, পোষ্ট:খাসেরহাট,থানা:দৌলত খাঁ, জেলা:ভোলা।', '2018-11-01', 'Momotaj_(Aya).JPG', NULL, NULL, NULL, 0, 0, 0, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, 2, 1, 'আম্বিয়া বেগম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৯০৭৯২৯২৪৫', 'আয়া	', 'গ্রাম:কুন্ডা হাজীবাড়ি, পোষ্ট:কুন্ডা,  থানা:নাসিরনগর, জেলা:ব্রাহ্মনবাড়িয়া।	', '2018-07-22', 'Ambia_Begum_(Aya)1.JPG', NULL, NULL, NULL, 0, 0, 0, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, 2, 1, 'সুলতানা আক্তার', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৯৩২৯৮৬৪২০', 'কুক', '১৩/১২,আজিজ মহল্লা,মোহাম্মদপুর,ঢাকা-১২০৭।', '2018-11-01', 'Santana_Begum_(Aya).JPG', NULL, NULL, NULL, 0, 0, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, 2, 1, 'চিনু খানম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '০১৭০১৭৭৮৪২৫', 'কুক', '৯৭, ওয়াটার ওয়ার্কস রোড, পোস্তা, ঢাকা ।	', '2018-11-01', 'Chinu_Khatun_(Cook).JPG', NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 45, 23, 1, 1, 'Mim', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 14:40:25', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 46, 24, 1, 1, 'সেজুতি', '2019-12-11', 'Male', '5', '30', '3', 'hand black sheet ', 123456789, '', '0000-00-00', '', '', 'No', 'Yes', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1613458631-CamScanner_06-17-2020_13_17_10.jpg', NULL, '2021-02-16 12:57:11', NULL, 0, 2, 1, NULL, '', 'n/a', 'No', 'n/a', 'Yes', NULL, 'n/a', 'No', 'n/a', 'No', 'n/a', '1', '1', '                              	\r\n                              '),
(29, NULL, NULL, 1, 1, 'আনিশা রহমান (সারা) ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, 1, 1, 'মাহিবা মাসনাত', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, 1, 1, 'মিফরা মাসনাত ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, 2, 1, 'মোছাঃ শান্তা বেগম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, 2, 1, 'মোছাঃ তানিয়া বেগম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, 1, 1, 'আরাধ্য ঘোষাল ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, 1, 1, 'আমেনা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, 1, 1, 'জায়ান জারার আলম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, 1, 1, 'জায়মা জাহরা আলম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, 1, 1, 'দেবিকা রায় ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, 1, 1, 'তাহরীন আয়াত ঋত্বিকা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, 1, 1, 'রিতিশা ফারনাজ আলী', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, 1, 1, 'সামিয়া জামান রোদেলা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, 1, 1, 'তাসমিয়া রহমান সাবা ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, 1, 1, 'নূরে আলম রাজীন ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, 1, 1, 'নাবিহা রহমান ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, 1, 1, 'খন্দকার আফনান', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, 1, 1, 'ইশাল বিনতে নাজমুল নাযাহ  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, 1, 1, 'আবরার দ্বীন আয়াত ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 48, 26, 1, 1, 'Ayan', '2008-12-08', NULL, NULL, NULL, NULL, NULL, 45678999, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-18 11:07:01', NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members2`
--

CREATE TABLE `members2` (
  `id` int(11) NOT NULL,
  `parents_id` int(11) DEFAULT NULL,
  `registrations_id` int(11) DEFAULT NULL,
  `member_types_id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `child_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_dob` date DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_age` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_weight` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_height` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_mark` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_certificate_no` int(11) DEFAULT NULL,
  `child_name_2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `child_dob_2` date DEFAULT NULL,
  `birth_certificate_no_2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `describe_food` text COLLATE utf8_unicode_ci,
  `describe_health_problem` text COLLATE utf8_unicode_ci,
  `child_vaccination` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `bcg` tinyint(1) NOT NULL DEFAULT '0',
  `penta` tinyint(1) NOT NULL DEFAULT '0',
  `pcb` tinyint(1) NOT NULL DEFAULT '0',
  `opb` tinyint(1) NOT NULL DEFAULT '0',
  `ipb` tinyint(1) NOT NULL DEFAULT '0',
  `mr` tinyint(1) NOT NULL DEFAULT '0',
  `ham` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `image_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `immunization_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `is_waiting_sms_send` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `is_applied` tinyint(1) NOT NULL DEFAULT '0',
  `machine_id` int(10) DEFAULT NULL,
  `child_diseases_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_diseases_reason` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_medicine` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_medicine_range` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_prescription` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_check` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_diseases_result` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_allergic_food` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_allergic_food_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_viral_disease` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_novaccine_reason` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_strong_side` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_week_side` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_social_describe` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members2`
--

INSERT INTO `members2` (`id`, `parents_id`, `registrations_id`, `member_types_id`, `day_cares_id`, `child_name`, `child_dob`, `gender`, `child_age`, `child_weight`, `child_height`, `birth_mark`, `birth_certificate_no`, `child_name_2`, `child_dob_2`, `birth_certificate_no_2`, `describe_food`, `describe_health_problem`, `child_vaccination`, `bcg`, `penta`, `pcb`, `opb`, `ipb`, `mr`, `ham`, `phone`, `designation`, `address`, `doj`, `image_file`, `immunization_file`, `created`, `updated`, `is_waiting_sms_send`, `status`, `is_applied`, `machine_id`, `child_diseases_name`, `child_diseases_reason`, `child_diseases_medicine`, `child_diseases_medicine_range`, `child_diseases_prescription`, `child_diseases_check`, `child_diseases_result`, `child_allergic_food`, `child_allergic_food_name`, `child_viral_disease`, `child_novaccine_reason`, `child_strong_side`, `child_week_side`, `child_social_describe`) VALUES
(1, 27, 2, 1, 1, 'হুমাইরা মোস্তাফা', '2019-10-23', 'Female', '১৪ মাস', '৫ কেজি', '২ ফুট', 'নাই', 2147483647, NULL, NULL, NULL, 'নাই', 'নাই', 'No', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 18:14:20', NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 27, 2, 1, 1, 'বাবু', '2019-10-23', 'Male', '১০ মাস', '৫ কেজি', '১.৫ ফুট', 'নাই', 2147483647, NULL, NULL, NULL, 'নাই', 'নাই', 'No', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-15 18:14:20', NULL, 0, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 41, 6, 1, 1, 'Abdullah', '2019-02-15', 'Male', '', '', '', '', 0, '', '0000-00-00', '', '', 'Yes', 'Yes', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1613373951-10000001.png', NULL, '2021-02-15 13:25:51', NULL, 0, 1, 1, NULL, '', '', 'Yes', '', 'Yes', NULL, '', 'Yes', '', 'Yes', '', NULL, NULL, '                              	\r\n                              '),
(10, 42, 7, 1, 1, 'fsadfasfw', '2014-09-14', NULL, NULL, NULL, NULL, NULL, 0, 'fafwadfasdfas', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:04:22', NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 41, 8, 1, 1, 'Abdullah bin', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:48:46', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 41, 9, 1, 1, 'Abdullah bin hassan', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:49:26', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 44, 10, 1, 1, 'Shuvo Hasan', '2014-09-14', NULL, NULL, NULL, NULL, NULL, 0, 'fafwadfasdfas', '0000-00-00', '2566888', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 12:49:50', NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 43, 16, 1, 1, 'jhkjhklh', '2017-01-15', 'Male', '4', '25', '3 ft', '', 0, '', '0000-00-00', '', '', 'Yes', 'Yes', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 13:46:19', NULL, 0, 1, 1, NULL, 'নাই', '', 'Yes', '', 'Yes', NULL, '', 'Yes', '', 'Yes', '', NULL, NULL, '                              	\r\n                              '),
(19, 43, 22, 1, 1, 'মনিকা', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 13:58:11', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 45, 23, 1, 1, 'Mim', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0, '', '0000-00-00', '', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-15 14:40:25', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 46, 24, 1, 1, 'সেজুতি', '2019-12-11', 'Male', '5', '30', '3', 'hand black sheet ', 123456789, '', '0000-00-00', '', '', 'No', 'Yes', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1613458631-CamScanner_06-17-2020_13_17_10.jpg', NULL, '2021-02-16 12:57:11', NULL, 0, 2, 1, NULL, '', 'n/a', 'No', 'n/a', 'Yes', NULL, 'n/a', 'No', 'n/a', 'No', 'n/a', '1', '1', '                              	\r\n                              '),
(29, NULL, NULL, 2, 1, 'আলেয়া সুলতানা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, 1, 1, 'আনিশা রহমান (সারা) ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, 2, 1, 'মোঃ মাহবুব আলম', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, 2, 1, 'শাকিল আহমেদ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, 2, 1, 'জাকিয়া সুলতানা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, 2, 1, 'মোঃ উজ্জ্বল মিয়া', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, 1, 1, 'মাহিবা মাসনাত', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, 1, 1, 'মিফরা মাসনাত', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, 2, 1, 'মোছাঃ ওয়াজেদা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, 2, 1, 'মোছাঃ শান্তা বেগম ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, 2, 1, 'মোছাঃ তানিয়া বেগম ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, 2, 1, 'মোছাঃ সুলতানা আক্তার  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, 2, 1, 'মোছাঃ আম্বিয়া বেগম ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, 1, 1, 'আরাধ্য ঘোষাল ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, 2, 1, 'মমতাজ ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, 2, 1, 'আনিকা রহমান ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, 1, 1, 'আমেনা ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, 1, 1, 'জায়ান জারার আলম ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, 1, 1, 'জায়মা জাহরা আলম ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, 1, 1, 'দেবিকা রায় ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, 1, 1, 'তাহরীন আয়াত ঋত্বিকা ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, 1, 1, 'রিতিশা ফারনাজ আলী ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, 1, 1, 'সামিয়া জামান রোদেলা ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, 1, 1, 'তাসমিয়া রহমান সাবা ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, 1, 1, 'নূরে আলম রাজীন ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, 1, 1, 'নাবিহা রহমান ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, 1, 1, 'খন্দকার আফনান ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, 1, 1, 'ইশাল বিনতে নাজমুল নাযাহ  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, 1, 1, 'আবরার দ্বীন আয়াত ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

CREATE TABLE `member_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `string` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`id`, `name`, `string`) VALUES
(1, 'Child', NULL),
(2, 'Staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `day_cares_id` int(11) NOT NULL,
  `parents_id` int(11) NOT NULL,
  `members_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `child_mother_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_national_no` int(11) DEFAULT NULL,
  `child_father_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_national_no` int(11) DEFAULT NULL,
  `child_parents_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_ph_no` int(11) DEFAULT NULL,
  `child_parents_national_no` int(11) DEFAULT NULL,
  `child_mother_designation` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_working_place` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_ph_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_total_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_basic_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_pay_scale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_job_duration` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_total_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_basic_salary` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_pay_scale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_present_address` text COLLATE utf8_unicode_ci,
  `child_mother_permanent_address` text COLLATE utf8_unicode_ci,
  `child_mother_parmanent_ph_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_permanent_address` text COLLATE utf8_unicode_ci,
  `child_father_ph_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_admit_interest` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_number` tinyint(4) DEFAULT NULL,
  `applicant_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `applicant_relation` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_dob` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_dob` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_dob` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_work_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_work_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_working_institute` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_work_ph_no` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_work_md` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_work_md_add` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_mother_working_institute_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_work_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_work_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_designation` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_working_institute` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_work_ph_no` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_work_md` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_work_md_add` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_father_working_institute_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_relation` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_parents_name_2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_parents_present_address_2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_parents_ph_no_2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_parents_national_no_2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_parents_relation_2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `child_doj` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `day_cares_id`, `parents_id`, `members_id`, `status`, `child_mother_name`, `child_mother_national_no`, `child_father_name`, `child_father_national_no`, `child_parents_name`, `child_parents_ph_no`, `child_parents_national_no`, `child_mother_designation`, `child_mother_working_place`, `child_mother_ph_no`, `child_mother_total_salary`, `child_mother_basic_salary`, `child_mother_pay_scale`, `child_mother_job_duration`, `child_father_total_salary`, `child_father_basic_salary`, `child_father_pay_scale`, `child_parents_present_address`, `child_mother_permanent_address`, `child_mother_parmanent_ph_no`, `child_father_permanent_address`, `child_father_ph_no`, `child_admit_interest`, `child_number`, `applicant_name`, `applicant_relation`, `child_mother_dob`, `child_mother_email`, `child_father_dob`, `child_father_email`, `child_parents_dob`, `child_mother_work_name`, `child_mother_work_type`, `child_mother_working_institute`, `child_mother_work_ph_no`, `child_mother_work_md`, `child_mother_work_md_add`, `child_mother_working_institute_type`, `child_father_work_name`, `child_father_work_type`, `child_father_designation`, `child_father_working_institute`, `child_father_work_ph_no`, `child_father_work_md`, `child_father_work_md_add`, `child_father_working_institute_type`, `child_parents_relation`, `child_parents_name_2`, `child_parents_present_address_2`, `child_parents_ph_no_2`, `child_parents_national_no_2`, `child_parents_relation_2`, `child_doj`, `reg_date`, `created`, `updated`) VALUES
(2, 1, 27, 0, NULL, 'সাইমা ইসলাম', 2147483647, 'আতাউল মোস্তাফা', 2147483647, 'আতাউল মোস্তাফা', 1977450000, 254875855, 'ম্যানেজার', 'বিডি', '018548785878', '30000', '20000', 'গ্রেড - ২', '৫ বছর', '40000', '25000', 'গ্রেড - ৩', 'আদাবর, ঢাকা', 'চট্টগ্রাম', '0185525554', 'চট্টগ্রাম', '25454587', '১', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, '2020-01-15 18:14:20', NULL),
(3, 1, 27, 0, NULL, 'dfdsfsdfsd', 0, 'dsfsdf', 0, '', 0, 0, '', '', 'dsfdsfdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfdsfsd', 'dsfdsfsd', 'dsf', '', '', NULL, NULL, 'fsdfdsdsf sdfsdfsd', 'Mother', '2021-03-04', '', '', '', '', 'dsfdsfsd', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-13 20:49:02', NULL),
(4, 1, 27, 0, NULL, 'sdfds', 0, 'dsfdsf', 0, '', 0, 0, '', '', 'dsfdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'sdfdsfds', 'sdfd', '', '', NULL, NULL, 'helllllllll', 'Mother', '2021-02-16', 'fsdfsdfsd', '2021-02-17', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-13 21:40:32', NULL),
(5, 1, 27, 0, NULL, '', 0, '', 0, '', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, 'dsfdsf sdf', 'Mother', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-13 22:11:25', NULL),
(6, 1, 41, 0, NULL, 'umme abdullah', 2147483647, 'khalid', 2147483647, 'Siam', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, 'umme abdullah', 'Mother', '1995-03-11', 'umme@gmail.com', '1994-12-08', 'khalid@gmail.com', '2000-04-18', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 11:51:37', NULL),
(7, 1, 42, 0, NULL, 'Diba', 2147483647, 'Shamim Khan', 2147483647, '', 0, 0, 'Admin', '', '01714667499', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Dhaka', '01714667499', 'dhaka', '01714667499', '4', 1, 'Tawaf Khan', 'Mother', '2014-09-14', 'shamim175@gmail.com', '1983-12-08', 'shamim khan', '', 'Job', '1', '', '', 'fdaf', 'fa', NULL, 'ffdf', NULL, 'ddd', 'dd', 'ddd', '', 'fdf', '2', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-24', NULL, '2021-02-15 12:04:22', NULL),
(8, 1, 41, 0, NULL, '', 0, '', 0, '', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, '', 'Mother', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 12:48:46', NULL),
(9, 1, 41, 0, NULL, '', 0, '', 0, '', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, 'umme abdullah', 'Mother', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 12:49:26', NULL),
(10, 1, 44, 0, NULL, 'Diba', 2147483647, 'Shamim Khan', 2147483647, 'hhhh', 0, 0, '', '', '01714667499', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rrrr', 'Dhaka', '01714667499', 'Dhaka', '01714667499', NULL, NULL, 'Shuvo Hasan', 'Mother', '1992-08-29', 'shamim.mysoftheaven@gmail.com', '1983-12-08', 'shamim khan', '2021-02-15', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 12:49:50', NULL),
(11, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:13:17', NULL),
(12, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:15:40', NULL),
(13, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:15:49', NULL),
(14, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:16:37', NULL),
(15, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:16:44', NULL),
(16, 1, 43, 0, NULL, 'lg', 0, '', 0, '', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, 'test', 'Mother', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 13:22:25', NULL),
(17, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:22:47', NULL),
(18, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:22:58', NULL),
(19, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:25:06', NULL),
(20, 0, 41, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:25:51', NULL),
(21, 0, 43, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, '0000-00-00', '2021-02-15 13:46:19', NULL),
(22, 1, 43, 0, NULL, '', 0, '', 0, '', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, 'মাহাফুজা মায়া', 'Mother', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 13:58:11', NULL),
(23, 1, 45, 0, NULL, 'jjjj', 2147483647, '', 0, '', 0, 0, '', '', '01714667499', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Dhaka', '01714667499', '', '', NULL, NULL, 'Mim', 'Mother', '', 'accounts@mysoftheaven.com', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-15 14:40:24', NULL),
(24, 1, 46, 0, NULL, 'হাসান', 12345678, 'মেহেদী', 123456789, 'Rasel', 0, 0, '', '', '01713798089', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Mohammadpur, Dhaka', '01757950905', 'Mohammadpur, Dhaka', '01713798089', NULL, NULL, 'মেহেদী', 'Father', '2010-12-03', 'mehedidwa@gmail.com', '1985-12-03', 'mehedidwa@gmail.com', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-16 12:49:46', NULL),
(25, 0, 46, 0, NULL, NULL, NULL, NULL, NULL, 'Rasel', 1685982263, 123456789, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uncle', '', '', '', '', '', NULL, '2021-12-02', '2021-02-16 12:57:11', NULL),
(26, 1, 48, 0, NULL, 'Lipi', 0, '', 0, '', 0, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, 'Lipi', 'Mother', '', '', '', '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-02-18 11:07:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`,`members_id`,`day_cares_id`),
  ADD KEY `fk_attendances_members1_idx` (`members_id`),
  ADD KEY `fk_attendances_day_cares1_idx` (`day_cares_id`);

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`,`day_cares_id`,`budget_types_id`),
  ADD KEY `fk_budgets_day_cares1_idx` (`day_cares_id`),
  ADD KEY `fk_budgets_budget_types1_idx` (`budget_types_id`);

--
-- Indexes for table `budget_items`
--
ALTER TABLE `budget_items`
  ADD PRIMARY KEY (`id`,`budgets_id`),
  ADD KEY `fk_budget_items_budgets1_idx` (`budgets_id`);

--
-- Indexes for table `budget_types`
--
ALTER TABLE `budget_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`,`day_cares_id`),
  ADD KEY `fk_events_day_cares1_idx` (`day_cares_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`,`day_cares_id`),
  ADD KEY `fk_galleries_day_cares1_idx` (`day_cares_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`,`member_types_id`,`day_cares_id`),
  ADD KEY `fk_members_day_cares1_idx` (`day_cares_id`),
  ADD KEY `fk_members_member_types1_idx` (`member_types_id`);

--
-- Indexes for table `members2`
--
ALTER TABLE `members2`
  ADD PRIMARY KEY (`id`,`member_types_id`,`day_cares_id`),
  ADD KEY `fk_members_day_cares1_idx` (`day_cares_id`),
  ADD KEY `fk_members_member_types1_idx` (`member_types_id`);

--
-- Indexes for table `member_types`
--
ALTER TABLE `member_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`,`day_cares_id`,`parents_id`,`members_id`),
  ADD KEY `fk_registrations_parents1_idx` (`parents_id`),
  ADD KEY `fk_registrations_members1_idx` (`members_id`),
  ADD KEY `fk_registrations_day_cares2_idx` (`day_cares_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;
--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `budget_items`
--
ALTER TABLE `budget_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `budget_types`
--
ALTER TABLE `budget_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `members2`
--
ALTER TABLE `members2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
