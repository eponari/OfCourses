-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 11:53 PM
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
  `description` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`dueDate`, `uploadDate`, `weekNr`, `courseId`, `description`, `id`, `title`) VALUES
('2022-07-08', '2022-06-14', 1, 7, 'fasfsfsafsafasfsfsafsafasfsfsafsafasfsfsafsafasfsfsafsa', 4, 'HW1'),
('2022-06-25', '2022-06-14', 1, 8, '321', 5, 'GWE');

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
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`title`, `path`, `uploadDate`, `courseId`, `weekNr`, `assignmentId`, `type`) VALUES
('GWE0', '../Attachments/GWE01655228882.png', '2022-06-14', 8, 1, 5, 'png'),
('HW10', '../Attachments/HW101655227695.png', '2022-06-14', 7, 1, 4, 'png'),
('HW11', '../Attachments/HW111655227695.png', '2022-06-14', 7, 1, 4, 'png'),
('HW12', '../Attachments/HW121655227695.png', '2022-06-14', 7, 1, 4, 'png'),
('Somthing0', '../Attachments/Somthing01655189545.pdf', '2022-06-14', 7, 1, NULL, 'pdf'),
('Somthing1', '../Attachments/Somthing11655189545.pdf', '2022-06-14', 7, 1, NULL, 'pdf'),
('Somthing2', '../Attachments/Somthing21655189545.sql', '2022-06-14', 7, 1, NULL, 'sql'),
('Somthing3', '../Attachments/Somthing31655189545.pdf', '2022-06-14', 7, 1, NULL, 'pdf'),
('Somthing4', '../Attachments/Somthing41655189545.sql', '2022-06-14', 7, 1, NULL, 'sql');

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
  `endDate` date NOT NULL,
  `verified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `professorEmail`, `startDate`, `endDate`, `verified`) VALUES
(7, 'Parallel Programming', 'This is a course given at Epoka University.This is a course given at Epoka University.This is a course given at Epoka University.This is a course given at Epoka University.This is a course given at Epoka University.This is a course given at Epoka University.', 'a@gmail.com', '2022-06-09', '2022-06-16', NULL),
(8, 'SWE', 'SWEWSSEWEWSEWE', 'a@gmail.com', '2022-05-31', '2022-06-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `qid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question`, `answer`, `qid`, `email`, `id`) VALUES
('Hi?', '312', 0, 'xbano@gmail.com', 7),
('What?\r\n', NULL, 1, 'e@gmail.com', 7),
('What?\r\n', NULL, 2, 'e@gmail.com', 7);

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
('0', 'eponari19@epoka.edu.al'),
('7', 'e@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `email` text NOT NULL,
  `assignmentId` int(11) NOT NULL,
  `handledDate` date NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`email`, `assignmentId`, `handledDate`, `grade`, `path`) VALUES
('e@gmail.com', 4, '2022-06-15', 32, '../Attachments/41655326320.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `fullName` text NOT NULL,
  `password` text NOT NULL,
  `type` int(11) NOT NULL,
  `verified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `fullName`, `password`, `type`, `verified`) VALUES
('3213@gmail.com', 'Edison Ponari', '$2y$10$faM2T2Z0pL3IlRJnCiJb2eQGoZRoNaZLRQUz6AFIjDUmK6YkiqYwC', 2, NULL),
('3213@hotmail.com', 'Edison Ponari', '$2y$10$GiqR4Hjo625mPRwM8/ZWrObr/NDLv49QtiuabDniCnAlGMnXnh8ey', 1, NULL),
('a@gmail.com', 'Ari Gjerazi', '$2y$10$f2A6afnnLzGLc94WQxEEJOOaEGxXNY0BA9QhvjUry9fzkOMWjhqoS', 2, NULL),
('aaa@gmail.com', 'Ari', '$2y$10$QW.YGi72KBbqNVUxPMOVBOzJa7p7b6TVCHcxQmpWxV0lCdHwDHChu', 2, NULL),
('admin@gmail.com', 'admin', '$2y$10$UrVq5WG3ww4cVmSSm7DwK.F9ow.bCgi7uMHrWBOvbsWQveNPzy0nS', 3, NULL),
('e@gmail.com', 'edi', '$2y$10$4loqTr9f.OF.HXX.sNwDJe13hoOl40J9GaRPXut4kmWiHy9iTFcqu', 1, NULL),
('edi.edison01@hotmail.com', 'Edison Ponari', '$2y$10$TDP55lWF2bT5DmMlWDdHZenUFj8impToLzsOj7o5ZioNGliDS8You', 1, NULL),
('edisonedisonedison@hotmail.com', 'zhila', '$2y$10$r9K79c9TBodkYzYvJwWpEeK7GYCXe8GlPpgioKANxUCRnpopSM0bu', 1, NULL),
('eponari19@epoka.edu.al', 'Edison Ponari', '$2y$10$0WD4jMnd4fihwrb0e9ZAWeUyTPuy3ylaBM4deZwYIjXOyfn9ZwY6.', 1, NULL),
('salonarber@gmail.com', 'Edison Ponari', '$2y$10$ftulRYvf1gNwfiZZF0I3cOMvtoFKLe6TFLh/RnZbkxG31Wa/Trz9m', 1, NULL),
('xbano@gmail.com', 'Klodiana', '$2y$10$NMA.CgoYtVawvP9A3/E0XeXVeh1Z.uV2psnK/lRoqlFF9LDSOAgta', 1, NULL);

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

INSERT INTO `week` (`title`, `weekNr`, `courseId`) VALUES
('', 1, 7),
('', 1, 8),
('', 2, 7),
('', 2, 8),
('', 3, 7),
('', 3, 8),
('', 4, 7),
('', 4, 8),
('', 5, 7),
('', 5, 8),
('', 6, 7),
('', 7, 7),
('', 8, 7),
('', 9, 7),
('', 10, 7),
('', 11, 7),
('', 12, 7),
('', 13, 7);

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
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachment`
--
ALTER TABLE `attachment`
  ADD CONSTRAINT `attachment_ibfk_2` FOREIGN KEY (`weekNr`,`courseId`) REFERENCES `week` (`weekNr`, `courseId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
