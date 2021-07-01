-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 20 2021 г., 13:31
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lyceum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'Учителя начальных классов'),
(2, 'Учителя иностранного языка'),
(3, 'Учителя русского языка и литературы'),
(4, 'Учителя физвоспитания и технологии'),
(5, 'Учителя естественно-научного цикла'),
(6, 'Учителя математики и ИВТ'),
(7, 'Учителя истории и обществознания');

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `location` text CHARACTER SET utf8 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`id`, `location`, `title`, `content`) VALUES
(1, 'data', 'Сведения об образовательной организации', 'Пошел контент'),
(2, 'wins', 'Победы и награды', '<p><strong>Контент</strong></p>\r\n<p><strong>Да да</strong></p>'),
(3, 'events', 'Мероприятия', '<p><strong>Чи</strong></p>'),
(4, 'service', 'Служба примирения', 'Чоп'),
(5, 'phonenumber', 'Телефоны экстренной службы', 'да');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `article` varchar(15) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `article`, `title`, `content`, `date`, `photo`) VALUES
(75, 'news', 'IT конференция', '<p>IT конференция</p>', '2021-06-08', '8656GSA_IT_Schedule_70_Programs_to_Integrate_Highly_Adaptive_Cybersecurity_Services.jpg'),
(76, 'ads', 'Переход на дистанционный формат обучения', '<p>Дистант</p>', '2021-06-08', '5253socialprev.jpg'),
(77, 'news', 'Выпускной 4 классов', '<p>Выпускной</p>', '2021-06-08', '1369150926806159f59a5dae0d91.39924761-scaled.jpg'),
(78, 'news', 'Акция \"На острие науки\"', '<p>Акция</p>', '2021-06-08', '362977e0c7c7aa923eb60103cd5759bb3601.jpg'),
(79, 'news', 'Межрегиональный проект «Время собирать»', '<p>Проект</p>', '2021-06-08', '7600bacda849fd2126fe86596149212a3508.jpg'),
(80, 'news', 'Путевка в «Артек»', '<p>Путевка</p>', '2021-06-08', '751415635495855d31df9189e489.92904980.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `type`, `title`, `content`) VALUES
(12, 'many', 'Полезная информация', ''),
(14, 'one', 'Учебный процесс', '<p>Процесс</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `intro` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `back` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `title`, `intro`, `content`, `back`) VALUES
(8, 'ГТО', '<p style=\"text-align: center;\">Условия, степени, нормативные документы</p>', '<p>Информация об ГТО</p>', '8675GTO.png'),
(9, 'ЕГЭ и ОГЭ', '<p style=\"text-align: center;\">Расписание, порадяок проведения и многое другое</p>', '<p>Информация об ЕГЭ и ОГЭ</p>', '2777EGA.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subsections`
--

CREATE TABLE `subsections` (
  `id` int(11) NOT NULL,
  `ind` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `subsections`
--

INSERT INTO `subsections` (`id`, `ind`, `title`, `content`) VALUES
(10, 12, 'Роделям', '<p>Им</p>'),
(11, 12, 'Ученикам', '<p>Тоже им</p>'),
(12, 12, 'Условия приёма', '');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id_teach` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `achievements` text CHARACTER SET utf8 NOT NULL,
  `photo` text CHARACTER SET utf8 NOT NULL,
  `class` varchar(3) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id_teach`, `category`, `name`, `achievements`, `photo`, `class`) VALUES
(2, 2, 'Саменов Тимур Болатович', '', 'джигит', 'АВТ'),
(23, 4, 'Герасименко Андрей Олегович', '<p>Стаж 5 лет.</p>', '', '5А');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subsections`
--
ALTER TABLE `subsections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teach`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `subsections`
--
ALTER TABLE `subsections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
