-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 12:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'بازگشت سقراط', 'سوجث ویجی', '۳۹,۶۰۰', 'درخواست مرجوع کردن کالا در گروه کتاب فلسفه و روانشناسی با دلیل \"انصراف از خرید\" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).', '2023-06-15 05:51:44', '2023-06-15 05:51:44'),
(2, 'آیدا در آینه', 'احمد شاملو', '۳۳,۰۰۰', 'درخواست مرجوع کردن کالا در گروه کتاب شعر و ادبیات با دلیل \"انصراف از خرید\" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).', '2023-06-15 05:51:44', '2023-06-15 05:51:44'),
(3, 'مغازه جادویی', 'دکتر جیمز.آر.دوتی', '۶۸,۳۷۰', 'درخواست مرجوع کردن کالا در گروه کتاب علوم اجتماعی با دلیل \"انصراف از خرید\" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).', '2023-06-15 05:51:44', '2023-06-15 05:51:44'),
(4, 'اثر مرکب', 'دارن هاردی', '۱۲۹,۰۰۰', 'درخواست مرجوع کردن کالا در گروه کتاب فلسفه و روانشناسی با دلیل \"انصراف از خرید\" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).', '2023-06-15 05:51:44', '2023-06-15 05:51:44'),
(5, 'جزء از کل', 'استیو تولتز', '۲۱۰,۲۰۰', 'درخواست مرجوع کردن کالا در گروه کتاب شعر و ادبیات با دلیل \"انصراف از خرید\" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).', '2023-06-15 05:51:44', '2023-06-15 05:51:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
