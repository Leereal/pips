-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 02:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pips`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(25) NOT NULL,
  `user` int(35) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `device` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user`, `ip_address`, `created_at`, `updated_at`, `device`, `browser`, `os`) VALUES
(61, 49, '105.112.208.165', '2021-10-26 14:23:47', '2021-10-26 14:23:47', 'WebKit', 'Chrome', 'AndroidOS'),
(62, 49, '105.112.208.165', '2021-10-26 14:23:47', '2021-10-26 14:23:47', 'WebKit', 'Chrome', 'AndroidOS'),
(63, 49, '105.112.33.130', '2021-10-27 12:31:32', '2021-10-27 12:31:32', 'WebKit', 'Chrome', 'Windows'),
(64, 49, '105.112.33.130', '2021-10-27 12:31:32', '2021-10-27 12:31:32', 'WebKit', 'Chrome', 'Windows'),
(67, 17, '197.210.79.245', '2021-10-27 14:32:49', '2021-10-27 14:32:49', 'iPhone', 'Chrome', 'iOS'),
(68, 17, '197.210.79.245', '2021-10-27 14:32:49', '2021-10-27 14:32:49', 'iPhone', 'Chrome', 'iOS'),
(69, 17, '197.210.227.5', '2021-10-27 16:38:42', '2021-10-27 16:38:42', 'iPhone', 'Chrome', 'iOS'),
(70, 17, '197.210.227.5', '2021-10-27 16:38:42', '2021-10-27 16:38:42', 'iPhone', 'Chrome', 'iOS'),
(71, 17, '105.112.101.14', '2021-10-27 19:26:18', '2021-10-27 19:26:18', 'iPhone', 'Chrome', 'iOS'),
(72, 17, '105.112.101.14', '2021-10-27 19:26:18', '2021-10-27 19:26:18', 'iPhone', 'Chrome', 'iOS'),
(73, 17, '105.112.101.14', '2021-10-27 21:17:51', '2021-10-27 21:17:51', 'WebKit', 'Chrome', 'Windows'),
(74, 17, '105.112.101.14', '2021-10-27 21:17:51', '2021-10-27 21:17:51', 'WebKit', 'Chrome', 'Windows'),
(75, 17, '105.112.101.14', '2021-10-27 22:11:33', '2021-10-27 22:11:33', 'WebKit', 'Chrome', 'AndroidOS'),
(76, 17, '105.112.101.14', '2021-10-27 22:11:33', '2021-10-27 22:11:33', 'WebKit', 'Chrome', 'AndroidOS'),
(77, 17, '105.112.109.130', '2021-10-28 06:18:10', '2021-10-28 06:18:10', 'iPhone', 'Chrome', 'iOS'),
(78, 17, '105.112.109.130', '2021-10-28 06:18:10', '2021-10-28 06:18:10', 'iPhone', 'Chrome', 'iOS'),
(79, 17, '105.112.109.130', '2021-10-28 06:30:41', '2021-10-28 06:30:41', 'WebKit', 'Chrome', 'AndroidOS'),
(80, 17, '105.112.109.130', '2021-10-28 06:30:41', '2021-10-28 06:30:41', 'WebKit', 'Chrome', 'AndroidOS'),
(81, 17, '77.111.247.214', '2021-10-28 13:26:51', '2021-10-28 13:26:51', 'WebKit', 'Opera', 'Windows'),
(82, 17, '77.111.247.214', '2021-10-28 13:26:51', '2021-10-28 13:26:51', 'WebKit', 'Opera', 'Windows'),
(83, 17, '105.112.101.242', '2021-10-28 14:34:18', '2021-10-28 14:34:18', 'iPhone', 'Safari', 'iOS'),
(84, 17, '105.112.101.242', '2021-10-28 14:34:19', '2021-10-28 14:34:19', 'iPhone', 'Safari', 'iOS'),
(85, 17, '77.111.247.100', '2021-10-28 15:40:32', '2021-10-28 15:40:32', 'WebKit', 'Opera', 'Windows'),
(86, 17, '77.111.247.100', '2021-10-28 15:40:32', '2021-10-28 15:40:32', 'WebKit', 'Opera', 'Windows'),
(87, 17, '105.112.109.130', '2021-10-28 18:32:39', '2021-10-28 18:32:39', 'WebKit', 'Chrome', 'AndroidOS'),
(88, 17, '105.112.109.130', '2021-10-28 18:32:39', '2021-10-28 18:32:39', 'WebKit', 'Chrome', 'AndroidOS'),
(89, 17, '105.112.109.130', '2021-10-28 22:52:23', '2021-10-28 22:52:23', 'iPhone', 'Chrome', 'iOS'),
(90, 17, '105.112.109.130', '2021-10-28 22:52:24', '2021-10-28 22:52:24', 'iPhone', 'Chrome', 'iOS'),
(91, 17, '197.210.79.74', '2021-10-31 12:42:40', '2021-10-31 12:42:40', '0', 'Firefox', 'Windows'),
(92, 17, '197.210.79.74', '2021-10-31 12:42:40', '2021-10-31 12:42:40', '0', 'Firefox', 'Windows'),
(93, 17, '197.210.84.39', '2021-10-31 12:49:10', '2021-10-31 12:49:10', '0', 'Firefox', 'Windows'),
(94, 17, '197.210.84.39', '2021-10-31 12:49:10', '2021-10-31 12:49:10', '0', 'Firefox', 'Windows'),
(95, 17, '105.112.33.15', '2021-10-31 13:01:14', '2021-10-31 13:01:14', 'WebKit', 'Chrome', 'Windows'),
(96, 17, '105.112.33.15', '2021-10-31 13:01:14', '2021-10-31 13:01:14', 'WebKit', 'Chrome', 'Windows'),
(97, 17, '129.205.113.13', '2021-10-31 13:20:51', '2021-10-31 13:20:51', '0', 'Firefox', 'Windows'),
(98, 17, '129.205.113.13', '2021-10-31 13:20:51', '2021-10-31 13:20:51', '0', 'Firefox', 'Windows'),
(99, 17, '129.205.113.13', '2021-10-31 13:35:51', '2021-10-31 13:35:51', '0', 'Firefox', 'Windows'),
(100, 17, '129.205.113.13', '2021-10-31 13:35:51', '2021-10-31 13:35:51', '0', 'Firefox', 'Windows'),
(101, 17, '129.205.124.53', '2021-11-01 14:45:39', '2021-11-01 14:45:39', '0', 'Firefox', 'Windows'),
(102, 17, '129.205.124.53', '2021-11-01 14:45:39', '2021-11-01 14:45:39', '0', 'Firefox', 'Windows'),
(103, 17, '105.112.33.211', '2021-11-01 14:58:20', '2021-11-01 14:58:20', 'WebKit', 'Chrome', 'Windows'),
(104, 17, '105.112.33.211', '2021-11-01 14:58:20', '2021-11-01 14:58:20', 'WebKit', 'Chrome', 'Windows'),
(105, 17, '105.112.33.211', '2021-11-01 15:24:44', '2021-11-01 15:24:44', 'iPhone', 'Chrome', 'iOS'),
(106, 17, '105.112.33.211', '2021-11-01 15:24:44', '2021-11-01 15:24:44', 'iPhone', 'Chrome', 'iOS'),
(107, 50, '::1', '2022-01-30 06:55:00', '2022-01-30 06:55:00', 'WebKit', 'Chrome', 'Windows'),
(108, 50, '::1', '2022-01-30 06:55:00', '2022-01-30 06:55:00', 'WebKit', 'Chrome', 'Windows'),
(109, 50, '::1', '2022-01-30 06:56:52', '2022-01-30 06:56:52', 'WebKit', 'Chrome', 'Windows'),
(110, 50, '::1', '2022-01-30 06:56:53', '2022-01-30 06:56:53', 'WebKit', 'Chrome', 'Windows'),
(111, 17, '::1', '2022-01-30 06:59:11', '2022-01-30 06:59:11', 'WebKit', 'Chrome', 'Windows'),
(112, 17, '::1', '2022-01-30 06:59:11', '2022-01-30 06:59:11', 'WebKit', 'Chrome', 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_2fa_expiry` datetime DEFAULT current_timestamp(),
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disbaled',
  `token_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `token_2fa_expiry`, `enable_2fa`, `token_2fa`, `pass_2fa`, `phone`, `dashboard_style`, `remember_token`, `acnt_type_active`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Test', 'super@happ.com', NULL, '$2y$10$os3fPHLrHAGG2GkfLE0XhOjH3fI5Fmrc8rb.W3nxIC.Oxu9pX3clq', '2021-10-19 17:37:35', 'disabled', '70986', 'true', '34444443', 'light', NULL, 'active', 'active', 'Super Admin', '2021-03-10 12:55:53', '2022-01-30 05:45:55'),
(4, 'Manager', 'One', 'admin@happ.com', NULL, '$2y$10$At.dpFN.klqf36lelo9ooOei2Ylf.fqzxYqgXs6ZfgNUWP7OZl6ze', '2021-10-26 09:39:09', 'disbaled', NULL, NULL, '88383883', 'light', NULL, 'blocked', 'active', 'Admin', '2021-10-26 17:39:09', '2022-01-30 06:17:06'),
(5, 'John', 'Phiri', 'john@gmail.com', NULL, '$2y$10$XqNvyzNV2n2aIOHdbgixYOPtuEMP.1hqFZxb3IriE/9xbgS7NL1E2', '2022-01-30 10:14:31', 'disbaled', NULL, NULL, '0651749011', 'light', NULL, 'active', 'active', 'Admin', '2022-01-30 06:14:31', '2022-01-30 06:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_refered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_activated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `earnings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent`, `total_refered`, `total_activated`, `earnings`, `created_at`, `updated_at`) VALUES
(4, '17', '3', '0', '0', '2021-04-14 09:45:06', '2021-04-19 12:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(255) NOT NULL,
  `ref_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `ref_key`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'SMsJr1', 'What our Customer says!', 'Don\'t take our word for it, here\'s what some of our clients have to say about us', '2020-08-22 11:13:00', '2021-10-27 09:59:35'),
(11, 'anvs8c', 'About Us', 'About us header', '2020-08-22 11:32:29', '2021-10-27 10:21:22'),
(12, 'epJ4LI', 'Who we are', 'online trade \r\n                            is a solution for creating an investment management platform. It is suited for\r\n                            hedge or mutual fund managers and also Forex, stocks, bonds and cryptocurrency traders who\r\n                            are looking at runing pool trading system. Onlinetrader simplifies the investment,\r\n                            monitoring and management process. With a secure and compelling mobile-first design,\r\n                            together with a default front-end design, it takes few minutes to setup your own investment\r\n                            management or pool trading platform.', '2020-08-22 11:33:32', '2021-10-27 10:24:01'),
(13, '5hbB6X', 'Get Started', 'How to get started ?', '2020-08-22 11:33:55', '2021-10-27 10:25:09'),
(14, 'Zrhm3I', 'Create an Account', 'Create an account with us using your preffered email/username', '2020-08-22 11:34:11', '2021-10-27 10:25:29'),
(15, 'yTKhlt', 'Make a Deposit', 'Make A deposit with any of your preffered currency', '2020-08-22 11:34:26', '2021-10-27 10:25:52'),
(16, 'u0Ervr', 'Start Trading/Investing', 'Start trading with Indices commodities e.tc', '2020-08-22 11:34:56', '2021-10-27 10:26:12'),
(23, 'vr6Xw0', 'Our Investment Packages', 'Choose how you want to invest with us', '2020-08-22 11:37:43', '2021-10-27 09:58:51'),
(30, '52GPRA', 'Address', '71 Cherry Court SOUTHAMPTON SO53 5PD UK', '2020-08-22 11:40:19', '2020-08-22 11:40:19'),
(31, '0EXbji', 'Phone Number', '+234 9xxxxxxxx', '2020-08-22 11:40:36', '2020-09-14 10:13:57'),
(32, 'HLgyaQ', 'Email', 'support@sitename.come', '2020-08-22 11:41:14', '2020-08-22 12:23:55'),
(35, 'Mnag31', 'The Better Way to Trade & Invest', 'Online Trade helps over 2 million customers achieve their financial goals by helping them trade and invest with ease', '2021-10-27 09:42:23', '2021-10-27 09:42:23'),
(36, 'rXJ7JQ', 'Trade Invest stock, and Bond', 'Home page text', '2021-10-27 09:45:17', '2021-10-27 09:45:17'),
(37, 'J23T0Y', 'Security Comes First', 'Security Comes first', '2021-10-27 09:53:15', '2021-10-27 09:54:52'),
(38, '9HOR1z', 'Security', 'Online Trade uses the highest levels of Internet Security, and it is secured by 256 bits SSL security encryption to ensure that your information is completely protected from fraud.', '2021-10-27 09:56:13', '2021-10-27 09:56:13'),
(39, '7DH2G9', 'Two Factor Auth', 'Two-factor authentication (2FA) by default on all Online Trade accounts, to securely protect you from unauthorised access and impersonation.', '2021-10-27 09:56:26', '2021-10-27 09:56:26'),
(40, '5Vg32I', 'Explore Our Services', 'It’s our mission to provide you with a delightful and a successful trading experience!', '2021-10-27 09:56:38', '2021-10-27 09:56:38'),
(41, 'Vg6Gy7', 'Powerful Trading Platforms', 'Online Trade offers multiple platform options to cover the needs of each type of trader and investors .', '2021-10-27 09:56:53', '2021-10-27 09:56:53'),
(42, '1Sx1dl', 'High leverage', 'Chance to magnify your investment and really win big with super-low spreads to further up your profits', '2021-10-27 09:57:06', '2021-10-27 09:57:06'),
(43, 'YYqKx3', 'Fast execution', 'Super-fast trading software, so you never suffer slippage.', '2021-10-27 09:57:20', '2021-10-27 09:57:20'),
(44, 'yGg8xI', 'Ultimate Security', 'With advanced security systems, we keep your account always protected.', '2021-10-27 09:57:35', '2021-10-27 09:57:35'),
(45, 'xEWMho', '24/7 live chat Support', 'Connect with our 24/7 support and Market Analyst on-demand.', '2021-10-27 09:57:48', '2021-10-27 09:57:48'),
(46, '9SOtK1', 'Always on the go? Mobile trading is easier than ever with Online Trade!', 'Get your hands on our customized Trading Platform with the comfort of freely trading on the move, to experience truly liberating trading sessions.', '2021-10-27 09:58:05', '2021-10-27 09:58:05'),
(47, 'wOS1ve', 'Cryptocurrency', 'Trade and invest Top Cryptocurrency', '2021-10-27 09:59:07', '2021-10-27 09:59:07'),
(48, 'wuZlis', 'Hello!, How can we help you?', 'Hello!, How can we help you?', '2021-10-27 10:32:12', '2021-10-27 10:32:12'),
(49, '1TYkw0', 'Find the help you need', 'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.', '2021-10-27 10:32:33', '2021-10-27 10:32:33'),
(50, 'rK6Yhn', 'FAQs', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:32:49', '2021-10-27 10:32:49'),
(51, 'HBHBLo', 'Guides / Support', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:33:03', '2021-10-27 10:33:03'),
(52, 'rCTDQh', 'Support Request', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:33:14', '2021-10-27 10:33:14'),
(53, 'kMsswR', 'Get Started', 'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.', '2021-10-27 10:33:28', '2021-10-27 10:33:28'),
(54, 'EOUU7R', 'Get in Touch !', 'This is required when, for text is not yet available.', '2021-10-27 10:33:56', '2021-10-27 10:33:56'),
(56, 'ROu4q6', 'Contact Us', 'Contact Us', '2021-10-27 10:47:41', '2021-10-27 10:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `cp_transactions`
--

CREATE TABLE `cp_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Item_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_tele_id` int(11) DEFAULT NULL,
  `amount1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_p_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_pv_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_m_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_ipn_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_debug_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cp_transactions`
--

INSERT INTO `cp_transactions` (`id`, `txn_id`, `item_name`, `Item_number`, `amount_paid`, `user_plan`, `user_id`, `user_tele_id`, `amount1`, `amount2`, `currency1`, `currency2`, `status`, `status_text`, `type`, `cp_p_key`, `cp_pv_key`, `cp_m_id`, `cp_ipn_secret`, `cp_debug_email`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TYooMQauvdEDq54NiTphI7jx', '4eC39HqLyjWDarjtT1zdp7dc', 'Merchid ID', 'jnndjnhdjdj', 'super@happ.com', '2021-03-11 12:46:45', '2021-10-20 17:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_accounts`
--

CREATE TABLE `crypto_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `btc` float DEFAULT NULL,
  `eth` float DEFAULT NULL,
  `ltc` float DEFAULT NULL,
  `xrp` float DEFAULT NULL,
  `link` float DEFAULT NULL,
  `bnb` float DEFAULT NULL,
  `aave` float DEFAULT NULL,
  `usdt` float DEFAULT NULL,
  `xlm` float DEFAULT NULL,
  `bch` float DEFAULT NULL,
  `ada` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_accounts`
--

INSERT INTO `crypto_accounts` (`id`, `user_id`, `btc`, `eth`, `ltc`, `xrp`, `link`, `bnb`, `aave`, `usdt`, `xlm`, `bch`, `ada`, `created_at`, `updated_at`) VALUES
(1, 17, 0.99988, 0.00175792, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-10-31 12:25:53', '2021-10-31 12:25:53'),
(2, 50, NULL, NULL, NULL, 17.9269, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-30 04:34:26', '2022-01-30 04:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `txn_id`, `user`, `amount`, `payment_mode`, `plan`, `status`, `proof`, `created_at`, `updated_at`) VALUES
(46, NULL, 17, '500', 'Stripe', 0, 'Processed', 'Stripe', '2021-10-15 17:33:55', '2021-10-15 17:33:55'),
(47, NULL, 17, '500', 'Skrill', NULL, 'Processed', '4zyKbRcu1.jpg1634658938', '2021-10-19 14:55:39', '2021-10-19 14:59:04'),
(48, NULL, 17, '50', 'Stripe', 0, 'Processed', 'Stripe', '2021-10-20 17:40:40', '2021-10-20 17:40:40'),
(50, NULL, 49, '1000', 'Express Deposit', NULL, 'Processed', NULL, '2021-10-25 13:39:23', '2021-10-25 13:39:23'),
(51, NULL, 17, '500', 'Skrill', NULL, 'Processed', 'war7TUsh1.jpg1635256113', '2021-10-26 17:48:33', '2021-10-26 17:49:49'),
(53, NULL, 17, '300', 'Stripe', 0, 'Processed', 'Stripe', '2021-10-29 02:53:47', '2021-10-29 02:53:47');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `ref_key`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '8yZ6FC', 'How can i withdraw', 'This is how to withdraw', '2021-03-11 14:31:42', '2021-03-11 14:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `ref_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `ref_key`, `title`, `description`, `img_path`, `created_at`, `updated_at`) VALUES
(8, 'DPd1Kn', 'Testimonial 1', 'Testimonial 1', 'SIu0JZ01.jpg1635329714', '2020-08-23 12:24:52', '2021-10-27 10:15:14'),
(9, 'ZqCgDz', 'Testimonial 2', 'Testimonial 2', '5EJXRd02.jpg1635329727', '2020-08-23 12:25:07', '2021-10-27 10:15:27'),
(14, 'b9158B', 'Home Image', 'The image at the home page', 'b9158Babout.jpg', '2021-10-27 09:48:42', '2021-10-27 09:48:42'),
(15, 'iAwfKe', 'About image', 'The image in the about page', 'iAwfKeabout.png', '2021-10-27 10:22:20', '2021-10-27 10:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddresses`
--

CREATE TABLE `ipaddresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ipaddresses`
--

INSERT INTO `ipaddresses` (`id`, `ipaddress`, `created_at`, `updated_at`) VALUES
(30, '141.101.99.32', '2021-10-29 13:08:40', '2021-10-29 13:08:40'),
(32, '197.210.84.39', '2021-10-31 16:50:20', '2021-10-31 16:50:20'),
(33, '197.210.79.74', '2021-10-31 16:50:31', '2021-10-31 16:50:31');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_09_142220_create_sessions_table', 1),
(7, '2021_03_10_082445_create_admins_table', 2),
(8, '2021_03_10_082519_create_agents_table', 2),
(9, '2021_03_10_082715_create_assets_table', 2),
(10, '2021_03_10_082817_create_contents_table', 2),
(11, '2021_03_10_083110_create_cp_transactions_table', 2),
(12, '2021_03_10_083324_create_deposits_table', 2),
(13, '2021_03_10_083400_create_faqs_table', 2),
(14, '2021_03_10_083510_create_images_table', 2),
(15, '2021_03_10_083557_create_mt4_details_table', 2),
(16, '2021_03_10_083627_create_notifications_table', 2),
(17, '2021_03_10_083824_create_plans_table', 2),
(18, '2021_03_10_083850_create_settings_table', 2),
(19, '2021_03_10_083936_create_testimonies_table', 2),
(20, '2021_03_10_084009_create_tp__transactions_table', 2),
(21, '2021_03_10_084031_create_upgrades_table', 2),
(22, '2021_03_10_084120_create_userlogs_table', 2),
(23, '2021_03_10_084140_create_user_plans_table', 2),
(24, '2021_03_10_084235_create_wdmethods_table', 2),
(25, '2021_03_10_084300_create_withdrawals_table', 2),
(26, '2021_04_06_083043_create_tasks_table', 3),
(27, '2021_04_23_110006_create_exchanges_table', 4),
(28, '2021_04_23_114622_create_coin_transactions_table', 5),
(29, '2021_04_27_080945_create_currencies_table', 6),
(30, '2021_04_29_110349_create_c_withdrawals_table', 7),
(31, '2021_10_07_112653_create_ipaddresses_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `mt4_details`
--

CREATE TABLE `mt4_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `mt4_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mt4_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leverage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mt4_details`
--

INSERT INTO `mt4_details` (`id`, `client_id`, `mt4_id`, `mt4_password`, `type`, `account_type`, `currency`, `leverage`, `server`, `options`, `duration`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(5, 17, 'isjsj', 'jdvkbhkvhka', NULL, 'standard', 'AED', '1:400', 'hotforex', NULL, 'Monthly', 'Active', '2021-10-26 13:57:57', '2021-11-26 13:57:57', '2021-10-26 17:55:25', '2021-10-26 17:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(2, 9, 'This is a new mail Victory, kindly apprehiend', '2021-03-12 12:38:30', '2021-03-12 12:38:30');

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
-- Table structure for table `paystacks`
--

CREATE TABLE `paystacks` (
  `id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `paystack_public_key` text DEFAULT NULL,
  `paystack_secret_key` text DEFAULT NULL,
  `paystack_url` varchar(255) DEFAULT NULL,
  `paystack_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paystacks`
--

INSERT INTO `paystacks` (`id`, `created_at`, `updated_at`, `paystack_public_key`, `paystack_secret_key`, `paystack_url`, `paystack_email`) VALUES
(1, '2021-10-07 10:26:10', '2021-10-27 20:58:21', 'Your public key', 'Your secret key', 'https://api.paystack.co', 'Your merchant email');

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_interval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `min_price`, `max_price`, `minr`, `maxr`, `gift`, `expected_return`, `type`, `increment_interval`, `increment_type`, `increment_amount`, `expiration`, `created_at`, `updated_at`) VALUES
(2, 'Starter', '20', '20', '50', '230', '60', '0', NULL, 'Main', 'Every 30 Minutes', 'Percentage', '5', '4 Hours', '2021-04-16 07:46:09', '2021-10-20 18:06:01'),
(3, 'Premium', '30', '20', '20', '40', '60', '0', NULL, 'Main', 'Weekly', 'Fixed', '20', '2 Months', '2021-04-22 12:18:09', '2021-10-19 07:48:01'),
(5, 'Professional', '1000', '950', '1000', '230', '500', '0', NULL, 'Main', 'Hourly', 'Percentage', '2', '5 Months', '2021-10-05 10:48:31', '2021-10-19 12:56:05'),
(6, 'Gold', '100', '10', '100', '2', '20', '1', NULL, 'Main', 'Weekly', 'Percentage', '20', '1 Months', '2022-01-30 06:07:20', '2022-01-30 06:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6cvdhnLr5UxCksxtRJ9z3SxZedTMNqyoGpI4To6d', 50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWkRhbVJ6RnJTcE52Q3A2dUFvbDFEQklqc3BlcU9FV1FFYWxCWUdxOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRBMkpHcTd6dy9XVlpmb0RQUXFmdjdPdUlvWTVaWEUzNjB2OEQwS1QxM3p2eHg2aXc1TVdpQyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTA7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3Qvb25saW5ldHJhZGVyL2Rhc2hib2FyZC9yZWZlcnVzZXIiO31zOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRBMkpHcTd6dy9XVlpmb0RQUXFmdjdPdUlvWTVaWEUzNjB2OEQwS1QxM3p2eHg2aXc1TVdpQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MToiaHR0cDovL2xvY2FsaG9zdC9vbmxpbmV0cmFkZXIvZGFzaGJvYXJkL3dpdGhkcmF3YWxzIjt9fQ==', 1643532562),
('6ivTHGgrB2l9KeoUxQwpcYh9hWxYWU20JKQJWHXp', 50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTW84NUpBdHF0Z0F6MDJSY0VxdkVxWXhUR3Yya2tDblBkclhjbkh3SiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTA7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRBMkpHcTd6dy9XVlpmb0RQUXFmdjdPdUlvWTVaWEUzNjB2OEQwS1QxM3p2eHg2aXc1TVdpQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3Qvb25saW5ldHJhZGVyL2Rhc2hib2FyZC9kZXBvc2l0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEEySkdxN3p3L1dWWmZvRFBRcWZ2N091SW9ZNVpYRTM2MHY4RDBLVDEzenZ4eDZpdzVNV2lDIjt9', 1643540323);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_sitekey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_p_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_cs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_ci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_translate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_trade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_server` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfromname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_encrypt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_redirect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_with` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_verification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `enable_social_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'auto',
  `deposit_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_annoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_service` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quarterlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newupdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `description`, `currency`, `s_currency`, `capt_secret`, `capt_sitekey`, `payment_mode`, `location`, `s_s_k`, `s_p_k`, `pp_cs`, `pp_ci`, `keywords`, `site_title`, `site_address`, `logo`, `favicon`, `trade_mode`, `google_translate`, `weekend_trade`, `contact_email`, `timezone`, `mail_server`, `emailfrom`, `emailfromname`, `smtp_host`, `smtp_port`, `smtp_encrypt`, `smtp_user`, `smtp_password`, `google_secret`, `google_id`, `google_redirect`, `referral_commission`, `referral_commission1`, `referral_commission2`, `referral_commission3`, `referral_commission4`, `referral_commission5`, `signup_bonus`, `tawk_to`, `enable_2fa`, `enable_kyc`, `enable_with`, `enable_verification`, `enable_social_login`, `withdrawal_option`, `deposit_option`, `dashboard_option`, `enable_annoc`, `subscription_service`, `captcha`, `commission_type`, `commission_fee`, `monthlyfee`, `quarterlyfee`, `yearlyfee`, `newupdate`, `created_at`, `updated_at`) VALUES
(1, 'Pipsbulls', 'Pipsbulls is an information station for forex,volatility indices (deriv) commodities, binary options, indices and cryptocurrency traders. Providing you with the best strategies and trading opportunities whilst equipping you with the tools you need to be successful.', '$', 'USD', 'Your captcha secret', 'Your site key', '123567', 'Local', 'sk_test_51JP8qpSBWKZBQRLPWqHkFM8oqFEAqXLAaH3S8byZF73X0UycxijVyfebcyu6OVoZ8eeAelr3js3ADYIGU22Dk2Vo00kGkdE9xP', 'pk_test_51JP8qpSBWKZBQRLPUIfQVYfUGly65fb1LiPUwAUajKy1nVM9Rvly3v3hQLvXnRqrWCrnUNz1qPQHNSxE689tSAoL00B1iOTNfd', 'jijdjkdkdk', 'iidjdjdj', 'forex, investment, earn online', 'Welcome to Pipsbulls', 'http://pipsbulls.com', 'pyxVoglogotext.png1643531101', 'upload-favicon.png1617293031', 'on', 'off', 'off', 'support@pipsbulls.com', 'Africa/Johannesburg', 'sendmail', 'onlintrade@happ.com', 'Online Trade', 'Your host here', '25251', 'tls', 'Your username', 'Your password', 'Your client secret', 'your client ID', 'http://yoursiteurl/auth/google/callback', '8', '3', '0', '0', '0', '0', '5', '', 'no', 'no', 'true', 'true', 'yes', 'manual', 'manual', 'dark', 'on', 'off', 'false', NULL, NULL, '30', '40', '80', 'Welcome to Pipsbulls Investment. Please join our telegram group for more info\r\nhttps://t.me/pipsbullsdiscussion', NULL, '2022-01-30 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings_conts`
--

CREATE TABLE `settings_conts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `use_crypto_feature` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `fee` float DEFAULT 0,
  `btc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `eth` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `ltc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `link` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `bnb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `aave` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'enabled',
  `usdt` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `bch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `xlm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `xrp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `ada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_conts`
--

INSERT INTO `settings_conts` (`id`, `use_crypto_feature`, `fee`, `btc`, `eth`, `ltc`, `link`, `bnb`, `aave`, `usdt`, `bch`, `xlm`, `xrp`, `ada`, `created_at`, `updated_at`) VALUES
(1, 'true', 2, 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', '2021-10-31 13:32:30', '2021-11-01 18:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_privacies`
--

CREATE TABLE `terms_privacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `useterms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_privacies`
--

INSERT INTO `terms_privacies` (`id`, `description`, `useterms`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Our Commitment to You:</strong></p>\r\n\r\n<p>Thank you for showing interest in our service. In order for us to provide you with our service, we are required to collect and process certain personal data about you and your activity.</p>\r\n\r\n<p>By entrusting us with your personal data, we would like to assure you of our commitment to keep such information private and to operate in accordance with all regulatory laws and all EU data protection laws, including General Data Protection Regulation (GDPR) 679/2016 (EU).</p>\r\n\r\n<p>We have taken measurable steps to protect the confidentiality, security and integrity of this data. We encourage you to review the following information carefully.</p>\r\n\r\n<p><strong>Grounds for data collection:</strong></p>\r\n\r\n<p>Processing of your personal information (meaning, any data which may potentially allow your identification with reasonable means; hereinafter &ldquo;Personal Data&rdquo;) is necessary for the performance of our contractual obligations towards you and providing you with our services, to protect our legitimate interests and for compliance with legal and financial regulatory obligations to which we are subject.</p>\r\n\r\n<p>When you use our services, you consent to the collection, storage, use, disclosure and other uses of your Personal Data as described in this Privacy Policy.</p>\r\n\r\n<p><strong>How do we receive data about you?</strong></p>\r\n\r\n<p>We receive your Personal Data from various sources:</p>\r\n\r\n<ol>\r\n	<li>When you voluntarily provide us with your personal details in order to create an account (for example, your name and email address)</li>\r\n	<li>When you use or access our site and services, in connection with your use of our services (for example, your financial transactions)</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><strong>What type of data we collect?</strong></p>\r\n\r\n<p>In order to open an account, and in order to provide you with our services we will need you to collect the following data:</p>\r\n\r\n<p><strong>Personal Data<br />\r\nWe collect the following Personal Data about you:</strong></p>\r\n\r\n<ul>\r\n	<li><em>Registration data</em>&nbsp;&ndash; your name, email address, phone number, occupation, country of residence, and your age (in order to verify you are over 18 years of age and eligible to participate in our service).</li>\r\n	<li><em>Voluntary data</em>&nbsp;&ndash; when you communicate with us (for example when you send us an email or use a &ldquo;contact us&rdquo; form on our site) we collect the personal data you provided us with.</li>\r\n	<li><em>Financial data</em>&nbsp;&ndash; by its nature, your use of our services includes financial transactions, thus requiring us to obtain your financial details, which includes, but not limited to your payment details (such as bank account details and financial transactions performed through our services).</li>\r\n	<li><em>Technical data</em>&nbsp;&ndash; we collect certain technical data that is automatically recorded when you use our services, such as your IP address, MAC address, device approximate location</li>\r\n	<li>Non Personal Data</li>\r\n</ul>\r\n\r\n<p>We record and collect data from or about your device (for example your computer or your mobile device) when you access our services and visit our site. This includes, but not limited to: your login credentials, UDID, Google advertising ID, IDFA, cookie identifiers, and may include other identifiers such your operating system version, browser type, language preferences, time zone, referring domains and the duration of your visits. This will facilitate our ability to improve our service and personalize your experience with us.<br />\r\nIf we combine Personal Data with non-Personal Data about you, the combined data will be treated as Personal Data for as long as it remains combined.</p>\r\n\r\n<p><strong>Tracking Technologies</strong></p>\r\n\r\n<p>When you visit or access our services we use (and authorize 3rd parties to use) pixels, cookies, events and other technologies (&ldquo;Tracking Technologies&ldquo;). Those allow us to automatically collect data about you, your device and your online behavior, in order to enhance your navigation in our services, improve our site&rsquo;s performance, perform analytics and customize your experience on it. In addition, we may merge data we have with data collected through said tracking technologies with data we may obtain from other sources and, as a result, such data may become Personal Data.<br />\r\nCookie Policy page.</p>\r\n\r\n<p><strong>How do we use the data We collect?</strong></p>\r\n\r\n<ul>\r\n	<li>Provision of service &ndash; we will use your Personal Data you provide us for the provision and improvement of our services to you.</li>\r\n	<li>Marketing purposes &ndash; we will use your Personal Data (such as your email address or phone number). For example, by subscribing to our newsletter you will receive tips and announcements straight to your email account. We may also send you promotional material concerning our services or our partners&rsquo; services (which we believe may interest you), including but not limited to, by building an automated profile based on your Personal Data, for marketing purposes. You may choose not to receive our promotional or marketing emails (all or any part thereof) by clicking on the &ldquo;unsubscribe&rdquo; link in the emails that you receive from us. Please note that even if you unsubscribe from our newsletter, we may continue to send you service-related updates and notifications or reply to your queries and feedback you provide us.</li>\r\n	<li>Opt-out of receiving marketing materials &ndash; If you do not want us to use or share your personal data for marketing purposes, you may opt-out in accordance with this &ldquo;Opt-out&rdquo; section. Please note that even if you opt-out, we may still use and share your personal information with third parties for non-marketing purposes (for example to fulfill your requests, communicate with you and respond to your inquiries, etc.). In such cases, the companies with whom we share your personal data are authorized to use your Personal Data only as necessary to provide these non-marketing services.</li>\r\n	<li>Analytics, surveys and research &ndash; we are always trying to improve our services and think of new and exciting features for our users. From time to time, we may conduct surveys or test features, and analyze the information we have to develop, evaluate and improve these features.</li>\r\n	<li>Protecting our interests &ndash; we use your Personal Data when we believe it&rsquo;s necessary in order to take precautions against liabilities, investigate and defend ourselves against any third-party claims or allegations, investigate and protect ourselves from fraud, protect the security or integrity of our services and protect the rights and property of the company, its users and/or partners.</li>\r\n	<li>Enforcing of policies &ndash; we use your Personal Data in order to enforce our policies, including but limited to our Terms &amp; Conditions.</li>\r\n	<li>Compliance with legal and regulatory requirements &ndash; we also use your Personal Data to investigate violations and prevent money laundering and perform due-diligence checks, and as required by law, regulation or other governmental authority, or to comply with a subpoena or similar legal process.</li>\r\n</ul>\r\n\r\n<p><strong>With whom do we share your Personal Data</strong></p>\r\n\r\n<ul>\r\n	<li>Internal concerned parties &ndash; we share your data with companies in our group, as well as our employees limited to those employees or partners who need to know the information in order to provide you with our services.</li>\r\n	<li>Financial providers and payment processors &ndash; we share your financial data about you for purposes of accepting deposits or performing risk analysis.</li>\r\n	<li>Business partners &ndash; we share your data with business partners, such as storage providers and analytics providers who help us provide you with our service.</li>\r\n	<li>Legal and regulatory entities &ndash; we may disclose any data in case we believe, in good faith, that such disclosure is necessary in order to enforce our Terms &amp; Conditions take precautions against liabilities, investigate and defend ourselves against any third party claims or allegations, protect the security or integrity of the site and our servers and protect the rights and property, our users and/or partners. We may also disclose your personal data where requested any other regulatory authority having control or jurisdiction over us, you or our associates or in the territories we have clients or providers, as a broker.</li>\r\n	<li>Merger and acquisitions &ndash; we may share your data if we enter into a business transaction such as a merger, acquisition, reorganization, bankruptcy, or sale of some or all of our assets. Any party that acquires our assets as part of such a transaction may continue to use your data in accordance with the terms of this Privacy Policy.</li>\r\n</ul>\r\n\r\n<p><strong>Transfer of data outside the EEA</strong></p>\r\n\r\n<p>Please note that some data recipients may be located outside the EEA. In such cases, we will transfer your data only to such countries as approved by the European Commission as providing an adequate level of data protection or enter into legal agreements ensuring an adequate level of data protection.</p>\r\n\r\n<p><strong>How we protect your data</strong></p>\r\n\r\n<p>We have implemented administrative, technical, and physical safeguards to help prevent unauthorized access, use, or disclosure of your personal data. Your data is stored on secure servers and isn&rsquo;t publicly available. We limit access of your data only to those employees or partners that need to know the information in order to enable the carrying out of the agreement between us.</p>\r\n\r\n<p>You need to help us prevent unauthorized access to your account by protecting your password appropriately and limiting access to your account (for example, by signing off after you have finished accessing your account). You will be solely responsible for keeping your password confidential and for all use of your password and your account, including any unauthorized use.</p>\r\n\r\n<p>While we seek to protect your data to ensure that it is kept confidential, we cannot absolutely guarantee its security. You should be aware that there is always some risk involved in transmitting data over the internet. While we strive to protect your Personal Data, we cannot ensure or warrant the security and privacy of your personal Data or other content you transmit using the service, and you do so at your own risk.</p>\r\n\r\n<p><strong>Retention</strong></p>\r\n\r\n<p>We will retain your personal data for as long as necessary to provide our services, and as necessary to comply with our legal obligations, resolve disputes, and enforce our policies. Retention periods will be determined taking into account the type of data that is collected and the purpose for which it is collected, bearing in mind the requirements applicable to the situation and the need to destroy outdated, unused data at the earliest reasonable time. Under applicable regulations, we will keep records containing client personal data, trading information, account opening documents, communications and anything else as required by applicable laws and regulations.</p>\r\n\r\n<p><strong>User Rights</strong></p>\r\n\r\n<ol>\r\n	<li>Receive confirmation as to whether or not personal data concerning you is being processed, and access your stored personal data, together with supplementary data.</li>\r\n	<li>Receive a copy of personal data you directly volunteer to us in a structured, commonly used and machine-readable format.</li>\r\n	<li>Request rectification of your personal data that is in our control.</li>\r\n	<li>Request erasure of your personal data.</li>\r\n	<li>Object to the processing of personal data by us.</li>\r\n	<li>Request to restrict processing of your personal data by us.</li>\r\n</ol>\r\n\r\n<p>However, please note that these rights are not absolute, and may be subject to our own legitimate interests and regulatory requirements.</p>\r\n\r\n<p><strong>How to Contact us?</strong></p>\r\n\r\n<p>If you wish to exercise any of the aforementioned rights, or receive more information, please contact our General Data Protection Officer (&ldquo;GDPO&rdquo;) using the details provided below:</p>\r\n\r\n<p>Email: support@onlintrade.com</p>\r\n\r\n<p>Attn. GDPO Compliance Officer</p>\r\n\r\n<p>If you decide to terminate your account, you may do so by emailing us at support@onlintrade.com. If you terminate your account, please be aware that personal information that you have provided us may still be maintained for legal and regulatory reasons (as described above), but it will no longer be accessible via your account.</p>\r\n\r\n<p><strong>Updates to this Policy</strong></p>\r\n\r\n<p>This Privacy Policy is subject to changes from time to time, at our sole discretion. The most current version will always be posted on our website (as reflected in the &ldquo;Last Updated&rdquo; heading). You are advised to check for updates regularly. In the event of material changes, we will provide you with a notice. By continuing to access or use our services after any revisions become effective, you agree to be bound by the updated Privacy Policy.</p>', 'no', '2020-12-14 09:39:57', '2021-10-31 16:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_is_said` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `ref_key`, `position`, `name`, `what_is_said`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'mZVhqO', 'Principal', 'Sarah Ona', 'I love this platform', 'upload-testimonial-1.jpg1617292794', '2021-04-01 15:00:56', '2021-09-28 13:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `tp__transactions`
--

CREATE TABLE `tp__transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp__transactions`
--

INSERT INTO `tp__transactions` (`id`, `plan`, `user`, `amount`, `type`, `created_at`, `updated_at`) VALUES
(12, 'From Account unused deposit to capital', 17, '10', 'Transfer', '2021-04-22 10:15:19', '2021-04-22 10:15:19'),
(13, 'From Profit to Unused Deposit', 17, '10', 'Transfer', '2021-04-22 10:18:35', '2021-04-22 10:18:35'),
(14, 'Bnous', 17, '20', 'Plan purchase', '2021-04-22 12:20:27', '2021-04-22 12:20:27'),
(15, 'Bnous', 17, '20', 'Plan purchase', '2021-04-22 12:27:12', '2021-04-22 12:27:12'),
(22, 'Premium', 17, '30', 'Plan purchase', '2021-06-07 11:38:47', '2021-06-07 11:38:47'),
(23, 'Credit', 45, '100', 'Deposit', '2021-06-08 08:06:21', '2021-06-08 08:06:21'),
(24, 'Premium', 45, '30', 'Plan purchase', '2021-06-08 08:07:25', '2021-06-08 08:07:25'),
(25, 'Credit', 17, '100', 'balance', '2021-10-05 12:14:43', '2021-10-05 12:14:43'),
(26, 'Credit', 46, '100', 'balance', '2021-10-05 12:32:06', '2021-10-05 12:32:06'),
(27, 'Professional', 46, '100', 'ROI', '2021-10-05 12:33:05', '2021-10-05 12:33:05'),
(28, 'Credit', 48, '100', 'balance', '2021-10-18 10:44:55', '2021-10-18 10:44:55'),
(29, 'Subscribed MT4 Trading', 17, '30', 'MT4 Trading', '2021-10-19 08:21:23', '2021-10-19 08:21:23'),
(30, 'Subscribed MT4 Trading', 17, '30', 'MT4 Trading', '2021-10-19 08:33:42', '2021-10-19 08:33:42'),
(31, 'Starter', 17, '20', 'Plan purchase', '2021-10-19 09:23:00', '2021-10-19 09:23:00'),
(32, 'Credit reversal', 48, '50', 'balance', '2021-10-20 16:30:10', '2021-10-20 16:30:10'),
(33, 'Starter', 17, '20', 'Plan purchase', '2021-10-20 17:58:15', '2021-10-20 17:58:15'),
(34, 'Starter', 17, '1', 'ROI', '2021-10-20 18:30:23', '2021-10-20 18:30:23'),
(35, 'Starter', 17, '1', 'ROI', '2021-10-20 19:00:37', '2021-10-20 19:00:37'),
(36, 'Starter', 17, '1', 'ROI', '2021-10-20 19:35:03', '2021-10-20 19:35:03'),
(37, 'Starter', 17, '1', 'ROI', '2021-10-20 20:05:23', '2021-10-20 20:05:23'),
(38, 'Starter', 17, '1', 'ROI', '2021-10-20 20:40:19', '2021-10-20 20:40:19'),
(39, 'Starter', 17, '1', 'ROI', '2021-10-20 21:10:46', '2021-10-20 21:10:46'),
(40, 'Starter', 17, '1', 'ROI', '2021-10-20 21:45:12', '2021-10-20 21:45:12'),
(41, 'Starter', 17, '1', 'ROI', '2021-10-20 22:15:27', '2021-10-20 22:15:27'),
(42, 'Starter', 17, '1', 'ROI', '2021-10-20 22:50:07', '2021-10-20 22:50:07'),
(43, 'Starter', 17, '1', 'ROI', '2021-10-20 23:20:47', '2021-10-20 23:20:47'),
(44, 'Starter', 17, '1', 'ROI', '2021-10-20 23:55:13', '2021-10-20 23:55:13'),
(45, 'Starter', 17, '1', 'ROI', '2021-10-21 00:25:39', '2021-10-21 00:25:39'),
(46, 'Starter', 17, '1', 'ROI', '2021-10-21 01:00:25', '2021-10-21 01:00:25'),
(47, 'Starter', 17, '1', 'ROI', '2021-10-21 01:30:39', '2021-10-21 01:30:39'),
(48, 'Starter', 17, '1', 'ROI', '2021-10-21 02:05:12', '2021-10-21 02:05:12'),
(49, 'Starter', 17, '1', 'ROI', '2021-10-21 02:35:30', '2021-10-21 02:35:30'),
(50, 'Starter', 17, '1', 'ROI', '2021-10-21 03:10:01', '2021-10-21 03:10:01'),
(51, 'Starter', 17, '1', 'ROI', '2021-10-21 03:40:45', '2021-10-21 03:40:45'),
(52, 'Starter', 17, '1', 'ROI', '2021-10-21 04:15:21', '2021-10-21 04:15:21'),
(53, 'Starter', 17, '1', 'ROI', '2021-10-21 04:45:42', '2021-10-21 04:45:42'),
(54, 'Starter', 17, '1', 'ROI', '2021-10-21 05:20:01', '2021-10-21 05:20:01'),
(55, 'Starter', 17, '1', 'ROI', '2021-10-21 05:50:25', '2021-10-21 05:50:25'),
(56, 'Starter', 17, '1', 'ROI', '2021-10-21 06:25:15', '2021-10-21 06:25:15'),
(57, 'Starter', 17, '1', 'ROI', '2021-10-21 07:00:30', '2021-10-21 07:00:30'),
(58, 'Starter', 17, '1', 'ROI', '2021-10-21 07:30:31', '2021-10-21 07:30:31'),
(59, 'Starter', 17, '1', 'ROI', '2021-10-21 08:00:33', '2021-10-21 08:00:33'),
(60, 'Starter', 17, '1', 'ROI', '2021-10-21 08:35:36', '2021-10-21 08:35:36'),
(61, 'Starter', 17, '1', 'ROI', '2021-10-21 09:10:04', '2021-10-21 09:10:04'),
(62, 'Starter', 17, '1', 'ROI', '2021-10-21 09:40:41', '2021-10-21 09:40:41'),
(63, 'Starter', 17, '1', 'ROI', '2021-10-21 10:15:40', '2021-10-21 10:15:40'),
(64, 'Starter', 17, '1', 'ROI', '2021-10-21 10:50:42', '2021-10-21 10:50:42'),
(65, 'Starter', 17, '1', 'ROI', '2021-10-21 11:20:49', '2021-10-21 11:20:49'),
(66, 'Starter', 17, '1', 'ROI', '2021-10-21 11:55:43', '2021-10-21 11:55:43'),
(67, 'Starter', 17, '1', 'ROI', '2021-10-21 12:30:09', '2021-10-21 12:30:09'),
(68, 'Starter', 17, '1', 'ROI', '2021-10-21 13:00:31', '2021-10-21 13:00:31'),
(69, 'Starter', 17, '1', 'ROI', '2021-10-21 13:35:45', '2021-10-21 13:35:45'),
(70, 'Starter', 17, '1', 'ROI', '2021-10-21 14:10:36', '2021-10-21 14:10:36'),
(71, 'Starter', 17, '1', 'ROI', '2021-10-21 14:45:39', '2021-10-21 14:45:39'),
(72, 'Starter', 17, '1', 'ROI', '2021-10-21 15:15:49', '2021-10-21 15:15:49'),
(73, 'Starter', 17, '1', 'ROI', '2021-10-21 15:50:47', '2021-10-21 15:50:47'),
(74, 'Starter', 17, '1', 'ROI', '2021-10-21 16:25:33', '2021-10-21 16:25:33'),
(75, 'Starter', 17, '1', 'ROI', '2021-10-21 17:00:47', '2021-10-21 17:00:47'),
(76, 'Starter', 17, '1', 'ROI', '2021-10-21 17:35:12', '2021-10-21 17:35:12'),
(77, 'Starter', 17, '1', 'ROI', '2021-10-21 18:05:21', '2021-10-21 18:05:21'),
(78, 'Starter', 17, '1', 'ROI', '2021-10-21 18:40:46', '2021-10-21 18:40:46'),
(79, 'Starter', 17, '1', 'ROI', '2021-10-21 19:10:49', '2021-10-21 19:10:49'),
(80, 'Starter', 17, '1', 'ROI', '2021-10-21 19:45:45', '2021-10-21 19:45:45'),
(81, 'Starter', 17, '1', 'ROI', '2021-10-21 20:20:16', '2021-10-21 20:20:16'),
(82, 'Starter', 17, '1', 'ROI', '2021-10-21 20:50:34', '2021-10-21 20:50:34'),
(83, 'Starter', 17, '1', 'ROI', '2021-10-21 21:20:46', '2021-10-21 21:20:46'),
(84, 'Starter', 17, '1', 'ROI', '2021-10-21 21:55:38', '2021-10-21 21:55:38'),
(85, 'Starter', 17, '1', 'ROI', '2021-10-21 22:30:37', '2021-10-21 22:30:37'),
(86, 'Starter', 17, '1', 'ROI', '2021-10-21 23:00:38', '2021-10-21 23:00:38'),
(87, 'Starter', 17, '1', 'ROI', '2021-10-21 23:30:47', '2021-10-21 23:30:47'),
(88, 'Starter', 17, '1', 'ROI', '2021-10-22 00:05:23', '2021-10-22 00:05:23'),
(89, 'Starter', 17, '1', 'ROI', '2021-10-22 00:40:12', '2021-10-22 00:40:12'),
(90, 'Starter', 17, '1', 'ROI', '2021-10-22 01:15:18', '2021-10-22 01:15:18'),
(91, 'Starter', 17, '1', 'ROI', '2021-10-22 01:45:32', '2021-10-22 01:45:32'),
(92, 'Starter', 17, '1', 'ROI', '2021-10-22 02:15:43', '2021-10-22 02:15:43'),
(93, 'Starter', 17, '1', 'ROI', '2021-10-22 02:50:17', '2021-10-22 02:50:17'),
(94, 'Starter', 17, '1', 'ROI', '2021-10-22 03:25:31', '2021-10-22 03:25:31'),
(95, 'Starter', 17, '1', 'ROI', '2021-10-22 04:00:29', '2021-10-22 04:00:29'),
(96, 'Starter', 17, '1', 'ROI', '2021-10-22 04:35:25', '2021-10-22 04:35:25'),
(97, 'Starter', 17, '1', 'ROI', '2021-10-22 05:05:37', '2021-10-22 05:05:37'),
(98, 'Starter', 17, '1', 'ROI', '2021-10-22 05:35:47', '2021-10-22 05:35:47'),
(99, 'Starter', 17, '1', 'ROI', '2021-10-22 06:10:08', '2021-10-22 06:10:08'),
(100, 'Starter', 17, '1', 'ROI', '2021-10-22 06:40:25', '2021-10-22 06:40:25'),
(101, 'Starter', 17, '1', 'ROI', '2021-10-22 07:15:07', '2021-10-22 07:15:07'),
(102, 'Starter', 17, '1', 'ROI', '2021-10-22 07:45:49', '2021-10-22 07:45:49'),
(103, 'Starter', 17, '1', 'ROI', '2021-10-22 08:20:13', '2021-10-22 08:20:13'),
(104, 'Starter', 17, '1', 'ROI', '2021-10-22 08:50:21', '2021-10-22 08:50:21'),
(105, 'Starter', 17, '1', 'ROI', '2021-10-22 09:20:33', '2021-10-22 09:20:33'),
(106, 'Starter', 17, '1', 'ROI', '2021-10-22 09:55:17', '2021-10-22 09:55:17'),
(107, 'Starter', 17, '1', 'ROI', '2021-10-22 10:30:43', '2021-10-22 10:30:43'),
(108, 'Starter', 17, '1', 'ROI', '2021-10-22 11:05:29', '2021-10-22 11:05:29'),
(109, 'Starter', 17, '1', 'ROI', '2021-10-22 11:35:45', '2021-10-22 11:35:45'),
(110, 'Starter', 17, '1', 'ROI', '2021-10-22 12:10:10', '2021-10-22 12:10:10'),
(111, 'Starter', 17, '1', 'ROI', '2021-10-22 12:40:49', '2021-10-22 12:40:49'),
(112, 'Starter', 17, '1', 'ROI', '2021-10-22 13:10:50', '2021-10-22 13:10:50'),
(113, 'Starter', 17, '1', 'ROI', '2021-10-22 13:45:24', '2021-10-22 13:45:24'),
(114, 'Starter', 17, '1', 'ROI', '2021-10-22 14:15:43', '2021-10-22 14:15:43'),
(115, 'Starter', 17, '1', 'ROI', '2021-10-22 14:45:43', '2021-10-22 14:45:43'),
(116, 'Starter', 17, '1', 'ROI', '2021-10-22 15:15:44', '2021-10-22 15:15:44'),
(117, 'Starter', 17, '1', 'ROI', '2021-10-22 15:50:44', '2021-10-22 15:50:44'),
(118, 'Starter', 17, '1', 'ROI', '2021-10-22 16:25:38', '2021-10-22 16:25:38'),
(119, 'Starter', 17, '1', 'ROI', '2021-10-22 17:00:17', '2021-10-22 17:00:17'),
(120, 'Starter', 17, '1', 'ROI', '2021-10-22 17:30:17', '2021-10-22 17:30:17'),
(121, 'Starter', 17, '1', 'ROI', '2021-10-22 18:05:34', '2021-10-22 18:05:34'),
(122, 'Starter', 17, '1', 'ROI', '2021-10-22 18:40:37', '2021-10-22 18:40:37'),
(123, 'Starter', 17, '1', 'ROI', '2021-10-22 19:15:39', '2021-10-22 19:15:39'),
(124, 'Starter', 17, '1', 'ROI', '2021-10-22 19:50:33', '2021-10-22 19:50:33'),
(125, 'Starter', 17, '1', 'ROI', '2021-10-22 20:25:04', '2021-10-22 20:25:04'),
(126, 'Starter', 17, '1', 'ROI', '2021-10-22 20:55:24', '2021-10-22 20:55:24'),
(127, 'Starter', 17, '1', 'ROI', '2021-10-22 21:30:41', '2021-10-22 21:30:41'),
(128, 'Starter', 17, '1', 'ROI', '2021-10-22 22:05:13', '2021-10-22 22:05:13'),
(129, 'Starter', 17, '1', 'ROI', '2021-10-22 22:35:38', '2021-10-22 22:35:38'),
(130, 'Starter', 17, '1', 'ROI', '2021-10-22 23:05:44', '2021-10-22 23:05:44'),
(131, 'Starter', 17, '1', 'ROI', '2021-10-22 23:40:10', '2021-10-22 23:40:10'),
(132, 'Starter', 17, '1', 'ROI', '2021-10-23 00:15:15', '2021-10-23 00:15:15'),
(133, 'Starter', 17, '1', 'ROI', '2021-10-23 00:50:18', '2021-10-23 00:50:18'),
(134, 'Starter', 17, '1', 'ROI', '2021-10-23 01:20:24', '2021-10-23 01:20:24'),
(135, 'Starter', 17, '1', 'ROI', '2021-10-23 01:50:36', '2021-10-23 01:50:36'),
(136, 'Starter', 17, '1', 'ROI', '2021-10-23 02:20:42', '2021-10-23 02:20:42'),
(137, 'Starter', 17, '1', 'ROI', '2021-10-23 02:55:16', '2021-10-23 02:55:16'),
(138, 'Starter', 17, '1', 'ROI', '2021-10-23 03:25:34', '2021-10-23 03:25:34'),
(139, 'Starter', 17, '1', 'ROI', '2021-10-23 03:55:39', '2021-10-23 03:55:39'),
(140, 'Starter', 17, '1', 'ROI', '2021-10-25 04:00:03', '2021-10-25 04:00:03'),
(141, 'Starter', 17, '1', 'ROI', '2021-10-25 04:30:03', '2021-10-25 04:30:03'),
(142, 'Starter', 17, '1', 'ROI', '2021-10-25 05:00:45', '2021-10-25 05:00:45'),
(143, 'Starter', 17, '1', 'ROI', '2021-10-25 05:35:07', '2021-10-25 05:35:07'),
(144, 'Starter', 17, '1', 'ROI', '2021-10-25 06:05:38', '2021-10-25 06:05:38'),
(145, 'Starter', 17, '1', 'ROI', '2021-10-25 06:35:47', '2021-10-25 06:35:47'),
(146, 'Starter', 17, '1', 'ROI', '2021-10-25 07:10:27', '2021-10-25 07:10:27'),
(147, 'Starter', 17, '1', 'ROI', '2021-10-25 07:45:02', '2021-10-25 07:45:02'),
(148, 'Starter', 17, '1', 'ROI', '2021-10-25 08:15:14', '2021-10-25 08:15:14'),
(149, 'Starter', 17, '1', 'ROI', '2021-10-25 08:45:45', '2021-10-25 08:45:45'),
(150, 'Starter', 17, '1', 'ROI', '2021-10-25 09:20:17', '2021-10-25 09:20:17'),
(151, 'Starter', 17, '1', 'ROI', '2021-10-25 09:50:35', '2021-10-25 09:50:35'),
(152, 'Starter', 17, '1', 'ROI', '2021-10-25 10:25:20', '2021-10-25 10:25:20'),
(153, 'Starter', 17, '1', 'ROI', '2021-10-25 11:00:09', '2021-10-25 11:00:09'),
(154, 'Starter', 17, '1', 'ROI', '2021-10-25 11:30:41', '2021-10-25 11:30:41'),
(155, 'Starter', 17, '1', 'ROI', '2021-10-25 12:05:07', '2021-10-25 12:05:07'),
(156, 'Starter', 17, '1', 'ROI', '2021-10-25 12:35:38', '2021-10-25 12:35:38'),
(157, 'Starter', 17, '1', 'ROI', '2021-10-25 13:10:13', '2021-10-25 13:10:13'),
(158, 'SignUp Bonus', 49, '5', 'Bonus', '2021-10-25 13:35:39', '2021-10-25 13:35:39'),
(159, 'Credit', 49, '1000', 'Deposit', '2021-10-25 13:39:23', '2021-10-25 13:39:23'),
(160, 'Credit reversal', 49, '100', 'balance', '2021-10-25 13:41:06', '2021-10-25 13:41:06'),
(161, 'Starter', 49, '20', 'Plan purchase', '2021-10-25 13:44:42', '2021-10-25 13:44:42'),
(162, 'Starter', 17, '1', 'ROI', '2021-10-25 13:45:41', '2021-10-25 13:45:41'),
(163, 'Starter', 49, '1', 'ROI', '2021-10-25 14:15:33', '2021-10-25 14:15:33'),
(164, 'Starter', 17, '1', 'ROI', '2021-10-25 14:20:16', '2021-10-25 14:20:16'),
(165, 'Starter', 49, '1', 'ROI', '2021-10-25 14:45:50', '2021-10-25 14:45:50'),
(166, 'Starter', 17, '1', 'ROI', '2021-10-25 14:55:15', '2021-10-25 14:55:15'),
(167, 'Starter', 49, '1', 'ROI', '2021-10-25 15:20:38', '2021-10-25 15:20:38'),
(168, 'Starter', 17, '1', 'ROI', '2021-10-25 15:30:45', '2021-10-25 15:30:45'),
(169, 'Starter', 49, '1', 'ROI', '2021-10-25 15:50:46', '2021-10-25 15:50:46'),
(170, 'Starter', 17, '1', 'ROI', '2021-10-25 16:05:16', '2021-10-25 16:05:16'),
(171, 'Starter', 49, '1', 'ROI', '2021-10-25 16:25:19', '2021-10-25 16:25:19'),
(172, 'Starter', 17, '1', 'ROI', '2021-10-25 16:35:36', '2021-10-25 16:35:36'),
(173, 'Starter', 49, '1', 'ROI', '2021-10-25 16:55:40', '2021-10-25 16:55:40'),
(174, 'Starter', 17, '1', 'ROI', '2021-10-25 17:05:44', '2021-10-25 17:05:44'),
(175, 'Starter', 49, '1', 'ROI', '2021-10-25 17:30:24', '2021-10-25 17:30:24'),
(176, 'Starter', 17, '1', 'ROI', '2021-10-25 17:35:44', '2021-10-25 17:35:44'),
(177, 'Starter', 49, '20', 'Investment capital', '2021-10-25 17:45:45', '2021-10-25 17:45:45'),
(178, 'Starter', 17, '1', 'ROI', '2021-10-25 18:10:29', '2021-10-25 18:10:29'),
(179, 'Starter', 17, '1', 'ROI', '2021-10-25 18:40:50', '2021-10-25 18:40:50'),
(180, 'Starter', 17, '1', 'ROI', '2021-10-25 19:15:43', '2021-10-25 19:15:43'),
(181, 'Starter', 17, '1', 'ROI', '2021-10-25 19:50:11', '2021-10-25 19:50:11'),
(182, 'Starter', 17, '1', 'ROI', '2021-10-25 20:25:04', '2021-10-25 20:25:04'),
(183, 'Starter', 17, '1', 'ROI', '2021-10-25 20:55:34', '2021-10-25 20:55:34'),
(184, 'Starter', 17, '1', 'ROI', '2021-10-25 21:25:43', '2021-10-25 21:25:43'),
(185, 'Starter', 17, '1', 'ROI', '2021-10-25 22:00:17', '2021-10-25 22:00:17'),
(186, 'Starter', 17, '1', 'ROI', '2021-10-25 22:30:32', '2021-10-25 22:30:32'),
(187, 'Starter', 17, '1', 'ROI', '2021-10-25 23:05:24', '2021-10-25 23:05:24'),
(188, 'Starter', 17, '1', 'ROI', '2021-10-25 23:35:35', '2021-10-25 23:35:35'),
(189, 'Starter', 17, '1', 'ROI', '2021-10-26 00:10:16', '2021-10-26 00:10:16'),
(190, 'Starter', 17, '1', 'ROI', '2021-10-26 00:45:37', '2021-10-26 00:45:37'),
(191, 'Starter', 17, '1', 'ROI', '2021-10-26 01:20:34', '2021-10-26 01:20:34'),
(192, 'Starter', 17, '1', 'ROI', '2021-10-26 01:55:25', '2021-10-26 01:55:25'),
(193, 'Starter', 17, '1', 'ROI', '2021-10-26 02:30:46', '2021-10-26 02:30:46'),
(194, 'Starter', 17, '1', 'ROI', '2021-10-26 03:05:50', '2021-10-26 03:05:50'),
(195, 'Starter', 17, '1', 'ROI', '2021-10-26 03:40:12', '2021-10-26 03:40:12'),
(196, 'Starter', 17, '1', 'ROI', '2021-10-26 04:15:24', '2021-10-26 04:15:24'),
(197, 'Starter', 17, '1', 'ROI', '2021-10-26 04:45:48', '2021-10-26 04:45:48'),
(198, 'Starter', 17, '1', 'ROI', '2021-10-26 05:15:50', '2021-10-26 05:15:50'),
(199, 'Starter', 17, '1', 'ROI', '2021-10-26 05:50:48', '2021-10-26 05:50:48'),
(200, 'Starter', 17, '1', 'ROI', '2021-10-26 06:25:23', '2021-10-26 06:25:23'),
(201, 'Starter', 17, '1', 'ROI', '2021-10-26 07:00:22', '2021-10-26 07:00:22'),
(202, 'Starter', 17, '1', 'ROI', '2021-10-26 07:30:28', '2021-10-26 07:30:28'),
(203, 'Starter', 17, '1', 'ROI', '2021-10-26 08:05:38', '2021-10-26 08:05:38'),
(204, 'Starter', 17, '1', 'ROI', '2021-10-26 08:35:49', '2021-10-26 08:35:49'),
(205, 'Starter', 17, '1', 'ROI', '2021-10-26 09:10:47', '2021-10-26 09:10:47'),
(206, 'Starter', 17, '1', 'ROI', '2021-10-26 09:45:41', '2021-10-26 09:45:41'),
(207, 'Starter', 17, '1', 'ROI', '2021-10-26 10:20:39', '2021-10-26 10:20:39'),
(208, 'Starter', 17, '1', 'ROI', '2021-10-26 10:55:17', '2021-10-26 10:55:17'),
(209, 'Starter', 17, '1', 'ROI', '2021-10-26 11:25:38', '2021-10-26 11:25:38'),
(210, 'Starter', 17, '1', 'ROI', '2021-10-26 12:00:43', '2021-10-26 12:00:43'),
(211, 'Starter', 17, '1', 'ROI', '2021-10-26 12:35:09', '2021-10-26 12:35:09'),
(212, 'Starter', 17, '1', 'ROI', '2021-10-26 13:10:17', '2021-10-26 13:10:17'),
(213, 'Starter', 17, '1', 'ROI', '2021-10-26 13:45:40', '2021-10-26 13:45:40'),
(214, 'Starter', 17, '1', 'ROI', '2021-10-26 14:15:44', '2021-10-26 14:15:44'),
(215, 'Starter', 17, '1', 'ROI', '2021-10-26 14:50:13', '2021-10-26 14:50:13'),
(216, 'Starter', 17, '1', 'ROI', '2021-10-26 15:20:36', '2021-10-26 15:20:36'),
(217, 'Starter', 17, '1', 'ROI', '2021-10-26 15:55:39', '2021-10-26 15:55:39'),
(218, 'Starter', 17, '1', 'ROI', '2021-10-26 16:25:41', '2021-10-26 16:25:41'),
(219, 'Starter', 17, '1', 'ROI', '2021-10-26 17:00:44', '2021-10-26 17:00:44'),
(220, 'Subscribed MT4 Trading', 17, '30', 'MT4 Trading', '2021-10-26 17:55:25', '2021-10-26 17:55:25'),
(221, 'Starter', 17, '20', 'Plan purchase', '2021-10-28 17:27:42', '2021-10-28 17:27:42'),
(222, 'Starter', 17, '1', 'ROI', '2021-10-28 18:00:20', '2021-10-28 18:00:20'),
(223, 'Starter', 17, '1', 'ROI', '2021-10-28 18:35:41', '2021-10-28 18:35:41'),
(224, 'Starter', 17, '1', 'ROI', '2021-10-28 19:10:44', '2021-10-28 19:10:44'),
(225, 'Starter', 17, '1', 'ROI', '2021-10-28 19:45:04', '2021-10-28 19:45:04'),
(226, 'Starter', 17, '1', 'ROI', '2021-10-28 20:15:11', '2021-10-28 20:15:11'),
(227, 'Starter', 17, '1', 'ROI', '2021-10-28 20:45:33', '2021-10-28 20:45:33'),
(228, 'Starter', 17, '1', 'ROI', '2021-10-28 21:20:21', '2021-10-28 21:20:21'),
(229, 'Starter', 17, '20', 'Investment capital', '2021-10-28 21:30:25', '2021-10-28 21:30:25'),
(230, 'SignUp Bonus', 17, '5', 'Bonus', '2022-01-30 04:59:12', '2022-01-30 04:59:12'),
(231, 'Credit', 50, '10', 'Bonus', '2022-01-30 05:38:14', '2022-01-30 05:38:14'),
(232, 'Credit', 50, '12', 'balance', '2022-01-30 05:38:43', '2022-01-30 05:38:43'),
(233, 'Credit', 50, '100', 'Ref_Bonus', '2022-01-30 05:39:04', '2022-01-30 05:39:04'),
(234, 'Credit', 50, '20', 'Deposit', '2022-01-30 05:39:29', '2022-01-30 05:39:29'),
(235, 'Credit reversal', 50, '20', 'Ref_Bonus', '2022-01-30 05:39:49', '2022-01-30 05:39:49'),
(236, 'Professional', 50, '20', 'ROI', '2022-01-30 05:40:47', '2022-01-30 05:40:47'),
(237, 'SignUp Bonus', 50, '5', 'Bonus', '2022-01-30 06:44:39', '2022-01-30 06:44:39'),
(238, 'Gold', 50, '1', 'Gift Bonus', '2022-01-30 06:48:28', '2022-01-30 06:48:28'),
(239, 'Gold', 50, '100', 'Plan purchase', '2022-01-30 06:48:28', '2022-01-30 06:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `upgrades`
--

CREATE TABLE `upgrades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `times` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userupdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'light',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_bal` float DEFAULT NULL,
  `roi` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `ref_bonus` float DEFAULT NULL,
  `signup_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_trade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_released` int(11) NOT NULL DEFAULT 0,
  `ref_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `trade_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `act_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawotp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sendotpemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendroiemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendpromoemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendinvplanemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `dob`, `cstatus`, `userupdate`, `assign_to`, `address`, `country`, `phone`, `dashboard_style`, `bank_name`, `account_name`, `account_number`, `swift_code`, `acnt_type_active`, `btc_address`, `eth_address`, `ltc_address`, `plan`, `user_plan`, `account_bal`, `roi`, `bonus`, `ref_bonus`, `signup_bonus`, `auto_trade`, `bonus_released`, `ref_by`, `ref_link`, `id_card`, `passport`, `account_verify`, `entered_at`, `activated_at`, `last_growth`, `status`, `trade_mode`, `act_session`, `remember_token`, `current_team_id`, `profile_photo_path`, `withdrawotp`, `sendotpemail`, `sendroiemail`, `sendpromoemail`, `sendinvplanemail`, `created_at`, `updated_at`) VALUES
(17, 'Tester Tests', 'test1234@happ.com', 'testmi1', '2021-06-08 07:33:49', '$2y$10$KldUgE3T2IXJxeBRYJQSQeJK6xRNiz2LwbTvTfO06rPC4g.bxwWUS', NULL, NULL, '2021-09-23', NULL, 'This User is still on the group stage', '2', 'United State of Americas', 'USA', '04566444', 'light', 'Firstbank', 'Rolly Baker', '5021137787', '4664', NULL, 'hhsj878hjwjjhjkjksk', '333333333333', 'gttdddddds', '2', '12', 1619, 231, 70, 0, '0', NULL, 0, NULL, 'http://127.0.0.1:8000/ref/testmi1', 'G1ttUX3.jpg1634646590', 'G1ttUXchikamso.jpg1634646590', 'Verified', '2021-10-28 13:27:42', NULL, NULL, 'active', 'on', NULL, 'E3PApDdSdoO0Cu2SIvjDmhVFb1DFbHhEqIKuFWUROaG4gAOpWh1yo8uxjRAO', NULL, NULL, NULL, 'No', 'Yes', 'No', 'Yes', '2021-03-12 11:59:19', '2022-01-30 05:33:51'),
(50, 'Liberty Mtabvuri', 'leereal08@gmail.com', 'Liberty Mutabvuri', '2022-01-30 05:37:39', '$2y$10$A2JGq7zw/WVZfoDPQqfv7OuIoY5ZXE360v8D0KT13zvxx6iw5MWiC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Turkmenistan', '0651749011', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', '13', 27, 20, 16, 80, 'received', NULL, 0, NULL, 'http://oct2021.brynamics.xyz/ref/Liberty Mutabvuri', NULL, NULL, 'Verified', '2022-01-30 08:48:28', NULL, NULL, 'active', 'on', NULL, '8xUjkmr1tZpoj5qa4oY3Y04izh1RRfb7uPnKHQqICoqYSQsgTPvZLBVjV2RJ', NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', '2022-01-30 04:34:26', '2022-01-30 06:48:28'),
(51, 'Jeal', 'leereal08@ymail.com', 'Leereal', '2022-01-30 06:12:04', '$2y$10$1FAxiOiVnHNnIZxbx.Kbv.uggZ9oizN42HwwJ9Oq7Ds7ZObeBmbxa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, 5, NULL, 'received', NULL, 0, NULL, 'http://oct2021.brynamics.xyz/ref/Leereal', NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'on', NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', '2022-01-30 06:11:48', '2022-01-30 06:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `plan`, `user`, `amount`, `active`, `inv_duration`, `expire_date`, `activated_at`, `last_growth`, `created_at`, `updated_at`) VALUES
(10, 2, 17, '20', 'expired', '1 Months', '2021-11-20 13:58:15', '2021-10-20 13:58:15', '2021-10-26 13:00:44', '2021-10-20 17:58:15', '2021-10-26 17:13:04'),
(11, 2, 49, '20', 'expired', '4 Hours', '2021-10-25 13:44:42', '2021-10-25 09:44:42', '2021-10-25 13:30:24', '2021-10-25 13:44:42', '2021-10-25 17:45:45'),
(12, 2, 17, '20', 'expired', '4 Hours', '2021-10-28 17:27:42', '2021-10-28 13:27:42', '2021-10-28 17:20:21', '2021-10-28 17:27:42', '2021-10-28 21:30:25'),
(13, 6, 50, '100', 'yes', '1 Months', '2022-03-02 08:48:28', '2022-01-30 08:48:28', '2022-01-30 08:48:28', '2022-01-30 06:48:28', '2022-01-30 06:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `wdmethods`
--

CREATE TABLE `wdmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methodtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `defaultpay` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wdmethods`
--

INSERT INTO `wdmethods` (`id`, `name`, `minimum`, `maximum`, `charges_amount`, `charges_type`, `duration`, `img_url`, `bankname`, `account_name`, `account_number`, `swift_code`, `wallet_address`, `barcode`, `network`, `methodtype`, `type`, `status`, `defaultpay`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', '10', '10000', '0', 'percentage', 'Instant', 'https://img.icons8.com/color/48/000000/bitcoin--v1.png', NULL, NULL, NULL, NULL, 'ksjhhjhdjd', '938893993', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-11 11:53:32', '2021-11-01 19:06:36'),
(2, 'Ethereum', '10', '2100', '0', 'percentage', 'Instant', 'https://lulo.com', NULL, NULL, NULL, NULL, 'dddddddddddddddddddddddd', '938893993', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:03', '2021-10-14 09:27:15'),
(3, 'Litecoin', '100', '10000', '0', '0', 'Instant', 'https://lulo.com', NULL, NULL, NULL, NULL, 'hhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhh', 'Erc', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:33', '2021-10-11 09:15:46'),
(7, 'Stripe', '10', '10000', '0', 'percentage', 'Automatic Payment', 'https://lulo.com', 'Automatic', 'Automatic', '4242424242424242', '344', NULL, NULL, NULL, 'currency', 'deposit', 'enabled', 'yes', '2021-10-06 13:51:37', '2021-10-11 09:15:19'),
(9, 'Paystack', '10', '10000', '0', 'percentage', 'Automatic Payment', 'data:image/png;base64,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', 'Automatic', 'Automatic', '99388383', NULL, NULL, NULL, NULL, 'currency', 'deposit', 'enabled', 'yes', '2021-10-07 08:53:27', '2021-10-11 12:41:56'),
(10, 'Paypal', '10', '10000', '0', 'percentage', 'Instant Payment', 'https://lulo.com', 'Automatic', 'Automatic', '99388383', NULL, NULL, NULL, NULL, 'currency', 'deposit', 'enabled', 'yes', '2021-10-07 08:56:14', '2021-10-11 08:57:12'),
(12, 'Bank Transfer', '10', '10000', '0', 'percentage', 'Instant Payment', NULL, 'Mining Bank', 'Miller lauren', '99388383', '3222', NULL, NULL, NULL, 'currency', 'both', 'enabled', 'yes', '2021-10-11 11:35:35', '2021-10-29 13:02:37'),
(13, 'Doge', '10', '10000', '2', 'percentage', 'Instant Payment', 'https://lulo.com', NULL, NULL, NULL, NULL, 'jjjjjjjjjjjjjjjjjjjjjjjyyuy', 'QRCODE’,’PDF417′,’DATAMATRIX', 'Erc', 'crypto', 'withdrawal', 'enabled', NULL, '2021-10-14 10:54:10', '2021-10-26 17:43:22'),
(14, 'Skrill', '100', '10000', '0', 'percentage', 'Automatic Payment', NULL, 'My bank name', 'Miller lauren', '99388383', '555', 'pipsbulls@gmail.com', NULL, 'Erc', 'crypto', 'both', 'enabled', NULL, '2021-10-19 14:54:08', '2022-01-30 06:36:36'),
(15, 'Ewallet', '100', '200', '2', 'percentage', 'Please contact us after making your deposit', NULL, 'Ewallet', 'Pipsbulls', '0651749011', NULL, NULL, NULL, NULL, 'currency', 'both', 'enabled', NULL, '2022-01-30 06:34:45', '2022-01-30 06:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `columns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_deduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paydetails` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `txn_id`, `user`, `amount`, `columns`, `to_deduct`, `status`, `payment_mode`, `paydetails`, `created_at`, `updated_at`) VALUES
(19, NULL, 17, '100', NULL, '100', 'Processed', 'Bitcoin', NULL, '2021-10-18 09:28:09', '2021-10-18 09:28:54'),
(22, NULL, 17, '100', NULL, '100', 'Processed', 'Bank Transfer', NULL, '2021-10-19 15:11:53', '2021-10-19 15:12:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_accounts`
--
ALTER TABLE `crypto_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipaddresses`
--
ALTER TABLE `ipaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt4_details`
--
ALTER TABLE `mt4_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paystacks`
--
ALTER TABLE `paystacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_conts`
--
ALTER TABLE `settings_conts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upgrades`
--
ALTER TABLE `upgrades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wdmethods`
--
ALTER TABLE `wdmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crypto_accounts`
--
ALTER TABLE `crypto_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ipaddresses`
--
ALTER TABLE `ipaddresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mt4_details`
--
ALTER TABLE `mt4_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paystacks`
--
ALTER TABLE `paystacks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_conts`
--
ALTER TABLE `settings_conts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `upgrades`
--
ALTER TABLE `upgrades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wdmethods`
--
ALTER TABLE `wdmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
