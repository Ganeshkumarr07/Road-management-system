-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 06:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `road`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name_r` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `complaint` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name_r`, `address`, `image`, `complaint`, `created_at`, `status`) VALUES
(58, 'Akash', 'Thiruverambur - Suriyur Road ، 620016 Tiruchirappalli، India', 'road1.jpg', 'Potholes: Severe accidents can occur when blacktop or asphalt are missing in large chunks from the road.\r\nIce patches: Ice patches can form even without rain or snow. They typically form in isolated areas on the road.', '2023-05-12 04:02:20', 'On Progress'),
(59, 'Dhawan', 'Thiruverambur - Suriyur Road ، 620016 Tiruchirappalli، India', 'road1.jpg', 'the road in this place are more damaged and there is the potholes in the road ', '2023-05-16 09:15:53', 'Accepted'),
(60, 'Ram', 'Ayampatti Road ، 620015 Tiruchirappalli، India', 'road 3.jpg', 'The road in this area is more damaged and there is a potholes in this place ', '2023-05-16 09:26:48', 'Accepted'),
(61, 'Suresh', 'Police Colony Main Road ، 620016 Tiruchirappalli، India', 'road2.jpg', 'The road in the area more damaged ', '2023-05-16 13:54:06', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_report`
--

CREATE TABLE `inspection_report` (
  `id` int(6) UNSIGNED NOT NULL,
  `inspector_id` varchar(30) NOT NULL,
  `inspection_date` date NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `road_condition` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`id`, `inspector_id`, `inspection_date`, `street_name`, `road_condition`, `description`) VALUES
(5, '001', '2023-04-26', 'Middle Street', 'good', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(6, '002', '2023-04-27', 'South Street', 'excellent', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(7, '003', '2023-04-20', '', 'poor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(8, '001', '2023-05-17', 'Ayyapan Nagar', 'fair', 'yes this road in this place more damaged'),
(9, '001', '2023-05-20', 'South Street', 'fair', 'the roads are damaged badly and there is potholes');

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

CREATE TABLE `inspector` (
  `id` int(11) NOT NULL,
  `ins_id` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspector`
--

INSERT INTO `inspector` (`id`, `ins_id`, `password`) VALUES
(0, '001', 'ins001');

-- --------------------------------------------------------

--
-- Table structure for table `rmms`
--

CREATE TABLE `rmms` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rmms`
--

INSERT INTO `rmms` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'ganesh', 'murgadas2001@gmail.com', 'ganesh123', 'ganesh123'),
(2, 'akash', 'akash@gmail.com', 'akash123', 'akash123'),
(3, 'surya', 'surya@gmail.com', 'su123', 'su123'),
(4, 'ram', 'ram@mamcet.com', 'ram123', 'ram123'),
(5, 'pravin', 'pravin@gmail.com', 'pravin123', 'pravin123'),
(6, 'user1', 'user@gmail.com', 'user123', 'user123'),
(7, 'user2', 'ddydy@gmail.com', 'user2', 'user2'),
(8, 'Syed Apsar', 'syedapar2001@gmail.com', 'CHAYOKI', 'CHAYOKI'),
(9, 'surya', 'surya70941@gmail.com', 'surya123', 'surya123'),
(10, 'surya', 'surya70941@gmail.com', 'surya123', 'surya123'),
(11, 'user3', 'user3@gmail.com', 'user123', 'user123'),
(12, 'Ganesh', 'murgadas2001@gmail.com', 'ganesh123', 'ganesh123'),
(13, 'Akash', 'akash@gmail.com', 'akash123', 'akash123'),
(14, 'Surya', 'surya@gmail.com', 'surya123', 'surya123'),
(15, 'John', 'John@gmail.com', 'john123', 'john123'),
(16, 'Dhawan', 'dhawan@gmail.com', 'dhawan123', 'dhawan123'),
(17, 'Ram', 'ram@gmail.com', 'ram123', 'ram123'),
(18, 'Suresh', 'suresh@gmail.com', 'suresh123', 'suresh123');

-- --------------------------------------------------------

--
-- Table structure for table `road_inspectors`
--

CREATE TABLE `road_inspectors` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `street` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `road_inspectors`
--

INSERT INTO `road_inspectors` (`id`, `name`, `street`, `date`) VALUES
(13, 'Tilak', 'South Street', '2023-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection_report`
--
ALTER TABLE `inspection_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspector`
--
ALTER TABLE `inspector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmms`
--
ALTER TABLE `rmms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road_inspectors`
--
ALTER TABLE `road_inspectors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `inspection_report`
--
ALTER TABLE `inspection_report`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rmms`
--
ALTER TABLE `rmms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `road_inspectors`
--
ALTER TABLE `road_inspectors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
