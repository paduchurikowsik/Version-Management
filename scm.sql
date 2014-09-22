-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2014 at 12:55 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scm`
--

-- --------------------------------------------------------

--
-- Table structure for table `modrelation`
--

CREATE TABLE IF NOT EXISTS `modrelation` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `from` text NOT NULL,
  `to` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `modname` text NOT NULL,
  `lver` varchar(6) NOT NULL,
  `pver` varchar(6) NOT NULL,
  `ldata` text NOT NULL,
  `pdata` text NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mid`, `pid`, `modname`, `lver`, `pver`, `ldata`, `pdata`) VALUES
(23, 21, 'qwerty', '1.1', '1.0', 'done edit again', 'done edit'),
(24, 22, 'ABC', '1.1', '1.0', 'abcdefgh', 'FGFAFD'),
(25, 22, 'XYZ', '2.0', '1.0', 'sad', 'SADFDSFDFD'),
(26, 23, 'mo1', '1.1', '1.0', 'lkjkljasdasdasd', 'lkjklj'),
(27, 23, 'mo2', '1.0', '1.0', 'hkjhkjlhjkh', 'hkjhkjlhjkh'),
(28, 23, 'mo3', '1.0', '1.0', 'jkhjkjkjlljjkh', 'jkhjkjkjlljjkh'),
(29, 24, '1', '1.0', '1.0', 'nmc bv', 'nmc bv'),
(30, 24, '2', '1.0', '1.0', 'jhgh', 'jhgh'),
(31, 27, 'a', '1.1', '1.0', 'kkkkkkkkkk', 'asdf'),
(32, 27, 'b', '1.0', '1.0', 'asdff', 'asdff');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `pver` varchar(6) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `pname`, `pver`) VALUES
(21, 'kowsik', '1.0'),
(22, 'SCM', '1.0'),
(23, 'projec3', '1.0'),
(24, 'nb', '1.0'),
(25, 'asd', '1.0'),
(26, 'kkkkk', '1.0'),
(27, 'kkkkkkkkkk', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
