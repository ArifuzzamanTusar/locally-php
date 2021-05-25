-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 08:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locally`
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
(242, 12, 8, 'raz'),
(245, 13, 8, 'raz'),
(246, 9, 8, 'raz'),
(247, 6, 1, 'tusar'),
(250, 13, 1, 'tusar'),
(251, 17, 1, 'tusar'),
(252, 19, 1, 'tusar'),
(254, 19, 6, 'abony'),
(255, 13, 6, 'abony'),
(256, 12, 6, 'abony'),
(257, 22, 1, 'tusar'),
(267, 25, 10, 'peoms'),
(271, 26, 10, 'peoms'),
(273, 22, 10, 'peoms'),
(274, 25, 1, 'tusar'),
(276, 25, 8, 'raz'),
(279, 28, 1, 'tusar'),
(280, 22, 8, 'raz'),
(284, 19, 8, 'raz'),
(285, 28, 8, 'raz'),
(289, 30, 11, 'john'),
(290, 12, 1, 'tusar'),
(291, 31, 20, 'tusar1010'),
(293, 31, 1, 'tusar'),
(294, 30, 1, 'tusar');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_ID` int(100) NOT NULL,
  `comment_author_id` varchar(100) NOT NULL,
  `comment_user` varchar(200) NOT NULL,
  `comment_author_email` varchar(200) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
(41, '10', 'peoms', ' ', '2021-01-01 12:58:04', 'noob', '', '8', '25'),
(42, '1', 'tusar', 'Arifuzzaman Tusar', '2021-01-02 03:55:27', 'Ho vai noob', '', '8', '25'),
(43, '10', 'peoms', 'Peoms Islam', '2021-01-02 03:59:26', 'dasdsa', '', '10', '26'),
(44, '1', 'tusar', 'Arifuzzaman Tusar', '2021-01-06 06:00:08', 'dfffggfgfh', '', '8', '28'),
(45, '11', 'john', ' ', '2021-01-15 12:45:36', 'vara beshi hoise .. koman', '', '1', '30'),
(46, '20', 'tusar1010', 'John  Abraham', '2021-01-16 08:16:55', 'good research', '', '1', '31'),
(47, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:52', 'sadasd', '', '1', '30'),
(48, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:54', 'dasdad', '', '1', '30'),
(49, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:54', 'dasdad', '', '1', '30'),
(50, '1', 'tusar', 'Arifuzzaman Tusar', '2021-03-18 15:30:56', 'dasd', '', '1', '30');

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
(36, '28', '8', '1', 'tusar', 'appreciated'),
(37, '22', '1', '8', 'raz', 'appreciated'),
(38, '19', '1', '8', 'raz', 'appreciated'),
(39, '17', '6', '8', 'raz', 'appreciated'),
(40, '19', '1', '8', 'raz', 'appreciated'),
(41, '19', '1', '8', 'raz', 'appreciated'),
(42, '28', '8', '8', 'raz', 'appreciated'),
(43, '30', '1', '1', 'tusar', 'appreciated'),
(44, '31', '1', '1', 'tusar', 'appreciated'),
(45, '31', '1', '11', 'john', 'appreciated'),
(46, '30', '1', '11', 'john', 'appreciated'),
(47, '30', '1', '11', 'john', 'commented'),
(48, '12', '7', '1', 'tusar', 'appreciated'),
(49, '31', '1', '20', 'tusar1010', 'commented'),
(50, '31', '1', '20', 'tusar1010', 'appreciated'),
(51, '31', '1', '1', 'tusar', 'appreciated'),
(52, '31', '1', '1', 'tusar', 'appreciated'),
(53, '30', '1', '1', 'tusar', 'appreciated'),
(54, '30', '1', '1', 'tusar', 'commented'),
(55, '30', '1', '1', 'tusar', 'commented'),
(56, '30', '1', '1', 'tusar', 'commented'),
(57, '30', '1', '1', 'tusar', 'commented');

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
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `tittle`, `disc`, `image`, `topic`, `topic_id`, `area`, `author`, `author_user`, `author_id`, `post_status`, `post_time`) VALUES
(12, ' বাড়ি ভাড়া \r\n৪র্থ তলা\r\n৪ রুম (৩ টি বড়, ১ টি ছোট)\r\nডাইনিং, ৩ টি ওয়াস রুম(২টি এ্য', '<strong> বাড়ি ভাড়া </strong>\r\n৪র্থ তলা\r\n৪ রুম (৩ টি বড়, ১ টি ছোট)\r\nডাইনিং, ৩ টি ওয়াস রুম(২টি এ্যাটাচ)\r\n# বাড়িতে গ্যাসের সংযোগ আছে তবে এই ফ্ল্যাটে কানেকশান নেই। চাইলে ৩-৪ মাসের মধ্যে কানেকশান দেয়া যাবে।\r\n# ব্রডব্যান্ড লাইন এভেইলেবল\r\n# ভাড়া ১১০০০ টাকা\r\nমোবাইলঃ 01752274447\r\nলোকেশনঃ গ্রেটাররোড মসজিদের উত্তরে, লাইন পার হয়ে, দড়িখরবোনা, রাজশাহী।', '4592-homw.jpg', 'TO LET', '29', 'Rajshahi', '', 'soumik', '7', 'approved', '2020-12-11 18:51:57'),
(17, 'Assalamualaikum Dear Foodis,&nbsp;\r\nসুলতান&#39;স টেরিটোরি তে আগামী ৫ দিন চলবে উইন্টার উৎসব, ', '<p><strong>Assalamualaikum Dear Foodis,&nbsp;</strong><br />\r\nসুলতান&#39;স টেরিটোরি তে আগামী ৫ দিন চলবে উইন্টার উৎসব, এবং এতে থাকছে উইন্টার রাইচ প্ল্যাটার, মোট ৬ টি আইটেমের এই সেটমিল টির মূল্য #মাত্র_১৫০_টাকা। 😊<br />\r\n#প্ল্যাটার টিতে যা যা থাকছে,<br />\r\n১. এগ ফ্রাইড রাইচ<br />\r\n২. চিকেন থাই ফ্রাইড (ফুল উইংস)<br />\r\n৩. চিকেন বন-ইন ম্যাক্সিকান<br />\r\n৪. হট মাসালা আলু ফ্রাইস<br />\r\n৫. জুসি পাস্তা<br />\r\n৬. কোলস্লাও সালাদ<br />\r\nঅফার টি চলবে আগামী ৬ দিন, দুপুর ০১:০০ টা হতে রাত ৯:৩০ পর্যন্ত। ১২/১২/২০ হতে ১৮/১২/২০ পর্যন্ত। (শুক্রবার বিকাল ৪ টা থেকে রাত ১০ টা পর্যন্ত খোলা থাকবে)<br />\r\nঅফারটি হোম ডেলিভারি দিচ্ছেন,<br />\r\n&nbsp;- ফুড শাহীঃ 01714-081058<br />\r\nOrder করতে FoodShahi - Home delivery service কে কল করুন অথবা তাদের App থেকে Order করতে পারবেন।<br />\r\nআমাদের ঠিকানাঃ Sultan&#39;s Territory, প্রিন্স টাওয়ার, তুলাপট্টি, গনকপাড়া, রাজশাহী। (সেইলর শপিং মলের অপজিট পাশে, মেঘনা ব্যাংকের বিল্ডিং এর ৩য় তলা)<br />\r\nমোবাঃ ০১৯৫৩৩৩২১১২1</p>\r\n', '4300-khabar.jpg', ' Advertise', '24', 'Rajshahi', '', 'abony', '6', 'approved', '2020-12-30 12:09:51'),
(25, 'Cras ultricies ligula sed magna dictum porta.\r\n\r\nNulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus mag', '<p><strong>Cras ultricies ligula sed magna dictum porta.</strong></p>\r\n\r\n<p>Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.</p>\r\n\r\n<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.</p>\r\n\r\n<p>Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt.</p>\r\n', '9820-Screenshot (61).png', 'TO LET', '29', 'Rajshahi', '', 'raz', '8', 'approved', '2021-01-01 08:51:41'),
(28, 'dsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsadasdsada', '<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>\r\n\r\n<p>Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt.</p>\r\n\r\n<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>\r\n\r\n<p>Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada.</p>\r\n', '7979-', 'TO LET', '29', 'Rajshahi', '', 'raz', '8', 'approved', '2021-01-06 05:59:06'),
(30, 'The business centre is located in the UTC Building, a Grade A 19 storey office building located in the heart of one of Dhaka&#39;s busiest commercial areas, Karwan Bazar.\r\n\r\nIt is beside the', '<p>The business centre is located in the UTC Building, a Grade A 19 storey office building located in the heart of one of Dhaka&#39;s busiest commercial areas, Karwan Bazar.</p>\r\n\r\n<p>It is beside the SARC Fountain with the country&#39;s biggest shopping mall, Bashundhara City Shopping Complex on one side, with the five star Pan Pacific Sonargaon Hotel on the other. The business centre is on the 19th floor of the building which offers several amenities including 5 underground car parks and an exclusive restaurant on the ground floor. With easy access to the Pan Pacific Sonargaon Hotel and Shundarban Hotel, the Prime Minister&#39;s Office, Zia International Airport and Dhanmondi, the building is home to many multinational corporations such as those dedicated to banking, finance, management consultancy, media, etc.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Office Space</td>\r\n			<td>BDT15800 p/mth</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Co-working</td>\r\n			<td>BDT13500 p/mth</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Meeting Room</td>\r\n			<td>BDT980 p/hr</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Location: UTC Building,Kawranbazar,1215 </strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.easyoffices.com/images/results/global-centre/2579/480/2579-1-480x300.jpg?1610708982.jpg?1610708982\" style=\"width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.easyoffices.com/images/results/global-centre/2579/480/2579-8-480x300.jpg?1610708982.jpg?1610708982\" style=\"width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.easyoffices.com/images/results/global-centre/2579/480/2579-7-480x300.jpg?1610708982.jpg?1610708982\" style=\"width:100%\" /></p>\r\n', '6571-2579-6-480x300.jpg', 'TO LET', '29', 'Rajshahi', '', 'tusar', '1', 'approved', '2021-01-15 11:15:55'),
(31, 'How To Write Better Functional Components in React\r\n\r\nThose of us who have worked with functional components in React know that the introduction of Hooks has made our lives ', '<p><strong>How To Write Better Functional Components in React</strong></p>\r\n\r\n<p>Those of us who have worked with functional components in React know that the introduction of Hooks has made our lives a lot easier. However, functional components have their own set of complexities and gotchas. As a result, it can sometimes be difficult to write readable and optimized functional components. Today, we will look at five simple tips to help us do just that.</p>\r\n\r\n<p><strong>1. Memoize Datass</strong></p>\r\n\r\n<p>Let&rsquo;s take a look at the following React component called <code>SortedListView</code>:</p>\r\n\r\n<p>This component takes an array of items, sorts them according to the comparison function provided, and displays them. However, this sorting operation could take a large amount of time if the number of items is large or the comparison function is complicated. This could end up becoming a bottleneck because the component will re-sort the items on each re-render even if the <code>items array</code> or the <code>comparisonFunc</code> does not change, but some other prop or the state changes.</p>\r\n\r\n<p>We can make this more CPU-efficient by memoizing the sorting operation and re-sorting only when the <code>items array</code> changes. This can easily be accomplished with the <code>useMemo</code> Hook:</p>\r\n\r\n<p>So, we can use <code>useMemo</code> to memoize or cache results to expensive operations by trading off some memory.</p>\r\n\r\n<p><strong>2. Memoize Callback Functions</strong></p>\r\n\r\n<p>Just like data, we can also memoize callback functions that a component passes to other components that it renders. An advantage of doing this is that it will prevent useless re-renders in some cases. To illustrate this, let&rsquo;s look at how a component called <code>SortController</code> might use the <code>SortedListView</code> component above:</p>\r\n\r\n<p>In the example above, if you go to the Result tab and type a new title in the text field, it will cause <code>SortController</code> to re-render. As a result, <code>ascendingFn</code> and <code>descendingFn</code> will be recreated. This causes <code>comparisonFunc</code> to change. Since the <code>useMemo</code> in <code>SortedListView</code> depends on <code>comparisonFunc</code>, it will re-sort items even if the <code>comparisonFunc</code> does not change logically.</p>\r\n\r\n<p>We can solve this problem by wrapping <code>ascendingFn</code> and <code>descendingFn</code> in <code>useCallback</code>. This Hook is used to memoize functions. Note that we do not pass anything in the dependency array for <code>useCallback</code> here because they do not rely on anything inside the component.</p>\r\n\r\n<p><strong>3. Decouple Functions That Don&rsquo;t Rely on the Component</strong></p>\r\n\r\n<p>Another improvement that we can make in the function above is to actually move <code>ascendingFn</code> and <code>descendingFn</code> outside of <code>SortController</code>. This is because these functions do not rely on anything inside the component. So, there is really no need to define them inside the component. If we do this, the component becomes more readable. Also, we don&rsquo;t need to use <code>useCallback</code> anymore because these functions will not be recreated on every re-render.</p>\r\n\r\n<p>We could also keep the <code>sort</code> utility functions in another file and import them.</p>\r\n\r\n<p><strong>4. Create Subcomponents</strong></p>\r\n\r\n<p>Creating subcomponents is a useful way to write optimized and readable React code &mdash; even with class components. Subcomponents divide the code base into smaller, digestible, and reusable chunks. This also makes it easier for React to optimize re-renders. So, dividing large components into smaller components is mostly a good idea.</p>\r\n\r\n<p><strong>5. Create and Reuse Custom Hooks</strong></p>\r\n\r\n<p>Just like components, we can create custom reusable Hooks. This makes the code more readable because the code base is divided into smaller, reusable chunks. In our example, we can put the sorting logic inside a custom Hook called <code>useSorted</code>.</p>\r\n\r\n<p><strong>Conclusion</strong></p>\r\n\r\n<p>Those were five simple tips that we can employ in order to write more readable and optimized functional components in React. Feel free to share your own tips for writing better functional components.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '6940-1 aWK6yDaBe7x5viez2VyeMw.jpg', 'Articles', '30', 'Rajshahi', '', 'tusar', '1', 'approved', '2021-01-16 08:19:52');

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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `userid`, `username`, `email`, `subject`, `criteria`, `message`, `date`, `time`) VALUES
(10, '1', 'tusar', 'arifuzzamantusar50@gmail.com', 'others', 'registered', '<p><strong>sadsasadsadsadsadsadsa</strong></p>\r\n\r\n<p>dd asd as dsa dfdasf dsa fdsafdasf dsaf dsa fas dsadsadasdsadasdasdasdsadsadsadasdsadas das d sadsd fdsaf.das f.dsa adsas .fsdagfadsfas. dgasgdsaggdas .vdsalaiopsidkfiq apd asdioufkaoreqiw asfdahhfeu asu d asiod</p>\r\n', '2021-01-03', '14:48:13'),
(17, '1', 'tusar', 'arifuzzamantusar50@gmail.com', 'No Subject', 'registered', '', '2021-01-03', '14:57:45'),
(18, '', '', 'dsadsa@de.de', 'No Subject', 'Unregistered', '', '2021-01-03', '14:59:06'),
(19, '11', 'john', 'john@yahoo.com', 'No Subject', '', '<p>@john hakensa</p>\r\n', '2021-01-15', '18:46:41'),
(20, '11', 'john', 'john@yahoo.com', 'banned', '', '<p>bachan bai</p>\r\n', '2021-01-15', '18:48:29'),
(21, '11', 'john', 'john@yahoo.com', 'banned', 'registered', '<p>fdsf</p>\r\n', '2021-01-15', '18:50:18'),
(22, '20', 'tusar1010', 'dasd@de.de', 'banned', 'registered', '<p>i did mistake</p>\r\n', '2021-01-16', '14:21:53'),
(23, '', '', 'aztusar5@gmail.com', 'others', 'Unregistered', '<p>dasdas</p>\r\n', '2021-01-16', '14:28:25');

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
  `avater_image` varchar(200) NOT NULL,
  `cover_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `bio`, `city`, `nid`, `birthday`, `gender`, `company`, `position`, `facebook`, `twitter`, `website`, `linkedin`, `password`, `status`, `avater_image`, `cover_image`) VALUES
(1, 'tusar', 'Arifuzzaman', 'Tusar', 'arifuzzamantusar50@gmail.com', '01713644570', '                 Lazy By Born                 ', 'Rajshahi', '1234', '', '                             Male', 'Varendra University', 'Studying B.Sc in CSE', 'arifuzzaman.tusar.50', 'arifuzzamantusar', 'www.arifuzzamantusar.com', 'arifuzzamantusar', '1e48c4420b7073bc11916c6c1de226bb', 'approved', '4458-IMG_9307.jpg', '9322-tusars.jpeg'),
(6, 'abony', 'Tajnima Binte', 'Naz', 'abony@gmail.com', '', '        ', 'Rajshahi', '181311035', '', '    ', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', '1049-abony.jpg', ''),
(7, 'soumik', 'SouMik', 'Ahammed', 'soumik@gmail.com', '0175645545', '  I am a noob     ', 'Rajshahi', '181311006', '', ' Male', 'Varendra University', 'Class Representive', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', '3598-soumik.jpg', '1929-cover.jpg'),
(8, 'raz', 'Jarjiash', 'Azam', 'raz@hotmail.com', '017212555', 'My talent is all about the idea  build', 'Rajshahi', '181311003', '1997-12-04', 'Male', 'Microsoft', 'Jr Developer', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', '9560-raz.jpg', ''),
(10, 'peoms', 'Peoms', 'Islam', 'peomsislam16@gmail.com', '0176366656', '              ', 'Rajshahi', '181311034', '', '       ', 'Fiverr', 'Digital Marketer', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'banned', '4050-peomsislam.jpg', ''),
(11, 'john', 'John', 'Doe', 'john@yahoo.com', '', '    ', 'Rajshahi', '15445554', '', '  ', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'approved', 'avater.png', ''),
(15, 'tusar1', '', '', 'ewq@y.com', '', '', 'Chuadanga', '321', '', '', '', '', '', '', '', '', '2e0aca891f2a8aedf265edf533a6d9a8', 'banned', '', ''),
(19, 'tusar121', '', '', 'asd@gmail.com', '', '', 'Chattogram', '181311002', '', '', '', '', '', '', '', '', 'b59c67bf196a4758191e42f76670ceba', 'pending', '', ''),
(20, 'tusar1010', 'John ', 'Abraham', 'dasd@de.de', '021121', '    asdasd', 'Rajshahi', '212312', '', '  ', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', 'banned', 'avater.png', '');

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
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
