-- Tabellenstruktur für Tabelle `employees`
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `max_hours_per_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
