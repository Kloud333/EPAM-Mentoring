-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 04 2017 г., 03:14
-- Версия сервера: 5.6.31
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` text
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `date`, `text`) VALUES
(107, 'Post 1', '2017-08-04 00:00:00', 'Post 1 Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1Post 1'),
(108, 'Post 2', '2017-08-04 00:00:00', 'Post 2 Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2'),
(109, 'Post 3', '2017-08-04 00:00:00', 'Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 Post 3 '),
(110, 'Post 4 ', '2017-08-04 00:00:00', 'Post 4 '),
(111, 'Post 5', '2017-08-04 00:00:00', 'Post 5'),
(112, 'Post 6 ', '2017-08-04 00:00:00', 'Post 6 '),
(113, 'Post 7 ', '2017-08-04 00:00:00', 'Post 7 '),
(114, 'Post 8 ', '2017-08-04 00:00:00', 'Post 8 '),
(115, 'Post 9 ', '2017-08-04 00:00:00', 'Post 9 '),
(116, 'Post 10', '2017-08-04 00:00:00', 'Post 10'),
(117, 'Post 11', '2017-08-04 00:00:00', 'Post 11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
