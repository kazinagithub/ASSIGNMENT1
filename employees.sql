-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 12:19 PM
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
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `department` varchar(20) NOT NULL,
  `task` varchar(50) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `name`, `department`, `task`, `payment`) VALUES
(1, 'mugabo kazina jules', 'developer', 'PDF', '50000'),
(2, 'hagenimana', 'developer', 'PDF', '50000'),
(3, 'byukusenge', 'developer', 'PDF', '50000'),
(4, 'ushakamahoro', 'developer', 'PDF', '50000'),
(5, 'habiyambere', 'developer', 'PDF', '50000'),
(6, 'benoit', 'sup', '3d animaation', '90000'),
(7, 'cedrick', 'developer', '3d animation', '60000'),
(8, 'mugabo', 'developer', 'PSF', '50000'),
(9, 'shimwa joviah', 'sup', 'IT sup', '25000'),
(10, 'mugabo', 'developer', 'PSF', '50000'),
(11, 'karemera aimable', 'support', 'web dev', '50000'),
(12, 'eeewwe', 'wqe', 'qer', 'rwre'),
(13, 'mugabo', 'developer', 'PSF', '50000'),
(14, 'abimana', 'support', 'IT sup', '25000'),
(15, 'mukabaramba valentine', 'bussines', 'debity', '25000'),
(16, 'leonard ', 'developer', 'pos', '50000'),
(17, 'king', 'dev', 'web dev', '70000'),
(18, 'travoller', 'ju', ' ksJKX', '980809'),
(19, 'kade', 'supp', 'supp', '26000'),
(20, 'hyhuhyt', 'jkhjxkznm', 'mdnjkhasjx', '98703'),
(21, 'ujkiyt', 'mknbn', 'kjuhj', 'djuhajk'),
(22, 'olivie', 'support', 'it support', '25000'),
(23, 'lizzy', 'developer', 'psf project', '50000'),
(24, 'jean de dieu', 'developer', 'PSF', '50000'),
(25, 'uwitonze', 'support', 'PSF', '50000'),
(26, 'leo', 'developer', 'web dev', '25000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
