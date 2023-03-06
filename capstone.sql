-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 05:14 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` longblob,
  `price` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `name`, `photo`, `price`) VALUES
(1, 'Amethyst', 0x50686f746f732f416d6574687973742e6a7067, '25.00'),
(3, 'Aventurine', 0x50686f746f732f6176656e747572696e652e6a7067, '25.00'),
(4, 'Citrine', 0x50686f746f732f63697472696e652e6a7067, '25.00'),
(5, 'Citrine2', 0x50686f746f732f63697472696e65322e6a7067, '25.00'),
(6, 'Clear Quartz', 0x50686f746f732f636c65617271756172747a2e6a7067, '25.00'),
(8, 'Moonstone', 0x50686f746f732f6d6f6f6e73746f6e652e6a7067, '25.00'),
(9, 'Moss Agate', 0x50686f746f732f6d6f737361676174652e6a7067, '25.00'),
(2, 'Obsidian', 0x50686f746f732f626c61636b2e6a7067, '25.00'),
(10, 'Obsidian2', 0x50686f746f732f6f6273696469616e2e6a7067, '25.00'),
(11, 'Red Calcite', 0x50686f746f732f72656463616c636974652e6a7067, '25.00'),
(12, 'Red Calcite2', 0x50686f746f732f72656463616c63697465322e6a7067, '25.00'),
(13, 'Rose Quartz', 0x50686f746f732f726f736571756172747a2e6a7067, '25.00'),
(7, 'Tigers Eye', 0x50686f746f732f677265656e7469676572736579652e6a7067, '25.00'),
(14, 'Tigers Eye2', 0x50686f746f732f7469676572736579652e6a7067, '25.00'),
(15, 'Turquoise', 0x50686f746f732f74757271756f6973652e6a7067, '25.00'),
(16, 'Yellow Calcite', 0x50686f746f732f79656c6c6f7763616c636974652e6a7067, '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int NOT NULL,
  `p_id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `p_id`, `name`, `email`, `street`, `city`, `state`, `zip`) VALUES
(1, 2, 'Moss Agate', 'abbymariesargent@gmail.com', '1812 Vista Villa Ct', 'Waseca', 'Minnesota', 56093),
(8, 3, 'Moss Agate', 'abbymariesargent@gmail.com', '1812 Vista Villa Ct', 'Waseca', 'Minnesota', 56093),
(8, 5, 'Moonstone', 'abbymariesargent@gmail.com', '1812 Vista Villa Ct', 'Waseca', 'Minnesota', 56093),
(5, 6, 'Aventurine', 'lillyludwig@gmail.com', '8392 street', 'mankato', 'minnesota', 56001),
(3, 7, 'Red Calcite2', 'ryan@gmail.com', '9284 road', 'las vegas', 'nevada', 83722),
(9, 8, 'Tigers Eye2', 'mila@gmail.com', '8372 lane', 'new york', 'new york', 382744),
(10, 9, 'Moss Agate', 'abbymariesargent@gmail.com', '1812 Vista Villa Ct', 'Waseca', 'Minnesota', 56093);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'test', 'test', 'test', '$2y$10$TwH4YxQnpLgLhIqYemqMFOJygdQroF6hm3ZbrFsk3hSaOqr0C9OF2'),
(2, 'Abby', 'Sargent', 'Abby123', '$2y$10$jEPlTu7.0zYWug2tQ72Gyuk0I3otBgSYbnOk1QES6kEyVyQDsH7k2'),
(3, 'Ryan', 'Briese', 'Ryan24', '$2y$10$qsGn3chmKLDioApkXs7TnO2e5DuhZsCa.kfVUgSEaVP3NuCxo7.lK'),
(4, 'Tony', 'Dino', 'Dino55', '$2y$10$mHk59.AS7sXoxRQTAJKRGeg0niwIcKZGPzIzWRt6n7yyRIuVErsue'),
(5, 'Lilly', 'Ludwig', 'Ludwig', '$2y$10$WU2CuYLIpsCJmcBoi0yDFeJWC0Pa/Xd.GLRy69BYPVUAE5VWBRPXi'),
(6, 'Jimmy', 'Palmer', 'Jalmer', '$2y$10$qWQJ7M9YSI6xSbUYkMA1iOuSk0nxU7gUB03l5wO/jrUoIHfaIrZqO'),
(7, 'Ann', 'Smith', 'Annie44', '$2y$10$ocmtJOoF02Sf8WtUFHgpF.wPC2xGCjvGk3zbxzdE7BUwX09ZFbmgK'),
(8, 'Phantom', 'Momo', 'Phantom22', '$2y$10$zcIpDkTWyrWkwmvj6L7ERO5IZWJTpz3UkaRIizQQI/E77mxxwQEaC'),
(9, 'Mila', 'Momo', 'MilaMomo', '$2y$10$wRcT6ZcA48NL2kzXgLk5uus1XRRPM06dPC8EQ0n0jF.nEyQmNxRiS'),
(10, 'Abby', 'Sargent', 'abby', '$2y$10$hT/IDzs1D7EepsluRP5NKeaV5Zl11xZTdCtWazLF/dCIDUhLaUb5W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`name`) REFERENCES `products` (`name`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
