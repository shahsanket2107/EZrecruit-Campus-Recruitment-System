-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 06:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `apply_job_post`
--

CREATE TABLE `apply_job_post` (
  `id_apply` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job_post`
--

INSERT INTO `apply_job_post` (`id_apply`, `id_jobpost`, `id_company`, `id_user`, `status`) VALUES
(4, 22, 7, 8, 1),
(3, 20, 8, 8, 0),
(5, 21, 7, 8, 0),
(6, 0, 0, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `headofficecity` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `companytype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `companyname`, `headofficecity`, `contactno`, `website`, `companytype`, `email`, `password`, `createdAt`) VALUES
(7, 'Google', 'Delhi', '0000000000', 'google.com', 'MNC', 'career@google.com', 'YWY5ZjUwNWNhNzg2OThiMzcyZGUzNTgzNmIxYzIyOGM=', '2021-04-17 10:26:21'),
(8, 'Amazon', 'Mumbai', '3333333333', 'amazon.com', 'MNC', 'career@amazon.com', 'YzM3ODFiNzJmNzQ1ZTNiZDRmNmJkYjZlOTA4NGQwZDI=', '2021-04-17 10:26:59'),
(9, 'Facebook', 'Ahmedabad', '5555555555', 'facebook.com', 'Social Networking', 'career@facebook.com', 'OTVhMDRkNmQ5MWU4ZjBhN2EwODEyM2M4MTc3ZWFjNjI=', '2021-04-17 10:28:15'),
(10, 'Apple', 'New York', '2222222222', 'apple.com', 'MNC', 'career@apple.com', 'Zjc1OTgyNzZjMGExM2UzYjk0YzZmNDcyZWIwNzgzZjE=', '2021-04-17 10:29:28'),
(11, 'Netflix', 'California', '1111111111', 'netflix.com', 'Digital Media', 'career@netflix.com', 'OTMzYmEwNDY0NzY4OWYzNjA4N2YyNThmYmQzMDZjMTI=', '2021-04-17 10:30:29'),
(12, 'GNB', 'NY', '9999999999', 'barneyisawesome.com', 'banking', 'gnb@gnb.com', 'OWEwMWIyYTJlMGJlOTg1ZmNmMDkyODUyYzZhZGQzYWY=', '2021-04-27 16:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `minimumsalary` varchar(255) NOT NULL,
  `maximumsalary` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `description`, `minimumsalary`, `maximumsalary`, `experience`, `qualification`, `createdAt`) VALUES
(22, 7, 'Cloud Engineer', 'Use the concepts of Cloud Computing', '50000', '130000', '3 ', 'Mtech/Ms', '2021-04-17 10:55:52'),
(23, 7, '', '', '', '', '', '', '2021-04-25 16:11:34'),
(24, 7, '', '', '', '', '', '', '2021-04-25 16:11:49'),
(20, 8, 'Data Analyst', 'Analyze data and optimise it.', '40000', '80000', '2 ', 'Btech', '2021-04-17 10:53:40'),
(18, 9, 'Marketing Head', 'Publicize and do marketing of products.', '20000', '75000', '0', 'Btech', '2021-04-17 10:51:25'),
(19, 8, 'Machine Learning Specialist', 'Apply ML and DL concepts', '50000', '120000', '4 ', 'Mtech/Ms', '2021-04-17 10:52:50'),
(14, 11, 'Marketing Director', 'You have to be weel versed with social media marketing', '5000', '50000', '1 ', 'Btech', '2021-04-17 10:47:14'),
(15, 10, 'Software Engineer', 'System design and deploying', '25000', '100000', '3 ', 'Btech', '2021-04-17 10:48:18'),
(16, 10, 'HR', 'Head Representative', '10000', '60000', '0', 'Not required', '2021-04-17 10:48:58'),
(17, 9, 'Data Scientist', 'Analyze data', '25000', '90000', '2 ', 'Btech', '2021-04-17 10:50:28'),
(13, 11, 'Web Designer', 'You have to design websites and make apps', '10000', '90000', '2 ', 'Btech', '2021-04-17 10:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `passingyear` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `contactno`, `qualification`, `stream`, `passingyear`, `dob`, `age`, `designation`, `resume`) VALUES
(9, 'Sanket ', 'Shah', '18bce211@nirmauni.ac.in', 'OTlmYzI4OGJlZDcyMzhkMTZkNTY3YWE1YjNjY2Q0ZjU=', '221B Baker\'s Street', 'Ahmedabad', 'Gujarat', '1111111111', 'Btech', 'Computer Science', '2022-05-17', '2000-07-21', '20', 'Data Scientist', '607abbadd499d.pdf'),
(10, 'Smit', 'Makadia', '18bce231@nirmauni.ac.in', 'OTlmYzI4OGJlZDcyMzhkMTZkNTY3YWE1YjNjY2Q0ZjU=', 'Asgard', 'Rajkot', 'Gujarat', '2222222222', 'Btech', 'Computer Science', '2022-05-17', '2000-01-17', '21', 'Web Designer', '607abc2d50b5a.pdf'),
(8, 'Samved', 'Shah', '18bce206@nirmauni.ac.in', 'OTlmYzI4OGJlZDcyMzhkMTZkNTY3YWE1YjNjY2Q0ZjU=', 'Gokuldhm Soc.', 'Ahmedabad', 'Gujarat', '3333333333', 'Btech', 'Computer Science', '2022-05-16', '2000-07-21', '21', 'Software Engineer', '607abb28a8141.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `apply_job_post`
--
ALTER TABLE `apply_job_post`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id_jobpost`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_job_post`
--
ALTER TABLE `apply_job_post`
  MODIFY `id_apply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id_jobpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
