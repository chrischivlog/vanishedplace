-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 12. Feb 2017 um 20:28
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

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
(13, 'hier bin ich drÃ¼ben im andern Zimmer', '2017-01-22 14:01:23', 1, 1),
(14, 'Juckt... ðŸ˜', '2017-01-22 14:01:51', 1, 1),
(15, 'und hier noch ein geheimnis\r\n', '2017-01-22 14:55:54', 12, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `USERS`
--

CREATE TABLE `USERS` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `USERS`
--

INSERT INTO `USERS` (`user_id`, `name`, `password`, `email`, `verified`) VALUES
(1, 'madd', 'bla', NULL, NULL),
(2, 'Maddl', 'ggmith', NULL, NULL),
(3, 'chrisxhi', 'ohoh', NULL, NULL),
(4, 'hacker', 'bla', NULL, NULL),
(5, '44', '123', '123@123.de', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indizes für die Tabelle `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `messages`
--
ALTER TABLE `messages`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT für Tabelle `USERS`
--
ALTER TABLE `USERS`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
