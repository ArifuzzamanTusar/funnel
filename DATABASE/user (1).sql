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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bio` longtext NOT NULL,
  `city` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avater_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `bio`, `city`, `birthday`, `gender`, `password`, `avater_image`) VALUES
(1, 'tusar', 'Arifuzzaman', 'Tusar', 'arifuzzamantusar50@gmail.com', '01713644570', '    Lazy By Born    ', 'Rajshahi', '1999-11-11', '                Male', '1e48c4420b7073bc11916c6c1de226bb', '4458-IMG_9307.jpg'),
(6, 'abony', '', '', 'abony@gmail.com', '', '', 'Rajshahi ', '', '', '1e48c4420b7073bc11916c6c1de226bb', ''),
(7, 'soumik', 'SouMik', 'Ahammed', 'soumik@gmail.com', '0175645545', '  I am a noob     ', 'Rajshahi', '', ' Male', '1e48c4420b7073bc11916c6c1de226bb', '3598-soumik.jpg'),
(8, 'raz', 'Jarjiash', 'Azam', 'raz@hotmail.com', '017212555', 'My talent is all about the idea  build', 'Rajshahi', '1997-12-04', 'Male', '1e48c4420b7073bc11916c6c1de226bb', '9560-raz.jpg'),
(9, 'asd', 'f', '', 'fds', 'fds', '', '', '', '', 'dfsfds', ''),
(10, 'peom1', '', '', ' peom@yahoo.com', ' 54554545', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', ''),
(11, 'dsa', '', '', ' peom@yahoo.com', ' 34', '', '', '', '', '87af382873ac12864910362ccc332497', ''),
(12, 'fuck', '', '', ' dadsa@de.de', ' 0111', '', '', '', '', '0aa1ea9a5a04b78d4581dd6d17742627', ''),
(13, 'fuck1', '', '', ' tusar@fuck.com', ' 0', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', ''),
(14, 'hukka', '', '', ' fuck@hukka.coom', ' 00', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', ''),
(15, 'faak', '', '', ' hukka@fuck.com', ' 0', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb', ''),
(16, 'demoAdmin', '', '', ' demo@demoadmin.com', ' 017545455', '', '', '', '', 'fe01ce2a7fbac8fafaed7c982a04e229', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
