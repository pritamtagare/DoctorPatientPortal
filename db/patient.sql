-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2017 at 05:52 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `p10001`
--

CREATE TABLE IF NOT EXISTS `p10001` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `p10001`
--

INSERT INTO `p10001` (`id`, `d_name`, `rdate`, `reason`, `path`) VALUES
(3, 'yogesh', '18-jan-2017', 'Fever', 'uploads/p10001/1485506968.jpg'),
(10, 'Dr.vishal', '27-jan-17', 'maleria', 'uploads/p10001/1485746867.jpg'),
(11, 'Dr.pritam tagre', '2017-02-02', 'For pain in legs', 'uploads/p10001/1485936661.jpg'),
(12, 'Dr. trupti', '2017-02-09', 'For fever', 'uploads/p10001/1485919138.jpg'),
(13, 'Dr.', '2017-02-26', 'For', 'uploads/p10001/1486578764.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p10004`
--

CREATE TABLE IF NOT EXISTS `p10004` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `p10004`
--


-- --------------------------------------------------------

--
-- Table structure for table `p10008`
--

CREATE TABLE IF NOT EXISTS `p10008` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `p10008`
--

INSERT INTO `p10008` (`id`, `d_name`, `rdate`, `reason`, `path`) VALUES
(1, 'Dr. yogesh jadhav', '2017-02-07', 'For fever', 'uploads/p10008/1486519261.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p10009`
--

CREATE TABLE IF NOT EXISTS `p10009` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `p10009`
--


-- --------------------------------------------------------

--
-- Table structure for table `p10010`
--

CREATE TABLE IF NOT EXISTS `p10010` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `p10010`
--

INSERT INTO `p10010` (`id`, `d_name`, `rdate`, `reason`, `path`) VALUES
(1, 'Dr.BOb', '2017-02-14', 'For apendiX', 'uploads/p10010/1487101834.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p10011`
--

CREATE TABLE IF NOT EXISTS `p10011` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `p10011`
--

INSERT INTO `p10011` (`id`, `d_name`, `rdate`, `reason`, `path`) VALUES
(2, 'Dr.Mahesh', '2017-02-15', 'For headache', 'uploads/p10011/1487106998.png');

-- --------------------------------------------------------

--
-- Table structure for table `p10012`
--

CREATE TABLE IF NOT EXISTS `p10012` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `p10012`
--

