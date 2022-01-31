-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2022 at 10:05 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `commentID` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `likeID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `likeID` int(11) NOT NULL,
  `like` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  PRIMARY KEY (`postid`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `post`, `date`, `userID`, `commentID`) VALUES
(1, 'teee', 'asdasdsadasdsadsa', '01-31-2022', 53, 1),
(2, 'tesssee', 'asdassssdsadasdsadsa', '65.225806451612903225', 59, 2),
(3, '', '', '65.225806451612903225', 53, 2),
(4, '', '', '1990', 53, 2),
(5, '', '', '1990', 53, 2),
(6, '', '', '1990', 58, 2),
(7, '', '', '1990', 58, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `statusID` int(11) NOT NULL,
  `new` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `inactive` varchar(255) NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `user` varchar(11) NOT NULL,
  `admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_status` varchar(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `role`, `username`, `password`, `email`, `user_status`) VALUES
(50, 'user', 'user', 'user', 'user@gmail.com', ''),
(53, 'user', 'user', 'user', 'user@gmail.com', ''),
(58, 'user', 'thrys', 'thrys', 'thrys@gmail.com', 'active'),
(59, 'admin', 'thrys', '', 'thrys@gmail.com', 'active'),
(60, 'user', 'user1', 'user1', 'user1@gmail.com', 'active'),
(62, 'user', 'znrick22', 'znrick22', 'znrick22@gmail.com', 'active'),
(63, 'user', 'zen', 'zen', 'zen@gmail.com', 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
