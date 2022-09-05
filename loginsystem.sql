-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Czas generowania: 05 Wrz 2022, 14:16
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `loginsystem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Hubert12', 'Hubert@wp.pl', 'Super strona. Polecam'),
(2, 'Hubertos', 'hubert@wp.pl', 'Pozdrawiam'),
(3, 'ddd', 'dd@wp.pl', 'ewew'),
(4, 'Sebix', 'sebix@gmail.com', 'Super stronka'),
(5, 'Lol2', 'Lolowiec@wp.pl', 'Lol'),
(6, 'Seryniec', 'Seryn09@interia.pl', 'Lubie tą stronę'),
(7, 'dsf', 'sf@wp.pl', 'sf'),
(8, 'Sebix', 'sebix@gmail.com', 'Super strona'),
(9, 'Seryniec', 'Seryn09@interia.pl', 'Super strona'),
(10, 'fajnygosc', 'lubie@wp.pl', 'Polecam serdecznie'),
(11, 'stynkiec', 'stynkowiec@onet.pl', 'Superancka stroneczka'),
(17, 'PolaczekCebulaczek', 'cebula123@gmail.com', 'Wow'),
(18, '', 'cebula123@gmail.com', 'Wow'),
(19, '', 'ada@pl.pl', 'asdas'),
(20, 'sdad', 'ada@pl.pl', 'asdas'),
(21, 's', 's@wp.pl', 's'),
(22, 'Hubert', 'niewidomy@gmail.com', 'Super'),
(23, 'Query', 'query123@gmail.com', 'Polska Gurom'),
(24, 'zaqwsx', 'zaqwsx@interia.pl', 'Polecam z góry'),
(25, 'Siemson', 'siemson21@wp.pl', 'Super stroneczka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `emails`
--

INSERT INTO `emails` (`id`, `email`) VALUES
(1, 'lolowiec@wp.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(7, 'Hubert', 'Hubert', 'hubert@wp.pl', '$2y$04$H51UEiyHQ3kpR2KumyboAekQWhb6npMR.2.hJjwxt2qUTo.tYcrya'),
(8, 'Patryk', 'Lolowiec', 'patrykowski@gmail.com', '$2y$04$6QBSKYUZ9alZsHh.GS.p9eQR8AmMJQchKRIDN3QFvCWkmSDQDY5x2'),
(9, 'Dawid', 'Dawidowski', 'dawidzik@interia.pl', '$2y$04$U0mI4H0M3GRg1IlupEtDmOoXkM2s0bpFhPM19DBDfTh/kbemEpxFm'),
(10, 'Dominik', 'Jaki', 'Jakikowiec@wp.pl', '$2y$04$i7nX1v4bY4IP8o0z0hI9duuijrVpx6ZWEZ13Xc3XDj8lN4Kh0LSGm'),
(11, 'Dominik', 'Jaki', 'jakikowiecki@wp.pl', '$2y$04$64pmFBB7ecBjdULIionyhOm/NgtKaCVNDA5jXe7l5lgZuLdLwJt5u'),
(12, 'Piotr', 'Piotrowski', 'piotreczek01@gmail.com', '$2y$04$k0Ut3U7n7cxP56h0QoJiCeZGPJoEpoJQb2lteN612hPKGnSwh3uyq'),
(13, 'Hubert', 'Hejnowicz', 'hubert.hejnowicz010101@gmail.com', '$2y$04$8WJElIcdyLsoj8oF.XNw0.5J.RuzAnnejk7Ud0mGqakpDs5S/NHy.'),
(14, 'Patryk', 'Patrykowski', 'patryczek02@interia.pl', '$2y$04$y1b7fI1hqW8aDR/0eMh23eNZzkUE1mQqMd.E.8VuM/BEiRzepYhcK'),
(15, 'Hubert', 'Hubertowski', 'hubert00@gmail.com', '$2y$04$qNytKPnnAndHJTRpXsytIOcBk5.tQopBz0SyIamaEinMVSW25eC4O'),
(16, 'Pawe?', 'Lewandowski', 'pawelox@gmail.com', '$2y$04$HHkTGJByK/SNxE1a9Y2qiOGO/5oI8w90KXSgksKkE.TyZg4DvdzQy'),
(17, 'Jarek', 'Jalewski', 'jarek21@wp.pl', '$2y$04$THOWRShZaMTtFc4hS2Ft5eUbVVkG7sd79p7eR9lyeKdzmn2n4bwOi'),
(18, 'Jakub', 'Piotrowicz', 'Piotrewski@wp.pl', '$2y$04$hX.WQmC7RltfCjCXKw.fmOb1AIxeB1qiT/mJkQZKmwo4mgyMz9peq');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `phones`
--

INSERT INTO `phones` (`id`, `phone`) VALUES
(1, '3333333333'),
(2, '721574000'),
(3, '574000721'),
(4, '321031032'),
(5, '234414123'),
(6, '323423553'),
(7, '542345345'),
(8, '324242342'),
(9, '425464575'),
(10, '456890545'),
(11, '111111111'),
(12, '222222222'),
(13, '333333333'),
(14, '444444444'),
(15, '455555555');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`,`email`,`comment`) USING HASH,
  ADD UNIQUE KEY `id` (`id`,`name`,`email`,`comment`) USING HASH;

--
-- Indeksy dla tabeli `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
