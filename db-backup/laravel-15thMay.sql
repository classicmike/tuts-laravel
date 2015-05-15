-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2015 at 07:21 AM
-- Server version: 5.6.22
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_05_15_021639_create_users_table', 1),
('2015_05_15_034928_add_permission_column_to_users_table', 1),
('2015_05_15_044742_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'My First Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien ac elit rutrum sollicitudin. Donec facilisis semper iaculis. Pellentesque sed tellus mauris. Donec egestas blandit purus, et dignissim elit dapibus sed. Mauris quis posuere enim. Sed vitae velit et lacus convallis finibus. Aliquam auctor odio elementum, mattis nibh commodo, convallis elit. Nullam vitae vestibulum mauris. Fusce sapien diam, interdum quis blandit a, condimentum sed enim. Integer elementum feugiat leo at scelerisque. Cras vel hendrerit orci. Mauris interdum ante nec urna condimentum consectetur.', '0000-00-00 00:00:00', '2015-05-14 21:06:05'),
(2, 1, 'Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed sapien ac elit rutrum sollicitudin. Donec facilisis semper iaculis. Pellentesque sed tellus mauris. Donec egestas blandit purus, et dignissim elit dapibus sed. Mauris quis posuere enim. Sed vitae velit et lacus convallis finibus. Aliquam auctor odio elementum, mattis nibh commodo, convallis elit. Nullam vitae vestibulum mauris. Fusce sapien diam, interdum quis blandit a, condimentum sed enim. Integer elementum feugiat leo at scelerisque. Cras vel hendrerit orci. Mauris interdum ante nec urna condimentum consectetur.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `permission` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`, `permission`) VALUES
(1, 'mike.tran@leafuctter.com.au', '$2y$10$tB2SczdwPtQLtDp81.GnU.HqDgwyU/8BAk3AYM6J.dsjmT90yZo92', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'james@leafcutter.com.au', '$2y$10$tB2SczdwPtQLtDp81.GnU.HqDgwyU/8BAk3AYM6J.dsjmT90yZo92', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
