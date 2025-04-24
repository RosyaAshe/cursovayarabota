-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-5.7
-- Время создания: Апр 24 2025 г., 21:30
-- Версия сервера: 5.7.44
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maker` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_url`, `type`, `maker`) VALUES
(1, 'Тональный крем', 1200.00, '../images/example.png', 'декоративная', ''),
(2, 'Попка', 500.00, 'da0341fdb468a026d9ded9b61bc8b949.jpg', 'для писи', 'аыва'),
(3, 'Увлажняющий крем', 899.99, '../images/example.png', 'уходовая', ''),
(4, 'Карандаш для жопы', 1100.00, '60efb41131e9cac6ff144d7ced927b99.jpg', 'моя прелесть', 'я'),
(5, 'Хуель', 800.00, '../images/be6c027f0bcbae2a412f8a3e90b90305.jpg', 'нет у нее типа', 'уцацуа'),
(6, 'Дезодорант', 500.00, '../images/example.png', 'для тела', ''),
(7, 'Блеск для губ', 600.00, '../images/example.png', 'декоративная', ''),
(8, 'Пенка для умывания', 649.00, '../images/example.png', 'уходовая', ''),
(9, 'Молочко для тела', 900.00, '../images/example.png', 'для тела', ''),
(10, 'Основа под макияж', 1100.00, '../images/example.png', 'декоративная', ''),
(11, 'Тушь для ресниц', 950.00, '../images/example.png', 'декоративная', ''),
(12, 'Бальзам для губ', 450.00, '../images/example.png', 'уходовая', ''),
(13, 'Крем для глаз', 1250.00, '../images/example.png', 'уходовая', ''),
(14, 'Маска для лица', 750.00, '../images/example.png', 'уходовая', ''),
(15, 'Скраб для тела', 850.00, '../images/example.png', 'для тела', ''),
(16, 'Палетка теней', 1800.00, '../images/example.png', 'декоративная', ''),
(17, 'Тоник для лица', 599.00, '../images/example.png', 'уходовая', ''),
(18, 'Сыворотка с витамином C', 1350.00, '../images/example.png', 'уходовая', ''),
(19, 'Шампунь для волос', 450.00, '../images/example.png', 'для тела', ''),
(20, 'Консилер', 699.50, '../images/example.png', 'декоративная', ''),
(21, 'Антицеллюлитный крем', 1400.00, '../images/example.png', 'для тела', ''),
(22, 'Сухой шампунь', 700.00, '../images/example.png', 'для тела', ''),
(23, 'Лосьон для тела', 699.00, '../images/example.png', 'для тела', ''),
(24, 'Солнцезащитный крем', 1600.00, '../images/example.png', 'уходовая', ''),
(25, 'Антивозрастная сыворотка', 1299.00, '../images/example.png', 'уходовая', ''),
(26, 'Румяна', 850.00, '../images/example.png', 'декоративная', ''),
(27, 'Хайлайтер', 950.00, '../images/example.png', 'декоративная', ''),
(28, 'Гидрофильное масло', 1100.00, '../images/example.png', 'уходовая', ''),
(29, 'Крем для рук', 500.00, '../images/example.png', 'для тела', ''),
(30, 'Помада матовая', 799.00, '../images/example.png', 'декоративная', ''),
(31, 'Тональный кре', 234.00, '../images/165b68358329839fa2aed15c813ef9f4.jpg', 'уходовый', ''),
(32, 'привет', 10.00, '../images/4c70011159f79ba75234f6364c2d3af8.jpg', 'уходовый', '');

-- --------------------------------------------------------

--
-- Структура таблицы `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sell`
--

INSERT INTO `sell` (`id`, `name`, `price`, `image_url`) VALUES
(1, 'Увлажняющий крем для лица', 1290.00, 'images\\example.png'),
(2, 'Матовая губная помада', 890.00, 'images\\example.png'),
(3, 'Тушь для ресниц объемная', 750.00, 'images\\example.png'),
(4, 'Тональный крем легкий', 1450.00, 'images\\example.png'),
(5, 'Гель для умывания', 620.00, 'images\\example.png'),
(6, 'Гель для умывания', 599.00, 'images\\example.png'),
(7, 'Сыворотка с витамином C', 1499.00, 'images\\example.png'),
(8, 'Бальзам для губ', 299.50, 'images\\example.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
