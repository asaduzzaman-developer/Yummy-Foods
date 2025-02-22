-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2025 at 07:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yummy_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `cta_text` varchar(256) DEFAULT NULL,
  `cta_link` varchar(256) DEFAULT NULL,
  `video_url` varchar(256) DEFAULT NULL,
  `banner_img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_img`) VALUES
(15, 'Md.', 'Asaduzzaman', 'asaduzzamanmithum@gmail.com', '$2y$10$6gsp0H9afEFIVbSCHGGu9OkMv/8LMVH4sG6sSmpSaNAclBz7UWnWO', 'Users-67b96c99f3afa.jpg'),
(18, 'Md.', 'Asaduzzaman', 'mithu@gmail.com', '$2y$10$Mo2XtC8hWmytFVxc33.uNuwmz04VnGjCFkwai20i1gsLebqZrfpyy', NULL),
(19, 'Shanta ', 'Jahanara ', 'shanta@gmail.com', '$2y$10$ILVKLwJwzuFkhKtFuxoBv.f8fq9uYT5Gt7AK7AGkioHmC3aL3xzQG', NULL),
(20, 'Brenda', 'Vaughn', 'nykowux@mailinator.com', '$2y$10$6zmZhvvWw6QUm7JPsok47uc61O39tH4lUHOcAk9ILjmYRKjXOCMMW', NULL),
(21, 'Amela', 'Barker', 'hiqine@mailinator.com', '$2y$10$ydVtLdzZxig/M4/paplVl.gzihHxs8movqKLjbTBf03Gxw7xEwDMu', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
