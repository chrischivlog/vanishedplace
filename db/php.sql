-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 17. Apr 2017 um 20:08
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `php`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messages`
--

CREATE TABLE `messages` (
  `id_msg` int(11) NOT NULL,
  `msg` varchar(480) NOT NULL,
  `cre_msg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `min_msg` int(11) NOT NULL,
  `usr_cre_msg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `messages`
--

INSERT INTO `messages` (`id_msg`, `msg`, `cre_msg`, `min_msg`, `usr_cre_msg`) VALUES
(1, 'hallo', '2017-01-20 23:00:00', 10, 1),
(2, 'its just a test.', '2017-01-20 23:00:00', 10, 2),
(3, 'Ihre Nachricht hier...', '0000-00-00 00:00:00', 0, 0),
(4, 'Ihre Nachricht hier...', '0000-00-00 00:00:00', 0, 0),
(5, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et ju', '0000-00-00 00:00:00', 0, 0),
(6, 'Ihre Nachricht hier...', '0000-00-00 00:00:00', 0, 1),
(7, 'Ihre Nachricht hier...', '0000-00-00 00:00:00', 1, 1),
(8, 'Ihre Nachricht hier...', '2017-01-22 13:39:51', 1, 1),
(9, 'hallo madd...', '2017-01-22 13:52:24', 12, 3),
(10, 'hallo..', '2017-01-22 13:53:57', 1, 1),
(11, 'Ihre Nachricht hier...afdsgadsf<yc', '2017-01-22 13:55:28', 2, 1),
(12, 'Ihre Nachricht hier...afdsgadsf<yc', '2017-01-22 14:01:09', 2, 1),
(13, 'hier bin ich drüben im andern Zimmer', '2017-01-22 14:01:23', 1, 1),
(14, 'Juckt... ????', '2017-01-22 14:01:51', 1, 1),
(15, 'und hier noch ein geheimnis\r\n', '2017-01-22 14:55:54', 12, 1),
(16, 'Ihre Nachricht hier...', '2017-04-17 15:19:32', 0, 1),
(17, 'Ihre Nachricht hier...', '2017-04-17 16:02:57', 0, 1),
(18, 'Ihre Nachricht hier...', '2017-04-17 16:03:31', 0, 1),
(19, 'Ihre Nachricht hier...', '2017-04-17 16:03:43', 0, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `mail_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `email`, `verified`, `mail_id`) VALUES
(1, 'madd', 'bla', NULL, NULL, ''),
(2, 'Maddl', 'ggmith', NULL, NULL, ''),
(3, 'chrisxhi', 'ohoh', NULL, NULL, ''),
(4, 'hacker', 'bla', NULL, NULL, ''),
(5, '44', '123', '123@123.de', 0, ''),
(6, '1', 'lol', 'asfiycxosdi', 0, ''),
(7, 'mama', 'mama', 'mama', 0, ''),
(8, 'testperson', 'lol', 'testperson@gmail.com', 0, ''),
(11, 'pop', 'pop', 'kingofpop@web.de', 0, ''),
(14, 'df', 'sd', 'sdf', 0, '6b052f50318a1d509f28a7d1564b5334'),
(15, 'rfrsf', 'sdfsf', 'sdfs', 0, 'e55d6c652d810e56fa1e5d7c122a2b3e'),
(16, 'sdf', 'sdf', 'sdf', 0, '0d92de89a50bb323567d4f8ebbf14c74'),
(17, 'tert', 'ertert', 'ertert', 0, 'ad58e9a6b1aba856a87362c4852c2439'),
(18, '234', '234234', '234', 0, 'faaed0b8fa83121a2b9ce9fc472c0f03'),
(19, '234234', '252342', '234234', 0, 'f1199a7440ab64776398b2747fea7238'),
(20, 'fwr32r2', 'werwer', 'erwer', 0, '7b93c0d91eaede0963b49f0b471e7f20'),
(21, '23eqwe', 'qweqw', 'qwe', 0, 'f2f9bc9ee1b37a514a8cef5784b58ce0'),
(22, 'e24', 'eqwewq', 'r', 0, 'edfc2cd7802a5d1c9cc021d5d6066670');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `messages`
--
ALTER TABLE `messages`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
