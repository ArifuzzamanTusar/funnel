-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funnel`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_no` int(50) NOT NULL,
  `heading` longtext NOT NULL,
  `sub_heading` longtext NOT NULL,
  `disc` longtext NOT NULL,
  `image` longtext NOT NULL,
  `btn_txt` longtext NOT NULL,
  `btn_url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_no`, `heading`, `sub_heading`, `disc`, `image`, `btn_txt`, `btn_url`) VALUES
(1, 'Apple', 'Not Set', '<p>convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.</p>', 'https://res.cloudinary.com/degujr87e/image/upload/v1607774369/funnel/milkyy_wglx3d.jpg', 'One plus series', '#'),
(2, 'oppo', 'Not Set', '<p>convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.</p>', 'https://res.cloudinary.com/degujr87e/image/upload/v1607774370/funnel/car-oppo_zrgpjj.jpg', 'sda', '#'),
(3, 'One Plus', 'Not Set', '<p>convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.convallis a pellentesque nec, egestas non nisi.</p>', 'https://res.cloudinary.com/degujr87e/image/upload/v1607774369/funnel/car-one_ntsduu.jpg', 'dsad', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
