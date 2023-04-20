-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 03:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(228) NOT NULL,
  `password_hash` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(0, 'adhiti', 'adhiti@gmail.com', '$2y$10$u6C/TqXkmbCSxeB1w1UFcu5gIF0uJ9Q/F4MtEVfa/SB.CmOLaA.xq'),
(0, 'aliya', 'aliya10@gmail.com', '$2y$10$bF/JEDZMjsLu6urmOvkEbed/yXUm9x4JVnzME6nobtWSxjQsnONja'),
(0, 'bala', 'bala21@gmail.com', '$2y$10$p7Ab2JxC/N4B.cqztWYLt.7S.Qfy1fYtwXHjpe9QG290PNGha8.ze'),
(0, 'deva', 'deva@gmail.com', '$2y$10$hzFOTLOZCwXuMgjNMZ9mJejHwW0AXtHXW88CUnJ9otsmPxVtyTZRi'),
(0, 'DevaVasu', 'devavasu2002@gmail.com', '$2y$10$THS1odC3sM4qdKeBdOJ.suxnYNPfoXE0mazspzy9/KxjYjmmQb2gm'),
(0, 'fiirdous', 'firdousfathima@gmail.com', '$2y$10$wOSRVu8Dr/OwDDkhclcS2OHmxo9oItoXuDGbGtsEAWwhtBEfby6dK'),
(0, 'Kamal', 'Kamalnath@gmail.com', '$2y$10$LUMO5SsD91TJmPonGgHfCOczNGEyzdIdBrG7YONEXmaYfcm88g5fO'),
(0, 'karthi', 'karthi07@gmail.com', '$2y$10$76gEakxfj65zlHiCJywlLOYyQCqdnLdFQb4lKj0clxEl99zf/qW3m'),
(0, 'keerthana', 'keerthana22@gmail.com', '$2y$10$Yt6EFGVKub.yl4t7HUryZu5mfN0S.AYGckIaAaw8HcZnaDMxJINIq'),
(0, 'ravi', 'ravichandiran@gmail.com', '$2y$10$llvo36NkQ8EntWLT4XySau1TKR6fc39JuaXSfvf1flen2enBhkoPG'),
(0, 'sam', 'sammy12345678@gmail.com', '$2y$10$6YQ13dxVZ2XAPWOG7C0QpOYn/Ignxt.M0SbjmvpCuYyT6Oax/ieZu'),
(0, 'surya', 'surya@gmail.com', '$2y$10$JDGTEyLWjRKlmN.Kzu5LhuesrzoxLHQhzIMx9NTAmhXMK604NYubW'),
(0, 'johnsnow', 'targareyon@gmail.com', '$2y$10$eo2GbpwvOVGNINn3o3bmKua2UeqEypxpU/egfW/Lu0CqjyKPUoIfW'),
(0, 'venkat', 'venkat@gmail.com', '$2y$10$AYaa76lQT1nnb8R92KJVZO6iWuE1efcztd/DIeOJ/IRMulel9cblu'),
(0, 'vicky', 'vickygame@gmail.com', '$2y$10$uucuDJ.y320YBE9hEIZFZeRWmJ9BiV0ZGxXY2OcCG1kg9sfIDWOLq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
