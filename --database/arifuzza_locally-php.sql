-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2022 at 04:42 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arifuzza_locally-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `SL` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`SL`, `user_id`, `username`, `first_name`, `last_name`, `email`, `password`, `role`, `status`, `phone`) VALUES
(8, 'admin2162', 'admin', 'Arifuzzaman', 'Tusar', 'arifuzzamantusar50@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'admin', '1', ''),
(9, 'abcdxyz5846', 'abcdxyz', '', '', 'lorem@ab.com', 'b59c67bf196a4758191e42f76670ceba', 'guest', '0', ''),
(23, 'tusar15247', 'tusar1', '', '', 'tusar1@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'guest', '0', ''),
(24, 'dasd7099', 'dasd', '', '', 'dsadads@dede.de', '2a6571da26602a67be14ea8c5ab82349', 'guest', '0', ''),
(25, 'tusarxx2850', 'tusarxx', '', '', 'aztusar50@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'guest', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `appreciation`
--

CREATE TABLE `appreciation` (
  `likeid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appreciation`
--

INSERT INTO `appreciation` (`likeid`, `postid`, `userid`, `username`) VALUES
(301, 35, 1, 'tusar'),
(302, 36, 36, 'arifuzzaman'),
(303, 37, 36, 'arifuzzaman'),
(304, 38, 36, 'arifuzzaman'),
(305, 35, 36, 'arifuzzaman'),
(307, 35, 41, 'soumik22'),
(308, 41, 10, 'peoms'),
(309, 41, 1, 'tusar'),
(311, 37, 1, 'tusar'),
(313, 42, 1, 'tusar'),
(314, 44, 36, 'arifuzzaman'),
(315, 46, 43, 'wozvutv'),
(316, 45, 43, 'wozvutv'),
(317, 44, 43, 'wozvutv'),
(318, 38, 43, 'wozvutv'),
(319, 37, 43, 'wozvutv'),
(320, 36, 43, 'wozvutv'),
(321, 35, 43, 'wozvutv'),
(322, 47, 45, 'sahadat531'),
(323, 47, 36, 'arifuzzaman'),
(324, 48, 36, 'arifuzzaman'),
(325, 48, 1, 'tusar'),
(326, 47, 1, 'tusar'),
(327, 46, 1, 'tusar'),
(329, 44, 1, 'tusar'),
(330, 38, 1, 'tusar'),
(331, 36, 1, 'tusar'),
(332, 48, 46, 'jarjiash'),
(333, 49, 1, 'tusar'),
(334, 50, 1, 'tusar'),
(335, 45, 1, 'tusar');

-- --------------------------------------------------------

--
-- Table structure for table `app_options`
--

CREATE TABLE `app_options` (
  `ao_id` int(11) NOT NULL,
  `ao_key` varchar(50) NOT NULL,
  `ao_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_options`
--

INSERT INTO `app_options` (`ao_id`, `ao_key`, `ao_value`) VALUES
(1, 'smtp_host', 'serversi5.ebnhost.com'),
(2, 'smtp_port', '465'),
(3, 'smtp_user', 'locally@arifuzzamantusar.com'),
(4, 'smtp_password', 'locally@1234');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_ID` int(100) NOT NULL,
  `comment_author_id` varchar(100) NOT NULL,
  `comment_user` varchar(200) NOT NULL,
  `comment_author_email` varchar(200) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment_content` longtext NOT NULL,
  `comment_parent _id` varchar(100) NOT NULL,
  `post_user_id` varchar(100) NOT NULL,
  `post_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_ID`, `comment_author_id`, `comment_user`, `comment_author_email`, `comment_date`, `comment_content`, `comment_parent _id`, `post_user_id`, `post_ID`) VALUES
(4, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-11 20:26:25', 'good', '', '7', '12'),
(5, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-11 20:27:46', 'That will be best ', '', '8', '13'),
(6, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-11 20:55:51', 'My low end PC failed to run it', '', '8', '13'),
(7, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-11 20:56:48', 'Arektu kom rakha jayy na?', '', '7', '12'),
(8, '7', 'soumik', 'SouMik Ahammed', '2020-12-11 21:20:38', 'There is no way', '', '8', '13'),
(9, '7', 'soumik', 'SouMik Ahammed', '2020-12-11 21:21:22', 'Not so useful offer\r\n', '', '1', '9'),
(24, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 13:38:11', 'sadsa', '', '1', '19'),
(25, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-30 13:38:36', 'dsada', '', '1', '19'),
(26, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-30 13:39:21', 'Good', '', '6', '17'),
(27, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 13:52:43', 'asd', '', '1', '19'),
(28, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 13:52:44', 'sad', '', '1', '19'),
(29, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:35:42', 'Thansk', '', '6', '17'),
(30, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:37:06', 'zdas', '', '1', '19'),
(31, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:37:07', 'sadas', '', '1', '19'),
(32, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:37:09', 'dsad', '', '1', '19'),
(33, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:37:12', 'sadasd', '', '1', '19'),
(34, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:37:14', 'dsada', '', '1', '19'),
(35, '6', 'abony', 'Tajnima Binte Naz', '2020-12-30 14:39:59', 'Faltu', '', '1', '20'),
(36, '8', 'raz', 'Jarjiash Azam', '2020-12-30 14:43:29', 'Thsnkas kdsakfjd', '', '1', '19'),
(37, '8', 'raz', 'Jarjiash Azam', '2020-12-30 14:43:36', 'Very Good', '', '1', '19'),
(38, '1', 'tusar', 'Arifuzzaman Tusar', '2020-12-31 15:28:01', 'sad', '', '1', '22'),
(39, '1', 'tusar', 'Arifuzzaman Tusar', '2021-01-01 08:52:18', 'valo khelisu', '', '8', '25'),
(40, '8', 'raz', 'Jarjiash Azam', '2021-01-01 08:53:02', 'asdasda', '', '8', '25'),
(42, '1', 'tusar', 'Arifuzzaman Tusar', '2021-01-02 03:55:27', 'Ho vai noob', '', '8', '25'),
(43, '10', 'peoms', 'Peoms Islam', '2021-01-02 03:59:26', 'dasdsa', '', '10', '26'),
(44, '1', 'tusar', 'Arifuzzaman Tusar', '2021-01-06 06:00:08', 'dfffggfgfh', '', '8', '28'),
(45, '11', 'john', ' ', '2021-01-15 12:45:36', 'vara beshi hoise .. koman', '', '1', '30'),
(46, '20', 'tusar1010', 'John  Abraham', '2021-01-16 08:16:55', 'good research', '', '1', '31'),
(47, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:52', 'sadasd', '', '1', '30'),
(48, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:54', 'dasdad', '', '1', '30'),
(49, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:54', 'dasdad', '', '1', '30'),
(50, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:56', 'dasd', '', '1', '30'),
(51, '43', 'wozvutv', 'Â ', '2022-01-16 07:11:00', 'Fantastic ðŸŽ‰', '', '42', '46'),
(52, '36', 'arifuzzaman', 'ArifuzzamanÂ ', '2022-01-16 07:56:42', 'Innovative! ', '', '45', '47'),
(53, '36', 'arifuzzaman', 'ArifuzzamanÂ ', '2022-01-16 07:57:42', 'Wondering!', '', '45', '48');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `dist_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `dist_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', NULL, NULL, 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `post_id` varchar(50) NOT NULL,
  `post_userid` varchar(50) NOT NULL,
  `act_userid` varchar(50) NOT NULL,
  `act_username` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `post_id`, `post_userid`, `act_userid`, `act_username`, `type`) VALUES
(9, '19', '1', '1', 'tusar', 'commented'),
(10, '19', '1', '6', 'abony', 'commented'),
(11, '19', '1', '1', 'tusar', 'commented'),
(12, '17', '6', '1', 'tusar', 'commented'),
(13, '19', '1', '6', 'abony', 'commented'),
(14, '19', '1', '6', 'abony', 'commented'),
(15, '17', '6', '6', 'abony', 'commented'),
(16, '19', '1', '6', 'abony', 'commented'),
(17, '19', '1', '6', 'abony', 'commented'),
(18, '19', '1', '6', 'abony', 'commented'),
(19, '19', '1', '6', 'abony', 'commented'),
(20, '19', '1', '6', 'abony', 'commented'),
(21, '20', '1', '6', 'abony', 'commented'),
(22, '19', '1', '8', 'raz', 'commented'),
(23, '19', '1', '8', 'raz', 'commented'),
(24, '22', '1', '1', 'tusar', 'commented'),
(25, '25', '8', '1', 'tusar', 'commented'),
(26, '25', '8', '8', 'raz', 'commented'),
(27, '25', '8', '10', 'peoms', 'commented'),
(28, '25', '8', '1', 'tusar', 'commented'),
(29, '26', '10', '10', 'peoms', 'commented'),
(30, '25', '8', '1', 'tusar', 'Liked'),
(31, '19', '1', '8', 'raz', 'Liked'),
(32, '25', '8', '8', 'raz', 'Liked'),
(33, '22', '1', '8', 'raz', 'Liked'),
(34, '28', '8', '1', 'tusar', 'Liked'),
(35, '28', '8', '1', 'tusar', 'commented'),
(65, '36', '1', '36', 'arifuzzaman', 'appreciated'),
(66, '37', '1', '36', 'arifuzzaman', 'appreciated'),
(67, '38', '1', '36', 'arifuzzaman', 'appreciated'),
(68, '35', '1', '36', 'arifuzzaman', 'appreciated'),
(69, '35', '1', '41', 'soumik22', 'appreciated'),
(70, '35', '1', '41', 'soumik22', 'appreciated'),
(71, '41', '10', '10', 'peoms', 'appreciated'),
(72, '41', '10', '1', 'tusar', 'appreciated'),
(73, '38', '1', '1', 'tusar', 'appreciated'),
(74, '37', '1', '1', 'tusar', 'appreciated'),
(75, '38', '1', '1', 'tusar', 'appreciated'),
(76, '42', '10', '1', 'tusar', 'appreciated'),
(77, '44', '10', '36', 'arifuzzaman', 'appreciated'),
(78, '46', '42', '43', 'wozvutv', 'appreciated'),
(79, '46', '42', '43', 'wozvutv', 'commented'),
(80, '45', '10', '43', 'wozvutv', 'appreciated'),
(81, '44', '10', '43', 'wozvutv', 'appreciated'),
(82, '38', '1', '43', 'wozvutv', 'appreciated'),
(83, '37', '1', '43', 'wozvutv', 'appreciated'),
(84, '36', '1', '43', 'wozvutv', 'appreciated'),
(85, '35', '1', '43', 'wozvutv', 'appreciated'),
(86, '47', '45', '45', 'sahadat531', 'appreciated'),
(87, '47', '45', '36', 'arifuzzaman', 'appreciated'),
(88, '48', '45', '36', 'arifuzzaman', 'appreciated'),
(89, '47', '45', '36', 'arifuzzaman', 'commented'),
(90, '48', '45', '36', 'arifuzzaman', 'commented'),
(91, '48', '45', '1', 'tusar', 'appreciated'),
(92, '47', '45', '1', 'tusar', 'appreciated'),
(93, '46', '42', '1', 'tusar', 'appreciated'),
(94, '45', '10', '1', 'tusar', 'appreciated'),
(95, '44', '10', '1', 'tusar', 'appreciated'),
(96, '38', '1', '1', 'tusar', 'appreciated'),
(97, '36', '1', '1', 'tusar', 'appreciated'),
(98, '48', '45', '46', 'jarjiash', 'appreciated'),
(99, '49', '46', '1', 'tusar', 'appreciated'),
(100, '50', '1', '1', 'tusar', 'appreciated'),
(101, '45', '10', '1', 'tusar', 'appreciated');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(50) NOT NULL,
  `tittle` varchar(200) NOT NULL,
  `disc` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `topic_id` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `author_user` varchar(200) NOT NULL,
  `author_id` varchar(200) NOT NULL,
  `post_status` varchar(200) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `tittle`, `disc`, `image`, `topic`, `topic_id`, `area`, `author`, `author_user`, `author_id`, `post_status`, `post_time`) VALUES
(36, 'Mime internet কেও ব্যাবহার করছেন? রিভিউ জানতে চাই, নেট কি স্টেবল? এন্ড আমি শুনেছি মাই', '<p>Mime internet à¦•à§‡à¦“ à¦¬à§à¦¯à¦¾à¦¬à¦¹à¦¾à¦° à¦•à¦°à¦›à§‡à¦¨? à¦°à¦¿à¦­à¦¿à¦‰ à¦œà¦¾à¦¨à¦¤à§‡ à¦šà¦¾à¦‡, à¦¨à§‡à¦Ÿ à¦•à¦¿ à¦¸à§à¦Ÿà§‡à¦¬à¦²? à¦à¦¨à§à¦¡ à¦†à¦®à¦¿ à¦¶à§à¦¨à§‡à¦›à¦¿ à¦®à¦¾à¦‡à¦® à¦à¦° BDIX speed à§§à§¦à§¦ à¦à¦° à¦®à¦¤à¦¨ à¦¹à§Ÿ, à¦à¦Ÿà¦¾ à¦•à¦¿ à¦¸à¦¤à§à¦¯à¦¿? à¦¯à¦¾à¦°à¦¾ à¦¬à§à¦¯à¦¾à¦¬à¦¹à¦¾à¦° à¦•à¦°à¦›à§‡à¦¨ à¦¤à¦¾à¦°à¦¾ à¦œà¦¾à¦¨à¦¿à§Ÿà§‡à¦¨ à¦ªà§à¦²à¦¿à¦œà¥¤ à¦†à¦®à¦¿ mime internet à¦¨à§‡à§Ÿà¦¾à¦° à¦•à¦¥à¦¾ à¦­à¦¾à¦¬à¦›à¦¿, à¦¬à¦¾à¦²à¦¿à§Ÿà¦¾ à¦ªà§à¦•à§à¦°à§‡ à¦à¦° à¦šà¦¾à¦‡à¦¤à§‡ à¦¬à§‡à¦Ÿà¦¾à¦° à¦†à¦° à¦•à¦¿à¦›à§ à¦–à§à¦œà§‡ à¦ªà¦¾à¦‡à¦¨à¦¿à¥¤</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642310245/nlaxvs6xnemyjdsqruzs.jpg', 'Help Seeking', '23', 'Rajshahi', '', 'tusar', '1', 'approved', '2022-01-16 05:30:52'),
(37, 'Place: ', '<p>Place:&nbsp;<a href=\"https://www.facebook.com/northburg.bd/?__cft__[0]=AZXdE7oOA9NjuhkS35xRxupGLWVM5MuJ7X9yQwrf6EnomC4p08O24ILlwiRamSn6Q6xty-ig0QXqx40uduJ5on7mQpdXK71VG3F3B89DDcw2WZnw3tcsJ3Vk_CLfFDPA2j5ALuvdQGsAxTFRlcmeqn1nMHCp2N0YRnQRx2rZqx5ggPcgIegALVRfvgqVJMdDihM&amp;__tn__=kK-R\">NORTH BURG</a></p>\r\n\r\n<p>Item : à¦šà¦¿à¦•à§‡à¦¨ à¦šà¦¾à¦“à¦®à§‡à¦‡à¦¨, à¦¹à¦Ÿ à¦•à¦«à¦¿</p>\r\n\r\n<p>Rating : *Disappointing*</p>\r\n\r\n<p>à¦šà¦¾à¦“à¦®à§‡à¦‡à¦¨ à¦Ÿà¦¾à¦° à¦•à¦¥à¦¾ à¦•à¦¿ à¦¯à§‡ à¦¬à¦²à¦¬à§‹! à¦†à¦®à¦¿ à¦•à§‹à¦¨à§‹ à¦°à¦¾à¦¨à§à¦¨à¦¾ à¦ªà¦¾à¦°à¦¿à¦¨à¦¾, à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦° à¦šà§‡à§Ÿà§‡ à¦¬à§‡à¦Ÿà¦¾à¦° à¦¨à§à¦¡à§à¦²à¦¸ à¦†à¦®à¦¿ à¦¬à¦¾à§œà¦¿à¦¤à§‡ à¦¬à¦¾à¦¨à¦¾à¦¤à§‡ à¦ªà¦¾à¦°à¦¿à¥¤ à¦šà¦¾à¦“à¦®à§‡à¦‡à¦¨ à¦œà¦¿à¦¨à¦¿à¦¶ à¦Ÿà¦¾ à¦†à¦®à¦¾à¦° à¦¬à¦¾à¦‡à¦°à§‡ à¦–à§‡à¦¤à§‡ à¦­à¦¾à¦²à§‹ à¦²à¦¾à¦—à§‡ à¦à¦•à¦Ÿà¦¾à¦‡ à¦•à¦¾à¦°à¦¨à§‡, à¦°à§‡à¦¸à§à¦Ÿà§à¦°à§‡à¦¨à§à¦Ÿà§‡ à¦…à¦¨à§‡à¦• à¦°à¦•à¦® à¦¸à¦¸ à¦‡à¦‰à¦œ à¦•à¦°à¦¾ à¦¹à§Ÿ à¦¯à§‡à¦—à§à¦²à§‹ à¦¬à¦¾à§œà¦¿à¦¤à§‡ à¦¸à¦¾à¦§à¦¾à¦°à¦¨à¦¤ à¦à¦­à§‡à¦²à¦à¦‡à¦¬à¦² à¦¥à¦¾à¦•à§‡à¦¨à¦¾à¥¤ à¦«à¦¿à¦¶ à¦¸à¦¸, à¦“à§Ÿà§‡à¦¸à§à¦Ÿà¦¾à¦° à¦¸à¦¸, à¦¸à§à¦‡à¦Ÿ à¦¸à¦¸, à¦—à¦¾à¦°à§à¦²à¦¿à¦• à¦¸à¦¸ à¦‡à¦¤à§à¦¯à¦¾à¦¦à¦¿à¥¤</p>\r\n\r\n<p>à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦‡ à¦šà¦¾à¦“à¦®à§‡à¦‡à¦¨ à¦ à¦®à§‡à¦¬à¦¿ à¦Ÿà¦®à§‡à¦Ÿà§‹ à¦¸à¦¸ à¦Ÿà¦¾à¦“ à¦­à¦¾à¦²à§‹ à¦®à¦¤à§‹ à¦›à¦¿à¦²à§‹à¦¨à¦¾à¥¤ à¦¤à§‡à¦²à§‡à¦° à¦­à§‡à¦¤à¦° à¦²à¦¬à¦¨ à¦šà§‡à¦°à¦¿ à¦Ÿà¦®à§‡à¦Ÿà§‹, à¦•à§à¦¯à¦¾à¦ªà¦¸à¦¿à¦•à¦¾à¦®, à¦šà¦¿à¦•à§‡à¦¨, à¦¦à§à¦‡ à¦Ÿà§à¦•à¦°à¦¾ à¦®à¦¾à¦¶à¦°à§à¦® à¦¸à¦¤à§‡ à¦•à¦°à§‡ à¦¸à¦¿à¦¦à§à¦§ à¦¨à§à¦¡à¦²à¦¸ à¦¢à§‡à¦²à§‡ à¦†à¦®à¦¾à¦•à§‡ à¦¸à¦¾à¦°à§à¦­ à¦•à¦°à§‡ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¥¤</p>\r\n\r\n<p>à¦†à¦° à¦ªà¦°à¦¿à¦®à¦¾à¦¨ à¦¤à§‹ à¦›à¦¬à¦¿à¦¤à§‡à¦‡ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦šà§à¦›à§‡à¦¨, à§¨à§¦à§¦ à¦Ÿà¦¾à¦•à¦¾à¦° à¦¨à§à¦¡à§à¦²à¦¸à¥¤ à¦¤à¦¾à¦“ à¦¦à¦¾à¦® à¦†à¦° à¦ªà¦°à¦¿à¦®à¦¾à¦¨ à¦Ÿà¦¾ à¦œà¦¾à¦¸à§à¦Ÿà¦¿à¦«à¦¾à¦‡à¦¡ à¦¹à¦¤à§‹ à¦¯à¦¦à¦¿ à¦•à§‹à§Ÿà¦¾à¦²à¦¿à¦Ÿà¦¿ à¦­à¦¾à¦²à§‹ à¦¹à¦¤à§‹ à¦¤à¦¾à¦¹à¦²à§‡à¥¤</p>\r\n\r\n<p>à¦à¦¤à§‹ à¦•à¦® à¦ªà¦°à¦¿à¦®à¦¾à¦¨ à¦›à¦¿à¦²à§‹ à¦¤à¦¾à¦“ à¦†à¦®à¦¿ à¦®à§à¦¯à¦¾à¦•à§à¦¸à¦¿à¦®à¦¾à¦® à¦¨à¦·à§à¦Ÿ à¦•à¦°à§‡à¦›à¦¿ (picture added) à¦•à¦¾à¦°à¦¨ à¦¸à§à¦¬à¦¾à¦¦ à¦ªà§à¦¯à¦¾à¦¥à§‡à¦Ÿà¦¿à¦• à¦›à¦¿à¦²à§‹à¥¤ I really hope à¦¤à¦¾à¦°à¦¾ à¦¤à¦¾à¦¦à§‡à¦° à¦°à§‡à¦¸à¦¿à¦ªà¦¿ à¦Ÿà¦¾ à¦à¦•à¦Ÿà§ à¦¬à§‡à¦Ÿà¦¾à¦° à¦•à¦°à¦¬à§‡à¥¤ à¦¯à¦¾à§Ÿà¦—à¦¾ à¦Ÿà¦¾ à¦†à¦®à¦¾à¦° à¦­à¦¾à¦²à§‹ à¦²à¦¾à¦—à§‡, à¦à¦®à¦¨ à¦¯à¦¾à§Ÿà¦—à¦¾à§Ÿ à¦à¦®à¦¨ à¦•à§‹à§Ÿà¦¾à¦²à¦¿à¦Ÿà¦¿à¦° à¦à¦•à¦Ÿà¦¾ à¦–à¦¾à¦¬à¦¾à¦° à¦†à¦¸à¦²à§‡à¦‡ à¦¹à¦¤à¦¾à¦¶à¦¾à¦œà¦¨à¦•à¥¤</p>\r\n\r\n<p>à¦à¦‡ à¦¶à§€à¦¤à§‡ à¦†à¦®à¦¿ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¬à§‡à¦¶à¦¿ à¦—à§‡à¦›à¦¿ à¦†à¦®à¦¿ à¦à¦‡ à¦¯à¦¾à§Ÿà¦—à¦¾à¦Ÿà¦¾à§Ÿà¥¤ à¦•à¦¾à¦°à¦¨ à¦¤à¦¾à¦¦à§‡à¦° à¦¹à¦Ÿ à¦•à¦«à¦¿à¦Ÿà¦¾à¥¤ à¦à¦‡ à¦¶à§€à¦¤à§‡ à¦¤à¦¾à¦¦à§‡à¦° à¦•à¦«à¦¿ à¦Ÿà¦¾ à¦–à§à¦¬ à¦­à¦¾à¦²à§‹ à¦²à¦¾à¦—à¦¤à§‹à¥¤ à¦šà¦¿à¦¨à¦¿ à¦†à¦²à¦¾à¦¦à¦¾ à¦•à¦°à§‡ à¦¦à¦¿à¦¤à§‹, à¦†à¦®à¦°à¦¾ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦Ÿà§‡à¦¸à§à¦Ÿ à¦…à¦¨à§à¦¯à¦¾à§Ÿà§€ à¦šà¦¿à¦¨à¦¿ à¦¦à¦¿à§Ÿà§‡ à¦¨à¦¿à¦¤à¦¾à¦®à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦¬à¦¾à¦° à¦¸à§‡à¦Ÿà¦¾ à¦ªà¦¾à¦‡à¦¨à¦¿à¥¤ à¦à¦®à¦¨à¦¿ à¦à¦• à¦®à¦— à¦•à¦«à¦¿ à¦¦à¦¿à§Ÿà§‡ à¦šà¦²à§‡ à¦¯à¦¾à§Ÿà¥¤ (à¦à¦¬à¦¾à¦°à§‡à¦° à¦•à¦«à¦¿à¦° à¦›à¦¬à¦¿ à¦¤à§‹à¦²à¦¾ à¦¹à§Ÿà¦¨à¦¿, à¦—à¦¤ à¦®à¦¾à¦¸à§‡à¦° à¦à¦•à¦Ÿà¦¾ à¦à¦¡ à¦•à¦°à§‡ à¦¦à¦¿à¦²à¦¾à¦®)</p>\r\n\r\n<p>à¦—à§à¦°à§à¦ªà§‡ à¦ªà§‹à¦·à§à¦Ÿ à¦¦à§‡à¦–à§‡à¦›à¦¿à¦²à¦¾à¦® à¦¤à¦¾à¦¦à§‡à¦° à¦“à¦¨à¦¾à¦° à¦šà§‡à¦žà§à¦œ à¦¹à§Ÿà§‡à¦›à§‡, à¦à¦¬à¦¾à¦° à¦¯à§‡à§Ÿà§‡ à¦®à§‡à¦¨à§à¦¯à§à¦“ à¦¨à¦¤à§à¦¨ à¦ªà§‡à§Ÿà§‡à¦›à¦¿à¥¤ à¦®à§à¦¯à¦¾à¦¨à§‡à¦œà¦®à§‡à¦¨à§à¦Ÿ à¦à¦° à¦…à¦¬à¦¸à§à¦¥à¦¾ à¦•à¦°à§à¦¨à¥¤ à¦¬à¦¸à¦¾à¦° à¦†à¦§à¦¾ à¦˜à¦¨à§à¦Ÿà¦¾ à¦ªà¦° à¦¡à§‡à¦•à§‡ à¦®à§‡à¦¨à§à¦¯à§ à¦¨à¦¿à§Ÿà§‡à¦›à¦¿à¥¤ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦¬à¦¸à§‡à¦›à¦¿à¦²à¦¾à¦® à¦†à¦®à¦°à¦¾ à¦¬à¦¸à¦¾à¦° à¦†à¦—à§‡ à¦«à¦¾à¦•à¦¾à¦‡ à¦›à¦¿à¦²à§‹, à¦¤à¦¾à¦“ à¦¨à¦¿à¦šà§‡ à¦Ÿà¦¿à¦¶à§à¦¯à§ à¦ªà§œà§‡ à¦›à¦¿à¦²à§‹, à¦ à¦¿à¦• à¦•à¦°à§‡ à¦•à§à¦²à¦¿à¦¨ à¦•à¦°à§‡à¦¨ à¦¨à¦¾à¦‡à¥¤ à¦•à¦«à¦¿ à¦šà¦¾à¦“à¦®à§‡à¦‡à¦¨ à¦à¦•à¦¸à¦¾à¦¥à§‡ à¦¦à¦¿à¦¤à§‡ à¦¬à¦²à§‡à¦›à¦¿à¦²à¦¾à¦® à¦†à¦²à¦¾à¦¦à¦¾ à¦†à¦²à¦¾à¦¦à¦¾ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨ à¦¤à¦¾à¦“ à¦šà¦¾à¦“à¦®à§‡à¦‡à¦¨ à¦ à¦¾à¦¨à§à¦¡à¦¾à¥¤ à¦¨à¦¤à§à¦¨ à¦¨à¦¤à§à¦¨, à¦à¦Ÿà¦¾ à¦†à¦¸à§à¦¤à§‡ à¦†à¦¸à§à¦¤à§‡ à¦ à¦¿à¦• à¦¹à§Ÿà§‡ à¦¯à¦¾à¦¬à§‡ à¦†à¦¶à¦¾ à¦•à¦°à¦¿à¥¤ à¦à¦•à¦Ÿà§ à¦¸à¦®à§Ÿ à¦²à¦¾à¦—à¦¬à§‡ à¦—à§à¦›à¦¿à§Ÿà§‡ à¦¨à¦¿à¦¤à§‡à¥¤ à¦¤à¦¾à¦‡ à¦¯à¦¾à¦¦à§‡à¦° à¦²à¦¿à¦®à¦¿à¦Ÿà§‡à¦¡ à¦¸à¦®à§Ÿ à¦¤à¦¾à¦°à¦¾ à¦¯à§‡à§Ÿà§‡ à¦¬à¦¿à¦ªà¦¦à§‡ à¦ªà§œà¦¬à§‡à¦¨à¥¤ à¦¹à¦¾à¦¤à§‡ à¦¸à¦®à§Ÿ à¦¨à¦¿à§Ÿà§‡ à¦¯à¦¾à¦¬à§‡à¦¨à¥¤ à¦¨à¦¤à§à¦¨ à¦®à§‡à¦¨à§à¦¯à§à¦¤à§‡ à¦…à¦¨à§‡à¦• à¦¨à¦¤à§à¦¨ à¦–à¦¾à¦¬à¦¾à¦° à¦à¦¡ à¦¹à§Ÿà§‡à¦›à§‡, à¦Ÿà§à¦°à¦¾à¦‡ à¦•à¦°à¦¤à§‡ à¦¯à¦¾à¦¬à§‹ à¦‡à¦¨à¦¶à¦¾à¦†à¦²à§à¦²à¦¾à¦¹, à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦–à¦¨ à¦¨à¦¾à¥¤&nbsp;<img alt=\"ðŸ˜…\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t53/1/16/1f605.png\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/happy_fooding?__eep__=6&amp;__gid__=697272633689748&amp;__cft__[0]=AZXdE7oOA9NjuhkS35xRxupGLWVM5MuJ7X9yQwrf6EnomC4p08O24ILlwiRamSn6Q6xty-ig0QXqx40uduJ5on7mQpdXK71VG3F3B89DDcw2WZnw3tcsJ3Vk_CLfFDPA2j5ALuvdQGsAxTFRlcmeqn1nMHCp2N0YRnQRx2rZqx5ggPcgIegALVRfvgqVJMdDihM&amp;__tn__=*NK-R\">#Happy_Fooding</a>&nbsp;<img alt=\"â¤ï¸\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6c/1/16/2764.png\" /></p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642310474/fedlgh3ov7cs3gwrw2jg.jpg', 'Food Review', '22', 'Rajshahi', '', 'tusar', '1', 'approved', '2022-01-16 05:30:30'),
(38, '', '<h3>Food Fantasy Restaurant</h3>\r\n\r\n<p>Assalamu alaikum. Food fantasy restaurant is very thankful to all and we highly appreciate for supporting and cooperating with us throughout our journey since the beginning. We always try to serve our guests with fresh, healthy foods and we&#39;re strongly against any admixture. We&#39;ll be offering some new features for our dine in guests. From now on our guests will have chances to pass some quality time with friends and family during waiting time between ordering their desired food items and getting them served on their tables. We&#39;ll arrange some indoor games like ludo, chess, uno and cards etc on the table. Our guests can enjoy playing those games without disturbing other guests. We&#39;ve large space with 58 sitting arrangements and can extend the capacity if needed. We&#39;ve large variety of food items and combo packages for party, seminar or any other programme. Anyone can contact us for booking space in advance. Now I would like to announce about our offer packages from 06.01.2022 until any further notice. We&#39;ve got so many calls and messages with the request for 2 different offer packages that we stopped offering in recent weeks. We&#39;re appreciating those requests and we&#39;ve decided to launch those 2 offer packages again along with our running offer package from today. So our offer packages are shown below:</p>\r\n\r\n<p>Budget Friendly Offer (Student Pack):</p>\r\n\r\n<p>1. Fried Rice</p>\r\n\r\n<p>2. Spicy Chilli Chicken Fry</p>\r\n\r\n<p>3. Hot Sauce Chicken</p>\r\n\r\n<p>4. Chinese Vegetables</p>\r\n\r\n<p>5. Side Salad</p>\r\n\r\n<p>6. Soft Drinks (Not available for parcel)</p>\r\n\r\n<p>Price: Only@120 Taka (For parcel 15 taka will be added on)</p>\r\n\r\n<p>*We&#39;ve replaced Chowmein with soft drink as per our guests reviews for this offer package.</p>\r\n\r\n<p>Full Course Chinese Couple Platter (2 Persons):</p>\r\n\r\n<p>1. Thai Soup (1:2)</p>\r\n\r\n<p>2. Wonton (4 Pieces)</p>\r\n\r\n<p>3. Egg &amp; Vegetables Fried Rice Bowl (1:2)</p>\r\n\r\n<p>4. Thai Fried Chicken (4 pieces)</p>\r\n\r\n<p>5. Sweet &amp; Sour Chicken or Hot Sauce Chicken (1:2)</p>\r\n\r\n<p>6. Chinese Vegetables</p>\r\n\r\n<p>7. Side Salad</p>\r\n\r\n<p>8. Cream Caramel</p>\r\n\r\n<p>9. Soft Drinks (2 Glasses) (Not available for parcel)</p>\r\n\r\n<p>Price: Only@490 Taka (For parcel 30 taka will be added on)</p>\r\n\r\n<p>Snacks Combo Pack:</p>\r\n\r\n<p>1. Chicken Delight Burger</p>\r\n\r\n<p>2. Crispy Chicken</p>\r\n\r\n<p>3. Potato Wedges</p>\r\n\r\n<p>4. Buffalo Wings (2 Pieces)</p>\r\n\r\n<p>Price: Only@220 Taka (For parcel 15 taka will be added on)</p>\r\n\r\n<p>Address : Star Mansion, 3rd Floor (Top of City Bank), Zero Point, Shaheb Bazar, Rajshahi. Mobile : 01714065097.</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/home_delivery?__eep__=6&amp;__gid__=697272633689748&amp;__cft__[0]=AZUzGrmofSm6Eh26ftPpW8vbG3vo_ok4pAifZIJuaezfB_jxfgbBRelyuQ5dznJ1Vrtk6fPWem1RH0h9sveIOjOrYovOC9oK1m2bwZVXH5U4lDO01BQTJeoJGnvulzVRgH95-U8197NC4GDDfoVist1kco0I4sZSBAZbGbHcEEHIRijBQe1ioKfok4FcAespV7c&amp;__tn__=*NK-R\">#Home_Delivery</a>:</p>\r\n\r\n<p>FoodShahi : +8801714081068.</p>\r\n\r\n<p>Food Aholic :+8801776410066.</p>\r\n\r\n<p>*Home delivery charge will be added with the offer packages.</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642310722/bggk25rh6mqbrkgdydty.jpg', ' Advertise', '24', 'Rajshahi', '', 'tusar', '1', 'approved', '2022-01-16 05:26:38'),
(40, 'Curabitur turpis. Vivamus in erat ut urna cursus vestibulum. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Nam adipiscing. Suspendisse potenti.\r\n\r\nEtiam imperdiet imperd', '<p>Curabitur turpis. Vivamus in erat ut urna cursus vestibulum. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Nam adipiscing. Suspendisse potenti.</p>\r\n\r\n<p>Etiam imperdiet imperdiet orci. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Vivamus quis mi.</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642315666/bpfpwngr31fj6s4h1dci.jpg', 'TO LET', '29', 'Naogaon', '', 'soumik22', '41', 'approved', '2022-01-16 06:47:47'),
(44, 'how to brew black tea?\r\n\r\nWe all reach for a warm hug of tea we feel under the weather. But have you wondered, where does tea leaves come from?&nbsp;You may not know, b', '<p><strong>how to brew black tea?</strong><br />\r\n<br />\r\nWe all reach for a warm hug of tea we feel under the weather. But have you wondered, where does tea leaves come from?&nbsp;You may not know, but a cup of tea is a medley of art, history, and culture. If that interests you, it&rsquo;s only fair you learn <strong>how to brew black tea </strong>the right way.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Let us be your guide as we take you on this journey. We&rsquo;ll look at how to extract the best flavor and different types of tea leaves you can use.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Next, we&rsquo;ll take a quick glance at the ingredients and equipment needed before delving into the steps and some FAQs.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>So what are you waiting for? Let&rsquo;s jump right in.</p>\r\n\r\n<p>Brewing Black Tea at Home: The Basics</p>\r\n\r\n<p>Now most of us know how to make tea. But is that tea made to perfection? That&rsquo;s a different ball game. Don&rsquo;t worry though, we&rsquo;ve got you covered.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With some practice, you&rsquo;ll definitely learn <em>how to brew black tea properly at home! </em>Just don&rsquo;t lose hope with the first shot.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With our step by step guide, you won&rsquo;t go wrong. But since there&rsquo;s no right or wrong answer, don&rsquo;t hesitate to tweak the recipe.&nbsp; After all, you&rsquo;re the boss!&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>So get ready to impress your fussy aunt with some perfectly brewed black tea.</p>\r\n\r\n<p>Fret not, you don&rsquo;t have to give us the credit!</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642316459/nrse04xo8uuarscikhjn.jpg', 'Local Guides', '25', 'Rajshahi', '', 'peoms', '10', 'approved', '2022-01-16 07:00:59'),
(45, 'How do I extract the best flavor from black tea?&nbsp;\r\n\r\nIf you&rsquo;re looking to just make a quick cup of tea, things seem pretty basic. But there are several factors ', '<h1><strong>How do I extract the best flavor from black tea?&nbsp;</strong></h1>\r\n\r\n<p>If you&rsquo;re looking to just make a quick cup of tea, things seem pretty basic. But there are several factors to consider when you want to make a flavorful cup of tea, brewed to perfection.</p>\r\n\r\n<p>The best flavor can be extracted from tea when you skip tea leaves. So what to use instead?</p>\r\n\r\n<p>Loose tea is your best friend. This is because tea leaves often have poor quality crushed tea which doesn&rsquo;t allow the flavor to seep into the water.</p>\r\n\r\n<p>But when you go for a box of loose tea, you&rsquo;re ensuring that they&rsquo;re handpicked and of maximum flavor.&nbsp;</p>\r\n\r\n<p>So even if it&rsquo;s a bit more expensive, the investment is well worth the party in your mouth.</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642316548/v633szfmggtpnb587h2e.jpg', 'Local Guides', '25', 'Rajshahi', '', 'peoms', '10', 'approved', '2022-01-16 07:02:29'),
(46, 'I walk alone under this moonlit night. Pin drop silence, not a soul to be found. I gaze at the stars pondering about what&#39;s to come and what has been. The silence is beautiful but overwhelming.', '<h3>S O L I T U D E</h3>\r\n\r\n<p>I walk alone under this moonlit night. Pin drop silence, not a soul to be found. I gaze at the stars pondering about what&#39;s to come and what has been. The silence is beautiful but overwhelming. It&#39;s so peaceful. I also contemplate about what could have been, how a small different decision could have altered everything.</p>\r\n\r\n<p>How all the new faces I know would be unknown, how everything that holds meaning now would have none. Would I be a different person or would I remain the same? Morning dew is starting to set in, I feel a slight chill in the air. My only companion is this lit cigarette, which will also eventually leave my side. You can&#39;t trust anyone these days, can you? Everyone and everything serves their purpose and leaves, why should this cigarette be any different. Like everyone and everything this cigarette will also turn to just another memory. Ashes of something once amazing. But then there are also the moon and the stars. Some are like the moon and the stars. They&#39;re just momentarily gone only to reappear again in their entire glory. Shining ever so brightly and shedding light on this dark night. The night would be so much more mundane without them. Such is life I guess.</p>\r\n\r\n<p>The hardest part is differentiating between who are the cigarettes in my life and how are the moon and the stars. Am I a cigarette in your life or am I the instruments of relapsing beauty? Are you a cigarette or are you an instrument of such beauty?</p>\r\n\r\n<p>- Aatif Huque</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642316782/ebs3prnxq9vz0wt0ydeh.jpg', 'Articles', '30', 'Rajshahi', '', 'himujoe', '42', 'approved', '2022-01-16 07:09:07'),
(47, 'Sony&#39;s new WF-C500 in-ear buds are $58 for today only at Amazon\r\n\r\nSony&#39;s&nbsp;', '<h1>Sony&#39;s new WF-C500 in-ear buds are $58 for today only at Amazon</h1>\r\n\r\n<p>Sony&#39;s&nbsp;<a href=\"https://www.engadget.com/sony-wf-c500-earbuds-wh-xb910n-headphones-announced-150013440.html\">true wireless WF-C500 earphones</a>&nbsp;offer features like a comfortable fit and support for immersive 360 Reality Audio, but at the regular $100 price they&#39;re not quite a cheap gift. For today only, however, you can pick up a pair for $58, for a very substantial savings of 42 percent.</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642319304/cu35xgbfz02v0qlyuxba.jpg', 'Articles', '30', 'Rajshahi', '', 'sahadat531', '45', 'approved', '2022-01-16 07:48:25'),
(48, 'Everything Not Included at Your &#39;All-Inclusive&#39; Resort\r\n\r\nAll-inclusive vacations can be a great deal, at least on paper:&nbsp;Just hand over a fixed amount of money to a resort or', '<h1>Everything Not Included at Your &#39;All-Inclusive&#39; Resort</h1>\r\n\r\n<p>All-inclusive vacations can be a great deal, at least on paper:&nbsp;Just hand over a fixed amount of money to a resort or cruise company,&nbsp;and they&rsquo;ll take care of your lodging, meals, entertainment, and maybe even airfare. But &ldquo;all-inclusive&rdquo; means different things in different situations&mdash;and you might be surprised at what&rsquo;s&nbsp;<em>not</em>&nbsp;included.</p>\r\n\r\n<p>The single most important thing to know before booking an all-inclusive vacation is that no two companies operate in&nbsp;the same way. Although the following perks are among the most frequently excluded, some packages do include them. There&rsquo;s only one way to know exactly what you&rsquo;re getting for your money: Always read the fine print. Reading legalese sucks, but the alternative (getting slapped with a surprise bill on an allegedly relaxing vacation) is far worse.</p>\r\n\r\n<h2>Resort fees</h2>\r\n\r\n<p>When people complain about hidden fees and surprise charges on a supposedly all-inclusive vacation, they&rsquo;re almost always talking about resort fees. These charges run from a few bucks a night to hundreds of dollars,&nbsp;and usually show up on your bill with a line item like &ldquo;housekeeping fee,&rdquo; &ldquo;gym access,&rdquo; or some other standard amenity you&rsquo;d expect to be included in the price of your room.</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642319519/mczq2h6wubms2hkqknb2.jpg', 'Articles', '30', 'Rajshahi', '', 'sahadat531', '45', 'approved', '2022-01-16 07:51:59'),
(50, 'Spaciously Designed And Strongly Structured This Apartment Is Now Vacant For Rent In Rajshahi .\r\n\r\nIn the apartment, there are two bedrooms, each with an attached balcony. Right in the middl', '<h3>Spaciously Designed And Strongly Structured This Apartment Is Now Vacant For Rent In Rajshahi .</h3>\r\n\r\n<p>In the apartment, there are two bedrooms, each with an attached balcony. Right in the middle, there is the dining room and next to is the kitchen and the space that can be used as the living space. The residence seems to be full of balconies as well. There&#39;s one attached to the kitchen, to the living space and to the dining room as well. Due to this, you will always find plenty of air within the apartment and a comfortable temperature at all times.<br />\r\n<br />\r\nMirpur DOHS is the perfect area to reside in if you like strict discipline. The area is very well organized and there&#39;s everything you need right here. When you get out, you will find a multitude of eateries that have gained huge popularity over time.<br />\r\n<br />\r\nProperty Features:<br />\r\nNorth Faced<br />\r\nCovered Area: 3.7<br />\r\nNumber of floors:7<br />\r\nTerrace<br />\r\nDedicated Security Guard<br />\r\nElectricity Backup<br />\r\nIntercom<br />\r\nBalconies<br />\r\nNearby Amenities: Mirpur DOHS Central Mosque, Mirpur DOHS Park, Shagufta<br />\r\n<br />\r\n2 months advance<br />\r\n<br />\r\nService charge BDT. 3000<br />\r\n<br />\r\nWe suggest to make up your mind and steal this deal offered at the best value.</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1642376640/izysqi3pb3sduv96bqgx.jpg', 'TO LET', '29', 'Rajshahi', '', 'tusar', '1', 'approved', '2022-01-16 23:44:33'),
(51, 'Heading\r\n\r\nSed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.S', '<h1>Heading</h1>\r\n\r\n<p>Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>dasd</td>\r\n			<td>dasdas</td>\r\n		</tr>\r\n		<tr>\r\n			<td>dsad</td>\r\n			<td>asd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>das</td>\r\n			<td>asdas</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'https://res.cloudinary.com/tusars-locally/image/upload/v1651523565/jmjwzyzb9zptqrgfa9yr.webp', 'TO LET', '29', 'Rajshahi', '', 'tusar', '1', 'approved', '2022-05-02 20:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `criteria` varchar(20) NOT NULL,
  `message` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `userid`, `username`, `email`, `subject`, `criteria`, `message`, `time`) VALUES
(10, '1', 'tusar', 'arifuzzamantusar50@gmail.com', 'others', 'registered', '<p><strong>sadsasadsadsadsadsadsa</strong></p>\r\n\r\n<p>dd asd as dsa dfdasf dsa fdsafdasf dsaf dsa fas dsadsadasdsadasdasdasdsadsadsadasdsadas das d sadsd fdsaf.das f.dsa adsas .fsdagfadsfas. dgasgdsaggdas .vdsalaiopsidkfiq apd asdioufkaoreqiw asfdahhfeu asu d asiod</p>\r\n', '2022-01-16 14:48:13'),
(17, '1', 'tusar', 'arifuzzamantusar50@gmail.com', 'No Subject', 'registered', '', '2022-01-16 14:57:45'),
(18, '', '', 'dsadsa@de.de', 'No Subject', 'Unregistered', '', '2022-01-16 14:59:06'),
(19, '11', 'john', 'john@yahoo.com', 'No Subject', '', '<p>@john hakensa</p>\r\n', '2022-01-16 18:46:41'),
(20, '11', 'john', 'john@yahoo.com', 'banned', '', '<p>bachan bai</p>\r\n', '2022-01-16 18:48:29'),
(21, '11', 'john', 'john@yahoo.com', 'banned', 'registered', '<p>fdsf</p>\r\n', '2022-01-16 18:50:18'),
(22, '20', 'tusar1010', 'dasd@de.de', 'banned', 'registered', '<p>i did mistake</p>\r\n', '2022-01-16 14:21:53'),
(23, '', '', 'aztusar5@gmail.com', 'others', 'Unregistered', '<p>dasdas</p>\r\n', '2022-01-16 14:28:25'),
(24, '35', 'xkgcflvpoy', 'xkgcflvpoy@canfga.org', 'No Subject', 'registered', '', '2022-01-16 03:19:29'),
(25, '35', 'xkgcflvpoy', 'xkgcflvpoy@canfga.org', 'No Subject', 'registered', '', '2022-01-16 03:19:29'),
(26, '35', 'xkgcflvpoy', 'xkgcflvpoy@canfga.org', 'No Subject', 'registered', '', '2022-01-16 03:21:11'),
(27, '35', 'xkgcflvpoy', 'xkgcflvpoy@canfga.org', 'No Subject', 'registered', '', '2022-01-16 03:23:08'),
(28, '35', 'xkgcflvpoy', 'xkgcflvpoy@canfga.org', 'No Subject', 'registered', '', '2022-01-16 03:23:29'),
(29, '43', 'wozvutv', 'wozvutv@canfga.org', 'Bug Found', 'registered', '<p>Images are not circle totally</p>\r\n', '2022-01-16 13:14:39'),
(30, '46', 'jarjiash', 'jarjiashazamraz9@gmail.com', 'No Subject', 'registered', '<p>dsf</p>\r\n', '2022-01-16 19:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `privileges_1` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `privileges_1`) VALUES
(1, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `discription` longtext NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `slug`, `discription`, `image`) VALUES
(22, 'Food Review', 'food-review', '<p>Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>\r\n\r\n<p>Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>\r\n', '9845-food-review.png'),
(23, 'Help Seeking', 'help-seeking', '<p>Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>\r\n\r\n<p>Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '8312-Ask-for-seeking.jpg'),
(24, ' Advertise', 'advertise', '<p>Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh.</p>\r\n\r\n<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>\r\n', '6369-adds.jpg'),
(25, 'Local Guides', 'local-guides', '<p>Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>\r\n\r\n<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta.</p>\r\n', '8426-local-guides.jpg'),
(29, 'TO LET', 'to-let', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.', '1940-to-let.jpg'),
(30, 'Articles', 'articles', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>\r\n\r\n<p>Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>\r\n\r\n<p>Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus.</p>\r\n\r\n<p>Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>\r\n', '2712-news-articles.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bio` longtext NOT NULL,
  `city` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `last_otp_code` int(30) NOT NULL,
  `otp_time` varchar(50) NOT NULL,
  `ev_status` varchar(50) NOT NULL,
  `avater_image` varchar(200) NOT NULL,
  `cover_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `bio`, `city`, `nid`, `birthday`, `gender`, `company`, `position`, `facebook`, `twitter`, `website`, `linkedin`, `password`, `status`, `last_otp_code`, `otp_time`, `ev_status`, `avater_image`, `cover_image`) VALUES
(1, 'tusar', 'Arifuzzaman', 'Tusar', 'arifuzzamantusar50@gmail.com', '01713644570', '                     Lazy By Born                     ', 'Rajshahi', '1234', '', '                                 Male', 'Varendra University', 'Studying B.Sc in CSE', 'arifuzzaman.tusar.50', 'arifuzzamantusar', 'www.arifuzzamantusar.com', 'arifuzzamantusar', '1e48c4420b7073bc11916c6c1de226bb', 'approved', 924733962, '', '1', '3203-IMG_20190708_214326.jpg', '9322-tusars.jpeg'),
(6, 'abony', 'Tajnima Binte', 'Naz', 'abony@gmail.com', '', '        ', 'Rajshahi', '181311035', '', '    ', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', 0, '', '0', '1049-abony.jpg', ''),
(7, 'soumik', 'SouMik', 'Ahammed', 'soumik@gmail.com', '0175645545', '  I am a noob     ', 'Rajshahi', '181311006', '', ' Male', 'Varendra University', 'Class Representive', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', 0, '', '0', '3598-soumik.jpg', '1929-cover.jpg'),
(8, 'raz', 'Jarjiash', 'Azam', 'raz@hotmail.com', '017212555', 'My talent is all about the idea  build', 'Rajshahi', '181311003', '1997-12-04', 'Male', 'Microsoft', 'Jr Developer', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', 0, '', '0', '9560-raz.jpg', ''),
(10, 'peoms', 'Peoms', 'Islam', 'peomsislam16@gmail.com', '0176366656', '              ', 'Rajshahi', '181311034', '', '       ', 'Fiverr', 'Digital Marketer', '', '', '', '', '888c61cbbc4d0a53f2eafdccab9dec74', 'banned', 656684862, '', '0', '4050-peomsislam.jpg', ''),
(11, 'john', 'John', 'Doe', 'john@yahoo.com', '', '    ', 'Rajshahi', '15445554', '', '  ', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'pending', 0, '', '0', 'avater.png', ''),
(20, 'tusar1010', 'John ', 'Abraham', 'dasd@de.de', '021121', '    asdasd', 'Rajshahi', '212312', '', '  ', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'banned', 0, '', '0', 'avater.png', ''),
(36, 'arifuzzaman', 'Arifuzzaman', '', 'arifuzzamant@gmail.com', '01713644570', '    ', 'Rajshahi', '000111000111', '', ' Male', '', '', '', '', '', '', '47f94cdd2ce690a0771b3de5eada2689', 'pending', 142029, '', 'verified', '3269-Arifuzzaman Tusar - Slideshare.jpg', '3684-pexels-breakingpic-3305.jpg'),
(39, 'soumik12', '', '', 'soumik12@gmail.com', '', '', 'Rajshahi', '20006416029000051', '', '', '', '', '', '', '', '', 'e99a18c428cb38d5f260853678922e03', 'pending', 659373, '', 'unverified', '', ''),
(41, 'soumik22', 'Soumik', 'Ahammed', 'soumik.ahammed.11@gmail.com', '01689201370', '    gg  ', 'Naogaon', '2000641602900005144', '', 'Male', 'n/a', 'Developer', '', '', '', '', 'e99a18c428cb38d5f260853678922e03', 'pending', 320345, '', 'verified', '7839-ppu.jpg', '5689-wp9109383.jpg'),
(42, 'himujoe', 'Himu', 'Joe', 'aronnohimu@gmail.com', '01626547638', '            ', 'Rajshahi', '2583217854', '', '  Male', '', '', '', '', '', '', '5b04837ba206ba25ff74bb300bb316ac', 'pending', 154610, '', 'verified', '2424-IMG_20210815_150101.jpg', ''),
(43, 'wozvutv', 'WozVutTV', '', 'wozvutv@canfga.org', '', '    ', 'Rajshahi', '051349735', '', '  ', '', '', '', '', '', '', '51d612445ad626581d7d1d48487da848', 'pending', 403026, '', 'verified', '9444-photo-1619533394727-57d522857f89.jpeg', ''),
(44, 'CzarMelvin', '', '', 'aronnohimu2@gmail.com', '', '', 'Rajshahi', '9853217854', '', '', '', '', '', '', '', '', '4847c0303a965146c226491a7272d890', 'pending', 791439, '', 'unverified', '', ''),
(45, 'sahadat531', 'Sahadat Hossen', 'Sajib', 'sahadathossensajib@gmail.com', '', '  ', 'Rajshahi', '1233432242', '', ' ', '', '', '', '', '', '', '36963d8519a5f135f3c5cafd63e185dd', 'pending', 733389, '', 'verified', '2546-sahadathossensajib.jpg', ''),
(46, 'jarjiash', '', '', 'jarjiashazamraz9@gmail.com', '', '    ', 'Rajshahi', '03541230', '', ' Male', '', '', '', '', '', '', 'c1300284d090155e5c0697e83b90ddae', 'pending', 470601785, '', 'verified', '6957-raz.jpg', '2597-cl5ltsoxn5t5jotwlgq7.jpg'),
(47, 'Raj Dev', '', '', 'rj.12345.rd@gmail.com', '', '', 'Rajshahi', '1504968908', '', '', '', '', '', '', '', '', '6c3d1b0092e4e10b6f3ccd3c49e84507', 'pending', 713075, '', 'unverified', '', ''),
(48, 'Tibi', '', '', 'wtibor@yahoo.co.uk', '', '', 'Sirajganj', '1', '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'pending', 110266968, '', 'unverified', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`SL`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `appreciation`
--
ALTER TABLE `appreciation`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `app_options`
--
ALTER TABLE `app_options`
  ADD PRIMARY KEY (`ao_id`),
  ADD UNIQUE KEY `ao_key` (`ao_key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_ID`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`dist_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `appreciation`
--
ALTER TABLE `appreciation`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `app_options`
--
ALTER TABLE `app_options`
  MODIFY `ao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
