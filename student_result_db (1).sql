-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2026 at 04:48 PM
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
-- Database: `student_result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$spwnWp/MhCgsIXWyqc56nOSqySkoPBeBL3uXRYqPlx8Z45ci9pDJu');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `name`, `email`, `password`) VALUES
(1, 'meraz', '1922emonmd@gmail.com', '1234'),
(2, 'The Meraz Personal', '1922emonmd@gmail.com', '$2y$10$bPxMMb4bwbHNaHnBaHOljugSjs0PKvwumZs2k3sXC5EYuok4SQ9XW'),
(3, 'kamrul', 'kamrul@gmail.com', '$2y$10$dDcgIWdqJwF0CzDYr37UH.GwJnE1t5PYoafjpMNHwc7bOwQU2Qobi'),
(4, 'raza', 'rezal@gmail.com', '$2y$10$OJXNhqGzDONZf0DOgg006.6DEgs12G5bvQxdi4xvUoIQ0EN0kn1Zi'),
(5, 'roni', 'roni@gmail.com', '$2y$10$3JPv1ym2mziE94gwnOOxdezkiemaRbEgqKYVetpQ.fxlJD/AucbIu'),
(6, 'rakibul', 'rakibul@gami.com', '$2y$10$mdKc28PK/81MFW6RXXuQZODhtFH89NE.Zc4RasRC/DCnRnuYfuaOe'),
(7, 'kamu', 'kamu@gmail.com', '$2y$10$BkXQKDSkJC4jLgIWX1cztuudHU4vIEd5hySKrLpoghA2Bg2zc9OH2'),
(8, 'kamu', 'kamu@gmail.com', '$2y$10$mpkkX9dBL1AsAyU8yrrPeeKbw8R1VEQDLPXeH2OX7AhNFjXUL2eju'),
(9, 'kamu', 'kamu@gmail.com', '$2y$10$D0bVXvO6N7sZCEluZlGeGODCmSE2NiC3ttkL5ZneBmxf4qZr1lFeW'),
(10, 'romonat', 'romonat@gmail.com', '$2y$10$c9yeXeBGFodfgtTzjnjJouC77XINbu/I90he9sA5mE35khTN4MJda'),
(11, 'reja', 'reja@gmail.com', '$2y$10$xv1VkKGRqwAwbqUj6Xwn6.mqZvYxfduIga/Uvdm2dLUwoXhvNh2m.'),
(12, 'fdae', 'dead@gmail.com', '$2y$10$MqfFgLlzu2A44vST51SDE.4TO53NgbYBg5Ri23/g7lzIIAA8CBGei'),
(13, 'The Meraz Personal', 'dfae@gmail.com', '$2y$10$/Iy5nv.zDxK6KlPj7dY8S.CTbqvagSCuoOAkiJvdPjse0Iq8W5QB2'),
(14, 'fdsa', 'fdsaa@gmail.com', '$2y$10$NUKTF9ADSYt.4Rcrwd7cNeVdTVKu8tpeu6g9R8hCiNxu2kZifBVGu'),
(15, 'dfsa', 'easa@gmail.com', '$2y$10$LTAg61vCtVAAkqxFKRZ4CuG6J21erEfMEtZlk81GN8aIch9pfTuj.'),
(16, 'feawd', 'eadfa@gmail.com', '$2y$10$.DJ2CWs51kD9NL7oh/yb8.rwi2fE2/leOsGwu2NIC1/ehkUGXsoX6'),
(17, 'fda', 'eawa@gmail.com', '$2y$10$Jtrd1aO2w.jX2qkxR6WCHeOcEUA1zqDdth3gQoZnpab0j6CCIjAlm'),
(18, 'fdasw', 'fdasga@gmail.com', '$2y$10$tdncXe4xfYEDE4o5J/cT..AeGnj2BiDzYt7D7JiZJXpocZ1d9hsca'),
(19, 'mama', 'mama@gmail.com', '$2y$10$KeeeEGVhUftG7h/Z1MFaqe2mqInp4./wauV8PId86fCX/YBR3UJIa'),
(20, 'rw', 'rw@gmail.com', '$2y$10$ex6XBL7zJPF.0sB9YylsbOvx2qekqM4WRyW/IiH39L/99TInNGaWm'),
(21, 'rohan', 'rohan@gmail.com', '$2y$10$/yuSUcLvVzlQwJBXWcIDiOC9xjMWyfXcWCHw4wfF6Nyy91hs4LGM6'),
(22, 'royel', 'royel1234@gmail.com', '$2y$10$Lvi5FN5WMxYUTz1sbjqLf.gMKd2UQO3rdSq7q7kWUpSQZ8kipKT1q'),
(23, 'riya', 'riya@gmail.com', '$2y$10$K.eKzmd4fGPQDOWiigyA0uLnR9Hk9wqzJgc.JHbtcIFeOH7nitoLm');

-- --------------------------------------------------------

--
-- Table structure for table `submit_result`
--

CREATE TABLE `submit_result` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_result`
--

INSERT INTO `submit_result` (`sno`, `name`, `id`, `department`, `subject`, `marks`, `date`) VALUES
(1, 'khalida', 101, 'CST', 'math', 40, '0000-00-00'),
(2, 'meraz', 101, 'CST', 'math', 40, '2026-02-28'),
(3, 'The Meraz Personal', 231, 'CST', 'math', 40, '2026-03-01'),
(4, 'The Meraz Personal', 231, 'CST', '', 0, '2026-03-01'),
(5, 'The Meraz Personal', 231, 'CST', 'math', 49, '2026-03-01'),
(6, 'kamu', 234, 'CST', 'math', 32, '2026-03-01'),
(7, 'fdas', 54, 'CST', 'math', 34, '2026-03-01'),
(8, 'das', 66, 'CT', 'math', 64, '2026-03-01'),
(9, 'fdas', 342, 'CST', 'math', 34, '2026-03-01'),
(10, 'fd', 234, 'CST', 'math', 32, '2026-03-01'),
(11, 'masud', 405, 'CST', 'math', 77, '2026-03-01'),
(12, 'f', 0, '', '', 0, '2026-03-02'),
(13, '', 0, '', '', 0, '2026-03-02'),
(14, '', 0, '', '', 0, '2026-03-02'),
(15, 'kamu', 234, 'CT', 'math', 89, '2026-03-02'),
(16, 're', 66, 'MT', 'math', 78, '2026-03-02'),
(17, 'kaka', 23, 'cst', 'math', 66, '2026-03-02'),
(18, 'rana', 50, 'CT ', 'math', 66, '2026-03-02'),
(19, 'Mainul', 55, 'ET', 'Physics', 96, '2026-03-04'),
(20, 'riya', 120, 'CST', 'math', 66, '2026-05-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `submit_result`
--
ALTER TABLE `submit_result`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `submit_result`
--
ALTER TABLE `submit_result`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
