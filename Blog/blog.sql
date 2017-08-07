-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 08 2017 г., 00:07
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
  `text` text,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `date`, `text`, `user`) VALUES
(108, 'Post 2', '2017-08-06 21:53:30', 'Post 2 Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2', 'dima'),
(109, 'Post 3', '2017-08-07 16:25:26', 'qqqqqqqqqqqqqqqqqqqqqq', 'dima'),
(111, 'Post 5', '2017-08-04 00:00:00', 'Post 5', ''),
(112, 'Post 6 ', '2017-08-04 00:00:00', 'Post 6 ', ''),
(114, 'Post 8 ', '2017-08-04 00:00:00', 'Post 8 ', ''),
(115, 'Post 9 ', '2017-08-04 00:00:00', 'Post 9 ', ''),
(116, 'Post 10', '2017-08-04 00:00:00', 'Post 10', ''),
(117, 'Post 11', '2017-08-04 00:00:00', 'Post 11', ''),
(121, 'Ivan Post222222', '2017-08-06 22:38:34', ' postpostpost 22222', 'ivan');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'dima', 1111, ''),
(2, 'ivan', 2222, ''),
(3, 'Vova', 3333, 'email@dot.com'),
(8, 'sergiy', 4444, 'sergiy@dot.com'),
(10, 'taras', 5555, 'tars@dot.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
