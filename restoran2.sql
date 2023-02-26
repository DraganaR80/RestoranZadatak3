-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jelovnik`
--

CREATE TABLE `jelovnik` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jelovnik`
--

INSERT INTO `jelovnik` (`id`, `type`, `name`, `quantity`, `price`) VALUES
(1, 'Predjelo', 'domaća proja', '1 komad', 230),
(2, 'Predjela\r\n', 'pohovani sir', '250gr', 580),
(3, 'Predjela', 'punjena pohovana paprika', '250gr', 400),
(4, 'Predjela', 'krompir u čakširama', '1 porcija', 400),
(5, 'Supe i  čorbe', 'domaća supa', '1 porcija', 430),
(6, 'Supe i čorbe', 'potaž', '1 porcija', 380),
(7, 'Supe i čorbe', 'paradajz čorba', '1 porcija', 350),
(8, 'Glavna jela', 'podvarak', '1 porcija', 520),
(9, 'Glavna jela', 'sarma', '1 porcija', 980),
(10, 'Glavna jela', 'ćureće meso sa mlincima', '1 porcija', 1050),
(11, 'Glavna jela', 'zapečena kolenica', '1 porcija', 1200),
(12, 'Jela sa roštilja', 'medaljoni u sosu od pečuraka', '350gr', 1350),
(13, 'Jela sa roštilja', 'piletina provansal', '300gr', 1050),
(14, 'Jela sa roštilja', 'punjeni ražnjići', '400gr', 1200),
(15, 'Jela sa roštilja', 'biftek', '330gr', 3500),
(16, 'Poslastice', 'gomboce sa šljivama', '1 porcija', 400),
(17, 'Poslastice', 'torte', '1 parče', 450),
(18, 'poslastice', 'plačinke', '1 porcija', 330),
(19, 'Salate', 'svež kupus', '1 porcija', 300),
(20, 'Salate', 'masline', '1 porcija', 200),
(21, 'Salate', 'srpska salata', '1 porcija', 370),
(22, 'Salate', 'grčka salata', '1 porcija', 450);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `noppl` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jelovnik`
--
ALTER TABLE `jelovnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jelovnik`
--
ALTER TABLE `jelovnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
