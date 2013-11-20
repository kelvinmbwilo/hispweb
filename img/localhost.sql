-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2013 at 04:36 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hispweb`
--
CREATE DATABASE `hispweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `hispweb`;

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

CREATE TABLE IF NOT EXISTS `news_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discr` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `added_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`id`, `title`, `discr`, `image`, `added_time`) VALUES
(2, 'DHIS 2 Academy East Africa 2012', '<p>The Health Information Systems Programme (HISP) East Africa along with its partners &ndash; The National Health Information Systems Project (AfyaInfo Kenya) and the University of Oslo, are pleased to announce the &ldquo;DHIS 2 Academy East Africa 2012&rdquo; to be held at the Eden Beach Resort &amp; Spa, Mombasa, June 11-19 2012.</p>\r\n', '_4492152906.gif', '2013-11-11'),
(5, 'DHIS 2 Mobile workshop 2012', '<p>Mr Ismail Koleleni attended DHIS2 mobile workshop held in Ho Chi Minh City, Vietnam between 22nd August 2012 and 31st August 2012.</p>\r\n', '', '2013-11-18'),
(6, 'DHIS 2 Academy East Africa 2012', '<p>Mr Wilfred Senyoni and Mr John Mukulu will be attending DHIS2 Implementers training and HISP East Africa Conference starting on June 11 to June 19, 2012 at Eden Beach Resort &amp; Spa, Mombasa, Kenya</p>\r\n', '', '2013-11-18'),
(7, 'IST-Africa Conference and Exhibition', '<p>HISP team in Tanzania participated in IST- Africa Conference and Exhibition which held in Kunduchi beach hotel on 9-11 May 2012 at Dar-es-salaam, Tanzania. The team represented by John Mukulu, Ismail Koleleni, Jimmy Mbelwa and Dr Honest Kimaro.</p>\r\n', '', '2013-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(555) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `image`) VALUES
(16, 'gfdgfdsg', '_883466918.gif');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upload_date` date NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `title`, `file`, `upload_date`, `type`, `url`) VALUES
(3, 'DHIS (HMIS) Project-Progress Report 2009 and Pans for 2010-2', '', '2013-11-18', 'Reports', ''),
(4, 'Human Resource for Health Information System Report Feb 2010', '', '2013-11-18', 'Reports', ''),
(5, 'Training Report_DHIS Training_Districts Data Clerks and IHI.', '', '2013-11-18', 'Reports', ''),
(6, 'Tanzania HMIS-DHIS2 Project-Major Results and Plan for 2013.pdf', '', '2013-11-18', 'Reports', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `other_title` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `fname`, `mname`, `lname`, `project_title`, `other_title`, `image`, `titl`) VALUES
(3, 'Mercy', '', 'Mbise', 'Head Of Project', '<p>dasjfa ajdflas aifl kiajfc ajdfslsa</p>\r\n', '_8418165016.png', 'Dr'),
(4, 'Jimmy', 'T', 'Mbelwa', 'Webmaster/Project Administrator', '<p>dafgdja jahfidsa mcnadi dansic jadhsic jdaihsico</p>\r\n', '_7681842288.png', 'Mr'),
(5, 'Methew', '', 'Mndeme', 'Datasets revision group', '<p>dafas uahsdkf kaiods aoshifnnasd cihsad fcfiosad</p>\r\n', '_40877019.png', 'Mr'),
(6, 'Kennedy', 'F', 'Mwakisole', 'Member', '<p>afj ajhfidaks fjahs djasihfdsa jhsa sdjabfiisad fjas</p>\r\n', '_3463236959.png', 'Mr'),
(7, 'Leornad', '', 'Peter', 'Programmer', '<p>jdhasklf &nbsp;ajsjidfklas mhfidsalc manshficldsamcsa</p>\r\n', '_3276888262.png', 'Mr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
