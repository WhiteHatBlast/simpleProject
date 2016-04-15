-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2013 at 06:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(2, 1, 'asas', 'alangfc09@gmail.com', 'sad', '20/01/13 09:11:14'),
(2, 2, 'faridblaster', 'alangfc000000w009@gmail.com', 'asd', '20/01/13 18:52:33'),
(2, 3, 'asas', 'alangfc059@gmail.com', 'sad', '20/01/13 18:54:02'),
(3, 1, 'faridblaster', 'alangfc0129@gmail.com', 'haha', '21/01/13 05:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(1, 'bosan', 'asdasd', 'asasd', 'alangfc0009@yahoo.com', '20/01/13 06:00:57', 13, 1),
(2, 'bosan', 'asdas', 'asdasd', 'alangfc0009@yahoo.com', '20/01/13 06:02:13', 248, 3),
(3, 'Hari nie buat final project', 'harap2 semua siap dengan cepat', 'faridblaster', 'alangfc0009@yahoo.com', '21/01/13 05:27:30', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `age` int(5) NOT NULL,
  `course` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ic_number` text,
  `sex` varchar(10) DEFAULT NULL,
  `date` varchar(122) DEFAULT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `ip` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `nickname`, `age`, `course`, `country`, `email`, `password`, `ic_number`, `sex`, `date`, `question`, `answer`, `ip`) VALUES
(24, 'fariduddin', 'farid', 21, 'DIP (Programming)', 'Malaysia', 'alangfc0009@yahoo.com', 'f9f6cb59f8ee60f1ee6dd5ea8a1e3cfe', '920414105577', 'male', '1992-04-14', 'What is your father name ?', 'hashim', 0),
(25, 'faridblast', 'faridblast', 0, '', '', 'alangfc0009@yahoo.com', 'f9f6cb59f8ee60f1ee6dd5ea8a1e3cfe', '920414105567', 'male', '1992-04-13', 'What is your nickname ?', 'blaster', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
