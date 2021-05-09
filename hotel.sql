-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time:  4 март 2021 в 05:21
-- Версия на сървъра: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Структура на таблица `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_status` varchar(10) COLLATE utf8_bin NOT NULL,
  `cat_priority` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Схема на данните от таблица `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_desc`, `cat_slug`, `cat_date`, `cat_edit_date`, `cat_status`, `cat_priority`) VALUES
(60, 'Guest', 'This is category for Guest rooms', 'guest', '', '12/02/2021', '1', '1'),
(61, 'Deluxe', 'This is category for Deluxe rooms', 'deluxe', '16/04/2019', '12/02/2021', '1', '1'),
(62, 'Superior', 'This is category for Superior rooms', 'superior', '17/05/2019', '27/02/2021', '1', '1'),
(63, 'Single', 'This room is for Single rooms', 'single', '26/02/2021', '26/02/2021', '1', '1');

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `comm_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `comm_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `comm_text` text COLLATE utf8_bin NOT NULL,
  `comm_status` varchar(50) COLLATE utf8_bin NOT NULL,
  `comm_date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `postid`, `comm_autor`, `comm_email`, `comm_text`, `comm_status`, `comm_date`) VALUES
(45, 46, 'Петър', 'Petar@gmail.com', 'Много хубава стая препоръчвам .', '1', '02/03/2021');

-- --------------------------------------------------------

--
-- Структура на таблица `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(12, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Структура на таблица `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(4, '', 'Hristomir', 'Harizanov', 'Deluxe Room', 'Single', 1, '2021-03-03', '2021-03-06', 660.00, 686.40, 19.80, 'Half Board', 6.60, 3);

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `post_category` varchar(10) COLLATE utf8_bin NOT NULL,
  `post_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_image` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_text` text COLLATE utf8_bin NOT NULL,
  `post_tag` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_visit_counter` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_status` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_priority` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`id`, `post_category`, `post_title`, `post_autor`, `post_date`, `post_edit_date`, `post_image`, `post_text`, `post_tag`, `post_visit_counter`, `post_status`, `post_priority`) VALUES
(23, '63', 'Single стая с едно легло', '', '17/05/2019', '27/02/2021', 'pexels-engy-naguib-2255424.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Single с&nbsp;едно легло, двадесет и четири&nbsp;инчов&nbsp;телевизор с над 100&nbsp;канала, добра интернет връзка един климатик, баня и тоалетна в едно,&nbsp;закуска обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Single</li>\r\n	<li>Такса за една стая: 150</li>\r\n	<li>Такса за едно легло: 1,50</li>\r\n	<li>Такса за само закуска: 3,00</li>\r\n	<li>Такса за закуска и обяд: 4,50</li>\r\n	<li>Такса за закуска, обяд и вечеря: 6,00&nbsp;</li>\r\n</ul>\r\n', 'single', '6', '1', '1'),
(24, '62', 'SUPERIOR стая с две легла', '', '17/05/2019', '27/02/2021', 'pexels-photomix-company-97083.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Superior с две легла, четирдесет и два инчов smart телевизор с netflix и с над 1000 канала, добра интернет връзка два климатика, две бани и две тоалетни, първо класна закуска обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Superior</li>\r\n	<li>Такса за една стая: 320</li>\r\n	<li>Такса за едно легло: 3,20</li>\r\n	<li>Такса за само закуска: 6,40</li>\r\n	<li>Такса за закуска и обяд: 9,60</li>\r\n	<li>Такса за закуска, обяд и вечеря: 12,80&nbsp;</li>\r\n</ul>\r\n', 'superior ', '2', '1', '1'),
(25, '60', 'Guest стая със спалня', '', '17/05/2019', '27/02/2021', 'pexels-pixabay-262048.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Gues със спалня, тридесет и два инчов&nbsp;телевизор с над 300&nbsp;канала, добра интернет връзка един климатик, една&nbsp;баня&nbsp;и и една&nbsp;тоалетна, закуска, обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Guest</li>\r\n	<li>Такса за една стая: 180&nbsp;</li>\r\n	<li>Такса за едно легло: 1,80</li>\r\n	<li>Такса за само закуска: 3,60</li>\r\n	<li>Такса за закуска и обяд: 5,40</li>\r\n	<li>Такса за закуска, обяд и вечеря: 7,20</li>\r\n</ul>\r\n', 'guest', '6', '1', '1'),
(26, '62', 'SUPERIOR стая с едно легло', '', '17/05/2019', '27/02/2021', 'johannes-w-IQKuHc2lils-unsplash.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Superior с едно&nbsp;легло, четирдесет и два инчов smart телевизор с netflix и с над 1000 канала, добра интернет връзка два климатика, две бани и две тоалетни, закуска обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Superior</li>\r\n	<li>Такса за една стая: 320</li>\r\n	<li>Такса за едно легло: 3,20</li>\r\n	<li>Такса за само закуска: 6,40</li>\r\n	<li>Такса за закуска и обяд: 9,60</li>\r\n	<li>Такса за закуска, обяд и вечеря: 12,80&nbsp;</li>\r\n</ul>\r\n', '', '5', '1', ''),
(27, '61', 'Deluxe стая с едно легло', '', '', '27/02/2021', 'pexels-pixabay-210265.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Delux с&nbsp;едно легло, тридесет&nbsp;и два инчов smart телевизор с netflix и с над 500&nbsp;канала, добра интернет връзка два климатика, две бани и две тоалетни, закуска обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Deluxe</li>\r\n	<li>Такса за една стая: 220</li>\r\n	<li>Такса за едно легло: 2,20</li>\r\n	<li>Такса за само закуска: 4,40</li>\r\n	<li>Такса за закуска и обяд: 6,60</li>\r\n	<li>Такса за закуска, обяд и вечеря: 8,80</li>\r\n</ul>\r\n', 'deluxe', '18', '1', ''),
(44, '61', 'Deluxe стая със спалня', '', '27/02/2021', '27/02/2021', 'pexels-william-sun-1267438.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Delux с&nbsp;еднa спалня, тридесет&nbsp;и два инчов smart телевизор с netflix и с над 500&nbsp;канала, добра интернет връзка два климатика, две бани и две тоалетни,&nbsp;закуска обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Deluxe</li>\r\n	<li>Такса за една стая: 220</li>\r\n	<li>Такса за едно легло: 2,20</li>\r\n	<li>Такса за само закуска: 4,40</li>\r\n	<li>Такса за закуска и обяд: 6,60</li>\r\n	<li>Такса за закуска, обяд и вечеря: 8,80</li>\r\n</ul>\r\n', 'deluxe', '2', '1', '1'),
(45, '63', 'Single стая с две легла', '', '27/02/2021', '27/02/2021', 'pexels-max-vakhtbovych-6933767.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Single с две легла, двадесет и четири&nbsp;инчов&nbsp;телевизор с над 100&nbsp;канала, добра интернет връзка един климатик, баня и тоалетна в едно,&nbsp;закуска обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Single</li>\r\n	<li>Такса за една стая: 150</li>\r\n	<li>Такса за едно легло: 1,50</li>\r\n	<li>Такса за само закуска: 3,00</li>\r\n	<li>Такса за закуска и обяд: 4,50</li>\r\n	<li>Такса за закуска, обяд и вечеря: 6,00&nbsp;</li>\r\n</ul>\r\n', 'single', '0', '1', '1'),
(46, '60', 'Guest стая с едно легло', '', '27/02/2021', '27/02/2021', 'pexels-pixabay-271618.jpg', '<p>Удобна и уютна стая с тераса с изглед към плажа стаята е от тип Gues с&nbsp;едно легло, тридесет и два инчов&nbsp;телевизор с над 300&nbsp;канала, добра интернет връзка един климатик, една&nbsp;баня&nbsp;и и една&nbsp;тоалетна, закуска, обяд и вечеря в зависимост как сте резервирали стаята.&nbsp;</p>\r\n\r\n<h2>Ценоразпис</h2>\r\n\r\n<ul>\r\n	<li>Тип: Guest</li>\r\n	<li>Такса за една стая: 180&nbsp;</li>\r\n	<li>Такса за едно легло: 1,80</li>\r\n	<li>Такса за само закуска: 3,60</li>\r\n	<li>Такса за закуска и обяд: 5,40</li>\r\n	<li>Такса за закуска, обяд и вечеря: 7,20</li>\r\n</ul>\r\n', '', '12', '1', '1');

-- --------------------------------------------------------

--
-- Структура на таблица `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(4, 'Deluxe Room', 'Double', 'Free', NULL),
(5, 'Guest House', 'Single', 'Free', NULL),
(6, 'Guest House', 'Double', 'Free', NULL),
(7, 'Single Room', 'Single', 'Free', NULL),
(8, 'Single Room', 'Double', 'Free', NULL),
(9, 'Superior Room', 'Triple', 'Free', NULL),
(10, 'Deluxe Room', 'Triple', 'Free', NULL),
(11, 'Guest House', 'Triple', 'Free', NULL),
(12, 'Single Room', 'Triple', 'Free', NULL),
(13, 'Superior Room', 'Single', 'Free', NULL),
(14, 'Superior Room', 'Double', 'Free', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
