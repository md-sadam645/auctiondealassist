-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 09:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_type` varchar(191) NOT NULL,
  `bank_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_type`, `bank_name`, `created_at`, `updated_at`) VALUES
(1, 'liquidation', 'Uco Bank', '2023-09-22 10:28:50', '2023-10-03 12:09:40'),
(2, 'private', 'Bank Of Baroda', '2023-09-22 10:29:00', '2023-09-22 10:29:00'),
(3, 'government', 'HDFC Bank', '2023-09-22 10:30:16', '2023-10-03 12:08:53'),
(5, 'private', 'Canara Bank', '2023-10-03 08:11:05', '2023-10-03 08:11:05'),
(6, 'private', 'state bank of india', '2023-10-03 12:03:39', '2023-10-03 12:03:39'),
(7, 'private', 'SBI Bank', '2023-10-03 12:07:28', '2023-10-03 12:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) NOT NULL,
  `state_id` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fname`, `lname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'md sadam', 'rain', 'kaalam641@gmail.com', 'ggg', '2023-09-29 11:56:03', '2023-09-29 11:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(34, 'default', '{\"uuid\":\"ca81bf22-44f4-404a-86c8-f1df48a5980e\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:03:42\\\";}\"}}', 0, NULL, 1697718825, 1697718825),
(35, 'default', '{\"uuid\":\"63e2de6e-7510-4729-b0fc-7ae825e83900\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:04:03\\\";}\"}}', 0, NULL, 1697718843, 1697718843),
(36, 'default', '{\"uuid\":\"08855ce3-8329-4bd5-96ce-153817f45518\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:04:24\\\";}\"}}', 0, NULL, 1697718864, 1697718864),
(37, 'default', '{\"uuid\":\"6a2b7e45-a24d-44fe-9aa8-72477d860344\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:04:25\\\";}\"}}', 0, NULL, 1697718865, 1697718865),
(38, 'default', '{\"uuid\":\"5397eb80-e49b-4602-bede-cfa7992c60f7\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:04:29\\\";}\"}}', 0, NULL, 1697718869, 1697718869),
(39, 'default', '{\"uuid\":\"9b55edb0-2e16-490b-949b-38974fddeec6\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:04:37\\\";}\"}}', 0, NULL, 1697718877, 1697718877),
(40, 'default', '{\"uuid\":\"f760b950-d412-4395-8c12-169ca12566e1\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:04:38\\\";}\"}}', 0, NULL, 1697718878, 1697718878),
(41, 'default', '{\"uuid\":\"d8939925-c574-4f26-a090-e1603d8aa729\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:2:{i:0;i:9460;i:1;i:9463;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:05:00\\\";}\"}}', 0, NULL, 1697718900, 1697718900),
(42, 'default', '{\"uuid\":\"ceb96662-0db3-48f8-9036-44a19b39bd11\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9460;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:13:31\\\";}\"}}', 0, NULL, 1697719411, 1697719411),
(43, 'default', '{\"uuid\":\"e6e8ed3e-a03e-4115-930c-615ee7e662a6\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9460;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:13:50\\\";}\"}}', 0, NULL, 1697719430, 1697719430),
(44, 'default', '{\"uuid\":\"6146b46c-01ea-48b7-83c4-a5de4615e9cc\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9460;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:13:51\\\";}\"}}', 0, NULL, 1697719431, 1697719431),
(45, 'default', '{\"uuid\":\"f2d7cf84-fd15-4397-ab76-d06ae15838b3\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9460;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:14:20\\\";}\"}}', 0, NULL, 1697719460, 1697719460),
(46, 'default', '{\"uuid\":\"ea2c627e-bbec-4794-8a7a-84a7a6832972\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:14:41\\\";}\"}}', 0, NULL, 1697719481, 1697719481),
(47, 'default', '{\"uuid\":\"8580307f-7bcb-4d46-8240-adf92c0ef8b2\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:14:49\\\";}\"}}', 0, NULL, 1697719489, 1697719489),
(48, 'default', '{\"uuid\":\"db9cc97d-08c6-4116-8169-6b48c5651a54\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:14:51\\\";}\"}}', 0, NULL, 1697719491, 1697719491),
(49, 'default', '{\"uuid\":\"190e566b-bcec-4617-9a61-3eda18a5db6a\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9466;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:15:18\\\";}\"}}', 0, NULL, 1697719518, 1697719518),
(50, 'default', '{\"uuid\":\"05a949f0-b0a9-4c6b-ace6-f7b142a2be20\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9466;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:15:20\\\";}\"}}', 0, NULL, 1697719520, 1697719520),
(51, 'default', '{\"uuid\":\"c592484e-6944-41ad-aa9b-a64d3afb28e9\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9466;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:15:24\\\";}\"}}', 0, NULL, 1697719524, 1697719524),
(52, 'default', '{\"uuid\":\"8fcc813d-d20c-418c-994b-b759c2701425\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:15:29\\\";}\"}}', 0, NULL, 1697719529, 1697719529),
(53, 'default', '{\"uuid\":\"170eaa2c-a966-4bc2-831c-d18737fe945c\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:19:31\\\";}\"}}', 0, NULL, 1697719772, 1697719772),
(54, 'default', '{\"uuid\":\"d79820ad-6d43-4a8b-ba10-76f5b99f4b05\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:19:33\\\";}\"}}', 0, NULL, 1697719773, 1697719773),
(55, 'default', '{\"uuid\":\"4ce3b45e-f448-4df6-9b40-cb54978fda71\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:23:\\\"App\\\\Models\\\\PropertyList\\\";s:2:\\\"id\\\";a:1:{i:0;i:9467;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:20:20\\\";}\"}}', 0, NULL, 1697719821, 1697719821),
(56, 'default', '{\"uuid\":\"87594774-e8a1-4eb8-a861-9b2bbd724ddc\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:20:23\\\";}\"}}', 0, NULL, 1697719823, 1697719823),
(57, 'default', '{\"uuid\":\"9e9b1df7-5bcc-48fe-b4d6-61dcce6d5d0a\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:20:25\\\";}\"}}', 0, NULL, 1697719825, 1697719825),
(58, 'default', '{\"uuid\":\"9b6374be-df37-4e04-ad77-c67125bd9da4\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-19 18:20:28\\\";}\"}}', 0, NULL, 1697719828, 1697719828),
(59, 'default', '{\"uuid\":\"cd0b4739-f606-4659-83e1-80f38c6b1310\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 10:58:23\\\";}\"}}', 0, NULL, 1698298104, 1698298104),
(60, 'default', '{\"uuid\":\"723c6b2b-cc25-456b-ace8-ba748c7c5d51\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 10:59:57\\\";}\"}}', 0, NULL, 1698298197, 1698298197),
(61, 'default', '{\"uuid\":\"532b6fb9-ac00-46d9-a1d4-a449c7cae9b8\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:00:37\\\";}\"}}', 0, NULL, 1698298237, 1698298237),
(62, 'default', '{\"uuid\":\"4ef68048-c7cc-4394-809b-56769e4423e8\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:01:06\\\";}\"}}', 0, NULL, 1698298266, 1698298266),
(63, 'default', '{\"uuid\":\"75d6ad32-c868-408b-8d13-9dbd486b17b4\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:01:16\\\";}\"}}', 0, NULL, 1698298276, 1698298276),
(64, 'default', '{\"uuid\":\"8f9ca7dd-5f77-42c4-b060-5b9fdbdb368c\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:01:45\\\";}\"}}', 0, NULL, 1698298305, 1698298305),
(65, 'default', '{\"uuid\":\"b341d43f-b92f-4267-82fb-3b486df1aa5f\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:01:58\\\";}\"}}', 0, NULL, 1698298318, 1698298318),
(66, 'default', '{\"uuid\":\"a54b0349-1173-44bf-a46e-c10c0cb14b6e\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:02:21\\\";}\"}}', 0, NULL, 1698298341, 1698298341),
(67, 'default', '{\"uuid\":\"2c55188e-0da9-4067-b124-0beffeb807fa\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:02:33\\\";}\"}}', 0, NULL, 1698298353, 1698298353),
(68, 'default', '{\"uuid\":\"88d847fa-982a-45df-ba11-a40b2f9098d7\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:02:41\\\";}\"}}', 0, NULL, 1698298361, 1698298361),
(69, 'default', '{\"uuid\":\"00f862c0-d306-490b-8cc7-19571e777a60\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:02:53\\\";}\"}}', 0, NULL, 1698298373, 1698298373),
(70, 'default', '{\"uuid\":\"0370e598-094f-48ce-8e82-cba4331eb391\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:03:07\\\";}\"}}', 0, NULL, 1698298387, 1698298387),
(71, 'default', '{\"uuid\":\"65d62787-7812-4109-b221-baf3b89b873d\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:03:22\\\";}\"}}', 0, NULL, 1698298402, 1698298402),
(72, 'default', '{\"uuid\":\"60b786e2-9a6c-4ec5-9d79-6ecb1b6e8c50\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:03:31\\\";}\"}}', 0, NULL, 1698298411, 1698298411),
(73, 'default', '{\"uuid\":\"5616c637-7188-4c25-90a3-32ab662c7cd5\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:03:51\\\";}\"}}', 0, NULL, 1698298431, 1698298431),
(74, 'default', '{\"uuid\":\"64d2c900-697a-4272-b73e-39d3a29ce786\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:04:43\\\";}\"}}', 0, NULL, 1698298483, 1698298483),
(75, 'default', '{\"uuid\":\"9b6444c5-fa07-4ab5-8687-e8e5e5ce7142\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:05:09\\\";}\"}}', 0, NULL, 1698298509, 1698298509),
(76, 'default', '{\"uuid\":\"10ebbea6-8961-4bff-84d9-ee9fc749d62b\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:05:17\\\";}\"}}', 0, NULL, 1698298517, 1698298517),
(77, 'default', '{\"uuid\":\"7d024b84-3222-427b-a16f-62b867110d74\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:05:26\\\";}\"}}', 0, NULL, 1698298526, 1698298526),
(78, 'default', '{\"uuid\":\"28f29713-c892-4d65-8993-ac181c27acdb\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:05:46\\\";}\"}}', 0, NULL, 1698298546, 1698298546),
(79, 'default', '{\"uuid\":\"458bffaa-2f3f-4c07-bd9f-fc9f33031a92\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:05:56\\\";}\"}}', 0, NULL, 1698298556, 1698298556),
(80, 'default', '{\"uuid\":\"0f896873-7860-4720-a45a-10edbc54b91b\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:07:04\\\";}\"}}', 0, NULL, 1698298624, 1698298624),
(81, 'default', '{\"uuid\":\"4897e457-0390-43d9-9930-88b979f853ee\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:07:14\\\";}\"}}', 0, NULL, 1698298634, 1698298634),
(82, 'default', '{\"uuid\":\"f3b7320a-386a-429a-afc6-d6b1bf86730d\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:07:26\\\";}\"}}', 0, NULL, 1698298646, 1698298646),
(83, 'default', '{\"uuid\":\"0cb8a39a-31b5-460b-88de-cccf345f1aed\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:07:38\\\";}\"}}', 0, NULL, 1698298658, 1698298658),
(84, 'default', '{\"uuid\":\"adee4de0-8cdb-424c-82d1-0241d886906c\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:07:46\\\";}\"}}', 0, NULL, 1698298666, 1698298666),
(85, 'default', '{\"uuid\":\"18311c34-67b8-445c-b687-f6cbe4a9aa0c\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:08:07\\\";}\"}}', 0, NULL, 1698298687, 1698298687),
(86, 'default', '{\"uuid\":\"26954486-220d-408b-a740-4d6441f7447f\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:08:47\\\";}\"}}', 0, NULL, 1698298727, 1698298727),
(87, 'default', '{\"uuid\":\"60a23f74-a9d9-4bf9-be84-08983050b3de\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:09:21\\\";}\"}}', 0, NULL, 1698298761, 1698298761),
(88, 'default', '{\"uuid\":\"053b033f-336a-4179-bb71-a1675eee0eba\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:11:05\\\";}\"}}', 0, NULL, 1698298865, 1698298865),
(89, 'default', '{\"uuid\":\"3b8f2992-84fe-4ba7-bfcd-b02142ac9ba8\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:11:09\\\";}\"}}', 0, NULL, 1698298869, 1698298869),
(90, 'default', '{\"uuid\":\"3ef0928e-2441-4e88-bab5-899a309a2729\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:11:33\\\";}\"}}', 0, NULL, 1698298894, 1698298894),
(91, 'default', '{\"uuid\":\"1cbb35ac-f2af-43b0-93c4-8500328ced4c\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:11:54\\\";}\"}}', 0, NULL, 1698298914, 1698298914),
(92, 'default', '{\"uuid\":\"890789a9-89cc-4736-bc84-967fe56a71a1\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:12:20\\\";}\"}}', 0, NULL, 1698298940, 1698298940),
(93, 'default', '{\"uuid\":\"953e6c1b-e1d4-44c6-ad65-0c50ba0a4850\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:13:13\\\";}\"}}', 0, NULL, 1698298993, 1698298993),
(94, 'default', '{\"uuid\":\"393f8c83-f6b2-4446-ada7-cfe1f1937bfc\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:13:19\\\";}\"}}', 0, NULL, 1698298999, 1698298999),
(95, 'default', '{\"uuid\":\"377441cd-9455-4c8a-a26c-2c08ca667215\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:15:37\\\";}\"}}', 0, NULL, 1698299137, 1698299137),
(96, 'default', '{\"uuid\":\"d20c5416-d7a5-4e26-b4c2-4be9a858feb5\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:15:52\\\";}\"}}', 0, NULL, 1698299152, 1698299152),
(97, 'default', '{\"uuid\":\"65c43421-98fb-4691-adc4-0b8fb4c70893\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:16:36\\\";}\"}}', 0, NULL, 1698299196, 1698299196),
(98, 'default', '{\"uuid\":\"6132c694-9350-4bf4-9c57-d05a816d1261\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:20:40\\\";}\"}}', 0, NULL, 1698299440, 1698299440),
(99, 'default', '{\"uuid\":\"bc56a7ec-eb1f-4ec1-b588-259dd178b0df\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:20:59\\\";}\"}}', 0, NULL, 1698299459, 1698299459),
(100, 'default', '{\"uuid\":\"6f549cb6-55de-41ec-9bc3-b51ecda1b33e\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:21:04\\\";}\"}}', 0, NULL, 1698299464, 1698299464);
INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(101, 'default', '{\"uuid\":\"fb9f11ec-3888-48bd-a13a-556b4a98b8ec\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:21:08\\\";}\"}}', 0, NULL, 1698299468, 1698299468),
(102, 'default', '{\"uuid\":\"1d41c9d5-ece2-4401-a7f6-7d122baaa4a9\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:21:40\\\";}\"}}', 0, NULL, 1698299501, 1698299501),
(103, 'default', '{\"uuid\":\"1adb3966-460f-4282-be49-c5fed9416e60\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:21:52\\\";}\"}}', 0, NULL, 1698299512, 1698299512),
(104, 'default', '{\"uuid\":\"1c332d5d-1bf8-417c-98e1-7278414a090f\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:23:25\\\";}\"}}', 0, NULL, 1698299605, 1698299605),
(105, 'default', '{\"uuid\":\"5f869d32-f85b-4523-8882-2f3c52ad4265\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:23:35\\\";}\"}}', 0, NULL, 1698299615, 1698299615),
(106, 'default', '{\"uuid\":\"6b114f58-3ced-48c3-8737-97194b639e77\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:23:49\\\";}\"}}', 0, NULL, 1698299629, 1698299629),
(107, 'default', '{\"uuid\":\"2f72e86b-87d9-4613-8d57-6a1007606b9a\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:27:46\\\";}\"}}', 0, NULL, 1698299866, 1698299866),
(108, 'default', '{\"uuid\":\"02c93686-9050-4da8-8c88-d7748f55db24\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:28:12\\\";}\"}}', 0, NULL, 1698299892, 1698299892),
(109, 'default', '{\"uuid\":\"41803125-2fa8-44c5-b159-7df3708757d3\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 11:29:07\\\";}\"}}', 0, NULL, 1698299947, 1698299947),
(110, 'default', '{\"uuid\":\"bd5650aa-fc0c-4776-a097-d9f09644c28d\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:03:47\\\";}\"}}', 0, NULL, 1698302027, 1698302027),
(111, 'default', '{\"uuid\":\"da20bf9b-4113-431e-a70d-3b2d28122637\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:03:49\\\";}\"}}', 0, NULL, 1698302029, 1698302029),
(112, 'default', '{\"uuid\":\"cc8d6d86-7cc5-4100-8f12-20b2371f736a\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:08:43\\\";}\"}}', 0, NULL, 1698302323, 1698302323),
(113, 'default', '{\"uuid\":\"b38ef9f1-dd0b-4cb9-ae58-c965dae0a82f\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:08:44\\\";}\"}}', 0, NULL, 1698302324, 1698302324),
(114, 'default', '{\"uuid\":\"b22204d5-d97c-4721-9468-1bccb282f65e\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:25\\\";}\"}}', 0, NULL, 1698302425, 1698302425),
(115, 'default', '{\"uuid\":\"83501603-4201-4c60-887f-fe9dc4b3ec36\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:26\\\";}\"}}', 0, NULL, 1698302426, 1698302426),
(116, 'default', '{\"uuid\":\"4fcaf3a6-0973-4278-b6e8-974ca98f7438\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:34\\\";}\"}}', 0, NULL, 1698302434, 1698302434),
(117, 'default', '{\"uuid\":\"fa2267f5-4963-4981-afa5-8f182f964845\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:37\\\";}\"}}', 0, NULL, 1698302437, 1698302437),
(118, 'default', '{\"uuid\":\"3a4e4417-c750-4e6e-b924-ba9faee74bbf\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:38\\\";}\"}}', 0, NULL, 1698302438, 1698302438),
(119, 'default', '{\"uuid\":\"d9c8ef98-728e-4717-ac7a-5d58aefd0e42\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:52\\\";}\"}}', 0, NULL, 1698302452, 1698302452),
(120, 'default', '{\"uuid\":\"1323e77a-29a8-463f-8bff-f9fba3b15fe6\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:10:53\\\";}\"}}', 0, NULL, 1698302453, 1698302453),
(121, 'default', '{\"uuid\":\"b5249801-e34e-4b0e-8960-5a730a506e3c\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:13:59\\\";}\"}}', 0, NULL, 1698302639, 1698302639),
(122, 'default', '{\"uuid\":\"1e3a7336-d228-4266-9a6e-a98ea3ad6add\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:14:00\\\";}\"}}', 0, NULL, 1698302640, 1698302640),
(123, 'default', '{\"uuid\":\"9cf10a77-34ec-4de5-bbc5-d8130c3c32e1\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:14:12\\\";}\"}}', 0, NULL, 1698302652, 1698302652),
(124, 'default', '{\"uuid\":\"b6b5af78-1d80-4e26-a73b-f729554a5f51\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:14:14\\\";}\"}}', 0, NULL, 1698302654, 1698302654),
(125, 'default', '{\"uuid\":\"acd8bb45-fd64-4742-9020-a1a7c3a7d2bc\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:14:18\\\";}\"}}', 0, NULL, 1698302658, 1698302658),
(126, 'default', '{\"uuid\":\"947780e9-1bcc-430e-a448-510449abafed\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:19:14\\\";}\"}}', 0, NULL, 1698302954, 1698302954),
(127, 'default', '{\"uuid\":\"afd0e3c8-ef00-44bb-8601-e59336256152\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:20:57\\\";}\"}}', 0, NULL, 1698303057, 1698303057),
(128, 'default', '{\"uuid\":\"8a40ee16-f916-4cff-8f96-3c99e3d55cec\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:21:00\\\";}\"}}', 0, NULL, 1698303060, 1698303060),
(129, 'default', '{\"uuid\":\"2243ea39-ac3c-47a7-8dc9-bf1a6887c565\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:21:23\\\";}\"}}', 0, NULL, 1698303083, 1698303083),
(130, 'default', '{\"uuid\":\"76911fc0-d556-4e1c-abf9-33ce6dc00720\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:25:12\\\";}\"}}', 0, NULL, 1698303312, 1698303312),
(131, 'default', '{\"uuid\":\"7a2419b4-04dc-4bc0-8f12-62f4bb1248df\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:27:06\\\";}\"}}', 0, NULL, 1698303426, 1698303426),
(132, 'default', '{\"uuid\":\"9e274eba-39cd-429f-b3cf-93f6f32fb552\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:27:22\\\";}\"}}', 0, NULL, 1698303442, 1698303442),
(133, 'default', '{\"uuid\":\"45cec232-5feb-47ae-b9c1-17fd4a14f207\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:28:13\\\";}\"}}', 0, NULL, 1698303493, 1698303493),
(134, 'default', '{\"uuid\":\"81acdf9a-d609-4619-9718-0fc0ce8de6e4\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:29:31\\\";}\"}}', 0, NULL, 1698303571, 1698303571),
(135, 'default', '{\"uuid\":\"139145b6-f3a0-4013-8df3-e6e42ad2ca13\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:30:08\\\";}\"}}', 0, NULL, 1698303608, 1698303608),
(136, 'default', '{\"uuid\":\"70e2901b-3b40-44e2-bd23-459345feb5b6\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:31:43\\\";}\"}}', 0, NULL, 1698303703, 1698303703),
(137, 'default', '{\"uuid\":\"65c22c6a-5126-4739-b29c-5f53345e4bd1\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:34:52\\\";}\"}}', 0, NULL, 1698303892, 1698303892),
(138, 'default', '{\"uuid\":\"f185bf9d-3270-481c-ba08-b3ceea93e9fe\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:35:46\\\";}\"}}', 0, NULL, 1698303946, 1698303946),
(139, 'default', '{\"uuid\":\"2d380ae0-0edf-49e5-8011-165fd7793383\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:35:49\\\";}\"}}', 0, NULL, 1698303949, 1698303949),
(140, 'default', '{\"uuid\":\"fa4bf5dc-d8d5-49fd-8b1c-a7e1e359658a\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:37:04\\\";}\"}}', 0, NULL, 1698304024, 1698304024),
(141, 'default', '{\"uuid\":\"7b31a72d-c7a6-4650-8c9f-429acf56c821\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:37:06\\\";}\"}}', 0, NULL, 1698304026, 1698304026),
(142, 'default', '{\"uuid\":\"d3d641bd-63d9-42d7-8890-3c6c289ec724\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:44:54\\\";}\"}}', 0, NULL, 1698304494, 1698304494),
(143, 'default', '{\"uuid\":\"7be98025-99d6-440d-a9e8-0c074f56f466\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:46:12\\\";}\"}}', 0, NULL, 1698304572, 1698304572),
(144, 'default', '{\"uuid\":\"02e284af-22ba-420f-8ab7-9a51e29a9ff9\",\"displayName\":\"App\\\\Jobs\\\\PropertyDelete\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\PropertyDelete\",\"command\":\"O:23:\\\"App\\\\Jobs\\\\PropertyDelete\\\":2:{s:8:\\\"property\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";N;s:2:\\\"id\\\";a:0:{}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;s:15:\\\"collectionClass\\\";N;}s:5:\\\"cTime\\\";s:19:\\\"2023-10-26 12:46:30\\\";}\"}}', 0, NULL, 1698304590, 1698304590);

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `full_name`, `city`, `state`, `contact`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'md sadam rain', 'bhopal', 'Madhya Pradesh', 1234567889, 'kaalam641@gmail.com', 'xdcfvgbhn', '2023-09-29 12:04:22', '2023-09-29 12:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_13_055319_create_subscriptions_table', 1),
(7, '2023_07_15_124756_create_settings_table', 1),
(8, '2023_07_25_091134_create_states_table', 1),
(9, '2023_07_25_091155_create_cities_table', 1),
(10, '2023_07_28_062117_create_join_us_table', 1),
(11, '2023_07_29_080638_create_banks_table', 1),
(12, '2023_08_28_055838_create_payment_details_table', 1),
(13, '2023_08_28_165756_create_purchased_subscriptions_table', 1),
(14, '2023_08_28_181720_create_viewed_properties_table', 1),
(15, '2023_09_11_170951_create_contact_us_table', 1),
(16, '2023_09_11_171024_create_request_inquiries_table', 1),
(17, '2023_09_15_183858_create_subscribers_table', 1),
(18, '2023_09_18_124450_create_articles_table', 1),
(19, '2023_09_19_125630_update_users_table_to_include_type', 1),
(20, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(21, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(22, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(23, '2016_06_01_000004_create_oauth_clients_table', 3),
(24, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4),
(25, '2023_10_18_111811_create_jobs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
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

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0c9c6bab061cc5851aa653cc5d6e4d4f463475a466287fda0bc6af26044f286bf4566d7bd044c0d7', 18, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 09:52:19', '2023-09-21 09:52:19', '2024-09-21 15:22:19'),
('13e05a2563391fdef4ddaa5866ad9dda8c65275bb55573a3f7c911fbdc4fcee41d3c2509a6831507', 19, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-27 07:07:48', '2023-09-27 07:07:48', '2024-09-27 12:37:48'),
('1d64ca31ea4058ad2fc7ae0295d5465b64cdfe7fa7b9f7bbafbb1faceda84e176274e84ca5f98db7', 16, 3, 'auth_token', '[]', 0, '2023-09-21 08:16:52', '2023-09-21 08:16:52', '2024-09-21 13:46:52'),
('29ddc0f6bb4a54873d2f84068729b8d927efa7f3913d98cf3750b2c8830196a822a48b45a4fe046a', 12, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 07:50:03', '2023-09-21 07:50:03', '2024-09-21 13:20:03'),
('2da9ba18c769820b91afb913a59b6c3f743bda4355eac1eb21e4da2704e9cfcbcfb975ec8ba1bc72', 16, 3, 'auth_token', '[]', 0, '2023-09-21 08:30:33', '2023-09-21 08:30:33', '2024-09-21 14:00:33'),
('3004ad612af806beca00942fa5379ec3a4910b821844f2f425a09c36ecd018f69d5d24e8e3712705', 7, 3, 'auth_token', '[]', 0, '2023-09-21 08:30:43', '2023-09-21 08:30:43', '2024-09-21 14:00:43'),
('60c790d27c48788afb40072b0ef262a5be63d2dbd6f1ea191bd6ae553ec594d5d8b5ed784613e3b1', 7, 3, 'auth_token', '[]', 0, '2023-09-21 09:31:05', '2023-09-21 09:31:05', '2024-09-21 15:01:05'),
('638939dffa7c60621ac18585c25035235f7d77fc20ef4cf3f3ec27d2125b4c8328d938a45722176b', 7, 3, 'auth_token', '[]', 0, '2023-09-21 08:17:25', '2023-09-21 08:17:25', '2024-09-21 13:47:25'),
('6b21f9e63429fa4a9aa3f3c6deb3755e6e7c2639efa9d85d524119199638b4f9921665690280099c', 16, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 08:12:02', '2023-09-21 08:12:02', '2024-09-21 13:42:02'),
('9a73b0a40ffa5532412afe69607a8347f033bc02cd35494e80b5cf02697c9ae50bc137555c4d1d96', 11, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 07:49:28', '2023-09-21 07:49:28', '2024-09-21 13:19:28'),
('b315c3dd688726e7d68cf30ec4558e48ab581e001e61901cd722716da97041e143d12b499d86cd0f', 16, 3, 'auth_token', '[]', 0, '2023-09-21 09:33:54', '2023-09-21 09:33:54', '2024-09-21 15:03:54'),
('b682e92b68e0b392e517f14d9eee44d0c4db882caf3dd88c0d765ff2fada9d97b3b7eebb138d3c65', 19, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-27 07:08:29', '2023-09-27 07:08:29', '2024-09-27 12:38:29'),
('cd66988ee9c895b88e5c6d0be89494660800a74819242c990ba9b260460947a9c9f6b03a31c17984', 14, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 07:54:14', '2023-09-21 07:54:14', '2024-09-21 13:24:14'),
('d024c7b41d55a063d1f261e0a4fa22179867a71902ed4e6f4f2c6f035a012d70b8c7188cbbbffcce', 19, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-27 06:49:07', '2023-09-27 06:49:07', '2024-09-27 12:19:07'),
('d3ea629290a8054113edbd8b1f2353c08d5bc6c3486c53df042e5ce76a4859eef87e724a0ec90aeb', 13, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 07:50:43', '2023-09-21 07:50:43', '2024-09-21 13:20:43'),
('db0213b4a2232617653608ad4829b8b29cde53a453522129182e6f89821f539149fea53312cdd310', 17, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 09:41:17', '2023-09-21 09:41:17', '2024-09-21 15:11:17'),
('dee099a9021d1620bccf889cf20a323ff11aa6e31a923b11587a7de360200ad9e28ef9ca0fb9adbe', 16, 3, 'auth_token', '[]', 0, '2023-09-21 08:18:00', '2023-09-21 08:18:00', '2024-09-21 13:48:00'),
('df1defdffd49ccb97b3654bb7611f208f7fb879b18cc94d05c6e7da0254ef4de5b0e5e7b080d1635', 19, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-27 06:29:25', '2023-09-27 06:29:25', '2024-09-27 11:59:25'),
('e352b766237904eeb647614936dbbfe7c62afaa21742afaa339b3f7f0296bbb2a00200557f0a9397', 15, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 08:01:49', '2023-09-21 08:01:49', '2024-09-21 13:31:49'),
('ed52cc526bd0ed11bfaf9fd4ba3b4c3266ad5bc2cd1cb5f1aabff8d0c44a6200d3823ef674a78b0a', 19, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-27 06:14:11', '2023-09-27 06:14:11', '2024-09-27 11:44:11'),
('f1b178e9a2cddb505b6d7cd7ff91cc3e89cea2e47ee3375a7f10afd5186a26216a62a73719284590', 10, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-21 07:44:04', '2023-09-21 07:44:04', '2024-09-21 13:14:04'),
('fed5e9336c6b1bc3aba2ac8e2cf252971bd0c681fd11f80267855c0814f60db4551d97cb0bedd1ef', 19, 3, 'Laravel Password Grant Client', '[]', 0, '2023-09-27 07:08:09', '2023-09-27 07:08:09', '2024-09-27 12:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
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
-- Table structure for table `oauth_clients`
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
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_lists`
--

CREATE TABLE `property_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name_and_address` mediumtext DEFAULT NULL,
  `borrower_name` mediumtext DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `property_details` mediumtext DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `possession` varchar(255) DEFAULT NULL,
  `locality` mediumtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `reserve_price` bigint(255) DEFAULT NULL,
  `emd_amount` varchar(20) DEFAULT NULL,
  `bid_increment` varchar(50) DEFAULT NULL,
  `inspection_date` varchar(255) DEFAULT NULL,
  `emd_submission` varchar(255) DEFAULT NULL,
  `auction_start` varchar(255) NOT NULL,
  `auction_end` varchar(255) NOT NULL,
  `authorized_officer` varchar(255) DEFAULT NULL,
  `auction_portal` varchar(255) DEFAULT NULL,
  `add_by` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sale_notice` varchar(255) DEFAULT NULL,
  `add_more_sale_notice` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchased_subscriptions`
--

CREATE TABLE `purchased_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `current_plan` varchar(191) NOT NULL,
  `plan_price` double(8,2) NOT NULL,
  `duration` varchar(191) NOT NULL,
  `purchased_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `remaining_days` int(11) DEFAULT NULL,
  `buyer_name` varchar(191) NOT NULL,
  `buyer_email` varchar(191) NOT NULL,
  `buyer_mobile` bigint(20) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_request_id` varchar(255) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '0' COMMENT '0= rejected 1= active; 2= expired; 3=pending;',
  `user_id` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchased_subscriptions`
--

INSERT INTO `purchased_subscriptions` (`id`, `current_plan`, `plan_price`, `duration`, `purchased_date`, `expiry_date`, `remaining_days`, `buyer_name`, `buyer_email`, `buyer_mobile`, `payment_id`, `payment_status`, `payment_request_id`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3 months subscription', 3000.00, '3 Months', '2023-09-25 16:57:50', '2023-12-24 16:57:51', 58, 'sadam aalam', 'kaalam641@gmail.com', 7869948102, 'MOJO3925J05A24630488', 'Credit', '9fb548d9fa3e4cde9564be2ab299a489', '1', '2', '2023-09-25 11:27:51', '2023-10-26 07:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `request_inquiries`
--

CREATE TABLE `request_inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` mediumtext NOT NULL,
  `add_by_id` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_inquiries`
--

INSERT INTO `request_inquiries` (`id`, `full_name`, `mobile`, `email`, `message`, `add_by_id`, `created_at`, `updated_at`) VALUES
(1, 'rahul roy', '1234567890', 'rahul@gmail.com', 'hello', '1', '2023-09-27 13:04:26', '2023-09-27 13:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) NOT NULL,
  `option_value` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
(1, 'notice', '<p><strong>welcome</strong> to the <a href=\"https://auctiondealassist.com/\">auction deal assist</a>&nbsp; |&nbsp; we are providing lot&#39;s of property</p>', '2023-10-26 06:51:23', '2023-10-26 07:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'kaalam641@gmail.com', '2023-09-29 12:04:50', '2023-09-29 12:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(191) NOT NULL,
  `price` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `archives` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `plan_name`, `price`, `duration`, `archives`, `created_at`, `updated_at`) VALUES
(1, '3 months subscription', 3000, 3, '6 months of archives', '2023-09-20 07:54:39', '2023-09-29 11:32:26'),
(2, '6 months subscription', 5000, 6, '1 year of archives', '2023-09-23 09:05:56', '2023-09-23 09:05:56'),
(4, '12 months subscription', 10000, 12, 'unlimited years of archives', '2023-09-23 09:09:20', '2023-09-23 09:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `otp` varchar(191) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `address` varchar(191) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `profile_img` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `email_verified_at`, `password`, `mobile`, `otp`, `role`, `address`, `status`, `profile_img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'j7qZxNFwln', 'admin@gmail.com', NULL, '$2y$10$cNq8EAdID7P.hLB.bI9bCudrnzWdrb35rB3e5YGZDqMcYtgqn02PO', 1234567890, NULL, 1, 'GA8fmw0X5U', 1, NULL, NULL, NULL, NULL),
(2, 'sadam aalam', 'kaalam641@gmail.com', NULL, '$2y$10$15H7DQLhFWQN7jeS61pnS.X.RtSVfY0xBBtcjIdpeSONuiypzx9xC', 7869948102, NULL, 3, 'ashoka garden', 1, NULL, NULL, '2023-09-20 07:50:12', '2023-09-23 07:24:32'),
(3, 'abc', 'ss@gmail.com', NULL, '$2y$10$VnCj91y6IYBm81yo37vzfOizZOGE9hzAZF.pMbUcJRIIhew4WANvC', NULL, NULL, 1, NULL, 1, NULL, NULL, '2023-09-20 19:03:49', '2023-09-20 19:03:49'),
(4, 'abc', 'ssd@gmail.com', NULL, '$2y$10$Gqk9iUxkQTzQ.Re7zKETDub0N1A6XTedGUHxrZe3RfWQOxxe4dwlS', NULL, NULL, 1, NULL, 1, NULL, NULL, '2023-09-20 19:06:05', '2023-09-20 19:06:05'),
(5, 'abc', 'sssd@gmail.com', NULL, '$2y$10$aJd4WluTpHn7LUrkS1F7heOAYDCw510rDPl2DO2C5co.fX.kyQUGC', NULL, NULL, 1, NULL, 1, NULL, NULL, '2023-09-21 05:26:42', '2023-09-21 05:26:42'),
(6, 'abc', 'sssdd@gmail.com', NULL, '$2y$10$ZpLjXp7teJtckCy6SyoiKue8B/lVxapvP.SxVmULiaW/UyQuKk586', NULL, NULL, 1, NULL, 1, NULL, NULL, '2023-09-21 05:32:55', '2023-09-21 05:32:55'),
(7, 'abc', 'abc@gmail.com', NULL, '$2y$10$NVUO8iZMegdfFg/Xg6MbBOLuC6BymsCV/GAnCnl3xMgL8TNnKy.C6', NULL, NULL, 1, NULL, 1, NULL, NULL, '2023-09-21 05:34:40', '2023-09-21 05:34:40'),
(8, 'abc', 'abdc@gmail.com', NULL, '$2y$10$Ii5sYkacyBfaRqaK.vQBXOeQKOC/clvwPmoZWdMoTGHxP3DVAOU0S', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:24:59', '2023-09-21 07:24:59'),
(9, 'abc', 'ddds@gmail.com', NULL, '$2y$10$YhBqQSVrBGUqq4Qlxv1nC.9RAmKdmoBu/LLnExMIHUKde.E4YgsHy', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:38:43', '2023-09-21 07:38:43'),
(10, 'abc', 'ddsaa@gmail.com', NULL, '$2y$10$IfjXKzF5nvIrTQQDJ5o/.uOSvsqefHzImSygWSNSuUVczRLIfYQ8e', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:44:04', '2023-09-21 07:44:04'),
(11, 'abc', 'dddsaa@gmail.com', NULL, '$2y$10$sik.72Na7nMQKsXv4.uaIuZzF4f1Rap3EJGC6cTw10.UWgxjvm8Cu', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:49:28', '2023-09-21 07:49:28'),
(12, 'abc', 'ddddsaa@gmail.com', NULL, '$2y$10$.nxA/QawcpQpxCOkINtMfuarMu/FxrXY/Xsp7eWq0rZfbGzWvIYl6', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:50:03', '2023-09-21 07:50:03'),
(13, 'abc', 'fgg@gmail.com', NULL, '$2y$10$iHoRj8dF13e8eHtZMEXJHOJuHw6veITzKRrXRc51AVvW1PnvQRlCW', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:50:43', '2023-09-21 07:50:43'),
(14, 'abc', 'fgdfg@gmail.com', NULL, '$2y$10$IzldtH6kViGoSVDNIec8Y.5P887GHahwJ29ebAxZkZfcz84cXgqQa', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 07:54:14', '2023-09-21 07:54:14'),
(15, 'abc', 'sam@gmail.com', NULL, '$2y$10$eg7j1wbOEgw8IPTg0EkIO.Tg102Tjos29Nzhz95lDtO6OTgY5Tura', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 08:01:48', '2023-09-21 08:01:48'),
(16, 'abc', 'adb@gmail.com', NULL, '$2y$10$Hfjt1Wh8sJA7Nk6areWcVuigXoVFX86uXg5d.n3lb6Am7w/z/8Azy', NULL, NULL, 3, NULL, 1, NULL, NULL, '2023-09-21 08:12:02', '2023-09-21 08:12:02'),
(17, 'abc', 'example@gmail.com', NULL, '12345678', NULL, '663', 3, NULL, 1, NULL, NULL, '2023-09-21 09:41:17', '2023-09-21 09:41:17'),
(18, 'john deo', 'john@gmail.com', NULL, '$2y$10$Nyxxvj118.EKvqJuLuHfgughiTrgLl6uWV4gcJAwsi3YDHYbNQtLS', NULL, '3824', 3, NULL, 1, NULL, NULL, '2023-09-21 09:52:19', '2023-09-21 09:52:19'),
(19, 'john deo', 'johndeo@gmail.com', NULL, '$2y$10$ESicxhrAfdd.3yP/9O.aDel4Ws3UMHFLh5Tnem/TbPyN/R16CH5G.', 9815847227, '1898', 3, 'bhopal', 1, NULL, NULL, '2023-09-27 06:14:10', '2023-09-30 11:02:56'),
(21, 'md sadam rain', 'sa@gmail.com', NULL, '$2y$10$rtfC9fe.ZVCvdHdr5FkiRObNQ4X8tDKGkeF7FwYzvc/UEmlTM9YU6', 7869948102, NULL, 2, 'mp nagar,bhopal,madhya pradesh', 1, 'gallery//male1696337917.jpg', NULL, '2023-10-03 12:58:37', '2023-10-03 12:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `viewed_properties`
--

CREATE TABLE `viewed_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(191) NOT NULL,
  `bank_name` varchar(191) NOT NULL,
  `property_type` varchar(191) DEFAULT NULL,
  `viewed_date` varchar(191) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `viewed_properties`
--

INSERT INTO `viewed_properties` (`id`, `property_id`, `bank_name`, `property_type`, `viewed_date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5704', 'Aditya Birla Finance Limited', 'Hall', '2023-09-23 17:56:29', '2', '2023-09-23 12:22:44', '2023-09-23 12:26:29'),
(2, '2713', 'Canara Bank ', 'Shop', '2023-09-23 18:21:06', '2', '2023-09-23 12:32:54', '2023-09-23 12:51:06'),
(3, '5767', 'AAVAS FINANCIERS LIMITED', NULL, '2023-09-25 13:12:06', '2', '2023-09-25 07:42:06', '2023-09-25 07:42:06'),
(4, '129', 'Canara Bank', 'plot', '2023-09-25 13:12:25', '2', '2023-09-25 07:42:25', '2023-09-25 07:42:25'),
(5, '2804', 'Union Bank of India', 'Residential Flat', '2023-09-25 15:24:05', '2', '2023-09-25 09:53:28', '2023-09-25 09:54:05'),
(6, '2911', 'India Shelter Finance Corporation Ltd', NULL, '2023-09-25 15:57:53', '2', '2023-09-25 10:23:59', '2023-09-25 10:27:53'),
(7, '5981', 'Liquidation', 'Immovable Properties', '2023-09-25 16:01:42', '2', '2023-09-25 10:31:42', '2023-09-25 10:31:42'),
(8, '5955', 'Canara Bank ', 'Plot', '2023-09-25 16:01:48', '2', '2023-09-25 10:31:48', '2023-09-25 10:31:48'),
(9, '2711', 'Canara Bank ', 'Residential House ', '2023-09-25 16:02:04', '2', '2023-09-25 10:32:04', '2023-09-25 10:32:04'),
(10, '2720', 'Punjab Nation Bank ', ' Industrial', '2023-09-25 16:02:11', '2', '2023-09-25 10:32:11', '2023-09-25 10:32:11'),
(11, '3043', 'Punjab Nation Bank ', 'Residential', '2023-09-25 16:21:25', '2', '2023-09-25 10:33:00', '2023-09-25 10:51:25'),
(12, '5978', 'Punjab Nation Bank ', 'Plot', '2023-09-25 16:22:01', '2', '2023-09-25 10:52:01', '2023-09-25 10:52:01'),
(13, '2459', 'Union Bank of India', 'Residential Flat', '2023-09-25 17:09:35', '2', '2023-09-25 11:39:35', '2023-09-25 11:39:35'),
(14, '2460', 'Union Bank of India', 'Residential Plot', '2023-09-25 17:09:43', '2', '2023-09-25 11:39:43', '2023-09-25 11:39:43'),
(15, '169', 'Canara Bank', 'Vacant Plot', '2023-09-29 16:15:50', '2', '2023-09-29 10:45:50', '2023-09-29 10:45:50'),
(16, '965', 'IIFL Home Finance Limited ', NULL, '2023-09-29 17:44:11', '2', '2023-09-29 12:10:51', '2023-09-29 12:14:11'),
(17, '1707', 'Punjab National Bank', NULL, '2023-10-03 15:48:59', '2', '2023-10-03 10:16:44', '2023-10-03 10:18:59'),
(18, '1703', 'Punjab National Bank', 'Restaurant', '2023-10-03 15:49:16', '2', '2023-10-03 10:19:16', '2023-10-03 10:19:16'),
(19, '375', 'Canara Bank', 'land', '2023-10-03 15:49:22', '2', '2023-10-03 10:19:22', '2023-10-03 10:19:22'),
(20, '9459', 'Hdfc Bank', NULL, '2023-10-03 15:51:14', '2', '2023-10-03 10:21:14', '2023-10-03 10:21:14'),
(21, '9458', 'Hdfc Bank', NULL, '2023-10-07 16:49:11', '2', '2023-10-03 10:21:41', '2023-10-07 11:19:11'),
(22, '9313', 'Union Bank of India', 'flat', '2023-10-07 15:10:00', '2', '2023-10-07 09:40:00', '2023-10-07 09:40:00'),
(23, '9443', 'Uco Bank', NULL, '2023-10-07 15:26:12', '2', '2023-10-07 09:56:12', '2023-10-07 09:56:12'),
(24, '9455', 'Bank Of Baroda', '7777', '2023-10-07 15:26:25', '2', '2023-10-07 09:56:25', '2023-10-07 09:56:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `property_lists`
--
ALTER TABLE `property_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased_subscriptions`
--
ALTER TABLE `purchased_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_inquiries`
--
ALTER TABLE `request_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `viewed_properties`
--
ALTER TABLE `viewed_properties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_lists`
--
ALTER TABLE `property_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9468;

--
-- AUTO_INCREMENT for table `purchased_subscriptions`
--
ALTER TABLE `purchased_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_inquiries`
--
ALTER TABLE `request_inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `viewed_properties`
--
ALTER TABLE `viewed_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
