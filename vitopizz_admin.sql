-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2024 at 03:30 PM
-- Server version: 5.7.44-log-cll-lve
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitopizz_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_snaps`
--

CREATE TABLE `customer_snaps` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_snaps`
--

INSERT INTO `customer_snaps` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `meta_data`, `display_order`, `time_stamp`, `user_id`, `location`) VALUES
(1, 1, 'img-01.jpg', 'CS1.png', '700x700', NULL, 1, '2023-08-27 03:35:56', 23, NULL),
(2, 2, 'img-02.jpg', 'CS2.png', '700x700', NULL, 2, '2023-08-27 03:39:29', 23, NULL),
(3, 3, 'img-03.jpg', 'CS3.jpg', '700x700', NULL, 3, '2023-08-27 03:39:37', 23, NULL),
(4, 4, 'img-04.jpg', 'CS4.png', '700x700', NULL, 4, '2023-08-27 03:39:47', 23, NULL),
(5, 5, 'img-05.jpg', 'CS5.png', '700x700', NULL, 5, '2023-08-27 03:39:59', 23, NULL),
(6, 6, 'img-06.jpg', 'CS6.png', '700x700', NULL, 6, '2023-08-27 03:40:10', 23, NULL),
(7, 7, 'img-07.jpg', 'CS8.png', '700x700', NULL, 7, '2023-08-27 03:40:23', 23, NULL),
(8, 8, 'img-08.jpg', 'CS9.png', '700x700', NULL, 8, '2023-08-27 03:40:35', 23, NULL),
(9, 9, 'img-09.jpg', 'CS10.png', '700x700', NULL, 9, '2023-08-27 03:40:53', 23, NULL),
(10, 10, 'img-10.jpg', 'CS11.png', '700x700', NULL, 10, '2023-08-27 04:35:50', 23, NULL),
(11, 11, 'img-11.jpg', 'CS12.png', '700x700', NULL, 11, '2023-08-27 04:36:16', 23, NULL),
(12, 12, 'img-12.jpg', 'CS13.png', '700x700', NULL, 12, '2023-08-27 04:37:17', 23, NULL),
(13, 13, 'img-13.jpg', 'CS14.png', '700x700', NULL, 13, '2023-08-27 04:39:53', 23, NULL),
(14, 14, 'img-14.jpg', 'CS15.png', '700x700', NULL, 14, '2023-08-27 04:40:04', 23, NULL),
(15, 15, 'img-15.jpg', '424617181_1181397983267212_7431393661148597844_n.jpg', '700x700', NULL, 15, '2024-02-29 05:24:50', 26, NULL),
(16, 16, 'img-15.jpg', 'FS_10.png', '700x700', NULL, 16, '2023-09-11 06:54:27', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_bestview_page`
--

CREATE TABLE `image_bestview_page` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_location` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_bestview_page`
--

INSERT INTO `image_bestview_page` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `page`, `meta_data`, `display_location`, `time_stamp`, `user_id`) VALUES
(9, 1, 'view-img-1.jpg', 'Home_Views_1.jpg', '700x550', 'index', NULL, '1', '2023-09-09 17:17:43', 23),
(10, 2, 'view-img-2.jpg', 'Home_Views_2.jpg', '700x550', 'index', NULL, '2', '2023-09-09 17:18:22', 23),
(11, 3, 'view-img-3.jpg', 'Home_Views_3.jpg', '700x550', 'index', NULL, '3', '2023-09-09 17:19:21', 23);

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `meta_data`, `display_order`, `time_stamp`, `user_id`) VALUES
(1, 1, 'img-01.jpg', 'FS_1.png', '700x700', NULL, 1, '2023-08-27 06:50:18', 23),
(2, 2, 'img-02.jpg', 'FS_2.png', '700x700', NULL, 2, '2023-08-27 06:50:27', 23),
(3, 3, 'img-03.jpg', 'FS_3.png', '700x700', NULL, 3, '2023-08-27 06:50:37', 23),
(4, 4, 'img-04.jpg', 'FS_4.png', '700x700', NULL, 4, '2023-08-27 06:51:39', 23),
(5, 5, 'img-05.jpg', 'FS_5.png', '700x700', NULL, 5, '2023-08-27 06:51:47', 23),
(6, 6, 'img-06.jpg', 'FS_6.png', '700x700', NULL, 6, '2023-08-27 06:51:58', 23),
(7, 7, 'img-07.jpg', 'FS_7.png', '700x700', NULL, 7, '2023-08-27 06:52:11', 23),
(8, 8, 'img-08.jpg', 'FS_8.png', '700x700', NULL, 8, '2023-08-27 06:52:24', 23),
(9, 9, 'img-09.jpg', 'FS_9.png', '700x700', NULL, 9, '2023-08-27 06:53:57', 23),
(10, 10, 'img-10.jpg', '4.jpeg', '700x700', NULL, 10, '2024-02-29 05:20:29', 26),
(11, 11, 'img-11.jpg', 'FS_11.png', '700x700', NULL, 11, '2023-08-27 06:57:32', 23),
(12, 12, 'img-12.jpg', 'FS_12.png', '700x700', NULL, 12, '2023-08-27 06:57:48', 23),
(13, 13, 'img-13.jpg', 'FS_13.png', '700x700', NULL, 13, '2023-08-27 06:58:44', 23),
(14, 14, 'img-14.jpg', '6.jpeg', '700x700', NULL, 14, '2024-02-29 05:22:24', 26),
(15, 15, 'img-15.jpg', 'FS_13.png', '700x700', NULL, 15, '2023-09-11 07:03:53', 23),
(16, 16, 'img-15.jpg', 'FS_10.png', '700x700', NULL, 16, '2023-09-11 07:03:49', 23);

-- --------------------------------------------------------

--
-- Table structure for table `image_giveaway`
--

CREATE TABLE `image_giveaway` (
  `id` int(3) NOT NULL,
  `image_id` int(3) NOT NULL,
  `theme_name` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `resolution` varchar(15) NOT NULL,
  `page` varchar(10) NOT NULL,
  `meta_data` int(11) DEFAULT NULL,
  `display_location` int(3) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_giveaway`
--

INSERT INTO `image_giveaway` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `page`, `meta_data`, `display_location`, `time_stamp`, `user_id`) VALUES
(1, 1, 'winner-1.jpg', '4.jpg', '800x1067', 'index', NULL, 1, '2024-02-29 05:29:33', 26),
(2, 2, 'winner-2.jpg', '4.jpg', '800x1067', 'index', NULL, 2, '2024-02-29 05:29:45', 26);

-- --------------------------------------------------------

--
-- Table structure for table `image_index_page`
--

CREATE TABLE `image_index_page` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_location` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_index_page`
--

INSERT INTO `image_index_page` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `page`, `meta_data`, `display_location`, `time_stamp`, `user_id`) VALUES
(1, 1, 'top-img.png', 'Landing page pizza 2.png', '680x800', 'index', NULL, 'pizza', '2023-09-09 03:49:10', 19),
(2, 2, 'header-img.png', 'Home_icon(2).png', '1000x452', 'index', NULL, 'header', '2023-09-11 08:43:24', 23),
(4, 3, NULL, 'Cover.jpg', '800x600', 'index', NULL, 'promo', '2024-02-29 05:28:07', 26);

-- --------------------------------------------------------

--
-- Table structure for table `image_menu_page`
--

CREATE TABLE `image_menu_page` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_location` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_menu_page`
--

INSERT INTO `image_menu_page` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `page`, `meta_data`, `display_location`, `time_stamp`, `user_id`) VALUES
(9, 1, 'check-menu-left.jpg', 'Landing_page_menu_1.png', '700x700', 'menu', NULL, '1', '2023-08-26 09:55:28', 23),
(11, 2, 'ckeck-menu-middle.jpg', 'Landing_page_menu_2_1.png', '800x600', 'menu', NULL, '2', '2023-08-27 08:35:03', 23),
(12, 3, 'check-menu-right.jpg', 'Landing_page_menu_3.png', '700x700', 'menu', NULL, '3', '2023-08-26 09:55:45', 23);

-- --------------------------------------------------------

--
-- Table structure for table `image_promo`
--

CREATE TABLE `image_promo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image_reviews_page`
--

CREATE TABLE `image_reviews_page` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `meta_data` varchar(500) DEFAULT NULL,
  `display_location` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_reviews_page`
--

INSERT INTO `image_reviews_page` (`id`, `image_id`, `theme_name`, `name`, `resolution`, `page`, `meta_data`, `display_location`, `time_stamp`, `user_id`) VALUES
(1, 1, 'reviews.jpg', '7.jpg', '1920x1080', 'reviews', NULL, '1', '2024-02-29 05:29:06', 26);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` varchar(15) NOT NULL DEFAULT 'view'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `first_name`, `last_name`, `nick_name`, `email`, `password`, `time_stamp`, `role`) VALUES
(23, NULL, 'madusha', 'chamika', 'Chamika', 'madushachamika7@gmail.com', '$2y$10$sdqkV6dN5m1nciww3hFoDugWeJjmjOqUZX7sU5U8sxT4pFAJQCIdC', '2023-09-11 06:47:13', 'admin'),
(25, NULL, 'Thilanka', 'Gunarathne ', 'thilanka', 'thilankarx@gmail.com', '$2y$10$YV7xdLagzyxiIwcUK6KpY.4Q8ExqBIRPXgDSm8Ku01KsdgNhDWbyK', '2023-09-11 06:49:48', 'admin'),
(26, NULL, 'Lakmal', 'Pushpakumara', 'Social Media Manager', 'lakmalmaxxgta@gmail.com', '$2y$10$KPVB16kyS3wluNz/6qYbQupmdRoSa39IVO1OVWQf5KQzX7brX2mQ6', '2023-12-09 11:20:35', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_snaps`
--
ALTER TABLE `customer_snaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_bestview_page`
--
ALTER TABLE `image_bestview_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_id` (`image_id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_index_page`
--
ALTER TABLE `image_index_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_id` (`image_id`);

--
-- Indexes for table `image_menu_page`
--
ALTER TABLE `image_menu_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_id` (`image_id`);

--
-- Indexes for table `image_promo`
--
ALTER TABLE `image_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_reviews_page`
--
ALTER TABLE `image_reviews_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_id` (`image_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_snaps`
--
ALTER TABLE `customer_snaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `image_bestview_page`
--
ALTER TABLE `image_bestview_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `image_index_page`
--
ALTER TABLE `image_index_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_menu_page`
--
ALTER TABLE `image_menu_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `image_promo`
--
ALTER TABLE `image_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_reviews_page`
--
ALTER TABLE `image_reviews_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
