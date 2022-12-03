-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2022 at 07:07 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AreaPrivataLaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `amministratores`
--

CREATE TABLE `amministratores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amministratores`
--

INSERT INTO `amministratores` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `cognome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Surname',
  `indirizzo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unknown street',
  `citta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown city',
  `nazione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown nationality',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `password`, `nome`, `cognome`, `indirizzo`, `citta`, `nazione`, `created_at`, `updated_at`) VALUES
(1, 'admin2@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Alex', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', NULL, '2022-11-29 19:46:39'),
(2, 'admin3@test.test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Bob', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-16 16:21:16', '2022-11-16 16:21:16'),
(3, 'admin4@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Cathy', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-16 20:01:13', '2022-11-16 20:01:13'),
(4, 'admin5@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Den', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-17 12:58:09', '2022-11-17 12:58:09'),
(5, 'admin5@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Eva', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-17 17:37:20', '2022-11-17 17:37:20'),
(6, 'admin6@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Fred', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-17 17:38:50', '2022-11-17 17:38:50'),
(7, 'admin7@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Gianni', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-17 17:41:54', '2022-11-17 17:41:54'),
(49, 'admin8@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Hugo', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-24 17:46:23', '2022-11-24 17:46:23'),
(50, 'admin9@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Iten', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-24 17:47:11', '2022-11-24 17:47:11'),
(65, 'admin10@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Jane', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-25 15:45:30', '2022-11-25 15:45:30'),
(66, 'admin11@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Kate', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-25 17:59:39', '2022-11-25 17:59:39'),
(67, 'admin11@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Leo', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-25 18:02:28', '2022-11-25 18:02:28'),
(68, 'admin12@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Mary', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-25 18:03:56', '2022-11-25 18:03:56'),
(69, 'admin13@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nick', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-25 18:06:15', '2022-11-25 18:06:15'),
(70, 'admin14@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Olga', 'Surname', 'Unknown street', 'unknown city', 'unknown nationality', '2022-11-25 18:10:10', '2022-11-25 18:10:10');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_16_133849_create_amministratores_table', 1),
(6, '2022_11_16_140549_create_customers_table', 2),
(8, '2022_11_23_170215_create_services_table', 3),
(9, '2022_11_29_162826_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indirizzo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezzo` decimal(8,2) NOT NULL,
  `stato` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Customer_id`, `nome`, `indirizzo`, `citta`, `cart`, `prezzo`, `stato`, `created_at`, `updated_at`) VALUES
(1, '1', 'admin2@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-29 15:50:07', '2022-11-29 15:50:07'),
(2, '65', 'admin10@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 13:06:21', '2022-11-30 13:06:21'),
(3, '50', 'admin9@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 13:43:51', '2022-11-30 13:43:51'),
(4, '50', 'admin9@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 14:21:28', '2022-11-30 14:21:28'),
(5, '3', 'admin4@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 14:25:54', '2022-11-30 14:25:54'),
(6, '3', 'admin4@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 2, '2022-11-30 14:57:20', '2022-11-30 14:59:12'),
(7, '50', 'admin9@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"2\";s:12:\"service_name\";s:6:\"tour 2\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"400.00\";s:13:\"service_image\";s:13:\"images/p5.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:400;}', '400.00', 1, '2022-11-30 18:22:32', '2022-11-30 18:22:32'),
(8, '50', 'admin9@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"2\";s:12:\"service_name\";s:6:\"tour 2\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"400.00\";s:13:\"service_image\";s:13:\"images/p5.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:400;}', '400.00', 1, '2022-11-30 18:31:32', '2022-11-30 18:31:32'),
(9, '50', 'admin9@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"2\";s:12:\"service_name\";s:6:\"tour 2\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"400.00\";s:13:\"service_image\";s:13:\"images/p5.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:400;}', '400.00', 1, '2022-11-30 18:42:48', '2022-11-30 18:42:48'),
(10, '50', 'admin9@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"2\";s:12:\"service_name\";s:6:\"tour 2\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"400.00\";s:13:\"service_image\";s:13:\"images/p5.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:400;}', '400.00', 1, '2022-11-30 18:43:09', '2022-11-30 18:43:09'),
(11, '4', 'admin5@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"2\";s:12:\"service_name\";s:6:\"tour 2\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"400.00\";s:13:\"service_image\";s:13:\"images/p5.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:6:\"tour 2\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"400.00\";s:5:\"image\";s:13:\"images/p5.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:31:57\";s:10:\"updated_at\";s:19:\"2022-11-23 18:31:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:400;}', '400.00', 1, '2022-11-30 18:45:19', '2022-11-30 18:45:19'),
(12, '4', 'admin5@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 2, '2022-11-30 18:50:16', '2022-11-30 18:50:53'),
(13, '4', 'admin5@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 18:54:19', '2022-11-30 18:54:19'),
(14, '1', 'admin2@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 19:54:17', '2022-11-30 19:54:17'),
(15, '1', 'admin2@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 19:55:13', '2022-11-30 19:55:13'),
(16, '1', 'admin2@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 1, '2022-11-30 20:10:58', '2022-11-30 20:10:58'),
(17, '1', 'admin2@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"1\";s:12:\"service_name\";s:6:\"Tour 1\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"300.00\";s:13:\"service_image\";s:13:\"images/p4.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:4:\"name\";s:6:\"Tour 1\";s:11:\"description\";s:182:\"Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.\";s:5:\"price\";s:6:\"300.00\";s:5:\"image\";s:13:\"images/p4.jpg\";s:10:\"created_at\";s:19:\"2022-11-23 18:29:17\";s:10:\"updated_at\";s:19:\"2022-11-23 18:29:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:300;}', '300.00', 2, '2022-12-01 13:14:05', '2022-12-01 13:15:27'),
(18, '6', 'admin6@test.it', 'Unknown street', 'unknown city', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:4;a:7:{s:3:\"qty\";i:1;s:10:\"service_id\";s:1:\"4\";s:12:\"service_name\";s:6:\"Tour 4\";s:16:\"service_discount\";N;s:13:\"service_price\";s:6:\"250.00\";s:13:\"service_image\";s:14:\"images/p11.jpg\";s:4:\"item\";O:18:\"App\\Models\\Service\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"services\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:4;s:4:\"name\";s:6:\"Tour 4\";s:11:\"description\";s:274:\"<p>Aliquam elementum egestas quam non auctor. Proin congue tortor arcu, vitae tincidunt velit ultrices et. In porttitor at libero eget suscipit. Ut non nulla ut tortor sodales pretium vitae eu massa. Curabitur cursus nunc in quam sodales tincidunt ac vitae mauris.&nbsp;</p>\";s:5:\"price\";s:6:\"250.00\";s:5:\"image\";s:14:\"images/p11.jpg\";s:10:\"created_at\";s:19:\"2022-12-01 18:29:16\";s:10:\"updated_at\";s:19:\"2022-12-01 18:29:16\";}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:4;s:4:\"name\";s:6:\"Tour 4\";s:11:\"description\";s:274:\"<p>Aliquam elementum egestas quam non auctor. Proin congue tortor arcu, vitae tincidunt velit ultrices et. In porttitor at libero eget suscipit. Ut non nulla ut tortor sodales pretium vitae eu massa. Curabitur cursus nunc in quam sodales tincidunt ac vitae mauris.&nbsp;</p>\";s:5:\"price\";s:6:\"250.00\";s:5:\"image\";s:14:\"images/p11.jpg\";s:10:\"created_at\";s:19:\"2022-12-01 18:29:16\";s:10:\"updated_at\";s:19:\"2022-12-01 18:29:16\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:250;}', '250.00', 2, '2022-12-01 18:08:58', '2022-12-01 18:10:03');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tour 1', 'Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.', '300.00', 'images/p4.jpg', '2022-11-23 17:29:17', '2022-11-23 17:29:17'),
(2, 'tour 2', 'Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.', '400.00', 'images/p5.jpg', '2022-11-23 17:31:57', '2022-11-23 17:31:57'),
(3, 'tour 3', 'Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque\r\n                        purus, sollic alitudin non ante ac, malesuada. condimentum libero.', '500.00', 'images/p6.jpg', '2022-11-23 17:32:25', '2022-11-23 17:32:25'),
(4, 'Tour 4', 'Aliquam elementum egestas quam non auctor. Proin congue tortor arcu, vitae tincidunt velit ultrices et. In porttitor at libero eget suscipit. Ut non nulla ut tortor sodales pretium vitae eu massa. Curabitur cursus nunc in quam sodales tincidunt ac vitae mauris.&nbsp;', '250.00', 'images/p11.jpg', '2022-12-01 17:29:16', '2022-12-01 17:29:16'),
(5, 'Tour 5', 'Vestibulum id lacus aliquam, suscipit urna nec, semper orci. Suspendisse consequat porta risus quis aliquet. Mauris euismod condimentum risus a imperdiet. Nulla non imperdiet nulla. Sed imperdiet vestibulum lectus, gravida rhoncus nisi posuere eget. Aenean eu sagittis dui.&nbsp;', '450.00', 'images/p12.jpeg', '2022-12-01 17:35:46', '2022-12-01 17:35:46'),
(6, 'Tour 6', 'Ut mattis tristique tincidunt. Fusce suscipit arcu id neque volutpat tristique. Praesent tincidunt venenatis congue. Ut at feugiat purus. Nam nec nibh diam. Quisque finibus aliquet neque, sit amet accumsan risus euismod quis. Maecenas sollicitudin ligula vel massa condimentum pharetra.', '500.00', 'images/p13.jpg', '2022-12-01 18:08:07', '2022-12-01 18:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amministratores`
--
ALTER TABLE `amministratores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amministratores_email_unique` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amministratores`
--
ALTER TABLE `amministratores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
