-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 أبريل 2025 الساعة 22:49
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adviceplatform_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `advices`
--

CREATE TABLE `advices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `advice` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `advices`
--

INSERT INTO `advices` (`id`, `course_id`, `advice`, `created_at`, `updated_at`) VALUES
(1, 1, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(2, 2, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(3, 3, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(4, 4, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(5, 5, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(6, 6, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(7, 7, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37'),
(8, 8, 'Go Ahead', '2025-03-21 11:15:37', '2025-03-21 11:15:37');

-- --------------------------------------------------------

--
-- بنية الجدول `chats_rooms`
--

CREATE TABLE `chats_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `latest_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `latest_message` text DEFAULT NULL,
  `latest_type` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `chats_rooms`
--

INSERT INTO `chats_rooms` (`id`, `latest_user_id`, `course_id`, `latest_message`, `latest_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(2, 1, 2, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(3, 1, 3, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(4, 1, 4, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(5, 1, 5, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(6, 1, 6, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(7, 1, 7, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02'),
(8, 1, 8, 'hello', 1, '2025-03-21 11:17:02', '2025-03-21 11:17:02');

-- --------------------------------------------------------

--
-- بنية الجدول `chats_rooms_messages`
--

CREATE TABLE `chats_rooms_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_room_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `chats_rooms_users`
--

CREATE TABLE `chats_rooms_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_room_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `unread_messages` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `collages`
--

CREATE TABLE `collages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `bgColor` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `collages`
--

INSERT INTO `collages` (`id`, `name`, `image`, `description`, `bgColor`, `created_at`, `updated_at`) VALUES
(1, 'Engineering & Mathematics\r\n', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Engineering & Mathematics\r\n', '#0369a1', '2025-03-21 10:48:47', '2025-03-21 10:48:47'),
(2, 'Computer Science', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Computer Science', '#2dd4bf', '2025-03-21 10:49:52', '2025-03-21 10:49:52'),
(3, 'Business', 'https://cdn.builder.io/api/v1/image/assets/TEMP/6bd5c56632176362c141b1b4b8a79a3e0f78e56ec411fde80bc306179d827a89?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Business', '#fdba74', '2025-03-21 10:49:52', '2025-03-21 10:49:52'),
(4, 'Medical School', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a260dd3fb42ca6d3f7bd3e0e3f49c1d4200cb4aaeed0aeaf5e54199f658a3edd?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Medical School', '#60a5fa', '2025-03-21 10:51:37', '2025-03-21 10:51:37'),
(5, 'Psychology\r\n', 'https://cdn.builder.io/api/v1/image/assets/TEMP/530c08f0f5559ecb2993c6ad7ba56ded1eeaddb8196c8081c98fb3df2bce33dc?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Psychology\r\n', '#60a5fa', '2025-03-21 10:52:28', '2025-03-21 10:52:28'),
(6, 'Art, Design and Architecture', 'https://cdn.builder.io/api/v1/image/assets/TEMP/18e8032e6825854ae7291cc651e10ccf62903952b87e30c20776efbf6154f891?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Art, Design and Architecture', '#22d3ee', '2025-03-21 10:53:35', '2025-03-21 10:53:35'),
(7, 'Nursing and Midwifery', 'https://cdn.builder.io/api/v1/image/assets/TEMP/34bf7d38421aac0c79840b4fbf54b825b677454fe6321bfa9fbc6e836c0942c8?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Nursing and Midwifery', '#71717a', '2025-03-21 10:53:35', '2025-03-21 10:53:35'),
(8, 'Society and culture', 'https://cdn.builder.io/api/v1/image/assets/TEMP/bcbf2a41a36dfaf1f771c122c7562b4cf1b7a0fd62a37b9cac7453d7c98f8fbc?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Society and culture', '#f87171', '2025-03-21 10:53:35', '2025-03-21 10:53:35'),
(9, 'Biomedical Sciences', 'https://cdn.builder.io/api/v1/image/assets/TEMP/6d227000230bfa56722c9c4937c936d6cee67525ad20877a4d28600c6d04861f?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Biomedical Sciences', '#818cf8', '2025-03-21 10:53:35', '2025-03-21 10:53:35'),
(10, 'Biological and Marine Sciences', 'https://cdn.builder.io/api/v1/image/assets/TEMP/deb492aaf2f96f0da3292cab7ac046052bd4d0a9daec8227c3f8f09b386b6722?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Biological and Marine Sciences', '#0f766e', '2025-03-21 10:53:35', '2025-03-21 10:53:35'),
(11, 'Institute of Health Sciences', 'https://cdn.builder.io/api/v1/image/assets/TEMP/62651da8d408ea2ded3b98dadbad76638e3d1a4f21a138c9ac81b5402f630a5b?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Institute of Health Sciences', '#fb7185', '2025-03-21 10:53:35', '2025-03-21 10:53:35'),
(12, 'Dentistry', 'https://cdn.builder.io/api/v1/image/assets/TEMP/e4a0b951f89f51b6d4191e74e5a0bf20c0f742219e436d9d7638d45ab2e3ed4b?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Dentistry', '#06b6d4', '2025-03-21 10:53:35', '2025-03-21 10:53:35');

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `specialization_id` bigint(20) UNSIGNED NOT NULL,
  `bgColor` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `description`, `specialization_id`, `bgColor`, `created_at`, `updated_at`) VALUES
(1, 'Advanced Manufacturing', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Advanced Manufacturing', 3, '#0369a1', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(2, 'Robotics & Automation', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Robotics & Automation', 3, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(3, 'Power Electronics', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Power Electronics', 4, '#0369a1', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(4, 'Embedded Systems & IoT', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Embedded Systems & IoT', 4, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(5, 'Machine Learning', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Machine Learning', 1, '#0369a1', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(6, 'Computational Intelligence', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Computational Intelligence', 1, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(7, 'BSc (Hons)', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BSc (Hons)', 2, '#0369a1', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(8, ' MSc Cyber Security', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', ' MSc Cyber Security', 2, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(9, 'BEng (Hons) Mechanical Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BEng (Hons) Mechanical Engineering', 3, '#2dd4bf', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(10, 'MEng (Hons) Mechanical Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'MEng (Hons) Mechanical Engineering', 3, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(11, 'MSc Offshore Renewable Energy', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'MSc Offshore Renewable Energy', 3, '#60a5fa', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(12, 'AI Academy - Mahara Tech', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'AI Academy - Mahara Tech', 1, '#2dd4bf', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(13, 'AUC School of Continuing Education', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'AUC School of Continuing Education', 1, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(14, 'Information Technology Institute', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Information Technology Institute', 1, '#f87171', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(15, 'AUC', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'AUC', 2, '#f87171', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(16, 'Cybersecurity Training', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Cybersecurity Training', 2, '#71717a', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(17, 'EC-Council Training', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'EC-Council Training', 2, '#f87171', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(18, 'BEng', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BEng', 4, '#2dd4bf', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(19, 'MEng ', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'MEng ', 4, '#fdba74', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(20, 'Civil and Coastal Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Civil and Coastal Engineering', 5, '#60a5fa', '2025-03-21 11:04:19', '2025-03-21 11:04:19'),
(21, 'COAST Laboratory', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'COAST Laboratory', 5, '#22d3ee', '2025-03-21 11:04:19', '2025-03-21 11:04:19');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `building_name` varchar(191) NOT NULL,
  `location` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `maps`
--

INSERT INTO `maps` (`id`, `building_name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Robbin', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.598868638996!2d-4.136272!3d50.3740338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486cecb493850733%3A0xc17e5f952a272fbf!2sRobbins%20Conference%20Centre!5e0!3m2!1sar!2seg!4v1742522141580!5m2!1sar!2seg', '2025-03-21 02:16:09', '2025-03-21 02:16:09'),
(2, 'Rolle', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.4907497777986!2d-4.1401921999999995!3d50.376049599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934ae9cf7707%3A0xd5626f9d7b40d0f0!2sRolle%20Building!5e0!3m2!1sar!2seg!4v1742524660488!5m2!1sar!2seg', NULL, NULL),
(3, 'RLB', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d823.5320155682037!2d-4.139356424132055!3d50.37430342403375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934b380ba549%3A0xcb2dfaaaaa9d997f!2zUm9sYW5kIExldmluc2t5IEJ1aWxkaW5nLCBQbHltb3V0aCBQTDQgOEFB2Iwg2KfZhNmF2YXZhNmD2Kkg2KfZhNmF2KrYrdiv2Kk!5e0!3m2!1sar!2seg!4v1742552224284!5m2!1sar!2seg', '2025-03-21 10:17:32', '2025-03-21 10:17:32'),
(4, 'SCB', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.5738210434424!2d-4.1398534!3d50.3745008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934b3d923e3b%3A0xfb47a80beba516c3!2sScott%20Building!5e0!3m2!1sar!2seg!4v1742552424358!5m2!1sar!2seg', '2025-03-21 10:20:47', '2025-03-21 10:20:47'),
(5, 'MB', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208.0485000107334!2d-4.140877103395212!3d50.374987310988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934b051ea019%3A0xb697b5e27ba983a3!2sMarine%20Building!5e0!3m2!1sar!2seg!4v1742552764289!5m2!1sar!2seg', '2025-03-21 10:26:33', '2025-03-21 10:26:33'),
(6, 'BGB', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d313.7033768100574!2d-4.13996562316806!3d50.37539675897193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934afd3d1d4b%3A0x9b89b8bc641072e5!2sBabbage%20Building!5e0!3m2!1sar!2seg!4v1742553010578!5m2!1sar!2seg', '2025-03-21 10:30:35', '2025-03-21 10:30:35'),
(7, 'BRL', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d513.6347786766419!2d-4.139409311047267!3d50.37522019649278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934b1ff15c2d%3A0x4f6f51bcb1c91ee6!2sBrunel%20Building!5e0!3m2!1sar!2seg!4v1742553392736!5m2!1sar!2seg', '2025-03-21 10:30:58', '2025-03-21 10:30:58'),
(8, 'DYB', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.548222356028!2d-4.135842176398976!3d50.374978071577985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c934b2cd87723%3A0x754a8c0cd26ceea2!2zRGF2eSBCdWlsZGluZywgUGx5bW91dGggUEw0IDhBQdiMINin2YTZhdmF2YTZg9ipINin2YTZhdiq2K3Yr9ip!5e0!3m2!1sar!2seg!4v1742553767941!5m2!1sar!2seg', '2025-03-21 10:43:08', '2025-03-14 10:43:08'),
(9, 'SHC', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.548222356028!2d-4.135842176398976!3d50.374978071577985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c93a35780b8f7%3A0xf7039b0d1420fd15!2sStudent%20Hub!5e0!3m2!1sar!2seg!4v1742553870170!5m2!1sar!2seg', '2025-03-21 10:44:52', '2025-03-21 10:44:52'),
(10, 'CKY', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.655898218965!2d-4.130206896789552!3d50.3729705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486cedc32a80ab51%3A0x8caa07174cdf4d45!2sCookworthy!5e0!3m2!1sar!2seg!4v1742554059342!5m2!1sar!2seg', '2025-03-21 10:45:09', '2025-03-21 10:45:09');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_10_26_095424_create_verify_accounts_table', 1),
(10, '2020_09_27_131029_create_advices_table', 1),
(11, '2020_09_27_131029_create_courses_table', 1),
(12, '2020_09_27_131029_create_reviews_table', 1),
(13, '2025_02_06_150653_create_followers_table', 1),
(14, '2025_02_06_151310_create_reports_table', 1),
(15, '2025_02_06_151711_create_notifications_table', 1),
(16, '2025_02_06_203420_create_specializations_table', 1),
(17, '2025_02_15_184846_create_collages_table', 1),
(18, '2025_02_20_221729_create_chats_rooms_table', 1),
(19, '2025_02_20_221820_create_chats_rooms_users_table', 1),
(20, '2025_02_20_221856_create_chats_rooms_messages_table', 1),
(21, '2025_03_21_012607_create_maps_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `read_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(191) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(191) DEFAULT NULL,
  `code` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reason` text DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `reported_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rate` double(8,2) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `reviews`
--

INSERT INTO `reviews` (`id`, `course_id`, `user_id`, `rate`, `review`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(2, 2, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(3, 3, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(4, 4, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(5, 5, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(6, 6, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(7, 7, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22'),
(8, 8, 1, 5.00, 'perfect !!!', '2025-03-21 11:12:22', '2025-03-21 11:12:22');

-- --------------------------------------------------------

--
-- بنية الجدول `specializations`
--

CREATE TABLE `specializations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `collage_id` bigint(20) UNSIGNED NOT NULL,
  `bgColor` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `specializations`
--

INSERT INTO `specializations` (`id`, `name`, `image`, `description`, `collage_id`, `bgColor`, `created_at`, `updated_at`) VALUES
(1, 'AI & ML', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Artificial Intelligence & Machine Learning', 2, '#2dd4bf', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(2, 'Cyber Security\r\n', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Cyber Security\r\n', 2, '#0369a1', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(3, 'Mechanical Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Mechanical Engineering', 1, '#2dd4bf', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(4, 'Electrical & Electronic Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Electrical & Electronic Engineering', 1, '#0369a1', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(5, 'Civil and Coastal Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Civil and Coastal Engineering', 1, '#60a5fa', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(6, 'Robotics Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Robotics Engineering', 1, '#71717a', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(7, 'BSc (Hons) Mathematics', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BSc (Hons) Mathematics', 1, '#f87171', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(8, 'Mathematics with Education', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BSc (Hons) Mathematics with Education', 1, '#818cf8', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(9, 'Mathematics with Theoretical Physics', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BSc (Hons) Mathematics with Theoretical Physics', 1, '#22d3ee', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(10, 'Mathematics with Statistics', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'BSc (Hons) Mathematics with Statistics', 1, '#0369a1', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(11, 'Data Science\r\n', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Data Science\r\n', 2, '#fdba74', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(12, 'Web Development', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Web Development\r\n', 2, '#60a5fa', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(13, 'Mobile Development', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Mobile Development', 2, '#22d3ee', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(14, 'Algorithms', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Algorithms', 2, '#71717a', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(15, 'Software Engineering', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Software Engineering', 2, '#f87171', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(16, 'Computer Systems', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Computer Systems', 2, '#818cf8', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(17, 'Networking & Distributed Systems\r\n', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Networking & Distributed Systems', 2, '#0f766e', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(18, 'Game Development', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Game Development', 2, '#fb7185', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(19, 'Human-Computer Interaction', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Human-Computer Interaction', 2, '#06b6d4', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(20, 'Marketing', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Marketing', 3, '#0369a1', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(21, 'Management', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Management', 3, '#2dd4bf', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(22, 'Leadership', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Leadership', 3, '#fdba74', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(23, 'Finance', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Finance', 3, '#60a5fa', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(24, 'Accounting', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Accounting', 3, '#22d3ee', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(25, 'Entrepreneurship', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Entrepreneurship', 3, '#71717a', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(26, 'International Business', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'International Business', 3, '#f87171', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(27, 'Supply Chain Management', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Supply Chain Management', 3, '#818cf8', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(28, 'Information Systems', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Information Systems', 3, '#0f766e', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(29, 'Business Analytics', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Business Analytics', 3, '#fb7185', '2025-03-21 10:56:06', '2025-03-21 10:56:06'),
(30, 'Human Resource Management', 'https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2', 'Human Resource Management', 3, '#06b6d4', '2025-03-21 10:56:06', '2025-03-21 10:56:06');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `mobile` varchar(191) NOT NULL,
  `bio` text DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `system_mode` tinyint(4) NOT NULL DEFAULT 1,
  `spectialization_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `bio`, `password`, `type`, `system_mode`, `spectialization_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Maha', 'maha@gmail.com', '0102030', NULL, '$2y$10$UEgxuFlT/DMlBWNIrqUzhOlN7g7/ifgbf/kmcULCF.Tm5Sr2DYj2e', 1, 1, 1, NULL, '2025-03-21 11:14:33', '2025-03-21 11:14:33');

-- --------------------------------------------------------

--
-- بنية الجدول `verify_accounts`
--

CREATE TABLE `verify_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `token` varchar(191) DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats_rooms`
--
ALTER TABLE `chats_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats_rooms_messages`
--
ALTER TABLE `chats_rooms_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats_rooms_users`
--
ALTER TABLE `chats_rooms_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collages`
--
ALTER TABLE `collages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_accounts`
--
ALTER TABLE `verify_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advices`
--
ALTER TABLE `advices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chats_rooms`
--
ALTER TABLE `chats_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chats_rooms_messages`
--
ALTER TABLE `chats_rooms_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats_rooms_users`
--
ALTER TABLE `chats_rooms_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collages`
--
ALTER TABLE `collages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_accounts`
--
ALTER TABLE `verify_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
