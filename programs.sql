-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 08:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UNIVERSITY_PROGRAMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `ProgramName` varchar(100) NOT NULL,
  `CutOffPoints` int(11) NOT NULL,
  `OfferedAt` varchar(100) NOT NULL,
  `FieldOfStudy` varchar(45) DEFAULT NULL,
  `Requirements` varchar(45) DEFAULT NULL,
  `Duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`ProgramName`, `CutOffPoints`, `OfferedAt`, `FieldOfStudy`, `Requirements`, `Duration`) VALUES
('Agricultural and Biosystems Engineering (ABE)', 36, 'BUAN', 'agriculture', 'english=c\'science=c', 4),
('ASSOCIATION OF ACCOUNTING TECHNICIAN ', 36, 'IDM', 'business', 'english=c\'science=c', 2),
('B (BUS)HONS FINANCE AND BANKING', 36, 'BAC', 'business', 'english=c\'science=c', 4),
('B (DES) INDUSTRIAL DESIGN', 36, 'BAC', 'engineering', 'english=c\'science=c', 4),
('B (DES) PROFESSIONAL DESIGN', 36, 'BAC', 'engineering', 'english=c\'science=c', 4),
('B BUS (HONS) ENTREPRENEURSHIP', 36, 'BAC', 'business', 'english=c\'science=c', 4),
('BA (Hons) ACCOUNTANCY ', 36, 'IDM', 'business', 'english=c\'science=c', 4),
('BA (HONS) EVENT MANAGEMENT', 36, 'BAC', 'business', 'english=c\'science=c', 4),
('BA(HONS) TOURISM MANGEMENT', 36, 'BAC', 'business', 'english=c\'science=c', 4),
('Bachelor of Accountancy', 36, 'University of Botswana', 'business', 'english=c\'science=c', 4),
('Bachelor of Architecture', 34, 'University of Botswana', 'engineering', 'english=c\'science=c', 4),
('Bachelor of Arts (Humanities)', 34, 'University of Botswana', 'humanities', 'english=c\'science=c', 4),
('Bachelor of Business Administration (Management)', 36, 'University of Botswana', 'business', 'english=c\'science=c', 4),
('Bachelor of Education (Business)', 34, 'University of Botswana', 'business', 'english=c\'science=c', 4),
('BACHELOR OF EDUCATION -COUNSELLING', 36, 'BAC', 'education', 'english=c\'science=c', 4),
('Bachelor of Electrical & Electronics Engineering', 36, 'New Era College', 'engineering', 'english=c\'science=c', 4),
('Bachelor of Finance', 42, 'University of Botswana', 'business', 'english=c\'science=c', 4),
('Bachelor of Laws', 43, 'University of Botswana', 'social science', 'english=c\'science=c', 4),
('BACHELOR OF MEDICINE', 36, 'BAC', 'health science', 'english=c\'science=c', 4),
('BACHELOR OF MUSIC EDUCATION', 36, 'BAC', 'education', 'english=c\'science=c', 4),
('Bachelor of Nursing Science (Generic)', 34, 'University of Botswana', 'health science', 'english=c\'science=c', 4),
('BACHELOR OF PHARMACY', 36, 'BAC', 'health science', 'english=c\'science=c', 4),
('Bachelor of Portuguese Language and Lusophone Studies', 34, 'University of Botswana', 'humanities', 'english=c\'science=c', 4),
('Bachelor of Primary Education', 34, 'University of Botswana', 'education', 'english=c\'science=c', 4),
('BACHELOR OF PSYCHOLOGY', 36, 'BAC', 'health science', 'english=c\'science=c', 4),
('BACHELOR OF PUBLIC FINANCE AND ACCOUNTING', 36, 'IDM', 'business', 'english=c\'science=c', 4),
('Bachelor of Real Estate', 42, 'University of Botswana', 'engineering', 'english=c\'science=c', 4),
('Bachelor of Science (Urban and Regional Planning)', 39, 'University of Botswana', 'engineering', 'english=c\'science=c', 4),
('BACHELOR OF SCIENCE IN AGRICULTURE (BScAG)', 36, 'BUAN', 'agriculture', 'english=c\'science=c', 4),
('Bachelor of Science in Applied Geophysics', 34, 'University of Botswana', 'business', 'english=c\'science=c', 4),
('BACHELOR OF SCIENCE IN CROP SCIENCE- Agronomy (BScCS-Agro)', 36, 'BUAN', 'agriculture', 'english=c\'science=c', 4),
('BACHELOR OF SCIENCE IN CROP SCIENCE-Horticulture (BScCS-Hort)', 36, 'BUAN', 'agriculture', 'english=c\'science=c', 4),
('BACHELOR OF SCIENCE IN FOOD SCIENCE AND TECHNOLOGY (BScFST', 36, 'BUAN', 'agriculture', 'english=c\'science=c', 4),
('Bachelor of Social Work', 36, 'University of Botswana', 'social science', 'english=c\'science=c', 4),
('Bachelor of Telecommunications Engineering', 36, 'New Era College', 'engineering', 'english=c\'science=c', 4),
('BEng Chemical Engineering', 38, 'BIUST', 'engineering', 'english=c\'science=c', 4),
('BEng Mechatronics & Industrial Instrumentation Engineering', 38, 'BIUST', 'engineering', 'english=c\'science=c', 4),
('BSc (Hons) in Accounting', 37, 'Botho University', 'business', 'english=c\'science=c', 4),
('BSc (Hons) IN BUSINESS COMPUTING AND INFORMATION SYSTEMS', 36, 'IDM', 'computing', 'english=c\'science=c', 4),
('BSc (Hons) in Business Management', 36, 'Botho University', 'business', 'english=c\'science=c', 4),
('BSc (Hons) in Computing', 36, 'Botho University', 'computing', 'english=c\'science=c', 4),
('BSc (Hons) in Finance', 38, 'Botho University', 'business', 'english=c\'science=c', 4),
('BSc (Hons) in Network Security and Computer Forensics', 36, 'Botho University', 'computing', 'english=c\'science=c', 4),
('BSC AGRICULTURAL ECONOMICS', 36, 'BAC', 'business', 'english=c\'science=c', 4),
('BSc Biology & Biotechnology', 38, 'BIUST', 'science', 'english=c\'science=c', 4),
('BSc Geology', 38, 'BIUST', 'science', 'english=c\'science=c', 4),
('INTERNATIONAL DIPLOMA IN COMPUTING', 36, 'IDM', 'computing', 'english=c\'science=c', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`ProgramName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
