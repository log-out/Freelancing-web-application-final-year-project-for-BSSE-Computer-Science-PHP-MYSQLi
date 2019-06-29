-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 08:45 PM
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
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `bid_by_username` varchar(255) NOT NULL,
  `job_posted_by` varchar(256) DEFAULT NULL,
  `bid_request_id` int(255) NOT NULL,
  `bid_niche_title` varchar(255) NOT NULL,
  `bid_niche` varchar(256) NOT NULL,
  `bid_price` int(255) NOT NULL,
  `bid_day` int(255) NOT NULL,
  `bid_status` varchar(256) NOT NULL DEFAULT 'pending',
  `bid_desc` varchar(25600) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `bid_by_username`, `job_posted_by`, `bid_request_id`, `bid_niche_title`, `bid_niche`, `bid_price`, `bid_day`, `bid_status`, `bid_desc`, `date`) VALUES
(13, 'admin', 'test123', 6, 'I will design a professional wordpress website', '9', 100, 10, 'over', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '2019-06-28 13:13:00'),
(18, 'test123', 'admin', 7, 'I will design a professional wordpress website', '1', 300, 4, 'over', 'done', '2019-06-29 01:31:33'),
(19, 'admin', 'test123', 8, 'I will design a professional wordpress website', '3', 100, 7, 'over', 'i can do this job', '2019-06-29 13:22:36'),
(20, 'admin', 'test123', 9, 'I will design a professional wordpress website', '7', 55, 3, 'over', 'can do this', '2019-06-29 13:52:19'),
(21, 'test123', 'admin', 10, 'I will design a professional wordpress website', '1', 12, 3, 'accepted', 'i can do', '2019-06-29 22:17:02');

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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `send_to` varchar(255) NOT NULL,
  `send_by` varchar(255) NOT NULL,
  `message_by` varchar(25000) DEFAULT NULL,
  `status` varchar(256) NOT NULL DEFAULT 'unread',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `send_to`, `send_by`, `message_by`, `status`, `date`) VALUES
(1, 'admin', 'test123', 'admin', 'hi', 'read', '2019-06-29 15:37:25'),
(2, 'admin', 'test123', 'admin', 'how are you', 'read', '2019-06-29 16:48:33'),
(3, 'admin', 'test123', 'admin', 'hi', 'read', '2019-06-29 16:51:29'),
(4, 'admin', 'test123', 'admin', 'again', 'read', '2019-06-29 16:51:49'),
(5, 'admin', 'test123', 'admin', 'hiii', 'read', '2019-06-29 16:52:13'),
(6, 'admin', 'test123', 'admin', 'hii', 'read', '2019-06-29 16:53:13'),
(7, 'admin', 'test123', 'admin', 'test', 'read', '2019-06-29 16:53:47'),
(8, 'admin', 'test123', 'admin', 'hello', 'read', '2019-06-29 18:44:07'),
(9, 'admin', 'test123', 'admin', 'mera name waqas h', 'read', '2019-06-29 18:44:40'),
(10, 'admin', 'test123', 'admin', 'helo mra nam aleem h', 'read', '2019-06-29 19:21:46'),
(11, 'test123', 'admin', 'test123', 'sorry aleem mra name h', 'read', '2019-06-29 19:22:43'),
(12, NULL, 'test123', 'admin', 'kya hal h', 'read', '2019-06-29 20:27:21'),
(13, 'test123', 'admin', 'test123', 'kya hal hai', 'read', '2019-06-29 20:31:21'),
(14, 'admin', 'test123', 'admin', 'main theek hun tm sunao', 'read', '2019-06-29 20:31:43'),
(15, 'admin', 'test123', 'admin', 'main theek hun tm sunao', 'read', '2019-06-29 20:31:51'),
(16, 'test123', 'admin', 'test123', 'main b theek hun yr', 'read', '2019-06-29 20:32:11'),
(17, 'admin', 'test123', 'admin', 'acha to phr sai work kr ra h na', 'read', '2019-06-29 20:32:29'),
(18, 'test123', 'admin', 'test123', 'ok got it', 'read', '2019-06-29 21:27:58'),
(19, 'admin', 'test123', 'admin', 'aur sunao', 'read', '2019-06-29 21:29:56'),
(20, 'test123', 'admin', 'test123', 'bas theek yar', 'read', '2019-06-29 21:31:23'),
(21, 'test123', 'admin', 'test123', 'good', 'read', '2019-06-29 21:33:04'),
(22, 'admin', 'test123', 'admin', 'sunday ko project h', 'read', '2019-06-29 21:33:38'),
(23, 'test123', 'admin', 'test123', 'ni monday ko', 'read', '2019-06-29 21:33:55'),
(24, 'admin', 'test123', 'admin', 'hi', 'read', '2019-06-29 23:42:22');

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
(1, 'test123', 'I will design a professional wordpress website', 'Wordpress', 'wordpress', 100, 'wordpress, web design, website', 'Screenshot_2.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-06-27 17:55:38'),
(3, 'admin', 'I will do data entry work', 'Data Entery', 'data-entery', 5, 'data, entry, excel', '6-important-factors-in-building-ecommerce-websites.jpg', '<p><strong>i will do data entery work</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e', '0', '0', '0', '2019-06-11 00:59:17'),
(4, '', 'niche title', 'Logo Design', 'logo-design', 76, 'wordpress, web design, website', '6-important-factors-in-building-ecommerce-websites.jpg', '<p>vsdckjs</p>', '0', '0', '0', '2019-05-22 21:23:31'),
(5, '', 'WordPress Developer', 'WordPress', 'wordpress', 46, 'wordpress, web design, website', 'Template-theme-image-electro.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:46:09'),
(6, '', 'Logo Designer', 'Logo Design', 'logo-design', 87, 'logo, designer, photoshop', 'bostan-minimal-business-wordpress-website-theme.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:46:52'),
(7, 'admin', 'Content Writer ', 'Content Writter', 'content-writter', 23, 'content, writer', 'business-women-crisis.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:47:26'),
(8, 'admin', 'niche title', 'WordPress', 'wordpress', 5, 'wordpress, web design, website', 'bostan-minimal-business-wordpress-website-theme.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-05-22 21:53:41'),
(9, 'admin', 'I will design a professional wordpress website', 'WordPress', 'wordpress', 75, 'wordpress, web design, website', '6-important-factors-in-building-ecommerce-websites.jpg', '<p><strong>Lorem ipsum dolor sit amet, consectetur ad</strong>ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dui', '0', '0', '0', '2019-05-25 01:08:59'),
(10, 'test123', 'I will design a professional wordpress website', 'Wordpress', 'wordpress', 100, 'wordpress, web design, website', 'Screenshot_2.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo', '0', '0', '0', '2019-06-27 17:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `job_tags` varchar(256) DEFAULT NULL,
  `skills_level` varchar(255) DEFAULT NULL,
  `job_days` int(11) DEFAULT NULL,
  `job_price` int(11) DEFAULT NULL,
  `job_desc` varchar(2555) DEFAULT NULL,
  `job_status` varchar(255) NOT NULL DEFAULT 'pending',
  `job_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `username`, `job_title`, `job_category`, `job_tags`, `skills_level`, `job_days`, `job_price`, `job_desc`, `job_status`, `job_date`) VALUES
(6, 'test123', 'I need help to design my wordpress website', 'Wordpress', 'web, wordpress, design', 'Expert', 3, 100, 'Job Description include all details about your job. provide all details for job so right candidates will contact you.', 'over', '2019-06-27 18:06:19'),
(7, 'admin', 'I need help to design my wordpress website', 'website design', 'logo, design, graphich', 'Expert', 3, 100, 'requirements', 'over', '2019-06-29 01:26:48'),
(8, 'test123', 'I need a Android App', 'Android App', 'android, app, mobile app', 'Intermediate', 10, 100, 'i need an android app', 'over', '2019-06-29 13:19:32'),
(9, 'test123', 'i need a logo designer', 'Logo Design', 'logo, design, graphich', 'Expert', 3, 50, 'need a logo', 'over', '2019-06-29 13:47:55'),
(10, 'admin', 'I need a content writer for my website', 'Web Researcher', 'content, writer, seo writer', 'Expert', 10, 50, 'content writer', 'pending', '2019-06-29 22:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `order_bid_by_username` varchar(256) NOT NULL,
  `order_job_posted_by` varchar(256) NOT NULL,
  `order_bid_request_id` int(255) NOT NULL,
  `order_bid_niche_title` varchar(256) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_bid_niche_id` int(225) NOT NULL,
  `order_bid_desc` varchar(2500) NOT NULL,
  `oder_deliver_desc` varchar(2500) NOT NULL,
  `order_started_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_deliver_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_accepted date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `order_bid_by_username`, `order_job_posted_by`, `order_bid_request_id`, `order_bid_niche_title`, `order_price`, `order_bid_niche_id`, `order_bid_desc`, `oder_deliver_desc`, `order_started_date`, `order_status`, `order_deliver_date`, `order_accepted date`) VALUES
(3, 13, 'admin', 'test123', 6, 'I will design a professional wordpress website', 100, 9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'deliver done', '2019-06-28 13:13:00', 'over', '2019-06-29 01:13:13', NULL),
(4, 13, 'admin', 'test123', 6, 'I will design a professional wordpress website', 100, 9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'done', '2019-06-28 13:13:00', 'over', '2019-06-29 01:17:45', NULL),
(5, 18, 'test123', 'admin', 7, 'I will design a professional wordpress website', 300, 1, 'done', 'here is order done', '2019-06-29 01:31:33', 'over', '2019-06-29 01:32:21', NULL),
(6, 19, 'admin', 'test123', 8, 'I will design a professional wordpress website', 100, 3, 'i can do this job', 'here is your delivery enclosed', '2019-06-29 13:22:36', 'over', '2019-06-29 13:25:22', NULL),
(7, 20, 'admin', 'test123', 9, 'I will design a professional wordpress website', 55, 7, 'can do this', 'done', '2019-06-29 13:52:19', 'over', '2019-06-29 13:54:34', NULL);

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
  `balance` int(255) DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `user_ip` varchar(256) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `phone`, `profile_title`, `skills`, `certificatename`, `certificateimage`, `securityquestion`, `security_answer`, `profileimage`, `total_order_completed`, `profile_info`, `profile_status`, `profile_level`, `success_score`, `deliver_on_time`, `order_completetion`, `balance`, `rating`, `user_ip`, `date`) VALUES
(1, 'Aleem', 'Sharif', 'Aleemsharif', 'iamaleemsharif@gmail.com', 'Examination2015', '', NULL, '', '', '', '', NULL, '', 3, '', 'pending', 0, 100, 100, 100, 100, 5, NULL, '2019-04-24 20:07:54'),
(4, 'waqas', 'saleem', 'admin', 'waqas.saleem7431@gmail.com', '1234', '+923037156697', 'Professional Web Developer', '', 'Udemy web development', 'certificate_admin_1558899449.jpg', 'Your Pet Name?', 'Puppy', 'profile_admin_1558899449.jpg', 5, 'kjbsdkjchjvvjh hjh', 'verified', 0, 100, 100, 100, 255, 5, NULL, '2019-05-25 10:24:44'),
(5, 'test', 'user', 'test123', 'black.hat7431@gmail.com', '123456789', '+923037156697', 'Web Dev', '', 'Udemy web course', 'certificate_test123_1561640712.jpg', 'Your Pet Name?', 'Puppy', 'profile_test123_1561640712.jpg', 4, 'kjbsdkjchjvvjh hjh', 'verified', 0, 100, 100, 100, 400, 5, '::1', '2019-06-27 12:53:31');

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
(9, 'admin2', 'verified', '671552121', 'verified', '2260', '', '', '2019-05-27 17:00:33'),
(10, 'test123', 'pending', '489397390', 'verified', '3885', '', '', '2019-06-27 18:03:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gig_data`
--
ALTER TABLE `gig_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gig_data`
--
ALTER TABLE `gig_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
