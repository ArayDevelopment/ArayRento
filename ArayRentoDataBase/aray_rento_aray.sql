-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2025 at 01:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aray_rento_aray`
--

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_advertisements_aray`
--

CREATE TABLE `aray_rento_advertisements_aray` (
  `id_rento_advertisements_aray` int(11) NOT NULL COMMENT 'آیدی',
  `user_id_rento_advertisements_aray` int(11) DEFAULT NULL COMMENT 'آیدی کاربر',
  `title_rento_advertisements_aray` varchar(150) DEFAULT NULL COMMENT 'عنوان',
  `desc_rento_advertisements_aray` varchar(500) DEFAULT NULL COMMENT 'توضیحات',
  `category_rento_advertisements_aray` tinyint(4) DEFAULT NULL COMMENT '0 - ویلایی\n1 - دفتر\n2 - خانه\n3 - آپارتمان',
  `document_status_rento_advertisements_aray` tinyint(4) DEFAULT NULL COMMENT '0 - سند شش دانگ\n1 - وکالتی\n2 - قولنامه ای',
  `rent_rento_advertisements_aray` varchar(20) DEFAULT NULL COMMENT 'اجاره',
  `deposit_rento_advertisements_aray` varchar(20) DEFAULT NULL COMMENT 'ودیعه',
  `location_rento_advertisements_aray` varchar(10) DEFAULT NULL COMMENT 'منطقه',
  `rooms_quantity_rento_advertisements_aray` varchar(5) DEFAULT NULL COMMENT 'تعداد اتاق',
  `area_rento_advertisements_aray` varchar(10) DEFAULT NULL COMMENT 'متراژ',
  `floors_quantity_rento_advertisements_aray` varchar(5) DEFAULT NULL COMMENT 'تعداد طبقات',
  `floor_number_rento_advertisements_aray` varchar(1) DEFAULT NULL COMMENT 'طبقه واحد',
  `phone_numbre_rento_advertisements_aray` varchar(15) DEFAULT NULL COMMENT 'شماره موبایل',
  `manufacture_year_rento_advertisements_aray` varchar(5) DEFAULT NULL COMMENT 'سال ساخت',
  `address_rento_advertisements_aray` varchar(50) DEFAULT NULL COMMENT 'آدرس',
  `facilities_rento_advertisements_aray` varchar(255) DEFAULT NULL COMMENT 'امکانات',
  `creation_date_rento_advertisements_aray` varchar(10) DEFAULT NULL COMMENT 'تاریخ ایجاد',
  `creation_hour_rento_advertisements_aray` varchar(60) NOT NULL,
  `update_date_rento_advertisements_aray` varchar(10) DEFAULT NULL COMMENT 'تاریخ به روزرسانی',
  `status_rento_advertisements_aray` tinyint(4) DEFAULT NULL COMMENT '0 - فعال\n1 - غیرفعال'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='آگهی ها';

--
-- Dumping data for table `aray_rento_advertisements_aray`
--

INSERT INTO `aray_rento_advertisements_aray` (`id_rento_advertisements_aray`, `user_id_rento_advertisements_aray`, `title_rento_advertisements_aray`, `desc_rento_advertisements_aray`, `category_rento_advertisements_aray`, `document_status_rento_advertisements_aray`, `rent_rento_advertisements_aray`, `deposit_rento_advertisements_aray`, `location_rento_advertisements_aray`, `rooms_quantity_rento_advertisements_aray`, `area_rento_advertisements_aray`, `floors_quantity_rento_advertisements_aray`, `floor_number_rento_advertisements_aray`, `phone_numbre_rento_advertisements_aray`, `manufacture_year_rento_advertisements_aray`, `address_rento_advertisements_aray`, `facilities_rento_advertisements_aray`, `creation_date_rento_advertisements_aray`, `creation_hour_rento_advertisements_aray`, `update_date_rento_advertisements_aray`, `status_rento_advertisements_aray`) VALUES
(26, 59, 'آپارتمان', 'آپارتمان دوبلکس', 0, 0, '5000000', '40000000', 'مفتح', '3', '220', '2', '1', '09155154378', '1402', 'بولوار مفتح مفتح 28 بعد پلاک 345', 'آسانسور, پارکینگ, بالکن, کولر گازی, شوفاژ, آیفون تصویری, پنجره دوجداره, در ضد سرقت', '۱۴۰۴/۰۵/۲۹', '۰۸:۳۸:۳۸', NULL, 0),
(27, 59, 'خانه ویلایی', 'خانه ویلایی با حیاط', 0, 0, '700000', '1000000000', '0', '5', '300', '1', '1', '09352230540', '1398', 'بین وکیل آباد 5 و 7', 'پارکینگ, انباری, کولر گازی, شوفاژ', '۱۴۰۴/۰۵/۲۹', '۰۸:۴۹:۰۶', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_categories_aray`
--

CREATE TABLE `aray_rento_categories_aray` (
  `id_rento_categories_aray` int(11) NOT NULL COMMENT 'آیدی',
  `name_rento_categories_aray` varchar(15) NOT NULL COMMENT 'نام',
  `user_id_rento_categories_aray` int(11) DEFAULT NULL COMMENT 'آیدی کاربر',
  `id_main_rento_categories_aray` int(11) DEFAULT NULL COMMENT 'آیدی اصلی',
  `sub_id_category_rento_categories_aray` int(11) DEFAULT NULL,
  `type_rento_categories_aray` tinyint(4) NOT NULL COMMENT '0 = ریشه اصلی\n1 = ریشه اول\n2 = ریشه دوم\n3 = ریشه سوم',
  `creation_date_rento_categories_aray` varchar(10) NOT NULL COMMENT 'تاریخ ایجاد'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='دسته بندی';

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_favorites_aray`
--

CREATE TABLE `aray_rento_favorites_aray` (
  `id_rento_favorites_aray` int(11) NOT NULL COMMENT 'آیدی',
  `user_id_rento_favorites_aray` int(11) NOT NULL COMMENT 'آیدی کاربر',
  `adevertisement_id_rento_favorites_aray` int(11) NOT NULL COMMENT 'آیدی آکهی',
  `ceration_date_rento_favorites_aray` varchar(10) NOT NULL COMMENT 'تاریخ ایجاد'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='علاقه مندی ها';

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_imeges_aray`
--

CREATE TABLE `aray_rento_imeges_aray` (
  `id_rento_imeges_aray` int(11) NOT NULL COMMENT 'آیدی',
  `advertisement_id_rento_imeges_aray` int(11) DEFAULT NULL COMMENT 'آیدی آگهی',
  `url_rento_imeges_aray` varchar(255) NOT NULL COMMENT 'لینک تصویر',
  `image_type_rento_images_aray` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='تصاویر';

--
-- Dumping data for table `aray_rento_imeges_aray`
--

INSERT INTO `aray_rento_imeges_aray` (`id_rento_imeges_aray`, `advertisement_id_rento_imeges_aray`, `url_rento_imeges_aray`, `image_type_rento_images_aray`) VALUES
(6, 26, 'ArayRentoController/admin/uploads/img_68a55856b4434.png', 'image/png'),
(7, 27, 'ArayRentoController/admin/uploads/img_68a55aca67008.png', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_locations_aray`
--

CREATE TABLE `aray_rento_locations_aray` (
  `id_rento_locations_aray` int(11) NOT NULL COMMENT 'آیدی',
  `name_rento_locations_aray` varchar(255) NOT NULL COMMENT 'نام',
  `region_rento_locations_aray` int(11) NOT NULL COMMENT 'منطقه'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='محلات';

--
-- Dumping data for table `aray_rento_locations_aray`
--

INSERT INTO `aray_rento_locations_aray` (`id_rento_locations_aray`, `name_rento_locations_aray`, `region_rento_locations_aray`) VALUES
(1, 'ارشاد', 1),
(2, 'آبکوه', 1),
(3, 'بهاران', 1),
(4, 'بهشت', 1),
(5, 'فرامرز عباسی', 1),
(6, 'فلسطین', 1),
(7, 'گوهرشاد', 1),
(8, 'جانباز', 1),
(9, 'کلاهدوز', 1),
(10, 'راهنمایی', 1),
(11, 'سعد آباد', 1),
(12, 'سجاد', 1),
(13, 'عبدالمطلب', 2),
(14, 'ابوطالب', 2),
(15, 'عامل', 2),
(16, 'فدک', 2),
(17, 'هدایت', 2),
(18, 'ایثارگران', 2),
(19, 'کوی امیرالمومنین', 2),
(20, 'سمزقند', 2),
(21, 'شفا', 2),
(22, 'شهید هنرور', 2),
(23, 'شهید مطهری', 2),
(24, 'فجر', 3),
(25, 'فاطمیه', 3),
(26, 'گاز', 3),
(27, 'گلشور', 3),
(28, 'ایثار', 3),
(29, 'خیر آباد', 3),
(30, 'کوی مهدی', 3),
(31, 'مسلم', 3),
(32, 'رسالت', 3),
(33, 'تلگرد', 3),
(34, 'طلاب', 3),
(35, 'وحید', 3),
(36, 'التیمور', 4),
(37, 'امیرالمومنین', 4),
(38, 'مهدی آباد', 4),
(39, 'نیزه', 4),
(40, 'پنجتن', 4),
(41, 'ثامن', 4),
(42, 'شهید آوینی', 4),
(43, 'آقا مصطفی خمینی', 5),
(44, 'امیرآباد', 5),
(45, 'انثار', 5),
(46, 'اروند', 5),
(47, 'کنه بیست', 5),
(48, 'کشاورز', 5),
(49, 'مهرآباد', 5),
(50, 'پورسینا', 5),
(51, 'شهید باهنر', 5),
(52, 'شهید بسکابادی', 5),
(53, 'شهید معقول', 5),
(54, 'شهید رجایی', 5),
(55, 'شهرک شیرین', 5),
(56, 'هفده شهریور', 6),
(57, 'حسین آباد', 6),
(58, 'جلالیه', 6),
(59, 'کارگران', 6),
(60, 'کارمندان اول', 6),
(61, 'کارمندان دوم', 6),
(62, 'کوشش', 6),
(63, 'کوی 22 بهمن', 6),
(64, 'کوی پلیس', 6),
(65, 'کوی سلمان', 6),
(66, 'مقدم', 6),
(67, 'مصلی', 6),
(68, 'پروین اعتصامی', 6),
(69, 'رضائیه', 6),
(70, 'سجادیه', 6),
(71, 'شهید رستمی', 6),
(72, 'شهید شیرودی', 6),
(73, 'چهنو', 6),
(74, 'ابوذر', 7),
(75, 'المهدی', 7),
(76, 'عسگریه', 7),
(77, 'بهارستان', 7),
(78, 'انقلاب', 7),
(79, 'قائم', 7),
(80, 'خلج', 7),
(81, 'سیدی', 7),
(82, 'طرق', 7),
(83, 'زارعین', 7),
(84, 'بالاخیابان', 8),
(85, 'پایین خیابان', 8),
(86, 'عبادی', 8),
(87, 'حسین باشی', 8),
(88, 'جنت', 8),
(89, 'کاشانی', 8),
(90, 'عنصری', 8),
(91, 'راه آهن', 8),
(92, 'سرشور', 8),
(93, 'صاحب الزمان', 8),
(94, 'چهارچشمه', 9),
(95, 'کوثر', 9),
(96, 'رضا شهر', 9),
(97, 'سرافرازان', 9),
(98, 'طالقانی', 9),
(99, 'ذکریا', 9),
(100, 'حجاب', 10),
(101, 'امامیه', 10),
(102, 'لشگر', 10),
(103, 'فرهنگیان', 10),
(104, 'ایثارگران', 10),
(105, 'استاد یوسفی', 10),
(106, 'رازی', 10),
(107, 'رسالت', 10),
(108, 'شاهد', 10),
(109, 'شریعتی', 10),
(110, 'دانشجو', 11),
(111, 'دانش آموز', 11),
(112, 'شریف', 11),
(113, 'فارغ التحصیلان', 11),
(114, 'شهید رضوی', 11),
(115, 'آزاد شهر', 11),
(116, 'زیبا شهر', 11),
(117, 'سیدرضی', 11),
(118, 'تربیت', 11),
(119, 'وکیل آباد', 11),
(120, 'امیریه', 12),
(121, 'چهار برج', 12),
(122, 'الهیه', 12),
(123, 'فردوسی', 12),
(124, 'کلاته برفی', 12),
(125, 'جاهد شهر', 12),
(126, 'مهدیه', 12),
(127, 'نقویه', 12),
(128, 'نمایشگاه', 12),
(129, 'رحمانیه', 12),
(130, 'صادقیه', 12),
(131, 'صفی آباد', 12),
(132, 'امام هادی', 13),
(133, 'حجت', 13),
(134, 'خاتم الانبیا', 13),
(135, 'خین عرب', 13),
(136, 'مشهد قلی', 13),
(137, 'نوده', 13),
(138, 'زرکش', 13),
(139, 'آبشار', 14),
(140, 'احمد آباد', 14),
(141, 'امام خمینی', 14),
(142, 'نوفل لوشاتو', 14),
(143, 'شهید بهشتی', 14),
(144, 'امام رضا', 14),
(145, 'بهمن', 15),
(146, 'بلال', 15),
(147, 'اسلام آباد', 15),
(148, 'قدس', 15),
(149, 'قرقی', 15),
(150, 'خواجه ربیع', 15),
(151, 'مهرگان', 15),
(152, 'مهرمادر شمالی', 15),
(153, 'نوید', 15),
(154, 'مهرمادر', 15),
(155, 'عباس آباد', 16),
(156, 'دروي', 16),
(157, 'سيس آباد', 16),
(158, 'طبرسي شمالي', 16),
(159, 'شهيدقرباني', 16),
(160, 'آب و برق', 17),
(161, 'اقبال', 17),
(162, 'گلدیس', 17),
(163, 'هاشمیه', 17),
(164, 'هنرستان', 17),
(165, 'لادن', 17),
(166, 'نیرو هوایی', 17),
(167, 'شقایق 1', 17),
(168, 'شقایق 2', 17),
(169, 'ولیعصر', 17);

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_notifications_aray`
--

CREATE TABLE `aray_rento_notifications_aray` (
  `id_rento_notifications_aray` int(11) NOT NULL COMMENT 'آیدی',
  `reciver_id_rento_notifications_aray` int(11) NOT NULL COMMENT 'آیدی گیرنده',
  `title_rento_notifications_aray` varchar(100) NOT NULL COMMENT 'عنوان',
  `message_rento_notifications_aray` varchar(500) NOT NULL COMMENT 'پیام',
  `seen_status_rento_notifications_aray` tinyint(4) NOT NULL COMMENT '0 = خوانده شده\n1 = خوانده نشده',
  `send_dete_rento_notifications_aray` varchar(10) NOT NULL COMMENT 'تاریخ ارسال'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='اعلانات';

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_payments_aray`
--

CREATE TABLE `aray_rento_payments_aray` (
  `id_rento_payments_aray` int(11) NOT NULL COMMENT 'آیدی',
  `user_id_rento_payments_aray` int(11) DEFAULT NULL COMMENT 'آیدی کاربر',
  `advertisements_id_rento_payments_aray` int(11) NOT NULL COMMENT 'آیدی آگهی',
  `amount_rento_payments_aray` varchar(20) DEFAULT NULL COMMENT 'مبلغ',
  `date_rento_payments_aray` varchar(10) NOT NULL COMMENT 'تاریخ',
  `status_rento_payments_aray` tinyint(4) NOT NULL COMMENT '0 = پرداخت شده\n1 = پرداخت نشده',
  `transaction_code_rento_payments_aray` varchar(30) DEFAULT NULL COMMENT 'کد پیگیری',
  `transaction_method_rento_payments_aray` tinyint(4) DEFAULT NULL COMMENT '0 = نقدی\n1 = کارت به کارت\n2 = درگاه پرداخت\n3 = دستگاه پز'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='پرداختی ها';

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_reviews_aray`
--

CREATE TABLE `aray_rento_reviews_aray` (
  `id_rento_reviews_aray` int(11) NOT NULL COMMENT 'آیدی',
  `advertisement_id_rento_reviews_aray` int(11) NOT NULL COMMENT 'آیدی آکهی',
  `user_id_rento_reviews_aray` int(11) NOT NULL COMMENT 'آیدی کاربر',
  `rating_rento_reviews_aray` varchar(2) NOT NULL COMMENT 'نمره دهی',
  `desc_rento_reviews_aray` varchar(150) NOT NULL COMMENT 'توضیحات',
  `creation_date_rento_reviews_aray` varchar(10) NOT NULL COMMENT 'تاریخ ایجاد'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='دیدگاه ها';

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_rewards_aray`
--

CREATE TABLE `aray_rento_rewards_aray` (
  `id_rento_rewards_aray` int(11) NOT NULL COMMENT 'آیدی',
  `reciver_id_rento_rewards_aray` int(11) DEFAULT NULL COMMENT 'آیدی دریافت کننده',
  `type_rento_rewards_aray` tinyint(4) NOT NULL COMMENT '0 = نقدی\n1 = بلیط سفر\n2 = سایر',
  `desc_rento_rewards_aray` varchar(150) NOT NULL COMMENT 'توضیحات',
  `creation_date_rento_rewards_aray` varchar(10) NOT NULL COMMENT 'تاریخ ایجاد'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='پاداش ها';

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_users_aray`
--

CREATE TABLE `aray_rento_users_aray` (
  `id_rento_users_aray` int(11) NOT NULL COMMENT 'آیدی',
  `fname_rento_users_aray` varchar(50) NOT NULL COMMENT 'نام',
  `lname_rento_users_aray` varchar(60) NOT NULL COMMENT 'نام خانوادگی',
  `phone_number_rento_users_aray` varchar(15) NOT NULL COMMENT 'شماره موبایل',
  `email_rento_users_aray` varchar(35) DEFAULT NULL COMMENT 'ایمیل',
  `password_rento_users_aray` varchar(255) NOT NULL COMMENT 'رمز عبور',
  `role_rento_users_aray` tinyint(4) NOT NULL DEFAULT 2 COMMENT '0 = سوپر ادمین\r\n1 = ادمین\r\n2 = کاربر\r\n',
  `creation_date_rento_users_aray` varchar(10) DEFAULT NULL COMMENT 'تاریخ ثبت نام',
  `update_date_rento_users_aray` varchar(10) DEFAULT NULL COMMENT 'تاریخ به روزرسانی',
  `status_rento_user_aray` int(11) NOT NULL DEFAULT 0 COMMENT '0 = غیرفعال\r\n1 = فعال',
  `active_code_rento_user_aray` int(11) DEFAULT NULL COMMENT 'کد فعال سازی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='کاربران';

--
-- Dumping data for table `aray_rento_users_aray`
--

INSERT INTO `aray_rento_users_aray` (`id_rento_users_aray`, `fname_rento_users_aray`, `lname_rento_users_aray`, `phone_number_rento_users_aray`, `email_rento_users_aray`, `password_rento_users_aray`, `role_rento_users_aray`, `creation_date_rento_users_aray`, `update_date_rento_users_aray`, `status_rento_user_aray`, `active_code_rento_user_aray`) VALUES
(59, 'علیرضا', 'یوسف زاده', '09034102152', 'thegeisha2006@gmail.com', '$2y$10$Ncv9BIkYSqALLLuI71jciOMPqyAuMgwEQwpjLTjwUDY9f8bNiXBsm', 0, NULL, NULL, 1, 932873),
(61, 'امیرمحمد', 'وزیری', '09942048836', 'Amirtatobe@gmail.com', '$2y$10$Y.wGuAadK4TRtVz/vzzzkuC1EIB4QNkeaKNkIjuh4n2Fnu5fbG4BS', 2, NULL, NULL, 1, 782839),
(62, 'امیرحسین', 'رضایی', '09035686251', 'amirho2032@gmail.com', '$2y$10$5bZXmp7YcaUkad5KlMbms.N1heYi544zKO0Dzee2sUesN05ISgNj.', 0, NULL, NULL, 1, 222395),
(63, 'امیرحسین', 'توکلیان', '09388259423', 'amirhosein86.tv@gmail.com', '$2y$10$teNobKtEvb4bBb2NHHg1euxiU0nt2mkD5Wi4jhrC/zZCPcSeMGl0W', 2, NULL, NULL, 1, 265024),
(64, 'ایمان', 'حسینی', '09233541234', 'vojox24724@jazipo.com', '$2y$10$kPHzZBG6XYvRu1P/Joip..nfk42SYCAiax/XrWldE7E6Nv1W5NMz2', 2, NULL, NULL, 1, 902840),
(65, 'متین', 'افضلی', '09869512351', 'matin@gmail.com', '$2y$10$A9y3C4C2Nm7zHhMvudHW2eCrDQqhKRZNVNMpkErHasnTbRoH4RKp6', 1, NULL, NULL, 0, 592078),
(67, 'مصطفی', 'موسوی', '09032167926', 'bemite8325@mardiek.com', '$2y$10$WUOjipiekiuGWpWOnAMlyuoxEJeESwH4YAoXfd/ZUEpmfxZkM35XW', 2, NULL, NULL, 1, 633362);

-- --------------------------------------------------------

--
-- Table structure for table `aray_rento_view_history_aray`
--

CREATE TABLE `aray_rento_view_history_aray` (
  `id_rento_view_history_aray` int(11) NOT NULL COMMENT 'آیدی',
  `advetisement_id_rento_view_history_aray` int(11) NOT NULL COMMENT 'آیدی آگهی',
  `user_id_rento_view_history_aray` int(11) NOT NULL COMMENT 'آیدی کاربر',
  `date_rento_view_history_aray` varchar(10) NOT NULL COMMENT 'تاریخ بازدید'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='بازدید ها';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aray_rento_advertisements_aray`
--
ALTER TABLE `aray_rento_advertisements_aray`
  ADD PRIMARY KEY (`id_rento_advertisements_aray`),
  ADD KEY `id_rento_users_aray` (`user_id_rento_advertisements_aray`),
  ADD KEY `phone_number_rento_users_aray` (`phone_numbre_rento_advertisements_aray`),
  ADD KEY `id_rento_categories_aray` (`category_rento_advertisements_aray`),
  ADD KEY `id_rento_locations_aray` (`location_rento_advertisements_aray`);

--
-- Indexes for table `aray_rento_categories_aray`
--
ALTER TABLE `aray_rento_categories_aray`
  ADD PRIMARY KEY (`id_rento_categories_aray`),
  ADD KEY `id_rento_users_aray_categories` (`user_id_rento_categories_aray`),
  ADD KEY `id_main_rento_categories_aray` (`id_main_rento_categories_aray`);

--
-- Indexes for table `aray_rento_favorites_aray`
--
ALTER TABLE `aray_rento_favorites_aray`
  ADD PRIMARY KEY (`id_rento_favorites_aray`),
  ADD KEY `id_rento_advertisements_aray_favorites` (`adevertisement_id_rento_favorites_aray`),
  ADD KEY `id_rento_users_aray_favorites` (`user_id_rento_favorites_aray`);

--
-- Indexes for table `aray_rento_imeges_aray`
--
ALTER TABLE `aray_rento_imeges_aray`
  ADD PRIMARY KEY (`id_rento_imeges_aray`),
  ADD KEY `id_rento_advertisements_aray_imges` (`advertisement_id_rento_imeges_aray`);

--
-- Indexes for table `aray_rento_locations_aray`
--
ALTER TABLE `aray_rento_locations_aray`
  ADD PRIMARY KEY (`id_rento_locations_aray`);

--
-- Indexes for table `aray_rento_notifications_aray`
--
ALTER TABLE `aray_rento_notifications_aray`
  ADD PRIMARY KEY (`id_rento_notifications_aray`),
  ADD KEY `id_rento_users_aray_notification` (`reciver_id_rento_notifications_aray`);

--
-- Indexes for table `aray_rento_payments_aray`
--
ALTER TABLE `aray_rento_payments_aray`
  ADD PRIMARY KEY (`id_rento_payments_aray`),
  ADD KEY `id_rento_users_aray_payments` (`user_id_rento_payments_aray`),
  ADD KEY `id_rento_advertisements_aray` (`advertisements_id_rento_payments_aray`);

--
-- Indexes for table `aray_rento_reviews_aray`
--
ALTER TABLE `aray_rento_reviews_aray`
  ADD PRIMARY KEY (`id_rento_reviews_aray`),
  ADD KEY `id_rento_advertisements_aray_reviews` (`advertisement_id_rento_reviews_aray`),
  ADD KEY `id_rento_users_aray_reviews` (`user_id_rento_reviews_aray`);

--
-- Indexes for table `aray_rento_rewards_aray`
--
ALTER TABLE `aray_rento_rewards_aray`
  ADD PRIMARY KEY (`id_rento_rewards_aray`),
  ADD KEY `id_rento_users_aray_rewards` (`reciver_id_rento_rewards_aray`);

--
-- Indexes for table `aray_rento_users_aray`
--
ALTER TABLE `aray_rento_users_aray`
  ADD PRIMARY KEY (`id_rento_users_aray`),
  ADD UNIQUE KEY `aray_rento_user_aray_pk_2` (`phone_number_rento_users_aray`),
  ADD UNIQUE KEY `aray_rento_user_aray_pk_3` (`email_rento_users_aray`);

--
-- Indexes for table `aray_rento_view_history_aray`
--
ALTER TABLE `aray_rento_view_history_aray`
  ADD PRIMARY KEY (`id_rento_view_history_aray`),
  ADD KEY `id_rento_advertisements_aray_view_history` (`advetisement_id_rento_view_history_aray`),
  ADD KEY `id_rento_users_aray_view_history` (`user_id_rento_view_history_aray`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aray_rento_advertisements_aray`
--
ALTER TABLE `aray_rento_advertisements_aray`
  MODIFY `id_rento_advertisements_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `aray_rento_categories_aray`
--
ALTER TABLE `aray_rento_categories_aray`
  MODIFY `id_rento_categories_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- AUTO_INCREMENT for table `aray_rento_favorites_aray`
--
ALTER TABLE `aray_rento_favorites_aray`
  MODIFY `id_rento_favorites_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- AUTO_INCREMENT for table `aray_rento_imeges_aray`
--
ALTER TABLE `aray_rento_imeges_aray`
  MODIFY `id_rento_imeges_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `aray_rento_locations_aray`
--
ALTER TABLE `aray_rento_locations_aray`
  MODIFY `id_rento_locations_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی', AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `aray_rento_notifications_aray`
--
ALTER TABLE `aray_rento_notifications_aray`
  MODIFY `id_rento_notifications_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- AUTO_INCREMENT for table `aray_rento_payments_aray`
--
ALTER TABLE `aray_rento_payments_aray`
  MODIFY `id_rento_payments_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- AUTO_INCREMENT for table `aray_rento_reviews_aray`
--
ALTER TABLE `aray_rento_reviews_aray`
  MODIFY `id_rento_reviews_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- AUTO_INCREMENT for table `aray_rento_rewards_aray`
--
ALTER TABLE `aray_rento_rewards_aray`
  MODIFY `id_rento_rewards_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- AUTO_INCREMENT for table `aray_rento_users_aray`
--
ALTER TABLE `aray_rento_users_aray`
  MODIFY `id_rento_users_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی', AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `aray_rento_view_history_aray`
--
ALTER TABLE `aray_rento_view_history_aray`
  MODIFY `id_rento_view_history_aray` int(11) NOT NULL AUTO_INCREMENT COMMENT 'آیدی';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aray_rento_categories_aray`
--
ALTER TABLE `aray_rento_categories_aray`
  ADD CONSTRAINT `id_main_rento_categories_aray` FOREIGN KEY (`id_main_rento_categories_aray`) REFERENCES `aray_rento_categories_aray` (`id_rento_categories_aray`),
  ADD CONSTRAINT `id_rento_users_aray_categories` FOREIGN KEY (`user_id_rento_categories_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);

--
-- Constraints for table `aray_rento_favorites_aray`
--
ALTER TABLE `aray_rento_favorites_aray`
  ADD CONSTRAINT `id_rento_advertisements_aray_favorites` FOREIGN KEY (`adevertisement_id_rento_favorites_aray`) REFERENCES `aray_rento_advertisements_aray` (`id_rento_advertisements_aray`),
  ADD CONSTRAINT `id_rento_users_aray_favorites` FOREIGN KEY (`user_id_rento_favorites_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);

--
-- Constraints for table `aray_rento_imeges_aray`
--
ALTER TABLE `aray_rento_imeges_aray`
  ADD CONSTRAINT `id_rento_advertisements_aray_imges` FOREIGN KEY (`advertisement_id_rento_imeges_aray`) REFERENCES `aray_rento_advertisements_aray` (`id_rento_advertisements_aray`);

--
-- Constraints for table `aray_rento_notifications_aray`
--
ALTER TABLE `aray_rento_notifications_aray`
  ADD CONSTRAINT `id_rento_users_aray_notification` FOREIGN KEY (`reciver_id_rento_notifications_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);

--
-- Constraints for table `aray_rento_payments_aray`
--
ALTER TABLE `aray_rento_payments_aray`
  ADD CONSTRAINT `id_rento_advertisements_aray` FOREIGN KEY (`advertisements_id_rento_payments_aray`) REFERENCES `aray_rento_advertisements_aray` (`id_rento_advertisements_aray`),
  ADD CONSTRAINT `id_rento_users_aray_payments` FOREIGN KEY (`user_id_rento_payments_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);

--
-- Constraints for table `aray_rento_reviews_aray`
--
ALTER TABLE `aray_rento_reviews_aray`
  ADD CONSTRAINT `id_rento_advertisements_aray_reviews` FOREIGN KEY (`advertisement_id_rento_reviews_aray`) REFERENCES `aray_rento_advertisements_aray` (`id_rento_advertisements_aray`),
  ADD CONSTRAINT `id_rento_users_aray_reviews` FOREIGN KEY (`user_id_rento_reviews_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);

--
-- Constraints for table `aray_rento_rewards_aray`
--
ALTER TABLE `aray_rento_rewards_aray`
  ADD CONSTRAINT `id_rento_users_aray_rewards` FOREIGN KEY (`reciver_id_rento_rewards_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);

--
-- Constraints for table `aray_rento_view_history_aray`
--
ALTER TABLE `aray_rento_view_history_aray`
  ADD CONSTRAINT `id_rento_advertisements_aray_view_history` FOREIGN KEY (`advetisement_id_rento_view_history_aray`) REFERENCES `aray_rento_advertisements_aray` (`id_rento_advertisements_aray`),
  ADD CONSTRAINT `id_rento_users_aray_view_history` FOREIGN KEY (`user_id_rento_view_history_aray`) REFERENCES `aray_rento_users_aray` (`id_rento_users_aray`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
