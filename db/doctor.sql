-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2017 at 05:51 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `s70005`
--

CREATE TABLE IF NOT EXISTS `s70005` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pid` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `s70005`
--

INSERT INTO `s70005` (`id`, `pid`, `p_name`, `mobile`) VALUES
(4, 10001, 'Yogesh jadhav', '7378748235');

-- --------------------------------------------------------

--
-- Table structure for table `s70015`
--

CREATE TABLE IF NOT EXISTS `s70015` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pid` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `s70015`
--


-- --------------------------------------------------------

--
-- Table structure for table `s70016`
--

CREATE TABLE IF NOT EXISTS `s70016` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pid` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `s70016`
--

INSERT INTO `s70016` (`id`, `pid`, `p_name`, `mobile`) VALUES
(1, 10010, 'viraj bobade', '9604542458');
