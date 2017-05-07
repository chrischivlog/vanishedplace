-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 07. Mai 2017 um 20:48
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(20, 'fasdfa', '2017-05-07 10:56:05', 1, 1),
(21, 'asdf', '2017-05-07 11:00:33', 1, 1),
(22, 'neu nachtifhtc\r\n', '2017-05-07 11:00:41', 1, 1),
(23, 'fdsfdsff\r\ndfjalsjkf\r\nslfdjakls\r\n', '2017-05-07 11:00:55', 1, 1),
(24, 'sadfasf', '2017-05-07 12:29:59', 1, 1),
(25, 'sadfasdf', '2017-05-07 12:32:26', 1, 1),
(26, 'neu Nachricht hier eingegeben mal sehn was man sonst noch so hier tippen kann', '2017-05-07 12:32:49', 1, 1),
(27, 'asdfsaf', '2017-05-07 12:38:07', 1, 1),
(28, 'neu Nachricht', '2017-05-07 13:00:16', 1, 1),
(29, 'Ã¤afw23e23#++323232##', '2017-05-07 14:40:13', 1, 1),
(30, '------', '2017-05-07 14:43:40', 1, 1),
(31, 'dasdq ed 11d------', '2017-05-07 14:45:04', 1, 1),
(32, 'adsf290f248903242r3wwfÃ¤sdfasdf', '2017-05-07 14:57:41', 1, 1),
(33, '    adsf 290 f 24890 32 42r3w wfÃ¤sdfasdf', '2017-05-07 14:58:13', 1, 1),
(34, '    adsf 290 f 24890 32 42r3w wfÃ¤sdfasdf.,', '2017-05-07 14:58:39', 1, 1),
(35, 'ew              html   fase aspww', '2017-05-07 15:00:28', 1, 1),
(36, 'http   stackoverflow.com questions 22590043 allow only numbers and letters in an input box or textarea', '2017-05-07 15:01:00', 1, 1),
(37, ' html blafassel  html ', '2017-05-07 15:04:19', 1, 1),
(38, '  POST   message   ', '2017-05-07 15:07:49', 1, 1),
(39, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labor', '2017-05-07 15:13:47', 1, 1),
(40, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et ju', '2017-05-07 15:14:35', 1, 1),
(41, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et ju', '2017-05-07 15:16:22', 1, 1),
(42, 'adsfasf', '2017-05-07 15:49:09', 1, 26),
(43, 'asdfasfasf', '2017-05-07 16:22:00', 1, 1),
(44, 'sadfasdfasf', '2017-05-07 16:22:10', 1, 26),
(46, 'gdfsg', '2017-05-07 18:36:45', 1, 27);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `mail_id` varchar(100) NOT NULL,
  `passwordenc` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `verified`, `mail_id`, `passwordenc`) VALUES
(1, 'madd', NULL, 1, '', '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703'),
(2, 'Maddl', NULL, NULL, '', '762f9360ee9a2b3a2d72642e9f2a1dc9a0609a19bba59eced28e8fbf6a879801'),
(3, 'chrisxhi', NULL, NULL, '', 'c5398de850945f5ae1c32c8f49387e1ffeb2512cfd4fcb36bc11f5d25ecfc899'),
(4, 'hacker', NULL, NULL, '', '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703'),
(5, '44', '123@123.de', 0, '', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(6, '1', 'asfiycxosdi', 0, '', '07123e1f482356c415f684407a3b8723e10b2cbbc0b8fcd6282c49d37c9c1abc'),
(7, 'mama', 'mama', 0, '', 'ccb711f092ac8ef1805b5045fab7e8a6189cb97ad04565e21b5fbcfc9e542e42'),
(8, 'testperson', 'testperson@gmail.com', 0, '', '07123e1f482356c415f684407a3b8723e10b2cbbc0b8fcd6282c49d37c9c1abc'),
(11, 'pop', 'kingofpop@web.de', 0, '', 'de70fa60cac227cbc13270a26ccde291af94df086959f0958122aedf154d90b5'),
(14, 'df', 'sdf', 0, '6b052f50318a1d509f28a7d1564b5334', '03042cf8100db386818cee4ff0f2972431a62ed78edbd09ac08accfabbefd818'),
(15, 'rfrsf', 'sdfs', 0, 'e55d6c652d810e56fa1e5d7c122a2b3e', '25ec6cf5d2f0dbbcfc8435900f2425fa030cfab2933f29529f30512a9685810c'),
(16, 'sdf', 'sdf', 0, '0d92de89a50bb323567d4f8ebbf14c74', '18ee24150dcb1d96752a4d6dd0f20dfd8ba8c38527e40aa8509b7adecf78f9c6'),
(17, 'tert', 'ertert', 0, 'ad58e9a6b1aba856a87362c4852c2439', '7aef927bb4a7d385eca91fc48be364441b27008f2c728c8698226edd6830d438'),
(18, '234', '234', 0, 'faaed0b8fa83121a2b9ce9fc472c0f03', '49cbe57e9503aa0c6d0cf1f88ec2b8e1dfb870c346fb9c82bc0489915108d75a'),
(19, '234234', '234234', 0, 'f1199a7440ab64776398b2747fea7238', 'abc81c516eddc2d735d222a09afd5d9cb18ad4089f851b70ba71e95584b6ce7c'),
(20, 'fwr32r2', 'erwer', 0, '7b93c0d91eaede0963b49f0b471e7f20', '244eac011af63a9080fb074eeab519f04e2de2686035ae4911982d376d32beb8'),
(21, '23eqwe', 'qwe', 0, 'f2f9bc9ee1b37a514a8cef5784b58ce0', 'ba11c8cb7117c7ac8a333668180c83be3ec82960e9e756f378006e42076ff81c'),
(22, 'e24', 'r', 0, 'edfc2cd7802a5d1c9cc021d5d6066670', '427c7404ddc3428711524ca6af6dc36957a02bf70617a72f658eb2e2a00d891f'),
(23, 'heino', 'heino@bla.de', 1, 'c61efcdf264096de41b8652dea1be4bc', '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703'),
(26, 'hubbabubba', 'moneisz@gnubis.de', 1, '19c95f672dc6dd5baaba7bd55e24e18a', '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703'),
(27, 'karl', 'asdf', 1, '160bde3dc13b8c13a2ff45c94178a0f6', '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703'),
(28, 'heinz', NULL, NULL, '', NULL),
(29, 'heinz2', NULL, NULL, '', NULL);

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
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
