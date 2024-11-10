-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 11:36 AM
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
-- Database: `movegotravelagent`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_ticket`
--

CREATE TABLE `available_ticket` (
  `ticket_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `available_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `available_ticket`
--

INSERT INTO `available_ticket` (`ticket_id`, `package_id`, `available_date`, `quantity`, `price`) VALUES
(1, 1, '2024-07-01', 50, 200),
(2, 1, '2024-07-15', 50, 200),
(3, 2, '2024-08-10', 40, 150),
(4, 2, '2024-08-20', 40, 150),
(5, 3, '2024-09-05', 30, 300),
(6, 3, '2024-09-15', 30, 300),
(7, 4, '2024-10-20', 20, 160),
(8, 4, '2024-10-30', 20, 160),
(9, 5, '2024-11-15', 60, 350),
(10, 5, '2024-11-25', 60, 350),
(11, 6, '2024-12-01', 70, 300),
(12, 6, '2024-12-10', 70, 300);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_id`, `ticket_id`, `booking_date`, `quantity`, `total_price`) VALUES
(1, 1, 1, '2024-06-01', 2, 400),
(2, 2, 3, '2024-07-01', 1, 150),
(3, 3, 5, '2024-08-01', 2, 600),
(4, 4, 7, '2024-09-01', 1, 160),
(5, 5, 9, '2024-10-01', 2, 700),
(6, 6, 11, '2024-11-01', 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Rila Najjakha', 'rila@example.com', '088503978571', 'Pati'),
(2, 'Assifa Khairu', 'assifa@example.com', '088203978570', 'Sragen'),
(3, 'Yeka Nurfy', 'yeka@example.com', '088803978549', 'Yogyakarta'),
(4, 'Bagus Abid', 'bagus@example.com', '088503978777', 'Kudus'),
(5, 'Reksa Najib', 'reksa@example.com', '088203933570', 'Semarang'),
(6, 'Karina Rosa', 'karina@example.com', '088803238576', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `PhotoURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `customer_id`, `package_name`, `short_desc`, `PhotoURL`) VALUES
(1, 1, 'Thailand Tour Packages', 'Explore the beauty of Thailand', 'https://bit.ly/3VuRcUu'),
(2, 2, 'Bali Tour Packages', 'Relax on the beaches of Bali', 'https://encr.pw/jenMR'),
(3, 3, 'Paris Tour Packages', 'Experience the romance of Paris', 'https://acesse.dev/Pn5dk'),
(4, 4, 'Malaysia Tour Packages', 'Discover the wonders of Malaysia', 'https://bit.ly/4c46NBt'),
(5, 5, 'Japan Tour Packages', 'Dive into the culture of Japan', 'https://encr.pw/fiWpR'),
(6, 6, 'South Korea Tour Packages', 'Enjoy the sights and sounds of Korea', 'https://bit.ly/3yYorrK');

-- --------------------------------------------------------

--
-- Table structure for table `package_detail`
--

CREATE TABLE `package_detail` (
  `detail_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `PhotoURL` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `long_desc` text NOT NULL,
  `schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_detail`
--

INSERT INTO `package_detail` (`detail_id`, `package_id`, `PhotoURL`, `location`, `long_desc`, `schedule`) VALUES
(1, 1, 'https://bit.ly/3VuRcUu', 'Bangkok', 'A 3-day tour covering the highlights of Bangkok, including the Grand Palace and Wat Arun.', '2024-07-01 to 2024-07-03'),
(2, 2, 'https://encr.pw/jenMR', 'Denpasar', 'A 3-day trip featuring Denpasar, with visits to Tanah Lot, Uluwatu Temple, and Kuta Beach.', '2024-08-10 to 2024-08-12'),
(3, 3, 'https://acesse.dev/Pn5dk', 'Paris', 'A 3-day escape to Paris with visits to Eiffel Tower, Louvre Museum, and a Seine River cruise.', '2024-09-05 to 2024-09-07'),
(4, 4, 'https://bit.ly/4c46NBt', 'Kuala Lumpur', 'A 3-day journey through Kuala Lumpur, including the Petronas Towers, Batu Caves, and a city tour.', '2024-10-20 to 2024-10-22'),
(5, 5, 'https://encr.pw/fiWpR', 'Tokyo', 'A 3-day excursion in Tokyo covering the highlights such as Shibuya Crossing, Senso-ji Temple, and Tokyo Tower.', '2024-11-15 to 2024-11-17'),
(6, 6, 'https://bit.ly/3yYorrK', 'Seoul', 'A 3-day tour of Seoul, featuring Gyeongbokgung Palace, N Seoul Tower, and Myeongdong shopping street.', '2024-12-01 to 2024-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`testimony_id`, `customer_id`, `comment`) VALUES
(1, 1, 'Amazing experience in Thailand!'),
(2, 2, 'Bali was the perfect getaway.'),
(3, 3, 'Paris was a dream come true.'),
(4, 4, 'Loved every moment in Malaysia.'),
(5, 5, 'Japan exceeded all my expectations.'),
(6, 6, 'Korea trip was fantastic.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_ticket`
--
ALTER TABLE `available_ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `package_detail`
--
ALTER TABLE `package_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_ticket`
--
ALTER TABLE `available_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package_detail`
--
ALTER TABLE `package_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available_ticket`
--
ALTER TABLE `available_ticket`
  ADD CONSTRAINT `available_ticket_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `available_ticket` (`ticket_id`) ON DELETE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE;

--
-- Constraints for table `package_detail`
--
ALTER TABLE `package_detail`
  ADD CONSTRAINT `package_detail_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE;

--
-- Constraints for table `testimony`
--
ALTER TABLE `testimony`
  ADD CONSTRAINT `testimony_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
