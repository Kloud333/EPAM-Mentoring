-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 17 2017 г., 13:51
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

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
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `date`, `text`, `user`) VALUES
(108, 'Post 2', '2017-08-06 21:53:30', 'Post 2 Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2Post 2', 'dima'),
(111, 'Post 5', '2017-08-17 01:40:57', 'Post 5', 'j'),
(121, 'Ivan Post222222', '2017-08-06 22:38:34', ' postpostpost 22222', 'ivan'),
(122, 'P2', '2017-08-17 12:17:52', 'P2', 'j'),
(126, '3', '2017-08-17 13:28:12', '3', 'j');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'dima', '1111', ''),
(2, 'ivan', '2222', ''),
(3, 'Vova', '3333', 'email@dot.com'),
(8, 'sergiy', '4444', 'sergiy@dot.com'),
(10, 'taras', '5555', 'tars@dot.com'),
(11, 'kkk', '0', 'kkk'),
(12, 'mmm', '4444', 'mmm'),
(13, 'mmm', '4444', 'mmm'),
(18, 'w', '0', 'e'),
(19, 'z', '$2y$10$7ebKor9SvC7Jl0a5mvgDROtpw/qEOTkQUavwxxPr3tfnkScFWf7Um', 'z'),
(20, 'h', '$2y$10$lcoMVL404tD7LQJy30PiUeCoaBdmCAqd3WASSUlQXswPIMlnonRPK', 'h'),
(21, 'u', '$2y$10$inlRBTL.IGfC6h1knODGgeySwLPltcEVjiFD/nU/rQvpdQzV8vaH.', 'u@mail.ru'),
(22, 'r', '$2y$10$CXKU7xkXRaPFwsHZTqEV5e2UsGybhsFEa83/K18Z1SE6pu1a73JOy', 'r@i.com'),
(23, 'j', '$2y$10$W3vv/acQk5igmSbmVk4LeuuKMHutt0YomyUnVoM8iKr89h3gqEr1C', 'j@i.ua'),
(24, 'c', '$2y$10$QmzemAdwWanLycySYWM0JeKUrY1BmMV1RaBBwFKbDVrXao/EmoPkK', 'c@i.ua'),
(25, 'n', '$2y$10$Tcw2JePz4cAilWfAZL6jz.Js.euVPbZbBmbaHwo4N0ABD1WPhk0cW', 'n@i.ua');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
