-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2020 at 03:27 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doodhlelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderaddress`
--

DROP TABLE IF EXISTS `orderaddress`;
CREATE TABLE IF NOT EXISTS `orderaddress` (
  `s_no` bigint(10) NOT NULL AUTO_INCREMENT,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_liter` double NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_mob` bigint(13) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `sl.no.` (`s_no`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderaddress`
--

INSERT INTO `orderaddress` (`s_no`, `c_date`, `c_liter`, `c_name`, `c_mob`, `c_email`, `c_address`) VALUES
(13, '2020-05-05 18:30:00', 5.5, 'manish jha', 9006515018, 'xyz@gmail.com', 'bhojpur sarangpur'),
(14, '2020-05-05 18:30:00', 2, 'abhishek', 9852513794, 'pprincekumarjha493@gmail.com', 'At-Bhojpur p.o-Akhtiyarpur'),
(19, '2020-06-11 06:22:38', 2, 'Prince Kumar', 919852513794, 'pprincekumarjha493@gmail.com', 'At-bhojpur p.o-akhtiyarpur p.s-sarairanjan dist-samastipur bihar 848127'),
(16, '2020-05-01 18:30:00', 2, 'hgcgvjhm', 9852513794, 'pprincekumarjha493@gmail.com', 'At-Bhojpur p.o-Akhtiyarpur, Sarairanjan'),
(17, '2020-05-01 18:30:00', 2, 'hgcgvjhm', 9852513794, 'pprincekumarjha493@gmail.com', 'At-Bhojpur p.o-Akhtiyarpur, Sarairanjan'),
(18, '2020-06-11 06:20:10', 2, 'Prince Kumar', 9852513794, 'pprincekumarjha493@gmail.com', 'At-bhojpur p.o-akhtiyarpur p.s-sarairanjan dist-samastipur bihar 848127'),
(20, '2020-06-11 06:26:14', 2, 'prince kumar', 98525143, 'pprincekumarjha493@gmail.com', 'At-Bhojpur p.o-Akhtiyarpur'),
(21, '2020-06-11 15:42:18', 5, 'Prince Kumar', 919852513794, 'pprincekumarjha493@gmail.com', 'At-bhojpur p.o-akhtiyarpur p.s-sarairanjan dist-samastipur bihar 848127');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
