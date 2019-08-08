-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2019 г., 22:37
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aspid007_dragon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hot`
--

CREATE TABLE `hot` (
  `id` int(11) NOT NULL,
  `name` text,
  `price` int(11) DEFAULT NULL,
  `ves` int(11) DEFAULT NULL,
  `sostav` text,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hot`
--

INSERT INTO `hot` (`id`, `name`, `price`, `ves`, `sostav`, `photo`) VALUES
(1, 'Филадельфия фрай', 250, 240, 'Рис, лосось, угорь, огурец, японский кляр, сливочный сыр', 'https://pp.userapi.com/c848624/v848624125/142117/oX6Ef6QObIk.jpg'),
(2, 'Рагу фрай', 220, 230, 'Рис, перец, томаты, огурец, салат, плавленный сыр, японский кляр, сливочный сыр', 'https://pp.userapi.com/c848624/v848624125/14211e/lWW94fu-E2s.jpg'),
(3, 'Норвегия фрай', 220, 230, 'Рис, копчённый лосось, огурец, салат, японский кляр, сливочный сыр', 'https://pp.userapi.com/c848624/v848624125/142125/vRHItTFEdos.jpg'),
(4, 'Эби фрай', 230, 230, 'Рис, креветки, огурец, салат, японский кляр, соус спайс', 'https://pp.userapi.com/c848624/v848624125/14212c/NxcjnEn0oiU.jpg'),
(5, 'Чикен фрай', 240, 200, 'Рис, курица, ананасы, сливочный сыр, соус масаго', 'https://pp.userapi.com/c848624/v848624125/142133/fRZjrlU5_R0.jpg'),
(6, 'Маки фрай', 160, 130, 'Рис, японский кляр', 'https://pp.userapi.com/c848624/v848624125/14213b/MpWV6hEHJZc.jpg'),
(7, 'Унаги фрай', 240, 230, 'Рис, сливочный сыр, угорь, огурец, японский кляр', 'https://pp.userapi.com/c848624/v848624125/142143/_xowYqqkaGc.jpg'),
(8, 'Бекон фрай', 230, 240, 'Рис, бекон, курица, перец, томаты, плавленный сыр, японский кляр, сливочный сыр', 'https://pp.userapi.com/c848624/v848624125/14214a/Ta-CoaV7bbM.jpg'),
(9, 'Креветки темпура', 180, 120, 'королевские креветки, сухари панко, японский кляр', 'https://pp.userapi.com/c836426/v836426365/24284/p8-c-6Z97H0.jpg'),
(10, 'Лосось темпура', 180, 120, 'Лосось, сухари панко, японский кляр', 'https://pp.userapi.com/c836426/v836426365/24284/p8-c-6Z97H0.jpg'),
(11, 'ВОК', 100, 220, 'Пшеничная/ гречневая каша, лапша ВОК', 'https://pp.userapi.com/c836426/v836426365/24292/b48NvJVVnxE.jpg'),
(12, 'ВОК с рисом', 100, 220, 'Рис с чесноком, перец, лук, морковь, огурец, чеснок', 'https://pp.userapi.com/c836426/v836426365/24299/pm4Kt6lnJD8.jpg'),
(13, 'Картофель фри', 110, 150, 'Картофель фри, соус барбекю', 'https://pp.userapi.com/c604630/v604630365/3982b/dfaeSQiznms.jpg'),
(14, 'Куриные наггетсы', 150, 150, 'Курица, соус', 'https://pp.userapi.com/c841028/v841028706/13fb9/caUkJlhRlRM.jpg'),
(15, 'Картофкльные шарики с соусом барбекю', 120, 150, '20(шт) - Картофель, барбекю', 'https://pp.userapi.com/c830709/v830709570/1596fc/8PC-OOWBQy4.jpg'),
(16, 'Рисовые шарики фрай', 130, 170, '8(шт) - Рис, японский кляр', 'https://pp.userapi.com/c849228/v849228570/3f654/2LSaBx1BybE.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `korzina`
--

CREATE TABLE `korzina` (
  `id` int(11) NOT NULL,
  `nameperson` text,
  `phone` int(11) DEFAULT NULL,
  `adres` text,
  `tovar` text,
  `summa` int(11) DEFAULT NULL,
  `mail` text,
  `comment` text,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `korzina`
--

INSERT INTO `korzina` (`id`, `nameperson`, `phone`, `adres`, `tovar`, `summa`, `mail`, `comment`, `date`) VALUES
(6, 'sdfsdf', 4545, 'ывпывап', 'Сет Фантазия (4) шт.;Гурман (7) шт.', 7410, 'dfhfg', 'авпрвапоо', '2019-06-08 11:46:58'),
(7, 'dffdgh', 34623463, 'fghfdgh', 'Сет Фантазия (4) шт.;Гурман (1) шт.;Сет Голливуд (5) шт.', 7110, 'dfhdfgh', 'fgjdfgj', '2019-06-08 13:25:59'),
(8, 'Вася', 2147483647, 'Сарапул', 'Бекон фрай (3) шт.;Куриные наггетсы (6) шт.', 5880, 'kostya.kazakov.1999@inbox.ru', 'Бла бла', '2019-06-11 17:34:26'),
(64, 'sxvsd', 4545, 'dfgh', 'Сет Лас Вегас (1) шт.;Сет Золтой Дракон (1) шт.;Сет Большой (1) шт.;Острый сет Самурай (1) шт.', 3780, 'dfhgdfgh', 'dfgh', '2019-06-12 06:06:04'),
(86, 'выап', 1212, 'ыва', 'Нежный (1) шт.', 690, 'ыва', 'ывы', '2019-06-12 07:24:19'),
(87, 'вв', 322, 'ывмы', 'Нежный (1) шт.', 690, 'вмыв', 'ывм', '2019-06-12 07:24:41'),
(89, 'уцаф', 223, 'ывпыпв', 'Дракон (1) шт.;Блек (1) шт.;Нежный (1) шт.', 690, 'вы', 'ывп', '2019-06-12 07:25:33'),
(90, 'уцаф', 223, 'ывпыпв', 'Дракон (1) шт.;Блек (1) шт.;Нежный (1) шт.', 690, 'вы', 'ывп', '2019-06-12 07:26:38'),
(94, 'ваи', 3333, 'апапт', 'Сет Лас Вегас (1) шт.Филадельфия (1) шт.;Тай ролл (13) шт.', 3730, 'ваива', 'авптап', '2019-06-12 07:56:06');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` text,
  `photo` text,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `text`, `photo`, `date`) VALUES
(1, 'Заезжайте за вашим заказом к нам в офис и получите скидку 10%', 'https://pp.userapi.com/c852120/v852120718/7f66e/HK3iiypuLZk.jpg', '2019-06-07 07:16:10'),
(2, 'Закажи 5 роллов подряд без повтора и получи скидку на заказ 45%', 'https://pp.userapi.com/c852128/v852128442/12b1f8/V380Z46k5t0.jpg', '2019-06-07 06:13:29'),
(3, 'У тебя день рождение ?! Тогда у тебя есть возможность получить скидку 10% 2 дня до дня рожденья и 2 дня после ', 'https://pp.userapi.com/c855624/v855624075/5f223/9he1zuZX7lY.jpg', '2019-06-07 01:32:17'),
(4, 'Пенсионерам скидка 10% при заказе от 600 рублей ', 'https://pp.userapi.com/c852120/v852120718/7f67e/qZKVz8mEG0c.jpg', '2019-06-18 01:27:18');

-- --------------------------------------------------------

--
-- Структура таблицы `otzivi`
--

CREATE TABLE `otzivi` (
  `id` int(11) NOT NULL,
  `name` text,
  `mail` text,
  `message` text,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otzivi`
--

INSERT INTO `otzivi` (`id`, `name`, `mail`, `message`, `date`) VALUES
(1, 'dfvsdf    ', 'dfsdf    ', 'Молодцы ', '2019-06-07 16:02:24'),
(9, 'Костя  ', 'Казаков  ', 'Супер  пупер ', '2019-06-09 08:27:00'),
(10, 'пп', 'папр', 'ррр', '2019-06-10 14:19:19');

-- --------------------------------------------------------

--
-- Структура таблицы `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `name` text,
  `price` int(11) DEFAULT NULL,
  `ves` int(11) DEFAULT NULL,
  `sostav` text,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rol`
--

INSERT INTO `rol` (`id`, `name`, `price`, `ves`, `sostav`, `photo`) VALUES
(1, 'Аляска    ', 240, 250, 'Рис, креветки, лосось, икра масаго, огурец, сливочный сыр     ', 'https://pp.userapi.com/c830108/v830108491/91ce0/EwKR-DsDsb0.jpg    '),
(2, 'Дракон', 260, 225, 'Рис, угорь, лосось, огурец, соус унаги, сливочный сыр', 'https://pp.userapi.com/c836426/v836426365/24415/4Jqe6SpTMRg.jpg'),
(3, 'Калифорния с лососем', 240, 230, 'Рис, лосось, икра тобико, огурец, сливочный сыр', 'https://pp.userapi.com/c836426/v836426365/24423/yu6-v_j85lE.jpg'),
(4, 'Калифорния', 220, 220, 'Рис, снежный краб, икра тобико, огурец, соус масаго', 'https://pp.userapi.com/c840129/v840129491/81120/zULMlg_u4rI.jpg'),
(5, 'Ролл с беконом', 210, 230, 'Рис, бекон, курица, перец, огурец, сливочный сыр', 'https://pp.userapi.com/c841438/v841438491/74835/E-yjN88xQMM.jpg'),
(6, 'Тай ролл', 220, 220, 'Рис, лосось, огурец, соус спайс, сливочный сыр', 'https://pp.userapi.com/c834201/v834201168/d8dd3/asK0z-pPNpM.jpg'),
(7, 'Филадельфия с угрём', 250, 230, 'Рис, лосось, угорь, огурец, сливочный сыр', 'https://pp.userapi.com/c836426/v836426365/24469/jHtp1ecc8dg.jpg'),
(8, 'Филадельфия', 220, 210, 'Рис, лосось, огурец, сливочный сыр', 'https://pp.userapi.com/c836426/v836426365/24470/JsUzk3Mx_4s.jpg'),
(9, 'Красный дракон', 250, 230, 'Рис, лосось, угорь, сливочный сыр, огурец,красная тобико, соус унаги, кунжут', 'https://pp.userapi.com/c837432/v837432365/3382f/QLFUnZ5g44I.jpg'),
(10, 'Филадельфия люкс', 250, 220, 'Рис, лосось, угорь, салат, сливочный сыр, красная тобико', 'https://pp.userapi.com/c837432/v837432365/33838/5UZ7u9u5r44.jpg'),
(11, 'Нежный', 220, 210, 'Рис, плавленный сыр, огурец, сливочный сыр, копчённый лосось ', 'https://pp.userapi.com/c824204/v824204168/d2fcb/r0cHtpQWRqo.jpg'),
(12, 'Блек', 210, 210, 'Рис,огурец, сливочный сыр, бекон, икра тобико', 'https://pp.userapi.com/c824202/v824202168/d3bde/qGrkdTeZ3qY.jpg'),
(13, 'Коррида', 220, 200, 'Рис, сливочный сыр, салат, снежный краб, перец, огурец, икра тобико', 'https://pp.userapi.com/c836632/v836632365/3c790/StLyrh2Hxh0.jpg'),
(14, 'Вега ролл', 180, 215, 'Рис, томаты, огурец, перец, салат, сливочный сыр', 'https://pp.userapi.com/c831208/v831208168/97e83/xIEBfrfv4NM.jpg'),
(15, 'Катана', 250, 200, 'Рис, угорь, лосось, икра тобико, сливочный сыр', 'https://pp.userapi.com/c841028/v841028706/13f30/pWiO3UFGefY.jpg'),
(16, 'Изумруд', 220, 220, 'Рис, огурец, сливочный сыр, копчёный лосось, унаги соус, кунжут', 'https://pp.userapi.com/c841628/v841628168/72985/-mHZfdV2BMc.jpg'),
(17, 'Невада', 210, 200, 'Рис, плавленный сыр, копчённый лосось, огурец, сливочный сыр ', 'https://pp.userapi.com/c621700/v621700168/750ad/rfGuhOuzqzg.jpg'),
(18, 'Гавайский', 260, 205, 'Рис, ананасы, угорь, курица, соус унаги, сливочный сыр', 'https://pp.userapi.com/c841028/v841028706/13f45/FUwFaJrFusY.jpg'),
(19, 'Детройт', 230, 205, 'Рис, угорь, чука, соус унаги, сливочный сыр', 'https://pp.userapi.com/c831109/v831109168/99fcc/c4BK1mWsbrk.jpg'),
(20, 'Цезарь', 210, 220, 'Рис, курица, перец, томаты, салат, японский майонез', 'https://pp.userapi.com/c840639/v840639168/5e17f/9OqQGK4dRxY.jpg'),
(21, 'Нежный лосось', 220, 200, 'Рис, лосось, кунжут, сливочный сыр', 'https://pp.userapi.com/c841433/v841433605/6e96e/X21im_OZSGk.jpg'),
(22, 'Калипсо', 220, 220, 'Рис, сливочный сыр, ананас, копчёная курица, красная икра тобико', 'https://pp.userapi.com/c840226/v840226605/89db0/kaXkC691-QI.jpg'),
(23, 'Бонито', 220, 200, 'Рис, стружка тунца, тунец, огурец, сливочный сыр', 'https://pp.userapi.com/c830309/v830309168/94ed4/tNFu7-M-89c.jpg'),
(24, 'Бонито с угрём', 220, 200, 'Рис, стружка тунца угорь сливочный сыр, огурец', 'https://pp.userapi.com/c850020/v850020904/40f16/YCoR8gfyKHQ.jpg'),
(25, 'Вега ролл', 180, 215, 'Рис, томаты, огурец, перец, салат, сливочный сыр', 'https://pp.userapi.com/c854124/v854124982/2fbe8/yC74qIz-xbo.jpg'),
(26, 'Унаги спайси', 260, 210, 'Рис, угорь, огурец, сливочный сыр, икра тобико красная, соус спайси', 'https://pp.userapi.com/c604630/v604630365/39840/Lqyjt-vvqlc.jpg'),
(27, 'Чикен спайси', 220, 210, 'Рис, коп.курица, огурец, сливочный сыр, соус спайси, кунжут', 'https://pp.userapi.com/c604630/v604630365/39847/_qDII5x5RaY.jpg'),
(28, 'Маки спайси', 130, 110, 'С : угрём, лососем, тунцом, креветкой, курицей, копчёным лососем. + Соус спайси', 'https://pp.userapi.com/c848732/v848732698/70c93/rUjoGmakbKI.jpg'),
(29, 'Искушение', 260, 235, 'Рис, огурец, креветка, сливочный сыр, кунжут, икра тобико, лосось, соус спайси', 'https://pp.userapi.com/c846522/v846522570/b3584/aXocDDPRcc0.jpg'),
(30, 'Роллы спайси', 220, 190, '1)С угрём\r\n2)С лососем, с тунцом, с крабом\r\n', 'https://pp.userapi.com/c848620/v848620125/136464/nKp-6Yur1YI.jpg'),
(31, 'Жареный с курицей', 160, 210, 'Рис, курица копч, соус спайси, огурец, японский кляр', 'https://pp.userapi.com/c850732/v850732338/54e03/Jm5_GLtYIrM.jpg'),
(32, 'Юми фрай', 180, 230, 'Рис, мясо краба, слив.сыр, томат, японский кляр', 'https://pp.userapi.com/c849136/v849136293/16ceed/L8xnoFucOUY.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `set`
--

CREATE TABLE `set` (
  `id` int(11) NOT NULL,
  `name` text,
  `price` int(11) DEFAULT NULL,
  `ves` int(11) DEFAULT NULL,
  `sostav` text,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `set`
--

INSERT INTO `set` (`id`, `name`, `price`, `ves`, `sostav`, `photo`) VALUES
(1, 'Сет Фантазия       ', 890, 1470, 'Красный дракон, Калипсо, Филадельфия, Ролл спайси с крабом, Бекон Фрай, Эби Фрай       ', 'https://pp.userapi.com/c846020/v846020667/dba72/kNqcB79M9nM.jpg       '),
(2, 'Сет Лас Вегас', 650, 1250, 'Бонито, Катана, Норвегия фрай, Гавайский, Вега ролл,', 'https://pp.userapi.com/c846123/v846123533/16c66a/9M4psIFNGMs.jpg  '),
(3, 'Гурман', 550, 1070, 'Изумруд, Филадельфия, Ролл спайси с лососем, Ролл с беконом, Суши с угрём, Суши с лососем', 'https://pp.userapi.com/c846123/v846123533/16c6b2/Op8jUyUTYxQ.jpg'),
(4, 'Сет Золтой Дракон', 780, 840, 'Дракон, Детройт, Гавайский, Гункан с угрём спайс, Маки с угрём, Суши с угрём', 'https://pp.userapi.com/c846123/v846123533/16c6c4/Mf294CSDRhU.jpg'),
(5, 'Сет Большой', 1750, 2000, 'Дракон, Филадельфия, Калифорния, Цезарь, Нежный лосось, Бекон Фрай, Эби Фрай, Маки с лососем, Маки с огурцом, Маки с курицей, Гункан с окунем спайс, Гункан с тунцом спайс, Суши с лососем, суши с тунцом  ', 'https://pp.userapi.com/c841028/v841028706/13f6f/FZLzO7BZUog.jpg'),
(6, 'Ланч Сет Голливуд', 380, 540, 'Цезарь,Невада, Нежный лосось, Чикен фрай, Бекон фрай', 'https://pp.userapi.com/c846123/v846123533/16c658/SGb8-n4Ur9U.jpg'),
(7, 'Ланч Сет Самурай', 380, 460, 'Унаги Спайси, Чикен Спайси, Спайси с крабом. Маки: Спайси с курицей, с лососем.\r\nГунканы: курица спайси, лосось спайси', 'https://pp.userapi.com/c846123/v846123533/16c685/R7cVaKIM-xQ.jpg'),
(8, 'Ланч фрай сет', 390, 460, 'Бекон фрай, Эби фрай, Рагу фрай, Норвегия фрай', 'https://pp.userapi.com/c846123/v846123533/16c68e/dRu_AhR9zY0.jpg'),
(9, 'Маки фрай сет', 380, 390, 'Маки фрай с лососем, с курицей , с креветкой', 'https://pp.userapi.com/c837432/v837432365/33826/s4g1MxhSEB4.jpg'),
(10, 'Сет Классический', 320, 560, 'Маки: с лососем, с огурцом, с курицей, с угрём, с креветкой', 'https://pp.userapi.com/c855632/v855632675/2fad5/hosWcrCokDg.jpg'),
(11, 'Сет Голливуд', 600, 1070, 'Цезарь, Невада, Нежный лосось, Чикен фрай, Бекон фрай', 'https://pp.userapi.com/c855632/v855632675/2fade/L0__QbJ_Jaw.jpg'),
(12, 'Без названия', 520, 1100, 'Бонито, Ролл с беконом, Вега ролл, Нежный ролл, Тай ролл', 'https://pp.userapi.com/c855632/v855632675/2fae5/IRvH5WeIy5g.jpg'),
(13, 'Зимняя сказка', 600, 1350, 'Нежный лосось, Калипсо, Бонито с угрём, Бекон фрай, Рагу фрай', 'https://pp.userapi.com/c855632/v855632675/2faee/txIRYELwGdU.jpg'),
(14, 'Фаворит', 450, 940, 'Унаги Фрай, Детройт, Чикен Спайси, Мак с огурцом, Суши с угрём, Суши с лососем', 'https://pp.userapi.com/c855632/v855632675/2faf5/GrhPHPtCfwQ.jpg'),
(15, 'Фрай сет', 600, 920, 'Бекон фрай, Рагу фрай, Эби фрай, Норвегия фрай', 'https://pp.userapi.com/c855632/v855632675/2fafe/HT4k_43NNbE.jpg'),
(16, 'Острый сет Самурай', 600, 910, 'Унаги Спайси, Чикен Спайси, Спайси с крабом. Маки: Спайси с курицей, с лососем.\r\nГунканы: курица спайси, лосось спайси', 'https://pp.userapi.com/c855632/v855632675/2fb07/wgLLggfplsk.jpg'),
(17, 'Сет Популярный ', 450, 950, 'Унаги Спайси, Филадельфия, Нежный лосось, Маки лосось, Маки с огурцом', 'https://pp.userapi.com/c855632/v855632675/2fb10/63vLEmwCbG0.jpg'),
(18, 'Сет Абсолют', 520, 1240, 'Калифорния лайт, Филадельфия лайт, Жаренный с курицей, Жемчужина, Эби Фрай', 'https://pp.userapi.com/c854024/v854024675/2fb56/8HWoo9ED9Bg.jpg'),
(19, 'Мини-драк сет', 500, 740, 'Филадельфия, Дракон, Маки с угрём, Маки с лососем, Суши с угрём, Суши с лососем', 'https://pp.userapi.com/c854024/v854024675/2fb5f/3zwBf0_fWqk.jpg'),
(20, 'Сет Фламинго', 700, 1430, 'Цезарь, Жемчужина, Венеция, Калипсо, Бекон Фрай, Мак Фрай с угрём', 'https://pp.userapi.com/c845524/v845524675/1fb636/1jBYfhm6cac.jpg'),
(21, 'Сет Малибу', 520, 1280, 'Вега ролл, Блек ролл, Юми Фрай, Калифорния лайт, Жареный с курицей', 'https://pp.userapi.com/c845524/v845524675/1fb63f/ITkL5K9u-Nk.jpg'),
(22, 'Сет Хит', 500, 1250, 'Венеция, Жемчужина, Фараон, Ролл с беконом, Жареный с курицей', 'https://pp.userapi.com/c845524/v845524675/1fb648/5TQSopspSVA.jpg'),
(23, 'Сет Палитра', 500, 990, 'Нежный лосось, Филадельфия лайт, Унаги спайси, Мак с сыром с зел. икрой, Мак с сыром с красной икрой', 'https://pp.userapi.com/c856032/v856032611/124a9/gs2ncCBaiyk.jpg'),
(24, 'Классический с сыром  ', 400, 700, 'Аналогично классичесокому сету , только с сыром  ', 'https://pp.userapi.com/c845322/v845322675/1fe145/E5G_iMFqT-w.jpg  '),
(25, 'Сет Вкусняшка  ', 450, 1150, 'Бостон, Фила с чукой, Париж, Юми Фрай, Мак с огурцом  ', 'https://pp.userapi.com/c846320/v846320508/1539b9/HsQOXWpLaxA.jpg  ');

-- --------------------------------------------------------

--
-- Структура таблицы `sushi`
--

CREATE TABLE `sushi` (
  `id` int(11) NOT NULL,
  `name` text,
  `price` int(11) DEFAULT NULL,
  `ves` int(11) DEFAULT NULL,
  `sostav` text,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sushi`
--

INSERT INTO `sushi` (`id`, `name`, `price`, `ves`, `sostav`, `photo`) VALUES
(1, 'Гункан с креветкой спайс', 60, 40, '1(шт) - Рис, креветка, соус спайс', 'https://pp.userapi.com/c836426/v836426365/242e6/9NiHvZzpt1k.jpg'),
(2, 'Гункан с креветкой ', 60, 40, '1(шт) - Рис, креветка, соус спайс', 'https://pp.userapi.com/c836426/v836426365/242e6/9NiHvZzpt1k.jpg'),
(3, 'Гункан с курицей спайс', 60, 40, '1(шт) -Рис, курица, соус спайс', 'https://pp.userapi.com/c836426/v836426365/242ed/ETA2cT8CHqU.jpg'),
(4, 'Гункан с лососем', 60, 40, '1(шт) - Рис, лосось, соус спайс', 'https://pp.userapi.com/c836426/v836426365/242f4/qqC4I_KWhPk.jpg'),
(5, 'Гункан с тунцом спайс', 60, 40, '1(шт) - Рис, тунец, соус спайс', 'https://pp.userapi.com/c836426/v836426365/24302/RUv-7p5Yy5E.jpg'),
(6, 'Гункан с угрём спайс', 60, 40, '1(шт) - Рис, угорь, соус спайс', 'https://pp.userapi.com/c836426/v836426365/24309/BLO1vP3A0CU.jpg'),
(7, 'Суши с креветками', 50, 35, '1(шт) - Рис, креветка ', 'https://pp.userapi.com/c836426/v836426365/24317/JBLJbmeXUyI.jpg'),
(8, 'Суши с лососем', 50, 35, '1(шт) -  Рис , Лосось', 'https://pp.userapi.com/c836426/v836426365/2431e/YVKcvhAmc7s.jpg'),
(9, 'Суши с тунцом', 50, 35, '1(шт) - Рис, тунец', 'https://pp.userapi.com/c836426/v836426365/24325/7URzqUQn1QA.jpg'),
(10, 'Суши с угрём', 50, 40, '1(шт) - Рис, соус унаги, кунжут', 'https://pp.userapi.com/c836426/v836426365/2432c/qIMAoL8XbNM.jpg'),
(11, 'Маки с огурцом', 80, 110, '8(шт) - огурец, чука, перец', 'https://pp.userapi.com/c836426/v836426365/242d1/XZho3gIqZXw.jpg'),
(12, 'Маки с лососем', 100, 110, '8(шт) - Копчёный лосось, тунец, креветки, лосось, угорь, курица', 'https://pp.userapi.com/c841028/v841028706/13fae/hl3tF9XrblE.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin  ', 'ad1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hot`
--
ALTER TABLE `hot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `korzina`
--
ALTER TABLE `korzina`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otzivi`
--
ALTER TABLE `otzivi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `set`
--
ALTER TABLE `set`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sushi`
--
ALTER TABLE `sushi`
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
-- AUTO_INCREMENT для таблицы `hot`
--
ALTER TABLE `hot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `korzina`
--
ALTER TABLE `korzina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `otzivi`
--
ALTER TABLE `otzivi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `set`
--
ALTER TABLE `set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `sushi`
--
ALTER TABLE `sushi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
