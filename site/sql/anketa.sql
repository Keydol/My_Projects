-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Квт 09 2019 р., 12:38
-- Версія сервера: 10.1.36-MariaDB
-- Версія PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `anketa`
--

-- --------------------------------------------------------

--
-- Структура таблиці `address_and_phone_information`
--

CREATE TABLE `address_and_phone_information` (
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `Street_address` varchar(50) NOT NULL,
  `ZIP_code` varchar(10) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `address_and_phone_information`
--

INSERT INTO `address_and_phone_information` (`id`, `id_p`, `Street_address`, `ZIP_code`, `Phone_number`, `Email_address`) VALUES
(1, 1, 'Полуботка 5, кв.2', '78203', '+380960426065', 'stockiiarsen@gmail.com'),
(2, 2, 'Млинська 28', '78203', '+380681586027', 'galinaakkerman@gmail.com'),
(3, 3, 'Моцарта 14', '78209', '+380589473565', 'paliychuk.yana@gmail.com'),
(4, 4, 'Лесі Українки', '78302', '+380688002985', 'andrewrozvadovskyi491@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблиці `anketa_date`
--

CREATE TABLE `anketa_date` (
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `Anketadate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `anketa_date`
--

INSERT INTO `anketa_date` (`id`, `id_p`, `Anketadate`) VALUES
(1, 1, '2019-04-07'),
(2, 2, '2019-04-07'),
(3, 3, '2019-04-07'),
(4, 4, '2019-04-09');

-- --------------------------------------------------------

--
-- Структура таблиці `personal_information1`
--

CREATE TABLE `personal_information1` (
  `id` int(11) NOT NULL,
  `Surnames` varchar(30) NOT NULL,
  `Given_names` varchar(30) NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `Marital_status` varchar(30) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `City_of_birth` varchar(30) NOT NULL,
  `Country_of_birth` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `personal_information1`
--

INSERT INTO `personal_information1` (`id`, `Surnames`, `Given_names`, `Sex`, `Marital_status`, `Date_of_birth`, `City_of_birth`, `Country_of_birth`) VALUES
(1, 'Стоцький', 'Арсен', 'М', 'Одружений', '2001-03-02', 'Коломия', 'Україна'),
(2, 'Сайко', 'Галина', 'Ж', 'Неодружена', '2001-07-30', 'Коломия', 'Україна'),
(3, 'Палійчук', 'Яна', 'Ж', 'Одружена', '2001-01-18', 'Снятин', 'Україна'),
(4, 'Розвадовський', 'Андрій', 'М', 'не одружений', '2000-09-02', 'Хімчин', 'Україна');

-- --------------------------------------------------------

--
-- Структура таблиці `personal_information2`
--

CREATE TABLE `personal_information2` (
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Identification_number` varchar(30) NOT NULL,
  `Document_number` varchar(30) NOT NULL,
  `Issuance_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `personal_information2`
--

INSERT INTO `personal_information2` (`id`, `id_p`, `Nationality`, `Identification_number`, `Document_number`, `Issuance_date`) VALUES
(1, 1, 'Українець', '203040402104', 'АР423543', '2020-09-19'),
(2, 2, 'Українка', '49235839402', 'КО423943', '2021-08-20'),
(3, 3, 'Українка', '58937485834', 'ТР54934234', '2020-07-07'),
(4, 4, 'українець', '5489485120', '210748941', '2015-01-19');

-- --------------------------------------------------------

--
-- Структура таблиці `travel_information`
--

CREATE TABLE `travel_information` (
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `arrival_country` varchar(30) NOT NULL,
  `type_of_visa` varchar(30) NOT NULL,
  `date_of_arrival` date NOT NULL,
  `arrival_city` varchar(30) NOT NULL,
  `refused_a_visa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `travel_information`
--

INSERT INTO `travel_information` (`id`, `id_p`, `arrival_country`, `type_of_visa`, `date_of_arrival`, `arrival_city`, `refused_a_visa`) VALUES
(1, 1, 'Угорщина', 'Робоча', '2019-08-09', 'Будапешт', 'Ні'),
(2, 2, 'Росія', 'Навчальна', '2020-01-19', 'Санкт-Петербург', 'Ні'),
(3, 3, 'Норвегія', 'Бізнес', '2019-09-01', 'Осло', 'Так'),
(4, 4, 'Швейцарія', 'Туристична', '2019-07-16', 'Берн', 'Ні');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `address_and_phone_information`
--
ALTER TABLE `address_and_phone_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_p` (`id_p`);

--
-- Індекси таблиці `anketa_date`
--
ALTER TABLE `anketa_date`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_p` (`id_p`);

--
-- Індекси таблиці `personal_information1`
--
ALTER TABLE `personal_information1`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `personal_information2`
--
ALTER TABLE `personal_information2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_p` (`id_p`);

--
-- Індекси таблиці `travel_information`
--
ALTER TABLE `travel_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_p` (`id_p`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `address_and_phone_information`
--
ALTER TABLE `address_and_phone_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `anketa_date`
--
ALTER TABLE `anketa_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `personal_information1`
--
ALTER TABLE `personal_information1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `personal_information2`
--
ALTER TABLE `personal_information2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `travel_information`
--
ALTER TABLE `travel_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `address_and_phone_information`
--
ALTER TABLE `address_and_phone_information`
  ADD CONSTRAINT `address_and_phone_information_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `personal_information1` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `anketa_date`
--
ALTER TABLE `anketa_date`
  ADD CONSTRAINT `anketa_date_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `personal_information1` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `personal_information2`
--
ALTER TABLE `personal_information2`
  ADD CONSTRAINT `personal_information2_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `personal_information1` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `travel_information`
--
ALTER TABLE `travel_information`
  ADD CONSTRAINT `travel_information_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `personal_information1` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
