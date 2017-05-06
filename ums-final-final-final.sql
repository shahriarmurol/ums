-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 10:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(48) NOT NULL,
  `password` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'shahriar', 'shahriar');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcements` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcements`) VALUES
(1, '  1 jQuery marquee is the best marquee plugin in the world 78'),
(2, '2 jQuery marquee is the best marquee plugin in the world'),
(3, '3 jQuery marquee is the best marquee plugin in the world'),
(4, '4 jQuery marquee is the best marquee plugin in the world'),
(5, '৪ বছর মেয়াদী ডিপ্লোমা ইন ইঞ্জিনিয়ারিং কোর্সে ভর্তি চলছে। Hotline: 01936005816, 01936005817-18, শতভাগ কর্মসংস্থান নিশ্চিত করতে সাইকের জব প্লেসমেন্ট সেল নিরলস ভাবে কাজ করে যাচ্ছে! ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(48) NOT NULL,
  `com_email` varchar(48) NOT NULL,
  `com_subject` varchar(48) NOT NULL,
  `com_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `com_name`, `com_email`, `com_subject`, `com_message`) VALUES
(2, 'hello', 'hello@gmail.com', 'test', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `gradute_sub_names`
--

CREATE TABLE `gradute_sub_names` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gradute_sub_names`
--

INSERT INTO `gradute_sub_names` (`id`, `sub_name`) VALUES
(1, 'M. Sc. in Mathematics (General: One-year evening program)'),
(2, 'M. Sc. in Mathematics (General: Two-year evening program)'),
(3, 'M. Sc. in Economics (One-year evening program)'),
(4, 'M. A. in English Language Teaching (ELT)');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `notice_file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `notice_file`) VALUES
(1, 'শব-ই-মেরাজ উপলক্ষে কলেজ ক্যাম্পাস বন্ধ থাকবে', 'Notice-1493961154-71585.pdf'),
(2, 'You can do a whole bunch of other stuff with animate.css when you combine it with jQuery or add your own CSS rules. Dynamically add animations using jQuery with ease:', 'Notice-1493974607-76510.pdf'),
(3, 'You can do a whole bunch of other stuff with animate.css when you combine it with jQuery or add your own CSS rules. Dynamically add animations using jQuery with ease:', 'Notice-1493974618-62700.pdf'),
(4, 'You can do a whole bunch of other stuff with animate.css when you combine it with jQuery or add your own CSS rules. Dynamically add animations using jQuery with ease:', 'Notice-1493974627-96541.pdf'),
(7, 'test 2', 'Notice-1494003833-56135.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `std_regi_info`
--

CREATE TABLE `std_regi_info` (
  `std_id` int(11) NOT NULL,
  `sub` varchar(48) NOT NULL,
  `std_name` varchar(48) NOT NULL,
  `f_name` varchar(48) NOT NULL,
  `m_name` varchar(48) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(35) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `ssc_dhakil_voc` varchar(15) NOT NULL,
  `study_group` varchar(15) NOT NULL,
  `board` varchar(48) NOT NULL,
  `passing_year` varchar(10) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `class_div_grade` varchar(15) NOT NULL,
  `ammount` varchar(10) NOT NULL,
  `slip_no` varchar(15) NOT NULL,
  `date_of_pay` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `undergradute_sub_names`
--

CREATE TABLE `undergradute_sub_names` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `undergradute_sub_names`
--

INSERT INTO `undergradute_sub_names` (`id`, `sub_name`) VALUES
(1, ' BBA (Major in Accounting, Finance, Marketing and HRM )'),
(2, 'B. Sc. Engg. in EEE for Diploma Engineers'),
(3, 'B. Sc. in CSIT (Four-year Program)'),
(4, 'B. Sc. Engg. in CSE (Four-year Program)'),
(5, 'B. Sc. in Textile Engineering (Four-year Program)'),
(6, 'B. Sc. in Textile Engineering for Diploma Engineers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `gradute_sub_names`
--
ALTER TABLE `gradute_sub_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_regi_info`
--
ALTER TABLE `std_regi_info`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `slip_no` (`slip_no`);

--
-- Indexes for table `undergradute_sub_names`
--
ALTER TABLE `undergradute_sub_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gradute_sub_names`
--
ALTER TABLE `gradute_sub_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `std_regi_info`
--
ALTER TABLE `std_regi_info`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `undergradute_sub_names`
--
ALTER TABLE `undergradute_sub_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
