-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2012 at 09:30 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey2`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE IF NOT EXISTS `survey_questions` (
  `question_id` int(11) NOT NULL,
  `question_name` varchar(50) DEFAULT NULL,
  `question_type` varchar(30) DEFAULT NULL,
  `question_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`question_id`, `question_name`, `question_type`, `question_description`) VALUES
(1, 'journey', 'checkbox', 'what is your favorite journey?'),
(2, 'journey', 'radio_button', 'which country you want to visit more?'),
(3, 'Mobile', 'radio_button', 'which smart phone do you like more?');

-- --------------------------------------------------------

--
-- Table structure for table `survey_question_options`
--

CREATE TABLE IF NOT EXISTS `survey_question_options` (
  `option_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `option_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_question_options`
--

INSERT INTO `survey_question_options` (`option_id`, `question_id`, `option_description`) VALUES
(1, 1, 'journey by Train'),
(2, 1, 'journey by plain'),
(3, 1, 'journey by boart'),
(4, 2, 'America'),
(5, 2, 'Soudi arabia'),
(6, 2, 'Bangladesh'),
(7, 3, 'Samsung'),
(8, 3, 'Nokia'),
(9, 3, 'Iphone');

-- --------------------------------------------------------

--
-- Table structure for table `survey_users`
--

CREATE TABLE IF NOT EXISTS `survey_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_attempts` int(5) DEFAULT NULL,
  `user_update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `survey_users`
--

INSERT INTO `survey_users` (`user_id`, `user_name`, `user_password`, `user_attempts`, `user_update_at`, `user_created_at`) VALUES
(1, 'riaz', '12345', 0, '2012-09-12 06:57:21', NULL),
(2, 'karim', '12345', 0, '2012-09-12 01:51:59', NULL),
(3, 'kanak', '12345', 0, '2012-09-12 01:52:24', NULL),
(4, 'Goni', '12345', 0, '2012-09-12 01:59:35', NULL),
(5, 'alauddin', '12345', NULL, '0000-00-00 00:00:00', NULL),
(6, 'Hashim', '12345', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_user_answers`
--

CREATE TABLE IF NOT EXISTS `survey_user_answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `option_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `survey_user_answers`
--

INSERT INTO `survey_user_answers` (`answer_id`, `user_id`, `question_id`, `option_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 5),
(3, 1, 3, 8),
(4, 2, 1, 2),
(5, 2, 2, 6),
(6, 2, 3, 7),
(7, 3, 1, 2),
(8, 3, 2, 5),
(9, 3, 3, 8),
(10, 4, 1, 2),
(11, 4, 2, 4),
(12, 4, 3, 8),
(13, 1, 1, 1),
(14, 1, 2, 4),
(15, 1, 3, 8),
(16, 1, 1, 3),
(17, 1, 2, 5),
(18, 1, 3, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
