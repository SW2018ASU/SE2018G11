-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 01:33 AM
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

--
-- Dumping data for table `bookmarked`
--

INSERT INTO `bookmarked` (`user_id`, `post_id`) VALUES
(4, 19),
(4, 18),
(6, 28),
(5, 17),
(5, 7),
(5, 28),
(5, 29),
(4, 17),
(5, 34);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `specialist_id` int(11) NOT NULL,
  `post_id` int(255) NOT NULL,
  `comment_text` text NOT NULL,
  `dates` date NOT NULL,
  `helpful` int(255) NOT NULL,
  `times` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `specialist_id`, `post_id`, `comment_text`, `dates`, `helpful`, `times`) VALUES
(1, 2, 0, 4, 'dsfad', '2019-02-08', 0, '07:07:00'),
(2, 2, 0, 15, 'hey hey', '2019-02-08', 1, '10:25:00'),
(3, 1, 0, 18, 'j xkzm kmcx', '2019-02-09', 0, '04:17:00'),
(4, 1, 0, 18, 'ksadhikw', '2019-02-09', 0, '05:01:00'),
(5, 1, 0, 18, 'hdsgjjdsg', '2019-02-12', 0, '10:28:00'),
(6, 1, 0, 18, 'hey hey', '2019-02-12', 0, '01:17:00'),
(7, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(8, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(9, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(10, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(11, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(12, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(13, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(14, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(15, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(16, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:26:00'),
(17, 1, 0, 18, 'knock knock', '2019-02-12', 0, '01:30:00'),
(18, 1, 0, 16, 'hello', '2019-02-12', 0, '01:31:00'),
(19, 1, 0, 16, 'asd', '2019-02-12', 0, '02:00:00'),
(20, 0, 1, 16, 'a7bk', '2019-02-12', 1, '02:03:00'),
(21, 0, 1, 16, 'welcome', '2019-02-12', 1, '03:30:00'),
(22, 2, 0, 10, 'dddd', '2019-02-12', 0, '04:33:00'),
(23, 2, 0, 10, 'dddf', '2019-02-12', 0, '05:46:00'),
(24, 2, 0, 10, 'dfggg', '2019-02-12', 0, '05:47:00'),
(25, 2, 0, 8, 'hhu', '2019-02-12', 0, '06:01:00'),
(26, 0, 1, 10, 'nji', '2019-02-12', 0, '06:02:00'),
(27, 0, 1, 16, 'hdhdj', '2019-02-12', 1, '08:27:00'),
(28, 4, 0, 19, 'aaaaaaaaaa', '2019-02-12', 0, '09:48:00'),
(29, 4, 0, 23, 'fffffffffff', '2019-02-12', 0, '09:56:00'),
(30, 4, 0, 22, 'jjjjj', '2019-02-12', 0, '09:57:00'),
(31, 4, 0, 22, 'vvvvvvvvvvvvvvvv', '2019-02-12', 0, '09:59:00'),
(32, 4, 0, 28, 'dfhhgggggggggggggg', '2019-02-12', 2, '10:49:00'),
(33, 4, 0, 17, 'sssssssssssssssssssssssggggggggggggggggggg', '2019-02-12', 0, '10:49:00'),
(34, 5, 0, 17, 'helo', '2019-02-12', 0, '10:52:00'),
(35, 7, 0, 19, 'hggggggggggg', '2019-02-12', 0, '11:35:00'),
(36, 0, 6, 6, 'knjn ', '2019-02-13', 0, '12:14:00'),
(37, 0, 6, 5, 'dnvjb jdv', '2019-02-13', 0, '12:15:00'),
(38, 8, 0, 29, ' jd nknc', '2019-02-13', 0, '12:16:00'),
(39, 5, 0, 32, 'jnhbcas', '2019-02-13', 0, '12:41:00'),
(40, 5, 0, 33, 'ddddddddd', '2019-02-13', 0, '12:41:00'),
(41, 5, 0, 33, 'd', '2019-02-13', 0, '12:52:00'),
(42, 5, 0, 33, 'ds\n', '2019-02-13', 0, '12:55:00'),
(43, 5, 0, 34, 'hi', '2019-02-13', 0, '12:57:00'),
(44, 5, 0, 34, 'j bn ', '2019-02-13', 0, '01:00:00'),
(45, 5, 0, 34, 'k', '2019-02-13', 0, '01:09:00'),
(46, 0, 1, 35, 'jjjjjjjj', '2019-02-13', 1, '01:37:00'),
(47, 0, 1, 16, 'jbjbjsbaakSBX', '2019-02-13', 0, '01:43:00'),
(48, 0, 1, 19, 'da', '2019-02-13', 0, '01:43:00'),
(49, 0, 6, 35, 'mj', '2019-02-13', 0, '01:52:00'),
(50, 0, 7, 35, 'jj', '2019-02-13', 0, '02:06:00'),
(51, 0, 1, 35, 'knn', '2019-02-13', 0, '02:26:00'),
(52, 0, 3, 35, 'hello\n', '2019-02-13', 0, '02:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `number_of_members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `admin_id`, `name`, `number_of_members`) VALUES
(1, 4, 'a', 0),
(2, 8, 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_user`
--

CREATE TABLE `group_user` (
  `group_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_user`
--

INSERT INTO `group_user` (`group_id`, `user_id`) VALUES
(1, 4),
(1, 3),
(1, 2),
(2, 8),
(2, 1),
(2, 2),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `user_id` text NOT NULL,
  `specialist_id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `question` text NOT NULL,
  `reported` int(255) NOT NULL,
  `language` text NOT NULL,
  `group_id` int(255) NOT NULL,
  `times` time NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `specialist_id`, `dates`, `question`, `reported`, `language`, `group_id`, `times`, `type`) VALUES
(1, '2', 0, '2019-01-31', '<div>aaaaaaaaa</div>', 0, 'java', 0, '00:00:00', 'c'),
(2, '3', 0, '2019-02-05', '<br>', 0, 'Choose...', 0, '06:44:00', 'c'),
(3, '3', 0, '2019-02-05', '<div><br></div>', 0, 'Choose...', 0, '06:45:00', 'c'),
(4, '2', 0, '2019-02-05', '<div>mostag</div>', 0, 'C/C++', 0, '10:58:00', 'c'),
(5, '2', 0, '2019-02-05', '<div>hello world</div>', 0, 'python', 0, '10:59:00', 's'),
(6, '2', 0, '2019-02-08', '<div>sdgsdvsd</div>', 0, 'Choose...', 0, '07:07:00', 's'),
(7, '2', 0, '2019-02-08', 'hello!', 0, 'C/C++', 0, '08:07:00', 'c'),
(8, '2', 0, '2019-02-08', '<div><br></div>', 0, 'Choose...', 0, '08:08:00', 's'),
(9, '2', 0, '2019-02-08', '<div>iohkljk</div>', 0, 'Choose...', 0, '08:09:00', 'c'),
(10, '2', 0, '2019-02-08', '<div>nlkklkm,.</div>', 0, 'Choose...', 0, '08:09:00', 's'),
(11, '2', 0, '2019-02-08', '<div>dfdsvdsv</div>', 0, 'C#', 0, '08:16:00', 'c'),
(12, '', 0, '0000-00-00', '', 0, '', 0, '00:00:00', ''),
(13, '', 0, '0000-00-00', '', 0, '', 0, '00:00:00', ''),
(14, '2', 0, '2019-02-08', '<div>dsvdscxz</div>', 0, 'Choose...', 0, '09:24:00', 'c'),
(15, '2', 0, '2019-02-08', '<div>sacsas</div>', 0, 'Choose...', 0, '09:25:00', 'c'),
(16, '2', 0, '2019-02-08', '<div>help me specialist</div>', 0, 'C/C++', 0, '10:24:00', 's'),
(17, '2', 0, '2019-02-09', '<div>bukjbnk</div>', 0, 'php', 0, '02:54:00', 'c'),
(18, '2', 0, '2019-02-09', '<div>hjkjhklj</div>', 0, 'php', 0, '02:54:00', 's'),
(19, '2', 0, '2019-02-12', '<div>dafds</div>', 0, 'java', 0, '08:29:00', 's'),
(20, '4', 0, '2019-02-12', '<div>aaaaaaaaaaaaaaaaaaaaaaaaaaa</div>', 0, 'python', 0, '09:48:00', ''),
(21, '4', 0, '2019-02-12', '<div>a</div>', 0, 'HTML', 0, '09:49:00', ''),
(22, '4', 0, '2019-02-12', '<div>ff</div>', 0, 'CSS', 0, '09:49:00', ''),
(23, '4', 0, '2019-02-12', '<div>a</div>', 0, 'CSS', 1, '09:56:00', ''),
(24, '4', 0, '2019-02-12', '<div>aaaaaaaaaaaaaaa</div>', 0, 'python', 0, '10:09:00', ''),
(25, '4', 0, '2019-02-12', '<div>g9u</div>', 0, 'CSS', 0, '10:27:00', ''),
(26, '4', 0, '2019-02-12', '<div>gggggggggggggggggggg</div>', 0, 'php', 0, '10:28:00', ''),
(27, '4', 0, '2019-02-12', '<div>wwwwwwwww</div>', 0, 'php', 0, '10:38:00', ''),
(28, '4', 0, '2019-02-12', '<div>a</div>', 0, 'java', 0, '10:48:00', 'c'),
(29, '8', 0, '2019-02-13', '<div>a</div>', 0, 'java', 0, '12:16:00', 'c'),
(30, '8', 0, '2019-02-13', '<div>k</div>', 0, 'javascript', 2, '12:22:00', ''),
(31, '5', 0, '2019-02-13', '<div>kkk</div>', 0, 'python', 2, '12:36:00', ''),
(32, '5', 0, '2019-02-13', '<div>hell</div><div><br></div>', 0, 'HTML', 2, '12:37:00', ''),
(33, '5', 0, '2019-02-13', '<div>hell</div><div><br></div>', 0, 'C#', 0, '12:40:00', 'c'),
(34, '5', 0, '2019-02-13', '<div>hello sp</div>', 0, 'python', 0, '12:56:00', 's'),
(35, '5', 0, '2019-02-13', '<div>kkkk</div>', 0, 'java', 0, '01:36:00', 's');

-- --------------------------------------------------------

--
-- Table structure for table `rated`
--

CREATE TABLE `rated` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rated`
--

INSERT INTO `rated` (`user_id`, `comment_id`) VALUES
(2, 21),
(2, 20),
(2, 27),
(5, 32),
(7, 32),
(5, 2),
(5, 46);

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `id` int(11) NOT NULL,
  `s_first_name` varchar(256) NOT NULL,
  `s_last_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `bank_info` int(11) NOT NULL,
  `number_of_answers` int(11) NOT NULL,
  `cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`id`, `s_first_name`, `s_last_name`, `email`, `password`, `bank_info`, `number_of_answers`, `cash`) VALUES
(1, 'kareem', 'salah', 'salahno1@yahoo.com', '1234', 11, 182, 80),
(2, 'qt', 'qta', 'qt@gmail.com', '0', 0, 0, 0),
(3, 'qt', 'qtaaa', 'a@gmail.com', '0', 0, 1, 0),
(4, 'alaa', 'alaa', 'alaa@gmail.com', 'a', 565, 0, 0),
(5, 'dddddd', 'ddddddddddd', 'ddddd@yahoo.com', '0', 123, 0, 0),
(6, 'daq', 'daq', 'daq@yahoo.com', '1', 0, 3, 0),
(7, 'special', 'special', 'sp@gmail.com', '0', 1, 1, 0),
(8, 's2', 's2', 's2@yahoo.com', '0', 0, 0, 0),
(9, 'la2', 'la2', 'la2@gmail.com', '0', 0, 0, 0),
(10, '0', '0', '1@yahoo.com', '0', 0, 0, 0),
(11, 'kl', 'kl', 'kl@uah', '#g', 0, 0, 0),
(12, 'aaa', 'aaaa', 'aaa@yahoo.com', 'aaa', 0, 0, 0),
(13, 'jjjj', 'jjjjj', 'jjjjsjsj@gsxhbh', '1234', 0, 0, 0);

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
(1, 'O', 'O@YAHOO.COM', 'a', 'O'),
(2, 'Omar ', 'omarnasr3939@gmail.com', 'a', 'Hesham'),
(3, 'kareem', 'kemo@yahoo.com', '1234', 'salah'),
(4, 'AHMED', 'a@gmail.com', 'a', 'AHMED'),
(5, 'fatma', 'fatma@gmail.com', 'q', 'fatma'),
(7, 'qt', 'qat@gmail.com', '0', 'sf'),
(8, 'jio', 'jio@yahoo.com', '0', 'jio');

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
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `specialist`
--
ALTER TABLE `specialist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
