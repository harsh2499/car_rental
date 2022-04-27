-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 01:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(250) NOT NULL,
  `car_name` varchar(250) NOT NULL,
  `car_nameplate` varchar(200) NOT NULL,
  `car_img` varchar(250) NOT NULL,
  `ac_price` varchar(250) NOT NULL,
  `non_ac_price` varchar(250) NOT NULL,
  `ac_price_per_day` varchar(250) NOT NULL,
  `non_ac_price_per_day` varchar(250) NOT NULL,
  `car_availability` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_nameplate`, `car_img`, `ac_price`, `non_ac_price`, `ac_price_per_day`, `non_ac_price_per_day`, `car_availability`) VALUES
(12, 'blackvcar', '123', '2022-ioniq-phev-ltd-summit-gray-centered-browse-hero_Browse.png', '555', '666', '777', '555', 'yes'),
(13, 'whitecar', '789', '57263_2020_Mercedes_Benz_GLS.jpg', '966', '855', '744', '855', 'yes'),
(14, 'abccar', '963', '1593172188363_Hyundai_CRETA_SUV_MainKV_PC_1860x540.jpg', '666', '666', '555', '444', 'yes'),
(15, 'pll', '966', 'e1-500x500.jpg', '666', '555', '444', '555', 'yes'),
(16, 'bluecar', '24', 'Tata-Safari-030320212044.jpg', '966', '66', '77', '555', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `clientlogin`
--

CREATE TABLE `clientlogin` (
  `id` int(250) NOT NULL,
  `username` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientlogin`
--

INSERT INTO `clientlogin` (`id`, `username`, `time`, `date`) VALUES
(19, 'harsh2404', '02:58:13', '27-04-2222'),
(20, 'harsh2404', '03:07:19', '27-04-2222'),
(21, 'harsh2404', '03:16:22', '27-04-2222'),
(22, 'harsh2404', '04:33:16', '27-04-2222');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_username`, `client_name`, `client_phone`, `client_email`, `client_address`, `client_password`) VALUES
(15, 'harsh2404', 'harsh', '9510151546', 'harshmvaghela99@gmail.com', 'nirmalnagar bhavnagar', 'eyJpdiI6Ijg0YzMrcUlyUUs3ajFDMElGUGpDcFE9PSIsInZhbHVlIjoiVEtjbnREanpvOE5RYlZxR2FuODZMZz09IiwibWFjIjoiZDcwY2Q3NWIwNjk4NjE2MzRlNjM4ODBhMjFjNmM1MjhjYmNkMzlmZDY4YzVjNGJiNWRhNTMwNGJhOGJlMmU3NCIsInRhZyI6IiJ9');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`id`, `username`, `time`, `date`) VALUES
(23, 'abc', '03:03:43', '27-04-2222'),
(24, 'abc', '03:13:52', '27-04-2222'),
(25, 'abc', '03:19:38', '27-04-2222'),
(26, 'abc', '03:33:08', '27-04-2222'),
(27, 'lucas', '04:04:14', '27-04-2222'),
(28, 'abc', '04:11:50', '27-04-2222');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(200) NOT NULL,
  `customer_username` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_phone` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `customer_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_username`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_password`) VALUES
(9, 'abc', 'abc', '9852748596', 'abc@gmail.com', 'sad', 'eyJpdiI6ImFHUDREWmVnckxCam1rRlYvNmI3aVE9PSIsInZhbHVlIjoiMDcxQ3VzK0lBQWVEOTFPZ3JQeUE4Zz09IiwibWFjIjoiMTVlMWU4NGQzNTVmMDNmNGNiMGE4MjNiYTdlNmFkNjgyNGQyZjdlOTRiNzBkNjJhYmZkMmU0MTNkNzQwNGIzMiIsInRhZyI6IiJ9'),
(10, 'lucas', 'harsh vaghela', '9852748596', 'abc@gmail.com', 'sad', 'eyJpdiI6InRlTVgyRW5hdldNMzVJVkorMlRhL3c9PSIsInZhbHVlIjoiTnI5ZHRzc2o4cm81eXhvK2NYcFpnUT09IiwibWFjIjoiZjhhMDE1OGIxYTEwZjc3Zjk5NDY0ODE4M2UzMzBhNWVjMjg5MjNhOTUyNTJlMDJlNGI2ZDJmZDJkNjE4ZmM5MiIsInRhZyI6IiJ9');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(200) NOT NULL,
  `driver_name` varchar(200) NOT NULL,
  `dl_number` varchar(200) NOT NULL,
  `driver_phone` varchar(200) NOT NULL,
  `driver_address` varchar(200) NOT NULL,
  `driver_gender` varchar(200) NOT NULL,
  `client_username` varchar(200) NOT NULL,
  `driver_availability` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `driver_name`, `dl_number`, `driver_phone`, `driver_address`, `driver_gender`, `client_username`, `driver_availability`) VALUES
(13, 'harsh', '75859666', '9825742566', 'asdsad', 'malw', 'harsh2404', 'yes'),
(14, 'dhruv', '744444444', '25633636366', 'sdfs', 'male', 'harsh2404', 'yes'),
(15, 'mihir', '56666666666666', '6585968575', 'bhavanagar', 'male', 'harsh2404', 'yes'),
(16, 'mohit', '555555555555', '2536968596', 'dfsdfsd', 'male', 'harsh2404', 'yes');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_04_25_055028_create_clients_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `id` varchar(200) NOT NULL,
  `customer_username` varchar(200) NOT NULL,
  `car_id` varchar(200) NOT NULL,
  `driver_id` varchar(200) NOT NULL,
  `car_name` varchar(200) NOT NULL,
  `booking_date` varchar(400) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `car_return_date` varchar(200) DEFAULT NULL,
  `fare` varchar(200) NOT NULL,
  `distance` varchar(200) DEFAULT NULL,
  `charge_type` varchar(400) NOT NULL,
  `no_of_days` varchar(200) DEFAULT NULL,
  `total_amount` varchar(200) DEFAULT NULL,
  `driver_name` varchar(250) NOT NULL,
  `driver_gender` varchar(250) NOT NULL,
  `driver_dl_number` varchar(250) NOT NULL,
  `driver_contact_number` varchar(250) NOT NULL,
  `employee_name` varchar(250) NOT NULL,
  `return_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`id`, `customer_username`, `car_id`, `driver_id`, `car_name`, `booking_date`, `start_date`, `end_date`, `car_return_date`, `fare`, `distance`, `charge_type`, `no_of_days`, `total_amount`, `driver_name`, `driver_gender`, `driver_dl_number`, `driver_contact_number`, `employee_name`, `return_status`) VALUES
('3336925175', 'abc', '14', '13', 'abccar', '22-04-27', '2022-04-27', '2022-04-30', '22-04-27', '555', NULL, 'days', '3', '1665', 'harsh', 'malw', '75859666', '9825742566', 'harsh2404', 'R'),
('8925214089', 'abc', '15', '15', 'pll', '22-04-27', '2022-04-27', '2022-04-27', '22-04-27', '666', '10', 'km', '0', '6660', 'mihir', 'male', '56666666666666', '6585968575', 'harsh2404', 'R'),
('1855763444', 'abc', '15', '13', 'pll', '22-04-27', '2022-04-27', '2022-04-29', '22-04-27', '444', NULL, 'days', '2', '888', 'harsh', 'malw', '75859666', '9825742566', 'harsh2404', 'R'),
('5390567414', 'abc', '16', '15', 'bluecar', '22-04-27', '2022-04-27', '2022-04-30', '22-04-27', '555', NULL, 'days', '3', '1665', 'mihir', 'male', '56666666666666', '6585968575', 'harsh2404', 'R'),
('5968106413', 'abc', '15', '14', 'pll', '22-04-27', '2022-04-26', '2022-04-30', '22-04-27', '555', NULL, 'days', '4', '2220', 'dhruv', 'male', '744444444', '25633636366', 'harsh2404', 'R'),
('3676590550', 'abc', '14', '13', 'abccar', '22-04-27', '2022-04-28', '2022-04-29', '22-04-27', '444', NULL, 'days', '1', '444', 'harsh', 'malw', '75859666', '9825742566', 'harsh2404', 'R'),
('2193418823', 'abc', '12', '14', 'blackvcar', '22-04-27', '2022-04-28', '2022-05-06', '22-04-27', '777', NULL, 'days', '8', '6216', 'dhruv', 'male', '744444444', '25633636366', 'harsh2404', 'R'),
('4793398293', 'abc', '15', '13', 'pll', '22-04-27', '2022-04-29', '2022-04-30', '22-04-27', '555', NULL, 'days', '1', '555', 'harsh', 'malw', '75859666', '9825742566', 'harsh2404', 'R'),
('2277663953', 'abc', '16', '14', 'bluecar', '22-04-27', '2022-04-28', '2022-05-01', '22-04-27', '555', NULL, 'days', '3', '1665', 'dhruv', 'male', '744444444', '25633636366', 'harsh2404', 'R'),
('1147773703', 'abc', '15', '13', 'pll', '22-04-27', '2022-05-01', '2024-02-16', '22-04-27', '444', NULL, 'days', '656', '291264', 'harsh', 'malw', '75859666', '9825742566', 'harsh2404', 'R'),
('7256399814', 'abc', '14', '15', 'abccar', '22-04-27', '2022-04-27', '2022-05-01', '22-04-27', '555', NULL, 'days', '4', '2220', 'mihir', 'male', '56666666666666', '6585968575', 'harsh2404', 'R'),
('3264686473', 'abc', '14', '16', 'abccar', '22-04-27', '2022-04-28', '2022-04-29', '22-04-27', '444', NULL, 'days', '1', '444', 'mohit', 'male', '555555555555', '2536968596', 'harsh2404', 'R'),
('7739473066', 'abc', '14', '14', 'abccar', '22-04-27', '2022-04-29', '2022-05-06', '22-04-27', '555', NULL, 'days', '7', '3885', 'dhruv', 'male', '744444444', '25633636366', 'harsh2404', 'R');

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
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `clientlogin`
--
ALTER TABLE `clientlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `clientlogin`
--
ALTER TABLE `clientlogin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
