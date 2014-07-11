-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2013 at 01:47 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it_infra`
--
CREATE DATABASE IF NOT EXISTS `it_infra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `it_infra`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `Log_id` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Log_id`, `Password`) VALUES
('CS001', 'csone'),
('IS002', 'istwo');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Dept_name` char(30) NOT NULL,
  `Faculty_strength` int(3) NOT NULL,
  PRIMARY KEY (`Dept_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_name`, `Faculty_strength`) VALUES
('Computer Science', 5),
('Electronics & Communications', 5),
('Information Science', 5);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Staff_ID` varchar(10) NOT NULL,
  `Name` char(20) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(2) NOT NULL,
  `Designation` char(20) NOT NULL,
  `Depart_name` char(40) NOT NULL,
  PRIMARY KEY (`Staff_ID`),
  KEY `Depart_name` (`Depart_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Staff_ID`, `Name`, `DOB`, `Age`, `Designation`, `Depart_name`) VALUES
('CS001', 'Mohammed Ehab', '1959-10-04', 54, 'Professor', 'Computer Science'),
('CS002', 'Gourav Zutshi', '1965-11-04', 48, 'Associate Professor', 'Computer Science'),
('CS003', 'Manoj Kumar', '1970-11-11', 43, 'Assistant Professor', 'Computer Science'),
('CS004', 'Risiraj Parekh', '1973-04-06', 40, 'Lecturer', 'Computer Science'),
('CS005', 'Shravani Rao', '1983-06-01', 30, 'Instructor', 'Computer Science'),
('IS001', 'Kamran Qureshi', '1960-10-13', 53, 'Professor', 'Information Science'),
('IS002', 'Riyaz Ibrahim', '1963-05-05', 50, 'Associate Professor', 'Information Science'),
('IS003', 'Shashank Gupta', '1970-12-12', 43, 'Assistant Professor', 'Information Science'),
('IS004', 'Abhishek Barman', '1975-08-05', 38, 'Lecturer', 'Information Science'),
('IS005', 'Adarsh Arora', '1980-05-03', 33, 'Instructor', 'Information Science');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_ID` varchar(5) NOT NULL,
  `Q1` varchar(20) NOT NULL,
  `Q2` varchar(20) NOT NULL,
  `Q3` varchar(20) NOT NULL,
  `Q4` varchar(20) NOT NULL,
  `Q5` varchar(20) NOT NULL,
  `Q6` varchar(20) NOT NULL,
  `Q7` varchar(20) NOT NULL,
  `Q8` varchar(20) NOT NULL,
  `Q9` varchar(20) NOT NULL,
  `Q10` varchar(20) NOT NULL,
  PRIMARY KEY (`Feedback_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`) VALUES
('CS002', 'Good', 'Average', 'Average', 'Good', 'Good', 'Good', 'Below Average', 'Not applicable', 'Below Average', 'Below Average'),
('CS003', 'Average', 'Below Average', 'Not applicable', 'Average', 'Average', 'Good', 'Good', 'Good', 'Not applicable', 'Below Average');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE IF NOT EXISTS `infrastructure` (
  `Model_no` varchar(10) NOT NULL,
  `Name` char(20) NOT NULL,
  `Deptt_name` char(20) NOT NULL,
  `Date_of_purchase` date NOT NULL,
  `Current_status` char(30) NOT NULL,
  PRIMARY KEY (`Model_no`),
  KEY `Deptt_name` (`Deptt_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`Model_no`, `Name`, `Deptt_name`, `Date_of_purchase`, `Current_status`) VALUES
('RVCECS1198', 'Cisco 8400', 'Computer Science', '2011-03-22', 'In AMC'),
('RVCECS1213', 'HP Laserjet Printer', 'Computer Science', '2012-03-15', 'In warranty'),
('RVCECS4204', 'Seagate HDD', 'Computer Science', '2010-07-21', 'In AMC'),
('RVCECS5446', 'LG TFT 1129', 'Computer Science', '2012-08-14', 'In AMC'),
('RVCECS6012', 'Netgear NAS Storage', 'Computer Science', '2013-03-07', 'In warranty'),
('RVCECSE009', 'Samsung TFT 15"', 'Information Science', '2013-09-10', 'In warranty');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `Login_ID` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Login_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Login_ID`, `Password`) VALUES
('CS002', 'cstwo'),
('CS003', 'csthree'),
('CS004', 'csfour'),
('CS005', 'csfive'),
('IS001', 'isone'),
('IS003', 'isthree3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`Log_id`) REFERENCES `faculty` (`Staff_ID`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`Depart_name`) REFERENCES `department` (`Dept_name`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Feedback_ID`) REFERENCES `faculty` (`Staff_ID`);

--
-- Constraints for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD CONSTRAINT `infrastructure_ibfk_1` FOREIGN KEY (`Deptt_name`) REFERENCES `department` (`Dept_name`);

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`Login_ID`) REFERENCES `faculty` (`Staff_ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
