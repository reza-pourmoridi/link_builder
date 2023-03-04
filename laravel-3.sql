-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 02:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chosen_items`
--

CREATE TABLE `chosen_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `items_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chosen_items`
--

INSERT INTO `chosen_items` (`id`, `item_model`, `customer_id`, `items_id`) VALUES
(1, 'programs', 5, '\"1\"'),
(2, 'programs', 5, '[\"7\",\"8\"]'),
(3, 'programs', 9, '[\"7\"]'),
(4, 'pricesModel', 9, '[\"7\",\"9\"]'),
(5, 'works', 9, '[\"5\"]'),
(6, 'demo', 9, '[\"8\"]'),
(7, 'programs', 10, '[\"7\"]'),
(8, 'pricesModel', 10, '[\"7\"]'),
(9, 'works', 10, '[\"6\"]'),
(10, 'demo', 10, '[\"8\"]');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `company`, `staff_id`, `logo`) VALUES
(3, 'نام شرکت', 'نام مشتری', '1', '33.jpg'),
(4, 'نام شرکت', 'نام مشتری', '1', '33.jpg'),
(5, 'نام شرکت', 'نام مشتری', '1', '33.jpg'),
(6, 'نام شرکت', 'نام مشتری', '1', '33.jpg'),
(7, 'sfdsfsd', 'sfsfsd', '1', 'contact.png'),
(9, 'dddd', 'dfffff', '2', 'btn_pause.png'),
(10, 'بیسبسی', 'سیبسب', '1', 'belabela.png'),
(11, 'بیسیسب', 'سیبیسب', '2', '1675943272.png'),
(12, 'سیبسیبی', 'سیبسیبسی', '1', '1675943285.jpg'),
(14, 'dsfsdfsd', 'dfdsfsd', '1', '1675943763.png'),
(15, 'fsdsfd', 'dfsfsd', '1', '1675945001.png'),
(16, 'dgdfgd', 'dfsd', '1', '1675945347.png'),
(17, 'dgdfgd', 'dfsd', '1', '1675945516.png'),
(18, 'dgdfgd', 'dfsd', '1', '1675946263.png'),
(19, 'مشتری', 'شرکت', '2', '1675946671.png'),
(20, 'مشتری نهایی', 'شرکت نهایی', '2', '1675947023.png');

-- --------------------------------------------------------

--
-- Table structure for table `demo_tb`
--

CREATE TABLE `demo_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo_tb`
--

INSERT INTO `demo_tb` (`id`, `title`, `link`) VALUES
(7, 'دموی طراحی سایت', 's360.iran-tech.com'),
(8, 'دموی حسابداری', 'iran-tech.com/ticket'),
(9, 'دموی رزرو آنلاین', '1011.ir');

-- --------------------------------------------------------

--
-- Table structure for table `faq_tb`
--

CREATE TABLE `faq_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quastion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_tb`
--

INSERT INTO `faq_tb` (`id`, `quastion`, `answear`, `kind`) VALUES
(1, 'بببببببببببب', 'یییییییییییی', 'en|health|'),
(2, 'نقش یک سایت خوب در فروش خدمات گردشگری چیست؟', 'شما می‌دانید که امروزه تبلیغات سنتی دیگر پاسخگو نیست و شاید دیگر روزنامه همشهری با آن تبلیغات عریض و طویل رنگی به یادمان نباشد و در حال حاضر سایت و شبکه های اجتماعی حرف اول تبلیغات را میزنند.', 'en|health|'),
(3, 'چرا قیمتهای طراحی سایت گردشگری و خدمات آنلاین گردشگری تنوع زیادی دارد؟', 'تعیین قیمت برای یک خدمت به خیلی از عوامل بستگی دارد، همانطور که برای مثال شما تور ترکیه را ۱۰ میلیون تومان می‌فروشید، اما یک آژانس دیگر تور ترکیه را ۳ میلیون تومان ارائه می‌دهد، در طراحی سایت گردشگری هم خدمات متفاوت با قیمت های متنوع وجود دارد.', 'ar|'),
(4, 'چگونه با مستر بلیت و اسنپ رقابت کنیم؟', 'این یک باور غلط است که شما بخواهید، با چنین وب سایت‌هایی که سهم خوبی از بازار به واسطه تبلیغات، بودجه کافی و خدمات خوبی که ارائه می‌دهند، داشته باشید. شما باید بازار هدف خودتان را شناخته و نسبت به همان بازار قدم بردارید.', 'en|');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2022_12_17_202924_page_detail', 1),
(16, '2023_02_02_075326_create_staff_table', 2),
(17, '2023_02_02_112447_create_demos_table', 3),
(18, '2023_02_02_114059_create_site_types_table', 4),
(19, '2023_02_02_124247_create_customers_table', 5),
(20, '2023_02_02_125558_create_chosen_prices_table', 6),
(23, '2023_02_09_093703_create_chosen_items_table', 7),
(24, '2014_10_12_100000_create_password_resets_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `page_contacts`
--

CREATE TABLE `page_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contacts`
--

INSERT INTO `page_contacts` (`id`, `page_id`, `title`, `phone`, `email`) VALUES
(1, '1', 'title', 'phone', ' email '),
(2, '1', 'title 2', 'phone', ' email '),
(3, '2', 'title 3', 'phone', ' email ');

-- --------------------------------------------------------

--
-- Table structure for table `page_detail`
--

CREATE TABLE `page_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_detail`
--

INSERT INTO `page_detail` (`id`, `logo`, `banner`, `name`, `title`, `description`, `country`, `city`, `user_name`, `date`) VALUES
(1, 'logo', 'banner', 'name', 'title', 'description', 'country', 'city', ' user_name ', '2023-01-23 21:35:37'),
(2, 'logo', 'banner', 'name', 'title', 'description', 'country', 'city', ' user_name ', '2023-01-23 21:35:43'),
(3, 'logo', 'banner', 'name', 'title 3', 'description', 'country', 'city', ' user_name ', '2023-01-23 21:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `page_social`
--

CREATE TABLE `page_social` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_social`
--

INSERT INTO `page_social` (`id`, `page_id`, `title`, `logo`, `url`) VALUES
(1, '1', 'title 1', 'logo.png', 'url'),
(2, '2', 'title 1', 'logo.png', 'url');

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
-- Table structure for table `prices_tb`
--

CREATE TABLE `prices_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices_tb`
--

INSERT INTO `prices_tb` (`id`, `title`, `link`) VALUES
(7, 'قیمت طراحی سایت', 'www.iran-tech.com/1.pdf'),
(9, 'قیمت سایت انگلیسی', 'www.iran-tech.com/3.pdf'),
(10, 'سایت ماینا', 'https://www.myna.ir'),
(12, 'قیمت سایت سلامت', 'www.iran-tech.com/2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `programs_tb`
--

CREATE TABLE `programs_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs_tb`
--

INSERT INTO `programs_tb` (`id`, `title`, `link`) VALUES
(6, 'طراحی سایت', 'www.iran-tech.com/intro'),
(7, 'فروش آنلاین', 'www.iran-tech.com/webservice'),
(8, 'سایت سلامت', 'www.iran-tech.com/health');

-- --------------------------------------------------------

--
-- Table structure for table `site_types_tb`
--

CREATE TABLE `site_types_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_types_tb`
--

INSERT INTO `site_types_tb` (`id`, `title`, `slug`) VALUES
(1, 'انگلیسی', 'en'),
(2, 'عربی', 'ar'),
(3, 'سلامت', 'health');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tb`
--

CREATE TABLE `staff_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_tb`
--

INSERT INTO `staff_tb` (`id`, `name`, `position`, `photo`, `email`, `instagram`, `whatsapp`, `linkdin`) VALUES
(1, 'نسرین هاشمی', '', '', '', '', '', ''),
(2, 'سجاد لشکری', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `works_tb`
--

CREATE TABLE `works_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works_tb`
--

INSERT INTO `works_tb` (`id`, `title`, `link`, `kind`) VALUES
(5, 'سایت پرواز', 'www.parvaz.ir', 'ar|health|'),
(6, 'سایت میزبان فلای', 'https://mizbanfly.com', 'ar|'),
(7, 'سایت ماینا', 'https://www.myna.ir', 'health|');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chosen_items`
--
ALTER TABLE `chosen_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_tb`
--
ALTER TABLE `demo_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_tb`
--
ALTER TABLE `faq_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contacts`
--
ALTER TABLE `page_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_detail`
--
ALTER TABLE `page_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_social`
--
ALTER TABLE `page_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prices_tb`
--
ALTER TABLE `prices_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs_tb`
--
ALTER TABLE `programs_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_types_tb`
--
ALTER TABLE `site_types_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_tb`
--
ALTER TABLE `staff_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_tb`
--
ALTER TABLE `works_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chosen_items`
--
ALTER TABLE `chosen_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `demo_tb`
--
ALTER TABLE `demo_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq_tb`
--
ALTER TABLE `faq_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `page_contacts`
--
ALTER TABLE `page_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_detail`
--
ALTER TABLE `page_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_social`
--
ALTER TABLE `page_social`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices_tb`
--
ALTER TABLE `prices_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `programs_tb`
--
ALTER TABLE `programs_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_types_tb`
--
ALTER TABLE `site_types_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_tb`
--
ALTER TABLE `staff_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works_tb`
--
ALTER TABLE `works_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
