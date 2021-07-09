-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 11:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courselist`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `t_no` int(11) NOT NULL,
  `t_title` text NOT NULL,
  `t_desp` text NOT NULL,
  PRIMARY KEY (`t_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`t_no`, `t_title`, `t_desp`) VALUES
(1, 'Name ', 'Shravani'),
(2, 'Mobile No.', '8459547168'),
(3, 'Address', 'Pune, MH ');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `c_no` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_details` text NOT NULL,
  `c_duration` text NOT NULL,
  `c_eligibility` text NOT NULL,
  `c_fee` int(11) NOT NULL,
  PRIMARY KEY (`c_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_no`, `c_name`, `c_details`, `c_duration`, `c_eligibility`, `c_fee`) VALUES
(1, 'PHP', 'The PHP training course comprises of PHP variables, Datatypes, Strings, Operators, Constants, Loops, Arrays, Database connectivity, etc.', '20 Weeks', 'There is no such criteria to learn a programming language. Any 10+2, graduate candidate can enroll. ', 2000),
(2, 'JAVA', 'Java training course comprises of Basics of java Programming, Object Oriented Programming, Inheritance, Exceptional Handling, Wrapper Classes, etc.', '30 Weeks', 'There is no specific criteria for this course. Any 10+2, graduate is eligible. Candidates having knowledge of any C/C++ programming is an added benefit.', 3000),
(3, 'PYTHON', 'Python is one of the easy programming language. Python is widely used in AI, Machine Learning, Gaming, etc. This course comprises of Basics pf Python, Dictionaries and sets, Object Oriented Programming, etc. ', '10 Weeks', 'No eligibility. Candidate having knowledge of any programming language is an added advantage.', 2500),
(4, 'SCALA', 'Scala is high-level functional and object oriented language. This training comprises of introduction, functions, classes and objects, Strings, Lists, Maps, etc. Scala runs on JVM. ', '15 Weeks', 'No eligibility criteria. Knowledge of Java programming is an added advantage.', 1500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
