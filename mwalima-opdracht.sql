-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 07 okt 2015 om 13:30
-- Serverversie: 5.6.26
-- PHP-versie: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwalima-opdracht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `thumbs`
--

CREATE TABLE IF NOT EXISTS `thumbs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `thumbs`
--

INSERT INTO `thumbs` (`id`, `name`, `thumb`, `img`) VALUES
(1, 'Jaan-Mobach-2keivormen', 'thumbs/Jaan-Mobach-2keivormen1.png', 'img/Jaan-Mobach-2keivormen1.JPG'),
(2, 'mobach_vaas_bloemen', 'thumbs/mobach_vaas_bloemen.png', 'img/mobach_vaas_bloemen.jpg'),
(3, 'Jaan-Mobach-keivormrond2', 'thumbs/Jaan-Mobach-keivormrond2.png', 'img/Jaan-Mobach-keivormrond1.JPG'),
(4, 'Jaan-Mobach-keivormrond2', 'thumbs/Jaan-Mobach-kleivormklein1.png', 'img/Jaan-Mobach-kleivormklein1.JPG'),
(5, 'Jaan-Mobach-tuitvaas3', 'thumbs/Jaan-Mobach-tuitvaas3.png', 'img/Jaan-Mobach-tuitvaas3.JPG'),
(6, 'mobach_kamo_kleinluster', 'thumbs/mobach_kamo_kleinluster.png', 'img/mobach_kamo_kleinluster.jpg'),
(7, 'Jaan-Mobach-vaasblauw1', 'thumbs/Jaan-Mobach-vaasblauw1.png', 'img/Jaan-Mobach-vaasblauw3.JPG'),
(8, 'Jaan-Mobach-vaasje1', 'thumbs/Jaan-Mobach-vaasje1.png', 'img/Jaan-Mobach-vaasje1.JPG'),
(9, 'mobach_band2', 'thumbs/mobach_band2.png', 'img/mobach_band.jpg'),
(10, 'mobach_bloempot', 'thumbs/mobach_bloempot.png', 'img/mobach_bloempot.jpg'),
(11, 'mobach_medaillonband4', 'thumbs/mobach_medaillonband4.png', 'img/mobach_medaillonband.jpg'),
(12, 'mobach_romeinseoren', 'thumbs/mobach_romeinseoren.png', 'img/mobach_romeinseoren.jpg'),
(13, 'mobach_sgrafittogeel3', 'thumbs/mobach_sgrafittogeel3.png', 'img/mobach_sgrafittogeel.jpg'),
(14, 'mobach_sgrafittogroen4', 'thumbs/mobach_sgrafittogroen4.png', 'img/mobach_sgrafittogroen4.png'),
(15, 'mobach_vissen', 'thumbs/mobach_vissen.png', 'img/mobach_vissen.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `thumbs`
--
ALTER TABLE `thumbs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `thumbs`
--
ALTER TABLE `thumbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
