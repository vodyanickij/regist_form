-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2016 г., 18:19
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `stud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL DEFAULT '',
  `family` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `login` varchar(15) NOT NULL DEFAULT '',
  `pass` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user`, `family`, `email`, `login`, `pass`) VALUES
(1, 'Александр', 'Водяницкий', 'sasha-vodyanickij@yandex.ru', 'sashka', '19191001'),
(4, 'ddc', 'cdcd', 'ddcdc', 'cdcd', 'dcd'),
(5, 'ddc21', 'cdcd21', 'ddcdc', 'cdcd21', '2121'),
(6, 're', 'rtr', 'retre', 'rerter', 'db6222f4cad595d78bf2928be999d718cad6bd68'),
(7, 'мала', 'мала', 'мала', 'мала', 'b2a64a99328468804bdd8ae3f2ebdbbcf4461cba');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
