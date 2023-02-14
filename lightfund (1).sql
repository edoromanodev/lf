-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 14, 2023 alle 07:23
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lightfund`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `country` varchar(21) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `country`, `id`) VALUES
('Edoardo', 'Romano', 'roo', '$2y$10$1PLyB31SLVk3galfk6', '', 1),
('', '', 'root', '$2y$10$aGrcAOwtFemsohr6GU', '', 2),
('edoardo', 'roman', 'root', '$2y$10$K9y1HtFw6TAVVp3PZv', '', 3),
('edoardo', 'romano', 'edo@edo.it', '$2y$10$XFx7kJ/hrp6E.bK3Ne', '', 4),
('ddawwd', 'dwwdaw', 'pina@pina.it', 'e05449d1524716428caa8f8ad', '', 5),
('dfd', 'f', 'e@e.it', 'edo', '', 6),
('cc', 'cc', 'cazzo@i.it', 'b7dba5a1bc3605a87b59ac814', '', 7),
('Edoardo', 'Romano', 'edoromano04@icloud.com', '57128a83bc6fa0e5625c6477b', 'Italy', 9),
('edoardo', 'dadaw', 'root@root.it', 'ed', 'Andorra', 10);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
