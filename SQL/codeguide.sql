-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 10:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarked`
--

CREATE TABLE `bookmarked` (
  `user_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `comment_text` text NOT NULL,
  `dates` date NOT NULL,
  `helpful` int(255) NOT NULL,
  `times` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `comment_text`, `dates`, `helpful`, `times`) VALUES
(1, 3, 19, 'background-size:cover;', '2019-02-04', 0, '05:35:00'),
(2, 3, 23, 'good', '2019-02-04', 0, '06:25:00'),
(3, 3, 23, 'js is life', '2019-02-04', 0, '06:30:00'),
(4, 3, 19, 'background-repeat:no-repeat', '2019-02-04', 0, '06:38:00'),
(5, 3, 18, 'int , string', '2019-02-04', 0, '07:27:00'),
(6, 3, 21, 'lkjl', '2019-02-04', 0, '08:27:00'),
(7, 3, 22, 'zkdflz', '2019-02-04', 0, '08:28:00'),
(8, 3, 24, 'block for div\ninline fir img', '2019-02-05', 0, '12:46:00'),
(9, 3, 25, 'system.out.println(\"\");', '2019-02-05', 0, '02:37:00'),
(10, 3, 21, 'sdgs.g', '2019-02-05', 0, '04:10:00'),
(11, 3, 12, 'include <malloc.h>', '2019-02-05', 0, '04:12:00'),
(12, 3, 12, 'include malloc.h', '2019-02-05', 0, '04:13:00'),
(13, 3, 24, ';l;lk;l;', '2019-02-05', 0, '04:14:00'),
(14, 3, 24, 'o\'\'', '2019-02-05', 0, '04:17:00'),
(15, 3, 29, 'jkljkl', '2019-02-05', 0, '05:58:00'),
(19, 3, 29, 'lhdlghflg', '2019-02-05', 0, '11:06:00'),
(17, 3, 29, 'sdfs', '2019-02-05', 0, '09:55:00'),
(18, 3, 26, 'dgdfgdf', '2019-02-05', 0, '09:56:00'),
(16, 3, 26, 'data science udemy', '2019-02-05', 0, '09:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_of_members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `admin_id`, `name`, `number_of_members`) VALUES
(27, 3, 'software', 0),
(28, 6, 'php_group', 0),
(29, 3, 'web', 0),
(30, 3, 'codeGuide', 0),
(31, 3, 'front end', 0),
(32, 3, 'back end', 0),
(33, 3, 'back end', 0),
(34, 3, 'back end', 0),
(35, 7, 'jquery', 0),
(36, 3, '', 0),
(37, 3, 'machine learning', 0),
(38, 3, 'sw2018', 0),
(39, 3, 'omar_group', 0),
(40, 3, 'exams', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_user`
--

CREATE TABLE `group_user` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_user`
--

INSERT INTO `group_user` (`group_id`, `user_id`) VALUES
(27, 3),
(27, 6),
(27, 2),
(28, 6),
(28, 2),
(28, 3),
(29, 3),
(29, 6),
(29, 2),
(29, 2),
(29, 2),
(29, 6),
(29, 6),
(29, 6),
(29, 6),
(29, 6),
(29, 3),
(29, 3),
(29, 6),
(29, 3),
(29, 3),
(29, 3),
(30, 3),
(30, 6),
(30, 2),
(31, 3),
(31, 6),
(31, 2),
(32, 3),
(32, 3),
(32, 3),
(35, 7),
(35, 2),
(35, 3),
(35, 6),
(36, 3),
(36, 6),
(36, 7),
(28, 7),
(27, 7),
(37, 3),
(37, 6),
(37, 7),
(38, 3),
(38, 6),
(38, 7),
(39, 3),
(39, 6),
(39, 7),
(39, 2),
(40, 3),
(40, 6),
(40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `user_id` text NOT NULL,
  `dates` date NOT NULL,
  `question` text NOT NULL,
  `reported` int(255) NOT NULL,
  `language` text NOT NULL,
  `group_id` int(255) NOT NULL,
  `times` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `dates`, `question`, `reported`, `language`, `group_id`, `times`) VALUES
(1, '2', '2019-01-31', '<div>aaaaaaaaa</div>', 0, 'java', 0, '00:00:00'),
(2, '3', '2019-01-31', '<div>Function rand()</div>', 0, 'C/C++', 0, '03:09:00'),
(3, '3', '2019-01-31', '<div>What is the name of the <font color=\"#008000\">function which&nbsp;</font><span style=\"color: rgb(255, 0, 0); font-size: 1rem;\">returns number of elements of array</span><span style=\"color: rgb(0, 128, 0); font-size: 1rem;\">?</span></div>', 0, 'python', 0, '04:07:00'),
(4, '3', '2019-01-31', '<div>what is the input of date</div>', 0, 'HTML', 0, '04:09:00'),
(5, '3', '2019-01-31', '<div><b><i><u>count()</u></i></b>&nbsp; function of array?</div>', 0, 'php', 0, '07:18:00'),
(6, '3', '2019-01-31', '<div>how to hold <b>value</b> of input?</div>', 0, 'javascript', 0, '07:19:00'),
(7, '3', '2019-01-31', '<div>jquery -&gt;&gt;&gt; ajax post help</div>', 0, 'jquery', 0, '07:26:00'),
(8, '3', '2019-01-31', '<div>inheritance in java</div>', 0, 'java', 0, '11:31:00'),
(9, '3', '2019-02-02', '<div>how to send array from js to php</div>', 0, 'php', 0, '07:51:00'),
(10, '6', '2019-02-02', '<div>CONCAT in sql with php</div>', 0, 'php', 0, '07:52:00'),
(11, '6', '2019-02-02', '<div>hoe to obtain descendants of certain selector</div>', 0, 'jquery', 0, '07:53:00'),
(12, '3', '2019-02-03', '<div><b><i>malloc()</i></b> function?</div>', 0, 'C/C++', 27, '12:47:00'),
(13, '3', '2019-02-03', 'class modal implementation??', 0, 'CSS', 28, '12:49:00'),
(14, '3', '2019-02-03', '<div>class database with <b><i>PDO ?</i></b></div>', 0, 'php', 0, '12:51:00'),
(15, '3', '2019-02-03', '<div>border style_&gt;&gt;&gt;&gt; green solid 5px;&nbsp;</div>', 0, 'CSS', 0, '12:53:00'),
(16, '3', '2019-02-03', '<div>Best techniques for supervised learning by using python</div>', 0, 'python', 37, '01:55:00'),
(17, '3', '2019-02-03', '<div>how to start learning <b>c#</b></div>', 0, 'C#', 0, '03:24:00'),
(18, '3', '2019-02-03', '<div>data types in <b><i>C#</i></b>?</div>', 0, 'C#', 0, '03:25:00'),
(19, '3', '2019-02-03', '<div>how to make an image background of site</div>', 0, 'HTML', 0, '03:26:00'),
(20, '3', '2019-02-03', '<div>for in python</div>', 0, 'python', 39, '04:12:00'),
(21, '3', '2019-02-04', '<div>zckjhfzkjd</div>', 0, 'java', 27, '04:40:00'),
(22, '6', '2019-02-04', '<div>;;dg</div>', 0, 'python', 28, '04:44:00'),
(23, '3', '2019-02-04', '<div>js</div>', 0, 'js', 0, '05:53:00'),
(24, '3', '2019-02-05', '<div>difference between display: block , inline-block</div>', 0, 'CSS', 0, '12:42:00'),
(25, '3', '2019-02-05', '<div>how to print on screen?</div>', 0, 'java', 40, '02:36:00'),
(26, '3', '2019-02-05', '<div><b>python statistics ??</b></div>', 0, 'python', 0, '04:31:00'),
(27, '3', '2019-02-05', '<div>div tags</div>', 0, 'HTML', 27, '04:32:00'),
(28, '3', '2019-02-05', '<div>;lk;k;</div><div>;oi</div>', 0, 'python', 27, '04:33:00'),
(29, '3', '2019-02-05', '<div style=\"text-align: center;\">klj;</div><div><br></div>', 0, 'php', 0, '04:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `rated`
--

CREATE TABLE `rated` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `email`, `password`, `last_name`) VALUES
(7, 'omar', 'omar@gmail.com', 'omar', 'alam'),
(2, 'Omar ', 'omarnasr3939@gmail.com', 'a', 'Hesham'),
(3, 'martin', 'martin@gmail.com', 'martin', 'joseph'),
(6, 'mark', 'mark@gmail.com', 'mark', 'youssef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
