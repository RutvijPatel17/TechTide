-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshopmanagementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `Name`, `Password`) VALUES
(1, 'Rutvij', '12345678'),
(2, 'Admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `ID` int(11) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `Workshop_ID` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`ID`, `Student_ID`, `Workshop_ID`, `Feedback`) VALUES
(21, 2, 32, 'Better'),
(22, 3, 33, 'Better'),
(24, 6, 36, 'Best');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Registration_ID` int(11) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `Workshop_ID` int(11) NOT NULL,
  `Registered_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Registration_ID`, `Student_ID`, `Workshop_ID`, `Registered_at`) VALUES
(16, 3, 33, '2025-07-02 08:13:01'),
(19, 6, 36, '2025-07-02 08:13:46'),
(20, 5, 32, '2025-07-03 07:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `Student_id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `College` varchar(200) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`Student_id`, `Name`, `Email`, `Phone`, `College`, `Created_at`) VALUES
(1, 'Patel Rutvij', 'rutvij@gmil.com', '5466213698', 'SCET', '2025-07-03 08:26:28'),
(2, 'Dev Paneria', 'dev@gmail.com', '7895463216', 'SCET', '2025-06-08 03:43:10'),
(3, 'Sujal parmar', 'sujal@gmail.com', '88495135468', 'SCET', '2025-07-01 07:45:16'),
(5, 'Nupur Athaviya', 'nupur@gmail.com', '64684546879', 'SCET', '2025-07-01 07:48:09'),
(6, 'Tisha Chauhan', 'tisha@gmail.com', '64845468784', 'SCET', '2025-07-01 07:48:57'),
(8, 'lorem test', 'lorem@gmail.com', 'xyz', 'SCET', '2025-07-03 07:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_workshop`
--

CREATE TABLE `tbl_workshop` (
  `Workshop_ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Category` enum('Technical','Non-Technical','','') NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Workshop_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_workshop`
--

INSERT INTO `tbl_workshop` (`Workshop_ID`, `Title`, `Description`, `Date`, `Category`, `Created_at`, `Workshop_img`) VALUES
(32, 'updated', 'Hands-on sessions on ML algorithms and model building.	', '2025-07-16', 'Technical', '2025-07-03 07:49:59', '17514480774613.png'),
(33, 'Data Visualization with Python	', 'Learn to visualize data using Matplotlib and Seaborn.	', '2025-07-17', 'Technical', '2025-07-02 09:14:05', '17514476459336.png'),
(34, 'Effective Communication Skills	', 'Improve verbal, non-verbal, and written communication techniques.	', '2025-07-19', 'Non-Technical', '2025-07-02 08:08:51', '17514437317785.png'),
(36, 'Entrepreneurship and Startup Workshop	', 'Guide to launching your startup idea with case studies and pitch training.	', '2025-07-15', 'Non-Technical', '2025-07-02 09:21:34', '17514480942615.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tbl_feedback_ibfk_1` (`Student_ID`),
  ADD KEY `tbl_feedback_ibfk_2` (`Workshop_ID`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`Registration_ID`),
  ADD KEY `tbl_registration_ibfk_1` (`Student_ID`),
  ADD KEY `tbl_registration_ibfk_2` (`Workshop_ID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `tbl_workshop`
--
ALTER TABLE `tbl_workshop`
  ADD PRIMARY KEY (`Workshop_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `Registration_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_workshop`
--
ALTER TABLE `tbl_workshop`
  MODIFY `Workshop_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `tbl_student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_feedback_ibfk_2` FOREIGN KEY (`Workshop_ID`) REFERENCES `tbl_workshop` (`Workshop_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD CONSTRAINT `tbl_registration_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `tbl_student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_registration_ibfk_2` FOREIGN KEY (`Workshop_ID`) REFERENCES `tbl_workshop` (`Workshop_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
