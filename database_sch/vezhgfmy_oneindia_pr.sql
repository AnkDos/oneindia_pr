-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2018 at 06:30 PM
-- Server version: 5.6.39-83.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vezhgfmy_oneindia_pr`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `sno` int(11) NOT NULL,
  `booking_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `flight_id` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `no_p` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'CONFIRMED'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`sno`, `booking_id`, `flight_id`, `date`, `no_p`, `status`) VALUES
(1, '0', 'fl-12', '', '0', 'CONFIRMED'),
(2, 'ANK809', 'fl-111', '', '', 'CONFIRMED'),
(3, 'ANK614', 'fl-21', '', '', 'CONFIRMED'),
(4, 'ANK325', 'fl-12', '', '', 'CONFIRMED'),
(5, 'ANK352', 'hy-1', '', '', 'CONFIRMED'),
(6, 'ANK788', 'fl-12', '', '', 'CONFIRMED');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `sno` int(11) NOT NULL,
  `flight_id` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `depart_time` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `arr_time` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `dur` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `fl_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`sno`, `flight_id`, `source`, `destination`, `depart_time`, `arr_time`, `dur`, `price`, `fl_name`) VALUES
(1, 'fl-111', 'RANCHI', 'DELHI', '11:30', '14:00', '2:30', 3500, 'luxary fly'),
(2, 'fl-12', 'RANCHI', 'HYDERABAD', '4:30', '8:30', '4:00', 3400, 'hydex'),
(3, 'fl-21', 'RANCHI', 'DELHI', '23:00', '1:00', '2:00', 4500, 'banrc'),
(4, 'f-2212', 'RANCHI', 'DELHI', '22:00', '00:00', '2:00', 5450, 'dlrc'),
(5, 'fl-d1', 'DELHI', 'HYDERABAD', '22:10', '2:10', '4:00', 5411, 'delfl'),
(6, 'fl-d2', 'DELHI', 'RANCHI', '8:00', '11:00', '3:00', 3450, 'dlfl'),
(7, 'fl-d3', 'DELHI', 'HYDERABAD', '15:00', '17:00', '2:00', 4321, 'hydlf'),
(8, 'hy-1', 'HYDERABAD', 'RANCHI', '22:30', '1:00', '2:30', 2323, 'hrf'),
(9, 'hy-2', 'HYDERABAD', 'RANCHI', '4:00', '7:00', '3:00', 6543, 'morh'),
(10, 'hy-3', 'HYDERABAD', 'DELHI', '12:00', '15:00', '3:00', 7652, 'dlsas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
