-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2025 at 04:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mongan-transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `Image`, `Heading`, `Content`, `Date_time`) VALUES
(1, 'about.jpg', 'Redefining Vehicle Recovery Services', 'Based in Chertsey our team of experienced vehicle experts transports cars and agricultural machinery from local auction houses like BCA Blackbushe.\r\n\r\nCustomers can rely on our talented team to move cars, vehicles, small tractors, diggers, motorbikes and ', '2025-02-17 12:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `SubHeading` varchar(255) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`Id`, `Image`, `Heading`, `SubHeading`, `Date_time`) VALUES
(2, '../home_upload/hero-image-01.jpg', 'Looking for recovery Services in Chertsey | Runnymede | Surrey ?', 'Your Trusted Partner In Emergency Vehicle Recovery', '2025-02-16 16:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone_number`
--

CREATE TABLE `phone_number` (
  `Id` int(11) NOT NULL,
  `Site_details_Id` int(11) NOT NULL,
  `Phone number` bigint(11) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone_number`
--

INSERT INTO `phone_number` (`Id`, `Site_details_Id`, `Phone number`, `Date_time`) VALUES
(1, 1, 7980388430, '2025-02-08 17:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `Id` int(11) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_details`
--

INSERT INTO `site_details` (`Id`, `Logo`, `Email`, `Address`, `Date_time`) VALUES
(1, 'logo.png', 'aayushighosh291@gmail.com', 'Kolkata', '2025-02-08 17:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `Id` int(11) NOT NULL,
  `Commentor` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`Id`, `Commentor`, `Comment`, `Date_time`) VALUES
(1, 'Sarah T', 'Exceptional service.', '2025-03-02 08:08:25'),
(2, 'Mark L', 'Fast, professional and affordable. The team was great, and the recovery process was smooth.', '2025-03-02 15:27:34'),
(5, 'Aayushi G', 'Good.', '2025-03-03 17:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `Date_time`) VALUES
(1, 'mt@admin.com', 'mongan@2025', '2025-01-26 13:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `whychoose`
--

CREATE TABLE `whychoose` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whychoose`
--

INSERT INTO `whychoose` (`Id`, `Image`, `Heading`, `Content`, `Date_time`) VALUES
(1, 'why-choose-us-image.png', 'Experts You Can Trust On The Road', 'With a commitment to reliability, speed, and professionalism, we ensure your peace of mind in every situation. Our 24/7 availability, modern fleet, and highly trained team guarantee prompt and efficient service whenever and wherever you need it.\r\n\r\nWe pri', '2025-02-17 13:52:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `phone_number`
--
ALTER TABLE `phone_number`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `whychoose`
--
ALTER TABLE `whychoose`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone_number`
--
ALTER TABLE `phone_number`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_details`
--
ALTER TABLE `site_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whychoose`
--
ALTER TABLE `whychoose`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
