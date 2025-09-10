-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2025 at 11:20 AM
-- Server version: 8.0.42
-- PHP Version: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slamfizz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint NOT NULL,
  `cart_id` bigint NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cart_id`, `product_id`, `quantity`, `price`) VALUES
(4, 94822, 3, 4, '32'),
(5, 94822, 3, 1, '8'),
(6, 94822, 3, 1, '8'),
(7, 94822, 3, 24, '192');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` tinyint NOT NULL,
  `page_id` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bigImage1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bigImage2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `smallImage1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `smallImage2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `smallImage3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `bigImage1`, `bigImage2`, `smallImage1`, `smallImage2`, `smallImage3`) VALUES
(1, 'BLOOD ORANGE', '$8.00', 'BloodOrange.png', 'BloodOrangelong.webp', 'BloodOrange.png', 'BloodOrange-4pack.webp', 'BloodOrange-24pack.webp'),
(2, 'CUCUMBER', '$8.00', 'Cucumber.png', 'Cucumberlong.webp', 'Cucumber.png', 'Cucumber-4pack.webp', 'Cucumber-24pack.webp'),
(3, 'GRAPE', '$8.00', 'Grape.png', 'Grapelong.webp', 'Grape.png', 'Grape-4pack.webp', 'Grape-24pack.webp'),
(4, 'LEMON', '$8.00', 'Lemon.png', 'Lemonlong.webp', 'Lemon.png', 'Lemon-4pack.webp', 'Lemon-24pack.webp'),
(5, 'PASSIONFRUIT', '$8.00', 'Passionfruit.png', 'Passionfruitlong.webp', 'Passionfruit.png', 'Passionfruit-4pack.webp', 'Passionfruit-24pack.webp'),
(6, 'PEACH', '$8.00', 'Peach.png', 'Peachlong.webp', 'Peach.png', 'Peach-4pack.webp', 'Peach-24pack.webp'),
(7, 'RASPBERRY', '$8.00', 'Raspberry.png', 'Raspberrylong.webp', 'Raspberry.png', 'Raspberry-4pack.webp', 'Raspberry-24pack.webp'),
(8, 'WATERMELON', '$8.00', 'Watermelon.png', 'Watermelonlong.webp', 'Watermelon.png', 'Watermelon-4pack.webp', 'Watermelon-24pack.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `password`) VALUES
(1, 94822, 'Admin', '1234'),
(2, 36794, 'LspNorman', '55555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
