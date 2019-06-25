-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 01:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ed`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `category_name` varchar(256) DEFAULT NULL,
  `category_slug` varchar(256) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `date`) VALUES
(4, 'website design', 'website-design', '2019-06-11 00:04:02'),
(5, 'Logo Design', 'logo-design', '2019-06-11 00:04:11'),
(6, 'Content Writter', 'content-writter', '2019-06-11 00:04:22'),
(7, 'Data Entery', 'data-entery', '2019-06-11 00:04:44'),
(8, 'iOS App', 'ios-app', '2019-06-11 00:37:40'),
(9, 'Android App', 'android-app', '2019-06-11 00:37:50'),
(10, 'Web Researcher', 'web-researcher', '2019-06-11 00:37:56'),
(11, 'Wordpress', 'wordpress', '2019-06-11 00:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `gig_data`
--

CREATE TABLE `gig_data` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `niche_title` varchar(256) NOT NULL,
  `niche_category` varchar(256) NOT NULL,
  `niche_cat_slug` varchar(256) DEFAULT NULL,
  `niche_price` int(11) NOT NULL,
  `niche_tag` varchar(256) NOT NULL,
  `niche_image` varchar(256) NOT NULL,
  `niche_desc` varchar(256) NOT NULL,
  `niche_rating` varchar(256) NOT NULL DEFAULT '0',
  `order_completed` varchar(256) NOT NULL DEFAULT '0',
  `order_in_queue` varchar(256) NOT NULL DEFAULT '0',
  `niche_add_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gig_data`
--

INSERT INTO `gig_data` (`id`, `username`, `niche_title`, `niche_category`, `niche_cat_slug`, `niche_price`, `niche_tag`, `niche_image`, `niche_desc`, `niche_rating`, `order_completed`, `order_in_queue`, `niche_add_date`) VALUES
(0, 'admin', 'I will do data entry work', 'Data Entery', 'data-entery', 5, 'data, entry, excel', '6-important-factors-in-building-ecommerce-websites.jpg', '<p><strong>i will do data entery work</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e', '0', '0', '0', '2019-06-11 00:59:17'),
(4, '', 'niche title', 'Logo Design', 'logo-design', 76, 'wordpress, web design, website', '6-important-factors-in-building-ecommerce-websites.jpg', '<p>vsdckjs</p>', '0', '0', '0', '2019-05-22 21:23:31'),
(5, '', 'WordPress Developer', 'WordPress', 'wordpress', 46, 'wordpress, web design, website', 'Template-theme-image-electro.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:46:09'),
(6, '', 'Logo Designer', 'Logo Design', 'logo-design', 87, 'logo, designer, photoshop', 'bostan-minimal-business-wordpress-website-theme.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:46:52'),
(7, 'admin', 'Content Writer ', 'Content Writter', 'content-writter', 23, 'content, writer', 'business-women-crisis.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:47:26'),
(8, 'admin', 'niche title', 'WordPress', 'wordpress', 5, 'wordpress, web design, website', 'bostan-minimal-business-wordpress-website-theme.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:53:41'),
(9, 'admin', 'I will design a professional wordpress website', 'WordPress', 'wordpress', 75, 'wordpress, web design, website', '6-important-factors-in-building-ecommerce-websites.jpg', '<p><strong>Lorem ipsum dolor sit amet, consectetur ad</strong>ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dui', '0', '0', '0', '2019-05-25 01:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile_title` varchar(256) DEFAULT NULL,
  `skills` varchar(255) NOT NULL,
  `certificatename` varchar(255) NOT NULL,
  `certificateimage` varchar(255) NOT NULL,
  `securityquestion` varchar(255) NOT NULL,
  `security_answer` varchar(256) DEFAULT NULL,
  `profileimage` varchar(255) NOT NULL,
  `total_order_completed` int(11) NOT NULL DEFAULT '0',
  `profile_info` varchar(25600) DEFAULT NULL,
  `profile_status` varchar(256) NOT NULL DEFAULT 'pending',
  `profile_level` int(11) NOT NULL DEFAULT '0',
  `success_score` int(11) NOT NULL DEFAULT '0',
  `deliver_on_time` int(11) NOT NULL DEFAULT '0',
  `order_completetion` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0',
  `user_ip` varchar(256) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `phone`, `profile_title`, `skills`, `certificatename`, `certificateimage`, `securityquestion`, `security_answer`, `profileimage`, `total_order_completed`, `profile_info`, `profile_status`, `profile_level`, `success_score`, `deliver_on_time`, `order_completetion`, `rating`, `user_ip`, `date`) VALUES
(1, 'Aleem', 'Sharif', 'Aleemsharif', 'iamaleemsharif@gmail.com', 'Examination2015', '', NULL, '', '', '', '', NULL, '', 0, '', 'pending', 0, 0, 0, 0, 0, NULL, '2019-04-24 20:07:54'),
(4, 'waqas', 'saleem', 'admin', 'waqas.saleem7431@gmail.com', '1234', '+923037156697', 'Professional WordPress Developer', '', 'Udemy web development', 'certificate_admin_1558899449.jpg', 'Your Pet Name?', 'Puppy', 'profile_admin_1558899449.jpg', 0, 'ok I am professional developer Test Waqas Saleem Write a brief description about you, your skills, your work experience. hjsdbfhsbdkjf Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons', 'verified', 0, 0, 0, 0, 0, NULL, '2019-05-25 10:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` int(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email_verification_status` varchar(256) NOT NULL,
  `email_verification_code` varchar(256) NOT NULL,
  `phone_verification_status` varchar(256) NOT NULL,
  `phone_verification_code` varchar(256) NOT NULL,
  `image_verification_status` varchar(256) NOT NULL,
  `image_verification_code` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `username`, `email_verification_status`, `email_verification_code`, `phone_verification_status`, `phone_verification_code`, `image_verification_status`, `image_verification_code`, `date`) VALUES
(8, 'admin', 'verified', '684326891', 'verified', '3342', '', '', '2019-05-25 17:14:46'),
(9, 'admin2', 'verified', '671552121', 'verified', '2260', '', '', '2019-05-27 17:00:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gig_data`
--
ALTER TABLE `gig_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
