-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 08, 2024 at 02:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infostore`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `img` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `cname`, `img`) VALUES
(1, 'college', 'IMG-63bfdc171a3251.14741980.jpg'),
(1, 'school', 'IMG-63bfdc36d0f3a8.47253168.webp'),
(2, 'college', 'IMG-63bfe11521d8b1.81249388.webp'),
(2, 'school', 'IMG-63bfe128c5f742.65550333.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eandp`
--

CREATE TABLE `eandp` (
  `id` int(11) DEFAULT NULL,
  `webname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eandp`
--

INSERT INTO `eandp` (`id`, `webname`, `email`, `username`, `password`) VALUES
(1, 'GMail', 'dpraidola@gmail.com', 'deviprasad', 'deviprasad2002'),
(1, 'Amazon', 'dprai2002@gmail.com', 'devi5252', 'devi2020'),
(2, 'GMail', 'jeevan@gmail.com', 'jeevan', 'jeeva250'),
(2, 'Cricbuzz', 'jeevan123@gmail.com', 'jeeva456', 'jeevan12345');

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `id` int(11) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `img_url` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`id`, `cname`, `img_url`) VALUES
(1, 'adhar card', 'IMG-63bfdb97f197d4.43476438.jpg'),
(1, 'driving licence', 'IMG-63bfdbfed35796.67942305.jfif'),
(2, 'driving licence', 'IMG-63bfe105b84305.22001022.jfif'),
(2, 'adhar card', 'IMG-63bfe10ce2cf68.72187493.jpg'),
(1, 'idcard', 'IMG-63d8c818b19b17.06151410.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idlogin`, `email`) VALUES
(1, 'dpraidola@gmail.com'),
(2, 'jeevanm@gmail.com'),
(3, 'thej@gmail.com');

--
-- Triggers `login`
--
DELIMITER $$
CREATE TRIGGER `twotrig` AFTER INSERT ON `login` FOR EACH ROW insert into personal set id=new.idlogin
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `permanent` varchar(250) DEFAULT NULL,
  `current` varchar(250) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `sslc` varchar(10) DEFAULT NULL,
  `puc` varchar(10) DEFAULT NULL,
  `qualification` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `dob`, `gender`, `height`, `weight`, `permanent`, `current`, `blood`, `sslc`, `puc`, `qualification`) VALUES
(1, 'Deviprasad Rai P', '2002-10-20', 'M', 175, 76, 'Peruvaje Dola House, Peruvaje Village and Post, Sullia Taluk, D.K. 574212', 'Peruvaje Dola House, Peruvaje Village and Post, Sullia Taluk, D.K. 574212', 'A+ve', '92.64', '83.33', 'B.Tech'),
(2, 'Jeevan', '2002-01-01', 'M', 101, 29, 'Mangalore', 'Mangalore', 'B+ve', '79', '89', 'B.Tech'),
(3, 'thejaswi', '2023-02-28', 'F', 155, 50, 'heya ', 'heya', 'A', '625', '600', 'btech');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Deviprasad', 'dpraidola@gmail.com', '9113624552', 'devi5040'),
(2, 'Jeevan', 'jeevanm@gmail.com', '9902516432', 'devi5040'),
(3, 'thejaswi', 'thej@gmail.com', '123456789', '123');

--
-- Triggers `registration`
--
DELIMITER $$
CREATE TRIGGER `gegege` AFTER INSERT ON `registration` FOR EACH ROW INSERT into login set idlogin=new.id
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD KEY `id` (`id`);

--
-- Indexes for table `eandp`
--
ALTER TABLE `eandp`
  ADD KEY `id` (`id`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`idlogin`) ON DELETE CASCADE;

--
-- Constraints for table `eandp`
--
ALTER TABLE `eandp`
  ADD CONSTRAINT `eandp_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`idlogin`) ON DELETE CASCADE;

--
-- Constraints for table `id`
--
ALTER TABLE `id`
  ADD CONSTRAINT `id_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`idlogin`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`email`) REFERENCES `registration` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`idlogin`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
