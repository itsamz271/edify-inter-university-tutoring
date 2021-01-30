-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 03:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edifydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(10) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseCode`, `CourseDescription`) VALUES
(1, 'MATH101', 'MATH'),
(2, 'PHY205', 'introduction to physics'),
(3, 'CS340', 'Database'),
(4, 'SE371', 'web '),
(5, 'SE322', 'software design'),
(6, 'CYS401', 'cyber security'),
(7, 'CS465', 'Machine learning ');

-- --------------------------------------------------------

--
-- Table structure for table `coursestaught`
--

CREATE TABLE `coursestaught` (
  `CourseCode` varchar(10) NOT NULL,
  `TutID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursestaught`
--

INSERT INTO `coursestaught` (`CourseCode`, `TutID`) VALUES
('CS340', 10),
('CS465', 11),
('MATH101', 1),
('MATH101', 4),
('MATH101', 6),
('MATH101', 7),
('PHY205', 5),
('PHY205', 8),
('SE322', 9);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `SessionID` int(10) NOT NULL,
  `SessionTime` time NOT NULL,
  `SessionDay` date NOT NULL,
  `SessionPrice` varchar(25) NOT NULL,
  `sessionCourse` varchar(225) NOT NULL,
  `TutorID` int(10) NOT NULL,
  `TuteeID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`SessionID`, `SessionTime`, `SessionDay`, `SessionPrice`, `sessionCourse`, `TutorID`, `TuteeID`) VALUES
(1, '12:30:00', '2020-04-09', '15', 'MATH101', 4, 1),
(2, '13:30:00', '2020-04-15', '15', 'PHY205', 7, 1),
(3, '00:00:14', '2020-04-15', '30', 'CS340', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tutee`
--

CREATE TABLE `tutee` (
  `TuteeID` int(10) NOT NULL,
  `TuteeFirstName` varchar(25) NOT NULL,
  `TuteeLastName` varchar(25) NOT NULL,
  `TuteeEmail` varchar(25) NOT NULL,
  `TuteePassword` varchar(20) NOT NULL,
  `TuteePhoneNumber` int(20) NOT NULL,
  `TuteeDateOfBirth` date NOT NULL,
  `TimeZone` varchar(30) NOT NULL,
  `TuteeGender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutee`
--

INSERT INTO `tutee` (`TuteeID`, `TuteeFirstName`, `TuteeLastName`, `TuteeEmail`, `TuteePassword`, `TuteePhoneNumber`, `TuteeDateOfBirth`, `TimeZone`, `TuteeGender`) VALUES
(1, 'Molham', 'Alkayal', '216114987@psu.edu.sa', '12345dd', 552889643, '2020-04-12', 'Riyadh', 'Male'),
(2, 'rrtrytytry', 'utyuytutu', '56674345@psu.edu.sa', '46564567', 2147483647, '2020-03-29', '-6', '1'),
(3, 'hjukiuliulu', 'fddddddddddddd', 'ghfghfng@psu.edu.sa', 'hfghfht657768768', 2147483647, '2019-12-30', '-9', '1'),
(4, 'Molham ', 'Alkayal', 'ghfghfng@psu.edu.sa', '949489f52719cd1ef980', 877678876, '2019-02-05', '(GMT-09:00) Alaska', 'Female'),
(5, 'Abdulaziz ', 'AlBadawi', 'Bka098@gmail.com', 'd3857597c35e967e681e', 555690507, '2020-04-21', '-5', 'Male'),
(6, 'Abdulaziz ', 'AlBadawi', 'Bka098@gmail.com', 'ad5b2f07d900ccc7f2ef', 987654321, '2020-04-09', '-3.5', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `TutorID` int(10) NOT NULL,
  `TutorFirstNmae` varchar(25) NOT NULL,
  `TutorLastName` varchar(25) NOT NULL,
  `TutorEmail` varchar(25) NOT NULL,
  `TutorPassword` varchar(20) NOT NULL,
  `TutorPhoneNumber` varchar(20) NOT NULL,
  `TutorDateOfBirth` date NOT NULL,
  `TutorDegree` varchar(30) NOT NULL,
  `TutorProfession` varchar(60) NOT NULL,
  `Timezone` varchar(20) NOT NULL,
  `TutorGender` varchar(20) NOT NULL,
  `TutorQ1` varchar(500) NOT NULL,
  `TutorQ2` varchar(500) NOT NULL,
  `TutorQ3` varchar(500) NOT NULL,
  `TutorQ4` varchar(500) NOT NULL,
  `Course1` varchar(50) NOT NULL,
  `Course2` varchar(50) DEFAULT NULL,
  `Course3` varchar(50) DEFAULT NULL,
  `imgProfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`TutorID`, `TutorFirstNmae`, `TutorLastName`, `TutorEmail`, `TutorPassword`, `TutorPhoneNumber`, `TutorDateOfBirth`, `TutorDegree`, `TutorProfession`, `Timezone`, `TutorGender`, `TutorQ1`, `TutorQ2`, `TutorQ3`, `TutorQ4`, `Course1`, `Course2`, `Course3`, `imgProfile`) VALUES
(1, 'martin', 'luios', 'bka098@gmail.com', 'c6aac1d4b353fff9b45e', '0987654321', '2020-04-20', 'MIT', 'Math', '-7', 'Male', 'sdgsdgsd', 'sgdsgsd', 'sdgsf', '', '', NULL, NULL, ''),
(2, 'dsgsd', 'sdsdg', 'bka098@gmail.com', 'a115c83e1ef6ac11e6a3', '0987654321', '2020-04-22', 'dfaf', 'Math', '-4', 'Male', 'asfasfasfasfsa', 'asfasfadfadfafa', 'safasfsaasdsafsafasf', '', '', NULL, NULL, ''),
(4, 'martin', 'adasd', 'asdss@hhhhh.com', 'dd5e71bc3c763897a1ab', '984971487', '2020-04-24', 'dfaf', 'Math', '-12', 'Male', 'SDsdDadaD', 'DadaDaaSAsaSs', 'Ddsdasdafafafas', '', '', NULL, NULL, ''),
(5, 'ahmed', 'sfsafsafsa', 'bka098@gmail.com', '12ba87f9072634b76ad4', '0987654321', '2020-04-16', 'safasfass', 'asassfasf', '-4', 'Male', 'asffsfsa', 'fasfasfsasdsadd', 'fasfsasdsadsdasds', '', '', NULL, NULL, ''),
(6, 'Reema ', 'AlBadawi', 'bka098@gmail.com', '7eb6067541f0612e5c8f', '08976543211', '2020-04-13', 'MIT', 'Math', '-3.5', 'Female', 'fdv vzadadfadfadfa', 'sfdvsvsvsavasd', 'sv s vsvvsvasdf', '', '', NULL, NULL, ''),
(7, 'martin', 'luios', 'asdss@hhhhh.com', 'ca8bb6ddaeb6f0263ddd', '09865432', '2020-04-15', 'MIT', 'Math', '-8', 'Male', 'bsbdfzbzdbzfd', 'd5wt', 'dsrgsdagtwrtrwterete1r', '', '', NULL, NULL, ''),
(8, 'Reema ', 'AlBadawi', 'bka098@gmail.com', '71cafea688c34651f7b9', '874000001', '2030-04-10', 'MIT', 'physicss', '-12', 'Female', 'sfgthyju7ib68n79g86h0t,[p;-g9monbli86vku75yj', '5uiytj4hr6t536j7ik5o68yfhdg5eu7yhc4rtge3r546u7ji6rt5eg4rfe32', 'pl09kujyhtg56ji7ko8976', '', '', NULL, NULL, ''),
(9, 'jack', 'wilson', 'bka098@gmail.com', '172c37dd07dc12832dbc', '09807867856', '2020-04-07', 'MIT', 'SE', '-6', 'Male', 'erhhrththth', 'hrthrthrwthrththht', 'thrthrthrthrthrrggr', '', '', NULL, NULL, ''),
(10, 'willy ', 'wilson', 'bka098@gmail.com', '7c40ba1280cb4edd208c', '096532135', '2020-04-16', 'MIT', 'Database ', '-7', 'Male', 'weggahegrggfg', 'fgfhhgwdfafaf', 'sfdhherrertheh', '', '', NULL, NULL, ''),
(11, 'Luis ', 'smith', 'bka098@gmail.com', '74bc9bb959edfe7a80df', '075705081', '2020-04-30', 'MIT', 'Machine learning ', '-4', 'Female', 'dhadhahhhh', 'ddhdahfahgfsgsfga', 'fgdfagfsagsdsdfsf', '', '', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `coursestaught`
--
ALTER TABLE `coursestaught`
  ADD PRIMARY KEY (`CourseCode`,`TutID`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`SessionID`);

--
-- Indexes for table `tutee`
--
ALTER TABLE `tutee`
  ADD PRIMARY KEY (`TuteeID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`TutorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `SessionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutee`
--
ALTER TABLE `tutee`
  MODIFY `TuteeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `TutorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
