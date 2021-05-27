-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 05:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tepdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(22) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `illu_id` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `annousement`
--

CREATE TABLE `annousement` (
  `id` int(122) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fqdb`
--

CREATE TABLE `fqdb` (
  `id` int(22) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fqdb`
--

INSERT INTO `fqdb` (`id`, `question`, `answer`) VALUES
(0, 'Hi', 'Yellow'),
(2, 'Hello', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `homepagephotodb`
--

CREATE TABLE `homepagephotodb` (
  `id` int(20) NOT NULL,
  `firstimage` varchar(200) NOT NULL,
  `secondimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepagephotodb`
--

INSERT INTO `homepagephotodb` (`id`, `firstimage`, `secondimage`) VALUES
(31, 'img1.jpg', 'img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `illudb`
--

CREATE TABLE `illudb` (
  `id` int(22) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL,
  `finish` varchar(20) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `illudb`
--

INSERT INTO `illudb` (`id`, `name`, `date`, `title`, `about`, `image`, `finish`, `video`) VALUES
(1, 'Testiing ', '0033-03-31', 'Testing herrhr', 'Mark wiens', '', 'Findsin', ''),
(2, 'Helllo', '0000-00-00', 'World', 'Kein Pyi Si', '', 'unfinished', ''),
(3, 'Khin Wint Wah', '2019-06-05', 'The Night Sky', '										MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.\r\n', '', '', ''),
(4, 'Mg ', '2019-06-06', 'Telescopes 101', '			MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `infodb`
--

CREATE TABLE `infodb` (
  `id` int(20) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_date` date NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infodb`
--

INSERT INTO `infodb` (`id`, `img_name`, `img_date`, `img`) VALUES
(12, 'tESTING', '0221-12-21', ''),
(13, 'Sixth', '0002-12-12', 'simple-designs-website-50-beautifully-simple-portfolio-websites-for-your-inspiration-printable.jpg'),
(14, 'Ok', '0312-12-31', 'hootsuite.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'lwin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(100) NOT NULL,
  `member` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annousement`
--
ALTER TABLE `annousement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fqdb`
--
ALTER TABLE `fqdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepagephotodb`
--
ALTER TABLE `homepagephotodb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illudb`
--
ALTER TABLE `illudb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infodb`
--
ALTER TABLE `infodb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annousement`
--
ALTER TABLE `annousement`
  MODIFY `id` int(122) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fqdb`
--
ALTER TABLE `fqdb`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homepagephotodb`
--
ALTER TABLE `homepagephotodb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `illudb`
--
ALTER TABLE `illudb`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infodb`
--
ALTER TABLE `infodb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
