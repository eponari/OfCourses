-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 11:23 PM
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
-- Database: `ofcoursesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `dueDate` date NOT NULL,
  `uploadDate` date NOT NULL,
  `weekNr` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `maxGrade` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `title` text NOT NULL,
  `path` varchar(150) NOT NULL,
  `uploadDate` date NOT NULL,
  `courseId` int(11) NOT NULL,
  `weekNr` int(11) NOT NULL,
  `assignmentId` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `courseId` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `professorEmail` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `qid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `courseId` varchar(1024) NOT NULL,
  `email` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`courseId`, `email`) VALUES
('0', 'eponari19@epoka.edu.al');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `fullName` text NOT NULL,
  `password` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `fullName`, `password`, `type`) VALUES
('3213@gmail.com', 'Edison Ponari', '$2y$10$faM2T2Z0pL3IlRJnCiJb2eQGoZRoNaZLRQUz6AFIjDUmK6YkiqYwC', 2),
('3213@hotmail.com', 'Edison Ponari', '$2y$10$GiqR4Hjo625mPRwM8/ZWrObr/NDLv49QtiuabDniCnAlGMnXnh8ey', 1),
('a@gmail.com', 'Ari Gjerazi', '$2y$10$f2A6afnnLzGLc94WQxEEJOOaEGxXNY0BA9QhvjUry9fzkOMWjhqoS', 2),
('aaa@gmail.com', 'Ari', '$2y$10$QW.YGi72KBbqNVUxPMOVBOzJa7p7b6TVCHcxQmpWxV0lCdHwDHChu', 2),
('e@gmail.com', 'edi', '$2y$10$4loqTr9f.OF.HXX.sNwDJe13hoOl40J9GaRPXut4kmWiHy9iTFcqu', 1),
('edi.edison01@hotmail.com', 'Edison Ponari', '$2y$10$TDP55lWF2bT5DmMlWDdHZenUFj8impToLzsOj7o5ZioNGliDS8You', 1),
('edisonedisonedison@hotmail.com', 'zhila', '$2y$10$r9K79c9TBodkYzYvJwWpEeK7GYCXe8GlPpgioKANxUCRnpopSM0bu', 1),
('eponari19@epoka.edu.al', 'Edison Ponari', '$2y$10$0WD4jMnd4fihwrb0e9ZAWeUyTPuy3ylaBM4deZwYIjXOyfn9ZwY6.', 1),
('salonarber@gmail.com', 'Edison Ponari', '$2y$10$ftulRYvf1gNwfiZZF0I3cOMvtoFKLe6TFLh/RnZbkxG31Wa/Trz9m', 1),
('xbano@gmail.com', 'Klodiana', '$2y$10$NMA.CgoYtVawvP9A3/E0XeXVeh1Z.uV2psnK/lRoqlFF9LDSOAgta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `title` text NOT NULL,
  `weekNr` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `week`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`path`),
  ADD KEY `id` (`id`),
  ADD KEY `weekNr` (`weekNr`,`courseId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`email`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`weekNr`,`courseId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachment`
--
ALTER TABLE `attachment`
  ADD CONSTRAINT `attachment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `assignment` (`id`),
  ADD CONSTRAINT `attachment_ibfk_2` FOREIGN KEY (`weekNr`,`courseId`) REFERENCES `week` (`weekNr`, `courseId`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
