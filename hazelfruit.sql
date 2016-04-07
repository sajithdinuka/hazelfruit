-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2015 at 05:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hazelfruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `arrival` varchar(50) DEFAULT NULL,
  `depature` varchar(50) DEFAULT NULL,
  `person` int(5) DEFAULT NULL,
  `rooms` int(5) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`arrival`, `depature`, `person`, `rooms`, `type`, `email`, `contact`, `nic`) VALUES
('22/06/2015', '25/06/2015', 2, 1, 'cabana', 'cute@hotmail.com', 777747135, '902689748v'),
('01/01/2015', '31/01/2015', 2, 1, 'nonac', 'try@ymail.com', 752265646, '987654321v'),
('01/01/2015', '31/01/2015', 2, 1, 'cabana', 'sss', 123, '123456779v');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `roomno` int(5) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rtype` varchar(20) DEFAULT NULL,
  `facility` varchar(300) DEFAULT NULL,
  `charge` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomno`, `location`, `rtype`, `facility`, `charge`) VALUES
(1, 'In Front of Lake Side', 'ordinary', 'AC,Fridge,TV,Wi-Fi,Telephone,Bathroom', 'Rs.9000/-(1day)'),
(2, '2nd Floor Sea Side', 'luxury', 'AC,ECO System,Wi-Fi,Kitchen,Bathroom,Tel:', 'Rs.27900/-(1day'),
(3, 'ss', 'deluxe', 'cvdddbddbdbdbdbdbdbdbdbdbdbdbdbdvd', '890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('guest', '1234'),
('aa', 'ss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
