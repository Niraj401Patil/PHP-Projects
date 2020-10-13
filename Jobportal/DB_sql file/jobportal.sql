-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 01:53 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `jobportal`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `adminmaster`
-- 

CREATE TABLE `adminmaster` (
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(10) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `adminmaster`
-- 

INSERT INTO `adminmaster` VALUES ('sham', '1234');
INSERT INTO `adminmaster` VALUES ('ram', '1234');

-- --------------------------------------------------------

-- 
-- Table structure for table `employer`
-- 

CREATE TABLE `employer` (
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL,
  `email` varchar(20) collate latin1_general_ci NOT NULL,
  `company` varchar(30) collate latin1_general_ci NOT NULL,
  `address` varchar(30) collate latin1_general_ci NOT NULL,
  `contact` varchar(13) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `employer`
-- 

INSERT INTO `employer` VALUES ('ghansham', '1234', 'ghansham@gmail.com', 'Tata', '', '');
INSERT INTO `employer` VALUES ('ram', '123', 'ram@123.com', 'saba', '', '');
INSERT INTO `employer` VALUES ('ram', '123', 'ram@123.com', 'saba', '', '');
INSERT INTO `employer` VALUES ('ram', '123', 'ram@123.com', 'saba', '', '');
INSERT INTO `employer` VALUES ('ravi', '1234', 'ghanshamjadhav744@gm', 'tata', '', '');
INSERT INTO `employer` VALUES ('raam', 'esdfs', 'fdfd', 'dfd', '', '');
INSERT INTO `employer` VALUES ('sham', 'sham', 'sham@gmail.com', 'software', 'mumbai', '7066057100');
INSERT INTO `employer` VALUES ('jhagdjsad', 'adsad', 'd', 'i7482487', '', '');
INSERT INTO `employer` VALUES ('jhagdjsad', 'adsad', 'd', 'i7482487', '', '');
INSERT INTO `employer` VALUES ('ewrq', 'sdf', 'fd', 'sf', 'd', 'sf');

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `name` varchar(30) collate latin1_general_ci NOT NULL,
  `email` varchar(20) collate latin1_general_ci NOT NULL,
  `address` varchar(50) collate latin1_general_ci NOT NULL,
  `message` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `feedback`
-- 

INSERT INTO `feedback` VALUES ('ghansham', 'sham@gmail.com', 'mumbai', 'good');
INSERT INTO `feedback` VALUES ('', '', '', '');
INSERT INTO `feedback` VALUES ('kjjew', 'wer@ewd.qdf', 'fasf', 'dasfdasfd\r\ndsa\r\n\r\n');
INSERT INTO `feedback` VALUES ('ghansham', 'sham@gmail.com', 'mumbai', 'innovative\r\n');

-- --------------------------------------------------------

-- 
-- Table structure for table `jobapplied`
-- 

CREATE TABLE `jobapplied` (
  `name` varchar(30) collate latin1_general_ci NOT NULL,
  `contact` varchar(13) collate latin1_general_ci NOT NULL,
  `title` varchar(30) collate latin1_general_ci NOT NULL,
  `email` varchar(22) collate latin1_general_ci NOT NULL,
  `address` varchar(22) collate latin1_general_ci NOT NULL,
  `experience` varchar(6) collate latin1_general_ci NOT NULL,
  `skills` varchar(50) collate latin1_general_ci NOT NULL,
  `companey` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `jobapplied`
-- 

INSERT INTO `jobapplied` VALUES ('sham', '7066057100', 'software', 'sham@gmail.com', 'mumbai', '2', 'java', 'tata');

-- --------------------------------------------------------

-- 
-- Table structure for table `jobdetail`
-- 

CREATE TABLE `jobdetail` (
  `title` varchar(20) collate latin1_general_ci NOT NULL,
  `skill` varchar(50) collate latin1_general_ci NOT NULL,
  `discription` varchar(100) collate latin1_general_ci NOT NULL,
  `sallery` varchar(10) collate latin1_general_ci NOT NULL,
  `location` varchar(50) collate latin1_general_ci NOT NULL,
  `qualification` varchar(10) collate latin1_general_ci NOT NULL,
  `company` varchar(30) collate latin1_general_ci NOT NULL,
  `type` varchar(20) collate latin1_general_ci NOT NULL,
  `experience` varchar(3) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `jobdetail`
-- 

INSERT INTO `jobdetail` VALUES ('ttt', 'wrw', 'tttt', '88', 'wrrrw', 'wrw', 'rwrw', 'rwrw', '2');
INSERT INTO `jobdetail` VALUES ('web designer', 'java', 'the client side validation for web application', '7', 'mumbai', 'mca', 'tata', 'software', '2');
INSERT INTO `jobdetail` VALUES ('developer', 'asp.net', 'web developer in asp .net C# langauge', '5', 'thane', 'MCA', 'Intel', 'software', '7');
INSERT INTO `jobdetail` VALUES ('webapp', 'c#', 'c#developer', '4', 'mumbai', 'mca', 'tata', 'dekstop application', '2');

-- --------------------------------------------------------

-- 
-- Table structure for table `jobseeker`
-- 

CREATE TABLE `jobseeker` (
  `username` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `mobile` varchar(13) collate latin1_general_ci NOT NULL,
  `gender` varchar(10) collate latin1_general_ci NOT NULL,
  `BirthDate` varchar(30) collate latin1_general_ci NOT NULL,
  `location` varchar(22) collate latin1_general_ci NOT NULL,
  `experience` varchar(10) collate latin1_general_ci NOT NULL,
  `State` varchar(20) collate latin1_general_ci NOT NULL,
  `cv` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `jobseeker`
-- 

INSERT INTO `jobseeker` VALUES ('sham', '11111111', '11111111', 'ghanshamjadha', '201254', '0000-00-00 00:00:00', '', '', 'Maharashtra', '');
INSERT INTO `jobseeker` VALUES ('aaaa', 'aaaaaaaaa', 'aaaaaaaaa', 'aaa@aa.aa', '2425', '0000-00-00 00:00:00', '', '', 'Maharashtra', '');
INSERT INTO `jobseeker` VALUES ('dasdsad', 'ddddddddddddddddddd', 'fdfd@!dsd.fdfd', '3465424354654', 'Male', '3/February/1983', 'BANDRA', '4', 'MadhyaPradesh', '');
INSERT INTO `jobseeker` VALUES ('dasdsad', 'ddddddddddddddddddd', 'fdfd@!dsd.fdfd', '3465424354654', 'Male', '3/February/1983', 'BANDRA', '4', 'MadhyaPradesh', '');
INSERT INTO `jobseeker` VALUES ('sham', 'dddddddd', 'ghanshamjadhav744@gmail.com', '2012548545', 'Male', '14/Month/Year', 'BANDRA', '11', 'Jharkhand', '');
INSERT INTO `jobseeker` VALUES ('ffff', 'ffffffff', 'ghanshamjadhav744@gmail.com', '2012548545', '', '16/March/1982', 'mumbai', '2', 'MadhyaPradesh', '');
INSERT INTO `jobseeker` VALUES ('ram', 'nnnnnnnn', 'ghanshamjadhav744@gmail.com', '7066057100', 'Male', '18/January/1981', 'mumbai', '14', 'Karnataka', '');
INSERT INTO `jobseeker` VALUES ('ram', 'nnnnnnnn', 'ghanshamjadhav744@gmail.com', '7066057100', 'Male', '18/January/1981', 'mumbai', '14', 'Karnataka', '');
INSERT INTO `jobseeker` VALUES ('eeee', 'eeeeeeee', 'eee@eee.eee', '1212121212', 'Female', '18/May/1980', 'mumbai', '2', 'Nagaland', '');
INSERT INTO `jobseeker` VALUES ('ggg', 'ggggggggggg', 'ghanshamjadhav744@gmail.com', '2012548545', 'Male', '16/April/1982', 'BANDRA', '9', 'MadhyaPradesh', '');
INSERT INTO `jobseeker` VALUES ('ggg', 'ggggggggggg', 'ghanshamjadhav744@gmail.com', '2012548545', 'Male', '16/April/1982', 'BANDRA', '9', 'MadhyaPradesh', '');
INSERT INTO `jobseeker` VALUES ('dsgfds', 'sssssssssssss', 'ghanshamjadhav744@gmail.com', '2012548545', 'Male', '16/February/Year', 'mumbai', '12', 'Kerla', '');
