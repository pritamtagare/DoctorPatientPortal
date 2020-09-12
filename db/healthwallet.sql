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
-- Database: `healthwallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `mobileno`, `message`) VALUES
('yogesh jadhav', 'yogeshjadhav@gmail.com', '9028924770', 'nothing just testing');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qulification` varchar(100) NOT NULL,
  `spaciality` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70017 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `qulification`, `spaciality`, `gender`, `address`, `pincode`, `email`, `mobile`, `dob`, `password`) VALUES
(70005, 'Yogesh jadhav', 'mbbs', 'sergion', 'male', 'Aurangabad', '431005', 'yogeshjadhav8777@gmail.com', '9028924770', '02/01/96', '1177'),
(70015, 'pritam tagare', 'mbbs', 'homopathy', 'male', 'aurangabad', '431009', 'pritamtagare@gmail.com', '9823521319', '1996-12-18', 'allu'),
(70016, 'mahesh mudhale', 'mbbs', 'surgeon', 'male', 'buldana', '431005', 'mahesh@gmail.com', '7798308560', '1996-01-20', '1996');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10013 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`, `gender`, `email`, `mobile`, `dob`, `password`) VALUES
(10001, 'Yogesh jadhav', 'Beed', 'male', 'yogeshjadhav8777@gmail.com', '7378748235', '02/01/96', '1177'),
(10004, 'pritam tagare', 'aurangabad', 'male', 'pritam@gmail.com', '9856465455', '1996-12-18', 'allu'),
(10011, 'Pradip Bobade', 'Banglore', 'male', 'pradipbobade01@gmail.com', '9623409402', '1996-08-24', '4046'),
(10008, 'Vaibhav Shewale', 'Beed', 'male', 'vaibhavshewale@gmail.com', '8390080035', '1996-03-15', '1234'),
(10009, 'shubham Thete', 'jalna', 'male', 'shubhamthethe@gmail.com', '9765981405', '1996-06-01', '7777'),
(10010, 'viraj bobade', 'tirthpuri', 'male', 'virajbobade1996@gmail.com', '9604542458', '31/10/1996', '5409'),
(10012, 'vaibhav', 'aurangabad', 'male', 'vaibhavshewale729@gmail.com', '9403103326', '1997-03-14', '5514');

-- --------------------------------------------------------

--
-- Table structure for table `quries`
--

CREATE TABLE IF NOT EXISTS `quries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quetion` varchar(1000) NOT NULL,
  `did` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `ans` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `quries`
--

INSERT INTO `quries` (`id`, `pid`, `pname`, `quetion`, `did`, `dname`, `ans`) VALUES
(2, '10008', 'Vaibhav Shewale', 'what to do for headache', '70005', '', 'just cheak youe eyes'),
(6, '10001', 'Yogesh jadhav', 'please give temporory solution for pain in teeth', '70005', 'Yogesh jadhav', 'please take salt and lemon keep on your teeth you will get relief for sometime'),
(7, '10011', 'Pradip Bobade', 'what are the precautions for headache?', '70016', 'mahesh mudhale', 'take the proper rest & avoid use of smartphone.');
