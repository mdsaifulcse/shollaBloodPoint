-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 09:22 PM
-- Server version: 10.3.26-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shollabloodpoint_sbp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_banks`
--

CREATE TABLE `blood_banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`id`, `name`, `url`, `category`, `district`, `contact`, `address`, `web`, `notes`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Islami Bank Hospital Blood Bank', 'islami-bank-hospital-blood-bank', 'National', 'Dhaka', '8317090, 8321495', 'Dhaka', 'http://www.blooddonorsbd.com', '<p>Islami Bank Hospital Blood Bank&nbsp;Islami Bank Hospital Blood Bank&nbsp;Islami Bank Hospital Blood Bank</p>\r\n<p>&nbsp;Islami Bank Hospital Blood Bank&nbsp;Islami Bank Hospital Blood Bank</p>', 1, 1, '2018-12-09 10:28:27', '2019-02-07 11:46:24'),
(2, 'Quantum Blood Bank', 'quantum-blood-bank', 'National', 'Dhaka', '+88 02 9351969, +8801714010869,02 8322987, 01617826886.', '119, Shantinagar, Dhaka, Bangladesh', 'www.quantummethod.org.bd', '<div class=\"middle_box1_part1_left\" style=\"clear: both; float: left; width: 105px; margin: 5px 5px 5px 0px; border: 0px solid #cccccc; font-weight: bold; font-size: 13px;\">Name:</div>\r\n<div class=\"middle_box1_part1_right\" style=\"float: right; width: 520px; margin: 5px; border: 0px solid #cccccc; font-size: 13px;\">Quantum Blood Bank</div>\r\n<div class=\"middle_box1_part1_left\" style=\"clear: both; float: left; width: 105px; margin: 5px 5px 5px 0px; border: 0px solid #cccccc; font-weight: bold; font-size: 13px;\">Address:</div>\r\n<div class=\"middle_box1_part1_right\" style=\"float: right; width: 520px; margin: 5px; border: 0px solid #cccccc; font-size: 13px;\">1/1 Pioneer Road (Ground Floor); Segunbagicha; Kakrail; Dhaka - 1000; Dhaka, Bangladesh</div>\r\n<div class=\"middle_box1_part1_left\" style=\"clear: both; float: left; width: 105px; margin: 5px 5px 5px 0px; border: 0px solid #cccccc; font-weight: bold; font-size: 13px;\">Contact Info:</div>\r\n<div class=\"middle_box1_part1_right\" style=\"float: right; width: 520px; margin: 5px; border: 0px solid #cccccc; font-size: 13px;\">Contact No: +88 02 9351969, +88 01714010869&nbsp;<br />Email: info@quantummethod.org.bd&nbsp;<br />Website: http://www.quantummethod.org.bd</div>\r\n<div class=\"middle_box1_part1\" style=\"clear: both; float: left; border: 0px solid #cccccc; width: 678px; font-size: 13px;\">\r\n<p style=\"margin: 0px; padding: 0px;\">2000: Quantum Foundation starts a full fledged blood donation program by establishing Quantum Lab.<br /><br />2003: Modern equipments such as a blood component separator (Centrifuge Machine), an Elisa Machine for screening, a refrigerator capable of generating temperatures as low as (&ndash;) 90 degrees Celsius, and a platelet incubator for storing platelet are added to Quantum Lab. As a result it is possible to separate different components from whole blood.<br /><br />2010: Quantum Lab is an international standard blood lab equipped with state-of-the-art machinery and capable of supplying 8 blood components in addition to whole blood. The average monthly supply is around 6000 units.</p>\r\n</div>', 2, 1, '2019-02-07 11:42:11', '2019-02-07 11:55:37'),
(3, 'Red Crescent Blood Bank', 'red-crescent-blood-bank', 'International', 'Dhaka', '01811458524, 9116563, 8121497', '7/5 Aurongzeb Road, Mohammadpur, Dhaka, Bangladesh.', 'http://www.bdrcs.org/', NULL, 3, 1, '2019-02-07 11:45:28', '2019-02-07 11:54:08'),
(4, 'Shandhani, Dhaka Dental College Branch', 'shandhani-dhaka-dental-college-branch', 'National', 'Dhaka', '9011887', 'Dhaka', NULL, NULL, 4, 1, '2019-02-07 11:47:28', '2019-02-07 11:47:28'),
(5, 'Shandhani, Dhaka Medical College Branch', 'shandhani-dhaka-medical-college-branch', 'National', 'Dhaka', '9668690,861674', 'Dhaka', NULL, NULL, 5, 1, '2019-02-07 11:48:06', '2019-02-07 11:48:06'),
(6, 'Sir Salimullah College Blood Bank', 'sir-salimullah-college-blood-bank', 'National', 'Dhaka', '7319123', 'Dhaka', NULL, NULL, 6, 1, '2019-02-07 11:49:10', '2019-02-07 11:49:10'),
(7, 'Chittagong Medical College Hospital', 'chittagong-medical-college-hospital', 'National', 'Chittagong', '+88-616891-4, 612251', 'Chittagong', NULL, NULL, 7, 1, '2019-02-07 11:50:40', '2019-02-07 11:50:40'),
(8, 'BADHAN', 'badhan', 'National', 'Dhaka', '+88-02-8629042, 01534-982674', 'BADHAN, Central Office, T.S.C(Ground Floor), University of Dhaka, Dhaka-1000, Bangladesh', 'http://www.badhan.org', NULL, 8, 1, '2019-02-07 11:51:55', '2019-02-07 11:51:55'),
(9, 'Thalassemia Blood Bank', 'thalassemia-blood-bank', 'National', 'Dhaka', '+880 2 8332481', '30 Chamelibagh, 1st Lane, Shantinagar, Dhaka-1219, Bangladesh', 'http://www.thals.org', NULL, 9, 1, '2019-02-07 11:57:31', '2019-02-07 11:57:31'),
(10, 'Alif Blood Bank & Transfusion Center', 'alif-blood-bank-transfusion-center', 'National', 'Dhaka', '+88-01712-392923, 01913-059375', 'Panthapath, Dhaka, Bangladesh', NULL, NULL, 10, 1, '2019-02-07 11:59:04', '2019-02-07 11:59:04'),
(11, 'ক্রিয়েটিভ ব্লাড ব্যাংক এন্ড ট্রান্সফিউশন সেন্টার', 'n-a', 'National', 'Dhaka', '01772-829082', '83, Nazimuddin Road, Chalkbazar, ঢাকা 1211', NULL, NULL, 11, 1, '2019-02-07 12:03:01', '2019-02-07 12:03:01'),
(12, 'Bangladesh Blood Bank and Transfusion Center', 'bangladesh-blood-bank-and-transfusion-center', 'National', 'Dhaka', '01850-077185', '12,, 22 বাবর রোড, ঢাকা', NULL, NULL, 12, 1, '2019-02-07 12:03:47', '2019-02-07 12:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donates`
--

CREATE TABLE `blood_donates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'Identify ths member By this user id ',
  `last_blood_donation` date NOT NULL,
  `patient_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `patient_mobile` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `patient_diseases` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hospital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_donation` int(11) DEFAULT NULL COMMENT 'Result of how many time member donated blood ',
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_donates`
--

INSERT INTO `blood_donates` (`id`, `user_id`, `last_blood_donation`, `patient_name`, `patient_mobile`, `patient_diseases`, `hospital`, `number_of_donation`, `status`, `created_at`, `updated_at`) VALUES
(23, 20, '2018-11-30', NULL, NULL, NULL, NULL, 25, 1, '2019-02-01 04:12:19', '2019-02-06 04:53:14'),
(24, 21, '2018-11-11', NULL, NULL, NULL, NULL, 13, 1, '2019-02-01 12:42:44', '2020-05-07 12:00:37'),
(25, 22, '2018-09-22', NULL, NULL, NULL, NULL, 15, 1, '2019-02-01 13:22:02', '2019-02-01 13:22:02'),
(26, 23, '2018-11-02', NULL, NULL, NULL, NULL, 6, 1, '2019-02-01 13:57:34', '2019-02-22 19:39:02'),
(27, 25, '2018-02-28', NULL, NULL, NULL, NULL, 4, 1, '2019-02-03 05:36:04', '2019-02-03 05:36:04'),
(28, 26, '2018-01-10', NULL, NULL, NULL, NULL, 2, 1, '2019-02-03 09:17:20', '2019-02-03 09:17:20'),
(29, 27, '2018-02-10', NULL, NULL, NULL, NULL, 3, 1, '2019-02-03 09:40:33', '2019-02-03 09:40:33'),
(30, 28, '2018-11-21', NULL, NULL, NULL, NULL, 14, 1, '2019-02-03 12:41:32', '2019-02-03 12:41:32'),
(31, 29, '2018-06-07', NULL, NULL, NULL, NULL, 4, 1, '2019-02-03 16:23:58', '2019-02-03 16:23:58'),
(32, 30, '2018-03-14', NULL, NULL, NULL, NULL, 1, 1, '2019-02-03 18:36:33', '2019-02-05 16:35:13'),
(33, 31, '2019-02-02', NULL, NULL, NULL, NULL, 1, 1, '2019-02-04 15:09:36', '2019-02-04 15:09:36'),
(34, 32, '2019-01-05', NULL, NULL, NULL, NULL, 11, 1, '2019-02-05 05:21:26', '2019-02-05 05:21:26'),
(35, 33, '2018-11-01', NULL, NULL, NULL, NULL, 1, 1, '2019-02-06 05:58:20', '2019-02-06 05:58:20'),
(36, 34, '2019-02-05', NULL, NULL, NULL, NULL, 1, 1, '2019-02-06 06:02:57', '2019-02-06 06:02:57'),
(37, 35, '2018-07-10', NULL, NULL, NULL, NULL, 2, 1, '2019-02-06 06:07:18', '2019-02-06 06:07:18'),
(38, 37, '2019-01-06', NULL, NULL, NULL, NULL, 0, 1, '2019-02-06 12:41:05', '2019-02-06 12:41:05'),
(39, 38, '2018-12-17', NULL, NULL, NULL, NULL, 1, 1, '2019-02-06 13:16:59', '2019-02-06 13:16:59'),
(40, 39, '2019-01-28', NULL, NULL, NULL, NULL, 3, 1, '2019-02-06 13:50:35', '2019-02-13 07:19:56'),
(41, 40, '2019-02-06', NULL, NULL, NULL, NULL, 0, 1, '2019-02-06 13:57:26', '2019-02-06 13:57:26'),
(42, 41, '2018-11-04', NULL, NULL, NULL, NULL, 5, 1, '2019-02-07 04:56:42', '2019-02-07 04:56:42'),
(43, 42, '2018-10-10', NULL, NULL, NULL, NULL, 5, 1, '2019-02-07 09:49:05', '2019-02-07 09:49:05'),
(44, 43, '2019-02-08', NULL, NULL, NULL, NULL, 0, 1, '2019-02-08 11:19:01', '2019-02-08 11:19:01'),
(45, 44, '2018-11-18', NULL, NULL, NULL, NULL, 4, 1, '2019-02-08 14:14:42', '2019-02-08 14:14:42'),
(46, 45, '2017-12-31', NULL, NULL, NULL, NULL, 3, 1, '2019-02-09 04:45:09', '2019-02-09 04:45:09'),
(47, 46, '2018-10-11', NULL, NULL, NULL, NULL, 2, 1, '2019-02-09 05:38:43', '2019-02-09 05:38:43'),
(48, 47, '2017-02-09', NULL, NULL, NULL, NULL, 1, 1, '2019-02-09 06:04:07', '2019-02-09 06:04:07'),
(49, 48, '2018-02-09', NULL, NULL, NULL, NULL, 1, 1, '2019-02-09 06:42:16', '2019-02-09 06:42:16'),
(50, 49, '2018-02-09', NULL, NULL, NULL, NULL, 4, 1, '2019-02-09 07:57:43', '2019-02-09 07:57:43'),
(51, 50, '2019-01-19', NULL, NULL, NULL, NULL, 1, 1, '2019-02-09 10:21:47', '2019-02-09 10:21:47'),
(52, 51, '2018-02-09', NULL, NULL, NULL, NULL, 26, 1, '2019-02-09 10:34:05', '2019-02-09 10:34:05'),
(53, 52, '2018-02-09', NULL, NULL, NULL, NULL, 3, 1, '2019-02-09 13:19:33', '2019-02-09 13:19:33'),
(54, 53, '2018-09-05', NULL, NULL, NULL, NULL, 2, 1, '2019-02-09 14:39:55', '2019-02-09 14:39:55'),
(55, 54, '2018-12-31', NULL, NULL, NULL, NULL, 10, 1, '2019-02-10 10:03:22', '2019-02-10 10:03:22'),
(57, 59, '2017-02-10', NULL, NULL, NULL, NULL, 2, 1, '2019-02-10 15:51:34', '2019-02-10 15:51:34'),
(58, 60, '2018-09-11', NULL, NULL, NULL, NULL, 7, 1, '2019-02-10 18:02:55', '2019-02-10 18:02:55'),
(59, 61, '2018-03-11', NULL, NULL, NULL, NULL, 1, 1, '2019-02-10 18:30:34', '2019-02-10 18:30:34'),
(60, 62, '2019-02-11', NULL, NULL, NULL, NULL, 0, 1, '2019-02-11 07:00:08', '2019-02-11 07:00:08'),
(61, 64, '2018-02-11', NULL, NULL, NULL, NULL, 2, 1, '2019-02-11 13:17:02', '2019-04-22 06:50:42'),
(62, 65, '2018-04-06', NULL, NULL, NULL, NULL, 2, 1, '2019-02-11 13:19:50', '2019-02-11 13:19:50'),
(63, 66, '2018-02-11', NULL, NULL, NULL, NULL, 1, 1, '2019-02-11 13:31:54', '2019-02-11 13:31:54'),
(64, 66, '2019-02-11', 'Fazlu khan', '01817128363', 'Rokto Shunnota', 'Paragan,Nawabgonj', 1, 1, '2019-02-11 13:35:27', '2019-02-11 14:47:28'),
(65, 67, '2018-02-12', NULL, NULL, NULL, NULL, 0, 1, '2019-02-12 06:51:28', '2019-02-12 06:51:28'),
(66, 68, '2018-12-23', NULL, NULL, NULL, NULL, 1, 1, '2019-02-12 08:50:51', '2019-02-12 08:50:51'),
(67, 69, '2018-11-29', NULL, NULL, NULL, NULL, 5, 1, '2019-02-12 13:15:48', '2020-03-16 18:34:12'),
(68, 70, '2018-09-07', NULL, NULL, NULL, NULL, 1, 1, '2019-02-12 13:47:52', '2019-02-12 13:47:52'),
(69, 71, '2019-12-12', NULL, NULL, NULL, NULL, 0, 1, '2019-02-12 14:10:15', '2019-02-12 14:10:15'),
(70, 72, '2018-01-01', NULL, NULL, NULL, NULL, 0, 1, '2019-02-12 14:21:22', '2019-02-12 14:21:22'),
(71, 73, '2018-02-12', NULL, NULL, NULL, NULL, 1, 1, '2019-02-12 14:24:18', '2019-02-12 14:24:18'),
(72, 74, '2018-03-10', NULL, NULL, NULL, NULL, 1, 1, '2019-02-12 14:40:46', '2019-02-12 14:40:46'),
(73, 75, '2019-01-13', NULL, NULL, NULL, NULL, 1, 1, '2019-02-12 14:59:58', '2019-02-12 14:59:58'),
(74, 76, '2016-01-11', NULL, NULL, NULL, NULL, 1, 1, '2019-02-12 15:58:03', '2019-02-12 15:58:03'),
(75, 77, '2017-02-11', NULL, NULL, NULL, NULL, 3, 1, '2019-02-13 04:51:48', '2019-02-13 04:51:48'),
(76, 78, '2018-05-13', NULL, NULL, NULL, NULL, 3, 1, '2019-02-13 12:10:12', '2019-02-13 12:10:12'),
(77, 39, '2019-01-28', 'Anjumanara khanam', '01850945025', 'Vill- Singjur, Post- Sholla, Thana- Nawabgonj, Zila- Dhaka', 'Bardem hospital, shahabag, Dhaka', 4, 1, '2019-02-14 08:44:30', '2019-02-14 09:50:33'),
(78, 79, '2017-02-14', NULL, NULL, NULL, NULL, 2, 1, '2019-02-14 14:09:07', '2019-02-14 14:09:07'),
(79, 80, '2019-01-10', NULL, NULL, NULL, NULL, 2, 1, '2019-02-14 17:27:28', '2019-02-14 17:27:28'),
(80, 81, '2018-12-17', NULL, NULL, NULL, NULL, 1, 1, '2019-02-15 11:58:09', '2019-02-15 11:58:09'),
(81, 82, '2018-11-02', NULL, NULL, NULL, NULL, 8, 1, '2019-02-15 12:55:31', '2019-02-15 12:55:31'),
(82, 83, '2018-11-15', NULL, NULL, NULL, NULL, 3, 1, '2019-02-15 13:15:05', '2019-02-15 13:15:05'),
(83, 84, '2018-11-18', NULL, NULL, NULL, NULL, 8, 1, '2019-02-19 08:20:48', '2019-02-19 08:20:48'),
(84, 85, '2018-08-23', NULL, NULL, NULL, NULL, 3, 1, '2019-02-23 05:08:29', '2019-02-23 05:08:29'),
(86, 87, '2018-09-13', NULL, NULL, NULL, NULL, 4, 1, '2019-02-27 02:40:05', '2019-02-27 02:40:05'),
(87, 88, '2018-02-28', NULL, NULL, NULL, NULL, 6, 1, '2019-02-28 11:48:56', '2019-02-28 11:48:56'),
(88, 38, '2019-02-28', 'Md.Johirul Islam', '01821050872', 'Heamatology', 'Nawabgonj clinic', 2, 1, '2019-03-01 12:39:23', '2019-03-01 12:48:08'),
(89, 89, '2018-03-01', NULL, NULL, NULL, NULL, 8, 1, '2019-03-01 12:45:02', '2019-03-01 12:45:02'),
(90, 90, '2018-03-30', NULL, NULL, NULL, NULL, 3, 1, '2019-03-02 12:38:52', '2019-03-02 12:38:52'),
(91, 91, '2018-03-15', NULL, NULL, NULL, NULL, 5, 1, '2019-03-07 13:58:13', '2019-03-07 13:58:13'),
(92, 92, '2018-05-05', NULL, NULL, NULL, NULL, 1, 1, '2019-03-09 01:57:53', '2019-03-09 01:57:53'),
(93, 93, '2019-03-13', NULL, NULL, NULL, NULL, 0, 1, '2019-03-13 07:13:35', '2019-03-13 07:13:35'),
(94, 94, '2018-03-13', NULL, NULL, NULL, NULL, 3, 1, '2019-03-13 14:13:38', '2019-03-13 14:13:38'),
(95, 95, '2018-03-13', NULL, NULL, NULL, NULL, 0, 1, '2019-03-13 14:20:30', '2019-03-13 14:20:30'),
(96, 96, '2018-03-17', NULL, NULL, NULL, NULL, 0, 1, '2019-03-17 05:57:20', '2019-03-17 05:57:20'),
(97, 22, '2019-03-21', 'Helen', '01884303943', 'Operation', 'Paragon D. Center, Nawabgonj', 16, 1, '2019-03-21 11:23:49', '2019-03-21 11:29:56'),
(98, 97, '2019-03-23', NULL, NULL, NULL, NULL, 4, 1, '2019-03-24 03:29:17', '2019-03-24 03:29:17'),
(99, 98, '2018-10-25', NULL, NULL, NULL, NULL, 10, 1, '2019-03-25 14:29:11', '2019-03-25 14:29:11'),
(100, 99, '2018-11-18', NULL, NULL, NULL, NULL, 1, 1, '2019-04-04 07:11:59', '2019-04-04 07:11:59'),
(101, 27, '2019-04-04', 'Awal', '01710895831', 'kidny', 'conford hospital', 4, 1, '2019-04-06 05:37:06', '2019-04-20 01:40:51'),
(102, 32, '2019-04-19', 'Asha Akter', '01874372207', 'Pregnant', 'Paragon', 12, 1, '2019-04-19 12:11:39', '2019-04-20 01:41:03'),
(103, 100, '2018-04-27', NULL, NULL, NULL, NULL, 1, 1, '2019-04-27 08:05:38', '2019-04-27 08:05:38'),
(104, 101, '2018-04-15', NULL, NULL, NULL, NULL, 10, 1, '2019-04-27 12:11:56', '2019-04-27 12:11:56'),
(105, 101, '2019-04-14', 'Anjumanara khanom', '01914949586', 'Rokto sonnota', 'Bardem Hospital', 11, 1, '2019-04-27 12:14:15', '2019-04-27 13:14:53'),
(106, 75, '2019-02-24', 'Samela begum', '01732889817', 'Rokto Shunnota', 'Popolar Hospital, Dhanmondi', 2, 1, '2019-04-27 12:31:58', '2019-04-27 13:15:00'),
(107, 100, '2019-04-25', 'Nilufa', '01862291807', 'Rokto Shunnota', 'Joypara Hospital, Dohar', 2, 1, '2019-04-27 13:24:33', '2019-04-27 13:41:38'),
(108, 102, '2018-04-27', NULL, NULL, NULL, NULL, 1, 1, '2019-04-27 13:37:47', '2019-04-27 13:37:47'),
(109, 73, '2019-04-29', 'Afroza Akter', '01924927292', 'Rokto Shunnota', 'Dhaka Medical College', 2, 1, '2019-04-29 07:09:46', '2019-04-29 07:13:12'),
(110, 102, '2019-04-28', 'Afroza Akter', '01924927292', 'Rokto Shunnota', 'Dhaka Medical College', 2, 1, '2019-04-29 07:18:09', '2019-04-29 07:19:36'),
(111, 26, '2019-04-22', 'Asa akter', '01835822403', 'Pagnant', 'Paragan Hospital,Nawabgonj', 3, 1, '2019-05-03 05:23:43', '2019-05-03 05:25:52'),
(112, 25, '2019-03-28', 'মো.জাহাঙ্গীৱ আলম', '01711299440', 'ৱক্ত শূন্যতা', 'ৰাৱডেম হাসপাতাল', 5, 1, '2019-05-09 07:31:05', '2019-05-12 17:57:31'),
(113, 25, '2019-03-28', 'MD.JAHANGIR ALAM', '01711299440', 'GASTROLIVER', 'BIRDEM', 6, 1, '2019-05-15 04:01:00', '2019-05-16 15:24:16'),
(114, 85, '2019-05-15', 'Rupa Akter', '01733660663', 'Pagnant', 'Saver Mukti Hospital, Saver', 4, 1, '2019-05-16 16:26:36', '2019-05-16 16:27:12'),
(115, 89, '2019-03-07', 'Jabed member er meya', '01831685388', 'Rokto Shunnota', 'UHC, Nawabgonj', 9, 1, '2019-05-16 16:33:51', '2019-05-16 16:34:29'),
(116, 52, '2019-04-13', 'Mukter Hossain', '01851317655', 'Pa Operation', 'রক্তদা‌নের তারিখ:১৩ অাগষ্ট ২০১৯ রক্তগৃহিতদ্বীপ ক্লিনিক এন্ড ডাইগনিস্টিক সেন্টার সাভার', 4, 1, '2019-05-16 16:46:38', '2019-05-16 16:47:15'),
(117, 94, '2019-05-21', 'সিং‌জোর ছে‌লে', '01878797550', 'কিড‌নি‌তে পাথর', 'Dhaka Centril Hospital', 4, 1, '2019-05-26 12:22:23', '2019-05-28 14:50:05'),
(118, 104, '2019-04-16', NULL, NULL, NULL, NULL, 2, 1, '2019-05-27 10:32:45', '2019-05-27 10:32:45'),
(119, 105, '2019-01-27', NULL, NULL, NULL, NULL, 3, 1, '2019-05-27 14:12:39', '2019-05-27 14:12:39'),
(120, 41, '2019-03-08', 'Rabeya', '01706214720', 'hard', 'Bandhura,Dewan clinic', 6, 1, '2019-05-28 14:48:39', '2019-05-28 14:49:57'),
(121, 106, '2019-01-28', NULL, NULL, NULL, NULL, 2, 1, '2019-05-28 14:49:54', '2019-05-28 14:49:54'),
(122, 107, '2019-04-03', NULL, NULL, NULL, NULL, 18, 1, '2019-06-01 13:53:05', '2019-10-28 14:49:58'),
(123, 29, '2019-06-18', 'ফারুক', '01779644331', 'খুলনা', '২৫০ বেড হাসপাতাল, খুলনা', 5, 1, '2019-06-22 07:10:15', '2019-07-27 04:11:16'),
(124, 29, '2018-10-11', 'Mother Of Friend', '01779644337', 'Mirpur', 'Digilab Medical Service, Mirpur', 6, 1, '2019-06-22 07:12:18', '2019-07-27 04:11:40'),
(125, 81, '2019-05-20', 'Shumon', '01881692316', 'Singjur', 'Dhaka Central International Medical College Hospital', 2, 1, '2019-06-25 09:52:32', '2019-07-27 04:11:49'),
(126, 81, '2019-05-20', 'Md Sumon', '01881692316', 'Singjur', 'Dhaka Central International Medical College Hospital', 3, 1, '2019-06-25 12:23:13', '2019-07-27 04:11:58'),
(127, 108, '2019-07-01', NULL, NULL, NULL, NULL, 1, 1, '2019-06-30 18:29:16', '2019-06-30 18:29:16'),
(128, 111, '2018-12-04', NULL, NULL, NULL, NULL, 1, 1, '2019-07-15 14:21:20', '2019-07-15 14:21:20'),
(129, 112, '2019-06-25', NULL, NULL, NULL, NULL, 1, 1, '2019-07-15 14:21:44', '2019-07-15 14:21:44'),
(130, 113, '2018-12-20', NULL, NULL, NULL, NULL, 0, 1, '2019-07-23 09:40:00', '2019-07-23 09:40:00'),
(131, 25, '2019-07-25', 'raiyan', '01789729560', 'neomonia', 'unihelth specialist hospital', 7, 1, '2019-07-25 10:19:17', '2019-07-27 04:12:07'),
(132, 114, '2019-07-26', NULL, NULL, NULL, NULL, 1, 1, '2019-07-27 04:07:55', '2019-07-27 04:07:55'),
(133, 22, '2019-07-31', 'Fazlur rahman Khan', '01817128363', 'Kidney Problem', 'Paragon D. Center, Nawabgonj', 17, 1, '2019-07-31 09:23:25', '2019-07-31 17:24:35'),
(134, 115, '2019-06-10', NULL, NULL, NULL, NULL, 12, 1, '2019-08-03 12:57:01', '2019-08-03 12:57:01'),
(135, 116, '2019-01-01', NULL, NULL, NULL, NULL, 0, 1, '2019-08-13 06:15:30', '2019-08-13 06:15:30'),
(137, 118, '2019-08-23', NULL, NULL, NULL, NULL, 1, 1, '2019-08-23 09:55:49', '2019-08-23 09:55:49'),
(138, 101, '2019-08-23', 'Rahima', '01812690835', 'Operation', 'new life medical', 12, 1, '2019-08-23 11:21:53', '2019-08-25 05:10:25'),
(139, 118, '2019-08-23', 'Rahima', '01812690835', 'Operation', 'new life medical', 2, 1, '2019-08-25 05:16:47', '2019-08-25 05:17:45'),
(140, 42, '2019-09-15', 'Asa akter', '01821061680', 'Operation', 'Paragan Hospital,Nawabgonj', 6, 1, '2019-09-22 06:51:51', '2019-09-22 06:53:37'),
(141, 59, '2019-11-23', 'Monoronzon', '01515649585', 'cardiovascular diseases', 'National institute of cardiovascular diseases', 3, 1, '2019-11-24 15:53:13', '2019-11-24 15:55:02'),
(142, 25, '2020-01-14', 'hosneara', '01677376226', 'low hemoglobin', 'Ibne Sina', 8, 1, '2020-01-15 05:38:15', '2020-09-28 03:28:50'),
(143, 120, '2020-09-29', NULL, NULL, NULL, NULL, 0, 1, '2020-09-29 16:35:33', '2020-09-29 16:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(35) CHARACTER SET utf8 NOT NULL,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `url`, `mobile`, `admin_name`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A positive (A+)', 'a-positive-a+', '01815708714, 01672710583', 'Rashedur Rahman Russel & Al-Islam', 1, 1, '2018-12-08 20:02:27', '2019-02-08 17:24:49'),
(2, 'A negative (A-)', 'a-negative-a-', '01912213778, 01815652543', 'Md. Faruk Hossain & Harun Mia', 2, 1, '2018-12-09 09:33:31', '2019-02-08 17:26:26'),
(3, 'B positive (B+)', 'b-positive-b+', '01811118000, 01686093189', 'Md. Ismail Hossain & Md. Rakib Hassan', 3, 1, '2018-12-09 09:33:40', '2019-02-08 17:27:51'),
(4, 'B negative (B-)', 'b-negative-b-', '01814901783, 01837259986', 'Md. Humayun Kabir & Nirob Hossain', 4, 1, '2018-12-09 09:33:57', '2019-02-08 17:34:43'),
(5, 'O positive (O+)', 'o-positive-o+', '01836802425, 01614643889', 'Md. Omar Faruk Sharife & Jakir Hossain Rashed', 5, 1, '2018-12-09 09:34:06', '2019-02-08 17:37:30'),
(6, 'O negative (O-)', 'o-negative-o-', '01913857959, 01973460025', 'Mahmudul Hoque Rasel & Mustafijur Rahman Aunik', 6, 1, '2018-12-09 09:34:17', '2019-02-08 17:38:57'),
(7, 'AB positive (AB+)', 'ab-positive-ab+', '01612141841', 'Masudur Rahman Suman', 7, 1, '2019-01-08 10:56:51', '2019-03-08 05:59:42'),
(8, 'AB negative (AB-)', 'ab-negative-ab-', '01925826525, 01855615522', 'Alim Mahmud Lito & Adnan Alam', 8, 1, '2019-01-08 10:57:06', '2019-02-08 17:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `blood_group_id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `disease` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `patient_location` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `date_of_donation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `manage_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=unmanage 2=Manage',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`id`, `name`, `mobile`, `blood_group_id`, `amount`, `disease`, `patient_location`, `district_id`, `date_of_donation`, `message`, `manage_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'জহুরুল', '01918369494', 5, '1', 'রক্ত কম', 'নবাবগঞ্জক্লিনিক', 1, '0000-00-00 00:00:00', NULL, 1, 0, '2019-02-28 06:52:30', '2019-02-28 06:52:30'),
(2, 'Mehedi hasan joy', '01689793826', 1, '1', 'Kidney problem', 'Kidney  foundations, mirpur, Dhaka', 1, '0000-00-00 00:00:00', NULL, 1, 0, '2019-03-19 13:02:04', '2019-03-19 13:02:04'),
(3, 'Md Kohinur Islam', '01924927292', 3, '2', 'Rokto sonnota', 'Dhaka Medical College', 1, '0000-00-00 00:00:00', NULL, 1, 0, '2019-04-27 13:28:38', '2019-04-27 13:28:38'),
(4, 'Md Kohinur Islam', '01924927292', 3, '2', 'Rokto sonnota', 'Dhaka Medical College', 1, '0000-00-00 00:00:00', 'Need Blood', 1, 0, '2019-04-27 13:58:44', '2019-04-27 13:58:44'),
(5, 'Md.Mamun islam', '01785015639', 1, '1', 'Emergency', 'kawyak hospital, semolipara,ullapara, sirajgonj', 67, '0000-00-00 00:00:00', NULL, 1, 0, '2020-07-08 13:12:49', '2020-07-08 13:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL COMMENT '1=Service, 2=Item',
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `category_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district`, `status`, `serial_num`, `created_at`, `updated_at`) VALUES
(1, 'DHAKA', 1, 1, '2018-12-09 05:54:31', '2019-01-26 22:22:12'),
(2, 'BARGUNA', 1, 2, '2018-12-11 06:02:30', '2019-01-26 23:03:58'),
(3, 'BAGERHAT', 1, 3, '2019-01-26 22:24:02', '2019-01-26 23:04:16'),
(4, 'BANDARBAN', 1, 4, '2019-01-26 22:25:00', '2019-01-26 23:04:49'),
(6, 'BARISAL', 1, 5, '2019-01-26 22:25:25', '2019-01-26 23:21:52'),
(7, 'BHOLA', 1, 6, '2019-01-26 22:25:36', '2019-01-26 23:22:03'),
(11, 'BOGRA', 1, 7, '2019-01-26 22:26:31', '2019-01-26 23:22:17'),
(14, 'BRAHMANBARIA', 1, 8, '2019-01-26 22:27:11', '2019-01-26 23:22:29'),
(15, 'CHANDPUR', 1, 9, '2019-01-26 22:27:23', '2019-01-26 23:22:42'),
(16, 'CHAPAINABABGANJ', 1, 10, '2019-01-26 22:27:37', '2019-01-26 23:22:56'),
(18, 'CHITTAGONG', 1, 11, '2019-01-26 23:13:28', '2019-01-26 23:23:11'),
(19, 'CHUADANGA', 1, 12, '2019-01-26 23:13:37', '2019-01-26 23:23:30'),
(20, 'COMILLA', 1, 13, '2019-01-26 23:13:46', '2019-01-26 23:23:42'),
(21, 'COX\'S BAZAR', 1, 14, '2019-01-26 23:13:57', '2019-01-26 23:23:55'),
(22, 'DINAJPUR', 1, 15, '2019-01-26 23:14:17', '2019-01-26 23:24:08'),
(23, 'FARIDPUR', 1, 16, '2019-01-26 23:14:29', '2019-01-26 23:24:27'),
(24, 'FENI', 1, 17, '2019-01-26 23:14:39', '2019-01-26 23:24:37'),
(25, 'GAIBANDHA', 1, 18, '2019-01-26 23:14:51', '2019-01-26 23:24:45'),
(26, 'GAZIPUR', 1, 19, '2019-01-26 23:15:59', '2019-01-26 23:24:54'),
(27, 'GOPALGANJ', 1, 20, '2019-01-26 23:19:44', '2019-01-26 23:25:04'),
(28, 'HABIGANJ', 1, 21, '2019-01-26 23:25:36', '2019-01-26 23:25:36'),
(29, 'JAMALPUR', 1, 22, '2019-01-26 23:26:04', '2019-01-26 23:26:04'),
(30, 'JESSORE', 1, 23, '2019-01-26 23:26:15', '2019-01-26 23:26:15'),
(31, 'JHALOKATI', 1, 24, '2019-01-26 23:26:25', '2019-01-26 23:26:25'),
(32, 'JHENAIDAH', 1, 25, '2019-01-26 23:26:35', '2019-01-26 23:26:35'),
(33, 'JOYPURHAT', 1, 26, '2019-01-26 23:26:45', '2019-01-26 23:26:45'),
(34, 'KHAGRACHHARI', 1, 27, '2019-01-26 23:26:55', '2019-01-26 23:26:55'),
(35, 'KHULNA', 1, 28, '2019-01-26 23:27:04', '2019-01-26 23:27:04'),
(36, 'KISHOREGONJ', 1, 29, '2019-01-26 23:27:13', '2019-01-26 23:27:13'),
(37, 'KURIGRAM,', 1, 30, '2019-01-26 23:27:23', '2019-01-26 23:27:23'),
(38, 'KUSHTIA', 1, 31, '2019-01-26 23:27:33', '2019-01-26 23:27:33'),
(39, 'LAKSHMIPUR', 1, 32, '2019-01-26 23:27:44', '2019-01-26 23:27:44'),
(40, 'LALMONIRHAT', 1, 33, '2019-01-26 23:27:54', '2019-01-26 23:27:54'),
(41, 'MADARIPUR', 1, 34, '2019-01-26 23:28:04', '2019-01-26 23:28:04'),
(42, 'MAGURA', 1, 35, '2019-01-26 23:28:13', '2019-01-26 23:28:13'),
(43, 'MANIKGANJ', 1, 36, '2019-01-26 23:28:24', '2019-01-26 23:28:24'),
(44, 'MAULVIBAZAR', 1, 37, '2019-01-26 23:28:33', '2019-01-26 23:28:33'),
(45, 'MEHERPUR', 1, 38, '2019-01-26 23:28:42', '2019-01-26 23:28:42'),
(46, 'MUNSHIGANJ', 1, 39, '2019-01-26 23:28:55', '2019-01-26 23:28:55'),
(47, 'MYMENSINGH', 1, 40, '2019-01-26 23:29:05', '2019-01-26 23:29:05'),
(48, 'NAOGAON', 1, 41, '2019-01-26 23:29:15', '2019-01-26 23:29:15'),
(49, 'NARAIL', 1, 42, '2019-01-26 23:29:24', '2019-01-26 23:29:24'),
(50, 'NARAYANGANJ', 1, 43, '2019-01-26 23:29:33', '2019-01-26 23:29:33'),
(51, 'NARSINGDI', 1, 44, '2019-01-26 23:29:42', '2019-01-26 23:29:42'),
(52, 'NATORE', 1, 45, '2019-01-26 23:29:52', '2019-01-26 23:29:52'),
(53, 'NETRAKONA', 1, 46, '2019-01-26 23:30:01', '2019-01-26 23:30:01'),
(54, 'NILPHAMARI', 1, 47, '2019-01-26 23:30:11', '2019-01-26 23:30:11'),
(55, 'NOAKHALI', 1, 48, '2019-01-26 23:30:22', '2019-01-26 23:30:22'),
(56, 'PABNA', 1, 49, '2019-01-26 23:30:36', '2019-01-26 23:30:36'),
(57, 'PANCHAGARH', 1, 50, '2019-01-26 23:30:56', '2019-01-26 23:30:56'),
(58, 'PATUAKHALI', 1, 51, '2019-01-26 23:31:06', '2019-01-26 23:31:06'),
(59, 'PIROJPUR', 1, 52, '2019-01-26 23:31:20', '2019-01-26 23:31:20'),
(60, 'RAJBARI', 1, 53, '2019-01-26 23:31:32', '2019-01-26 23:31:32'),
(61, 'RAJSHAHI', 1, 54, '2019-01-26 23:31:42', '2019-01-26 23:31:42'),
(62, 'RANGAMATI', 1, 55, '2019-01-26 23:31:51', '2019-01-26 23:31:51'),
(63, 'RANGPUR', 1, 56, '2019-01-26 23:32:00', '2019-01-26 23:32:00'),
(64, 'SATKHIRA', 1, 57, '2019-01-26 23:32:27', '2019-01-26 23:32:27'),
(65, 'SHARIATPUR', 1, 58, '2019-01-26 23:32:37', '2019-01-26 23:32:37'),
(66, 'SHERPUR', 1, 59, '2019-01-26 23:32:46', '2019-01-26 23:32:46'),
(67, 'SIRAJGANJ', 1, 60, '2019-01-26 23:32:55', '2019-01-26 23:32:55'),
(68, 'SUNAMGANJ', 1, 61, '2019-01-26 23:33:03', '2019-01-26 23:33:03'),
(69, 'SYLHET', 1, 62, '2019-01-26 23:33:12', '2019-01-26 23:33:12'),
(70, 'TANGAIL', 1, 63, '2019-01-26 23:33:22', '2019-01-26 23:33:22'),
(71, 'THAKURGAON', 1, 64, '2019-01-26 23:33:31', '2019-01-26 23:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `founder_members`
--

CREATE TABLE `founder_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_group_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `founder_members`
--

INSERT INTO `founder_members` (`id`, `name`, `designation`, `photo`, `blood_group_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'মাহমুদুল হক রা‌সেল', 'প্র‌তিষ্ঠাতা মুখপাত্র(২০১০-২০১৮)', 'images/founder-members/2019/02/20/rasel20-02-201900-08-56.jpg', 5, 1, '2019-02-01 04:32:40', '2019-02-19 18:08:56'),
(7, 'রা‌শেদুর রহমান রা‌সেল', 'মুখপাত্র(২০১৯-২০২০)', 'images/founder-members/2019/02/11/1549888655705-rasel11-02-201918-43-51.jpg', 1, 1, '2019-02-01 13:58:22', '2019-02-11 12:43:52'),
(8, 'মোঃ ফারুখ হো‌সেন', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/img-20190212-09092312-02-201909-16-10.jpg', 1, 1, '2019-02-08 19:39:11', '2019-02-12 03:16:10'),
(9, 'মোঃ না‌জিম উ‌দ্দিন', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/fb-img-154994065332112-02-201909-17-18.jpg', 5, 1, '2019-02-08 19:39:55', '2019-02-12 03:17:18'),
(10, 'মোঃ হুমায়ুন ক‌বির', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/img-20190212-09254212-02-201909-27-51.jpg', 3, 1, '2019-02-08 19:40:16', '2019-02-12 03:27:51'),
(11, 'এ‌লিম মাহমুদ লিটু', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/18/fb-img-155050783959318-02-201922-41-34.jpg', 3, 1, '2019-02-08 19:40:40', '2019-02-18 16:41:34'),
(12, '‌মোঃ মাসুদুর রহমান সুমন', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/fb-img-154994158380012-02-201909-29-11.jpg', 7, 1, '2019-02-08 19:41:05', '2019-02-12 03:29:11'),
(13, 'মোঃ জা‌কির হো‌সেন রা‌শেদ', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/20/jakir20-02-201900-09-56.jpg', 5, 1, '2019-02-08 19:43:46', '2019-02-19 18:09:56'),
(14, 'নূর মোহাম্মদ', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/img-20190212-09244512-02-201909-30-05.jpg', 1, 1, '2019-02-08 19:44:16', '2019-02-12 03:30:05'),
(15, 'মোঃ ইসমাইল হো‌সেন', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/img-20190212-09263312-02-201909-31-04.jpg', 3, 1, '2019-02-08 19:45:10', '2019-02-14 09:46:50'),
(16, 'মোঃ মিরাজ হো‌সেন', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/16/fb-img-155028181137916-02-201907-58-14.jpg', 3, 1, '2019-02-08 19:45:39', '2019-02-16 01:58:14'),
(17, 'মোঃ রিফাত রহমান টুটুল', 'প্র‌তিষ্ঠাতা সদস্য', 'images/founder-members/2019/02/12/img-20190212-09082512-02-201909-11-42.jpg', 3, 1, '2019-02-08 19:46:45', '2019-02-12 03:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_menus`
--

CREATE TABLE `frontend_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_class` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontend_menus`
--

INSERT INTO `frontend_menus` (`id`, `name`, `url`, `status`, `type`, `serial_num`, `slug`, `icon_class`, `created_at`, `updated_at`) VALUES
(1, 'Home', '/', 1, 2, 1, 'null', NULL, '2019-01-03 23:18:26', '2019-01-03 23:18:26'),
(2, 'Donors by Group', '#', 1, 2, 2, 'null', NULL, '2019-01-03 23:20:15', '2019-01-03 23:20:15'),
(3, 'Search Donors', 'search-blood-donor.html', 2, 2, 3, 'null', NULL, '2019-01-03 23:20:45', '2019-01-18 19:05:40'),
(4, 'Blood Needed', '#', 1, 2, 4, 'null', NULL, '2019-01-03 23:21:20', '2019-01-03 23:21:20'),
(5, 'blood-banks', 'blood-banks-list.html', 1, 2, 5, 'null', NULL, '2019-01-03 23:21:49', '2019-01-03 23:21:49'),
(6, 'Contact', 'contact.html', 1, 2, 10, 'null', NULL, '2019-01-03 23:22:37', '2019-01-31 01:10:29'),
(7, 'About Blood', '#', 1, 2, 6, 'null', NULL, '2019-01-03 23:23:05', '2019-01-04 04:08:40'),
(8, 'Founder Members', 'founder-members-list.html', 1, 2, 8, 'null', NULL, '2019-01-29 02:15:18', '2019-01-29 02:16:04'),
(9, 'Gallery', 'photo-gallery', 1, 2, 9, 'null', NULL, '2019-01-31 01:11:07', '2019-01-31 01:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_sub_menus`
--

CREATE TABLE `frontend_sub_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontend_sub_menus`
--

INSERT INTO `frontend_sub_menus` (`id`, `name`, `url`, `status`, `serial_num`, `menu_id`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'A positive (A+)', 'donor-blood-group/a-positive-a+/1', 1, 1, 2, 'null', '2019-01-04 00:24:39', '2019-01-16 19:01:37'),
(5, 'A negative (A-)', 'donor-blood-group/a-negative-a-/2', 1, 2, 2, 'null', '2019-01-04 00:25:04', '2019-01-16 19:01:45'),
(6, 'B positive (B+)', 'donor-blood-group/b-positive-b+/3', 1, 3, 2, 'null', '2019-01-04 00:25:17', '2019-01-16 19:02:08'),
(7, 'B negative (B-)', 'donor-blood-group/b-negative-b-/4', 1, 4, 2, 'null', '2019-01-04 00:25:44', '2019-01-16 19:02:26'),
(8, 'O positive (O+)', 'donor-blood-group/o-positive-o+/5', 1, 5, 2, 'null', '2019-01-04 00:25:57', '2019-01-16 19:02:50'),
(9, 'O negative (O-)', 'donor-blood-group/o-negative-o-/6', 1, 6, 2, 'null', '2019-01-04 00:26:12', '2019-01-16 19:03:11'),
(10, 'AB positive (AB+)', 'donor-blood-group/ab-positive-ab+/7', 1, 7, 2, 'null', '2019-01-04 00:26:24', '2019-01-16 19:03:22'),
(11, 'AB negative (AB-)', 'donor-blood-group/ab-negative-ab-/8', 1, 8, 2, 'null', '2019-01-04 00:26:35', '2019-01-16 19:03:34'),
(12, 'Why Donate Blood', 'page/why-donate-blood', 1, 1, 7, 'page', '2019-01-04 00:29:19', '2019-01-04 00:29:19'),
(13, 'Eligibility to donate blood', 'page/eligibility-to-donate-blood', 1, 2, 7, 'page', '2019-01-04 00:29:46', '2019-01-04 00:29:46'),
(14, 'Tips for successful blood donation', 'page/tips-for-successful-blood-donation', 1, 3, 7, 'page', '2019-01-04 00:30:11', '2019-01-04 00:30:11'),
(15, 'What happens to donated blood', 'page/what-happens-to-donated-blood', 1, 4, 7, 'page', '2019-01-04 00:30:33', '2019-01-04 00:30:33'),
(16, 'Request for Blood', 'blood-request.html', 1, 1, 4, 'null', '2019-01-04 04:13:51', '2019-01-04 04:13:51'),
(17, 'Blood Request List', 'blood-request-list.html', 1, 2, 4, 'null', '2019-01-04 04:14:25', '2019-01-04 04:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `father_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `thana_upazila_id` int(10) UNSIGNED NOT NULL,
  `union_id` int(10) UNSIGNED NOT NULL,
  `village_id` int(10) UNSIGNED NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group_id` int(10) UNSIGNED NOT NULL,
  `last_blood_donation` timestamp NULL DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `facebook_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donation_status` tinyint(3) UNSIGNED DEFAULT 1 COMMENT '1=donate blood, 2=If Urgent, I can donate Blood',
  `member_type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=Donate blood, 2=  I want to be a voluntary member, 3=Founder member',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=Active,2=Inactive',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `father_name`, `district_id`, `thana_upazila_id`, `union_id`, `village_id`, `gender`, `blood_group_id`, `last_blood_donation`, `birthdate`, `facebook_id`, `photo`, `donation_status`, `member_type`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 20, 'Late. Md. Mustafa', 1, 1, 1, 2, 'Male', 5, '2018-11-29 18:00:00', '1985-09-20', 'bestofrasel@yahoo.com', 'images/member/2019/02/01/pp-new01-02-201910-12-19.jpg', 1, 1, 1, NULL, 6, '2019-02-01 04:12:19', '2019-02-06 04:53:14'),
(3, 21, 'Late. Md. Tomij Uddin', 1, 1, 1, 4, 'Male', 5, '2020-05-05 18:00:00', '1988-03-02', 'ওমর ফারুক শারিফী', 'images/member/2019/02/01/img-20190201-20032201-02-201920-17-57.JPG', 1, 1, 1, NULL, 16, '2019-02-01 12:42:44', '2020-05-07 12:00:37'),
(4, 22, 'Abdul khaleque', 1, 1, 1, 4, 'Male', 1, '2019-07-30 18:00:00', '1986-07-01', 'Rashedur rahman russell', 'images/member/2019/02/11/1549888655705-rasel11-02-201918-39-04.jpg', 1, 1, 1, NULL, 6, '2019-02-01 13:22:02', '2019-07-31 17:24:35'),
(5, 23, 'Abdul Khaleque', 1, 1, 1, 4, 'Male', 3, '2018-11-01 18:00:00', '1993-06-26', 'Md. Rifat rahman', 'images/member/2019/02/01/img-20190201-19563901-02-201919-57-32.JPG', 1, 1, 1, NULL, 6, '2019-02-01 13:57:33', '2019-02-22 19:39:02'),
(6, 25, 'Md.Nurul Islam', 1, 1, 1, 2, 'Male', 1, '2020-01-13 18:00:00', '1995-03-14', 'Md.Al Islam Opu', 'images/member/2019/02/03/img-2112-103-02-201911-36-03.jpg', 1, 1, 1, NULL, 6, '2019-02-03 05:36:04', '2020-09-28 03:28:50'),
(7, 26, 'MD Helal Uddin', 1, 1, 1, 5, 'Male', 3, '2019-04-21 18:00:00', '1998-09-14', 'Nadim Mahmud', 'images/member/2019/02/03/fb-img-154881374824503-02-201915-17-18.jpg', 1, 1, 1, NULL, 6, '2019-02-03 09:17:19', '2019-05-03 05:25:52'),
(8, 27, 'Md Amhad hossain', 1, 1, 1, 2, 'Male', 3, '2019-04-03 18:00:00', '1989-03-26', 'alim mahmud lito', 'images/member/2019/02/03/received-1230389203658144-03-02-201915-40-32.jpeg', 1, 1, 1, NULL, NULL, '2019-02-03 09:40:33', '2019-04-20 01:40:51'),
(9, 28, 'Md.Mosaraf Hossain', 1, 1, 1, 3, 'Male', 3, '2018-11-20 18:00:00', '1990-03-21', 'arianfashion@gmail.com', 'images/member/2019/02/03/fb-img-154484031980303-02-201918-41-32.jpg', 1, 1, 1, NULL, NULL, '2019-02-03 12:41:32', '2019-02-03 16:07:50'),
(10, 29, 'Mukunta Balo', 1, 1, 1, 13, 'Male', 3, '2018-10-10 18:00:00', '1997-03-14', 'http://facebook.com/sujon.balo', 'images/member/2019/02/03/received-385751205509469-03-02-201922-23-57.jpeg', 1, 1, 1, NULL, NULL, '2019-02-03 16:23:57', '2019-07-27 04:11:40'),
(11, 30, 'Md Mozibur Rahman', 1, 1, 1, 24, 'Male', 3, '2018-03-13 18:00:00', '1994-10-15', 'Engr Ashik Rahman', 'images/member/2019/02/04/b612-20180907-095217-11504-02-201900-36-33.jpg', 1, 1, 1, NULL, 16, '2019-02-03 18:36:33', '2019-02-06 04:53:42'),
(12, 31, 'Md. Jannatul Islam', 50, 74, 15, 42, 'Male', 5, '2019-02-01 18:00:00', '1997-12-15', 'Muhammad Tushar', 'images/member/2019/02/04/img-20190204-21043604-02-201921-09-35.jpg', 1, 1, 1, 6, NULL, '2019-02-04 15:09:36', '2019-02-04 15:09:36'),
(13, 32, 'Muhammad Ali', 1, 1, 1, 4, 'Male', 3, '2019-04-18 18:00:00', '1992-02-13', 'Alinoor Islam Miso', 'images/member/2019/02/05/alinoor-islam-miso-dohar-nawbabgonj-protinidi05-02-201911-21-24.jpg', 1, 1, 1, NULL, NULL, '2019-02-05 05:21:26', '2019-04-20 01:41:03'),
(14, 33, 'A.k.am.mohiuddin', 1, 1, 1, 4, 'Male', 7, '2018-10-31 18:00:00', '1994-08-24', 'Farhan ahmed biplob', 'images/member/2019/02/07/20190207-08303507-02-201908-30-56.JPG', 1, 1, 1, 16, NULL, '2019-02-06 05:58:20', '2019-02-07 02:30:56'),
(15, 34, 'shain mia', 1, 1, 1, 4, 'Male', 3, '2019-02-04 18:00:00', '1995-11-02', 'parvej Ahsan ornob', 'images/member/2019/02/06/img-4251-1-01-106-02-201912-02-57.jpg', 1, 1, 1, NULL, NULL, '2019-02-06 06:02:57', '2019-02-06 06:07:48'),
(16, 35, 'Md. Kaium Bhuiyan', 1, 1, 1, 2, 'Male', 5, '2018-07-09 18:00:00', '1995-09-07', 'Chatok Bhuiyan', 'images/member/2019/02/06/img-20190206-12065106-02-201912-07-17.JPG', 1, 1, 1, 16, NULL, '2019-02-06 06:07:17', '2019-02-06 06:07:17'),
(17, 37, 'Late. Ali Hossain', 1, 1, 1, 6, 'Male', 3, '2019-01-05 18:00:00', '1987-03-03', 'Humayon ahmed soikot', 'images/member/2019/02/06/img-20190206-18232606-02-201918-41-03.JPG', 1, 1, 1, 16, 16, '2019-02-06 12:41:05', '2019-02-12 14:32:47'),
(18, 38, 'Md. Chan mia', 1, 1, 1, 2, 'Male', 5, '2019-02-27 18:00:00', '1988-07-07', 'Selim mahmud roni', 'images/member/2019/02/06/img-20190206-18560406-02-201919-16-58.JPG', 1, 1, 1, 16, NULL, '2019-02-06 13:16:59', '2019-03-01 12:48:08'),
(19, 39, 'Md. Delwar Hossain Khan', 1, 1, 1, 3, 'Male', 5, '2019-01-27 18:00:00', '1999-03-13', 'Fayedhossainkhan', 'images/member/2019/02/06/fb-img-154460730818406-02-201919-50-34.jpg', 1, 1, 1, NULL, 16, '2019-02-06 13:50:35', '2019-02-13 07:19:27'),
(20, 40, 'Md. Mulluk chan', 1, 1, 1, 4, 'Male', 8, '2019-02-05 18:00:00', '1996-04-13', 'Himontir opu', 'images/member/2019/04/13/20190323-17350613-04-201922-49-44.jpg', 1, 1, 1, 16, NULL, '2019-02-06 13:57:26', '2019-04-13 16:49:45'),
(21, 41, 'Shahed Alam', 1, 1, 1, 3, 'Male', 5, '2019-03-07 18:00:00', '1996-11-01', 'Safayeat Alam Adnan', 'images/member/2019/02/08/img-20190208-10053208-02-201910-06-36.jpg', 1, 1, 1, NULL, 6, '2019-02-07 04:56:42', '2019-05-28 14:49:57'),
(22, 42, 'Sontosh Ray', 1, 1, 1, 17, 'Male', 5, '2019-09-14 18:00:00', '1985-06-07', 'Gobinda Ray', 'images/member/2019/02/07/img-20190207-15462407-02-201915-49-05.jpg', 1, 1, 1, 6, NULL, '2019-02-07 09:49:05', '2019-09-22 06:53:37'),
(23, 43, 'Late. Jamat ali', 1, 1, 1, 4, 'Male', 3, '2019-02-07 18:00:00', '1982-11-30', 'Ziaur rahman', 'images/member/2019/02/08/img-20190208-17094908-02-201917-18-58.JPG', 1, 2, 1, 16, NULL, '2019-02-08 11:19:00', '2019-02-08 11:19:00'),
(24, 44, 'Md Martuz Ali', 1, 1, 1, 3, 'Male', 7, '2018-11-17 18:00:00', '1990-08-21', 'Md Masudur Rahman Sumon', 'images/member/2019/02/09/15493412-1030297300449009-6009865094305609201-o09-02-201902-02-26.jpg', 1, 1, 1, NULL, 6, '2019-02-08 14:14:42', '2019-02-08 20:02:26'),
(25, 45, 'Abdul jalil', 1, 1, 1, 4, 'Male', 3, '2017-12-30 18:00:00', '1993-02-15', 'Md miraj sonapur', 'images/member/2019/02/09/org-300x30009-02-201910-45-07.jpg', 1, 1, 1, NULL, NULL, '2019-02-09 04:45:09', '2019-02-09 05:41:30'),
(26, 46, 'Alauddin', 1, 1, 1, 1, 'Male', 1, '2018-10-10 18:00:00', '1997-05-10', 'Dalwoar hossain', 'images/member/2019/02/09/img-20190112-17484809-02-201911-38-40.jpg', 1, 1, 1, NULL, NULL, '2019-02-09 05:38:43', '2019-02-09 05:39:46'),
(27, 47, 'Md Madari Mia', 1, 1, 1, 21, 'Male', 3, '2017-02-08 18:00:00', '1988-03-09', 'Md Hafizur Rahman', 'images/member/2019/02/09/img-20190209-12495809-02-201912-50-36.jpg', 1, 1, 1, NULL, 6, '2019-02-09 06:04:07', '2019-02-09 06:50:36'),
(28, 48, 'Late Hiralal Mandal', 1, 1, 1, 1, 'Male', 7, '2018-02-08 18:00:00', '1985-09-27', 'Dev Mandal', 'images/member/2019/02/09/received-2050708955008100-09-02-201912-46-48.jpeg', 1, 1, 1, NULL, 6, '2019-02-09 06:42:16', '2019-02-09 06:46:48'),
(29, 49, 'Noor Hossain', 1, 1, 1, 2, 'Male', 1, '2018-02-08 18:00:00', '1996-02-09', 'Sohag Ahammed', 'images/member/2019/02/09/img-20190209-13510909-02-201913-57-42.jpg', 1, 2, 1, NULL, NULL, '2019-02-09 07:57:43', '2019-02-09 07:58:13'),
(30, 50, 'Shahalam', 1, 1, 1, 5, 'Male', 3, '2019-01-18 18:00:00', '1998-01-07', 'Rasedujjaman Raitul', 'images/member/2019/02/09/img-20180929-144951-78109-02-201916-21-45.jpg', 1, 1, 1, NULL, NULL, '2019-02-09 10:21:47', '2019-02-09 10:35:14'),
(31, 51, 'Late Altaf Hossain', 1, 1, 1, 5, 'Male', 7, '2018-02-08 18:00:00', '1983-06-06', 'Rakimot Hossain', 'images/member/2019/02/09/img-20190209-16283209-02-201916-34-04.jpg', 1, 1, 1, NULL, NULL, '2019-02-09 10:34:05', '2019-02-09 10:34:44'),
(32, 52, 'Kurban ali', 1, 1, 1, 3, 'Male', 3, '2019-04-12 18:00:00', '1998-05-31', 'https://m.me/rakib.hasan12120', 'images/member/2019/02/09/received-1949154328467008-09-02-201920-59-42.jpeg', 1, 1, 1, NULL, 6, '2019-02-09 13:19:31', '2019-05-16 16:47:15'),
(33, 53, 'abdul rafique', 1, 1, 1, 4, 'Male', 1, '2018-09-04 18:00:00', '1994-02-06', 'al rahman roni', 'images/member/2019/02/09/fb-img-154781902574809-02-201920-39-54.jpg', 1, 1, 1, NULL, NULL, '2019-02-09 14:39:55', '2019-02-10 01:00:12'),
(34, 54, 'Late Pores Chandra Mondal', 1, 1, 1, 1, 'Male', 5, '2018-12-30 18:00:00', '1983-06-10', 'Delip Kumer Mondal', 'images/member/2019/02/10/received-1224808804364217-10-02-201916-54-52.jpeg', 1, 1, 1, NULL, 6, '2019-02-10 10:03:22', '2019-02-10 10:54:52'),
(36, 59, 'Md. Alauddin', 1, 1, 1, 3, 'Male', 5, '2019-11-22 18:00:00', '1992-06-16', 'www.facebook.com/mdsaifulcse', 'images/member/2019/03/03/2487403-03-201908-58-34.jpg', 1, 1, 1, NULL, 1, '2019-02-10 15:51:34', '2019-11-24 15:55:02'),
(37, 60, 'Md. Ali Jan', 1, 1, 1, 3, 'Male', 5, '2018-09-10 18:00:00', '1990-06-10', 'Jakir Hossain Rased', 'images/member/2019/02/11/44990452-642785592783171-6786478189481820160-n11-02-201900-02-54.jpg', 1, 1, 1, NULL, NULL, '2019-02-10 18:02:55', '2019-02-10 18:07:58'),
(38, 61, 'Md. Iman Ali', 1, 1, 1, 6, 'Male', 5, '2018-03-10 18:00:00', '1983-05-15', 'Nazrul Nazrul', 'images/member/2019/02/11/02511-02-201900-30-34.jpg', 1, 1, 1, NULL, NULL, '2019-02-10 18:30:34', '2019-02-10 18:32:04'),
(39, 62, 'Late Md. Wahed Ali', 1, 1, 1, 6, 'Male', 1, '2019-02-10 18:00:00', '1970-03-03', 'Md. Shubid Ali', 'images/member/2019/02/11/fb-img-154986848281411-02-201913-03-10.jpg', 1, 2, 1, 6, 6, '2019-02-11 07:00:07', '2019-02-11 07:03:10'),
(40, 64, 'Ozir Ali', 1, 1, 1, 1, 'Male', 5, '2018-02-10 18:00:00', '1983-02-11', 'Mohiuddin', 'images/member/2019/02/11/received-39059885483944111-02-201919-17-02.png', 1, 1, 1, 6, 16, '2019-02-11 13:17:02', '2019-04-22 06:50:42'),
(41, 65, 'Md. Mokshed ali', 1, 1, 1, 1, 'Male', 2, '2018-04-05 18:00:00', '1989-03-05', NULL, 'images/member/2019/02/11/img-20190211-19104311-02-201919-19-49.JPG', 1, 1, 1, 16, NULL, '2019-02-11 13:19:50', '2019-02-11 13:19:50'),
(42, 66, 'Nurul Islam', 1, 1, 1, 5, 'Male', 1, '2019-02-10 18:00:00', '2000-04-04', 'Asad Afnan', 'images/member/2019/02/11/received-39059885483944111-02-201919-31-53.png', 1, 1, 1, 6, 6, '2019-02-11 13:31:54', '2019-02-11 14:47:28'),
(43, 67, 'Late. Mohammad Ali', 1, 1, 1, 3, 'Male', 1, '2018-02-11 18:00:00', '1985-05-18', 'Mohan Koli', 'images/member/2019/02/12/mohan12-02-201914-55-10.jpg', 1, 2, 1, 6, 6, '2019-02-12 06:51:28', '2019-03-21 07:51:53'),
(44, 68, 'Dr: Aftab uddin ahmed', 1, 1, 1, 12, 'Male', 5, '2018-12-22 18:00:00', '1990-10-14', 'অলিউল ইসলাম তুহিন', 'images/member/2019/02/12/fb-img-154996117889712-02-201914-50-51.jpg', 1, 1, 1, NULL, NULL, '2019-02-12 08:50:51', '2019-02-12 10:04:05'),
(45, 69, 'Iman Ali', 1, 1, 1, 2, 'Male', 1, '2020-03-15 18:00:00', '1997-05-16', 'Mehedi hasan joy', 'images/member/2019/07/22/02aba330-6dc9-44e5-bbd4-599b116a9671-22-07-201915-04-29.jpeg', 1, 1, 1, 16, 110, '2019-02-12 13:15:48', '2020-03-16 18:34:12'),
(46, 70, 'Shopon Sarker', 1, 1, 1, 1, 'Male', 3, '2018-09-06 18:00:00', '2000-07-14', 'Www.Facebook.com/shuvo.sarker.37454', 'images/member/2019/02/12/fb-img-154997923506912-02-201919-47-51.jpg', 1, 1, 1, NULL, NULL, '2019-02-12 13:47:52', '2019-02-12 14:17:28'),
(47, 71, 'Haru Mondal', 1, 1, 1, 1, 'Male', 3, '2019-12-11 18:00:00', '2001-01-01', 'SB Sabuj', 'images/member/2019/02/12/b612-20180201-10055612-02-201920-10-14.jpg', 1, 1, 1, NULL, NULL, '2019-02-12 14:10:15', '2019-02-12 14:17:57'),
(48, 72, 'parimal Rajbongshi', 1, 1, 1, 1, 'Male', 3, '2017-12-31 18:00:00', '2000-08-07', 'www.facebook.com/dipto.raj.3154', 'images/member/2019/02/12/received-297147594304370-12-02-201920-21-21.jpeg', 1, 1, 1, NULL, NULL, '2019-02-12 14:21:22', '2019-02-12 14:26:11'),
(49, 73, 'Late Md Ashosan Ullah', 1, 1, 1, 3, 'Male', 3, '2019-04-28 18:00:00', '1983-02-01', 'Md Alamgir Hossain', 'images/member/2019/02/12/img-20190212-20415312-02-201920-42-35.jpg', 1, 1, 1, 6, 6, '2019-02-12 14:24:18', '2019-04-29 07:13:12'),
(50, 74, 'Shamsuddin Ahmed', 1, 1, 1, 5, 'Male', 3, '2018-03-09 18:00:00', '1998-07-09', 'Sheikh Farhan Sharif', 'images/member/2019/02/12/img-20190212-20365112-02-201920-40-45.jpg', 1, 1, 1, NULL, NULL, '2019-02-12 14:40:46', '2019-02-12 14:42:31'),
(51, 75, 'Md Liakot Ali', 1, 1, 1, 5, 'Male', 3, '2019-02-23 18:00:00', '1999-09-26', 'Md Mozammle', 'images/member/2019/02/12/img-20190212-20463212-02-201920-59-57.jpg', 1, 1, 1, NULL, NULL, '2019-02-12 14:59:58', '2019-04-27 13:15:00'),
(52, 76, 'late.md.mostafa', 1, 1, 1, 4, 'Male', 1, '2016-01-10 18:00:00', '1988-11-09', 'Jahid mahmud selim', 'images/member/2019/02/12/fb-img-154989908848412-02-201921-58-02.jpg', 1, 1, 1, NULL, NULL, '2019-02-12 15:58:02', '2019-02-12 17:31:55'),
(53, 77, 'joynal abedin', 1, 1, 1, 3, 'Male', 5, '2017-02-10 18:00:00', '1986-11-03', 'Md.biplob hossain', 'images/member/2019/02/13/fb-img-155003296042813-02-201910-51-48.jpg', 1, 1, 1, NULL, NULL, '2019-02-13 04:51:48', '2019-02-13 12:22:18'),
(54, 78, 'shirajul uddin', 1, 1, 1, 3, 'Male', 5, '2018-05-12 18:00:00', '1986-05-10', 'jasim uddin', NULL, 1, 1, 1, NULL, NULL, '2019-02-13 12:10:12', '2019-02-13 12:24:52'),
(55, 79, 'Amzad Hossain', 1, 1, 1, 2, 'Male', 5, '2017-02-13 18:00:00', '1984-02-01', 'Md Ataul Hoque', 'images/member/2019/02/14/img-20190214-20145714-02-201920-15-29.jpg', 1, 2, 1, 6, 6, '2019-02-14 14:09:07', '2019-02-14 14:15:29'),
(56, 80, 'Firoz khan', 1, 1, 1, 11, 'Male', 6, '2019-01-09 18:00:00', '1998-10-08', 'Saiful Islam Khalid Khan', NULL, 1, 1, 1, NULL, NULL, '2019-02-14 17:27:28', '2019-02-15 09:15:25'),
(57, 81, 'Abdur Rahim', 1, 1, 1, 3, 'Male', 6, '2019-05-19 18:00:00', '1998-12-14', 'www.facebook.com/sadhin.al.hassan', 'images/member/2019/02/15/screenshot-2019-02-12-15-37-3915-02-201917-58-04.png', 1, 1, 1, NULL, NULL, '2019-02-15 11:58:09', '2019-07-27 04:11:49'),
(58, 82, 'Abdul Mannan', 1, 1, 1, 6, 'Male', 1, '2018-11-01 18:00:00', '1988-05-12', NULL, 'images/member/2019/02/15/img-20190215-18494915-02-201918-55-30.JPG', 1, 1, 1, 16, NULL, '2019-02-15 12:55:31', '2019-02-15 12:55:31'),
(59, 83, 'Md Abul Kalam', 1, 1, 1, 5, 'Male', 5, '2018-11-14 18:00:00', '1999-07-07', 'www.facebook.com/nhd.nahid.01', 'images/member/2019/02/15/img-20190206-12323215-02-201919-15-03.jpg', 1, 1, 1, NULL, NULL, '2019-02-15 13:15:05', '2019-02-18 06:33:09'),
(60, 84, 'Abdul Kader', 1, 1, 1, 2, 'Male', 1, '2018-11-17 18:00:00', '1990-05-17', 'https://www.facebook.com/noor.mohammad.969952', 'images/member/2019/02/19/noor-photo19-02-201914-20-46.jpg', 1, 1, 1, NULL, NULL, '2019-02-19 08:20:48', '2019-02-19 10:25:19'),
(61, 85, 'Delower Hosen', 1, 1, 1, 3, 'Male', 3, '2019-05-14 18:00:00', '1998-04-16', 'Asadul Islam Asad', 'images/member/2019/02/23/received-320067571941319-23-02-201911-08-28.jpeg', 1, 1, 1, NULL, NULL, '2019-02-23 05:08:29', '2019-05-16 16:27:12'),
(63, 87, 'ajit das', 1, 1, 1, 1, 'Male', 3, '2018-09-12 18:00:00', '1997-12-18', 'সুব্রত দাস', NULL, 1, 1, 1, NULL, NULL, '2019-02-27 02:40:04', '2019-02-28 15:56:42'),
(64, 88, 'Late Md Marfat ali', 1, 1, 1, 2, 'Male', 5, '2018-02-27 18:00:00', '1987-09-21', 'Mehedi Hasan', NULL, 1, 1, 1, NULL, NULL, '2019-02-28 11:48:56', '2019-02-28 15:57:03'),
(65, 89, 'Md Azhar Ali', 1, 1, 1, 1, 'Male', 3, '2019-03-06 18:00:00', '1995-07-03', 'Md Selim Mia', 'images/member/2019/03/03/received-291729114830384-03-03-201909-42-43.jpeg', 1, 1, 1, 6, 6, '2019-03-01 12:45:02', '2019-05-16 16:34:29'),
(66, 90, 'Md. Chan miah', 1, 1, 1, 4, 'Male', 7, '2018-03-29 18:00:00', '1988-10-12', 'Harun miah', NULL, 1, 1, 1, 16, NULL, '2019-03-02 12:38:52', '2019-03-02 12:38:52'),
(67, 91, 'Md. Emdadul haque', 1, 1, 1, 2, 'Male', 7, '2018-03-14 18:00:00', '1990-02-17', 'Faisal parvej', 'images/member/2019/03/07/bbe58b37-b1dd-419f-bc88-577bbaddae04-07-03-201920-25-20.jpeg', 1, 1, 1, 16, NULL, '2019-03-07 13:58:13', '2019-03-07 14:25:21'),
(68, 92, 'Late Shafi Uddin', 1, 1, 1, 5, 'Male', 5, '2018-05-04 18:00:00', '1992-08-13', 'Amin Eibu', 'images/member/2019/03/09/received-1566935886651276609-03-201907-57-53.jpg', 1, 1, 1, NULL, NULL, '2019-03-09 01:57:53', '2019-03-13 14:00:24'),
(69, 93, 'Md. Shahjahan', 1, 1, 1, 5, 'Female', 1, '2019-03-12 18:00:00', '1988-03-03', NULL, NULL, 1, 1, 1, 16, NULL, '2019-03-13 07:13:35', '2019-03-13 07:13:35'),
(70, 94, 'Md Badsha Mia', 1, 1, 1, 1, 'Male', 6, '2019-05-20 18:00:00', '1985-05-07', 'Md Robel Miha', 'images/member/2019/03/13/received-421843401958579-13-03-201920-32-26.jpeg', 1, 1, 1, 6, 6, '2019-03-13 14:13:38', '2019-05-28 14:50:05'),
(71, 95, 'Netai Rajbongshi', 1, 1, 1, 1, 'Male', 1, '2018-03-12 18:00:00', '1985-04-17', 'Anand Raj', 'images/member/2019/03/14/received-301199463902126-14-03-201923-28-20.jpeg', 1, 2, 1, 6, 6, '2019-03-13 14:20:30', '2019-03-14 17:28:21'),
(72, 96, 'Jannatul islam', 1, 1, 1, 1, 'Female', 5, '2018-03-16 18:00:00', '1993-01-01', 'Shanta Mahmud', 'images/member/2019/03/17/shanta-pp17-03-201912-07-14.jpg', 1, 1, 1, 6, 6, '2019-03-17 05:57:20', '2019-03-17 06:07:14'),
(73, 97, 'Md Aman Ullah', 1, 1, 1, 2, 'Male', 3, '2019-03-22 18:00:00', '1987-05-05', 'Nur Alam', 'images/member/2019/03/24/fb-img-155339834258524-03-201909-34-48.jpg', 1, 1, 1, 6, 6, '2019-03-24 03:29:17', '2019-03-24 03:34:48'),
(74, 98, 'Kanai mndol', 1, 1, 1, 1, 'Male', 7, '2018-10-24 18:00:00', '1989-03-25', NULL, 'images/member/2019/03/25/img-20190325-20301825-03-201920-31-19.JPG', 1, 1, 1, 16, 16, '2019-03-25 14:29:11', '2019-03-25 14:31:19'),
(75, 99, 'Sudarshan Sarker', 1, 1, 1, 1, 'Male', 1, '2018-11-17 18:00:00', '2000-06-10', 'Shimul Sarker', 'images/member/2019/04/04/2019-03-28-09-05-4604-04-201913-11-57.png', 1, 1, 1, NULL, NULL, '2019-04-04 07:11:59', '2019-04-07 11:58:12'),
(76, 100, 'Abdus Samad', 1, 1, 1, 7, 'Male', 3, '2019-04-24 18:00:00', '1997-08-22', 'Sheikh Sabbir', 'images/member/2019/04/27/received-2991138250913088-27-04-201914-06-44.jpeg', 1, 1, 1, 6, 6, '2019-04-27 08:05:38', '2019-04-27 13:41:38'),
(77, 101, 'Yeakob Hossain', 1, 1, 1, 3, 'Male', 5, '2019-08-22 18:00:00', '1985-05-20', 'MD rokan', 'images/member/2019/04/27/fb-img-155637401974327-04-201920-07-35.jpg', 1, 1, 1, 6, 6, '2019-04-27 12:11:56', '2019-08-25 05:10:25'),
(78, 102, 'Md Romjan Ali', 1, 1, 1, 12, 'Male', 3, '2019-04-27 18:00:00', '1998-04-27', 'শেখ সজিব', 'images/member/2019/04/27/127-04-201920-19-14.', 1, 1, 1, NULL, NULL, '2019-04-27 13:37:47', '2019-04-29 07:19:36'),
(79, 104, 'Golap Khan', 1, 1, 1, 4, 'Male', 5, '2019-04-15 18:00:00', '1998-10-16', 'Xahid Hasan', 'images/member/2019/05/27/picsart-05-22-10-30-2527-05-201916-32-44.jpg', 1, 1, 1, NULL, NULL, '2019-05-27 10:32:45', '2019-07-11 15:25:50'),
(80, 105, 'Md.Amjad hossain', 1, 1, 1, 2, 'Male', 3, '2019-01-26 18:00:00', '1991-04-17', NULL, 'images/member/2019/05/27/faruk-pic27-05-201920-12-38.jpg', 1, 1, 1, NULL, NULL, '2019-05-27 14:12:39', '2019-07-11 15:25:18'),
(81, 106, 'Dusto Mohammad Khan', 1, 1, 1, 3, 'Male', 5, '2019-01-27 18:00:00', '1994-08-15', 'Md Khan Robin', 'images/member/2019/05/28/fb-img-155905480486428-05-201920-49-53.jpg', 1, 1, 1, NULL, NULL, '2019-05-28 14:49:54', '2019-07-11 15:24:50'),
(82, 107, 'Pare ah Chandra Sarker', 1, 1, 1, 13, 'Male', 5, '2019-10-27 18:00:00', '1996-11-09', 'শুভাশিস সরকার', 'images/member/2019/07/28/ee321b35-9856-4aac-b956-6e868295b134-28-07-201923-57-23.jpeg', 1, 1, 1, NULL, 110, '2019-06-01 13:53:05', '2019-10-28 14:49:58'),
(83, 108, 'Md. Jafor Ali', 1, 1, 1, 1, 'Male', 5, '2019-06-30 18:00:00', '1998-07-25', 'Sk. Al Amin', 'images/member/2019/07/01/7610501-07-201900-29-16.JPG', 1, 2, 1, NULL, NULL, '2019-06-30 18:29:16', '2019-07-11 15:23:45'),
(84, 111, 'Nd shajahan', 1, 1, 1, 4, 'Male', 1, '2018-12-03 18:00:00', '1997-11-14', 'Mamun Mahamud', NULL, 1, 1, 1, 110, NULL, '2019-07-15 14:21:20', '2019-07-15 14:21:20'),
(85, 112, 'Late. Akkal ali', 1, 1, 1, 5, 'Male', 1, '2019-06-24 18:00:00', '1983-02-04', NULL, 'images/member/2019/07/15/2019-07-15-20-20-2515-07-201920-21-43.jpg', 1, 1, 1, NULL, NULL, '2019-07-15 14:21:44', '2019-07-15 14:35:20'),
(86, 113, 'Md iman ali', 1, 1, 1, 2, 'Female', 1, '2018-12-19 18:00:00', '1993-10-20', 'Nayna Rahoman', 'images/member/2019/07/23/e465a84a-76b2-4c1b-b3ce-7b1ffda28a69-23-07-201915-39-59.jpeg', 1, 1, 1, NULL, NULL, '2019-07-23 09:40:00', '2019-07-28 09:44:01'),
(87, 114, 'Md. AwlaHossain', 1, 1, 1, 2, 'Male', 3, '2019-07-25 18:00:00', '1997-07-15', 'Md Aminul Islam', NULL, 1, 1, 1, NULL, NULL, '2019-07-27 04:07:55', '2019-07-28 09:42:27'),
(88, 115, 'Md Mohi Uddin', 1, 1, 1, 4, 'Male', 1, '2019-06-09 18:00:00', '1985-07-05', 'Md Humayun Kobir', NULL, 1, 1, 1, 6, NULL, '2019-08-03 12:57:01', '2019-08-03 12:57:01'),
(89, 116, NULL, 1, 1, 1, 6, NULL, 8, '2018-12-31 18:00:00', '1970-01-01', NULL, NULL, 1, 1, 1, NULL, NULL, '2019-08-13 06:15:30', '2019-08-20 15:59:14'),
(91, 118, NULL, 1, 1, 1, 3, NULL, 5, '2019-08-22 18:00:00', '1970-01-01', NULL, NULL, 1, 1, 1, NULL, NULL, '2019-08-23 09:55:49', '2019-08-25 05:10:13'),
(92, 120, NULL, 1, 1, 1, 2, NULL, 5, '2020-09-28 18:00:00', '1970-01-01', NULL, NULL, 1, 2, 0, NULL, NULL, '2020-09-29 16:35:33', '2020-09-29 16:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `icon_class` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `status`, `type`, `serial_num`, `slug`, `icon_class`, `created_at`, `updated_at`) VALUES
(1, 'Manage Slider', 'manage-slider', 1, 2, 1, 'null', 'fa fa-sliders', '2018-12-08 10:33:50', '2018-12-08 10:35:21'),
(3, 'Blood Group Admin', 'blood-group', 1, 2, 7, 'null', 'fa fa-tint', '2018-12-08 19:59:47', '2019-02-13 15:51:41'),
(4, 'Blood Bank List', 'blood-bank', 1, 2, 8, 'null', 'fa fa-hospital-o', '2018-12-09 09:54:21', '2019-02-13 16:04:10'),
(5, 'Setting', '#', 1, 2, 14, 'null', 'fa fa-cog', '2018-12-09 11:42:36', '2019-03-02 16:59:21'),
(6, 'Manage Tips Page', 'pages', 1, 2, 10, 'null', 'fa fa-folder-open', '2018-12-10 10:00:23', '2019-02-13 16:09:27'),
(7, 'Members', '#', 1, 2, 3, 'null', 'fa fa-pencil-square-o', '2018-12-10 19:35:14', '2019-01-18 17:20:27'),
(8, 'Pending Information Request', 'show-user-message', 1, 2, 9, 'null', 'fa fa-commenting-o', '2019-01-06 11:46:17', '2019-02-13 16:07:00'),
(9, 'Manage Notice', 'notice', 1, 2, 2, 'null', 'fa fa-commenting', '2019-01-08 20:02:38', '2019-01-18 17:18:30'),
(10, 'Approve Blood Donation', 'member-blood-donation', 1, 2, 5, 'null', 'fa fa-tint', '2019-01-15 09:45:07', '2019-02-13 15:56:30'),
(11, 'President Speech', 'president-speech', 2, 2, 5, 'null', 'fa fa-commenting-o', '2019-01-15 11:16:34', '2019-01-31 17:57:17'),
(12, 'Eligible Blood Donors', '#', 1, 2, 3, 'null', 'fa fa-user', '2019-01-16 10:30:58', '2019-02-13 16:13:47'),
(13, 'Blood Receivers List', 'blood-receiver-list', 1, 2, 6, 'null', 'fa-user', '2019-01-29 15:58:30', '2019-02-13 16:14:13'),
(14, 'Photo Gallery List', 'gallery', 1, 2, 11, 'null', 'fa fa-folder', '2019-01-31 01:33:53', '2019-02-13 16:10:59'),
(15, 'Reports', '#', 1, 2, 13, 'null', 'fa fa-files-o', '2019-03-02 16:59:02', '2019-07-30 18:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_02_054017_create_primary_infos_table', 1),
(4, '2018_08_06_101634_create_menu_table', 1),
(5, '2018_08_06_101708_create_sub_menu_table', 1),
(6, '2018_08_06_101726_create_sub_sub_menu_table', 1),
(7, '2018_10_28_161529_create_permission_tables', 1),
(9, '2018_11_06_165039_create_cities_table', 1),
(10, '2018_11_07_011444_create_event_types_table', 1),
(11, '2018_11_07_174141_create_sub_event_types_table', 1),
(12, '2018_11_08_183102_create_categories_table', 1),
(13, '2018_11_12_155837_create_faqs_table', 1),
(14, '2018_11_13_150524_create_pages_table', 1),
(15, '2018_11_14_165910_create_events_table', 1),
(16, '2018_12_08_163721_create_sliders_table', 2),
(17, '2018_12_09_003231_create_notices_table', 3),
(18, '2018_12_09_014357_create_blood_groups_table', 4),
(20, '2018_12_09_154437_create_blood_banks_table', 5),
(21, '2018_12_09_173537_create_districts_table', 6),
(22, '2018_12_09_180420_create_thana_upazilas_table', 7),
(25, '2018_12_11_005017_create_blood_donates_table', 8),
(27, '2019_01_04_043833_create_frontend_menus_table', 10),
(28, '2019_01_04_044612_create_frontend_sub_menus_table', 11),
(29, '2019_01_05_170744_create_blood_requests_table', 12),
(30, '2019_01_06_173002_create_user_messages_table', 13),
(31, '2019_01_15_165931_create_president_speeches_table', 14),
(32, '2018_12_09_180421_create_unions_table', 15),
(33, '2018_12_09_180422_create_villages_table', 16),
(34, '2018_12_10_174530_create_members_table', 17),
(35, '2019_01_31_072225_create_photo_galleries_table', 18),
(37, '2019_02_01_000931_create_founder_members_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `url`, `photo`, `details`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(3, 'শোল্লা হাই স্কুল এন্ড ক‌লে‌জে বিনামূল্যে রক্তের গ্রুপ নির্ণয় সম্পন্ন', 'n-a', 'images/notice/2019/02/05/screenshot-2019-01-26-07-49-25-0905-02-201922-54-03.png', '<p>শোল্লা হাই স্কুল এন্ড ক&zwnj;লে&zwnj;জে বিনামূল্যে রক্তের গ্রুপ নির্ণয় সম্পন্ন করা হ&zwnj;য়ে&zwnj;ছে।</p>', 6, 0, '2019-02-05 16:54:05', '2019-03-01 12:16:48'),
(4, 'বীর মু‌ক্তিযুদ্ধা আব্দুল খা‌লেক মাষ্টারকে সম্মান প্রদর্শন।', 'n-a', 'images/notice/2019/02/09/received-264438860901915-09-02-201917-42-11.jpeg', '<p>বীর মু&zwnj;ক্তিযুদ্ধা আব্দুল খা&zwnj;লেক মাষ্টারকে সম্মান প্রদর্শন।</p>', 4, 0, '2019-02-09 11:42:12', '2019-03-01 12:17:52'),
(6, 'আসুন জেনে নেই কে কখন রক্ত দিতে পারবেন।', 'n-a', 'images/notice/2019/02/12/img-20190212-16311412-02-201916-32-16.JPG', '<p>রক্তদানের যোগ্যতাঃ-</p>\r\n<p>সাধারনত একজন সুস্থ ব্যাক্তি চার মাস অন্তর অন্তর রক্তদান করতে পারেন। এবার দেখে নেয়া যাক রক্তদানের যোগ্যতাসমূহ-</p>\r\n<p>1. বয়স &ndash; ১৮-৫৭ বছর।</p>\r\n<p>2. ওজন - ১০০ পাউন্ড বা ৪৭ কেজির উর্ধ্বে।</p>\r\n<p>3. তবে বিশেষ কিছু ক্ষেত্রে ( অনুচক্রিকা , রক্তরস ) ওজন ৫৫ কেজি বা তার উর্ধ্বে। রক্তচাপ স্বাভাবিক থাকলে।</p>\r\n<p>4. রক্তে হিমোগ্লোবিনের পরিমাণ ৭৫% বা তার উর্ধ্বে থাকলে। সম্প্রতি ( ৬-মাস ) কোন দূঘর্টনা বা বড় ধরনের অপারেশন না হলে।</p>\r\n<p>5. রক্তবাহিত জটিল রোগ যেমন-ম্যালেরিয়া, সিফিলিস , গনোরিয়া, হেপাটাইটিস , এইডস, চর্মরোগ , হৃদরোগ , ডায়াবেটিস , টাইফয়েড এবং বাতজ্বর না থাকলে।</p>\r\n<p>6. কোন বিশেষ ধরনের ঔষধ ব্যবহার না করলে।</p>\r\n<p>7. চার মাসের মধ্যে যিনি কোথাও রক্ত দেননি।</p>\r\n<p>8. মহিলাদের মধ্যে যারা গর্ভবতী নন এবং যাদের মাসিক চলছে না।</p>', 5, 0, '2019-02-12 10:32:17', '2019-03-02 16:43:37'),
(8, 'আলহামদুলিল্লাহ আওয়াল ভাই এখন অনেকটাই ভাল আছে।', 'n-a', 'images/notice/2019/02/15/img-20190211-18463215-02-201909-33-29.JPG', '<p>নামঃ মোঃ আওয়াল মিয়া,&nbsp; গ্রামঃ সোনাপুর, &zwnj;পোঃ শোল্লা, থানাঃ নবাবগঞ্জ, জেলাঃ ঢাকা। বয়স ৪৫ বছর। দুই ছেলের বাবা। এক ছেলের বয়স তের বছর আরেক ছেলের বয়স পাচ বছর। ভালোই চলতেছিলো জীবন সংসার।&nbsp; অটো চালিয়ে সংসার চালাতো। হঠাত করে দেখা দিলো মরন ব্যাধী কিডনি রোগ।&nbsp; প্রথমে একটি কিডনি নষ্ট হয়। তারপরে টাকার অভাবে ঠিক মত চিকিৎসা করতে&nbsp; না পেরে দ্বিতীয় কিডনিটাও নষ্ট হয়ে যায়। এখন তার দিন চলতেছে মৃত্যুর অপেক্ষায়। এখন টাকার অভাবে ওষুধ কিনেও খেতে পারতেছেনা। এখন আল্লাহ এবং আপনারা/ আমরাই পারি কিছু করতে তার জন্য। আপনার আমার উদ্বৃত্ত টাকা থেকে কিছু টাকা তার জন্য দান করলেই হয়তো তার চিকিৎসাকরা সম্ভব হবে।&nbsp; তাই আসুন হাতে হাত রেখে মানবতার সেবায় এগিয়ে আসি। হয়তো&nbsp; বেঁচে যাবে একটি প্রান, হাসি ফুটবে একটি পরিবারের, আস্ত্রয় পাবে দুটি নিস্পাপ শিশু। তাই সকলে এগিয়ে আসি আওয়াল ভাইকে চিকিৎসা করাতে একটু ভুমিকা রাখি।&nbsp;</p>', 3, 1, '2019-02-15 03:33:30', '2019-12-01 11:56:44'),
(10, 'রেজিঃ পেইজ সংশোধন করে আরো সংক্ষিপ্ত করা হয়েছে।যারা এখনও রেজিঃ করেননি অনুগ্রহ করে রেজিঃ করুন-মুখপাত্র', 'n-a', 'images/notice/2019/03/27/received-2187208114634545-27-03-201908-11-43.jpeg', '<p>শোল্লা ব্লাড পয়েন্টের রেজিঃ পেইজ সংশোধন করে আরো সংক্ষিপ্ত করা হয়েছে। যারা এখনও রেজিঃ করেননি অনুগ্রহ করে রেজিঃ করুন; মানবতার সেবায় নিজেকে সম্পৃক্ত করুন।-মুখপাত্র</p>', 2, 1, '2019-02-24 09:46:28', '2019-08-01 11:20:08'),
(12, 'রক্তদান কর‌লেন মাসুদুর রহমান সুমন', 'n-a', 'images/notice/2019/04/27/received-1414081118732053-27-04-201913-40-18.jpeg', '<p style=\"text-align: justify;\">নাদিম মাহমুদ শোল্লা ব্লাড পয়েন্ট এর একজন অন্যতম সদস্য।&nbsp; মানবতার সেবায় নিজেকে সব সময় সম্পৃক্ত রাখে। তারই ধারাবাহিকতায় ৩য় বারের মত এক মুমূর্ষু রোগীকে রক্ত দিয়ে মানবতার সেবায় নিজেকে সম্পৃক্ত করেছে। শোল্লা ব্লাড পয়েন্ট এর পক্ষ থেকে আন্তরিক শুভেচ্ছা ও অভিনন্দন জানাচ্ছি।</p>', 7, 1, '2019-04-27 07:40:19', '2019-12-01 11:54:37'),
(13, 'সাদা মনের মানুষ ডা: মোখলেছুর রহমান আর নেই।আল্লাহ তা‌য়লা তা‌কে জান্নাতুল ফেরদাউস দান করুন। আমীন', 'n-a', 'images/notice/2019/05/12/fb-img-155768127884912-05-201923-53-55.jpg', '<p>\"এমন জীবন তুমি করিও গঠন, মরনে হাসিবে তুমি কাদিবে ভূবন\" এমনই একজন সদা হাসোজ্জল, পরোপকারী ও সাদা মনের মানুষ ডা: মোখলেছুর রহমান। তি&zwnj;নি না ফেরার দে&zwnj;শে পা&zwnj;রি দি&zwnj;য়ে আমা&zwnj;দের ক&zwnj;রে&zwnj;ছে ব্য&zwnj;থিত। শোল্লা ব্লাড প&zwnj;য়ে&zwnj;ন্টের পক্ষ থে&zwnj;কে এমন পরোপকারী মানুষটার জন্য দোয়া ও মাগ&zwnj;ফিরাত কামনা কর&zwnj;ছি। আল্লাহ তা&zwnj;য়লা তা&zwnj;কে জান্নাতুল ফেরদাউস দান করুন। আমীন</p>', 8, 1, '2019-05-12 17:53:55', '2019-05-12 17:53:55'),
(14, 'শোল্লা উচ্চ মাধ্যমিক বিদ্যালয়ের ৭৫ বছর পুর্তি উপলক্ষে \"হীরক জয়ন্তীউদযাপন২০২০\" অনুষ্ঠিত হতে যাচ্ছে।', 'n-a', 'images/notice/2019/11/05/received-2438840423051527-05-11-201919-51-26.jpeg', '<h2>শোল্লা উচ্চ মাধ্যমিক বিদ্যালয়ের ৭৫ বছর পুর্তি উপলক্ষে হীরক জয়ন্তী উদযাপন-২০২০ এর এক জমকালো অনুষ্ঠান আয়োজন করা হয়েছে। ইতি মধ্যে রেজিষ্ট্রেশন শুরু&nbsp; হয়ে গেসে। অফলাইন অনলাইন দুই পদ্ধতিতে রেজিষ্ট্রেশন হচ্ছে। আপনি চাইলেই আপনার গ্রাম বা নিকটস্থ লোকের কাছ থেকে রেজিঃ করে নিতে পারবেন। আর অনলাইনেও করতে পারবেন । shollaschoolcollege.edu.bd/75years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; </h2>', 1, 1, '2019-11-05 13:51:27', '2019-12-01 11:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `photo`, `short_description`, `details`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(1, 'কেন রক্তদান করবেন?', 'why-donate-blood', 'images/page/2018/12/10/log110-12-201816-31-40.jpg', '<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>১. প্রথম এবং প্রধান কারণ, আপনার দানকৃত রক্ত একজন মানুষের জীবন বাঁচাবে। রক্তদানের জন্য এর থেকে বড় কারণ আর কি হতে পারে !</strong></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>২. হয়তো একদিন আপনার নিজের প্রয়োজনে/বিপদে অন্য কেউ এগিয়ে আসবে।</strong></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>৩. নিয়মিত রক্তদানে&nbsp;<span class=\"userContent translationEligibleUserMessage\" data-ft=\"{\">হৃদরোগ ও হার্ট অ্যাটাকের ঝুঁকি অনেক কম।</span></strong></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>৪.&nbsp;<span class=\"userContent translationEligibleUserMessage\" data-ft=\"{\">নিয়মিত স্বেচ্ছায়<span class=\"text_exposed_show\">&nbsp;রক্তদানের মাধ্যমে বিনা খরচে জানা যায় নিজের শরীরে বড় কোনো রোগ আছে কিনা। যেমন : হেপাটাইটিস-বি, হেপাটাইটিস-সি, সিফিলিস, এইচআইভি (এইডস) ইত্যাদি।</span></span></strong></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>৫. দেহের রোগ প্রতিরোধ ক্ষমতা অনেকগুন বেড়ে যায়।</strong></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>৬.&nbsp;<span class=\"userContent translationEligibleUserMessage\" data-ft=\"{\">রক্তদান ধর্মীয় দিক থেকে অত্যন্ত পুণ্যের বা সওয়াবের কাজ। পবিত্র কোরআনের সূরা মায়েদার ৩২ নং আয়াতে আছে, &lsquo;একজন মানুষের জীবন বাঁচানো সমগ্র মানব জাতির জীবন বাঁচানোর মতো মহান কাজ।&rsquo;</span></strong></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\"><strong>৭. নিজের মাঝে একধরনের আত্মতৃপ্তি উপলব্ধি করতে পারবেন । \"আমাদের ছোট পরিসরের এই জীবনে কিছু একটা করলাম\" এই অনুভুতি আপনার মনে জাগ্রত হবে এই ব্যাপারে নিশ্চিত করছি |</strong></p>', '<p>Donating Blood Saves Lives</p>', 1, 1, '2018-12-10 10:05:45', '2019-02-07 12:20:03'),
(2, 'কারা রক্তদান করতে পারবেন?', 'eligibility-to-donate-blood', 'images/page/2018/12/10/log110-12-201816-32-11.jpg', '<p><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">১) ১৮ বছর থেকে ৬০ বছরের যেকোনো সুস্থদেহের মানুষ রক্ত দান করতে পারবেন।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">২) শারীরিক এবং মানসিক ভাবে সুস্থ নিরোগ ব্যক্তি রক্ত দিতে পারবেন</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৩)&nbsp; আপনার ওজন অবশ্যই ৫০ কিলোগ্রাম কিংবা তার বেশি হতে হবে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৪) মহিলাদের ক্ষেত্রে ৪ মাস অন্তর-অন্তর, পুরুষদের ক্ষেত্রে ৩ মাস অন্তর অন্তর রক্ত-দান করা যায়।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৫) রক্তে হিমোগ্লোবিনের পরিমাণ, রক্তচাপ ও শরীরের তাপমাত্রা স্বাভাবিক থাকতে হবে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৬) শ্বাস-প্রশ্বাসজনিত রোগ এ্যাজমা, হাপানি যাদের আছে তারা রক্ত দিতে পারবেন না।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৭) রক্তবাহিত জটিল রোগ যেমন-ম্যালেরিয়া, সিফিলিস , গনোরিয়া, হেপাটাইটিস , এইডস, চর্মরোগ , হৃদরোগ , ডায়াবেটিস , টাইফয়েড এবং বাতজ্বর না থাকলে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৮)&nbsp; আপনাকে চর্মরোগ মুক্ত হতে হবে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৯) মহিলাদের মধ্যে যারা গর্ভবতী নন এবং যাদের মাসিক চলছে না।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">১০)&nbsp; আপনাকে অবশ্যই হেপাটাইটিস-বি, হেপাটাইটিস-সি, এইডস, ক্যান্সার, যক্ষা, সিজোফ্রেনিয়া এবং ম্যালেরিয়া রোগমুক্ত হতে হবে। তবে কিছু রোগ আগে যেগুলোতে আক্রান্ত রোগীরা নির্দিষ্ট সময় পর রক্ত দিতে পারেন। যেমন, টাইফয়েডে আক্রান্ত রোগী-১২ মাস, ম্যালেরিয়ার রোগী-তিন মাস পর রক্ত দিতে পারবেন।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">১১) কোন বিশেষ ধরনের ঔষধ ব্যবহার না করলে। যেমন- এ্যান্টিবায়োটিক।</span></p>', '<p><em><strong>Donate Blood Save Life.</strong></em></p>', 2, 1, '2018-12-10 10:32:11', '2019-02-07 12:22:00'),
(3, 'Tips for successful blood donation', 'tips-for-successful-blood-donation', 'images/page/2018/12/10/log110-12-201816-33-05.jpg', '<p><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">মুমূর্ষু রোগীর জন্য রক্ত সংগ্রহে আমরা সংগ্রাম করে যাচ্ছি প্রতিনিয়ত। জরুরী মুহূর্তে রোগীদের রক্ত ম্যানেজ করে দেয়া আমাদের দায়িত্ব, তেমনি একজন রক্তদাতার নিরাপত্তা সুনিশ্চিত করাও আমাদের দায়িত্বের অন্তর্ভুক্ত।</span></p>\r\n<ul>\r\n<li><strong><em>রক্তদাতাদের বলছিঃ</em></strong></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">১) রোগী কোন হাসপাতাল/ক্লিনিকে আছেন জেনে নিন। হাসপাতাল/ক্লিনিক ছাড়া অন্য কোথাও রক্তদান করতে যাবেন না। রোগীর বাসায় হলেও না।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">২) হাসপাতাল/ক্লিনিক ছাড়া অন্য কোথাও রক্ত আবেদনকারী (মোবাইল নম্বরে যে ব্যাক্তির সাথে আপনি যোগাযোগ করছেন) এর সাথে দেখা করবেন না। হাসপাতালের পাশের গলি, কিংবা কোনও দোকানে দেখা করতে বললে যাবেন না।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৩) রক্তদানের পূর্বে রোগী দেখে নিবেন। রোগীর রিপোর্ট, ডাক্তারের রিকুইজিশন লেটার দেখে নিবেন।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৪) রক্তদানের সময় দুই-একজন বন্ধু সাথে নিয়ে গেলে ভালো হয়।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৫) রক্তদানে নতুন সূচ ব্যবহার করছে কিনা নিশ্চিত হয়ে নিন...</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৬) উপস্থিত বিশেষজ্ঞের দক্ষতা নিয়ে সন্দেহ থাকলে কর্তৃপক্ষকে জানান...</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">৭) রক্তের ক্রস ম্যাচিং করার পর রক্তদান করবেন, এর আগে নয়... বেশির ভাগ সরকারী হাসপাতালে ক্রস ম্যাচিং না করেই রক্ত রেখে দেয়... এটা কখনই উচিত নয়... নিজে সচেতন হোন... ক্রস ম্যাচিং এর পর রক্তদান করবেন...</p>\r\n<ul>\r\n<li style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><em><strong><a class=\"_58cn\" style=\"color: #c80201; text-decoration-line: none;\" href=\"https://www.facebook.com/hashtag/%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%A6%E0%A6%BE%E0%A6%A8_%E0%A6%B9%E0%A7%8B%E0%A6%95_%E0%A6%B8%E0%A7%87%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A6%BE%E0%A7%9F_%E0%A6%AC%E0%A6%BF%E0%A6%A8%E0%A6%BE%E0%A6%AE%E0%A7%82%E0%A6%B2%E0%A7%8D%E0%A6%AF%E0%A7%87_%E0%A6%8F%E0%A6%AC%E0%A6%82_%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A6%BE%E0%A6%AA%E0%A6%A6?source=feed_text\" data-ft=\"{\"><span class=\"_5afx\"><span class=\"_58cm\">রক্তদান_হোক_সেচ্ছায়_বিনামূল্যে_এবং_নিরাপদ</span></span></a></strong></em></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">রক্তদানে যেতে হলে আগে রোগীর আত্মীয়ের সাথে কথা বলে নিবেন... হাসপাতালের নাম, কেবিন/ওয়ার্ড নম্বর জেনে নিয়ে সরাসরি সেই কেবিন/ওয়ার্ডে চলে যাবেন... হাসপাতাল/ক্লিনিক ছাড়া অন্য কোথাও রক্ত আবেদনকারী (মোবাইল নম্বরে যে ব্যাক্তির সাথে আপনি যোগাযোগ করছেন) এর সাথে দেখা করবেন না... হাসপাতালের পাশের গলি, কিংবা কোনও দোকানে দেখা করতে বললেও যাবেন না... রোগীর বাসায় হলেও না...</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">কেবিন/ওয়ার্ড নম্বর জেনে নিবেন, সরাসরি কেবিন/ওয়ার্ডে চলে যাবেন... রোগী দেখে নিব<span class=\"text_exposed_show\">েন...<br />তারপর রক্তদান... রোগী এবং রোগীর আত্মীয়কে জানিয়ে দিবেন যে আপনি বিনামূল্যে রক্তদান করছেন... এতে হাসপাতাল কর্তৃপক্ষ বা তৃতীয় কোনো পক্ষ দুর্নীতি করার সুযোগ পাবে না...</span></p>\r\n<ul>\r\n<li><em><span class=\"text_exposed_show\"><strong style=\"text-align: justify;\">রোগীকে (বা রোগীর আত্মীয়কে) বলছিঃ</strong></span></em></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">১। রক্তদানের পর রক্তদাতা যেন অন্ততপক্ষে আধা ঘণ্টা বিশ্রাম নিতে পারেন তার ব্যবস্থা রাখবেন।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">২। রক্তদানের পর যদি সম্ভব হয় ফলমূল, জুস, পানি এর ব্যবস্থা রাখবেন রক্তদাতার জন্য। রক্তদাতার তাড়াতাড়ি Recovery জন্য এটা দরকারি।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">৩। সুস্থ হয়ে উঠার পরও রক্তদাতার সাথে যোগাযোগ রাখুন। যার রক্ত আপনার শরীরে প্রবাহিত হচ্ছে, যে নিঃস্বার্থভাবে আপনার জীবন বাঁচাতে এগিয়ে এসেছে &ndash; তার সাথে সুসম্পর্ক রাখুন। রক্তদাতার কাছে বার বার কৃতজ্ঞতা প্রকাশ করা &ndash; আমার কাছে ভুল কিছু মনে হয় না |</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;</p>', '<p><strong style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">রক্ত দিন, জীবন বাঁচান</strong></p>', 3, 1, '2018-12-10 10:33:05', '2019-02-07 12:47:34'),
(4, 'আপনি জানেন কি?', 'what-happens-to-donated-blood', 'images/page/2018/12/10/log110-12-201816-34-48.jpg', '<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে&nbsp;<span class=\"userContent\" data-ft=\"{\">রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।&nbsp;<br /></span></p>\r\n<p style=\"margin: 0px 0px 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: center;\">&nbsp;</p>', '<p style=\"text-align: left;\"><strong>কিছু ভুল ধারনা:- &nbsp;&nbsp;&nbsp;</strong></p>\r\n<p style=\"text-align: left;\">১. রক্ত দান করার সময় মোটেও ব্যথা লাগে না। শুধূমাত্র সূচ ফোটানোর সময় অল্প একটু অস্বস্তি লাগে।<br />২. রক্তদানের পর স্বাস্থ্য খারাপ হয়ে যাবে - এটি ভুল ধারণা। আসলে রক্তদান করলে হৃদরোগের ঝুঁকি কমে এবং দেহে মাত্রাতিরিক্ত আয়রন বা লৌহ সঞ্চয় প্রতিরোধ করে।<br />৩. ডায়াবেটিসে আক্রান্ত ব্যক্তি রক্ত দিতে পারবে না - এটিও ভুল ধারণা। স্বাস্থ্য পরীক্ষায় যোগ্য বিবেচিত হলে, ডায়াবেটিসে আক্রান্ত ব্যক্তি ততক্ষণ রক্ত দান করতে পারবেন, যতক্ষণ ওই ব্যক্তির রক্তের গ্লুকোজ লেভেল স্বীকৃত সীমার মধ্যে থাকবে।<br />৪. উচ্চরক্তচাপের কারণে রক্তদান করা যায় না - এটিও ভুল ধারণা। রক্তদানের সময় ব্লাডপ্রেসার ১৮০সিষ্টোলিক ও ১০০ডায়াষ্টোলিকের মাঝে থাকলে রক্ত দেওয়া যায়।<br />৫. রক্তদানের পর আপনি কোনো প্রকার অসস্থি বোধ করবেন না কিংবা অজ্ঞান হয়ে যাবেন না। এই ব্যাপারে অনেকের ভুল ধারণা রয়েছে।</p>\r\n<p style=\"text-align: center;\"><strong>&hellip;&rdquo;রক্তদান ঐচ্ছিক বিষয় নয়, এটি দায়িত্বের চেয়েও বেশি কিছু&rdquo;&hellip;</strong></p>', 4, 1, '2018-12-10 10:34:48', '2019-02-08 04:20:32'),
(5, 'কিছু ভুল ধারনা:-', 'n-a', 'images/page/2019/02/07/log110-12-201816-32-1107-02-201918-31-31.jpg', '<p><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">১. রক্ত দান করার সময় মোটেও ব্যথা লাগে না। শুধূমাত্র সূচ ফোটানোর সময় অল্প একটু অস্বস্তি লাগে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">২. রক্তদানের পর স্বাস্থ্য খারাপ হয়ে যাবে - এটি ভুল ধারণা। আসলে রক্তদান করলে হৃদরোগের ঝুঁকি কমে এবং দেহে মাত্রাতিরিক্ত আয়রন বা লৌহ সঞ্চয় প্রতিরোধ করে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">৩. ডায়াবেটিসে আক্রান্ত ব্যক্তি রক্ত দিতে পারবে না - এটিও ভুল ধারণা। স্বাস্থ্য পরীক্ষায় যোগ্য বিবেচিত হলে, ডায়াবেটিসে আক্রান্ত ব্যক্তি ততক্ষণ রক্ত দান করতে পারবেন, যতক্ষণ ওই ব্যক্তির রক্তের গ্লুকোজ লেভেল স্বীকৃত সীমার মধ্যে থাকবে।</span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">৪. উচ্চরক্তচাপের কারণে রক্তদান করা যায় না - এটিও ভুল ধারণা।&nbsp;</span><span class=\"userContent\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\" data-ft=\"{\"><span class=\"text_exposed_show\">রক্তদানের সময় ব্লাডপ্রেসার ১৮০সিষ্টোলিক ও ১০০ডায়াষ্টোলিকের মাঝে থাকলে রক্ত দেওয়া যায়।</span></span><br style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\" /><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">৫. রক্তদানের পর আপনি কোনো প্রকার অসস্থি বোধ করবেন না কিংবা অজ্ঞান হয়ে যাবেন না। এই ব্যাপারে অনেকের ভুল ধারণা রয়েছে।</span></p>', '<h4 style=\"margin: 10px 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 20px; text-rendering: optimizelegibility; font-size: 17.5px; text-align: center;\"><span class=\"userContent\" style=\"font-size: 11pt;\" data-ft=\"{\"><span class=\"text_exposed_show\"><strong>&hellip;&rdquo;রক্তদান ঐচ্ছিক বিষয় নয়, এটি দায়িত্বের চেয়েও বেশি কিছু&rdquo;&hellip;</strong></span></span></h4>', 5, 0, '2019-02-07 12:31:31', '2019-02-08 04:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saiful@gmail.com', '$2y$10$nYP.HDZJT3UFuVveLWv5POcnRM0xLcyWiZBv3UbUE4WYA1NqrW3/a', '2019-01-14 10:27:01'),
('rakibhasan0a@gmail.com', '$2y$10$xH3NLNG1iG9SraHGZz3Gc.eA6FfQ0VckQk13RD1WJA4wuIFZ4eOcG', '2019-02-12 16:59:02'),
('mdmirajsonapur@gmail.com', '$2y$10$o/ZpwnEQLNls6YZeookhKOaCyG.glimU6IJ49HCK2WY5bzTi43rEO', '2019-10-06 10:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_date` timestamp NULL DEFAULT NULL,
  `photo_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `title`, `event_date`, `photo_link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Cricket Tournament-2017', '2017-12-02 18:00:00', 'https://drive.google.com/open?id=1kmodOv11LWxr3dRDLcMj3idKrO_mYmTL', 1, 1, 6, '2019-01-31 02:13:30', '2019-02-08 18:31:42'),
(2, 'Cricket Tournament-2018', '2018-11-30 18:00:00', 'https://drive.google.com/open?id=107fWi4uS7RPzrTpUjYc5dWDA2KQAPou5', 1, 6, 6, '2019-02-08 18:10:56', '2019-02-08 18:26:05'),
(3, 'Opening of SBP', '2010-03-07 18:00:00', 'https://drive.google.com/open?id=1mEnA7VAsSFRj9S47OQ55AOl3UvIpP6bZ', 1, 6, 6, '2019-02-08 18:13:10', '2019-02-08 18:46:06'),
(4, 'Opening Website', '2014-10-09 18:00:00', 'https://drive.google.com/open?id=1ZK-9mxxEn6gjnjUTygK7L8U3TqOvIa3H', 1, 6, NULL, '2019-02-08 18:42:53', '2019-02-08 18:42:53'),
(5, 'Blood Donors', '2010-03-07 18:00:00', 'https://drive.google.com/open?id=1PrEwuNW51ocQQQVNApNsKCmOkTbEQoCc', 1, 6, NULL, '2019-02-08 19:24:04', '2019-02-08 19:24:04'),
(6, 'Medical Campaign', '2019-02-08 18:00:00', 'https://drive.google.com/open?id=1O7hk23AuWgkH7_7mXBLjCXv27gYeTJ24', 1, 6, NULL, '2019-02-08 19:26:17', '2019-02-08 19:26:17'),
(7, 'Ifter Mahfil-2016', '2016-06-30 18:00:00', 'https://drive.google.com/open?id=1NNW_PxZg0OWIZkgpSAbS1bVUze8SHl0l', 1, 6, 6, '2019-02-22 18:30:25', '2019-02-22 18:31:39'),
(8, 'Download SBP Apps', '2019-02-19 18:00:00', 'https://drive.google.com/open?id=1o626lk16r3_hlYM7_i_GOvg37PRfVrYR', 1, 6, NULL, '2019-02-22 19:10:52', '2019-02-22 19:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `president_speeches`
--

CREATE TABLE `president_speeches` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `president_speeches`
--

INSERT INTO `president_speeches` (`id`, `title`, `url`, `photo`, `short`, `details`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(1, 'president speech new', 'president-speech-new', 'images/speech/2019/01/18/download18-01-201922-05-30.png', '<p><span style=\"color: #333333; font-family: Arial, Helvetica, \'Helvetica Neue\', sans-serif; font-size: 16.25px;\">Four score and seven years ago our fathers brought forth on this continent a new nation conceived in liberty and dedicated to the proposition that all men are created equal. Now we are engaged in a great civil war testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battlefield of that war. We have come to dedicate a portion of that field as a final resting-place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this. But, in a larger sense, we cannot dedicate, we cannot consecrate, we cannot hallow this ground.</span></p>', '<p><span style=\"color: #333333; font-family: Arial, Helvetica, \'Helvetica Neue\', sans-serif; font-size: 16.25px;\">Four score and seven years ago our fathers brought forth on this continent a new nation conceived in liberty and dedicated to the proposition that all men are created equal. Now we are engaged in a great civil war testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battlefield of that war. We have come to dedicate a portion of that field as a final resting-place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this. But, in a larger sense, we cannot dedicate, we cannot consecrate, we cannot hallow this ground. The brave men, living and dead, who struggled here have consecrated it far above our poor power to add or detract. The world will little note nor long remember what we say here, but it can never forget what they did here. It is for us the living rather to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us&mdash;that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion&mdash;that we here highly resolve that these dead shall not have died in vain, that this nation under God shall have a new birth of freedom, and that government of the people, by the people, for the people shall not perish from th</span></p>', 1, 1, NULL, '2019-01-18 16:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `primary_info`
--

CREATE TABLE `primary_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `favicon` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_tag` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_embed` text CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `primary_info`
--

INSERT INTO `primary_info` (`id`, `company_name`, `logo`, `address`, `mobile_no`, `email`, `favicon`, `description`, `short_description`, `company_tag`, `map_embed`, `created_at`, `updated_at`) VALUES
(1, 'Sholla Blood Point', 'images/company-img/logo/2019/02/20/logo-0320-02-201900-05-54.png', 'Sholla, Nawabgonj, Dhaka.', '01815708714', 'sbpmail.net@gmail.com', 'images/company-img/2019/02/07/received-39059885483944107-02-201922-12-13.png', '<p style=\"text-align: center;\">**<strong>**&rdquo;রক্তদান ঐচ্ছিক বিষয় নয়, এটি দায়িত্বের চেয়েও বেশি কিছু\"****</strong></p>', '<p style=\"text-align: center;\"><strong>\"মানবতার হাত বা&zwnj;ড়ি&zwnj;য়ে কর&zwnj;বো রক্তদান, নি&zwnj;জের রক্ত অ&zwnj;ন্যের শিরায় বাঁচ&zwnj;বে শত প্রাণ\"</strong></p>\r\n<p style=\"text-align: justify;\"><strong>\"রক্ত দিন জীবন বাঁচান\"</strong> আপনার র&zwnj;ক্তে ফি&zwnj;রে আস&zwnj;তে পা&zwnj;রে মলিন প্রা&zwnj;ণে নির্মল হা&zwnj;সি, বাঁচ&zwnj;তেপা&zwnj;রে হাজা&zwnj;রো প্রাণ। আর এ ল&zwnj;ক্ষ্যে শোল্লা ব্লাড প&zwnj;য়েন্ট ০৮ মার্চ ২০১০ইং তা&zwnj;রি&zwnj;খে র&zwnj;ক্তের গ্রুপ নির্ণয় কার্যক্র&zwnj;মের মধ্য&zwnj; দি&zwnj;য়ে যাত্রা শুরু ক&zwnj;রে। ১০ অ&zwnj;ক্টোবর ২০১৪ইং তা&zwnj;রি&zwnj;খে মানবতার জ&zwnj;য়ে, মানু&zwnj;ষের কল্যা&zwnj;ণে কাজ করার পথ&zwnj;কে আ&zwnj;রো &zwnj;বেগবান বা আ&zwnj;রো গ&zwnj;তিশীল করার ল&zwnj;ক্ষ্যে www.shollabloodpoint.com এই ও&zwnj;য়েবসাইট&zwnj;টির আত্নপ্রকাশ ঘ&zwnj;টে। এ&zwnj;টি এক&zwnj;টি সেচ্ছা&zwnj;সেবী সংগঠন। সমাজ কল্যাণ ও সামা&zwnj;জিক স&zwnj;চেতনতা বৃ&zwnj;দ্ধি ক&zwnj;রে বিনামূ&zwnj;ল্যে রক্তদান ও প্রাথ&zwnj;মিক চি&zwnj;কিৎসা কর্মসূচী বাস্তবায়ন ক&zwnj;রে মূমুর্ষ রোগীকে আ&zwnj;লো&zwnj;কিত জীবন উপহার দেওয়াই আমা&zwnj;দের লক্ষ্য।</p>\r\n<p style=\"text-align: justify;\">তথ্য প্রযু&zwnj;ক্তির যু&zwnj;গে অ&zwnj;নেক কিছু আ&zwnj;বিষ্কার হ&zwnj;লেও এখ&zwnj;নো পর্যন্ত কৃ&zwnj;ত্তিম ভা&zwnj;বে রক্ত তৈ&zwnj;রি করা সম্ভব হয়&zwnj;নি। একজন মানুষই পা&zwnj;রে তার নি&zwnj;জের শরী&zwnj;রের তাজা রক্ত দিয়ে \'মানু&zwnj;ষের কল্যাণ, মানবতার জ&zwnj;য়ে\' সা&zwnj;মিল হ&zwnj;তে যা অন্য কোন ক&zwnj;র্মে এমন আত্নতৃ&zwnj;প্তি নেই।</p>\r\n<p style=\"text-align: justify;\">আমা&zwnj;দের উ&zwnj;দ্দেশ্য স্পষ্ট~আপনার মূল্যবান র&zwnj;ক্তের মাধ্য&zwnj;মে বাংলা&zwnj;দে&zwnj;শের প্র&zwnj;তি&zwnj;টি অসহায় মূমুর্ষু রোগী&zwnj;কে স্বাভা&zwnj;বিক জীব&zwnj;নে ফি&zwnj;রি&zwnj;য়ে দেয়া এবং বাংলা&zwnj;দে&zwnj;শের র&zwnj;ক্তের চা&zwnj;হিদা পূরণ করা সেই সা&zwnj;থে ব্য&zwnj;ক্তিক মূল্য&zwnj;বোধ থে&zwnj;কে সামা&zwnj;জিক স&zwnj;চেতনতা বৃ&zwnj;দ্ধি ক&zwnj;রে র&zwnj;ক্তের চা&zwnj;হিদা পূরণ ও সমা&zwnj;জের যে কোন অবক্ষয় রোধ করা।</p>\r\n<p style=\"text-align: justify;\">আমা&zwnj;দের বিশ্বাস বাংলা&zwnj;দে&zwnj;শের শতকরা এক ভাগ মানুষ য&zwnj;দি বছ&zwnj;রে একবার রক্তদান ক&zwnj;রেন শুধু মাত্র ত&zwnj;বেই&nbsp; র&zwnj;ক্তের বা&zwnj;র্ষিক সংগ্রহ ও চা&zwnj;হিদা পূরণ করা সম্ভব। সেচ্ছায় রক্তদান শুধুই \'মানু&zwnj;ষের কল্যাণ, মানবতার জয়ই\' নয় এ&zwnj;টি ধর্মীয় দিক থে&zwnj;কে অত্যন্ত পূ&zwnj;ণ্যের বা সওয়া&zwnj;বের কাজ। আর তাই আমা&zwnj;দের সংগ্রাম এক&zwnj;ফোঁটা র&zwnj;ক্তের অভা&zwnj;বে যেন কোন প্রাণ অকা&zwnj;লে ঝ&zwnj;রে যে&zwnj;তে না পা&zwnj;রে শোল্লা ব্লাড প&zwnj;য়েন্ট এই মহান ব্রত নি&zwnj;য়ে এ&zwnj;গি&zwnj;য়ে যাচ্ছে।</p>\r\n<p style=\"text-align: justify;\">আমা&zwnj;দের আহবান ও প্রত্যাশা আপনা&zwnj;দের সা&zwnj;র্বিক সহ&zwnj;যো&zwnj;গিতা থাক&zwnj;লে আমরা আমা&zwnj;দের স্বপ্ন পূর&zwnj;ণে একধাপ এ&zwnj;গি&zwnj;য়ে যা&zwnj;বো। বর্তমা&zwnj;নে উন্নত রক্তদান প্র&zwnj;ক্রিয়া রক্তদা&zwnj;নের ভয়&zwnj;কে জয় ক&zwnj;রে&zwnj;ছে। রক্তদান এখন কোন ক&zwnj;ঠিন কাজ নয় বা ভ&zwnj;য়ের কিছুই নেই। এ&zwnj;টি খুবই সহজ ও নিরাপদ প্র&zwnj;ক্রিয়া যা এক&zwnj;চিম&zwnj;টি ব্যাথা, একমু&zwnj;ঠো ত্যাগ ও এক ব্যাগ রক্ত আর আপ&zwnj;নি হ&zwnj;য়ে গে&zwnj;লেন একজন রক্তদাতা~ আপনার র&zwnj;ক্তে ফোঁ&zwnj;টে উঠ&zwnj;লো আর এক&zwnj;টি প্রা&zwnj;ণে নির্মল হা&zwnj;সি। পিঁ&zwnj;পিঁ&zwnj;লিকার কাম&zwnj;ড়ের মত সামান্য ব্যাথায় আপ&zwnj;নি পা&zwnj;বেন অপ&zwnj;রিসীম আত্নতৃ&zwnj;প্তি ও রোগীর প&zwnj;রিজন&zwnj;দের অফুরান দোয়া, এক ব্যাগ র&zwnj;ক্তে ব&zwnj;য়ে আন&zwnj;বে মানবতা ও মানু&zwnj;ষের কল্যাণ।</p>', 'Sholla Blood Point', '<div style=\"overflow:hidden;width: 250px;position: relative;\"><iframe width=\"250\" height=\"250\" src=\"https://maps.google.com/maps?width=250&amp;height=250&amp;hl=en&amp;q=Bangladesh%2C%20Dhaka%2C%20Nawabgonj%2C%20Sholla+(Sholla%20Blood%20Point)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><div style=\"position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;\"><small style=\"line-height: 1.8;font-size: 8px;background: #fff;\">Powered by <a href=\"https://embedgooglemaps.com/\">Embedgooglemaps.com/</a> & <a href=\"https://buyinstagramfollowersreviews.net\">Boosting Instagram Account</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />', NULL, '2019-02-19 18:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slider_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial_num` int(5) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `slider_img`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(1, 'সবাইকে বাংলা নববর্ষের শুভেচ্ছা', 'images/slider/2019/04/11/bangla-noboborsho-pohela-boishakh-picture-wallpaper11-04-201909-37-46.jpg', 1, 1, '2018-12-08 11:26:26', '2019-04-11 03:37:47'),
(2, 'খেলায়ার‌দের একাংশ', 'images/slider/2019/02/01/received-194841851469856-01-02-201910-20-29.jpeg', 2, 0, '2019-01-13 10:12:11', '2019-03-19 12:29:49'),
(3, 'R A M P A G E D-13', 'images/slider/2019/02/03/fb-img-154843811578803-02-201911-42-27.jpg', 3, 0, '2019-02-03 05:42:28', '2019-03-27 02:13:11'),
(4, 'রাইজিং স্টার-১৫', 'images/slider/2019/02/03/fb-img-154843812007203-02-201911-43-50.jpg', 4, 0, '2019-02-03 05:43:50', '2019-03-27 02:12:55'),
(5, 'শোল্লা ব্লাড পয়েন্ট এর সদস্য, রক্তদাতা রক্ত দান করছেন', 'images/slider/2019/04/11/22655511-04-201910-00-20.jpg', 5, 1, '2019-02-08 20:11:20', '2019-04-11 04:00:20'),
(6, 'Wellcome Super Six', 'images/slider/2019/02/12/fb-img-154994008256512-02-201923-34-51.jpg', 6, 0, '2019-02-12 17:34:52', '2019-03-27 02:13:33'),
(7, 'ব্লাস্টারাস সিক্স‌টিন', 'images/slider/2019/02/12/fb-img-154894889869012-02-201923-36-44.jpg', 7, 0, '2019-02-12 17:36:44', '2019-03-27 02:13:47'),
(8, 'রক্তদাতা বিপুল~২০১৬ ব্যাচ', 'images/slider/2019/02/23/bipol23-02-201900-23-00.jpg', 8, 0, '2019-02-13 01:32:47', '2019-03-19 12:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `name`, `url`, `status`, `serial_num`, `fk_menu_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Districts', 'district', 1, 1, 5, 'null', '2018-12-09 11:43:04', '2018-12-09 11:53:50'),
(2, 'Organization Info', 'primary-info', 1, 3, 5, 'null', '2018-12-10 10:48:30', '2019-01-27 01:27:45'),
(3, 'Blood Donor Members', 'member-register', 1, 1, 7, 'null', '2019-01-08 11:29:19', '2019-02-10 01:29:20'),
(4, 'Approve member', 'approve-member', 1, 2, 7, 'null', '2019-01-08 11:33:05', '2019-01-08 11:33:05'),
(5, 'A positive (A+)', 'donors-by-group/1', 1, 1, 12, 'null', '2019-01-16 10:32:33', '2019-01-16 10:58:45'),
(6, 'A negative (A-)', 'donors-by-group/2', 1, 2, 12, 'null', '2019-01-16 10:33:01', '2019-01-16 10:58:54'),
(7, 'B positive (B+)', 'donors-by-group/3', 1, 3, 12, 'null', '2019-01-16 10:33:24', '2019-01-16 10:59:05'),
(8, 'B negative (B-)', 'donors-by-group/4', 1, 4, 12, 'null', '2019-01-16 10:33:48', '2019-01-16 10:59:12'),
(9, 'O positive (O+)', 'donors-by-group/5', 1, 5, 12, 'null', '2019-01-16 10:34:19', '2019-01-16 10:59:20'),
(10, 'O negative (O-)', 'donors-by-group/6', 1, 6, 12, 'null', '2019-01-16 10:34:36', '2019-01-16 10:59:31'),
(11, 'AB positive (AB+)', 'donors-by-group/7', 1, 7, 12, 'null', '2019-01-16 10:34:51', '2019-01-16 10:59:38'),
(12, 'AB negative (AB-)', 'donors-by-group/8', 1, 8, 12, 'null', '2019-01-16 10:35:12', '2019-01-16 10:59:45'),
(13, 'Users', 'users', 1, 4, 5, 'null', '2019-01-18 18:25:31', '2019-01-27 01:28:01'),
(14, 'Founder members', 'founder-members', 1, 3, 7, 'null', '2019-01-29 01:36:19', '2019-01-29 01:36:19'),
(15, 'Volunteer Members', 'volunteer-members', 1, 4, 7, 'null', '2019-02-10 01:22:54', '2019-02-10 01:22:54'),
(16, 'Best Donor By Year', 'donors-by-year', 1, 1, 15, 'null', '2019-03-02 17:02:22', '2019-03-02 17:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_menu`
--

CREATE TABLE `sub_sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `fk_sub_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thana_upazilas`
--

CREATE TABLE `thana_upazilas` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `thana_upazila` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thana_upazilas`
--

INSERT INTO `thana_upazilas` (`id`, `district_id`, `thana_upazila`, `status`, `serial_num`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nawabgonj', 1, 1, '2018-12-09 06:44:17', '2018-12-09 06:47:00'),
(2, 1, 'Dohar', 1, 2, '2018-12-09 06:48:04', '2018-12-09 06:48:04'),
(3, 1, 'Keraniganj', 1, 3, '2018-12-09 06:48:17', '2019-01-27 00:00:41'),
(4, 1, 'Savar', 1, 4, '2018-12-09 06:48:27', '2018-12-09 06:48:27'),
(5, 1, 'Dhamrai', 1, 5, '2018-12-09 06:48:41', '2018-12-09 06:48:41'),
(6, 2, 'Hathazari', 1, 1, '2018-12-11 06:21:40', '2018-12-11 06:21:40'),
(7, 1, 'Adabor', 1, 6, '2019-01-27 00:05:35', '2019-01-27 00:05:35'),
(8, 1, 'Badda', 1, 7, '2019-01-27 00:05:46', '2019-01-27 00:05:46'),
(9, 1, 'Bangsal', 1, 8, '2019-01-27 00:05:55', '2019-01-27 00:05:55'),
(10, 1, 'Bimanbandar', 1, 9, '2019-01-27 00:06:14', '2019-01-27 00:06:14'),
(11, 1, 'Cantonment', 1, 10, '2019-01-27 00:06:31', '2019-01-27 00:06:31'),
(12, 1, 'Chak Bazar', 1, 11, '2019-01-27 00:06:42', '2019-01-27 00:06:42'),
(13, 1, 'Dakshinkhan', 1, 12, '2019-01-27 00:06:53', '2019-01-27 00:06:53'),
(14, 1, 'Darus Salam', 1, 13, '2019-01-27 00:07:08', '2019-01-27 00:07:08'),
(15, 1, 'Demra', 1, 14, '2019-01-27 00:07:32', '2019-01-27 00:07:32'),
(16, 1, 'Dhanmondi', 1, 15, '2019-01-27 00:07:53', '2019-01-27 00:07:53'),
(17, 1, 'Gendaria', 1, 16, '2019-01-27 00:08:11', '2019-01-27 00:08:11'),
(18, 1, 'Gulshan', 1, 17, '2019-01-27 00:08:21', '2019-01-27 00:08:21'),
(19, 1, 'Hazaribagh', 1, 18, '2019-01-27 00:08:43', '2019-01-27 00:08:43'),
(20, 1, 'Jatrabari', 1, 19, '2019-01-27 00:09:03', '2019-01-27 00:09:03'),
(21, 1, 'Kadamtali', 1, 20, '2019-01-27 00:09:59', '2019-01-27 00:09:59'),
(22, 1, 'Kafrul', 1, 21, '2019-01-27 00:10:16', '2019-01-27 00:10:16'),
(23, 1, 'Kalabagan', 1, 22, '2019-01-27 00:10:28', '2019-01-27 00:10:28'),
(24, 1, 'Kamrangirchar', 1, 23, '2019-01-27 00:13:36', '2019-01-27 00:13:36'),
(25, 1, 'Khilgaon', 1, 24, '2019-01-27 00:13:46', '2019-01-27 00:13:46'),
(26, 1, 'khilkhet', 1, 25, '2019-01-27 00:13:55', '2019-01-27 00:13:55'),
(27, 1, 'Kotwali', 1, 26, '2019-01-27 00:14:05', '2019-01-27 00:14:05'),
(28, 1, 'Lalbagh', 1, 27, '2019-01-27 00:14:15', '2019-01-27 00:14:15'),
(29, 1, 'Mirpur', 1, 28, '2019-01-27 01:10:56', '2019-01-27 01:10:56'),
(30, 1, 'Mohammadpur', 1, 29, '2019-01-27 01:11:33', '2019-01-27 01:11:33'),
(31, 1, 'Motijheel', 1, 30, '2019-01-27 01:11:56', '2019-01-27 01:11:56'),
(32, 1, 'Newmarket', 1, 31, '2019-01-27 02:21:50', '2019-01-27 02:21:50'),
(33, 1, 'Pallabi', 1, 32, '2019-01-27 02:22:25', '2019-01-27 02:22:25'),
(34, 1, 'Paltan', 1, 33, '2019-01-27 02:24:38', '2019-01-27 02:24:38'),
(35, 1, 'Ramna', 1, 34, '2019-01-27 02:24:52', '2019-01-27 02:24:52'),
(36, 1, 'Rampura', 1, 35, '2019-01-27 03:02:51', '2019-01-27 03:02:51'),
(37, 1, 'Sabujbagh', 1, 36, '2019-01-27 03:07:26', '2019-01-27 03:07:26'),
(38, 1, 'Shah Ali', 1, 37, '2019-01-27 03:08:12', '2019-01-27 03:08:12'),
(39, 1, 'Shahbag', 1, 38, '2019-01-27 03:09:00', '2019-01-27 03:09:00'),
(40, 1, 'Sher-e-Bangla Nagar', 1, 39, '2019-01-27 03:11:00', '2019-01-27 03:11:00'),
(41, 1, 'Shyampur', 1, 40, '2019-01-27 03:17:50', '2019-01-27 03:17:50'),
(42, 1, 'Sutrapur', 1, 41, '2019-01-27 03:19:26', '2019-01-27 03:19:26'),
(43, 1, 'Tejgaon', 1, 42, '2019-01-27 03:20:06', '2019-01-27 03:20:06'),
(44, 1, 'Mohakhali', 1, 43, '2019-01-27 03:21:05', '2019-01-27 03:21:05'),
(45, 1, 'Tejgaon Industrial Area', 1, 44, '2019-01-27 03:30:22', '2019-01-27 03:30:22'),
(46, 1, 'Turag', 1, 45, '2019-01-27 03:31:12', '2019-01-27 03:31:12'),
(47, 1, 'Uttara', 1, 46, '2019-01-27 03:36:06', '2019-01-27 03:36:06'),
(48, 1, 'Uttar Khan', 1, 47, '2019-01-27 03:36:36', '2019-01-27 03:36:36'),
(49, 41, 'Rajoir', 1, 1, '2019-01-27 05:05:21', '2019-01-27 05:05:21'),
(50, 41, 'Madaripur Sadar', 1, 2, '2019-01-27 05:05:41', '2019-01-27 05:05:41'),
(51, 41, 'Kalkini', 1, 3, '2019-01-27 05:05:58', '2019-01-27 05:05:58'),
(52, 41, 'Shibchar', 1, 4, '2019-01-27 05:06:11', '2019-01-27 05:06:11'),
(53, 26, 'Gazipur', 1, 1, '2019-01-27 05:07:04', '2019-01-27 05:07:04'),
(54, 26, 'Kaliakair', 1, 2, '2019-01-27 05:07:16', '2019-01-27 05:07:16'),
(55, 26, 'Kaliganj', 1, 3, '2019-01-27 05:07:28', '2019-01-27 05:07:28'),
(56, 26, 'Kapasia', 1, 4, '2019-01-27 05:07:47', '2019-01-27 05:07:47'),
(57, 26, 'Tongi', 1, 5, '2019-01-27 05:08:11', '2019-01-27 05:08:11'),
(58, 26, 'Sreepur', 1, 6, '2019-01-27 05:08:42', '2019-01-27 05:08:42'),
(59, 43, 'Daulatpur', 1, 1, '2019-01-27 05:11:47', '2019-01-27 05:11:47'),
(60, 43, 'Ghior', 1, 2, '2019-01-27 05:12:08', '2019-01-27 05:12:08'),
(61, 43, 'Harirampur', 1, 3, '2019-01-27 05:12:21', '2019-01-27 05:12:21'),
(62, 43, 'Manikgonj Sadar', 1, 4, '2019-01-27 05:12:39', '2019-01-27 05:12:39'),
(63, 43, 'Saturia', 1, 5, '2019-01-27 05:12:54', '2019-01-27 05:12:54'),
(64, 43, 'Shivalaya', 1, 6, '2019-01-27 05:13:17', '2019-01-27 05:13:17'),
(65, 43, 'Singair', 1, 7, '2019-01-27 05:13:49', '2019-01-27 05:13:49'),
(66, 46, 'Gazaria', 1, 1, '2019-01-27 05:14:26', '2019-01-27 05:14:26'),
(67, 46, 'Lohajang', 1, 2, '2019-01-27 05:14:43', '2019-01-27 05:14:43'),
(68, 46, 'Munshiganj Sadar', 1, 3, '2019-01-27 05:14:57', '2019-01-27 05:14:57'),
(69, 46, 'Sirajdikhan', 1, 4, '2019-01-27 05:15:16', '2019-01-27 05:15:16'),
(70, 46, 'Sreenagar', 1, 5, '2019-01-27 05:15:30', '2019-01-27 05:15:30'),
(71, 46, 'Tongibari', 1, 6, '2019-01-27 05:15:50', '2019-01-27 05:15:50'),
(72, 50, 'Araihazar', 1, 1, '2019-01-27 05:27:40', '2019-01-27 05:27:40'),
(73, 50, 'Bandar', 1, 2, '2019-01-27 05:27:50', '2019-01-27 05:27:50'),
(74, 50, 'Naranyanganj', 1, 3, '2019-01-27 05:28:02', '2019-01-27 05:28:02'),
(75, 50, 'Rupganj', 1, 4, '2019-01-27 05:28:41', '2019-01-27 05:28:41'),
(76, 50, 'Sonargaon', 1, 5, '2019-01-27 05:28:56', '2019-01-27 05:28:56'),
(77, 50, 'Fatullah', 1, 6, '2019-01-27 05:29:24', '2019-01-27 05:29:24'),
(78, 50, 'Siddirganj', 1, 7, '2019-01-27 05:29:39', '2019-01-27 05:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `unions`
--

CREATE TABLE `unions` (
  `id` int(10) UNSIGNED NOT NULL,
  `thana_upazila_id` int(10) UNSIGNED NOT NULL,
  `union` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unions`
--

INSERT INTO `unions` (`id`, `thana_upazila_id`, `union`, `status`, `serial_num`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sholla 94', 1, 1, '2019-01-31 21:45:00', '2019-02-11 05:47:54'),
(2, 1, 'Agla 6', 1, 2, '2019-02-01 13:38:10', '2019-02-11 05:48:17'),
(3, 1, 'Kalakopa 74', 1, 3, '2019-02-01 13:38:22', '2019-02-11 05:48:31'),
(4, 1, 'Kailail 67', 1, 4, '2019-02-01 13:38:40', '2019-02-11 05:48:44'),
(5, 1, 'Galimpur 47', 1, 5, '2019-02-01 13:38:53', '2019-02-11 05:48:59'),
(6, 1, 'Churain 40', 1, 6, '2019-02-01 13:39:06', '2019-02-11 05:49:09'),
(7, 1, 'Joykrishnapur 61', 1, 7, '2019-02-01 13:39:18', '2019-02-11 05:49:21'),
(8, 1, 'Nayansree 81', 1, 8, '2019-02-01 13:39:33', '2019-02-11 05:49:34'),
(9, 1, 'Bakshanagar 13', 1, 9, '2019-02-01 13:39:45', '2019-02-11 05:49:47'),
(10, 1, 'Baruakhali 33', 1, 10, '2019-02-01 13:39:57', '2019-02-11 05:49:59'),
(11, 1, 'Barrah 27', 1, 11, '2019-02-01 13:40:11', '2019-02-11 05:50:12'),
(12, 1, 'Bandura 20', 1, 12, '2019-02-01 13:40:24', '2019-02-11 05:50:24'),
(13, 1, 'Jantrail 54', 1, 13, '2019-02-01 13:40:43', '2019-02-11 05:50:37'),
(14, 1, 'Shikari Para 88', 1, 14, '2019-02-01 13:40:59', '2019-02-11 05:50:51'),
(15, 74, 'Kashipur', 1, 1, '2019-02-04 14:45:24', '2019-02-04 14:45:24'),
(16, 2, 'Kushumhati 21', 1, 1, '2019-02-11 05:32:55', '2019-02-11 05:32:55'),
(17, 2, 'Sutarpara 84', 1, 2, '2019-02-11 05:33:11', '2019-02-11 05:33:11'),
(18, 2, 'Nayabari 63', 1, 3, '2019-02-11 05:33:21', '2019-02-11 05:33:21'),
(19, 2, 'Narisha 52', 1, 4, '2019-02-11 05:33:31', '2019-02-11 05:33:31'),
(20, 2, 'Mahmudpur 31', 1, 5, '2019-02-11 05:33:39', '2019-02-11 05:33:39'),
(21, 2, 'Muksudpur 42', 1, 6, '2019-02-11 05:33:49', '2019-02-11 05:33:49'),
(22, 2, 'Roypara 73', 1, 7, '2019-02-11 05:34:05', '2019-02-11 05:34:05'),
(23, 3, 'Aganagar 06', 1, 1, '2019-02-11 06:00:54', '2019-02-11 06:00:54'),
(24, 3, 'Kalatia 25', 1, 2, '2019-02-11 06:01:03', '2019-02-11 06:01:03'),
(25, 3, 'Kalindi 34', 1, 3, '2019-02-11 06:01:12', '2019-02-11 06:01:12'),
(26, 3, 'Konda 43', 1, 4, '2019-02-11 06:02:50', '2019-02-11 06:02:50'),
(27, 3, 'Zinjira 94', 1, 5, '2019-02-11 06:02:58', '2019-02-11 06:02:58'),
(28, 3, 'Taranagar 77', 1, 6, '2019-02-11 06:03:07', '2019-02-11 06:03:07'),
(29, 3, 'Tegharia 86', 1, 7, '2019-02-11 06:03:14', '2019-02-11 06:03:14'),
(30, 3, 'Basta 08', 1, 8, '2019-02-11 06:03:23', '2019-02-11 06:03:23'),
(31, 3, 'Ruhitpur 51', 1, 9, '2019-02-11 06:03:30', '2019-02-11 06:03:30'),
(32, 3, 'Subhadya 69', 1, 10, '2019-02-11 06:03:50', '2019-02-11 06:03:50'),
(33, 3, 'Sakta 60', 1, 11, '2019-02-11 06:04:01', '2019-02-11 06:04:01'),
(34, 3, 'Hazratpur 17', 1, 12, '2019-02-11 06:04:10', '2019-02-11 06:04:10'),
(35, 4, 'Amin Bazar 15', 1, 1, '2019-02-11 06:06:10', '2019-02-11 06:06:10'),
(36, 4, 'Ashulia 18', 1, 2, '2019-02-11 06:06:19', '2019-02-11 06:06:19'),
(37, 4, 'Yearpur 94', 1, 3, '2019-02-11 06:06:30', '2019-02-11 06:06:30'),
(38, 4, 'Kaundia 50', 1, 4, '2019-02-11 06:06:38', '2019-02-11 06:06:38'),
(39, 4, 'Tetuljhora 89', 1, 5, '2019-02-11 06:06:48', '2019-02-11 06:06:48'),
(40, 4, 'Dhamsana 39', 1, 6, '2019-02-11 06:07:00', '2019-02-11 06:07:00'),
(41, 4, 'Pathalia 72', 1, 7, '2019-02-11 06:07:10', '2019-02-11 06:07:10'),
(42, 4, 'Banagram 22', 1, 8, '2019-02-11 06:07:22', '2019-02-11 06:07:22'),
(43, 4, 'Biralia 33', 1, 9, '2019-02-11 06:07:31', '2019-02-11 06:07:31'),
(44, 4, 'Bhakurta 33', 1, 10, '2019-02-11 06:07:40', '2019-02-11 06:07:40'),
(45, 4, 'Shimulia 83', 1, 11, '2019-02-11 06:07:49', '2019-02-11 06:07:49'),
(46, 4, 'Savar 78', 1, 12, '2019-02-11 06:08:01', '2019-02-11 06:08:01'),
(47, 5, 'Amta 10', 1, 1, '2019-02-11 06:42:57', '2019-02-11 06:42:57'),
(48, 5, 'Kulla 53', 1, 2, '2019-02-11 06:43:06', '2019-02-11 06:43:06'),
(49, 5, 'Kushura 59', 1, 3, '2019-02-11 06:43:13', '2019-02-11 06:43:13'),
(50, 5, 'Gangutia 41', 1, 4, '2019-02-11 06:43:22', '2019-02-11 06:43:22'),
(51, 5, 'Chauhat 29', 1, 5, '2019-02-11 06:43:30', '2019-02-11 06:43:30'),
(52, 5, 'Dhamrai 35', 1, 6, '2019-02-11 06:43:38', '2019-02-11 06:43:38'),
(53, 5, 'Nannar 65', 1, 7, '2019-02-11 06:43:47', '2019-02-11 06:43:47'),
(54, 5, 'Baisakanda 11', 1, 8, '2019-02-11 06:43:55', '2019-02-11 06:43:55'),
(55, 5, 'Balia 17', 1, 9, '2019-02-11 06:44:04', '2019-02-11 06:44:04'),
(56, 5, 'Bhararia 23', 1, 10, '2019-02-11 06:44:12', '2019-02-11 06:44:12'),
(57, 5, 'Jadabpur 47', 1, 11, '2019-02-11 06:44:24', '2019-02-11 06:44:24'),
(58, 5, 'Rowail 71', 1, 12, '2019-02-11 06:44:34', '2019-02-11 06:44:34'),
(59, 5, 'Sanora 77', 1, 13, '2019-02-11 06:44:42', '2019-02-11 06:44:42'),
(60, 5, 'Suti Para 94', 1, 14, '2019-02-11 06:44:50', '2019-02-11 06:44:50'),
(61, 5, 'Suapur 88', 1, 15, '2019-02-11 06:45:03', '2019-02-11 06:45:03'),
(62, 5, 'Sombagh 83', 1, 16, '2019-02-11 06:45:12', '2019-02-11 06:45:12'),
(63, 7, 'Ward No. 43', 1, 1, '2019-02-11 07:29:47', '2019-02-11 07:29:47'),
(64, 7, 'Ward No. 46 (part)', 1, 2, '2019-02-11 07:30:03', '2019-02-11 07:30:03'),
(65, 8, 'Ward No. 17 (part)', 1, 1, '2019-02-11 07:31:04', '2019-02-11 07:31:04'),
(66, 8, 'Ward No. 21', 1, 2, '2019-02-11 07:31:17', '2019-02-11 07:31:17'),
(67, 8, 'Beraid (part)', 1, 3, '2019-02-11 07:31:30', '2019-02-11 07:31:30'),
(68, 8, 'Badda (part)', 1, 4, '2019-02-11 07:31:40', '2019-02-11 07:31:40'),
(69, 8, 'Bhatara (part)', 1, 5, '2019-02-11 07:31:49', '2019-02-11 07:31:49'),
(70, 8, 'Satarkul (part)', 1, 6, '2019-02-11 07:31:58', '2019-02-11 07:31:58'),
(71, 9, 'Ward No. 67 (part)', 1, 1, '2019-02-11 07:33:20', '2019-02-11 07:33:20'),
(72, 9, 'Ward No. 68 (part)', 1, 2, '2019-02-11 07:33:28', '2019-02-11 07:33:28'),
(73, 9, 'Ward No. 69', 1, 3, '2019-02-11 07:33:37', '2019-02-11 07:33:37'),
(74, 9, 'Ward No. 70', 1, 4, '2019-02-11 07:33:46', '2019-02-11 07:33:46'),
(75, 9, 'Ward No. 71', 1, 5, '2019-02-11 07:33:55', '2019-02-11 07:33:55'),
(76, 10, 'Ward no 1 (Part)', 1, 1, '2019-02-11 07:34:36', '2019-02-11 07:34:36'),
(77, 10, 'Ward no 98 (restricted area part )', 1, 2, '2019-02-11 07:34:56', '2019-02-11 07:34:56'),
(78, 10, 'Dakkhinkhan (Part)', 1, 3, '2019-02-11 07:35:05', '2019-02-11 07:35:05'),
(79, 11, 'Ward No. 15 (part)', 1, 1, '2019-02-11 07:35:42', '2019-02-11 07:35:42'),
(80, 11, 'Ward No. 98', 1, 2, '2019-02-11 07:35:52', '2019-02-11 07:35:52'),
(81, 12, 'Ward No. 56 (part)', 1, 1, '2019-02-11 07:36:28', '2019-02-11 07:36:28'),
(82, 12, 'Ward No. 63', 1, 2, '2019-02-11 07:36:37', '2019-02-11 07:36:37'),
(83, 12, 'Ward No. 64', 1, 3, '2019-02-11 07:36:44', '2019-02-11 07:36:44'),
(84, 12, 'Ward No. 65', 1, 4, '2019-02-11 07:36:54', '2019-02-11 07:36:54'),
(85, 12, 'Ward No. 66 (part)', 1, 5, '2019-02-11 07:37:03', '2019-02-11 07:37:03'),
(86, 13, 'Dakshinkhan Union (part) 38', 1, 1, '2019-02-11 07:37:44', '2019-02-11 07:37:44'),
(87, 14, 'Ward No. 9', 1, 1, '2019-02-11 07:38:39', '2019-02-11 07:38:39'),
(88, 14, 'Ward No. 10', 1, 2, '2019-02-11 07:38:47', '2019-02-11 07:38:47'),
(89, 14, 'Ward No. 11 (part)', 1, 3, '2019-02-11 07:38:56', '2019-02-11 07:38:56'),
(90, 14, 'Ward No. 12 (part)', 1, 4, '2019-02-11 07:40:30', '2019-02-11 07:40:30'),
(91, 15, 'Demra (part)', 1, 1, '2019-02-11 07:41:02', '2019-02-11 07:41:02'),
(92, 15, 'Matuail (part)', 1, 2, '2019-02-11 07:41:10', '2019-02-11 07:41:10'),
(93, 15, 'Saralia (part)', 1, 3, '2019-02-11 07:41:19', '2019-02-11 07:41:19'),
(94, 16, 'Ward no 47 (Part)', 1, 1, '2019-02-11 07:42:40', '2019-02-11 07:42:40'),
(95, 16, 'Ward no 48 (Part)', 1, 2, '2019-02-11 07:42:49', '2019-02-11 07:42:49'),
(96, 16, 'Ward no 49', 1, 3, '2019-02-11 07:42:57', '2019-02-11 07:42:57'),
(97, 17, 'Ward no.76', 1, 1, '2019-02-11 07:43:55', '2019-02-11 07:43:55'),
(98, 17, 'Ward no.80', 1, 2, '2019-02-11 07:44:08', '2019-02-11 07:44:08'),
(99, 17, 'Ward no.81', 1, 3, '2019-02-11 07:44:17', '2019-02-11 07:44:17'),
(100, 17, 'Ward no.82', 1, 4, '2019-02-11 07:44:25', '2019-02-11 07:44:25'),
(101, 18, 'Ward No. 18', 1, 1, '2019-02-11 07:44:55', '2019-02-11 07:44:55'),
(102, 18, 'Ward No. 19', 1, 2, '2019-02-11 07:45:04', '2019-02-11 07:45:04'),
(103, 18, 'Ward No. 20 (part)', 1, 3, '2019-02-11 07:45:14', '2019-02-11 07:45:14'),
(104, 19, 'Ward No. 46', 1, 1, '2019-02-11 07:46:27', '2019-02-11 07:46:27'),
(105, 19, 'Ward No. 48 (Part)', 1, 2, '2019-02-11 07:46:37', '2019-02-11 07:46:37'),
(106, 19, 'Ward No. 58', 1, 3, '2019-02-11 07:46:49', '2019-02-11 07:46:49'),
(107, 20, 'Ward No 84', 1, 1, '2019-02-11 07:47:20', '2019-02-11 07:47:20'),
(108, 20, 'Ward No 85', 1, 2, '2019-02-11 07:47:29', '2019-02-11 07:47:29'),
(109, 20, 'Ward No 86', 1, 3, '2019-02-11 07:47:38', '2019-02-11 07:47:38'),
(110, 20, 'Ward No 87 (Part)', 1, 4, '2019-02-11 07:47:47', '2019-02-11 07:47:47'),
(111, 20, 'Matuail union (Part)', 1, 5, '2019-02-11 07:47:55', '2019-02-11 07:47:55'),
(112, 21, 'Shyampur Union', 1, 1, '2019-02-11 07:48:38', '2019-02-11 07:48:38'),
(113, 21, 'Matuail (part) Union', 1, 2, '2019-02-11 07:48:47', '2019-02-11 07:48:47'),
(114, 21, 'Dhania Union', 1, 3, '2019-02-11 07:48:55', '2019-02-11 07:48:55'),
(115, 21, 'Ward No. 90 (part)', 1, 4, '2019-02-11 07:49:05', '2019-02-11 07:49:05'),
(116, 21, 'Ward No. 89', 1, 5, '2019-02-11 07:49:13', '2019-02-11 07:49:13'),
(117, 21, 'Ward No. 88', 1, 6, '2019-02-11 07:49:22', '2019-02-11 07:49:22'),
(118, 22, 'Ward No. 4', 1, 1, '2019-02-11 07:50:43', '2019-02-11 07:50:43'),
(119, 22, 'Ward No. 14 (Part)', 1, 2, '2019-02-11 07:50:51', '2019-02-11 07:50:51'),
(120, 22, 'Ward No. 15', 1, 3, '2019-02-11 07:51:12', '2019-02-11 07:51:12'),
(121, 22, 'Ward No. 16 (Part)', 1, 4, '2019-02-11 07:51:20', '2019-02-11 07:51:20'),
(122, 23, 'Ward No. 50', 1, 1, '2019-02-11 07:51:51', '2019-02-11 07:51:51'),
(123, 23, 'Ward No. 51 (part)', 1, 2, '2019-02-11 07:52:01', '2019-02-11 07:52:01'),
(124, 24, 'Sultanganj Union 51', 1, 1, '2019-02-11 07:52:34', '2019-02-11 07:52:34'),
(125, 25, 'Ward no. 24', 1, 1, '2019-02-11 07:53:39', '2019-02-11 07:53:39'),
(126, 25, 'Ward no. 25', 1, 2, '2019-02-11 07:53:48', '2019-02-11 07:53:48'),
(127, 25, 'Ward no. 26', 1, 3, '2019-02-11 07:53:56', '2019-02-11 07:53:56'),
(128, 25, 'Dakshingaon (Demra part)', 1, 4, '2019-02-11 07:54:04', '2019-02-11 07:54:04'),
(129, 25, 'Nasirabad', 1, 5, '2019-02-11 07:54:16', '2019-02-11 07:54:16'),
(130, 26, 'Ward No 17 (Part)', 1, 1, '2019-02-11 07:54:52', '2019-02-11 07:54:52'),
(131, 26, 'Dumni (Part)', 1, 2, '2019-02-11 07:55:00', '2019-02-11 07:55:00'),
(132, 26, 'Dakshinkhan (Part)', 1, 3, '2019-02-11 07:55:09', '2019-02-11 07:55:09'),
(133, 27, 'Ward no. 66', 1, 1, '2019-02-11 07:55:58', '2019-02-11 07:55:58'),
(134, 27, 'Ward no. 68', 1, 2, '2019-02-11 07:56:15', '2019-02-11 07:56:15'),
(135, 27, 'Ward no. 72', 1, 3, '2019-02-11 07:56:24', '2019-02-11 07:56:24'),
(136, 27, 'Ward no. 73', 1, 4, '2019-02-11 07:56:35', '2019-02-11 07:56:35'),
(137, 28, 'Ward no. 59', 1, 1, '2019-02-11 07:57:08', '2019-02-11 07:57:08'),
(138, 28, 'Ward no. 60', 1, 2, '2019-02-11 07:57:17', '2019-02-11 07:57:17'),
(139, 28, 'Ward no. 61', 1, 3, '2019-02-11 07:57:24', '2019-02-11 07:57:24'),
(140, 28, 'Ward no. 62', 1, 4, '2019-02-11 07:57:35', '2019-02-11 07:57:35'),
(141, 29, 'Ward no. 3 (part)', 1, 1, '2019-02-11 07:58:09', '2019-02-11 07:58:09'),
(142, 29, 'Ward no. 7 (part)', 1, 2, '2019-02-11 07:58:20', '2019-02-11 07:58:20'),
(143, 29, 'Ward no. 11', 1, 3, '2019-02-11 07:58:42', '2019-02-11 07:58:42'),
(144, 29, 'Ward no. 12', 1, 4, '2019-02-11 07:59:03', '2019-02-11 07:59:03'),
(145, 29, 'Ward no. 13', 1, 5, '2019-02-11 07:59:14', '2019-02-11 07:59:14'),
(146, 29, 'Ward no. 14', 1, 6, '2019-02-11 07:59:34', '2019-02-11 07:59:34'),
(147, 30, 'Ward no. 42', 1, 1, '2019-02-11 08:00:05', '2019-02-11 08:00:05'),
(148, 30, 'Ward no. 44', 1, 2, '2019-02-11 08:00:14', '2019-02-11 08:00:14'),
(149, 30, 'Ward no. 45', 1, 3, '2019-02-11 08:00:22', '2019-02-11 08:00:22'),
(150, 30, 'Ward no. 46 (part', 1, 4, '2019-02-11 08:00:35', '2019-02-11 08:00:35'),
(151, 30, 'Ward no. 47 (part)', 1, 5, '2019-02-11 08:00:47', '2019-02-11 08:00:47'),
(152, 31, 'Ward no. 31', 1, 1, '2019-02-11 08:01:20', '2019-02-11 08:01:20'),
(153, 31, 'Ward no. 32', 1, 2, '2019-02-11 08:01:29', '2019-02-11 08:01:29'),
(154, 31, 'Ward no. 33', 1, 3, '2019-02-11 08:01:37', '2019-02-11 08:01:37'),
(155, 31, 'Ward no. 34', 1, 4, '2019-02-11 08:01:45', '2019-02-11 08:01:45'),
(156, 31, 'Ward no. 35', 1, 5, '2019-02-11 08:01:53', '2019-02-11 08:01:53'),
(157, 31, 'Ward no. 53 (part)', 1, 6, '2019-02-11 08:02:02', '2019-02-11 08:02:02'),
(158, 47, 'Ward no. 1', 1, 1, '2019-02-11 08:02:50', '2019-02-11 08:02:50'),
(159, 48, 'Uttarkhan union 76', 1, 1, '2019-02-11 08:03:23', '2019-02-11 08:03:23'),
(160, 32, 'Ward no. 52', 1, 1, '2019-02-11 08:37:24', '2019-02-11 08:37:24'),
(161, 33, 'Ward no. 2', 1, 1, '2019-02-11 08:38:34', '2019-02-11 08:38:34'),
(162, 33, 'Ward no. 3 (part', 1, 2, '2019-02-11 08:38:53', '2019-02-11 08:38:53'),
(163, 33, 'Ward no. 5', 1, 3, '2019-02-11 08:39:03', '2019-02-11 08:39:03'),
(164, 33, 'Ward no. 6 (part)', 1, 4, '2019-02-11 08:39:14', '2019-02-11 08:39:14'),
(165, 33, 'Ward no. 15 (part', 1, 5, '2019-02-11 08:39:48', '2019-02-11 08:39:48'),
(166, 33, 'Harirampur (part)', 1, 6, '2019-02-11 08:39:56', '2019-02-11 08:39:56'),
(167, 34, 'Ward No. 36', 1, 1, '2019-02-11 08:40:35', '2019-02-11 08:40:35'),
(168, 34, 'Ward No. 56 (part', 1, 2, '2019-02-11 08:40:51', '2019-02-11 08:40:51'),
(169, 35, 'Ward no. 53 (part', 1, 1, '2019-02-11 08:41:51', '2019-02-11 08:41:51'),
(170, 35, 'Ward no. 54', 1, 2, '2019-02-11 08:41:59', '2019-02-11 08:41:59'),
(171, 35, 'Ward no. 55', 1, 3, '2019-02-11 08:42:07', '2019-02-11 08:42:07'),
(172, 35, 'Ward no. 56-', 1, 4, '2019-02-11 08:42:31', '2019-02-11 08:42:31'),
(173, 35, 'Ward no. 57 (part)', 1, 5, '2019-02-11 08:42:50', '2019-02-11 08:42:50'),
(174, 36, 'Ward No 22', 1, 1, '2019-02-11 08:43:55', '2019-02-11 08:44:19'),
(175, 36, 'Ward No 23', 1, 2, '2019-02-11 08:44:29', '2019-02-11 08:44:29'),
(176, 37, 'Ward no. 27', 1, 1, '2019-02-11 08:45:09', '2019-02-11 08:45:09'),
(177, 37, 'Ward no. 28', 1, 2, '2019-02-11 08:45:25', '2019-02-11 08:45:25'),
(178, 37, 'Ward no. 29', 1, 3, '2019-02-11 08:45:35', '2019-02-11 08:45:35'),
(179, 37, 'Ward no. 30', 1, 4, '2019-02-11 08:45:49', '2019-02-11 08:45:49'),
(180, 37, 'Dakshingaon (part)', 1, 5, '2019-02-11 08:45:57', '2019-02-11 08:45:57'),
(181, 37, 'Manda', 1, 6, '2019-02-11 08:46:05', '2019-02-11 08:46:05'),
(182, 38, 'Ward no. 6 (part', 1, 1, '2019-02-11 08:46:46', '2019-02-11 08:46:46'),
(183, 38, 'Ward no. 7 (part', 1, 2, '2019-02-11 08:47:02', '2019-02-11 08:47:02'),
(184, 38, 'Ward no. 8', 1, 3, '2019-02-11 08:47:13', '2019-02-11 08:47:13'),
(185, 39, 'Ward no. 56 part', 1, 1, '2019-02-11 08:48:00', '2019-02-11 08:48:00'),
(186, 39, 'Ward no. 57 part', 1, 2, '2019-02-11 08:48:18', '2019-02-11 08:48:18'),
(187, 40, 'Ward no. 16 part', 1, 1, '2019-02-11 08:49:52', '2019-02-11 08:49:52'),
(188, 40, 'Ward no. 40 part', 1, 2, '2019-02-11 08:50:09', '2019-02-11 08:50:09'),
(189, 40, 'Ward no. 41', 1, 3, '2019-02-11 08:50:19', '2019-02-11 08:50:19'),
(190, 40, 'Ward no. 51 part', 1, 4, '2019-02-11 08:50:36', '2019-02-11 08:50:36'),
(191, 41, 'Ward no. 83', 1, 1, '2019-02-11 08:51:08', '2019-02-11 08:51:08'),
(192, 41, 'Ward no. 87 (part)', 1, 2, '2019-02-11 08:51:17', '2019-02-11 08:51:17'),
(193, 41, 'Ward no. 90 part', 1, 3, '2019-02-11 08:51:33', '2019-02-11 08:52:02'),
(194, 42, 'Ward no. 74', 1, 1, '2019-02-11 08:52:39', '2019-02-11 08:52:39'),
(195, 42, 'Ward no. 75', 1, 2, '2019-02-11 08:52:49', '2019-02-11 08:52:49'),
(196, 42, 'Ward no. 77', 1, 3, '2019-02-11 08:52:57', '2019-02-11 08:52:57'),
(197, 42, 'Ward no. 78', 1, 4, '2019-02-11 08:53:05', '2019-02-11 08:53:05'),
(198, 42, 'Ward no. 79', 1, 5, '2019-02-11 08:53:13', '2019-02-11 08:53:13'),
(199, 43, 'Ward no. 38 (part)', 1, 1, '2019-02-11 08:53:47', '2019-02-11 08:53:47'),
(200, 43, 'Ward no. 39', 1, 2, '2019-02-11 08:53:55', '2019-02-11 08:53:55'),
(201, 43, 'Ward no. 40 (part)', 1, 3, '2019-02-11 08:54:05', '2019-02-11 08:54:05'),
(202, 44, 'Ward No. 18 Part', 1, 1, '2019-02-11 08:55:17', '2019-02-11 08:55:17'),
(203, 44, 'Ward No. 19 Part', 1, 2, '2019-02-11 08:55:44', '2019-02-11 08:55:44'),
(204, 44, 'Ward No. 20 part', 1, 3, '2019-02-11 08:55:57', '2019-02-11 08:55:57'),
(205, 45, 'Ward No 20', 1, 1, '2019-02-11 08:56:44', '2019-02-11 08:56:44'),
(206, 45, 'Ward No  37', 1, 2, '2019-02-11 08:56:52', '2019-02-11 08:56:52'),
(207, 45, 'Ward No 38', 1, 3, '2019-02-11 08:57:04', '2019-02-11 08:57:04'),
(208, 46, 'Harirampur Union (part)', 1, 1, '2019-02-11 08:57:30', '2019-02-11 08:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1=Superadmin, 2=Member, 3=admin',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `address`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saiful Islam', 'adeptsaiful@gmail.com', '01829655974', NULL, '$2y$10$r6dHmRL5u/39XiiliENuVOZhLmu/PwcbOl95IG85VmM0c6AuVYvVG', 'Dhaka', 1, 'z3tNjWsbDaP0vlvGbuQSsJVaHCHNQZCsB88BRMicAiuBXzxvN0U7DAoV3hXg', '2018-12-08 09:34:35', '2019-07-29 00:12:07'),
(6, 'Mahmudul Hoque Rasel', 'shollabloodpoint00@gmail.com', '01816635207', NULL, '$2y$10$kHdPzCrkKROpmGpuBY6dReqBMMLPBkENBJBM6xWFNPrQJ5./pMEbq', 'Madanmohanpur, Sholla, Nawabgonj, Dhaka.', 1, 'Xwog9dZId75s1GanidU1tv0hVSwdeRXlGbvhV98v7dGQIx6u9ejoFRABlrqi', '2019-01-18 18:33:19', '2019-05-03 04:11:33'),
(16, 'Md.Omar Faruk sharife', 'shollabloodpoint01@gmail.com', '01918369494', NULL, '$2y$10$XUwPVY1cGJp7CdA4VKBC2uEgws6PI0E4vggz31tub99F25yHw5YEi', 'Sonapur, Sholla, Nawabgonj, Dhaka.', 3, '6L1UqiLAleSwOEY7blcKGg0subGugXflrCyj8OgxQERfbtBTQgz3JfGsgpJ9', '2019-01-29 16:55:18', '2019-11-05 13:34:39'),
(20, 'Mahmudul Hoque Rasel', 'raselonline.net@gmail.com', '01913857959', NULL, '$2y$10$48ChGkxcAKP3yW3XH0MUH.DuUaN2lb66tx2t5oVyM34dXf85zhAjm', NULL, 2, 'U4CzE3YsUWQHmNSvF1aq9Stzx1bZj0xmHxfnl0iiS55rulsiCWh3ds1tucE7', '2019-02-01 04:12:19', '2019-02-01 04:12:19'),
(21, 'Md.Omar Faruk Sharife', 'md.omarfaruk_sharife@yahoo.com', '01836802425', NULL, '$2y$10$doPWSBwpzZ8vHzyeaOduxuUTtKY9WYbxJtI1aY36y7FW2mrIn5Rwq', NULL, 2, NULL, '2019-02-01 12:42:44', '2019-02-01 12:42:44'),
(22, 'Rashedur rahman russell', 'rahmanrashedurrussellsonapur@gmail.com', '01815708714', NULL, '$2y$10$2LtHCRwC2a.gYNPFbtlwquwckgkIOetfb7XGfcVuXTyyAd6tC0wia', NULL, 2, '83jxaV9wDsV5Tq7SB8kPXFS7la5chBN4Y85sLekMvKDHgQl6oHGIu6BmALpr', '2019-02-01 13:22:02', '2019-02-01 13:22:02'),
(23, 'Md. Rifat Rahman totul', 'm75318@gmail.com', '01821788855', NULL, '$2y$10$IcPeQ7Nyrc7xzRXIE.Ya9OOsyW5vLMnXYjvF9Oz5LUNjB6/FjrzuG', NULL, 2, NULL, '2019-02-01 13:57:33', '2019-02-01 13:57:33'),
(25, 'Md.Al Islam', 'topuislamopu@gmail.com', '01672710583', NULL, '$2y$10$cccyGmYvAcoGeftxSX7feeLqgA0.FmjWqXpJuX4KZl22eN238n87C', NULL, 2, 'WCeB9vPGrtuG3rbgotfbRDKSXzq2qE53hsetYwSHFPLjPGgpXSLxRkdcQA49', '2019-02-03 05:36:04', '2019-02-03 05:36:04'),
(26, 'Nadim Mahmud', 'nadimmahmud20109@gmail.com', '01316862871', NULL, '$2y$10$nvng73wXODFXNHTkShksr.nuyZOeFvmwScXzOtm.JnF7O/uNI3l7G', NULL, 2, 'rloPzQN5MIxSPQEXFt5wLDRebInc0875LW4pmjWfmWKg6lhielrWA3lrQs6C', '2019-02-03 09:17:19', '2019-05-03 04:42:15'),
(27, 'Alim Mahmud Lito', 'das_lito@yahoo.com', '01925826525', NULL, '$2y$10$rOFGHWxjBR9rQSAjLIxEjekos20Lj64YzKiaKBGoOsMRDahp5BBqy', NULL, 2, NULL, '2019-02-03 09:40:33', '2019-02-03 09:40:33'),
(28, 'Ismail Hossain', 'ismail21390@gmail.com', '01811118000', NULL, '$2y$10$ie.ykUUXF86PQqxd3WhUDuxrIifx0c2oJTvslDYp/X/qBccQcXFJi', NULL, 2, '75jMDM98wpXYOf8SJjiL9ew7UDV3YZlHJFenLA68OThNfGbSyWXXFgDrS0z5', '2019-02-03 12:41:32', '2019-02-03 12:41:32'),
(29, 'Sujan Balo', 'Sujon.balo1997@gmail.com', '01779644337', NULL, '$2y$10$96o7W5gOmidtMT/BqxyUoulsaTbMPW6G8ZLxqPCz0DjX733hszyDa', NULL, 2, NULL, '2019-02-03 16:23:57', '2019-02-03 16:23:57'),
(30, 'Md Ashikur Rahman', 'ashiknil7@gmail.com', '01710824877', NULL, '$2y$10$PCQRHd0i8r8w8GPS.fVjS.OGWa9sXSTb.q9taxAnISV.cOWRfq6Ty', NULL, 2, NULL, '2019-02-03 18:36:33', '2019-02-03 18:36:33'),
(31, 'Md. Jubayer Islam', 'tusherislam016@gmail.com', '01610012124', NULL, '$2y$10$XxD9gXxf6go.r1ShR4psBeNB0RSTZasGi6vk.TLqA262wLidcjY4W', NULL, 2, NULL, '2019-02-04 15:09:36', '2019-02-04 15:09:36'),
(32, 'Alinoor Islam Miso', 'misomarioo@gmail.com', '01789887436', NULL, '$2y$10$VA20HR2O44zGh4kCMOuHIOWGA3.2Vv28eZ6m61f6EmkhJkSqfXRAy', NULL, 2, NULL, '2019-02-05 05:21:26', '2019-02-05 05:21:26'),
(33, 'Farhan ahmed biplob', 'm49475@gmail.com', '01877798133', NULL, '$2y$10$PmBUyqkWsw27C71Ixz0l1uFZ8g7Csz9q0gdIXE0ryuPcR0QoLdmUm', NULL, 2, 'JLh7FFYXCYRzNuSkGChuLW9rMY3GQg6XEDM3gMncWuM7PaRVbvVBq1KBnWGx', '2019-02-06 05:58:20', '2019-02-06 05:58:20'),
(34, 'Parvej Ahsan ornob', 'm79035@gmail.com', '01861901226', NULL, '$2y$10$LXq15HUIkUZgLTs0oQsrrOCLTXVFd0DjhRtc/f9iy96jjdlhSo90C', NULL, 2, NULL, '2019-02-06 06:02:57', '2019-02-06 06:02:57'),
(35, 'Md.Chatok Bhuiyan', 'chatokxd@gmail.com', '01685452393', NULL, '$2y$10$MmZwDYaz3woTSmpPbGQdXuicaO2FZ6Idmy4L0iDYjJ0IUtC65x6xe', NULL, 2, NULL, '2019-02-06 06:07:17', '2019-02-06 06:07:17'),
(36, 'Jakir Hossain Rashed', 'shollabloodpoint02@gmail.com', '01914643889', NULL, '$2y$10$iovK3pUzCD5za8MpxvKtw.N628D/799/.Z253bwilwnk/JWtCD1Mq', 'Singjur, Sholla, Nawabgonj, Dhaka.', 3, 'RZ41kNVNli2MRp58AmZaEUDNuw2NkGMSypFImuUVCnCng2DWuJA76jlCL1Y7', '2019-02-06 06:09:21', '2019-07-15 13:02:39'),
(37, 'Md.Humayon Ahmed Soikot', 'm49983@gmail.com', '01957774144', NULL, '$2y$10$zT/4Ay/WK8UvKU5XkLQjBO6d6Mt.ESdU2YVYN21.Ak5UZ5yh7NVf6', NULL, 2, NULL, '2019-02-06 12:41:05', '2019-02-06 12:41:05'),
(38, 'Selim mahmud roni', 'm65475@gmail.com', '01914290749', NULL, '$2y$10$74dl/fGCNzWlLgTSTu6WHeV3uCkhFsZw0UkJaQbSsT5jUv.r13gCS', NULL, 2, NULL, '2019-02-06 13:16:59', '2019-03-01 12:37:27'),
(39, 'Md. Fayed Hossain Khan', 'fayedhossainkhan1999@gmail.com', '01861043274', NULL, '$2y$10$h6v1YwA48dRw7pfKA/HGQeAvJR.i1aR3IEbS/H40VIXeRKBC6OWIy', NULL, 2, 'bfwkb4twlR3dnhADvZUP9R0Uq8EpcdNVVe3lThcBmwaCZ9THd5eLnyHw4uE3', '2019-02-06 13:50:35', '2019-02-11 18:27:54'),
(40, 'Mamun mahmud', 'm25789@gmail.com', '01926768598', NULL, '$2y$10$XR9UEz6GoWmztbh3.bK.sewsKkpWo6NOycRAThwGGxEGptBG7MxsS', NULL, 2, NULL, '2019-02-06 13:57:26', '2019-02-06 13:57:26'),
(41, 'Adnan Alam', 'Safayeatalam420@gmail.com', '01855615522', NULL, '$2y$10$os5VuMyqxTFcQqAemCMIve9U07PEiCCLIcjcEpWdmd.RIJyxX5URu', NULL, 2, NULL, '2019-02-07 04:56:42', '2019-05-28 14:45:37'),
(42, 'Gobinda Ray', 'gobinda07061985@gmail.com', '01918971167', NULL, '$2y$10$UXRaIvXT1Df64GDo3h2SAu.rn31L4FA.OW35GuRSzAX8yPgzKeuUm', NULL, 2, 'wyMqHdfUni7zN1Ha2Gv7JmwIF8ufIw5M7BzKgFb8Ko93RfFD7wKoUNJRBh6V', '2019-02-07 09:49:05', '2019-02-07 09:49:05'),
(43, 'Md. Ziaur Rahman', 'm19233@gmail.com', '01937039961', NULL, '$2y$10$hUrMDKC5aIo.Rk6NnckvsOnpiJrX8FSN2ClDI.MGzBz05XtZ4RkkG', NULL, 2, NULL, '2019-02-08 11:19:00', '2019-02-08 11:19:00'),
(44, 'Md. Masudur Rahman Suman', 'suman1320.rahman@gmail.com', '01612141841', NULL, '$2y$10$rphfKKzL5Fx0UPnHNn2Mae6c.Wsan7lQh2KbmAEPhDarskQcxLS7m', NULL, 2, 'Xabx19A5QyxSeqGv8PxrVJuJEyZpU8NeVHzGn9Z8id4fCJSXYb2Rc8dqcdRG', '2019-02-08 14:14:42', '2019-02-08 14:14:42'),
(45, 'MD. MIRAJ HOSSAIN', 'mdmirajsonapur@gmail.com', '01822752512', NULL, '$2y$10$K8DbnLQEEQXTzcu/jMos5eMqP5nnDtADww6GknpJaSCbaOjTKAy3e', NULL, 2, NULL, '2019-02-09 04:45:09', '2019-02-09 04:45:09'),
(46, 'Dalwar Hossain', 'dalwarhossain358@gmail.com', '01637175160', NULL, '$2y$10$XAOly9kINuhfH4lXFnjTaOXHI7fxQfKKskfCjdddlTv4yiy7c.J0.', NULL, 2, NULL, '2019-02-09 05:38:42', '2019-02-09 05:38:42'),
(47, 'Md Hafizur Rahman', 'hafizur702@gmail.com', '01726806829', NULL, '$2y$10$UkRYLCboCpyK5QBoTcc4ae/X5wWfO9mrNSSfspvly8TzBnOLm1dFO', NULL, 2, NULL, '2019-02-09 06:04:06', '2019-02-09 06:04:06'),
(48, 'Debabrata Mandal', 'debbd019@yahoo.com', '01711146720', NULL, '$2y$10$QYt5IPvDu2BjkZs/YPGy4ezNxYBYjWwCkDZHFXGi59NSaIuXwAf.O', NULL, 2, NULL, '2019-02-09 06:42:16', '2019-02-09 06:42:16'),
(49, 'Sohag  Ahammed', 'Sohag.mmp@gmail.com', '01837745548', NULL, '$2y$10$7jvHEMl.1vikVH0gLmCjGOwa54LSJjsMyPiMUWejxdJLoXsgQaJtW', NULL, 2, NULL, '2019-02-09 07:57:43', '2019-02-09 07:57:43'),
(50, 'Rasedujjaman Raitul', 'rasedujjamanraitul11@gmail.com', '01638803166', NULL, '$2y$10$z/Sg6eJm2H420Ydr6lFxROja1rCUuzA6FiIcqEp6eTPt2oRUiK0jm', NULL, 2, NULL, '2019-02-09 10:21:47', '2019-02-09 10:21:47'),
(51, 'Rakimot Hossain', 'rakimot.hossain@gmail.com', '01811333794', NULL, '$2y$10$FrxWNGKphRDv7lg147cKj.FqUGuTRYQ79UoR36PrzAkr6PmCFNmIO', NULL, 2, 'w5fvyN2l2PJisKNUFTE7bSeTiozr5Gojx5ZK3VGc9oVbhBZo21bLCby5XU3e', '2019-02-09 10:34:05', '2019-02-09 10:34:05'),
(52, 'Rakib hasan', 'rakibhasan0a@gmail.com', '01686093189', NULL, '$2y$10$Br8OuNm7X9M08uRvkMB1I.g9SghEDIeOScroh2x32BwY2VOEh/rYC', NULL, 2, '8yjhxYQL8fRmOrmQsKtz4Eb5vaVycWhfy6g3sh3BmmU6znzReZFIYLE16fzM', '2019-02-09 13:19:30', '2019-02-09 13:19:30'),
(53, 'roni mia', 'm33684@gmail.com', '01814168144', NULL, '$2y$10$kCqYg9lmCG1pkpRBBYDEruwSyA185v/dKGDnc7vtlW23Jm48a3GQ2', NULL, 2, NULL, '2019-02-09 14:39:55', '2019-02-09 14:39:55'),
(54, 'Delip Kumer Mondal', 'm65428@gmail.com', '01911879724', NULL, '$2y$10$XvEQPdjXYn3eOK2FXJUtRuOMGO70J57LkHu/cNAN2.6D5IO5G049G', NULL, 2, NULL, '2019-02-10 10:03:22', '2019-02-10 10:03:22'),
(59, 'Md Saiful Islam', 'm42117@gmail.com', '01687835849', NULL, '$2y$10$r6dHmRL5u/39XiiliENuVOZhLmu/PwcbOl95IG85VmM0c6AuVYvVG', NULL, 2, 'vkdNc6HqDlaif2xMOb74P3zZpKwVIKWEtC6dXRln61bgbSR36NiHBQix5DEc', '2019-02-10 15:51:34', '2019-03-20 11:01:09'),
(60, 'Md. Jakir Hossain Rased', 'fivestarpm12@gmail.com', '01614643889', NULL, '$2y$10$k33uNILKFo8sAOTvWYW1X.8lTeIfajZCiwK2YnLAog8.c3Msonor6', NULL, 2, NULL, '2019-02-10 18:02:55', '2019-02-10 18:02:55'),
(61, 'Md. Nazrul Islam', 'histandardagro18@gmail.com', '01813833844', NULL, '$2y$10$HfZ5sIASYkJQ8fTIdp3FbOXDGBaxhaclMheQcBDsjRFI8l5qwSjXG', NULL, 2, NULL, '2019-02-10 18:30:34', '2019-02-10 18:30:34'),
(62, 'Md Shubid Ali', 'subidali1982@gmail.com', '01814200833', NULL, '$2y$10$nvTkVfCcqCmtEOC5ij2L7OBiC03yrC/bOZP4oRAnarSxxpeNeB4/S', NULL, 2, NULL, '2019-02-11 07:00:07', '2019-02-11 07:00:07'),
(63, 'Rashedur Rahman', 'shollabloodpoint03@gmail.com', '01868443473', NULL, '$2y$10$PaaNhZfwlJFt.jChtTuqh.PtJ1/lvwsi8llaFIfGAL6Jtwf791PwO', 'Sonapur, Sholla, Nawabgonj, Dhaka.', 3, '9xjZ72umwbhy7To9uks3A9vVSaD5BOxrVATHUV2rDVxNJZ3sGT7gI5lK1wwR', '2019-02-11 12:16:06', '2019-07-15 13:02:24'),
(64, 'Md Mohi Uddin', 'm70406@gmail.com', '01632731702', NULL, '$2y$10$vt9fcuB7FyKVog/.59KeguugOg2xRVpWbpi.Qd0gdvB6y3d1/Bx5i', NULL, 2, NULL, '2019-02-11 13:17:02', '2019-02-11 13:17:02'),
(65, 'Md. Romjan ali', 'm39493@gmail.com', '01760861010', NULL, '$2y$10$Cu6VJ4Vo6NwogD2VHAd2fuq7ZnDHx0o0sS4IiET/EkSg3YmGH2Dl2', NULL, 2, NULL, '2019-02-11 13:19:50', '2019-02-11 13:19:50'),
(66, 'Asad Ahmed', 'm78385@gmail.com', '01829206770', NULL, '$2y$10$hvo8erh79W0vyBdFdVbWXey6UQx3pQBYIP1EWWR2ltU5Fvg57ebkm', NULL, 2, 'k2JMgdRsTFvR5oaKhQwPIfO4vl8dDsBp5z2DdAIlZhFBtzarOtoIX78K0flZ', '2019-02-11 13:31:54', '2019-02-11 13:31:54'),
(67, 'Md Mohan Ali', 'm41975@gmail.com', '01839855779', NULL, '$2y$10$rvpZ9gUrloOslmSzUJ247OlDVJUvY/j./G80otc31GmTJc.v4ljFa', NULL, 2, NULL, '2019-02-12 06:51:28', '2019-02-12 06:51:28'),
(68, 'Aliul islam Tuhin', 'aliulislamtuhin1@gmail.com', '01868516981', NULL, '$2y$10$gH/0euNEacL3GJeNRis2Fu5tLGheavY8R80sXT/lu3rjjXizRhB1y', NULL, 2, NULL, '2019-02-12 08:50:51', '2019-02-12 08:50:51'),
(69, 'Mehedi Hasan Joy', 'mehedi0329@gmail.com', '01689793826', NULL, '$2y$10$eAsKtMjPMTLCNP4c86ef0OmEATqlbkQIvM3I16WSEcz/5UHyPGZ3.', NULL, 2, NULL, '2019-02-12 13:15:48', '2019-02-12 13:15:48'),
(70, 'Shuva Sarker', 'usboyshuvo@gmail.com', '01316304777', NULL, '$2y$10$SsB3sksHZ3FOXs/sWdAAvex7Mk5bDrZnSaoIC24giq/L71UBKUTLO', NULL, 2, NULL, '2019-02-12 13:47:52', '2019-02-12 13:47:52'),
(71, 'Sabuj Mondal', 'm85900@gmail.com', '01882989769', NULL, '$2y$10$kuHFljk1CA8E8ZGdCb8QPuMXph4MVZmck/xWf.tmvHRjHXtqv1fTu', NULL, 2, NULL, '2019-02-12 14:10:15', '2019-02-12 14:10:15'),
(72, 'Dipto Raj', 'diptoraj2018@gmail.com', '01817010145', NULL, '$2y$10$eYp7CGW7/Gc1pD1hcTbpM.ftd6OJZOMJVeX.jRZKanWbG4f7.8rDm', NULL, 2, NULL, '2019-02-12 14:21:22', '2019-02-12 14:21:22'),
(73, 'Md Alamgir Hossain', 'alamgirhossain1122@gmail.com', '01811524455', NULL, '$2y$10$MR9qDDUlPeZp65DKRxwlO.ECpTrTmm0SfBBbJZSLU1F8J3eOj4zq6', NULL, 2, '2NpIQx1xKVQ5tGZfcl3cD3VAGa9H4CfSEnaQAjXASoFl4mOm9SxBltEfazgf', '2019-02-12 14:24:18', '2019-02-12 14:24:18'),
(74, 'Farhan Sharif', 'fspolas1998@gmail.com', '01830675914', NULL, '$2y$10$iw/kt/k2TKPJst9tcVwna.9uSZ.2AdULS.ZFU3YGauaoDJ2SVNJGu', NULL, 2, NULL, '2019-02-12 14:40:46', '2019-02-12 14:40:46'),
(75, 'Md Mozammle', 'm88413@gmail.com', '01835822403', NULL, '$2y$10$GZoctI6WUuATOFCiKUiM..7HQzq3cXlRrBT4jqNnsk2sLmzjmViHe', NULL, 2, 'kJUYMLpJHfYZXxXff3LkAAKVBqGZZiti7LzQJ968VbscTabAm3zFcaiLy34T', '2019-02-12 14:59:58', '2019-02-26 16:47:16'),
(76, 'jahid mahmud selim', 'www.mdimranmahmud559@gmail.com', '01817097357', NULL, '$2y$10$kKQfew1gBlnOKVV/9ietWORHybdl6x/pGQrXcH8qkMmu4c3UCsX.y', NULL, 2, NULL, '2019-02-12 15:58:02', '2019-02-12 15:58:02'),
(77, 'MD.Biplob hossain', 'mbhdipu86@gmail.com', '01915624288', NULL, '$2y$10$MBM.W0u5WR8GtX7M3bRG.OrPNdZ8PZGdiPqUFvf8koD8vcZNrs7Bq', NULL, 2, NULL, '2019-02-13 04:51:48', '2019-02-13 04:51:48'),
(78, 'Jasim uddin', 'm16945@gmail.com', '01830000349', NULL, '$2y$10$zx1rCbNc2GxmEOTGVu3s..mrzC2yP0mQYZcjcv17Wi2aiFm7XFP3m', NULL, 2, NULL, '2019-02-13 12:10:12', '2019-02-13 12:10:12'),
(79, 'Md Ataul Hoque', 'ataulhoque339@gmail.com', '01858986031', NULL, '$2y$10$m0I9IQVa2SsGeumY9jkWL.ZbpsP6gxT4VocvPLe7j337I3Nv4yt4u', NULL, 2, NULL, '2019-02-14 14:09:07', '2019-02-14 14:09:07'),
(80, 'Saiful Islam', 'saifulislam707.sk@gmail.com', '01954927945', NULL, '$2y$10$fVsUGBT9VrZMbYRm2ztUhOny/Updg/SFp45RhGOnj21YcxT8VEFmC', NULL, 2, NULL, '2019-02-14 17:27:28', '2019-02-14 17:27:28'),
(81, 'Sadhin Al-Hassan', 'sadhinmahmud1998@gmail.com', '01865732173', NULL, '$2y$10$y7dH5x6fFfjqX7KlaCELi..MP9Yb9FKj7h6XcI/fQfHe1eIPnWG7e', NULL, 2, 'PCek6s4ZtjhkujKPcw2HTXaDVNLuRrllOG3wEYdztpXvBCPruRQnTsRSY5pV', '2019-02-15 11:58:09', '2019-06-25 12:24:42'),
(82, 'Md. Saiful Islam', 'm68506@gmail.com', '01812284152', NULL, '$2y$10$5cklPhSA0sw9BeBaD7PPD.bPHoDkfmC8p2Ng4uPHrB2jFc42Tj/Cy', NULL, 2, NULL, '2019-02-15 12:55:31', '2019-02-15 12:55:31'),
(83, 'Md Nahid Hossain', 'm54581@gmail.com', '01857769372', NULL, '$2y$10$QX15rEjGFlE.evrheQYibeX/UopF9q2uvasYZsq5JPgJLy0tl.rLC', NULL, 2, NULL, '2019-02-15 13:15:05', '2019-02-15 13:15:05'),
(84, 'NOOR MOHAMMAD', 'noorm1795@gmail.com', '01922920085', NULL, '$2y$10$1azGBAlk5WTSosOJiafp.O4wmRqtpmzshaDCISpVyE7woU/vgFBbW', NULL, 2, 'pLAaJhACvdweRLbLWKifaD4UZ9jXphR563yLfjT3Sdx2DJopl41JCvEoj3uL', '2019-02-19 08:20:47', '2019-02-19 08:20:47'),
(85, 'Asadul Islam Asad', 'm19416@gmail.com', '01879819945', NULL, '$2y$10$y2Tqxwh.ScD8Eo6x3OX53uJh/kydrVX0jj7ig7c5kh0HizQNN3B9.', NULL, 2, '2KQYa2YQPpG5VrJDsgjsHatmxsLnloXDu5cAxvx0elDbxDZ5taj5jfqdZqC6', '2019-02-23 05:08:29', '2019-05-16 16:18:45'),
(87, 'subrato das', 'suvrodevdassubrato@gmail.com', '01850851783', NULL, '$2y$10$oKwxiMFrJbgPOOvUYxIWEeLMHx1jK4T7Wu4cQ.ght1ad1jYXXCGZ6', NULL, 2, NULL, '2019-02-27 02:40:04', '2019-02-27 02:40:04'),
(88, 'Md. Mehedi Hasan', 'm75863@gmail.com', '01815492605', NULL, '$2y$10$zQb2.CZ0oPTZh3go3iQnMeHr/YLZJAufrM8RfpjsnNlq0hWt6yEpW', NULL, 2, NULL, '2019-02-28 11:48:56', '2019-02-28 11:48:56'),
(89, 'Md Selim Mia', 'm12531@gmail.com', '01831685388', NULL, '$2y$10$ykJS9r99utvkT8sn7LniuOT9b1x4RJQMVaUhC5DXI/WpzuPQvex9a', NULL, 2, 'QkyYx6JiFEDOLvO4B5FimlbI5bl4LTQ6ymCw72GO7TC0OrElxnbdHmSAHTtv', '2019-03-01 12:45:02', '2019-03-01 12:45:02'),
(90, 'Md. Harun miah', 'm19856@gmail.com', '01815652543', NULL, '$2y$10$e5dMFG7ysaPLQr3wfIfWuOqG/Rd7dsmwJ7WNOXYdL9qjmEVxYx9MG', NULL, 2, NULL, '2019-03-02 12:38:52', '2019-03-02 12:38:52'),
(91, 'Md. Faisal parvej', 'm67683@gmail.com', '01782225815', NULL, '$2y$10$wAuvc5ehkaILCJfTlfrPPudfyD9aB3MEvgJ6lEMHdoqbldhW2/MQS', NULL, 2, NULL, '2019-03-07 13:58:13', '2019-03-07 13:58:13'),
(92, 'Md. Al-Islam', 'eibu.bd@gmail.com', '01811119397', NULL, '$2y$10$iRGiiTNoTt7POQdG.dded.AgPvJcDbNzxAxdnKsQn0OsJ5Yb.kU0y', NULL, 2, NULL, '2019-03-09 01:57:53', '2019-03-09 01:57:53'),
(93, 'Beauty akter', 'm50738@gmail.com', '01849434002', NULL, '$2y$10$MqjswT0roWAneDKipiGP0uXj/fQuEtZuQ6TVznVG0Vuma97HqBfvq', NULL, 2, NULL, '2019-03-13 07:13:35', '2019-03-13 07:13:35'),
(94, 'Md Robel Miha', 'm65284@gmail.com', '01856956086', NULL, '$2y$10$wHeYigxJSEYckanVyHTXeeKKWya1imGEXliW7hWf7eVcMUCQKkMAC', NULL, 2, 'mCbHQEHFKrOktYoEAxZh6fWTfWdfyNRIo7HPPTjRrXicRhYwlGhvy8czlVDb', '2019-03-13 14:13:38', '2019-03-13 14:13:38'),
(95, 'Ananda Rajbongshi', 'm30897@gmail.com', '01825720098', NULL, '$2y$10$SfsupSLxoihzobVXdwCVqOZqsQO9Kjmk9Kcc3.hj4SYBsTpfeb22u', NULL, 2, NULL, '2019-03-13 14:20:30', '2019-03-13 14:20:30'),
(96, 'Negar Sultana', 'shantaonline.net@gmail.com', '01937699635', NULL, '$2y$10$fPUlrL/tOFewRVtYVABAne1LAlWEnf7Z7YjJD1V4vvxmrw9OErLWi', NULL, 2, NULL, '2019-03-17 05:57:20', '2019-03-17 05:57:20'),
(97, 'Nur A Alam', 'nuralom016800@gmail.com', '01913777992', NULL, '$2y$10$kcwBRpgpWD2naaVzW/62CeQqtR.qWZzAe75/e/LxGQpy4DNwJvccW', NULL, 2, NULL, '2019-03-24 03:29:17', '2019-03-24 03:34:48'),
(98, 'Nikhil mondol', 'm12348@gmail.com', '01876407354', NULL, '$2y$10$YfVyCW/ZzqC/hLiPkSgg8OMpmRRXITrmVeDcZL757Qjxw5jK/0IEK', NULL, 2, NULL, '2019-03-25 14:29:11', '2019-03-25 14:29:11'),
(99, 'Shimul Sarker', 'shimulsarker092@gmail.com', '01859663938', NULL, '$2y$10$b9g80eaSi7ESLwmurmyK7uUagyk/0Uul.1dnBUEjFX2u5TFIOrXYa', NULL, 2, NULL, '2019-04-04 07:11:59', '2019-04-04 07:11:59'),
(100, 'Sheikh Sabbir', 'sheikhsabbir07@gmail.com', '01862291807', NULL, '$2y$10$1pJX4SxglbT1P9e69827OewDK5nTv/Qq0/dvbKfUPeEZyRQwZ2Rpq', NULL, 2, 'IF9grP05dbxgRZTUuHBYaHPpCbysdg5j61IEGO019ZzOt8fqXS5Vpr53IFYB', '2019-04-27 08:05:38', '2019-04-27 08:05:38'),
(101, 'Roknozzaman', 'm36443@gmail.com', '01749555647', NULL, '$2y$10$ChrqXJ2V0xoMstlzn2z8seHE6cJ5vkmQP.9/lbabzn1WAtBiJ3T0u', NULL, 2, 'OeAgrDvevjFzGlGTWQ1UjW3S54mS81fXhVtdJD0rNRbc36aigzVoY7EvZ3or', '2019-04-27 12:11:56', '2019-04-27 12:11:56'),
(102, 'Sheikh Sajib', 'mdsajib4050@gmail.com', '01789194675', NULL, '$2y$10$5NG9b02YSjY4Fe70YgUPwujdYUP74HJSQkD4RbREQj1XrlmXA5OG2', NULL, 2, 'IUcF8VDMKIjTt48mK1syToWdBFLIzrdAFqXgnlkkNAfCZTOR6Da3bxZRJLLj', '2019-04-27 13:37:47', '2019-04-27 14:19:14'),
(104, 'Jahid Hasan', 'Jahidhassan412@gmail.com', '01840190196', NULL, '$2y$10$WRO6i28hX3EDpxPNtUb8YOkarX/YQKPEu5W8O73EkJmRIEOZh0TDG', NULL, 2, NULL, '2019-05-27 10:32:44', '2019-05-27 10:32:44'),
(105, 'Md.Faruk hossain', 'faruk.search@gmail.com', '01858341848', NULL, '$2y$10$f8pD7c9LKgwZLRUa5wEUM.Iixj6J2Ez5PJPuQvAqAXIUmpay9THSG', NULL, 2, NULL, '2019-05-27 14:12:39', '2019-05-27 14:12:39'),
(106, 'Md Khan Robin', 'm77800@gmail.com', '01850945025', NULL, '$2y$10$.aC49674jBo7kDL/xfw5oep7vLPdrKwq2sv1tm1bKbQC/xTusb7ei', NULL, 2, NULL, '2019-05-28 14:49:54', '2019-05-28 14:49:54'),
(107, 'Shuvashis Sarker', 'shuvo3177@gmail.com', '01833133335', NULL, '$2y$10$GKZ.zcTlSeK4c/4mLuUtQem2e07SjV5a2imwSDk.KvUgAxJoDvSTq', NULL, 2, 'U0C1fzt82zReoDAFImJGwk1buhvH3xzUWtCLiVsLNgxDAIH4B1DNFrwiwanf', '2019-06-01 13:53:05', '2019-10-28 14:52:05'),
(108, 'Md. Al-Amin', 'skalamin8104@gmail.com', '01849757953', NULL, '$2y$10$3X0J/XHZi3chfH1lIxdSr.tKqbidxEOSWKVstdcuTq20brEpXq.Lu', NULL, 2, NULL, '2019-06-30 18:29:16', '2019-06-30 18:29:16'),
(109, 'Anik', 'shollabloodpoint04@gmail.com', '01973460025', NULL, '$2y$10$2vfLzmiVpZWtBepv9XnVqeXH6Jo/COpzjiAvg/E7loWsBh0qLoFDu', 'Singjur, Sholla, Nawabgonj, Dhaka.', 3, NULL, '2019-07-15 13:19:26', '2019-07-15 13:19:26'),
(110, 'Md. Mehedi Hasan', 'shollabloodpoint05@gmail.com', '01715427154', NULL, '$2y$10$YgiwF0EWnsrT9Ud0LUAb.O0fpFeJewHgmxdGxu5.QGuvpMS5fGwVu', 'Madanmohanpur, Sholla, Nawabgonj, Dhaka.', 3, 'tdvrxq4jwf38C8J2jBk6dfSAdLTjRa5WggX4oyM9ASlyUNBpQN2WB6Y3RGyO', '2019-07-15 13:34:28', '2019-07-15 13:34:28'),
(111, 'Mamun Mahamud', 'Mamunmahmud998@gmail.com', '01880847397', NULL, '$2y$10$hMbHtT5NSclSdlNDMFgr0.gAsQSFt8hjGczZ38e0QRYoYE2eW.Xzq', NULL, 2, NULL, '2019-07-15 14:21:20', '2019-07-15 14:21:20'),
(112, 'Md Mohor Ali', 'm70928@gmail.com', '01878253039', NULL, '$2y$10$SH24Twjbd8SaZZbApHxS7.ixPGSH2AQcTyZIs/3efdZI0lAzhCELy', NULL, 2, NULL, '2019-07-15 14:21:44', '2019-07-15 14:21:44'),
(113, 'Nahida akter', 'm86041@gmail.com', '01782076414', NULL, '$2y$10$VMbjNrjLLv0DYJ4WCs5Jr.4GaC3KNJagjwMMqBrOwwtFgfwH3zsBG', NULL, 2, NULL, '2019-07-23 09:40:00', '2019-07-23 09:40:00'),
(114, 'Md Aminul Islam', 'm22778@gmail.com', '01817703712', NULL, '$2y$10$0bwk5a.uuW.gwoyPyv07FOaWtq2VYVZuIROEApn4/ipFL0g/0j6WW', NULL, 2, NULL, '2019-07-27 04:07:55', '2019-07-27 04:07:55'),
(115, 'Md Humayun Kobir', 'mhkobir.net@gmail.com', '01814901783', NULL, '$2y$10$YAHnSfvdGltjLfwwIEsoVeETyxTUqBsAyGGqA3YamcFJPoK5Ald2q', NULL, 2, NULL, '2019-08-03 12:57:01', '2019-08-03 12:57:01'),
(116, 'Danej mahmud', 'm15450@gmail.com', '01815421129', NULL, '$2y$10$9W0yZmC704EMCrByVrIlp.RyYDw6m.ysNAhpzmIKRm/tYH8hTTopG', NULL, 2, NULL, '2019-08-13 06:15:30', '2019-08-13 06:15:30'),
(118, 'Md Alamgir Hossain', 'm56347@gmail.com', '01812690835', NULL, '$2y$10$8XyWjxHXmGb6bhpxOoqqeOiJ1hORcscv.5.x3eT9hK18kDN/X7xDa', NULL, 2, 'XkLsNmSKUwURI9TbeZGWSYHz6QCjYWr6HG872bjmm9fLOzUNqDgct1THdKtO', '2019-08-23 09:55:49', '2019-08-23 09:55:49'),
(119, '123456', '123456@gmail.com', '01715331635', NULL, '$2y$10$UFmQBErB5kQKYnMkyZouM.OI4b/EYufo2pqq5yTk.1FkJ5.ed1pAq', '123465', 3, NULL, '2020-05-23 13:46:03', '2020-05-23 13:46:03'),
(120, 'MD SHAMIM HOSSAIN', 'm36516@gmail.com', '01915527689', NULL, '$2y$10$KXqY2OaubE1ZYwJDBc1LDegpEAIzOK75rC8YqljTU2NVE5x7hCiZG', NULL, 2, NULL, '2020-09-29 16:35:33', '2020-09-29 16:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Md Saiful Islam', 'saiful@gmail.com', '01751236489', 'Subject', 'Message', '2019-01-06 11:41:04', '2019-01-06 11:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `id` int(10) UNSIGNED NOT NULL,
  `union_id` int(10) UNSIGNED NOT NULL,
  `village` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `serial_num` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`id`, `union_id`, `village`, `status`, `serial_num`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sholla', 1, 1, '2019-01-31 21:45:15', '2019-01-31 21:45:15'),
(2, 1, 'Madanmohanpur', 1, 2, '2019-02-01 03:46:58', '2019-02-01 03:46:58'),
(3, 1, 'Singjur', 1, 3, '2019-02-01 03:50:51', '2019-02-01 03:50:51'),
(4, 1, 'Sonapur', 1, 4, '2019-02-01 03:51:24', '2019-02-01 03:51:24'),
(5, 1, 'Khotia', 1, 5, '2019-02-01 03:52:20', '2019-02-01 03:52:20'),
(6, 1, 'Chokoriya', 1, 6, '2019-02-01 03:53:06', '2019-02-01 13:22:57'),
(7, 1, 'Singhora', 1, 7, '2019-02-01 03:53:35', '2019-02-01 03:53:35'),
(8, 1, 'Patiljhap', 1, 8, '2019-02-01 03:54:08', '2019-02-01 03:54:08'),
(9, 1, 'Aowna', 1, 9, '2019-02-01 03:55:04', '2019-02-01 13:23:40'),
(10, 1, 'Bowali', 1, 10, '2019-02-01 03:55:35', '2019-02-01 03:55:35'),
(11, 1, 'Konda', 1, 11, '2019-02-01 03:56:18', '2019-02-01 03:56:18'),
(12, 1, 'Olail', 1, 12, '2019-02-01 03:57:02', '2019-02-01 03:57:02'),
(13, 1, 'Dakshin Sholla', 1, 13, '2019-02-01 03:57:45', '2019-02-01 03:57:45'),
(14, 1, 'Zanjonia', 1, 14, '2019-02-01 03:58:24', '2019-02-01 03:58:24'),
(15, 1, 'Abdani', 1, 15, '2019-02-01 03:58:54', '2019-02-01 03:58:54'),
(16, 1, 'Parasora', 1, 16, '2019-02-01 03:59:34', '2019-02-01 03:59:34'),
(17, 1, 'Ajogora', 1, 17, '2019-02-01 04:00:40', '2019-02-01 13:28:13'),
(18, 1, 'Sultanpur', 1, 18, '2019-02-01 13:24:45', '2019-02-01 13:24:45'),
(19, 1, 'Kartikpur', 1, 19, '2019-02-01 13:25:24', '2019-02-01 13:25:24'),
(20, 1, 'Mohabbatpur', 1, 20, '2019-02-01 13:26:04', '2019-02-01 13:26:04'),
(21, 1, 'Hayetkanda', 1, 21, '2019-02-01 13:27:01', '2019-02-01 13:27:01'),
(22, 1, 'Shollanagar', 1, 22, '2019-02-01 13:29:25', '2019-02-01 13:29:25'),
(23, 1, 'Dattakhanda', 1, 23, '2019-02-01 13:29:46', '2019-02-01 13:29:46'),
(24, 1, 'Balokhanda', 1, 24, '2019-02-01 13:30:05', '2019-02-01 13:30:05'),
(25, 1, 'Mohisdiya', 1, 25, '2019-02-01 13:30:31', '2019-02-01 13:30:31'),
(26, 1, 'Atkahoniya', 1, 26, '2019-02-01 13:30:56', '2019-02-01 13:30:56'),
(27, 1, 'Basnol', 1, 27, '2019-02-01 13:31:41', '2019-02-01 13:31:41'),
(28, 1, 'Sanghata', 1, 28, '2019-02-01 13:32:18', '2019-02-01 13:32:18'),
(29, 1, 'Dodghata', 1, 29, '2019-02-01 13:41:43', '2019-02-01 13:41:43'),
(30, 1, 'Komolli', 1, 30, '2019-02-01 13:42:52', '2019-02-01 13:42:52'),
(31, 2, 'Agla', 1, 1, '2019-02-01 13:47:07', '2019-02-01 13:47:07'),
(32, 2, 'Tikorpur', 1, 2, '2019-02-01 13:47:35', '2019-02-01 13:47:35'),
(33, 2, 'Kaluahati', 1, 3, '2019-02-01 13:48:07', '2019-02-01 13:48:07'),
(34, 2, 'Majpara', 1, 4, '2019-02-01 13:48:25', '2019-02-01 13:48:25'),
(35, 2, 'Mohanpur', 1, 5, '2019-02-01 13:48:49', '2019-02-01 13:48:49'),
(36, 2, 'Satiya', 1, 6, '2019-02-01 13:49:17', '2019-02-01 13:49:17'),
(37, 2, 'Benokhali', 1, 7, '2019-02-01 13:49:51', '2019-02-01 13:49:51'),
(38, 2, 'Charchoria', 1, 8, '2019-02-01 13:50:19', '2019-02-01 13:50:19'),
(39, 2, 'Dinajpur', 1, 9, '2019-02-01 13:50:37', '2019-02-01 13:50:37'),
(40, 2, 'Mailail', 1, 10, '2019-02-01 13:51:01', '2019-02-01 13:51:01'),
(41, 2, 'Khanhati', 1, 11, '2019-02-01 13:51:18', '2019-02-01 13:51:18'),
(42, 15, 'Dewvog Madrasha', 1, 1, '2019-02-04 14:46:37', '2019-02-04 14:46:37'),
(43, 3, 'Boro Samsabad', 1, 1, '2019-02-12 06:23:09', '2019-02-12 06:26:25'),
(44, 3, 'Panaliya', 1, 2, '2019-02-12 06:23:34', '2019-02-12 06:23:34'),
(45, 3, 'Bowra Hati', 1, 3, '2019-02-12 06:23:48', '2019-02-12 06:23:48'),
(46, 3, 'Choto Samsabad', 1, 4, '2019-02-12 06:26:39', '2019-02-12 06:26:39'),
(47, 3, 'Kashimpur', 1, 5, '2019-02-12 06:27:13', '2019-02-12 06:27:13'),
(48, 3, 'Bagmara', 1, 6, '2019-02-12 06:27:24', '2019-02-12 06:27:24'),
(49, 3, 'Madhabpur', 1, 7, '2019-02-12 06:27:39', '2019-02-12 06:27:39'),
(50, 3, 'Boro Rajpara', 1, 8, '2019-02-12 06:27:54', '2019-02-12 06:27:54'),
(51, 3, 'Amirpur', 1, 9, '2019-02-12 06:28:09', '2019-02-12 06:28:09'),
(52, 142, 'Rupnagar Abashik', 1, 1, '2019-02-13 03:32:57', '2019-02-13 03:32:57'),
(53, 142, 'Eastern Housing', 1, 2, '2019-02-13 03:33:28', '2019-02-13 03:33:28'),
(54, 142, 'Dowaripara', 1, 3, '2019-02-13 03:33:51', '2019-02-13 03:33:51'),
(55, 142, 'Siyalbari', 1, 4, '2019-02-13 03:34:32', '2019-02-13 03:34:32'),
(56, 142, '3 Set', 1, 5, '2019-02-13 03:35:11', '2019-02-13 03:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_banks`
--
ALTER TABLE `blood_banks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blood_banks_name_unique` (`name`),
  ADD UNIQUE KEY `blood_banks_url_unique` (`url`);

--
-- Indexes for table `blood_donates`
--
ALTER TABLE `blood_donates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_donates_user_id_foreign` (`user_id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blood_groups_name_unique` (`name`);

--
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_requests_blood_group_id_foreign` (`blood_group_id`),
  ADD KEY `blood_requests_district_id_foreign` (`district_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_district_unique` (`district`);

--
-- Indexes for table `founder_members`
--
ALTER TABLE `founder_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `founder_members_blood_group_id_foreign` (`blood_group_id`);

--
-- Indexes for table `frontend_menus`
--
ALTER TABLE `frontend_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_sub_menus`
--
ALTER TABLE `frontend_sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frontend_sub_menus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_user_id_foreign` (`user_id`),
  ADD KEY `members_district_id_foreign` (`district_id`),
  ADD KEY `members_thana_upazila_id_foreign` (`thana_upazila_id`),
  ADD KEY `members_union_id_foreign` (`union_id`),
  ADD KEY `members_village_id_foreign` (`village_id`),
  ADD KEY `members_blood_group_id_foreign` (`blood_group_id`),
  ADD KEY `members_created_by_foreign` (`created_by`),
  ADD KEY `members_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notices_title_unique` (`title`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_title_unique` (`title`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_galleries_created_by_foreign` (`created_by`),
  ADD KEY `photo_galleries_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `president_speeches`
--
ALTER TABLE `president_speeches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `president_speeches_title_unique` (`title`);

--
-- Indexes for table `primary_info`
--
ALTER TABLE `primary_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menu_fk_menu_id_foreign` (`fk_menu_id`);

--
-- Indexes for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sub_menu_fk_menu_id_foreign` (`fk_menu_id`),
  ADD KEY `sub_sub_menu_fk_sub_menu_id_foreign` (`fk_sub_menu_id`);

--
-- Indexes for table `thana_upazilas`
--
ALTER TABLE `thana_upazilas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thana_upazilas_thana_upazila_unique` (`thana_upazila`),
  ADD KEY `thana_upazilas_district_id_foreign` (`district_id`);

--
-- Indexes for table `unions`
--
ALTER TABLE `unions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unions_union_unique` (`union`),
  ADD KEY `unions_thana_upazila_id_foreign` (`thana_upazila_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `villages_village_unique` (`village`),
  ADD KEY `villages_union_id_foreign` (`union_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_banks`
--
ALTER TABLE `blood_banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blood_donates`
--
ALTER TABLE `blood_donates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_requests`
--
ALTER TABLE `blood_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `founder_members`
--
ALTER TABLE `founder_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `frontend_menus`
--
ALTER TABLE `frontend_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `frontend_sub_menus`
--
ALTER TABLE `frontend_sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `president_speeches`
--
ALTER TABLE `president_speeches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `primary_info`
--
ALTER TABLE `primary_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thana_upazilas`
--
ALTER TABLE `thana_upazilas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `unions`
--
ALTER TABLE `unions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_donates`
--
ALTER TABLE `blood_donates`
  ADD CONSTRAINT `blood_donates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD CONSTRAINT `blood_requests_blood_group_id_foreign` FOREIGN KEY (`blood_group_id`) REFERENCES `blood_groups` (`id`),
  ADD CONSTRAINT `blood_requests_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

--
-- Constraints for table `founder_members`
--
ALTER TABLE `founder_members`
  ADD CONSTRAINT `founder_members_blood_group_id_foreign` FOREIGN KEY (`blood_group_id`) REFERENCES `blood_groups` (`id`);

--
-- Constraints for table `frontend_sub_menus`
--
ALTER TABLE `frontend_sub_menus`
  ADD CONSTRAINT `frontend_sub_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `frontend_menus` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_blood_group_id_foreign` FOREIGN KEY (`blood_group_id`) REFERENCES `blood_groups` (`id`),
  ADD CONSTRAINT `members_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `members_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `members_thana_upazila_id_foreign` FOREIGN KEY (`thana_upazila_id`) REFERENCES `thana_upazilas` (`id`),
  ADD CONSTRAINT `members_union_id_foreign` FOREIGN KEY (`union_id`) REFERENCES `unions` (`id`),
  ADD CONSTRAINT `members_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `members_village_id_foreign` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD CONSTRAINT `photo_galleries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `photo_galleries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_fk_menu_id_foreign` FOREIGN KEY (`fk_menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  ADD CONSTRAINT `sub_sub_menu_fk_menu_id_foreign` FOREIGN KEY (`fk_menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `sub_sub_menu_fk_sub_menu_id_foreign` FOREIGN KEY (`fk_sub_menu_id`) REFERENCES `sub_menu` (`id`);

--
-- Constraints for table `thana_upazilas`
--
ALTER TABLE `thana_upazilas`
  ADD CONSTRAINT `thana_upazilas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

--
-- Constraints for table `unions`
--
ALTER TABLE `unions`
  ADD CONSTRAINT `unions_thana_upazila_id_foreign` FOREIGN KEY (`thana_upazila_id`) REFERENCES `thana_upazilas` (`id`);

--
-- Constraints for table `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_union_id_foreign` FOREIGN KEY (`union_id`) REFERENCES `unions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
