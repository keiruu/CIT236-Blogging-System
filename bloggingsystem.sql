-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2022 at 12:30 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `likeID` int(11) NOT NULL,
  `like` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `postid` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  `likeID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `statusID` int(11) NOT NULL,
  `new` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `inactive` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `user` varchar(11) NOT NULL,
  `admin` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `user_fname` text NOT NULL,
  `user_lname` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_contact` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` text NOT NULL,
  `user_status` varchar(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `role`, `user_fname`, `user_lname`, `username`, `password`, `user_contact`, `email`, `user_type`, `user_status`) VALUES
(5, 'user', '', '', 'user1', 'user', 0, 'user@gmail.com', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
