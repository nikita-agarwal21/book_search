-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 06:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `auth_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `auth_name`, `email`) VALUES
(1, 'Bangia Ramesh', 'bangiagmail.com'),
(2, 'Steven Holzner', 'steven@gmail.com'),
(3, 'Schildt Herbert', 'schidit@gmail.com'),
(4, 'Balagurusamy E', 'balagu@gmail.com'),
(5, 'unknown', 'abc@gmail.com'),
(6, 'Y. Daniel Liang', 'daniel@gmail.com'),
(7, 'Guleria Pratiyush', 'guleriya@gmail.com'),
(8, 'Groof James', 'groff@gmail.com'),
(9, 'Stanek', 'stanek@gmail.com'),
(10, 'Nixon Robin', 'nixon@gmail.com'),
(11, 'Rahman Mizanur', 'rahmam@gmail.com'),
(12, 'Doyle Matt', 'matt@gmail.com'),
(13, 'Brown Martin C', 'martin@gmail.com'),
(14, 'Rao R. Nageswara', 'rao@gmail.com'),
(15, 'meyers chris', 'chris@gmail.com'),
(100, 'jjjjj', 'jjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `bookauthors`
--

CREATE TABLE `bookauthors` (
  `isbn_no` varchar(50) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookauthors`
--

INSERT INTO `bookauthors` (`isbn_no`, `author_id`) VALUES
(' 9781786463890', 11),
(' 9788120337350', 9),
(' 9789353162344', 4),
(' 9789381068663', 1),
(' 9789387284203', 7),
(' 9789390491629', 5),
('0133813487', 6),
('9780070223622', 2),
('9780470413968', 12),
('9781259003882', 8),
('9781786463890', 100),
('9789351198147', 15),
('9789352130153', 10),
('9789386052308', 14),
('9789387432284', 3),
('9789387572942', 13);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn_no` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pub_id` int(100) NOT NULL,
  `pub_year` int(20) NOT NULL,
  `price` int(11) NOT NULL,
  `pages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn_no`, `name`, `pub_id`, `pub_year`, `price`, `pages`) VALUES
(' 9781259003882', 'SQL The Complete Reference', 91, 2000, 500, 612),
(' 9781786463890', 'PHP 7 Data Structures and Algorithms', 90, 2000, 3000, 340),
(' 9788120337350', 'Microsoft SQL Server 2008 Administrators Pocket Consultant ', 92, 2011, 200, 100),
(' 9789352130153', 'Learning PHP, MySQL, JavaScript, CSS & HTML', 92, 2000, 900, 828),
(' 9789353162344', 'Programming with Java', 92, 2000, 540, 600),
(' 9789381068663', 'Learning PHP  ', 91, 1998, 299, 200),
(' 9789386052308', 'Core Python Programming', 90, 2000, 500, 300),
(' 9789387284203', 'PHP Beginner Practical Guide  ', 92, 2000, 200, 110),
(' 9789387432284', 'Java', 90, 2000, 400, 752),
(' 9789390491629', 'Java the Complete Reference', 91, 2000, 1240, 1248),
('0133813487', 'Introduction to Java Programming', 90, 1998, 500, 403),
('9780070223622', 'Php: The Complete Reference 1st Edition', 91, 2000, 490, 590),
('9780470413968', 'Beginning PHP 5.3 ', 91, 1998, 4740, 800),
('9789351198147', 'Learning with Python - How to Think Like a Computer Scientist ', 91, 2012, 500, 422),
('9789387572942', 'Python', 90, 1998, 500, 599);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `pub_id` int(11) NOT NULL,
  `pub_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`pub_id`, `pub_name`, `email`) VALUES
(90, 'pearson', 'pearson@gmail.com'),
(91, 'oxford', 'oxford@gmail.com'),
(92, 'mcgrawhill', 'hill@gamil.com\r\n              ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `bookauthors`
--
ALTER TABLE `bookauthors`
  ADD PRIMARY KEY (`isbn_no`,`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn_no`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`pub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
