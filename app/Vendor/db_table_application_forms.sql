-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Apr 2015 um 16:45
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `yatt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `application_forms`
--

CREATE TABLE IF NOT EXISTS `application_forms` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `time_tracking_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `is_closed` tinyint(4) NOT NULL,
  `new_start_time` datetime NOT NULL,
  `new_end_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `application_forms`
--

INSERT INTO `application_forms` (`id`, `employee_id`, `manager_id`, `time_tracking_id`, `comment`, `is_closed`, `new_start_time`, `new_end_time`) VALUES
(1, 1, 0, 3, 'vergessen auszuloggen', 0, '2015-04-01 03:00:00', '2015-04-01 06:00:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `application_forms`
--
ALTER TABLE `application_forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `application_forms`
--
ALTER TABLE `application_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

